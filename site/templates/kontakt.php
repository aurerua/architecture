<?php snippet('header') ?>

<?php snippet('navigation') ?>

 <div class="site-wrapper">

    <main class="content" role="main">
        <div class="container post contact">
            <div class="row gutter-60">
                <div class="col-md-4">
                    <article class="{{post_class}}">
                        <header class="post-header">
                            <h1 class="post-title"><?php echo $page->title()->html() ?></h1>
                        </header>
                        <section class="post-content">
                            <?php echo $page->text()->kirbytext() ?>
                        </section>
                    </article>
                </div>
                <div class="col-md-8">
                    {{ghost_foot}}
                </div>
            </div>
        </div>
    </main>
<?php snippet('footer') ?>