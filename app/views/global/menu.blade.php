<ul class="collapsible">
	<li>
		<a class="collapsible-header" href="#">Accueil</a>
	</li>
	<li>
		<a  class="collapsible-header" 	href="#">Le Club</a>
		<div class="collapsible-body">
			<div class="collection">
        		<a href="#!" class="collection-item active" >Le mot du maire</a>
        		<a href="#!" class="collection-item" >un autre itrem</a>
        		<a href="#!" class="collection-item" >le bureau</a>
        		<a href="#!" class="collection-item" >test</a>
      </div>
		</div>
	</li>
	<li>
		<a  class="collapsible-header" 	href="#">Résultats Sportifs</a>
		<div class="collapsible-body">TE4ST</div>
	</li>
	<li>
		<a  class="collapsible-header" 	href="#">Joueurs</a>
	<li class="collapsible-body"></li>
	<li>
		<a  class="collapsible-header" 	href="#">Nous Contacter</a>
	</li>
	<li>
		<a  class="collapsible-header" 	href="#">Espace Membre</a>
	</li>

</ul>


<script type="text/javascript">

		$.widget("tst.menu" , {
			_create: function(){
				$('.collection a').bind('click',$.proxy(this.switchClass,this));
				$('.collapsible li a').bind('click',$.proxy(this.annuler,this));
			},
			switchClass: function(event){
				$('.collection a .active').removeClass('active');
				event.currentTarget.addClass('active');
			},
			annuler: function(){
				return false;
			}
		});

</script>