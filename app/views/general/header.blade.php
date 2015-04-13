<img src="images/logo.png" alt="logo"/>
AS Geaune TT

@if(Auth::check())
    <a href="{{ URL::to('/logout')}}" class="logout"><span class="ui-icon  ui-icon-power "></span> Se Déconnecter</a>
@endif
