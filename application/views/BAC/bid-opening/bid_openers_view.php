<?php 
     $this->load->view('BAC/layouts/head');
	 $this->load->view('BAC/layouts/header');
?>  
	   <style>
			.profile{
				background-color: gray;
				border-radius: 100%;
				width: 100px;
				height: 100px;
				object-fit: cover;
				display: block;
				margin: auto;
				top: 15px;
				z-index: 5;
			} 	
			.circle {
				background: #f00;
				width: 20px;
				height: 20px;	
				border-radius: 50%;
				margin: auto;
				margin-top: 10px;
			}
			.userbox{
				margin: 5px;
				flex: 1 1 0px;
				box-shadow: rgb(0 0 0 / 16%) 0px 1px 4px;
				padding: 10px 20px;
				max-width: min-content;
			}
			.circle2 {
				background: green;
				width: 20px;
				height: 20px;	
				border-radius: 50%;
				margin: auto;
				margin-top: 10px;
			}
			div.bid-opener-row1,
			div.bid-opener-row2{
				width: 100%;
				box-shadow: rgb(0 0 0 / 16%) 0px 1px 4px;
				padding: 10px;
			}
			input.decrypt-button {
				background-color: #1bbc9b;
				color: white;
				padding: 10px 20px;
				border: none;
			}
			input.decrypt-button:hover {
				box-shadow:  0px 4px 6px 0px rgb(0 0 0 / 20%);
			}
			
			input.decrypt-button:focus {
				outline-width: 0;
			}
			.portlet.box.green-meadow:hover {
				box-shadow:  0px 10px 20px 0px rgb(0 0 0 / 50%);
			}
			.admins_row{
				margin-top: 20px;
			}

			.row.admins_row{
				margin-left: 0px;
				margin-right: 0px;
			}
			.u_name > h4{
				font-size: 14px;
    			font-weight: 600!important;
			}
			.box-col{
				margin: 20px 0;
			}
		</style>

<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
		<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
		<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
		<div class="page-sidebar navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
			<!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
			<!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
			<!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
			<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
			<!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
			<!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
			<ul class="page-sidebar-menu page-sidebar-menu-light " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
				<!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
				<li class="sidebar-toggler-wrapper">
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div class="sidebar-toggler">
					</div>
					<!-- END SIDEBAR TOGGLER BUTTON -->
				</li>
				<!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
				<li class="sidebar-search-wrapper">
					<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
					<!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
					<!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
					<form class="sidebar-search " action="extra_search.html" method="POST">
						<a href="javascript:;" class="remove">
						<i class="icon-close"></i>
						</a>
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Search...">
							<span class="input-group-btn">
							<a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
							</span>
						</div>
					</form>
					<!-- END RESPONSIVE QUICK SEARCH FORM -->
				</li>
				<li class="start dashboard">
					<a href="http://localhost/bims/page/staff.html">
					<i class="icon-home"></i>
					<span class="title">Dashboard</span>
					</a>
				</li>
				<li class="announcement">
					<a href="javascript:;">
					<i class="fas fa fa-bullhorn"></i>
					<span class="title">Announcement</span>
					</a>
				</li>
				<li class="user_management">
					<a href="javascript:;">
					<i class="fa fa-users"></i>
					<span class="title">User Management</span>
					<span class="selected"></span>
					<span class="arrow open"></span>
					</a>
					<ul class="sub-menu">
						<li class="certified_bidder">
							<a href="http://localhost/bims/usermanagement/certified-bidder.html">
							List Of Certified Bidder</a>
						</li>
						<li class="new_bidder_entry">
							<a href="http://localhost/bims/usermanagement/new-entry.html">
							List Of New Bidder Entry</a>
						</li>
					</ul>
				</li>
				<li class="tender_management">
					<a href="javascript:;">
					<i class="icon-diamond"></i>
					<span class="title">Tender Management</span>
					<span class="arrow"></span>
					</a>
					<ul class="sub-menu">
						<li class="list_of_tender">
							<a href="http://localhost/bims/tendermanagement.html">
							List Of Tenders</a>
						</li>
						<li class="bids_submitted">
							<a href="#">
							Bids Submitted</a>
						</li>
					</ul>
				</li>
				<li class="active open">
					<a href="javascript:;">
					<i class="icon-briefcase"></i>
					<span class="title">Bid Opening</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li class="active">
							<a href="http://localhost/bims/bidopening.html">
							Tenders</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
					<i class="icon-bar-chart"></i>
					<span class="title">Bid Evaluation</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="#">
							Technical Evaluation</a>
						</li>
					</ul>
				</li>
			<!-- END SIDEBAR MENU -->
		</div>
	</div>
	<!-- END SIDEBAR -->

	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Modal title</h4>
						</div>
						<div class="modal-body">
							 Widget settings form goes here
						</div>
						<div class="modal-footer">
							<button type="button" class="btn blue">Save changes</button>
							<button type="button" class="btn default" data-dismiss="modal">Close</button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<!-- /.modal -->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN STYLE CUSTOMIZER -->
			<div class="theme-panel hidden-xs hidden-sm">
				<div class="toggler">
				</div>
				<div class="toggler-close">
				</div>
				<div class="theme-options">
					<div class="theme-option theme-colors clearfix">
						<span>
						THEME COLOR </span>
						<ul>
							<li class="color-default current tooltips" data-style="default" data-container="body" data-original-title="Default">
							</li>
							<li class="color-darkblue tooltips" data-style="darkblue" data-container="body" data-original-title="Dark Blue">
							</li>
							<li class="color-blue tooltips" data-style="blue" data-container="body" data-original-title="Blue">
							</li>
							<li class="color-grey tooltips" data-style="grey" data-container="body" data-original-title="Grey">
							</li>
							<li class="color-light tooltips" data-style="light" data-container="body" data-original-title="Light">
							</li>
							<li class="color-light2 tooltips" data-style="light2" data-container="body" data-html="true" data-original-title="Light 2">
							</li>
						</ul>
					</div>
					<div class="theme-option">
						<span>
						Layout </span>
						<select class="layout-option form-control input-sm">
							<option value="fluid" selected="selected">Fluid</option>
							<option value="boxed">Boxed</option>
						</select>
					</div>
					<div class="theme-option">
						<span>
						Header </span>
						<select class="page-header-option form-control input-sm">
							<option value="fixed" selected="selected">Fixed</option>
							<option value="default">Default</option>
						</select>
					</div>
					<div class="theme-option">
						<span>
						Top Menu Dropdown</span>
						<select class="page-header-top-dropdown-style-option form-control input-sm">
							<option value="light" selected="selected">Light</option>
							<option value="dark">Dark</option>
						</select>
					</div>
					<div class="theme-option">
						<span>
						Sidebar Mode</span>
						<select class="sidebar-option form-control input-sm">
							<option value="fixed">Fixed</option>
							<option value="default" selected="selected">Default</option>
						</select>
					</div>
					<div class="theme-option">
						<span>
						Sidebar Menu </span>
						<select class="sidebar-menu-option form-control input-sm">
							<option value="accordion" selected="selected">Accordion</option>
							<option value="hover">Hover</option>
						</select>
					</div>
					<div class="theme-option">
						<span>
						Sidebar Style </span>
						<select class="sidebar-style-option form-control input-sm">
							<option value="default" selected="selected">Default</option>
							<option value="light">Light</option>
						</select>
					</div>
					<div class="theme-option">
						<span>
						Sidebar Position </span>
						<select class="sidebar-pos-option form-control input-sm">
							<option value="left" selected="selected">Left</option>
							<option value="right">Right</option>
						</select>
					</div>
					<div class="theme-option">
						<span>
						Footer </span>
						<select class="page-footer-option form-control input-sm">
							<option value="fixed">Fixed</option>
							<option value="default" selected="selected">Default</option>
						</select>
					</div>
				</div>
			</div>
			<!-- END STYLE CUSTOMIZER -->
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			Tender Management
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="index.html">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
				</ul>
				<div class="page-toolbar">
					<div class="btn-group pull-right">
						<button type="button" class="btn btn-fit-height grey-salt dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
						Actions <i class="fa fa-angle-down"></i>
						</button>
						<ul class="dropdown-menu pull-right" role="menu">
							<li>
								<a href="#">Action</a>
							</li>
							<li>
								<a href="#">Another action</a>
							</li>
							<li class="divider">
							</li>
							<li>
								<a href="#">Separated link</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
            <div class="row">
				<div class="col-md-12">
                <div class="col-md-12">
					<!-- BEGIN ALERTS PORTLET-->
					<div class="portlet box" style="background-color: #364150;">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-cogs"></i>Tender details
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse" data-original-title="" title="">
								</a>
								<a href="#portlet-config" data-toggle="modal" class="config" data-original-title="" title="">
								</a>
								<a href="javascript:;" class="reload" data-original-title="" title="">
								</a>
								<a href="javascript:;" class="remove" data-original-title="" title="">
								</a>
							</div>
						</div>
						<div class="portlet-body">
							<div class="note" style="background-color: #364150; color: white;">
                                <dl>
                                    <div class="row">
                                        <dt class="col-sm-3">Projects Description :</dt>
                                        <dd class="col-sm-4"><?php echo $projects_description; ?></dd>
                                    </div>
                                    <div class="row">
                                        <dt class="col-sm-3 col-form-label">Projects Type :</dt>
                                        <dd class="col-sm-4 col-form-label"><?php echo $projects_type; ?></dd>
                                    </div>
                                    <div class="row">
                                        <dt class="col-sm-3 col-form-label">Bid Opening Date &amp; Time :</dt>
                                        <dd class="col-sm-4 col-form-label"><?php echo $opening_date; ?></dd>
                                    </div>
                                    <div class="row">
                                        <dt class="col-sm-3 col-form-label">Approve Budget Cost :</dt>
                                        <dd class="col-sm-4 col-form-label"><?php echo $approve_budget_cost ?></dd>
                                    </div>
                                </dl>
							</div>
						</div>
					</div>
                    <div class="alert alert-block alert-info fade in">
                        <button type="button" class="close" data-dismiss="alert"></button>
                        <h4 style="margin-bottom: 0px;"><i class="fa fa-exclamation-triangle"></i> All the Bid Openers should decrypt the key.</h4>  
                    </div>
                    <div class="portlet box" style="background-color: #364150;">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-gift"></i>Bid Openers
                            </div>
                            <div class="tools">
                                <a href="javascript:;" class="collapse" data-original-title="" title="">
                                </a>
                                <a href="#portlet-config" data-toggle="modal" class="config" data-original-title="" title="">
                                </a>
                                <a href="javascript:;" class="reload" data-original-title="" title="">
                                </a>
                            </div>
                        </div>
						
						<div class="portlet-body row admins_row">
						<div style="text-align: center; margin: 20px 0">
							<button class="buttonload btn btn-primary"><i class="refresh_icon"></i>refresh</button>
						</div>
							<div class="box-col col-lg-6"style="display: flex; justify-content: center; text-align: center;">
								<div class="row bid-opener-row1">
									<h2 style="margin: 20px auto; font-weight: 700;">BID AND AWARDS COMMITTEE</h2>
									<div class="row" style="display: inline-flex; flex-wrap: wrap; justify-content: center;">
										<?php foreach($users_bid_opener as $users){?>

												<?php if($users->user_type == "BAC" ) {?>
													<div class="userbox">
														<div class="">
															<div class="portlet-body bid-opener-box-body">
																<img class="profile" src="<?php echo base_url()."assets/"; ?>images/profile.svg" alt="Picture of Vivian Williams">
																
																<?php if($users->decrypt_status === "1"){?>
																		<div class="circle" style="background-color: green!important;"></div>
																<?php }
																	else{?>
																		<div class="circle"></div>
																<?php }?>
																
																<div class="u_name">
																	<h4 style="text-align: center; font-weight: 500; text-transform: capitalize;"><?php echo $users->firstname;?> <?php echo $users->lastname;?></h4>
																</div>
																<?php if($users->user_id == $session_user_id){?>
																	<form id="decryptForm1" method="post">
																		<input id="project_openers_id_bac" style="margin: 10px 0;" type="hidden" value="<?php echo $users->project_openers_id; ?>">
																		<input id="project_id_bac" style="margin: 10px 0;" type="hidden" value="<?php echo $projects_id; ?>">
																		<input id="opener_id_bac" style="margin: 10px 0;" type="hidden" value="<?php echo $session_user_id; ?>">
																		<?php if($users->decrypt_status !== "1"){?>
																			<button class="decrypt decrypt_bac btn btn-primary" style="margin: 10px 0;"><i class="refresh_icon"></i>DECRYPT</button>
																		<?php }?>
																	</form>
																<?php }?>
															</div>
														</div>
													</div>
												<?php } ?>
										<?php } ?>
									</div>
								</div>
							</div>
							<div class="box-col col-lg-6"style="display: flex; justify-content: center; text-align: center;">
								<div class="row bid-opener-row2">
									<h2 style="margin: 20px 0; font-weight: 700;">TECHNICAL WORKING GROUP</h2>
									<div class="row" style="display: inline-flex; flex-wrap: wrap;justify-content: center;">
										<?php foreach($users_bid_opener as $users){?>
													<?php if($users->user_type == "TWG") {?>
														<div class="userbox" style="float: none;">
															<div class="">
																<div class="portlet-body bid-opener-box-body">
																	<img class="profile" src="<?php echo base_url()."assets/"; ?>images/profile.svg" alt="Picture of Vivian Williams">

																	<?php if($users->decrypt_status === "1"){?>
																		<div class="circle" style="background-color: green!important;"></div>
																	<?php }
																		else{?>
																			<div class="circle"></div>
																	<?php }?>

																	<div class="u_name">
																		<h4 style="text-align: center; font-weight: 500; text-transform: capitalize;"><?php echo $users->firstname;?> <?php echo $users->lastname;?></h4>
																	</div>
																	<?php if($users->user_id == $session_user_id){?>
																		<form id="decryptForm2" method="post">
																			<input id="project_openers_id_twg" style="margin: 10px 0;" type="hidden" value="<?php echo $users->project_openers_id; ?>">
																			<input id="project_id_twg" style="margin: 10px 0;" type="hidden" value="<?php $projects_id; ?>">
																			<input id="opener_id_twg" style="margin: 10px 0;" type="hidden" value="<?php $session_user_id; ?>">
																			<?php if($users->decrypt_status !== "1"){?>
																			<button class="decrypt decrypt_twg btn btn-primary" style="margin: 10px 0;"><i class="refresh_icon"></i>DECRYPT</button>
																			<?php }?>
																		</form>
																	<?php }?>
																</div>
															</div>
														</div>
													<?php} ?>
											<?php } ?>
										<?php } ?>
									</div>
								</div>
							</div>
						</div>
                    </div>
					<!-- END ALERTS PORTLET-->
				</div>
					</div>
				</div>
			<!-- END PAGE CONTENT-->
			</div>
		</div>
		<!-- END CONTENT -->
		<?php
			$this->load->view('BAC/layouts/quick_sidebar');
			$this->load->view('BAC/layouts/footer');
		?>												


		<script  type="text/javascript">
			jQuery(window).load(function() {

				var maxHeight = 0;
				jQuery('div.bid-opener-box-body').each(function(){
					var thisH = $(this).innerHeight();
					if (thisH > maxHeight) { 
						maxHeight = thisH; 
					}
				});
				jQuery('div.bid-opener-box-body').height(maxHeight);
			});
    	</script>
		<script>
			jQuery(document).ready(function() {
				
				//BAC FORM 
				jQuery('#decryptForm1').submit('click',function(e){
					e.preventDefault();

					// var decryptData = $('#decrypt_bac').val();
					var p_opener_id = $('#project_openers_id_bac').val();
					var opener_id = $('#opener_id_bac').val();
					var project_id = $('#project_id_bac').val();

					// console.log(decryptData);
					console.log(opener_id);
					console.log(project_id);
					var ajaxurl = "<?php echo base_url(); ?>BidOpeningController/decrypt_project";

					var data = { 
								project_openers_id: p_opener_id,
								decrypt_status: 1,
								users_user_id: opener_id,
								projects_projects_id: project_id
							};

					jQuery.post(ajaxurl, data, function(response) {
						// alert("successfully decrypted");
																
					}).fail(function(xhr, status, error) {
							console.log(status);
							console.log(error);
					});
				});

				//TWG FORM 
				jQuery('#decryptForm2').submit('click',function(e){
					e.preventDefault();

					// var decryptData = $('#decrypt_twg').val();
					var p_opener_id = $('#project_openers_id_twg').val();
					var opener_id = $('#opener_id_twg').val();
					var project_id = $('#project_id_twg').val();


					// console.log(decryptData);
					console.log(opener_id);
					console.log(project_id);

					var ajaxurl = "<?php echo base_url(); ?>BidOpeningController/decrypt_project";
					
					var data = { 
								project_openers_id: p_opener_id,
								decrypt_status: 1,	
								users_user_id: opener_id,
								projects_projects_id: project_id
							};

					jQuery.post(ajaxurl, data, function(response) {
						// alert(data);
																
					}).fail(function(xhr, status, error) {
							console.log(status);
							console.log(error);
					});
				});
			});


		// loading button
		jQuery('.buttonload').click(function(){
			jQuery('.buttonload .refresh_icon').addClass("fa fa-refresh fa-spin")

			setTimeout(function(){
				jQuery('.buttonload .refresh_icon').removeClass("fa fa-refresh fa-spin")
			}, 5000);
		});

		jQuery('.decrypt').click(function(){
			jQuery('.decrypt .refresh_icon').addClass("fa fa-spinner fa-spin")

			setTimeout(function(){
				jQuery('.decrypt .refresh_icon').removeClass("fa fa-spinner fa-spin")
			}, 5000);
		});

        </script>
		