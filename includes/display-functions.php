<?php
/**
 * Created by PhpStorm.
 * User: Robert Wilde
 * Date: 23/04/2014
 * Time: 12:58 PM
 */

add_shortcode('twc-code', function() {
    return 'here is the plugin stuff';
});

function pretty_printr($variable, $title = ''){

    echo '<code><pre>';
    echo '<strong>'. $title .' : </strong>';
    print_r($variable);
    echo '</pre></code>';

}

add_shortcode('twc-user-role', function($atts) {

    $user_data = '';
    extract($atts);

    get_currentuserinfo();
    global $current_user;

    /** @var $atts STRING */
    switch ($user_data) {
        case 'role';
            $user_roles = $current_user->roles;
            return $user_roles[0];
            break;
        case 'user_login';
            $user_roles = $current_user->data;
            return $user_roles->user_login;
            break;
        case 'display_name';
            $user_roles = $current_user->data;
            return $user_roles->display_name;
            break;
        case 'user_email';
            $user_roles = $current_user->data;
            return $user_roles->user_email;
            break;
    }
});

function wtc_file_path( $full_file_path ){

    $theme_directory = ( is_child_theme() )
        ? get_stylesheet_directory()
        : get_template_directory();

    $relative_file_path = str_replace($theme_directory,'',$full_file_path );

    $theme_name = wp_get_theme();

    echo $theme_name .' - ' . $relative_file_path;
}