<?php

/**
 *
 */

if (is_admin()) {
    new csv();
}

class csv
{
    public function __construct()
    {
        add_action('admin_menu', array( $this, 'admin_menu' ));
    }
    public function admin_menu()
    {
        // add sub menu to setting
        add_options_page(
        'add_options_page',
        'Field Keys',
      'manage_options',
      'acf_repeate_field-setting-menu',
      array( $this , 'render_form')
    );
    }

    public function render_form()
    {
        require_once dirname(__FILE__) . '/templates/setting_page.php';
    }
}
