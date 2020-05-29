<!--
/********************************
/ Latlong Picker
/ FILENAME      : map.php
/ MODIFIED BY   : EKO VERIANTO
/ MODIFIED DATE : 23 Mei 2020
/*******************************/
-->

<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/OpenLayers.js"></script>

<link href="css/jquery-position-picker.css" rel="stylesheet" type="text/css"/>
<script src="js/jquery-position-picker.debug.js"></script>

<div class='gllpLatlonPicker'>
	<div class='gllpMap'></div>
	&#8627; <font color='red'>Klik 2X Pada Peta Untuk <b>Zoom</b></font> 
	<br />
	&#8627; <font color='red'>Klik 1X Pada Peta Untuk Menandai Lokasi Dengan <b>Marker</b></font> 
	<br /> <br />
	<input type='text' name='titik_lat' class='gllpLatitude' value='-6.908' readonly/> &#8592 <font color='red'>Latitude</font> <br/> <br/>
	<input type='text' name='titik_long' class='gllpLongitude' value='109.7326' readonly/> &#8592 <font color='red'>Longitude</font> <br/> <br/>
	<input type='text' class='gllpZoom' readonly/> &#8592 <font color='red'>Zoom</font> <br /> <br/>
</div>