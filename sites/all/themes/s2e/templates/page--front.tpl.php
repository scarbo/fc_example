<div id="wrapper">
  <!-- header-->
  <div id="header">
    <?php if ($logo): ?>
    <div id="logo">
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
      </a>
    </div>
    <?php endif;?>
  </div>
  <!-- #header-->
  <div id="content">
    <ul id="menu">
      <li id="slider">
        <div id="mySlider" class="royalSlider default">
          <ul class="royalSlidesContainer">
            <?php print $items_banner;?>
          </ul>
        </div>
      </li>
      <?php print $login_block;?>
      <?php print $items_video;?>
      <?php print $items_page;?>
    </ul>
    <div id="ajax-info-block">
      <div><h3></h3>

        <div id="content-info-block">
          <div></div>
          <span id="close-info-block">X</span>
        </div>
      </div>
    </div>
    <!-- #content-->
    <div id="footer">
      <a href="">Email newsletter</a>
      <pre> | </pre>
      <a href="">Help</a>
      <pre> | </pre>
      <a href="">Integrations</a>
      <pre>  </pre>
      <a href="">Security</a>
      <pre>  </pre>
      <a href="">Privacy</a>
      <pre>  </pre>
      <a href="">Terms</a>
      <pre>  </pre>
      <a href="">Contact</a>
      <pre> |</pre>
      <p id="copy">Copyright ©1999-2012 ООО S2E</p>
    </div>
    <!-- #footer -->
  </div>
  <!-- #wrapper -->