
<?php
require_once ("../../include/initialize.php");
 	 if (!isset($_SESSION['ADMIN_USERID'])){
      redirect(web_root."admin/index.php");
     }


$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch ($action) {
	case 'add' :
	doInsert();
	break;
	
	case 'edit' :
	doEdit();
	break;
	
	case 'delete' :
	doDelete();
	break;

 
	}
   
	function doInsert(){
		if(isset($_POST['save'])){

 // `COMPANYNAME`, `COMPANYADDRESS`, `COMPANYCONTACTNO`
		if ( $_POST['COMPANYNAME'] == "" || $_POST['COMPANYADDRESS'] == "" || $_POST['COMPANYCONTACTNO'] == "" ) {
			$messageStats = false;
			message("All field is required!","error");
			redirect('index.php?view=add');
		}else{	
			$company = New Company();
			$company->COMPANYNAME		= $_POST['COMPANYNAME'];
			$company->COMPANYADDRESS	= $_POST['COMPANYADDRESS'];
			$company->COMPANYCONTACTNO	= $_POST['COMPANYCONTACTNO'];
			// $company->COMPANYMISSION	= $_POST['COMPANYMISSION'];
			$company->create();

			message("New company created successfully!", "success");
			redirect("index.php");
			
		}
		}

	}

	function doEdit(){
		if(isset($_POST['save'])){

			$company = New Company();
			$company->COMPANYNAME		= $_POST['COMPANYNAME'];
			$company->COMPANYADDRESS	= $_POST['COMPANYADDRESS'];
			$company->COMPANYCONTACTNO	= $_POST['COMPANYCONTACTNO'];
			// $company->COMPANYMISSION	= $_POST['COMPANYMISSION'];
			$company->update($_POST['COMPANYID']);

			message("Company has been updated!", "success");
			redirect("index.php");
		}

	}


	function doDelete(){
		// if (isset($_POST['selector'])==''){
		// message("Select a records first before you delete!","error");
		// redirect('index.php');
		// }else{

			$id = $_GET['id'];

			$company = New Company();
			$company->delete($id);

			message("Company has been Deleted!","info");
			redirect('index.php');

		// $id = $_POST['selector'];
		// $key = count($id);

		// for($i=0;$i<$key;$i++){

		// 	$category = New Category();
		// 	$category->delete($id[$i]);

		// 	message("Category already Deleted!","info");
		// 	redirect('index.php');
		// }
		// }
		
	}
?>