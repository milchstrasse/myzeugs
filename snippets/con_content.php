<div  class='content'>
  <div class="textarea">
    <?= $container->text()->kirbytext() ?>
  </div>
  
  <?php snippet('elemente', array('container' => $container, 'position' => 'content')); ?>
  
</div>

