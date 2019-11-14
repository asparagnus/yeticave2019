<?php

require_once ('templates/data.php');
require_once ('templates/function.php');
$user_name = 'Наталья';
$is_auth = 0; //TODO: implement

//require_once ('templates/layout.php');

$page_content = include_template('main.php', 
     ['cards' => $cards,
    'categories' => $categories]); //подключаем main


$layout_content = include_template ('layout.php', 
    ['content' => $page_content,
	'categories' => $categories,
	'user_name' => $user_name,
	'title' => 'Главная',
	'is_auth' => $is_auth,
]); //подключаем layout

print($layout_content);
