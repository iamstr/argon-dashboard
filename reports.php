<?php include("includes/header.php");?>

<body>
  <?php include("includes/sidebar.php");?>

  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <?php include("includes/top-nav.php");?>
    <!-- Page content -->
    <div class="container-fluid mt-6">
      <div class="row">

        <div class="col">
          <div class="card">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Reports </h3>
                </div>
                <div class="col-4 text-right">
                  <!--                  <a href="#!" class="btn btn-sm btn-primary">Settings</a>-->
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
                  <h3 class="report-header d-flex justify-content-between bg-success p-3 rounded">
                    <span class="report-header-info text-white">Summary Report</span>
                    <i class="fas fa-list-ul text-white align-self-center"></i>
                  </h3>
                  <ul class="list-group custom-list-group rounded-3 mt-3 border border-white ">

                    <li class="list-group-item d-flex flex-row justify-content-between custom-list-group-item tasks" data-index="0">

                      <a href=""><span class="font-weight-bold">Girls That Have Traveled</span></a>
                      <button type="button" class="btn btn-default  fas fa-file-excel text-success font-weight-bolder tasks-delete pt-1" data-toggle="tooltip" data-placement="left" title="file would be downloaded as an excel file">

                      </button>

                    </li>
                    <li class="list-group-item d-flex flex-row justify-content-between custom-list-group-item tasks" data-index="1">

                      <a href=""><span class="font-weight-bold">Girls That Have Traveled</span></a>
                      <button type="button" class="btn btn-default  fas fa-file-excel text-success font-weight-bolder tasks-delete pt-1" data-toggle="tooltip" data-placement="left" title="file would be downloaded as an excel file">

                      </button>

                    </li>
                    <li class="list-group-item d-flex flex-row justify-content-between custom-list-group-item tasks" data-index="2">


                      <a href=""><span class="font-weight-bold">Girls That Have Traveled</span></a>
                      <button type="button" class="btn btn-default fas fa-file-excel text-success font-weight-bolder tasks-delete pt-1" data-toggle="tooltip" data-placement="left" title="file would be downloaded as an excel file">

                      </button>
                    </li>
                  </ul>

                </div>
                <div class="col-lg-6 mb-sm-4">
                  <h3 class="report-header d-flex justify-content-between bg-success p-3 rounded ">
                    <span class="report-header-info text-white">Summary Report</span>
                    <i class="fas fa-list-ul text-white align-self-center"></i>
                  </h3>
                  <ul class="list-group custom-list-group rounded-3 mt-3">

                    <li class="list-group-item d-flex flex-row justify-content-between custom-list-group-item tasks" data-index="0">

                      <a href=""><span class="font-weight-bold">Girls That Have Traveled</span></a>
                      <button type="button" class="btn btn-default  fas fa-file-excel text-success font-weight-bolder tasks-delete pt-1" data-toggle="tooltip" data-placement="left" title="file would be downloaded as an excel file">

                      </button>

                    </li>
                    <li class="list-group-item d-flex flex-row justify-content-between custom-list-group-item tasks" data-index="1">

                      <a href=""><span class="font-weight-bold">Girls That Have Traveled</span></a>
                      <button type="button" class="btn btn-default  fas fa-file-excel text-success font-weight-bolder tasks-delete pt-1" data-toggle="tooltip" data-placement="left" title="file would be downloaded as an excel file">

                      </button>

                    </li>
                    <li class="list-group-item d-flex flex-row justify-content-between custom-list-group-item tasks" data-index="2">


                      <a href=""><span class="font-weight-bold">Girls That Have Traveled</span></a>
                      <button type="button" class="btn btn-default fas fa-file-excel text-success font-weight-bolder tasks-delete pt-1" data-toggle="tooltip" data-placement="left" title="file would be downloaded as an excel file">

                      </button>
                    </li>
                  </ul>
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
