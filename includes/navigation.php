<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
      <ul class="nav navbar-nav">
        <li class="<?php echo (basename($_SERVER['PHP_SELF']) == 'index.php' ? ' active' : '');?>"><a href="#">Home</a></li>

        <li class="<?php echo (basename($_SERVER['PHP_SELF']) == 'blog.php' ? ' active' : '');?>"><a href="#">Blog</a></li>

        <li class="dropdown" class="<?php echo (basename($_SERVER['PHP_SELF']) == 'about.php' ? ' active' : '');?>">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">About <span class="caret"></span></a>

          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Biography</a></li>

            <li><a href="#">Hobbies &amp; Interests</a></li>

            <li><a href="#">Books &amp; people</a></li>
          </ul>
        </li>

        <li class="<?php echo (basename($_SERVER['PHP_SELF']) == 'hire.php' ? ' active' : '');?>"><a href="#">Hire</a></li>

        <li class="<?php echo (basename($_SERVER['PHP_SELF']) == 'contact.php' ? ' active' : '');?>"><a href="contact.php">Contact</a></li>
      </ul>
    </div>
  </nav>