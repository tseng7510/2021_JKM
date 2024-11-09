<!doctype html>
<html lang="en">


<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/products.css">
</head>


<body>

  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages productsList2">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>


    <main class="siteMain" aria-label="main" itemscope>

      <div class="inBanner">
        <div class="pic"><img src="../images/in/banner_products.jpg" alt=""></div>
        <div class="pageTitleBox">
          <div class="titleBox wow fadeInUp" data-wow-delay="0s">
            <h1 class="title">Pelletization</h1>
            <div class="slogan">Design and production of advanced machinery, industrial plants, technology and softwareDesign and production of advanced machinery, industrial plants, technology and softwareDesign and production of advanced machinery, industrial plants, technology and softwareDesign and production of advanced machinery, industrial plants, technology and software</div>
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
              <span itemprop="name">Products</span>
              <meta itemprop="position" content="2">
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
              <span itemprop="name">Pelletization</span>
              <meta itemprop="position" content="3">
            </li>
          </ul>
        </div>
      </div>

      <div class="mainBox">
        <section>
          <div class="container ">
            <div class="contentBox">
              <div class="listBox">

                <? for ($i = 0; $i < 3; $i++) { ?>
                  <div class="item">
                    <a href="products_detail.php">
                      <div class="infoBox">
                        <h2 class="title">Fan-Cooling-Cutting Kneader extruding Plant (EVA.Rubber .TPR )</h2>
                        <div class="more">VIEW MORE</div>
                      </div>
                      <div class="pic"><img src="../images/in/products1.png" alt=""></div>
                    </a>
                  </div>
                <? } ?>


              </div>
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

</body>

</html>