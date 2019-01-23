<?php

use yii\helpers\Url;

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="container">

    <section class="text-center">

        <!-- New publications section -->

        <h1>New publications</h1>
        <br>

        <div class="row">
            
            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="/img/science.jpg" alt=""></a>
                    <div class="card-body">
                        <a href="<?= Url::toRoute(['category/index', 'id' => $sci_fy->category->id]); ?>"><h4 class="card-title"><?= $sci_fy->category->title; ?></h4></a>
                        <a href="<?= Url::toRoute(['site/view', 'id' => $sci_fy->id]); ?>"><h5 class="card-title"><?= $sci_fy->title; ?></h5></a>
                        <h6 class="card-title"><?= $sci_fy->author->name; ?></h6>
                        <p class="card-text">Фантастика – это наша реальность, доведенная до абсурда.</p>
                        <a href="<?= Url::toRoute(['site/view', 'id' => $sci_fy->id]); ?>" class="btn btn-primary">читать</a>
                        <a href="#" data-id="<?=$sci_fy->id?>" class="btn btn-primary add-to-profile">добавить</a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="/img/science.jpg" alt=""></a>
                    <div class="card-body">
                        <a href="<?= Url::toRoute(['category/index', 'id' => $drama->category->id]); ?>"><h4 class="card-title"><?= $drama->category->title; ?></h4></a>
                        <a href="<?= Url::toRoute(['site/view', 'id' => $drama->id]); ?>"><h5 class="card-title"><?= $drama->title; ?></h5></a>
                        <h6 class="card-title"><?= $drama->author->name; ?></h6>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="<?= Url::toRoute(['site/view', 'id' => $drama->id]); ?>" class="btn btn-primary">читать</a>
                        <a href="#" data-id="<?=$drama->id?>" class="btn btn-primary add-to-profile">добавить</a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="/img/science.jpg" alt=""></a>
                    <div class="card-body">
                        <a href="<?= Url::toRoute(['category/index', 'id' => $comedy->category->id]); ?>"><h4 class="card-title"><?= $comedy->category->title; ?></h4></a>
                        <a href="<?= Url::toRoute(['site/view', 'id' => $comedy->id]); ?>"><h5 class="card-title"><?= $comedy->title; ?></h5></a>
                        <h6 class="card-title"><?= $comedy->author->name; ?></h6>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="<?= Url::toRoute(['site/view', 'id' => $comedy->id]); ?>" class="btn btn-primary">читать</a>
                        <a href="#" data-id="<?=$comedy->id?>" class="btn btn-primary add-to-profile">добавить</a>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- /.row -->
        
        <hr>

        <div class="row">
        <div class="col-lg-6">
          <h2>About project</h2>
          <p>This project includes:</p>
          <ul>
            <li>
              <strong>stories</strong>
            </li>
            <li>sci-fy</li>
            <li>drama</li>
            <li>popular science</li>
            <li>comedy</li>
          </ul>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
        </div>
        <div class="col-lg-6">
          <img class="img-fluid rounded" src="/img/4.jpeg" alt="">
        </div>
      </div>
      <!-- /.row -->

      <hr>

        <!-- Call to Action Section -->
        <div class="row mb-4">
            <div class="col-md-8">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
            </div>
            <div class="col-md-4">
                <a class="btn btn-lg btn-secondary btn-block" href="#">Call to Action</a>
            </div>
        </div>

    </section>

</div>