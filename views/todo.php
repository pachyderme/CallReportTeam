<!DOCTYPE html>
<html>
<head>
  <?php
   include("inc/link.php");
  ?>
</head>
<body>
  <!--Loader-->
  <?php
   include("inc/loader.php");
  ?>
  <!--Fin Loader-->
  <!--Parallax header-->
  <div class="parallax-container para-theme">
    <div class="parallax" ><img src="images/HANNECARD 002.jpg"></div>
  </div>
  <div class="grey-text text-lighten-4 titre-page cat">
    <div>Hannecard</div>
    <div class="titre_ital">CallReport</div>
  </div>
  <!--Fin Parallax-->
  <!--Menu-->
  <div id="siteWrapper">
  <header>
    <?php
   include("inc/header.php");
    ?>
  </header>
  <section id="content">
  <!--Fin menu-->
  <div style="margin: 0 auto; width: 50%;">
    <a href='#modalAJtodo'  class="btn waves-effect waves-light modal-trigger" style="display: block; width: 250px; margin: 0 auto; margin-top: 20px;">Ajouter un Todo</a>
  </div>
  <!--Filtres-->
   <?php
   include("inc/filtres.php");
    ?>
  <!--Fin Filtres-->
  <!--Contenu-->
  <div class="content-projet">
    <div class="galerie">
    <h2>Todo's</h2>
    </div>
     <ul class="collection collapsible" data-collapsible="accordion">
     <?php
    foreach ($todo as $t) {
      echo"
      <li class='collection-item avatar'>
            <div class='collapsible-header'>
            <span class='idt' style='display:none;'>".$t->id_todo."</span>
                <span class='title'>".$t->titre."</span>
                <p class='infotodo'>
                    A finir pour le : <span class='spandate'>".$t->date_attendue."</span> ,  réalisé à : <span class='spanreal'>".$t->pourcentage_real."</span>%
                </p>
                <p style='text-align:justify;margin:15px 0;' class='infodescr'>
                ".$t->text_todo.".
                </p>
                <a class='secondary-content deuxiemeraccourcis tooltipped deltodo' data-position='bottom' data-delay='50' data-tooltip='Supprimer'><i class='material-icons'>delete</i></a>
                <a href='#modalReal' class='secondary-content troisiemeraccourcis tooltipped modal-trigger real' data-position='bottom' data-delay='50' data-tooltip='Réalisation'><i class='material-icons'>call_made</i></a>
            </div>
            <div class='collapsible-body'>
                <ul>
                    <li><a class='btn-floating red tooltipped' data-position='bottom' data-delay='50' data-tooltip='Statistiques'><i class='material-icons'>insert_chart</i></a></li>
                    <li><a href='#modalUpTodo' class='btn-floating yellow darken-1 tooltipped modal-trigger btnuptodo' data-position='bottom' data-delay='50' data-tooltip='Modifier'><i class='material-icons'>format_quote</i></a></li>
                    <li><a class='btn-floating green tooltipped' data-position='bottom' data-delay='50' data-tooltip='Exporter/Excel'><i class='material-icons'>publish</i></a></li>
                    <li><a class='btn-floating blue tooltipped'data-position='bottom' data-delay='50' data-tooltip='Joindre un fichier'><i class='material-icons'>attach_file</i></a></li>
                </ul>
            </div>
        </li>
      ";
    }
    ?>
    </ul>
      </div>
    </div>
  <?php
   include("inc/modalTodo.php");
   include("inc/footer.php");
 ?>
  </section>
</div>
     <!--Import jQuery before materialize.js-->
 <?php
   include("inc/javascript.php");
 ?>
</body>
</html>
