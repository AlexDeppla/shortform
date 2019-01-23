<?php

use yii\helpers\Url;
use yii\widgets\LinkPager;

/* @var $this yii\web\View */
?>
<div class="container">

    <section id="category-pubs" class="text-center">

        <div>
            <h2>
                <?php
                echo $category->title;
                ?>
            </h2>
        </div>
        <br>


        <div class="row">

            <?php foreach ($books as $book): ?>

                <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
                    <div class="card h-100 text-center">

                        <div class="card-body">
                            <a href="<?= Url::toRoute(['site/view', 'id' => $book->id]); ?>"><h5 class="card-title"><?= $book->title; ?></h5></a>
                            <p class="card-text"><?= $book->author->name; ?></p>
                            <p>5 мин</p>
                        </div>
                        <div class="card-footer text-muted">
                            <a href="<?= Url::toRoute(['site/view', 'id' => $book->id]); ?>" class="btn btn-primary btn-sm">читать</a>
                            <a href="#" data-id="<?= $book->id ?>" class="btn btn-primary btn-sm add-to-profile">добавить</a>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>

        </div>

        <!-- Pagination -->
        <nav class="d-flex justify-content-center wow fadeIn">
            <ul class="pagination pg-blue">
                <?php
                echo LinkPager::widget([
                    'pagination' => $pagination,
                ]);
                ?>
            </ul>
        </nav>
    </section>

</div>
