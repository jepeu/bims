<!-- BEGIN FOOTER -->
<div class="page-footer">
	<div class="page-footer-inner">
		 2020 &copy; Bidding Information Management System. <a href="#" title="" target="_blank">Purchase Metronic!</a>
	</div>
	<div class="scroll-to-top">
		<i class="icon-arrow-up"></i>
	</div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="<?php echo base_url()."assets/"; ?>global/plugins/respond.min.js"></script>
<script src="<?php echo base_url()."assets/"; ?>global/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="<?php echo base_url()."assets/"; ?>global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()."assets/"; ?>global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="<?php echo base_url()."assets/"; ?>global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()."assets/"; ?>global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()."assets/"; ?>global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()."assets/"; ?>global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()."assets/"; ?>global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()."assets/"; ?>global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()."assets/"; ?>global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()."assets/"; ?>global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>

<script src="<?php echo base_url()."assets/";?>admin/pages/scripts/table-managed.js"></script>
<!-- END CORE PLUGINS -->

<script src="<?php echo base_url()."assets/"; ?>global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?php echo base_url()."assets/"; ?>admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="<?php echo base_url()."assets/"; ?>admin/layout/scripts/quick-sidebar.js" type="text/javascript"></script>
<script src="<?php echo base_url()."assets/"; ?>admin/layout/scripts/demo.js" type="text/javascript"></script>

<!-- picker -->
<script src="<?php echo base_url()."assets/"; ?>admin/pages/scripts/components-pickers.js"></script>

<!-- datatable -->
<script src="<?php echo base_url()."assets/";?>admin/pages/scripts/table-managed.js"></script>

<!-- BEGIN PAGE LEVEL PLUGINS -->
    <!-- <script type="text/javascript" src="<?php echo base_url()."assets/"; ?>global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()."assets/"; ?>global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()."assets/"; ?>global/plugins/clockface/js/clockface.js"></script>
    <script type="text/javascript" src="<?php echo base_url()."assets/"; ?>global/plugins/bootstrap-daterangepicker/moment.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()."assets/"; ?>global/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script type="text/javascript" src="<?php echo base_url()."assets/"; ?>global/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script> -->

    <!-- datetime picker -->
    <!-- <script type="text/javascript" src="<?php echo base_url()."assets/"; ?>global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script> -->
    <!-- daterangep picker from jquery -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

    <!-- delete alert cdn -->
    <script src="https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.min.js" type="text/javascript"></script>

<!-- END PAGE LEVEL PLUGINS -->
<script>
        jQuery(document).ready(function() {       
           // initiate layout and plugins
            Metronic.init(); // init metronic core components
            Layout.init(); // init current layout
            QuickSidebar.init(); // init quick sidebar
            Demo.init(); // init demo features
            ComponentsPickers.init();
        });   
</script>

<!-- clock -->
<script>
    function Time(){
        var now = new Date();
        var hour = document.getElementsByClassName('hour')[0],
            mintue = document.getElementsByClassName('mintue')[0],
            second = document.getElementsByClassName('second')[0];
        var h =now.getHours();
            m =now.getMinutes();
            s =now.getSeconds();
            ms =now.getMilliseconds();
        // console.log("H:"+h);
        // console.log("M:"+m);
        // console.log("S:"+s);
        // console.log("MS:"+ms);
        hour.style.transform=`rotate(${h*30+m*0.5}deg) translate(0,-50%)`;
        mintue.style.transform=`rotate(${m*6+s*0.1}deg) translate(0,-50%)`;
        second.style.transform=`rotate(${s*6+ms*0.006}deg)translate(0,-50%)`;
        
        


        document.getElementsByClassName('date')[0].innerHTML =
        `${now.toString().split(" ")[4]}`;
        setTimeout(Time,10);
    }
    for(let i=0;i<60;i++){
            let tikElement = document.createElement("div");
            let setClassAsTik = document.createAttribute("class");
            setClassAsTik.value = "tiktok clock_line";   
            tikElement.setAttributeNode(setClassAsTik); 
            document.getElementsByClassName('clock')[0].appendChild(tikElement);
            let tik = document.getElementsByClassName('tiktok clock_line')[i];
            tik.style.transform=`rotate(${i*6}deg) translate(0,-50%)`;
            if (i%5===0){
                tik.style.height="3%";
                tik.style.width="51%";
            }else {
                tik.style.height="1%";
                tik.style.width="57%";
            }
        }
    Time();
</script>
<!-- <script type="text/javascript">
    jQuery(".form_meridian_datetime").datetimepicker({
        format: "dd/mm/yyyy - hh:ii P",
        autoclose: true,
        todayBtn: true,
        pickerPosition: "bottom-left"
    });
</script> -->
    
<!-- END JAVASCRIPTS -->


</body>
<!-- END BODY -->
</html>