<?php
// Highlights the current section in the menu
function checkActive($trigger) {
  $currentUri = $_SERVER['REQUEST_URI'];

  preg_match('/^\/(\w+(?:\/\w+)?)\/?$/', $currentUri, $matches1);
  foreach ($matches1 as $value1) {
    if ($trigger == $value1) {
      return 'active';
      break;
    }
  }
  preg_match('/^\/(\w+)/', $currentUri, $matches2);
  foreach ($matches2 as $value2) {
    if ($trigger == $value2) {
      return 'active';
    }
  }
}

?>
      <!-- Navigation bar -->
	    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle navbar-right" data-toggle="collapse" data-target="#top-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-text">Menu</span>
          <span class="fa fa-bars"></span>
        </button>
        <a class="navbar-brand" href ="/"><span class="text-center visible-xs">Pierre-Yves Poujade</span></a>
      </div>

      <div class="collapse navbar-collapse" id="top-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="<?php print checkActive('home');?>"><a href="/home"><i class="fa fa-home"></i> Home</a></li>
          <li class="<?php print checkActive('aboutme');?>"><a href="/aboutme"><i class="fa fa-question-circle"></i> About Me</a></li>
          <li class="<?php print checkActive('portfolio');?>"><a href="/portfolio"><i class="fa fa-cogs"></i> Portfolio</a></li>
          <li class="dropdown <?php print checkActive('resume');?>">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-file-text"></i> Résumé <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li class="<?php print checkActive('resume/en');?>"><a href="/resume/en">In English</a></li>
              <li class="<?php print checkActive('resume/fr');?>"><a href="/resume/fr">En Français</a></li>
            </ul>
          </li>
          <li class="<?php print checkActive('contact');?>"><a href="/contact"><i class="fa fa-envelope"></i> Contact</a></li>
        </ul>
      </div>
    </nav>
    <!-- /Navigation bar -->