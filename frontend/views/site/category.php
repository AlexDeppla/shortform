<?php

use yii\helpers\Url;
use yii\widgets\LinkPager;

/* @var $this yii\web\View */
?>
<div class="site-index">
     <div>
            <h2>
                <?php
                echo $category->title;
                ?>
            </h2>
        </div>
<div class="container">
    
    <section class="text-center">

        <!-- Page Heading/Breadcrumbs -->




        <div class="row mb-3 wow fadeIn">

            <?php foreach ($books as $book): ?>

                <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
                    <div class="card text-center">
                        <!-- <div class="card-header">
                         
                        </div> -->
                        <div class="card-body">
                            <h5 class="card-title"><strong><?= $book->title; ?></strong></h5>
                            <h6 class="card-text"><?= $book->author->name; ?></h6>
                            <a href="<?= Url::toRoute(['site/view', 'id' => $book->id]); ?>" class="btn btn-dark btn-sm">читать</a>
                            <a href="#" data-id="<?= $book->id ?>" class="btn btn-primary add-to-profile">добавить</a>
                        </div>
                        <div class="card-footer text-muted">
                            5 мин
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
    
    </div>