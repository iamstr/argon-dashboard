<?php include("includes/header.php");?>
<style>
  .rotato {

    animation: rotato .2s ease-out forwards infinite;
  }

  @keyframes rotato {

    from {
      transform: rotate(0deg);
    }

    to {

      transform: rotate(90deg);
    }
  }

</style>

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
                  <h3 class="mb-0">Preferences</h3>
                </div>
                <div class="col-4 text-right">
                  <span class="btn btn-sm btn-primary"><i class=" ni ni-settings-gear-65 text-white rotato"></i></span>
                </div>
              </div>
            </div>
            <div class="card-body">

              <h4 class="mb-4">
                Change Info
              </h4>


              <div class="row mt-1">

                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Email address</label>
                    <input type="email" id="input-email" class="form-control" placeholder="jesse@example.com">
                  </div>
                </div>
                <div style="justify-content: center;padding-top: 0.5rem;" class="col d-flex flex-column ">
                  <button class="btn btn-danger w-50 btn-lg  ">Save changes</button>

                </div>

              </div>


              <div class="row mt-1">

                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" for="input-phone">Phone Number</label>
                    <input type="tel" id="input-phone" class="form-control" placeholder="07xxxx">
                  </div>
                </div>
                <div style="justify-content: center;padding-top: 0.5rem;" class="col d-flex flex-column ">
                  <button class="btn btn-danger w-50 btn-lg  ">Save changes</button>

                </div>

              </div>

              <div class="row mt-1">

                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" for="input-password">Password </label>
                    <input type="password" id="input-password" class="form-control" placeholder="**********">
                  </div>
                </div>
                <div style="justify-content: center;padding-top: 0.5rem;" class="col d-flex flex-column ">
                  <button class="btn btn-danger w-50 btn-lg  ">Save changes</button>

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
