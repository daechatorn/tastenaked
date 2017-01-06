    <!-- Foodie detail
    ==========================================-->
    <div class="clearfix-foodie-detail"></div>
    <nav class="navbar navbar-default navbar-fixed-top foodie-menu-name" style="background:url('<?=base_url()?>assets/frontend/img/bg_foodie_name.png')" >
        <div class="container">
            <div class="row" style="padding:50px;text-align:center;">
                <div class="col-sm-12 col-md-12">
                    <h2 ><strong><?=$foodie[0]['foodieName']?></strong></h2>
                </div>
            </div>
        </div>
    </nav>
    <div id="tf-about-foodie">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="video-wrapper">
                        <iframe src="https://www.youtube.com/embed/<?=$foodie[0]['foodieVdoPath']?>" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-text" style="padding-top:10px;">
                        <div class="section-title">
                            <h2><strong><?=$foodie[0]['foodieName']?></strong></h2>
                            <h4><?=$foodie[0]['foodieType']?></h4>
                            <hr>
                            <div class="clearfix"></div>
                        </div>
                        <p class="intro"><b>Description</b></p><br>
                        <div>
                            <?=$foodie[0]['foodieDescription']?>
                        </div>
                        <div style="padding-right:6%;">
                            <hr><h4 style="text-align:right"><?=$foodie[0]['foodieView']?> View</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div id="tf-about-foodie-detail">
            <div class="row">
                <div class="col-md-8">
                    <!--Ingredient-->
                    <div class="about-text">
                        <div class="section-title">
                            <h2><strong>Ingredient</strong></h2>
                            <div class="clearfix"></div>
                        </div>
                        <br>
                        <div>
                            <?=$foodie[0]['ingredient']?>
                        </div>
                    </div>
                    <br>
                    <!--Procedures-->
                    <div class="about-text">
                        <div class="section-title">
                            <h2><strong>Procedures</strong></h2>
                            <div class="clearfix"></div>
                        </div>
                        <br>
                        <div>
                            <?=$foodie[0]['procedures']?>
                        </div>
                    </div>
                    <div class="clearfix-bottom"></div>
                    
                        <ul class="slides">
                            <?php
                                $countfoodieimage = 1;
                                foreach ($foodie as $key => $detail) {
                                    $cur = $countfoodieimage;
                                    $prev = $cur - 1;
                                    $next = $cur + 1;
                                    if($prev == 0){
                                        $prev = sizeof($foodie);
                                    }
                                    if($next == sizeof($foodie)){
                                        $next = 1;
                                    }
                            ?>
                            <input type="radio" name="radio-btn" id="img-<?=$cur ?>" checked />
                            <li class="slide-container">
                                <div class="slide">
                                    <img src="<?=base_url()?>assets/frontend/img/foodie/other/<?=$detail['imagePath']?>" />
                                </div>
                                <div class="nav">
                                    <label for="img-<?=$prev ?>" class="prev">&#x2039;</label>
                                    <label for="img-<?=$next ?>" class="next">&#x203a;</label>
                                </div>
                            </li>
                            <?php 
                                    $countfoodieimage++;
                                } 
                            ?>
                            
                            <li class="nav-dots">
                            <?php
                                for ($i = 1; $i <= sizeof($foodie); $i++)  {
                            ?>
                                <label for="img-<?=$i?>" class="nav-dot" id="img-dot-<?=$i?>"></label>
                            <?php
                                }
                            ?>
                            </li>
                        </ul>
                </div>

                <div class="col-md-4">
                    <div class="about-text">
                        <div class="section-title">
                            <h3><strong>Related menu</strong></h3>
                            <hr>
                            <div class="clearfix"></div>
                        </div>
            
                        <div id="lightbox" class="row foodie-relative">
                            
                            <?php
                                foreach ($relatedMenu as $key => $relate) {
                            ?>
                            <div class="col-sm-12 col-md-12">
                                <div class="portfolio-item">
                                    <div class="hover-bg">
                                        <a href="<?=base_url()?>/FOODIE/detail/<?=$relate['foodieId']?>">
                                            <div class="hover-text">
                                                <h4><?=$relate['foodieName']?></h4>
                                                <small><?=$relate['shortDescription']?></small>
                                                <div class="clearfix"></div>
                                                <i class="fa fa-plus"></i>
                                            </div>
                                            <img src="<?=base_url()?>assets/frontend/img/foodie/main/<?=$relate['foodieImagePath']?>" 
                                                class="img-responsive" alt="...">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <?php
                                }
                            ?>

                        </div> <!--light box ::: reletive menu-->

                    </div>
                </div>
            </div>
    </div>