<?php

function getSnaps($url){
    $html = file_get_contents($url);
    $pattern = '/' .  preg_quote('<script id="__NEXT_DATA__" type="application') . "\/" . preg_quote('json">') . '(?<snaps>.*)' . "\<\/"   . preg_quote('script>') . "/";
    preg_match($pattern , $html , $matches);
    $props =   isset($matches['snaps']) ? json_decode($matches['snaps'] , true) : [];


    return array_filter(array_map(function ($snap){
        return $snap["snapUrls"]["mediaUrl"] ?? null;
    },  $props["props"]["pageProps"]["story"]['snapList'] ?? []));
}

$getSnaps = getSnaps("https://www.snapchat.com/add/ccccccc");
print_r($getSnaps);