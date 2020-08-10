<?php

function getLogo()
{
    $data = \App\Logo::first();
    if ($data != null) {
        return $data->logo_image;
    }
}

function setActiveHome($segment)
{
    if (Request::segment(1) == '') {
        return 'active';
    }
}

function setActive($segment)
{
    if($segment == Request::segment(1)) {
        return 'active';
    }
}

function getColor()
{
    $settings = \App\WebsiteSetting::first();
    return $settings->color;
}
