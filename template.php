<?php

function print_page($title, $id, $heading, $content)
{
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <title><?php print $heading; ?></title>
        <style type="text/css">
            @import url(/css/blueprint/print.css) print;
            @import url(/css/blueprint/screen.css) screen;
            @import url(/css/tabs.css);
            @import url(/css/style.css);
        </style>
<!--
        <script type="text/javascript" src="/js/jquery.js"></script>
        <script type="text/javascript" src="/js/jquery.tabs.pack.js"></script>
-->
        <script type="text/javascript" src="/js/jquery.history_remote.pack.js"></script>
        <script type="text/javascript" src="/js/interface.js"></script>
        <script type="text/javascript" src="/js/script.js"></script>
    </head>
    <body>
        <div id="wrap">

            <div id="header">
                <h1><a href="/">Go-OO</a></h1>
            </div>
            <div id="container">
	      <?php
		 $state = array ( "container", "container", 
		 "container", "container",
		 "container" ); 
		 // this is ugly. define the states / id differently
		 if($id == "summary") {
		     $state[0] = "selected";
		 }
		 else if($id == "download") {
		     $state[1] = "selected";
		 }
		 else if($id == "discover") {
		     $state[2] = "selected";
		 }
		 else if($id == "developers") {
		     $state[3] = "selected";
		 }
		 else if($id == "about") {
		     $state[4] = "selected";
		 }
		    ?>
                <ul id="nav">
                    <li class="tabs-<?php print $state[0]; ?>"><a href="/">Summary</a></li>
                    <li class="tabs-<?php print $state[1]; ?>"><a href="/download/">Download</a></li>
                    <li class="tabs-<?php print $state[2]; ?>"><a href="/discover/">Discover</a></li>
                    <li class="tabs-<?php print $state[3]; ?>"><a href="/developers/">Developers</a></li>
                    <li class="tabs-<?php print $state[4]; ?>"><a href="/about/">About</a></li>
                </ul>

                <div class="container">
                    <div id="splash">
                        <h3><?php print $heading; ?></h3>
			<?php print $content . "\n"; ?>
                    </div>
                </div>

            </div>

            <div id="sidebar">
                <div class="text">
                    openoffice.org<br>
                    development
                </div>
            </div>

        </div>
    </body>
</html>
<?php
}
?>
