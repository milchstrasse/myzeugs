<h1>SQL Abfrage</h1>
<?php
// htmlRequest Abfrage

$id = get('i');
//echo "id= ".$id;
  
// SQL Abfrage nach Segment
$result = db::query('SELECT * FROM abschnitt WHERE bereich_id='.$id);
foreach($result as abschnitt): ?>
  <option value="<?= abschnitt->id()?>"><?= abschnitt->name()?></option>
<?php endforeach;

?>