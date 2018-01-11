<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>галерея изображений 1</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/f_awesome/css/font-awesome.min.css">
    <link href="css/style.css?rnd=123" rel="stylesheet">
      <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/viewer.js?rnd=123"></script>
      <script src="js/jquery.lazyload.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
    <div class="header">
    <h1>Галлерея коллажей 1</h1>
    </div>
    <div class="container">
  <div class="row border">
    <center>
    <?
    $dir = "img/17042017";
    $scandir = scandir($dir);
    unset($scandir[0]);
    unset($scandir[1]);
   //echo print_r($scandir);
     $count=0;
    foreach ( $scandir as $value ) {
        $count++;
       echo "<img class='img_this' src='$dir/$value' width='400'><br>$count<br><br>";
        }
    ?>
   </center>
  </div>
</div>

<div class='page_footconst'></div>



 <div id='maximg'><div id="maximgX"><i class='fa fa-times-circle' aria-hidden='true'></i></div></div>
 <div id='panelupr'><div id="close_all_panel"><i class="fa fa-times-circle" aria-hidden="true"></i></div><div id='this_nomer'></div><div id='nazad'><i class='strelki fa fa-chevron-circle-up' aria-hidden='true'></i>
</div><div id='vpered'><i class='strelki fa fa-chevron-circle-down' aria-hidden='true'></i>
</div><div id='uveli4'><i class='strelki fa fa-search-plus' aria-hidden='true'></i>
</div><div id='umen'><i class='strelki fa fa-search-minus' aria-hidden='true'></i>
</div>
 <div id='vveditenomer'>все страницы>><div id='kolvostranitc_map'></div></div>
</div>
<div id='fon_maximg'></div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>