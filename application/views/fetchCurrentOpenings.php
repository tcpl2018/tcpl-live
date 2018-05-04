<?php if ($openings) { ?>
<?php foreach($openings as $opening){ ?>
<div class="col-md-4">
          <div class="cmn-card">
            <h3><?php echo $opening['prod_title']; ?></h3>
            <p><img src="images/map-marker.png" alt="map marker icon"> <?php echo $opening['prod_location']; ?></p><br>
            <!-- <?php echo echoStr(substr($opening['prod_desc'],0,300)); ?> -->
        <div class="btn-box">
          <a href="<?php echo BASE_URL.'/jobDescription?jc='.$opening['prod_code']; ?>"><button type="button" class="btn pmd-ripple-effect btn-primary"> Apply Now </button></a>
        </div>
          </div>
        </div>
<?php } ?>
<?php  } else {?>
<div class="cmn-hd"><h1 style="margin-bottom: 50px;text-align: center;">Records not available</h1></div>
<?php } ?> 



