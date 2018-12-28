<?php


try{

   $conn = new PDO('sqlsrv:server=localhost\SQLEXPRESS; database=pubs','sa','mKG3aL');
   $r=$conn->query("SELECT * FROM os_php_ajax_posts WHERE wdyw='1' ORDER BY id DESC");
   print_r($r->fetchAll());

}

catch(PDOException $e){echo $e->getMessage();}
