<nav class="navbar navbar-default navbar-static-top" role="navigation" id="top-navigation-wrapper">
  <div class="container">
    <div class="navbar-header container">
      <div class="row">
        <div class="col-sm-1" id="logo-col">
          <?php if ($logo): ?>
            <a class="logo navbar-btn pull-left" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
              <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
            </a>
          <?php endif; ?>
        </div>
        <div class="col-sm-11" id="nav-header-col">
          <div class="row">
            <div class="col-lg-6">
              <?php if (!empty($site_name)): ?>
                <a class="name navbar-brand" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a>
              <?php endif; ?>
              <?php if (!empty($site_slogan)): ?>
                <div id="slogan">
                  <p class="lead"><?php print $site_slogan; ?></p>
                </div>
              <?php endif; ?>
            </div>
            <div class="col-lg-6">
              <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <div class="collapse navbar-collapse pull-right" id="navigation-2">
                <?php if (!empty($primary_nav)): ?>
                  <?php print render($primary_nav); ?>
                <?php endif; ?>
                <?php if (!empty($page['top_navigation'])): ?>
                  <?php print render($page['top_navigation']); ?>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>
