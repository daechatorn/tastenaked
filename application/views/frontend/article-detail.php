    <!-- Foodie detail
    ==========================================-->
    <div class="clearfix-foodie-detail" style="height:180px;"></div>
        
    <div id="tf-about-foodie-detail" style="background:white;padding-top:30px;padding-left:30px;">
            <div class="row">
                <div class="col-md-8">
                    
                    <div class="about-text">
                        <div class="section-title">
                            <h2><strong><?=$article[0]['articleName']?></strong></h2>
                            <h3><strong><?=date("F j, Y", strtotime($article[0]['articleDate']))?> | <?=$article[0]['articleView']?> View</strong></h3>
                            <div class="clearfix"></div>
                        </div>
                        <br>
                        <div class="col-md-12">
                            <img src="<?=base_url()?>assets/frontend/img/article/main/<?=$article[0]['articleImagePath']?>" style="width:100%;height:400px;"/>
                        </div>
                        <div class="col-md-12" style="height:20px;"></div>
                        <div class="col-md-12">
                            <?=$article[0]['articleDetail']?>
                        </div>
                    </div>
                    <div class="clearfix-bottom"></div>
                </div>

                <div class="col-md-4">
                    <div class="about-text" >
                        <div class="section-title">
                            <h3><strong>Recent Posts</strong></h3>
                            <hr>
                            <div class="clearfix"></div>
                        </div>
            
                        <div id="lightbox" class="row foodie-relative">
                            <?php
                                foreach ($recentArticle as $key => $recent) {
                            ?>
                                <hr style="width:90%;margin:10px 0px 0px 10px;border:2px dashed">
                                <div class="col-md-12">
                                    <a href="<?=base_url()?>ARTICLE/detail/<?=$recent['articleId']?>">
                                        <h3><?=$recent['articleName']?></h3>
                                        <span><?=$recent['shortDescription']?></span>
                                    </a>
                                </div>
                            <?php
                                }
                            ?>
                            <hr style="width:90%;margin:10px 0px 0px 10px;border:2px dashed">
                        </div> <!--light box ::: reletive menu-->

                    </div>
                </div>
            </div>
    </div>

    