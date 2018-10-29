<?php
if(array_key_exists("waifu" , $_GET)){
	$waifu = htmlspecialchars($_GET["waifu"]);
	if(waifu_exists){
		echo("a");
	} else {
		http_response_code(404);
		include("404.html");
	}
} else {
	http_response_code(400);
	include("400.html");
}
?>
