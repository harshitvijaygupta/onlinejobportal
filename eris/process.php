<?php  
require_once ("include/initialize.php");
$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';
switch ($action) {
	case 'submitapplication' :
	doSubmitApplication();
	break;
  
	case 'register' :
	doRegister();
	break;  

	case 'login' :
	doLogin();
	break; 
	}

function doSubmitApplication() { 
	global $mydb;   
		$jobid  = $_GET['JOBID'];
		

		$autonum = New Autonumber();
		$applicantid = $autonum->set_autonumber('APPLICANT');
		$autonum = New Autonumber();
		$fileid = $autonum->set_autonumber('FILEID');

		@$picture = UploadImage();
		@$location = "photos/". $picture ;


		if ($picture=="") {
			# code...
			redirect(web_root."index.php?q=apply&job=".$jobid."&view=personalinfo");
		}else{ 
			
			if (isset($_SESSION['APPLICANTID'])) {

				$sql = "INSERT INTO `tblattachmentfile` (FILEID,`USERATTACHMENTID`, `FILE_NAME`, `FILE_LOCATION`, `JOBID`) 
				VALUES ('". date('Y').$fileid->AUTO."','{$_SESSION['APPLICANTID']}','Resume','{$location}','{$jobid}')";
				$mydb->setQuery($sql); 
				$res = $mydb->executeQuery(); 

				doUpdate($jobid,$fileid->AUTO);
				
			}else{
				 
				$sql = "INSERT INTO `tblattachmentfile` (FILEID,`USERATTACHMENTID`, `FILE_NAME`, `FILE_LOCATION`, `JOBID`) 
				VALUES ('". date('Y').$fileid->AUTO."','". date('Y').$applicantid->AUTO."','Resume','{$location}','{$jobid}')";
				// echo $sql;exit;
				$mydb->setQuery($sql); 
				$res = $mydb->executeQuery(); 

				doInsert($jobid,$fileid->AUTO); 

				$autonum = New Autonumber();
				$autonum->auto_update('APPLICANT');
			}
		}

		$autonum = New Autonumber();
	    $autonum->auto_update('FILEID'); 
	 
}
function doInsert($jobid=0,$fileid=0) {
	if (isset($_POST['submit'])) {  
	global $mydb; 

			$birthdate =  $_POST['year'].'-'.$_POST['month'].'-'.$_POST['day'];

			$age = date_diff(date_create($birthdate),date_create('today'))->y;

			if ($age < 20){
			message("Invalid age. 20 years old and above is allowed.", "error");
			redirect("index.php?q=apply&view=personalinfo&job=".$jobid);

			}else{

			$autonum = New Autonumber();
			$auto = $autonum->set_autonumber('APPLICANT');
			 
			$applicant =New Applicants();
			$applicant->APPLICANTID = date('Y').$auto->AUTO;
			$applicant->FNAME = $_POST['FNAME'];
			$applicant->LNAME = $_POST['LNAME'];
			$applicant->MNAME = $_POST['MNAME'];
			$applicant->ADDRESS = $_POST['ADDRESS'];
			$applicant->SEX = $_POST['optionsRadios'];
			$applicant->CIVILSTATUS = $_POST['CIVILSTATUS'];
			$applicant->BIRTHDATE = $birthdate;
			$applicant->BIRTHPLACE = $_POST['BIRTHPLACE'];
			$applicant->AGE = $age;
			$applicant->USERNAME = $_POST['USERNAME'];
			$applicant->PASS = sha1($_POST['PASS']);
			$applicant->EMAILADDRESS = $_POST['EMAILADDRESS'];
			$applicant->CONTACTNO = $_POST['TELNO'];
			$applicant->DEGREE = $_POST['DEGREE'];
			$applicant->create();


			$sql = "SELECT * FROM `tblcompany` c,`tbljob` j WHERE c.`COMPANYID`=j.`COMPANYID` AND JOBID = '{$jobid}'" ;
			$mydb->setQuery($sql);
			$result = $mydb->loadSingleResult();


			$jobreg = New JobRegistration(); 
			$jobreg->COMPANYID = $result->COMPANYID;
			$jobreg->JOBID     = $result->JOBID;
			$jobreg->APPLICANTID = date('Y').$auto->AUTO;
			$jobreg->APPLICANT   = $_POST['FNAME'] . ' ' . $_POST['LNAME'];
			$jobreg->REGISTRATIONDATE = date('Y-m-d');
			$jobreg->FILEID = date('Y').$fileid;
			$jobreg->REMARKS = 'Pending';
			$jobreg->DATETIMEAPPROVED = date('Y-m-d H:i');
			$jobreg->create();
  

			message("Your application already submitted. Please wait for the company confirmation if your are qualified to this job.","success");
			redirect("index.php?q=success&job=".$result->JOBID);

			
	 }
}
}
function doUpdate($jobid=0,$fileid=0) {
	if (isset($_POST['submit'])) {
	global $mydb;   

			$applicant =New Applicants();
			$appl  = $applicant->single_applicant($_SESSION['APPLICANTID']);

			 

			$sql = "SELECT * FROM `tblcompany` c,`tbljob` j WHERE c.`COMPANYID`=j.`COMPANYID` AND JOBID = '{$jobid}'" ;
			$mydb->setQuery($sql);
			$result = $mydb->loadSingleResult();


			$jobreg = New JobRegistration(); 
			$jobreg->COMPANYID = $result->COMPANYID;
			$jobreg->JOBID     = $result->JOBID;
			$jobreg->APPLICANTID = $appl->APPLICANTID;
			$jobreg->APPLICANT   = $appl->FNAME . ' ' . $appl->LNAME;
			$jobreg->REGISTRATIONDATE = date('Y-m-d');
			$jobreg->FILEID = date('Y').$fileid;
			$jobreg->REMARKS = 'Pending';
			$jobreg->DATETIMEAPPROVED = date('Y-m-d H:i');
			$jobreg->create();

  
			message("Your application already submitted. Please wait for the company confirmation if your are qualified to this job.","success");
			redirect("index.php?q=success&job=".$result->JOBID);
 
	}
}
function doRegister(){
	global $mydb;
	if (isset($_POST['btnRegister'])) { 
			$birthdate =  $_POST['year'].'-'.$_POST['month'].'-'.$_POST['day'];

			$age = date_diff(date_create($birthdate),date_create('today'))->y;

			if ($age < 20){
			message("Invalid age. 20 years old and above is allowed.", "error");
			redirect("index.php?q=register");

			}else{

			$autonum = New Autonumber();
			$auto = $autonum->set_autonumber('APPLICANT');
			 
			$applicant =New Applicants();
			$applicant->APPLICANTID = date('Y').$auto->AUTO;
			$applicant->FNAME = $_POST['FNAME'];
			$applicant->LNAME = $_POST['LNAME'];
			$applicant->MNAME = $_POST['MNAME'];
			$applicant->ADDRESS = $_POST['ADDRESS'];
			$applicant->SEX = $_POST['optionsRadios'];
			$applicant->CIVILSTATUS = $_POST['CIVILSTATUS'];
			$applicant->BIRTHDATE = $birthdate;
			$applicant->BIRTHPLACE = $_POST['BIRTHPLACE'];
			$applicant->AGE = $age;
			$applicant->USERNAME = $_POST['USERNAME'];
			$applicant->PASS = sha1($_POST['PASS']);
			$applicant->EMAILADDRESS = $_POST['EMAILADDRESS'];
			$applicant->CONTACTNO = $_POST['TELNO'];
			$applicant->DEGREE = $_POST['DEGREE'];
			$applicant->create();


 
			$autonum = New Autonumber();
			$autonum->auto_update('APPLICANT');


			message("You are successfully registered to the site. You can login now!","success");
			redirect("index.php?q=success");

			
	 }
}
}

function doLogin(){
	
	$email = trim($_POST['USERNAME']);
	$upass  = trim($_POST['PASS']);
	$h_upass = sha1($upass);
 
  //it creates a new objects of member
    $applicant = new Applicants();
    //make use of the static function, and we passed to parameters
    $res = $applicant->applicantAuthentication($email, $h_upass);
    if ($res==true) { 

       	message("You are now successfully login!","success");
       
       // $sql="INSERT INTO `tbllogs` (`USERID`,USERNAME, `LOGDATETIME`, `LOGROLE`, `LOGMODE`) 
       //    VALUES (".$_SESSION['USERID'].",'".$_SESSION['FULLNAME']."','".date('Y-m-d H:i:s')."','".$_SESSION['UROLE']."','Logged in')";
       //    mysql_query($sql) or die(mysql_error()); 
         redirect(web_root."applicant/");
     
    }else{
    	 echo "Account does not exist! Please contact Administrator."; 
    } 
}
 
function UploadImage($jobid=0){
	$target_dir = "applicant/photos/";
	$target_file = $target_dir . date("dmYhis") . basename($_FILES["picture"]["name"]);
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	
	
	if($imageFileType != "jpg" || $imageFileType != "png" || $imageFileType != "jpeg"
|| $imageFileType != "gif" ) {
		 if (move_uploaded_file($_FILES["picture"]["tmp_name"], $target_file)) {
			return  date("dmYhis") . basename($_FILES["picture"]["name"]);
		}else{
			message("Error Uploading File","error");
			// redirect(web_root."index.php?q=apply&job=".$jobid."&view=personalinfo");
			// exit;
		}
	}else{
			message("File Not Supported","error");
			// redirect(web_root."index.php?q=apply&job=".$jobid."&view=personalinfo");
			// exit;
		}
} 


?>