<?php include("includes/header.php");?>

<body>
  <?php include("includes/sidebar.php");?>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav
      class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom"
    >
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          <form
            class="navbar-search navbar-search-light form-inline mr-sm-3"
            id="navbar-search-main"
          >
            <div class="form-group mb-0">
              <div
                class="input-group input-group-alternative input-group-merge"
              >
                <div class="input-group-prepend">
                  <span class="input-group-text"
                    ><i class="fas fa-search"></i
                  ></span>
                </div>
                <input class="form-control" placeholder="Search" type="text" />
              </div>
            </div>
            <button
              type="button"
              class="close"
              data-action="search-close"
              data-target="#navbar-search-main"
              aria-label="Close"
            >
              <span aria-hidden="true">×</span>
            </button>
          </form>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center ml-md-auto">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div
                class="pr-3 sidenav-toggler sidenav-toggler-dark"
                data-action="sidenav-pin"
                data-target="#sidenav-main"
              >
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            <li class="nav-item d-sm-none">
              <a
                class="nav-link"
                href="#"
                data-action="search-show"
                data-target="#navbar-search-main"
              >
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link"
                href="#"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                <i class="ni ni-bell-55"></i>
              </a>
              <div
                class="dropdown-menu dropdown-menu-xl dropdown-menu-right py-0 overflow-hidden"
              >
                <!-- Dropdown header -->
                <div class="px-3 py-3">
                  <h6 class="text-sm text-muted m-0">
                    You have
                    <strong class="text-primary">13</strong> notifications.
                  </h6>
                </div>
                <!-- List group -->
                <div class="list-group list-group-flush">
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img
                          alt="Image placeholder"
                          src="assets/img/theme/team-1.jpg"
                          class="avatar rounded-circle"
                        />
                      </div>
                      <div class="col ml--2">
                        <div
                          class="d-flex justify-content-between align-items-center"
                        >
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>2 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">
                          Let's meet at Starbucks at 11:30. Wdyt?
                        </p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img
                          alt="Image placeholder"
                          src="assets/img/theme/team-2.jpg"
                          class="avatar rounded-circle"
                        />
                      </div>
                      <div class="col ml--2">
                        <div
                          class="d-flex justify-content-between align-items-center"
                        >
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>3 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">
                          A new issue has been reported for Argon.
                        </p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img
                          alt="Image placeholder"
                          src="assets/img/theme/team-3.jpg"
                          class="avatar rounded-circle"
                        />
                      </div>
                      <div class="col ml--2">
                        <div
                          class="d-flex justify-content-between align-items-center"
                        >
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>5 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">
                          Your posts have been liked a lot.
                        </p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img
                          alt="Image placeholder"
                          src="assets/img/theme/team-4.jpg"
                          class="avatar rounded-circle"
                        />
                      </div>
                      <div class="col ml--2">
                        <div
                          class="d-flex justify-content-between align-items-center"
                        >
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>2 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">
                          Let's meet at Starbucks at 11:30. Wdyt?
                        </p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img
                          alt="Image placeholder"
                          src="assets/img/theme/team-5.jpg"
                          class="avatar rounded-circle"
                        />
                      </div>
                      <div class="col ml--2">
                        <div
                          class="d-flex justify-content-between align-items-center"
                        >
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>3 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">
                          A new issue has been reported for Argon.
                        </p>
                      </div>
                    </div>
                  </a>
                </div>
                <!-- View all -->
                <a
                  href="#!"
                  class="dropdown-item text-center text-primary font-weight-bold py-3"
                  >View all</a
                >
              </div>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link"
                href="#"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                <i class="ni ni-ungroup"></i>
              </a>
              <div
                class="dropdown-menu dropdown-menu-lg dropdown-menu-dark bg-default dropdown-menu-right"
              >
                <div class="row shortcuts px-4">
                  <a href="#!" class="col-4 shortcut-item">
                    <span
                      class="shortcut-media avatar rounded-circle bg-gradient-red"
                    >
                      <i class="ni ni-calendar-grid-58"></i>
                    </span>
                    <small>Calendar</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span
                      class="shortcut-media avatar rounded-circle bg-gradient-orange"
                    >
                      <i class="ni ni-email-83"></i>
                    </span>
                    <small>Email</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span
                      class="shortcut-media avatar rounded-circle bg-gradient-info"
                    >
                      <i class="ni ni-credit-card"></i>
                    </span>
                    <small>Payments</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span
                      class="shortcut-media avatar rounded-circle bg-gradient-green"
                    >
                      <i class="ni ni-books"></i>
                    </span>
                    <small>Reports</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span
                      class="shortcut-media avatar rounded-circle bg-gradient-purple"
                    >
                      <i class="ni ni-pin-3"></i>
                    </span>
                    <small>Maps</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span
                      class="shortcut-media avatar rounded-circle bg-gradient-yellow"
                    >
                      <i class="ni ni-basket"></i>
                    </span>
                    <small>Shop</small>
                  </a>
                </div>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav align-items-center ml-auto ml-md-0">
            <li class="nav-item dropdown">
              <a
                class="nav-link pr-0"
                href="#"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img
                      alt="Image placeholder"
                      src="assets/img/theme/team-4.jpg"
                    />
                  </span>
                  <div class="media-body ml-2 d-none d-lg-block">
                    <span class="mb-0 text-sm font-weight-bold">John Snow</span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>My profile</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-settings-gear-65"></i>
                  <span>Settings</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-calendar-grid-58"></i>
                  <span>Activity</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-support-16"></i>
                  <span>Support</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid mt-5">
      <div class="card p-4">
        <p>
          <button
            class="btn btn-icon btn-secondary btn-sm"
            type="button"
            data-toggle="collapse"
            data-target="#collapseExample"
            aria-expanded="false"
            aria-controls="collapseExample"
            style="display: none"
          >
            <span class="btn-inner--icon"><i class="ni ni-ui-04"></i></span>
            <span class="btn-inner--text">Filter</span>
          </button>
        </p>
        <div class="collapse show" id="collapseExample">
         
          
           
               <div class="card-body str-view">
            <!-- <h3 class="str-view-header text-muted">Change View</h3> -->


            <p class="h3 mt-1 mb-4 d-none">Suggestions</p>
            <div class="str-view-row suggested d-none mb-3">
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
            <div class="btn-group btn-group-toggle ml-1 my-5  d-none" data-toggle="buttons">
              <label class="btn btn-outline-default suggestion">
                <input type="radio" value="" name="options" id="option2" autocomplete="off" />Select All
              </label>
              <label class="btn btn-outline-default suggestion d-none">
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
                      Modal title
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form action="php_action/createMusaned.php" method="post" id="#musanedForm">
<!--                  <form action=""  id="#musanedForm">-->
                  <div class="modal-body">
                   
                    <div class="selection-modal d-flex flex-wrap mb-3"></div>
                    <div class="medical d-flex justify-content-between my-5">
                      <label for="">Musaned Status </label>

                      <div class="btn-group btn-group-toggle mx-2" data-toggle="buttons">
                        <label class="btn btn-secondary active">
                          <input type="radio" value="collected" name="status" id="status1" autocomplete="off" checked />
                          Available
                        </label>
                        <label class="btn btn-secondary">
                          <input type="radio" value="pending" name="status" id="status2" autocomplete="off" />
                          Contracted
                        </label>
                         <label class="btn btn-secondary">
                          <input type="radio" value="pending" name="status" id="status3" autocomplete="off" />
                          Employed
                        </label>
                      </div>
                    </div>
                    <div class="medical d-flex justify-content-between my-5">
                      <label for="">Saudi Agency </label>

                      <div class="btn-group btn-group-toggle mx-2" data-toggle="buttons">
                        <label class="btn btn-secondary active">
                          <input type="radio" value="1" name="agency" id="agency1" autocomplete="off" checked />
                          Agency 1
                        </label>
                        <label class="btn btn-secondary">
                          <input type="radio" value="2" name="agency" id="agency2" autocomplete="off" />
                         Agency 2
                        </label>
                         <label class="btn btn-secondary">
                          <input type="radio" value="3" name="agency" id="agency3" autocomplete="off" />
                          Agency 3
                        </label>
                      </div>
                    </div>
                    
                    
                     <div class="medical d-flex justify-content-between my-5 align-items-center">
                      <label for=""> Sponsor Name</label>




                      <input class="form-control w-50 " placeholder="E2145000" type="text" name="name">

                    </div>
                    
                     <div class="medical d-flex justify-content-between my-5 align-items-center">
                      <label for=""> Sponsor Number</label>




                      <input class="form-control w-50 " placeholder="E2145000" type="text" name="number">

                    </div>
                    
                     <div class="medical d-flex justify-content-between my-5 align-items-center">
                      <label for=""> Sponsor ID Number</label>




                      <input class="form-control w-50 " placeholder="E2145000" type="text" name="ID">

                    </div>
                    
                    
                     
                     <div class="medical d-flex justify-content-between my-5 align-items-center">
                      <label for=""> Sponsor Address</label>




                      <input class="form-control w-50 " placeholder="E2145000" type="text" name="address">

                    </div>
                    
                    
                    
                     <div class="medical d-flex justify-content-between my-5 align-items-center">
                      <label for=""> Contract Number</label>




                      <input class="form-control w-50 " placeholder="E2145000" type="text" name="contract_number">

                    </div>
                     <div class="medical d-flex justify-content-between my-5 align-items-center">
                      <label for=""> Visa Number</label>




                      <input class="form-control w-50 " placeholder="E2145000" type="text" name="visa_number">

                    </div>
                    
                    
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                      Close
                    </button>
                    <button type="submit" class="btn btn-primary" id="musanedSubmit">
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
            <div class="card-header border-0">
              <h3 class="mb-0">Light table</h3>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr class="table-agent position-relative">
                    <th scope="col" class="sort" data-sort="name">Girl name</th>
                    <th scope="col" class="sort" data-sort="budget">
                      Paasport Number
                    </th>
                    <th scope="col" class="sort" data-sort="budget">
                      Sponsor Name
                    </th>
                    <th scope="col" class="sort" data-sort="budget">
                      Sponsor City
                    </th>
                    <th scope="col" class="sort" data-sort="budget">
                      Sponsor ID
                    </th>
                    <th scope="col" class="sort" data-sort="budget">
                      Sponsor Phone
                    </th>
                    <th scope="col" class="sort" data-sort="budget">
                      Sponsor ID
                    </th>
                    <th scope="col" class="sort" data-sort="status">Status</th>
                    <th scope="col">Users</th>

                    <th scope="col" class="position-sticky">Actions</th>
                  </tr>
                </thead>
                <tbody class="list">
                  <tr class="table-agent-row">
                    <th scope="row">
                      <div class="media align-items-center">
                        <a href="#" class="avatar rounded-circle mr-3">
                          <img
                            alt="Image placeholder"
                            src="assets/img/theme/bootstrap.jpg"
                          />
                        </a>
                        <div class="media-body">
                          <span class="name mb-0 text-sm"
                            >Argon Design System</span
                          >
                        </div>
                      </div>
                    </th>
                    <td class="budget">$2500 USD</td>

                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-warning"></i>
                        <span class="status">Uploaded</span>
                      </span>
                    </td>

                    <td class="budget">$2500 USD</td>
                    <td class="budget">$2500 USD</td>
                    <td class="budget">$2500 USD</td>
                    <td class="budget">$2500 USD</td>
                    <td class="budget">$2500 USD</td>
                    <td class="budget">$2500 USD</td>
                    <td class="text-right">
                      <div class="dropdown">
                        <a
                          class="btn btn-sm btn-icon-only text-light"
                          href="#"
                          role="button"
                          data-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div
                          class="dropdown-menu dropdown-menu-right dropdown-menu-arrow"
                        >
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#"
                            >Something else here</a
                          >
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr class="table-agent-row">
                    <th scope="row">
                      <div class="media align-items-center">
                        <a href="#" class="avatar rounded-circle mr-3">
                          <img
                            alt="Image placeholder"
                            src="assets/img/theme/angular.jpg"
                          />
                        </a>
                        <div class="media-body">
                          <span class="name mb-0 text-sm"
                            >Angular Now UI Kit PRO</span
                          >
                        </div>
                      </div>
                    </th>
                    <td class="budget">$1800 USD</td>

                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">Travelled</span>
                      </span>
                    </td>
                    <td class="budget">$2500 USD</td>
                    <td class="budget">$2500 USD</td>
                    <td class="budget">$2500 USD</td>
                    <td class="budget">$2500 USD</td>
                    <td class="budget">$2500 USD</td>
                    <td class="budget">$2500 USD</td>

                    <td class="text-right">
                      <div class="dropdown">
                        <a
                          class="btn btn-sm btn-icon-only text-light"
                          href="#"
                          role="button"
                          data-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div
                          class="dropdown-menu dropdown-menu-right dropdown-menu-arrow"
                        >
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#"
                            >Something else here</a
                          >
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr class="table-agent-row">
                    <th scope="row">
                      <div class="media align-items-center">
                        <a href="#" class="avatar rounded-circle mr-3">
                          <img
                            alt="Image placeholder"
                            src="assets/img/theme/sketch.jpg"
                          />
                        </a>
                        <div class="media-body">
                          <span class="name mb-0 text-sm">Black Dashboard</span>
                        </div>
                      </div>
                    </th>
                    <td class="budget">$3150 USD</td>

                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-danger"></i>
                        <span class="status">Cancelled</span>
                      </span>
                    </td>
                    <td class="budget">$2500 USD</td>
                    <td class="budget">$2500 USD</td>
                    <td class="budget">$2500 USD</td>
                    <td class="budget">$2500 USD</td>
                    <td class="budget">$2500 USD</td>
                    <td class="budget">$2500 USD</td>

                    <td class="text-right">
                      <div class="dropdown">
                        <a
                          class="btn btn-sm btn-icon-only text-light"
                          href="#"
                          role="button"
                          data-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div
                          class="dropdown-menu dropdown-menu-right dropdown-menu-arrow"
                        >
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#"
                            >Something else here</a
                          >
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr class="table-agent-row">
                    <th scope="row">
                      <div class="media align-items-center">
                        <a href="#" class="avatar rounded-circle mr-3">
                          <img
                            alt="Image placeholder"
                            src="assets/img/theme/react.jpg"
                          />
                        </a>
                        <div class="media-body">
                          <span class="name mb-0 text-sm"
                            >React Material Dashboard</span
                          >
                        </div>
                      </div>
                    </th>
                    <td class="budget">$2200 USD</td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-info"></i>
                        <span class="status">Contracted</span>
                      </span>
                    </td>
                    <td class="budget">$2500 USD</td>
                    <td class="budget">$2500 USD</td>
                    <td class="budget">$2500 USD</td>
                    <td class="budget">$2500 USD</td>
                    <td class="budget">$2500 USD</td>
                    <td class="budget">$2500 USD</td>

                    <td class="text-right">
                      <div class="dropdown">
                        <a
                          class="btn btn-sm btn-icon-only text-light"
                          href="#"
                          role="button"
                          data-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div
                          class="dropdown-menu dropdown-menu-right dropdown-menu-arrow"
                        >
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#"
                            >Something else here</a
                          >
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr class="table-agent-row">
                    <th scope="row">
                      <div class="media align-items-center">
                        <a href="#" class="avatar rounded-circle mr-3">
                          <img
                            alt="Image placeholder"
                            src="assets/img/theme/vue.jpg"
                          />
                        </a>
                        <div class="media-body">
                          <span class="name mb-0 text-sm"
                            >Vue Paper UI Kit PRO</span
                          >
                        </div>
                      </div>
                    </th>
                    <td class="budget">$2200 USD</td>

                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">Travelled</span>
                      </span>
                    </td>
                    <td class="budget">$2500 USD</td>
                    <td class="budget">$2500 USD</td>
                    <td class="budget">$2500 USD</td>
                    <td class="budget">$2500 USD</td>
                    <td class="budget">$2500 USD</td>
                    <td class="budget">$2500 USD</td>

                    <td class="text-right">
                      <div class="dropdown">
                        <a
                          class="btn btn-sm btn-icon-only text-light"
                          href="#"
                          role="button"
                          data-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div
                          class="dropdown-menu dropdown-menu-right dropdown-menu-arrow"
                        >
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#"
                            >Something else here</a
                          >
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
                    <a class="page-link" href="#"
                      >2 <span class="sr-only">(current)</span></a
                    >
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
        console.log("so you are here... ",  $(this).parent())
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
    
    $(".form-control.form-control-muted.search-input").keyup(function(){
      
 
      
      
      $.get("php_action/searchGirl?term="+$(this).val(), function(data, status){
        
        if(status){
          
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
        const button=document.createElement("div"),
              radio=document.createElement("input"),
              label=document.createElement("label")
        
      
        $(button).addClass("btn-group-toggle m-1 str-toggle-button")
        $(label).addClass("btn btn-outline-secondary active")
        $(button).attr("data-toggle","buttons")
        $(radio).attr("checked","buttons")
        $(radio).attr("autocomplete","off")
        $(radio).attr("type","checkbox")
        $(radio).attr("value",ID)
        $(radio).attr("name","girls[]")
        $(label).attr("data-ID",ID)
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
    
    
        
        	$("#musanedSubmit").unbind('click').bind('click', function() {
             
              	
              	$("#musanedForm").unbind('submit').bind('submit', function(e){
//                  e.preventDefault();
              	 var form = $(this);
				var formData = new FormData(this);
                  console.log(formData)
                  		$.ajax({
					url : form.attr('action'),
					type: form.attr('method'),
					data: formData,
					dataType: 'json',
//					cache: false,
//					contentType: false,
//					processData: false,
					success:function(response) {
                    console.log(response)
						if(response.success == true) {
							

							$("html, body, div.modal, .modal-content, div.modal-body").animate({scrollTop: '0'}, 100);
								$('.modal-body div').hide()									
							// shows a successful message after operation
							$('.modal-body').append('<div class="alert alert-success">'+
		            '<button type="button" class="close" data-dismiss="alert">&times;</button>'+
		            '<strong><i class="ni ni-like-2"></i></strong> '+ response.messages +
		          '</div>');

							// remove the mesages
		          $(".alert-success").delay(1000).show(10, function() {
								$(this).delay(3000).hide(10, function() {
									$(this).remove();
                                  $('.modal-body div').show()
								});
							}); // /.alert

		          
						} // /if response.success
                      
                      
                      else{
                        
                        
                        
                        
							$("html, body, div.modal, .modal-content, div.modal-body").animate({scrollTop: '0'}, 100);
									$('.modal-body div').hide()								
							// shows a successful message after operation
							$('.modal-body').append('<div class="alert alert-warning shaking-2">'+
		            '<button type="button" class="close" data-dismiss="alert">&times;</button>'+
		            '<strong><i class="ni ni-like-2"></i></strong> '+ response.messages +
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

    
    


  });

</script>
