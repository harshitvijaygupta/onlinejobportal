                      <?php 
                        if (!isset($_SESSION['ADMIN_USERID'])){
                          redirect(web_root."admin/index.php");
                         }

                      $autonum = New Autonumber();
                      $res = $autonum->set_autonumber('userid');

                       ?> 
 
         <div class="col-lg-12">
            <h1 class="page-header">Add New User</h1>
          </div>
          <!-- /.col-lg-12 --> 

 <form class="form-horizontal span6" action="controller.php?action=add" method="POST">
                    
                         <input id="user_id" name="user_id"  type="hidden" value="<?php echo $res->AUTO; ?>">      
                   <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for="U_NAME">Name:</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="U_NAME" name="U_NAME" placeholder=
                            "User Fullname" type="text" value="">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "U_USERNAME">Username:</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="U_USERNAME" name="U_USERNAME" placeholder=
                            "Account Username" type="text" value="">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "U_PASS">Password:</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" minlength="2" value="">
                         <input class="form-control input-sm" id="U_PASS" min="3" name="U_PASS" placeholder="Account Password" type="Password" value="" required>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "U_ROLE">Role:</label>

                      <div class="col-md-8">
                       <select class="form-control input-sm" name="U_ROLE" id="U_ROLE">
                          <option value="Administrator"  >Administrator</option>
                          <option value="Staff"  >Staff</option>  
                        </select> 
                      </div>
                    </div>
                  </div>


            
             <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "idno"></label>

                      <div class="col-md-8">
                       <button class="btn btn-primary btn-sm" name="save" type="submit" ><span class="fa fa-save fw-fa"></span>  Save</button>  
                       </div>
                    </div>
                  </div>
 
          
        </form> 