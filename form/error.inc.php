<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <title>Noa Michele Photography</title>

    <link rel="stylesheet" href="style/styles.css" type="text/css" />

    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!--icons-->
    <script src="https://kit.fontawesome.com/3d5ccbc9dd.js" crossorigin="anonymous"></script>

    <!--Favicon-->
    <link rel="icon" type="image/ico" href="Images/favicon.ico" />

    <link rel="icon" type="image/png" href="Images/favicon.png" />

  </head>

  <body>
    <header>
      <nav>
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="about.html">Headshots</a></li>
          <li><a href="services.html">Graduation</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
      </nav>
    </header>

    <main>
      <div class="form">
        <h1>Missing fields</h1>
        <p>Sorry, you have not completed all of the required fields.</p>
        <p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

        <ul>
        <?php
        	for($i=0; $i<count($this->missing_required_fields); $i++){
        		echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
        	}
        ?>
        </ul>

        <p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>
      </div>
    <main>

    <footer>
      <h3>Call Me, Beep Me</h3>
      <div class="icons">
        <a href="https://www.instagram.com/noamichelefriedman/" target="_blank"><i class="fab fa-instagram"></i></a>
        <a class="email" href="mailto:noafriedman825@gmail.com"><i class="far fa-envelope"></i></a>
      </div>
    </footer>
  </body>
</html>
