<head>
    <meta charset="utf-8">
    <title>School of Architecture + Design</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Le styles -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
  </head>
  <body>
  <div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <a class="brand" href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a>
        <div class="nav-collapse collapse">
           <!-- <ul cclass="nav navbar-nav">
              <?php wp_list_pages(array('title_li' => '')); ?>
          </ul> -->
           <ul class="nav navbar-nav">
                <li><a href="#" data-toggle="collapse" data-target="#directory">
                    Directory <span class="caret"></span>
                 </a></li>
                <li><a href="#" data-toggle="collapse" data-target="#about">
                    About <span class="caret"></span>
                 </a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>

      </div>
      <div id="directory" class="collapse">
         <div class="row">
             <li><a href="">directory</a></li>
             <li><a href="">directory</a></li>
             <li><a href="">directory</a></li>

         </div>
      </div>
     <div id="about" class="collapse">
         <div class="row">
             <div class="col-xs-3"><a href="">about 1</a></div>
             <div class="col-xs-3"><a href="">about 2</a></div>
             <div class="col-xs-3"><a href="">about 3</a></div>
         </div>
      </div>
  </div>
 </div>
</body>
