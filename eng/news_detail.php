<!doctype html>
<html lang="en">


<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/news.css">
</head>


<body>

  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages newsDetail">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>


    <main class="siteMain" aria-label="main" itemscope>


      <div class="inBanner">
        <div class="pic"><img src="../images/in/banner_media_in.jpg" alt=""></div>
        <div class="pageTitleBox">
          <div class="titleBox wow fadeInUp" data-wow-delay="0s">
            <div class="title">News Information</div>
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
              <span itemprop="name">News</span>
              <meta itemprop="position" content="3">
            </li>
          </ul>
        </div>
      </div>

      <div class="mainBox">
        <section>
          <div class="container">

            <div class="contentBox">
              <div class="topBox">
                <h1 class="title wow fadeInUp" data-wow-delay="0s">The MM1552B High speed and compact through-hole rotary hydraulic</h1>
                <time>2023.12.11</time>
              </div>
              <div class="picBox">
                <div class="pic"><img src="../images/in/news.jpg" alt=""></div>
              </div>
              <div class="editor wow fadeInUp" data-wow-delay="0.2s">With strong production capability, Jian Kwang offers three major kinds of machines, including crusher combing with kneader & extruding machines (The whole-plant equipments), two-color plastic stationary-use plate turnkey plants and water-ring-cutting kneader extruding plants, which have been well received by our clients in the USA., South America, Europe, Middle East and Africa. One of the most successful shoes manufacturers in the USA., Crocs Inc., is also on the company clients list.<br /><br />
                With strong production capability, Jian Kwang offers three major kinds of machines, including crusher combing with kneader & extruding machines (The whole-plant equipments), two-color plastic stationary-use plate turnkey plants and water-ring-cutting kneader extruding plants, which have been well received by our clients in the USA., South America, Europe, Middle East and Africa. One of the most successful shoes manufacturers in the USA., Crocs Inc., is also on the company clients list.</div>
              <div class="pageBtnBox wow fadeInUp" data-wow-delay="0.4s">
                <a href="news.php" class="back">BACK TO LIST</a>
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
      $('.sideBox li').eq(0).addClass('active');

      $('.hasSide').append($('.changePage').clone());
    })
  </script>
</body>

</html>