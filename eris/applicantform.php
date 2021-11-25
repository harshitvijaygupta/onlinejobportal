
<!-- <div class="form-group">
  <div class="col-md-11">
  <label class="col-md-4 control-label" for=
    "NATIONALID">NationalID:</label>

    <div class="col-md-8"> 
       <input class="form-control input-sm" id="NATIONALID" name="NATIONALID" placeholder=
          "00-000000000000" type="text" value=""  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
    </div>
  </div>
</div> -->
<div class="form-group">
	<div class="col-md-11">
	<label class="col-md-4 control-label" for=
		"FNAME">Firstname:</label>

		<div class="col-md-8">
		  <input name="JOBID" type="hidden" value="<?php echo $_GET['job'];?>">
		   <input class="form-control input-sm" id="FNAME" name="FNAME" placeholder=
		      "Firstname" type="text" value=""  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
		</div>
	</div>
</div>

<div class="form-group">
	<div class="col-md-11">
		<label class="col-md-4 control-label" for=
		"LNAME">Lastname:</label>

		<div class="col-md-8">
		  <input name="deptid" type="hidden" value="">
		  <input  class="form-control input-sm" id="LNAME" name="LNAME" placeholder=
		      "Lastname"    onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
		  </div>
	</div>
</div>

<div class="form-group">
	<div class="col-md-11">
		<label class="col-md-4 control-label" for=
		"MNAME">Middle Name:</label>

		<div class="col-md-8">
		  <input name="deptid" type="hidden" value="">
		  <input  class="form-control input-sm" id="MNAME" name="MNAME" placeholder=
		      "Middle Name"    onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
		   <!-- <input class="form-control input-sm" id="DEPARTMENT_DESC" name="DEPARTMENT_DESC" placeholder=
		      "Description" type="text" value=""> -->
		</div>
	</div>
</div> 

<div class="form-group">
	<div class="col-md-11">
		<label class="col-md-4 control-label" for=
		"ADDRESS">Address:</label>

		<div class="col-md-8">

		 <textarea class="form-control input-sm" id="ADDRESS" name="ADDRESS" placeholder=
		    "Address" type="text" value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off"></textarea>
		</div>
	</div>
</div> 

<div class="form-group">
	<div class="col-md-11">
		<label class="col-md-4 control-label" for=
		"Gender">Sex:</label>

		<div class="col-md-8">
		 <div class="col-lg-5">
		    <div class="radio">
		      <label><input checked id="optionsRadios1" checked="True" name="optionsRadios" type="radio" value="Female">Female</label>
		    </div>
		  </div>

		  <div class="col-lg-4">
		    <div class="radio">
		      <label><input id="optionsRadios2"   name="optionsRadios" type="radio" value="Male"> Male</label>
		    </div>
		  </div> 
		 
		</div>
	</div>
</div>

<div class="form-group">
  <div class="rows">
    <div class="col-md-11"> 
      <div class="col-md-4">
        <label class="col-lg-11 control-label">Date of Birth</label>
      </div>

      <div class="col-lg-3">
        <select class="form-control input-sm" name="month">
          <option>Month</option>
          <?php

             $mon = array('Jan' => 1 ,'Feb'=> 2,'Mar' => 3 ,'Apr'=> 4,'May' => 5 ,'Jun'=> 6,'Jul' => 7 ,'Aug'=> 8,'Sep' => 9 ,'Oct'=> 10,'Nov' => 11 ,'Dec'=> 11 );    
          
        
            foreach ($mon as $month => $value ) {
              
                  # code...
                   echo '<option value='.$value.'>'.$month.'</option>';
                } 
          ?>
        </select>
      </div>

      <div class="col-lg-2">
        <select class="form-control input-sm" name="day">
          <option>Day</option>
        <?php 
          $d = range(31, 1);
          foreach ($d as $day) {
            echo '<option value='.$day.'>'.$day.'</option>';
          }
        
        ?>
          
        </select>
      </div>

      <div class="col-lg-3">
        <select class="form-control input-sm" name="year">
          <option>Year</option>
        <?php 
          $years = range(2010, 1900);
          foreach ($years as $yr) {
            echo '<option value='.$yr.'>'.$yr.'</option>';
          }
        
        ?>
        
        </select>
      </div> 
    </div>
  </div>
</div> 

 <div class="form-group">
    <div class="col-md-11">
      <label class="col-md-4 control-label" for=
      "BIRTHPLACE">Place of Birth:</label>

      <div class="col-md-8">
        
         <textarea class="form-control input-sm" id="BIRTHPLACE" name="BIRTHPLACE" placeholder=
            "Place of Birth" type="text" value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off"></textarea>
      </div>
    </div>
  </div> 


 <div class="form-group">
  <div class="col-md-11">
    <label class="col-md-4 control-label" for=
    "TELNO">Contact No.:</label>

    <div class="col-md-8">
      
       <input class="form-control input-sm" id="TELNO" name="TELNO" placeholder=
          "Contact No." type="text" any value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
    </div>
  </div>
</div> 

 <div class="form-group">
  <div class="col-md-11">
    <label class="col-md-4 control-label" for=
    "CIVILSTATUS">Civil Status:</label>

    <div class="col-md-8">
      <select class="form-control input-sm" name="CIVILSTATUS" id="CIVILSTATUS">
          <option value="none" >Select</option>
          <option value="Single">Single</option>
          <option value="Married">Married</option>
          <option value="Widow" >Widow</option>
          <!-- <option value="Fourth" >Fourth</option> -->
      </select> 
    </div>
  </div>
</div>  

 <div class="form-group">
  <div class="col-md-11">
    <label class="col-md-4 control-label" for=
    "EMAILADDRESS">Email Address:</label> 
    <div class="col-md-8">
       <input type="Email" class="form-control input-sm" id="EMAILADDRESS" name="EMAILADDRESS" placeholder="Email Address"   autocomplete="false"/> 
    </div>
  </div>
</div>  
<div class="form-group">
  <div class="col-md-11">
    <label class="col-md-4 control-label" for=
    "USERNAME">Username:</label>

    <div class="col-md-8">
      <input name="deptid" type="hidden" value="">
      <input  class="form-control input-sm" id="USERNAME" name="USERNAME" placeholder=
          "Username"    onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
      </div>
  </div>
</div>

<div class="form-group">
  <div class="col-md-11">
    <label class="col-md-4 control-label" for=
    "PASS">Password:</label>

    <div class="col-md-8">
      <input name="deptid" type="hidden" value="">
      <input  class="form-control input-sm" id="PASS" name="PASS" placeholder=
          "Password" type="password"   onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
       <!-- <input class="form-control input-sm" id="DEPARTMENT_DESC" name="DEPARTMENT_DESC" placeholder=
          "Description" type="text" value=""> -->
    </div>
  </div>
</div> 
<div class="form-group">
  <div class="col-md-11">
    <label class="col-md-4 control-label" for=
    "DEGREE">Educational Attainment:</label>

    <div class="col-md-8">
      <input name="deptid" type="hidden" value="">
      <input  class="form-control input-sm" id="DEGREE" name="DEGREE" placeholder=
          "Educational Attainment"    onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
      </div>
  </div>
</div> 
<div class="form-group">
    <div class="col-md-11">
      <label class="col-md-4 control-label" for=
      "d"></label>  

      <div class="col-md-8">
        <label><input type="checkbox"> By Sign up you are agree with our <a href="#">terms and condition</a></label>
     
     </div>
    </div>
</div>   
