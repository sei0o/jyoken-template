<!DOCTYPE html>
<html>
  <head lang="ja">
    <meta charset="utf-8">
    <title><? echo wp_title(' | ', true, "right"); ?><? bloginfo('name') ?></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div id="wrapper">
      <nav id="page_nav">
        <ul>
          <li><h1 class="brand"><a href="<? echo home_url(); ?>"><? bloginfo('name'); ?></a></h1></li>
          <li><a href="#">TOP</a></li>
          <li><a href="#">活動</a></li>
          <li><a href="#">ほげほげ班</a></li>
          <li><a href="#">どどどど班</a></li>
          <li><a href="#">高専祭B.C.996</a></li>
          <li><a href="#">Twitter</a></li>
        </ul>
      </nav>
      <main id="page_container">
        <? if (have_posts()): ?>
          <? while(have_posts()): the_post(); ?>
            <article class="post">
              <header class="post_header">
                <h1><? the_title(); ?></h1>
                <? the_category(); ?>
                <div class="post_tags"></div>
              </header>
              <div class="post_content">
                <? the_content(); ?>