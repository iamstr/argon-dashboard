  <?php 

                if(isset($_GET['girl'])):

                  $edit=mysqli_real_escape_string($connect,$_GET['girl']);
                 $_SESSION['girl']=  $edit;
$sql="SELECT * FROM girls inner join agents on girls.girl_id=agents.girl_id inner join next_of_kin on next_of_kin.girl_id=girls.girl_id where girls.girl_id='$edit'";
$result=$connect->query($sql);
$row=$result->fetch_array();

$fullname=$row[1];
$idNumber=$row[2];
$phone=$row[3];
$dob=$row[4];
$religion=$row[5];
$county=$row[6];
$passport=$row[7];
$issue=$row[8];
$expiry=$row[9];
$place=$row[10];
$conduct=$row[11];
$birth=$row[12];
$medical=$row[13];
$agent_name=$row[19];
$agent_phone=$row[20];
$kin_names=$row[23];
$kin_idNumber=$row[24];
$kin_phone=$row[26];
$kin_ship=$row[25];
$kin_names2=$row[27];
$kin_idNumber2=$row[28];
$kin_phone2=$row[29];
$kin_ship2=$row[30];



//    Mombasa
//    Kwale
//    Kilifi
//    Tana-River
//    Lamu
//    Taita-Taveta
//    Garissa
//    Wajir
//    Mandera
//    Marsabit
//    Isiolo
//    Meru
//    Tharaka-Nithi
//    Embu
//    Kitui
//    Machakos
//    Makueni
//    Nyandarua
//    Nyeri
//    Kirinyaga
//    Muranga
//    Kiambu
//    Turkana
//    West Pokot
//    Samburu
//    Trans-Nzoia
//    Uasin Gishu
//    Elgeyo-Marakwet
//    Nandi
//    Baringo
//    Laikipia
//    Nakuru
//    Narok
//    Kajiado
//    Kericho
//    Bomet
//    Kakamega
//    Vihiga
//    Bungoma
//    Busia
//    Siaya
//    Kisumu
//    Homa Bay
//    Migori
//    Kisii
//    Nyamira
//    Nairobi
//



?>
              
              <script>
                $(document).ready(function($){
                  $("#girlModal").modal('show')
                });

                
              </script>
               <?php else: 


                        $edit=null;
                        $fullname=null;
                        $idNumber=null;
                        $phone=null;
                        $dob=null;
                        $religion=null;
                        $county=null;
                        $passport=null;
                        $issue=null;
                        $expiry=null;
                        $place=null;
                        $conduct=null;
                        $birth=null;
                        $medical=null;
                        $agent_name=null;
                        $agent_phone=null;
                        $kin_names=null;
                        $kin_idNumber=null;
                        $kin_phone=null;
                        $kin_ship=null;
                        $kin_names2=null;
                        $kin_idNumber2=null;
                        $kin_phone2=null;
                        $kin_ship2=null;


                endif;


              ?>
             
         <div class="modal fade" id="girlModal" tabindex="-1" role="dialog" aria-labelledby="musanedModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document" style="max-width:800px;transform: translateX(150px);">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                      Girl Module
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                    <!--                  <form action=""  id="#musanedForm">-->
                    <div class="modal-body">     
             <div class="modal-message"></div>
    <form class="w-100 " action="php_action/editGirl.php" method="post" id="addNewGirl">
      <div class="row">
        <div class="col card-before" style="">
          <!-- start of first step -->
          <div class="card  steps-form  border-0 shadow-none  ">
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0">First Stage</h3>
            </div>
            <div class="container ml-3 slideLeft">
              <div class="row">
                <div class="col-5">
                  <div class="form-group">
                    <label for="fullname">Girl Fullname</label>
                    <input type="text" class=" form-control form-control-muted" id="fullname"  name="fullname" placeholder="Mary Moraa" value="<?php echo $fullname ;?>">
                  </div>
                </div>
                <div class="col-5">
                  <div class="form-group">
                    <label for="id">Girl ID Number</label>
                    <input type="text" class="form-control form-control-muted" id="id"  name="id" 
                    placeholder="00000000" value="<?php echo $idNumber;?>">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-5">
                  <div class="form-group">
                    <label for="phone">Girl Phone Number</label>
                    <input type="tel" class=" form-control form-control-muted" id="phone"  name="phone" placeholder="0722123456" value="<?php echo $phone;?>">
                  </div>
                </div>
                <div class="col-5">
                  <div class="form-group">
                    <label for="dob">Girl Date Of Birth</label>
                    <div class="input-group">

                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                      </div>
                      <input class="form-control datepicker" placeholder="Select date" type="text" name="dob" id="dob" value="<?php echo $dob;?>">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-5">
                  <div class="form-group">
                    <label for="religion">Girl Religion</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="religion" id="religion" >
                      <option>Muslim</option>
                      <option>Non Muslim</option>
                    </select>
                  </div>
                </div>
                <div class="col-5">
                  <div class="form-group">
                    <label for="county">Girl County</label>
                    <select class="form-control" id="county" name="county" >
                      <option <?php echo $county=="Mombasa"?"selected":null;?>>Mombasa</option>
                      <option <?php echo $county=="Kwale"?"selected":null;?>>Kwale</option>
                      <option <?php echo $county=="Kilifi"?"selected":null;?>>Kilifi</option>
                      <option <?php echo $county=="Tana-River"?"selected":null;?>>Tana-River</option>
                      <option <?php echo $county=="Lamu"?"selected":null;?>>Lam</option>
                      <option <?php echo $county=="Taita-Taveta"?"selected":null;?>> Taita-Taveta</option>
                      <option <?php echo $county=="Garissa"?"selected":null;?>> Garissa</option>
                      <option <?php echo $county=="Wajir"?"selected":null;?>> Wajir</option>
                      <option <?php echo $county=="Mandera"?"selected":null;?>> Mandera</option>
                      <option <?php echo $county=="Marsabit"?"selected":null;?>> Marsabit</option>
                      <option <?php echo $county=="Isiolo"?"selected":null;?>>  Isiolo</option>
                      <option <?php echo $county=="Meru"?"selected":null;?>> Meru</option>
                      <option <?php echo $county=="Tharaka-Nithi"?"selected":null;?>> Tharaka-Nithi</option>
                      <option <?php echo $county=="Embu"?"selected":null;?>> Embu</option>
                      <option <?php echo $county=="Kitui"?"selected":null;?>> Kitui</option>
                      <option <?php echo $county=="Machakos"?"selected":null;?>> Machakos</option>
                      <option <?php echo $county=="Makueni"?"selected":null;?>>  Makueni</option>
                      <option <?php echo $county=="Nyandarua"?"selected":null;?>> Nyandarua</option>
                      <option <?php echo $county=="Nyeri"?"selected":null;?>> Nyeri</option>
                      <option <?php echo $county=="Kirinyaga"?"selected":null;?>> Kirinyaga</option>
                      <option <?php echo $county=="Muranga"?"selected":null;?>>Muranga</option>
                      <option <?php echo $county=="Kiambu"?"selected":null;?>>Kiambu</option>
                      <option <?php echo $county=="Turkana"?"selected":null;?>>Turkana</option>
                      <option <?php echo $county=="West Pokot"?"selected":null;?>>West Pokot</option>
                      <option <?php echo $county=="Samburu"?"selected":null;?>>Samburu</option>
                      <option <?php echo $county=="Trans-Nzoia"?"selected":null;?>>Trans-Nzoia</option>
                      <option <?php echo $county=="Uasin Gishu"?"selected":null;?>>Uasin Gishu</option>
                      <option <?php echo $county=="Elgeyo-Marakwet"?"selected":null;?>>Elgeyo-Marakwet</option>
                      <option <?php echo $county=="Nandi"?"selected":null;?>>Nandi</option>
                      <option <?php echo $county=="Baringo"?"selected":null;?>>Baringo</option>
                      <option <?php echo $county=="Laikipia"?"selected":null;?>>Laikipia</option>
                      <option <?php echo $county=="Nakuru"?"selected":null;?>>Nakuru</option>
                      <option <?php echo $county=="Narok"?"selected":null;?>> Narok</option>
                      <option <?php echo $county=="Kajiado"?"selected":null;?>> Kajiado</option>
                      <option <?php echo $county=="Kericho"?"selected":null;?>>Kericho</option>
                      <option <?php echo $county=="Bomet"?"selected":null;?>>Bomet</option>
                      <option <?php echo $county=="Kakamega"?"selected":null;?>>Kakamega</option>
                      <option <?php echo $county=="Vihiga"?"selected":null;?>>Vihiga</option>
                      <option <?php echo $county=="Bungoma"?"selected":null;?>>Bungoma</option>
                      <option <?php echo $county=="Busia"?"selected":null;?>>Busia</option>
                      <option <?php echo $county=="Siaya"?"selected":null;?>>Siaya</option>
                      <option <?php echo $county=="Kisumu"?"selected":null;?>>Kisumu</option>
                      <option <?php echo $county=="Homa Bay"?"selected":null;?>>Homa Bay</option>
                      <option <?php echo $county=="Migori"?"selected":null;?>>Migori</option>
                      <option <?php echo $county=="Kisii"?"selected":null;?>>Kisii</option>
                      <option <?php echo $county=="Nyamira"?"selected":null;?>>Nyamira</option>
                      <option <?php echo $county=="Nairobi"?"selected":null;?>>Nairobi</option>
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
          <div class="card  steps-form border-0 shadow-none   ">
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0">Second Stage</h3>
            </div>
            <div class="container ml-3 slideLeft">

              <div class="row">
                <div class="col-5">
                  <div class="form-group">
                    <h3 class="mb-0">First Medical</h3>
                  </div>
                </div>
                <div class="col-5">
                  <div class="form-group">

                    <div class="custom-control custom-radio custom-control-inline">
                      <input type="radio" id="firstMedical" name="firstMedical" class="custom-control-input" value="yes"  <?php echo  $medical=="yes" ?"checked":null   ?>>
                      <label class="custom-control-label" for="firstMedical" >YES</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                      <input type="radio" id="firstMedical2" name="firstMedical" class="custom-control-input" value="no"  <?php echo  $medical=="no" ?"checked":null   ?>>
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
                      <input type="radio" id="customRadioInline1" name="birth_cert" class="custom-control-input" value="yes" <?php echo  $birth=="yes" ?"checked":null   ?>/>
                      <label class="custom-control-label" for="customRadioInline1">YES</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                      <input type="radio" id="customRadioInline2" name="birth_cert" class="custom-control-input" value="no"  <?php echo  $birth=="no" ?"checked":null   ?> >
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
          <div class="card  steps-form border-0 shadow-none   ">
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0">Third Stage</h3>
            </div>
            <div class="container ml-3 mt-5 slideLeft">

              <div class="row">

                <div class="col-5">
                  <div class="form-group">
                    <label for="passport"> Passport Number</label>
                    <input type="text" class="form-control form-control-muted" id="passport"  name="passport" placeholder="AK078341" value="<?php echo $passport;?>">
                  </div>
                </div>
                <div class="col-5">
                  <div class="form-group">
                    <label for="conduct"> Good Conduct Number</label>
                    <input type="text" class="form-control form-control-muted" id="conduct"  name="conduct"placeholder="PHSH-1234" value="<?php echo $conduct;?>">
                  </div>
                </div>

              </div>

              <div class="row">


                <div class="col-5">
                  <div class="form-group">
                    <label for="issue">Passport Place Of Issue</label>
                    <select class="form-control" id="issue" name="issue">
                      <option <?php echo $place=="Nyayo House"?"selected":null;?> >Nyayo House</option>
                      <option <?php echo $place=="Mombasa Regional Office"?"selected":null;?>>Mombasa Regional Office</option>
                      <option <?php echo $place=="Kisumu Regional Office Western"?"selected":null;?>>Kisumu Regional Office Western</option>
                      <option <?php echo $place=="Eldoret Sub-Regional office"?"selected":null;?>>Eldoret Sub-Regional office</option>
                      <option <?php echo $place=="Garissa  Eastern Regional Offices"?"selected":null;?>>Garissa  Eastern Regional Offices</option>
                      <option <?php echo $place=="Embu  Eastern Regional Offices"?"selected":null;?>>Embu  Eastern Regional Offices</option>
                      <option <?php echo $place=="Nakuru  South Rift Regional Offices"?"selected":null;?>>Nakuru  South Rift Regional Offices</option>
                    </select>
                  </div>
                </div>
                
                
                <div class="col-5">
                  <div class="form-group">
                    <label for="dob">Passport Issue Date</label>
                    <div class="input-group">

                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                      </div>
                      <input class="form-control datepicker" placeholder="Select date" type="text" name="passport_date_issue" id="pdi" value="<?php echo $issue;?>">
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
          <!-- end of third step -->
          <!-- fourth step -->
          <div class="card  steps-form border-0 shadow-none  ">
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0">Fourth Stage</h3>
            </div>
            <div class="container ml-3 mt-5 slideLeft">

              <div class="row">

                <div class="col-5">
                  <div class="form-group">
                    <label for="kin_names"> Next Of Kin Names</label>
                    <input type="text" class="form-control form-control-muted" id="kin_names" name="kin_names" placeholder="John Kabuga Salim" value="<?php echo $kin_names;?>">
                  </div>
                </div>

                <div class="col-5">
                  <div class="form-group">
                    <label for="kinship">Next Of Kin Relationship</label>
                    <select class="form-control" id="kinship"name="kinship" >
                      <option  <?php echo $kin_ship=="Father"?"selected":null;?>>Father</option>
                      <option  <?php echo $kin_ship=="Mother"?"selected":null;?>>Mother</option>
                      <option  <?php echo $kin_ship=="Sister"?"selected":null;?>>Sister</option>
                      <option  <?php echo $kin_ship=="Brother"?"selected":null;?>>Brother</option>
                      <option  <?php echo $kin_ship=="Spouse"?"selected":null;?>>Spouse</option>
                    </select>
                  </div>
                </div>

              </div>
                
            

              <div class="row">


                <div class="col-5">
                  <div class="form-group">
                    <label for="kin_number"> Next Of Kin Number</label>
                    <input type="tel" class="form-control form-control-muted" id="kin_number" name="kin_number" placeholder="07xx xxx xxx" value="<?php echo $kin_phone;?>">
                  </div>
                </div>
                <div class="col-5">
                  <div class="form-group">
                    <label for="kin_id"> Next Of Kin ID Number</label>
                    <input type="text" class="form-control form-control-muted" id="kin_id" name="kin_id" placeholder="1234567" value="<?php echo $kin_idNumber;?>">
                  </div>
                </div>

              </div> 
              
                      <div class="row">

                <div class="col-5">
                  <div class="form-group">
                    <label for="kin_names2"> Next Of Kin  2 Names</label>
                    <input type="text" class="form-control form-control-muted" id="kin_names2" name="kin_names2" placeholder="John Kabuga Salim" value="<?php echo $kin_names2;?>">
                  </div>
                </div>

                <div class="col-5">
                  <div class="form-group">
                    <label for="kinship2">Next Of Kin 2 Relationship</label>
                    <select class="form-control" id="kinship2"name="kinship2" >
                       <option  <?php echo $kin_ship2=="Father"?"selected":null;?>>Father</option>
                      <option  <?php echo $kin_ship2=="Mother"?"selected":null;?>>Mother</option>
                      <option  <?php echo $kin_ship2=="Sister"?"selected":null;?>>Sister</option>
                      <option  <?php echo $kin_ship2=="Brother"?"selected":null;?>>Brother</option>
                      <option  <?php echo $kin_ship2=="Spouse"?"selected":null;?>>Spouse</option>
                    </select>
                  </div>
                </div>

              </div>
              
              <div class="row">


                <div class="col-5">
                  <div class="form-group">
                    <label for="kin_number2"> Next Of Kin 2 Number</label>
                    <input type="tel" class="form-control form-control-muted" id="kin_number2" name="kin_number2" placeholder="07xx xxx xxx" value="<?php echo $kin_phone2;?>">
                  </div>
                </div>
                <div class="col-5">
                  <div class="form-group">
                    <label for="kin_id2"> Next Of Kin 2 ID Number</label>
                    <input type="text" class="form-control form-control-muted" id="kin_id2" name="kin_id2" placeholder="1234567" value="<?php echo $kin_idNumber2;?>">
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
                <button class="btn btn-icon btn-primary w-25 btn-lg steps-form-button-next  " type="button" >
                  <span class="btn-inner--text">Next</span>
                  <span class="btn-inner--icon"><i class="ni ni-bold-right"></i></span>
                </button>
              </div>

            </div>

           

          </div>
          <!-- end of fourth step -->
          
          <!-- fiveth step -->
          <div class="card  steps-form border-0 shadow-none  ">
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0">Fiveth Stage</h3>
            </div>
            <div class="container ml-3 mt-5 slideLeft">

                <div class="row">
                 
                  
                </div>
              <div class="row">
                <div class="col-6">
                <div class="form-group">
                  <label for="exampleFormControlInput1"> Agent Name</label>
                  <select class="form-control" id="agent" name="agent">
                      <option value="-1">Select the agent</option>
                      <option value="0">Create New Agent</option>
                      <?php require_once("php_action/fetchAgent.php");  agents($agent_phone);?>
                    </select>
                </div>
                </div>
              </div>
              
              <div class="row">
              

                <div class="col-5">
                  <div class="form-group d-none">
                    <label for="exampleFormControlInput1"> Agent Name</label>
                    <input type="text" class="form-control form-control-muted" id="exampleFormControlInput1" name="agent_name" placeholder="John Doe" hidden>
                  </div>
                </div>
                <div class="col-5">
                  <div class="form-group d-none">
                    <label for="exampleFormControlInput1"> Agent Number</label>
                    <input type="tel" class="form-control form-control-muted" id="exampleFormControlInput1" name="agent_number" placeholder="1234567" hidden>
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
                <button class="btn btn-icon btn-primary w-25 btn-lg" type="submit"  id="submitModal">
                  <span class="btn-inner--text">Save Info</span>
                  <span class="btn-inner--icon"><i class="ni ni-bold-right"></i></span>
                </button>
              </div>

            </div>

            <!-- Modal -->
<!--
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                  <div class="display" style="width:300px">
                    
                    <h2 class="my-5 text-center">Great Work Sending Data </h2>
                  <a href="https://storyset.com/work" class=" d-flex justify-content-center">
                    <?php //include("includes/vectors/success.php");?>
                  </a>
                  </div>
                  
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button  class="btn btn-primary" type="submit"  id="submitModal">Save changes</button>
                  </div>
                </div>
              </div>
            </div>
-->

          </div>
          <!-- end of fiveth step -->
        </div>

      </div>
    </form>


                    
                  </div>
                </div>
           </div>
</div>


 <script>
      $(document).ready(function() {
        const stepForm = $(".steps-form")


        $('#dob').datepicker({
          autoclose: true,
           changeMonth: true,
      changeYear: true,
          format: 'yyyy-mm-dd',
         defaultViewDate :new Date(),
          startDate:"-38y",
          endDate: '-21y'
        }); 
        
        $('#pdi').datepicker({
          autoclose: true,
           changeMonth: true,
      changeYear: true,
          format: 'yyyy-mm-dd',
         defaultViewDate :new Date(),
          startDate:"-10y",
          endDate: '0d'
        });


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
            console.log(stepForm.length, index)
            if ((index + 1) < stepForm.length && index >= 0) {
              stepForm[index + 1].children[1].classList.add("slideLeft")
              parent.children[1].classList.remove("slideLeft")
              stepForm[index + 1].style.display = "flex"

              parent.style.display = "none";



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
        
        
        
        //agent select
        
        $("#agent").on("change",function(e){
          
          
          
          if($(this).val()===$('#agent option:eq(1)').val()){
            
            console.log($(this).val())
            $("[name=agent_number]").removeAttr("hidden")
            $("[name=agent_number]").parent().removeClass("d-none")
            $("[name=agent_name]").parent().removeClass("d-none")
            $("[name=agent_name]").removeAttr("hidden")
          }else{
            
            $("[name=agent_number]").attr("hidden",true)
             $("[name=agent_name]").attr("hidden",true)
            $("[name=agent_number]").parent().addClass("d-none")
            $("[name=agent_name]").parent().addClass("d-none")
            
          }
          
        })
        
        
        
        
        	$("#submitModal").unbind('click').bind('click', function() {
             const alert=`
                          <div class="alert alert-primary slideLeft" role="alert">
                              <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                              <span class="alert-text"><strong>You have successfully submitted the changes!</strong> </span>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button
                           </div>`;
              $('.modal-message').append(alert)
              
              $('.modal-body form').hide()
//              $(".modal-message").html(alert)
              	
              	$("#addNewGirl").unbind('submit').bind('submit', function(){
              	 var form = $(this);
				var formData = new FormData(this);
                  console.log(formData)
                  		$.ajax({
					url : form.attr('action'),
					type: form.attr('method'),
					data: formData,
					dataType: 'json',
					cache: false,
					contentType: false,
					processData: false,
					success:function(response) {
                    console.log(response)
						if(response.success == true) {
							

							$("html, body, div.modal, .modal-content, div.modal-body").animate({scrollTop: '0'}, 100);
								$('.modal-body form').hide()									
							// shows a successful message after operation
							$('.modal-message').html('<div class="alert alert-success">'+
		            '<button type="button" class="close" data-dismiss="alert">&times;</button>'+
		            '<strong><i class="ni ni-like-2"></i></strong> '+ response.messages +
		          '</div>');

							// remove the mesages
		          $(".alert-success").delay(1000).show(10, function() {
								$(this).delay(3000).hide(10, function() {
									$(this).remove();
                                  $('.modal-body form').show()
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

      })

    </script>
