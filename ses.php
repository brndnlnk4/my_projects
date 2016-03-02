<!---------------------------	::::NEW HTML 5 CODES::::	
			<label> = Same as <placeholder> but used 4 <input> elements
			<title> = Same as <alt> but works for all elements, not just pics
			<form action='mailto:email@email.com'> = Mail out function 
			<datalist> = Same as a <select> drop dwn but with 'blank' option available 
			e.g. <datalist> 
					<option> blablabla </option>
					<option> blablabla </option>"
				 </datalist>
			
			<input types = 'color, date, time, datetime, email, month, number, range, search, tel, url, week' />
------------------------------------------------------------------------------------>
<?php ///////// INCLUDE THE FUNCTIONS PAGE \\\\\\\\
// require_once("includes/func.php");
   include_once('incl/login_process.php'); 	

?>
<?php ///////SESSION & PROCESSING\\\\\\\\\\
 if(isset($_GET['logout']) && $_GET['logout'] == '1'){
	  $_SESSION = array();
 
 			$logout = md5('logout');
			$success = md5('success');
			unset($_SESSION['username']);
			header("Location: \conspiracy_leak\?$logout=$success");
			break;
  } else{
			session_start();
/////////////SESSION STARTED/////////////////			
/////////////SESSION STARTED/////////////////			
if(isset($_POST['usr']) && isset($_POST['pw'])){
////////////////////////
	$login_name = strip_tags($_POST['usr']);
	$_SESSION['username'] =   ucfirst($login_name);	
	 $login  = md5('login');
	 $success = md5('success');
		header("Location:\conspiracy_leak\?$login=$success");
}
elseif(isset($_SESSION['username'])){
		return $_SESSION['username'];
		break;
} else{
	$_SESSION = array();
	session_unset();
	session_destroy();
		}
	}
//////////LOGOUT PROCESS\\\\\\\\\\\\\\\\\\
//////////LOGOUT PROCESS\\\\\\\\\\\\\\\\\\
//////////LOGOUT PROCESS\\\\\\\\\\\\\\\\\\

?>
	