<?php 
function global_varibales() {
    
    global $hotBurger;
    $hotBurger = array(
        'Facebook' => 'https://www.facebook.com/',
        'Twitter' => 'https://twitter.com/',
        'Instagram' => 'https://www.youtube.com/',
        'Youtube' => 'https://www.instagram.com/',
        
    );
}
add_action('parse_query', 'global_varibales');
