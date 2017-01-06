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
                        <h3>Foodie list</h3>
                        <span>Admin can add foodie</span>
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
                    <form action="<?=base_url()?>MANAGEFOODIE/addFoodie" method="post" enctype="multipart/form-data" style="margin:0;">
                        <div class="widget-content col-sm-12" style="padding-top:20px;">
                            <div class="col-sm-2">Foodie name:</div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="foodieName" value="" />
                            </div> 

                            <div class="col-sm-1">Foodie type:</div>
                            <div class="col-sm-3">
                                <select name="foodieType" class="form-control" >
                                    <option value='savory'>Savory</option>
                                    <option value='dessert'>Dessert</option>
                                    <option value='drink'>Drink</option>
                                </select>
                            </div>
                            
                            <div class="col-sm-12">&nbsp;</div>
                            
                            <div class="col-sm-2">Recommend:</div>
                            <div class="col-sm-2">
                                <div class="onoffswitch" >
                                    <input type="checkbox" name="isRecommend" class="onoffswitch-checkbox" onchange="checkCanRecommend(updatemyonoffswitch, <?=$canRecommend?>)" id="updatemyonoffswitch">
                                    <label class="onoffswitch-label" for="updatemyonoffswitch">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-1">Foodie image:</div>
                            <div class="col-sm-3">
                                <input type="file" class="form-control" name="foodieImagePath"/>
                            </div>


                            <div class="col-sm-1">VDO Path:</div>
                            <div class="col-sm-3">
                                <input type="text" name="foodieVdoPath" class="form-control" value="" />
                            </div>
                            
                            <div class="col-sm-12">&nbsp;</div>

                            <div class="col-sm-6">
                                Short description:<textarea class="form-control" name="shortDescription"></textarea>
                            </div>
                            <div class="col-sm-6">
                                Description:<textarea class="form-control" name="foodieDescription"></textarea>
                            </div>

                            <div class="col-sm-12">&nbsp;</div>

                            <div class="col-sm-6">
                                Ingredient:<textarea class="form-control"  name="ingredient"></textarea>
                            </div>
                            <div class="col-sm-6">
                                Procedures:<textarea class="form-control" name="procedures"></textarea>
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