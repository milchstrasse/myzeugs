<?php if($elemente = $container->children()->visible()->filterBy('position', $position)): ?>

  <?php foreach($elemente as $el): ?>
    <div id="<?= $el->uid() ?>" class="<?= $position ?> <?= $el->intendedTemplate() ?>">
      <?php snippet($el->intendedTemplate(), array('el' => $el)); ?>
    </div>
  <?php endforeach ?>
<?php endif ?>