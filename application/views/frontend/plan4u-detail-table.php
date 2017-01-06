<div class="plan4u-option plan4u-table">
        <div class="col-md-12">
            <div class="col-md-8" >
                <b>Description:</b>
                <?=$bmidetailtable[0]['tableDescription']?>
            </div>
            <div class="col-md-4" >
                <div class="col-md-12">
                    <h2>
                        <b><strong>Your plan !</strong></b>
                    </h2>
                </div>
                <div class="col-md-12"><br></div>
                <div class="col-md-12">
                    <div class="col-md-6">
                        <a href="<?=base_url()?>PLAN4U/savePDF/<?=$bmidetailtable[0]['bmiId']?>/<?=$plan?>">
                            <button class="btn btn-success" style="width:100%;margin:5px 0px;">SAVE</button>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-primary" onclick="fbshareCurrentPage();" style="width:100%;margin:5px 0px;">SHARE</button>
                    </div>
                </div>
            </div>
        </div>
        <script language="javascript">
            function fbshareCurrentPage(){
                window.open("https://www.facebook.com/sharer/sharer.php?u="+
                            escape("<?=base_url()?>PLAN4U/showPlan4uTableWithPlan/<?=$bmidetailtable[0]['bmiId']?>/<?=$plan?>")+"&t="+
                            document.title, '', 
                            'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600'
                            );
                return false; 
            }
        </script>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                <div class="table-responsive">
                    <table summary="This table shows how to create responsive tables using Bootstrap's default functionality" class="table table-bordered table-hover">
                    <caption class="text-center">Plan for you</caption>
                    <thead>
                        <tr>
                            <th></th>
                            <th>Breakfast</th>
                            <th>Snack</th>
                            <th>Lunch</th>
                            <th>Dinner</th>
                            <th>Workout</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!--bmidetailtable-->
                        <tr><td>Sunday</td>
                        <?php  foreach ($bmidetailtable as $key => $value) { if($value['itemDay'] == 'Sunday'){ $urlLink = ''; $imagePath = '';
                                if($value['isFood']=='true'){$urlLink = base_url().'FOODIE/detail/'.$value['foodieId']; $imagePath = base_url()."assets/frontend/img/foodie/main/".$value['foodieImagePath'];}
                                else{$urlLink = base_url().'WORKOUT/detail/'.$value['workoutId']; $imagePath = base_url()."assets/frontend/img/workout/main/".$value['workoutImagePath'];}
                            ?>
                            <td>
                                <a target="_blank" href="<?=$urlLink?>">
                                    <img src="<?=$imagePath?>" style="width:200px;height:150px;"/>
                                </a>
                            </td>
                        <?php } } ?>
                         </tr>
                         
                         <tr><td>Monday</td>
                        <?php  foreach ($bmidetailtable as $key => $value) { if($value['itemDay'] == 'Monday'){ $urlLink = ''; $imagePath = '';
                                if($value['isFood']=='true'){$urlLink = base_url().'FOODIE/detail/'.$value['foodieId']; $imagePath = base_url()."assets/frontend/img/foodie/main/".$value['foodieImagePath'];}
                                else{$urlLink = base_url().'WORKOUT/detail/'.$value['workoutId']; $imagePath = base_url()."assets/frontend/img/workout/main/".$value['workoutImagePath'];}
                            ?>
                            <td>
                                <a target="_blank" href="<?=$urlLink?>">
                                    <img src="<?=$imagePath?>" style="width:200px;height:150px;"/>
                                </a>
                            </td>
                        <?php } } ?>
                         </tr>

                         <tr><td>Tuesday</td>
                        <?php  foreach ($bmidetailtable as $key => $value) { if($value['itemDay'] == 'Tuesday'){ $urlLink = ''; $imagePath = '';
                                if($value['isFood']=='true'){$urlLink = base_url().'FOODIE/detail/'.$value['foodieId']; $imagePath = base_url()."assets/frontend/img/foodie/main/".$value['foodieImagePath'];}
                                else{$urlLink = base_url().'WORKOUT/detail/'.$value['workoutId']; $imagePath = base_url()."assets/frontend/img/workout/main/".$value['workoutImagePath'];}
                            ?>
                            <td>
                                <a target="_blank" href="<?=$urlLink?>">
                                    <img src="<?=$imagePath?>" style="width:200px;height:150px;"/>
                                </a>
                            </td>
                        <?php } } ?>
                         </tr>

                         <tr><td>Wednesday</td>
                        <?php  foreach ($bmidetailtable as $key => $value) { if($value['itemDay'] == 'Wednesday'){ $urlLink = ''; $imagePath = '';
                                if($value['isFood']=='true'){$urlLink = base_url().'FOODIE/detail/'.$value['foodieId']; $imagePath = base_url()."assets/frontend/img/foodie/main/".$value['foodieImagePath'];}
                                else{$urlLink = base_url().'WORKOUT/detail/'.$value['workoutId']; $imagePath = base_url()."assets/frontend/img/workout/main/".$value['workoutImagePath'];}
                            ?>
                            <td>
                                <a target="_blank" href="<?=$urlLink?>">
                                    <img src="<?=$imagePath?>" style="width:200px;height:150px;"/>
                                </a>
                            </td>
                        <?php } } ?>
                         </tr>

                         <tr><td>Thursday</td>
                        <?php  foreach ($bmidetailtable as $key => $value) { if($value['itemDay'] == 'Thursday'){ $urlLink = ''; $imagePath = '';
                                if($value['isFood']=='true'){$urlLink = base_url().'FOODIE/detail/'.$value['foodieId']; $imagePath = base_url()."assets/frontend/img/foodie/main/".$value['foodieImagePath'];}
                                else{$urlLink = base_url().'WORKOUT/detail/'.$value['workoutId']; $imagePath = base_url()."assets/frontend/img/workout/main/".$value['workoutImagePath'];}
                            ?>
                            <td>
                                <a target="_blank" href="<?=$urlLink?>">
                                    <img src="<?=$imagePath?>" style="width:200px;height:150px;"/>
                                </a>
                            </td>
                        <?php } } ?>
                         </tr>

                         <tr><td>Friday</td>
                        <?php  foreach ($bmidetailtable as $key => $value) { if($value['itemDay'] == 'Friday'){ $urlLink = ''; $imagePath = '';
                                if($value['isFood']=='true'){$urlLink = base_url().'FOODIE/detail/'.$value['foodieId']; $imagePath = base_url()."assets/frontend/img/foodie/main/".$value['foodieImagePath'];}
                                else{$urlLink = base_url().'WORKOUT/detail/'.$value['workoutId']; $imagePath = base_url()."assets/frontend/img/workout/main/".$value['workoutImagePath'];}
                            ?>
                            <td>
                                <a target="_blank" href="<?=$urlLink?>">
                                    <img src="<?=$imagePath?>" style="width:200px;height:150px;"/>
                                </a>
                            </td>
                        <?php } } ?>
                         </tr>

                         <tr><td>Saturday</td>
                        <?php  foreach ($bmidetailtable as $key => $value) { if($value['itemDay'] == 'Saturday'){ $urlLink = ''; $imagePath = '';
                                if($value['isFood']=='true'){$urlLink = base_url().'FOODIE/detail/'.$value['foodieId']; $imagePath = base_url()."assets/frontend/img/foodie/main/".$value['foodieImagePath'];}
                                else{$urlLink = base_url().'WORKOUT/detail/'.$value['workoutId']; $imagePath = base_url()."assets/frontend/img/workout/main/".$value['workoutImagePath'];}
                            ?>
                            <td>
                                <a target="_blank" href="<?=$urlLink?>">
                                    <img src="<?=$imagePath?>" style="width:200px;height:150px;"/>
                                </a>
                            </td>
                        <?php } } ?>
                         </tr>
                    </tbody>
                    </table>
                </div><!--end of .table-responsive-->
                </div>
            </div>
        </div>

        </div>
    </div>

    <script>
        $(document).ready(function(){
            var slideToPlan4UTable = "<?=$slideToPlan4UTable?>";
            if(slideToPlan4UTable == "true"){
                $('html, body').animate({
                        scrollTop: $('.plan4u-table').offset().top -170
                    }, 'slow');
            }
        });
    </script>