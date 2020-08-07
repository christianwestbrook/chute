<?php

// On the bitchute side (no slash):
$bc = "https://www.bitchute.com/video";

// On this site:
$uri = $_SERVER[ 'REQUEST_URI' ];
$bcUrl = $bc . $uri;

if( strlen( $uri ) == 1 ) {
    echo "Use this site to get around Twitter's censorship of Bitchute videos.<br/><br/>For example, twitter won't let me share <pre>https://www.bitchute.com/video/<b>pQ84E954pkgj</b>/</pre>  Instead share <pre>http://chute.props.org/<b>pQ84E954pkgj</b></pre>";
    exit();
}

// Who's calling please?
$agent = $_SERVER['HTTP_USER_AGENT'];

// Is it "Twitterbot/1.0."
if(  stripos( $agent, "Twitterbot" ) !== false ) {
    // It's the communists at twitter!  Proxy the data, don't let them know it's bitchute underneath.
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $bcUrl);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $res = curl_exec($ch);
    //$code = curl_getinfo($ch,  CURLINFO_HTTP_CODE);
    curl_close($ch);
    echo $res;
} else {
    // This is a real person clicking a link -- just redirect them to bitchute.
    Header("Location:  $bcUrl");
}


