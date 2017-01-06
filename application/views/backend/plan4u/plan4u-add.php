<!-- Main bar --> 

    <div class="mainbar" style="min-width:580px;">

        <!-- Page heading -->
        <div class="page-head" >
            <!-- Page heading -->
            <div class="bread-crumb">
                <span>Foodie</span>
            </div>

            <div class="clearfix"></div>

        </div>
        <!-- Page heading ends -->
      <!-- Matter -->

      <div class="matter">
        <div class="container">

          <!-- Today status. jQuery Sparkline plugin used. -->

          <div class="row">
            <div class="col-md-12">
                <!-- Page header start -->
                <div class="page-header">
                    <div class="page-title">
                        <h3>Plan list</h3>
                        <span>Admin can add plan</span>
                    </div>
                </div>
                <!-- Page header ends -->
            </div>
          </div>

          <div class="row" style="margin-top:10px;">
            <div class="col-md-12">
                <div class="widget boxed">

                    <div class="widget-head">
                        <h4 class="pull-left"><i class="fa fa-cutlery"></i>Add data below</h4>
                        <div class="clearfix"></div>
                    </div>
                    <form action="<?=base_url()?>MANAGEPLAN4U/addPlan" method="post" enctype="multipart/form-data" style="margin:0;">
                        <div class="widget-content col-sm-12" style="padding-top:20px;">
                            <div class="col-sm-2">BMI Name:</div>
                            <div class="col-sm-10">
                                <select class="form-control" name="bmiId" >
                                    <option value='1'>BMI LESS THAN STANDARD</option>
                                    <option value='2'>BMI ON STANDARD</option>
                                    <option value='3'>BMI MORE THAN STANDARD</option>
                                </select>
                            </div> 
                            <div class="col-sm-12">&nbsp;</div>
                            <div class="col-sm-2">Table description:</div>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="tableDescription"></textarea>
                            </div> 
                            <div class="col-sm-12">&nbsp;</div>
                            <div class="col-sm-12">Selected item for creating plan</div>
                            <div class="col-sm-12">&nbsp;</div>
                            <?php 
                                function getItemDay($i){
                                    $type = "";
                                    if($i==0){$type="Breakfast";}
                                    else if($i==1){$type="Snack";}
                                    else if($i==2){$type="Lunch";}
                                    else if($i==3){$type="Dinner";}
                                    return $type;
                                }
                            ?>


                            <div class="col-sm-2"><h5><b>&nbsp;</b></h5></div>
                            <div class="col-sm-2"><h5><b>Breakfast</b></h5></div>
                            <div class="col-sm-2"><h5><b>Snack</b></h5></div>
                            <div class="col-sm-2"><h5><b>Lunch</b></h5></div>
                            <div class="col-sm-2"><h5><b>Dinner</b></h5></div>
                            <div class="col-sm-2"><h5><b>Workout</b></h5></div>

                            <div class="col-sm-12">&nbsp;</div>

                            <div class="col-sm-2"><h5><b>Sunday</b></h5></div>
                            <?php for($i=0; $i < 4; $i++){?>
                            <div class="col-sm-2">
                                <input type="hidden" name="itemDay[]" value="Sunday" multiple/>
                                <input type="hidden" name="itemType[]" value="<?=getItemDay($i)?>" multiple/>
                                <h5><select name="selectId[]" multiple required>
                                    <?php foreach ($allfoodie as $key => $foodie) { ?>
                                        <option value="<?=$foodie['foodieId']?>">
                                            <?=$foodie['foodieName']?>
                                        </option>
                                    <?php  } ?>
                                </select></h5>
                            </div>
                            <?php } ?>
                            <div class="col-sm-2">
                                <input type="hidden" name="itemDay[]" value="Sunday" multiple/>
                                <input type="hidden" name="itemType[]" value="Workout" multiple/>
                                <h5><select name="selectId[]" multiple required>
                                    <?php foreach ($allworkout as $key => $workout) { ?>
                                        <option value="<?=$workout['workoutId']?>">
                                            <?=$workout['workoutName']?>
                                        </option>
                                    <?php  } ?>
                                </select></h5>
                            </div>
                            
                            <div class="col-sm-12">&nbsp;</div>
                            
                            <div class="col-sm-2"><h5><b>Monday</b></h5></div>
                            <?php for($i=0; $i < 4; $i++){?>
                            <div class="col-sm-2">
                                <input type="hidden" name="itemDay[]" value="Monday" multiple/>
                                <input type="hidden" name="itemType[]" value="<?=getItemDay($i)?>" multiple/>
                                <h5><select name="selectId[]" multiple required>
                                    <?php foreach ($allfoodie as $key => $foodie) { ?>
                                        <option value="<?=$foodie['foodieId']?>">
                                            <?=$foodie['foodieName']?>
                                        </option>
                                    <?php  } ?>
                                </select></h5>
                            </div>
                            <?php } ?>
                            <div class="col-sm-2">
                                <input type="hidden" name="itemDay[]" value="Monday" multiple/>
                                <input type="hidden" name="itemType[]" value="Workout" multiple/>
                                <h5><select name="selectId[]" multiple required>
                                    <?php foreach ($allworkout as $key => $workout) { ?>
                                        <option value="<?=$workout['workoutId']?>">
                                            <?=$workout['workoutName']?>
                                        </option>
                                    <?php  } ?>
                                </select></h5>
                            </div>

                            <div class="col-sm-12">&nbsp;</div>
                            
                            <div class="col-sm-2"><h5><b>Tuesday</b></h5></div>
                            <?php for($i=0; $i < 4; $i++){?>
                            <div class="col-sm-2">
                                <input type="hidden" name="itemDay[]" value="Tuesday" multiple/>
                                <input type="hidden" name="itemType[]" value="<?=getItemDay($i)?>" multiple/>
                                <h5><select name="selectId[]" multiple required>
                                    <?php foreach ($allfoodie as $key => $foodie) { ?>
                                        <option value="<?=$foodie['foodieId']?>">
                                            <?=$foodie['foodieName']?>
                                        </option>
                                    <?php  } ?>
                                </select></h5>
                            </div>
                            <?php } ?>
                            <div class="col-sm-2">
                                <input type="hidden" name="itemDay[]" value="Tuesday" multiple/>
                                <input type="hidden" name="itemType[]" value="Workout" multiple/>
                                <h5><select name="selectId[]" multiple required>
                                    <?php foreach ($allworkout as $key => $workout) { ?>
                                        <option value="<?=$workout['workoutId']?>">
                                            <?=$workout['workoutName']?>
                                        </option>
                                    <?php  } ?>
                                </select></h5>
                            </div>

                            <div class="col-sm-12">&nbsp;</div>
                            
                            <div class="col-sm-2"><h5><b>Wednesday</b></h5></div>
                            <?php for($i=0; $i < 4; $i++){?>
                            <div class="col-sm-2">
                                <input type="hidden" name="itemDay[]" value="Wednesday" multiple/>
                                <input type="hidden" name="itemType[]" value="<?=getItemDay($i)?>" multiple/>
                                <h5><select name="selectId[]" multiple required>
                                    <?php foreach ($allfoodie as $key => $foodie) { ?>
                                        <option value="<?=$foodie['foodieId']?>">
                                            <?=$foodie['foodieName']?>
                                        </option>
                                    <?php  } ?>
                                </select></h5>
                            </div>
                            <?php } ?>
                            <div class="col-sm-2">
                                <input type="hidden" name="itemDay[]" value="Wednesday" multiple/>
                                <input type="hidden" name="itemType[]" value="Workout" multiple/>
                                <h5><select name="selectId[]" multiple required>
                                    <?php foreach ($allworkout as $key => $workout) { ?>
                                        <option value="<?=$workout['workoutId']?>">
                                            <?=$workout['workoutName']?>
                                        </option>
                                    <?php  } ?>
                                </select></h5>
                            </div>

                            <div class="col-sm-12">&nbsp;</div>
                            
                            <div class="col-sm-2"><h5><b>Thursday</b></h5></div>
                            <?php for($i=0; $i < 4; $i++){?>
                            <div class="col-sm-2">
                                <input type="hidden" name="itemDay[]" value="Thursday" multiple/>
                                <input type="hidden" name="itemType[]" value="<?=getItemDay($i)?>" multiple/>
                                <h5><select name="selectId[]" multiple required>
                                    <?php foreach ($allfoodie as $key => $foodie) { ?>
                                        <option value="<?=$foodie['foodieId']?>">
                                            <?=$foodie['foodieName']?>
                                        </option>
                                    <?php  } ?>
                                </select></h5>
                            </div>
                            <?php } ?>
                            <div class="col-sm-2">
                                <input type="hidden" name="itemDay[]" value="Thursday" multiple/>
                                <input type="hidden" name="itemType[]" value="Workout" multiple/>
                                <h5><select name="selectId[]" multiple required>
                                    <?php foreach ($allworkout as $key => $workout) { ?>
                                        <option value="<?=$workout['workoutId']?>">
                                            <?=$workout['workoutName']?>
                                        </option>
                                    <?php  } ?>
                                </select></h5>
                            </div>

                            <div class="col-sm-12">&nbsp;</div>
                            
                            <div class="col-sm-2"><h5><b>Friday</b></h5></div>
                            <?php for($i=0; $i < 4; $i++){?>
                            <div class="col-sm-2">
                                <input type="hidden" name="itemDay[]" value="Friday" multiple/>
                                <input type="hidden" name="itemType[]" value="<?=getItemDay($i)?>" multiple/>
                                <h5><select name="selectId[]" multiple required>
                                    <?php foreach ($allfoodie as $key => $foodie) { ?>
                                        <option value="<?=$foodie['foodieId']?>">
                                            <?=$foodie['foodieName']?>
                                        </option>
                                    <?php  } ?>
                                </select></h5>
                            </div>
                            <?php } ?>
                            <div class="col-sm-2">
                                <input type="hidden" name="itemDay[]" value="Friday" multiple/>
                                <input type="hidden" name="itemType[]" value="Workout" multiple/>
                                <h5><select name="selectId[]" multiple required>
                                    <?php foreach ($allworkout as $key => $workout) { ?>
                                        <option value="<?=$workout['workoutId']?>">
                                            <?=$workout['workoutName']?>
                                        </option>
                                    <?php  } ?>
                                </select></h5>
                            </div>

                            <div class="col-sm-12">&nbsp;</div>
                            
                            <div class="col-sm-2"><h5><b>Saturday</b></h5></div>
                            <?php for($i=0; $i < 4; $i++){?>
                            <div class="col-sm-2">
                                <input type="hidden" name="itemDay[]" value="Saturday" multiple/>
                                <input type="hidden" name="itemType[]" value="<?=getItemDay($i)?>" multiple/>
                                <h5><select name="selectId[]" multiple required>
                                    <?php foreach ($allfoodie as $key => $foodie) { ?>
                                        <option value="<?=$foodie['foodieId']?>">
                                            <?=$foodie['foodieName']?>
                                        </option>
                                    <?php  } ?>
                                </select></h5>
                            </div>
                            <?php } ?>
                            <div class="col-sm-2">
                                <input type="hidden" name="itemDay[]" value="Saturday" multiple/>
                                <input type="hidden" name="itemType[]" value="Workout" multiple/>
                                <h5><select name="selectId[]" multiple required>
                                    <?php foreach ($allworkout as $key => $workout) { ?>
                                        <option value="<?=$workout['workoutId']?>">
                                            <?=$workout['workoutName']?>
                                        </option>
                                    <?php  } ?>
                                </select></h5>
                            </div>
                         
                            <div class="col-sm-12">&nbsp;</div>
                            <div class="col-sm-12">&nbsp;</div>

                            <div class="col-sm-6">
                                &nbsp;
                            </div>
                            <div class="col-sm-3">
                                <button type="submit" class="btn btn-success form-control" style="color:white;">SAVE</button>
                            </div>
                            <div class="col-sm-3">
                                <button type="reset" class="btn btn-warning form-control" style="color:white;">CANCEL</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
          </div> 

        </div>
      </div>

    <!-- Matter ends -->

    </div>

   <!-- Mainbar ends -->        
   <div class="clearfix"></div>
  
</div>