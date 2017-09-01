<header>
  <?php if($container->showtitle()->isTrue()): ?>
    <h1 class="accent"><?= $container->title() ?></h1>
  <?php endif ?>
  
  <?php if($container->subline()->isNotEmpty()): ?>
      <?= $container->subline()->kirbytext() ?>
  <?php endif ?>
  
  
  <?php snippet('elemente', array('container' => $container, 'position' => 'header')); ?>
  
</header>
