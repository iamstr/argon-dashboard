<?php include("includes/header.php");?>

<body>
  <?php include("includes/sidebar.php");?>

  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <?php include("includes/top-nav.php");?>
    <div class="container-fluid mt-5">
      <div class="card p-4">
        <p>
          <button class="btn btn-icon btn-secondary btn-sm" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" style="display: none">
            <span class="btn-inner--icon"><i class="ni ni-ui-04"></i></span>
            <span class="btn-inner--text">Filter</span>
          </button>
        </p>
        <div class="collapse show" id="collapseExample">
          <div class="card-body str-view">
            <!-- <h3 class="str-view-header text-muted">Change View</h3> -->


            <p class="h3 mt-1 mb-4 d-none">Suggestions</p>
            <div class="str-view-row suggested d-none flex-wrap mb-3">
              <div class="btn-group-toggle m-1 str-toggle-button" data-toggle="buttons">
                <label class="btn btn-outline-secondary active" class="text-capitalize">
                  <input type="checkbox" checked autocomplete="off" /> yellow
                  fever
                </label>
              </div>
              <div class="btn-group-toggle m-1 str-toggle-button" data-toggle="buttons">
                <label class="btn btn-outline-secondary active" class="text-capitalize">
                  <input type="checkbox" checked autocomplete="off" /> pcr check
                </label>
              </div>
              <div class="btn-group-toggle m-1 str-toggle-button" data-toggle="buttons">
                <label class="btn btn-outline-secondary active" class="text-capitalize">
                  <input type="checkbox" checked autocomplete="off" /> t-shirts
                </label>
              </div>
              <div class="btn-group-toggle m-1 str-toggle-button" data-toggle="buttons">
                <label class="btn btn-outline-secondary active" class="text-capitalize">
                  <input type="checkbox" checked autocomplete="off" /> pregancy
                  test
                </label>
              </div>
              <div class="btn-group-toggle m-1 str-toggle-button" data-toggle="buttons">
                <label class="btn btn-outline-secondary active" class="text-capitalize">
                  <input type="checkbox" checked autocomplete="off" /> ticket
                </label>
              </div>
              <div class="btn-group-toggle m-1 str-toggle-button" data-toggle="buttons">
                <label class="btn btn-outline-secondary active" class="text-capitalize">
                  <input type="checkbox" checked autocomplete="off" /> travel
                  date
                </label>
              </div>
              <div class="btn-group-toggle m-1 str-toggle-button" data-toggle="buttons">
                <label class="btn btn-outline-secondary active" class="text-capitalize">
                  <input type="checkbox" checked autocomplete="off" /> arrival
                  date
                </label>
              </div>
              <div class="btn-group-toggle m-1 str-toggle-button" data-toggle="buttons">
                <label class="btn btn-outline-secondary active" class="text-capitalize">
                  <input type="checkbox" checked autocomplete="off" /> duration
                </label>
              </div>
            </div>
            <div class="btn-group btn-group-toggle ml-1 my-5 d-none " data-toggle="buttons">
              <label class="btn btn-outline-default suggestion">
                <input type="radio" value="" name="options" id="option2" autocomplete="off" />Select All
              </label>
              <label class="btn btn-outline-default suggestion">
                <input type="radio" value="" name="options" id="option3" autocomplete="off" />Deselect All
              </label>
            </div>

            <!-- Button trigger modal -->
            <button type="button " class="btn btn-primary suggestion-button fade d-none" data-toggle="modal" data-target="#exampleModal">
              Show changes
            </button>



            <div class="my-3 py-3"></div>

            <p class="h3 my-4">Search Girl</p>

            <div class="form-group position-relative">
              <input type="search" class="form-control form-control-muted search-input" placeholder="Search by Name or ID or Passport Number" />
              <img src="assets/img/icons/search.svg" alt="search icon" class="search-input position-absolute" style="width: 33px; top: 20%; right: 2%" />
            </div>

            <ul class="list-group custom-list-group rounded-3 d-none">
              <li class="list-group-item d-flex flex-row justify-content-between custom-list-group-item tasks">
                <span class="maid-name">Eminem</span>
                <!--<i class="fa fa-trash-alt text-danger tasks-delete pt-1"></i>-->
              </li>
              <li class="list-group-item d-flex flex-row justify-content-between custom-list-group-item tasks">
                <span class="maid-name">Big Sean</span>
                <!--<i class="fa fa-trash-alt text-danger tasks-delete pt-1"></i>-->
              </li>
              <li class="list-group-item d-flex flex-row justify-content-between custom-list-group-item tasks">
                <span class="maid-name">Joe Cole</span>
                <!--<i class="fa fa-trash-alt text-danger tasks-delete pt-1"></i>-->
              </li>
              <li class="list-group-item d-flex flex-row justify-content-between custom-list-group-item tasks">
                <span class="maid-name">Kendrik Lamar</span>
                <!--<i class="fa fa-trash-alt text-danger tasks-delete pt-1"></i>-->
              </li>
              <li class="list-group-item d-flex flex-row justify-content-between custom-list-group-item tasks">
                <span class="maid-name">Immaculate Moraa Date</span>
                <!--<i class="fa fa-trash-alt text-danger tasks-delete pt-1"></i>-->
              </li>
            </ul>
            <div class="my-5 py-3"></div>
            <p class="h3 mt-5 mb-4">Your Selection</p>
            <div class="str-view-row d-flex flex-wrap mb-3 selected">

            </div>

            <div class="btn-group btn-group-toggle ml-1 my-5" data-toggle="buttons">
              <label class="btn btn-outline-default selection">
                <input type="radio" value="" name="options" id="option2" autocomplete="off" />Select All
              </label>
              <label class="btn btn-outline-default selection">
                <input type="radio" value="" name="options" id="option3" autocomplete="off" />Deselect All
              </label>
            </div>

            <!-- Button trigger modal -->
            <button type="button " class="btn btn-primary selection-button fade" data-toggle="modal" data-target="#exampleModal">
              Show changes
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                      School Module
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                                    <form action="php_action/createSchool.php" id="schoolForm" method="post">
                  

                    <div class="modal-body">
                      <div class="selection-modal d-flex flex-wrap mb-3"></div>


                      <div class="medical d-flex justify-content-between my-5">
                        <label for=""> School Name</label>

                        <div class="btn-group btn-group-toggle mx-2" data-toggle="buttons">
                          <label class="btn btn-secondary active">
                            <input type="radio" value="1" name="name" id="name" autocomplete="off" checked />
                            ARGON SCHOOL
                          </label>
                          <!--
                        <label class="btn btn-secondary">
                          <input type="radio" value="pending" name="cof" id="cof2" autocomplete="off" />
                          PENDING
                        </label>
-->
                        </div>
                      </div>


                      <div class="input-daterange datepicker">

                        <div class="medical d-flex justify-content-between my-5">

                          <label for="">School Start Date</label>
                          <div class="form-group">
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                              </div>
                              <input class="form-control" placeholder="Start date" type="text" value="06/18/2020" name="start">
                            </div>
                          </div>
                        </div>

                        <div class="medical d-flex justify-content-between my-5">

                          <label for="">School End Date</label>
                          <div class="form-group">
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                              </div>
                              <input class="form-control" placeholder="Start date" type="text" value="06/18/2020" name="end">
                            </div>
                          </div>
                        </div>
                      </div>


                      <div class="medical d-flex justify-content-between my-5">
                        <label for=""> School Certificate</label>

                        <div class="btn-group btn-group-toggle mx-2" data-toggle="buttons">
                          <label class="btn btn-secondary active">
                            <input type="radio" value="pending" name="school" id="school" autocomplete="off" checked />
                            PENDING
                          </label>

                          <label class="btn btn-secondary">
                            <input type="radio" value="ready" name="school" id="school2" autocomplete="off" />
                            READY
                          </label>

                        </div>
                      </div>



                    </div>

                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Close
                      </button>
                      <button type="submit" id="schoolSubmit" class="btn btn-primary">
                        Save changes
                      </button>
                    </div>
                  </form>

                </div>
              </div>
            </div>

            <div class="my-5 py-3"></div>

          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header border-0 d-none">
              <h3 class="mb-0">Light table</h3>
            </div>
            <!-- Light table -->
            <div class="table-responsive d-none">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr class="table-agent position-relative">
                    <th scope="col" class="sort" data-sort="name">
                      Girl name

                    </th>
                    <th scope="col" class="sort" data-sort="passport">

                      Passport Number

                    </th>
                    <th scope="col" class="sort" data-sort="medical">
                      Full Medical Certificate

                    </th>

                    <th scope="col" class="sort" data-sort="wakala">
                      Girl's Contract

                    </th>
                    <th scope="col" class="sort" data-sort="enjaz">
                      Form Contract

                    </th>
                    <th scope="col" class="sort" data-sort="enjaz">
                      Form Of Bond

                    </th>

                    <th scope="col" class="sort" data-sort="status">
                      Good Conduct

                    </th>
                    <th scope="col" class="sort" data-sort="status">
                      Passport Copy

                    </th>
                    <th scope="col" class="sort" data-sort="status">
                      Visa Copy

                    </th>
                    <th scope="col" class="sort" data-sort="status">
                      Next Of Kin

                    </th>

                    <th scope="col" class="sort" data-sort="status">
                      Certificate Of Incorporation

                    </th>

                    <th scope="col" class="position-sticky">Actions</th>
                  </tr>
                </thead>
                <tbody class="list">

                  <tr class="table-agent-row">

                    <td class="budget">Mary Moraa</td>
                    <td class="budget">AK01244</td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">PRINTED</span>
                      </span>
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">PRINTED</span>
                      </span>
                    </td>

                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">PRINTED</span>
                      </span>
                    </td>

                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">PRINTED</span>
                      </span>
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">PRINTED</span>
                      </span>
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">PRINTED</span>
                      </span>
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">PRINTED</span>
                      </span>
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">PRINTED</span>
                      </span>
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">PRINTED</span>
                      </span>
                    </td>

                    <td class="text-center">
                      <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr class="table-agent-row">

                    <td class="budget">Mary Moraa</td>
                    <td class="budget">AK01244</td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">PRINTED</span>
                      </span>
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">PRINTED</span>
                      </span>
                    </td>

                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">PRINTED</span>
                      </span>
                    </td>

                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">PRINTED</span>
                      </span>
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">PRINTED</span>
                      </span>
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">PRINTED</span>
                      </span>
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">PRINTED</span>
                      </span>
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">PRINTED</span>
                      </span>
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">PRINTED</span>
                      </span>
                    </td>

                    <td class="text-center">
                      <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr class="table-agent-row">

                    <td class="budget">Mary Moraa</td>
                    <td class="budget">AK01244</td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">PRINTED</span>
                      </span>
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">PRINTED</span>
                      </span>
                    </td>

                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">PRINTED</span>
                      </span>
                    </td>

                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">PRINTED</span>
                      </span>
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">PRINTED</span>
                      </span>
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">PRINTED</span>
                      </span>
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">PRINTED</span>
                      </span>
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">PRINTED</span>
                      </span>
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">PRINTED</span>
                      </span>
                    </td>

                    <td class="text-center">
                      <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr class="table-agent-row">

                    <td class="budget">Mary Moraa</td>
                    <td class="budget">AK01244</td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">PRINTED</span>
                      </span>
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">PRINTED</span>
                      </span>
                    </td>

                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">PRINTED</span>
                      </span>
                    </td>

                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">PRINTED</span>
                      </span>
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">PRINTED</span>
                      </span>
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">PRINTED</span>
                      </span>
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">PRINTED</span>
                      </span>
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">PRINTED</span>
                      </span>
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">PRINTED</span>
                      </span>
                    </td>

                    <td class="text-center">
                      <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr class="table-agent-row">

                    <td class="budget">Mary Moraa</td>
                    <td class="budget">AK01244</td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">PRINTED</span>
                      </span>
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">PRINTED</span>
                      </span>
                    </td>

                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">PRINTED</span>
                      </span>
                    </td>

                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">PRINTED</span>
                      </span>
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">PRINTED</span>
                      </span>
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">PRINTED</span>
                      </span>
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">PRINTED</span>
                      </span>
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">PRINTED</span>
                      </span>
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">PRINTED</span>
                      </span>
                    </td>

                    <td class="text-center">
                      <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr class="table-agent-row">

                    <td class="budget">Mary Moraa</td>
                    <td class="budget">AK01244</td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">PRINTED</span>
                      </span>
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">PRINTED</span>
                      </span>
                    </td>

                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">PRINTED</span>
                      </span>
                    </td>

                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">PRINTED</span>
                      </span>
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">PRINTED</span>
                      </span>
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">PRINTED</span>
                      </span>
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">PRINTED</span>
                      </span>
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">PRINTED</span>
                      </span>
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">PRINTED</span>
                      </span>
                    </td>

                    <td class="text-center">
                      <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr class="table-agent-row">

                    <td class="budget">Mary Moraa</td>
                    <td class="budget">AK01244</td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">PRINTED</span>
                      </span>
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">PRINTED</span>
                      </span>
                    </td>

                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">PRINTED</span>
                      </span>
                    </td>

                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">PRINTED</span>
                      </span>
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">PRINTED</span>
                      </span>
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">PRINTED</span>
                      </span>
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">PRINTED</span>
                      </span>
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">PRINTED</span>
                      </span>
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">PRINTED</span>
                      </span>
                    </td>

                    <td class="text-center">
                      <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                      </div>
                    </td>
                  </tr>



                </tbody>
              </table>
            </div>
            <!-- Card footer -->
            <div class="card-footer py-4  d-none">
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

      <?php include("includes/footer.php");?>

    </div>
  </div>
</body>



<script>
  /** future updates include
   * pop over after an already selected is clicked
   * on deselect remove all the buttons from the modal
   */
  $(document).ready(function() {
    //for the select all and deselect elements
    const clickHandler = function(element, elementParent) {

      $(element).click(function(e) {
        // select all the element[selected||suggested] that are active
        const allButtons = $(`${elementParent} .btn.btn-outline-secondary`).filter(
            `${elementParent} .btn.btn-outline-secondary`
          ),
          allButtonParent = [];
        if (e.currentTarget.innerText === "Select All") {
          $(` ${element}-button`).removeClass("fade").addClass("show active");
          //make the toggle active on select all
          allButtons.each(function(e) {
            $(this).addClass("active focus");

            $(this).parent().click();
            $($(this).children()[0]).attr("checked", true);
          });


        } else {

          //make the deselection
          $(` ${element}-button`).removeClass("show active").addClass("fade");
          allButtons.each(function(e) {
            $(this).removeClass("active focus");
            $(this).parent().click();
            $($(this).children()[0]).removeAttr("checked");


          });
        }
      });


    }

    //clone handler for selected & suggested divs, clones onto the modal
    const cloneClickHandler = function(element) {




      $(`${element}  .btn.btn-outline-secondary.active`).each(function(e) {
        console.log($(`${element}`).siblings("button[data-toggle=modal]"))
        console.log("so you are here... ", $(this).parent())
        $(this).parent().clone().appendTo(".selection-modal")


      })
    }


    //if there's a single active button then show the modal button
    const showModalButton = function(button, element) {

      let returnedValue = false;
      const returned = [...$(` ${element} .str-toggle-button label`)].some(e => {

        console.log($(e))
        returnedValue = $(e).hasClass("active") === true
        return $(e).hasClass("active") === true

      })

      if (returned) {

        $(` ${button}-button`).removeClass("fade").addClass("show active");
      }
    }

    clickHandler(".selection", ".selected")
    clickHandler(".suggestion", ".suggested")

    $(".selection-button").click(() => cloneClickHandler(".selected"));
    $(".suggestion-button").click(() => cloneClickHandler(".suggested"));
    showModalButton(".suggestion", ".suggested")
    showModalButton(".selection", ".selected")



    $(".str-toggle-button >label input").each(function(e) {


      $(this).val($(this).parent().text().trim())

    })

    $(".form-control.form-control-muted.search-input").focus();
    $(".list-group.custom-list-group.rounded-3").removeClass("d-none");
    $(".list-group-item span").css({
      height: "100%",
      width: "100%",
      display: "block"
    });
    $("th[scope='col']").css({
      cursor: "pointer",
      position: "sticky",
      left: 0,
      top: 0
    });
    $("th .dropdown-menu").css({
      "min-width": "20rem",
      padding: "1rem"
    });
    $(".list-group-item ").css({
      cursor: "pointer"
    });
    $(".list-group-item").removeClass("d-flex");

    //    onkeyup attach the response to span

    $(".form-control.form-control-muted.search-input").keyup(function() {




      $.get("php_action/searchGirl?term=" + $(this).val(), function(data, status) {

        if (status) {

          $(".custom-list-group").html(data)
        }
        console.log("Data: " + data + "\nStatus: " + status);
      });
    });
    $("body ").on("click", ".list-group-item span", function(e) {

      $(this).addClass("text-muted");

      //      this is the clicked item text
      const listText = $(this).text().trim();
      const ID = $(this).attr("id").trim();

      //      checks if the selected text is part of the selected label 
      const returned = [...$(".selected  .str-toggle-button")].some(e =>

        {
          let buttonText = e.children[0].innerText.replace(/\s/g, "").replace(/([A-Z])/g, ' $1').trim();


          return buttonText === listText

        }

      );




      if (!returned) {
        //creates a clone from the first toggle button in the selected div
        //        const button = $(".selected  .str-toggle-button:first-child").clone()
        //        HTMLButtonElement>HTMLLabelElement>HTMLInputElement[radio]
        //        button.children()[0].children[0].checked
        //        button.children()[0].children[0].value = listText
        //        button.children()[0].innerText = listText
        //        button.clone().appendTo(".selected ")
        const button = document.createElement("div"),
          radio = document.createElement("input"),
          label = document.createElement("label")


        $(button).addClass("btn-group-toggle m-1 str-toggle-button")
        $(label).addClass("btn btn-outline-secondary active")
        $(button).attr("data-toggle", "buttons")
        $(radio).attr("checked", "buttons")
        $(radio).attr("autocomplete", "off")
        $(radio).attr("type", "checkbox")
        $(radio).attr("value", ID)
        $(radio).attr("name", "girls[]")
        $(label).attr("data-ID", ID)
        label.innerText = listText
        label.appendChild(radio)
        button.appendChild(label)


        $(".selected ").append(button)
      }

      //disabled after onclick

      $(this).parent().css({
        cursor: "no-drop",
        "pointer-events": "none"
      });
      $(this).css({
        cursor: "no-drop",
        "pointer-events": "none"
      });
      $(".list-group.custom-list-group.rounded-3").addClass("d-none");
    });

    //    onfocus show the HTMLUListElement
    $(".form-control.form-control-muted.search-input").focus(function() {
      $(".list-group.custom-list-group.rounded-3").removeClass("d-none");
    });


    //    ajax call



    $("#schoolSubmit").unbind('click').bind('click', function() {


      $("#schoolForm").unbind('submit').bind('submit', function(e) {
        e.preventDefault();
        var form = $(this);
        var formData = new FormData(this);
        console.log(formData)
        $.ajax({
          url: form.attr('action'),
          type: form.attr('method'),
          data: formData,
          dataType: 'json',
          cache: false,
          contentType: false,
          processData: false,
          success: function(response) {
            console.log(response)
            if (response.success == true) {


              $("html, body, div.modal, .modal-content, div.modal-body").animate({
                scrollTop: '0'
              }, 100);
              $('.modal-body div').hide()
              // shows a successful message after operation
              $('.modal-body').append('<div class="alert alert-success">' +
                '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                '<strong><i class="ni ni-like-2"></i></strong> ' + response.messages +
                '</div>');

              // remove the mesages
              $(".alert-success").delay(1000).show(10, function() {
                $(this).delay(3000).hide(10, function() {
                  $(this).remove();
                  $('.modal-body div').show()
                });
              }); // /.alert


            } // /if response.success
            else {




              $("html, body, div.modal, .modal-content, div.modal-body").animate({
                scrollTop: '0'
              }, 100);
              $('.modal-body div').hide()
              // shows a successful message after operation
              $('.modal-body').append('<div class="alert alert-warning shaking-2">' +
                '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                '<strong><i class="ni ni-like-2"></i></strong> ' + response.messages +
                '</div>');

              // remove the mesages
              $(".alert-warning").delay(500).show(10, function() {
                $(this).delay(3000).hide(10, function() {
                  $(this).remove();
                  $('.modal-body div').show()
                });
              }); // /.alert






            }

          } // /success function
        }); // /ajax function

        return false;

      })

    })


    $('.datepicker').datepicker({
      autoclose: true,
      changeMonth: true,
      changeYear: true,
      format: 'yyyy-mm-dd',
      startDate: '+1d'
    });


  });

</script>
