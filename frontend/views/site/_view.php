<?php
use yii\helpers\Url;
use yii\widgets\LinkPager;

/* @var $this yii\web\View */


$this->title = $books->category->title;
?>
<div class="site-index">
    <main class="mt-5 pt-5">
        <div class="container">

<!--            <div class="card col md-2 wow fadeIn">

                Card content
                <div class="card-body">

                    <p class="h5 my-4"><? echo $books->title; ?></p>

                    <blockquote class="blockquote">
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        <footer class="blockquote-footer">Someone famous in
                            <cite title="Source Title">Source Title</cite>
                        </footer>
                    </blockquote>

                    <p><? echo $books->content; ?></p>
                    <p><? echo $books->author->name; ?></p>

                </div>-->

 <section class="section-content single">

        <div class="container">
            <div class="row">
                

                <div class="col-md-2 col-md-push-1 entry-details">

                    <div class="entry-date">Feb 14, 2016</div>
                    <div class="entry-author">
                        by
                        <h5><?= $books->author->name; ?></h5>
                        <p><?= $books->title; ?></p>
                         <a href="<?= Url::toRoute(['category/index', 'id' => $books->category->id]); ?> <p class="card-text"> <?= $books->category->title; ?></p></a>
                    </div>
                    <div class="entry-views">5000 views</div>
                    <div class="entry-social">
                        <a href="javascript:;"><i class="fa fa-facebook"></i></a>
                        <a href="javascript:;"><i class="fa fa-youtube"></i></a>
                        <a href="javascript:;"><i class="fa fa-twitter"></i></a>
                        <a href="javascript:;"><i class="fa fa-linkedin"></i></a>
                    </div>

                </div>
                <!-- end .entry-details -->

                <div class="col-sm-7 col-md-push-1 entry-content">

                    <article class="blog-item blog-single">

                        <h2 class="post-title"><?= $books->title; ?></h2>
                        <p><?= $books->content; ?></p>

<!--                        <p>Democratic hopeful Hillary Clinton came out in favor of changes to the Federal Reserve that would reduce the number of bankers in key central bank positions on Thursday, marking a major coup for national progressive groups championing reform.</p>
                        <p>“The Federal Reserve is a vital institution for our economy and the wellbeing of our middle class, and the American people should have no doubt that the Fed is serving the public interest,” Jesse Ferguson, a Clinton campaign spokesman, said in a statement. “That’s why Secretary Clinton believes that the Fed needs to be more representative of America as a whole as well as that commonsense reforms — like getting bankers off the boards of regional Federal Reserve banks — are long overdue.”</p>
                        <p>The campaign also <span class="twitter-shareable">Provided insight into the type of Federal Reserve governors</span> that Clinton would appoint.</p>

                        <blockquote>
                            <cite>- Hugh Laurie</cite>
                            <p>The concept you have about me won’t change who i am, but it can change my concept about you.</p> 
                        </blockquote>

                        <h4>Fuel Standards</h4>
                        <p>Democratic hopeful Hillary Clinton came out in favor of changes to the Federal Reserve that would <span class="twitter-shareable">Reduce the number of bankers in key central bank positions</span> on Thursday, marking a major coup for national progressive groups championing reform.</p>

                        <p>“The Federal Reserve is a vital institution for our economy and the wellbeing of our middle class, and the American people should have no doubt that the Fed is serving the public interest,” Jesse Ferguson, a Clinton campaign spokesman, said in a statement. “That’s why Secretary Clinton believes that the Fed needs to be more representative of America as a whole as well as that complete.</p>

                        <h4>Refiner Alliance</h4>
                        <p>Democratic hopeful Hillary Clinton came out in favor of changes to the Federal Reserve that would reduce the number of bankers in key central bank positions on Thursday, marking a <span class="twitter-shareable">Major coup for national progressive groups championing reform.</span></p>
                        <p>“The Federal Reserve is a vital institution for our economy and the wellbeing of our middle class, and the American people should have no doubt that the Fed is serving the public interest,” Jesse Ferguson, a Clinton campaign spokesman, said in a statement. “That’s why Secretary Clinton believes that the Fed needs to be more representative of America as a whole as well as that commonsense reforms — like getting bankers off the boards of regional Federal Reserve banks — are long overdue.”</p>
                        <p>The campaign also provided insight into the type of Federal Reserve governors that Clinton would appoint.</p>
          

                        <div class="fullwidth-section image height-tall mv5" data-src="images/single/parallax-2.jpg" data-section-type="parallax"></div>

                        <p>Democratic hopeful Hillary Clinton came out in favor of changes to the Federal Reserve that would <span class="twitter-shareable">Reduce the number of bankers in key central bank positions</span> on Thursday, marking a major coup for national progressive groups championing reform.</p>

                        <p>“The Federal Reserve is a vital institution for our economy and the wellbeing of our middle class, and the American people should have no doubt that the Fed is serving the public interest,” Jesse Ferguson, a Clinton campaign spokesman, said in a statement. “That’s why Secretary Clinton believes that the Fed needs to be more representative of America as a whole as well as that complete.</p>

                        <h4>Refiner Alliance</h4>
                        <p>Democratic hopeful Hillary Clinton came out in favor of changes to the Federal Reserve that would reduce the number of bankers in key central bank positions on Thursday, marking a <span class="twitter-shareable">Major coup for national progressive groups championing reform.</span></p>
                        <p>“The Federal Reserve is a vital institution for our economy and the wellbeing of our middle class, and the American people should have no doubt that the Fed is serving the public interest,” Jesse Ferguson, a Clinton campaign spokesman, said in a statement. “That’s why Secretary Clinton believes that the Fed needs to be more representative of America as a whole as well as that commonsense reforms — like getting bankers off the boards of regional Federal Reserve banks — are long overdue.”</p>
                        <p>The campaign also provided insight into the type of Federal Reserve governors that Clinton would appoint.</p>-->
                        
                    </article>

                </div>

            </div>

        </div>

    </section>

            </div>
        </div>
    </main>

</div>