<!DOCTYPE html>
<html lang="de">
<head>
  <?php snippet('scss') ?> 
  <meta charset="utf-8" />
  <?php echo $site->fonts() ?>
  <?php echo $site->icons() ?>
  
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
    
  <?php echo css('assets/css/default.css', 'screen') ?>
  <?php snippet("head_styles") ?>
</head>
<body id="top" class="<?= $site->bantyp() ?>">