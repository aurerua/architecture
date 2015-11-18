<?php snippet('header') ?>

    
<?php snippet('navigation') ?>
<div class="wrapper">

     <main class="content" role="main">


    <div class="container post-header">
        <div class="row gutter-60">
            <div class="col-md-4">
            </div>
            <div class="col-md-8">
                <header>
                  <?php foreach($page->images() as $image): ?>
                    <a href="<?php echo $image->url() ?>">
                      <img class="img-responsive" src="<?php echo $image->url() ?>" alt="">
                    </a>
                  <?php endforeach ?>
                </header>
            </div>
        </div>
    </div>
    

        <div class="container post people">
            <div class="row gutter-60">
                <div class="col-md-4">
                </div>
                <div class="col-md-8">
                    <article>
                        <header class="post-header">
                        </header>
                        <section class="post-content">
                            <?php echo $page->text()->kirbytext() ?>
                        </section>
                    </article>
                </div>
            </div>
        </div>
    </main>

</div>
    
<?php snippet('footer') ?>