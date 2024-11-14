# LaFleur Settings Plugin

LaFleur Settings Plugin is a WordPress plugin that provides additional functionality for your website, allowing easy management of various LaFleur Hosting site management and configuration tools without the need for manual coding. The plugin focuses on integrating Google Tag Manager functionality within your WordPress website, streamlining your configuration and data collection processes.

## Features:

- **Simple and User-friendly Interface**: Navigate with ease.
- **Google Tag Manager Integration**: Seamlessly integrate GTM scripts into your website.
    - Fetch Universal Analytics and Google Analytics 4 identifiers automatically through GTM.
    - Supports the addition of the Minimal User Interaction script to the website's footer.
    - Track user interactions like mousemove, scroll, focus, and touchstart through the Minimal User Interaction script.
- **Customizable Configuration**: Easily configure settings through the WordPress admin panel.

## Installation:

1. Download the latest version of the plugin from the [releases](https://gitlab.com/lafleur2/lafleur-settings-plugin/-/releases/) page.
2. Log in to your WordPress admin panel.
3. Navigate to **Plugins > Add New**.
4. Click on the **Upload Plugin** button and select the downloaded ZIP file.
5. Click **Install Now** and wait for the installation to complete.
6. Once activated, navigate to the plugin's settings page: **WordPress admin panel > Settings > LaFleur Plugin**.

## Contributing:
The settings plugin uses an update scheme where a new branch will automatically update Wordpress sites.
Because of that, the `master` branch is not necessarily the most up-to-date version: please ensure that
you are checking out the most updated branch when you update the code.

TODO: create a git hook to sync the master branch with the most recent branch

This assumes you know how to work with Git.

The repo for this project is https://gitlab.com/lafleur2/lafleur-settings-plugin/

When you are ready to deploy, create a new branch for your version number, i.e.:

```
git branch -b 1.1.5
git add -A
git commit -m "create 1.1.5 branch for deploy"
git push -u origin 1.1.5
```

Once you've got it deployed, you need to make a release.

Log into Gitlab and  https://gitlab.com/lafleur2/lafleur-settings-plugin/-/releases/ and create a new release.

Create a new tag that begins with the letter v and includes your version number (i.e.: v1.1.5), and make sure 
to select your branch from the "source" list. Give it a release title, date, and release notes

When you're done, click "Create Release"

Over the next 12 hours, Wordpress sites that use a version of this plugin that is v1.1.2 or higher and have 
automatic updates on, the plugin will roll out. It will immediately be available for manual updates.

## Usage:

- **Plugin Permissions**: To modify the settings in this plugin, the user's email domain must contain `@lafleur.marketing`
- **Setting Up Google Tag Manager**: Enter your GTM ID in the plugin settings. Ensure that the ID begins with `GTM-`.
- **Minimal User Interaction Script**: If you enable this feature in the settings, add a custom event trigger in your GTM that listens for the `minimal-user-interaction` event.

## Frequently Asked Questions:

**Q: Can I use this plugin with any Google Tag Manager account?**

A: Yes. Simply enter your Google Tag Manager ID in the plugin settings. Ensure to include `GTM-` at the beginning of the ID.

**Q: How do I retrieve the Universal Analytics and Google Analytics 4 identifiers?**

A: There's no need to manually fetch them. UA and GA4 identifiers should be delivered through GTM. Provide only the GTM code in the settings.

**Q: Can I enable the Minimal User Interaction script for specific pages only?**

A: Currently, MUI is enabled across all pages. For it to function correctly, add a Custom Event trigger in Google Tag Manager that listens for the `minimal-user-interaction` event.

## Support:

For support, feature requests, or bug reports, open an [issue](https://gitlab.com/lafleur2/lafleur-settings-plugin/-/issues) on the GitLab repository.

## Author:
LaFleur Marketing

## Changelog

**Version 1.1.5**
- Add "superuser" status determined by user email domain & WP admin rights
- Update readme.md

**Version 1.1.4**
- Various improvements and bug fixes.


## License:
This plugin is proprietary software, and unauthorized distribution is prohibited.

**Note**: Always backup your website before installing or updating any plugin. Check for compatibility with your WordPress version and other plugins.

Thank you for choosing the LaFleur Settings Plugin. We hope it optimizes your website's performance and user experience.