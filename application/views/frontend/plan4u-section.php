<!-- Plan4u
    ==========================================-->
    <?php
        $headerImagePath = "";
        foreach ($imageCentralMedia as $key => $value) {
            if($value['centralMediaSection']== 'HEAD'){
                $headerImagePath = $value['centralMediaPath'];
            }
        }
    ?>
    <div id="tf-about" style="background: url('<?=base_url()?>assets/frontend/img/centralcontent/main/<?=$headerImagePath?>') no-repeat; background-size:cover;">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12">
                    <div class="about-text">
                        <div class="planforu-section-title">
                            <h2>Plan for <strong>you</strong></h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-sm-12">
                    <?=$contentCentral[0]['centralContentText']?>
                </div>
                <div class="col-md-4 col-sm-12">
                    <h3 style="color:#e42e54;margin:0;">
                        <a href="javascript:void(0);" data-toggle="modal" data-target="#myModal">Don't know your BMI? </a>
                    </h3>
                </div>
                <div class="col-md-offset-3 col-md-9 col-sm-12">
                    <div class="col-md-3 col-sm-12">
                        <a href="<?=base_url()?>PLAN4U/bmilessthan">
                            <button type="button" class="btn btn-default btn-lg mainPlanForU">
                                <h2><span aria-hidden="true"></span>< BMI</h2>
                            </button>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <a href="<?=base_url()?>PLAN4U/bmiequal">
                            <button type="button" class="btn btn-default btn-lg mainPlanForU">
                                <h2><span aria-hidden="true"></span>= BMI</h2>
                            </button>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <a href="<?=base_url()?>PLAN4U/bmimorethan">
                            <button type="button" class="btn btn-default btn-lg mainPlanForU">
                                <h2><span aria-hidden="true"></span>> BMI</h2>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Calculate BMI</h4>
                </div>
                <div class="modal-body">
                    <div class="col-sm-4">Height (cm)</div>
                    <div class="col-sm-8">
                        <input type="number" name="heightBMI" id="heightBMI" onchange="calcaulateBMI()" class="form-control" value="0">
                    </div>
                    <div class="col-sm-12"></div>
                    <div class="col-sm-4">Weight (kg)</div>
                    <div class="col-sm-8">
                        <input type="number" name="weightBMI" id="weightBMI" onchange="calcaulateBMI()" class="form-control" value="0">
                    </div>
                    <br>
                    <div class="col-sm-12">
                        <span>Your BMI is <strong id="scoreBMI">0</strong></span>
                    </div>
                </div>
            </div>
        </div>
    </div>