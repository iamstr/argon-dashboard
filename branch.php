<?php include("includes/header.php");?>

<body>
  <?php include("includes/sidebar.php");?>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <?php include("includes/top-nav.php");?>
    <!-- Page content -->




    <div class="container-fluid mt-5">
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0">Add New Branch</h3>
            </div>
            <div class="card-body">
              <a class="btn btn-primary" href="#" role="button" data-toggle="modal" data-target="#exampleModal">Create New Branch </a>

              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Create Branch</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                     <div class="modal-message mx-auto w-75"></div>
                      <form id="branchForm" action="php_action/createBranch.php" method="post">
                    <div class="modal-body">
                     
                 <h6 class="heading-small text-muted mb-4">Branch information</h6>
                 <div class="pl-lg-1">
                   <div class="row">
                     <div class="col-lg-6">
                       <div class="form-group">
                         <label class="form-control-label" for="input-username">Branch Name</label>
                         <input type="text" id="input-username" class="form-control" placeholder="Branch 1" value="lucky.jesse" name="branch">
                       </div>
                     </div>
                     <div class="col-lg-6">
                       <div class="form-group">
                         <label class="form-control-label" for="input-email">Branch address</label>
                         <input type="text" id="input-email" class="form-control" placeholder="CBD Nairobi" name="address">
                       </div>
                     </div>
                   </div>
                        <div class="row">
                          
                          
                          <div class=" col-lg-6">
                       <div class="form-group">
                         <label class="form-control-label" for="input-last-name">Branch Active</label>
                         <div class="form-group">
                         
                         <select class="form-control" id="role" name="status">
                           <option value="active">Active</option>
                           <option value="inactive">Inactive</option>
                         </select>
                       </div>
                       </div>
                     </div>
                          
                        </div>
                         </div>
                      
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-warning" id="branchSubmit">Create Branch</button>
                    </div>
                    </form>
                  </div>
                </div>
              </div>



            </div>
          </div>
        </div>
      </div>
    </div>





    <div class="container-fluid mt-5">
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0">All The Requests you have made</h3>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr class="table-agent position-relative">

                    <th scope="col" class="sort" data-sort="name">Branch Name</th>
                    <th scope="col" class="sort" data-sort="budget">Total Number of Employees </th>
                    <th scope="col" class="sort" data-sort="budget">Total Number of Girls</th>
                    <th scope="col" class="sort" data-sort="budget">Total Expenses</th>

                    <th scope="col" class="sort" data-sort="status">Status</th>

                    <th scope="col" class="position-sticky">Actions</th>
                  </tr>
                </thead>
                <tbody class="list">
                  <tr class="table-agent-row">

                    <td class="budget">Nairobi Branch</td>
                    <td class="budget">30</td>
                    <td class="budget">40,000</td>
                    <td class="budget">80,000</td>

                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">Working</span>
                      </span>
                    </td>



                    <td class="text-right">
                      <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                          <a class="dropdown-item" href="#">Active</a>
                          <a class="dropdown-item" href="#">Inactive</a>

                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr class="table-agent-row">

                    <td class="budget">Nairobi Branch</td>
                    <td class="budget">30</td>
                    <td class="budget">40,000</td>
                    <td class="budget">80,000</td>


                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-danger"></i>
                        <span class="status">Inactive</span>
                      </span>
                    </td>



                    <td class="text-right">
                      <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                          <a class="dropdown-item" href="#">Active</a>
                          <a class="dropdown-item" href="#">Inactive</a>

                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr class="table-agent-row">

                    <td class="budget">Nairobi Branch</td>
                    <td class="budget">30</td>
                    <td class="budget">40,000</td>
                    <td class="budget">80,000</td>

                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-primary"></i>
                        <span class="status">Pending</span>
                      </span>
                    </td>



                    <td class="text-right">
                      <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                          <a class="dropdown-item" href="#">Active</a>
                          <a class="dropdown-item" href="#">Inactive</a>

                        </div>
                      </div>
                    </td>
                  </tr>



                </tbody>
              </table>
            </div>
            <!-- Card footer -->
            <div class="card-footer py-4">
              <nav aria-label="...">
                <ul class="pagination justify-content-end mb-0">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">
                      <i class="fas fa-angle-left"></i>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>
                  <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">
                      <i class="fas fa-angle-right"></i>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include("includes/footer.php");?>
  <script>
    
    $(document).ready(function($){

        	$("#branchSubmit").unbind('click').bind('click', function() {
             
              	
              	$("#branchForm").unbind('submit').bind('submit', function(e){
                  e.preventDefault();
              	 var form = $(this);
				var formData = new FormData(this);
                  console.log(formData)
                  		$.ajax({
					url : form.attr('action'),
					type: form.attr('method'),
					data: formData,
					dataType: 'json',
					cache: false,
					contentType: false,
					processData: false,
					success:function(response) {
                    console.log(response)
						if(response.success == true) {
							

							$("html, body, div.modal, .modal-content, div.modal-body").animate({scrollTop: '0'}, 100);
								$('.modal form').hide()									
							// shows a successful message after operation
							$('.modal-message').append('<div class="alert alert-success">'+
		            '<button type="button" class="close" data-dismiss="alert">&times;</button>'+
		            '<strong><i class="ni ni-like-2"></i></strong> '+ response.messages +
		          '</div>');

							// remove the mesages
		          $(".alert-success").delay(1000).show(10, function() {
								$(this).delay(3000).hide(10, function() {
									$(this).remove();
                                  $('.modal form').show()
								});
							}); // /.alert

		          
						} // /if response.success
                      
                      
                      else{
                        
                        
                        
                        
							$("html, body, div.modal, .modal-content, div.modal-body").animate({scrollTop: '0'}, 100);
									$('.modal form').hide()								
							// shows a successful message after operation
							$('.modal-message').append('<div class="alert alert-warning shaking-2">'+
		            '<button type="button" class="close" data-dismiss="alert">&times;</button>'+
		            '<strong><i class="ni ni-like-2"></i></strong> '+ response.messages +
		          '</div>');

							// remove the mesages
		          $(".alert-warning").delay(500).show(10, function() {
								$(this).delay(3000).hide(10, function() {
									$(this).remove();
                                  $('.modal form').show()
								});
							}); // /.alert

                        
                        
                        
                        
                        
                      }
						
					} // /success function
				}); // /ajax function
                  
                  return false;
                  
              	})
        
            })

    
    
          });
</script>
</body>
