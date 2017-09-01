<h1>SQL Abfrage</h1>
<?php
// htmlRequest Abfrage

$id = get('i');
//echo "id= ".$id;
  
// SQL Abfrage nach Segment
$result = db::query('SELECT * FROM entwicklungsstatus WHERE entwicklungsphase_id='.$id);
a::show($result);
foreach($result as status): ?>
  <option value="<?= status->id()?>"><?= status->name()?></option>
<?php endforeach;

?>