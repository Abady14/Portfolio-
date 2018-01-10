<?php
    require_once("admin/phpscripts/init.php");
    $tbl = "tbl_movies";

    if(isset($_GET['filter'])){
      //echo "Filter has been set!";
      $filter = $_GET['filter'];
      echo $filter;
      $tbl1 = "tbl_cat";
      $tbl2 = "tbl_l_mc";

      $col = "movies_id";
      $col1 = "cat_id";
      $col2 = "cat_name";

      $getMovies = filterType($tbl, $tbl1, $tbl2, $col, $col1, $col2, $filter);



    }else {
      $getMovies = getAll($tbl);
      //echo $getMovies;
    }


?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Blog Post</title>
<link href="css/reset.css" rel="stylesheet" type="text/css" media="screen">
<link href="css/main.css" rel="stylesheet" type="text/css" media="screen">
</head>
<body>
  <?php
      include("includes/nav.html");
   ?>
  <section>
    <?php
      if(!is_string($getMovies)){
          // echo "i'm an object!";
          while($row = mysqli_fetch_array($getMovies)){
            echo "<img src=\"images/{$row['movies_thumb']}\"alt=\"{$row['movies_title']}\">";
            echo "<h3>{$row['movies_title']}</h3>";
            echo "<p>{$row['movies_year']}</p>";
			
			echo "<a href=\"details.php?id={$row['movies_id']}\">More Details...</a><br><br>";
          }
          }else{
            echo "<p>{$getMovies}</p>";
          }
    ?>

        </aside>
    <style>
      h2
      {
        color: #bb000c;
      }
    </style>
    <h2>Our selection of movies...</h2>
    <img src="images/Halloween2.jpg">
    <h3></h3>
    <p>1992</p>
    <a>More details</a>
  </section>

  <?php
      include("includes/footer.html");
   ?>
<script src="js/main.js"></script>
</body>
</html>
