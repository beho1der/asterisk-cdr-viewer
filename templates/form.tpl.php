<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link type="text/css" href="style/jquery-ui-1.8.20.custom.css" rel="stylesheet" />
  <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script> 
  <script type="text/javascript" src="js/jquery-ui-1.8.20.custom.min.js"></script> 
  <script type="text/javascript" src="js/jquery-ui-timepicker-addon.js"></script>
  <script type="text/javascript" src="js/my.js"></script>
  <script type="text/javascript" src="js/selectbox.js"></script>
  <script type='text/javascript' src="js/jquery.tablesorter.min.js"></script>
  <script type='text/javascript' src="js/jquery.tablesorter.widgets.js"></script>  
  <link href="style/selectbox.css" rel="stylesheet" type="text/css"/>
  <title>Asterisk Call Detail Records</title>
  <link rel="stylesheet" href="style/screen.css" type="text/css"  />
  <link rel="shortcut icon" href="style/images/favicon.ico" />
</head>
<body>
<div id="conten_header"> 
<div class="title_font">*</div><div id="logo"><h1>Asterisk CDR Viewer</h1></div>
</div>
<!-- main -->
<fieldset class="main">
<legend class="main">Call Detail Record Search</legend>
<form method="post"  id="myForm" >
<div id="content_data">
<span style="padding:80px;"><B>From:<B></span><span style="padding:100px;"><B>To:</B></span><BR>
<input type="text" class="data" name="time_start" id="time_start"  />
<input type="text" class="data" name="time_end" id="time_end" />
</div>
<!-- левый вертикальный(left vertical) -->
<div id="content_left">
<fieldset class="order">
<legend class="order">Order By</legend>
<input type="text" class="order" name="channel" id="channel" placeholder="channel" />
<input type="text" class="order" name="src" id="src" value="" placeholder="src" />
<input type="text" class="order" name="clid" id="clid" value="" placeholder="clid" />
<input type="text" class="order" name="dstchannel" id="dstchannel" value=""  placeholder="dstchannel" />
<input type="text" class="order" name="dst" id="dst" value="" placeholder="dst" />
<input type="text" class="order" name="userfield" id="userfield" value=""  placeholder="userfield"/>
<input type="text" class="order" name="accountcode" id="accountcode" value="" placeholder="accountcode" />
<label class="duration">Duration Between</label>
<input type="text" class="order" name="dur_min" value="" placeholder="min,sec" />
<input type="text" class="order" name="dur_max" value="" placeholder="max,sec" />
</fieldset>
</div>
<!-- центральный блок (the central unit)-->
<div id="content_middle">
<fieldset class="search">
<legend class="order">&nbsp;&nbsp;&nbsp;Not&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Search conditions</legend>
<!-- channel --->
<!-- 2 way checkbox with JS --->
<p class="field switch">
<label class="cb-enable"><span>On</span></label>
<label class="cb-disable selected"><span>Off</span></label>
<input type="checkbox" class="checkbox" name="channel_neg" value="true" />
</p>
<!-- 4 way botton only CSS3 --->
<input type="radio" name="channel_mod" id="group1" value="begins_with" />
<label for="group1" class="begin"><span>Begin With</span></label>
<input type="radio" name="channel_mod" id="group2" value="contains" checked/>
<label for="group2" class="contains"><span>Contains</span></label>
<input type="radio" name="channel_mod" id="group3" value="exact" />
<label for="group3" class="exactly"><span>Exactly</span></label>
<input type="radio" name="channel_mod" id="group4" value="ends_with" />
<label for="group4" class="end"><span>Ends With</span></label>
<!-- src --->
<p class="field switch" name="src_neg">
<label class="cb-enable"><span>On</span></label>
<label class="cb-disable selected"><span>Off</span></label>
<input type="checkbox" class="checkbox" name="src_neg" value="true" />
</p>
<input type="radio" name="src_mod" id="group5" value="begins_with" />
<label for="group5" class="begin"><span>Begin With</span></label>
<input type="radio" name="src_mod" id="group6" value="contains" checked/>
<label for="group6" class="contains"><span>Contains</span></label>
<input type="radio" name="src_mod" id="group7" value="exact" />
<label for="group7" class="exactly"><span>Exactly</span></label>
<input type="radio" name="src_mod" id="group8" value="ends_with" />
<label for="group8" class="end"><span>Ends With</span></label>
<!----clid --->
<p class="field switch" name="clid_neg">
<label class="cb-enable"><span>On</span></label>
<label class="cb-disable selected"><span>Off</span></label>
<input type="checkbox" class="checkbox" name="clid_neg" value="true" />
</p>
<input type="radio" name="clid_mod" id="group9" value="begins_with" />
<label for="group9" class="begin"><span>Begin With</span></label>
<input type="radio" name="clid_mod" id="group10" value="contains" checked/>
<label for="group10" class="contains"><span>Contains</span></label>
<input type="radio" name="clid_mod" id="group11" value="exact" />
<label for="group11" class="exactly"><span>Exactly</span></label>
<input type="radio" name="clid_mod" id="group12" value="ends_with" />
<label for="group12" class="end"><span>Ends With</span></label>
<!----dstchannel --->
<p class="field switch" name="dstchannel_neg">
<label class="cb-enable"><span>On</span></label>
<label class="cb-disable selected"><span>Off</span></label>
<input type="checkbox" class="checkbox" name="dstchannel_neg" value="true" />
</p>
<input type="radio" name="dstchannel_mod" id="group13" value="begins_with" />
<label for="group13" class="begin"><span>Begin With</span></label>
<input type="radio" name="dstchannel_mod" id="group14" value="contains" checked/>
<label for="group14" class="contains"><span>Contains</span></label>
<input type="radio" name="dstchannel_mod" id="group15" value="exact" />
<label for="group15" class="exactly"><span>Exactly</span></label>
<input type="radio" name="dstchannel_mod" id="group16" value="ends_with" />
<label for="group16" class="end"><span>Ends With</span></label>
<!----dstchannel --->
<p class="field switch" name="dst_neg">
<label class="cb-enable"><span>On</span></label>
<label class="cb-disable selected"><span>Off</span></label>
<input type="checkbox" class="checkbox" name="dst_neg" value="true" />
</p>
<input type="radio" name="dst_mod" id="group17" value="begins_with" />
<label for="group17" class="begin"><span>Begin With</span></label>
<input type="radio" name="dst_mod" id="group18" value="contains" checked/>
<label for="group18" class="contains"><span>Contains</span></label>
<input type="radio" name="dst_mod" id="group19" value="exact" />
<label for="group19" class="exactly"><span>Exactly</span></label>
<input type="radio" name="dst_mod" id="group20" value="ends_with" />
<label for="group20" class="end"><span>Ends With</span></label>
<!----userfield --->
<p class="field switch" name="userfield_neg">
<label class="cb-enable"><span>On</span></label>
<label class="cb-disable selected"><span>Off</span></label>
<input type="checkbox"  class="checkbox" name="userfield_neg" value="true" />
</p>
<input type="radio" name="userfield_mod" id="group21" value="begins_with" />
<label for="group21" class="begin"><span>Begin With</span></label>
<input type="radio" name="userfield_mod" id="group22" value="contains" checked/>
<label for="group22" class="contains"><span>Contains</span></label>
<input type="radio" name="userfield_mod" id="group23" value="exact" />
<label for="group23" class="exactly"><span>Exactly</span></label>
<input type="radio" name="userfield_mod" id="group24" value="ends_with" />
<label for="group24" class="end"><span>Ends With</span></label>
<!----accountcode --->
<p class="field switch" name="accountcode_neg">
<label class="cb-enable"><span>On</span></label>
<label class="cb-disable selected"><span>Off</span></label>
<input type="checkbox"  class="checkbox" name="accountcode_neg" value="true" />
</p>
<input type="radio" name="accountcode_mod" id="group25" value="begins_with" />
<label for="group25" class="begin"><span>Begin With</span></label>
<input type="radio" name="accountcode_mod" id="group26" value="contains" checked/>
<label for="group26" class="contains"><span>Contains</span></label>
<input type="radio" name="accountcode_mod" id="group27" value="exact" />
<label for="group27" class="exactly"><span>Exactly</span></label>
<input type="radio" name="accountcode_mod" id="group28" value="ends_with" />
<label for="group28" class="end"><span>Ends With</span></label>
<p class="field switch" name="disposition_neg">
<label class="cb-enable"><span>On</span></label>
<label class="cb-disable selected"><span>Off</span></label>
<input type="checkbox"  class="checkbox" name="disposition_neg" value="true" />
<label id="dist">Disposition:</label>
<select name="disposition" id="disposition" class="styled">
<option value="all">All Dispositions</option>
<option value="ANSWERED">Answered</option>
<option value="BUSY">Busy</option>
<option value="FAILED">Failed</option>
<option value="NO ANSWER">No Answer</option>
</select>
</p>
<input type="radio" name="sort" id="group29" value="ASC" checked="checked" />
<label for="group29" class="begin"><span>Increase</span></label>
<input type="radio" name="sort" id="group30" value="DESC" />
<label for="group30" class="end"><span>Decrease</span></label>
<label class="group">Group By:</label>
<p class="field switch" name="disposition_neg"/>
<select name="group" id="group" class="styled">
<optgroup label="Account Information">
<option  value="accountcode">Account Code</option>
<option  value="userfield">User Field</option>
</optgroup>
<optgroup label="Date/Time">
<option value="minutes1">Minute</option>
<option value="minutes10">10 Minutes</option>
<option value="hour">Hour</option>
<option value="hour_of_day">Hour of day</option>
<option value="day_of_week">Day of week</option>
<option value="day" selected="selected" >Day</option>
<option value="week">Week ( Sun-Sat )</option>
<option value="month">Month</option>
</optgroup>
<optgroup label="Telephone Number">
<option value="clid">Caller*ID</option>
<option value="src">Source Number</option>
<option value="dst">Destination Number</option>
</optgroup>
<optgroup label="Tech info">
<option value="disposition">Disposition</option>
<option value="disposition_by_day">Disposition by Day</option>
<option value="disposition_by_hour">Disposition by Hour</option>
<option value="dcontext">Destination context</option>
</optgroup>
</select></p>
</fieldset>
</div>
<!-- правый вертикальный(right vertical) -->
<div id="content_right">
<fieldset class="options">
<legend class="order">Extra options</legend>
<label class="extra">CSV file</label>
<label class="set">Graphics</label>
<label class="set">ASR/ACD</label><BR>
<p class="field switch" name="need_csv">
<label class="cb-enable"><span>On</span></label>
<label class="cb-disable selected"><span>Off</span></label>
<input type="checkbox" class="checkbox" name="need_html" value="true" checked="checked"/>
<input type="checkbox" class="checkbox" name="search_mode" value="all" checked="checked"/>
<input type="checkbox" class="checkbox" name="need_csv" value="true" />
</p>
<p class="field switch" name="need_chart">
<label class="cb-enable"><span>On</span></label>
<label class="cb-disable selected"><span>Off</span></label>
<input type="checkbox" class="checkbox" name="need_chart" value="true" />
</p>
<p class="field switch" name="need_asr_report">
<label class="cb-enable"><span>On</span></label>
<label class="cb-disable selected"><span>Off</span></label>
<input type="checkbox" class="checkbox" name="need_asr_report" value="true" />
</p>
<label class="set">Max calls</label>
<label class="minutes">Minutes</label>
<label class="limit">Result limit</label><BR><BR>
<p class="field switch" name="need_chart_cc">
<label class="cb-enable"><span>On</span></label>
<label class="cb-disable selected"><span>Off</span></label>
<input type="checkbox"  class="checkbox" name="need_chart_cc" value="true" />
</p>
<p class="field switch" name="need_minutes_report">
<label class="cb-enable"><span>On</span></label>
<label class="cb-disable selected"><span>Off</span></label>
<input type="checkbox" class="checkbox" name="need_minutes_report" value="true" />
</p>
<input type="text" class="order" name="limit" value="<?php echo $db_result_limit; ?>" name="limit" size="6""/><BR>
<?php
if ( count($plugins) > 0 ) {
	echo '<label class="plugins">Plugins :</label>';
	foreach ( $plugins as &$p_key ) {
		echo '<p class="field switch" name="plugins"><BR>
			<label class="cb-enable"><span>On</span></label>
			<label class="cb-disable selected"><span>Off</span></label>
			<input  type="checkbox" class="checkbox" name="need_'.$p_key.'" value="true" />&nbsp;&nbsp;'. $p_key .'<br /></p>';
	}
}
?>
</fieldset>
<button class="sendit" type="submit" name="submitbutton" title="Submit the form" />Generate</button>
</div>
</form>
</fieldset>
<fieldset class="data">
</fieldset>
<div id="footer">
	<a href="http://code.google.com/p/asterisk-cdr-viewer/">Asterisk CDR viewer</a>
</div>



