# chute
Bitchute mini proxy to work around twitter censorship.

You will need to have mod_rewrite enabled to catch all URIs:

<nowiki>
 RewriteEngine On

 RewriteCond %{REQUEST_FILENAME} !-f
 RewriteCond %{REQUEST_FILENAME} !-d
 RewriteCond %{REQUEST_FILENAME} !-l

 RewriteRule .* index.php [L]
</nowiki>