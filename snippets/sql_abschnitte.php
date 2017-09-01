<?php
  $id = get("a1");
//  echo $id;

  $result = db::query('SELECT * FROM abschnitte WHERE bereich_id='.$id);
//  a::show($result);
  if ($result){
    foreach($result as $abschnitt){
      echo "<option value='".$abschnitt->id()."'>".$abschnitt->name()."</option>";
    }
  }
?>