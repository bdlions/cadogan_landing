<script type="text/javascript">
    function concierge()
    {
        window.location = '<?php echo base_url(); ?>concierge';
    }

    function surveyors()
    {
        window.location = '<?php echo base_url(); ?>surveyors';
    }
</script>
<div class="main-bg-image-section">
    <main role="main" data-base="">
        <div class="main-wrapper sem-wrapper sem-resp bg-img" style="background:url(<?php echo base_url() . 'resources/images/' . $page_details[0]['bg_img']; ?>) no-repeat #fbfbfb; overflow: hidden;">
            <div class="sem-resp--content">
                <div class="sem-resp--title"></div>
                <div class="sem-resp--quote">
                    <div class="sem-resp--quote--text"></div>
                    <div class="sem-resp--quote--text"></div>
                </div>
                <div class="small-and-extra-small-device-display">
                    <div class="sem-resp--title"><?php echo $page_details[0]['bg_title']; ?></div>
                </div>
                <div class="row medium-and-large-device-display">
                    <a href="<?php echo base_url(); ?>">
                        <img class="img-responsive logo-wrap logo-center-position" src="<?php echo base_url() ?>resources/images/CADOGAN_transparent_logo.png" alt="Cadogan Mcqueen Logo"> 
                    </a> 
                </div>

                <div class="sem-resp--quote">
                    <div class="sem-resp--quote--text"><?php echo $page_details[0]['bg_subtitle']; ?></div>
                </div>
<!--                <div class="sem-resp--bouncing-arrow">
                    <button class="bouncing-arrow lift"></button>
                </div>-->
                <ul class="sem-resp--hints">
                    <li class="sem-resp--hints--hint-suc nth-child--1" onclick="concierge()">
                        <span class="sem-resp--hints--hint-suc--span-title"><img src="<?php echo base_url() ?>resources/images/<?php echo $page_details[0]['title_one_image']; ?>"></span>
                        <span class="sem-resp--hints--hint-suc--span-title"><?php echo $page_details[0]['title_one']; ?></span>
                        <span class="sem-resp--hints--hint-suc--span-expand"><?php echo $page_details[0]['description_one']; ?></span>
                        <span class="sem-resp--hints--hint-suc--span-numbers">&nbsp;</span>
                    </li>
                    <li class="sem-resp--hints--hint-suc nth-child--2" onclick="surveyors()">
                        <span class="sem-resp--hints--hint-suc--span-title"><img src="<?php echo base_url() ?>resources/images/<?php echo $page_details[0]['title_two_image']; ?>" ></span>
                        <span class="sem-resp--hints--hint-suc--span-title"><?php echo $page_details[0]['title_two'] ?></span>
                        <span class="sem-resp--hints--hint-suc--span-expand"><?php echo $page_details[0]['description_two']; ?></span>
                        <span class="sem-resp--hints--hint-suc--span-numbers">&nbsp;</span>
                    </li>
                    <li class="sem-resp--hints--hint-suc nth-child--3">
                        <span class="sem-resp--hints--hint-suc--span-title"><img src="<?php echo base_url() ?>resources/images/<?php echo $page_details[0]['title_three_image']; ?>"></span>
                        <span class="sem-resp--hints--hint-suc--span-title"><?php echo $page_details[0]['title_three'] ?></span>
                        <span class="sem-resp--hints--hint-suc--span-expand"><?php echo $page_details[0]['description_three']; ?></span>
                        <span class="sem-resp--hints--hint-suc--span-numbers">&nbsp;</span>
                    </li>
                </ul>
            </div>
        </div>
    </main>
</div>