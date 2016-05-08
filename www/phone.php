<!DOCTYPE html>
<?php
require_once('includes/config.php');
?>


<html lang="en">
<head>

        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <style>
            body {
                padding-top: 20px;
                padding-bottom: 20px;
            }

        </style>

        <link rel="stylesheet" href="/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="/fonts/font-awesome.css">
        <link rel="stylesheet" type="text/css" media="all" href="/audiocss/styles.css">
	    	<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js'></script>
    		<script type='text/javascript' src='/js/bootstrap.js'></script>
    		<script src="js/boomselection.js"></script>
        <script src="js/scroll_song_overflow.js"></script>
        <script src="js/clock.js"></script>
        <script src="js/recent_tracks.js"></script>
        <script src="js/mediaelement-and-player.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
    		<!-- <script src="../js/eq.js"></script>
        <script src="../js/bggrad.js"></script> -->
<script type="text/javascript">
$(function(){
  $('#audio-player').mediaelementplayer({
    alwaysShowControls: true,
    features: ['playpause','progress','volume'],
    audioVolume: 'horizontal',
    audioWidth: 450,
    audioHeight: 70,
    iPadUseNativeControls: true,
    iPhoneUseNativeControls: true,
    AndroidUseNativeControls: true
  });
});
</script>
</head>



<body onload="startTime()">
  <div class="container">
    </br>


<div class="row">






<!-- <div class="col-md-5"> -->
<div class="col-md-4">
<div class="panel panel-default">
	<div class="panel-heading"><h3 class="indent">Current Show</h3>


  </div>

	<br></br>
	<div class="current-show">
  <!--   <?php include("profile_dj.php"); ?> -->

		<div class="profile-circular-mask"><img class="alignnone" style="width: 128px; height: 128px;"/></div><br>

		<div class="dj" style="font-weight: bold; font-size: 33px;">Loading ...</div>
		<!--<div class="info" style="font-weight: bold;">Loading ...</div>-->
		<div class="show" style="font-size: 20; color: wheat;">Loading ...</div>
	</div>
	<br>

  <div id="">

	</div>


	<strong class="error"></strong>
<!--
	<audio style="margin-top: 21px; width: 100%;" preload="false" controls autoplay src="http://91.121.163.211:8005/stream"></audio>
-->
      <div class="audio-player">
      <div class="" style="padding-top: 9px;">Current song: <a href="http://91.121.163.211:2199/tunein/boomselection.pls" id="cc_strinfo_song_boomselection" class="cc_streaminfo">Loading ...</a></div>
        <audio id="audio-player" style="margin-top: 21px; width: 100%;" autoplay src="http://91.121.163.211:8000/stream" type="audio/mp3" controls="controls"></audio>
      </div><!-- @end .audio-player -->

</div>
</div>

<div class="col-md-4">
  <div class="panel panel-default">
  <div class="panel-heading">
  <h3 class="indent">Tracklist (AutoDJ)</h3>
  </div>
    <div style="padding: 20px;">
        <div id="cc_recenttracks_boomselection" class="cc_recenttracks_list">Loading ...</div>
    </div>
  </div>
</div>



<script language="javascript" type="text/javascript" src="http://91.121.163.211:2199/system/recenttracks.js"></script>
<script language="javascript" type="text/javascript" src="http://91.121.163.211:2199/system/request.js"></script>
<script language="javascript" type="text/javascript" src="http://91.121.163.211:2199/system/streaminfo.js"></script>
</br></br></br></br></br></br></br>
</div>

</body>
</html>
