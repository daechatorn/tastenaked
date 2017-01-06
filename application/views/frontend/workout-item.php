                <?php 
                $headerImagePath = "";
                    foreach ($imageCentralMedia as $key => $value) {
                        if($value['centralMediaSection']== 'HEAD'){
                            $headerImagePath = $value['centralMediaPath'];
                        }
                    }
                ?>
    <div id="tf-workout" style="background: url('<?=base_url()?>assets/frontend/img/centralcontent/main/<?=$headerImagePath?>') no-repeat; background-size:cover;" >
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 workout-item-left">
                    <div class="about-text col-md-12">
                        <div class="workout-item-title">
                            <h2><strong>Weight Training</strong></h2>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <span>
                            <?php
                                foreach ($contentCentral as $key => $value) {
                                    if($value['centralContentSection']== 'WEIGHTTRAINING'){
                                        echo $value['centralContentText'];
                                    }
                                }
                            ?>
                        </span>
                    </div>
                    <div class="col-md-12 workout-item-button">
                         <div class="categories"><ul class="cat"><li class="pull-center"><ol class="type portfolio-item"><li> 
                            <a href="#" data-filter=".weightTraining" class="active" onclick="chooseFoodieTopic('Weight Training')" > 
                                <button class="btn btn-success weightTraining">click here</button>
                            </a>
                        </li></ol></li></ul></div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 workout-item-right">
                    <div class="about-text col-md-12">
                        <div class="workout-item-title">
                            <h2><strong>Cardio</strong></h2>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <span>
                            <?php
                                foreach ($contentCentral as $key => $value) {
                                    if($value['centralContentSection']== 'CARDIO'){
                                        echo $value['centralContentText'];
                                    }
                                }
                            ?>
                        </span>
                    </div>
                    <div class="col-md-12 workout-item-button">
                        <div class="categories"><ul class="cat"><li class="pull-center"><ol class="type portfolio-item"><li> 
                            <a href="#" data-filter=".cardio" class="active" onclick="chooseFoodieTopic('Cardio')" > 
                                <button class="btn btn-primary cardio">click here</button>
                            </a>
                        </li></ol></li></ul></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="tf-works" class="tf-workout-item">
        <h2 id="foodie-list-name">All activity</h2>
        <div id="lightbox" class="row">
                <?php
                    $i = 0;
                    foreach($allWeightTraining as $key => $weightTraining){
                        if(($i == 0) || (($allWeightTraining[$i]['workoutGroup'] != $allWeightTraining[$i-1]['workoutGroup']))){
                            echo "<div class=\"col-md-12 col-sm-12 ".$allWeightTraining[0]['workoutType']."\">";
                            echo "<h2>".$allWeightTraining[$i]['workoutGroup']."</h2>";
                        }
                ?>  
                        <div class="col-md-4 col-sm-12"> 
                            <div class="col-md-12 col-sm-12 foodie-item-list">
                                <img src="<?=base_url()?>assets/frontend/img/workout/main/<?=$weightTraining['workoutImagePath']?>" alt="...">
                            </div>
                            <div class="col-md-12 col-sm-12 content-item-box">
                                <h4 class="cut-one-line"><?=$weightTraining['workoutName']?></h4>
                                <small class="cut-three-line"><?=$weightTraining['shortDescription']?></small>
                                <div class="recommendmenu-content-button col-md-12">
                                    <a href="<?=base_url()?>WORKOUT/detail/<?=$weightTraining['workoutId']?>">
                                        <button class="btn btn-default">read more</button>
                                    </a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                <?php
                        if($i != count($allWeightTraining)-1){
                            if($allWeightTraining[$i]['workoutGroup'] != $allWeightTraining[$i+1]['workoutGroup']){
                                echo "</div>";
                            }
                        }else{
                            echo "</div>";
                        }
                        $i++;
                    } 
                ?>


                <?php
                    $i = 0;
                    foreach($allCardio as $key => $cardio){
                        if(($i == 0) || (($allCardio[$i]['workoutGroup'] != $allCardio[$i-1]['workoutGroup']))){
                            echo "<div class=\"col-md-12 col-sm-12 ".$allCardio[0]['workoutType']."\">";
                            echo "<h2>".$allCardio[$i]['workoutGroup']."</h2>";
                        }
                ?>  
                        <div class="col-md-4 col-sm-12"> 
                            <div class="col-md-12 col-sm-12 foodie-item-list">
                                <img src="<?=base_url()?>assets/frontend/img/workout/main/<?=$cardio['workoutImagePath']?>" alt="...">
                            </div>
                            <div class="col-md-12 col-sm-12 content-item-box">
                                <h4 class="cut-one-line"><?=$cardio['workoutName']?></h4>
                                <small class="cut-three-line"><?=$cardio['shortDescription']?></small>
                                <div class="recommendmenu-content-button col-md-12">
                                    <a href="<?=base_url()?>WORKOUT/detail/<?=$cardio['workoutId']?>">
                                        <button class="btn btn-default">read more</button>
                                    </a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                <?php
                        if($i != count($allCardio)-1){
                            if($allCardio[$i]['workoutGroup'] != $allCardio[$i+1]['workoutGroup']){
                                echo "</div>";
                            }
                        }else{
                            echo "</div>";
                        }
                        $i++;
                    } 
                ?>


        </div>
    </div>

    <script>
        $(document).ready(function(){
            var activity = "<?=$activityType?>";
            setTimeout(function () {
                if(activity != "all"){
                    $("."+activity).click();
                    $('html, body').animate({
                        scrollTop: $('#tf-works').offset().top -170
                    }, 'slow');
                }
            }, 100);
            setTimeout(function () {
                if(activity != "all"){
                    $("."+activity).click();
                }  
            }, 3000);
        });
    </script>