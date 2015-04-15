<ul id="dropdownJoueurs" class="dropdown-content">
  <li><a href="#!">Promo</a></li>
  <li><a href="#!">Tradi</a></li>
</ul>

<ul id="dropdownClub" class="dropdown-content">
  <li><a href="#!">Mot du maire</a></li>
  <li><a href="#!">Bureau</a></li>
  <li><a href="#!">Entrainements</a></li>
</ul>



<nav>
    <div class="nav-wrapper">
        <a href="#" data-activates="mobile"  class="button-collapse"><i class="mdi-navigation-menu"></i></a>
        <ul class="hide-on-med-and-down center-align center">
            <li><a href="accueil" class='main_selected'>Accueil</a></i></li>
            <li><a href="#" class="dropdown-button" data-activates="dropdownClub" data-beloworigin="true" >Information sur le club<i class="mdi-navigation-arrow-drop-down right"></i></a></li>
            <li><a href="#" class="dropdown-button" data-activates="dropdownJoueurs" data-beloworigin="true" width="150px">Joueurs<i class="mdi-navigation-arrow-drop-down right"></i></a></li>
            <li><a href="photo">Photo et Vidéos</a></li>
            <li><a href="contact">Nous Contacter</a></i></li>
            <li><a href="membre">Espace Membre</a></i></li>
        </ul>
        <ul class="side-nav" id="mobile"  >
            <li><a href="accueil">Accueil</a></i></li>
            <li><a href="club">Le club</a>
            <ul>
                <li><a href="#">Le mot du maire</a></li>
                <li><a href="#">Les entrainemets</a></li>
                <li><a href="#">Le Bureau</a></li>
            </ul>
            </li>
            <li><a href="joueur">Joueurs</a>
                <ul>
                    <li><a href="#">Promo</a></li>
                    <li><a href="#">Tradi</a></li>
                </ul>
            </li>
            <li><a href="photo">Photo et Vidéos</a></li>
            <li><a href="contact">Nous Contacter</a></i></li>
            <li><a href="membre">Espace Membre</a></i></li>
        </ul>
    </div>
</nav>

<script type="text/javascript">
    $(".button-collapse").sideNav();
    $(".dropdown-button").dropdown();   
</script>