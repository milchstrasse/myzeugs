<?php if ($elemente = $container->children()->visible()->filterBy('position', 'newarea')): ?>

  <?php foreach($elemente as $el): ?>
    <div id="<?= $el->uid() ?>" class="newarea <?= $el->intendedTemplate() ?>">
      <?php if($el->showtitle()): ?>
        <h1><?= $el->title() ?></h1>
      <?php endif ?>
      <?php snippet($el->intendedTemplate(), array('el' => $el)); ?>
    </div>
  <?php endforeach ?>

<?php endif ?>