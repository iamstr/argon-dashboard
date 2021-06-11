<?php include("includes/header.php");?>

<body>
  <?php include("includes/sidebar.php");?>

  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <?php include("includes/top-nav.php");?>
    <!-- Page content -->
    <div class="container-fluid">
      <button type="button" class="btn btn-block btn-transparent d-none mb-3 text-white notified" data-toggle="modal" data-target="#modal-notification">Notification</button>


      <div class="modal fade shaking-2" id="modal-notification" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
        <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
          <div class="modal-content bg-gradient-secondary">

            <div class="modal-header bg-danger ">
              <h6 class="modal-title text-white" id="modal-title-notification">Your attention is required</h6>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" class="text-white">×</span>
              </button>
            </div>

            <div class="modal-body">

              <div class="py-3 text-center">
                <i class="ni ni-bell-55 ni-3x text-danger shaking"></i>
                <h4 class="heading mt-4">You should read this!</h4>
                <p>The file extension you used is not supported <span class="modal-total font-weight-bolder"></span> </p>
              </div>

            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-danger text-white retry" data-dismiss="modal">Retry Again</button>
              <button type="button" class="btn btn-link text-danger ml-auto" data-dismiss="modal">Close</button>
            </div>

          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid mt-6">
      <div class="row">

        <div class="col">

          <div class="card steps-form">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Upload Files </h3>
                </div>
                <div class="col-4 text-right">
                  <a href="upload.php" class="btn  btn-secondary text-primary">
                    <span class="btn-inner--icon"><i class="ni ni-album-2"></i></span>
                    <span class="btn-inner--text">New Upload</span>
                  </a>
                </div>
              </div>
            </div>
            <div class="card-body">
              <p class="h3 my-4">Find Girl Whom Files You wanna View</p>

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


              <h2 class="my-5 text-center">You haven't selected any girl yet 😫 </h2>
              <a href="https://storyset.com/people" class=" d-flex justify-content-center">

                <?php include("includes/vectors/waiting.php");?></a>


              <div class="d-flex justify-content-between">

                <div class="media-uploaded d-flex flex-column rounded shadow-lg mr-3 ">


                  <img src="assets/img/girls/carol_enjaz.jpg" alt="" class="rounded-top" style="height: 200px; min-width:200px;max-width:100%" />
                  <div class="p-4">
                    <h4 class="my-1">birth certificate</h4>
                    <input type="file" class="form-control">
                  </div>

                </div>



                <div class="media-uploaded d-flex flex-column rounded shadow-lg mx-3 ">
                  <img src="assets/img/girls/daizy.jpg" alt="" class="rounded-top" style="height: 200px; min-width:200px;max-width:100%">
                  <div class="p-4">
                    <h4 class="my-1">birth certificate</h4>
                    <input type="file" class="form-control">
                  </div>

                </div>



                <div class="media-uploaded d-flex flex-column rounded shadow-lg mx-3 ">

                  <img src="assets/img/girls/TEBLA%20KIHAVI_enjaz.jpg" alt="" class="rounded-top" style="height: 200px; min-width:200px;max-width:100%">
                  <div class="p-4">
                    <h4 class="my-1">birth certificate</h4>
                    <input type="file" class="form-control">
                  </div>


                </div>

                <div class="media-uploaded d-flex flex-column rounded shadow-lg mx-3 ">
                  <img src="assets/img/girls/guto.jpg" alt="" class="rounded-top" style="height: 200px; min-width:200px;max-width:100%">
                  <div class="p-4">
                    <h4 class="my-1">birth certificate</h4>
                    <input type="file" class="form-control">
                  </div>

                </div>

              </div>



            </div>
            <div class="card-footer">
              <div class="">
                <button class="btn btn-primary btn-block w-50 mx-auto btn-lg steps-form-button-next" type="button">
                  <span class="btn-inner--text">Next</span>
                  <span class="btn-inner--icon"><i class="ni ni-bold-right"></i></span>
                </button>
              </div>

            </div>
          </div>






        </div>
      </div>
    </div>
  </div>

  <?php include("includes/footer.php");?>
  <script>
    $(document).ready(function() {
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
      $("body ").on("click", ".list-group-item span", function(e) {
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
      $(".form-control.form-control-muted.search-input").focus(function() {
        $(".list-group.custom-list-group.rounded-3").removeClass("d-none");
      });

    });
    $(".retry").click(function(e) {
      $("input[type=file]").click()

    })

    $("input[type=file]").change(function() {

      const display = $(".display-image"),
        img = document.createElement("IMG"),
        input = this,
        url = $(this).val(),
        ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
      img.height = "200"
      img.width = "200"
      $(img).addClass("mx-auto d-block rounded shadow-lg my-5")
      if (input.files && input.files[0] && (ext == "png" || ext == "jpeg" || ext == "jpg")) {
        var reader = new FileReader();

        reader.onload = function(e) {
          $(img).attr('src', e.target.result);
          //          $(img).appendTo(display)
          console.log(e)
          display.html(img)
        }
        reader.readAsDataURL(input.files[0]);
      } else {

        document.querySelector(".notified").click()
        console.log("stop")
      }


    })





    $(document).ready(function() {
      const stepForm = $(".steps-form")





      for (step of $(".steps-form")) {

        step.style.display = "none";
      }

      $(".steps-form")[0].style.display = "flex";




      const stepNext = $(".steps-form-button-next"),
        stepBack = $(".steps-form-button-back")


      stepNext.click(function(e) {

        if (e.currentTarget.classList.contains("btn")) {



          const buttonParent = e.currentTarget.parentNode,
            footer = buttonParent.parentNode,
            parent = footer.parentNode,
            container = parent.children[1],
            index = $(".steps-form").index(parent)

          //   parent.toggleClass("animate");
          console.log(stepForm.length, index, container)
          if ((index + 1) < stepForm.length && index >= 0) {
            stepForm[index + 1].children[1].classList.add("slideLeft")
            parent.children[1].classList.remove("slideLeft")
            stepForm[index + 1].style.display = "flex"

            parent.style.display = "none";



          } else {

            console.log(parent, footer, buttonParent)
          }
        }


      })
      stepBack.click(function(e) {
        if (e.currentTarget.classList.contains("btn")) {
          const buttonParent = e.currentTarget.parentNode,
            footer = buttonParent.parentNode,
            container = footer.nextSibling,
            parent = footer.parentNode,
            //                      container=parent.children[1],      
            index = $(".steps-form").index(parent)
          console.log(stepForm.length, index, parent)

          if ((index - 1) > -1) {

            stepForm[index - 1].style.display = "flex"
            parent.style.display = "none";
            stepForm[index - 1].children[1].classList.add("slideRight")
            parent.children[1].classList.remove("slideLeft")
            //                        parent.classList.add("slideLeft")
            //                        stepForm[index+1].classList.add("slideRight")
            //                        parent.classList.remove("slideLeft","slideRight")

          }

        }

      })

    })

  </script>
</body>
