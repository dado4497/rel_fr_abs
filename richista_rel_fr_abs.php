<!DOCTYPE HTML>
<html>
  <head>
    <meta chrset="utf-8">
    <style>
      body{
        text-align: center;
        font-family: arial;
      }
      #titolo_pagina{
        text-align: center;
        font-size: 5em;
        color: #00B;
        text-shadow: 1px 1px #CF0,
                     2px 2px #CF0,
                     3px 3px #CF0,
                     4px 4px #CF0,
                     5px 5px #CF0,
                     6px 6px #999,
                     6px 5px #999,
                     5px 4px #999,
                     4px 3px #999,
                     3px 2px #999,
                     2px 1px #999,
                     5px 6px #999,
                     4px 5px #999,
                     3px 4px #999,
                     2px 3px #999,
                     1px 2px #999;
      }
    </style>
  </head>
  <body>
    <h1 id=titolo_pagina>
      There are the result...
    </h1>
  </body>
</html>



<?php
  
  
  include "rel_fr_abs.php";
  
  if(isset($_POST["req"]) && !empty($_POST["req"]) && $_POST["req"]!=""){
    $abs_path = $_POST["req"];
    if(!$rel_path = rel_fr_abs($abs_path))
      die(); 
  }
  else
    die("You haven't insert the path!!");
  if(!strpos($abs_path, "://"))
     $abs_path = "http://" . $abs_path; 
  echo "ABSOLUTE PATH: <a href = \"" . $abs_path . "\" target=\"_Blank\">" . $abs_path . "</a><br />";
  echo "RELATIVE PATH: <a href = \"" . $rel_path . "\" target=\"_Blank\">" . $rel_path . "</a><br />";
  
?>