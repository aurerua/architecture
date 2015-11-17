<?php snippet( 'header') ?>

<div class="wrapper">
  
  <?php snippet( 'navigation') ?>



  <main class="main section" role="main">
    <div class="container default">
      <div class="text">
        <?php echo $page->text()->kirbytext() ?>
      </div>
    </div>
  </main>
  <!--<aside class="section">-->
  <!--  <div class="container default">-->
  <!--    <?php echo $site->impressum()->kirbytext() ?>-->
  <!--  </div>-->
  <!--</aside>-->
  
</div>
  <?php snippet( 'footer') ?>