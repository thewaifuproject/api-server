<?php
header("Access-Control-Allow-Origin: *");

if(array_key_exists("waifu" , $_GET)){
	$waifuId = htmlspecialchars($_GET["waifu"]);
        include_once __DIR__."/model/connectDB.php";
        include_once __DIR__."/model/getWaifu.php";
	$con=connectDB();
        $waifu=getWaifu($con, $waifuId);
	if(!empty($waifu)){
		$waifu=$waifu[0];
		$waifuEncoded=array(
			"title"=>"Waifu Metadata",
			"type"=>"waifu",
			"properties"=>array(
				"name"=>array(
					"type"=>"string",
					"description"=>$waifu["name"]
				),
				"description"=>array(
					"type"=>"string",
					"description"=>$waifu["description"]
				),
				"image"=>array(
					"type"=>"string",
					"description"=>$waifu["display_picture"]
				)
			)
		);	
                echo json_encode($waifuEncoded);
	} else {
		http_response_code(404);
		include("404.html");
	}
} else {
	http_response_code(400);
	include("400.html");
}
?>
