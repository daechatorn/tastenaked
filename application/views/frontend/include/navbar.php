<!-- Navigation ==========================================-->
<nav id="tf-menu" class="navbar navbar-default navbar-fixed-top">
    <div class="container searchBox">
        <div class="row">
            <div class="col-xs-6">
                <div style="margin-left: 20%;">
                    <image style="width:40px;" src="<?=base_url()?>assets/frontend/img/centralcontent/1280px-Flag_of_the_United_Kingdom.svg.png" />
                    &nbsp;&nbsp;&nbsp;
                    <span>
                        <a href="javascript:void(0);" style="color:black">EN</a>
                    </span>
                </div>
            </div>
            <div class="col-xs-6">
                <div class="search-form">
                    <div class="form-group has-feedback">
                        <label for="search" class="sr-only">Search</label>
                        <input type="text" class="form-control" name="search" id="search" placeholder="search">
                        <span class="glyphicon glyphicon-search form-control-feedback"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="navbar-header logoname">
            <a class="navbar-brand" href="javascript:void(0);">Taste&Naked</a>
        </div>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <div class="collapse navbar-collapse menubox" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav menuname">
                <li class="menu-list home"><a href="<?=base_url()?>HOME" class="page-scroll">Home</a></li>
                <li class="menu-list plan4u"><a href="<?=base_url()?>PLAN4U" class="page-scroll">Plan4U</a></li>
                <li class="menu-list foodie"><a href="<?=base_url()?>FOODIE" class="page-scroll">Foodie</a></li>
                <li class="menu-list workout"><a href="<?=base_url()?>WORKOUT" class="page-scroll">Workout</a></li>
                <li class="menu-list article"><a href="<?=base_url()?>ARTICLE" class="page-scroll">Article</a></li>
            </ul>
        </div>
    </div>
</nav>

<script>
    var menunav = "<?=$menunav?>";
    $("."+menunav).addClass("active");

    $(function(){
        //navbar search
        $(".has-feedback input").keypress(function (e) {
            if (e.keyCode == 13) {
                window.open("https://www.google.co.th/search?q="+$(".has-feedback input").val(),"_blank");
            }
        });
    });
</script>
