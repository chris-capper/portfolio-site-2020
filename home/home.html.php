<!DOCTYPE html>
<html lang="en">

<head>
  <title>CHRIS CAPPER studios</title>
  <meta name="description" content=" ">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/da7888fef1.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="./styles/reset.css">
  <link rel="stylesheet" href="./styles/helper.css">
  <link rel="stylesheet" href="./styles/styles.css">
</head>

<body>
  <div id="welcome"></div>
    <?php include 'includes/header.inc.html.php' ?>

    <nav class="btn-box">
      <h1 class="content-desktop">CHRIS CAPPER studios<span id="copy">&copy;</span></h1>
      <br>
      <a href="#welcome">
        <button id="btn-1" onclick="openWelcome()">
          <i class="fas fa-home"></i><div class="content-desktop"> WELCOME</div>
        </button>
      </a>
      <a href="#services">
        <button id="btn-2" onclick="openServices()">
          <i class="fas fa-laptop-code"></i><div class="content-desktop"> SERVICES</div>
        </button>
      </a>
      <a href="#work">
        <button id="btn-3" onclick="openWork()">
          <i class="fas fa-layer-group"></i><div class="content-desktop"> WORK</div>
        </button>
      </a>
      <a href="#contact">
        <button id="btn-4" onclick="openContact()">
          <i class="fas fa-envelope"></i><div class="content-desktop"> CONTACT</div>
        </button>
      </a>
    </nav>

    <div class="container-grid-h">
      <div class="grid-one-h card">
        <img src="./images/pexels-picjumbocom-196644.jpg">
          <div class="card-container">
            <h4>WELCOME! LET'S BUILD YOU A NEW WEBSITE.</h4> 
            <p>In need of a website for your business? Based in Portland, Oregon, CHRIS CAPPER studios
              is dedicated to supporting your business with modern, responsive web design aimed at growing your 
              online profile and attracting new customers.<br/><br/>
              <a href="#contact">Click here to get in touch with us!</a>
            </p> 
          </div>
      </div>

      <div class="grid-two-h card">
        <div class="card-container">
          <p>"Our experience with CHRIS CAPPER studios has been fantastic. They were extremely professional, 
            communicative, and he is such a sweet boy." <br/><br/> - My Parents</p> 
        </div>
      </div>

      <div class="grid-three-h">
        <a href="#work">
          <div id="slideshow">
            <div>
              <img src="./images/burrito.jpg">
            </div>
            <div>
              <img src="./images/ace.jpg">
            </div>
            <div>
              <img src="./images/bonsai.jpg">
            </div>
          </div>
        </a>
      </div>

      <div class="grid-four-h card">
        <div class="card-container">
          <p>We don't just create your site and disappear. We'll continue to maintain and support your site 
            for years.
            <br/>
            <br/>
            Here are just a few of the monthly services we offer our clients:</p> 
          <a href="#services">
          <div class="insert">
            <ul>
              <li>Responsive, accessible, design</li>
              <br/>
              <li>Optimized SEO</li>
              <br/>
              <li>Google Analytics reviews</li>
              <br/>
              <li>Social media advertising</li>
              <br/>
              <li>Monthly blog posts</li>
            </ul>
          </div>
          </a>
        </div>
      </div>
    </div>
  </div>
  
  <div id="services">
    <h2>SERVICES</h2>
    <div class="container-grid-s">
      <div class="grid-one-s card">
        <img src="./images/services-1.jpg">
          <div class="card-container">
            <h4>WHAT DO WE DO?</h4> 
            <p>Don't neglect your online presence! CHRIS CAPPER studios works with you 
              to create the right look, feel, and functionality for your customers.
            </p> 
          </div>
      </div>

      <div class="grid-two-s card">
        <div class="card-container">
          <h4>DESIGN</h4>
          <p>We design responsive, mobile-optimized, accessible websites. We're happy to create a color palette
          or use colors you've already used to identify your brand.</p>
        </div>
      </div>

      <div class="grid-three-s card">
        <div class="card-container">
          <h4>DEVELOP</h4>
          <p>We design your site from the ground up to meet your needs. Whether you need contact forms, an online store, 
          a blog, or anything else you might need, we implement it seamlessly into your site.</p>
        </div>
      </div>

      <div class="grid-four-s card">
        <div class="card-container">
          <h4>SUPPORT</h4>
          <p>We continue supporting your site long after launch. We continue to regularly evaluate the SEO of your site, and 
          analyze how to increase and maintain a high site rank.</p>
        </div>
      </div>

    </div>
  </div>
  
  <div id="work"> 
    <h2>WORK</h2>
      <div class="container-grid-w">
        <div class="grid-one-w card">
            <a target="_blank" rel="noopener noreferrer" href="http://christophermason.webhostingforstudents.com/cas242/week07/" alt="Burrito Masala website"><img src="./images/burrito.jpg" alt="Burrito Masala website"></a>
            <div class="card-container">
              <h4>BURRITO MASALA</h4> 
              <p>A single-page site for the Burrito Masala food truck in downtown Portland, OR. Built using HTML and LESS.
            </div>
        </div>

        <div class="grid-two-w card">
          <a target="_blank" rel="noopener noreferrer" href="http://christophermason.webhostingforstudents.com/cas222/ace/site_files/" alt="Ace in the Hole website"><img src="./images/ace.jpg" alt="Ace In the Hole website link"></a>
            <div class="card-container">
              <h4>ACE IN THE HOLE</h4> 
              <p>A multi-page site for Ace in the Hole Multisport Events built using HTML, Sass, Javascript,
               and jQuery.</p> 
            </div>
        </div>

        <div class="grid-three-w card">
          <a target="_blank" rel="noopener noreferrer" href="http://christophermason.webhostingforstudents.com/cas242/week10/" alt="Black Tie Bonsai website"><img src="./images/bonsai.jpg" alt="Black Tie Bonsai website"></a>
            <div class="card-container">
              <h4>BLACK TIE BONSAI</h4>
              <p>A site developed for Black Tie Bonsai in Portland, OR built using HTML, LESS, and jQuery.</p> 
            </div>
        </div>
      </div>
  </div>

  <div id="contact">
    <h2 class="contact-header">CONTACT US</h2>
    <div class="container-grid-c">
      <div class="grid-one-c card">
          <div class="card-container">
              <form method="post" action="./contact/index.php" id="inquiryForm">
                <input type="text" name="honeypot" id="honeypot" value="" alt="if you fill this field out then your email will 
                not be sent"/>
              <label for="myName">Name / Company:</label><br/>
                <input type="text" name="myName" id="myName"><br/>
              <label for="myEmail">E-mail:</label><br/>
                <input type="text" name="myEmail" id="myEmail"><br/>
              <label for="myQuestion">Inquiry:</label><br/>
                <textarea form="inquiryForm" rows="5" cols="30" name="myQuestion" id="myQuestion"></textarea><br/>
              <input id="mySubmit" type="submit" value="Submit">
            </form>
          </div>
      </div>
    </div>
  </div>

  <?php include './includes/footer.inc.html.php' ?>
  <script src="./scripts/script.js"></script>
</body>
</html>
