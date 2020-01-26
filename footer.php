<footer class="container">
  <div class="row">
    <?php dynamic_sidebar('footer-widget-area'); ?>
  </div>

  <div class="row">
    <div class="col-12 text-center">
      <p class="text-center"><img
          src="https://img.shields.io/date/<?php echo time(); ?>.svg?label=build%20date&style=flat-square"
          alt="build date"> <img
          src="https://img.shields.io/uptimerobot/ratio/m782705601-0fbfd090aabee849c89f77e0.svg?style=flat-square"
          alt="uptime"></p>
    </div>
    <div class="col-12 text-center text-muted small">
      This site is a work in progress. It's gonna look like shit but I'm adding to it as I go.
    </div>
    <p class="w-100 mb-4 text-center">
      <?php if( get_field('github_url', 'option') ):?>
      <a href="<?php the_field( 'github_url', 'option', false ); ?>" name="Patrick Godbey on Github">
        <i class="fab fa-github"></i>
      </a>
      <?php endif; ?>
      <?php if( get_field('twitter_url', 'option') ):?>
      <a href="<?php the_field( 'twitter_url', 'option', false ); ?>" name="Patrick Godbey on Github">
        <i class="fab fa-twitter"></i>
      </a>
      <?php endif; ?></p>
  </div>

</footer>
</div>
<!-- close content row -->
</div>
<!-- close content container -->


<?php wp_footer(); ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-142626843-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());

  gtag('config', 'UA-142626843-1');
</script>
</body>

</html>
