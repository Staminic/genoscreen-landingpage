<?php defined( '_JEXEC' ) or die;

include_once JPATH_THEMES.'/'.$this->template.'/logic.php';

?>
<!doctype html>
<html lang="<?php echo $this->language; ?>">
<head>
    <jdoc:include type="head" />
</head>

<body class="<?php echo $active->alias . ' ' . $pageclass; ?>">
  <nav class="navbar navbar-expand-md">
    <a class="navbar-brand" href="index.php/genoscreen-services">
      <img src="<?php echo $tpath; ?>/img/genoscreen-services-logo.svg" alt="Genoscreen Services" />
    </a>
    
    <button type="button" class="navbar-toggle offcanvas-toggle" data-toggle="offcanvas" data-target="#navbar-modules">
      <i class="fas fa-bars"></i>
    </button>

    <div class="navbar-offcanvas navbar-offcanvas-touch" id="navbar-modules" style="display: flex;">
      <div>
        <div class="navarea second">
          <jdoc:include type="modules" name="second-navbar" />
        </div>
        <div class="navarea main">
          <jdoc:include type="modules" name="navbar" />
        </div>
      </div>
    </div>
  </nav>

  <div class="container">
      <jdoc:include type="component" />
  </div>

  <jdoc:include type="modules" name="debug" />
  <!-- <script src="<?php echo $tpath; ?>/build/app.js"></script> -->
  <script src="<?php echo $tpath; ?>/js/bootstrap.offcanvas.min.js"></script>
</body>

</html>
