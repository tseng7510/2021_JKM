<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/inquiry.css">
</head>

<body>
  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages inquiry">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>


    <main class="siteMain" aria-label="main" itemscope>

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
              <span itemprop="name">Inquiry Cart</span>
              <meta itemprop="position" content="2">
            </li>
          </ul>
        </div>
      </div>

      <div class="mainBox">
        <section>
          <div class="container">
            <h2 class="pageTitle"><span>INQUIRY</span> CART</h2>
            <div class="contentBox">
              <div class="inquiryList wow fadeInUp" data-wow-delay="0.2s">
                <table>
                  <thead>
                    <tr>
                      <th colspan="2">PRODUCTS NAME</th>
                      <th colspan="2">QUANTITY</th>
                    </tr>
                  </thead>
                  <tbody>
                    <? for ($i = 0; $i < 9; $i++) { ?>
                      <tr>
                        <td>
                          <div class="pic"><img src="../images/in/products1.png" alt=""></div><a href="products_detail.php"></a>
                        </td>
                        <td>Fan-Cooling-Cutting Kneader extruding Plant (EVA.Rubber .TPR )<a href="products_detail.php"></a></td>
                        <td>
                          <div class="qtyBox">
                            <button class="btn less"></button>
                            <input type="text" class="qty form-control" value="1">
                            <button class="btn add"></button>
                          </div>
                        </td>
                        <td>
                          <button class="del"></button>
                        </td>
                      </tr>
                    <? } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <form class="outer">
            <div class="container">
              <h3 class="pageTitle"><span>INQUIRY</span> FORM</h3>
              <div class="description">In order to provide you with better service, be sure to enter the correct information, thank you !</div>
              <div class="formBox">
                <ul>
                  <li class="inputItem wow fadeInUp required">
                    <label for="company">Company name</label>
                    <input type="text" class="inputControl" id="company">
                  </li>
                  <li class="inputItem wow fadeInUp required">
                    <label for="name">Name</label>
                    <input type="text" class="inputControl" id="name">
                  </li>
                  <li class="inputItem wow fadeInUp">
                    <label for="country">Phone</label>
                    <input type="text" class="inputControl" id="phone">
                  </li>
                  <li class="inputItem wow fadeInUp required">
                    <label for="email">E-mail</label>
                    <input type="text" class="inputControl" id="email">
                  </li>
                  <li class="inputItem wow fadeInUp required">
                    <label for="country">Country</label>
                    <input type="text" class="inputControl" id="country">
                  </li>
                  <li class="inputItem wow fadeInUp">
                    <label for="country">Address</label>
                    <input type="text" class="inputControl" id="address">
                  </li>
                  <li class="inputItem full wow fadeInUp">
                    <label for="message">Message</label>
                    <textarea class="textareaControl" name="message" id="message" cols="30" rows="5"></textarea>
                  </li>

                  <li class="inputItem wow fadeInUp required">
                    <label for="code">Verification code</label>
                    <input type="text" class="inputControl" id="code">
                    <span class="checkImg"><img src="../images/check_img.jpg"></span>
                    <button class="reBtn"></button>
                  </li>
                </ul>
              </div>
              <div class="pageBtnBox wow fadeInUp">
                <button class="send">Send Message</button>
              </div>
            </div>
          </form>
        </section>

      </div>


    </main>


    <?php include('include_footer.php'); ?>
  </div>
  <?php include('include_body_bottom.php'); ?>
</body>

</html>