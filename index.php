<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>MadMouse Effect</title>

  <!-- Bootstrap -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/portfolio.css" rel="stylesheet">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Archivo+Black|Lato" rel="stylesheet">
  <link rel="stylesheet" href="https://d1azc1qln24ryf.cloudfront.net/114779/Socicon/style-cf.css?rd5re8">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script>

</script>

</head>
<body>



  <header>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="#"><img src="assets/img/logo-madmouse.png"></a>
        </div>

        <ul class="nav navbar-nav navbar-right" style="padding: 10px;">
          <li><a href="#showreel">Showreel</a></li>
          <li><a href="#competences">Compétences</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div>
    </nav>

<div class="gap-large"></div>

    <div class="container">
      <div class="row">
        <div class="col-md-5 text-right"><img src="assets/img/logo-home-madmouse.png"></div>
        <div class="col-md-7">
          <h1>MadMouse Effect</h1>
          <h2 class="sous-titre">Graphiste Motion Designer</h2>
        </div>
      </div>

      <div class="gap"></div>

      <div class="text-center">
        <iframe src="https://player.vimeo.com/video/225380697" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
      </div>
    </div>

  </header>

  <section id="competences">
    <div class="container">

      <div class="text-center">
      <h3>Compétences</h3>
      <div class="devider"><img src="assets/img/logo-devider.png" width="30px"></i></div></div>

      <div class="row">
        <div class="col-md-4">
          <h4><span class="glyphicon glyphicon-user"></span> Logos & Mascottes </h4>
          <p>Moyen efficace pour communiquer avec votre audience sur votre entreprise, votre site Web ou vos applications mobiles...</p>
        </div>

        <div class="col-md-4">
          <h4><span class="glyphicon glyphicon-user"></span> Logos & Mascottes </h4>
          <p>Moyen efficace pour communiquer avec votre audience sur votre entreprise, votre site Web ou vos applications mobiles...</p>
        </div>

        <div class="col-md-4">
          <h4><span class="glyphicon glyphicon-user"></span> Logos & Mascottes </h4>
          <p>Moyen efficace pour communiquer avec votre audience sur votre entreprise, votre site Web ou vos applications mobiles...</p>
        </div>
      </div>

      <p class="text-center"><input type="button" value="Télécharger mon CV"></input></p>
    </div>
  </section>

  <section id="portfolio">
    <div class="text-center">
    <h3>Portfolio</h3>
    <div class="devider"><img src="assets/img/logo-devider.png" width="30px"></i></div></div>

    <div id='filter'>
      <button class='all active'>All</button>
      <button class='logo'>Logos</button>
      <button class='web'>Web</button>
      <button class='motion'>Motion</button>
      <button class='illustration'>Illustration</button>
    </div>

    <!-- Demo images from behance.net -->
    <div id='posts'>

      <!-- ITEM 1 -->
      <div class='post illustration'><img src='assets/img/works/item-1.jpg'/>
        <div class='post-content'>
          <h2>Titre</h2>
          <p>La description que tu veux</p>
        <a href="#" data-width="auto" data-rel="monaleesi" class="poplight">Details</a>
      </div>
      </div>
      <div id="monaleesi" class="popup_block">
        <div class="row">
    <div class="col-md-8">
      <img src='assets/img/works/item-1-1.jpg' width="100%"/>
    </div>
    <div class="col-md-4">
      <p>Description</p>
    </div></div></div>
      <!-- FIN ITEM 1 -->





    </div>
<div class='hidden'></div>
  </section>

  <div class="gap-large"></div>
  <div class="clearfix"></div>

  <section id="contact">
      <div class="container">
        <div class="text-center">
        <h3>Contact</h3>
        <div class="devider"><img src="assets/img/logo-devider.png" width="30px"></i></div></div>

        <p class="text-center"><a href="#"><span class="socicon-facebook"></span></a> <a href="#"><span class="socicon-instagram"></span></a> <a href="#"><span class="socicon-twitter"></span></a></p>


        <form class="contact" style="margin: 0 auto;">
  <div class="form-group">
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nom">
  </div>
  <div class="form-group">
    <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Sujet">
  </div>
  <div class="form-group">
      <textarea class="form-control" rows="5" placeholder="Message"></textarea>
  </div>

  <button type="submit" class="btn btn-default">Envoyer</button>
</form>

      </div>
  </section>

  <footer>
      <p class="text-center">© 2017 by Bensafidine Walid. Alias MadMouse Effect.</p>
  </footer>


  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/portfolio.js"></script>
</body>
</html>
