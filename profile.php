<!DOCTYPE html> 
<HTML lang='en-US'>
 <HEAD>
 <?php include_once('incl/login_process.php'); ?>
<?php ///////////////////////////////////////////
/////CHECK IF USER LOGGED IN AND FIELDS NOT EMPTY/////
/////CHECK IF USER LOGGED IN AND FIELDS NOT EMPTY/////
/////CHECK IF USER LOGGED IN AND FIELDS NOT EMPTY/////

 /////CHECK IF PROFILE PIC UPLOADED PROCESS /////
 /////CHECK IF PROFILE PIC UPLOADED PROCESS /////
 /////CHECK IF PROFILE PIC UPLOADED PROCESS /////
 
  if(isset($_FILES['uploadedfile'])){
	$file = $_FILES['uploadedfile'];
	$user = $_SESSION['name'];
		///file properties
		$file_name = $file['name'];
		$file_tmp = $file['tmp_name'];
		$file_size = $file['size'];
	global $file_name;
			///file extension & checks
			$file_ext = explode('.', $file_name);
			
			$file_ext = strtolower(end($file_ext));
			
			$allowed_ext =  array( 'jpg', 'png', 'bmp', 'gif');
			
			if(in_array($file_ext, $allowed_ext)){ 
			
				//if uploaded txt or jpg or png...continue
					if($file_size <= 1000000){  ///=1mb...continue	
						$file_error = 1;
	
					$file_name_new = uniqid('', true) . '.' . $file_ext;
					$file_destination = $_SERVER['DOCUMENT_ROOT']."conspiracy_leak/img/prof_pics/".$file_name_new;

//CREATE LOG CONTAINING name of file in uploads//...	
//CREATE LOG CONTAINING name of file in uploads//...	
 $dir = "uploads/";
 $data =  "{$_SESSION['name']}.txt";
 $fh = fopen($dir.$data, 'a+') or die("Couldnt make folder for user pics");
 $strng = "{$file_name_new}\n";
 fwrite($fh, $strng);	
     fclose($fh);
 
    //READS all data then EXTRACTS into own var for each line '\n'  
    //READS all data then EXTRACTS into own var for each line '\n'  
   /*
   $num =  27 . 0  ;
   $fh = fopen($dir.$data, 'r');
   $read = fread($fh, $num );
   $pic_id = array($read);
   $_SESSION['tmp_pics'] = $pic_id[0];
   */
		////////////////////////////////////////////////////
		////////////////////////////////////////////////////
		
		if(move_uploaded_file($file_tmp, $file_destination)){
				echo "<img src = 'uploads/".$file_name_new."' width='275px'></img>";
									// $fh = fopen("uploads/{$_SESSION['name']}.txt", 'r+');
					 //fread($fh, 27);
					
			$sze = "uploads/{$_SESSION['name']}.txt";			
		    	$_SESSION['f_size'] = true;
 
			
					
					$pics = $file_name_new;
					 $_SESSION['uploaded_pic'] = $pics;

					$up_status = true;
					global $up_status;
							  //$query = "INSERT INTO `dbName`.`dbTable` (`picture_name`)
							 //VALUES('{$file_name_new}') ";
			}else{empty($_SESSION['f_size']);}
			
		}
	} else{
			$file_error = 0;
		}
		 if($file_error == 0){
		echo '<center>No file selected or Too large.<br> <br>Can only upload jpg, bmp, png files.<br><br>
			  <a href="prof_pic.php" target="_self"><input type="submit" value="Back"></input></a></center>';
		exit();
		}	
	} 
	//END: IF(ISSET($_FILES[uploadedfile] 
	//END: IF(ISSET($_FILES[uploadedfile] 
	//END: IF(ISSET($_FILES[uploadedfile] 
 ?>
  <?//-SEO-SHIT\\\//-SEO-SHIT\\\//-SEO-SHIT\\\?>
	<meta http-equiv="content-type" content="text/html" />
	<meta http-equiv="content-type" content="cache" />
	<meta charset="utf-8" />
	<meta name="author" content="Brandon" />	
	<meta name="robots" content="INDEX,FOLLOW" />
	<meta name="keywords" content=" " />
	<meta name="description" content="Unconstitutional Secrets" />
  <?///END OF META-SEO\\\///END OF META-SEO\\\?>

  <TITLE> 
    Conspiracies-Leaked 
  </TITLE>
  <!--- CSS CSS CSS BITTTCHH!!!!!! ---->
  <link rel='icon' href='css/img/icon.ico' />
  <link rel='stylesheet' type='text/css' href='\conspiracy_leak\css/main_style.css' />
  <link rel='stylesheet' type='text/css' href='\conspiracy_leak\css/nav_style.css' />
  <link rel='stylesheet' type='text/css' href='\conspiracy_leak\css/default.css' />
 
 
<?////STICKY NAVBAR?>
<script src="\conspiracy_leak/\js/jquery-1.4.2.js"></script>
<script src="\conspiracy_leak/\js/jquery.sticky.js"></script>
 
 <script>
  $(document).ready(function(){
    $("#nav").sticky({topSpacing:0});
  });
</script>
<script>
  $(document).ready(function(){
    $(".navWrapper").sticky({topSpacing:0});
  });
</script>
 <script>
  $('#nav').on('sticky-start', function() { console.log("Started"); });
  $('#nav').on('sticky-end', function() { console.log("Ended"); });
  $('#nav').on('sticky-update', function() { console.log("Update"); });
  $('#nav').on('sticky-bottom-reached', function() { console.log("Bottom reached"); });
  $('#nav').on('sticky-bottom-unreached', function() { console.log("Bottom unreached"); });
</script>
  </HEAD>
  <!--- END OF CSS BITTTCHH!!!!!! ---->
   
 <?////BODY BODY BODY BODY BODY BODY BODY BODY\\\\?>
 <?////BODY BODY BODY BODY BODY BODY BODY BODY\\\\?>
 <?////BODY BODY BODY BODY BODY BODY BODY BODY\\\\?>
 <?////BODY BODY BODY BODY BODY BODY BODY BODY\\\\?>
	<BODY bgcolor=''>
 
		<DIV class='wrapper_out' >
		 
		   <DIV class='wrapper_in'>
		   
			<DIV class='headerTopBg' >	
 			<?///*** NAVIGATION DIV ****** NAVIGATION DIV ***\\\?>
			<?///*** NAVIGATION DIV ****** NAVIGATION DIV ***\\\?>
				<?php require_once("{$_SERVER['DOCUMENT_ROOT']}/conspiracy_leak/incl/header_login_form.php"); ?>
			<?///*** END OF  NAV DIV ****** END OF  NAV DIV ***\\\?>
			<?///*** END OF  NAV DIV ****** END OF  NAV DIV ***\\\?>
 			</DIV>
		   <DIV class='header'>
		   &nbsp;
			   <DIV id='headerBg'>
			    <DIV class='navWrapper'>
				<?///NAV NAV NAV\\\?>
				   <nav id='nav' title='Navigation Menu' >

					  <p id='cornerLogo' align='center' >
						<!---- CONTAINS THE CORNER LOGO IMAGE ----->
						<!---- CONTAINS THE CORNER LOGO IMAGE ----->
						&nbsp;
					  </p>
				 
			<?///*** NAVIGATION DIV ****** NAVIGATION DIV ***\\\?>
			<?///*** NAVIGATION DIV ****** NAVIGATION DIV ***\\\?>
				<?php require($_SERVER['DOCUMENT_ROOT']."conspiracy_leak/nav.php"); ?>
			 <?///***END OF NAVIGATION DIV ******END OF NAVIGATION DIV ***\\\?>
			 <?///***END OF NAVIGATION DIV ******END OF NAVIGATION DIV ***\\\?>
			 
			 </DIV><?//end of navwrapper?>
			 
			</DIV><?//end of headerbg?>			
		   </DIV><?//end of header?>
		  
		<DIV class='contBg'>
		
 		 <!--------FLASH FLASH FLASH FLASH ------------>
		 <!--------FLASH FLASH FLASH FLASH ------------>
		 <DIV id='flshBg' title='Flash_Logo' >
		  <?php include_once("{$_SERVER['DOCUMENT_ROOT']}conspiracy_leak/incl/flsh.php"); ?>
		   </DIV><?//end of flshBg?>
		 
	<hr />
   <h2> <span style='text-shadow: 1px 3px 5px #666;letter-spacing: 2px;padding-left:20px' > 
				 Member Pics 
 </span></h2>	
 <hr /> 

 <DIV id='tableMain' >
  <p align='center' valign='top' style='display:block; float:left;background:#eee;margin-right:10px;'>
   <img src='css/img/ico/Cool c4d.png' width='130px' alt='Pics' /> 
	</p>
   
	   <DIV id='pic_upl_form'>
		<form enctype="multipart/form-data" action=" " target=' ' method="POST" >
		 <input type="hidden" name="MAX_FILE_SIZE" value="1000000"/><!--bytes-->
		  <input type="hidden" name="user" value=" "/>
		   <input name="uploadedfile" type="file" required/><br><br>
		   <input type="submit" name="" value="Upload"></input>
		    <input type="reset" name="" value="Clear"></input>
		<br><br>
		
 
		 </form>
	    </DIV>
	<?///TABLE IN CONTENT SECTION\\\?> <?///TABLE IN CONTENT SECTION\\\?>
	<?///TABLE IN CONTENT SECTION\\\?> <?///TABLE IN CONTENT SECTION\\\?>
	     <table cellspacing='1' cellpadding='1' width='95%' cols='2' style='background:#ddd;text-align:justify;text-indent:5px;'>
			 
			 <tr align='center'>
			  <td colspan='100%' style='background:#ddd;'> 
			   <hr/>
			  </td>	
			 </tr>
			 <tr>
			  <th align='center' colspan='100%' style='background:#ddd;'>
				<span style='text-shadow: 1px 3px 5px #666;letter-spacing: 2px;padding-left:20px' > 
				 About You
				</span></h2>
			  </th>			

			 </tr>
			 <tr>
			  <td colspan='100%'style='background:#ddd;'style='border-bottom:1px dotted #999;'>  
			   <hr/>
			  </td>	

			 </tr>
			 <?///END OF TH CELL\\\?>
			 <tr>
			  <td align='center' colspan='100%' valign='center' style='background:888;' >
 
			       </tr>
	      <tr>
	     <th colspan='100%'>	
	    <br>
	   <center><b><font color='#999' size='5'>  Personal Info </font></b></center>
	  <br>
	 </th>		
	</tr>

   
 <?// ----MEMBER INFO------ ----MEMBER INFO------ ----MEMBER INFO------?>
 <?// ----MEMBER INFO------ ----MEMBER INFO------ ----MEMBER INFO------?>
	
	<!-------****** INPUT OF MEM_INFO SECTION *******------------>
	<!-------****** INPUT OF MEM_INFO SECTION *******------------>
	<!-------****** INPUT OF MEM_INFO SECTION *******------------>	  
	<form action=' ' method='POST' id=' '  > <!-- used 'ID' to edit <input... -->				    
 
	 <tr>
	  <td  align='center' >
		 My Favorite Game 
		 </td>
	    <td>
			<input type='text' size='30' name='mem_game' placeholder='Better Be 4 PC'  style='width: 100%;'   /> 
		   </td>
	   </tr>
		<tr>
	     <td>		
		My Favorite Music 
		 </td>
	    <td  >			
			<input type='text' size='30' name='mem_music' placeholder='Music you like'  style='width: 100%;'   /> 
		 </td>
	   </tr>
		<tr>
	     <td>			 
		 My Favorite Sport 
		 </td>
	    <td  >			
			<input type='text'  cols='2' size='50' name='mem_sport'  placeholder='Sports or Teams you like' style='width: 100%;'   /> 
		 </td>
	   </tr>
		<tr>
	     <td>			 
		 My Contact Info
		 </td>
	    <td >			
			<input type='phone' rows='4' cols='2' size=' ' name='mem_phone'  placeholder='*** *** ****' style='width: 100%;'   /> 
		 </td>
	   </tr>
		<tr>
	     <td>			 
		 My Email Address
		 </td>
	    <td >			
			<input type='email' rows='4' cols='2' size='50' name='mem_email'  placeholder='Email@you.com' style='width: 100%;'   /> 
		 </td>
	    <td>		     
	   </tr>
		<tr>
	     <td>	
		
		3 Words 2 Describe Me
		  </td>
	       <td >			
			<input type='text' name='short_info' value='' placeholder='Are you Outgoing, Narcistic, Troll' style='width: 90%;' size='50'   />
		  </td>
		 </tr>
 		 <tr>
		  <td colspan='100%' align='center' valign='center' >
		   <hr />
		    <script type='text/javascript'>
			  function showSocial(){
				  var showSoc = document.getElementById('mem_socials');
				  var toggl = showSoc.style.display != "block";
 				  showSoc.style.display = toggl ? "block" : "none";
				  
			  }
		   </script>
		    <center onClick='showSocial();' id='showInput'>
			 <label = 'My Social Networks' style=' width: auto; display:block; border: 2px inset #555; box-shadow: 1px 1px 4px black;' title='Add Link 2 your Page' ng-click='social_ul.show = true' ><b><strong> &nbsp;&nbsp;&nbsp;
			   Social Networks &nbsp;&nbsp;&nbsp;
			  </strong></b></label>
			   </center>
			   &nbsp;&nbsp; 
			   <br><br>
 			    <ul style='text-decoration:none;list-style:none;list-style-type:none;display:none;' id='mem_socials'> 
				 <!--- content: after is here, dont remove br tag ----><br>
  				  <li>  
					<img src='css/img/ico/facebook.png' alt='Facebook' width='10%' /></input><br>
						 <input type='url' size='100' name='social_url'    placeholder='Enter URL to your page'  /> <hr /></li> 
				  <li>
					<img src='css/img/ico/tumblr.png' alt='Tumblr' width='10%' /></input><br>
						 <input type='url' size='100'   name='social_url'    placeholder='Enter URL to your page'  /> <hr /></li> 
				  <li> 
					<img src='css/img/ico/twitter.png' alt='Twitter' width='10%' /></input><br>
						 <input type='url' size='100'   name='social_url' placeholder='Enter URL to your page'  /> <hr /></li> 
				  <li> 
					<img src='css/img/ico/reddit.png' alt='Reddit' width='10%'  /></input><br>
						 <input type='url' size='100'   name='social_url'  placeholder='Enter URL to your page'  /> <hr /></li> 
				  <li> 
					<img src='css/img/ico/youtube.png' alt='Youtube' width='10%'  /></input><br>
						 <input type='url' size='100'   name='social_url'  placeholder='Enter URL to your page'  /> <hr /></li> 					
				  <li> 
					<img src='css/img/ico/linkedin.png' alt='Linkedin' width='10%'  /> </input><br>
						 <input type='url' size='100'   name='social_url' placeholder='Enter URL to your page'  /> <hr /></li> 			
	   </ul>
 		
		<b>About Yourself</b>
		<br>&nbsp;&nbsp;&nbsp;
	
		  <textarea maxlength='400' title='Why makes you different?' name='long_info'  size='300' rows='3'  placeholder='Describe Yourself' style='width: 80%; '></textarea>
			<br>  
			<input type='submit' name='prof_up' value='Done' style='background:#ccc;border:1px dotted #555;'></input>
			<input type='reset' name='prof_rst' value='Clear' style='background:#ccc;border:1px dotted #555;'></input>
	    </form>
		
			 </td>
			</tr>	
			 <?///// MAIN TBODY CNT \\\\\?> <?///// MAIN TBODY CNT \\\\\?>
				 <tr> 
				  <td align='center' valign='center' >
				   <div class='vids'>
				    <ul>
					 <li></li>
					</ul>
				   </div>
				  </td>
				 </tr>
				<?/////END OF TBODY CNT\\\\\?>
			<tr>			 
			 <td colspan='100%'  style="text-align:justify;"> 
 
			 </p>
			</td>
		   </tr>
 
  	      </table>
		  
		 </DIV>
	   
	   </DIV><?//end of contentBg?>
 
	</DIV><?//end of wrapper_in?>

<?///footer section\\\?><?///footer section\\\?>
 	 <DIV class='footerBg' >	
   			&nbsp;
	</DIV>	
    <!---///help with SEO\\\---> 
   <time datetime="<?=date('M-D-Y')?>">&nbsp;</time> 
   </DIV><?//end of wrapper_out?>
 
   </BODY>
</HTML>