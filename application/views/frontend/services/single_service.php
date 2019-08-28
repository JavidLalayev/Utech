




			<section class="page_title ls s-py-50 corner-title ls invise overflow-visible">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<h1><?php echo $single['service_name'] ?></h1>
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="<?php echo base_url('Home') ?>">Ana Səhifə</a>
								</li>

								<li class="breadcrumb-item active">
									<?php echo $single['service_name'] ?>

                                </li>
							</ol>
							<div class="divider-15 d-none d-xl-block"></div>
						</div>
					</div>
				</div>
			</section>


			<section class="ls s-pt-30 s-pb-50 s-pt-lg-50 s-pb-lg-100 c-mb-50 service-item4">
				<div class="d-none d-lg-block divider-65"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-4 c-gutter-50 service-widget">

							<h6>Digər Servislər</h6>
							<ul class="list">
                                <?php foreach ($services as $service) {?>
								<li class="text-left">
									<a href="<?php echo base_url('Services/Single/'.$service['id']) ?>"><?php echo $service['service_name'] ?></a>
                                    <?php } ?>
								</li>
							</ul>
						</div>
						<div class="col-md-8 ">
							<img style="
							            object-fit: cover;
                                       width: 770px;
                                       height: 513.33px;
                                        " src="<?php echo base_url('uploads/services/'.$single['service_img']) ?>" alt="">
							<div class="icon-box hero-bg single">
								<p class="excerpt">
									<?php echo $single['service_title'] ?>
								</p>
								<p>
                                    <?php echo $single['service_desc'] ?>
                                </p>
								<div  class="row c-gutter-60 c-mb-20 c-mb-lg-40">
                                    <?php if ($portfolio) { ?>
									<div class="col-md-12 col-lg-0 left-part">
										<div class="progress-service">
											<h6 style="color: darkred">İşlərimiz</h6>
                                            <?php foreach ($portfolio as $port) {?>

											<p  class="progress-title"><?php echo $port['name'] ?> </p>

                                                <div style="
     overflow: hidden;
     text-overflow: ellipsis;
                                                max-height: 130px"><?php echo $port['desc']?></div>

											<div class="progress">
												<div>
												</div>
											</div>
                                            <?php }  ?>

										</div>

									</div>
                                        <br><br>
                                    <?php } ?>

                                        <?php if ($single['service_advantages']) {?>
									<div class="col-md-12 col-lg-6 right-part">
										<h6 style="color: darkred" >Üstünlüklərimiz</h6>
									</div>
                                        <?php } ?>

								<!-- .row -->

                                </div>

									<?php echo $single['service_advantages'] ?>



							</div>
							</div>
						</div>
						<!-- .col-* -->
					</div>
				</div>
				<div class="d-none d-lg-block divider-50"></div>
                <br>
			</section>