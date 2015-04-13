<ul>
    <li><a href="pages" class="main_selected">Pages</a>
        <div id="subContainer">
            <ul id="sub_menu">
                <li item="motDuMaire">
                   Le mot du maire</a></li>
                <li item="entrainements">Les entrainements</li>
            </ul>
        </div>
    </li>
    <li><a href="Joueurs">Joueurs</a></li>
    <li><a href="admins">Administrateurs</a></li>
    <li><a href="redacteurs">Rédacteurs</a></li>
</li>
</ul>

<script>
    $(function(){
        $.widget('root.menu', {
            _create: function() {
                $('li>a').bind('click', $.proxy(this.recupMenu,this));
                $('#sub_menu li').bind('click',$.proxy(this.valid,this));
                $('#sub_menu li>a').unbind('click');
                $('#sub_menu> li').velocity({
                    opacity: [1,0],
                    padding: [10,0]

                },{
                    duration: 600,
                    display: 'block'
                });
            },
            recupMenu: function(event){
                $("#main_menu>li>a").removeClass('main_selected');
                var item = event.currentTarget;
                $(item).addClass('main_selected');
                item = $(item).attr('href');

                $('#subContainer').remove();
                if(item === 'pages'){
                    var cartouche = $('<div id="subContainer"><ul id="sub_menu"><li item="motDuMaire">Le mot du maire</li><li item="entrainements">Les entrainements</li></ul></div>');
                }
                if(item === 'admins' ){
                    window.location = '{{ URL::to('/listeRoot') }}';
                }

                if(cartouche){
                    $(event.currentTarget).parent().append(cartouche);

                    $('#sub_menu> li').velocity({
                        opacity: [1,0],
                        padding: [10,0],

                    },{
                        duration: 600,
                        display: 'block'
                    });
                    $('#sub_menu li').bind('click',$.proxy(this.valid,this));
                }
                return false;
            },
            valid: function(event){
                var li = event.currentTarget;
                $('li').removeClass('sub_selected');
                $(li).addClass('sub_selected');
                var item = $(li).attr('item');
                if(item == 'motDuMaire')
                window.location = '{{URL::to("/test/motDuMaire")}}';


            },
            options: {
            }
        });
    });
    $(document).ready(function() {
        $('#menu').menu();
    });
    </script>