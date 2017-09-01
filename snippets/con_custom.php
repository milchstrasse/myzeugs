<div id="<?= $container->uid() ?>" 
     class="<?= $container->intendedTemplate() ?> <?= $container->layout() ?>"
     <?php if($image = $container->image($container->bgimg())): ?>
     style="background-image: url(<?= $image->url() ?>)"
     <?php endif ?>
>
  <article class='<?= $container->layout() ?>'>
    <?php snippet('con_header', array('container' => $container)); ?>
    <div><p>folgendes snippet wird ausgeführt: <em><?= $container->snippet() ?></em></p></div>
    <?php snippet($container->snippet()); ?>
    <?php snippet('elemente', array('container' => $container, 'position' => 'newarea')); ?>
  </article>
</div><!--Ende Container "<?php echo $container->title() ?>" -->