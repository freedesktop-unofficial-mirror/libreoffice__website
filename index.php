<?php
require("template.php");

$content = <<<EOT

$rightnavigation

<div id="welcome">
<!-- <p>The Document Foundation:</p> -->
<ul class="ul-libreoffice">
<!-- could be defined better in CSS, what I want to achieve is:bullets in the header color, but black text -->
    <li><div>It is an independent self-governing meritocratic Foundation, created by leading members of the OpenOffice.org Community.</div></li>
    <li><div>It continues to build on the foundation of ten years' dedicated work by the OpenOffice.org Community.</div></li>
    <li><div>It was created in the belief that the culture born of an independent Foundation brings out the best in contributors and will deliver the best software for users.</div></li>
    <li><div>It is open to any individual who agrees with our core values and contributes to our activities.</div></li>
    <li><div>It welcomes corporate participation, e.g. by sponsoring individuals to work as equals alongside other contributors in the community.</div></li>
<!--    <li><div>It is proud to be the home of LibreOffice, the next evolution of the world's leading free office suite.</div></li> -->
</ul> 

<p>The Document Foundation is proud to be the home of <a href="download">LibreOffice</a>, the next evolution of the world's leading free office suite.</p>

<h3>News</h3>

<p>2010-10-06 <b>Press Materials</b><br>
Numbers @ The Document Foundation press release is <a href="/contact/tdf_numbers.pdf">here</a> (PDF).</p>

<p>2010-09-28 <b>Press Materials</b><br>
Announcement of The Document Foundation (<a href="/contact/tdf_release.xml">HTML</a>/<a href="/contact/tdf_release.pdf">PDF</a>).</p>

<p>2010-09-28 <b>Blogosphere</b><br>
Bloggers can be found on the <a href="http://planet.documentfoundation.org">The Document Foundation Planet</a>.</p>

</div>
EOT;

print_page("Welcome", array("summary"), "Welcome to The Document Foundation!", $content);

?>