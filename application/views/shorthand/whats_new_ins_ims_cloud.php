<!-- whats new start -->
		<?php 
	      $getAllWhatsNews = $this->site_mdl->getAllWhatsNew_INS_IMS_CLOUD();
	      foreach ($getAllWhatsNews as $getAllWhatsNew) {
			if(isset($getAllWhatsNew['solution_name']) == 'Infrastructure Solutions' or $getAllWhatsNew['solution_name'] == "Cloud Services" or $getAllWhatsNew['solution_name'] == "Managed Services" && $getAllWhatsNew['Wnew_type'] == "solution"){
		?>
		<div class="item bor-bot clearfix">
			<div class="col-md-5">
				<figure> <img src="<?php echo EVENT_SHOW_PATH.$getAllWhatsNew['Wnew_photo'];?>" alt="Image" class="img-responsive"> </figure>
			</div>
			<div class="col-md-6">
				<div class="wts-new-txt">
					<p><?php echo $getAllWhatsNew['Wnew_caption'];?></p>
					<p class="hidden-xs"><?php echo echoStr($getAllWhatsNew['Wnew_desc']);?></p>
					<?php 
    if(isset($getAllWhatsNew['Wnew_redirect_url']) && !empty($getAllWhatsNew['Wnew_redirect_url'])){?>
          <a type="button" href="<?php echo echoStr($getAllWhatsNew['Wnew_redirect_url']);?>" class="btn pmd-btn-outline sub-btn btn-default" target="_blank">Read More</a>
<?php }else{ ?>
<button type="button" class="btn pmd-btn-outline sub-btn btn-default" style="display: none;">Read More</button>
<?php } ?>

				</div>
			</div>
		</div>

		 <?php  } } ?>

     <!-- whats new end -->