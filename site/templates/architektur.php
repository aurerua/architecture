<?php snippet( 'header') ?>
<?php snippet( 'navigation') ?>

<div class="site-wrapper">

  <main id="content" class="content" role="main">

    <div class="container posts">
      <!--Loop over the projects-->
      <?php $n = 0; foreach($projects as $project): $n++; ?>
        <?php if(($n+3)%3 == 1): ?> <!--If this is the first element in a row-->
        <div class="row gutter-60">
        <?php endif ?>

        <div class="col-md-4">
          <article class="post center-block">
            <?php foreach($project->images()->sortBy('sort', 'asc') as $image): ?>
            <a href="<?php echo $project->url() ?>">
              <img class="img-responsive" src="<?php echo $image->url() ?>" alt="<?php echo $image->name() ?>">
            </a>
            <?php endforeach ?>
            <header class="post-header">
              <h2 class="post-title"><a href="<?php echo $project->url() ?>"><?php echo $project->title()->html() ?></a></h2>
            </header>
          </article>
        </div>

        <?php if(($n+1)%3 == 1): ?> <!--If this is the last element in a row-->
      </div>
      <?php else: ?>
      <?php if($project == $last): ?> <!--If this the last element in the collection-->
    </div>
    <?php endif ?><?php endif ?>
    <?php endforeach ?>


</div>

<?php if($projects->pagination()->hasPages()): ?>
<div class="container pagination-cont">
  <div class="row">
    <div>
      
      <nav class="pagination" role="navigation">
     <?php if($projects->pagination()->hasPrevPage()): ?>
        <a class="newer-posts" href="<?php echo $projects->pagination()->prevPageURL() ?>">&lt;&lt;&lt;</a>
      <?php endif ?>
      <?php if($projects->pagination()->hasNextPage()): ?>
        <a class="older-posts" href="<?php echo $projects->pagination()->nextPageURL() ?>">&gt;&gt;&gt;</a>
      <?php endif ?>
      </nav>
    </div>
  </div>
</div>
<?php endif ?>

</main>

<?php snippet( 'footer') ?>
