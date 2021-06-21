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
              <h3 class="mb-0">Add New User</h3>
            </div>
            <div class="card-body">
              <a class="btn btn-primary" href="register">Create New User </a>
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
                    <th scope="col" class="sort" data-sort="name">Employer ID</th>
                    <th scope="col" class="sort" data-sort="name">Employer Name</th>
                    <th scope="col" class="sort" data-sort="budget">Employer Phone</th>
                    <th scope="col" class="sort" data-sort="budget">Date Started</th>
                    <th scope="col" class="sort" data-sort="status">Expense Status</th>

                    <th scope="col" class="position-sticky">Actions</th>
                  </tr>
                </thead>
                <tbody class="list">
                  <tr class="table-agent-row">

                    <td class="budget">E123</td>
                    <td class="budget">John Kamau</td>
                    <td class="budget">0742 254 254</td>
                    <td class="budget">25th June 2021</td>

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
                          <a class="dropdown-item" href="#">Approve</a>
                          <a class="dropdown-item" href="#">Fire</a>

                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr class="table-agent-row">

                    <td class="budget">E123</td>
                    <td class="budget">John Kamau</td>
                    <td class="budget">0742 254 254</td>
                    <td class="budget">25th June 2021</td>


                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-danger"></i>
                        <span class="status">Fired</span>
                      </span>
                    </td>



                    <td class="text-right">
                      <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                          <a class="dropdown-item" href="#">Approve</a>
                          <a class="dropdown-item" href="#">Fire</a>

                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr class="table-agent-row">

                    <td class="budget">E123</td>
                    <td class="budget">John Kamau</td>
                    <td class="budget">0742 254 254</td>
                    <td class="budget">25th June 2021</td>


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
                          <a class="dropdown-item" href="#">Approve</a>
                          <a class="dropdown-item" href="#">Fire</a>

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
</body>
