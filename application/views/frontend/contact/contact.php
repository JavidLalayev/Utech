<style>
    .map-container{
        overflow:hidden;
        padding-bottom:56.25%;
        position:relative;
        height:0;
    }
    .map-container iframe{
        left:0;
        top:0;
        height:100%;
        width:100%;
        position:absolute;
    }
</style>


			<section class="page_title ls s-py-50 corner-title ls invise overflow-visible">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<h1>Əlaqə</h1>
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="<?php echo base_url('Home') ?>">Ana Səhifə</a>
								</li>
								<li class="breadcrumb-item active">
                                    Əlaqə
								</li>
							</ol>
							<div class="divider-15 d-none d-xl-block"></div>
						</div>
					</div>
				</div>
			</section>


			<section class="ls s-pt-30 s-pb-100 s-pb-md-130 s-py-lg-100 contact2">
				<div class="divider-15 d-none d-xl-block"></div>
				<div class="container">
					<div class="row c-mb-30 c-mb-md-50">
						<div class="col-md-4 text-center">
							<div class="border-icon">
								<div class="teaser-icon">
									<img src="<?php echo base_url('public/assets_for_frontend/images') ?>/icon1.png" alt="">
								</div>
							</div>
							<h6>
                                Əlaqə Nömrələrimiz
							</h6>
							<p class="teaser-content">
                                +994-55-208-55-19
								<br>
                                +994-50-228-91-19
							</p>
						</div>
						<div class="col-md-4 text-center">
							<div class="border-icon">
								<div class="teaser-icon">
									<img src="<?php echo base_url('public/assets_for_frontend/images') ?>/icon3.png" alt="">
								</div>
							</div>
							<h6>
								Email
							</h6>
							<p class="teaser-content">
                                info@utech.az
							</p>
						</div>
						<div class="col-md-4 text-center">
							<div class="border-icon">
								<div class="teaser-icon">
									<img src="<?php echo base_url('public/assets_for_frontend/images') ?>/icon2.png" alt="">
								</div>
							</div>
							<h6>
								Ünvanımız
							</h6>
							<p class="teaser-content">
                                Harmony Hotel Baku,
								<br> Xəqani Rüstəmov, Bakı
							</p>
						</div>
					</div>
					<div class="divider-60 d-none d-xl-block"></div>
					<div class="row">
						<div class="col-lg-12 ">
                            <?php if ($this->session->flashdata("sccs")) {?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <?php echo $this->session->flashdata("sccs") ?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            <?php }?>
							<form class="contact-form" method="post" action="<?php echo base_url("Send_Message") ?>">

								<div class="row c-gutter-20">

									<div class="col-12 col-md-6">
										<div class="form-group has-placeholder">
											<label for="name">Ad Soyad
												<span class="required">*</span>
											</label>
											<input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control text-left" placeholder="Ad Soyad" >
                                            <?php if (isset($form_error)){?>
                                                <small  style="color:red; float: right"> <?php echo form_error("name");?> </small>
                                            <?php }?>
                                        </div>
										<div class="form-group has-placeholder ">
											<label for="email">E-poçt
												<span class="required">*</span>
											</label>
											<input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control text-left" placeholder="E-poçt">
                                            <?php if (isset($form_error)){?>
                                                <small  style="color:red; float: right"> <?php echo form_error("email");?> </small>
                                            <?php }?>
                                        </div>
										<div class="form-group has-placeholder">
											<label for="subject">
												<span class="required">*</span>
											</label>
											<input type="text" aria-required="true" size="30" value="" name="mobile" id="subject" class="form-control text-left" placeholder="Mobil nömrə">
                                            <?php if (isset($form_error)){?>
                                                <small  style="color:red; float: right"> <?php echo form_error("mobile");?> </small>
                                            <?php }?>
                                        </div>
									</div>
									<div class="col-12 col-md-6">
										<div class="form-group has-placeholder">
											<label for="message">Mesajınız</label>
											<textarea aria-required="true" rows="6" cols="45" name="message" id="message" class="form-control text-left" placeholder="Mesajınız"></textarea>
                                            <?php if (isset($form_error)){?>
                                                <small  style="color:red; float: right"> <?php echo form_error("message");?> </small>
                                            <?php }?>
                                        </div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<div class="form-group text-center">
											<button type="submit" id="contact_form_submit" name="contact_submit" class="btn btn-maincolor">Göndər</button>
                                            <?php if ($this->session->flashdata("err")) {?>
                                            <div class="contact-form-respond color-main mt-20"><?php echo $this->session->flashdata("err") ?></div>
                                            <?php }?>
                                        </div>
									</div>
								</div>
							</form>

						</div>


						<!--.col-* -->

						<div class="divider-80 d-none d-xl-block"></div>

					</div>

                    <br>
                    <div class="col-lg-12 ">
                        <!--Google map-->
                        <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3039.2123180813237!2d49.879462580777734!3d40.38198673152027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40307d55d8a9b095%3A0x282f579044192853!2sHarmony+Hotel+Baku!5e0!3m2!1saz!2s!4v1563630995846!5m2!1saz!2s" width="200" height="50" frameborder="0" style="border:0" ></iframe>
                        </div>
                        <!--Google Maps-->
                    </div>
				</div>
			</section>



