
    </div> <!-- End content box -->
    
    <nav id="footer">
        <div class="container">
            <div class="pull-left fnav">
                <p>ALL RIGHTS RESERVED. COPYRIGHT © 2016. <a href="javascript:void(0);">Taste & Naked</a></p>
            </div>
            <div class="pull-right fnav">
                <ul class="footer-social">
                    <li><a href="https://www.facebook.com/bakeby.thikumporn/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="http://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    
    <!--Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="<?=base_url()?>assets/frontend/js/bootstrap.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/frontend/js/SmoothScroll.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/frontend/js/jquery.isotope.js"></script>

    <script src="<?=base_url()?>assets/frontend/js/owl.carousel.js"></script>

    <!-- Javascripts
    ================================================== -->
    <script type="text/javascript" src="<?=base_url()?>assets/frontend/js/main.js"></script>

    <script>
        $(document).ready(function () {
            $(".player").mb_YTPlayer();
        });
        function calcaulateBMI(){
            var weightBMI = document.getElementById("weightBMI").value;
            var heightBMI = document.getElementById("heightBMI").value;
            var scoreBMI = 0;
            if(weightBMI != 0 && heightBMI != 0){
                scoreBMI = weightBMI/( (heightBMI/100) * (heightBMI/100));
            }
            console.log("weightBMI ::: "+weightBMI);
            console.log("heightBMI ::: "+heightBMI);
            console.log("scoreBMI ::: "+scoreBMI);
            document.getElementById("scoreBMI").innerHTML = scoreBMI.toFixed(2);;
        }
    </script>
    <script src="http://pupunzi.com/mb.components/mb.YTPlayer/demo/inc/jquery.mb.YTPlayer.js"></script>

</body>
</html>