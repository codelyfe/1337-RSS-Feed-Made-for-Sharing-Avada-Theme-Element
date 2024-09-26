Here's a `README.md` format explaining how to use the updated plugin that allows customization for RSS feeds in WordPress, including Avada builder support and the ability to display images from RSS feeds.

---

# 1337 RSS Feed | Made for Sharing - Avada Element

**Version:** 0.6.4  
**Author:** [codelyfe@gmail.com](mailto:codelyfe@gmail.com)  
**Description:** A highly customizable RSS Feed widget as an Avada Fusion Builder Element for WordPress. This plugin allows you to add an RSS feed block with various customization options, including displaying feed images, stripping HTML from the description, and more.

---

## Features
- Integrates with Avada Fusion Builder for easy drag-and-drop customization.
- Supports multiple customizations such as:
  - RSS feed title color and size
  - RSS feed post count
  - Background color customization
  - Option to display post date and description
  - Option to open links in a new tab
  - Option to strip HTML from descriptions
  - Option to display RSS feed images if available
  - Custom CSS class for additional styling

---

## Installation

1. Download or clone the plugin to your WordPress installation.
2. Upload the plugin folder to the `/wp-content/plugins/` directory.
3. Activate the plugin through the "Plugins" menu in WordPress.
4. Go to Avada > Fusion Builder to find the `1337 RSS Feed` element.

---

## How to Use the Plugin

### Avada Fusion Builder

1. **Open Avada Fusion Builder:**
   - Create or edit a page in WordPress.
   - Click on the "Fusion Builder" option to launch the builder.

2. **Add RSS Feed Block:**
   - In the Fusion Builder, search for the element named `1337 RSS Feed`.
   - Drag and drop the element into your layout.

3. **Customize the RSS Feed Block:**
   - Once added, click on the element to customize it. You will find the following customization options:
   
     - **RSS Feed URL:** Enter the RSS feed URL to fetch the feed.
     - **RSS Feed Title:** Add a title for the RSS feed.
     - **Number of Posts:** Specify how many posts to display from the feed.
     - **Title Color:** Set the color of the feed title.
     - **Title Font Size:** Define the font size for the feed title.
     - **Date Color & Font Size:** Customize the color and size of the post date.
     - **Description Text Color & Font Size:** Customize the color and size of the post description.
     - **Show Post Date:** Toggle whether to show the post date (`Yes`/`No`).
     - **Show Post Description:** Toggle whether to show the post description (`Yes`/`No`).
     - **Open Links in New Tab:** Toggle whether to open links in a new tab (`Yes`/`No`).
     - **Strip HTML from Description:** Choose whether to strip HTML from the description (`Yes`/`No`).
     - **Display RSS Feed Image:** Toggle whether to display the RSS feed image if available (`Yes`/`No`).
     - **Background Color:** Set a background color for the RSS feed block.
     - **Custom CSS Class:** Add a custom class for additional styling.

4. **Publish Your Page:** Once you're happy with the layout and customization, publish or update your page.

---

## Shortcode Usage

If you're not using Avada and prefer to use shortcodes, the plugin also provides a shortcode option. Here's how you can use it:

```php
[eliterssfeed rssurl="YOUR_RSS_FEED_URL" rsstitle="Feed Title" postcount="5" tcolor="#000000" tfsize="16px" dcolor="#999999" dfsize="12px" desc_color="#333333" desc_font_size="14px" show_date="yes" show_desc="yes" open_in_new_tab="yes" strip_html="no" show_image="yes" bgcolor="#ffffff" custom_class="custom-style"]
```

### Available Attributes for the Shortcode

- `rssurl` (string) - The URL of the RSS feed.
- `rsstitle` (string) - The title for the RSS feed.
- `postcount` (number) - Number of posts to display (default: 5).
- `tcolor` (string) - Title color in hex code (default: `#000000`).
- `tfsize` (string) - Title font size (default: `16px`).
- `dcolor` (string) - Date color in hex code (default: `#999999`).
- `dfsize` (string) - Date font size (default: `12px`).
- `desc_color` (string) - Description text color in hex code (default: `#333333`).
- `desc_font_size` (string) - Description font size (default: `14px`).
- `show_date` (yes/no) - Whether to display the post date (default: `yes`).
- `show_desc` (yes/no) - Whether to display the post description (default: `yes`).
- `open_in_new_tab` (yes/no) - Whether to open links in a new tab (default: `yes`).
- `strip_html` (yes/no) - Whether to strip HTML from the description (default: `no`).
- `show_image` (yes/no) - Whether to display the feed image if available (default: `yes`).
- `bgcolor` (string) - Background color in hex code (default: `#ffffff`).
- `custom_class` (string) - Custom CSS class for additional styling.

---

## Example Usage in Shortcode

```php
[eliterssfeed rssurl="https://example.com/feed" rsstitle="Example Feed" postcount="10" show_image="yes" show_desc="no" bgcolor="#f4f4f4"]
```

This shortcode will display an RSS feed from `https://example.com/feed` with the following configuration:
- Title: "Example Feed"
- 10 posts displayed
- Images displayed
- Descriptions hidden
- Background color set to light grey (`#f4f4f4`).

---

## Changelog

**Version 0.6.4**
- Added option to display RSS feed images if available.
- Improved HTML stripping options for descriptions.
- Added customizable options for date and description display.
- Integrated with Avada Fusion Builder for drag-and-drop functionality.

---

## License
This plugin is licensed under the GPLv2 License. For more details, see the [LICENSE](https://www.gnu.org/licenses/gpl-2.0.html).

---

## Support
For support, join the community on [Facebook](https://fb.me/1337RSSFEED) or contact the author via [PayPal](https://www.paypal.me/codelyfe) for donations or questions.

---

This README provides all the necessary information to install, use, and customize the RSS feed plugin both in Avada Fusion Builder and via shortcode for non-Avada users.
