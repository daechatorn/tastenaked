<!-- Work out 
    ==========================================-->
    <div id="tf-services">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="video-wrapper">
                        <?php
                            $footerVdoPath = "";
                            foreach ($vdoCentralMedia as $key => $value) {
                                if($value['centralMediaSection']== 'FOOTER'){
                                    $footerVdoPath = $value['centralMediaPath'];
                                }
                            }
                        ?>
                        <iframe src="https://www.youtube.com/embed/<?=$footerVdoPath?>" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-6 workout-content">
                    <div class="about-text">
                        <div class="col-md-12">
                            <div class="section-title">
                                <div class="col-md-9 planforu-section-title">
                                    <h2><strong>Work out now!</strong></h2>
                                </div>
                                <div class="col-md-3"></div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <a href="<?=base_url()?>WORKOUT/detailcriteria/cardio">
                                <h2>
                                    <i class="fa fa-play" aria-hidden="true"></i>
                                    <strong>Cardio</strong>
                                </h2>
                            </a>
                        </div>
                        <div class="col-md-12">
                            <a href="<?=base_url()?>WORKOUT/detailcriteria/weightTraining">
                                <h2>
                                    <i class="fa fa-play" aria-hidden="true"></i>
                                    <strong>Weight Training</strong>
                                </h2>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>