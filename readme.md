# LaFleur Settings Plugin

LaFleur Settings Plugin is a WordPress plugin that provides additional functionality for your website.

## Description

LaFleur Settings Plugin allows easy management of various LaFleur Hosting site management and configuration tools without manual coding.

## Features

- Simple and easy-to-use interface
- Integration with Google Tag Manager for script management
- Querying Google Tag Manager to fetch Universal Analytics and Google Analytics 4 identifiers
- Option to add the Minimal User Interaction script to the site's footer
- Customizable configuration options in the WordPress admin panel

## Installation

1. Download the latest version of the plugin from the [releases](https://gitlab.com/lafleur2/lafleur-settings-plugin/-/releases/) page.
2. Log in to your WordPress admin panel.
3. Go to "Plugins" > "Add New".
4. Click on the "Upload Plugin" button and select the plugin ZIP file.
5. Click "Install Now" and wait for the installation to complete.
6. Activate the plugin.
7. Navigate to the plugin settings page in the WordPress admin panel and configure your Google Tag Manager ID and other options.

## Frequently Asked Questions

**Q: How do I use the plugin?**

A: Once activated, the plugin is available under WordPress admin panel -> Settings -> LaFleur Plugin

**Q: Can I use this plugin with any Google Tag Manager account?**

A: Yes, you can use this plugin with any Google Tag Manager account. Simply enter your Google Tag Manager ID in the plugin settings. Make sure to include the GTM- at the beginning of the field.

**Q: How do I retrieve the Universal Analytics and Google Analytics 4 identifiers?**

A: You don't need to: UA and GA4 should be delivered through GTM. The only code you need to add to the settings is the GTM code.

**Q: Can I enable the Minimal User Interaction script for specific pages only?**

A: MUI is enabled on all pages. It will not work as expected until a Custom Event trigger to Google Tag Manager that listens for the event name "minimal-user-interaction"

## Support

For any issues or questions, please open an [issue](https://gitlab.com/lafleur2/lafleur-settings-plugin/-/issues) on the GitHub repository.