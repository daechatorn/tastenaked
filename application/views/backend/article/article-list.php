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
                        <span>Admin can delete article, select hilight article and update article</span>
                    </div>
                </div>
                <!-- Page header ends -->
            </div>
          </div>

          <div class="row" style="margin-top:10px;">
            <div class="col-md-12">
                <div class="widget boxed">

                    <div class="widget-head">
                        <h4 class="pull-left"><i class="fa fa-cutlery"></i>List of article</h4>
                        <div class="clearfix"></div>
                    </div>

                    <div class="widget-content" style="padding-top:2px;">
                        <table class="table table-hover" >
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Type</th>
                                    <th>Hilight</th>
                                    <th>Date</th>
                                    <th>View</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <div class="filterbox" style="width:100%;">
                              
                              <?=form_open("MANAGEARTICLE/filter");?>
                                
                              <div class="filter-box">
                                <div class="form-group"  style="width:100%;display:inline-block;float:left;">
                                  <label for="exampleInputEmail1" style="margin-right:10px;float:left;">Type: </label>
                                  <select class="form-control" id="objectTypeSelect" name="objectTypeSelect" style="width:70%;float:left;">
                                    <option value="all">-- All type --</option>
                                    <option value='workout'>Workout</option>
                                    <option value='nutrition'>Nutrition</option>
                                    <option value='lifestyle'>Lifestyle</option>
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
                                    foreach ($allarticle as $key => $article) {
                                        $id = $article['articleId'];
                                 ?>
                                 <?= form_open_multipart("MANAGEARTICLE/updateArticle") ?>
                                 <tr>
                                    <input type="hidden" value="<?=$article['articleId']?>" name="articleId" />
                                    <td>
                                        <button type="button" class="btn btn-danger"  onClick="unuseArticleByArticleId(<?=$article['articleId']?>, <?=$article['isHilight']?>)">
                                            <span style="align:center" aria-hidden="true"><i class="fa fa-trash-o" aria-hidden="true"></i></span>
                                        </button>
                                    </td>
                                    <td class="viewcontent viewcontent<?=$id?>" ><?=$article['articleName']?></td>
                                    <td class="updatecontent updatecontent<?=$id?>" ><input type="text" name="articleName" value="<?=$article['articleName']?>" /></td>
                                    
                                    <td class="viewcontent viewcontent<?=$id?>" ><?=$article['articleType']?></td>
                                    <td class="updatecontent updatecontent<?=$id?>" >
                                        <select class="articleTypeSelect<?=$id?>" name="articleType">
                                            <option value='workout'>Workout</option>
                                            <option value='nutrition'>Nutrition</option>
                                            <option value='lifestyle'>Lifestyle</option>
                                        </select>
                                    </td>
                                    <script>
                                        $(document).ready(function(){
                                            $(".articleTypeSelect<?=$id?>").val("<?=$article['articleType']?>");
                                        });
                                    </script>
                                    
                                    <td class="viewcontent viewcontent<?=$id?>" >
                                        <div class="onoffswitch">
                                            <input type="checkbox" class="onoffswitch-checkbox" id="myonoffswitch<?=$article['articleId']?>" 
                                             <?=($article['isHilight']=="true"? "checked": "")?>
                                             disabled >
                                            <label class="onoffswitch-label" for="myonoffswitch<?=$article['articleId']?>">
                                                <span class="onoffswitch-inner"></span>
                                                <span class="onoffswitch-switch"></span>
                                            </label>
                                        </div>
                                    </td>

                                    <td class="updatecontent updatecontent<?=$id?>" >
                                        <div class="onoffswitch">
                                            <input type="checkbox" class="onoffswitch-checkbox isHilight" name="isHilight" onchange="checkCanHilight(updatemyonoffswitch<?=$article['articleId']?>, <?=$canHilight?>)" id="updatemyonoffswitch<?=$article['articleId']?>" 
                                             <?=($article['isHilight']=="true"? "checked": "")?> >
                                            <label class="onoffswitch-label" for="updatemyonoffswitch<?=$article['articleId']?>">
                                                <span class="onoffswitch-inner"></span>
                                                <span class="onoffswitch-switch"></span>
                                            </label>
                                        </div>
                                    </td>

                                    <td class="viewcontent viewcontent<?=$id?>">
                                       <?=date("F j, Y", strtotime($article['articleDate']))?> 
                                    </td>
                                    <td class="updatecontent updatecontent<?=$id?>">
                                        <input type="date" name="articleDate" value="<?=$article['articleDate']?>"/>
                                    </td>

                                    <td class="viewcontent viewcontent<?=$id?>" ><?=$article['articleView']?></td>
                                    <td class="updatecontent updatecontent<?=$id?>" ><?=$article['articleView']?></td>

                                    <td class="viewcontent viewcontent<?=$id?>">
                                        <button type="button" class="btn btn-success" onClick="showUpdateContentById(<?=$article['articleId']?>, 'open')">
                                            <span style="align:center" aria-hidden="true"><i class="fa fa-pencil-square-o" aria-hidden="true"> Update</i></span>
                                        </button>
                                        <button type='button' class='btn btn-primary'  data-toggle='collapse' data-target="#im<?=$article['articleId']?>"  >
                                            <i class='fa fa-chevron-down'></i> More
                                        </button>
                                    </td>
                                    <td class="updatecontent updatecontent<?=$id?>">
                                        <button type="submit" class="btn btn-success" >
                                            <span style="align:center" aria-hidden="true"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save</span>
                                        </button>
                                        <button type="button" class="btn btn-warning" onClick="showUpdateContentById(<?=$article['articleId']?>, 'close')">
                                            <span style="align:center" aria-hidden="true">x Cancel</span>
                                        </button>
                                        <button type='button' class='btn btn-primary'  data-toggle='collapse' data-target="#imupdate<?=$article['articleId']?>"  >
                                            <i class='fa fa-chevron-down'></i> More
                                        </button>
                                    </td>
                                    
                                </tr>
                               
                                <tr class='rowcontent'>
                                    <td class="viewcontent viewcontent<?=$id?>" colspan='7' style='border-top:0'>
                                        <div id='im<?=$article['articleId']?>' class='collapse'> 
                                            <img src="<?=base_url()?>assets/frontend/img/article/main/<?=$article['articleImagePath']?>" style="width:300px;height:200px;"/><br>
                                            <span><b>Short description: </b><?=$article['shortDescription']?></span><br><br>
                                            <span><b>Article detail: </b><br><?=$article['articleDetail']?></span><br><br>
                                           
                                        </div>
                                        <br>
                                    </td>

                                    <td class='updatecontent updatecontent<?=$id?>' colspan='7' style='border-top:0'>
                                        <div id='imupdate<?=$article['articleId']?>' class='collapse'> 
                                            <img src="<?=base_url()?>assets/frontend/img/article/main/<?=$article['articleImagePath']?>" style="width:300px;height:200px;"/><br>
                                            article image: <input type="file" name="articleImagePath"/><br>
                                            <span><b>Short description: </b><br>
                                                <textarea class="updatecontent-textarea" name="shortDescription">
                                                    <?=$article['shortDescription']?>
                                                </textarea>
                                            </span><br><br>
                                            <span><b>Article detail: </b><br>
                                                <textarea class="updatecontent-textarea" name="articleDetail">
                                                    <?=$article['articleDetail']?>
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