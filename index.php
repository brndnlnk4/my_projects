<!DOCTYPE html> 
<HTML lang='en-US'>

  <head>
	
 	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="content-type" content="text/html" />
	<meta http-equiv="content-type" content="cache" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="BrandonOsuji" />	
	<meta name="robots" content="INDEX,FOLLOW" />
	<meta name="keywords" content="" />
	<meta name="description" content="" /> 	
	
    <link rel='icon' href='css/icon.ico' /> 
	
	<script src='js/bootstrap.js' ></script>	
	<script src='js/jquery-1.11.3.min.js' ></script>
	<script src='js/jquery-ui.js' ></script>
	<script src='js/custom.js' ></script>   
 	<script src='js/jquery.easing.min.js' ></script>
    
	<link rel='stylesheet' type='text/css' href='css/bootstrap.css' />   
    <link rel='stylesheet' type='text/css' href='css/jquery-ui.css' />	
	<link rel='stylesheet' type='text/css' href='css/custom.css' />
  	 	 
	 <title>
		M8toM8	
	 </title>
	
	</head>
 
<body>

<div id='myModal2' class='modal modal1' >

 <div class='modal-content' style='min-height:250px;'>
   
   <span class='close' style='margin-bottom:10px;' onclick='closeModal2()' >
	 <button class='btn btn-danger'>X</button>
   </span>
   
 	 <h3 class='text-center'>
	  Send a Message 
	 </h3>
	  
 	   <?/// msg txtarea \\\?>
	    <form>
	     <div id='sndMsgModal' >	   
	      <textarea class='form-control input-sm' id='txtA' size='300' placeholder='Enter Message' ></textarea>
		   <center>
			<input type='button' onClick='sndMsg(document.getElementById("txtA").value,"<?='memId'?>")' class='btn btn-sm btn-default' value='Submit' style='width:10%;' />
			<input type='reset' class='btn btn-sm btn-default' value='Clear' style='width:10%;' />		  
		   </center>
		</div>
		</form> 
    
  </div>
</div>
 <span id='msgSntPopup' class='well well-sm' style='display:none;z-index:1500;background-color:rgba(167, 208, 244, 0.83);min-width:30%;position:fixed;top:25px;left:40%;right:auto;border:4px solid #777;border-radius:7px;box-shadow:0px 3px 5px #333;'>
 <h1 class='text-center lead'>
 <?/// jQry will insrt msg here \\\\?>
 </h1>
</span>   
   
 <?///////////////////////////////////////////////////////////////////////?>
 
 <?php include($_SERVER['DOCUMENT_ROOT']."/m8tom8/incl/picViewModal.php"); ?>
 
 <?///////////////////////////////////////////////////////////////////////?>


<?/// NAV \\\?>
	<?php require_once($_SERVER['DOCUMENT_ROOT']."/m8tom8/incl/nv.php"); ?>
<?/// END NAV \\\?>

<div class="wrapper2" >
 
<div class="wrapper" >
	
 <section class='content'>
  <div class='container' >
   <div class='row'>
    <div class='col-lg-1' ></div>
 	 <div class='col-lg-10'>
	  <div class='well' id='content1' >
 
 		
	
<?/// PROFILE  TBL \\\?><?/// PROFILE  TBL \\\?>	
<?/// PROFILE  TBL \\\?><?/// PROFILE  TBL \\\?>	
<?/// PROFILE  TBL \\\?><?/// PROFILE  TBL \\\?>	
<div class='table' id='mem_tbl'>
 <table class='table table-condensed table-responsive' width='100%' >
  <tbody>
   <tr>
    <th colspan='100%'>
	 <p align='center' style='font-size:170%;letter-spacing:1.4px;color:#888;'>
	   
		<?=ucfirst("Bob's")?> Profile	  
	   
	 </p>
	</th>
   </tr>
   <tr>
    <td colspan='100%%' style='background-color:rgba(245, 230, 230, 0.52)'>
    
	<?// PROFILE DEFAULT IMG \\?>	
	 <span class='pull-left' >
	  
	   <img src='/m8tom8/prof/upl/Brandon1.jpg' title='Default Picture' class='img-responsive img-rounded' width='140px' />
	  
     </span>

	 <?// MEM ZODIAC SYMBOL \\?>	
	 <span class='pull-right text-center well'>
	    
		<small>
		 <b>
		  <u>
		   My Horoscope
		  </u>
		  <br>
		 </b>
		  Zodiac Information goes here 
		  Zodiac Information goes here 
		</small>
		
	   <img src='/m8tom8/css/img/ren2.jpg' title='Members ZODIAC' class='img-responsive img-rounded' width='100px' />
 
		 <sub style='with:100%;font-weight:bold;background-color:rgba(0,0,0,0.06);padding:1px 4px;'>
		  Zodiac Name
		 </sub>
     </span>
 
	 
	   <?//PROFILE PROFILELERY\\?>
		<div id='profGal' >
		 <ul class='list-inline list-group'>
		  
		  <?//////LET LOOP PULL 5 PICS IF DFAULT PIC SET ELSE PULL 6\\\\\?>
		  <?//////LET LOOP PULL 5 PICS IF DFAULT PIC SET ELSE PULL 6\\\\\?>
		  
			  <li onclick='picModal(this.getElementsByTagName("img")[0].src,this.getElementsByTagName("img")[0].name)' class='list-group-item'>
			   <img src='/m8tom8/prof/upl/Brandon1.jpg' name='<?="id"?>' class='img-responsive img-rounded' width='80px' />
			    <sub>
				Comments: <?="45"?>
			    </sub>
				   <?//pic caption\\?>	
				   <small style='max-width:auto;border:1px solid #888;border-radius:7px;padding:3px 2px;background-color:#fff;position:absolute;height:auto;word-wrap:break-word;'>
					 pic caption information 
				   </small>			   
			  </li>
			  
			  <li onclick='picModal(this.getElementsByTagName("img")[0].src, this.getElementsByTagName("img")[0].name)' class='list-group-item'>
			   <img src='/m8tom8/prof/upl/Brandon2.jpg' name='<?="id"?>' class='img-responsive img-rounded' width='80px' />
			    <sub>
				Comments: <?="45"?>
			    </sub>
				   <?//pic caption\\?>	
				   <small style='max-width:auto;border:1px solid #888;border-radius:7px;padding:3px 2px;background-color:#fff;position:absolute;height:auto;word-wrap:break-word;'>
					 pic caption information 
				   </small>				  
			  </li>
			  
			  <li onclick='picModal(this.getElementsByTagName("img")[0].src, this.getElementsByTagName("img")[0].name)' class='list-group-item'>
			   <img src='/m8tom8/prof/upl/Brandon3.jpg' name='<?="id"?>' class='img-responsive img-rounded' width='80px' />
			    <sub>
				Comments: <?="45"?>
			    </sub>
				   <?//pic caption\\?>	
				   <small style='max-width:auto;border:1px solid #888;border-radius:7px;padding:3px 2px;background-color:#fff;position:absolute;height:auto;word-wrap:break-word;'>
					 pic caption information 
				   </small>				  
			  </li>
			  
			  <li onclick='picModal(this.getElementsByTagName("img")[0].src, this.getElementsByTagName("img")[0].name)' class='list-group-item'>
			   <img src='/m8tom8/prof/upl/Brandon4.jpg' name='<?="id"?>' class='img-responsive img-rounded' width='80px' />
			    <sub>
				Comments: <?="45"?>
			    </sub>
				   <?//pic caption\\?>	
				   <small style='max-width:auto;border:1px solid #888;border-radius:7px;padding:3px 2px;background-color:#fff;position:absolute;height:auto;word-wrap:break-word;'>
					 pic caption information 
				   </small>				  
			  </li>
			  
			  <li onclick='picModal(this.getElementsByTagName("img")[0].src, this.getElementsByTagName("img")[0].name)' class='list-group-item'>
			   <img src='/m8tom8/prof/upl/Brandon5.jpg' name='<?="id"?>' class='img-responsive img-rounded' width='80px' />
			    <sub>
				Comments: <?="45"?>
			    </sub>
				   <?//pic caption\\?>	
				   <small style='max-width:auto;border:1px solid #888;border-radius:7px;padding:3px 2px;background-color:#fff;position:absolute;height:auto;word-wrap:break-word;'>
					 pic caption information 
				   </small>				  
			  </li>		  

		 </ul>
		</div>
 	 </td> 
	</tr>
	<tr>
    <td colspan='' style='background-color:rgba(245, 230, 230, 0.12)'>
	  
	  <?/// MSG + FRIEND ICONS HERE \\\?>
	  <?/// MSG + FRIEND ICONS HERE \\\?>
	  <div class='center-block well text-center' id='msgLikeAddBtn' style='background-color:rgba(0,0,0,0.12);width:100%;' >
		<ul class='list-inline'>
		 <li>
		  <button type='button' class='btn btn-link btn-lg' onclick='msgModal()' >
		   <img src='/m8tom8/css/img/msg.png' title='Send Message' width='55px' />
		  </button>
		 </li>
		 <li>
		  <button id='likeBtn' type='button' class='btn btn-link btn-lg' onclick='likesMem("<?='0'?>","<?='exName'?>")'>
		   <img src='/m8tom8/css/img/like.png' title='Like' width='55px' />
		  </button>		  
		 </li>
		 <li>
		  <button id='addBtn' type='button' class='btn btn-link btn-lg' onclick='addM8("<?='0'?>","<?='exName'?>")'>
		   <img src='/m8tom8/css/img/add.png' title='Add Friend' width='55px' />
		  </button>		  
		 </li>
		</ul>
	  </div>
	  
 	</td>
   </tr>
   <tr>
	<td colspan='100%'>
 	 <div class='well well-sm' >
	  <div class='' >
	   <div class='table well well-lg text-center' style='padding:5px 9px;background-color:rgba(0,0,0,0.04);'>
		 
		<center style='font-size:140%;'>
			<h4 style='font-weight:bold;'>
			
			About <?=ucfirst("bob")?>  
			 
			</h4>		 
		</center>
		
		<table class='table table-responsive table-condensed' >
		 <tbody>
		  <tr style='background-color:rgba(0,0,0,0.03);'>
		   <th colspan='' class=' text-center'>
			 Ethnicity
		   </th>
		   <th colspan='' class=' text-center'>
			 Birthday
		   </th>
		   <th colspan='' class=' text-center'>
			 Location
		   </th>
		   <th colspan='' class=' text-center'>
			 Talents or Skills
		   </th>
		   <th colspan='' class=' text-center'>
			 Zodiac 
		   </th>
		   <th colspan='' class=' text-center'>
			M8 Preference
		   </th>
		  </tr>
		  <tr>
		   <td class=' text-center'>
		    Ethnicity go here
		   </td>		  
		   <td class=' text-center'>
		    Birthday go here
		   </td>
		   <td class=' text-center'>
		    Location go here
		   </td>
		   <td class=' text-center'>
		    Skills go here
		   </td>		  
		   <td class=' text-center'>
		    Zodiac Name go here
		   </td>
		   <td class=' text-center'>
		    M8 Preference go here
		   </td>
		  </tr>
		  <tr>
		   <th colspan='100%' class=' text-center' style='background-color:rgba(0,0,0,0.03);'>
		    <h4 style='font-weight:bold;font-size:120%;'>
			
			 Description of <?=ucfirst("bob")?>
			 
			</h4>
		   </th>
		  </tr>
		  <tr>
		   <td colspan='100%' class=' text-center' >
		    <p align='center' style='text-indent:8px;word-wrap:break-word;font-size:105%;color:#555;'>
			 About Information goes here About Information goes here About Information goes here About Information goes here
			 About Information goes here About Information goes here About Information goes here About Information goes here
			 About Information goes here About Information goes here About Information goes here About Information goes here
			</p>
		   </td>
		  </tr>
		 </tbody>
		</table>
		
	   </div>
	  </div>
	 </div>	
	

<?////////PROF CMTS AND PIC-VIEW MODAL\\\\\\\\\\\\\\\?>

	<?php include("incl/profCmts.php"); ?>

<?////////PROF CMTS AND PIC-VIEW MODAL\\\\\\\\\\\\\\\?>
 

	</td>
   </tr>
  </tbody>
 </table>
</div>
	   
		  
	  <?/// END OF PROFILE \\\?>
	  </div>
	 </div>
    <div class='col-lg-1' ></div>	 
   </div>
  </div>
 </section>
 
</div>
<?/// END OF WRAPPER \\\?>
	
</div>
<?/// END OF WRAPPER 2 \\\?>
  
</body>

<script>
var modal = document.getElementById('myModal1');
var modal2 = document.getElementById('myModal2');

	function picModal(imgSrc,imgId){
		var closeBtn = document.getElementsByClassName("close")[0];
		$('document').ready(function(){
		
		//	$.post('incl/.php', {imgId:imgId}, function(response){
 				
				$('#picEnl').attr('src',imgSrc);
				//$(modal).html(response);
					
				//})
			})
			
			modal.style.display = "block";
 
		window.onclick = function(e){
			if(e.target == modal){
				modal.style.display = "none";
 			}
		}
	}
	function closeModal(){
		modal.style.display = "none";
	}
	/////////////////////////////////////////
	function msgModal(){
		var closeBtn = document.getElementsByClassName("close")[1];
			modal2.style.display = "block";
 
		window.onclick = function(e){
			if(e.target == modal2){
				modal2.style.display = "none";
 			}
		}
	}
	function closeModal2(){
		modal2.style.display = "none";
	}
	///////////////////////////////////////
	function likesMem(memId,memName){
	//// IN PHP PROCESS: MAKE $SESSION ARRAY TO HOLD USRS SNT LIKES & UPDATE DB 'LIKE' COL
	//// IN PHP PROCESS: MAKE $SESSION ARRAY TO HOLD USRS SNT LIKES & UPDATE DB 'LIKE' COL
   //$.post('incl/.php', {likeMemId:memId,memName:memName}, function(){
		$('#msgSntPopup').fadeIn(10, function(){
		 $('#msgSntPopup h1').text('Successfully Liked '+memName+ '!');
 		  $('#likeBtn img').attr('src','/m8tom8/css/img/liked.png'); 
		   $('#msgSntPopup').fadeTo(1200,'.95',function(){
			$('#msgSntPopup').fadeOut(1000);
		   })	
 		})	
   // })
	}
	///////////////////////////////////////
	function addM8(memId,memName){
	//// IN PHP PROCESS: MAKE $SESSION ARRAY TO HOLD USRS FRND REQ & UPDATE DB 'FRND_REQ' COL
	//// IN PHP PROCESS: MAKE $SESSION ARRAY TO HOLD USRS FRND REQ & UPDATE DB 'FRND_REQ' COL
    //$.post('incl/.php', {addMemId:memId,memName:memName}, function(){
		$('#msgSntPopup').fadeIn(10, function(){
		 $('#msgSntPopup h1').text('Friend Request Sent to '+memName);
 		   $('#msgSntPopup').fadeTo(1000,'.95',function(){
			$('#msgSntPopup').fadeOut(500);
 		    $('#addBtn img').attr('src','/m8tom8/css/img/adding.png'); 			
		   })	
 		})	
   // })
	}	
	///////////////////////////////////////
	function sndMsg(msg,memId){
   //$.post('incl/.php', {msg:msg,memId,memId}, function(response){
	  //if(response == ''){		
		if($.trim(msg) !== ''){
 			$('#msgSntPopup').fadeIn(10, function(){
			 $('#msgSntPopup h1').text('Message Sent!');
			  $(modal2).fadeOut(500,function(){
			   $('#msgSntPopup').fadeTo(1000,'.95',function(){
 				$('#msgSntPopup').fadeOut(500);
			   })	
			  })
			})			
		}else if($.trim(msg) == ''){
			$('#msgSntPopup').fadeIn(10, function(){
				$('#msgSntPopup h1').text("Please Enter a Message");
				  $('#msgSntPopup').fadeTo(1000,'.95',function(){
					$('#msgSntPopup').fadeOut(500);
				  })	
			})
		 }
	   //}
	//})				
	}
</script>
</html>