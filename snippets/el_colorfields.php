<?php if($el->showtitle()->isTrue()): ?>
  <h2>
    <?= $el->title() ?>
  </h2>
<?php endif ?>

<!--Tabelle für Farben-->
<?php $anzStufen = 10; ?>
<?php  ?>

<h2>Primärfarbe</h2>
<table class="primaer">
  <tr>
    <?php  for ($x = $anzStufen/-2; $x <= $anzStufen/2; $x++): ?>
      <td class="stufe<?=$x?>"><?=$x?></td>
    <?php endfor ?>
  </tr>
</table>
<h2>Akzent</h2>
<table class="akzent">
  <tr>
    <?php  for ($x = $anzStufen/-2; $x <= $anzStufen/2; $x++): ?>
      <td class="stufe<?=$x?>"><?=$x?></td>
    <?php endfor ?>
  </tr>
</table>
<h2>Sekundärfarbe</h2>
<table class="sekundaer">
  <tr>
    <?php  for ($x = $anzStufen/-2; $x <= $anzStufen/2; $x++): ?>
      <td class="stufe<?=$x?>"><?=$x?></td>
    <?php endfor ?>
  </tr>
</table>


