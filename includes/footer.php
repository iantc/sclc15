<footer class="footer" id="footer_wrapper">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-md-offset-1" id="footer-left-wrapper">
        <?php print render($page['footer_left']); ?>
      </div>
      <div class="col-md-4" id="footer-middle-wrapper">
        <?php print render($page['footer_middle']); ?>
      </div>
      <div class="col-md-3 col-md-offset-1" id="footer-right-wrapper">
        <?php print render($page['footer_right']); ?>
      </div>
    </div>
    <div class="row">
      <?php print render($page['footer']); ?>
    </div>
  </div>
</footer>