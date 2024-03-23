<?php
?>
<div class="container" style="margin-top: 10vh">
    <h1>История</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Дата</th>
            <th scope="col">Туры</th>
            <th scope="col">Цена</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($baskets as $index => $basket) : ?>
            <tr>
                <th scope="row"><?= $index + 1 ?></th>
                <td><?= date('d.m.Y H:i:s',strtotime($basket->timestamp)) ?></td>
                <td>
                    <?php foreach ($basket->basketToTours as $indexTour => $btt) : ?>
                    <a href="/tour/<?= $btt->tour_id ?>"><?= $indexTour+1 ?>) <?= $btt->tour->title ?></a>
                    <?php endforeach; ?>
                </td>
                <td><?= $basket->price ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
