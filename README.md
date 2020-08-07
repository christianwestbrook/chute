# chute
Bitchute mini proxy to work around twitter censorship.

== Setup ==

You will need to have mod_rewrite enabled to catch all URIs:

<nowiki>
 RewriteEngine On

 RewriteCond %{REQUEST_FILENAME} !-f
 RewriteCond %{REQUEST_FILENAME} !-d
 RewriteCond %{REQUEST_FILENAME} !-l

 RewriteRule .* index.php [L]
</nowiki>

== Use ==

Use this site to get around Twitter's censorship of Bitchute videos.

For example, twitter won't let me share
https://www.bitchute.com/video/pQ84E954pkgj/
Instead share
http://chute.props.org/pQ84E954pkgj

== License ==

This script is released into public domain.

== Thanks ==

Thanks to all subscribers and supporters of the Ice Age Farmer broadcast (http://iceagefarmer.com), to all truth-telling researchers and journalists, and all patriots.  