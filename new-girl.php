

<?php include("includes/header.php");?>

<body>
 <?php include("includes/sidebar.php");?>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
   <?php include("includes/top-nav.php");?>

    <form class="container mt--6">
      <div class="row">
        <div class="col card-before" style="">
            <!-- start of first step -->
          <div class="card steps-form ">
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0">First Stage</h3>
            </div>
            <div class="container ml-3 animate-left">
                    <div class="row">
                        <div class="col-5">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Girl Fullname</label>
                                <input type="email" class=" form-control form-control-muted" id="exampleFormControlInput1" placeholder="name@example.com">
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Girl ID Number</label>
                                <input type="email" class="form-control form-control-muted" id="exampleFormControlInput1" placeholder="name@example.com">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Girl Phone Number</label>
                                <input type="tel" class=" form-control form-control-muted" id="exampleFormControlInput1" placeholder="name@example.com">
                            </div>
                        </div>
                        <div class="col-5">
                          <div class="form-group">
                           <label for="exampleFormControlInput1">Girl Date Of Birth</label>
                            <div class="input-group">
                                
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                </div>
                                <input class="form-control datepicker" placeholder="Select date" type="text"  >
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Girl Religion</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                <option>Muslim</option>
                                <option>Non Muslim</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Girl County</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                </select>
                            </div>
                        </div>
                    </div>
           </div>

            <!-- Card footer -->
            <div class="card-footer py-4">
                <div class="d-flex justify-content-end">
                    <button class="btn btn-icon btn-primary w-25 btn-lg steps-form-button-next" type="button">
                        <span class="btn-inner--text">Next</span>
                        <span class="btn-inner--icon"><i class="ni ni-bold-right"></i></span>
                    </button>
                </div>
             
            </div>
          </div>
          <!--end of first step  -->

          <!-- second step -->
          <div class="card steps-form  ">
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0">Second Stage</h3>
            </div>
            <div class="container ml-3 animate-left">
                   
                    <div class="row">
                        <div class="col-5">
                            <div class="form-group">
                                 <h3 class="mb-0">First Medical</h3>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="form-group">
                                
                            <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="firstMedical" name="customRadioInline1" class="custom-control-input">
                                    <label class="custom-control-label" for="firstMedical">YES</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="firstMedical2" name="customRadioInline1" class="custom-control-input">
                                    <label class="custom-control-label" for="firstMedical2">NO</label>
                             </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5">
                            <div class="form-group">
                                 <h3 class="mb-0">Birth Certificate</h3>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="form-group">
                                
                            <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadioInline1">YES</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadioInline2">NO</label>
                             </div>
                            </div>
                        </div>
                    </div>
           </div>

            <!-- Card footer -->
            <div class="card-footer py-4">
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

          <!-- end of second step -->
          <!-- third step -->
          <div class="card steps-form  ">
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0">Third Stage</h3>
            </div>
            <div class="container ml-3 mt-5 animate-left">
                   
                    <div class="row">

                          <div class="col-5">
                            <div class="form-group">
                                <label for="exampleFormControlInput1"> Passport Number</label>
                                <input type="text" class="form-control form-control-muted"  id="exampleFormControlInput1" placeholder="AK078341">
                            </div>
                          </div>
                         <div class="col-5">
                            <div class="form-group">
                                <label for="exampleFormControlInput1"> Good Conduct Number</label>
                                <input type="text" class="form-control form-control-muted"  id="exampleFormControlInput1" placeholder="PHSH-1234">
                            </div>
                          </div>
                    
                   </div>
                   
                   <div class="row">
                       
                         
                        <div class="col-5">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Passport Place Of Issue</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                </select>
                            </div>
                        </div>

                    </div>
            </div>
            <!-- Card footer -->
            <div class="card-footer py-4">
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
          <!-- end of third step -->
          <!-- fourth step -->
          <div class="card steps-form ">
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0">Fourth Stage</h3>
            </div>
            <div class="container ml-3 mt-5 animate-left">
                   
                    <div class="row">

                          <div class="col-5">
                            <div class="form-group">
                                <label for="exampleFormControlInput1"> Next Of Kin Names</label>
                                <input type="text" class="form-control form-control-muted"  id="exampleFormControlInput1" placeholder="John Kabuga Salim">
                            </div>
                          </div>
 
                          <div class="col-5">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Next Of Kin Relationship</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                <option>Father</option>
                                <option>Mother</option>
                                <option>Sister</option>
                                <option>Brother</option>
                                <option>Spouse</option>
                                </select>
                            </div>
                        </div>
                   
                   </div>
                   
                   <div class="row">
                       
                         
                        <div class="col-5">
                            <div class="form-group">
                                <label for="exampleFormControlInput1"> Next Of Kin Number</label>
                                <input type="tel" class="form-control form-control-muted"  id="exampleFormControlInput1" placeholder="07xx xxx xxx">
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="form-group">
                                <label for="exampleFormControlInput1"> Next Of Kin ID  Number</label>
                                <input type="text" class="form-control form-control-muted"  id="exampleFormControlInput1" placeholder="1234567">
                            </div>
                        </div>

                    </div>
                   <div class="row">
                       
                         
                        <div class="col-5">
                            <div class="form-group">
                                <label for="exampleFormControlInput1"> Agent Name</label>
                                <input type="text" class="form-control form-control-muted"  id="exampleFormControlInput1" placeholder="John Doe">
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="form-group">
                                <label for="exampleFormControlInput1"> Agent Number</label>
                                <input type="tel" class="form-control form-control-muted"  id="exampleFormControlInput1" placeholder="1234567">
                            </div>
                        </div>

                    </div>
            </div>
            <!-- Card footer -->
            <div class="card-footer py-4">
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
          <!-- end of fourth step -->
      </div>
     
      </div>
    </form>
 

 <?php include("includes/footer.php");?>
<script src="assets/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js" defer></script>

 <script>
     $(document).ready(function(){
        const stepForm=$(".steps-form")
        
       
      $('.datepicker').datepicker({autoclose:true,format: 'mm/dd/yyyy',
    endDate: '-21y' });
      

        for(step of  $(".steps-form")){

            step.style.display="none";
        }

         $(".steps-form")[0].style.display="flex";




         const stepNext=$(".steps-form-button-next"),
               stepBack=$(".steps-form-button-back")


               stepNext.click(function(e){

                 if(e.currentTarget.classList.contains("btn")){
                   
                   
                
                const buttonParent=e.currentTarget.parentNode,
                      footer=buttonParent.parentNode,
                      parent=footer.parentNode,
                      container=parent.children[1],
                      index=$(".steps-form").index( parent )
                      
                    //   parent.toggleClass("animate");
                      console.log(stepForm.length,index)
                      if((index+1)<stepForm.length&& index>=0){
                        stepForm[index+1].children[1].classList.add("animate-left")
                        parent.children[1].classList.remove("animate-left")
                        stepForm[index+1].style.display="flex"
                       
                        parent.style.display="none";

                        

                      }
                 }
                       
                      
               })
               stepBack.click(function(e){
                  if(e.currentTarget.classList.contains("btn")){
                      const buttonParent=e.currentTarget.parentNode,
                      footer=buttonParent.parentNode,
                      container=footer.nextSibling,
                      parent=footer.parentNode,
//                      container=parent.children[1],      
                      index=$(".steps-form").index( parent )
                      console.log(stepForm.length,index,parent)
                        
                      if((index-1)>-1){
                        
                        stepForm[index-1].style.display="flex"
                        parent.style.display="none";
                        stepForm[index-1].children[1].classList.add("animate-right")
                        parent.children[1].classList.remove("animate-left")
//                        parent.classList.add("animate-left")
//                        stepForm[index+1].classList.add("animate-right")
//                        parent.classList.remove("animate-left","animate-right")
                        
                      }
                      
                  }
                      
               })

     })
 </script>
 