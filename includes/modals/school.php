
             <?php 

                if(isset($_GET['school'])):

                  $edit=$_GET['school'];


?>
              
              <script>
                $(document).ready(function($){
$("#schoolModal").modal('show')
                });

                
              </script>
               <?php else: $edit=null;
                endif;


              ?>

               
                 
                     <div class="modal fade  " id="schoolModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                      School Module
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                                    <form action="php_action/<?php echo $edit?"editSchool.php":"createSchool.php"?>" id="schoolForm" method="post">
                  

                    <div class="modal-body">
                      <div class="selection-modal d-flex flex-wrap mb-3"></div>


                      <div class="medical d-flex justify-content-between my-5">
                        <label for=""> School Name</label>

                        <div class="btn-group btn-group-toggle mx-2" data-toggle="buttons">
                          <label class="btn btn-secondary active">
                            <input type="radio" value="1" name="name" id="name" autocomplete="off" checked />
                            ARGON SCHOOL
                          </label>
                          <!--
                        <label class="btn btn-secondary">
                          <input type="radio" value="pending" name="cof" id="cof2" autocomplete="off" />
                          PENDING
                        </label>
-->
                        </div>
                      </div>


                      <div class="input-daterange datepicker">

                        <div class="medical d-flex justify-content-between my-5">

                          <label for="">School Start Date</label>
                          <div class="form-group">
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                              </div>
                              <input class="form-control" placeholder="Start date" type="text" value="06/18/2020" name="start">
                            </div>
                          </div>
                        </div>

                        <div class="medical d-flex justify-content-between my-5">

                          <label for="">School End Date</label>
                          <div class="form-group">
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                              </div>
                              <input class="form-control" placeholder="Start date" type="text" value="06/18/2020" name="end">
                            </div>
                          </div>
                        </div>
                      </div>


                      <div class="medical d-flex justify-content-between my-5">
                        <label for=""> School Certificate</label>

                        <div class="btn-group btn-group-toggle mx-2" data-toggle="buttons">
                          <label class="btn btn-secondary active">
                            <input type="radio" value="pending" name="school" id="school" autocomplete="off" checked />
                            PENDING
                          </label>

                          <label class="btn btn-secondary">
                            <input type="radio" value="ready" name="school" id="school2" autocomplete="off" />
                            READY
                          </label>

                        </div>
                      </div>



                    </div>

                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Close
                      </button>
                      <button type="submit" id="schoolSubmit" class="btn btn-primary">
                        Save changes
                      </button>
                    </div>
                  </form>

                </div>
              </div>
            </div>
