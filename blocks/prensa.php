<?php

function b_prensa_show($options)
{
    $block['content'] = ' <div align=center><img src="' . XOOPS_URL . '/modules/prensa/images/prensa.gif"></a><iframe src="' . XOOPS_URL . '/modules/prensa/blocks/prensa.html" SCROLLING="NO" frameborder="0" width="164" height="22"></iframe></div> ';

    return $block;
}
