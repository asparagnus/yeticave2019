<?php
$user_name = 'Наталия'; // имя

//ФОРМАТИРОВАНИЕ ПОКАЗА ЦЕНЫ. 
//переводит цену из 1000 в 1 000
function price_format($price){ 
$start_price = ceil($price);

if($start_price >= 1000 && $start_price < 1000000) {
    $priceLenght = strlen($price);
    $end_price = substr($start_price, 0, $priceLenght-3).' '.substr($start_price, $priceLenght-3, 3);
} elseif ($start_price >= 1000000) {
    $end_price = substr($start_price, 0, $priceLenght-6).' '.substr($start_price, $priceLenght-6, $priceLenght-3).' '.substr($start_price, $priceLenght-3, 3);
} else {
    $priceLenght = strlen($price);
} 

return $end_price;
}

//ФУНКЦИЯ ШАБЛОНИЗАТОР
//подключает шаблон и передает туда значения. выводит
function include_template($name, $data) { 
    $name = 'templates/' . $name;
    $result = '';

    if (!file_exists($name)) {
        return $result;
    }

    ob_start();
    extract($data);
    require $name;

    $result = ob_get_clean();

    return $result;
}

// ПРОВЕРКА ВРЕДОНОСНОГО КОДА
function esc($str) { 
	$text = htmlspecialchars($str); // или так $text = strip_tags($str);
	return $text;
}

//ДАТА И ВРЕМЯ

function get_time($date) {
    date_default_timezone_set('Europe/Moscow');
setlocale(LC_ALL, 'ru_RU');
    $exp_date = strtotime($date);
    $current_time = time();
    $interval = $exp_date - time();
    if ($interval <= 0) {
        return false;
    }
    else {
        $remainig_hours = floor($interval / 3600);
        $remainig_minutes = floor(($interval % 3600) / 60);
        $hours= str_pad($remainig_hours, 2, "0", STR_PAD_LEFT);
        $minutes = str_pad($remainig_minutes, 2, "0", STR_PAD_LEFT);
        $remaining_time = $hours . ':' . $minutes;
        return $remaining_time;
    }
}

