# Page Visit Counter

**Plugin Name:** Page Visit Counter
**Description:** A simple plugin to count page visits.
**Version:** 1.0
**Author:** Bhavya Gupta

## Description

The Page Visit Counter is a WordPress plugin designed to track and display the number of visits to individual pages or posts on your WordPress website. It also provides information about active users and the time spent on the page.

## Features

- Counts the number of times a page or post is visited.
- Displays the current visit count.
- Provides a secure "Reset Visit Count" option for administrators.

## Installation

1. Download the plugin ZIP file from the [GitHub repository](https://github.com/your-plugin-repo-url).

2. Log in to your WordPress dashboard.

3. Go to "Plugins" > "Add New."

4. Click the "Upload Plugin" button.

5. Choose the ZIP file you downloaded in step 1.

6. Click "Install Now" and then "Activate Plugin."

## Usage

Once the plugin is activated, it will automatically track and display page visit counts on individual pages and posts. You can view the visit count by visiting the respective page or post.

### Resetting Visit Count

- Administrators can reset the visit count for a specific page or post by editing that page or post in your WordPress dashboard and clicking the "Reset Visit Count" button.

## Security Enhancements

This plugin has been enhanced with security features to ensure safe usage:

- Data validation and sanitization to prevent SQL injection and XSS attacks.
- Permissions and capability checks to restrict access to sensitive functions.
- Use of nonces to protect against CSRF attacks.
- Output escaping to prevent XSS vulnerabilities.
- Error handling and logging for better error management.

## Frequently Asked Questions

### How can I customize the display of the page visit count?

The display of the page visit count can be customized by modifying the `display_page_visit_counter` function in the plugin code. You can change the way the count is presented or add additional information.

### Can I reset the visit count for a specific page or post?

Yes, administrators can reset the visit count for a specific page or post by editing that page or post in your WordPress dashboard and clicking the "Reset Visit Count" button.


## Changelog

### 1.0
- Initial release.

## Support

For support or questions related to this plugin, please contact the author, Bhavya Gupta, at [your-email@example.com](mailto:your-email@example.com).

## Contributing

Contributions are welcome! Feel free to open issues or submit pull requests on the [GitHub repository](https://github.com/your-plugin-repo-url).

## License

This plugin is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details.
