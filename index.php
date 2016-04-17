<?php
  require('lang/decide-lang.php');
?>
<!DOCTYPE html>
<html lang="fr">

  <head>

    <title>Portfolio Treffandier Fabien</title>
    <meta charset="UTF-8">
    <meta name="Content-Language" content="fr">
    <meta name="Description" content="Portfolio de Treffandier Fabien étudiant à l'IUT d'Angouleme, venez découvrir mes compétences, créations et si besoin venez me contacter">
    <meta name="Author" content="Treffandier Fabien">
    <meta name="Identifier-Url" content="ftreffandier.mmi-angouleme.fr">
    <meta name="Revisit-After" content="1 day">
    <meta name="Robots" content="all">
    <meta name="Rating" content="general">
    <meta name="Distribution" content="global">
    <meta name="DC.Content-Language" content="fr">
    <meta name="DC.Description" content="Portfolio de Treffandier Fabien étudiant à l'IUT d'Angouleme, venez découvrir mes compétences, créations et si besoin venez me contacter">
    <meta name="DC.Author" content="Treffandier Fabien">
    <meta name="DC.Identifier-Url" content="ftreffandier.mmi-angouleme.fr">
    <meta name="DC.Revisit-After" content="1 day">
    <meta name="DC.Robots" content="all">
    <meta name="DC.Rating" content="general">
    <meta name="DC.Distribution" content="global">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Icone onglet
        ================================================== -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <link rel="stylesheet" href="fancybox/source/jquery.fancybox.css" type="text/css" media="screen" />
    <script type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js"></script>

<!-- Optionally add helpers - button, thumbnail and/or media -->
    <link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-buttons.css" type="text/css" media="screen" />
    <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-buttons.js"></script>
    <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-media.js"></script>

    <link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-thumbs.css" type="text/css" media="screen" />
    <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-thumbs.js"></script>


    <!-- Feuille de style
        ================================================== -->
    <link rel="stylesheet" type="text/css"  href="./dist/css/style.css">
  </head>

  <body>
    <a href="
    <?php
    if($_GET['lang']=="en"){
      echo "?lang=fr";
    }
    else{
      echo "?lang=en";
    }
    ?>
    ">
      <img src="./dist/img/translate1.png" width="40" height="40" alt="" id="translate" class="translate">
    </a>
    <nav class="navbar">
      <div class="navbar--container"> 
        <div class="navbar--header">
        </div>
        <div class="navbar--menu">
          <ul class="navbar--items">
            <li class="navbar--item"><a href="#header" class="navbar--item"><?php echo MENU_ACCUEIL; ?></a></li>
            <li class="navbar--item"><a href="#competences" class="navbar--item"><?php echo MENU_COMPETENCES; ?></a></li>
            <li class="navbar--item"><a href="#creations" class="navbar--item"><?php echo MENU_PORTFOLIO; ?></a></li>
            <li class="navbar--item"><a href="#about" class="navbar--item"><?php echo MENU_APROPOS; ?></a></li>
            <li class="navbar--item"><a href="#contact" class="navbar--item"><?php echo MENU_CONTACT; ?></a></li>
          </ul>
        </div>
      </div>
    </nav>

    <!--<div id='cssmenu'>
      <ul>
         <li><a class="navbar--item" href='#header'><span><?php //echo MENU_ACCUEIL; ?></span></a></li>
         <li><a class="navbar--item" href='#competences'><span><?php //echo MENU_COMPETENCES; ?></span></a></li>
         <li><a class="navbar--item" href='#creations'><span><?php //echo MENU_PORTFOLIO; ?></span></a></li>
         <li><a class="navbar--item" href='#about'><span><?php //echo MENU_APROPOS; ?></span></a></li>
         <li class='last'><a class="navbar--item" href='#contact'><span><?php //echo MENU_CONTACT; ?></span></a></li>
      </ul>
    </div>-->

    <header class="header" id="header">
      <div class="header--text">
        <h1 class="header--title">Treffandier Fabien</h1>
        <p class="header--subtitle"><?php echo INTRO_ROLE; ?></p>
        <a href="#creations" class="header--link"><?php echo INTRO_LIEN; ?></a> 
      </div>
    </header>

    <section class="competences" id="competences">
      <div class="competences--header">
        <h1 class="competences--header--title"><?php echo TITRE_COMP; ?></h1>
        <hr class="competences--header--hr">
        <p class="competences--header--text"><?php echo TEXT_COMP; ?></p>
      </div>
      <div class="competences-content">

        <article class="competences-article">
          <aside class="competences-article--aside">
            <img src="./dist/img/skill-design2.png" alt="" width="60" height="60">
          </aside>
          <h4 class="competences-article--title"><?php echo COMP1; ?></h4>
          <p class="competences-article--text"><?php echo TEXT_COMP1; ?></p>
        </article>

        <article class="competences-article">
          <aside class="competences-article--aside">
            <img src="./dist/img/skill-web2.png" alt="" width="60" height="60">
          </aside>
          <h4 class="competences-article--title"><?php echo COMP2; ?></h4>
          <p class="competences-article--text"><?php echo TEXT_COMP2; ?></p>
        </article>

        <article class="competences-article">
          <aside class="competences-article--aside">
            <img src="./dist/img/skill-ai2.png" alt="" width="60" height="60">
          </aside>
          <h4 class="competences-article--title"><?php echo COMP3; ?></h4>
          <p class="competences-article--text"><?php echo TEXT_COMP3; ?></p>
        </article>

        <article class="competences-article">
          <aside class="competences-article--aside">
            <img src="./dist/img/skill-photo2.png" alt="" width="60" height="60">
          </aside>
          <h4 class="competences-article--title"><?php echo COMP4; ?></h4>
          <p class="competences-article--text"><?php echo TEXT_COMP4; ?></p>
        </article>

      </div>
    </section>

    <section class="creations" id="creations">

      <section class="creations--header">
        <h1 class="creations--header--title"><?php echo TITRE_CREA; ?></h1>
        <hr class="creations--header--hr">
        <p class="creations--header--text"><?php echo TEXT_CREA; ?></p>
      </section>

      <section class="creations--content">

        <section class="creations--content--items">
          <article id="./dist/img/crea1.png" class="creations--content--item crea1 fancybox">
            
          </article>
          <article id="./dist/img/crea2.jpg" class="creations--content--item crea2">
          
          </article>
          <article id="./dist/img/crea3.jpg" class="creations--content--item crea3">
             
          </article>
          <article id="./dist/img/crea4.jpg" class="creations--content--item crea4">
            
          </article>
          <article id="./dist/img/crea5.jpg" class="creations--content--item crea5">
            
          </article>
          <article id="./dist/img/crea6.jpg" class="creations--content--item crea6">
             
          </article>
          <article id="./dist/img/crea7.png" class="creations--content--item crea7">
             
          </article>
          <article id="./dist/img/crea8.jpg" class="creations--content--item crea8">
             
          </article>
        </section>   

      </section>
   </section>


   <section class="about" id="about">
    <section class="about--header">
        <h1 class="about--header--title"><?php echo TITRE_APROPOS; ?></h1>
        <hr class="about--header--hr">
    </section>

    <section class="about--content">
        <section class="about--content--img">
            <img src="./dist/img/about1.png" alt="" class="about--content--image" >
        </section>
        <section class="about--content--text">

          <h4 class="about--content--subtitle"><?php echo APROPOS1; ?></h4>
          <p class="about--content--subtext"><?php echo APROPOS2; ?></p>
          <h4 class="about--content--subtitle"><?php echo APROPOS3; ?></h4>
          <p class="about--content--subtext"><?php echo APROPOS4; ?></p>

          <div class="about--content--mores">
            <span class="about--content--more"><img src="./dist/img/check.png" alt="" width="20" height="20" class="about--content--more--image">html 5 & css 3</span>
            <span class="about--content--more"><img src="./dist/img/check.png" alt="" width="20" height="20" class="about--content--more--image">php & javaScript</span>
            <span class="about--content--more"><img src="./dist/img/check.png" alt="" width="20" height="20" class="about--content--more--image">photoshop & illustrator</span>
            <span class="about--content--more"><img src="./dist/img/check.png" alt="" width="20" height="20" class="about--content--more--image">3DS Max</span>
          </div>
          
        </section>
    </section>
     
   </section>

   <section class="contact" id="contact">
    <section class="contact--header">
      <h1 class="contact--header--title"><?php echo TITRE_CONTACT; ?></h1>
      <hr class="contact--header--hr">
    </section>
    <section class="contact--infos">
      <article class="contact--infos--item">
        <img src="./dist/img/contact-mail.png" alt="" width="60" height="60" class="contact--item--img">
        <p class="contact--item--text">f.treffandier<br/>@gmail.com</p>
      </article>
      <article class="contact--infos--item">
        <img src="./dist/img/contact-phone.png" alt="" width="60" height="60" class="contact--item--img">
        <p class="contact--item--text">06 68 58 65 66</p>
      </article>
      <article class="contact--infos--item">
        <img src="./dist/img/contact-loc.png" alt="" width="60" height="60" class="contact--item--img">
        <p class="contact--item--text">Angoulême, France</p>
      </article>
    </section>
    <section class="contact--form--container">
      <h4 class="contact--form--title"><?php echo TEXT_CONTACT; ?></h4>
      <form class="contact--form">
        <input type="text" name="nom" placeholder="name" class="contact--form--name">
        <input type="text" name="mail" placeholder="email" class="contact--form--email"><br/>
        <textarea rows="4" cols="50" class="contact--form--textarea" name="texte" placeholder="Entrez votre texte"></textarea>
        <input type="submit" name="send" value="Envoyer" class="contact--form--send">
      </form>
    </section>
    </section>
    <footer class="footer">
      <p class="footer--text">Copyright © Design by Treffandier Fabien</p>
    </footer>
    <div class="photobox">
         <p class="photop">X</p>
    </div>
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script async src="./dist/js/main.js"></script>
    <script type="text/javascript">
    /*$(document).ready(function() {
      $(".fancybox").fancybox();
    });*/
    </script>
  </body>

</html>