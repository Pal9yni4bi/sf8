<?= $disclaimer ?>
<hr>
<p>Меня зовут <?= $name . ' ' . $surname ?>. Мой родной город - <?= $city ?></p>
<p>Мне исполнилось <?= $age ?>.</p>
<?php include 'knowledge.inc.php' ?>
<p>А вы знали, что сегодня <?= date('d') % 2 == 0 ? 'чётный' : 'нечётный' ?> день месяца?</p>
<p>Это неважная информация, но нужно было как-то продемонстрировать тернарку.</p>
<?php if (rand(0, 9) <= 3) { ?>
    <p>Вам повезло, это предложение видит только каждый третий посетитель.</p>
<?php }
