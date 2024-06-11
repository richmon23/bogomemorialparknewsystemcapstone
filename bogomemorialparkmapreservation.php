
<?php
	require 'connection.php';
	session_start();
	


// Prepare and execute SQL statement to fetch data for the given ID
$stmt = $conn->prepare("SELECT * FROM deceasedperson WHERE id=:id");

$row = $stmt->fetch(PDO::FETCH_ASSOC);

// Close the database connection
$pdo = null;
	
	
?>

<html>
	<head>
	<title>Bogo Memorial Park Map Reservation</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="./css/map.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	</head>
	<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
		<nav>
			<div class="w3-bar w3-border w3-card-1 w3-teal">
			<a href="#" class="w3-bar-item w3-button">Review</a>
			<a href="userlandingpage.php" class="w3-bar-item w3-button">Logout</a>
			</div>
		</nav>

		<div class="container">
			<!--Deceased Person Data Available and not Available Block-->
			<!-- Save for Web Slices (Bogo Memorial Park Map Photoshop.psd) -->
			<table id="Table_01" width="802" height="573" border="0" cellpadding="0" cellspacing="0">
				<tr>
					<td colspan="62">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_01.jpg" width="801" height="46" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="46" alt=""></td>
				</tr>
				<!-- FAMILY STATE -->
				<tr>
					<td rowspan="82">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_02.jpg" width="34" height="526" alt=""></td>
					<td rowspan="2">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:51; height:32; font-size:8px" class="w3-blue"alt="FAMILY STATE PLOT 1" name="familystateplot1">1</button></a></td>
					<td colspan="60">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_04.jpg" width="716" height="2" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="2" alt=""></td>
				</tr>
				<tr>
					<td colspan="58" rowspan="9">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_05.jpg" width="629" height="78" alt=""></td>
					<td rowspan="2">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:51; height:32; font-size:8px" class="w3-blue"alt="FAMILY STATE PLOT 15" name="familystateplot15">15</button></a></td>
					<td rowspan="81">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_07.jpg" width="36" height="524" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="30" alt=""></td>
				</tr>
				<tr>
					<td rowspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_08.jpg" width="51" height="4" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="2" alt=""></td>
				</tr>
				<tr>
					<td rowspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_09.jpg" width="51" height="4" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="2" alt=""></td>
				</tr>
				<tr>
					<td rowspan="2">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:51; height:32; font-size:8px" class="w3-blue"alt="FAMILY STATE PLOT 2" name="familystateplot2">2</button></a></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="2" alt=""></td>
				</tr>
				<tr>
					<td rowspan="2">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:51; height:32; font-size:8px" class="w3-blue"alt="FAMILY STATE PLOT 16" name="familystateplot16">16</button></a></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="30" alt=""></td>
				</tr>
				<tr>
					<td rowspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_12.jpg" width="51" height="5" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="2" alt=""></td>
				</tr>
				<tr>
					<td rowspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_13.jpg" width="51" height="5" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="3" alt=""></td>
				</tr>
				<tr>
					<td rowspan="6">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:51; height:32; font-size:8px" class="w3-blue"alt="FAMILY STATE PLOT 3" name="familystateplot3">3</button></a></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="2" alt=""></td>
				</tr>
				<tr>
					<td rowspan="6">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:51; height:32; font-size:8px" class="w3-blue"alt="FAMILY STATE PLOT 17" name="familystateplot17">17</button></a></td>
					<td>
						<img src="images/spacer.gif" width="1" height="5" alt=""></td>
				</tr>
				<tr>
					<!-- *********** BLOCK 1  ****************--> 

					<td colspan="25">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_16.jpg" width="377" height="1" alt=""></td>
					<td colspan="3" rowspan="2">
					<button onclick="document.getElementById('id01').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-black"alt="BLOCK 1 PLOT 1" name="block1plot1" >1</button></a></td>
					<td colspan="14">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_18.jpg" width="74" height="1" alt=""></td>
					<td colspan="2" rowspan="2">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 1 PLOT 5"  name="block1plot5">5</button></a></td>
					<td colspan="5">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_20.jpg" width="31" height="1" alt=""></td>
					<td rowspan="2">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 1 PLOT 7"  name="block1plot7">7</button></a></td>
					<td colspan="8">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_22.jpg" width="109" height="1" alt=""></td>
					<td>
						<img src="/spacer.gif" width="1" height="1" alt=""></td>
				</tr>
				<tr>
					<td rowspan="71">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_23.jpg" width="63" height="445" alt=""></td>
					<td colspan="2">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 2 PLOT 1"  name="block2plot1">1</button></a></td>
					<td rowspan="71">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_25.jpg" width="9" height="445" alt=""></td>
					<td>
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 2 PLOT 2"  name="block2plot2">2</button></a></td>
					<td rowspan="71">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_27.jpg" width="9" height="445" alt=""></td>
					<td colspan="2">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 2 PLOT 3"  name="block2plot3">3</button></a></td>
					<td colspan="2" rowspan="36">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_29.jpg" width="9" height="243" alt=""></td>
					<td colspan="2">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 2 PLOT 4"  name="block2plot4">4</button></a></td>
					<td rowspan="71">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_31.jpg" width="11" height="445" alt=""></td>
					<td>
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 2 PLOT 5"  name="block2plot5">5</button></a></td>
					<td rowspan="71">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_33.jpg" width="7" height="445" alt=""></td>
					<td>
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 2 PLOT 6"  name="block2plot6">6</button></a></td>
					<td colspan="2" rowspan="33">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_35.jpg" width="11" height="221" alt=""></td>
					<td colspan="2">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 2 PLOT 7"  name="block2plot7">7</button></a></td>
					<td rowspan="71">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_37.jpg" width="11" height="445" alt=""></td>
					<td>
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 2 PLOT 8"  name="block2plot8">8</button></a></td>
					<td rowspan="71">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_39.jpg" width="7" height="445" alt=""></td>
					<td>
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 2 PLOT 9"  name="block2plot9">9</button></a></td>
					<td rowspan="71">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_41.jpg" width="127" height="445" alt=""></td>
					<td colspan="3" rowspan="33">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_42.jpg" width="9" height="221" alt=""></td>
					<td colspan="3">
					<button onclick="document.getElementById('id01').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-black"alt="BLOCK 1 PLOT 2" name="block1plot2" >2</button></a></td>
					<td colspan="2" rowspan="33">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_44.jpg" width="9" height="221" alt=""></td>
					<td colspan="2">
					<button onclick="document.getElementById('id01').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-black"alt="BLOCK 1 PLOT 3" name="block1plot3" >3</button></a></td>
					<td colspan="2" rowspan="33">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_46.jpg" width="10" height="221" alt=""></td>
					<td>
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 1 PLOT 4"  name="block1plot4">4</button></a></td>
					<td rowspan="71">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_48.jpg" width="9" height="445" alt=""></td>
					<td colspan="2" rowspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_49.jpg" width="10" height="22" alt=""></td>
					<td>
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 1 PLOT 6"  name="block1plot6">6</button></a></td>
					<td colspan="2" rowspan="46">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_51.jpg" width="9" height="287" alt=""></td>
					<td rowspan="71">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_52.jpg" width="9" height="445" alt=""></td>
					<td colspan="2">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 1 PLOT 8"  name="block1plot8">8</button></a></td>
					<td colspan="2" rowspan="59">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_54.jpg" width="13" height="333" alt=""></td>
					<td colspan="2">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 1 PLOT 9"  name="block1plot9">9</button></a></td>
					<td rowspan="71">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_56.jpg" width="61" height="445" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="11" alt=""></td>
				</tr>
				<tr>
					<td colspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_57.jpg" width="13" height="11" alt=""></td>
					<td>
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_58.jpg" width="12" height="11" alt=""></td>
					<td colspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_59.jpg" width="13" height="11" alt=""></td>
					<td colspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_60.jpg" width="13" height="11" alt=""></td>
					<td>
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_61.jpg" width="12" height="11" alt=""></td>
					<td>
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_62.jpg" width="13" height="11" alt=""></td>
					<td colspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_63.jpg" width="12" height="11" alt=""></td>
					<td>
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_64.jpg" width="13" height="11" alt=""></td>
					<td>
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_65.jpg" width="12" height="11" alt=""></td>
					<td colspan="3">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_66.jpg" width="13" height="11" alt=""></td>
					<td colspan="3">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_67.jpg" width="13" height="11" alt=""></td>
					<td colspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_68.jpg" width="12" height="11" alt=""></td>
					<td>
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_69.jpg" width="12" height="11" alt=""></td>
					<td colspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_70.jpg" width="13" height="11" alt=""></td>
					<td>
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_71.jpg" width="12" height="11" alt=""></td>
					<td>
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_72.jpg" width="12" height="11" alt=""></td>
					<td colspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_73.jpg" width="13" height="11" alt=""></td>
					<td colspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_74.jpg" width="13" height="11" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="11" alt=""></td>
				</tr>
				<tr>
					<td rowspan="4">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 2 PLOT 10"  name="block2plot10">10</button></a></td>
					<td rowspan="69">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_76.jpg" width="1" height="423" alt=""></td>
					<td rowspan="4">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 2 PLOT 11"  name="block2plot11">11</button></a></td>
					<td colspan="2" rowspan="4">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 2 PLOT 12"  name="block2plot12">12</button></a></td>
					<td colspan="2" rowspan="4">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 2 PLOT 13"  name="block2plot13">13</button></a></td>
					<td rowspan="4">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 2 PLOT 14"  name="block2plot14">14</button></a></td>
					<td rowspan="4">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 2 PLOT 15"  name="block2plot15">15</button></a></td>
					<td colspan="2" rowspan="4">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 2 PLOT 16"  name="block2plot16">16</button></a></td>
					<td rowspan="4">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 2 PLOT 17"  name="block2plot17">17</button></a></td>
					<td rowspan="4">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 2 PLOT 18"  name="block2plot18">18</button></a></td>
					<td colspan="3" rowspan="4">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 1 PLOT 10"  name="block1plot10">10</button></a></td>
					<td colspan="3" rowspan="4">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 1 PLOT 11"  name="block1plot11">11</button></a></td>
					<td colspan="2" rowspan="4">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 1 PLOT 12"  name="block1plot12">12</button></a></td>
					<td rowspan="4">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 1 PLOT 13"  name="block1plot13">13</button></a></td>
					<td colspan="2" rowspan="4">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 1 PLOT 14"  name="block1plot14">14</button></a></td>
					<td rowspan="69">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_90.jpg" width="9" height="423" alt=""></td>
					<td colspan="2" rowspan="4">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 1 PLOT 15"  name="block1plot15">15</button></a></td>
					<td rowspan="4">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 1 PLOT 16"  name="block1plot16">16</button></a></td>
					<td colspan="2" rowspan="4">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 1 PLOT 17"  name="block1plot17">17</button></a></td>
					<td colspan="2" rowspan="4">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 1 PLOT 18"  name="block1plot18">18</button></a></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="2" alt=""></td>
				</tr>
				<tr>
					<td rowspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_95.jpg" width="51" height="6" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="2" alt=""></td>
				</tr>
				<tr>
					<td>
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_96.jpg" width="51" height="4" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="4" alt=""></td>
				</tr>
				<tr>
					<td rowspan="4">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:51; height:30; font-size:8px" class="w3-blue"alt="FAMILY STATE PLOT 4" name="familystateplot4">4</button></a></td>
					<td rowspan="5">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:51; height:32; font-size:8px" class="w3-blue"alt="FAMILY STATE PLOT 18" name="familystateplot18">18</button></a></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="4" alt=""></td>
				</tr>
				<tr>
					<td>
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_99.jpg" width="12" height="10" alt=""></td>
					<td>
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_100.jpg" width="12" height="10" alt=""></td>
					<td colspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_101.jpg" width="13" height="10" alt=""></td>
					<td colspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_102.jpg" width="13" height="10" alt=""></td>
					<td>
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_103.jpg" width="12" height="10" alt=""></td>
					<td>
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_104.jpg" width="13" height="10" alt=""></td>
					<td colspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_105.jpg" width="12" height="10" alt=""></td>
					<td>
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_106.jpg" width="13" height="10" alt=""></td>
					<td>
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_107.jpg" width="12" height="10" alt=""></td>
					<td colspan="3">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_108.jpg" width="13" height="10" alt=""></td>
					<td colspan="3">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_109.jpg" width="13" height="10" alt=""></td>
					<td colspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_110.jpg" width="12" height="10" alt=""></td>
					<td>
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_111.jpg" width="12" height="10" alt=""></td>
					<td colspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_112.jpg" width="13" height="10" alt=""></td>
					<td colspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_113.jpg" width="13" height="10" alt=""></td>
					<td>
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_114.jpg" width="12" height="10" alt=""></td>
					<td colspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_115.jpg" width="13" height="10" alt=""></td>
					<td colspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_116.jpg" width="13" height="10" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="10" alt=""></td>
				</tr>
				<tr>
					<td>
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 2 PLOT 19"  name="block2plot19">19</button></a></td>
					<td>
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 2 PLOT 20"  name="block2plot20">20</button></a></td>
					<td colspan="2">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 2 PLOT 21"  name="block2plot21">21</button></a></td>
					<td colspan="2">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 2 PLOT 22"  name="block2plot22">22</button></a></td>
					<td>
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 2 PLOT 23"  name="block2plot23">23</button></a></td>
					<td>
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 2 PLOT 24"  name="block2plot24">24</button></a></td>
					<td colspan="2">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 2 PLOT 25"  name="block2plot25">25</button></a></td>
					<td>
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 2 PLOT 26"  name="block2plot26">26</button></a></td>
					<td>
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 2 PLOT 27"  name="block2plot27">27</button></a></td>
					<td colspan="3">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 1 PLOT 19"  name="block1plot19">19</button></a></td>
					<td colspan="3">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 1 PLOT 20"  name="block1plot20">20</button></a></td>
					<td colspan="2">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 1 PLOT 21"  name="block1plot21">21</button></a></td>
					<td>
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 1 PLOT 22"  name="block1plot22">22</button></a></td>
					<td rowspan="5">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_130.jpg" width="1" height="22" alt=""></td>
					<td>
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 1 PLOT 23"  name="block1plot23">23</button></a></td>
					<td colspan="2">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 1 PLOT 24"  name="block1plot24">24</button></a></td>
					<td>
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 1 PLOT 25"  name="block1plot25">25</button></a></td>
					<td colspan="2">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 1 PLOT 26"  name="block1plot26">26</button></a></td>
					<td colspan="2">
					<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 1 PLOT 27"  name="block1plot27">27</button></a></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="12" alt=""></td>
				</tr>
				<tr>
					<td rowspan="4">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_136.jpg" width="12" height="10" alt=""></td>
					<td rowspan="4">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_137.jpg" width="12" height="10" alt=""></td>
					<td colspan="2" rowspan="4">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_138.jpg" width="13" height="10" alt=""></td>
					<td colspan="2" rowspan="4">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_139.jpg" width="13" height="10" alt=""></td>
					<td rowspan="4">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_140.jpg" width="12" height="10" alt=""></td>
					<td rowspan="4">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_141.jpg" width="13" height="10" alt=""></td>
					<td colspan="2" rowspan="4">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_142.jpg" width="12" height="10" alt=""></td>
					<td rowspan="4">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_143.jpg" width="13" height="10" alt=""></td>
					<td rowspan="4">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_144.jpg" width="12" height="10" alt=""></td>
					<td colspan="3" rowspan="4">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_145.jpg" width="13" height="10" alt=""></td>
					<td colspan="3" rowspan="4">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_146.jpg" width="13" height="10" alt=""></td>
					<td colspan="2" rowspan="4">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_147.jpg" width="12" height="10" alt=""></td>
					<td rowspan="4">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_148.jpg" width="12" height="10" alt=""></td>
					<td rowspan="4">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_149.jpg" width="12" height="10" alt=""></td>
					<td colspan="2" rowspan="4">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_150.jpg" width="13" height="10" alt=""></td>
					<td rowspan="4">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_151.jpg" width="12" height="10" alt=""></td>
					<td colspan="2" rowspan="4">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_152.jpg" width="13" height="10" alt=""></td>
					<td colspan="2" rowspan="4">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_153.jpg" width="13" height="10" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="4" alt=""></td>
				</tr>
				<tr>
					<td rowspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_154.jpg" width="51" height="4" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="2" alt=""></td>
				</tr>
				<tr>
					<td rowspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_155.jpg" width="51" height="4" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="2" alt=""></td>
				</tr>
				<tr>
					<td rowspan="4">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:51; height:32; font-size:8px" class="w3-blue"alt="FAMILY STATE PLOT 5" name="familystateplot5">5</button></a></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="2" alt=""></td>
				</tr>
				<tr>
					<td>
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 2 PLOT 28"  name="block2plot28">28</button></a></td>
					<td>
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 2 PLOT 29"  name="block2plot29">29</button></a></td>
					<td colspan="2">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 2 PLOT 30"  name="block2plot30">30</button></a></td>
					<td rowspan="7">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_160.jpg" width="1" height="44" alt=""></td>
					<td>
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 2 PLOT 31"  name="block2plot31">31</button></a></td>
					<td>
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 2 PLOT 32"  name="block2plot32">32</button></a></td>
					<td>
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 2 PLOT 33"  name="block2plot33">33</button></a></td>
					<td colspan="2">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 2 PLOT 34"  name="block2plot34">34</button></a></td>
					<td>
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 2 PLOT 35"  name="block2plot35">35</button></a></td>
					<td>
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 2 PLOT 36"  name="block2plot36">36</button></a></td>
					<td colspan="3">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 1 PLOT 28"  name="block1plot28">28</button></a></td>
					<td colspan="3">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 1 PLOT 29"  name="block1plot29">29</button></a></td>
					<td colspan="2">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 1 PLOT 30"  name="block1plot30">30</button></a></td>
					<td>
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 1 PLOT 31"  name="block1plot31">31</button></a></td>
					<td colspan="2">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 1 PLOT 32"  name="block1plot32">32</button></a></td>
					<td colspan="2">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 1 PLOT 33"  name="block1plot33">33</button></a></td>
					<td>
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 1 PLOT 34"  name="block1plot34">34</button></a></td>
					<td colspan="2">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 1 PLOT 35"  name="block1plot35">35</button></a></td>
					<td colspan="2">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 1 PLOT 36"  name="block1plot36">36</button></a></td>
					<td rowspan="4">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:51; height:32; font-size:8px" class="w3-blue"alt="FAMILY STATE PLOT 19" name="familystateplot19">19</button></a></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="12" alt=""></td>
				</tr>
				<tr>
					<td>
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_177.jpg" width="12" height="10" alt=""></td>
					<td>
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_178.jpg" width="12" height="10" alt=""></td>
					<td colspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_179.jpg" width="13" height="10" alt=""></td>
					<td>
						<img src="image3/Bogo-Memorial-Park-Map-Photoshop_180.jpg" width="12" height="10" alt=""></td>
					<td>
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_181.jpg" width="12" height="10" alt=""></td>
					<td>
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_182.jpg" width="13" height="10" alt=""></td>
					<td colspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_183.jpg" width="12" height="10" alt=""></td>
					<td>
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_184.jpg" width="13" height="10" alt=""></td>
					<td>
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_185.jpg" width="12" height="10" alt=""></td>
					<td colspan="3">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_186.jpg" width="13" height="10" alt=""></td>
					<td colspan="3">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_187.jpg" width="13" height="10" alt=""></td>
					<td colspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_188.jpg" width="12" height="10" alt=""></td>
					<td>
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_189.jpg" width="12" height="10" alt=""></td>
					<td colspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_190.jpg" width="13" height="10" alt=""></td>
					<td colspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_191.jpg" width="13" height="10" alt=""></td>
					<td>
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_192.jpg" width="12" height="10" alt=""></td>
					<td colspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_193.jpg" width="13" height="10" alt=""></td>
					<td colspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_194.jpg" width="13" height="10" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="10" alt=""></td>
				</tr>
				<tr>
					<td rowspan="3">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 2 PLOT 37"  name="block2plot37">37</button></a></td>
					<td rowspan="3">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 2 PLOT 38"  name="block2plot38">38</button></a></td>
					<td colspan="2" rowspan="3">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 2 PLOT 39"  name="block2plot39">39</button></a></td>
					<td rowspan="3">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 2 PLOT 40"  name="block2plot40">40</button></a></td>
					<td rowspan="3">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 2 PLOT 41"  name="block2plot41">41</button></a></td>
					<td rowspan="3">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 2 PLOT 42"  name="block2plot42">42</button></a></td>
					<td colspan="2" rowspan="3">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 2 PLOT 43"  name="block2plot43">43</button></a></td>
					<td rowspan="3">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 2 PLOT 44"  name="block2plot44">44</button></a></td>
					<td rowspan="3">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 2 PLOT 45"  name="block2plot45">45</button></a></td>
					<td colspan="3" rowspan="3">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 1 PLOT 37"  name="block1plot37">37</button></a></td>
					<td colspan="3" rowspan="3">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 1 PLOT 38"  name="block1plot38">38</button></a></td>
					<td colspan="2" rowspan="3">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 1 PLOT 39"  name="block1plot39">39</button></a></td>
					<td rowspan="3">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 1 PLOT 40"  name="block1plot40">40</button></a></td>
					<td colspan="2" rowspan="3">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 1 PLOT 41"  name="block1plot41">41</button></a></td>
					<td colspan="2" rowspan="3">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 1 PLOT 42"  name="block1plot42">42</button></a></td>
					<td rowspan="3">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 1 PLOT 43"  name="block1plot43">43</button></a></td>
					<td colspan="2" rowspan="3">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 1 PLOT 44"  name="block1plot44">44</button></a></td>
					<td colspan="2" rowspan="3">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 1 PLOT 45"  name="block1plot45">45</button></a></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="8" alt=""></td>
				</tr>
				<tr>
					<td rowspan="3">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_213.jpg" width="51" height="6" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="2" alt=""></td>
				</tr>
				<tr>
					<td rowspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_214.jpg" width="51" height="4" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="2" alt=""></td>
				</tr>
				<tr>
					<td rowspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_215.jpg" width="12" height="10" alt=""></td>
					<td rowspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_216.jpg" width="12" height="10" alt=""></td>
					<td colspan="2" rowspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_217.jpg" width="13" height="10" alt=""></td>
					<td rowspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_218.jpg" width="12" height="10" alt=""></td>
					<td rowspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_219.jpg" width="12" height="10" alt=""></td>
					<td rowspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_220.jpg" width="13" height="10" alt=""></td>
					<td colspan="2" rowspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_221.jpg" width="12" height="10" alt=""></td>
					<td rowspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_222.jpg" width="13" height="10" alt=""></td>
					<td rowspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_223.jpg" width="12" height="10" alt=""></td>
					<td colspan="3" rowspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_224.jpg" width="13" height="10" alt=""></td>
					<td colspan="3" rowspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_225.jpg" width="13" height="10" alt=""></td>
					<td colspan="2" rowspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_226.jpg" width="12" height="10" alt=""></td>
					<td rowspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_227.jpg" width="12" height="10" alt=""></td>
					<td colspan="2" rowspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_228.jpg" width="13" height="10" alt=""></td>
					<td colspan="2" rowspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_229.jpg" width="13" height="10" alt=""></td>
					<td rowspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_230.jpg" width="12" height="10" alt=""></td>
					<td colspan="2" rowspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_231.jpg" width="13" height="10" alt=""></td>
					<td colspan="2" rowspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_232.jpg" width="13" height="10" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="2" alt=""></td>
				</tr>
				<tr>
					<td rowspan="3">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:51; height:30; font-size:8px" class="w3-blue"alt="FAMILY STATE PLOT 6" name="familystateplot6">6</button></a></td>
					<td rowspan="4">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:51; height:32; font-size:8px" class="w3-blue"alt="FAMILY STATE PLOT 20" name="familystateplot20">20</button></a></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="8" alt=""></td>
				</tr>
				<tr>
					<td>
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 2 PLOT 46"  name="block2plot46">46</button></a></td>
					<td>
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 2 PLOT 47"  name="block2plot47">47</button></a></td>
					<td colspan="2">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 2 PLOT 48"  name="block2plot48">48</button></a></td>
					<td colspan="2">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 2 PLOT 49"  name="block2plot49">49</button></a></td>
					<td>
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 2 PLOT 50"  name="block2plot50">50</button></a></td>
					<td>
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 2 PLOT 51"  name="block2plot51">51</button></a></td>
					<td colspan="2">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 2 PLOT 52"  name="block2plot52">52</button></a></td>
					<td>
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 2 PLOT 53"  name="block2plot53">53</button></a></td>
					<td>
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 2 PLOT 54"  name="block2plot54">54</button></a></td>
					<td colspan="3">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 1 PLOT 46"  name="block1plot46">46</button></a></td>
					<td colspan="3">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 1 PLOT 47"  name="block1plot47">47</button></a></td>
					<td colspan="2">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 1 PLOT 48"  name="block1plot48">48</button></a></td>
					<td>
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 1 PLOT 49"  name="block1plot49">49</button></a></td>
					<td colspan="2">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 1 PLOT 50"  name="block1plot50">50</button></a></td>
					<td colspan="2">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 1 PLOT 51"  name="block1plot51">51</button></a></td>
					<td>
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 1 PLOT 52"  name="block1plot52">52</button></a></td>
					<td colspan="2">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 1 PLOT 53"  name="block1plot53">53</button></a></td>
					<td colspan="2">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 1 PLOT 54"  name="block1plot54">54</button></a></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="12" alt=""></td>
				</tr>
				<tr>
					<td rowspan="13">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_253.jpg" width="12" height="99" alt=""></td>
					<td rowspan="13">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_254.jpg" width="12" height="99" alt=""></td>
					<td colspan="2" rowspan="13">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_255.jpg" width="13" height="99" alt=""></td>
					<td colspan="2" rowspan="13">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_256.jpg" width="13" height="99" alt=""></td>
					<td rowspan="13">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_257.jpg" width="12" height="99" alt=""></td>
					<td rowspan="13">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_258.jpg" width="13" height="99" alt=""></td>
					<td colspan="2" rowspan="13">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_259.jpg" width="12" height="99" alt=""></td>
					<td rowspan="13">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_260.jpg" width="13" height="99" alt=""></td>
					<td rowspan="13">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_261.jpg" width="12" height="99" alt=""></td>
					<td colspan="3" rowspan="13">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_262.jpg" width="13" height="99" alt=""></td>
					<td colspan="3" rowspan="13">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_263.jpg" width="13" height="99" alt=""></td>
					<td colspan="2" rowspan="13">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_264.jpg" width="12" height="99" alt=""></td>
					<td rowspan="13">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_265.jpg" width="12" height="99" alt=""></td>
					<td colspan="2" rowspan="13">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_266.jpg" width="13" height="99" alt=""></td>
					<td colspan="2" rowspan="13">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_267.jpg" width="13" height="99" alt=""></td>
					<td rowspan="13">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_268.jpg" width="12" height="99" alt=""></td>
					<td colspan="2" rowspan="13">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_269.jpg" width="13" height="99" alt=""></td>
					<td colspan="2" rowspan="13">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_270.jpg" width="13" height="99" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="10" alt=""></td>
				</tr>
				<tr>
					<td rowspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_271.jpg" width="51" height="5" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="2" alt=""></td>
				</tr>
				<tr>
					<td rowspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_272.jpg" width="51" height="4" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="3" alt=""></td>
				</tr>
				<tr>
					<td rowspan="2">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:51; height:32; font-size:8px" class="w3-blue"alt="FAMILY STATE PLOT 7" name="familystateplot7">7</button></a></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="1" alt=""></td>
				</tr>
				<tr>
					<td rowspan="2">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:51; height:32; font-size:8px" class="w3-blue"alt="FAMILY STATE PLOT 21" name="familystateplot21">21</button></a></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="31" alt=""></td>
				</tr>
				<tr>
					<td rowspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_275.jpg" width="51" height="4" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="1" alt=""></td>
				</tr>
				<tr>
					<td rowspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_276.jpg" width="51" height="5" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="3" alt=""></td>
				</tr>
				<tr>
					<td rowspan="2">
					<button onclick="document.getElementById('id02').style.display='block'" style="width:51; height:32; font-size:8px" class="w3-blue"alt="FAMILY STATE PLOT 8" name="familystateplot8">8</button></a></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="2" alt=""></td>
				</tr>
				<tr>
					<td rowspan="2">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:51; height:32; font-size:8px" class="w3-blue"alt="FAMILY STATE PLOT 22" name="familystateplot22">22</button></a></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="30" alt=""></td>
				</tr>
				<tr>
					<td rowspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_279.jpg" width="51" height="4" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="2" alt=""></td>
				</tr>
				<tr>
					<td rowspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_280.jpg" width="51" height="4" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="2" alt=""></td>
				</tr>
				<tr>
					<td rowspan="4">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:51; height:32; font-size:8px" class="w3-blue"alt="FAMILY STATE PLOT 9" name="familystateplot9">9</button></a></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="2" alt=""></td>
				</tr>
				<tr>
					<td rowspan="4">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:51; height:32; font-size:8px" class="w3-blue"alt="FAMILY STATE PLOT 23" name="familystateplot23">23</button></a></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="10" alt=""></td>
				</tr>
				<tr>
					<td>
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 4 PLOT 1"  name="block4plot1">1</button></a></td>
					<td>
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 4 PLOT 2"  name="block4plot2">2</button></a></td>
					<td colspan="2">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 4 PLOT 3"  name="block4plot3">3</button></a></td>
					<td colspan="2">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 4 PLOT 4"  name="block4plot4">4</button></a></td>
					<td>
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 4 PLOT 5"  name="block4plot5">5</button></a></td>
					<td>
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 4 PLOT 6"  name="block4plot6">6</button></a></td>
					<td rowspan="38">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_289.jpg" width="9" height="224" alt=""></td>
					<td colspan="2">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 4 PLOT 7"  name="block4plot7">7</button></a></td>
					<td rowspan="38">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_291.jpg" width="1" height="224" alt=""></td>
					<td>
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 4 PLOT 8"  name="block4plot8">8</button></a></td>
					<td>
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 4 PLOT 9"  name="block4plot9">9</button></a></td>
					<td rowspan="38">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_294.jpg" width="2" height="224" alt=""></td>
					<td colspan="3">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 3 PLOT 1"  name="block3plot1">1</button></a></td>
					<td colspan="3" rowspan="19">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_296.jpg" width="10" height="91" alt=""></td>
					<td colspan="3">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 3 PLOT 2"  name="block3plot2">2</button></a></td>
					<td colspan="2" rowspan="38">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_298.jpg" width="9" height="224" alt=""></td>
					<td colspan="2">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 3 PLOT 3"  name="block3plot3">3</button></a></td>
					<td rowspan="38">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_300.jpg" width="7" height="224" alt=""></td>
					<td>
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 3 PLOT 4"  name="block3plot4">4</button></a></td>
					<td rowspan="7">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_302.jpg" width="1" height="44" alt=""></td>
					<td>
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 3 PLOT 5"  name="block3plot5">5</button></a></td>
					<td colspan="2">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 3 PLOT 6"  name="block3plot6">6</button></a></td>
					<td>
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 3 PLOT 7"  name="block3plot7">7</button></a></td>
					<td colspan="2">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 3 PLOT 8"  name="block3plot8">8</button></a></td>
					<td colspan="2">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 3 PLOT 9"  name="block3plot9">9</button></a></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="12" alt=""></td>
				</tr>
				<tr>
					<td rowspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_308.jpg" width="12" height="10" alt=""></td>
					<td rowspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_309.jpg" width="12" height="10" alt=""></td>
					<td colspan="2" rowspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_310.jpg" width="13" height="10" alt=""></td>
					<td colspan="2" rowspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_311.jpg" width="13" height="10" alt=""></td>
					<td rowspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_312.jpg" width="12" height="10" alt=""></td>
					<td rowspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_313.jpg" width="13" height="10" alt=""></td>
					<td colspan="2" rowspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_314.jpg" width="13" height="10" alt=""></td>
					<td rowspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_315.jpg" width="13" height="10" alt=""></td>
					<td rowspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_316.jpg" width="12" height="10" alt=""></td>
					<td colspan="3" rowspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_317.jpg" width="12" height="10" alt=""></td>
					<td colspan="3" rowspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_318.jpg" width="13" height="10" alt=""></td>
					<td colspan="2" rowspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_319.jpg" width="13" height="10" alt=""></td>
					<td rowspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_320.jpg" width="12" height="10" alt=""></td>
					<td rowspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_321.jpg" width="12" height="10" alt=""></td>
					<td colspan="2" rowspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_322.jpg" width="13" height="10" alt=""></td>
					<td rowspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_323.jpg" width="12" height="10" alt=""></td>
					<td colspan="2" rowspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_324.jpg" width="13" height="10" alt=""></td>
					<td colspan="2" rowspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_325.jpg" width="13" height="10" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="8" alt=""></td>
				</tr>
				<tr>
					<td rowspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_326.jpg" width="51" height="4" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="2" alt=""></td>
				</tr>
				<tr>
					<td rowspan="3">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 4 PLOT 10"  name="block4plot10">10</button></a></td>
					<td rowspan="3">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 4 PLOT 11"  name="block4plot11">11</button></a></td>
					<td rowspan="16">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_329.jpg" width="2" height="69" alt=""></td>
					<td colspan="2" rowspan="3">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 4 PLOT 12"  name="block4plot12">12</button></a></td>
					<td colspan="2" rowspan="12">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_331.jpg" width="8" height="46" alt=""></td>
					<td rowspan="3">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 4 PLOT 13"  name="block4plot13">13</button></a></td>
					<td rowspan="3">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 4 PLOT 14"  name="block4plot14">14</button></a></td>
					<td rowspan="3">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 4 PLOT 15"  name="block4plot15">15</button></a></td>
					<td colspan="2" rowspan="3">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 4 PLOT 16"  name="block4plot16">16</button></a></td>
					<td rowspan="3">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 4 PLOT 17"  name="block4plot17">17</button></a></td>
					<td rowspan="3">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 4 PLOT 18"  name="block4plot18">18</button></a></td>
					<td colspan="3" rowspan="3">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 3 PLOT 10"  name="block3plot10">10</button></a></td>
					<td colspan="3" rowspan="3">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 3 PLOT 11"  name="block3plot11">11</button></a></td>
					<td colspan="2" rowspan="3">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 3 PLOT 12"  name="block3plot12">12</button></a></td>
					<td rowspan="3">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 3 PLOT 13"  name="block3plot13">13</button></a></td>
					<td rowspan="3">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 3 PLOT 14"  name="block3plot14">14</button></a></td>
					<td colspan="2" rowspan="3">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 3 PLOT 15"  name="block3plot15">15</button></a></td>
					<td rowspan="3">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 3 PLOT 16"  name="block3plot16">16</button></a></td>
					<td colspan="2" rowspan="3">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 3 PLOT 17"  name="block3plot17">17</button></a></td>
					<td rowspan="3">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 3 PLOT 18"  name="block3plot18">18</button></a></td>
					<td rowspan="11">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_347.jpg" width="1" height="45" alt=""></td>
					<td rowspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_348.jpg" width="51" height="4" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="2" alt=""></td>
				</tr>
				<tr>
					<td rowspan="5">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:51; height:32; font-size:8px" class="w3-blue"alt="FAMILY STATE PLOT 10" name="familystateplot10">10</button></a></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="2" alt=""></td>
				</tr>
				<tr>
					<td rowspan="5">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:51; height:32; font-size:8px" class="w3-blue"alt="FAMILY STATE PLOT 24" name="familystateplot24">24</button></a></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="8" alt=""></td>
				</tr>
				<tr>
					<td rowspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_351.jpg" width="12" height="12" alt=""></td>
					<td rowspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_352.jpg" width="12" height="12" alt=""></td>
					<td colspan="2" rowspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_353.jpg" width="13" height="12" alt=""></td>
					<td rowspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_354.jpg" width="12" height="12" alt=""></td>
					<td rowspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_355.jpg" width="12" height="12" alt=""></td>
					<td rowspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_356.jpg" width="13" height="12" alt=""></td>
					<td colspan="2" rowspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_357.jpg" width="13" height="12" alt=""></td>
					<td rowspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_358.jpg" width="13" height="12" alt=""></td>
					<td rowspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_359.jpg" width="12" height="12" alt=""></td>
					<td colspan="3">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_360.jpg" width="12" height="10" alt=""></td>
					<td colspan="3">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_361.jpg" width="13" height="10" alt=""></td>
					<td colspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_362.jpg" width="13" height="10" alt=""></td>
					<td>
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_363.jpg" width="12" height="10" alt=""></td>
					<td>
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_364.jpg" width="12" height="10" alt=""></td>
					<td colspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_365.jpg" width="13" height="10" alt=""></td>
					<td>
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_366.jpg" width="12" height="10" alt=""></td>
					<td colspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_367.jpg" width="13" height="10" alt=""></td>
					<td>
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_368.jpg" width="12" height="10" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="10" alt=""></td>
				</tr>
				<tr>
					<td rowspan="7">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_369.jpg" width="1" height="23" alt=""></td>
					<td colspan="2" rowspan="2">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:11px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 3 PLOT 19"  name="block3plot19">19</button></a></td>
					<td colspan="3" rowspan="2">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 3 PLOT 20"  name="block3plot20">20</button></a></td>
					<td colspan="2" rowspan="2">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 3 PLOT 21"  name="block3plot21">21</button></a></td>
					<td rowspan="2">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 3 PLOT 22"  name="block3plot22">22</button></a></td>
					<td colspan="2" rowspan="2">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 3 PLOT 23"  name="block3plot23">23</button></a></td>
					<td colspan="2" rowspan="2">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 3 PLOT 24"  name="block3plot24">24</button></a></td>
					<td rowspan="2">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 3 PLOT 25"  name="block3plot25">25</button></a></td>
					<td colspan="2" rowspan="2">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 3 PLOT 26"  name="block3plot26">26</button></a></td>
					<td rowspan="2">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 3 PLOT 27"  name="block3plot27">27</button></a></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="2" alt=""></td>
				</tr>
				<tr>
					<td rowspan="2">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 4 PLOT 19"  name="block4plot19">19</button></a></td>
					<td rowspan="2">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 4 PLOT 20"  name="block4plot20">20</button></a></td>
					<td colspan="2" rowspan="2">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 4 PLOT 21"  name="block4plot21">21</button></a></td>
					<td rowspan="2">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 4 PLOT 22"  name="block4plot22">22</button></a></td>
					<td rowspan="2">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 4 PLOT 23"  name="block4plot23">23</button></a></td>
					<td rowspan="2">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 4 PLOT 24"  name="block4plot24">24</button></a></td>
					<td colspan="2" rowspan="2">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 4 PLOT 25"  name="block4plot25">25</button></a></td>
					<td rowspan="2">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 4 PLOT 26"  name="block4plot26">26</button></a></td>
					<td rowspan="2">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 4 PLOT 27"  name="block4plot27">27</button></a></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="10" alt=""></td>
				</tr>
				<tr>
					<td rowspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_388.jpg" width="51" height="4" alt=""></td>
					<td colspan="2" rowspan="5">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_389.jpg" width="11" height="11" alt=""></td>
					<td colspan="3" rowspan="5">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_390.jpg" width="13" height="11" alt=""></td>
					<td colspan="2" rowspan="4">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_391.jpg" width="13" height="10" alt=""></td>
					<td rowspan="5">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_392.jpg" width="12" height="11" alt=""></td>
					<td colspan="2" rowspan="5">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_393.jpg" width="13" height="11" alt=""></td>
					<td colspan="2" rowspan="4">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_394.jpg" width="13" height="10" alt=""></td>
					<td rowspan="4">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_395.jpg" width="12" height="10" alt=""></td>
					<td colspan="2" rowspan="4">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_396.jpg" width="13" height="10" alt=""></td>
					<td rowspan="5">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_397.jpg" width="12" height="11" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="2" alt=""></td>
				</tr>
				<tr>
					<td rowspan="5">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_398.jpg" width="12" height="10" alt=""></td>
					<td rowspan="5">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_399.jpg" width="12" height="10" alt=""></td>
					<td colspan="2" rowspan="5">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_400.jpg" width="13" height="10" alt=""></td>
					<td rowspan="5">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_401.jpg" width="12" height="10" alt=""></td>
					<td rowspan="5">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_402.jpg" width="12" height="10" alt=""></td>
					<td rowspan="5">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_403.jpg" width="13" height="10" alt=""></td>
					<td colspan="2" rowspan="5">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_404.jpg" width="13" height="10" alt=""></td>
					<td rowspan="5">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_405.jpg" width="13" height="10" alt=""></td>
					<td rowspan="5">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_406.jpg" width="12" height="10" alt=""></td>
					<td rowspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_407.jpg" width="51" height="4" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="2" alt=""></td>
				</tr>
				<tr>
					<td rowspan="9">
					<button onclick="document.getElementById('id02').style.display='block'" style="width:51; height:32; font-size:8px" class="w3-blue"alt="FAMILY STATE PLOT 11" name="familystateplot11">11</button></a></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="2" alt=""></td>
				</tr>
				<tr>
					<td rowspan="9">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:51; height:32; font-size:8px" class="w3-blue"alt="FAMILY STATE PLOT 25" name="familystateplot25">25</button></a></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="4" alt=""></td>
				</tr>
				<tr>
					<td colspan="2" rowspan="3">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 3 PLOT 30"  name="block3plot30">30</button></a></td>
					<td rowspan="25">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_411.jpg" width="1" height="158" alt=""></td>
					<td rowspan="3">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 3 PLOT 33"  name="block3plot33">33</button></a></td>
					<td rowspan="25">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_413.jpg" width="8" height="158" alt=""></td>
					<td colspan="2" rowspan="3">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 3 PLOT 34"  name="block3plot34">34</button></a></td>
					<td colspan="2" rowspan="3">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 3 PLOT 35"  name="block3plot35">35</button></a></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="1" alt=""></td>
				</tr>
				<tr>
					<td colspan="3" rowspan="2">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 3 PLOT 28"  name="block3plot28">28</button></a></td>
					<td colspan="3" rowspan="2">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 3 PLOT 29"  name="block3plot29">29</button></a></td>
					<td rowspan="2">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 3 PLOT 31"  name="block3plot31">31</button></a></td>
					<td rowspan="12">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_419.jpg" width="1" height="45" alt=""></td>
					<td rowspan="3">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 3 PLOT 32"  name="block3plot32">32</button></a></td>
					<td colspan="2" rowspan="2">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 3 PLOT 36"  name="block3plot36">36</button></a></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="1" alt=""></td>
				</tr>
				<tr>
					<td rowspan="3">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 4 PLOT 28"  name="block4plot28">28</button></a></td>
					<td rowspan="3">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 4 PLOT 29"  name="block4plot29">29</button></a></td>
					<td colspan="2" rowspan="3">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 4 PLOT 30"  name="block4plot30">30</button></a></td>
					<td rowspan="23">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_425.jpg" width="7" height="156" alt=""></td>
					<td colspan="2" rowspan="3">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 4 PLOT 31"  name="block4plot31">31</button></a></td>
					<td rowspan="3">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 4 PLOT 32"  name="block4plot32">32</button></a></td>
					<td rowspan="3">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 4 PLOT 33"  name="block4plot33">33</button></a></td>
					<td colspan="2" rowspan="3">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 4 PLOT 34"  name="block4plot34">34</button></a></td>
					<td rowspan="3">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 4 PLOT 35"  name="block4plot35">35</button></a></td>
					<td rowspan="3">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 4 PLOT 36"  name="block4plot36">36</button></a></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="10" alt=""></td>
				</tr>
				<tr>
					<td colspan="3" rowspan="3">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_432.jpg" width="12" height="13" alt=""></td>
					<td colspan="3" rowspan="3">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_433.jpg" width="13" height="13" alt=""></td>
					<td colspan="2" rowspan="3">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_434.jpg" width="13" height="13" alt=""></td>
					<td rowspan="3">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_435.jpg" width="12" height="13" alt=""></td>
					<td rowspan="3">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_436.jpg" width="12" height="13" alt=""></td>
					<td colspan="2" rowspan="3">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_437.jpg" width="13" height="13" alt=""></td>
					<td colspan="2" rowspan="3">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_438.jpg" width="13" height="13" alt=""></td>
					<td colspan="2" rowspan="3">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_439.jpg" width="13" height="13" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="1" alt=""></td>
				</tr>
				<tr>
					<td rowspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_440.jpg" width="12" height="12" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="1" alt=""></td>
				</tr>
				<tr>
					<td>
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_441.jpg" width="12" height="11" alt=""></td>
					<td>
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_442.jpg" width="12" height="11" alt=""></td>
					<td colspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_443.jpg" width="13" height="11" alt=""></td>
					<td colspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_444.jpg" width="13" height="11" alt=""></td>
					<td>
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_445.jpg" width="12" height="11" alt=""></td>
					<td>
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_446.jpg" width="13" height="11" alt=""></td>
					<td colspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_447.jpg" width="13" height="11" alt=""></td>
					<td>
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_448.jpg" width="13" height="11" alt=""></td>
					<td>
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_449.jpg" width="12" height="11" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="11" alt=""></td>
				</tr>
				<tr>
					<td rowspan="5">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 4 PLOT 37"  name="block4plot37">37</button></a></td>
					<td rowspan="5">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 4 PLOT 38"  name="block4plot38">38</button></a></td>
					<td colspan="2" rowspan="5">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 4 PLOT 39"  name="block4plot39">39</button></a></td>
					<td rowspan="19">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_453.jpg" width="2" height="133" alt=""></td>
					<td rowspan="19">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_454.jpg" width="1" height="133" alt=""></td>
					<td rowspan="5">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 4 PLOT 40"  name="block4plot40">40</button></a></td>
					<td rowspan="5">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 4 PLOT 41"  name="block4plot41">41</button></a></td>
					<td rowspan="5">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 4 PLOT 42"  name="block4plot42">42</button></a></td>
					<td colspan="2" rowspan="5">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 4 PLOT 43"  name="block4plot43">43</button></a></td>
					<td rowspan="5">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 4 PLOT 44"  name="block4plot44">44</button></a></td>
					<td rowspan="5">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 4 PLOT 45"  name="block4plot45">45</button></a></td>
					<td rowspan="19">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_461.jpg" width="1" height="133" alt=""></td>
					<td colspan="3" rowspan="5">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 3 PLOT 37"  name="block3plot37">37</button></a></td>
					<td colspan="2" rowspan="19">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_463.jpg" width="9" height="133" alt=""></td>
					<td colspan="3" rowspan="5">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 3 PLOT 38"  name="block3plot38">38</button></a></td>
					<td colspan="2" rowspan="5">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 3 PLOT 39"  name="block3plot39">39</button></a></td>
					<td rowspan="5">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 3 PLOT 40"  name="block3plot40">40</button></a></td>
					<td rowspan="5">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 3 PLOT 41"  name="block3plot41">41</button></a></td>
					<td rowspan="5">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 3 PLOT 42"  name="block3plot42">42</button></a></td>
					<td rowspan="19">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_469.jpg" width="1" height="133" alt=""></td>
					<td rowspan="5">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 3 PLOT 43"  name="block3plot43">43</button></a></td>
					<td colspan="2" rowspan="5">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 3 PLOT 44"  name="block3plot44">44</button></a></td>
					<td colspan="2" rowspan="5">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 3 PLOT 45"  name="block3plot45">45</button></a></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="1" alt=""></td>
				</tr>
				<tr>
					<td rowspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_473.jpg" width="51" height="5" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="2" alt=""></td>
				</tr>
				<tr>
					<td rowspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_474.jpg" width="51" height="5" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="3" alt=""></td>
				</tr>
				<tr>
					<td rowspan="8">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:51; height:31; font-size:8px" class="w3-blue"alt="FAMILY STATE PLOT 12" name="familystateplot12">12</button></a></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="2" alt=""></td>
				</tr>
				<tr>
					<td rowspan="8">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:51; height:32; font-size:8px" class="w3-blue"alt="FAMILY STATE PLOT 26" name="familystateplot26">26</button></a></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="3" alt=""></td>
				</tr>
				<tr>
					<td>
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_477.jpg" width="12" height="9" alt=""></td>
					<td>
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_478.jpg" width="12" height="9" alt=""></td>
					<td colspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_479.jpg" width="13" height="9" alt=""></td>
					<td>
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_480.jpg" width="12" height="9" alt=""></td>
					<td>
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_481.jpg" width="12" height="9" alt=""></td>
					<td>
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_482.jpg" width="13" height="9" alt=""></td>
					<td colspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_483.jpg" width="13" height="9" alt=""></td>
					<td>
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_484.jpg" width="13" height="9" alt=""></td>
					<td>
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_485.jpg" width="12" height="9" alt=""></td>
					<td colspan="3" rowspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_486.jpg" width="12" height="10" alt=""></td>
					<td colspan="3" rowspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_487.jpg" width="13" height="10" alt=""></td>
					<td colspan="2" rowspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_488.jpg" width="13" height="10" alt=""></td>
					<td rowspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_489.jpg" width="12" height="10" alt=""></td>
					<td rowspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_490.jpg" width="12" height="10" alt=""></td>
					<td rowspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_491.jpg" width="12" height="10" alt=""></td>
					<td rowspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_492.jpg" width="12" height="10" alt=""></td>
					<td colspan="2" rowspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_493.jpg" width="13" height="10" alt=""></td>
					<td colspan="2" rowspan="3">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_494.jpg" width="13" height="11" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="9" alt=""></td>
				</tr>
				<tr>
					<td rowspan="3">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 4 PLOT 46"  name="block4plot46">46</button></a></td>
					<td rowspan="3">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 4 PLOT 47"  name="block4plot47">47</button></a></td>
					<td colspan="2" rowspan="3">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 4 PLOT 48"  name="block4plot48">48</button></a></td>
					<td rowspan="3">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 4 PLOT 49"  name="block4plot49">49</button></a></td>
					<td rowspan="3">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 4 PLOT 50"  name="block4plot50">50</button></a></td>
					<td rowspan="3">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 4 PLOT 51"  name="block4plot51">51</button></a></td>
					<td colspan="2" rowspan="3">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 4 PLOT 52"  name="block4plot52">52</button></a></td>
					<td rowspan="3">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 4 PLOT 53"  name="block4plot53">53</button></a></td>
					<td rowspan="3">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 4 PLOT 54"  name="block4plot54">54</button></a></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="1" alt=""></td>
				</tr>
				<tr>
					<td colspan="3" rowspan="3">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 3 PLOT 46"  name="block3plot46">46</button></a></td>
					<td rowspan="12">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_505.jpg" width="1" height="112" alt=""></td>
					<td colspan="2" rowspan="3">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 3 PLOT 47"  name="block3plot47">47</button></a></td>
					<td colspan="2" rowspan="3">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 3 PLOT 48"  name="block3plot48">48</button></a></td>
					<td rowspan="3">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 3 PLOT 49"  name="block3plot49">49</button></a></td>
					<td colspan="2" rowspan="3">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 3 PLOT 50"  name="block3plot50">50</button></a></td>
					<td rowspan="3">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 3 PLOT 51"  name="block3plot51">51</button></a></td>
					<td rowspan="3">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 3 PLOT 52"  name="block3plot52">52</button></a></td>
					<td rowspan="12">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_512.jpg" width="2" height="112" alt=""></td>
					<td colspan="2" rowspan="3">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 3 PLOT 53"  name="block3plot53">53</button></a></td>
					<td rowspan="12">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_514.jpg" width="11" height="112" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="1" alt=""></td>
				</tr>
				<tr>
					<td colspan="2" rowspan="2">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:12px; height:11px; font-size:8px" class="w3-blue"alt="BLOCK 3 PLOT 54"  name="block3plot54">54</button></a></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="10" alt=""></td>
				</tr>
				<tr>
					<td rowspan="10">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_516.jpg" width="12" height="101" alt=""></td>
					<td rowspan="10">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_517.jpg" width="12" height="101" alt=""></td>
					<td colspan="2" rowspan="10">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_518.jpg" width="13" height="101" alt=""></td>
					<td rowspan="10">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_519.jpg" width="12" height="101" alt=""></td>
					<td rowspan="10">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_520.jpg" width="12" height="101" alt=""></td>
					<td rowspan="10">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_521.jpg" width="13" height="101" alt=""></td>
					<td colspan="2" rowspan="10">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_522.jpg" width="13" height="101" alt=""></td>
					<td rowspan="10">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_523.jpg" width="13" height="101" alt=""></td>
					<td rowspan="10">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_524.jpg" width="12" height="101" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="1" alt=""></td>
				</tr>
				<tr>
					<td colspan="3" rowspan="9">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_525.jpg" width="12" height="100" alt=""></td>
					<td colspan="2" rowspan="9">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_526.jpg" width="12" height="100" alt=""></td>
					<td colspan="2" rowspan="9">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_527.jpg" width="13" height="100" alt=""></td>
					<td rowspan="9">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_528.jpg" width="12" height="100" alt=""></td>
					<td colspan="2" rowspan="9">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_529.jpg" width="13" height="100" alt=""></td>
					<td rowspan="9">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_530.jpg" width="12" height="100" alt=""></td>
					<td rowspan="9">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_531.jpg" width="12" height="100" alt=""></td>
					<td colspan="2" rowspan="9">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_532.jpg" width="13" height="100" alt=""></td>
					<td colspan="2" rowspan="9">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_533.jpg" width="13" height="100" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="4" alt=""></td>
				</tr>
				<tr>
					<td rowspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_534.jpg" width="51" height="7" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="3" alt=""></td>
				</tr>
				<tr>
					<td>
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_535.jpg" width="51" height="4" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="4" alt=""></td>
				</tr>
				<tr>
					<td>
						<button onclick="document.getElementById('id02').style.display='block'" style="width:51; height:32; font-size:8px" class="w3-blue"alt="FAMILY STATE PLOT 13" name="familystateplot13">13</button></a></td>
					<td>
						<button onclick="document.getElementById('id02').style.display='block'" style="width:51; height:32; font-size:8px" class="w3-blue"alt="FAMILY STATE PLOT 27" name="familystateplot27">27</button></a></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="32" alt=""></td>
				</tr>
				<tr>
					<td>
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_538.jpg" width="51" height="2" alt=""></td>
					<td rowspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_539.jpg" width="51" height="4" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="2" alt=""></td>
				</tr>
				<tr>
					<td rowspan="2">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:51; height:31; font-size:8px" class="w3-blue"alt="FAMILY STATE PLOT 14" name="familystateplot14">14</button></a></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="2" alt=""></td>
				</tr>
				<tr>
					<td rowspan="2">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:51; height:32; font-size:8px" class="w3-blue"alt="FAMILY STATE PLOT 28" name="familystateplot28">28</button></a></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="29" alt=""></td>
				</tr>
				<tr>
					<td rowspan="2">
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_542.jpg" width="51" height="24" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="3" alt=""></td>
				</tr>
				<tr>
					<td>
						<img src="images3/Bogo-Memorial-Park-Map-Photoshop_543.jpg" width="51" height="21" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="21" alt=""></td>
				</tr>
				<tr>
					<td>
						<img src="images3/spacer.gif" width="34" height="1" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="51" height="1" alt=""></td>
					<td>
						<img src="image3/spacer.gif" width="63" height="1" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="12" height="1" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="1" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="9" height="1" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="12" height="1" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="9" height="1" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="2" height="1" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="11" height="1" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="2" height="1" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="7" height="1" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="1" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="12" height="1" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="11" height="1" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="12" height="1" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="7" height="1" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="13" height="1" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="9" height="1" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="2" height="1" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="11" height="1" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="1" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="11" height="1" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="13" height="1" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="7" height="1" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="12" height="1" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="127" height="1" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="2" height="1" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="1" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="10" height="1" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="1" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="1" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="7" height="1" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="2" height="1" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="1" height="1" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="10" height="1" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="2" height="1" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="7" height="1" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="2" height="1" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="10" height="1" alt=""></td>
					<td>
						<img src="images3/spacer.gif" width="3" height="1" alt=""></td>
				<td>
					<img src="images3/spacer.gif" width="7" height="1" alt=""></td>
				<td>
					<img src="images3/spacer.gif" width="12" height="1" alt=""></td>
				<td>
					<img src="images3/spacer.gif" width="9" height="1" alt=""></td>
				<td>
					<img src="images3/spacer.gif" width="1" height="1" alt=""></td>
				<td>
					<img src="images3/spacer.gif" width="12" height="1" alt=""></td>
				<td>
					<img src="images3/spacer.gif" width="9" height="1" alt=""></td>
				<td>
					<img src="images3/spacer.gif" width="1" height="1" alt=""></td>
				<td>
					<img src="images3/spacer.gif" width="12" height="1" alt=""></td>
				<td>
					<img src="images3/spacer.gif" width="8" height="1" alt=""></td>
				<td>
					<img src="images3/spacer.gif" width="1" height="1" alt=""></td>
				<td>
					<img src="images3/spacer.gif" width="12" height="1" alt=""></td>
				<td>
					<img src="images3/spacer.gif" width="9" height="1" alt=""></td>
				<td>
					<img src="images3/spacer.gif" width="2" height="1" alt=""></td>
				<td>
					<img src="images3/spacer.gif" width="11" height="1" alt=""></td>
				<td>
					<img src="image3/spacer.gif" width="2" height="1" alt=""></td>
				<td>
					<img src="images3/spacer.gif" width="11" height="1" alt=""></td>
				<td>
					<img src="images3/spacer.gif" width="12" height="1" alt=""></td>
				<td>
					<img src="images3/spacer.gif" width="1" height="1" alt=""></td>
				<td>
					<img src="images3/spacer.gif" width="61" height="1" alt=""></td>
				<td>
					<img src="images3/spacer.gif" width="51" height="1" alt=""></td>
				<td>
					<img src="images3/spacer.gif" width="36" height="1" alt=""></td>
				<td></td>
			</tr>
			</table>
			<!-- End Save for Web Slices -->

			
				<!--RIGHT CONTENT SEARCH BAR-->
		<div class="map">
			<div class="w3-container">
				<br>
				<h2>Deceased Person Information</h2>
				<form method="POST" action="">
					<div class="w3-bar w3-light-grey w3-border w3-padding search">
						<input type="text" class="w3-bar-item w3-input w3-white w3-mobile"  name="keyword" placeholder="Search.." autocomplete="off">
						<button class="w3-bar-item w3-button w3-blue w3-mobile " name="search">Search</button>
					</div>
				</form>
				<!--  ACCESSING SEARCH FILE -->
				<?php include'search.php'?>
			</div>
			<br>
			<br>
			<!--AVAILABILITY-->
			<div class="availability">
				<div class="Available">
					<h5>Available</h5>
				</div>
				<br>
				<div class="notavailable">
					<h5>Not Available</h5>
				</div>
			</div>
		</div>

		<!-- RESERVATION-->
		<div class="w3-container">
		<!-- <h2>W3.CSS Modal</h2> -->
			<button onclick="document.getElementById('id02').style.display='block'" class="w3-button w3-white"></button>
			<!-- <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black">Open Modal2</button>
		<button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black">Open Moda3l</button> -->
	
	
		<!-- Modal Form-->
		<div id="id02" class="w3-modal w3-padding-16">
		<div class="w3-modal-content">
			<div class="w3-container">
			<span onclick="document.getElementById('id02').style.display='none'" class="w3-button w3-display-topright">&times;</span>
			<hr col="5">
			<div class="w3-container w3-blue">
				<h2>Reservation Form</h2></div>
				<form action="code.php" method="POST" class="row g-3">

					<div class="row mt-5">
			
						<!-- <center> <h3 class="mt-">Reservation Form</h3></center> -->
						<hr class="s-2 text-black">
						<div class="col-md-6">
							<label for="inputEmail4" class="form-label">Fullname</label>
							<!-- <input type="text" class="form-control fullname" placeholder="Full name" aria-label="Full name" name="fullname" required>  -->
							<input type="text" class="form-control" id="inputEmail4" name="fullname" required>
						</div>
						
						<div class="col-md-6">
							<label for="inputState" class="form-label">Packages</label>
							<select id="inputState" class="form-select" name="package" required>
							<option value="" disabled selected>Choose...</option>
							<option value="lawn"> Lawn</option>
							<option value="garden"> Garden</option>
							<option value="family">Family State</option>
							</select>
						</div>
						<div class="col-12 mt-2">
							<!-- <input type="text" class="form-control fullname" placeholder="Email" aria-label="Full name" name="email" required>  -->
							<label for="inputState" class="form-label">Email</label>
							<input type="email" class="form-control" id="inputEmail4" name="email" required>
						</div>
						<div class="col-12  mt-3">
							<!-- <label for="inputState" class="form-label">Gender</label> -->
							<label for="inputState" class="form-label">Block Number</label>
							<select id="inputState" class="form-select" name="blocknumber" required>
								<option value="" disabled selected>Choose...</option>
								<option value="Block 1">Block 1</option>
								<option value="Block 2">Block 2</option>
								<option value="Block 3">Block 3</option>
								<option value="Block 4">Block 4</option>
							</select>
						</div>
						<div class="col mt-2">
							<!-- <input type="number" class="form-control contact" placeholder="Contact number" aria-label="Contact number" name="contact" required> -->
							<label for="inputState" class="form-label">Contact</label>
							<input type="number" class="form-control" id="inputEmail4"  name="contact" required>
						</div>
						<div class="col mt-2">
							<!-- <input type="text" class="form-control" placeholder="Plot number" aria-label="Plot number"required> -->
							<label for="inputState" class="form-label">Plot Number</label>
							<select id="inputState" class="form-select" name="plotnumber" required>
								<option value=""disabled selected>Choose...</option> 
								<option value="Plot 1">Plot 1</option>
								<option value="Plot 2">Plot 2</option>
								<option value="Plot 3">Plot 3</option>
								<option value="Plot 4">Plot 4</option>
								<option value="Plot 5">Plot 5</option>
								<option value="Plot 6">Plot 6</option>
								<option value="Plot 7">Plot 7</option>
								<option value="Plot 8">Plot 8</option>
								<option value="Plot 9">Plot 9</option>
								<option value="Plot 10">Plot 10</option>
								<option value="Plot 11">Plot 11</option>
								<option value="Plot 12">Plot 12</option>
								<option value="Plot 13">Plot 13</option>
								<option value="Plot 14">Plot 14</option>
								<option value="Plot 15">Plot 15</option>
								<option value="Plot 16">Plot 16</option>
								<option value="Plot 17">Plot 17</option>
								<option value="Plot 18">Plot 18</option>
								<option value="Plot 19">Plot 19</option>
								<option value="Plot 20">Plot 20</option>
								<option value="Plot 21">Plot 21</option>
								<option value="Plot 22">Plot 22</option>
								<option value="Plot 23">Plot 23</option>
								<option value="Plot 24">Plot 24</option>
								<option value="Plot 25">Plot 25</option>
								<option value="Plot 26">Plot 26</option>
								<option value="Plot 27">Plot 27</option>
								<option value="Plot 28">Plot 28</option>
								<option value="Plot 29">Plot 29</option>
								<option value="Plot 30">Plot 30</option>
								<option value="Plot 31">Plot 31</option>
								<option value="Plot 32">Plot 32</option>
								<option value="Plot 33">Plot 33</option>
								<option value="Plot 34">Plot 34</option>
								<option value="Plot 35">Plot 35</option>
								<option value="Plot 36">Plot 36</option>
								<option value="Plot 37">Plot 37</option>
								<option value="Plot 38">Plot 38</option>
								<option value="Plot 39">Plot 39</option>
								<option value="Plot 40">Plot 40</option>
								<option value="Plot 41">Plot 41</option>
								<option value="Plot 42">Plot 42</option>
								<option value="Plot 43">Plot 43</option>
								<option value="Plot 44">Plot 44</option>
								<option value="Plot 45">Plot 45</option>
								<option value="Plot 46">Plot 46</option>
								<option value="Plot 47">Plot 47</option>
								<option value="Plot 48">Plot 48</option>
								<option value="Plot 49">Plot 49</option>
								<option value="Plot 50">Plot 50</option>
								<option value="Plot 51">Plot 51</option>
								<option value="Plot 52">Plot 52</option>
								<option value="Plot 53">Plot 53</option>
								<option value="Plot 54">Plot 54</option>
							</select>
						</div>
						<br>
						<br>
						<center>
							<div class="button">
									<button type="submit" name="add"  class="btn submit mt-5 ">Submit</button>
									<!-- <button type="reset" class="btn cancel mt-5 ">Cancel</button> -->
									<a href="userlandingpage.php" class="btn cancel mt-5 ">Cancel</a>
							</div>
						</center>
						<br>
						<br>
					</div>
				</form>
			
			</div>
		</div>
	</div>


</div>
</body>
</html>