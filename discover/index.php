<?php
require("../template.php");


$content = <<<EOT
<p>Here you'll discover what Go-oo has to offer in addition to the 
regular build of OpenOffice.org</p>

<p>Not without mentioning what is <a href="comingsoon/">coming soon</a>.</p>

<hr>

<div class="discover-tile">
<h4 id="vba-support">VBA support</h4>
<p>Go-oo provide VBA macros support for OpenOffice.org.</p>
<p><a href="go-excel-vba.png">
<img src="go-excel-vba-thumb.png" alt="go-oo screenshot for VBA"/></a></p>
</div>

<div class="discover-tile">
<h4>Startup performance</h4>
<p>Go-oo starts faster: (go-oo 2.1 vs. Sun/OO.o 2.3)</p>
<img src="startup.png" alt="startup comparison chart" />
</div>

<div class="discover-tile">
<h4 id="quickstarter">Unix systray quick-starter</h4>
<p>Go-oo can run in the background for a lightning second start.<br>
See Tools -&gt; Options -&gt; Memory to enable.</p>
<img src="go-quickstart.png" alt="built in quick-starter" />
</div>

<div class="discover-tile">
<h4 id="calc-solver">Calc solver</h4>
<p>Go-oo has a linear optimization solver<br>
that can optimize a cell value based on<br>
arbitrary constraints, built into Calc.</p>
<a href="go-calc-solver.png">
<img src="go-calc-solver-thumb.png" alt="go-oo solver screenshot" /></a>
</div>

<div class="discover-tile">
<h4 id="gstreamer">GStreamer integration</h4>
<p>Go-oo supports multimedia content using<br>
the <a href="http://gstreamer.org/">GStreamer</a> multimedia framework.
</p>
<table>
<p></p><th>Before</th>
<th>After</th></tr>
<tr><td><a href="oo-gstreamer.png"><img src="oo-gstreamer-thumb.png" 
alt="ooo and gstreamer screenshot" /></a></td>
<td><a href="go-gstreamer.png"><img src="go-gstreamer-thumb.png"
alt="go-oo and gstreamer screenshot" /></a></td></tr>
</table>
</div>

<div class="discover-tile">
<h4 id="chinese-rendering">Text Grid rendering</h4>
<p>Go-oo renders Chinese much more pleasantly, using a familiar text grid<br>
(<a href="textgrid.doc">Download sample</a>).
</p>
<table>
<p></p><th>Before</th>
<th>After</th></tr>
<tr><td><a href="oo-textgrid.png"><img src="oo-textgrid-thumb.png" 
alt="ooo textgrid screenshot" /></a></td>
<td><a href="go-textgrid.png"><img src="go-textgrid-thumb.png"
alt="go-oo textgrid screenshot" /></a></td></tr>
</table>
</div>

<div class="discover-tile">
<h4 id="ms-works-import">MS-Works import</h4>
<p>Go-oo supports MS-Works files<br>
(<a href="msworks.wps" type="application/vnd.ms-works">download sample file</a>).</p>
<a href="go-msworks.png"><img src="go-msworks-thumb.png" alt="go-oo MS-Works support screenshot" /></a>
</div>

<div class="discover-tile">
<h4 id="wp-graphics-import">WordPerfect Graphics import</h4>
<p>Go-oo imports graphics in the WPG format coming from WordPerfect<br>
which supplement the WordPerfect importer also available in Go-oo<br>
(<a href="wpg-support.wpg" type="image/wpg">download sample file</a>).</p>
<a href="go-wpg-support.png"><img src="go-wpg-support-thumb.png" 
alt="go-oo WPG support screenshot" /></a>
</div>

<div class="discover-tile">
<h4>T602 import</h4>
<p>Go-oo supports T602 files<br>
(<a href="cti_lasr.602" type="application/x-t602">download sample file</a>).</p>
<a href="go-t602.png"><img src="go-t602-thumb.png" alt="go-oo T602 support screenshot" /></a>
</div>

<div class="discover-tile">
<h4 id="emf-rendering">Improved EMF rendering</h4>
<p>Go-oo renders EMF+ content, giving a far better view of embedded drawings.
</p>
<table>
<p></p><th>Before</th>
<th>After</th></tr>
<tr><td><a href="oo-emf.png"><img src="oo-emf-thumb.png" 
alt="ooo EMF support screenshot" /></a></td>
<td><a href="go-emf.png"><img src="go-emf-thumb.png"
alt="go-oo EMF support screenshot" /></a></td></tr>
</table>
</div>

<hr>
<p>Of course, there are many other fixes and features included, too numerous to mention.</p>

EOT;


print_page("Go-OO! - Discover", array("discover", "summary"),
   "Discover OpenOffice.org",
   $content
   );

?>

