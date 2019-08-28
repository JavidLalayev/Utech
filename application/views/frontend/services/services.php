
			<section class="page_title ls s-py-50 corner-title ls invise overflow-visible">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<h1>Servislərimiz</h1>
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="<?php echo base_url('Home') ?>">Ana Səhifə</a>
								</li>
								<li class="breadcrumb-item active">
                                    Servislərimiz
								</li>
							</ol>
							<div class="divider-15 d-none d-xl-block"></div>
						</div>
					</div>
				</div>
			</section>


			<section class="ls s-pt-30 s-pb-20 s-pb-lg-50 s-pt-lg-50 c-gutter-60 c-mb-40 c-mb-md-60 service-item2">
				<div class="d-none d-lg-block divider-65"></div>
				<div class="container">
					<div class="row">
                        <?php foreach ($services as $service){?>
                            <a href="<?php echo base_url('Services/Single/'.$service['id']) ?>"><div class="col-md-4 col-sm-6">

							<div class="vertical-item text-center">
								<div class="item-media">
									<img style="
									            object-fit: cover;
									            max-width: 500px;
                                                width: 320px;
                                                height: 180px"  src="<?php echo base_url('uploads/services/'.$service['service_img']) ?>" alt="">
								</div>
								<div class="item-content">
									<h6>
										<a href="<?php echo base_url('Services/Single/'.$service['id']) ?>"><?php echo $service['service_name'] ?></a>
									</h6>

									<p>
                                        <?php echo $service['service_title'] ?>
									</p>

								</div>
							</div>
						</div></a>
                        <?php } ?>
						<div class="d-none d-lg-block divider-10"></div>
					</div>
				</div>
                <br><br><br><br>
			</section>