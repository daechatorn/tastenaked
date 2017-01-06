    <!-- Foodie detail
    ==========================================-->
    <div class="clearfix-foodie-detail"></div>
    <nav class="navbar navbar-default navbar-fixed-top foodie-menu-name" style="background:url('<?=base_url()?>assets/frontend/img/bg_foodie_name.png')" >
        <div class="container">
            <div class="row" style="padding:50px;text-align:center;">
                <div class="col-sm-12 col-md-12">
                    <h2 ><strong>
                        <?php
                            if($bmirange == "lessthan"){
                                echo $bmiinformation[0]['bmiName']." ( ".$bmiinformation[0]['bmiRange']." )";
                                $preview_img[0] = base_url()."assets/frontend/img/bmi/main/".$bmiinformation[0]['bmiImagePath'];
                                $preview_link[0] = "PLAN4U/bmilessthan";
                                $preview_img[1] = base_url()."assets/frontend/img/bmi/main/".$bmiinformation[1]['bmiImagePath'];;
                                $preview_link[1] = "PLAN4U/bmiequal";
                                $preview_img[2] = base_url()."assets/frontend/img/bmi/main/".$bmiinformation[2]['bmiImagePath'];;
                                $preview_link[2] = "PLAN4U/bmimorethan";
                            }else if($bmirange == "equal"){
                                echo $bmiinformation[1]['bmiName']." ( ".$bmiinformation[1]['bmiRange']." )";
                                $preview_img[1] = base_url()."assets/frontend/img/bmi/main/".$bmiinformation[0]['bmiImagePath'];
                                $preview_link[1] = "PLAN4U/bmilessthan";
                                $preview_img[0] = base_url()."assets/frontend/img/bmi/main/".$bmiinformation[1]['bmiImagePath'];
                                $preview_link[0] = "PLAN4U/bmiequal";
                                $preview_img[2] = base_url()."assets/frontend/img/bmi/main/".$bmiinformation[2]['bmiImagePath'];
                                $preview_link[2] = "PLAN4U/bmimorethan";
                            }else{
                                echo $bmiinformation[2]['bmiName']." ( ".$bmiinformation[2]['bmiRange']." )";
                                $preview_img[2] = base_url()."assets/frontend/img/bmi/main/".$bmiinformation[0]['bmiImagePath'];
                                $preview_link[2] = "PLAN4U/bmilessthan";
                                $preview_img[1] = base_url()."assets/frontend/img/bmi/main/".$bmiinformation[1]['bmiImagePath'];
                                $preview_link[1] = "PLAN4U/bmiequal";
                                $preview_img[0] = base_url()."assets/frontend/img/bmi/main/".$bmiinformation[2]['bmiImagePath'];
                                $preview_link[0] = "PLAN4U/bmimorethan";
                            }
                        ?>
                    </strong></h2>
                </div>
            </div>
        </div>
    </nav>

    <div id="tf-about-foodie">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <img src="<?=$preview_img[0]?>" 
                        style="width:100%; height:500px;"
                    />
                </div>
                <div class="col-md-4">
                    <div class="col-md-12 clear-fix-iconbmi"></div>
                    <div class="col-md-12 col-xs-6 preview-bmi-div">
                        <a href="<?=base_url().$preview_link[1]?>">
                            <img src="<?=$preview_img[1]?>" />&nbsp;&nbsp;&nbsp;
                        </a>
                    </div>
                    <div class="col-md-12 col-xs-6 preview-bmi-div">
                        <a href="<?=base_url().$preview_link[2]?>">
                            <img src="<?=$preview_img[2]?>" />&nbsp;&nbsp;&nbsp;
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    
    <div id="tf-about-foodie-detail" style="padding-top:30px;padding-left:30px;">
            <div class="row">
                <div class="col-md-8">
                    
                    <div class="about-text">
                        <div class="section-title">
                            <h2><strong>Description</strong></h2>
                            <div class="clearfix"></div>
                        </div>
                        <br>
                        <div class="col-md-12">
                            <?php
                            if($bmirange == "lessthan"){
                                echo $bmiinformation[0]['bmiDescription'];
                            }else if($bmirange == "equal"){
                                echo $bmiinformation[1]['bmiDescription'];
                            }else{
                                echo $bmiinformation[2]['bmiDescription'];
                            }
                        ?>
                        </div>
                    </div>
                    <div class="clearfix-bottom"></div>
                </div>

                <div class="col-md-4">
                    <div class="about-text" style="background:transparent">
                        <div class="section-title">
                            <h3><strong>Recommend article</strong></h3>
                            <hr>
                            <div class="clearfix"></div>
                        </div>

                        <div id="lightbox" class="row article-item">
                        <?php
                            foreach ($hilightArticle as $key => $value) {
                        ?>
                            <div class="col-sm-12 col-md-12">
                                <div class="portfolio-item">
                                    <div class="hover-bg">
                                        <a href="<?=base_url()?>ARTICLE/detail/<?=$value['articleId']?>">
                                            <div class="hover-text">
                                                <h4><?=$value['articleName']?></h4>
                                                <small><?=$value['shortDescription']?></small>
                                                <div class="clearfix"></div>
                                                <i class="fa fa-plus"></i>
                                            </div>
                                            <img src="<?=base_url()?>assets/frontend/img/article/main/<?=$value['articleImagePath']?>" 
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

    