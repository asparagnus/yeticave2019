<?php

require_once ('templates/data.php');
require_once ('templates/function.php');
$user_name = 'Наталья';

//require_once ('templates/layout.php');

$page_content = include_template('main.php', 
     ['cards' => $cards,
    'categories' => $categories]); //подключаем main


$layout_content = include_template ('layout.php', 
    ['content' => $page_content,
	'categories' => $categories,
	'user_name' => $user_name,
	'title' => 'Главная'
]); //подключаем layout

print($layout_content);
