<?php

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="index.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Geeklets Academy - Home</title>
    <link rel="icon" type="image/x-icon" href="img/demo-logo.png">
    <script src="https://kit.fontawesome.com/c048758eef.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">

  </head>
  <body>
<section id="nav-bar">
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="#top"><img src="img/demo-logo.png"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">

        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="#top" role="button">
              HOME
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#news">WHAT WE DO</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">COURSES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" role="button">
              NEWS UPDATES
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">GALLERY</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">LOGIN | REGISTER</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</section>

<!------------HOME section------------------>
<section id="banner">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
              <div class="promo-title">
              <h1>HOME TO THE NEW BREEDS</h1>
            </div>
                <p class="sub-title">We are a Non Profit Organization that is aimed at buildig a community of trained and mentored geeks and unleashing them to cause positive change in Africa through entrepreneurship and service. We are more than just an academy, we are the NEW BREED! </p>
                <button type="button" class="btn btn-primary" href="private/auth/login.php">JOIN US</button><!---this button should lead to a googlge registration form---->
            </div>
            <div class=" text-center">
                <img src="img/home2.png" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<img src="img/wave1.png" class="bottom-img"> <!---this is the bottom wave looking edge of the baer section--->

<!--------About Us-------------------->
<!--------this section is divided into 3 sub sections; the intro, vision&mission,team&sponsors--------->

<section id="about-us">
  <div class="intro">
    <p class="intro-p">
      Geeklets Aacademy is an Innovation and Technology Academy based in Ghana founded in August 2022. We are known for our ability to Meet every student at his/her own 
      point of need, creating a conducive environment to boost their imaginary abilities and equiping them through <b>training</b>, <b>extensive mentorship</b>, <b>connection</b> and <b>support</b> to create an <b>amazing future.</b>
      <br><br>
      We believe in building a community of I.T entrepreneurs with a renewed mindset to impact the world. 
      That is why we have come up with adequate strategies to nurture and improve every kind of talent and idea untill they are fully realised. 
     </p>
    <div class="intro-img"><img src="img/p4.png"></div>
</div>

    <div class="container-A">
       <div class="card">
        <div class="box">
          <div class="content">
            <h2>VISION</h2>
            <p>Our vision here at Geeklets Academy is to produce a new breed 
              of young IT entrepreneurial Africans and create job opportunities 
              for the continent leading towards a better Africa.</p>
          </div>
        </div>
       </div>
       <button type="button" class="btn btn-primary" href="private/auth/login.php">JOIN US</button>
       <div class="card">
        <div class="box">
          <div class="content">
            <h2>MISSION</h2>
            <p>Our mission here at Geeklets Academy is to find young people 
              who have an interest in the IT field and train them in their 
              respective niches while building their sense of entrepreneurship. </p>
          </div>
        </div>
       </div>
    </div>
</section>

<!----------what section-------------------->

  <section id="news">
    <div class="news-section">
      <div class="section-content">
      <div class="title">
      <h1>WHAT WE DO</h1>
      </div>
      <div class="cards">
      <div class="card">
      <div class="img-section">
      <img src="img/LOGO 1.jpg">
      </div>
      <div calss="article">
      <h4>FREE TRAINING</h4>
      <p>This is the heart of the community, it is literaly the entry point to this community. We are committed to giving free and quality training to our clients. We offer training in different fields of IT. Our courses include;</p>
        <ul>
          <li>Basic Computing</li>
          <li>Website development</li>
          <li>Mobile Application development</li>
          <li>Graphics design and Animations</li>
          <li>Wordpress/Shopify/Wix</li>
        </ul>
    </div>
      <div class="blog-view">
      <a href="courses.html" class="button">READ MORE</a><!----leads to course page-->
      </div>
      </div>
      <div class="card">
        <div class="img-section">
        <img src="img/LOGO 1.jpg">
        </div>
        <div calss="article">
        <h4>GAYES</h4>
        <p><strong>Geeklets Academy Youth entrepreneurship Suummit (GAYES)</strong> is a fun and interactive summit organized for our clients to teach them how to redirect their skills into entrepreneurship. Resource people will be invited for this summit and it will be organized at given times within every year </p>
        </div>
        <div class="blog-view">
        <a href="gayes.html" class="button">READ MORE...</a><!----leads to gayes page-->
        </div>
        </div>
        <div class="card">
          <div class="img-section">
          <img src="img/mentor.png">
          </div>
          <div calss="article">
          <h4>BOOM PROJECT</h4>
          <p>The Boom Project is leg of Geeklets Academy that is responsile for developing and managing websites, apps and other services for businesses to help them reach a wider audiance and oost their sales</p>
          </div>
          <div class="blog-view">
          <a href="" class="button">BOOK US</a><!----leads to a google form------>
          </div>
          </div>
        <!---<div class="card">
            <div class="img-section">
            <img src="img/1-ied.jpg">
            </div>
            <div calss="article">
            <h4>1-ied PROJECT</h4>
            <p>The Oval Project is leg of Geeklets Academy that is responsile for developing and managing websites, apps and other services for businesses to help them reach a wider audiance and oost their sales</p>
            </div>
            <div class="blog-view">
            <a href="1ied.html" class="button">READ MORE</a>
            </div>
            </div>--->  
            <div class="card">
              <div class="img-section">
              <img src="img/lady.png">
              </div>
              <div calss="article">
              <h4>THE LADY GEEK MOVEMENT</h4>
              <p>The Oval Project is leg of Geeklets Academy that is responsile for developing and managing websites, apps and other services for businesses to help them reach a wider audiance and oost their sales</p>
              </div>
              <div class="blog-view">
              <a href="lady.html" class="button">READ MORE...</a><!----leads to lady page form------->
              </div>
              </div>
              <div class="card">
                <div class="img-section">
                <img src="img/adapter.jpg">
                </div>
                <div calss="article">
                <h4>ADAPTER PROGRAM</h4>
                <p>The Oval Project is leg of Geeklets Academy that is responsile for developing and managing websites, apps and other services for businesses to help them reach a wider audiance and oost their sales</p>
                </div>
                <div class="blog-view">
                <a href="adapter.html" class="button">READ MORE</a><!----leads to adapter page------>
                </div>
                </div>
      </div>
      </div>
      
      </div>
    </section>

<!---------team and sponsors section--------------------------->
  <div id="tands"class="tands">
    <div class="team">
      <div class="title">
      <h2>OUR CREW</h2>
    </div>
      <div class="team-pics">
      <div class="pic1 pica">
        <img src="img/user2.jpg"><br>
        <div class="text">
        <h5>KENNEDY ADONGO</h5>
        <p>CEO</p>
      </div>
      </div>
      <div class="pic2 pica">
        <img src="img/user2.jpg">
        <div class="text">
        <h5>JEFFERY HAMMOND</h5>
        <p>Administrater</p>
      </div>
      </div>
      <div class="pic3 pica">
        <img src="img/user2.jpg">
        <div class="text">
        <h5>ZAAFII PETER-CLAVAR</h5>
        <p>Finance Manager</p>
      </div>
      </div>
      <div class="pic4 pica">
        <img src="img/user2.jpg">
        <div class="text">
        <h5>ERASMUS BISSUE</h5>
        <p>Project Manager</p>
      </div>
      </div>
      <div class="pic5 pica">
        <img src="img/user2.jpg">
        <div class="text">
        <h5>Richard Aikins</h5>
        <p>BOOM Projects Lead</p>
      </div>
      </div>
      <div class="pic4 pica">
        <img src="img/user2.jpg">
        <div class="text">
        <h5>ERASMUS BISSUE</h5>
        <p>GAYES Lead</p>
      </div>
      </div>
      <div class="pic4 pica">
        <img src="img/user2.jpg">
        <div class="text">
        <h5>ERASMUS BISSUE</h5>
        <p>Lady Geek Movement Lead</p>
      </div>
      </div>
      <div class="pic4 pica">
        <img src="img/user2.jpg">
        <div class="text">
        <h5>ERASMUS BISSUE</h5>
        <p>1-ied Project Lead</p>
      </div>
      </div>
    </div>
    </div>
    <div class="sponsors">
      <h2>SPONSORS</h2>
      <div class="sponsors-pics">
      <img src="img/ghla.png">
      <!---<img src="assets/img/ghla.png">
      <img src="assets/img/ghla.png">
      <img src="assets/img/ghla.png">
      <img src="assets/img/ghla.png">
      <img src="assets/img/ghla.png">
      <img src="assets/img/ghla.png">
      <img src="assets/img/ghla.png">--->
    </div>
  </div>
    </div>


<!---------Contact section--------------------------->
<!-----this section is divided into 3 parts. contact1(for the academy contact detatils), contact2(gives the user a form with input fields; 
  name,email,message and a send button to be submitted to the academy email) and the map display our location(Ghana library authorithy-effutu) on a map----->
<section id="social-media">
<div class="contact-box">
  <div class="title">
<h1>CONTACT US</h1>
</div>
  <div class="contact1">
    <h3>OUR CONTACT DETAILS</h3>
    <i class="fa-solid fa-location-dot"></i> <label>Location</label><br>
  <p>Ghana Library Authorithy</p>
  <p>Efutu Municipal - Winneba, Ghana</p>
  <i class="fa-solid fa-phone"></i> <label>Phone Number</label><br>
  <p>+233 54 781 5672</p>
  <i class="fa-solid fa-envelope"></i> <label>Email</label><br>
  <p>geeklets.academy@gmail.com</p>
    <a class="social" href="https://www.instagram.com/geeklets_academy/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
    <a class="social" href="https://web.facebook.com/geekletscommunity" target="_blank"><i class="fa-brands fa-facebook"></i></i></a>
    <a class="social" href="https://wa.me/+233547815672"><i class="fa-brands fa-whatsapp" target="_blank"></i></a> 
  </div>
<div class="contact2">
  <form>
    <h3>SEND US A MESSAGE</h3>
    <div class="name"><input type="input" placeholder="Name" required></div><br>
    <div class="email"><input type="email" placeholder="Email"required></div><br>
    <div class="mess"><textarea name="mess" placeholder="Message" rows="4" cols="56.5"></textarea></div><br>
    <button class="contact-btn">SEND</button>
  </form>
</div>
</div>
<div class="map">
  <iframe class="locmap" src="https://maps.google.com/maps?q=ghana%20library%20authorithy%20winneba&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
</div>
</section>

<!--------statistics section------------------->
<!-----this section is supposed to show a number count of; number of people trained by us, number of businesses started buy our students, etc-------->


<!--------footer section------------------->


<section id="footer">
  <img src="img/wave2.png" class="footer-img">
<div class="container">
  <div class="row">
    <div class="col-md-4 footer-box">
      <img src="img/demo-logo.png">
      <p>Harum quibusdam quidem necessitatibus eos eveniet vero  
        unde repudiandae veniam sed enim molestiae sequi aliquam</p>
    </div>

    <div class="col-md-4 footer-box">
      <p><b>CONTACT US</b></p>
      <p><i class="fa fa-map-marker"></i>GHLA - Winneba, Ghana</p>
      <p><i class="fa fa-phone"></i>+233 54 781 5672</p>
      <p><i class="fa fa-envelope"></i>ovalprojectcrew@gmail.com</p>
    </div>

<div class="col-md-4 footer-box">
     <p><b>SUBSCRIBE NEWSLETTERS</b></p>
     <input type="email" class="form-control" placeholder="Your email">
     <button type="button" class="btn btn-primary">Subscribe </button>
    </div>
    <hr>
    <p class="copyright">powered by websTinga</p>
  </div>
</div>
</section>

 <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

    <!--------smooth scroll----------------------->
    <script src="assets/js/index.js"></script>
    <script>
      var scroll = new SmoothScroll('a[href*="#"]');
    </script>
  </body>
</html>