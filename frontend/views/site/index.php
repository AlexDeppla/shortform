<?php
use yii\helpers\Url;
use yii\widgets\LinkPager;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">
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
                                    <a href="<?= Url::toRoute(['site/view', 'id' => $book->id]); ?>"><h5 class="card-title"><?= $book->title; ?></h5></a>
                                    <p class="card-text"><?= $book->author->name; ?></p>
                                    <p class="card-text"><?= $book->content; ?></p>
                                    <a href="<?= Url::toRoute(['category/index', 'id' => $book->category->id]); ?> <p class="card-text"> <?= $book->category->title; ?></p></a>
                                    <a href="<?= Url::toRoute(['site/view', 'id' => $book->id]); ?>"  class="btn btn-primary btn-md">read
                                        <i class="fa fa-play ml-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>

                </div>
                
                //////////////////////////////////////////////////////////
                
                 <div class="row mb-4 wow fadeIn">


                        <div class="col-lg-4 col-md-6 mb-4">

                            <div class="card">
                                <div class="card-header">
                                </div>
                                <div class="card-body">
                                   <a href="<?= Url::toRoute(['site/view', 'id' => $recent1->id]); ?>"><h5 class="card-title"><?= $recent1->title; ?></h5></a>
                                    <p class="card-text"><?= $recent1->author->name; ?></p>
                                    <p class="card-text"><?= $recent1->content; ?></p>
                                    <a href="<?= Url::toRoute(['site/category', 'id' => $recent1->category->id]); ?> <p class="card-text"> <?= $recent1->category->title; ?></p></a>
                                    <a href="<?= Url::toRoute(['site/view', 'id' => $recent1->id]); ?>"  class="btn btn-primary btn-md">read
                                        <i class="fa fa-play ml-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                     
                      <div class="col-lg-4 col-md-6 mb-4">

                            <div class="card">
                                <div class="card-header">
                                </div>
                                <div class="card-body">
                                   <a href="<?= Url::toRoute(['site/view', 'id' => $recent2->id]); ?>"><h5 class="card-title"><?= $recent2->title; ?></h5></a>
                                    <p class="card-text"><?= $recent2->author->name; ?></p>
                                    <p class="card-text"><?= $recent2->content; ?></p>
                                    <a href="<?= Url::toRoute(['site/category', 'id' => $recent2->category->id]); ?> <p class="card-text"> <?= $recent2->category->title; ?></p></a>
                                    <a href="<?= Url::toRoute(['site/view', 'id' => $recent2->id]); ?>"  class="btn btn-primary btn-md">read
                                        <i class="fa fa-play ml-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                     
                     <div class="col-lg-4 col-md-6 mb-4">

                            <div class="card">
                                <div class="card-header">
                                </div>
                                <div class="card-body">
                                   <a href="<?= Url::toRoute(['site/view', 'id' => $recent3->id]); ?>"><h5 class="card-title"><?= $recent3->title; ?></h5></a>
                                    <p class="card-text"><?= $recent3->author->name; ?></p>
                                    <p class="card-text"><?= $recent3->content; ?></p>
                                    <a href="<?= Url::toRoute(['/category', 'id' => $recent3->category->id]); ?> <p class="card-text"> <?= $recent3->category->title; ?></p></a>
                                    <a href="<?= Url::toRoute(['site/view', 'id' => $recent3->id]); ?>"  class="btn btn-primary btn-md">read
                                        <i class="fa fa-play ml-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

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
<!--    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>-->

<!--    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div>-->
</div>
