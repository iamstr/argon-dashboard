<?php include("includes/header.php");?>

<body>
  <?php include("includes/sidebar.php");?>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <?php include("includes/top-nav.php");?>
    <div class="container-fluid mt-5">

      <div class="row">

        <div class="col">

          <div class="card steps-form">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Generate CV </h3>
                </div>

              </div>
            </div>
            <div class="card-body">
              <p class="h3 my-4">Select Girl Whom You wanna Generate CV for</p>

              <div class="form-group position-relative">
                <input type="search" class="form-control form-control-muted search-input" placeholder="Search by Name or ID or Passport Number" id="search" name="search" />
                <img src="assets/img/icons/search.svg" alt="search icon" class="search-input position-absolute" style="width: 33px; top: 20%; right: 2%" />
              </div>

              <ul class="list-group custom-list-group rounded-3 d-none">
                <li class="list-group-item d-flex flex-row justify-content-between custom-list-group-item tasks">
                  <span class="maid-name text-muted">Start Typing...</span>
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
                  <h3 class="mb-0 font-weight-normal"><span class="girl-name font-weight-bolder">Select</span> Girl's skill </h3>
                </div>
                <div class="col-4 text-right">
                  <!--                  <a href="#!" class="btn btn-sm btn-primary">Settings</a>-->
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-5">
                  <div class="form-group">
                    <label for="religion">Marital Status</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="religion" id="religion">
                      <option>Muslim</option>
                      <option>Non Muslim</option>
                    </select>
                  </div>
                </div>
                 
                <div class="col-5">

                  <div class="form-group">
                    <label for="passport"> Number Of Kids</label>
                    <input type="text" class="form-control form-control-muted" id="passport" name="passport" placeholder="AK078341">
                  </div>
                </div>
              </div>
              
            
              
              
              <div class="row">
                <div class="col-5">
                  <div class="form-group">
                    <label for="religion">Place of Birth</label>
                    <select class="form-control" id="county" name="county">
                      <option>Mombasa</option>
                      <option>Kwale</option>
                      <option>Kilifi</option>
                      <option>Tana-River</option>
                      <option>Lam</option>
                      <option> Taita-Taveta</option>
                      <option> Garissa</option>
                      <option> Wajir</option>
                      <option> Mandera</option>
                      <option> Marsabit</option>
                      <option> Isiolo</option>
                      <option> Meru</option>
                      <option> Tharaka-Nithi</option>
                      <option> Embu</option>
                      <option> Kitui</option>
                      <option> Machakos</option>
                      <option> Makueni</option>
                      <option> Nyandarua</option>
                      <option> Nyeri</option>
                      <option> Kirinyaga</option>
                      <option>Muranga</option>
                      <option>Kiambu</option>
                      <option>Turkana</option>
                      <option>West Pokot</option>
                      <option>Samburu</option>
                      <option>Trans-Nzoia</option>
                      <option>Uasin Gishu</option>
                      <option>Elgeyo-Marakwet</option>
                      <option>Nandi</option>
                      <option>Baringo</option>
                      <option>Laikipia</option>
                      <option>Nakuru</option>
                      <option> Narok</option>
                      <option> Kajiado</option>
                      <option>Kericho</option>
                      <option>Bomet</option>
                      <option>Kakamega</option>
                      <option>Vihiga</option>
                      <option>Bungoma</option>
                      <option>Busia</option>
                      <option>Siaya</option>
                      <option>Kisumu</option>
                      <option>Homa Bay</option>
                      <option>Migori</option>
                      <option>Kisii</option>
                      <option>Nyamira</option>
                      <option>Nairobi</option>
                    </select>
                    
                  </div>
                </div>
                <div class="col-5">
                  <div class="form-group">
                    <label for="county">Living Town</label>
                    
                        <select class="form-control" id="county" name="county">
                      <option>Mombasa</option>
                      <option>Kwale</option>
                      <option>Kilifi</option>
                      <option>Tana-River</option>
                      <option>Lam</option>
                      <option> Taita-Taveta</option>
                      <option> Garissa</option>
                      <option> Wajir</option>
                      <option> Mandera</option>
                      <option> Marsabit</option>
                      <option> Isiolo</option>
                      <option> Meru</option>
                      <option> Tharaka-Nithi</option>
                      <option> Embu</option>
                      <option> Kitui</option>
                      <option> Machakos</option>
                      <option> Makueni</option>
                      <option> Nyandarua</option>
                      <option> Nyeri</option>
                      <option> Kirinyaga</option>
                      <option>Muranga</option>
                      <option>Kiambu</option>
                      <option>Turkana</option>
                      <option>West Pokot</option>
                      <option>Samburu</option>
                      <option>Trans-Nzoia</option>
                      <option>Uasin Gishu</option>
                      <option>Elgeyo-Marakwet</option>
                      <option>Nandi</option>
                      <option>Baringo</option>
                      <option>Laikipia</option>
                      <option>Nakuru</option>
                      <option> Narok</option>
                      <option> Kajiado</option>
                      <option>Kericho</option>
                      <option>Bomet</option>
                      <option>Kakamega</option>
                      <option>Vihiga</option>
                      <option>Bungoma</option>
                      <option>Busia</option>
                      <option>Siaya</option>
                      <option>Kisumu</option>
                      <option>Homa Bay</option>
                      <option>Migori</option>
                      <option>Kisii</option>
                      <option>Nyamira</option>
                      <option>Nairobi</option>
                    </select>
                 
                  </div>
                </div>
              </div>
    
              <div class="row">
                <div class="col-5">
                  <div class="form-group">
                    <label for="passport"> Height in cm</label>
                    <input type="text" class="form-control form-control-muted" id="passport" name="passport" placeholder="170">
                  </div>
                </div>
                <div class="col-5">

                  <div class="form-group">
                    <label for="passport"> Weight in KG</label>
                    <input type="text" class="form-control form-control-muted" id="passport" name="passport" placeholder="80">
                  </div>
                </div>
              </div>
              
              
              <div class="row">
                <div class="col-5">
                  <div class="form-group">
                    <label for="religion">Educational Qualification</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="religion" id="religion">
                      <option>HIGH SCHOOL</option>
                    
                    </select>
                  </div>
                  
                </div>
                 <div class="col-5">
                  <div class="form-group">
                    <label for="religion">Complexion</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="religion" id="religion">
                      <option>Dark Skinned</option>
                      <option>Light Skinned</option>
                    </select>
                  </div>
                </div>
              </div>
            
            <div class="row">
                <div class="col-5">
                  <div class="form-group">
                    <label for="religion">English</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="religion" id="religion">
                      <option>POOR</option>
                      <option>LITTLE</option>
                      <option>FAIR</option>
                      <option>FLUENT</option>
                    
                    </select>
                  </div>
                  
                </div>
                 <div class="col-5">
                  <div class="form-group">
                    <label for="religion">Arabic</label>
                     <select class="form-control" id="exampleFormControlSelect1" name="religion" id="religion">
                      <option>POOR</option>
                      <option>LITTLE</option>
                      <option>FAIR</option>
                      <option>FLUENT</option>
                    
                    </select>
                  </div>
                </div>
              </div>
              
              
              <div class="row">
                
                <div class="col-5">
                  <div class="form-group">
                    <label for="religion">ABROAD PREVIOUS EMPLOYMENT</label>
                     <select class="form-control" id="exampleFormControlSelect1" name="religion" id="religion">
                      <option>YES</option>
                      <option>NO</option>
                      
                    
                    </select>
                  </div>
                </div>
                <div class="col-5">

                  <div class="form-group">
                    <label for="passport"> COUNTRY</label>
                    <input type="text" class="form-control form-control-muted" id="passport" name="passport" placeholder="Qatar">
                  </div>
                </div>
              </div>
            
<div class="row">
  <div class="col-5">

                  <div class="form-group">
                    <label for="passport"> PERIOD</label>
                    <input type="text" class="form-control form-control-muted" id="passport" name="passport" placeholder="2">
                  </div>
                </div>
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
                  <h3 class="mb-0 font-weight-normal"><span class="girl-name font-weight-bolder">Select</span> Girl's skill </h3>
                </div>
                <div class="col-4 text-right">
                  <!--                  <a href="#!" class="btn btn-sm btn-primary">Settings</a>-->
                </div>
              </div>
            </div>
            <div class="card-body">


              <div class="str-view-row d-flex flex-wrap ">

                <div class="btn-group-toggle m-1 my-2" data-toggle="buttons">
                  <label class="btn btn-outline-str-secondary active" class="text-capitalize">
                    <input type="checkbox" autocomplete="off" checked /> Baby Sitting</label>
                </div>
                <div class="btn-group-toggle m-1 my-2" data-toggle="buttons">
                  <label class="btn btn-outline-str-secondary active" class="text-capitalize">
                    <input type="checkbox" autocomplete="off" checked /> Cleaning</label>
                </div>
                <div class="btn-group-toggle m-1 my-2" data-toggle="buttons">
                  <label class="btn btn-outline-str-secondary active" class="text-capitalize">
                    <input type="checkbox" autocomplete="off" checked /> Cooking</label>
                </div>
                <div class="btn-group-toggle m-1 my-2" data-toggle="buttons">
                  <label class="btn btn-outline-str-secondary active" class="text-capitalize">
                    <input type="checkbox" autocomplete="off" checked />Washing </label>
                </div>
                <div class="btn-group-toggle m-1 my-2" data-toggle="buttons">
                  <label class="btn btn-outline-str-secondary active" class="text-capitalize">
                    <input type="checkbox" autocomplete="off" checked /> Driving</label>
                </div>
                <div class="btn-group-toggle m-1 my-2" data-toggle="buttons">
                  <label class="btn btn-outline-str-secondary active" class="text-capitalize">
                    <input type="checkbox" autocomplete="off" checked /> Decorating</label>
                </div>
                <div class="btn-group-toggle m-1 my-2" data-toggle="buttons">
                  <label class="btn btn-outline-str-secondary active" class="text-capitalize">
                    <input type="checkbox" autocomplete="off" checked /> Sewing</label>
                </div>



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

        </div>
      </div>

    </div>


    <?php include("includes/footer.php");?>

  </div>
</body>


<script>
  /** future updates include
   * pop over after an already selected is clicked
   * on deselect remove all the buttons from the modal
   */
  $(document).ready(function() {
    //for the select all and deselect elements


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
      $(".selection-button.fade").addClass("show")
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







    //    ajax call



    $("#neaSubmit").unbind('click').bind('click', function() {


      $("#neaForm").unbind('submit').bind('submit', function(e) {
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





  });

</script>
