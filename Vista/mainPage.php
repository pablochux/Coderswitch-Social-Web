<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title> Inicio </title>
	<link rel="stylesheet" type="text/css" href="./CSS/mainPageStyle.css">
</head>
<body>

<?php
include("./menu.html");


// Comprobación usuario

session_start();

if (!isset($_SESSION["user"])) {

	header("Location: ./index.php");

}


?>

<div id="cabeza">

	<h1> Inicio </h1>
</div>
<div id="social"> </div>

	<div id="RSS">
<!-- start feedwind code --><script type="text/javascript" src="//feed.mikle.com/js/rssmikle.js"></script><script type="text/javascript">(function() {var params = {rssmikle_url: "http://coderswitch.com/blog/",rssmikle_frame_width: "400",rssmikle_frame_height: "800",rssmikle_target: "_blank",rssmikle_font: "Arial, Helvetica, sans-serif",rssmikle_font_size: "13",rssmikle_border: "off",responsive: "on",rssmikle_css_url: "",text_align: "left",text_align2: "left",corner: "on",scrollbar: "on",autoscroll: "off",scrolldirection: "up",scrollstep: "3",mcspeed: "20",sort: "New",rssmikle_title: "on",rssmikle_title_sentence: "Coderswitch Blog",rssmikle_title_link: "http://coderswitch.com/blog/",rssmikle_title_bgcolor: "#0066FF",rssmikle_title_color: "#FFFFFF",rssmikle_title_bgimage: "",rssmikle_item_bgcolor: "#FFFFFF",rssmikle_item_bgimage: "",rssmikle_item_title_length: "85",rssmikle_item_title_color: "#000000",rssmikle_item_border_bottom: "on",rssmikle_item_description: "on",item_link: "on",rssmikle_item_description_length: "200",rssmikle_item_description_color: "#383838",rssmikle_item_date: "gl1",rssmikle_timezone: "Etc/GMT",datetime_format: "%b %e, %Y %l:%M:%S %p",rssmikle_item_description_tag: "on_html",rssmikle_item_description_image_scaling: "on",article_num: "15",rssmikle_item_podcast: "off",keyword_inc: "",keyword_exc: ""};feedwind_show_widget_iframe(params);})();</script><div style="font-size:10px; text-align:center; "><a href="http://feed.mikle.com/" target="_blank" style="color:#CCCCCC;">RSS Feed Widget</a><!--Please display the above link in your web page according to Terms of Service.--></div><!-- end feedwind code -->
	</div>

	<div id="twitterTimeline">
		
	<a class="twitter-timeline" href="https://twitter.com/coderswitch" data-widget-id="494052300671823872"></a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

	</div>

		<div id="redesSociales"> 

			<h1 id="h1"> Redes Sociales </h1>
				<div id="social1">
					<a href="http://coderswitch.com/curso/" class="enl"> 
						<img width="65px" height="65px" src="./img/Iconos/internet-web-browser-128.png"> 
					</a>

					<a href="http://twitter.com/coderswitch" class="enl"> 
						<img width="65px" height="65px" src="./img/Iconos/twitter111.png"> 
					</a>
				</div>
				
				<div id="social2">

					<a href="http://coderswitch.com/blog/" class="enl"> 
						<img width="65px" height="65px" src="./img/Iconos/blogger111.png"> 
					</a>

					<a href="mailto:info@coderswitch.com" class="enl"> 
						<img width="65px" height="65px" src="./img/Iconos/email111.png"> 
					

				</div>

		</div>





</body>
</html>