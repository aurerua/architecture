

<footer class="footer">
   <?php if($page->url() != $site->url()."/impressum"): ?>
    <div class="container">
        <div class="impressum"><a href="<?php echo $site->url()."/impressum" ?>">Impressum</a></div>
    </div>
    <?php endif ?>
</footer>

<!-- Third party js files -->
<?php echo js( 'assets/js/jquery-2.1.4.min.js') ?>
<?php echo js( 'assets/js/bootstrap.min.js') ?>

<?php echo js( 'assets/js/jquery.fitvids.js') ?>
<?php echo js( 'assets/js/hammer.min.js') ?>
<!--  Other js files -->
<?php echo js( 'assets/js/add-touch-gestures.js') ?>
</body>

</html>
  