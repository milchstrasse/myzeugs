<? 
//Es wurde eine neue Anforderung erstellt, diese hier in die DB schreiben
// erst die $_Postwerte abfragen
?>
<p>
  <?= a::show($_POST); ?>
</p>

<?php
$titel = get('titel');
$descr = get('description');
$area = get('area');
$segm = get('segment');



?>

