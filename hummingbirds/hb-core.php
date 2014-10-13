<?php

require( dirname(__FILE__) . '/hb-verify.php');

include( dirname( __FILE__ ) . '/hb-config.php' );


$_hb_filters = array();
// <<pageName, pageFilename>>
$_hb_pages = array();
$_hb_cur_page_filename = '';


/**
 * quick call user filter function
 *
 * @access private
 *
 * @param string $key the filter key
 * @param string $text the content of filter, Defalut ''.
 */
function _hb_call_filter($key, $text = '') {
    global $_hb_filters, $_hb_cur_page_filename;

    $filters = &$_hb_filters[$_hb_cur_page_filename];
    if(!empty($filters) && !empty($filters[$key])) {
        call_user_func($filters[$key], $text);
    }
}

/**
 * @access private
 */
function _get_alink($text, $url, $title = '') {
    return "<a href='$url' title='$title'>$text</a>";
}

function hb_add_page($page_name, $filename) {
    global $_hb_pages;
    $_hb_pages[] = array($page_name, $filename);
}

/**
 * add a filter
 * 
 * @global $_hb_filters
 * @param string $key [hb_title hb_script hb_style hb_body_main hb_body_end]
 * @param string|array $func_name function name
 * @param string $filename the file name of page
 */
function hb_add_filter($key, $func_name, $filename) {
    global $_hb_filters;

    $filters = &$_hb_filters[$filename];
    if (empty($filters)) {
        $filters = array();
        $_hb_filters[$filename] = &$filters;
    }
    $filters[$key] = $func_name;
}


/** print title */
function hb_title() { _hb_call_filter('hb_title'); }
/** print style at head */
function hb_style() { _hb_call_filter('hb_style'); }
/** print sprite at head */
function hb_script() { _hb_call_filter('hb_script'); }
/** print content at main of DOM's body */
function hb_body_main() { _hb_call_filter('hb_body_main'); }
/** print content at end of body */
function hb_body_end() { _hb_call_filter('hb_body_end'); }
/** print nav */
function hb_body_nav() {
    global $_hb_pages;
    $nav = '<nav>';

    if (defined('HB_NAV_HOME_NAME') && defined('HB_NAV_HOME_LINK')) {
        $home_name = HB_NAV_HOME_NAME;
        $home_link = HB_NAV_HOME_LINK;
        if (!empty($home_name) && !empty($home_link)) {
            $nav .= _get_alink($home_name, $home_link);
        }
    }

    $site_url = HB_SITE_URL;
    $site_url = empty($site_url) ? '' : $site_url;
    foreach ($_hb_pages as $link_arr) {
        $nav .= _get_alink($link_arr[0], $site_url . $link_arr[1]);
    }
    echo $nav . '</nav>';
}

function hb_do_web($filename) {
    global $_hb_cur_page_filename;
    $_hb_cur_page_filename = $filename;
    include(dirname( __FILE__ ) . '/hb-template.php');
}


function _hb_inclue_pages() {
    $path = dirname(__FILE__) . '/';
    if (defined('HB_PAGE_PATH')) {
        $path = HB_PAGE_PATH;
        if (!empty($path) && substr($path, -1) != '/') {
            $path .= '/';
        }
    }
    $n = 1;
    while (defined('HB_PAGE' . $n)) {
        $page = constant('HB_PAGE' . $n);
        if (empty($page)) {
            break;
        }
        include($path . $page);
        $n += 1;
    }
}

/** include all page */
_hb_inclue_pages();

?>
