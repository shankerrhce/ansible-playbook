<?php
if ( !in_array( $wgDBname, $wgLocalDatabases ) ) {
        header( "HTTP/1.1 404 Not Found" );
        echo( <<<RESP
<!DOCTYPE html>
<html>
<head>
<title>404 Not Found</title>
<link rel="stylesheet" href="//static.orain.org/meta.orain.org/load.php?modules=mediawiki.skinning.interface%7Cskins.vector.styles&amp;only=styles&amp;skin=vector&amp;*" />
</head>
<body>
<div style="text-align: center;">
<h1> - 404 Not Found - </h1>
<p><b>Wiki not found:</b> The requested wiki is not found. It is possible you have made a spelling mistake in the URL, or the wiki does not exist anymore.</p>
<p>Host: <!--# echo var="host" default="unknown_host" --> Port:<!--# echo var="server_port" default="unknown_port" --></p>
</div>
<div id="footer">
<ul id="footer-places">
<li>
<a href="//meta.orain.org" title="Orain Meta">
Orain Meta
</a>
</li>
</ul>
<ul id="footer-icons">
<li>
<a href="//meta.orain.org/">
<img src="//static.orain.org/meta.orain.org/images/archive/9/96/20131129195014!Powered_By_Orain.png" alt="Hosted by Orain" width="88" height="31" />
</a>
</li>
</ul>
<div style="clear:both"></div>
</div>
</body>
</html>
RESP
        );
        exit();
}

