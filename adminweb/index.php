<?php
  
  include "../config/koneksi.php";
  include "../config/inc.session.php";	
  include "../config/fungsi_indotgl.php";
  include "../config/library.php";
?>

<!DOCTYPE html>
<html>
<head>
<title>:: Control Panel Cashier ::</title>
<link href="../css/adminstyle.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
<style type="text/css">
h2 {
	color: #31A742;
}
</style>
<script src="../js/clock.js" type="text/javascript"></script>

<script language="JavaScript">
var txt=" Welcome to Web Cashier System ";
var kecepatan=500;var segarkan=null;function bergerak() { document.title=txt;
txt=txt.substring(1,txt.length)+txt.charAt(0);
segarkan=setTimeout("bergerak()",kecepatan);}bergerak();
</script>

<script language="javascript">
function logout()
{
	tanya=confirm("Do You Want to Quit ?")
	if (tanya !="0")
	{
		top.location="login_out.php"
	}
}
</script>

<!-- TinyMcpuk -->
<script language="javascript" type="text/javascript" src="tinymcpuk-0.3/tiny_mce.js"></script>
<script language="javascript" type="text/javascript">
	tinyMCE.init({
		mode : "textareas",//exact or textareas
		theme : "advanced",//simple
		plugins : "youtube,table,save,advhr,advimage,advlink,emotions,iespell,insertdatetime,preview,zoom,flash,searchreplace,print,paste,directionality,fullscreen,noneditable,contextmenu",
		theme_advanced_buttons1_add_before : "",
		theme_advanced_buttons1_add : "fontsizeselect",
		theme_advanced_buttons2_add : "preview,forecolor",
		theme_advanced_buttons2_add_before: "pastetext,pasteword,emotions,print,",
		theme_advanced_buttons3_add_before : "tablecontrols",
		theme_advanced_buttons3_add : "fullscreen",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		plugin_insertdate_dateFormat : "%Y-%m-%d",
		plugin_insertdate_timeFormat : "%H:%M:%S",
		extended_valid_elements : "hr[class|width|size|noshade]",
		file_browser_callback : "fileBrowserCallBack",
		paste_use_dialog : false,
		theme_advanced_resizing : true,
		theme_advanced_resize_horizontal : false,
		theme_advanced_link_targets : "_something=My somthing;_something2=My somthing2;_something3=My somthing3;",
		media_strict : false,
		apply_source_formatting : true
	});

	function fileBrowserCallBack(field_name, url, type, win) {
		var connector = "../../filemanager/browser.html?Connector=connectors/php/connector.php";
		var enableAutoTypeSelection = true;
		
		var cType;
		tinymcpuk_field = field_name;
		tinymcpuk = win;
		
		switch (type) {
			case "image":
				cType = "Image";
				break;
			case "flash":
				cType = "Flash";
				break;
			case "file":
				cType = "File";
				break;
		}
		
		if (enableAutoTypeSelection && cType) {
			connector += "&Type=" + cType;
		}
		
		window.open(connector, "tinymcpuk", "modal,width=600,height=400");
	}
</script>
<!-- /TinyMcpuk -->

<meta charset="utf-8">
</head>

<body OnLoad="startclock()">
<div id="main">
	<div id="header"> </div>
		<div id="wrapper">
			<div id="menukiri">
			  <div id="menu">
					<a href="index.php">HOME</a>
					<a href="?p=tampil_barang">ITEMS</a>
					<a href="?p=tampil_kategori">ITEMS CATEGORYS</a>
					<a href="?p=tampil_transaksi">TRANSACTION</a>
                    <a href="?p=tampil_suplier">SUPPLIER</a>
          
          <a class="active" href="#" title="Keluar" onClick="logout()">LOGOUT</a>
        </div>
		  </div>
			<div id="menukanan">
           <div style="padding-left:342px; padding-top:15px;color:#000000;"><span id="date"></span>,<span id="clock"></span></div>
				<?php
				
					//error_reporting(E_ALL ^ E_NOTICE);
					if(isset($_GET['p'])){
						$p = $_GET['p'];
					}
					if(empty($p) || $p=="" ) { 
					$p="main"; 
					}
					if(file_exists($p.".php")) {
						include $p.".php";
					}
					else {
						include "main.php";
					}
				
				?>

			</div>
		</div>
	<div id="clearer"></div>
	<div id="footer">&copy; Copyright 2018 System Cashier All Rights Reserved </div>
</div>
</body>
</html>
