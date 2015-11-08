<?php snippet('header') ?>

<?php snippet('navigation') ?>

 <div class="site-wrapper">

    <div class="container post-header">
        <div class="row gutter-60">
            <div class="col-md-4">
            </div>
            <div class="col-md-8">
                <header>
                  <?php if($page->hasImages() == 1): ?>
                    <img class="img-responsive" src="<?php echo $image->url() ?>" alt="<?php echo $image->name() ?>">
                  <?php endif ?>
                  <?php if($page->hasImages() > 1): ?>
                  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="false" style="touch-action: pan-y; -webkit-user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                        <ol class="carousel-indicators">
                          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                          <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                          <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                          <li data-target="#carousel-example-generic" data-slide-to="3" class=""></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <?php $m = 0; foreach($page->images()->sortBy('sort', 'asc') as $image): $m++ ?>
                            <div class="item<?php echo ($m == 1) ? ' active' : '' ?>">
                                <img class="img-responsive" src="<?php echo $image->url() ?>" alt="<?php echo $image->name() ?>">
                            </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                  <?php endif ?>
                </header>
            </div>
        </div>
    </div>
    

    <main class="content" role="main">
        <div class="container post">

            <div class="row gutter-60">
                <div class="col-md-4">
                </div>
                <div class="col-md-8">
                    <article class="{{post_class}}">
                        <header class="post-header">
                            <h1 class="post-title">{{title}}</h1>
                        </header>
                        <section class="post-content">
                            {{content}}
                        </section>
                    </article>
                </div>
            </div>
        </div>
    </main>

<?php snippet('footer') ?>





