<?php include("sites/all/themes/sclc15/includes/nav-header.php"); ?>
<?php if (!empty($page['featured'])): ?>
  <div id="featured-wrapper">
    <div class="container">
      <div class="row">
        <div class="featured col-sm-12">
          <?php print render($page['featured']); ?>
        </div>
      </div>
    </div>
  </div>
<?php endif; ?>
<?php if (!empty($page['highlighted'])): ?>
  <div id="highlight-wrapper">
    <div class="container">
      <div class="row">
        <div class="highlighted col-sm-12">
          <?php print render($page['highlighted']); ?>
        </div>
      </div>
    </div>
  </div>
<?php endif; ?>
<div class="main-container-wrapper">
  <div class="main-container container">
    <div class="row">
      <section class="col-sm-12">
        <a id="main-content"></a>
        <?php print render($page['page_top']); ?>
        <?php print render($page['content']); ?>
        <?php print render($page['page_bottom']); ?>
      </section>
    </div>
  </div>
</div>
<?php if (!empty($page['subfeatured'])): ?>
  <div id="subfeatured-wrapper">
    <div class="container">
      <div class="row">
        <div class="featured col-sm-12">
          <?php print render($page['subfeatured']); ?>
        </div>
      </div>
    </div>
  </div>
<?php endif; ?>
<?php include("sites/all/themes/sclc15/includes/footer.php"); ?>