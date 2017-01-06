<!-- Main bar --> 

    <div class="mainbar" style="min-width:580px;">

        <!-- Page heading -->
        <div class="page-head" >
            <!-- Page heading -->
            <div class="bread-crumb">
                <span>Workout</span>
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
                        <h3>Workout list</h3>
                        <span>Admin can delete and update workout</span>
                    </div>
                </div>
                <!-- Page header ends -->
            </div>
          </div>

          <div class="row" style="margin-top:10px;">
            <div class="col-md-12">
                <div class="widget boxed">

                    <div class="widget-head">
                        <h4 class="pull-left"><i class="fa fa-cutlery"></i>List of workout</h4>
                        <div class="clearfix"></div>
                    </div>

                    <div class="widget-content" style="padding-top:2px;">
                        <table class="table table-hover" >
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Type</th>
                                    <th>Group</th>
                                    <th>View</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <div class="filterbox" style="width:100%;">
                              
                              <?=form_open("MANAGEWORKOUT/filter");?>
                                
                              <div class="filter-box">
                                <div class="form-group"  style="width:100%;display:inline-block;float:left;">
                                  <label for="exampleInputEmail1" style="margin-right:10px;float:left;">Type: </label>
                                  <select class="form-control" id="objectTypeSelect" name="objectTypeSelect" style="width:70%;float:left;">
                                    <option value="all">-- All type --</option>
                                    <option value='weightTraining'>Weight training</option>
                                    <option value='cardio'>Cardio</option>
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
                                    foreach ($allworkout as $key => $workout) {
                                        $id = $workout['workoutId'];
                                 ?>
                                 <?= form_open_multipart("MANAGEWORKOUT/updateWorkout") ?>
                                 <tr>
                                    <input type="hidden" value="<?=$workout['workoutId']?>" name="workoutId" />
                                    <td>
                                        <button type="button" class="btn btn-danger"  onClick="unuseWorkoutByWorkoutId(<?=$workout['workoutId']?>)">
                                            <span style="align:center" aria-hidden="true"><i class="fa fa-trash-o" aria-hidden="true"></i></span>
                                        </button>
                                    </td>
                                    <td class="viewcontent viewcontent<?=$id?>" ><?=$workout['workoutName']?></td>
                                    <td class="updatecontent updatecontent<?=$id?>" ><input type="text" name="workoutName" value="<?=$workout['workoutName']?>" /></td>
                                    
                                    <td class="viewcontent viewcontent<?=$id?>" ><?=$workout['workoutType']?></td>
                                    <td class="updatecontent updatecontent<?=$id?>" >
                                        <select class="workoutTypeSelect<?=$id?>" name="workoutType">
                                            <option value='weightTraining'>Weight training</option>
                                            <option value='cardio'>Cardio</option>
                                        </select>
                                    </td>
                                    <script>
                                        $(document).ready(function(){
                                            $(".workoutTypeSelect<?=$id?>").val("<?=$workout['workoutType']?>");
                                        });
                                    </script>
                                    
                                    <td class="viewcontent viewcontent<?=$id?>" ><?=$workout['workoutGroup']?></td>
                                    <td class="updatecontent updatecontent<?=$id?>" >
                                        <select class="workoutGroupSelect<?=$id?>" name="workoutGroup">
                                            <option value='UPPER BASE'>UPPER BASE</option>
                                            <option value='LOWER BASE'>LOWER BASE</option>
                                            <option value='CORE BASE'>CORE BASE</option>
                                            <option value='ALL CARDIO'>ALL CARDIO</option>
                                        </select>
                                    </td>
                                    <script>
                                        $(document).ready(function(){
                                            $(".workoutGroupSelect<?=$id?>").val("<?=$workout['workoutGroup']?>");
                                        });
                                    </script>

                                    <td class="viewcontent viewcontent<?=$id?>" ><?=$workout['workoutView']?></td>
                                    <td class="updatecontent updatecontent<?=$id?>" ><?=$workout['workoutView']?></td>

                                    <td class="viewcontent viewcontent<?=$id?>">
                                        <button type="button" class="btn btn-success" onClick="showUpdateContentById(<?=$workout['workoutId']?>, 'open')">
                                            <span style="align:center" aria-hidden="true"><i class="fa fa-pencil-square-o" aria-hidden="true"> Update</i></span>
                                        </button>
                                        <button type='button' class='btn btn-primary'  data-toggle='collapse' data-target="#im<?=$workout['workoutId']?>"  >
                                            <i class='fa fa-chevron-down'></i> More
                                        </button>
                                    </td>
                                    <td class="updatecontent updatecontent<?=$id?>">
                                        <button type="submit" class="btn btn-success" >
                                            <span style="align:center" aria-hidden="true"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save</span>
                                        </button>
                                        <button type="button" class="btn btn-warning" onClick="showUpdateContentById(<?=$workout['workoutId']?>, 'close')">
                                            <span style="align:center" aria-hidden="true">x Cancel</span>
                                        </button>
                                        <button type='button' class='btn btn-primary'  data-toggle='collapse' data-target="#imupdate<?=$workout['workoutId']?>"  >
                                            <i class='fa fa-chevron-down'></i> More
                                        </button>
                                    </td>
                                    
                                </tr>
                                <tr class='rowcontent'>
                                    <td class="viewcontent viewcontent<?=$id?>" colspan='6' style='border-top:0'>
                                        <div id='im<?=$workout['workoutId']?>' class='collapse'> 
                                            <img src="<?=base_url()?>assets/frontend/img/workout/main/<?=$workout['workoutImagePath']?>" style="width:300px;height:200px;"/><br>
                                            <span><b>Short description: </b><?=$workout['shortDescription']?></span><br><br>
                                            <span><b>Muscles: </b><br><?=$workout['muscles']?></span><br><br>
                                            <span><b>Equipment: </b><br><?=$workout['equipment']?></span><br><br>
                                            <span><b>Recommendation: </b><br><?=$workout['recommendation']?></span><br><br>
                                            <span><b>VDO Path: </b><?=$workout['workoutVdoPath']?></span><br>
                                            <iframe src="https://www.youtube.com/embed/<?=$workout['workoutVdoPath']?>" frameborder="0" allowfullscreen style="width:400px;height:300px;"></iframe>
                                            <br><br><span><b>Other Image: </b></span><br>
                                            <?php
                                                foreach ($allworkoutWithOtherImage as $key => $value) {
                                                    if($value['workoutId'] == $workout['workoutId']){
                                            ?>
                                                <img src="<?=base_url()?>assets/frontend/img/workout/other/<?=$value['imagePath']?>" style="width:300px;height:200px;"/> &nbsp;
                                            <?php
                                                }}
                                            ?>
                                        </div>
                                        <br>
                                    </td>

                                    <td class='updatecontent updatecontent<?=$id?>' colspan='6' style='border-top:0'>
                                        <div id='imupdate<?=$workout['workoutId']?>' class='collapse'> 
                                            <img src="<?=base_url()?>assets/frontend/img/workout/main/<?=$workout['workoutImagePath']?>" style="width:300px;height:200px;"/><br>
                                            workout image: <input type="file" name="workoutImagePath"/><br>
                                            <span><b>Short description: </b><br>
                                                <textarea class="updatecontent-textarea" name="shortDescription">
                                                    <?=$workout['shortDescription']?>
                                                </textarea>
                                            </span><br><br>
                                            <span><b>Muscles: </b><br>
                                                <textarea class="updatecontent-textarea" name="muscles">
                                                    <?=$workout['muscles']?>
                                                </textarea>
                                            </span><br><br>
                                            <span><b>Equipment: </b><br>
                                                <textarea class="updatecontent-textarea" name="equipment">
                                                    <?=$workout['equipment']?>
                                                </textarea>
                                            </span><br><br>
                                            <span><b>Recommendation: </b><br>
                                                <textarea class="updatecontent-textarea" name="recommendation">
                                                    <?=$workout['recommendation']?>
                                                </textarea>
                                            </span><br><br>

                                            <span><b>VDO Path: </b> <br>
                                                <input type="text" name="workoutVdoPath" value="<?=$workout['workoutVdoPath']?>" />
                                            </span><br><br>
                                            <span><b>Other Image: </b></span><br>
                                            <?php
                                                foreach ($allworkoutWithOtherImage as $key => $value) {
                                                    if($value['workoutId'] == $workout['workoutId']){
                                            ?>
                                                <img src="<?=base_url()?>assets/frontend/img/workout/other/<?=$value['imagePath']?>" style="width:300px;height:200px;"/>
                                                <input type="hidden" name="workoutImageId[]" value="<?=$value['workoutImageId']?>" multiple/>
                                                <input type="file" name="imagePath[]" multiple/> <br>
                                            <?php
                                                }}
                                            ?>
                                            <span><b>Add new Image: </b></span><br><br>
                                            <input type="file" name="newImagePath[]" multiple/> <br>
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