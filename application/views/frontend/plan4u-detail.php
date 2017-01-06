<!-- Plan4u
    ==========================================-->
    <div class="plan4u-detail">
        <div class="container">
            <div class="row">
                 
                <?php
                    $headerImagePath = "";
                    foreach ($imageCentralMedia as $key => $value) {
                        if($value['centralMediaSection']== 'HEAD'){
                            $headerImagePath = $value['centralMediaPath'];
                        }
                    }
                ?>
                <div class="plan4u-detail-bmi" style="background: url('<?=base_url()?>assets/frontend/img/centralcontent/main/<?=$headerImagePath?>') no-repeat; background-size:cover;">
                    <div class="col-md-4" style="text-align:right;">
                        <a href="<?=base_url()?>PLAN4U/bmilessthan">
                            <div style="height:400px;">

                            </div>
                        </a>
                    </div>

                    <div class="col-md-4"  style="text-align:center;">
                        <a href="<?=base_url()?>PLAN4U/bmiequal">
                            <div style="height:400px;">

                            </div>
                        </a>
                    </div>

                    <div class="col-md-4"  style="text-align:left;">
                        <a href="<?=base_url()?>PLAN4U/bmimorethan">
                            <div style="height:400px;">

                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Plan4u
    ==========================================-->
    <div class="plan4u-calculate">
        <div class="container">
            <div class="row">
                <div class="plan4u-calculate-bmi">
                    <div class="col-md-8 col-sm-12 plan4u-header-bmi">
                        <h2><strong>Check your BMI</strong></h2>
                        <div class="col-sm-12" style="height:30px;"></div>
                        <div class="col-sm-2">Height (cm)</div>
                        <div class="col-sm-3">
                            <input type="number" name="heightBMI" id="heightBMI" onchange="calcaulateBMI()"  class="form-control" value="0">
                        </div>
                        <div class="col-sm-2">Weight (kg)</div>
                        <div class="col-sm-3">
                            <input type="number" name="weightBMI" id="weightBMI" onchange="calcaulateBMI()" class="form-control" value="0">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="col-sm-12 plan4u-header-bmi-result">
                            <h2>Your BMI is <strong id="scoreBMI">0</strong></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Plan4u
    ==========================================-->
    <div class="plan4u-option">
        <div class="container">
            <div class="row">
                <div class="plan4u-option-bmi"  style="background: url('<?=base_url()?>assets/frontend/img/centralcontent/plan4uBackground.jpg?>') no-repeat; background-size:cover;">
                    <div class="col-md-4 col-sm-12 plan4u-option-bmi-content">
                        <h2><strong>Choose your BMI for get your plan</strong></h2>
                    </div>
                    <div class="col-md-8 col-sm-12 plan4u-option-bmi-button">
                        <div class="col-md-3 col-sm-12">
                            <a href="<?=base_url()?>PLAN4U/getPlan/1">
                                <button type="button" class="btn btn-default btn-lg mainPlanForU">
                                    <h2><span aria-hidden="true"></span>< BMI</h2>
                                </button>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <a href="<?=base_url()?>PLAN4U/getPlan/2">
                                <button type="button" class="btn btn-default btn-lg mainPlanForU">
                                    <h2><span aria-hidden="true"></span>= BMI</h2>
                                </button>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <a href="<?=base_url()?>PLAN4U/getPlan/3">
                                <button type="button" class="btn btn-default btn-lg mainPlanForU">
                                    <h2><span aria-hidden="true"></span>> BMI</h2>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    


   