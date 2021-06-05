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
            <p class="h3 mb-4">Search Girl</p>

            <div class="form-group position-relative">
              <input
                type="search"
                class="form-control form-control-muted search-input"
                placeholder="Search by Name or ID or Passport Number"
              />
              <img
                src="assets/img/icons/search.svg"
                alt="search icon"
                class="search-input position-absolute"
                style="width: 33px; top: 20%; right: 2%"
              />
            </div>

            <ul class="list-group custom-list-group rounded-3 d-none">
              <li
                class="list-group-item d-flex flex-row justify-content-between custom-list-group-item tasks"
              >
                <span>Eminem</span
                ><!--<i class="fa fa-trash-alt text-danger tasks-delete pt-1"></i>-->
              </li>
              <li
                class="list-group-item d-flex flex-row justify-content-between custom-list-group-item tasks"
              >
                <span>Big Sean</span
                ><!--<i class="fa fa-trash-alt text-danger tasks-delete pt-1"></i>-->
              </li>
              <li
                class="list-group-item d-flex flex-row justify-content-between custom-list-group-item tasks"
              >
                <span>Joe Cole</span
                ><!--<i class="fa fa-trash-alt text-danger tasks-delete pt-1"></i>-->
              </li>
              <li
                class="list-group-item d-flex flex-row justify-content-between custom-list-group-item tasks"
              >
                <span>Kendrik Lamar</span
                ><!--<i class="fa fa-trash-alt text-danger tasks-delete pt-1"></i>-->
              </li>
            </ul>
            <div class="my-5 py-3"></div>
            <p class="h3 mt-5 mb-4">Your Selection</p>
            <div class="str-view-row d-flex flex-wrap mb-3">
              <div class="btn-group-toggle m-1" data-toggle="buttons">
                <label
                  class="btn btn-outline-secondary active"
                  class="text-capitalize"
                >
                  <input type="checkbox" checked autocomplete="off" /> yellow
                  fever
                </label>
              </div>
              <div class="btn-group-toggle m-1" data-toggle="buttons">
                <label
                  class="btn btn-outline-secondary active"
                  class="text-capitalize"
                >
                  <input type="checkbox" checked autocomplete="off" /> pcr check
                </label>
              </div>
              <div class="btn-group-toggle m-1" data-toggle="buttons">
                <label
                  class="btn btn-outline-secondary active"
                  class="text-capitalize"
                >
                  <input type="checkbox" checked autocomplete="off" /> t-shirts
                </label>
              </div>
              <div class="btn-group-toggle m-1" data-toggle="buttons">
                <label
                  class="btn btn-outline-secondary active"
                  class="text-capitalize"
                >
                  <input type="checkbox" checked autocomplete="off" /> pregancy
                  test
                </label>
              </div>
              <div class="btn-group-toggle m-1" data-toggle="buttons">
                <label
                  class="btn btn-outline-secondary active"
                  class="text-capitalize"
                >
                  <input type="checkbox" checked autocomplete="off" /> ticket
                </label>
              </div>
              <div class="btn-group-toggle m-1" data-toggle="buttons">
                <label
                  class="btn btn-outline-secondary active"
                  class="text-capitalize"
                >
                  <input type="checkbox" checked autocomplete="off" /> travel
                  date
                </label>
              </div>
              <div class="btn-group-toggle m-1" data-toggle="buttons">
                <label
                  class="btn btn-outline-secondary active"
                  class="text-capitalize"
                >
                  <input type="checkbox" checked autocomplete="off" /> arrival
                  date
                </label>
              </div>
              <div class="btn-group-toggle m-1" data-toggle="buttons">
                <label
                  class="btn btn-outline-secondary active"
                  class="text-capitalize"
                >
                  <input type="checkbox" checked autocomplete="off" /> duration
                </label>
              </div>
            </div>
            <div class="my-5 py-3"></div>
            <p class="h3 mt-5 mb-4">Suggestions</p>
            <div class="str-view-row d-flex flex-wrap mb-3">
              <div class="btn-group-toggle m-1" data-toggle="buttons">
                <label
                  class="btn btn-outline-secondary active"
                  class="text-capitalize"
                >
                  <input type="checkbox" checked autocomplete="off" /> yellow
                  fever
                </label>
              </div>
              <div class="btn-group-toggle m-1" data-toggle="buttons">
                <label
                  class="btn btn-outline-secondary active"
                  class="text-capitalize"
                >
                  <input type="checkbox" checked autocomplete="off" /> pcr check
                </label>
              </div>
              <div class="btn-group-toggle m-1" data-toggle="buttons">
                <label
                  class="btn btn-outline-secondary active"
                  class="text-capitalize"
                >
                  <input type="checkbox" checked autocomplete="off" /> t-shirts
                </label>
              </div>
              <div class="btn-group-toggle m-1" data-toggle="buttons">
                <label
                  class="btn btn-outline-secondary active"
                  class="text-capitalize"
                >
                  <input type="checkbox" checked autocomplete="off" /> pregancy
                  test
                </label>
              </div>
              <div class="btn-group-toggle m-1" data-toggle="buttons">
                <label
                  class="btn btn-outline-secondary active"
                  class="text-capitalize"
                >
                  <input type="checkbox" checked autocomplete="off" /> ticket
                </label>
              </div>
              <div class="btn-group-toggle m-1" data-toggle="buttons">
                <label
                  class="btn btn-outline-secondary active"
                  class="text-capitalize"
                >
                  <input type="checkbox" checked autocomplete="off" /> travel
                  date
                </label>
              </div>
              <div class="btn-group-toggle m-1" data-toggle="buttons">
                <label
                  class="btn btn-outline-secondary active"
                  class="text-capitalize"
                >
                  <input type="checkbox" checked autocomplete="off" /> arrival
                  date
                </label>
              </div>
              <div class="btn-group-toggle m-1" data-toggle="buttons">
                <label
                  class="btn btn-outline-secondary active"
                  class="text-capitalize"
                >
                  <input type="checkbox" checked autocomplete="off" /> duration
                </label>
              </div>
            </div>
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
                      School Certificate
                    </th>
                    <th scope="col" class="sort" data-sort="budget">
                      School Name
                    </th>
                    <th scope="col" class="sort" data-sort="budget">
                      Good conduct
                    </th>
                    
                    <th scope="col" class="sort" data-sort="status">Status</th>
                   

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
                    <td class="budget">Cert1234</td>
                    <td class="budget">Argon School</td>
                    <td class="budget">PLC-12WR</td>
                    <td class="budget">PLC-12WR</td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-warning"></i>
                        <span class="status">Uploaded</span>
                      </span>
                    </td>

                   
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
                   <td class="budget">Cert1234</td>
                    <td class="budget">Argon School</td>
                    <td class="budget">PLC-12WR</td>
                    <td class="budget">PLC-12WR</td>

                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">Approved</span>
                      </span>
                    </td>
                    

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
                    <td class="budget">Cert1234</td>
                    <td class="budget">Argon School</td>
                    <td class="budget">PLC-12WR</td>
                    <td class="budget">PLC-12WR</td>

                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-danger"></i>
                        <span class="status">Cancelled</span>
                      </span>
                    </td>
                   

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
                   <td class="budget">Cert1234</td>
                    <td class="budget">Argon School</td>
                    <td class="budget">PLC-12WR</td>
                    <td class="budget">PLC-12WR</td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-info"></i>
                        <span class="status">Pending Approval</span>
                      </span>
                    </td>
                    

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
                    <td class="budget">Cert1234</td>
                    <td class="budget">Argon School</td>
                    <td class="budget">PLC-12WR</td>
                    <td class="budget">PLC-12WR</td>

                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">Approved</span>
                      </span>
                    </td>
                   

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
  $(document).ready(function () {
    $(".form-control.form-control-muted.search-input").focus();
    $(".list-group.custom-list-group.rounded-3").removeClass("d-none");
    $(".list-group-item span").css({
      height: "100%",
      width: "100%",
      display: "block"
    });
    $(".list-group-item ").css({
      cursor: "pointer"
    });
    $(".list-group-item").removeClass("d-flex");
    $("body ").on("click", ".list-group-item span", function (e) {
      console.log(e.currentTarget.textContent);
      $(this).addClass("text-muted");
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
    $(".form-control.form-control-muted.search-input").focus(function () {
      $(".list-group.custom-list-group.rounded-3").removeClass("d-none");
    });
    
  });
</script>
