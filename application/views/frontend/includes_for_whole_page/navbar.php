
<div id="canvas">
    <div id="box_wrapper">

        <!--navbar hissesi-->
        <?php if ($this->sub_folder == "home"){ ?>
        <div class="header_absolute s-pb-30">
        <?php } ?>
            <header class="page_header ds">

                <!--                saytin esas navbari-->
                <div class="container-fluid">
                    <div class="row align-items-center">

                        <!--                        saytin loqosu olacaq hisse-->
                        <div class="col-xl-2 col-lg-3 col-11">
                            <a href="<?php echo base_url()?>" class="logo text-center">
                                <img src="<?php echo base_url("public/assets_for_frontend/images/logo.png")?>" alt="">
                            </a>
                        </div>
                        <!--                        saytin loqosu olacaq hisse-->


                        <!--                        main navbar-->
                        <div class="col-xl-8 col-lg-6 col-1 text-sm-center">
                            <nav class="top-nav">
                                <ul class="nav sf-menu">

                                    <!--                                    ana seyfe-->
                                    <li class="<?php if ($this->sub_folder == 'home') { ?>active <?php }  ?>" >
                                        <a href="<?php echo base_url("Home")?>">Ana Səhifə</a>
                                    </li>
                                    <!--                                    ana seyfe-->



                                    <!--                                    haqqimizda-->
                                    <li class="<?php if ($this->sub_folder == 'about') { ?>active <?php }  ?>" >
                                        <a class="c_cursor_pointer">Haqqımızda</a>
                                        <ul>
                                            <li>
                                                <a href="<?php echo base_url("about")?>">Biz Kimik?</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url("why_us")?>">Niyə Biz?</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <!--                                    haqqimizda-->




                                    <!--                                    Servisler-->
                                    <li class="<?php if ($this->sub_folder == 'services') { ?>active <?php }  ?>" >
                                        <a href="<?php echo base_url('Services') ?>">Xidmətlər</a>
                                    </li>
                                    <!--                                    Servisler-->




                                    <!-- portfolio -->
                                    <li class="<?php if ($this->sub_folder == 'portfolio') { ?>active <?php }  ?>" >
                                        <a href="<?php echo base_url('Portfolio') ?>">Portfel</a>
                                    </li>
                                    <!-- portfolio  -->


                                    <!-- emekdasliq -->
                                    <li class="<?php if ($this->sub_folder == 'partners') { ?>active <?php }  ?>">
                                        <a href="<?php echo base_url('partners') ?>">Əməkdaşlıq</a>
                                    </li>
                                    <!-- emekdasliq  -->

                                    <!-- elaqe -->
                                    <li class="<?php if ($this->sub_folder == 'contact') { ?>active <?php }  ?>" >
                                        <a href="<?php echo base_url('Contact') ?>">Əlaqə</a>
                                    </li>
                                    <!-- elaqe  -->






                                </ul>
                            </nav>
                        </div>
                        <!--                        main navbar-->


                        <!--                        navbarda olan nomre hissesi-->
                        <div class="col-xl-2 col-lg-3 text-lg-left text-xl-right d-none d-lg-block">
                            <div class="header_phone">
                                <h6>
<!--                                    <span>1-800</span>-123-4567-->
                                </h6>
                            </div>
                        </div>
                        <!--                        navbarda olan nomre hissesi-->


                    </div>
                </div>
                <!--                saytin esas navbari-->



                <!-- mobil navbari acan icon-->
                <span class="toggle_menu">
                    <span></span>
                </span>
                <!-- mobil navbari acan icon-->

            </header>
        </div>
        <!--navbar hissesi-->



        <!--ne olduqunu hele tapmamisam-->
        <span class="toggle_menu_side header-slide">
				<span></span>
        </span>
        <!--ne olduqunu hele tapmamisam-->