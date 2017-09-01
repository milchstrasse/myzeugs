<?php // Ticker nur anzeigen, wenn der Zeitraum gegeben ist und der Text nicht leer
  $c=$container; 

  $dateA = strtotime($c->ashow());
  $dateE = strtotime($c->eshow());
  $dateH = strtotime(date("d.m.Y"));

  if($dateH >= $dateA AND ($dateH <= $dateE OR empty($dateE)) AND $c->text()->notEmpty()): 
?>


  <div id="<?= $c->uid() ?>" 
       class="container <?= $c->intendedTemplate() ?> <?= $c->layout() ?>"
       <?php if($image = $c->image($c->bgimg())): ?>
       style="background-image: url(<?= $image->url() ?>)"
       <?php endif ?>
  >
    <article class="ticker-wrap">
      <div class="ticker">
        <?= $c->text()->kirbytext() ?>
      </div>
    </article>
  </div><!--Ende Container "<?php echo $c->title() ?>" -->

<?php endif ?>