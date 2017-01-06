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
                        <span>Admin can add workout</span>
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
                    <form action="<?=base_url()?>MANAGEWORKOUT/addWorkout" method="post" enctype="multipart/form-data" style="margin:0;">
                        <div class="widget-content col-sm-12" style="padding-top:20px;">
                            <div class="col-sm-2">Workout name:</div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="workoutName" value="" />
                            </div> 

                            <div class="col-sm-1">Workout type:</div>
                            <div class="col-sm-3">
                                <select class="form-control" name="workoutType">
                                    <option value='weightTraining'>Weight training</option>
                                    <option value='cardio'>Cardio</option>
                                </select>
                            </div>
                            
                            <div class="col-sm-12">&nbsp;</div>
                            
                            <div class="col-sm-2">Workout group:</div>
                            <div class="col-sm-2">
                                <select class="form-control" name="workoutGroup">
                                    <option value='UPPER BASE'>UPPER BASE</option>
                                    <option value='LOWER BASE'>LOWER BASE</option>
                                    <option value='CORE BASE'>CORE BASE</option>
                                    <option value='ALL CARDIO'>ALL CARDIO</option>
                                </select>
                            </div>
                            <div class="col-sm-1">Workout image:</div>
                            <div class="col-sm-3">
                                <input type="file" class="form-control" name="workoutImagePath"/>
                            </div>


                            <div class="col-sm-1">VDO Path:</div>
                            <div class="col-sm-3">
                                <input type="text" name="workoutVdoPath" class="form-control" value="" />
                            </div>
                            
                            <div class="col-sm-12">&nbsp;</div>

                            <div class="col-sm-6">
                                Short description:<textarea class="form-control" name="shortDescription"></textarea>
                            </div>
                            <div class="col-sm-6">
                                Muscles:<textarea class="form-control" name="muscles"></textarea>
                            </div>

                            <div class="col-sm-12">&nbsp;</div>

                            <div class="col-sm-6">
                                Equipment:<textarea class="form-control"  name="equipment"></textarea>
                            </div>
                            <div class="col-sm-6">
                                Recommendation:<textarea class="form-control" name="recommendation"></textarea>
                            </div>

                            <div class="col-sm-12">&nbsp;</div>
                            <div class="col-sm-2">Add new other image: </div>
                            <div class="col-sm-5 ">
                                <input type="file" name="newImagePath[]" multiple/> <br>
                                <input type="file" name="newImagePath[]" multiple/> <br>
                                <input type="file" name="newImagePath[]" multiple/> <br>
                            </div>
                            <div class="col-sm-5 ">
                                <input type="file" name="newImagePath[]" multiple/> <br>
                                <input type="file" name="newImagePath[]" multiple/> <br>
                                <input type="file" name="newImagePath[]" multiple/> <br>
                            </div>

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