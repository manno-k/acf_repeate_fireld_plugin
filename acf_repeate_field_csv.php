<?php
/*
Plugin Name: ACF repeate field CSV
Plugin URI: https://awe-some.net/
Description: Plugin to use impote csv of ACF repeate field
Version: 0.0.1
Author: AWESOME Co.,Ltd
Author URI: https://awe-some.net/
License: GPLv2
*/
/***************************************************************
 * Admin page
 ***************************************************************/
require_once 'admin/admin.php';
/***************************************************************
 * Plugin code
 ***************************************************************/
function rsci_meta_filter($meta, $post, $is_update)
{
    $meta_array = array();
    $repeater_array = array();
    $name1 = get_option('name1');
    $name2 = get_option('name2');
    $name3 = get_option('name3');
    $name4 = get_option('name4');

    foreach ($meta as $key => $value) {
        for ($i=0; $i < 9; $i++) {
            if ($key == $name1.'_'.$i) {
                $repeater_array[$i][$name1] = $value;
            } elseif ($key == $name2.'_'.$i) {
                $repeater_array[$i][$name2] = $value;
            } elseif ($key == $name3.'_'.$i) {
                $repeater_array[$i][$name3] = $value;
            } elseif ($key == $name4.'_'.$i) {
                $repeater_array[$i][$name4] = $value;
            } else {
                $meta_array[$key] = $value;
            }
        }
    }
    $key = get_option('acf_field_key');
    // 繰り返しフィールドの配列を戻す
    $meta_array[$key] = $repeater_array;
    return $meta_array;
}
add_filter('really_simple_csv_importer_save_meta', 'rsci_meta_filter', 10, 3);
