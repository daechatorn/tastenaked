<!-- Main bar --> 

    <div class="mainbar" style="min-width:580px;">

        <!-- Page heading -->
        <div class="page-head" >
            <!-- Page heading -->
            <div class="bread-crumb">
                <span>Article</span>
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
                        <h3>Article list</h3>
                        <span>Admin can add article</span>
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
                    <form action="<?=base_url()?>MANAGEARTICLE/addArticle" method="post" enctype="multipart/form-data" style="margin:0;">
                        <div class="widget-content col-sm-12" style="padding-top:20px;">
                            <div class="col-sm-2">Article name:</div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="articleName" value="" />
                            </div> 

                            <div class="col-sm-1">Article type:</div>
                            <div class="col-sm-3">
                                <select name="articleType" class="form-control" >
                                    <option value='workout'>Workout</option>
                                    <option value='nutrition'>Nutrition</option>
                                    <option value='lifestyle'>Lifestyle</option>
                                </select>
                            </div>
                            
                            <div class="col-sm-12">&nbsp;</div>
                            
                            <div class="col-sm-2">Hilight:</div>
                            <div class="col-sm-2">
                                <div class="onoffswitch" >
                                    <input type="checkbox" name="isHilight" class="onoffswitch-checkbox" onchange="checkCanHilight(updatemyonoffswitch, <?=$canHilight?>)" id="updatemyonoffswitch">
                                    <label class="onoffswitch-label" for="updatemyonoffswitch">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-1">Article image:</div>
                            <div class="col-sm-3">
                                <input type="file" class="form-control" name="articleImagePath"/>
                            </div>

                            <div class="col-sm-1">Article date:</div>
                            <div class="col-sm-3">
                                <input type="date" class="form-control" name="articleDate"/>
                            </div>

                            <div class="col-sm-12">&nbsp;</div>

                            <div class="col-sm-12">
                                Short description:<textarea class="form-control" name="shortDescription"></textarea>
                            </div>

                            <div class="col-sm-12">&nbsp;</div>

                            <div class="col-sm-12">
                                Detail:<textarea class="form-control" name="articleDetail"></textarea>
                            </div>
                            
                            <div class="col-sm-12">&nbsp;</div>

                            <div class="col-sm-6">&nbsp;</div>
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