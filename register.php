 <?php include("includes/header.php");?>

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
                   <h3 class="mb-0">Create New User </h3>
                 </div>
                 <div class="col-4 text-right">
                   <a href="#!" class="btn btn-sm btn-primary">Settings</a>
                 </div>
               </div>
             </div>
             <div class="card-body">
               <form>
                 <h6 class="heading-small text-muted mb-4">User information</h6>
                 <div class="pl-lg-4">
                   <div class="row">
                     <div class="col-lg-6">
                       <div class="form-group">
                         <label class="form-control-label" for="input-username">Username</label>
                         <input type="text" id="input-username" class="form-control" placeholder="Username" value="lucky.jesse">
                       </div>
                     </div>
                     <div class="col-lg-6">
                       <div class="form-group">
                         <label class="form-control-label" for="input-email">Email address</label>
                         <input type="email" id="input-email" class="form-control" placeholder="jesse@example.com">
                       </div>
                     </div>
                   </div>
                   <div class="row">
                     <div class="col-lg-6">
                       <div class="form-group">
                         <label class="form-control-label" for="input-first-name">First name</label>
                         <input type="text" id="input-first-name" class="form-control" placeholder="First name" value="Lucky">
                       </div>
                     </div>
                     <div class="col-lg-6">
                       <div class="form-group">
                         <label class="form-control-label" for="input-last-name">Last name</label>
                         <input type="text" id="input-last-name" class="form-control" placeholder="Last name" value="Jesse">
                       </div>
                     </div>
                   </div>
                   <div class="row">
                     <div class=" col-lg-6">
                       <div class="form-group">
                         <label class="form-control-label" for="input-last-name">Phone Number</label>
                         <input type="text" id="input-last-name" class="form-control" placeholder="Last name" value="07xxxxxx">
                       </div>
                     </div>
                   </div>

                 </div>
                 <hr class="my-4" />
                 <!-- Address -->
                 <h6 class="heading-small text-muted mb-4">Contact information</h6>
                 <div class="pl-lg-4">
                   <div class="row">
                     <div class="col-md-12">
                       <div class="form-group">
                         <label for="exampleFormControlSelect1">Select Branch</label>
                         <select class="form-control" id="exampleFormControlSelect1">
                           <option>Branch 1</option>
                           <option>Branch 2</option>

                         </select>
                       </div>
                     </div>
                   </div>
                   
                 </div>
              <div class="p-4">
              <div class="d-flex flex-row justify-content-center">
<!--                <div class="col-lg-6">-->
                 <button class="btn btn-warning w-50 btn-lg " type="submit" role="button"> Create New User</button>
<!--               </div>-->
                
              </div>
               
                
              </div>
               </form>
             </div>
           </div>
         </div>
       </div>


     </div>
   </div>
   <?php include("includes/footer.php");?>
 </body>
