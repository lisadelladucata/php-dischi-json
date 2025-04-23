<?php
$json_text = file_get_contents('./cds.json');

$cds = json_decode($json_text, true);
?>