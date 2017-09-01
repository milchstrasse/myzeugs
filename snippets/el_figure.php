<?php if($el->showtitle()->isTrue()): ?>
  <h2>
    <?= $el->title() ?>
  </h2>
<?php endif ?>

<?php foreach($el->images() as $image): ?>
  <?php if($image->hide()->isFalse()): ?>
    <figure>
        <img src="<?php echo $image->url() ?>" 
             alt="<?php echo $image->alt() ?>"
             width="100%"
             height="auto"
        >
      <figcaption>
        <?= $image->caption() ?>
      </figcaption>
    </figure>
  <?php endif ?>
<?php endforeach ?>