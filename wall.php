	<!DOCTYPE html> 
	<HTML lang='en-US'>
	 <HEAD>
  <?php include_once($_SERVER['DOCUMENT_ROOT']."/conspiracy_leak/incl/login_process.php");  ?>
  <?php	require_once($_SERVER['DOCUMENT_ROOT']."/conspiracy_leak/ses.php"); ?>
  <?php	require_once($_SERVER['DOCUMENT_ROOT']."/conspiracy_leak/incl/fn.php"); ?>	 
	<?php ///////////////////////////////////////////
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
						$file_destination = $_SERVER['DOCUMENT_ROOT']."/conspiracy_leak/img/prof_pics/".$file_name_new;

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
					<?php require($_SERVER['DOCUMENT_ROOT']."/conspiracy_leak/nav.php"); ?>
				 <?///***END OF NAVIGATION DIV ******END OF NAVIGATION DIV ***\\\?>
				 <?///***END OF NAVIGATION DIV ******END OF NAVIGATION DIV ***\\\?>
				 
				 </DIV><?//end of navwrapper?>
				 
				</DIV><?//end of headerbg?>			
			   </DIV><?//end of header?>
			  
			<DIV class='contBg'>
			
			 <!--------FLASH FLASH FLASH FLASH ------------>
			 <!--------FLASH FLASH FLASH FLASH ------------>
			 <DIV id='flshBg' title='Flash_Logo' >
			  <?php include_once("{$_SERVER['DOCUMENT_ROOT']}/conspiracy_leak/incl/flsh.php"); ?>
			   </DIV><?//end of flshBg?>
			 
		<hr />
 

 <DIV id='tableMain' >
 <div style='text-shadow: 1px 3px 5px #666;letter-spacing: 2px;padding-left:20px' > 
		<h2><center>
		 Wall Posts
		</center></h2>
	   </div>
 <center>
	<table rows=' ' width=' ' cellpadding='0' cellspacing='1' >
	 <tr>	
	  <form action= '' method='POST' width='100%'  >
	   <td colspan='100%' rowspan='' >  
		<br>


		   
		   <!----- TEXT - AREA ------> <!----- TEXT - AREA ------> <!----- TEXT - AREA ------>
		   <!----- TEXT - AREA ------> <!----- TEXT - AREA ------> <!----- TEXT - AREA ------>
	
	<?////// USE ANGULARjs HERE \\\\\\\\\////// USE ANGULARjs HERE \\\\\\\\\?>
	<?////// USE ANGULARjs HERE \\\\\\\\\////// USE ANGULARjs HERE \\\\\\\\\?>
	<?////// USE ANGULARjs HERE \\\\\\\\\////// USE ANGULARjs HERE \\\\\\\\\?>
 
	<div  >
	  <div class=' '  >
	   <center>
	    <textarea maxlength='400' name='krew_wall' title='Enter Your Post' id=' ' size='300' rows='6' cols='100%' placeholder=' ' ng-model='inputPreview' ng-mouseover='angWallPost = !angWallPost' ng-click='angWallPost = true'></textarea>	
	   </center>
	   
		 <div id=' '  style='width:40%; margin-top: 5px; margin-bottom: 5px; margin-left: auto; margin-right: auto; background-color: #bbb;  '>
		  <input type='submit'  name='' value='Submit Post' placeholder='' style='display: block; margin: 0 10px; padding:2%; background-color: #eee; border:1px solid #bbb; float: left; clear: both;' />
		  <input type='reset'  name='' value='Clear' placeholder='' style='display: block; margin: 0 auto; padding:2%; background-color: #eee; border:1px solid #bbb; float: left;'  />
		  
		</div>  
	</div>
</div>

 <!--- END OF DIV--->	<!--- END OF DIV--->	<!--- END OF DIV--->
	
	</td>	
	</form>

	<?////// POSTS DISPLAYED IN POST-BOX POSTS DISPLAYED IN POST-BOX POSTS DISPLAYED IN POST-BOX\\\\?>
	<?////// POSTS DISPLAYED IN POST-BOX POSTS DISPLAYED IN POST-BOX POSTS DISPLAYED IN POST-BOX\\\\?>
	 </tr><tr> <!---TR2----->
	  <td class=' ' colspan='1' align='center' valign='top'>
		 <th width='' colspan='100%'>
		 <hr /> 
		  <?=DUMMY_TXT?>
 		 </th>
	  </td>
     </tr><tr > 
 	 
	 <?//////THIS IS WALL POST\\\\\\\\?>
	 <?//////THIS IS WALL POST\\\\\\\\?>

	 <td rowspan='1' colspan='100%' > 
	 
	  <div class=' '>
	   <!---POST BOX POSTS ---->
	 <hr /> 
		 	 <center>
			   <?=DUMMY_TXT?>
			 </center>
	<?//////END OF WALL POST\\\\\\\?>  
	<?//////END OF WALL POST\\\\\\\?>  
	<?//////END OF WALL POST\\\\\\\?>  
				  			
	  </div> 					
 	  	
	</td>	
  </table>
 </center>			  
			 </DIV>
		   
		   </DIV><?//end of contentBg?>
	 
		</DIV><?//end of wrapper_in?>

	<?///footer section\\\?><?///footer section\\\?>
		 <DIV class='footerBg' >	
				&nbsp;
		</DIV>	
 
	   </DIV><?//end of wrapper_out?>
	 
	   </BODY>
	</HTML>