	<!DOCTYPE html> 
	<HTML lang='en-US'>
	 <HEAD>
  <?php include_once($_SERVER['DOCUMENT_ROOT']."/conspiracy_leak/incl/login_process.php");  ?>
  <?php	require_once($_SERVER['DOCUMENT_ROOT']."/conspiracy_leak/ses.php"); ?>
  <?php	require_once($_SERVER['DOCUMENT_ROOT']."/conspiracy_leak/incl/fn.php"); ?>	 

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
	  <link rel='stylesheet' type='text/css' href='\conspiracy_leak\css/membr_style.css' />
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
	

	 <DIV id='tableMain' style='max-height:500px;overflow:none;overflow-Y:scroll;'>
	  <div style='text-shadow: 1px 3px 5px #666;letter-spacing: 2px;padding-left:20px' > 
		 <strong><h2>Current Members</h2></strong>
	 </div> 
	  <?/////// MEMBERS LIST VIEW TABLE \\\\\\\\\\\\\\?>
	  <?/////// MEMBERS LIST VIEW TABLE \\\\\\\\\\\\\\?>
  <script type='text/javascript'>
   function showList(){
	   var memList = document.getElementById('mem_list');
	   memList.style.display = 'block';
   }
  </script>
	  <?php /////Hides mem_list if user is viewing mem_profile\\\\\\\
		if(isset($_GET[md5('p')])){
			 echo "<br>";
			 echo "<center id=\"mem_list_xpand\" onclick=\"showList()\" style=\"border:4px solid #bbb;\"><span><b>Members List</b></span></center>";
			}
		?>
	  <div id='mem_list' style='display:
	   <?php 
	    if(isset($_GET[md5('p')])){
		 echo "none;'	>";
		} else{
		  echo "block;'	>";
		}
		?>
	
		<table cellspacing='1' cellpadding='0' width='95%' align='center'  style='background:#eee;margin:0 auto;'>
		 <tr >
		  <th colspan='10%'>
		   <br>
			<b>Members</b>
		  </th>
		  <th colspan='40%'>
		   <br>
			<b>Account_Status</b>
		  </th>
		  <th colspan='10%'>
		   <br>
			<b>Social_Link</b>
		  </th>
		  <th colspan='5%'>
		   <br>
			<b>Contact</b>
		  </th>
		 </tr>
		<hr />
		
	<?php ////////////MEMBER PROFILE ROWS\\\\\\\\\\\\\\\\\
	 include("incl/member_row.php");
	 include("incl/member_row.php");
	 include("incl/member_row.php");
	 include("incl/member_row.php");
	 include("incl/member_row.php");
	 include("incl/member_row.php");
	 include("incl/member_row.php");
	 include("incl/member_row.php");
	 include("incl/member_row.php");
	?>
		 
		</table>
	  </div> 
		<?///TABLE IN CONTENT SECTION\\\?> <?///TABLE IN CONTENT SECTION\\\?>
		<?///TABLE IN CONTENT SECTION\\\?> <?///TABLE IN CONTENT SECTION\\\?>
			<?php  /////CHECK IF GET ISSET\\\\\
			 //$p = md5('p');
			  if(isset($_GET[md5('p')])){
				  ?>
				   <table cellspacing='1' cellpadding='1' width='95%' cols='2' style='background:#ddd;text-align:justify;text-indent:5px;'>
				 
				 <tr align='center'>
				  <td colspan='100%' style='background:#ddd;'> 
				    
				   <hr/>
				  </td>	
				 </tr>
				 <tr>
				  <th align='center' colspan='100%' style='background:#ddd;'>
					<span style='text-shadow: 1px 3px 5px #666;letter-spacing: 2px;padding-left:20px' > 
					 Member Profile
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
		   <center><b><font color='#999' size='5'> Ex_names Profile</font></b></center>
		  <br>
		 </th>		
		</tr>

	   
	 <?// ----MEMBER INFO------ ----MEMBER INFO------ ----MEMBER INFO------?>
	 <?// ----MEMBER INFO------ ----MEMBER INFO------ ----MEMBER INFO------?>
 
	    <?///////MEMBER_PROFILE_VIEW\\\\\\\\\?>
	    <?///////MEMBER_PROFILE_VIEW\\\\\\\\\?>
	    <?///////MEMBER_PROFILE_VIEW\\\\\\\\\?>
		 <tr>
		  <td  align='center' colspan='100%'>
		   <hr />
		    <br>
			 </td>
			</tr>
			
			<!---- PROFILE_VIEW_SECTION ------>	<!---- PROFILE_VIEW_SECTION ------>
			
			<tr><!--- MEMBER PROFILE PHOTO SECTION ---->
			 <td colspan='10%' style='border:1px dotted #888;box-shadow:0px 1px 4px #888;padding:3%;background:#eee;position:absolute;top:auto;display:block;float:left;clear:both;'>
			  <sup>Profile Photo</sup>
			   <br>
			    <img src='css/img/ico/ren4.jpg' alt='Photo' width='90px' />
			 </td> &nbsp;&nbsp;&nbsp;&nbsp;</td>
			 <td colspan='60%' align='center'>  
			  <div id='mem_gallery' style='background:#eee;' >
			   <ul>
			    <li style='border-right:1px solid #888;border-bottom:1px solid #888;border-top:1px solid #888;'> <!--- MEMBER PHOTO GALLERY SECTION ----->
				 <img src='css/img/ico/ren1.jpg' alt='Photos' width='90px' />
				 <img src='css/img/ico/ren2.jpg' alt='Photos' width='90px' />
				 <img src='css/img/ico/ren3.jpg' alt='Photos' width='90px' />
				 <img src='css/img/ico/ren4.jpg' alt='Photos' width='90px' />
				 <img src='css/img/ico/ren5.jpg' alt='Photos' width='90px' />
				 <img src='css/img/ico/ren6.jpg' alt='Photos' width='90px' />
			    </li>
			   </ul>
			  </div>
			 </td>
			 </tr>
			 
			 <tr>
			 <td colspan='100%' >
			  <hr />
			   <p align='center' valign='center' >
			    <h3>
				 <b style='border-bottom:1px dotted #bbb;'>About Ex_name</b></h3>
				  <br>
				  <?=DUMMY_TXT?>
			   </p>
			 </td>
			</tr>	
			
			 <tr>
			 <td colspan='100%' >
			  <hr />
			   <p align='center' valign='center' >
			    <h3><b style='border-bottom:1px dotted #bbb;'>My Hobbies</b></h3>
				 <br>
				  <ul>
				   <li>My Favorite Game: Ex_game</li>
				   <li>My Favorite Music: Ex_music</li>
				   <li>My Favorite Sports: Ex_sports</li>
				   <li>My Contact Info: Ex_email</li>
				   <li>Brief Description: Words to descrbe me</li>
				  </ul>
			   </p>
			  <hr />
			 </td>
			</tr>	
			 <tr>
			 <td colspan='25%' align='center'>
			  <p align='center' valign='center' >
			   <b style='border-bottom:1px dotted #bbb;'>
			    <h2 style='background:#ccc;'> Find me on: </h2>
			   </b>
			 </td>
			</tr>
			<tr  style='background:#ccc;'>
			 <td colspan='3'  style='background:#ccc;'>
			  <p align='center' valign='center' style='width:95%;display:inline;float:left;clear:both;margin:0 15px;' >
			   <br>
			    <a href='' target='_self' alt='Contacts' ><img src='css/img/ico/myspace.png' alt='Contact_Links' width='30px' /></a>
			    <a href='' target='_self' alt='Contacts' ><img src='css/img/ico/google.png' alt='Contact_Links' width='30px' /></a>
			    <a href='' target='_self' alt='Contacts' ><img src='css/img/ico/tumblr.png' alt='Contact_Links' width='30px' /></a>
			    <a href='' target='_self' alt='Contacts' ><img src='css/img/ico/twitter.png' alt='Contact_Links' width='30px' /></a>
			    <a href='' target='_self' alt='Contacts' ><img src='css/img/ico/facebook.png' alt='Contact_Links' width='30px' /></a>
			    <a href='' target='_self' alt='Contacts' ><img src='css/img/ico/friendfeed.png' alt='Contact_Links' width='30px' /></a>
			    <a href='' target='_self' alt='Contacts' ><img src='css/img/ico/yahoo.png' alt='Contact_Links' width='30px' /></a>
			  </p>
		   
			 </td>
			 <td colspan='2' style='background:#ccc;'>
			 	<p align='right' >
				 <center>
		 		  <text align='right' style='display:inline;padding-right:0;margin-right:0;text-align:right;'>Last-Online: <?=date('M:H')?></text>
				 </center>
				</p>
			  <br>
			 </td>
			 <td align='left'  style='background:#ccc;'>
			  <img src='css/img/ico/icon_contact.png' alt='Message Me' width='40px' /> 
				<br>
			 </td>
			</tr>	 
				<?/////END OF TBODY CNT\\\\\?>
				<?/////END OF TBODY CNT\\\\\?>
			<tr>			 
			
			 <td colspan='100%'  style="text-align:justify;"> 
 
	 
			</td>
		   </tr>
 
		  </table>
			<?php
			  } else{
				  
			  }
			 ?>
		  
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