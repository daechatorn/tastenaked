<!-- Main bar --> 

    <div class="mainbar" style="min-width:580px;">

        <!-- Page heading -->
        <div class="page-head" >
            <!-- Page heading -->
            <div class="bread-crumb">
                <span>BMI</span>
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
                        <h3>BMI list</h3>
                        <span>Admin can update BMI</span>
                    </div>
                </div>
                <!-- Page header ends -->
            </div>
          </div>

          <div class="row" style="margin-top:10px;">
            <div class="col-md-12">
                <div class="widget boxed">

                    <div class="widget-head">
                        <h4 class="pull-left"><i class="fa fa-list-alt" aria-hidden="true"></i>List of BMI</h4>
                        <div class="clearfix"></div>
                    </div>

                    <div class="widget-content" style="padding-top:2px;">
                        <table class="table table-hover" >
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Range</th>
                                    <th>Recommendation</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                 <?php
                                    foreach ($allbmi as $key => $bmi) {
                                        $id = $bmi['bmiId'];
                                 ?>
                                 <?= form_open_multipart("MANAGEBMI/updateBMI") ?>
                                 <tr>
                                    <input type="hidden" value="<?=$bmi['bmiId']?>" name="bmiId" />
                                    <td class="viewcontent viewcontent<?=$id?>" ><?=$bmi['bmiName']?></td>
                                    <td class="updatecontent updatecontent<?=$id?>" ><?=$bmi['bmiName']?></td>
                                    
                                    <td class="viewcontent viewcontent<?=$id?>" ><?=$bmi['bmiRange']?></td>
                                    <td class="updatecontent updatecontent<?=$id?>" ><?=$bmi['bmiRange']?></td>
                                    
                                    <td class="viewcontent viewcontent<?=$id?>">
                                        <button type="button" class="btn btn-success" onClick="showUpdateContentById(<?=$bmi['bmiId']?>, 'open')">
                                            <span style="align:center" aria-hidden="true"><i class="fa fa-pencil-square-o" aria-hidden="true"> Update</i></span>
                                        </button>
                                        <button type='button' class='btn btn-primary'  data-toggle='collapse' data-target="#im<?=$bmi['bmiId']?>"  >
                                            <i class='fa fa-chevron-down'></i> More
                                        </button>
                                    </td>
                                    <td class="updatecontent updatecontent<?=$id?>">
                                        <button type="submit" class="btn btn-success" >
                                            <span style="align:center" aria-hidden="true"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save</span>
                                        </button>
                                        <button type="button" class="btn btn-warning" onClick="showUpdateContentById(<?=$bmi['bmiId']?>, 'close')">
                                            <span style="align:center" aria-hidden="true">x Cancel</span>
                                        </button>
                                        <button type='button' class='btn btn-primary'  data-toggle='collapse' data-target="#imupdate<?=$bmi['bmiId']?>"  >
                                            <i class='fa fa-chevron-down'></i> More
                                        </button>
                                    </td>
                                    
                                </tr>
                                <tr class='rowcontent'>
                                    <td class="viewcontent viewcontent<?=$id?>" colspan='3' style='border-top:0'>
                                        <div id='im<?=$bmi['bmiId']?>' class='collapse'> 
                                            <img src="<?=base_url()?>assets/frontend/img/bmi/main/<?=$bmi['bmiImagePath']?>" style="width:300px;height:200px;"/><br>
                                            <span><b>Description: </b><br><?=$bmi['bmiDescription']?></span><br><br>
                                        </div>
                                        <br>
                                    </td>

                                    <td class='updatecontent updatecontent<?=$id?>' colspan='3' style='border-top:0'>
                                        <div id='imupdate<?=$bmi['bmiId']?>' class='collapse'> 
                                            <img src="<?=base_url()?>assets/frontend/img/bmi/main/<?=$bmi['bmiImagePath']?>" style="width:300px;height:200px;"/><br>
                                            BMI image: <input type="file" name="bmiImagePath"/><br>
                                            <span><b>Description: </b><br>
                                                <textarea class="updatecontent-textarea" name="bmiDescription">
                                                    <?=$bmi['bmiDescription']?>
                                                </textarea>
                                            </span><br><br>
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