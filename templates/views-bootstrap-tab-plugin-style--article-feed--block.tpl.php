<div class="well" id="article-feed-wrapper">
  <div id="views-bootstrap-tab-<?php print $id ?>" class="<?php print $classes ?> row row-no-gutter">
    <div class="col-xs-3"> <!-- required for floating -->
      <!-- Nav tabs -->
      <ul class="nav nav-<?php print $tab_type?> <?php if ($justified) print 'nav-justified' ?> tabs-left">
        <?php foreach ($tabs as $key => $tab): ?>
         <li class="<?php if ($key === 0) print 'active'?>">
           <a href="#tab-<?php print "{$id}-{$key}" ?>" data-toggle="tab"><?php print $tab ?></a>
         </li>
        <?php endforeach ?>
      </ul>
    </div>
    <div class="col-xs-9">
      <!-- Tab panes -->
      <div class="tab-content">
        <?php foreach ($rows as $key => $row): ?>
          <div class="tab-pane <?php if ($key === 0) print 'active'?>" id="tab-<?php print "{$id}-{$key}" ?>">
            <?php print $row ?>
          </div>
        <?php endforeach ?>
      </div>
    </div>
  </div>
</div>