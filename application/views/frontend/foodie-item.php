
<!-- Foodie item
    ==========================================-->
    <div id="tf-works">
         <div class="categories">
                <ul class="cat">
                    <li class="pull-right">
                        <ol class="type foodie-item-button portfolio-item">
                            <li class="hover-bg"> 
                                <a href="#" data-filter="*" class="active" onclick="chooseFoodieTopic('All foodie')" > 
                                    <div class="hover-text">
                                        <h4>All food</h4>
                                        <div class="clearfix"></div>
                                    </div>
                                    <!--all-->
                                    <img src="<?=base_url()?>assets/frontend/img/centralcontent/main/<?=$imageCentralMedia[0]['centralMediaPath']?>" class="img-responsive"/>
                                    
                                </a>
                            </li>
                            <li  class="hover-bg">
                                <a href="#" data-filter=".savory" onclick="chooseFoodieTopic('Savory food')" >
                                    <div class="hover-text">
                                        <h4>Savory food</h4>
                                        <div class="clearfix"></div>
                                    </div>
                                    <!--savory-->
                                    <img src="<?=base_url()?>assets/frontend/img/centralcontent/main/<?=$imageCentralMedia[1]['centralMediaPath']?>" class="img-responsive"/>
                                </a>
                            </li>
                            <li  class="hover-bg">
                                <a href="#" data-filter=".dessert" onclick="chooseFoodieTopic('Dessert')"> 
                                    <div class="hover-text">
                                        <h4>Dessert</h4>
                                        <div class="clearfix"></div>
                                    </div>
                                    <!--dessert-->
                                    <img src="<?=base_url()?>assets/frontend/img/centralcontent/main/<?=$imageCentralMedia[2]['centralMediaPath']?>" class="img-responsive"/>
                                </a>
                            </li>
                            <li  class="hover-bg">
                                <a href="#" data-filter=".drink" onclick="chooseFoodieTopic('Drink')"> 
                                    <div class="hover-text">
                                        <h4>Drink</h4>
                                        <div class="clearfix"></div>
                                    </div>
                                    <!--drink-->
                                    <img src="<?=base_url()?>assets/frontend/img/centralcontent/main/<?=$imageCentralMedia[3]['centralMediaPath']?>" class="img-responsive"/>
                                </a>
                            </li>
                        </ol>
                    </li>
                </ul>
                <h2 id="foodie-list-name">All foodie</h2>
            </div>
            <div id="lightbox" class="row">
                <?php
                    foreach ($allfoodie as $key => $foodie) {
                ?>
                <div class="col-md-4 col-sm-12 <?=$foodie['foodieType']?>">
                    <div class="col-md-12 col-sm-12 foodie-item-list">
                        <img src="<?=base_url()?>assets/frontend/img/foodie/main/<?=$foodie['foodieImagePath']?>" alt="...">
                    </div>
                    <div class="col-md-12 col-sm-12 content-item-box">
                        <h4 class="cut-one-line"><?=$foodie['foodieName']?></h4>
                        <small class="cut-three-line"><?=$foodie['shortDescription']?></small>
                        <div class="recommendmenu-content-button col-md-12">
                            <a href="<?=base_url()?>FOODIE/detail/<?=$foodie['foodieId']?>">
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