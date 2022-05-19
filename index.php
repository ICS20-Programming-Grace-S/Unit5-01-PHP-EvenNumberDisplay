<html>
  <head>

    <!-- 	Meta Data	 -->
    <meta charset="utf-8" />
    <meta name="description" content="Number Display, with JavaScript" />
    <meta name="keywords" content="immaculata, ics2o" />
    <meta name="author" content="Grace S" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png" />
    <link rel="manifest" href="./fav_index/site.webmanifest" />

    <!-- Title for Webpage -->
    <title>Number Display, Using PHP</title>
    
    <!-- Links to css file -->
		<link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
    
		<!-- Heading for Webpage -->
    <?php
			echo '<center><h1>Number Display, Using PHP</h1></center><br>';;
		?>

        <!-- Image -->
    <?php
      echo '<center><img src= "./images/numberss.png" alt="number" width="45%" height="auto"></center>';
    ?>

    <!-- Instructions for for Webpage -->
    <?php
			echo '<center><h3>Please enter the following below:</h3></center><br>';;
		?>

		<!-- Number field and button (user Input for Min and Max) -->
		<form action="./results.php" method="post" target="results">
      Minimum: <input type="number" step="1" name="minimum" placeholder="Minimum..."> <br>
			<br><br>
      Maximum: <input type="number" step="1" name="maximum" placeholder="Maximum..."> <br>
			<br><br>
			<input type="submit" name="submit" value="Submit"> <br>
    </form>
    
		<!-- Output from numbers.php -->
    <iframe id="results" name="results"></iframe>
  </body>
</html>