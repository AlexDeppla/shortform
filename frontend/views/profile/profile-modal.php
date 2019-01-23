<?php

use yii\helpers\Url;

?>

<?php if (!empty($session['profile'])): ?>
    <div class="table-responsive">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>Название</th>
                    <th>Автор</th>
                    <th>Жанр</th>
                     <th><span class="glyphicon glyphicon-remove" arial-hidden="true"></span></th>
                </tr>
            </thead>
            <tbody>
    <?php foreach ($session['profile'] as $id => $item): ?>
                    <tr>
                        <td><a href="<?= Url::to(['site/view', 'id' => $id]) ?>"><?= $item['title'] ?></a></td>
                        <td><?= $item['author'] ?></td>
                        <td><a href="<?= Url::to(['category/index', 'id' => $id]) ?>"><?= $item['category'] ?></td>
                        <td><span class="glyphicon glyphicon-remove text-danger del-item" arial-hidden="true" data-id="<?= $id?>"></span></td>
                    </tr>
    <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<?php else: ?>
    <h3 align="center"> Закладок нет </h3>

<?php endif; ?>
