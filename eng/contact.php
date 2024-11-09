<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/contact.css">
</head>

<body>
  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages contact">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>


    <main class="siteMain" aria-label="main" itemscope>

      <div class="inBanner">
        <div class="pic"><img src="../images/in/banner_contact.jpg" alt=""></div>
        <div class="pageTitleBox">
          <div class="titleBox wow fadeInUp" data-wow-delay="0s">
            <h1 class="title">Contact JKM</h1>
            <div class="slogan">We will introduce you to the most suitable workforce and services to meet your requirements.</div>
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
              <span itemprop="name">Contact</span>
              <meta itemprop="position" content="2">
            </li>
          </ul>
        </div>
      </div>

      <div class="mainBox">
        <section>
          <div class="container">
            <h2 class="pageTitle"><span>CONTACT</span> US</h2>
            <div class="info">If there is any need for assistance, please leave your contact information through the form, we will contact you as soon as possible, thank you.</div>

            <form class="outer">
              <div class="formBox wow fadeInLeft" data-wow-delay="0.2s">
                <ul>
                  <li class="inputItem wow fadeInUp required">
                    <label for="company">Company</label>
                    <input type="text" class="inputControl" id="company">
                  </li>
                  <li class="inputItem wow fadeInUp required">
                    <label for="name">Name</label>
                    <input type="text" class="inputControl" id="name">
                  </li>
                  <li class="inputItem wow fadeInUp required">
                    <label for="tel">Tel</label>
                    <input type="text" class="inputControl" id="tel">
                  </li>
                  <li class="inputItem wow fadeInUp required">
                    <label for="email">E-mail</label>
                    <input type="text" class="inputControl" id="email">
                  </li>
                  <li class="inputItem wow fadeInUp required">
                    <label for="email">Country</label>
                    <input type="text" class="inputControl" id="country">
                  </li>
                  <li class="inputItem wow fadeInUp">
                    <label for="type">Address</label>
                    <input type="text" class="inputControl" id="address">
                  </li>
                  <li class="inputItem full wow fadeInUp required">
                    <label for="message">Message</label>
                    <textarea class="textareaControl" name="message" id="message" cols="30" rows="5"></textarea>
                  </li>

                  <li class="inputItem wow fadeInUp required">
                    <label for="password">Code</label>
                    <input type="password" class="inputControl" id="password">
                    <span class="checkImg"><img src="../images/check_img.jpg"></span>
                    <button class="reBtn"></button>
                  </li>
                </ul>
              </div>
              <div class="pageBtnBox wow fadeInUp">
                <button class="send" type="button" onclick="javascript:location.href='contact_ok.php'">Send Message</button>
              </div>
            </form>
          </div>

          <div class="bottomBox">
            <div class="container">
              <h2 class="pageTitle"><span>JIAN KWANG</span> MACHINE</h2>

              <div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14560.710362015!2d120.5915589!3d24.1655038!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34693e3ec99860bf%3A0x798ed27e7785fe1c!2z6KaL5YWJ5qmf5qKw5bel5qWt6IKh5Lu95pyJ6ZmQ5YWs5Y-4!5e0!3m2!1szh-TW!2stw!4v1717826315309!5m2!1szh-TW!2stw" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
              <div class="address">No.62., 34th Rd.,Taichung Industrial Park,Taichung 407,Taiwan</div>
              <ul>
                <li>TEL : <a href="tel:+886423580888">+886-4-23580888</a></li>
                <li>FAX : +886-4-23506988</li>
                <li>E-mail : <a href="mailto:jumbomac@ms42.hinet.net">jumbomac@ms42.hinet.net</a></li>
              </ul>

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