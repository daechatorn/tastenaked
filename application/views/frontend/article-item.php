<!-- Article header
    ==========================================-->
    <div class="plan4u-detail">
        <div class="container">
            <div class="row">
                <article id="cc-slider">
                    <input checked="checked" name="cc-slider" id="slide1" type="radio">
                    <input name="cc-slider" id="slide2" type="radio">
                    <input name="cc-slider" id="slide3" type="radio">
                    <input name="cc-slider" id="slide4" type="radio">
                    <input name="cc-slider" id="slide5" type="radio">
                    
                    <div id="cc-slides">
                        <div id="overflow">
                        <div class="inner">
                            <?php 
                                foreach($hilightArticle as $key => $hilight){
                            ?>
                            <article>
                                <div class="cctooltip">
                                    <h3><?=$hilight['articleName']?></h3>
                                    <h4><a href="javascript:void(0);"><?=$hilight['articleType']?></a></h4>
                                </div>
                                <a href="<?=base_url()?>ARTICLE/detail/<?=$hilight['articleId']?>"><img src="<?=base_url()?>assets/frontend/img/article/main/<?=$hilight['articleImagePath']?>"> </a>
                            </article>
                            <?php 
                                }
                            ?>
                        </div>
                        </div>
                    </div>
                    
                    <div id="controls">
                        <label for="slide1"></label>
                        <label for="slide2"></label>
                        <label for="slide3"></label>
                        <label for="slide4"></label>
                        <label for="slide5"></label>
                    </div>
                </article>
            </div>
        </div>
    </div>


<!-- Article item 
    ==========================================-->
    <div id="tf-works" style="margin-top:0px">
         <div class="categories">
                <ul class="cat">
                    <li class="pull-right">
                        <ol class="type foodie-item-button portfolio-item">
                            <li class="hover-bg"> 
                                <a href="#" data-filter="*" class="active" onclick="chooseFoodieTopic('All article')" > 
                                    <div class="hover-text">
                                        <h4>All article</h4>
                                        <div class="clearfix"></div>
                                    </div>  
                                    <!--all-->
                                    <img src="<?=base_url()?>assets/frontend/img/centralcontent/main/<?=$imageCentralMedia[0]['centralMediaPath']?>" class="img-responsive"/>
                                    
                                </a>
                            </li>
                            <li  class="hover-bg">
                                <a href="#" data-filter=".nutrition" onclick="chooseFoodieTopic('Nutrition')" >
                                    <div class="hover-text">
                                        <h4>Nutrition</h4>
                                        <div class="clearfix"></div>
                                    </div>
                                    <!--savory--> 
                                    <img src="<?=base_url()?>assets/frontend/img/centralcontent/main/<?=$imageCentralMedia[1]['centralMediaPath']?>" class="img-responsive"/>
                                </a>
                            </li>
                            <li  class="hover-bg">
                                <a href="#" data-filter=".workout" onclick="chooseFoodieTopic('Workout')"> 
                                    <div class="hover-text">
                                        <h4>Workout</h4>
                                        <div class="clearfix"></div>
                                    </div>
                                    <!--dessert-->
                                    <img src="<?=base_url()?>assets/frontend/img/centralcontent/main/<?=$imageCentralMedia[2]['centralMediaPath']?>" class="img-responsive"/>
                                </a>
                            </li>
                            <li  class="hover-bg">
                                <a href="#" data-filter=".lifestyle" onclick="chooseFoodieTopic('Life style healthy')"> 
                                    <div class="hover-text">
                                        <h4>Life style healthy</h4>
                                        <div class="clearfix"></div>
                                    </div>
                                    <!--drink-->
                                    <img src="<?=base_url()?>assets/frontend/img/centralcontent/main/<?=$imageCentralMedia[3]['centralMediaPath']?>" class="img-responsive"/>
                                </a>
                            </li>
                        </ol>
                    </li>
                </ul>
                <h2 id="foodie-list-name">All article</h2>
            </div>
            <div id="lightbox" class="row article-item">
                <?php
                    foreach($allArticle as $key => $article){
                ?>
                    <div class="col-md-4 col-sm-12 <?=$article['articleType']?>">
                        <div class="col-md-12 col-sm-12 foodie-item-list">
                            <img src="<?=base_url()?>assets/frontend/img/article/main/<?=$article['articleImagePath']?>" alt="...">
                        </div>
                        <div class="col-md-12 col-sm-12 content-item-box">
                            <h4 class="cut-one-line"><?=$article['articleName']?></h4>
                            <small class="cut-three-line"><?=$article['shortDescription']?></small>
                            <div class="recommendmenu-content-button col-md-12">
                                <a href="<?=base_url()?>ARTICLE/detail/<?=$article['articleId']?>">
                                    <button class="btn btn-default">read more</button>
                                </a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                <?php
                    }
                ?>
        </div>
    </div>

    <style>
        #slide1:checked ~ #controls label:nth-child(2), 
        #slide2:checked ~ #controls label:nth-child(3), 
        #slide5:checked ~ #controls label:nth-child(1) {
            background: url('<?=base_url()?>assets/frontend/img/next.png') no-repeat;
            float: right;
            display: block;
            background-color:#ef023f;
        }

        #slide1:checked ~ #controls label:nth-child(3),
        #slide2:checked ~ #controls label:nth-child(1),
        #slide3:checked ~ #controls label:nth-child(2){
            background: url('<?=base_url()?>assets/frontend/img/prev.png') no-repeat;
            float: left;
            display: block;
            background-color:#ef023f;
         }
    </style>