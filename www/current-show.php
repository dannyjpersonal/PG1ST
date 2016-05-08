<?php
date_default_timezone_set('Europe/Rome');
$djs = array(
	"danny" => array(
		"name" => "AutoDJ",
		"image" => "./images/images.png"

	)
);

$liveshow = True;



$roster = array(
	"monday" => array(
		array("start" => 0, "end" => 24, "dj" => "danny", "show" => "Breakbeat selection", "info" => "badest")
	),
	"tuesday" => array(
		array("start" => 0, "end" => 24, "dj" => "danny", "show" => "Breakbeat selection", "info" => "badest")
	),
	"wednesday" => array(
		array("start" => 0, "end" => 24, "dj" => "danny", "show" => "Breakbeat selection", "info" => "badest")
	),
	"thursday" => array(
		array("start" => 0, "end" => 24, "dj" => "danny", "show" => "Breakbeat selection", "info" => "badest")
	),
	"friday" => array(
		array("start" => 0, "end" => 24, "dj" => "danny", "show" => "Breakbeat selection", "info" => "badest")
	),
	"saturday" => array(
		array("start" => 0, "end" => 24, "dj" => "danny", "show" => "Breakbeat selection", "info" => "badest")
	),
	"sunday" => array(
		array("start" => 0, "end" => 24, "dj" => "danny", "show" => "Breakbeat selection", "info" => "badest")
	)
);



try {
	$today = strtolower(date('l'));
	$rosterToday = $roster[$today];
	$currentShow = null;
	foreach($rosterToday as $show) {
		if($show["start"] < (int)date('G') && $show["end"] > (int)date('G')) {
			$currentShow = $show;
			$currentShow["day"] = $today;
			$currentShow["dj"] = $djs[$show["dj"]];
			break;
		}
	}

	header('Content-type: application/json');
	echo json_encode($currentShow);
} catch (Exception $e) {
	echo json_encode(array("status" => "error", "message" => $e->message));
	var_dump($e);
}
?>
