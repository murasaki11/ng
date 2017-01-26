<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title><?php wp_title(':', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootswatch/3.2.0/flatly/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="stylesheet" href="//yandex.st/highlightjs/8.2/styles/github.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
</head>
<body>

<nav class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">
        <div id="navbar-main">
            <ul class="nav navbar-nav">
                <li><a href="http://murasaki11.com/">Home</a></li>
                <li class="active"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Blog</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="">
                        Archives <span class="caret"> </span>
                    </a>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                        <?php wp_get_archives('type=monthly'); ?>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="">
                        Tags <span class="caret"> </span>
                    </a>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                        <?php
                        $tags = get_terms("post_tag", "fields=all");
                        foreach ($tags as $tag):
                            echo "<li><a href=\"".esc_url(home_url('/'))."tag/".$tag->name."\">".$tag->name."</a></li>";
                        endforeach;
                        ?>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="https://github.com/murasaki11"><i class="fa fa-github"></i></a></li>
                <li><a href="https://twitter.com/murasaki11"><i class="fa fa-twitter"></i></a></li>
                <li><a href="<?php echo home_url('/rss'); ?>"><i class="fa fa-rss"></i></a></li>
            </ul>
        </div>
    </div>
</nav>
<header class="page-header text-center" role="header">
    <h1><a href="<?php bloginfo('url'); ?>"><small><i class="fa fa-windows"></i></small><?php bloginfo('name'); ?></a></h1>
</header>

<div class="container" role="content">
