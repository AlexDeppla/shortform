<?php
use yii\helpers\Url;
use yii\widgets\LinkPager;
/* @var $this yii\web\View */

$this->title = $books->category->title;
?>
<div class="site-index">
    <main class="mt-5 pt-5">
        <div class="container">

            <div class="card mb-4 wow fadeIn">

                <!--Card content-->
                <div class="card-body">

                    <p class="h5 my-4"><?= $books->title; ?></p>

                    <blockquote class="blockquote">
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        <footer class="blockquote-footer">Someone famous in
                            <cite title="Source Title">Source Title</cite>
                        </footer>
                    </blockquote>

                    <p><?= $books->content; ?></p>
                    <p><?= $books->author->name; ?></p>

                </div>

            </div>
        </div>
    </main>

</div>