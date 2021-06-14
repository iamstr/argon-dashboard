<!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard


* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com



=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<?php include("includes/header.php");?>

<body>
  <?php include("includes/sidebar.php");?>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
 <?php include("includes/top-nav.php");?>
    <!-- Page content -->
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
          >
            <span class="btn-inner--icon"><i class="ni ni-ui-04"></i></span>
            <span class="btn-inner--text">Filter</span>
          </button>
        </p>
        <div class="collapse show" id="collapseExample">
          <div class="card-body str-view">
            <h3 class="str-view-header text-muted">Change View</h3>
            <div class="str-view-row d-flex flex-wrap">
              <div class="btn-group-toggle m-1" data-toggle="buttons">
                <label
                  class="btn btn-outline-str-secondary active"
                  class="text-capitalize"
                >
                  <input type="checkbox" autocomplete="off"checked /> fullname
                </label>
              </div>
              <div class="btn-group-toggle m-1" data-toggle="buttons">
                <label
                  class="btn btn-outline-str-secondary active"
                  class="text-capitalize"
                >
                  <input type="checkbox" autocomplete="off"checked /> ID
                </label>
              </div>
              <div class="btn-group-toggle m-1" data-toggle="buttons">
                <label
                  class="btn btn-outline-str-secondary active"
                  class="text-capitalize"
                >
                  <input type="checkbox" autocomplete="off"checked /> Phone Number
                </label>
              </div>
              <div class="btn-group-toggle m-1" data-toggle="buttons">
                <label
                  class="btn btn-outline-str-secondary active"
                  class="text-capitalize"
                >
                  <input type="checkbox" autocomplete="off"checked /> County
                </label>
              </div>
              <div class="btn-group-toggle m-1" data-toggle="buttons">
                <label
                  class="btn btn-outline-str-secondary active"
                  class="text-capitalize"
                >
                  <input type="checkbox" autocomplete="off" checked/> Religion
                </label>
              </div>
              <div class="btn-group-toggle m-1" data-toggle="buttons">
                <label
                  class="btn btn-outline-str-secondary active"
                  class="text-capitalize"
                >
                  <input type="checkbox" checked autocomplete="off" checked/> birth
                  certificate
                </label>
              </div>
              <div class="btn-group-toggle m-1" data-toggle="buttons">
                <label
                  class="btn btn-outline-str-secondary active"
                  class="text-capitalize"
                >
                  <input type="checkbox" checked autocomplete="off" /> first
                  medical
                </label>
              </div>
              <div class="btn-group-toggle m-1" data-toggle="buttons">
                <label
                  class="btn btn-outline-str-secondary active"
                  class="text-capitalize"
                >
                  <input type="checkbox" checked autocomplete="off" /> photos
                </label>
              </div>
              <div class="btn-group-toggle m-1" data-toggle="buttons">
                <label
                  class="btn btn-outline-str-secondary active"
                  class="text-capitalize"
                >
                  <input type="checkbox" checked autocomplete="off" /> passport
                  number
                </label>
              </div>
              <div class="btn-group-toggle m-1" data-toggle="buttons">
                <label
                  class="btn btn-outline-str-secondary active"
                  class="text-capitalize"
                >
                  <input type="checkbox" checked autocomplete="off" /> passport
                  issue place
                </label>
              </div>
              <div class="btn-group-toggle m-1" data-toggle="buttons">
                <label
                  class="btn btn-outline-str-secondary active"
                  class="text-capitalize"
                >
                  <input type="checkbox" checked autocomplete="off" /> good
                  conduct
                </label>
              </div>
              <div class="btn-group-toggle m-1" data-toggle="buttons">
                <label
                  class="btn btn-outline-str-secondary active"
                  class="text-capitalize"
                >
                  <input type="checkbox" checked autocomplete="off" /> next of
                  kin names
                </label>
              </div>
              <div class="btn-group-toggle m-1" data-toggle="buttons">
                <label
                  class="btn btn-outline-str-secondary active"
                  class="text-capitalize"
                >
                  <input type="checkbox" checked autocomplete="off" /> next of
                  kin relation
                </label>
              </div>
              <div class="btn-group-toggle m-1" data-toggle="buttons">
                <label
                  class="btn btn-outline-str-secondary active"
                  class="text-capitalize"
                >
                  <input type="checkbox" checked autocomplete="off" /> next of
                  kin id
                </label>
              </div>
              <div class="btn-group-toggle m-1" data-toggle="buttons">
                <label
                  class="btn btn-outline-str-secondary active"
                  class="text-capitalize"
                >
                  <input type="checkbox" checked autocomplete="off" /> next of
                  kin number
                </label>
              </div>
              <div class="btn-group-toggle m-1" data-toggle="buttons">
                <label
                  class="btn btn-outline-str-secondary active"
                  class="text-capitalize"
                >
                  <input type="checkbox" checked autocomplete="off" /> agent
                  name
                </label>
              </div>
              <div class="btn-group-toggle m-1" data-toggle="buttons">
                <label
                  class="btn btn-outline-str-secondary active"
                  class="text-capitalize"
                >
                  <input type="checkbox" checked autocomplete="off" /> agent
                  number
                </label>
              </div>
              <div class="btn-group-toggle m-1" data-toggle="buttons">
                <label
                  class="btn btn-outline-str-secondary active"
                  class="text-capitalize"
                >
                  <input type="checkbox" checked autocomplete="off" /> school
                  start date
                </label>
              </div>

              <div class="btn-group-toggle m-1" data-toggle="buttons">
                <label
                  class="btn btn-outline-str-secondary active"
                  class="text-capitalize"
                >
                  <input type="checkbox" checked autocomplete="off" /> school
                  name
                </label>
              </div>
              <div class="btn-group-toggle m-1" data-toggle="buttons">
                <label
                  class="btn btn-outline-str-secondary active"
                  class="text-capitalize"
                >
                  <input type="checkbox" checked autocomplete="off" /> school
                  end date
                </label>
              </div>
              <div class="btn-group-toggle m-1" data-toggle="buttons">
                <label
                  class="btn btn-outline-str-secondary active"
                  class="text-capitalize"
                >
                  <input type="checkbox" checked autocomplete="off" /> school
                  certificate
                </label>
              </div>
<!--        this is would be introducted in the next release      
              <div class="btn-group-toggle m-1" data-toggle="buttons">
                <label
                  class="btn btn-outline-str-secondary active"
                  class="text-capitalize"
                >
                  <input type="checkbox" checked autocomplete="off" /> cv
                </label>
              </div>
              <div class="btn-group-toggle m-1" data-toggle="buttons">
                <label
                  class="btn btn-outline-str-secondary active"
                  class="text-capitalize"
                >
                  <input type="checkbox" checked autocomplete="off" /> cv given
                  date
                </label>
              </div>
              
              -->
              <div class="btn-group-toggle m-1" data-toggle="buttons">
                <label
                  class="btn btn-outline-str-secondary active"
                  class="text-capitalize"
                >
                  <input type="checkbox" checked autocomplete="off" /> saudia
                  agency
                </label>
              </div>
              <div class="btn-group-toggle m-1" data-toggle="buttons">
                <label
                  class="btn btn-outline-str-secondary active"
                  class="text-capitalize"
                >
                  <input type="checkbox" checked autocomplete="off" /> musaned
                </label>
              </div>
              <div class="btn-group-toggle m-1" data-toggle="buttons">
                <label
                  class="btn btn-outline-str-secondary active"
                  class="text-capitalize"
                >
                  <input type="checkbox" checked autocomplete="off" /> sponspor
                  name
                </label>
              </div>
              <div class="btn-group-toggle m-1" data-toggle="buttons">
                <label
                  class="btn btn-outline-str-secondary active"
                  class="text-capitalize"
                >
                  <input type="checkbox" checked autocomplete="off" />
                  Enjaz
                </label>
              </div>
              <div class="btn-group-toggle m-1" data-toggle="buttons">
                <label
                  class="btn btn-outline-str-secondary active"
                  class="text-capitalize"
                >
                  <input type="checkbox" checked autocomplete="off" />
                  destination
                </label>
              </div>
              <div class="btn-group-toggle m-1" data-toggle="buttons">
                <label
                  class="btn btn-outline-str-secondary active"
                  class="text-capitalize"
                >
                  <input type="checkbox" checked autocomplete="off" />
                  Full Medical
                </label>
              </div>

              <div class="btn-group-toggle m-1" data-toggle="buttons">
                <label
                  class="btn btn-outline-str-secondary active"
                  class="text-capitalize"
                >
                  <input type="checkbox" checked autocomplete="off" /> yellow
                  fever
                </label>
              </div>
              <div class="btn-group-toggle m-1" data-toggle="buttons">
                <label
                  class="btn btn-outline-str-secondary active"
                  class="text-capitalize"
                >
                  <input type="checkbox" checked autocomplete="off" /> pcr check
                </label>
              </div>
              <div class="btn-group-toggle m-1" data-toggle="buttons">
                <label
                  class="btn btn-outline-str-secondary active"
                  class="text-capitalize"
                >
                  <input type="checkbox" checked autocomplete="off" /> t-shirts
                </label>
              </div>
              <div class="btn-group-toggle m-1" data-toggle="buttons">
                <label
                  class="btn btn-outline-str-secondary active"
                  class="text-capitalize"
                >
                  <input type="checkbox" checked autocomplete="off" /> pregancy
                  test
                </label>
              </div>
              <div class="btn-group-toggle m-1" data-toggle="buttons">
                <label
                  class="btn btn-outline-str-secondary active"
                  class="text-capitalize"
                >
                  <input type="checkbox" checked autocomplete="off" /> ticket
                </label>
              </div>
              <div class="btn-group-toggle m-1" data-toggle="buttons">
                <label
                  class="btn btn-outline-str-secondary active"
                  class="text-capitalize"
                >
                  <input type="checkbox" checked autocomplete="off" /> travel
                  date
                </label>
              </div>
              <div class="btn-group-toggle m-1" data-toggle="buttons">
                <label
                  class="btn btn-outline-str-secondary active"
                  class="text-capitalize"
                >
                  <input type="checkbox" checked autocomplete="off" /> arrival
                  date
                </label>
              </div>
              <div class="btn-group-toggle m-1" data-toggle="buttons">
                <label
                  class="btn btn-outline-str-secondary active"
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
<!--
                    <th scope="col" class="sort" data-sort="name">Fullname</th>
                   
-->
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
                            >Susan Bitengo</span
                          >
                        </div>
                      </div>
                    </th>
                   

                   
                    <td class="budget">21234500</td>
                   
                    
                    <td class="budget">0700321456</td>
                    <td class="budget">KISII</td>
                    <td class="budget">NON MUSLIM</td>
                    <td class="budget">YES</td>
                    <td class="budget">YES</td>
                    <td class="budget">YES</td>
                    <td class="budget">AK0123456</td>
                    <td class="budget">NAIROBI</td>
                    <td class="budget">QUEUED</td>
                    <td class="budget">JOSEPH NYAMAO</td>
                    <td class="budget">FATHER</td>
                    <td class="budget">00000000</td>
                    <td class="budget">0745612308</td>
                    <td class="budget">DAVID JACK</td>
                    <td class="budget">0700000111</td>
                    <td class="budget">25 <sup>th</sup> March 2021</td>
                    <td class="budget">Argon School Of Homecare</td>
                    <td class="budget">25 <sup>th</sup> April 2021</td>
                    <td class="budget">Cert1000</td>
                    <td class="budget">NO CV</td>
                    <td class="budget">25 <sup>th</sup> March 2021</td>
                    <td class="budget">AL Argon</td>
                    <td class="budget">Available</td>
                    <td class="budget">SAEED AL GHIRIAMA</td>
                    <td class="budget">Riyadh</td>
                    <td class="budget">Paid</td>
                    <td class="budget">Okay</td>
                    <td class="budget">Yellow Fever</td>
                    <td class="budget">25 <sup>th</sup> March 2021</td>
                   
                    <td class="budget">25 <sup>th</sup> March 2021</td>
                    <td class="budget">01 <sup>th</sup> April 2021</td>
                    <td class="budget">03 <sup>th</sup> April 2021</td>
                    <td class="budget">3 Days</td>

                    <td class="text-center">
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
      <!-- Dark table -->
      <div class="row">
        <div class="col">
          <div class="card bg-default shadow">
            <div class="card-header bg-transparent border-0">
              <h3 class="text-white mb-0">Dark table</h3>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-dark table-flush">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col" class="sort" data-sort="name">Project</th>
                    <th scope="col" class="sort" data-sort="budget">Budget</th>
                    <th scope="col" class="sort" data-sort="status">Status</th>
                    <th scope="col">Users</th>
                    <th scope="col" class="sort" data-sort="completion">
                      Completion
                    </th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody class="list">
                  <tr>
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
                        <span class="status">pending</span>
                      </span>
                    </td>
                    <td>
                      <div class="avatar-group">
                        <a
                          href="#"
                          class="avatar avatar-sm rounded-circle"
                          data-toggle="tooltip"
                          data-original-title="Ryan Tompson"
                        >
                          <img
                            alt="Image placeholder"
                            src="assets/img/theme/team-1.jpg"
                          />
                        </a>
                        <a
                          href="#"
                          class="avatar avatar-sm rounded-circle"
                          data-toggle="tooltip"
                          data-original-title="Romina Hadid"
                        >
                          <img
                            alt="Image placeholder"
                            src="assets/img/theme/team-2.jpg"
                          />
                        </a>
                        <a
                          href="#"
                          class="avatar avatar-sm rounded-circle"
                          data-toggle="tooltip"
                          data-original-title="Alexander Smith"
                        >
                          <img
                            alt="Image placeholder"
                            src="assets/img/theme/team-3.jpg"
                          />
                        </a>
                        <a
                          href="#"
                          class="avatar avatar-sm rounded-circle"
                          data-toggle="tooltip"
                          data-original-title="Jessica Doe"
                        >
                          <img
                            alt="Image placeholder"
                            src="assets/img/theme/team-4.jpg"
                          />
                        </a>
                      </div>
                    </td>
                    <td>
                      <div class="d-flex align-items-center">
                        <span class="completion mr-2">60%</span>
                        <div>
                          <div class="progress">
                            <div
                              class="progress-bar bg-warning"
                              role="progressbar"
                              aria-valuenow="60"
                              aria-valuemin="0"
                              aria-valuemax="100"
                              style="width: 60%"
                            ></div>
                          </div>
                        </div>
                      </div>
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
                  <tr>
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
                        <span class="status">completed</span>
                      </span>
                    </td>
                    <td>
                      <div class="avatar-group">
                        <a
                          href="#"
                          class="avatar avatar-sm rounded-circle"
                          data-toggle="tooltip"
                          data-original-title="Ryan Tompson"
                        >
                          <img
                            alt="Image placeholder"
                            src="assets/img/theme/team-1.jpg"
                          />
                        </a>
                        <a
                          href="#"
                          class="avatar avatar-sm rounded-circle"
                          data-toggle="tooltip"
                          data-original-title="Romina Hadid"
                        >
                          <img
                            alt="Image placeholder"
                            src="assets/img/theme/team-2.jpg"
                          />
                        </a>
                        <a
                          href="#"
                          class="avatar avatar-sm rounded-circle"
                          data-toggle="tooltip"
                          data-original-title="Alexander Smith"
                        >
                          <img
                            alt="Image placeholder"
                            src="assets/img/theme/team-3.jpg"
                          />
                        </a>
                        <a
                          href="#"
                          class="avatar avatar-sm rounded-circle"
                          data-toggle="tooltip"
                          data-original-title="Jessica Doe"
                        >
                          <img
                            alt="Image placeholder"
                            src="assets/img/theme/team-4.jpg"
                          />
                        </a>
                      </div>
                    </td>
                    <td>
                      <div class="d-flex align-items-center">
                        <span class="completion mr-2">100%</span>
                        <div>
                          <div class="progress">
                            <div
                              class="progress-bar bg-success"
                              role="progressbar"
                              aria-valuenow="100"
                              aria-valuemin="0"
                              aria-valuemax="100"
                              style="width: 100%"
                            ></div>
                          </div>
                        </div>
                      </div>
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
                  <tr>
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
                        <span class="status">delayed</span>
                      </span>
                    </td>
                    <td>
                      <div class="avatar-group">
                        <a
                          href="#"
                          class="avatar avatar-sm rounded-circle"
                          data-toggle="tooltip"
                          data-original-title="Ryan Tompson"
                        >
                          <img
                            alt="Image placeholder"
                            src="assets/img/theme/team-1.jpg"
                          />
                        </a>
                        <a
                          href="#"
                          class="avatar avatar-sm rounded-circle"
                          data-toggle="tooltip"
                          data-original-title="Romina Hadid"
                        >
                          <img
                            alt="Image placeholder"
                            src="assets/img/theme/team-2.jpg"
                          />
                        </a>
                        <a
                          href="#"
                          class="avatar avatar-sm rounded-circle"
                          data-toggle="tooltip"
                          data-original-title="Alexander Smith"
                        >
                          <img
                            alt="Image placeholder"
                            src="assets/img/theme/team-3.jpg"
                          />
                        </a>
                        <a
                          href="#"
                          class="avatar avatar-sm rounded-circle"
                          data-toggle="tooltip"
                          data-original-title="Jessica Doe"
                        >
                          <img
                            alt="Image placeholder"
                            src="assets/img/theme/team-4.jpg"
                          />
                        </a>
                      </div>
                    </td>
                    <td>
                      <div class="d-flex align-items-center">
                        <span class="completion mr-2">72%</span>
                        <div>
                          <div class="progress">
                            <div
                              class="progress-bar bg-danger"
                              role="progressbar"
                              aria-valuenow="72"
                              aria-valuemin="0"
                              aria-valuemax="100"
                              style="width: 72%"
                            ></div>
                          </div>
                        </div>
                      </div>
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
                  <tr>
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
                    <td class="budget">$4400 USD</td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-info"></i>
                        <span class="status">on schedule</span>
                      </span>
                    </td>
                    <td>
                      <div class="avatar-group">
                        <a
                          href="#"
                          class="avatar avatar-sm rounded-circle"
                          data-toggle="tooltip"
                          data-original-title="Ryan Tompson"
                        >
                          <img
                            alt="Image placeholder"
                            src="assets/img/theme/team-1.jpg"
                          />
                        </a>
                        <a
                          href="#"
                          class="avatar avatar-sm rounded-circle"
                          data-toggle="tooltip"
                          data-original-title="Romina Hadid"
                        >
                          <img
                            alt="Image placeholder"
                            src="assets/img/theme/team-2.jpg"
                          />
                        </a>
                        <a
                          href="#"
                          class="avatar avatar-sm rounded-circle"
                          data-toggle="tooltip"
                          data-original-title="Alexander Smith"
                        >
                          <img
                            alt="Image placeholder"
                            src="assets/img/theme/team-3.jpg"
                          />
                        </a>
                        <a
                          href="#"
                          class="avatar avatar-sm rounded-circle"
                          data-toggle="tooltip"
                          data-original-title="Jessica Doe"
                        >
                          <img
                            alt="Image placeholder"
                            src="assets/img/theme/team-4.jpg"
                          />
                        </a>
                      </div>
                    </td>
                    <td>
                      <div class="d-flex align-items-center">
                        <span class="completion mr-2">90%</span>
                        <div>
                          <div class="progress">
                            <div
                              class="progress-bar bg-info"
                              role="progressbar"
                              aria-valuenow="90"
                              aria-valuemin="0"
                              aria-valuemax="100"
                              style="width: 90%"
                            ></div>
                          </div>
                        </div>
                      </div>
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
                  <tr>
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
                        <span class="status">completed</span>
                      </span>
                    </td>
                    <td>
                      <div class="avatar-group">
                        <a
                          href="#"
                          class="avatar avatar-sm rounded-circle"
                          data-toggle="tooltip"
                          data-original-title="Ryan Tompson"
                        >
                          <img
                            alt="Image placeholder"
                            src="assets/img/theme/team-1.jpg"
                          />
                        </a>
                        <a
                          href="#"
                          class="avatar avatar-sm rounded-circle"
                          data-toggle="tooltip"
                          data-original-title="Romina Hadid"
                        >
                          <img
                            alt="Image placeholder"
                            src="assets/img/theme/team-2.jpg"
                          />
                        </a>
                        <a
                          href="#"
                          class="avatar avatar-sm rounded-circle"
                          data-toggle="tooltip"
                          data-original-title="Alexander Smith"
                        >
                          <img
                            alt="Image placeholder"
                            src="assets/img/theme/team-3.jpg"
                          />
                        </a>
                        <a
                          href="#"
                          class="avatar avatar-sm rounded-circle"
                          data-toggle="tooltip"
                          data-original-title="Jessica Doe"
                        >
                          <img
                            alt="Image placeholder"
                            src="assets/img/theme/team-4.jpg"
                          />
                        </a>
                      </div>
                    </td>
                    <td>
                      <div class="d-flex align-items-center">
                        <span class="completion mr-2">100%</span>
                        <div>
                          <div class="progress">
                            <div
                              class="progress-bar bg-success"
                              role="progressbar"
                              aria-valuenow="100"
                              aria-valuemin="0"
                              aria-valuemax="100"
                              style="width: 100%"
                            ></div>
                          </div>
                        </div>
                      </div>
                    </td>

                    <td class="text-center">
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
          </div>
        </div>
      </div>
      <!-- Footer -->
      <?php include("includes/footer.php");?>
      <script src="bower_components/bootstrap-table/dist/bootstrap-table.min.js"></script>
      <script>
        $(document).ready(function (e) {
          const row = $(".table-agent");

          const selectColumnActive = $(".btn.btn-outline-str-secondary.active"),
            selectColumn = $(".btn.btn-outline-str-secondary");

          selectColumn.each(function () {
            let th = document.createElement("th"),
              text = $(this).text().trim();

            th.setAttribute("scope", "col");
            th.setAttribute("class", "sort ");
            th.setAttribute("data-sort", $(this).text().trim());
            th.setAttribute("data-toggle-table", $(this).text().trim());
            th.innerText = text.replace(/\s\s+/g, " ");

            // row.append(th);
            $(th).insertBefore("th:last-child");
          });
          selectColumn.click(function (e) {
            // console.log(
            //   $(`[data-toggle-table='${$(this).text().trim()}']`).index()
            // );
            const INDEX = $(
              `[data-toggle-table='${$(this).text().trim()}']`
            ).index();

            if ($(this).hasClass("active")) {
              $(`[data-toggle-table='${$(this).text().trim()}']`).hide();
              $(".table-agent-row").each(function () {
                // console.log();
                $(this).children().eq(INDEX).hide();
              });
            } else {
              $(`[data-toggle-table='${$(this).text().trim()}']`).show();
              $(".table-agent-row").each(function () {
                // console.log();
                $(this).children().eq(INDEX).show();
              });
            }
          });
        });
      </script>
    </div>
  </div>
</body>
