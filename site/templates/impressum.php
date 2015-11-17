<?php snippet('header') ?>

<?php snippet('navigation') ?>

 <div class="wrapper">

    <main class="content" role="main">
        <div class="container post people">
            <div class="row gutter-60">
                <div class="col-md-4">
                    <article>
                        <!--<header class="post-header">-->
                        <!--  <?php echo $page->title1()->kirbytext() ?>-->
                        <!--</header>-->
                        <section class="post-content">
                            <?php echo $page->text1()->kirbytext() ?>
                        </section>
                    </article>
                </div>
                <div class="col-md-4">
                    <article>
                        <!--<header class="post-header">-->
                        <!--  <?php echo $page->title2()->kirbytext() ?>-->
                        <!--</header>-->
                        <section class="post-content">
                            <?php echo $page->text2()->kirbytext() ?>
                        </section>
                    </article>
                </div>
                <div class="col-md-4">
                    <article>
                        <!--<header class="post-header">-->
                        <!--  <?php echo $page->title3()->kirbytext() ?>-->
                        <!--</header>-->
                        <section class="post-content">
                            <?php echo $page->text3()->kirbytext() ?>
                        </section>
                    </article>
                </div>
            </div>
        </div>
    </main>

</div>
    
<?php snippet('footer') ?>