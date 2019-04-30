<?php

use Illuminate\Support\HtmlString;

function alert()
{
    $html_out = '';

    if(session()->has('success')):
    $html_out = '<div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        '.session()->get('success').'
    </div>';
    endif;

    if(session()->has('warning')):
    $html_out = '<div class="alert alert-warning alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        '.session()->get('warning').'
    </div>';
    endif;

    if(session()->has('danger')):
    $html_out = '<div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        '.session()->get('danger').'
    </div>';
    endif;

    return new HtmlString($html_out);
}