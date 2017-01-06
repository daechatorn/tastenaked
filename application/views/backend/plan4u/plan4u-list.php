<!-- Main bar --> 

    <div class="mainbar" style="min-width:580px;">

        <!-- Page heading -->
        <div class="page-head" >
            <!-- Page heading -->
            <div class="bread-crumb">
                <span>Plan4u</span>
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
                        <h3>Plan4u list</h3>
                        <span>Admin can update plan</span>
                    </div>
                </div>
                <!-- Page header ends -->
            </div>
          </div>

          <div class="row" style="margin-top:10px;">
            <div class="col-md-12">
                <div class="widget boxed">

                    <div class="widget-head">
                        <h4 class="pull-left"><i class="fa fa-cutlery"></i>List of plan</h4>
                        <div class="clearfix"></div>
                    </div>

                    <div class="widget-content" style="padding-top:2px;">
                        <table class="table table-hover" >
                            <thead>
                                <tr>
                                    <th>BMI Name</th>
                                    <th>BMI Range</th>
                                    <th>Plan</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <div class="filterbox" style="width:100%;">
                              
                              <?=form_open("MANAGEPLAN4U/filter");?>
                                
                              <div class="filter-box">
                                <div class="form-group"  style="width:100%;display:inline-block;float:left;">
                                  <label for="exampleInputEmail1" style="margin-right:10px;float:left;">Type: </label>
                                  <select class="form-control" id="objectTypeSelect" name="objectTypeSelect" style="width:70%;float:left;">
                                    <option value="all">-- All type --</option>
                                    <option value='BMI LESS THAN STANDARD'>BMI LESS THAN STANDARD</option>
                                    <option value='BMI ON STANDARD'>BMI ON STANDARD</option>
                                    <option value='BMI MORE THAN STANDARD'>BMI MORE THAN STANDARD</option>
                                  </select>
                                  <script>
                                    var objectType = "<?=$objectTypeSelect?>";
                                    $(document).ready(function(){
                                        $("#objectTypeSelect").val(objectType);
                                    });
                                  </script>
                                  <button type="submit" style="width:15%;height:31px;line-height:12.5px;float:right;display:block;" class="btn btn-success">Filter</button>
                                </div>
                              
                              </div>
                              <?=form_close();?>

                            </div>
                            <tbody>
                                 <?php
                                    foreach ($allplan as $key => $plan) {
                                        $id = $plan['tableId'];
                                 ?>
                                 <?= form_open_multipart("MANAGEPLAN4U/updatePlan") ?>
                                 <tr>
                                    <input type="hidden" value="<?=$plan['tableId']?>" name="tableId" />

                                    <td class="viewcontent viewcontent<?=$id?>" ><?=$plan['bmiName']?></td>
                                    <td class="updatecontent updatecontent<?=$id?>" ><?=$plan['bmiName']?></td>
                                    
                                    <td class="viewcontent viewcontent<?=$id?>" ><?=$plan['bmiRange']?></td>
                                    <td class="updatecontent updatecontent<?=$id?>" >
                                        <?=$plan['bmiRange']?>
                                    </td>

                                    <td class="viewcontent viewcontent<?=$id?>" ><?=$plan['planId']?></td>
                                    <td class="updatecontent updatecontent<?=$id?>" >
                                        <?=$plan['planId']?>
                                    </td>

                                    <td class="viewcontent viewcontent<?=$id?>">
                                        <button type="button" class="btn btn-success" onClick="showUpdateContentById(<?=$plan['tableId']?>, 'open')">
                                            <span style="align:center" aria-hidden="true"><i class="fa fa-pencil-square-o" aria-hidden="true"> Update</i></span>
                                        </button>
                                        <button type='button' class='btn btn-primary'  data-toggle='collapse' data-target="#im<?=$plan['tableId']?>"  >
                                            <i class='fa fa-chevron-down'></i> More
                                        </button>
                                    </td>
                                    <td class="updatecontent updatecontent<?=$id?>">
                                        <button type="submit" class="btn btn-success" >
                                            <span style="align:center" aria-hidden="true"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save</span>
                                        </button>
                                        <button type="button" class="btn btn-warning" onClick="showUpdateContentById(<?=$plan['tableId']?>, 'close')">
                                            <span style="align:center" aria-hidden="true">x Cancel</span>
                                        </button>
                                        <button type='button' class='btn btn-primary'  data-toggle='collapse' data-target="#imupdate<?=$plan['tableId']?>"  >
                                            <i class='fa fa-chevron-down'></i> More
                                        </button>
                                    </td>
                                    
                                </tr>
                                <tr class='rowcontent'>
                                    <td class="viewcontent viewcontent<?=$id?>" colspan='4' style='border-top:0'>
                                        <div id='im<?=$plan['tableId']?>' class='collapse'> 

                                            <div class="col-sm-2">Table description:</div>
                                            <div class="col-sm-10">
                                                <?php  foreach ($bmidetailtable as $key => $value) { if(($value['planId']== $plan['planId']) && ($value['tableId']==$plan['tableId']))
                                                    {
                                                ?>
                                                    <?=$value['tableDescription']?>
                                                    
                                                <?php break;} }  ?>
                                            </div> 
                                            
                                            <div class="col-sm-12">&nbsp;</div>

                                            <div class="col-sm-2"><h5><b>&nbsp;</b></h5></div>
                                            <div class="col-sm-2"><h5><b>Breakfast</b></h5></div>
                                            <div class="col-sm-2"><h5><b>Snack</b></h5></div>
                                            <div class="col-sm-2"><h5><b>Lunch</b></h5></div>
                                            <div class="col-sm-2"><h5><b>Dinner</b></h5></div>
                                            <div class="col-sm-2"><h5><b>Workout</b></h5></div>

                                            <div class="col-sm-12">&nbsp;</div>

                                            <div class="col-sm-2"><h5><b>Sunday</b></h5></div>
                                            <?php  foreach ($bmidetailtable as $key => $value) { if(($value['planId']== $plan['planId']) && ($value['tableId']==$plan['tableId']))
                                                {if($value['itemDay'] == 'Sunday'){ 
                                                    if($value['isFood']=='true'){
                                            ?>
                                                <div class="col-sm-2"><h5><?=$value['foodieName']?></h5></div>
                                            <?php }else{ ?>
                                                <div class="col-sm-2"><h5><?=$value['workoutName']?></h5></div>
                                            <?php }}} }  ?>
                                            
                                            <div class="col-sm-12">&nbsp;</div>

                                            <div class="col-sm-2"><h5><b>Monday</b></h5></div>
                                            <?php  foreach ($bmidetailtable as $key => $value) { if(($value['planId']== $plan['planId']) && ($value['tableId']==$plan['tableId']))
                                                {if($value['itemDay'] == 'Monday'){ 
                                                    if($value['isFood']=='true'){
                                            ?>
                                                <div class="col-sm-2"><?=$value['foodieName']?></div>
                                            <?php }else{ ?>
                                                <div class="col-sm-2"><?=$value['workoutName']?></div>
                                            <?php }}} } ?>

                                            <div class="col-sm-12">&nbsp;</div>

                                            <div class="col-sm-2"><h5><b>Tuesday</b></h5></div>
                                            <?php  foreach ($bmidetailtable as $key => $value) { if(($value['planId']== $plan['planId']) && ($value['tableId']==$plan['tableId']))
                                                {if($value['itemDay'] == 'Tuesday'){ 
                                                    if($value['isFood']=='true'){
                                            ?>
                                                <div class="col-sm-2"><?=$value['foodieName']?></div>
                                            <?php }else{ ?>
                                                <div class="col-sm-2"><?=$value['workoutName']?></div>
                                            <?php }}} } ?>

                                            <div class="col-sm-12">&nbsp;</div>

                                            <div class="col-sm-2"><h5><b>Wednesday</b></h5></div>
                                            <?php  foreach ($bmidetailtable as $key => $value) { if(($value['planId']== $plan['planId']) && ($value['tableId']==$plan['tableId']))
                                                {if($value['itemDay'] == 'Wednesday'){ 
                                                    if($value['isFood']=='true'){
                                            ?>
                                                <div class="col-sm-2"><?=$value['foodieName']?></div>
                                            <?php }else{ ?>
                                                <div class="col-sm-2"><?=$value['workoutName']?></div>
                                            <?php }}} } ?>

                                            <div class="col-sm-12">&nbsp;</div>

                                            <div class="col-sm-2"><h5><b>Thursday</b></h5></div>
                                            <?php  foreach ($bmidetailtable as $key => $value) { if(($value['planId']== $plan['planId']) && ($value['tableId']==$plan['tableId']))
                                                {if($value['itemDay'] == 'Thursday'){ 
                                                    if($value['isFood']=='true'){
                                            ?>
                                                <div class="col-sm-2"><?=$value['foodieName']?></div>
                                            <?php }else{ ?>
                                                <div class="col-sm-2"><?=$value['workoutName']?></div>
                                            <?php }}} } ?>

                                            <div class="col-sm-12">&nbsp;</div>

                                            <div class="col-sm-2"><h5><b>Friday</b></h5></div>
                                            <?php  foreach ($bmidetailtable as $key => $value) { if(($value['planId']== $plan['planId']) && ($value['tableId']==$plan['tableId']))
                                                {if($value['itemDay'] == 'Friday'){ 
                                                    if($value['isFood']=='true'){
                                            ?>
                                                <div class="col-sm-2"><?=$value['foodieName']?></div>
                                            <?php }else{ ?>
                                                <div class="col-sm-2"><?=$value['workoutName']?></div>
                                            <?php }}} } ?>

                                            <div class="col-sm-12">&nbsp;</div>

                                            <div class="col-sm-2"><h5><b>Saturday</b></h5></div>
                                            <?php  foreach ($bmidetailtable as $key => $value) { if(($value['planId']== $plan['planId']) && ($value['tableId']==$plan['tableId']))
                                                {if($value['itemDay'] == 'Saturday'){ 
                                                    if($value['isFood']=='true'){
                                            ?>
                                                <div class="col-sm-2"><?=$value['foodieName']?></div>
                                            <?php }else{ ?>
                                                <div class="col-sm-2"><?=$value['workoutName']?></div>
                                            <?php }}} } ?>

                                        </div>
                                        <br>
                                    </td>

                                    <td class='updatecontent updatecontent<?=$id?>' colspan='4' style='border-top:0'>
                                        <div id='imupdate<?=$plan['tableId']?>' class='collapse'> 
                                            
                                            <div class="col-sm-2">Table description:</div>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" name="tableDescription">
                                                    <?php  foreach ($bmidetailtable as $key => $value) { if(($value['planId']== $plan['planId']) && ($value['tableId']==$plan['tableId']))
                                                    { ?><?=$value['tableDescription']?>
                                                    <?php break;} }  ?>
                                                </textarea>
                                            </div> 

                                            <div class="col-sm-12">&nbsp;</div>

                                            <div class="col-sm-2"><h5><b>&nbsp;</b></h5></div>
                                            <div class="col-sm-2"><h5><b>Breakfast</b></h5></div>
                                            <div class="col-sm-2"><h5><b>Snack</b></h5></div>
                                            <div class="col-sm-2"><h5><b>Lunch</b></h5></div>
                                            <div class="col-sm-2"><h5><b>Dinner</b></h5></div>
                                            <div class="col-sm-2"><h5><b>Workout</b></h5></div>

                                            <div class="col-sm-12">&nbsp;</div>

                                            <div class="col-sm-2"><h5><b>Sunday</b></h5></div>
                                            <?php  foreach ($bmidetailtable as $key => $value) { if(($value['planId']== $plan['planId']) && ($value['tableId']==$plan['tableId']))
                                                {if($value['itemDay'] == 'Sunday'){ 
                                                    if($value['isFood']=='true'){
                                            ?>
                                                <div class="col-sm-2">
                                                    <input type="hidden" name="tableId[]" value="<?=$value['tableId']?>" multiple/>
                                                    <input type="hidden" name="bmiId[]" value="<?=$value['bmiId']?>" multiple/>
                                                    <input type="hidden" name="planId[]" value="<?=$value['planId']?>" multiple/>
                                                    <input type="hidden" name="itemDay[]" value="<?=$value['itemDay']?>" multiple/>
                                                    <input type="hidden" name="itemType[]" value="<?=$value['itemType']?>" multiple/>
                                                    <select name="selectId[]" multiple>
                                                        <?php foreach ($allfoodie as $key => $foodie) { ?>
                                                            <option value="<?=$foodie['foodieId']?>"
                                                                <?=($value['foodieId']==$foodie['foodieId']?"selected":"")?> >
                                                                <?=$foodie['foodieName']?>
                                                            </option>
                                                        <?php  } ?>
                                                    </select>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="col-sm-2">
                                                    <input type="hidden" name="tableId[]" value="<?=$value['tableId']?>" multiple/>
                                                    <input type="hidden" name="bmiId[]" value="<?=$value['bmiId']?>" multiple/>
                                                    <input type="hidden" name="planId[]" value="<?=$value['planId']?>" multiple/>
                                                    <input type="hidden" name="itemDay[]" value="<?=$value['itemDay']?>" multiple/>
                                                    <input type="hidden" name="itemType[]" value="<?=$value['itemType']?>" multiple/>
                                                    <select name="selectId[]" multiple>
                                                        <?php foreach ($allworkout as $key => $workout) { ?>
                                                            <option value="<?=$workout['workoutId']?>"
                                                                <?=($value['workoutId']==$workout['workoutId']?"selected":"")?> >
                                                                <?=$workout['workoutName']?>
                                                            </option>
                                                        <?php  } ?>
                                                    </select>
                                                </div>
                                            <?php }}} }  ?>
                                            
                                            <div class="col-sm-12">&nbsp;</div>

                                            <div class="col-sm-2"><h5><b>Monday</b></h5></div>
                                            <?php  foreach ($bmidetailtable as $key => $value) { if(($value['planId']== $plan['planId']) && ($value['tableId']==$plan['tableId']))
                                                {if($value['itemDay'] == 'Monday'){ 
                                                    if($value['isFood']=='true'){
                                            ?>
                                                <div class="col-sm-2">
                                                    <input type="hidden" name="tableId[]" value="<?=$value['tableId']?>" multiple/>
                                                    <input type="hidden" name="bmiId[]" value="<?=$value['bmiId']?>" multiple/>
                                                    <input type="hidden" name="planId[]" value="<?=$value['planId']?>" multiple/>
                                                    <input type="hidden" name="itemDay[]" value="<?=$value['itemDay']?>" multiple/>
                                                    <input type="hidden" name="itemType[]" value="<?=$value['itemType']?>" multiple/>
                                                    <select name="selectId[]" multiple>
                                                        <?php foreach ($allfoodie as $key => $foodie) { ?>
                                                            <option value="<?=$foodie['foodieId']?>"
                                                                <?=($value['foodieId']==$foodie['foodieId']?"selected":"")?> >
                                                                <?=$foodie['foodieName']?>
                                                            </option>
                                                        <?php  } ?>
                                                    </select>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="col-sm-2">
                                                    <input type="hidden" name="tableId[]" value="<?=$value['tableId']?>" multiple/>
                                                    <input type="hidden" name="bmiId[]" value="<?=$value['bmiId']?>" multiple/>
                                                    <input type="hidden" name="planId[]" value="<?=$value['planId']?>" multiple/>
                                                    <input type="hidden" name="itemDay[]" value="<?=$value['itemDay']?>" multiple/>
                                                    <input type="hidden" name="itemType[]" value="<?=$value['itemType']?>" multiple/>
                                                    <select name="selectId[]" multiple>
                                                        <?php foreach ($allworkout as $key => $workout) { ?>
                                                            <option value="<?=$workout['workoutId']?>"
                                                                <?=($value['workoutId']==$workout['workoutId']?"selected":"")?> >
                                                                <?=$workout['workoutName']?>
                                                            </option>
                                                        <?php  } ?>
                                                    </select>
                                                </div>
                                            <?php }}} }  ?>

                                            <div class="col-sm-12">&nbsp;</div>

                                            <div class="col-sm-2"><h5><b>Tuesday</b></h5></div>
                                            <?php  foreach ($bmidetailtable as $key => $value) { if(($value['planId']== $plan['planId']) && ($value['tableId']==$plan['tableId']))
                                                {if($value['itemDay'] == 'Tuesday'){ 
                                                    if($value['isFood']=='true'){
                                            ?>
                                                <div class="col-sm-2">
                                                    <input type="hidden" name="tableId[]" value="<?=$value['tableId']?>" multiple/>
                                                    <input type="hidden" name="bmiId[]" value="<?=$value['bmiId']?>" multiple/>
                                                    <input type="hidden" name="planId[]" value="<?=$value['planId']?>" multiple/>
                                                    <input type="hidden" name="itemDay[]" value="<?=$value['itemDay']?>" multiple/>
                                                    <input type="hidden" name="itemType[]" value="<?=$value['itemType']?>" multiple/>
                                                    <select name="selectId[]" multiple>
                                                        <?php foreach ($allfoodie as $key => $foodie) { ?>
                                                            <option value="<?=$foodie['foodieId']?>"
                                                                <?=($value['foodieId']==$foodie['foodieId']?"selected":"")?> >
                                                                <?=$foodie['foodieName']?>
                                                            </option>
                                                        <?php  } ?>
                                                    </select>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="col-sm-2">
                                                    <input type="hidden" name="tableId[]" value="<?=$value['tableId']?>" multiple/>
                                                    <input type="hidden" name="bmiId[]" value="<?=$value['bmiId']?>" multiple/>
                                                    <input type="hidden" name="planId[]" value="<?=$value['planId']?>" multiple/>
                                                    <input type="hidden" name="itemDay[]" value="<?=$value['itemDay']?>" multiple/>
                                                    <input type="hidden" name="itemType[]" value="<?=$value['itemType']?>" multiple/>
                                                    <select name="selectId[]" multiple>
                                                        <?php foreach ($allworkout as $key => $workout) { ?>
                                                            <option value="<?=$workout['workoutId']?>"
                                                                <?=($value['workoutId']==$workout['workoutId']?"selected":"")?> >
                                                                <?=$workout['workoutName']?>
                                                            </option>
                                                        <?php  } ?>
                                                    </select>
                                                </div>
                                            <?php }}} }  ?>

                                            <div class="col-sm-12">&nbsp;</div>

                                            <div class="col-sm-2"><h5><b>Wednesday</b></h5></div>
                                            <?php  foreach ($bmidetailtable as $key => $value) { if(($value['planId']== $plan['planId']) && ($value['tableId']==$plan['tableId']))
                                                {if($value['itemDay'] == 'Wednesday'){ 
                                                    if($value['isFood']=='true'){
                                            ?>
                                                <div class="col-sm-2">
                                                    <input type="hidden" name="tableId[]" value="<?=$value['tableId']?>" multiple/>
                                                    <input type="hidden" name="bmiId[]" value="<?=$value['bmiId']?>" multiple/>
                                                    <input type="hidden" name="planId[]" value="<?=$value['planId']?>" multiple/>
                                                    <input type="hidden" name="itemDay[]" value="<?=$value['itemDay']?>" multiple/>
                                                    <input type="hidden" name="itemType[]" value="<?=$value['itemType']?>" multiple/>
                                                    <select name="selectId[]" multiple>
                                                        <?php foreach ($allfoodie as $key => $foodie) { ?>
                                                            <option value="<?=$foodie['foodieId']?>"
                                                                <?=($value['foodieId']==$foodie['foodieId']?"selected":"")?> >
                                                                <?=$foodie['foodieName']?>
                                                            </option>
                                                        <?php  } ?>
                                                    </select>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="col-sm-2">
                                                    <input type="hidden" name="tableId[]" value="<?=$value['tableId']?>" multiple/>
                                                    <input type="hidden" name="bmiId[]" value="<?=$value['bmiId']?>" multiple/>
                                                    <input type="hidden" name="planId[]" value="<?=$value['planId']?>" multiple/>
                                                    <input type="hidden" name="itemDay[]" value="<?=$value['itemDay']?>" multiple/>
                                                    <input type="hidden" name="itemType[]" value="<?=$value['itemType']?>" multiple/>
                                                    <select name="selectId[]" multiple>
                                                        <?php foreach ($allworkout as $key => $workout) { ?>
                                                            <option value="<?=$workout['workoutId']?>"
                                                                <?=($value['workoutId']==$workout['workoutId']?"selected":"")?> >
                                                                <?=$workout['workoutName']?>
                                                            </option>
                                                        <?php  } ?>
                                                    </select>
                                                </div>
                                            <?php }}} }  ?>

                                            <div class="col-sm-12">&nbsp;</div>

                                            <div class="col-sm-2"><h5><b>Thursday</b></h5></div>
                                            <?php  foreach ($bmidetailtable as $key => $value) { if(($value['planId']== $plan['planId']) && ($value['tableId']==$plan['tableId']))
                                                {if($value['itemDay'] == 'Thursday'){ 
                                                    if($value['isFood']=='true'){
                                            ?>
                                                <div class="col-sm-2">
                                                    <input type="hidden" name="tableId[]" value="<?=$value['tableId']?>" multiple/>
                                                    <input type="hidden" name="bmiId[]" value="<?=$value['bmiId']?>" multiple/>
                                                    <input type="hidden" name="planId[]" value="<?=$value['planId']?>" multiple/>
                                                    <input type="hidden" name="itemDay[]" value="<?=$value['itemDay']?>" multiple/>
                                                    <input type="hidden" name="itemType[]" value="<?=$value['itemType']?>" multiple/>
                                                    <select name="selectId[]" multiple>
                                                        <?php foreach ($allfoodie as $key => $foodie) { ?>
                                                            <option value="<?=$foodie['foodieId']?>"
                                                                <?=($value['foodieId']==$foodie['foodieId']?"selected":"")?> >
                                                                <?=$foodie['foodieName']?>
                                                            </option>
                                                        <?php  } ?>
                                                    </select>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="col-sm-2">
                                                    <input type="hidden" name="tableId[]" value="<?=$value['tableId']?>" multiple/>
                                                    <input type="hidden" name="bmiId[]" value="<?=$value['bmiId']?>" multiple/>
                                                    <input type="hidden" name="planId[]" value="<?=$value['planId']?>" multiple/>
                                                    <input type="hidden" name="itemDay[]" value="<?=$value['itemDay']?>" multiple/>
                                                    <input type="hidden" name="itemType[]" value="<?=$value['itemType']?>" multiple/>
                                                    <select name="selectId[]" multiple>
                                                        <?php foreach ($allworkout as $key => $workout) { ?>
                                                            <option value="<?=$workout['workoutId']?>"
                                                                <?=($value['workoutId']==$workout['workoutId']?"selected":"")?> >
                                                                <?=$workout['workoutName']?>
                                                            </option>
                                                        <?php  } ?>
                                                    </select>
                                                </div>
                                            <?php }}} }  ?>

                                            <div class="col-sm-12">&nbsp;</div>

                                            <div class="col-sm-2"><h5><b>Friday</b></h5></div>
                                            <?php  foreach ($bmidetailtable as $key => $value) { if(($value['planId']== $plan['planId']) && ($value['tableId']==$plan['tableId']))
                                                {if($value['itemDay'] == 'Friday'){ 
                                                    if($value['isFood']=='true'){
                                            ?>
                                                <div class="col-sm-2">
                                                    <input type="hidden" name="tableId[]" value="<?=$value['tableId']?>" multiple/>
                                                    <input type="hidden" name="bmiId[]" value="<?=$value['bmiId']?>" multiple/>
                                                    <input type="hidden" name="planId[]" value="<?=$value['planId']?>" multiple/>
                                                    <input type="hidden" name="itemDay[]" value="<?=$value['itemDay']?>" multiple/>
                                                    <input type="hidden" name="itemType[]" value="<?=$value['itemType']?>" multiple/>
                                                    <select name="selectId[]" multiple>
                                                        <?php foreach ($allfoodie as $key => $foodie) { ?>
                                                            <option value="<?=$foodie['foodieId']?>"
                                                                <?=($value['foodieId']==$foodie['foodieId']?"selected":"")?> >
                                                                <?=$foodie['foodieName']?>
                                                            </option>
                                                        <?php  } ?>
                                                    </select>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="col-sm-2">
                                                    <input type="hidden" name="tableId[]" value="<?=$value['tableId']?>" multiple/>
                                                    <input type="hidden" name="bmiId[]" value="<?=$value['bmiId']?>" multiple/>
                                                    <input type="hidden" name="planId[]" value="<?=$value['planId']?>" multiple/>
                                                    <input type="hidden" name="itemDay[]" value="<?=$value['itemDay']?>" multiple/>
                                                    <input type="hidden" name="itemType[]" value="<?=$value['itemType']?>" multiple/>
                                                    <select name="selectId[]" multiple>
                                                        <?php foreach ($allworkout as $key => $workout) { ?>
                                                            <option value="<?=$workout['workoutId']?>"
                                                                <?=($value['workoutId']==$workout['workoutId']?"selected":"")?> >
                                                                <?=$workout['workoutName']?>
                                                            </option>
                                                        <?php  } ?>
                                                    </select>
                                                </div>
                                            <?php }}} }  ?>

                                            <div class="col-sm-12">&nbsp;</div>

                                            <div class="col-sm-2"><h5><b>Saturday</b></h5></div>
                                            <?php  foreach ($bmidetailtable as $key => $value) { if(($value['planId']== $plan['planId']) && ($value['tableId']==$plan['tableId']))
                                                {if($value['itemDay'] == 'Saturday'){ 
                                                    if($value['isFood']=='true'){
                                            ?>
                                                <div class="col-sm-2">
                                                    <input type="hidden" name="tableId[]" value="<?=$value['tableId']?>" multiple/>
                                                    <input type="hidden" name="bmiId[]" value="<?=$value['bmiId']?>" multiple/>
                                                    <input type="hidden" name="planId[]" value="<?=$value['planId']?>" multiple/>
                                                    <input type="hidden" name="itemDay[]" value="<?=$value['itemDay']?>" multiple/>
                                                    <input type="hidden" name="itemType[]" value="<?=$value['itemType']?>" multiple/>
                                                    <select name="selectId[]" multiple>
                                                        <?php foreach ($allfoodie as $key => $foodie) { ?>
                                                            <option value="<?=$foodie['foodieId']?>"
                                                                <?=($value['foodieId']==$foodie['foodieId']?"selected":"")?> >
                                                                <?=$foodie['foodieName']?>
                                                            </option>
                                                        <?php  } ?>
                                                    </select>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="col-sm-2">
                                                    <input type="hidden" name="tableId[]" value="<?=$value['tableId']?>" multiple/>
                                                    <input type="hidden" name="bmiId[]" value="<?=$value['bmiId']?>" multiple/>
                                                    <input type="hidden" name="planId[]" value="<?=$value['planId']?>" multiple/>
                                                    <input type="hidden" name="itemDay[]" value="<?=$value['itemDay']?>" multiple/>
                                                    <input type="hidden" name="itemType[]" value="<?=$value['itemType']?>" multiple/>
                                                    <select name="selectId[]" multiple>
                                                        <?php foreach ($allworkout as $key => $workout) { ?>
                                                            <option value="<?=$workout['workoutId']?>"
                                                                <?=($value['workoutId']==$workout['workoutId']?"selected":"")?> >
                                                                <?=$workout['workoutName']?>
                                                            </option>
                                                        <?php  } ?>
                                                    </select>
                                                </div>
                                            <?php }}} }  ?>

                                        </div>
                                        <br>
                                    </td>
                                </tr>
                                                    
                                <?=form_close() ?>

                                <?php 
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
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