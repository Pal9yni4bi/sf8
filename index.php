<?php
$menu = [
    [
        'link' => '#',
        'title' => 'Главная',
    ],
    [
        'link' => '#',
        'title' => 'Портфолио',
    ],
    [
        'link' => '#',
        'title' => 'Цены',
    ],
    [
        'link' => '#',
        'title' => 'Контакты',
    ],
];

$name = 'Андрей';
$surname = 'Скрытный';
$city = 'Менск';
$age = date('Y') - 1993;
$experienceWeb = date('Y') - 2007;
$experiencePHP = date('Y') - 2011;

$h1 = 'Это учебная страница по непрофильному курсу';
$disclaimer = '<p>Сделана на скорую руку для выполнения учебных требований, не судите строго!</p>';

/**
 * Получаем правильное числительное согласно русского языка
 *
 * @param int   $number
 * @param array $titles
 *
 * @return string
 */
function human_plural(int $number, array $titles = ['год', 'года', 'лет']): string
{
    $cases = [2, 0, 1, 1, 1, 2];
    $number = abs($number); // для корректной работы с отрицательными числами
    return $titles[($number % 100 > 4 && $number % 100 < 20) ? 2 : $cases[min($number % 10, 5)]];
}

include 'main.php';