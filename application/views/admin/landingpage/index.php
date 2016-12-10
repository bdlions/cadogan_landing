    <div class="panel panel-default">
    <div class="panel-heading">Page</div>
    <div class="panel-body">
        <div class="row col-md-12">            
            <div class="row form-group" style="padding-left:10px;">
                <div class ="col-md-2 pull-left form-group">
                    <a href="<?php //echo base_url() . 'admin/page/create_page' ?>">
                        <button id="page_create_id" value="" class="form-control pull-right btn_custom_button">Create Page</button>  
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive table-left-padding table_padding"><!-- printing landing page details -->
                        <table class="table table-bordered">
                        	<thead>
                            	<tr>
                                	<th>Logo</th>
                                    <td>
									<?php 
										echo "<img width=\"200px\" height=\"100px\" src='" .base_url(). 'resources/images/'.$page_Detail[0]['logo'] ."'>"; 
									?></td>
                                    <td rowspan="3"><a href="<?php echo base_url()."admin/landingPage/update_page/".$page_Detail[0]['id'];?>">Edit </a></td>
                                </tr>
                                <tr>
                                    <th>Banner</th>
                                    <td>
                                    <?php 
                                        echo "<img width=\"500px\" height=\"250px\" src='" .base_url(). 'resources/images/'.$page_Detail[0]['banner'] ."'>"; 
                                    ?></td>
                                    
                                </tr>
                                <tr>
                                	<th>Address <br /> Telephone <br /> Email</th>
                                    <td><?php 
										echo $page_Detail[0]['address'] . '<br>'. $page_Detail[0]['telephone'] . '<br>' . $page_Detail[0]['email']
									?></td>
                                    
                                </tr>
                           </thead>
                         </table>
                        
 <table class="table table-bordered">
                        	<thead>
                            	<tr>
                                	<th>Title </th>
                                    <th>Image</th>
                                    <th>Description</th>
                                    <th>Operation</th>
                                </tr>
                               
                                <tr>
                                	<td><?php 
										echo $page_Detail[0]['title_one']
									?></td>
                                    <td>
									
									<?php 
										echo "<img width='180px' height='180px' src='" .base_url(). 'resources/images/'.$page_Detail[0]['title_one_image'] ."'>"; 
									?>
									</td>
                                    <td><?php 
										echo $page_Detail[0]['description_one']
									?></td>
                                    <td><a href="<?php echo base_url()."admin/landingPage/update_landingpage_coloum/".$page_Detail[0]['id'] ."/1"; ?>">Edit</a></td>
                                </tr>
                                <tr>
                                	<td><?php 
										echo $page_Detail[0]['title_two']
									?></td>
                                    <td><?php 
										echo "<img width='180px' height='180px' src='" .base_url(). 'resources/images/'.$page_Detail[0]['title_two_image'] ."'>"; 
									?></td>
                                    <td><?php 
										echo $page_Detail[0]['description_two']
									?></td>
                                    <td><a href="<?php echo base_url()."admin/landingPage/update_landingpage_coloum/".$page_Detail[0]['id'] ."/2"; ?>">Edit</a></td>
                                </tr>
                                <tr>
                                	<td><?php 
										echo $page_Detail[0]['title_three']
									?></td>
                                    <td><?php 
										echo "<img width='180px' height='180px' src='" .base_url(). 'resources/images/'.$page_Detail[0]['title_three_image'] ."'>"; 
									?></td>
                                    <td><?php 
										echo $page_Detail[0]['description_three']
									?></td>
                                    <td><a href="<?php echo base_url()."admin/landingPage/update_landingpage_coloum/".$page_Detail[0]['id'] ."/3"; ?>">Edit</a></td>
                                </tr>
                               

                           </thead>                      
                        </table>                       
                        
                        
                        <table class="table table-bordered">
                            <thead>
                            	<tr>
                                    <th>Background Image</th>
                                    <td>
                                        <?php 
                                                echo "<img width=\"400px\" height=\"200px\" src='" .base_url(). 'resources/images/'.$page_Detail[0]['bg_img'] ."'>"; 
                                        ?></td>
                                    <td><a href="<?php echo base_url()."admin/landingPage/update_bg_img/".$page_Detail[0]['id'];?>">Edit </a></td>
                                </tr>
                           </thead>
                         </table>
                        
                        
                    </div>
                </div>
            </div>
            <div class="btn-group" style="padding-right: 10px;">
                <input type="button" style="width:120px;" value="Back" id="back_button" onclick="javascript:history.back();" class="form-control btn_custom_button">
            </div>
        </div>
    </div>
</div>


<?php $this->load->view("admin/page/modal_delete_page_confirm"); ?>