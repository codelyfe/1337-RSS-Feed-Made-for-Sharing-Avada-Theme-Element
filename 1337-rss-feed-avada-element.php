<?php
/*
Plugin Name: 1337 RSS Feed | Made for Sharing - Avada Element
Description: A highly customizable RSS Feed widget as an Avada Fusion Builder Element.
Version: 0.6.4
Author: codelyfe@gmail.com
Author URI: https://shipwr3ck.com
Text Domain: LightWRSSFeed
License: GPLv2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Network: True
*/

if (!defined('ABSPATH')) {
    exit;
}

// Load Text Domain
function eliterssfeed_load_textdomain() {
    load_plugin_textdomain('LightWRSSFeed', false, basename(dirname(__FILE__)) . '/languages');
}
add_action('plugins_loaded', 'eliterssfeed_load_textdomain');

// Register Custom Avada Element
function eliterssfeed_avada_element() {
    if (function_exists('fusion_builder_map')) {
        fusion_builder_map(
            array(
                'name' => esc_attr__('1337 RSS Feed', 'LightWRSSFeed'),
                'shortcode' => 'eliterssfeed',
                'icon' => 'fusiona-rss',
                'params' => array(
                    array(
                        'type' => 'textfield',
                        'heading' => esc_attr__('RSS Feed URL', 'LightWRSSFeed'),
                        'param_name' => 'rssurl',
                        'value' => '',
                        'description' => esc_attr__('Enter the RSS feed URL.', 'LightWRSSFeed'),
                    ),
                    array(
                        'type' => 'textfield',
                        'heading' => esc_attr__('RSS Feed Title', 'LightWRSSFeed'),
                        'param_name' => 'rsstitle',
                        'value' => '',
                        'description' => esc_attr__('Enter a title for the RSS feed.', 'LightWRSSFeed'),
                    ),
                    array(
                        'type' => 'textfield',
                        'heading' => esc_attr__('Number of Posts', 'LightWRSSFeed'),
                        'param_name' => 'postcount',
                        'value' => '5',
                        'description' => esc_attr__('How many posts to display.', 'LightWRSSFeed'),
                    ),
                    array(
                        'type' => 'colorpicker',
                        'heading' => esc_attr__('Title Color', 'LightWRSSFeed'),
                        'param_name' => 'tcolor',
                        'value' => '#000000',
                        'description' => esc_attr__('Color of the RSS title.', 'LightWRSSFeed'),
                    ),
                    array(
                        'type' => 'textfield',
                        'heading' => esc_attr__('Title Font Size', 'LightWRSSFeed'),
                        'param_name' => 'tfsize',
                        'value' => '16px',
                        'description' => esc_attr__('Font size of the RSS title.', 'LightWRSSFeed'),
                    ),
                    array(
                        'type' => 'colorpicker',
                        'heading' => esc_attr__('Date Color', 'LightWRSSFeed'),
                        'param_name' => 'dcolor',
                        'value' => '#999999',
                        'description' => esc_attr__('Color of the RSS post date.', 'LightWRSSFeed'),
                    ),
                    array(
                        'type' => 'textfield',
                        'heading' => esc_attr__('Date Font Size', 'LightWRSSFeed'),
                        'param_name' => 'dfsize',
                        'value' => '12px',
                        'description' => esc_attr__('Font size of the RSS post date.', 'LightWRSSFeed'),
                    ),
                    array(
                        'type' => 'colorpicker',
                        'heading' => esc_attr__('Description Text Color', 'LightWRSSFeed'),
                        'param_name' => 'desc_color',
                        'value' => '#333333',
                        'description' => esc_attr__('Color of the RSS post description text.', 'LightWRSSFeed'),
                    ),
                    array(
                        'type' => 'textfield',
                        'heading' => esc_attr__('Description Font Size', 'LightWRSSFeed'),
                        'param_name' => 'desc_font_size',
                        'value' => '14px',
                        'description' => esc_attr__('Font size of the description text.', 'LightWRSSFeed'),
                    ),
                    array(
                        'type' => 'radio_button_set',
                        'heading' => esc_attr__('Show Post Date', 'LightWRSSFeed'),
                        'param_name' => 'show_date',
                        'value' => array(
                            'yes' => esc_attr__('Yes', 'LightWRSSFeed'),
                            'no' => esc_attr__('No', 'LightWRSSFeed'),
                        ),
                        'default' => 'yes',
                        'description' => esc_attr__('Choose whether to show the post date.', 'LightWRSSFeed'),
                    ),
                    array(
                        'type' => 'radio_button_set',
                        'heading' => esc_attr__('Show Post Description', 'LightWRSSFeed'),
                        'param_name' => 'show_desc',
                        'value' => array(
                            'yes' => esc_attr__('Yes', 'LightWRSSFeed'),
                            'no' => esc_attr__('No', 'LightWRSSFeed'),
                        ),
                        'default' => 'yes',
                        'description' => esc_attr__('Choose whether to show the post description.', 'LightWRSSFeed'),
                    ),
                    array(
                        'type' => 'radio_button_set',
                        'heading' => esc_attr__('Open Links in New Tab', 'LightWRSSFeed'),
                        'param_name' => 'open_in_new_tab',
                        'value' => array(
                            'yes' => esc_attr__('Yes', 'LightWRSSFeed'),
                            'no' => esc_attr__('No', 'LightWRSSFeed'),
                        ),
                        'default' => 'yes',
                        'description' => esc_attr__('Open the RSS links in a new tab or not.', 'LightWRSSFeed'),
                    ),
                    array(
                        'type' => 'radio_button_set',
                        'heading' => esc_attr__('Strip HTML from Description', 'LightWRSSFeed'),
                        'param_name' => 'strip_html',
                        'value' => array(
                            'yes' => esc_attr__('Yes', 'LightWRSSFeed'),
                            'no' => esc_attr__('No', 'LightWRSSFeed'),
                        ),
                        'default' => 'no',
                        'description' => esc_attr__('Choose whether to remove HTML from the description.', 'LightWRSSFeed'),
                    ),
                    array(
                        'type' => 'radio_button_set',
                        'heading' => esc_attr__('Display RSS Feed Image', 'LightWRSSFeed'),
                        'param_name' => 'show_image',
                        'value' => array(
                            'yes' => esc_attr__('Yes', 'LightWRSSFeed'),
                            'no' => esc_attr__('No', 'LightWRSSFeed'),
                        ),
                        'default' => 'yes',
                        'description' => esc_attr__('Choose whether to display the image from the RSS feed if available.', 'LightWRSSFeed'),
                    ),
                    array(
                        'type' => 'colorpicker',
                        'heading' => esc_attr__('Background Color', 'LightWRSSFeed'),
                        'param_name' => 'bgcolor',
                        'value' => '#ffffff',
                        'description' => esc_attr__('Background color for the RSS feed block.', 'LightWRSSFeed'),
                    ),
                    array(
                        'type' => 'textfield',
                        'heading' => esc_attr__('Custom CSS Class', 'LightWRSSFeed'),
                        'param_name' => 'custom_class',
                        'value' => '',
                        'description' => esc_attr__('Add a custom CSS class for custom styling.', 'LightWRSSFeed'),
                    ),
                ),
            )
        );
    }
}
add_action('fusion_builder_before_init', 'eliterssfeed_avada_element');

// Shortcode for rendering the RSS feed
function eliterssfeed_shortcode($atts) {
    $args = shortcode_atts(
        array(
            'rssurl' => '',
            'rsstitle' => '',
            'postcount' => 5,
            'tcolor' => '#000000',
            'tfsize' => '16px',
            'dcolor' => '#999999',
            'dfsize' => '12px',
            'desc_color' => '#333333',
            'desc_font_size' => '14px',
            'show_date' => 'yes',
            'show_desc' => 'yes',
            'open_in_new_tab' => 'yes',
            'strip_html' => 'no',
            'show_image' => 'yes',
            'bgcolor' => '#ffffff',
            'custom_class' => '',
        ),
        $atts
    );

    $rssurl = esc_url($args['rssurl']);
    $rsstitle = esc_html($args['rsstitle']);
    $postcount = intval($args['postcount']);
    $tcolor = esc_attr($args['tcolor']);
    $tfsize = esc_attr($args['tfsize']);
    $dcolor = esc_attr($args['dcolor']);
    $dfsize = esc_attr($args['dfsize']);
    $desc_color = esc_attr($args['desc_color']);
    $desc_font_size = esc_attr($args['desc_font_size']);
    $show_date = esc_attr($args['show_date']);
    $show_desc = esc_attr($args['show_desc']);
    $open_in_new_tab = esc_attr($args['open_in_new_tab']) === 'yes' ? 'target="_blank"' : '';
    $strip_html = esc_attr($args['strip_html']);
    $show_image = esc_attr($args['show_image']);
    $bgcolor = esc_attr($args['bgcolor']);
    $custom_class = esc_attr($args['custom_class']);

    // Fetch RSS Feed
    $rss = new DOMDocument();
    @$rss->load($rssurl);
    $feed = array();

    foreach ($rss->getElementsByTagName('item') as $node) {
        $item = array(
            'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
            'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
            'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
            'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
            'image' => ($node->getElementsByTagName('enclosure')->length > 0) ? $node->getElementsByTagName('enclosure')->item(0)->getAttribute('url') : ''
        );
        array_push($feed, $item);
    }

    // Render Feed
    $output = '<div class="eliterssfeed-widget ' . $custom_class . '" style="background-color:' . $bgcolor . ';">';
    $output .= '<h2 style="color: ' . $tcolor . '; font-size: ' . $tfsize . ';">' . $rsstitle . '</h2>';
    $output .= '<ul>';

    for ($i = 0; $i < $postcount && $i < count($feed); $i++) {
        $title = esc_html($feed[$i]['title']);
        $link = esc_url($feed[$i]['link']);
        $date = date('F d, Y', strtotime($feed[$i]['date']));
        $desc = ($strip_html === 'yes') ? wp_strip_all_tags($feed[$i]['desc']) : $feed[$i]['desc'];
        $image = esc_url($feed[$i]['image']);

        $output .= '<li>';
        
        // Check if image exists and if showing images is enabled
        if ($show_image === 'yes' && !empty($image)) {
            $output .= '<img src="' . $image . '" alt="Feed Image" style="max-width: 100%; height: auto;"/><br/>';
        }

        $output .= '<strong><a href="' . $link . '" ' . $open_in_new_tab . '>' . $title . '</a></strong>';

        if ($show_date === 'yes') {
            $output .= '<br/><em style="color: ' . $dcolor . '; font-size: ' . $dfsize . ';">' . $date . '</em>';
        }

        if ($show_desc === 'yes') {
            $output .= '<p style="color: ' . $desc_color . '; font-size: ' . $desc_font_size . ';">' . $desc . '</p>';
        }

        $output .= '</li>';
    }

    $output .= '</ul>';
    $output .= '</div>';

    return $output;
}
add_shortcode('eliterssfeed', 'eliterssfeed_shortcode');
