<?php
use yii\helpers\Url;
use yii\widgets\LinkPager;

/* @var $this yii\web\View */


$this->title = $books->category->title;
?>
<div class="container">

      <div class="row justify-content-center">

        <!-- Post Content Column -->
        <div class="col-lg-8 ">

            <h1 class="mt-4 mb-3 text-center"><?= $books->title; ?>
               <h3 class="mt-4 mb-3 text-center"><?= $books->author->name; ?></h3>
            </h1>

          <hr>

          <!-- Date/Time -->
          <p class="mt-4 mb-3 text-center">Posted on January 1, 2017 at 12:00 PM</p>

          <hr>

          <!-- Post Content -->
         <p class="lead"><?= $books->content; ?></p>

          <blockquote class="blockquote">
            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
            <footer class="blockquote-footer">Дополнительные
              <cite title="Source Title">ссылки</cite>
            </footer>
          </blockquote>

          <br>

          <br>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->