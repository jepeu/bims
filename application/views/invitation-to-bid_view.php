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
    <div class="page-heading header-text">
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
              <tbody>
                  <tr>
                      <td>Row 1 Data 1</td>
                      <td>Row 1 Data 2</td>
                      <td>Row 2 Data 2</td>
                  </tr>
                  <tr>
                      <td>Row 2 Data 1</td>
                      <td>Row 2 Data 2</td>
                      <td>Row 2 Data 2</td>
                  </tr>
              </tbody>
            </table>
        </div>
      </div>
     </div>
    </div>


  <?php 
		$this->load->view('layouts/footer');
	?>