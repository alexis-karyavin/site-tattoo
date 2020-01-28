<?php
    $arr_menu = array(
        'Обо мне',
        'Портфолио',
        'Отзывы',
        'Контакты'
    );

    foreach ($arr_menu as $key => $value) {
        echo '<li class="menu-item">';
        echo '<a href="#menu'.$key.'">'. $value .'</a>';
        echo '<li>';
    }
?>