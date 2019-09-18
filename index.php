<?php get_header();?>
<style>
  input[type="text"]::placeholder{
    text-align: right; 
    direction: rtl;
  }
</style>  
<script type="text/javascript">
    function toggle_visibility(id) {
       var e = document.getElementById(id);
       if(e.style.display == 'block')
          e.style.display = 'none';
       else
          e.style.display = 'block';
    }
    function toggle_visible(id) {
       var e = document.getElementById(id);
       if(e.style.display == 'block')
          e.style.display = 'none';
       else
          e.style.display = 'block';
    }
</script>

<!-- HEADER AND HOME PAGE IN THE BEGINING -->

<div class="page-banner">
  <div class="page-banner__bg-image" style="background-image: url(<?php 
        echo get_theme_file_uri('/images/doc.png');
  ?>);"></div>
    <div class="page-banner__content container t-center c-white">
      <button href="submit" class="near-by"  style="margin-left:-90px">قريب مني &nbsp; <i class="fa fa-map-marker"></i></button> &nbsp;  &nbsp; 
      <button type="submit" class="search-btn"   style="margin-left:-90px">بحث</button>

      <input class= "Rectangle-416" type="text" placeholder=" ابحث عن مستشفي">	
      <button  class="Ellipse-47"><i class="fa fa-search"></i></button>
        <br/>
         <div class="Rectangle-478">
            <div class="Rectangle-470">
                    <div id="carouselExampleControls"  class="carousel slide " data-ride="carousel" data-interval="false" style=" margin: 0 auto" >
                      <div class="corausel-inner">
                        <div class="carousel-item active ">
                          <span style="color:#bf0711;"> تأمين صحي   </span>
                        </div>
                        <div class="carousel-item  ">
                          <span style="color:#bf0711;"> تابع لوزارة الصحة  </span>
                        </div>
                        <div class="carousel-item  ">
                          <span style="color:#bf0711;"> تابع لنقابة  </span>
                        </div>
                      </div>
                      <br>
                      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev" >
                          <button class="arrow-left"></button>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <button class="arrow-right"></button>
                      </a>
                    </div>
                  
              </div><div class="Rectangle-466">نوع المستشفى</div> 

              <div class="Rectangle-470">
                    <div id="carouselExampleControls1"  class="carousel slide" data-ride="carousel"  data-interval="false">
                      <div class="corausel-inner">
                        <div class="carousel-item active ">
                          <span style="color:#bf0711;"> اشعة و فحوصات  </span>
                        </div>
                        <div class="carousel-item  ">
                          <span style="color:#bf0711;"> أسنان  </span>
                        </div>
                        <div class="carousel-item  ">
                          <span style="color:#bf0711;"> إسعاف  </span>
                        </div>
                      </div>
                      <br>
                      <a class="carousel-control-prev" href="#carouselExampleControls1" role="button" data-slide="prev">
                      <button class="arrow-left"></button>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleControls1" role="button" data-slide="next">
                        <button class="arrow-right"></button>
                      </a>
                    </div>
              </div><div class="Rectangle-466">التخصصات</div> 
            
              <div class="Rectangle-470">
                    <div id="carouselExampleControls2"  class="carousel slide" data-ride="carousel"  data-interval="false">
                      <div class="corausel-inner">
                        <div class="carousel-item active ">
                          <span style="color:#bf0711;">استثمارية  </span>
                        </div>
                        <div class="carousel-item  ">
                          <span style="color:#bf0711;"> اقتصادية  </span>
                        </div>
                        <div class="carousel-item  ">
                          <span style="color:#bf0711;"> رمزية  </span>
                        </div>
                        <div class="carousel-item  ">
                          <span style="color:#bf0711;"> مجانية  </span>
                        </div>
                      </div>
                      <br>
                      <a class="carousel-control-prev" href="#carouselExampleControls2" role="button" data-slide="prev">
                      <button class="arrow-left"></button>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleControls2" role="button" data-slide="next">
                        <button class="arrow-right"></button>
                      </a>
                    </div>
              </div><div class="Rectangle-466">الاسعار</div> 

               <div class="Rectangle-470">           
                     <div id="carouselExampleControls3"  class="carousel slide" data-ride="carousel"  data-interval="false">
                      <div class="corausel-inner">
                        <div class="carousel-item active ">
                          <span style="color:#bf0711;">القاهرة  </span>
                        </div>
                        <div class="carousel-item  ">
                          <span style="color:#bf0711;"> الإسكندرية  </span>
                        </div>
                        <div class="carousel-item  ">
                          <span style="color:#bf0711;"> الجيزة  </span>
                        </div>
                        <div class="carousel-item  ">
                          <span style="color:#bf0711;"> اسيوط  </span>
                        </div>
                      </div>
                      <br>
                      <a class="carousel-control-prev" href="#carouselExampleControls3" role="button" data-slide="prev">
                      <button class="arrow-left"></button>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleControls3" role="button" data-slide="next">
                        <button class="arrow-right"></button>
                      </a>
                    </div> 
              </div><div class="Rectangle-466">المحافظة</div>
       </div>


      <div style="margin-top:40px">
        <button  class="bell"><i class="fa fa-bell-o"></i></button>
        <div class="Rectangle-406">رأيك يهمنا … ازاي بنختار المستشفى</div>
        </div>
    </div>
  </div>

<!-- THE DETAILED LIST -->
<div class="detailed-list">
    <h2 style="height:56px;">آخر ما تم تقييمه</h2>
    <div class="full-width-split group">
    <div class="full-width-split__one">
          <div class="full-width-split__inner">
            <div class="detailed-box"> 
              <h1> <a href="#">مستشفي سيوة المركزي </a></h1> 
              <img class="image-details"style="background-image: url(<?php 
                    echo get_theme_file_uri('/images/EghospitalsPictures/siwa.jpg');
              ?>);">
                <div class="paragraph">
                      مستشفى تابع لوزارة الصحة حكومي ، يقدم خدمات آشعة وفحوصات أسنان جميع التخصصات رعاية مركزة طوارئ عمليات عيادات خارجية نساء وولادة ، بأسعار رمزية
                        <br>المحافظة: بورسعيد
                        <br>تليفون: 0663214790  
              </div>

              <div class="Ellipse-yellow">69%</div>
            </div>
            <div class="detailed-box">
            <h1> <a href="#">مستشفى قنا الجامعي – معبر الشباب</a></h1> 
              <img class="image-details"style="background-image: url(<?php 
                    echo get_theme_file_uri('/images/EghospitalsPictures/qna.jpg');
              ?>);">

              <div class="paragraph">
                  مستشفى جامعي ، يقدم خدمات آشعة وفحوصات أسنان حميات رعاية مركزة طوارئ علاج طبيعي عمليات نساء وولادة نفسية و إدمان ، بأسعار اقتصادية رمزية
                      <br>المحافظة: بورسعيد
                      <br>تليفون: 0663214790  
              </div>

              <div class="Ellipse-green">70%</div>
            </div>
            <div class="detailed-box" >
            <h1> <a href="#">مستشفى الصدر</a></h1> 
              <img class="image-details"style="background-image: url(<?php 
                    echo get_theme_file_uri('/images/EghospitalsPictures/sadr.jpg');
              ?>);">

              <div class="paragraph">
                  مستشفى تأمين صحي حكومي ، يقدم خدمات آشعة وفحوصات عيادات خارجية ، بأسعار اقتصادية
                    <br>المحافظة: بورسعيد
                      <br>تليفون: 0663214790  
              </div>

              <div class="Ellipse-red">69%</div>
            </div>

            <div class="detailed-box" id="foo" style="display:none;">
            <h1> <a href="#">مستشفى الصدر</a></h1> 
              <img class="image-details"style="background-image: url(<?php 
                    echo get_theme_file_uri('/images/EghospitalsPictures/sadr.jpg');
              ?>);">

              <div class="paragraph">
                  مستشفى تأمين صحي حكومي ، يقدم خدمات آشعة وفحوصات عيادات خارجية ، بأسعار اقتصادية
                    <br>المحافظة: بورسعيد
                      <br>تليفون: 0663214790  
              </div>

              <div class="Ellipse-yellow">69%</div>
            </div>
            <a href="#" onclick="toggle_visibility('foo'); toggle_visible('shoo');">المزيد </a>
          </div>
          

        </div>


      <div class="full-width-split__two">
            <div class="full-width-split__inner">
            <div class="detailed-box">
            <h1> <a href="#">مستشفى التضامن التخصصي</a></h1> 

              <img class="image-details"style="background-image: url(<?php 
                    echo get_theme_file_uri('/images/EghospitalsPictures/tadamon.jpg');
              ?>);">

            <div class="paragraph">
                  مستشفى تأمين صحي حكومي ، يقدم خدمات آشعة وفحوصات عيادات خارجية ، بأسعار اقتصادية
                  <br>المحافظة: بورسعيد
                  <br>تليفون: 0663214790
            </div>

              <div class="Ellipse-yellow">60%</div>
            </div>
            <div class="detailed-box">
            <h1> <a href="#">مستشفى الهلال الأحمر</a></h1> 
              <img class="image-details"style="background-image: url(<?php 
                    echo get_theme_file_uri('/images/EghospitalsPictures/hlal.jpg');
              ?>);">

              <div class="paragraph">
                مستشفى جمعية أهلية ، يقدم خدمات أسنان علاج طبيعي عمليات عيادات خارجية نساء وولادة ، بأسعار اقتصادية رمزية
                    <br>المحافظة: بورسعيد
                    <br>تليفون: 0663214790
            </div>

              <div class="Ellipse-red">44%</div>
            </div>
            <div class="detailed-box">
            <h1> <a href="#">مستشفى الحميات بنجع حمادي</a></h1> 
              <img class="image-details"style="background-image: url(<?php 
                    echo get_theme_file_uri('/images/EghospitalsPictures/ng3.jpg');
              ?>);">

              <div class="paragraph">
                مستشفى تابع لوزارة الصحة حكومي ، يقدم خدمات آشعة وفحوصات حميات رعاية مركزة طوارئ ، بأسعار رمزية مجانية
                    <br>المحافظة: بورسعيد
                    <br>تليفون: 0663214790
            </div>

              <div class="Ellipse-green">90%</div>
            </div>
            <div class="detailed-box" id="shoo" style="display:none;">
            <h1> <a href="#"> الحميات بنجع حمادي</a></h1> 
              <img class="image-details"style="background-image: url(<?php 
                    echo get_theme_file_uri('/images/EghospitalsPictures/ng3.jpg');
              ?>);">

              <div class="paragraph">
                مستشفى تابع لوزارة الصحة حكومي ، يقدم خدمات آشعة وفحوصات حميات رعاية مركزة طوارئ ، بأسعار رمزية مجانية
                    <br>المحافظة: بورسعيد
                    <br>تليفون: 0663214790
            </div>

              <div class="Ellipse-yellow">90%</div>
            </div>
            
          </div>

        </div>

      </div>
      
  </div>

</div>

<?php
get_footer();
?>