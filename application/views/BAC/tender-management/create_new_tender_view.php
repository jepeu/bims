<?php 
    $this->load->view('BAC/layouts/head');
    $this->load->view('BAC/layouts/header');
    $this->load->view('BAC/layouts/sidebar');
?>

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
        <div class="portlet box green ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-gift"></i> UPDATE
                </div>
                <div class="tools">
                    <a href="" class="collapse" data-original-title="" title="">
                    </a>
                    <a href="#portlet-config" data-toggle="modal" class="config" data-original-title="" title="">
                    </a>
                    <a href="" class="reload" data-original-title="" title="">
                    </a>
                    <a href="" class="remove" data-original-title="" title="">
                    </a>
                </div>
            </div>
            <div class="portlet-body form">
                <form class="form-horizontal" id="create_new_tender" role="form" method="post">
                    <div class="form-body">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Projects Description<?php echo form_error('projects_description') ?></label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="projects_description" id="projects_description" placeholder="Enter project description" value="<?php echo $projects_description; ?>" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-body">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Projects Type <?php echo form_error('projects_type') ?></label>
                            <div class="col-md-9">
                                <!-- <input type="text" class="form-control" name="projects_type" id="projects_type" placeholder="Enter project type" value="<?php echo $projects_type; ?>" required> -->
                                <select class="form-control" name="projects_type" id="projects_type" placeholder="Enter project type" value="<?php echo $projects_type; ?>" required>
                                                <option></option>
                                                <option>Civil Works</option>
                                                <option>Infrastructure</option>
                                                <option>Goods</option>
                                                <option>Service</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="form-body">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Opening Date <?php echo form_error('opening_date') ?></label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="opening_date" id="opening_date" placeholder="Enter opening date" value="<?php echo $opening_date; ?>" required>
                            </div>
                        </div>
                    </div> -->
                    
                    <div class="form-group">
                        <label class="control-label col-md-3">Opening Date<?php echo form_error('opening_date') ?></label>
                        <div class="col-md-4">
                            <div class="input-group date form_meridian_datetime">
                                <!-- <input type="text" size="16" class="form-control"> -->
                                <input type="text" class="form-control" name="opening_date" id="opening_date" value="<?php echo $opening_date; ?>">
                                <span class="input-group-btn">
                                <button class="btn default date-reset" type="button"><i class="fa fa-times"></i></button>
                                <button class="btn default date-set" type="button"><i class="fa fa-calendar"></i></button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </div>
                    </div>
                    <div class="form-body">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Approve Budget Cost<?php echo form_error('approve_budget_cost') ?></label>
                            <div class="col-md-9">
                                <input type="number" class="form-control" name="approve_budget_cost" id="approve_budget_cost" placeholder="Enter approve budget cost" value="<?php echo $approve_budget_cost; ?>" required>
                            </div>
                        </div>
                    </div>
                    <!-- hidden for user -->
                    <div class="form-body">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Status<?php echo form_error('projects_status') ?></label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="projects_status" id="projects_status" placeholder="Enter project status" value="new" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-9">
                                <!-- <input type="hidden" name="projects_id" value="<?php echo $projects_id; ?>" /> -->
                                <button type="submit"  class="btn green">Submit</button>
                                <a href="<?php echo site_url('tendermanagement') ?>" type="button" class="btn default">Cancel</a>
                            </div>
                        </div>
                    </div>
                </form>
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

    <script>
        jQuery(document).ready(function() {
            
            //BAC FORM 
            jQuery('#create_new_tender').submit('click',function(e){
                e.preventDefault();
                alert();
                var pd = $('#projects_description').val();
                var pt = $('#projects_type').val();
                var od = $('#opening_date').val();
                var abc = $('#approve_budget_cost').val();
                var ps = $('#projects_status').val();

                // console.log(decryptData);
                console.log(pd);
                console.log(pt);
                console.log(od);
                console.log(abc);
                console.log(ps);
                var ajaxurl = "<?php echo base_url(); ?>BidOpeningController/create";

                var data = { 
                            pd: projects_description,
                            pt: projects_type,
                            od: opening_date,
                            abc: approve_budget_cost,
                            ps: projects_status
                        };

                        // console.log(data);

                jQuery.post(ajaxurl, data, function(response) {
                    alert("successfully decrypted");
                                                            
                }).fail(function(xhr, status, error) {
                        console.log(status);
                        console.log(error);
                });
            });

        });

    </script>
		