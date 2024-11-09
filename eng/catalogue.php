<!doctype html>
<html lang="en">


<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/news.css">
</head>

<body>

  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages catalogue">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>


    <main class="siteMain" aria-label="main" itemscope>

      <div class="inBanner">
        <div class="pic"><img src="../images/in/banner_catalog.jpg" alt=""></div>
        <div class="pageTitleBox">
          <div class="titleBox wow fadeInUp" data-wow-delay="0s">
            <h1 class="title">Catalogue<br />Information</h1>
            <div class="slogan">Check all the latest Catalogue</div>
          </div>
        </div>
      </div>


      <div class="breadcrumbBox">
        <div class="container">
          <ul class="breadcrumb" itemscope="" itemtype="https://schema.org/BreadcrumbList">
            <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
              <a href="index.php" title="index" itemprop="item">
                <span itemprop="name">Home</span>
              </a>
              <meta itemprop="position" content="1">
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
              <span itemprop="name">Media</span>
              <meta itemprop="position" content="2">
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
              <span itemprop="name">Catalogue</span>
              <meta itemprop="position" content="3">
            </li>
          </ul>
        </div>
      </div>

      <div class="mainBox">
        <section>
          <div class="container">
            <div class="pageTitle"><span>OUR</span> CATALOGUE</div>

            <div class="contentBox">

              <div class="titleBox wow fadeInLeft" data-wow-delay="0s">
                <div class="listBox">
                  <?php for ($i = 0; $i < 7; $i++) { ?>
                    <div class="item">
                      <h3 class="title">JIAN KWANG MACHINERY Catalogue - English</h3>
                      <a href="#" class="downloadBtn">DOWNLOAD</a>
                    </div>
                  <?php } ?>
                </div>
                <div class="control"></div>
              </div>

              <div class="picBox wow fadeInLeft" data-wow-delay="0s">
                <div class="listBox" dir="rtl">
                  <?php for ($i = 0; $i < 7; $i++) { ?>
                    <div class="item">
                      <div class="pic"><img src="../images/in/catalogue.jpg" alt=""></div>
                    </div>
                  <?php } ?>
                </div>
              </div>
            </div>

          </div>
        </section>

      </div>
    </main>


    <?php include('include_footer.php'); ?>

  </div>
  <?php include('include_body_bottom.php'); ?>

  <script>
    $(function() {
      $('.catalogue .mainBox .titleBox .listBox').slick({
        slidesToShow: 1,
        arrows: true,
        dots: false,
        speed: 900,
        fade: true,
        // autoplay: true,
        // autoplaySpeed: 4000,
        infinite: true,
        appendArrows: $('.catalogue .mainBox .control'),
        prevArrow: '<button type="button" class="slick-prev"></button>',
        nextArrow: '<button type="button" class="slick-next"></button>',
        asNavFor: '.catalogue .mainBox .picBox .listBox',
      });

      $('.catalogue .mainBox .picBox .listBox').slick({
        slidesToShow: 2,
        arrows: false,
        dots: false,
        speed: 900,
        rtl: true,
        // autoplay: true,
        // autoplaySpeed: 4000,
        infinite: true,
        asNavFor: '.catalogue .mainBox .titleBox .listBox',
        responsive: [{
          breakpoint: 768,
          settings: {
            slidesToShow: 1
          }
        }]
      });
    })
  </script>
</body>

</html>