


			<section class="page_title ls s-py-50 corner-title ls invise overflow-visible">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<h1>Portfel</h1>
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="<?php echo base_url() ?>">Ana Səhifə</a>
								</li>
								<li class="breadcrumb-item active">
									Portfel
								</li>
							</ol>
							<div class="divider-15 d-none d-xl-block"></div>
						</div>
					</div>
				</div>
			</section>


			<section class="ls s-pt-50 s-pb-130 gallery-title">
				<div class="d-none d-lg-block divider-20"></div>
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="row justify-content-center">
								<div class="col-md-10 col-xl-8">
									<div class="filters gallery-filters small-text text-lg-right">
										<a href="#" data-filter="*" class="active selected">All</a>

                                        <?php foreach ($portfolio_category as $item) {?>
                                            <a href="#" data-filter=".<?php echo $item["name"]?>">
                                                <?php echo $item["name"]?>
                                            </a>
                                        <?php }?>
									</div>
								</div>
							</div>

							<div class="row isotope-wrapper masonry-layout c-mb-30" data-filters=".gallery-filters">

                                <?php for ($x = 0; $x < count($portfolio); $x++){?>
                                    <?php $item = $portfolio[$x]?>


                                    <!--        bunu tapana qeder oldum :D-->
                                    <?php
                                    for ($y = 0; $y < count($all_gallery); $y++){
                                        $cond = array_search($portfolio[$x]["id"], $all_gallery[$y]);


                                        if ($cond == "portfolio_id"){
                                            $gallery = $all_gallery[$y]["name"];
                                            break;
                                        }else{
                                            $gallery = "default.png";
                                        }


                                    }
                                    if (empty($all_gallery)){
                                        $gallery = "default.png";
                                    }
                                    ?>

                                    <div class="col-xl-4 col-md-6 <?php echo $item["category_name"]?>">

                                        <div class="vertical-item text-center ls ms">
                                            <div class="item-media">
                                                <img class="c_img_cover" width="370px" height="246px" src="<?php


                                                echo base_url("uploads/portfolio/$gallery") ?>" alt="">
                                                <div class="media-links">
                                                </div>
                                            </div>
                                            <div class="item-content">
                                                <h6>
                                                    <a href="<?php echo base_url("portfolio_single/$item[id]")?>">
                                                        <?php echo $item["name"]?>
                                                    </a>
                                                </h6>
                                                <div class="small-text link-a">
                                                    <a href="<?php echo base_url("portfolio_single/$item[id]")?>">
                                                        <?php echo $item["category_name"]?>
                                                    </a>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                <?php }?>







							</div>
							<!-- .isotope-wrapper-->



						</div>
					</div>
				</div>
				<div class="d-none d-lg-block divider-75"></div>
			</section>
