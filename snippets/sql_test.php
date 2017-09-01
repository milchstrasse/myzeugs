<?php
// htmlRequest Abfrage

// SQL Abfrage nach Segment

$result = db::query($page->sqlstatement());
a::show($result);
?>