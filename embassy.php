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


            <p class="h3 mt-1 mb-4">Suggestions</p>
            <div class="str-view-row suggested d-flex flex-wrap mb-3">
              <div class="btn-group-toggle m-1" data-toggle="buttons">
                <label class="btn btn-outline-secondary active" class="text-capitalize">
                  <input type="checkbox" checked autocomplete="off" /> yellow
                  fever
                </label>
              </div>
              <div class="btn-group-toggle m-1" data-toggle="buttons">
                <label class="btn btn-outline-secondary active" class="text-capitalize">
                  <input type="checkbox" checked autocomplete="off" /> pcr check
                </label>
              </div>
              <div class="btn-group-toggle m-1" data-toggle="buttons">
                <label class="btn btn-outline-secondary active" class="text-capitalize">
                  <input type="checkbox" checked autocomplete="off" /> t-shirts
                </label>
              </div>
              <div class="btn-group-toggle m-1" data-toggle="buttons">
                <label class="btn btn-outline-secondary active" class="text-capitalize">
                  <input type="checkbox" checked autocomplete="off" /> pregancy
                  test
                </label>
              </div>
              <div class="btn-group-toggle m-1" data-toggle="buttons">
                <label class="btn btn-outline-secondary active" class="text-capitalize">
                  <input type="checkbox" checked autocomplete="off" /> ticket
                </label>
              </div>
              <div class="btn-group-toggle m-1" data-toggle="buttons">
                <label class="btn btn-outline-secondary active" class="text-capitalize">
                  <input type="checkbox" checked autocomplete="off" /> travel
                  date
                </label>
              </div>
              <div class="btn-group-toggle m-1" data-toggle="buttons">
                <label class="btn btn-outline-secondary active" class="text-capitalize">
                  <input type="checkbox" checked autocomplete="off" /> arrival
                  date
                </label>
              </div>
              <div class="btn-group-toggle m-1" data-toggle="buttons">
                <label class="btn btn-outline-secondary active" class="text-capitalize">
                  <input type="checkbox" checked autocomplete="off" /> duration
                </label>
              </div>
            </div>
            <div class="btn-group btn-group-toggle ml-1 mb-5 mt-2" data-toggle="buttons">
              <label class="btn btn-outline-default suggestion">
                <input type="radio" name="options" id="option2" autocomplete="off" />Select All
              </label>
              <label class="btn btn-outline-default suggestion">
                <input type="radio" name="options" id="option3" autocomplete="off" />Deselect All
              </label>
            </div>

            <!-- Button trigger modal -->
            <button type="button " class="btn btn-primary suggestion-button fade" data-toggle="modal" data-target="#exampleModal">
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
            </ul>
            <div class="my-5 py-3"></div>
            <p class="h3 mt-5 mb-4">Your Selection</p>
            <div class="str-view-row d-flex flex-wrap mb-3 selected">
              <div class="btn-group-toggle m-1" data-toggle="buttons">
                <label class="btn btn-outline-secondary active" class="text-capitalize">
                  <input type="checkbox" checked autocomplete="off" /> Susan Bitengo
                </label>
              </div>
              <div class="btn-group-toggle m-1" data-toggle="buttons">
                <label class="btn btn-outline-secondary active" class="text-capitalize">
                  <input type="checkbox" checked autocomplete="off" /> Valentine Moraa
                </label>
              </div>
              <div class="btn-group-toggle m-1" data-toggle="buttons">
                <label class="btn btn-outline-secondary active" class="text-capitalize">
                  <input type="checkbox" checked autocomplete="off" /> Sheilah Jemutai
                </label>
              </div>
              <div class="btn-group-toggle m-1" data-toggle="buttons">
                <label class="btn btn-outline-secondary active" class="text-capitalize">
                  <input type="checkbox" checked autocomplete="off" /> Doris Anyona
                  test
                </label>
              </div>
              <div class="btn-group-toggle m-1" data-toggle="buttons">
                <label class="btn btn-outline-secondary active" class="text-capitalize">
                  <input type="checkbox" checked autocomplete="off" /> Leonidah Nyamira
                </label>
              </div>
              <div class="btn-group-toggle m-1" data-toggle="buttons">
                <label class="btn btn-outline-secondary active" class="text-capitalize">
                  <input type="checkbox" checked autocomplete="off" /> Leah Bonareri
                  date
                </label>
              </div>
              <div class="btn-group-toggle m-1" data-toggle="buttons">
                <label class="btn btn-outline-secondary active" class="text-capitalize">
                  <input type="checkbox" checked autocomplete="off" /> Immaculate Moraa
                  date
                </label>
              </div>
              <div class="btn-group-toggle m-1" data-toggle="buttons">
                <label class="btn btn-outline-secondary active" class="text-capitalize">
                  <input type="checkbox" checked autocomplete="off" /> Felista Moraa
                </label>
              </div>
            </div>

            <div class="btn-group btn-group-toggle ml-1 my-5" data-toggle="buttons">
              <label class="btn btn-outline-default selection">
                <input type="radio" name="options" id="option2" autocomplete="off" />Select All
              </label>
              <label class="btn btn-outline-default selection">
                <input type="radio" name="options" id="option3" autocomplete="off" />Deselect All
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
                      Modal title
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="selection-modal d-flex flex-wrap mb-3"></div>
                    <div class="medical d-flex justify-content-between my-5">
                      <label for="">School Certificate </label>

                      <div class="btn-group btn-group-toggle mx-2" data-toggle="buttons">
                        <label class="btn btn-secondary active">
                          <input type="radio" name="options" id="option1" autocomplete="off" checked />
                          COLLECTED
                        </label>
                        <label class="btn btn-secondary">
                          <input type="radio" name="options" id="option2" autocomplete="off" />
                          PENDING
                        </label>
                      </div>
                    </div>
                    <div class="medical d-flex justify-content-between my-5">
                      <label for=""> Full Medical</label>

                      <div class="btn-group btn-group-toggle mr-4 pr-4" data-toggle="buttons">
                        <label class="btn btn-secondary active">
                          <input type="radio" name="options" id="option1" autocomplete="off" checked />
                          UPLOADED
                        </label>
                        <label class="btn btn-secondary">
                          <input type="radio" name="options" id="option2" autocomplete="off" />
                          PENDING
                        </label>
                      </div>
                    </div>
                    <div class="medical d-flex justify-content-between my-5">
                      <label for=""> Good Conduct</label>

                      <div class="btn-group btn-group-toggle mr-4 pr-4" data-toggle="buttons">
                        <label class="btn btn-secondary active">
                          <input type="radio" name="options" id="option1" autocomplete="off" checked />
                          READY
                        </label>
                        <label class="btn btn-secondary">
                          <input type="radio" name="options" id="option2" autocomplete="off" />
                          NOT READY
                        </label>
                      </div>
                    </div>
                    <div class="medical d-flex justify-content-between my-5">
                      <label for="">Wakala</label>

                      <div class="btn-group btn-group-toggle mx-2" data-toggle="buttons">
                        <label class="btn btn-secondary active">
                          <input type="radio" name="options" id="option1" autocomplete="off" checked />
                          PAID
                        </label>
                        <label class="btn btn-secondary">
                          <input type="radio" name="options" id="option2" autocomplete="off" />
                          NOT PAID
                        </label>
                      </div>
                    </div>
                    <div class="medical d-flex justify-content-between my-5">
                      <label for="">Enjaz</label>

                      <div class="btn-group btn-group-toggle mx-2" data-toggle="buttons">
                        <label class="btn btn-secondary active">
                          <input type="radio" name="options" id="option1" autocomplete="off" checked />
                          NOT UPLOADED
                        </label>
                        <label class="btn btn-secondary">
                          <input type="radio" name="options" id="option2" autocomplete="off" />
                          UPLOADED
                        </label>

                        <label class="btn btn-secondary">
                          <input type="radio" name="options" id="option4" autocomplete="off" />
                          PAID
                        </label>
                      </div>
                    </div>
                    <div class="medical d-flex justify-content-between my-5">
                      <label for="">Visa Form</label>

                      <div class="btn-group btn-group-toggle mx-2" data-toggle="buttons">
                        <label class="btn btn-secondary active">
                          <input type="radio" name="options" id="option1" autocomplete="off" checked />
                          PREPARED
                        </label>
                        <label class="btn btn-secondary">
                          <input type="radio" name="options" id="option2" autocomplete="off" />
                          NOT PREPARED
                        </label>


                      </div>
                    </div>

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                      Close
                    </button>
                    <button type="button" class="btn btn-primary">
                      Save changes
                    </button>
                  </div>
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
            <div class="card-header border-0">
              <h3 class="mb-0">Light table</h3>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr class="table-agent position-relative">
                    <th scope="col" class="sort" data-sort="name">
                      Girl name
                      <!--                   <div class="dropdown">
                        <a class="" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                          Girl name
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" x-placement="bottom-end" style="
                            position: absolute;
                            will-change: transform;
                            top: 0px;
                            left: 0px;
                            transform: translate3d(-160px, 32px, 0px);
                          ">
                          <input type="text" class="form-control form-control-muted" placeholder="Muted input" />

                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                      </div>
                       -->
                    </th>
                    <th scope="col" class="sort" data-sort="passport">

                      Passport Number
                      <!--  <div class="dropdown">
                        <a class="" href="#passport" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                         
                        </a>
                       <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" x-placement="bottom-end" style="
                            position: absolute;
                            will-change: transform;
                            top: 0px;
                            left: 0px;
                            transform: translate3d(-160px, 32px, 0px);
                          ">
                          <input type="text" class="form-control form-control-muted" placeholder="Muted input" />

                          <a class="dropdown-item" href="#">qawertt112</a>
                          <a class="dropdown-item" href="#">qwde344554</a>
                          <a class="dropdown-item" href="#">AK01234567</a>
                        </div>
                      </div>
                      
                      -->
                    </th>
                    <th scope="col" class="sort" data-sort="medical">
                      Full Medical Certificate
                      <!--
                      <div class="dropdown">
                        <a class="" href="#medical" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                          Full Medical Certificate
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" x-placement="bottom-end" style="
                            position: absolute;
                            will-change: transform;
                            top: 0px;
                            left: 0px;
                            transform: translate3d(-160px, 32px, 0px);
                          ">
                          <input type="text" class="form-control form-control-muted" placeholder="Muted input" />

                          <a class="dropdown-item" href="#">COLLECTED </a>
                          <a class="dropdown-item" href="#">SCHEDULED</a>
                          <a class="dropdown-item" href="#">FAILED</a>
                        </div>
                      </div>
-->
                    </th>

                    <th scope="col" class="sort" data-sort="wakala">
                      Wakala

                    </th>
                    <th scope="col" class="sort" data-sort="enjaz">
                      Enjaz

                    </th>

                    <th scope="col" class="sort" data-sort="status">
                      Good Conduct

                    </th>
                    <th scope="col" class="sort" data-sort="status">
                      School Certificate

                    </th>
                    <th scope="col" class="sort" data-sort="status">
                      Visa Form

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
                        <span class="status">COLLECTED</span>
                      </span>
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">PAID</span>
                      </span>
                    </td>

                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">COLLECTED</span>
                      </span>
                    </td>

                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">READY</span>
                      </span>
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">COLLECTED</span>
                      </span>
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">WRITTEN</span>
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
                        <span class="status">COLLECTED</span>
                      </span>
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">PAID</span>
                      </span>
                    </td>

                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">COLLECTED</span>
                      </span>
                    </td>

                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">READY</span>
                      </span>
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">COLLECTED</span>
                      </span>
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">WRITTEN</span>
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
                        <span class="status">COLLECTED</span>
                      </span>
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">PAID</span>
                      </span>
                    </td>

                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">COLLECTED</span>
                      </span>
                    </td>

                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">READY</span>
                      </span>
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">COLLECTED</span>
                      </span>
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">WRITTEN</span>
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
                        <span class="status">COLLECTED</span>
                      </span>
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">PAID</span>
                      </span>
                    </td>

                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">COLLECTED</span>
                      </span>
                    </td>

                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">READY</span>
                      </span>
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">COLLECTED</span>
                      </span>
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">WRITTEN</span>
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
                        <span class="status">COLLECTED</span>
                      </span>
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">PAID</span>
                      </span>
                    </td>

                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">COLLECTED</span>
                      </span>
                    </td>

                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">READY</span>
                      </span>
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">COLLECTED</span>
                      </span>
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">WRITTEN</span>
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
                        <span class="status">COLLECTED</span>
                      </span>
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">PAID</span>
                      </span>
                    </td>

                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">COLLECTED</span>
                      </span>
                    </td>

                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">READY</span>
                      </span>
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">COLLECTED</span>
                      </span>
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">WRITTEN</span>
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
      <?php include("includes/footer.php");?>
    </div>
  </div>
</body>



<script>
  $(document).ready(function() {

    const clickHandler = function(element, elementParent) {

      $(element).click(function(e) {
        // console.log(e.currentTarget.innerText)
        const allButtons = $(`${elementParent} .btn.btn-outline-secondary`).filter(
            `${elementParent} .btn.btn-outline-secondary`
          ),
          allButtonParent = [];
        if (e.currentTarget.innerText === "Select All") {
          $(` ${element}-button`).removeClass("fade").addClass("show active");

          allButtons.each(function(e) {
            $(this).addClass("active focus");
            // $(this).click()
            $(this).parent().click();
            $($(this).children()[0]).attr("checked", true);
          });

          // $(".modal-body").html(...allButtonParent)
        } else {
          $(` ${element}-button`).removeClass("show active").addClass("fade");
          allButtons.each(function(e) {
            $(this).removeClass("active focus");
            $(this).parent().click();
            $($(this).children()[0]).removeAttr("checked");

            // $(this).click()
          });
        }
      });


    }


    const cloneClickHandler = function(element) {


      console.log(typeof $(`${element}  .btn.btn-outline-secondary.active`))

      $(`${element}  .btn.btn-outline-secondary.active`).each(function(e) {

        $(this).parent().clone().appendTo(".selection-modal")


      })
    }

    clickHandler(".selection", ".selected")
    clickHandler(".suggestion", ".suggested")
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
    $("body ").on("click", ".list-group-item span", function(e) {
      console.log(e.currentTarget.textContent);
      $(this).addClass("text-muted");
      console.log($(this).text())
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
    $(".form-control.form-control-muted.search-input").focus(function() {
      $(".list-group.custom-list-group.rounded-3").removeClass("d-none");
    });


    $(".selection-button").click(() => cloneClickHandler(".selected"));
    $(".suggestion-button").click(() => cloneClickHandler(".suggested"));
  });

</script>
