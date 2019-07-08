<?php function pet_data(){
    wp_enqueue_style('pet_adoption_style',get_stylesheet_uri());?>
<?php } ?>
<?php add_action('wp_enqueue_scripts','pet_data');?>
<?php function pagetitle(){
    add_theme_support('title_tag');?>
<?php } ?>
<?php add_action('after_setup_theme','pagetitle');