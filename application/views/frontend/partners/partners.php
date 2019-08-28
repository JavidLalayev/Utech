


			<section class="page_title ls s-py-50 corner-title ls invise overflow-visible">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<h1>Əməkdaşlar</h1>
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="<?php echo base_url('home') ?>">Ana Səhifə</a>
								</li>
								<li class="breadcrumb-item active">
									Əməkdaşlar
								</li>
							</ol>
							<div class="divider-15 d-none d-xl-block"></div>
						</div>
					</div>
				</div>
			</section>


			<section class="ls s-pt-5 s-pb-130">
				<div class="container">
					<div class="divider-80 d-none d-lg-block"></div>
					<div class="row c-mt-30">

                        <?php foreach ($partners as $partner) { ?>
                            <div class="c2_container" style="background: url(<?php echo base_url("uploads/partners/$partner[img]")?>);" data-link="<?php echo $partner["link"] ?>">

                                <div class="c2_overlay"></div>
                                <div class="c_span"><?php echo $partner["link"] ?></div>

                            </div>
                        <?php }?>

                    </div>
					<div class="divider-75 d-none d-lg-block"></div>
				</div>
			</section>
