<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        
        <li class="<?php echo (basename($_SERVER['PHP_SELF']) == 'index.php' ? ' active' : '');?>"><a href="index.php">Home</a></li>

        <li class="<?php echo (basename($_SERVER['PHP_SELF']) == 'blog.php' ? ' active' : '');?>"><a href="blog.php">Blog</a></li>

        <li class="dropdown" class="<?php echo (basename($_SERVER['PHP_SELF']) == 'about.php' ? ' active' : '');?>">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">About <span class="caret"></span></a>

          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Biography</a></li>

            <li><a href="#">Hobbies &amp; Interests</a></li>

            <li><a href="#">Books &amp; people</a></li>
          </ul>
        </li>

        <li class="<?php echo (basename($_SERVER['PHP_SELF']) == 'hire.php' ? ' active' : '');?>"><a href="hire.php">Hire</a></li>

        <li class="<?php echo (basename($_SERVER['PHP_SELF']) == 'contact.php' ? ' active' : '');?>"><a href="contact.php">Contact</a></li>
      </ul>
     
    </div>
  </div>
</nav>