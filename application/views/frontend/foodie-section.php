<!-- Foodie
    ==========================================-->
    <div id="tf-team">
        <div class="row" style="position:relative;">
            <div class="recommendmenu col-md-12 col-sm-12" >
                <div class="col-md-4">
                    <div class="foodie-section-title">
                        <h2>Recommend <strong>Meal</strong> today</h2>
                    </div>
                </div>
            </div>
            <div class="recommendmenu-content col-md-6 col-sm-12">
                <img class="recommendmenu-responsive" src="<?=base_url()?>assets/frontend/img/foodie/main/<?=$recommendMenu[0]['foodieImagePath']?>" />
                <h1>"<?=$recommendMenu[0]['foodieName']?>"</h1>
                <span>
                    <?=$recommendMenu[0]['shortDescription']?>
                </span>
                <div class="recommendmenu-content-button col-md-12">
                    <a href="<?=base_url()?>FOODIE/detail/<?=$recommendMenu[0]['foodieId']?>">
                        <button class="btn btn-default">read more</button>
                    </a>
                </div>
                <img class="recommendmenu-transparent" 
                    src="<?=base_url()?>assets/frontend/img/foodie/main/<?=$recommendMenu[0]['foodieImagePath']?>" />
            </div>
            <div class="col-md-6 col-sm-12 recommendmenu-right" >
                <img 
                    src="<?=base_url()?>assets/frontend/img/foodie/main/<?=$recommendMenu[0]['foodieImagePath']?>"  />
            </div>
        </div>
    </div>

    <!-- Foodie cont.
    ==========================================-->
    <div id="tf-team-cont" style="">
        <div id="lightbox" class="row">
            <?php
                for ($i = 1; $i < sizeof($recommendMenu); $i++)  {
            ?>
            <div class="col-md-3 col-sm-12">
                <div class="portfolio-item">
                    <div class="hover-bg">
                        <a href="<?=base_url()?>FOODIE/detail/<?=$recommendMenu[$i]['foodieId']?>">
                            <div class="hover-text">
                                <h4><?=$recommendMenu[$i]['foodieName']?></h4>
                                <small><?=$recommendMenu[$i]['shortDescription']?></small>
                                <div class="clearfix"></div>
                            </div>
                            <img src="<?=base_url()?>assets/frontend/img/foodie/main/<?=$recommendMenu[$i]['foodieImagePath']?>" class="recommend-other img-responsive" alt="...">
                        </a>
                    </div>
                </div>
            </div>
            <?php 
                }
            ?>
            <?php
                    $centralImagePath = "";
                    foreach ($imageCentralMedia as $key => $value) {
                        if($value['centralMediaSection']== 'MENU'){
                            $centralImagePath = $value['centralMediaPath'];
                        }
                    }
            ?>
            <div class="col-md-3 col-sm-12">
                <div class="portfolio-item">
                    <div class="hover-bg">
                        <a href="<?=base_url()?>FOODIE">
                            <img src="<?=base_url()?>assets/frontend/img/centralcontent/main/<?=$centralImagePath?>" class="recommend-other img-responsive" style="width:100%;" alt="...">
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>