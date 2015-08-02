<?php include("sites/all/themes/sclc15/includes/nav-header.php"); ?>
<div class="main-container-wrapper">
  <div class="main-container container">
    <div id="top-row">
      <div id="featured-wrapper">
        <div class="container-fluid">
          <div class="row">
            <div class="featured col-sm-12">
              <?php print render($page['featured']); ?>
            </div>
          </div>
          <div class="row">
          </div>
        </div>
      </div>
    </div>
    <?php if (!empty($page['highlighted'])): ?>
      <div id="highlight-wrapper">
        <div class="container">
          <div class="row">
            <div class="highlighted col-md-12">
              <?php print render($page['highlighted']); ?>
            </div>
          </div>
        </div>
      </div>
    <?php endif; ?>
    <div class="" id="main-content-wrapper">
      <section class="col-sm-12">
        <a id="main-content"></a>
        <?php print render($page['page_top']); ?>
        <?php print render($page['content']); ?>
        <?php print render($page['page_bottom']); ?>
      </section>
    </div>
  </div>
</div>
<?php include("sites/all/themes/sclc15/includes/footer.php"); ?>