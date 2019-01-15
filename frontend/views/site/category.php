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
    <main class="mt-5 pt-5">
        <div class="container">

            <section class="text-center">

                <div class="row mb-4 wow fadeIn">

                    <?php foreach ($books as $book): ?>
                        <div class="col-lg-4 col-md-6 mb-4">

                            <div class="card">
                                <div class="card-header">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title"><?= $book->title; ?></h5>
                                    <p class="card-text"><?= $book->author->name; ?></p>
                                    <p class="card-text"><?= $book->category->title; ?></p>
                                    <a href="<?= Url::toRoute(['site/view', 'id' => $book->id]); ?>"  class="btn btn-primary btn-md">read
                                        <i class="fa fa-play ml-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>

                </div>

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
    </main>

</div>
