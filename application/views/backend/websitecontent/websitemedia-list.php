<!-- Main bar --> 

    <div class="mainbar" style="min-width:580px;">

        <!-- Page heading -->
        <div class="page-head" >
            <!-- Page heading -->
            <div class="bread-crumb">
                <span>Website media</span>
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
                        <h3>Website media list</h3>
                        <span>Admin can update website media</span>
                    </div>
                </div>
                <!-- Page header ends -->
            </div>
          </div>
          <?php
            $i = 0;
            foreach ($allGroupMediaPage as $key => $groupContent) {
          ?>
          <div class="row" style="margin-top:10px;">
            <div class="col-md-12">
                <div class="widget boxed">

                    <div class="widget-head">
                        <h4 class="pull-left">
                            <?=$groupContent['centralMediaPage']?>
                        </h4>
                        <div class="clearfix"></div>
                    </div>
                    <form action="<?=base_url()?>MANAGEWEBSITEMEDIA/updateMedia" method="post" enctype="multipart/form-data" style="margin:0;">
                        <div class="widget-content col-sm-12" style="padding-top:20px;">
                            <input type="hidden" name="centralContentId" value="" />
                            <div class="col-sm-2">Media detail:</div>
                            
                            <div class="col-sm-12">&nbsp;</div>
                            <?php
                                foreach ($allVDOMedia as $key => $vdoContent) {
                                    if($vdoContent['centralMediaPage'] == $groupContent['centralMediaPage']){
                            ?>
                                <div class="col-sm-6">
                                    <div class="col-sm-12">
                                        <iframe src="https://www.youtube.com/embed/<?=$vdoContent['centralMediaPath']?>" frameborder="0" allowfullscreen style="width:100%;height:300px;"></iframe>
                                    </div>
                                    <div class="col-sm-12">
                                        <input type="hidden" name="centralMediaId[]" value="<?=$vdoContent['centralMediaId']?>" multiple/>
                                        <input type="hidden" name="centralMediaType[]" value="<?=$vdoContent['centralMediaType']?>" multiple/>
                                        VDO Path:<br> <input type="text" name="centralMediaPath[]" class="centralMediaPath<?=$i?>" value="<?=$vdoContent['centralMediaPath']?>" multiple disabled/>
                                    </div>
                                </div>
                            <?php
                                }}
                            ?>
                            <?php
                                foreach ($allImageMedia as $key => $imageContent) {
                                    if($imageContent['centralMediaPage'] == $groupContent['centralMediaPage']){
                            ?>
                                <div class="col-sm-6">
                                    <div class="col-sm-12">
                                        <img src="<?=base_url()?>assets/frontend/img/centralcontent/main/<?=$imageContent['centralMediaPath']?>" style="width:100%;height:300px;"/>
                                    </div>
                                    <div class="col-sm-12">
                                        <input type="hidden" name="centralMediaId[]" value="<?=$imageContent['centralMediaId']?>" multiple />
                                        <input type="hidden" name="centralMediaType[]" value="<?=$imageContent['centralMediaType']?>" multiple />
                                        Image Path:<br> <input type="file" name="centralMediaPath[]" class="centralMediaPath<?=$i?>" multiple disabled required/>
                                    </div>
                                </div>
                            <?php
                                }}
                            ?>
                            <div class="col-sm-12">&nbsp;</div>

                            <div class="col-sm-12 actionBoxEdit" id="actionBoxEdit<?=$i?>">
                                <div class="col-sm-10">&nbsp;</div>
                                <div class="col-sm-2">
                                    <button type="button" class="btn btn-success form-control" onClick="openWebContentActionBox('<?=$i?>', 'open')" style="color:white;">
                                        <span style="align:center" aria-hidden="true"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Update</span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-12 actionBoxSave" id="actionBoxSave<?=$i?>">
                                <div class="col-sm-8">&nbsp;</div>
                                <div class="col-sm-2">
                                    <button type="submit" class="btn btn-success form-control" style="color:white;">
                                        <span style="align:center" aria-hidden="true"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save</span>
                                    </button>
                                </div>
                                <div class="col-sm-2">
                                    <button type="button" class="btn btn-warning form-control" onClick="openWebContentActionBox('<?=$i?>', 'close')" style="color:white;">
                                        <span style="align:center" aria-hidden="true">x Cancel</span>
                                    </button>
                                </div>
                            </div>

                            <script>
                                function openWebContentActionBox($id, $action){
                                    var saveElement = "#actionBoxSave"+$id;
                                    var editElement = "#actionBoxEdit"+$id;
                                    var contentText = ".centralMediaPath"+$id;
                                    if($action == "open"){
                                        $(saveElement).css("display","inline-block");
                                        $(editElement).css("display","none");
                                        $(contentText).attr("disabled", false);
                                    }else{
                                        $(saveElement).css("display","none");
                                        $(editElement).css("display","inline-block");
                                        $(contentText).attr("disabled", true);
                                    }
                                }
                            </script>

                        </div>
                    </form>
                </div>
            </div>
          </div> 
         <?php
            $i++;
            } 
         ?>

        </div>
      </div>

    <!-- Matter ends -->

    </div>

   <!-- Mainbar ends -->        
   <div class="clearfix"></div>
  
</div>