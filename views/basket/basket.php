<?php
$resultPrice = 0;
?>
<div class="container" style="margin-top: 10vh">
    <h1>Корзина</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Тур</th>
            <th scope="col">Кол-во</th>
            <th scope="col">Цена</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($basket->basketToTours as $index => $btt) : ?>
            <tr>
                <th scope="row"><?= $index + 1 ?></th>
                <td><a href="/tour/<?= $btt->tour_id ?>"><?= $btt->tour->title ?></a></td>
                <td><?= $btt->human_count ?></td>
                <td><?php $resultPrice += $btt->price;
                    echo $btt->price; ?></td>
            </tr>
        <?php endforeach; ?>
        <tr>
            <td colspan="2"></td>
            <td class="text-right"><a href="/basket/buy">Купить</a></td>
            <td><?= $resultPrice ?></td>
        </tr>
        </tbody>
    </table>
</div>
