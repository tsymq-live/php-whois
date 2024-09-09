# WHOIS 查询工具 / WHOIS Lookup Tool

## 简介 / Introduction

这是一个简单的PHP WHOIS 查询工具，允许用户查询域名或 IP 地址的 WHOIS 信息。该工具提供了用户友好的界面，支持多语言，并具有历史记录和截图功能。

This is a simple PHP WHOIS lookup tool that allows users to query WHOIS information for domain names or IP addresses. The tool provides a user-friendly interface, supports multiple languages, and features search history and screenshot functionality.

## 在线演示 / Online Demo

[https://whois.rw2.cc/](https://whois.rw2.cc/)


## 功能 / Features

- WHOIS 信息查询 / WHOIS information lookup
- 多语言支持（中文简体、中文繁体、英语、俄语、西班牙语）/ Multi-language support (Simplified Chinese, Traditional Chinese, English, Russian, Spanish)
- 查询历史记录 / Search history
- WHOIS 信息截图 / WHOIS information screenshot
- 响应式设计 / Responsive design

## whois.json

这个文件包含了顶级域名(TLD)及其对应的WHOIS服务器信息。它是一个JSON格式的对象,其中:
- 键(key)是顶级域名,包括通用顶级域名(gTLD)、国家代码顶级域名(ccTLD)和国际化域名(IDN) TLD。
- 值(value)是对应的WHOIS服务器地址。如果值为null,则表示该TLD没有指定的WHOIS服务器或者信息不可用。

This file contains information about numerous Top-Level Domains (TLDs) and their corresponding WHOIS servers. It is a JSON object where:
- The keys are TLDs, including generic TLDs (gTLDs), country code TLDs (ccTLDs), and Internationalized Domain Name (IDN) TLDs.
- The values are the addresses of the corresponding WHOIS servers. A null value indicates that no specific WHOIS server is designated for that TLD or the information is unavailable.


## 技术栈 / Tech Stack

- 前端 / Frontend: HTML, CSS (Tailwind CSS), JavaScript (jQuery)
- 后端 / Backend: PHP
- 其他库 / Other libraries: i18next, dom-to-image, clipboard.js

## 安装 / Installation

1. 克隆仓库 / Clone the repository:
   ```
   git clone https://github.com/yourusername/whois-lookup-tool.git
   ```

2. 将文件放置在您的 Web 服务器目录中 / Place the files in your web server directory.

3. 确保您的 Web 服务器支持 PHP / Ensure your web server supports PHP.

4. 访问 `index.html` 文件以使用该工具 / Access the `index.html` file to use the tool.

## 使用方法 / Usage

1. 在输入框中输入域名或 IP 地址 / Enter a domain name or IP address in the input field.
2. 点击"查询"按钮或按回车键 / Click the "Search" button or press Enter.
3. 查看 WHOIS 信息概览和原始信息 / View the WHOIS information overview and original information.
4. 可以使用截图功能保存信息 / Use the screenshot feature to save the information.
5. 查看和使用查询历史记录 / View and use the search history.

## 伪静态规则 / Pseudo-static Rules
```
location / {
    try_files $uri $uri/ /index.html;
}
```

## 贡献 / Contributing

欢迎贡献！请随时提交 pull requests 或创建 issues 来改进这个项目。

Contributions are welcome! Feel free to submit pull requests or create issues to improve this project.

## 许可证 / License

本项目采用 MIT 许可证。详情请见 [LICENSE](LICENSE) 文件。

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

## 联系方式 / Contact

如有任何问题或建议，请联系：
For any questions or suggestions, please contact:

- 微信 / WeChat: yyy5858588
- 邮箱 / Email: tsymq@live.com
