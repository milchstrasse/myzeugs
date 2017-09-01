<?php
  $id = get("a1");
//  echo $id;
// echo 'SELECT * FROM `view_anforderungen` WHERE id ='.$id;
  $result = db::query('SELECT * FROM `view_anforderungen` WHERE id ='.$id);
    if ($result){
    foreach($result as $item){
//      a::show($item);
    }
    echo a::json($item);
  }
?>