<?php 
$id  = "kanri1";
//ハッシュ化
$lpw = password_hash($id, PASSWORD_DEFAULT); 
echo $lpw;

