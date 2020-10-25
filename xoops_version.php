<?php

$modversion['name'] = _MI_PRENSA_NAME;
$modversion['version'] = 1.00;
$modversion['description'] = _MI_PRENSA_DESC;
$modversion['credits'] = _MI_PRENSA_CRED;
$modversion['author'] = 'Marco Sánchez [Dr. Clone] [www.drclone.net]';
$modversion['help'] = '';
$modversion['license'] = 'GPL';
$modversion['official'] = 0;
$modversion['image'] = 'images/prensa_slogo.png';
$modversion['dirname'] = 'prensa';
// Menu
$modversion['hasMain'] = 0;
$modversion['hasAdmin'] = 0;
// Blocks
$modversion['blocks'][1]['file'] = 'prensa.php';
$modversion['blocks'][1]['name'] = _MI_PRENSA_BNAME1;
$modversion['blocks'][1]['description'] = _MI_PRENSA_DESC;
$modversion['blocks'][1]['show_func'] = 'b_prensa_show';
