<ol>
    <?php foreach ($cheeses as $cheese) : ?>
        <li><span><?= $cheese['name'] ?></span>(<?= $cheese['category'] ?>) @ <?= price($cheese) ?></li>
    <?php endforeach; ?>

</ol>