<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="src/css/profile.css">
  <link rel="stylesheet" href="src/css/style.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <title>プロフィール画面</title>
</head>

<script>
$(document).on('scroll',function(){

  if ($(document).scrollTop() > 30) {
    $('#nav').addClass('fixed');
    $('home_btn').addClass('fixed');
  } else {
    $('#nav').removeClass('fixed');
    $('home_btn').removeClass('fixed');
  }

});
</script>
<script>
function goto_level2() {
  $(document).ready(function(){
    var divLoc = $('#top').offset();
    $('html, body').animate({scrollTop: divLoc.top}, "slow");
  });
}
function goto_level3() {
  $(document).ready(function(){
    var divLoc = $('#section-target').offset();
    $('html, body').animate({scrollTop: divLoc.top}, "slow");
  });
}
function goto_level4() {
  $(document).ready(function(){
    var divLoc = $('#workSection').offset();
    $('html, body').animate({scrollTop: divLoc.top}, "slow");
  });
}
function goto_level5() {
  $(document).ready(function(){
    var divLoc = $('#level5').offset();
    $('html, body').animate({scrollTop: divLoc.top}, "slow");
  });
}




function nav_open() {
  document.getElementsByClassName("nav_sp")[0].style.width = "100%";
  document.getElementsByClassName("nav_sp")[0].style.textAlign = "center";
  document.getElementsByClassName("nav_sp")[0].style.fontSize = "50px";
  document.getElementsByClassName("nav_sp")[0].style.paddingTop = "10%";
  document.getElementsByClassName("nav_sp")[0].style.display = "block";
  document.getElementsByClassName("nav_menu_btn")[0].setAttribute( "onClick", "javascript: nav_close();" );
  document.getElementsByClassName("nav_menu_btn")[0].style.color = "#fb4995";
}
function nav_close() {
  document.getElementsByClassName("nav_sp")[0].style.display = "none";
  document.getElementsByClassName("nav_menu_btn")[0].setAttribute( "onClick", "javascript: nav_open();" );
  document.getElementsByClassName("nav_menu_btn")[0].style.color = "#3f3f3f";
}

</script>
<script>
$(function() {
  $("a[href*='#']:not([href='#'])").click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });

})
</script>

</head>


<section id="top">
  <header class="Header l-column blue_bg">
    <!-- <span class="fa fa-bars"></span> -->
    <div class="Header__head">
      <div class="nav_sp" style="display: none;">
        <ul class="Menu">
          <li><a href="#top"  onclick="nav_close()">TOP</a></li>
          <li><a href="#section-target"  onclick="nav_close()">ABOUT</a></li>
          <li><a href="#workSection"  onclick="nav_close()">WORK</a></li>
          <li><a href="https://www.wantedly.com/users/24156855"  onclick="nav_close()">CONTACT</a></li>
        </ul>

      </div>
      <div id="nav">
        <div class="nav_cont">
          <a href="index.html">
            <div class="home_btn">

            </div>
          </a>
          <ul>
            <li><a href="#top">TOP</a></li>
            <li><a href="#section-target">ABOUT</a></li>
            <li><a href="#workSection">WORK</a></li>
            <li><a href="#">CONTACT</a></li>
          </ul>
          <a id="menu_btn" href="javascript:void(0)" onclick="nav_open()" class="nav_menu_btn">&Congruent;
          </a>
        </div>
      </div>
    </header>
    <body>

      <div class="wrapper">
        <section class="mainContent">
          <div class="prof-all">
          <div class="prof-body">
            <div class="prof-icon">
              <img src="src/img/icon.jpeg" alt="">
              <h1>Yukio Orita</h1>
            </div>

            <div class="prof-text">

              <div class="movie_up_btn">
                <input type="button" id="movie_button" value="  MOVIE UPLOAD  " />
              </div>

              <div class="prof-movie">
                <iframe width="250" height="250" src="//www.youtube.com/embed/d6SSnbVCmEg" frameborder="0" allowfullscreen></iframe>
                <iframe width="250" height="250" src="//www.youtube.com/embed/d6SSnbVCmEg" frameborder="0" allowfullscreen></iframe>
                <iframe width="250" height="250" src="//www.youtube.com/embed/d6SSnbVCmEg" frameborder="0" allowfullscreen></iframe>
                <iframe width="250" height="250" src="//www.youtube.com/embed/d6SSnbVCmEg" frameborder="0" allowfullscreen></iframe>
                <iframe width="250" height="250" src="//www.youtube.com/embed/d6SSnbVCmEg" frameborder="0" allowfullscreen></iframe>
                <iframe width="250" height="250" src="//www.youtube.com/embed/d6SSnbVCmEg" frameborder="0" allowfullscreen></iframe>
              </div>

              <div class="prof_prof">


              <h3 class="prof-title">Profile</h3>
              <form action="" method="post" id="mail_form">
                <table>
                  <tr >

                  <th>mail</th>
                  <td class="required">
                    AAAAAAAA＠gmail.com
                  </td>
                  </tr>
                  <th>area</th>
                  <td class="required">
                    大日本帝国
                  </td>
                  </tr>
                  <tr>
                    <th>profile</th>
                    <td class="required"><textarea id="mail_contents" name="mail_contents" cols="40" rows="10"></textarea></td>
                  </tr>
                  <tr >
                    <td colspan="2">
                    <input type="button" id="form_submit_button" value="  UPDATE  " />
                    </td>
                  </tr>
                </table>
              </form>
              </div>
            </div>

          </div>
          </div>
        </section>
      </div>



      <!-- ーーーーーーーーーーーーーーーーーfooterーーーーーーーーーーーーーーーーーーーーーー -->
      <footer>
        <div id="footer" class="footer-content blue_bg">
          <div class="footer-pdd">
            <div class="inner">
              <div class="cf">
                <div class="left">
                  <a class="logo" href="#"></a>
                  <p>© PHPkenshu all rights reserved.</p>
                </div><!-- .left -->
                <div class="right">
                  <ul class="cf">
                    <li><p>SOCIAL</p></li>
                    <li class="facebook sbtn">
                      <a href="#" target="_blank">
                        <div class="sbtn_in">
                          <!-- <p class="icon-facebook"> -->
                            <img src="src/img/icon_face.png" alt="">
                           <!-- </p> -->
                          <div class="slide reset"><span class="icon-facebook"></span></div>
                        </div>
                      </a>
                    </li>
                    <li class="twitter sbtn">
                      <a href="#" target="_blank">
                        <div class="sbtn_in">
                          <!-- <p class="icon-twitter"></p> -->
                          <img src="src/img/icon_twitter.png" alt="">
                          <div class="slide reset"><span class="icon-twitter"></span></div>
                        </div>
                      </a>
                    </li>
                    <li class="instagram sbtn">
                      <a href="#" target="_blank">
                        <div class="sbtn_in">
                          <!-- <p class="icon-instagram"></p> -->
                          <img src="src/img/icon_insta.png" alt="">
                          <div class="slide reset"><span class="icon-instagram"></span></div>
                        </div>
                      </a>
                    </li>
                  </ul>
                </div><!-- .right -->
              </div>
            </div><!-- .inner -->
          </div><!-- .pdd95 -->
        </div><!-- #footer -->
      </footer>

    </body>
    </html>
