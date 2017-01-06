    <!-- Foodie detail
    ==========================================-->
    <div class="clearfix-foodie-detail"></div>
    <nav class="navbar navbar-default navbar-fixed-top foodie-menu-name" style="background:url('<?=base_url()?>assets/frontend/img/bg_foodie_name.png')" >
        <div class="container">
            <div class="row" style="padding:50px;text-align:center;">
                <div class="col-sm-12 col-md-12">
                    <h2 ><strong><?=$workout[0]['workoutGroup']?> - <?=$workout[0]['workoutName']?></strong></h2>
                </div>
            </div>
        </div>
    </nav>
    <div id="tf-about-foodie">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="video-wrapper">
                        <iframe src="https://www.youtube.com/embed/<?=$workout[0]['workoutVdoPath']?>" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-text" style="padding-top:10px;">
                        <p class="intro"><b>Muscles:</b> <?=$workout[0]['muscles']?></p>
                        <p class="intro"><b>Equipment</b></p>
                        <div style="margin-top:0px;">
                            <?=$workout[0]['equipment']?>
                        </div>
                        <p class="intro"><b>Recommendation</b></p>
                        <div style="margin-top:0px;">
                            <?=$workout[0]['recommendation']?>
                        </div>
                        <div style="padding-right:6%;">
                            <hr><h4 style="text-align:right"><?=$workout[0]['workoutView']?> View</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div id="tf-about-foodie-detail" class="workout-slide">
            <div class="row">
                <div class="col-md-8">
                    <h2>Step-by-step</h2>
                    <div class="slider">
                        <?php 
                            for($i=0; $i < count($workout);$i++){
                        ?>
                            <input type="radio" name="slide_switch" id="id<?=$i?>"/>
                            <label for="id<?=$i?>">
                                <img src="<?=base_url()?>assets/frontend/img/workout/other/<?=$workout[$i]['imagePath']?>" width="100" height="60"/>
                            </label>
                            <img src="<?=base_url()?>assets/frontend/img/workout/other/<?=$workout[$i]['imagePath']?>"/>
                        <?php 
                            } 
                        ?>
                        <script>
                            $(document).ready(function(){
                                $("input:radio[name=slide_switch]:first").click();
                            });
                        </script>
                        <script src="http://thecodeplayer.com/uploads/js/prefixfree.js" type="text/javascript"></script>
                    </div>
                    
                   

                </div>
                <div class="col-md-4">
                    <div class="about-text">
                        <div class="section-title">
                            <h3><strong>Related activity</strong></h3>
                            <hr>
                            <div class="clearfix"></div>
                        </div>
            
                        <div id="lightbox" class="row foodie-relative">
                            <?php
                                foreach ($relatedWorkout as $key => $value) {
                            ?>
                            <div class="col-sm-12 col-md-12">
                                <div class="portfolio-item">
                                    <div class="hover-bg">
                                        <a href="<?=base_url()?>WORKOUT/detail/<?=$value['workoutId']?>">
                                            <div class="hover-text">
                                                <h4><?=$value['workoutName']?></h4>
                                                <small><?=$value['shortDescription']?></small>
                                                <div class="clearfix"></div>
                                                <i class="fa fa-plus"></i>
                                            </div>
                                            <img src="<?=base_url()?>assets/frontend/img/workout/main/<?=$value['workoutImagePath']?>" 
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