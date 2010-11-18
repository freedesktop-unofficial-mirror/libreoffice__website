<?php

function print_page($title, $context, $heading, $content, $subtabs = array())
{
        // hnave values are as follow
        //  - the URL path (relative if possible)
        //  - the label as used in tabs and the navigation
        //  - (optional) the id of the tab it is under, this is for subsections
	$hnav = array( "summary" => array("/", "Welcome"),
			"foundation" => array("/foundation", "Foundation"),
			"libreoffice" => array("/download/", "LibreOffice"),
			"develop" => array("/develop/", "Develop"),
			"contribute" => array("/contribution/", "Contribute"),
			"supporters" => array("/supporters/", "Supporters") ,
			"contact" => array("/contact/", "Contact") ,
			"faq" => array("/faq/", "FAQ") 
			);
        // tabs state. the all have the "container" value
	// and the current one MUST have the "selected" value
	// this is all dependent on ths CSS used.
	$tabs = array ( "summary" => "container", 
	       	       	 "foundation" => "container", 
	       	       	 "libreoffice" => "container", 
			 "develop" => "container",
			 "contribute" => "container",
	       		 "supporters" => "container",
	       		 "contact" => "container",
	       		 "faq" => "container"
		 ); 
	
	$id = "summary";
	foreach ($context as $c) {
		if (array_key_exists ($c, $tabs)) {
			$id = $c;
			break;
		}
	}
	// the current tab is selected
	$tabs[$id] = "selected";
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
    <head>
        <title><?php print $heading; ?> - The Document Foundation</title>
        <style type="text/css">
            @import url(/css/blueprint/print.css) print;
            @import url(/css/blueprint/screen.css) screen;
            @import url(/css/tabs.css);
            @import url(/css/style.css);
        </style>
        <link rel="shortcut icon" href="/favicon.ico">
        <link rel="icon" href="/favicon.ico">
        <meta name="google-site-verification" content="XSd_Fmsyv5scVsV3jHDZYiaNWS43w9BkmCacMtn_gU8">
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
        <meta name="language" content="en">
        <meta name="Robots" content="index, follow">
        <meta name="keywords" content="LibreOffice, The Document Foundation">
        <meta name="description" content="The Document Foundation is an independent self-governing democratic Foundation created by leading members of the OpenOffice.org Community.">
    </head>
    <body>
<!-- DO NOT EDIT ! the html is generated by PHP. Edit the PHP instead -->
    <div id="wrap">

	<div id="header">
                <h1><a href="/">The Document Foundation</a></h1>

		<div id="tagline">
			<a href="http://www.documentfoundation.org">The Document Foundation</a>
		</div>

                <ul id="nav">
<?php
			foreach($tabs as $key => $value)
			{
				$link = $hnav[$key];
				echo "\t\t\t<li class=\"tabs-$value\"><a href=\"$link[0]\">$link[1]</a></li>\n";

			}
		?>
                </ul>
<?php
		if (count ($subtabs) > 0) {
			echo "<ul id=\"hnav\">\n";

			foreach($subtabs as $key => $value) {
				echo "<li><a";
				if (!is_array ($value) ) {
					echo " href=\"$value\"";
				}
				else {
					ksort ($value);
					foreach ($value as $an => $av) {
						echo " $an=\"$av\"";
					}
				}
				echo ">$key</a></li>\n";
			}
			echo "</ul>\n";
		}
?>
	</div>

	<div id="header-seperator">&nbsp;</div>
	<div id="sidebar">&nbsp;</div>

        <div id="container">
                <h2><?php print $heading; ?></h2>
		<?php print $content . "\n"; ?>
        </div>

	<div id="footer">
	      <table>
	      <tr> 
		<td colspan=2><a href="/imprint">Imprint</a>&nbsp;&nbsp;<a href="/privacy">Privacy Policy</a>
		</td>
	      </tr>
	      <tr> 
		<td> 
		  <p>All text and image content on documentfoundation.org or libreoffice.org, unless otherwise specified, is licensed under 
		  the <a rel="license" href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons 
		  Attribution-Share Alike 3.0 License</a>. This does not include the LibreOffice name,
		  logo, or icon.
		  This does not include LibreOffice source code, which is licensed under the 
		  <a href="/lgpl">LGPLv3</a> (GNU Lesser General Public License).</p>
		</td> 
		<td><a rel="license" href="http://creativecommons.org/licenses/by-sa/3.0/"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by-sa/3.0/88x31.png"></a></td> 
	      </tr> 
	      </table> 
	</div>

    </div>
    </body>
</html>

<?php
}

$freedesktop_name="libreoffice";
$freedesktop_cgit="http://cgit.freedesktop.org/$freedesktop_name";
$download_binaries="http://download.documentfoundation.org/libreoffice/testing";
$download_source="http://download.documentfoundation.org/libreoffice/src/libreoffice-build-3.2.99.3.tar.gz";

$rightnavigation = <<<EOT

<div id="right-nav">
    <ul id="rnav">
       <li class="rnav-download"><a href="/download">Download LibreOffice</a></li>
       <li class="rnav-blue"><a href="/foundation">Understand the reasons for The Document Foundation</a></li>
       <li class="rnav-green"><a href="/contribution">Sign up and get in touch with the community</a></li>
       <li class="rnav-magenta"><a href="/contact">Get press material and contat spokes people</a></li>
       <li class="rnav-orange"><a href="/supporters">Read what supporters of The Document Foundation say</a></li>
    </ul>
</div>

EOT;


?>
