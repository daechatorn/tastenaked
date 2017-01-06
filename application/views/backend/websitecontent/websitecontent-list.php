<!-- Main bar --> 

    <div class="mainbar" style="min-width:580px;">

        <!-- Page heading -->
        <div class="page-head" >
            <!-- Page heading -->
            <div class="bread-crumb">
                <span>Website content</span>
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
                        <h3>Website content list</h3>
                        <span>Admin can update website content</span>
                    </div>
                </div>
                <!-- Page header ends -->
            </div>
          </div>
          <?php
            foreach ($allcontent as $key => $content) {
          ?>
          <div class="row" style="margin-top:10px;">
            <div class="col-md-12">
                <div class="widget boxed">

                    <div class="widget-head">
                        <h4 class="pull-left">
                            <?=$content['centralContentPage']?> - <?=$content['centralContentSection']?>
                        </h4>
                        <div class="clearfix"></div>
                    </div>
                    <form action="<?=base_url()?>MANAGEWEBSITECONTENT/updateContent" method="post" style="margin:0;">
                        <div class="widget-content col-sm-12" style="padding-top:20px;">
                            <input type="hidden" name="centralContentId" value="<?=$content['centralContentId']?>" />
                            <div class="col-sm-2">Content detail:</div>
                            
                            <div class="col-sm-12">&nbsp;</div>

                            <div class="col-sm-12">
                                <textarea class="form-control " id="contentText<?=$content['centralContentId']?>" name="centralContentText" disabled>
                                    <?=$content['centralContentText']?>
                                </textarea>
                            </div>
                            
                            <div class="col-sm-12">&nbsp;</div>

                            <div class="col-sm-12 actionBoxEdit" id="actionBoxEdit<?=$content['centralContentId']?>">
                                <div class="col-sm-10">&nbsp;</div>
                                <div class="col-sm-2">
                                    <button type="button" class="btn btn-success form-control" onClick="openWebContentActionBox('<?=$content['centralContentId']?>', 'open')" style="color:white;">
                                        <span style="align:center" aria-hidden="true"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Update</span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-12 actionBoxSave" id="actionBoxSave<?=$content['centralContentId']?>">
                                <div class="col-sm-8">&nbsp;</div>
                                <div class="col-sm-2">
                                    <button type="submit" class="btn btn-success form-control" style="color:white;">
                                        <span style="align:center" aria-hidden="true"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save</span>
                                    </button>
                                </div>
                                <div class="col-sm-2">
                                    <button type="button" class="btn btn-warning form-control" onClick="openWebContentActionBox('<?=$content['centralContentId']?>', 'close')" style="color:white;">
                                        <span style="align:center" aria-hidden="true">x Cancel</span>
                                    </button>
                                </div>
                            </div>
                            <script>
                                function openWebContentActionBox($id, $action){
                                    var saveElement = "#actionBoxSave"+$id;
                                    var editElement = "#actionBoxEdit"+$id;
                                    var contentText = "#contentText"+$id;
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
            } 
         ?>

        </div>
      </div>

    <!-- Matter ends -->

    </div>

   <!-- Mainbar ends -->        
   <div class="clearfix"></div>
  
</div>