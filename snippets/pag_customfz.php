<?php // individuelle Fusszeile bei Bedarf
//       diese ist als eigene Seite angelegt, hat aber fast die gleichen Eigenschaftn wie ein Container
?>

<?php if($cfz = $site->children()->findBy('intendedTemplate','customfz')): ?>

  <div id="<?= $cfz->uid() ?>" 
       class="container <?= $cfz->intendedTemplate() ?> <?= $cfz->layout() ?>"
       <?php if($image = $cfz->image($cfz->bgimg())): ?>
       style="background-image: url(<?= $image->url() ?>)"
       <?php endif ?>
  >
    <article class='<?= $cfz->layout() ?>'>
      <?php snippet('con_header', array('container' => $cfz)); ?>
      <?php snippet('con_content', array('container' => $cfz)); ?>
      <?php snippet('elemente', array('container' => $cfz, 'position' => 'newarea')); ?>
    </article>
  </div><!--Ende Container "<?php echo $cfz->title() ?>" -->

<?php endif ?>