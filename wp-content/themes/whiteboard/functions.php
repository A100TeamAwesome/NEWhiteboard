<?php

register_sidebar(array(
    'name' => __('1st Right Sidebar'),
    'id' => 'first-right-sidebar',
    'description' => 'First sidebar',
    'before_widget' => '<div>',
    'after_widget' => '</div>'
));

register_sidebar(array(
    'name' => __('2nd Right Sidebar'),
    'id' => 'second-right-sidebar',
    'description' => 'Second sidebar',
    'before_widget' => '<div>',
    'after_widget' => '</div>'
));

register_sidebar(array(
    'name' => __('3rd Right Sidebar'),
    'id' => 'third-right-sidebar',
    'description' => 'Third sidebar',
    'before_widget' => '<div>',
    'after_widget' => '</div>'
));

register_sidebar(array(
    'name' => __('Left Sidebar'),
    'id' => 'left-sidebar',
    'description' => 'Left sidebar',
    'before_widget' => '<div>',
    'after_widget' => '</div>'
));
