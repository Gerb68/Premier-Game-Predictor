<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
//connect to the database using the db_connect link
require_once("db_connect.php");

//connect to the premier_league table
$db_link = db_connect("premier_league");
$self = $_SERVER['PHP_SELF'];
?>
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
	<title>Contact</title>
		
	<link href="css/styles.css" rel="stylesheet"/>
	<link href="css/start/jquery-ui-1.9.1.custom.css" rel="stylesheet"/>
	<link href="css/naviStyle.css" rel="stylesheet"/>	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script> <!---------------------------- causing issues with 1.9.1 --------------->	
	<script type="text/javascript" src="js/jquery-ui-1.9.1.custom.js"></script>
	<script type="text/javascript" src="js/jquery-ui-1.9.1.custom.min.js"></script>	
	<script type="text/javascript" src="js/jquery.imagecube.js"></script>	
	<script type="text/javascript" src="js/button_script.js"></script>
	
	<script type="text/javascript">
	$(function () {
	$('#basicCube').imagecube();
	});
	</script>
       
 <!------------------------------------------------------------------------------------------>   
 </head>

 <body>
   <div class="bluebg" > 
       
     <div id="basicCube">
		<img src="images/icons/evertonIcon.png" alt="evertonIcon" title="evertonIcon"/>
		<img src="images/icons/manutdIcon.png" alt="manutdIcon"title="manutdIcon"/>
		<img src="images/icons/mancityIcon.png" alt="mancityIcon" title="mancityIcon"/>
		<img src="images/icons/fulhamIcon.png" alt="fulhamIcon" title="fulhamIcon"/>
		<img src="images/icons/liverpoolIcon.png" alt="liverpoolIcon" title="liverpoolIcon"/>
		<img src="images/icons/readingIcon.png" alt="readingIcon" title="readingIcon"/>
		<img src="images/icons/swanseaIcon.png" alt="swanseaIcon" title="swanseaIcon"/>
		<img src="images/icons/westhamIcon.png" alt="westhamIcon" title="westhamIcon"/>		
		<img src="images/icons/chelseaIcon.png" alt="chelseaIcon" title="chelseaIcon"/>
		<img src="images/icons/astonvillaIcon.png" alt="astonvillaIcon"title="astonvillaIcon"/>
		<img src="images/icons/newcastleIcon.png" alt="newcastleIcon" title="newcastleIcon"/>
		<img src="images/icons/norwichIcon.png" alt="norwichIcon" title="norwichIcon"/>
		<img src="images/icons/stokeIcon.png" alt="stokeIcon" title="stokeIcon"/>
		<img src="images/icons/spursIcon.png" alt="spursIcon" title="spursIcon"/>
		<img src="images/icons/sunderlandIcon.png" alt="sunderlandIcon" title="sunderlandIcon"/>
		<img src="images/icons/westbromIcon.png" alt="westbromIcon" title="westbromIcon"/>		
		<img src="images/icons/qprIcon.png" alt="qprIcon" title="qprIcon"/>
		<img src="images/icons/arsenalIcon.png" alt="arsenalIcon" title="arsenalIcon"/>
		<img src="images/icons/wiganIcon.png" alt="wiganIcon" title="wiganIcon"/>
		<img src="images/icons/southamptonIcon.png" alt="southamptonIcon" title="southamptonIcon"/>
	 </div> 
    
      <div id="rightHeader" align="center">
    	<img src="images/ball.gif" alt="ball." /><br/>
    	<a href="login.php"><i>Administrator Login</i></a>    	
     </div> 
     
     <div id="titleHeader">          
        <center><h1>Premier Game Predictor</h1></center>  
     </div>     
   </div><!-- End bluebg -->
 
    <!--------------------------------------------- Navi Bar Buttonset --------------------------------------->
	<div id="navbar">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="news.php">News</a></li>
			<li><a href="gallery.php">Gallery</a></li>
			<li><a href="contact.php">Contact</a></li>
		</ul>
	</div>
	<!--------------------------------------------------------------------------------------------------------->
  
    <div class="bluebg" style="margin-top:20px">

    <!---------------------------------------------- Navi Bar Game set ----------------------------------------->
		<div id="radio" align="center" style="margin-top:-34px">
		  <input type="radio" id="radio1" name="radio" /><label for="radio1"><a href="game1.php">		  
		  <?php
		  $queryLabel1h = mysql_query("SELECT team_name_small FROM elo_rating WHERE game_number='1h'");
    	  $resultLabel1h = mysql_fetch_assoc($queryLabel1h);
    	  $teamA_label1h = $resultLabel1h['team_name_small'];
    	  
    	  $queryLabel1a = mysql_query("SELECT team_name_small FROM elo_rating WHERE game_number='1a'");
    	  $resultLabel1a = mysql_fetch_assoc($queryLabel1a);
    	  $teamB_label1a = $resultLabel1a['team_name_small'];
    	  echo $teamA_label1h." v ".$teamB_label1a;  
    	  ?> </a></label>
    	  
		  <input type="radio" id="radio2" name="radio" /><label for="radio2"><a href="game2.php">
		  <?php
		  $queryLabel2h = mysql_query("SELECT team_name_small FROM elo_rating WHERE game_number='2h'");
    	  $resultLabel2h = mysql_fetch_assoc($queryLabel2h);
    	  $teamA_label2h = $resultLabel2h['team_name_small'];
    	  
    	  $queryLabel2a = mysql_query("SELECT team_name_small FROM elo_rating WHERE game_number='2a'");
    	  $resultLabel2a = mysql_fetch_assoc($queryLabel2a);
    	  $teamB_label2a = $resultLabel2a['team_name_small'];
    	  echo $teamA_label2h." v ".$teamB_label2a;  
    	  ?></a></label>
    	  
		  <input type="radio" id="radio3" name="radio" /><label for="radio3"><a href="game3.php">
		  <?php
		  $queryLabel3h = mysql_query("SELECT team_name_small FROM elo_rating WHERE game_number='3h'");
    	  $resultLabel3h = mysql_fetch_assoc($queryLabel3h);
    	  $teamA_label3h = $resultLabel3h['team_name_small'];
    	  
    	  $queryLabel3a = mysql_query("SELECT team_name_small FROM elo_rating WHERE game_number='3a'");
    	  $resultLabel3a = mysql_fetch_assoc($queryLabel3a);
    	  $teamB_label3a = $resultLabel3a['team_name_small'];
    	  echo $teamA_label3h." v ".$teamB_label3a;  
    	  ?></a></label>
		  
		  <input type="radio" id="radio4" name="radio" /><label for="radio4"><a href="game4.php">		  
		  <?php
		  $queryLabel4h = mysql_query("SELECT team_name_small FROM elo_rating WHERE game_number='4h'");
    	  $resultLabel4h = mysql_fetch_assoc($queryLabel4h);
    	  $teamA_label4h = $resultLabel4h['team_name_small'];
    	  
    	  $queryLabel4a = mysql_query("SELECT team_name_small FROM elo_rating WHERE game_number='4a'");
    	  $resultLabel4a = mysql_fetch_assoc($queryLabel4a);
    	  $teamB_label4a = $resultLabel4a['team_name_small'];
    	  echo $teamA_label4h." v ".$teamB_label4a;  
    	  ?></a></label>
		  
		  <input type="radio" id="radio5" name="radio" /><label for="radio5"><a href="game5.php">		  
		  <?php
		  $queryLabel5h = mysql_query("SELECT team_name_small FROM elo_rating WHERE game_number='5h'");
    	  $resultLabel5h = mysql_fetch_assoc($queryLabel5h);
    	  $teamA_label5h = $resultLabel5h['team_name_small'];
    	  
    	  $queryLabel5a = mysql_query("SELECT team_name_small FROM elo_rating WHERE game_number='5a'");
    	  $resultLabel5a = mysql_fetch_assoc($queryLabel5a);
    	  $teamB_label5a = $resultLabel5a['team_name_small'];
    	  echo $teamA_label5h." v ".$teamB_label5a;  
    	  ?></a></label>
		  
		  <input type="radio" id="radio6" name="radio" /><label for="radio6"><a href="game6.php">		  
		  <?php
		  $queryLabel6h = mysql_query("SELECT team_name_small FROM elo_rating WHERE game_number='6h'");
    	  $resultLabel6h = mysql_fetch_assoc($queryLabel6h);
    	  $teamA_label6h = $resultLabel6h['team_name_small'];
    	  
    	  $queryLabel6a = mysql_query("SELECT team_name_small FROM elo_rating WHERE game_number='6a'");
    	  $resultLabel6a = mysql_fetch_assoc($queryLabel6a);
    	  $teamB_label6a = $resultLabel6a['team_name_small'];
    	  echo $teamA_label6h." v ".$teamB_label6a;  
    	  ?></a></label>
		  
		  <input type="radio" id="radio7" name="radio" /><label for="radio7"><a href="game7.php">		  
		  <?php
		  $queryLabel7h = mysql_query("SELECT team_name_small FROM elo_rating WHERE game_number='7h'");
    	  $resultLabel7h = mysql_fetch_assoc($queryLabel7h);
    	  $teamA_label7h = $resultLabel7h['team_name_small'];
    	  
    	  $queryLabel7a = mysql_query("SELECT team_name_small FROM elo_rating WHERE game_number='7a'");
    	  $resultLabel7a = mysql_fetch_assoc($queryLabel7a);
    	  $teamB_label7a = $resultLabel7a['team_name_small'];
    	  echo $teamA_label7h." v ".$teamB_label7a;  
    	  ?></a></label>
		  
		  <input type="radio" id="radio8" name="radio" /><label for="radio8"><a href="game8.php">		  
		  <?php
		  $queryLabel8h = mysql_query("SELECT team_name_small FROM elo_rating WHERE game_number='8h'");
    	  $resultLabel8h = mysql_fetch_assoc($queryLabel8h);
    	  $teamA_label8h = $resultLabel8h['team_name_small'];
    	  
    	  $queryLabel8a = mysql_query("SELECT team_name_small FROM elo_rating WHERE game_number='8a'");
    	  $resultLabel8a = mysql_fetch_assoc($queryLabel8a);
    	  $teamB_label8a = $resultLabel8a['team_name_small'];
    	  echo $teamA_label8h." v ".$teamB_label8a;  
    	  ?></a></label>
		  
		  <input type="radio" id="radio9" name="radio" /><label for="radio9"><a href="game9.php">		  
		  <?php
		  $queryLabel9h = mysql_query("SELECT team_name_small FROM elo_rating WHERE game_number='9h'");
    	  $resultLabel9h = mysql_fetch_assoc($queryLabel9h);
    	  $teamA_label9h = $resultLabel9h['team_name_small'];
    	  
    	  $queryLabel9a = mysql_query("SELECT team_name_small FROM elo_rating WHERE game_number='9a'");
    	  $resultLabel9a = mysql_fetch_assoc($queryLabel9a);
    	  $teamB_label9a = $resultLabel9a['team_name_small'];
    	  echo $teamA_label9h." v ".$teamB_label9a;  
    	  ?></a></label>
		  
		  <input type="radio" id="radio10" name="radio" /><label for="radio10"><a href="game10.php">		  
		  <?php
		  $queryLabel10h = mysql_query("SELECT team_name_small FROM elo_rating WHERE game_number='10h'");
    	  $resultLabel10h = mysql_fetch_assoc($queryLabel10h);
    	  $teamA_label10h = $resultLabel10h['team_name_small'];
    	  
    	  $queryLabel10a = mysql_query("SELECT team_name_small FROM elo_rating WHERE game_number='10a'");
    	  $resultLabel10a = mysql_fetch_assoc($queryLabel10a);
    	  $teamB_label10a = $resultLabel10a['team_name_small'];
    	  echo $teamA_label10h." v ".$teamB_label10a;  
    	  ?></a></label>
		</div>
	<!--------------------------------------------------------------------------------------------------------->
 	

  		<div  align="center">      
 
 		 	        <h2>Contact information</h2>
		<div>
				<p>
					<img src="images/wink.gif"  width="200px" height="100px"/>
				</p>
		</div>	
				
		
		<div >
				<p>
					<table style="width:60%">
					<tr>
					<td class="contactText">
						Email Adrian Jebb at:
					</td> 
					<td style="text-align:center">
						<a href="mailto:B00045428@student.itb.ie">B00045428@student.itb.ie</a></td>					
					</tr>
					
					<tr>
					<td class="contactText">
						Email Gerard Byrne at:
					</td> 
					<td style="text-align:center">
						<a href="mailto:B00045428@student.itb.ie">B00045428@student.itb.ie</a></td>					
					</tr>

					<tr>
					<td class="contactText">
						Email Jim Smith at:
					</td> 
					<td style="text-align:center">
						<a href="mailto:B00045428@student.itb.ie">B00045428@student.itb.ie</a></td>					
					</tr>

					
					<tr>
					<td colspan="2" bgcolor="aqua">
						Institute of Technology Blanchardstown,<br/>
						Blanchardstown Road North,<br/>
						Dublin 15
					</td>
					</tr>

					<tr>
					<td class="contactText">
						Tel: 
					</td>
					<td style="text-align:aqua">
						+353 (1) 8851000
					</td>
					</tr>
 
					<tr> 
					<td class="contactText" bgcolor="aqua">
						Fax:
					</td>
					<td style="text-align:center" bgcolor="aqua"> 
						+353 (1) 8851001
					</td>
					</tr>
					
					<tr>
					<td class="contactText">
						Email ITB at:
					</td>
					<td  style="text-align:center">
						<a href="mailto:info@itb.ie">info@itb.ie</a>
					</td>
					</tr>
					</table>					
				</p>
			</div>
 			
  </div><!-- end of maincontent -->
  	
    <div id="footer">
      &copy;itb 2013 Adrian Jebb, Gerard Byrne & Jim Smith <a href="mailto:B00045428@student.itb.ie">B00045428@student.itb.ie</a>
    </div>    
    
 </div>	<!--div for bluebg main -->
</body>
</html>
