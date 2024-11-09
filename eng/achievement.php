<!doctype html>
<html lang="en">


<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/about.css">
</head>


<body>

  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages achievement">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>


    <main class="siteMain" aria-label="main" itemscope>


      <div class="inBanner">
        <div class="pic"><img src="../images/in/banner_achievement.jpg" alt=""></div>
        <div class="pageTitleBox">
          <div class="titleBox wow fadeInUp" data-wow-delay="0s">
            <h1 class="title">Achievement</h1>
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
              <span itemprop="name">Company</span>
              <meta itemprop="position" content="2">
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
              <span itemprop="name">Achievement</span>
              <meta itemprop="position" content="3">
            </li>
          </ul>
        </div>
      </div>

      <div class="mainBox">
        <section>
          <div class="container">
            <div class="block block01 wow fadeInUp" data-wow-delay="0s">
              <div class="blockTitle">Recycling Machine Equipment</div>
              <div class="model">Model No.</div>
              <div class="description">JKM-65ER, JKM-100ER, JKM-120ER, JKM-150ER, JKM-165ER, JKM-180ER, JKM-200ER</div>
              <div class="listBox">
                <div class="item">
                  <a href="../images/in/license1_1.jpg">
                    <div class="pic"><img src="../images/in/license1_1.jpg" alt=""></div>
                  </a>
                </div>
                <div class="item">
                  <a href="../images/in/license1_2.jpg">
                    <div class="pic"><img src="../images/in/license1_2.jpg" alt=""></div>
                  </a>
                </div>
                <div class="item">
                  <a href="../images/in/license1_3.jpg">
                    <div class="pic"><img src="../images/in/license1_3.jpg" alt=""></div>
                  </a>
                </div>
                <div class="item">
                  <a href="../images/in/license1_4.jpg">
                    <div class="pic"><img src="../images/in/license1_4.jpg" alt=""></div>
                  </a>
                </div>
              </div>
            </div>

            <div class="block block02 wow fadeInUp" data-wow-delay="0s">
              <div class="blockTitle">Dispersion Kneader</div>
              <div class="model">Model No.</div>
              <div class="description">JKM-DK10, JKM-DK35, JKM-DK55, JKM-DK75, JKM-DK110</div>
              <div class="listBox">
                <div class="item">
                  <a href="../images/in/license2_1.jpg">
                    <div class="pic"><img src="../images/in/license2_1.jpg" alt=""></div>
                  </a>
                </div>
                <div class="item">
                  <a href="../images/in/license2_2.jpg">
                    <div class="pic"><img src="../images/in/license2_2.jpg" alt=""></div>
                  </a>
                </div>
              </div>
            </div>

            <div class="block block03 wow fadeInUp" data-wow-delay="0s">
              <div class="blockTitle">Kneader Extrding Plant</div>
              <div class="model">Model No.</div>
              <div class="description">JKM-65KE, JKM-85KE, JKM-100KE, JKM-120KE, JKM-150KE, JKM-165KE, JKM-180KE, JKM-200KE</div>
              <div class="listBox">
                <div class="item">
                  <a href="../images/in/license3_1.jpg">
                    <div class="pic"><img src="../images/in/license3_1.jpg" alt=""></div>
                  </a>
                </div>
                <div class="item">
                  <a href="../images/in/license3_2.jpg">
                    <div class="pic"><img src="../images/in/license3_2.jpg" alt=""></div>
                  </a>
                </div>
              </div>
            </div>

            <div class="block block04 wow fadeInUp" data-wow-delay="0s">
              <div class="blockTitle">TAIWAN Small & Medium Enterprises Innovation Award</div>
              <div class="model">Model No.</div>
              <div class="description">JKM-65ER, JKM-100ER, JKM-120ER, JKM-150ER, JKM-165ER, JKM-180ER, JKM-200ER</div>
              <div class="listBox">
                <div class="item">
                  <a href="../images/in/license4.jpg">
                    <div class="pic"><img src="../images/in/license4.jpg" alt=""></div>
                  </a>
                </div>
              </div>
            </div>

            <div class="block block05 wow fadeInUp" data-wow-delay="0s">
              <div class="blockTitle">Straucture Of Extroding Dryer</div>
              <div class="listBox">
                <div class="item">
                  <a href="../images/in/license5.jpg">
                    <div class="pic"><img src="../images/in/license5.jpg" alt=""></div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </section>

      </div>

    </main>


    <?php include('include_footer.php'); ?>

  </div>

  <div class="lightBoxOut">
    <div class="lightBox">
      <button class="lightBoxClose" type="button">Close</button>
      <div class="picBox">
        <button type="button" class="lightArrow prev"></button>
        <div class="pic"><img src="../images/in/about06.jpg" alt=""></div>
        <button type="button" class="lightArrow next"></button>
      </div>
    </div>
  </div>

  <?php include('include_body_bottom.php'); ?>

  <script>
    $('.block .listBox').magnificPopup({
      delegate: 'a',
      type: 'image'
    });
  </script>
</body>

</html>