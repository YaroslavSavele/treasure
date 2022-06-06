<?php

use yii\helpers\Url;
use yii\widgets\LinkPager;

?>
<!--main content start-->
<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
            <?php foreach ($articles as $article) : ?>
                <article class="post post-list">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="post-thumb">
                                <a href="<?= Url::toRoute(['site/view', 'id' => $article->id]); ?>">
                                    <img src="<?= $article->getImage(); ?>" alt="" class="pull-left">
                                </a>

                                <a href="<?= Url::toRoute(['site/view', 'id' => $article->id]); ?>" class="post-thumb-overlay text-center">
                                    <div class="text-uppercase text-center">View Post</div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="post-content">
                                <header class="entry-header text-uppercase">
                                    <h6><a href="<?= Url::toRoute(['site/category', 'id' => $article->category->id]); ?>"><?= $article->category->title; ?></a></h6>

                                    <h1 class="entry-title"><a href="<?= Url::toRoute(['site/view', 'id' => $article->id]); ?>"><?= $article->title; ?></a></h1>
                                </header>
                                <div class="entry-content">
                                    <p>
                                        <?= $article->description; ?>
                                    </p>
                                </div>
                                <div class="social-share">
                                    <span class="social-share-title pull-left text-capitalize">By Rubel On <?= $article->getDate(); ?></span>

                                </div>
                            </div>
                        </div>
                    </div>
                </article>

                <?php endforeach; ?>
                <?php
                echo LinkPager::widget([
                    'pagination' => $pagination,
                ]);
                ?>
            </div>
            <div class="col-md-4" data-sticky_column>
                <div class="primary-sidebar">

                    <?= $this->render('/partials/sidebar', [
                        'popular' => $popular,
                        'recent' => $recent,
                        'categories' => $categories,
                    ]); ?>
                    <aside class="widget pos-padding">
                        <h3 class="widget-title text-uppercase text-center">Follow@Instagram</h3>

                        <div class="instragram-follow">
                            <a href="#">
                                <img src="/public/images/ins-flow.jpg" alt="">
                            </a>
                            <a href="#">
                                <img src="/public/images/ins-flow.jpg" alt="">
                            </a>
                            <a href="#">
                                <img src="/public/images/ins-flow.jpg" alt="">
                            </a>
                            <a href="#">
                                <img src="/public/images/ins-flow.jpg" alt="">
                            </a>
                            <a href="#">
                                <img src="/public/images/ins-flow.jpg" alt="">
                            </a>
                            <a href="#">
                                <img src="/public/images/ins-flow.jpg" alt="">
                            </a>
                            <a href="#">
                                <img src="/public/images/ins-flow.jpg" alt="">
                            </a>
                            <a href="#">
                                <img src="/public/images/ins-flow.jpg" alt="">
                            </a>
                            <a href="#">
                                <img src="/public/images/ins-flow.jpg" alt="">
                            </a>

                        </div>

                    </aside>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end main content-->