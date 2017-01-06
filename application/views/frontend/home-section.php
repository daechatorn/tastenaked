<!-- Home Page
    ========================================== -->
    <div id="tf-home" class="content-section video-section">
        <div class="pattern-overlay">
            <a id="bgndVideo" class="player" 
                <?php
                    $headerVdoPath = "";
                    foreach ($vdoCentralMedia as $key => $value) {
                        if($value['centralMediaSection']== 'HEAD'){
                            $headerVdoPath = $value['centralMediaPath'];
                        }
                    }
                ?>
                data-property="{videoURL:'https://www.youtube.com/watch?v=<?=$headerVdoPath?>',
                                containment:'.video-section', quality:'large', autoPlay:true, 
                                mute:true, opacity:1}"> bg
            </a>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                    </div>
                </div>
            </div>
        </div>
    </div>