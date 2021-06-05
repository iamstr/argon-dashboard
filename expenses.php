<?php include("includes/header.php");?>

<body>
  <?php include("includes/sidebar.php");?>
  <!--
  <style>
    @keyframes shake {
   0% {
        transform: translate(-50px, 0px);
    }

    60% {
        transform: translate(-23px, 0px);
    }
   100% {
        transform: translate(0px, 0px);
    }
}

@keyframes slideLeft {
    0% {
        transform: translate(-500px, 0px);
    }

    100% {
        transform: translate(0px, 0px);
    }
}
    .slideLeft{
  animation: shake .5s ease-out 1    ;
  
}
.slideRight{
  animation: slideLeft .5s ease-out 1    ;
  
}
    
  </style> 
-->
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <?php include("includes/top-nav.php");?>



    <div class="container mt-5">
      <div class="row">
        <div class="col card-before">
          <div class="card p-4 steps-form ">
            <div class="container ml-3 slideLeft ">
              <button class="btn btn-icon btn-primary   steps-form-button-next" type="button">
                <span class="btn-inner--text">Request Funds</span>
                <span class="btn-inner--icon"><i class="ni ni-bold-right"></i></span>
              </button>

            </div>


          </div>
          <div class="card p-4 steps-form">


            <div class="container ml-3  ">
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                <span class="alert-text"><strong>Success!</strong> This is a success alert—check it out!</span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class=" d-flex flex-row">
                <input type="text" class="form-control form-control-alternative col-3 mr-2" placeholder="Expense Name" id="new_expense" required>
                <input type="number" class="form-control form-control-alternative col-2 ml-3" placeholder="Cost" id="new_cost" required>
                <textarea name=""  cols="30" rows="1" id="new_desc" class="form-control form-control-alternative ml-3" placeholder="Expense Description" style="height:46px"></textarea>
                <button type="button" class="btn btn-outline-default  col-3 ml-3 btn-sm" id="add_task">Add New Expense </button>
              </div>

              <ul class="list-group custom-list-group rounded-3 mt-3">

              </ul>
              <div class="total d-flex flex-end">
                <div class=" mt-5 pt-5 total-info  d-flex flex-column">
                  <h5 class="text-muted total-info-header mt-1 ">Total</h5>
                  <h3 class="total-info-sum fs-2 fw-bold text-danger ">0</h3>
                  <button class="btn btn-danger total-button mt-1" role="button" data-toggle="modal" data-target="#modal-notification">Request Amount</button>
                  
                </div>
                
                 <div class="modal fade shaking-2" id="modal-notification" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
        <div class="modal-content bg-gradient-secondary">
        	
            <div class="modal-header bg-danger ">
                <h6 class="modal-title text-white" id="modal-title-notification">Your attention is required</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            
            <div class="modal-body">
            	
                <div class="py-3 text-center">
                    <i class="ni ni-bell-55 ni-3x text-danger shaking"></i>
                    <h4 class="heading mt-4">You should read this!</h4>
                    <p>You are about to Request this amount KES <span class="modal-total font-weight-bolder"></span> this request will be sent to the Director</p>
                </div>
                
            </div>
            
            <div class="modal-footer">
                <button type="button" class="btn btn-danger text-white">Submit Fund Request</button>
                <button type="button" class="btn btn-link text-danger ml-auto" data-dismiss="modal">Cancel Request</button>
            </div>
            
        </div>
    </div>
</div>

                
              </div>
              
            </div>

          </div>

        </div>


      </div>

    </div>

  </div>
  <?php include("includes/footer.php");?>
  <script src="assets/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js" defer></script>
  <script>
    $(document).ready(function() {
      const stepForm = $(".steps-form")
      $('.alert').hide()

      $('.datepicker').datepicker({
        autoclose: true,
        format: 'mm/dd/yyyy',
        endDate: '-21y'
      });


      for (step of $(".steps-form")) {

        step.style.display = "none";
      }

      $(".steps-form")[0].style.display = "flex";




      const stepNext = $(".steps-form-button-next"),
        stepBack = $(".steps-form-button-back")


      stepNext.click(function(e) {

        if (e.currentTarget.classList.contains("btn")) {



          const cardBody = e.currentTarget.parentNode,
            card = cardBody.parentNode,
            container = card.parentNode,
            currentCard = container.children[0],
            index = $(".steps-form").index(currentCard)
          
          if ((index + 1) < stepForm.length && index >= 0) {
            stepForm[index + 1].children[0].classList.add("slideRight")




            stepForm[index + 1].style.display = "flex"
            stepForm[index].style.display = "none";



          }
        }


      })
      stepBack.click(function(e) {
        if (e.currentTarget.classList.contains("btn")) {
          const buttonParent = e.currentTarget.parentNode,
            footer = buttonParent.parentNode,
            container = footer.nextSibling,
            parent = footer.parentNode,
               
            index = $(".steps-form").index(parent)
          

          if ((index - 1) > -1) {

            stepForm[index - 1].style.display = "flex"
            parent.style.display = "none";
            stepForm[index - 1].children[1].classList.add("animate-right")
            parent.children[1].classList.remove("animate-left")
           
          }

        }

      })

    })

  </script>
  <script>
    $(document).ready(function() {
      // default alert hidden
      $('.alert').hide()
      const expenseData = {

        
        info:[]
        
      }
      
        
       let count=0;
      
      const reducer = (accumulator, currentValue) => accumulator.cost + currentValue.cost;

      $("#add_task").click(function(e) {
        //  hide the alert is there
       
        $('.alert').hide()
        $('.alert').toggle(".show.fade");
        $('.alert').show();
        let li = document.createElement("li"),
          span = document.createElement("span"),
          span2 = document.createElement("span"),
          span3 = document.createElement("span"),
          i = document.createElement("i")
        li.classList.add("list-group-item")
        li.classList.add("d-flex")
        li.classList.add("flex-row")
        li.classList.add("justify-content-between")
        li.classList.add("custom-list-group-item")
        li.classList.add("tasks")

        i.classList.add("fa")
        i.classList.add("fa-trash-alt")
        i.classList.add("text-danger")
        i.classList.add("tasks-delete")
        i.classList.add("pt-1")
        i.classList.add("pt-1")
        $(li).attr("data-index",count)
        li.append(span);
        li.append(span2);
        li.append(span3);
        li.append(i);
        span.innerText = $("#new_expense").val()
        span2.innerText = $("#new_cost").val()
        span3.innerText = $("#new_desc").val()
        
        
        $(".custom-list-group").append(li)
       
       
        expenseData.info.push({
                                expense:$(span).text(),
                                cost:Number($( span2).text()),
                                desc:$( span3).text(),
                                index: count
                              })
          console.log(expenseData.info)
          count++;
        let totalValue=0;
         for(const value of expenseData.info){
           totalValue+=value.cost
          console.log(typeof value.cost,value.cost)
          
        }
        
        $(".total-info-sum").text(totalValue.toLocaleString())

      })

     



      $("ul.custom-list-group").on("click", ".tasks-delete", function(e) {


        
        const index=($(this).parent()).index()
        const expense = e.target.parentElement.children[0].innerText
        const cost = Number(e.target.parentElement.children[1].innerText)
        
       
        expenseData.info = expenseData.info.filter((e,i) => e["index"]!== index)
        console.log(expenseData.info)
        
       
        e.target.parentElement.classList.add("delete")
         
        $(e.target.parentElement).addClass("bg-danger text-white")
        setTimeout(() => {
          $(e.target.parentElement).removeClass("bg-danger text-white")
          $(e.target.parentElement).removeClass("bg-light text-dark")
          $(e.target.parentElement).css({visibility:"hidden" ,position:"absolute",zIndex:"-10"})
        }, 1000);

//        $(".total-info-sum").text((expenseData.info.reduce(reducer,0)).toLocaleString())
        
        let totalValue=0;
         for(const value of expenseData.info){
           totalValue+=value.cost
          console.log(typeof value.cost,value.cost)
          
        }
        
        $(".total-info-sum").text(totalValue.toLocaleString())
        
      })
      
      $(".total-button").click(e=>{
       
        
        let totalValue=0;
         for(const value of expenseData.info){
           totalValue+=value.cost
          console.log(typeof value.cost,value.cost)
          
        }
        
        $(".total-info-sum").text(totalValue.toLocaleString())
        $(".modal-total").text(totalValue.toLocaleString())
        
      })
      
      

    })

  </script>





</body>
