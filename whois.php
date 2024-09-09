<?php
/**
 * by: danran
 * wechat: yyy5858588
 * date: 2024-09-07
 */
// 数据参考根区数据库 https://www.iana.org/domains/root/db
error_reporting(0);
$whoisJson = file_get_contents('whois.json');
$whoisServers = json_decode($whoisJson, true);

// 获取 WHOIS 记录的处理函数
function getWhoisRecord($domain) {
    global $whoisServers;

    $whoisServer = getWhoisServer($domain);
    if (!$whoisServer) {
        return jsonResponse([
            'domain' => $domain,
            'error' => 'Unknown TLD'
        ], 400);
    }

    $conn = fsockopen($whoisServer, 43);
    if (!$conn) {
        return jsonResponse([
            'domain' => $domain,
            'error' => "Failed to connect to WHOIS server $whoisServer"
        ], 500);
    }

    fwrite($conn, $domain . "\r\n");
    $result = '';

    while (!feof($conn)) {
        $result .= fgets($conn, 128);
    }
    fclose($conn);
    // 移除结果中的 \r 字符
    $result = str_replace("\r", "", $result);
    return jsonResponse([
        'domain' => $domain,
        'whois' => $result
    ]);
}

// 辅助函数：将 JSON 响应发送给客户端
function jsonResponse($response, $statusCode = 200) {
    http_response_code($statusCode);
    header('Content-Type: application/json');
    echo json_encode($response);
}

// 辅助函数：根据域名获取 WHOIS 服务器地址
function getWhoisServer($domain) {
    global $whoisServers;

    $parts = explode('.', $domain);
    if (count($parts) < 2) {
        return '';
    }

    $tld = end($parts);

    $whoisServer = $whoisServers[$tld] ?? '';

    if (!$whoisServer) {
        // 如果是IP地址
        if (filter_var($domain, FILTER_VALIDATE_IP)) {
            return 'whois.apnic.net';
        }

        return 'whois.iana.org';
    }

    return $whoisServer;
}

// 使用：http://localhost/whois.php?domain=rw2.cc
if (isset($_GET['domain'])) {
    echo getWhoisRecord($_GET['domain']);
}