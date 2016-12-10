<header class="pp-header">
    <div class="pp-header-wrap center-content randstand-logo">

        <div class="logo-link">
            <a href="">
                <span class="logo-container logo-container--new">
                    <img src="<?php echo base_url().'resources/images/'.$page_details[0]['logo']; ?>" alt="CADOGAN MCQUEEN" width="136" height="35">
                </span>
            </a>

                    <!--                <span class="logo-locale">en</span>
                                    <div class="clearfix"></div>
                                    <p class="randstad-text">in collaboration with</p><img src="./twago _ Find the best Freelancers_files/randstad-logo.png" alt="Randstad" width="94" height="14">-->

        </div>

        <div class="pp-support">
            <div class="pp-support-right">
                <p class="pp-support-phone" style="color: #c68934"><?php echo $page_details[0]['telephone'];?></p>
                <!--<p class="pp-support-availability">9:00 - 18:00 CET Mon - Fri</p>-->
            </div>
        </div>

    </div>
</header>

<!--<div class="row paddin_over_top_20px">
    <div class="col-md-6 form-group">
<?php
foreach ($logo_list as $logo_info) {
    if ($logo_info['type_id'] == LOGO_TYPE_ID_HEADER) {
        ?>
                <a href="<?php echo base_url(); ?>">
                    <img style="max-height:90px!important; max-width:380px!important;" class="img-responsive" src="<?php echo base_url() ?>resources/images/<?php echo $logo_info['img'] ?>" alt="Cadogan Mcqueen Logo"> 
                </a>        
        <?php
    }
}
?>
    </div>
    <div class="col-md-6">
                            <div class="row">
            <div class="col-md-12">
                <ul class="list-unstyled list-inline custom">
                    <li> <a href="" target="_blank"><img class="img-responsive img-circle" src="resources/images/pinterest.png"></a></li>
                    <li><a href="" target="_blank"><img class="img-responsive img-circle" src="resources/images/facebook.png" ></a> </li>
                    <li><a href="" target="_blank"><img class="img-responsive img-circle" src="resources/images/twitter.png" ></a> </li>
                    <li><a href="" target="_blank"><img class="img-responsive img-circle" src="resources/images/linkedin.png" ></a> </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="float_phone"><?php echo "01911123456" ?></div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <ul id="menu-main-menu" class="menu list-unstyled">
            <li id="menu-item-16" class="menu-item menu-item-type-post_type menu-item-object-page <?php if ($menu_id == MENU_ID_HOME) echo "current-menu-item page_item page-item-2 current_page_item" ?> menu-item-16"><a href="<?php echo base_url() ?>">Home</a></li>
<?php foreach ($menu_list as $menu_info) { ?>
                <li id="menu-item-17" class="menu-item menu-item-type-post_type menu-item-object-page <?php if ($menu_id == $menu_info['menu_id']) echo "current-menu-item page_item page-item-2 current_page_item" ?> menu-item-17"><a href="<?php echo base_url() . 'user/menu/' . $menu_info['menu_id'] ?>"><?php echo $menu_info['title'] ?></a></li>
<?php } ?>
            <li id="menu-item-21" class="menu-item menu-item-type-post_type menu-item-object-page <?php if ($menu_id == MENU_ID_CONTACT_US) echo "current-menu-item page_item page-item-2 current_page_item" ?> menu-item-21"><a href="<?php echo base_url() . 'user/contact_us' ?>">Contact Us</a></li>
        </ul>
    </div>
</div>-->