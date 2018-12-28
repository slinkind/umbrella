<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

echo 'wfwf';

try{

   $conn = new PDO('sqlsrv:server=localhost\SQLEXPRESS; database=pubs','sa','mKG3aL');
   $r=$conn->query("SELECT TOP 1000 [au_id]
      ,[au_lname]
      ,[au_fname]
      ,[phone]
      ,[address]
      ,[city]
      ,[state]
      ,[zip]
      ,[contract]
  FROM [pubs].[dbo].[authors]");
  
   print_r($r->fetchAll());

}

catch(PDOException $e){echo $e->getMessage();};

echo 'wfwf2';