<?php snippet('header') ?>

<?php snippet('navigation') ?>


 <div class="wrapper">

  <main class="main" role="main">
    <div class="container default">
      <div class="text">
        <h1><?php echo $page->title()->html() ?></h1>
        <?php echo $page->text()->kirbytext() ?>
      </div>
    </div>
  </main>

</div>

<?php snippet('footer') ?>