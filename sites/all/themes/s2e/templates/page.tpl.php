<div id="page-wrapper">
  <div id="page">

    <div id="header" class="<?php print $secondary_menu ? 'with-secondary-menu' : 'without-secondary-menu'; ?>">
      <div class="section clearfix">

        <?php if ($logo): ?>
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
        </a>
        <?php endif; ?>

        <?php print render($page['header']); ?>

        <?php if ($main_menu): ?>
        <div id="main-menu" class="navigation">
          <?php print theme('links__system_main_menu', array(
          'links' => $main_menu,
          'attributes' => array(
            'id' => 'main-menu-links',
            'class' => array('links', 'clearfix'),
          ),
          'heading' => array(
            'text' => t('Main menu'),
            'level' => 'h2',
            'class' => array('element-invisible'),
          ),
        )); ?>
        </div> <!-- /#main-menu -->
        <?php endif; ?>

        <?php if ($secondary_menu): ?>
        <div id="secondary-menu" class="navigation">
          <?php print theme('links__system_secondary_menu', array(
          'links' => $secondary_menu,
          'attributes' => array(
            'id' => 'secondary-menu-links',
            'class' => array('links', 'inline', 'clearfix'),
          ),
          'heading' => array(
            'text' => t('Secondary menu'),
            'level' => 'h2',
            'class' => array('element-invisible'),
          ),
        )); ?>
        </div> <!-- /#secondary-menu -->
        <?php endif; ?>

      </div>
    </div>
    <!-- /.section, /#header -->

    <?php if ($messages): ?>
    <div id="messages">
      <div class="section clearfix">
        <?php print $messages; ?>
      </div>
    </div> <!-- /.section, /#messages -->
    <?php endif; ?>

    <div id="main-wrapper" class="clearfix">
      <div id="main" class="clearfix">
        <?php if ($breadcrumb): ?>
        <div id="breadcrumb"><?php print $breadcrumb; ?></div>
        <?php endif; ?>

        <div id="content" class="column">
          <div class="section">
            <a id="main-content"></a>
            <?php print render($title_prefix); ?>
            <?php if ($title): ?>
            <h1 class="title" id="page-title">
              <?php print $title; ?>
            </h1>
            <?php endif; ?>
            <?php print render($title_suffix); ?>
            <?php if ($tabs): ?>
            <div class="tabs">
              <?php print render($tabs); ?>
            </div>
            <?php endif; ?>
            <?php print render($page['help']); ?>
            <?php if ($action_links): ?>
            <ul class="action-links">
              <?php print render($action_links); ?>
            </ul>
            <?php endif; ?>
            <?php print render($page['content']); ?>

          </div>
        </div>
        <!-- /.section, /#content -->

      </div>
    </div>
    <!-- /#main, /#main-wrapper -->

    <div id="footer-wrapper">
      <div class="section">
        <?php if ($page['footer']): ?>
        <div id="footer" class="clearfix">
          <?php print render($page['footer']); ?>
        </div> <!-- /#footer -->
        <?php endif; ?>

      </div>
    </div>
    <!-- /.section, /#footer-wrapper -->

  </div>
</div> <!-- /#page, /#page-wrapper -->
