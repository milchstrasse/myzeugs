<?php if($el->showtitle()->isTrue()): ?>
  <h2>
    <?= $el->title() ?>
  </h2>
<?php endif ?>

<?php if($el->text()->NotEmpty()): ?>
    <?= $el->text()->kirbytext() ?>
<?php endif ?>

<div class="maps">
  <?= $el->mapscode()->kirbytext(); ?>
</div>