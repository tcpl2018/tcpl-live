<?php if ($openings) { ?>

<div class="all-job-des row clearfix career-page">
									<?php foreach($openings as $opening){ ?>
										<a href="<?php echo BASE_URL.'/jobDescription?jc='.$opening['prod_code']; ?>">
											<div class="col-md-5 job-des">
												<div class="job-des-cmn">
													<h1><?php echo $opening['prod_title']; ?></h1>
													<p><img src="<?php echo BASE_URL_IMG; ?>location-icon.png"><span><?php echo $opening['prod_location']; ?></span>
													</p>
												</div>
											</div>
										</a>
										<?php } ?>
									</div>

									<?php  } else {?>
									<div class="cmn-hd"><h1 style="margin-bottom: 50px">Records not available</h1></div>
									<?php } ?>