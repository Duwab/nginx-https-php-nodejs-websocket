<?php
$cache_path = '/etc/nginx/cache/';
$url = parse_url($_GET['url']);
if(!$url)
{
    echo 'Invalid URL entered';
    die();
}
$scheme = $url['scheme'];
$host = $url['host'];
$requesturi = $url['path'];
if(!$requesturi)
{
    $requesturi = "/";
}
$hash = md5($scheme.'GET'.$host.$requesturi);
var_dump(unlink($cache_path . substr($hash, -1) . '/' . substr($hash,-3,2) . '/' . $hash));
?>
