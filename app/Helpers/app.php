<?php

function cockpitImage($image)
{
    $url = str_replace('/api/', '/storage/uploads', env('API_COCKPIT_URL'));
    return $url . $image['path'];
}
