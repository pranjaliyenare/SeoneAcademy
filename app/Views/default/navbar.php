
<body onload="myFunction()">
    <!--::header part start::-->
    <header class="main_menu single_page_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand logo_1" href="<?php echo base_url(); ?>"> <img src="<?php echo base_url(); ?>/public/assets/img/logo.png" alt="logo"> </a>
                        <a class="navbar-brand logo_2" href="<?php echo base_url(); ?>"> <img src="<?php echo base_url(); ?>/public/assets/img/mail_logo.png" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item">
                                    <a class="nav-link <?php if($page == 'index') {echo 'active';}?>" href="<?php echo base_url(); ?>">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php if($page == 'about') {echo 'active';}?>" href="<?php echo base_url("about"); ?>">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php if($page == 'courses') {echo 'active';}?>" href="<?php echo base_url("courses"); ?>">Courses</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php if($page == 'blogs') {echo 'active';}?>" href="<?php echo base_url("blogs"); ?>">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php if($page == 'contact') {echo 'active';}?>" href="<?php echo base_url("contact"); ?>">Contact</a>
                                </li>
                                <li class="d-none d-lg-block">
                                    <a class="btn_1" href="<?php echo base_url("form"); ?>" target="_blank">Enroll Now</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->
<!--   
    <script type="text/javascript">

        $cookie = "<//?php echo $_COOKIE['alert_modal'];?>";

        $(document).on('click', '#close_model', function (e) {
            <//?php

            $is_true = true;

            setcookie('alert_modal', $is_true , time() + (86400 * 7)); // 86400 = 1 day

            ?>

        });

        $(window).on('load',function(){
            if ($cookie == false) {
            $('#myModal').modal('show');
            }
        });    

    </script>

    <div  class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3>Registration</h3>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-header">
                <form action="<//?php echo base_url("download_brochure"); ?>" method="POST">
                    <//?php 
                        if(session()->has('message')){
                        ?>
                            <div class="alert <//?= session()->getFlashdata('alert-class') ?>">
                                <//?= session()->getFlashdata('message') ?>
                            </div>
                        <//?php
                        }
                    ?>
                    <div class="form-group">
                    <label for="name">Full Name : </label>
                    <input type="text" class="form-control" id="name" name="name" style="display: initial;" placeholder="Full Name" required/>
                    <label for="addr">Address : </label>
                    <input type="text" class="form-control" id="addr" name="addr" style="display: initial;"  placeholder="Address" required/>
                    <label for="phone">Phone : </label>
                    <input type="number" class="form-control" id="phone" name="phone" style="display: initial;"  placeholder="Phone" required/>
                    <label for="email">Email : </label>
                    <input type="email" id="email" name="email" class="form-control" style="display: initial;" placeholder="Email" required/>
                    </div>
                </form>
                </div>
                <div class="modal-footer">
                <a type="submit" href="<//?php echo base_url(); ?>" class=" btn_1">Submit</a>
                </div>
                
            </div>
        </div>
    </div>
     -->