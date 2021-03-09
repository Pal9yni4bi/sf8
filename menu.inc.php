<ul class="menu">
    <?php foreach ($menu as $item) { ?>
        <li><a href="<?= $item['link'] ?>" title="<?= $item['title'] ?>" <?= $item['title'] == 'Цены' ? 'onclick="alert(\'А вы не из налоговой?\')"' : '' ?>><?= $item['title'] ?></a></li>
    <?php } ?>
</ul>