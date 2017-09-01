<?php if($el->showtitle()->isTrue()): ?>
  <h2>
    <?= $el->title() ?>
  </h2>
<?php endif ?>

<canvas id=canvas_<?=$el->title() ?> height="300">
  Beispiel für ein Rechteck mit Canvas
</canvas>

<?php echo js('assets/js/'.$el->jsfile().'.js') ?>