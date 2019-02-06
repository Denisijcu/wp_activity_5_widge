<?php
/**
* @package Title Gidge
* @version 0.0.1
*/
/*
Plugin Name: Title Gidge
Plugin URI: http://wordpress.org/plugins/hello-dolly/
Description: Just a text
Author: Denis Sanchez
Version: 1.7.1
Author URI: http://dleyva@techlaunch.io/
*/

// register My_Widget

add_action('widgets_init', function(){
register_widget('TitleWidget');

});

class TitleWidget extends WP_Widget {
/** constructor */
function TitleWidget() {
parent::WP_Widget(false, $name = 'TitleWidget');    
}

/** @see WP_Widget::widget */
function widget($args, $instance) {     
extract( $args );
$current_user = wp_get_current_user();
$title = apply_filters('widget_title', $instance['title']);
?>
<?php echo $before_widget; ?>
<?php if ( $title )
echo $before_title . $title . $after_title; ?>
Hello $echo $current_user();
<?php echo $after_widget; ?>
<?php
}

/** @see WP_Widget::update */
function update($new_instance, $old_instance) {             
    $instance = $old_instance;
    $instance['title'] = strip_tags($new_instance['title']);
return $instance;
}



} // clase FooWidget

?>