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
                <h2>New publications</h2>
                 <div class="row mb-4 wow fadeIn">


                        <div class="col-lg-4 col-md-6 mb-4">

                            <div class="card">
                                <div class="card-header">
                                </div>
                                <div class="card-body">
                                   <a href="<?= Url::toRoute(['site/view', 'id' => $recent1->id]); ?>"><h5 class="card-title"><?= $recent1->title; ?></h5></a>
                                    <p class="card-text"><?= $recent1->author->name; ?></p>
                                    <p class="card-text"><?= $recent1->content; ?></p>
                                    <a href="<?= Url::toRoute(['category/index', 'id' => $recent1->category->id]); ?> <p class="card-text"> <?= $recent1->category->title; ?></p></a>
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
                                    <a href="<?= Url::toRoute(['category/index', 'id' => $recent2->category->id]); ?> <p class="card-text"> <?= $recent2->category->title; ?></p></a>
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
                                    <a href="<?= Url::toRoute(['category/index', 'id' => $recent3->category->id]); ?> <p class="card-text"> <?= $recent3->category->title; ?></p></a>
                                    <a href="<?= Url::toRoute(['site/view', 'id' => $recent3->id]); ?>"  class="btn btn-primary btn-md">read
                                        <i class="fa fa-play ml-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                </div>

            </section>
        </div>
    </main>
</div>
