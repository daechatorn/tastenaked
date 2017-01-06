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
                        <span>Admin can delete foodie, select recommendation foodie and update foodie</span>
                    </div>
                </div>
                <!-- Page header ends -->
            </div>
          </div>

          <div class="row" style="margin-top:10px;">
            <div class="col-md-12">
                <div class="widget boxed">

                    <div class="widget-head">
                        <h4 class="pull-left"><i class="fa fa-cutlery"></i>List of foodie</h4>
                        <div class="clearfix"></div>
                    </div>

                    <div class="widget-content" style="padding-top:2px;">
                        <table class="table table-hover" >
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Type</th>
                                    <th>Recommendation</th>
                                    <th>View</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <div class="filterbox" style="width:100%;">
                              
                              <?=form_open("MANAGEFOODIE/filter");?>
                                
                              <div class="filter-box">
                                <div class="form-group"  style="width:100%;display:inline-block;float:left;">
                                  <label for="exampleInputEmail1" style="margin-right:10px;float:left;">Type: </label>
                                  <select class="form-control" id="objectTypeSelect" name="objectTypeSelect" style="width:70%;float:left;">
                                    <option value="all">-- All type --</option>
                                    <option value='savory'>Savory</option>
                                    <option value='dessert'>Dessert</option>
                                    <option value='drink'>Drink</option>
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
                                    foreach ($allfoodie as $key => $foodie) {
                                        $id = $foodie['foodieId'];
                                 ?>
                                 <?= form_open_multipart("MANAGEFOODIE/updateFoodie") ?>
                                 <tr>
                                    <input type="hidden" value="<?=$foodie['foodieId']?>" name="foodieId" />
                                    <td>
                                        <button type="button" class="btn btn-danger"  onClick="unuseFoodieByFoodieId(<?=$foodie['foodieId']?>, <?=$foodie['isRecommend']?>)">
                                            <span style="align:center" aria-hidden="true"><i class="fa fa-trash-o" aria-hidden="true"></i></span>
                                        </button>
                                    </td>
                                    <td class="viewcontent viewcontent<?=$id?>" ><?=$foodie['foodieName']?></td>
                                    <td class="updatecontent updatecontent<?=$id?>" ><input type="text" name="foodieName" value="<?=$foodie['foodieName']?>" /></td>
                                    
                                    <td class="viewcontent viewcontent<?=$id?>" ><?=$foodie['foodieType']?></td>
                                    <td class="updatecontent updatecontent<?=$id?>" >
                                        <select class="foodieTypeSelect<?=$id?>" name="foodieType">
                                            <option value='savory'>Savory</option>
                                            <option value='dessert'>Dessert</option>
                                            <option value='drink'>Drink</option>
                                        </select>
                                    </td>
                                    <script>
                                        $(document).ready(function(){
                                            $(".foodieTypeSelect<?=$id?>").val("<?=$foodie['foodieType']?>");
                                        });
                                    </script>
                                    
                                    <td class="viewcontent viewcontent<?=$id?>" >
                                        <div class="onoffswitch">
                                            <input type="checkbox" class="onoffswitch-checkbox" id="myonoffswitch<?=$foodie['foodieId']?>" 
                                             <?=($foodie['isRecommend']=="true"? "checked": "")?>
                                             disabled >
                                            <label class="onoffswitch-label" for="myonoffswitch<?=$foodie['foodieId']?>">
                                                <span class="onoffswitch-inner"></span>
                                                <span class="onoffswitch-switch"></span>
                                            </label>
                                        </div>
                                    </td>

                                    <td class="updatecontent updatecontent<?=$id?>" >
                                        <div class="onoffswitch">
                                            <input type="checkbox" onchange="checkCanRecommend(updatemyonoffswitch<?=$foodie['foodieId']?>, <?=$canRecommend?>)" name="isRecommend" class="onoffswitch-checkbox isRecommend" id="updatemyonoffswitch<?=$foodie['foodieId']?>" 
                                             <?=($foodie['isRecommend']=="true"? "checked": "")?>  >
                                            <label class="onoffswitch-label" for="updatemyonoffswitch<?=$foodie['foodieId']?>">
                                                <span class="onoffswitch-inner"></span>
                                                <span class="onoffswitch-switch"></span>
                                            </label>
                                        </div>
                                    </td>

                                    <td class="viewcontent viewcontent<?=$id?>" ><?=$foodie['foodieView']?></td>
                                    <td class="updatecontent updatecontent<?=$id?>" ><?=$foodie['foodieView']?></td>

                                    <td class="viewcontent viewcontent<?=$id?>">
                                        <button type="button" class="btn btn-success" onClick="showUpdateContentById(<?=$foodie['foodieId']?>, 'open')">
                                            <span style="align:center" aria-hidden="true"><i class="fa fa-pencil-square-o" aria-hidden="true"> Update</i></span>
                                        </button>
                                        <button type='button' class='btn btn-primary'  data-toggle='collapse' data-target="#im<?=$foodie['foodieId']?>"  >
                                            <i class='fa fa-chevron-down'></i> More
                                        </button>
                                    </td>
                                    <td class="updatecontent updatecontent<?=$id?>">
                                        <button type="submit" class="btn btn-success" >
                                            <span style="align:center" aria-hidden="true"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save</span>
                                        </button>
                                        <button type="button" class="btn btn-warning" onClick="showUpdateContentById(<?=$foodie['foodieId']?>, 'close')">
                                            <span style="align:center" aria-hidden="true">x Cancel</span>
                                        </button>
                                        <button type='button' class='btn btn-primary'  data-toggle='collapse' data-target="#imupdate<?=$foodie['foodieId']?>"  >
                                            <i class='fa fa-chevron-down'></i> More
                                        </button>
                                    </td>
                                    
                                </tr>
                                <tr class='rowcontent'>
                                    <td class="viewcontent viewcontent<?=$id?>" colspan='6' style='border-top:0'>
                                        <div id='im<?=$foodie['foodieId']?>' class='collapse'> 
                                            <img src="<?=base_url()?>assets/frontend/img/foodie/main/<?=$foodie['foodieImagePath']?>" style="width:300px;height:200px;"/><br>
                                            <span><b>Short description: </b><?=$foodie['shortDescription']?></span><br><br>
                                            <span><b>Description: </b><br><?=$foodie['foodieDescription']?></span><br><br>
                                            <span><b>Ingredient: </b><br><?=$foodie['ingredient']?></span><br><br>
                                            <span><b>Procedures: </b><br><?=$foodie['procedures']?></span><br><br>
                                            <span><b>VDO Path: </b><?=$foodie['foodieVdoPath']?></span><br>
                                            <iframe src="https://www.youtube.com/embed/<?=$foodie['foodieVdoPath']?>" frameborder="0" allowfullscreen style="width:400px;height:300px;"></iframe>
                                            <br><br>
                                            <span><b>Other Image: </b></span><br>
                                            <?php
                                                foreach ($allfoodieWithOtherImage as $key => $value) {
                                                    if($value['foodieId'] == $foodie['foodieId']){
                                            ?>
                                                <img src="<?=base_url()?>assets/frontend/img/foodie/other/<?=$value['imagePath']?>" style="width:300px;height:200px;"/> &nbsp;
                                            <?php
                                                }}
                                            ?>
                                        </div>
                                        <br>
                                    </td>

                                    <td class='updatecontent updatecontent<?=$id?>' colspan='6' style='border-top:0'>
                                        <div id='imupdate<?=$foodie['foodieId']?>' class='collapse'> 
                                            <img src="<?=base_url()?>assets/frontend/img/foodie/main/<?=$foodie['foodieImagePath']?>" style="width:300px;height:200px;"/><br>
                                            foodie image: <input type="file" name="foodieImagePath"/><br>
                                            <span><b>Short description: </b><br>
                                                <textarea class="updatecontent-textarea" name="shortDescription">
                                                    <?=$foodie['shortDescription']?>
                                                </textarea>
                                            </span><br><br>
                                            <span><b>Description: </b><br>
                                                <textarea class="updatecontent-textarea" name="foodieDescription">
                                                    <?=$foodie['foodieDescription']?>
                                                </textarea>
                                            </span><br><br>
                                            <span><b>Ingredient: </b><br>
                                                <textarea class="updatecontent-textarea" name="ingredient">
                                                    <?=$foodie['ingredient']?>
                                                </textarea>
                                            </span><br><br>
                                            <span><b>Procedures: </b><br>
                                                <textarea class="updatecontent-textarea" name="procedures">
                                                    <?=$foodie['procedures']?>
                                                </textarea>
                                            </span><br><br>
                                            <span><b>VDO Path: </b> <br>
                                                <input type="text" name="foodieVdoPath" value="<?=$foodie['foodieVdoPath']?>" />
                                            </span><br><br>
                                            <span><b>Other Image: </b></span><br>
                                            <?php
                                                foreach ($allfoodieWithOtherImage as $key => $value) {
                                                    if($value['foodieId'] == $foodie['foodieId']){
                                            ?>
                                                <img src="<?=base_url()?>assets/frontend/img/foodie/other/<?=$value['imagePath']?>" style="width:300px;height:200px;"/>
                                                <input type="hidden" name="foodieImageId[]" value="<?=$value['foodieImageId']?>" multiple/>
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