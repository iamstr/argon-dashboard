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

        <form class="col" action="php_action/newUploads" method="post" enctype="multipart/form-data" >

          <div class="card steps-form">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Upload Files </h3>
                </div>
                <div class="col-4 text-right">
                  <a href="uploaded.php" class="btn  btn-secondary text-primary">
                    <span class="btn-inner--icon"><i class="ni ni-album-2"></i></span>
                    <span class="btn-inner--text">Check Girls Uploads</span>
                  </a>
                </div>
              </div>
            </div>
            <div class="card-body">
              <p class="h3 my-4">Select Girl Whom Files You wanna Upload</p>

              <div class="form-group position-relative">
                <input type="search" class="form-control form-control-muted search-input" placeholder="Search by Name or ID or Passport Number" id="search" name="search" />
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
          <div class="card steps-form">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                 <h3 class="mb-0 font-weight-normal"><span class="girl-name font-weight-bolder">Girl's</span> Passport Photo  </h3>
                </div>
                <div class="col-4 text-right">
                  <!--                  <a href="#!" class="btn btn-sm btn-primary">Settings</a>-->
                </div>
              </div>
            </div>
            <div class="card-body">


              <div class="form-group position-relative">
                <input type="file" class="form-control form-control-muted search-input" placeholder="Search by Name or ID or Passport Number" accept="image/jpeg,image/x-png" name="passport_photo" />
                <img src="assets/img/icons/search.svg" alt="search icon" class="search-input position-absolute" style="width: 33px; top: 20%; right: 2%" />
              </div>
              <div class="display-image">









              </div>

            </div>
            <div class="card-footer">
              <div class="d-flex justify-content-end">
                <button class="btn btn-icon btn-outline-secondary w-25 btn-lg steps-form-button-back" type="button">
                  <span class="btn-inner--icon"><i class="ni ni-bold-left"></i></span>
                  <span class="btn-inner--text">Back</span>
                </button>
                <button class="btn btn-icon btn-primary w-25 btn-lg  steps-form-button-next" type="button">
                  <span class="btn-inner--text">Next</span>
                  <span class="btn-inner--icon"><i class="ni ni-bold-right"></i></span>
                </button>
              </div>
            </div>
          </div>


          <div class="card steps-form">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                 <h3 class="mb-0 font-weight-normal"><span class="girl-name font-weight-bolder">Girl's</span> Full Photo </h3>
                </div>
                <div class="col-4 text-right">
                  <!--                  <a href="#!" class="btn btn-sm btn-primary">Settings</a>-->
                </div>
              </div>
            </div>
            <div class="card-body">


              <div class="form-group position-relative">
                <input type="file" class="form-control form-control-muted search-input" placeholder="Search by Name or ID or Passport Number" accept="image/jpeg,image/x-png" name="full_photo" />
                <img src="assets/img/icons/search.svg" alt="search icon" class="search-input position-absolute" style="width: 33px; top: 20%; right: 2%" />
              </div>
              <div class="display-image">









              </div>

            </div>
            <div class="card-footer">
              <div class="d-flex justify-content-end">
                <button class="btn btn-icon btn-outline-secondary w-25 btn-lg steps-form-button-back" type="button">
                  <span class="btn-inner--icon"><i class="ni ni-bold-left"></i></span>
                  <span class="btn-inner--text">Back</span>
                </button>
                <button class="btn btn-icon btn-primary w-25 btn-lg  steps-form-button-next" type="button">
                  <span class="btn-inner--text">Next</span>
                  <span class="btn-inner--icon"><i class="ni ni-bold-right"></i></span>
                </button>
              </div>
            </div>
          </div>


          <div class="card steps-form">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                 <h3 class="mb-0 font-weight-normal"><span class="girl-name font-weight-bolder">Girl's</span> Birth Certificate </h3>
                </div>
                <div class="col-4 text-right">

                </div>
              </div>
            </div>
            <div class="card-body">


              <div class="form-group position-relative">
                <input type="file" class="form-control form-control-muted search-input" placeholder="Search by Name or ID or Passport Number" accept="image/jpeg,image/x-png" name="birth" />
                <img src="assets/img/icons/search.svg" alt="search icon" class="search-input position-absolute" style="width: 33px; top: 20%; right: 2%" />
              </div>
              <div class="display-image">









              </div>

            </div>
            <div class="card-footer">
              <div class="d-flex justify-content-end">
                <button class="btn btn-icon btn-outline-secondary w-25 btn-lg steps-form-button-back" type="button">
                  <span class="btn-inner--icon"><i class="ni ni-bold-left"></i></span>
                  <span class="btn-inner--text">Back</span>
                </button>
                <button class="btn btn-icon btn-primary w-25 btn-lg  steps-form-button-next" type="button">
                  <span class="btn-inner--text">Next</span>
                  <span class="btn-inner--icon"><i class="ni ni-bold-right"></i></span>
                </button>
              </div>
            </div>
          </div>

          <div class="card steps-form">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                 <h3 class="mb-0 font-weight-normal"><span class="girl-name font-weight-bolder">Girl's</span> ID Copy </h3>
                </div>
                <div class="col-4 text-right">
                  <!--                  <a href="#!" class="btn btn-sm btn-primary">Settings</a>-->
                </div>
              </div>
            </div>
            <div class="card-body">


              <div class="form-group position-relative">
                <input type="file" class="form-control form-control-muted search-input" placeholder="Search by Name or ID or Passport Number" accept="image/jpeg,image/x-png" name="id" />
                <img src="assets/img/icons/search.svg" alt="search icon" class="search-input position-absolute" style="width: 33px; top: 20%; right: 2%" />
              </div>
              <div class="display-image">









              </div>

            </div>
            <div class="card-footer">
              <div class="d-flex justify-content-end">
                <button class="btn btn-icon btn-outline-secondary w-25 btn-lg steps-form-button-back" type="button">
                  <span class="btn-inner--icon"><i class="ni ni-bold-left"></i></span>
                  <span class="btn-inner--text">Back</span>
                </button>
                <button class="btn btn-icon btn-primary w-25 btn-lg  steps-form-button-next" type="button">
                  <span class="btn-inner--text">Next</span>
                  <span class="btn-inner--icon"><i class="ni ni-bold-right"></i></span>
                </button>
              </div>
            </div>
          </div>

          <div class="card steps-form">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                 <h3 class="mb-0 font-weight-normal"><span class="girl-name font-weight-bolder">Girl's</span> Passport Copy</h3>
                </div>
                <div class="col-4 text-right">
                  <!--                  <a href="#!" class="btn btn-sm btn-primary">Settings</a>-->
                </div>
              </div>
            </div>
            <div class="card-body">


              <div class="form-group position-relative">
                <input type="file" class="form-control form-control-muted search-input" placeholder="Search by Name or ID or Passport Number" accept="image/jpeg,image/x-png" name="files" />
                <img src="assets/img/icons/search.svg" alt="search icon" class="search-input position-absolute" style="width: 33px; top: 20%; right: 2%" />
              </div>
              <div class="display-image">









              </div>

            </div>
            <div class="card-footer">
              <div class="d-flex justify-content-end">
                <button class="btn btn-icon btn-outline-secondary w-25 btn-lg steps-form-button-back" type="button">
                  <span class="btn-inner--icon"><i class="ni ni-bold-left"></i></span>
                  <span class="btn-inner--text">Back</span>
                </button>
                <button class="btn btn-icon btn-primary w-25 btn-lg  steps-form-button-next" type="button">
                  <span class="btn-inner--text">Next</span>
                  <span class="btn-inner--icon"><i class="ni ni-bold-right"></i></span>
                </button>
              </div>
            </div>
          </div>

          <div class="card steps-form">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                 <h3 class="mb-0 font-weight-normal"><span class="girl-name font-weight-bolder">Girl's</span> Next Of Kin </h3>
                </div>
                <div class="col-4 text-right">
                  <!--                  <a href="#!" class="btn btn-sm btn-primary">Settings</a>-->
                </div>
              </div>
            </div>
            <div class="card-body">


              <div class="form-group position-relative">
                <input type="file" class="form-control form-control-muted search-input" placeholder="Search by Name or ID or Passport Number" accept="image/jpeg,image/x-png" name="kin1" />
                <img src="assets/img/icons/search.svg" alt="search icon" class="search-input position-absolute" style="width: 33px; top: 20%; right: 2%" />
              </div>
              <div class="display-image">









              </div>

            </div>
            <div class="card-footer">
              <div class="d-flex justify-content-end">
                <button class="btn btn-icon btn-outline-secondary w-25 btn-lg steps-form-button-back" type="button">
                  <span class="btn-inner--icon"><i class="ni ni-bold-left"></i></span>
                  <span class="btn-inner--text">Back</span>
                </button>
                <button class="btn btn-icon btn-primary w-25 btn-lg  steps-form-button-next" type="button">
                  <span class="btn-inner--text">Next</span>
                  <span class="btn-inner--icon"><i class="ni ni-bold-right"></i></span>
                </button>
              </div>
            </div>
          </div>


          <div class="card steps-form">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                 <h3 class="mb-0 font-weight-normal"><span class="girl-name font-weight-bolder">Girl's</span> Next Of Kin 2 </h3>
                </div>
                <div class="col-4 text-right">
                  <!--                  <a href="#!" class="btn btn-sm btn-primary">Settings</a>-->
                </div>
              </div>
            </div>
            <div class="card-body">


              <div class="form-group position-relative">
                <input type="file" class="form-control form-control-muted search-input" placeholder="Search by Name or ID or Passport Number" accept="image/jpeg,image/x-png" name="kin2" />
                <img src="assets/img/icons/search.svg" alt="search icon" class="search-input position-absolute" style="width: 33px; top: 20%; right: 2%" />
              </div>
              <div class="display-image">









              </div>

            </div>
            <div class="card-footer">
              <div class="d-flex justify-content-end">
                <button class="btn btn-icon btn-outline-secondary w-25 btn-lg steps-form-button-back" type="button">
                  <span class="btn-inner--icon"><i class="ni ni-bold-left"></i></span>
                  <span class="btn-inner--text">Back</span>
                </button>
                <button class="btn btn-icon btn-primary w-25 btn-lg  steps-form-button-next" type="button">
                  <span class="btn-inner--text">Next</span>
                  <span class="btn-inner--icon"><i class="ni ni-bold-right"></i></span>
                </button>
              </div>
            </div>
          </div>


          <div class="card steps-form">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <!--                 <h3 class="mb-0 font-weight-normal"><span class="girl-name font-weight-bolder">Girl's</span> Next Of Kin 2 </h3>-->
                </div>
                <div class="col-4 text-right">
                  <!--                  <a href="#!" class="btn btn-sm btn-primary">Settings</a>-->
                </div>
              </div>
            </div>
            <div class="card-body">

              <h2 class="my-5 text-center">Great Work All Files Uploaded SuccessFully </h2>
              <a href="https://storyset.com/work" class=" d-flex justify-content-center">

                <?php include("includes/vectors/success.php");?></a>


              <button type="submit" class="btn btn-success btn-lg btn-block mx-auto w-50">Check The Uploaded files</button>








            </div>
            <div class="card-footer border-0">
              <div class=" d-none">
                <button class="btn btn-icon btn-outline-secondary w-25 btn-lg steps-form-button-back" type="button">
                  <span class="btn-inner--icon"><i class="ni ni-bold-left"></i></span>
                  <span class="btn-inner--text">Back</span>
                </button>
                <button class="btn btn-icon btn-primary w-25 btn-lg  steps-form-button-next" >
                  <span class="btn-inner--text">Next</span>
                  <span class="btn-inner--icon"><i class="ni ni-bold-right"></i></span>
                </button>
              </div>
            </div>
          </div>




        </form>
      </div>
    </div>
  </div>

  <?php include("includes/footer.php");?>
  
  <script>
    
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
        $("#search").val(ID)
        
        $(".selected ").append(button)
        $(".girl-name ").text(listText)
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
    
    
    $(".retry").click(function(e) {
      $("input[type=file]").click()

    })

    $("input[type=file]").change(function(e) {

      const display = $(".display-image"),
        img = document.createElement("IMG"),
        input = this,
        url = $(this).val(),
            element=e;
        ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
      img.height = "200"
      img.width = "200"
      $(img).addClass("mx-auto d-block rounded shadow-lg my-5")
      if (input.files && input.files[0] && (ext == "png" || ext == "jpeg" || ext == "jpg")) {
        var reader = new FileReader();

        reader.onload = function(e) {
          $(img).attr('src', e.target.result);
         
          $(element.target.parentElement.nextElementSibling).html(img)
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
