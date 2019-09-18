<!DOCTYPE html>
<html>
    <head>
        <?php wp_head(); ?>        
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
          crossorigin="anonymous">
          <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 

          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
          integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" 
          crossorigin="anonymous"></script>
          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
          crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" 
          integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" 
          crossorigin="anonymous"></script>
          <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
          <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
          <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

      </head>
    <body>

  <header class="container-all">
      <div class="left" style="height: 0px;">
          <a href="<?php echo site_url('#')?>"></a>
          <img class="img-logo"src="<?php echo get_theme_file_uri('/images/logo.png');?>">
        </div>   
      
        <div class="central">  
              <nav class="main-navigation">
                <ul >
                  <li><img class="img-icon" src="<?php echo get_theme_file_uri('/icons/noun_website_2197471.svg');?>"><a href="<?php echo site_url('/privacy-policy')?>"  style="margin-top:4px; margin-left:-4px;">عن البوابة</a></li>
                  <li><img class="img-icon" src="<?php echo get_theme_file_uri('/icons/noun_Opinion_447567.svg');?>" style="margin-left:15px;"><a href="<?php echo site_url('/privacy-policy')?>" >شارك برأيك</a></li>
                  <li><img class="img-icon" src="<?php echo get_theme_file_uri('/icons/noun_people_708253.svg');?>"  style="margin-left:43px;"></i><a href="<?php echo site_url('/about-us')?>" >انضم لفريق المقيمين</a></li>
                  <li><img class="img-icon" src="<?php echo get_theme_file_uri('/icons/Search.svg');?>"><a style="font-family:robotoArabic2;" href="<?php echo site_url('/')?>">بحث</a></li>
                </ul>
              </nav>
          </div>
          <div class="right">  
        <span>
            <nav class="nav-social">
              <ul>
                  <li><img class="img-soc"  src="<?php echo get_theme_file_uri('/icons/google-plus-circular-button.svg');?>"><a href="#"></a></li>
                  &nbsp;<li><img class="img-soc"  src="<?php echo get_theme_file_uri('/icons/twitter.svg');?>"><a href="#"></a></li>
                  &nbsp;<li><img class="img-soc"  src="<?php echo get_theme_file_uri('/icons/facebook.svg');?>"><a href="#"></a></li>
              </ul>
            </nav>
        </span>
        </div>
  </header>