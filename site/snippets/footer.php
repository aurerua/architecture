<footer class="footer cf" role="contentinfo">

  <div class="copyright">
    <?php echo $site->copyright()->kirbytext() ?>
  </div>

  <div class="colophon">
    <a href="http://getkirby.com/made-with-kirby-and-love">Made with Kirby and <b>♥</b></a>
  </div>

</footer>

</body>

</html>


<footer class="site-footer clearfix">
  <section class="copyright"><a href="{{@blog.url}}">{{@blog.title}}</a> &copy; {{date format="YYYY"}}</section>
  <section class="poweredby">Proudly published with <a href="https://ghost.org">Ghost</a></section>
</footer>

</div>
<!-- Third party js files -->
<?php echo js( 'assets/js/jquery-2.1.4.min.js') ?>
<?php echo js( 'assets/css/bootstrap.min.js') ?>

<?php echo js( 'assets/js/jquery.fitvids.js') ?>
<?php echo js( 'assets/js/hammer.min.js') ?>
<!--  Other js files -->
<?php echo js( 'assets/js/fix-active-links-in-navbar.js') ?>
<?php echo js( 'assets/js/move-images-to-carousel.js') ?>
<?php echo js( 'assets/js/show-list-of-posts.js') ?>
<?php echo js( 'assets/js/add-touch-gestures.js') ?>
<?php echo js( 'assets/js/main.js') ?>


</body>

</html>
  