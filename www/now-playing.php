<?php
$ip = "91.121.163.211";
$port = "8000";

try {
	$fp = @fsockopen($ip,$port,$errno,$errstr,1);
	header("Content-type: application/json");
	if (!$fp) {
		echo json_encode(array("status" => "error", "message" => "connection refused."));
		exit;
	}

	fputs($fp, "GET /7.html HTTP/1.0\r\nUser-Agent: Mozilla\r\n\r\n");

	while (!feof($fp))
		$info = fgets($fp);

	$info = str_replace('</body></html>', "", $info);
	$split = explode(',', $info);
	if (empty($split[6])) {
		echo json_encode(array("status" => "no-stream", "message" => "we're off air"));
		exit;
	}

	$title = str_replace('\'', '`', $split[6]);
	$title = str_replace(',', ' ', $title);
	echo json_encode(array(
		"status" => "success",
		"track" => $title
	));
} catch (Exception $e) {
	echo json_encode(array("status" => "error", "message" => $e->message));
	var_dump($e);
}
