<div class="header-section small-and-extra-small-device-display" >
    <div class="container" >
        <div class="row header-wrap" >
            <div class="col-sm-6 col-md-6 form-group">
                <a href="<?php echo base_url(); ?>">
                    <img class="img-responsive logo-wrap" src="<?php echo base_url() ?>resources/images/<?php echo $page_details[0]['logo'] ?>" alt="Cadogan Mcqueen Logo"> 
                </a>         
            </div>
            <div class="col-sm-6 col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <div class="float_phone">
                            <?php 
                                if(!empty($page_details[0]['telephone1'])){
                                    echo $page_details[0]['location1']." - ".$page_details[0]['telephone1']."<br>";
                                }
                                if(!empty($page_details[0]['telephone2'])){
                                    echo $page_details[0]['location2']." - ".$page_details[0]['telephone2']."<br>";
                                }
                                if(!empty($page_details[0]['telephone3'])){
                                    echo $page_details[0]['location3']." - ".$page_details[0]['telephone3']."<br>";
                                }
                            ?>
                            <span class="email-address"><?php echo $page_details[0]['email'] ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>