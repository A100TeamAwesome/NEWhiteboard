<!doctype html>


<html>
<head>
    <meta charset="utf-8" />
    <style>
        #header {
            background: url("<?php bloginfo('stylesheet_directory'); ?> /images/header.jpg") no-repeat bottom center;
            height:120px;
        }
        #headerimg  {
            height: 120px; 
            width: 500px; 
        }
        h1 {
            display: none 
        }
    </style>
    <title><?php bloginfo('title')?></title>
    <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>" />
    <?php wp_head()?>
</head>

<header>
    <div id="header" onclick="location.href='<?php bloginfo('url') ?>';" style="cursor: pointer;">
     <div id="headerimg">
       <h1>
        <a href="<?php echo get_option('home'); ?>">
           <?php bloginfo('name'); ?></a>
       </h1>
      </div>
    </div>
    
</header>

<div id="container">
