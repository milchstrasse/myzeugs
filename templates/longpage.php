<?php snippet('header'); ?>
<?php snippet('body_bgimg'); ?>
<?php snippet('banner') ?>

<div class='wrapper'> 
  <main id='main' class='longpage'>

    <?php 
      if ($aside = $page->children()->findBy('intendedTemplate','aside')){
        snippet('aside', array('data' => $aside));
      }
    ?>
    
    <?php ecco($page->showtitle()->isTrue(), "<h1>".$page->title()."</h1>") ?>
    <?php
      // get the open item on the first level
      if($root = $pages->findOpen()) {
        // get visible children for the root item
        $items = $root->children()->visible();
      }

      // eine Longpage enthält nur Container (verschiedene Formen)
      foreach($items as $container) {
        //snippet('container');
        snippet($container->intendedTemplate(), array('container' => $container));
      }
    ?>    
    
  </main><!-- Ende Main -->
  <?php if($page->showfz()->isTrue()){
    snippet('pag_customfz');
  }
  ?>
  <?php snippet('footer') ?>
</div><!-- Ende Wrapper -->


