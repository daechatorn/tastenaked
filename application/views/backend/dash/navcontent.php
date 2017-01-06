<!-- Main content starts -->

<div class="content">

    <!-- Sidebar -->
    <div class="sidebar sidebar-fixed">
        <div class="sidebar-dropdown"><a href="#">Navigation</a></div>

        <div class="sidebar-inner" id="sidebarmanmade" width="100%">
            <!-- Search form -->
            <div class="sidebar-widget">
                <form class="sidebar-search">
                    <div class="input-box">
                        <button class="submit" type="submit">
                            <i class="icon-search"></i>
                        </button>
                          <span>
                            Menu
                          </span>
                    </div>
                </form>
            </div>

            <!--- Sidebar navigation -->
            <ul class="navi">
                <li class="has_submenu">
                    <a href="#">
                        <!-- Menu name with icon -->
                        <i class="fa fa-cutlery"></i> Foodie
                    </a>
                    <ul>
                        <li><a href="<?=base_url()?>MANAGEFOODIE">Foodie list</a></li>
                        <li><a href="<?=base_url()?>MANAGEFOODIE/addFoodieView">Add Foodie</a></li>
                    </ul>
                </li>
                <li class="has_submenu">
                    <a href="#">
                        <!-- Menu name with icon -->
                        <i class="fa fa-street-view"></i> Workout
                    </a>
                    <ul>
                        <li><a href="<?=base_url()?>MANAGEWORKOUT">Workout list</a></li>
                        <li><a href="<?=base_url()?>MANAGEWORKOUT/addWorkoutView">Add Workout</a></li>
                    </ul>
                </li>
                <li class="has_submenu">
                    <a href="#">
                        <!-- Menu name with icon -->
                        <i class="fa fa-map-o"></i> Plan4u
                    </a>
                    <ul>
                        <li><a href="<?=base_url()?>MANAGEPLAN4U">Plan4u list</a></li>
                        <li><a href="<?=base_url()?>MANAGEPLAN4U/addPlan4uView">Add Plan4u</a></li>
                    </ul>
                </li>
                <li class="has_submenu">
                    <a href="#">
                        <!-- Menu name with icon -->
                        <i class="fa fa-pencil-square"></i> Article
                    </a>
                    <ul>
                        <li><a href="<?=base_url()?>MANAGEARTICLE">Article list</a></li>
                        <li><a href="<?=base_url()?>MANAGEARTICLE/addArticleView">Add article</a></li>
                    </ul>
                </li>
                <li class="has_submenu">
                    <a href="#">
                        <!-- Menu name with icon -->
                        <i class="fa fa-list-alt" aria-hidden="true"></i> BMI
                    </a>
                    <ul>
                        <li><a href="<?=base_url()?>MANAGEBMI">BMI list</a></li>
                    </ul>
                </li>
                <li class="has_submenu">
                    <a href="#">
                        <!-- Menu name with icon -->
                        <i class="fa fa-cog"></i> Mange website
                    </a>
                    <ul>
                        <li><a href="<?=base_url()?>MANAGEWEBSITECONTENT">Website content</a></li>
                        <li><a href="<?=base_url()?>MANAGEWEBSITEMEDIA">Website media</a></li>
                    </ul>
                </li>
                <li >
                    <a href="javascript:void(0);" onClick="openUploadImageWindow()"><i class="fa fa-file-image-o" aria-hidden="true"></i>Upload image</a>
                </li>
            </ul>

        </div>
    </div>
    <!-- Sidebar ends -->

    <script>
        function openUploadImageWindow() {
            var myWindow = window.open("<?=base_url()?>UPLOADIMAGE", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=300,height=200");
        }
    </script>



