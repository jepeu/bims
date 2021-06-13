<?php 
	$this->load->view('layouts/head');
	$this->load->view('layouts/header');
 ?> 
    <style>
      .invitation {
          margin-top: 100px;
          margin-bottom: 100px;
      }
    </style>

    <!-- Page Content -->
    <div class="page-heading header-text itb" id="top">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Invitation To Bid</h1>
            <span>join our bidding</span>
          </div>
        </div>
      </div>
    </div>

    <div class="invitation">
        <div class="container">
            <div class="row">
              <div class="col-md-12">
                  <table id="invitations_table" class="cell-border">
                    <thead>
                        <tr>
                            <th>ITB No.</th>
                            <th>Project</th>
                            <th>Document</th>
                        </tr>
                    </thead>
                    <tbody class="table_data">

                    </tbody>
                  </table>
              </div>
          </div>
        </div>
    </div>


  <?php 
		$this->load->view('layouts/footer');
	?>

<script>
    jQuery(document).ready(function() {
        // get data from project table
        $.ajax({
          type  : 'get',
          url   : '<?php echo base_url('HomeController/show_invitation_to_bid')?>',
          async : true,
          success : function(data){
            
            $('.table_data').html(data);
          }
        });
    });
	</script>