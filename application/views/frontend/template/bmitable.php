
    <div class="plan4u-option plan4u-table">
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="text-align:left;">
                    <b>Description:</b>
                    <span><?=$bmidetailtable[0]['tableDescription']?></span>
                </div>
            </div>
        </div>
        <br><br>
        
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                <div class="table-responsive">
                    <table summary="This table shows how to create responsive tables using Bootstrap's default functionality" class="table table-bordered table-hover">
                    <caption class="text-center">Plan for you</caption>
                    <thead>
                        <tr>
                            <th></th>
                            <th>Breakfast</th>
                            <th>Snack</th>
                            <th>Lunch</th>
                            <th>Dinner</th>
                            <th>Workout</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!--bmidetailtable-->
                        <tr><td>Sunday</td>
                        <?php  foreach ($bmidetailtable as $key => $value) { if($value['itemDay'] == 'Sunday'){ $urlLink = ''; $imagePath = '';
                                if($value['isFood']=='true'){$urlLink = base_url().'FOODIE/detail/'.$value['foodieId']; $imagePath = base_url()."assets/frontend/img/foodie/main/".$value['foodieImagePath'];}
                                else{$urlLink = base_url().'WORKOUT/detail/'.$value['workoutId']; $imagePath = base_url()."assets/frontend/img/workout/main/".$value['workoutImagePath'];}
                            ?>
                            <td>
                                <a target="_blank" href="<?=$urlLink?>">
                                    <img src="<?=$imagePath?>" style="width:200px;height:150px;"/>
                                </a>
                            </td>
                        <?php } } ?>
                         </tr>
                         
                         <tr><td>Monday</td>
                        <?php  foreach ($bmidetailtable as $key => $value) { if($value['itemDay'] == 'Monday'){ $urlLink = ''; $imagePath = '';
                                if($value['isFood']=='true'){$urlLink = base_url().'FOODIE/detail/'.$value['foodieId']; $imagePath = base_url()."assets/frontend/img/foodie/main/".$value['foodieImagePath'];}
                                else{$urlLink = base_url().'WORKOUT/detail/'.$value['workoutId']; $imagePath = base_url()."assets/frontend/img/workout/main/".$value['workoutImagePath'];}
                            ?>
                            <td>
                                <a target="_blank" href="<?=$urlLink?>">
                                    <img src="<?=$imagePath?>" style="width:200px;height:150px;"/>
                                </a>
                            </td>
                        <?php } } ?>
                         </tr>

                         <tr><td>Tuesday</td>
                        <?php  foreach ($bmidetailtable as $key => $value) { if($value['itemDay'] == 'Tuesday'){ $urlLink = ''; $imagePath = '';
                                if($value['isFood']=='true'){$urlLink = base_url().'FOODIE/detail/'.$value['foodieId']; $imagePath = base_url()."assets/frontend/img/foodie/main/".$value['foodieImagePath'];}
                                else{$urlLink = base_url().'WORKOUT/detail/'.$value['workoutId']; $imagePath = base_url()."assets/frontend/img/workout/main/".$value['workoutImagePath'];}
                            ?>
                            <td>
                                <a target="_blank" href="<?=$urlLink?>">
                                    <img src="<?=$imagePath?>" style="width:200px;height:150px;"/>
                                </a>
                            </td>
                        <?php } } ?>
                         </tr>

                         <tr><td>Wednesday</td>
                        <?php  foreach ($bmidetailtable as $key => $value) { if($value['itemDay'] == 'Wednesday'){ $urlLink = ''; $imagePath = '';
                                if($value['isFood']=='true'){$urlLink = base_url().'FOODIE/detail/'.$value['foodieId']; $imagePath = base_url()."assets/frontend/img/foodie/main/".$value['foodieImagePath'];}
                                else{$urlLink = base_url().'WORKOUT/detail/'.$value['workoutId']; $imagePath = base_url()."assets/frontend/img/workout/main/".$value['workoutImagePath'];}
                            ?>
                            <td>
                                <a target="_blank" href="<?=$urlLink?>">
                                    <img src="<?=$imagePath?>" style="width:200px;height:150px;"/>
                                </a>
                            </td>
                        <?php } } ?>
                         </tr>

                         <tr><td>Thursday</td>
                        <?php  foreach ($bmidetailtable as $key => $value) { if($value['itemDay'] == 'Thursday'){ $urlLink = ''; $imagePath = '';
                                if($value['isFood']=='true'){$urlLink = base_url().'FOODIE/detail/'.$value['foodieId']; $imagePath = base_url()."assets/frontend/img/foodie/main/".$value['foodieImagePath'];}
                                else{$urlLink = base_url().'WORKOUT/detail/'.$value['workoutId']; $imagePath = base_url()."assets/frontend/img/workout/main/".$value['workoutImagePath'];}
                            ?>
                            <td>
                                <a target="_blank" href="<?=$urlLink?>">
                                    <img src="<?=$imagePath?>" style="width:200px;height:150px;"/>
                                </a>
                            </td>
                        <?php } } ?>
                         </tr>

                         <tr><td>Friday</td>
                        <?php  foreach ($bmidetailtable as $key => $value) { if($value['itemDay'] == 'Friday'){ $urlLink = ''; $imagePath = '';
                                if($value['isFood']=='true'){$urlLink = base_url().'FOODIE/detail/'.$value['foodieId']; $imagePath = base_url()."assets/frontend/img/foodie/main/".$value['foodieImagePath'];}
                                else{$urlLink = base_url().'WORKOUT/detail/'.$value['workoutId']; $imagePath = base_url()."assets/frontend/img/workout/main/".$value['workoutImagePath'];}
                            ?>
                            <td>
                                <a target="_blank" href="<?=$urlLink?>">
                                    <img src="<?=$imagePath?>" style="width:200px;height:150px;"/>
                                </a>
                            </td>
                        <?php } } ?>
                         </tr>

                         <tr><td>Saturday</td>
                        <?php  foreach ($bmidetailtable as $key => $value) { if($value['itemDay'] == 'Saturday'){ $urlLink = ''; $imagePath = '';
                                if($value['isFood']=='true'){$urlLink = base_url().'FOODIE/detail/'.$value['foodieId']; $imagePath = base_url()."assets/frontend/img/foodie/main/".$value['foodieImagePath'];}
                                else{$urlLink = base_url().'WORKOUT/detail/'.$value['workoutId']; $imagePath = base_url()."assets/frontend/img/workout/main/".$value['workoutImagePath'];}
                            ?>
                            <td>
                                <a target="_blank" href="<?=$urlLink?>">
                                    <img src="<?=$imagePath?>" style="width:200px;height:150px;"/>
                                </a>
                            </td>
                        <?php } } ?>
                         </tr>
                    </tbody>
                    </table>
                </div><!--end of .table-responsive-->
                </div>
            </div>
        </div>

    </div>