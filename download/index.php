<?php
require("../template.php");


$content = <<<EOT

<hr>

<h3><a href="http://go-oo.mirrorbrain.org/stable/win32/">Windows</a></h3>
<p>Simply download the 
<a href="http://go-oo.mirrorbrain.org/stable/win32/2.4/GoOo-en-US-2.4.0-17.exe">GoOo-en-US-<i>version</i>.exe</a>
file, and your
<a href="http://go-oo.mirrorbrain.org/stable/win32/2.4/">native lang-pack</a>, and
install them one by one.
</p>

<h3><a href="http://go-oo.mirrorbrain.org/stable/linux-i586/">Universal Linux</a></h3>
<p><a href="http://go-oo.mirrorbrain.org/stable/linux-i586/">Packages</a> 
available here, also 
<a href="http://go-oo.mirrorbrain.org/stable/linux-i586/">http://go-oo.mirrorbrain.org/stable/linux-i586/</a>
is a YUM repository, which you can add as an installation source.
</p>

<h3><a href="http://download.go-oo.org/">Source Code</a></h3>

<p>Download: <a href="http://download.go-oo.org/OOH680/ooo-build-2.4.0.8.tar.gz">ooo-build-2.4.0.8</a>
<br />
Browse: <a href="http://svn.gnome.org/viewcvs/ooo-build/trunk/">trunk</a> or the
<a href="http://svn.gnome.org/viewcvs/ooo-build/branches/ooo-build-2-4">ooo-build-2-4 branch</a>
<br />
To check out:
<pre>\$ svn checkout http://svn.gnome.org/svn/ooo-build/trunk ooo-build</pre>
</p>

<hr>

<h2>Other derivatives</h2>

<h3>openSUSE</h3>
<p><a href="http://en.opensuse.org/OpenOffice.org">Information</a>, and Repositories:
<a href="http://download.opensuse.org/repositories/OpenOffice.org:/STABLE/SLED_10/">SLED10</a>, 
<a href="http://download.opensuse.org/repositories/OpenOffice.org:/STABLE/SUSE_Linux_10.1/">10.1</a>, 
<a href="http://download.opensuse.org/repositories/OpenOffice.org:/STABLE/openSUSE_10.2/">10.2</a>,
<a href="http://download.opensuse.org/repositories/OpenOffice.org:/STABLE/openSUSE_10.3/">10.3</a>
<a href="http://software.opensuse.org/ymp/OpenOffice.org:STABLE/openSUSE_10.3/OpenSUSE_org.ymp">
<img src="opensuse-1click.png" title="1-click install" alt="1-click install" />
</a>
</p>

<h3>Debian</h3>
<dd>Debian provides OpenOffice.org in their repositories. 
To install it just type as root <pre># apt-get install openoffice.org</pre></dd>
<dl>

<h3>Ubuntu</h3>
<dd>Ubuntu provides OpenOffice.org in their repositories. 
To install it just type as root <pre># apt-get install openoffice.org</pre></dd>
<dl>

<h3>NeoOffice</h3>
<dd><a href="http://www.neooffice.org/">NeoOffice</a> is built on top of the
Go-OO! version.</dd>
<dl>

<h3>OxygenOffice</h3>
<dd>The <a href="http://ooop.wiki.sourceforge.net/">OxygenOffice</a> variant is
built on top of Go-OO!. Available from <a
href="http://sourceforge.net/project/showfiles.php?group_id=170021">
sourceforge</a></dd>
<dl>

<h3>DroplineGNOME</h3>
<dd>DroplineGNOME provide pre-builds packages for OpenOffice.org:<ul>
<li><a href="http://trovao.droplinegnome.org/extras/2.18/openoffice/">i686 builds</a></li>
<li><a href="http://saxa.droplinegnome.org/ooo/">x86_64 builds</a></li>
</ul></dd>
<dl>

<h3>Frugalware</h3>
<dd>Frugalware provides OpenOffice.org in their repositories. To install it just type as root 
<pre># pacman-g2 -S openoffice.org</pre></dd>
<dl>

<h3>Gentoo</h3>
<dd>Gentoo provides OpenOffice.org in their repositories. 
To build and install it just type as root <pre># emerge openoffice</pre></dd>
<dl>


<h3>PLD</h3>
<dd>PLD provides OpenOffice.org in their repository. To install it just
type as root:
<pre># poldek -uGv openoffice.org-APP</pre>
 where APP can be one of base, calc, draw, writer</dd>
</dl>

<h2>Unstable / development packages</h2>

<dd>Prior to new releases, we provide builds of the next Go-OO!
on the web, but these are unstable, may be older, may break: in which
case you get to keep both bits.</dd>

<dd><a href="http://go-oo.mirrorbrain.org/unstable/win32/">Windows</a>,
<a href="http://go-oo.mirrorbrain.org/unstable/linux-i586/">Universal Linux</a></dd>
<dd>SUSE:
<a href="http://download.opensuse.org/repositories/OpenOffice.org:/UNSTABLE/SLED_10/">SLED10</a>, 
<a href="http://download.opensuse.org/repositories/OpenOffice.org:/UNSTABLE/SUSE_Linux_10.1/">10.1</a>, 
<a href="http://download.opensuse.org/repositories/OpenOffice.org:/UNSTABLE/openSUSE_10.2/">10.2</a>
<a href="http://download.opensuse.org/repositories/OpenOffice.org:/UNSTABLE/openSUSE_10.3/">10.3</a>
<a href="http://software.opensuse.org/ymp/OpenOffice.org:UNSTABLE/openSUSE_10.3/OpenSUSE_org.ymp">
<img src="opensuse-1click.png" title="1-click install" alt="1-click install" width="101"
align="baseline" border="0" height="26"/></a>
</dd>
<dd>To add a repository with <a href="http://en.opensuse.org/Zypper">zypper</a> (NB. OO.o
has been split into more individual packages here so make sure you get all of them):
<pre># zypper sa http://download.opensuse.org/repositories/OpenOffice.org:/UNSTABLE/openSUSE_10.2
# zypper --non-interactive in OpenOffice_org-gnome OpenOffice_org-writer OpenOffice_org-calc ...</pre>
</dd>

EOT;


print_page("Go-OO! - Download", array("download", "summary"),
		   "Download Go-OO!",
		   $content 
		   );

?>
