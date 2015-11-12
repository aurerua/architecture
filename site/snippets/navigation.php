<?php

// main menu items
$items = $pages->visible();

// only show the menu if items are available
if($items->count()):

?>
<nav id="custom-navbar" class="navbar navbar-default navbar-custom">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo kirby()->urls()->index() ?>/"><h1><?php echo html($site->title()) ?></h1></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
       <ul class="nav navbar-nav navbar-right">

    <?php foreach($items as $item): ?>

          <li <?php e($item->isOpen(), ' class="active"') ?> role="presentation"><a href="<?php echo $item->url() ?>"><?php echo $item->title()->html() ?></a></li>

    <?php endforeach ?>


      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<?php endif ?>
