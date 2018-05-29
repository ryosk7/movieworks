<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="src/css/style.css">
  <link rel="stylesheet" href="src/css/form.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script> -->
  <title>検索＆ギャラリーフォーム</title>
  <style>

  </style>
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

<body>

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
              <li><a href="https://www.wantedly.com/users/24156855">CONTACT</a></li>
            </ul>
            <a id="menu_btn" href="javascript:void(0)" onclick="nav_open()" class="nav_menu_btn">&Congruent;
            </a>
          </div>
        </div>
      </header>

      <body>

        <section>
        <div class="col-xs-2 col-md-12 header__col global-nav-wrapper clearfix">
          <div class="genruFlex">
          <dl>
            <dt><a href="">ALL</a></dt>
            <dt><a href="">Youtube</a></dt>
            <dt><a href="">PV</a></dt>
            <dt><a href="">企業向け</a></dt>
            <dt><a href="">Other</a></dt>
          </dl>
          <div id="responsive-btn"></div>
          <!-- end .header__col -->
        </div>
        </div>
        </section>

        <main>
          <section>
            <h2>The Title</h2>
            <img class="section-img profile" src="https://picsum.photos/g/600/400?image=625" alt="important graph">
            <p>Some Text goes here, some text goes here, some text goes here, some text goes here.</p>
            <a href="#" class="info-link">Learn more...</a>
          </section>
          <section>
            <h2>The Title</h2>
            <p>Some Text goes here, some text goes here, some text goes here, some text goes here.</p>
            <img class="section-img" src="https://emojipedia-us.s3.amazonaws.com/thumbs/120/emoji-one/104/chart-with-upwards-trend_1f4c8.png" alt="important graph">
            <a href="#" class="info-link">Learn more...</a>
          </section>
          <section>
            <h2>The Title</h2>
            <img class="section-img profile" src="https://picsum.photos/g/600/400?image=625" />
            <p>Some Text goes here, some text goes here, some text goes here, some text goes here.</p>
            <a href="#" class="info-link">Learn more...</a>
          </section>
          <section class="bigbottom">
            <h2>The Title</h2>
            <p>Some Text goes here, some text goes here, some text goes here, some text goes here.</p>
            <a class="bigbottom-link info-link" href="#" class="info-link">Learn more...</a>
          </section>
          <section class="bigtitle">
            <h2 class="bigtitle-title">The Title</h2>
            <p>Some Text goes here, some text goes here, some text goes here, some text goes here.</p>
            <a href="#" class="info-link">Learn more...</a>
          </section>
          <section>
            <h2>The Title</h2>
            <p>Some Text goes here, some text goes here, some text goes here, some text goes here.</p>
            <a href="#" class="info-link">Learn more...</a>
          </section>
        </main>
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
                            <p class="icon-facebook"></p>
                            <div class="slide reset"><span class="icon-facebook"></span></div>
                          </div>
                        </a>
                      </li>
                      <li class="twitter sbtn">
                        <a href="#" target="_blank">
                          <div class="sbtn_in">
                            <p class="icon-twitter"></p>
                            <div class="slide reset"><span class="icon-twitter"></span></div>
                          </div>
                        </a>
                      </li>
                      <li class="instagram sbtn">
                        <a href="#" target="_blank">
                          <div class="sbtn_in">
                            <p class="icon-instagram"></p>
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
