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
      Rel_fr_abs()
    </h1>
    <p>
      Insert in the inputbox the internal absolute path;<br>
      In the next page you'll find the relative path.
    </p>
    <form method = POST action = richista_rel_fr_abs.php>
      <input name=req>
      <input type=submit value="Send">
    </form>
  </body>
</html>