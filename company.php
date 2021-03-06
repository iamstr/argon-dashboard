<?php include("includes/header.php");?>

 <body>
   <?php //include("includes/sidebar.php");?>

   <!-- Main content -->
   <div class="main-content" id="panel">
    

    <div class="container mt-5">
      <div class="row">
        <div class="col card-before">
          <div class="card p-4 steps-form ">
            <div class="container ml-3 slideLeft ">
              <button class="btn btn-icon btn-primary   steps-form-button-next" type="button">
                <span class="btn-inner--text">Request Funds</span>
                <span class="btn-inner--icon"><i class="ni ni-bold-right"></i></span>
              </button>

            </div>


          </div>
          <div class="card p-4 steps-form">


            <div class="container ml-3  ">
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                <span class="alert-text"><strong>Success!</strong> This is a success alert—check it out!</span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class=" d-flex flex-row">
                <input type="text" class="form-control form-control-alternative col-3 mr-2" placeholder="Expense Name" id="new_expense" required>
                <input type="number" class="form-control form-control-alternative col-2 ml-3" placeholder="Cost" id="new_cost" required>
                <textarea name=""  cols="30" rows="1" id="new_desc" class="form-control form-control-alternative ml-3" placeholder="Expense Description" style="height:46px"></textarea>
                <button type="button" class="btn btn-outline-default  col-3 ml-3 btn-sm" id="add_task">Add New Expense </button>
              </div>

              <ul class="list-group custom-list-group rounded-3 mt-3">

              </ul>
              <div class="total d-flex flex-end">
                <div class=" mt-5 pt-5 total-info  d-flex flex-column">
                  <h5 class="text-muted total-info-header mt-1 ">Total</h5>
                  <h3 class="total-info-sum fs-2 fw-bold text-danger ">0</h3>
                  <button class="btn btn-danger total-button mt-1" role="button" data-toggle="modal" data-target="#modal-notification">Request Amount</button>
                  
                </div>
                
                 <div class="modal fade shaking-2" id="modal-notification" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
        <div class="modal-content bg-gradient-secondary">
        	
            <div class="modal-header bg-danger ">
                <h6 class="modal-title text-white" id="modal-title-notification">Your attention is required</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            
            <div class="modal-body">
            	
                <div class="py-3 text-center">
                    <i class="ni ni-bell-55 ni-3x text-danger shaking"></i>
                    <h4 class="heading mt-4">You should read this!</h4>
                    <p>You are about to Request this amount KES <span class="modal-total font-weight-bolder"></span> this request will be sent to the Director</p>
                </div>
                
            </div>
            
            <div class="modal-footer">
                <button type="button" class="btn btn-danger text-white">Submit Fund Request</button>
                <button type="button" class="btn btn-link text-danger ml-auto" data-dismiss="modal">Cancel Request</button>
            </div>
            
        </div>
    </div>
</div>

                
              </div>
              
            </div>

          </div>

        </div>


      </div>

    </div>

   </div>
   <?php include("includes/footer.php");?>
</body>