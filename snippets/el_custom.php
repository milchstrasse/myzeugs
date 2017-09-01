<?php if($el->showtitle()->isTrue()): ?>
  <h2>
    <?= $el->title() ?>
  </h2>
<?php endif ?>

<?php snippet($el->snip(), array('el' => $el)); ?>