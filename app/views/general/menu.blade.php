@if(Auth::check() && Auth::user()->statut == "admin")
   <ul id="dropdownPages" class="dropdown-content">
  <li><a href="#!">Mot du maire</a></li>
  <li><a href="#!">Le club</a></li>
  <li><a href="#!">Le Bureau</a></li>
</ul>

<ul id="dropdownJoueurs" class="dropdown-content">
  <li><a href="#!">Promo</a></li>
  <li><a href="#!">Tradi</a></li>
</ul>

    <nav>
    <div class="nav-wrapper">
        <a href="#" data-activates="mobile"  class="button-collapse"><i class="mdi-navigation-menu"></i></a>
    <ul class="hide-on-med-and-down center-align center">
    <li><a href="" class="dropdown-button" data-activates="dropdownPages" data-beloworigin="true">Gestion des Pages<i class="mdi-navigation-arrow-drop-down right"></i></a></li>
    <li><a href="" class="dropdown-button" data-activates="dropdownJoueurs" data-beloworigin="true">Joueurs<i class="mdi-navigation-arrow-drop-down right"></i></a></li>
    <li><a href="">Administrateurs</a></li>
    <li><a href="">Rédacteurs</a></li>
    <li><a href="/liste_articles">Articles</a></li>
    <li><a href="">Galleries Photo</a></li>
    <li><a href="/logout">Se Déconnecter<i class="tiny mdi-content-clear right"></i></a></li>
</li>
</ul>
<ul class="side-nav" id="mobile">
    <li><a href="">Pages</a>
        <ul>
            <li><a href="">Mot du Maire</a></li>
            <li><a href="">Le Club</a></li>
            <li><a href="">Le Bureau</a></li>
        </ul>
    </li>
    <li><a href="">Administrateurs</a></li>
    <li><a href="">Rédacteurs</a></li>
    <li><a href="">Joueurs</a>
    <ul>
        <li><a href="">Promo</a></li>    
        <li><a href="">Tradi</a></li>    
    </ul>
    </li>
    <li><a href="/liste_articles">Articles</a></li>
    <li><a href="">Galleries Photo</a></li>
    <li><a href="/logout">Deconnexion</a></li>
</ul>
</div>
</nav>



@else
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
            <li><a href="/" class='main_selected'>Accueil</a></i></li>
            <li><a href="#" class="dropdown-button" data-activates="dropdownClub" data-beloworigin="true" >Information sur le club<i class="mdi-navigation-arrow-drop-down right"></i></a></li>
            <li><a href="#" class="dropdown-button" data-activates="dropdownJoueurs" data-beloworigin="true">Joueurs<i class="mdi-navigation-arrow-drop-down right"></i></a></li>
            <li><a href="photo">Photo et Vidéos</a></li>
            <li><a href="/contact">Nous Contacter</a></i></li>
            <li><a href="/login">Espace Membre</a></i></li>
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
            <li><a href="/login">Espace Membre</a></i></li>
        </ul>
    </div>
</nav>
@endif
<script type="text/javascript">
    $(".button-collapse").sideNav();
    $(".dropdown-button").dropdown();   
</script>