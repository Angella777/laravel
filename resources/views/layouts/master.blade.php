<!DOCTYPE html>
<html lang="{{str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, intitial-scale=1.0">
  <title>Angee.Edu.com/ @yield('title')</title>
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/main.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/review.css') }}">
<!-- Start WOW Slider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOW Slider.com HEAD section -->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>  -->
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />


</head>

<body>
  <div class="topnav">
    <a href="/"><img src="logoo.png" width="40" height="30"></a>
    <a>Angee.Edu.com</a>
    <a class="active" href="/">Home</a>
    <a href="about">About</a>
    <a href="Events">Events</a>
    <a href="contactform">Contact</a>
    <a href="Log-in" class="" role="button">Log-in</a>
    <a href={{route('register')}} class="" role="button">Register</a>
  </div>
  <div class="slideshow-container">
  <div class="mySlides fade">
<div class="text">Succuess</div>
  <div class="numbertext">BELEIVING IN YOUR FUTURE </div>
  <img src="../hand.jpg" style="width:100%">
  
</div>

<div class="mySlides fade">
<div class="text">Assurance</div>
  <div class="numbertext">IMPACTING YOUR FUTURE</div>
  <img src="../joy.jpg" style="width:100%">
 
</div>
<div class="mySlides fade">
<div class="text">Quaility</div>
  <div class="numbertext">CARIBBEAN #1 COLLEGE</div>
  <img src="../smile.png" style="width:100%">
  
</div>
</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>


    </div>
    <div class="container">
      <div class="mgb-40 padb-30 auto-invert line-b-4 align-center">
        <h4 class="font-cond-l fg-accent lts-md mgb-10" contenteditable="false">Not Yet Convinced?</h4>
        <h1 class="font-cond-b fg-text-d lts-md fs-300 fs-300-xs no-mg" contenteditable="false">Read Testimonals </h1>
      </div>
      <ul class="hash-list cols-3 cols-1-xs pad-30-all align-center text-sm">
        <li>
          <img src="../stu.jpg" class="wpx-100 img-round mgb-20" title="" alt="" data-edit="false" data-editor="field" data-field="src[Image Path]; title[Image Title]; alt[Image Alternate Text]">
          <p class="fs-110 font-cond-l" contenteditable="false">" Value-for-money-->
            I think any student can study without spending a extra money, I have to pay 14000 per year and it is very cheap rate compare to other college, in this expensive world , a poor student can get education without expending so much money."</p>
          <h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false">Martha Stewart</h5>
          <small class="font-cond case-u lts-sm fs-80 fg-text-l" contenteditable="false">Software Engineering Graduate - Panama</small>
        </li>
        <li>
          <img src="../sud2.jpg" class="wpx-100 img-round mgb-20" title="" alt="" data-edit="false" data-editor="field" data-field="src[Image Path]; title[Image Title]; alt[Image Alternate Text]">
          <p class="fs-110 font-cond-l" contenteditable="false">"My Daughter is always happy to go to school and full of smiles when we pick her up. I attribute this to the exemplary teaching and community
            feel of the school. Any overseas move following Angee.Edu will be hard to leave such a great and caring school."</p>
          <h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false">Ariana Menage</h5>
          <small class="font-cond case-u lts-sm fs-80 fg-text-l" contenteditable="false">Mother of student - Kingston </small>
        </li>
        <li>
          <img src="../stud2.jpg" class="wpx-100 img-round mgb-20" title="" alt="" data-edit="false" data-editor="field" data-field="src[Image Path]; title[Image Title]; alt[Image Alternate Text]">
          <p class="fs-110 font-cond-l" contenteditable="false">" I had high expectations going into Angee.Edu at the beginning of freshman year. Now, after just one term, I can say that they were utterly blown away.
            The College is an amazing school, where academics and
            connections between professors and students are cherished. I had lunch with a professor earlier and we had a wide-ranging, incredible conversation.
            The campus itself is astounding in its beauty and traditional nature. Also, the College was accommodating to the utmost degree when I had to return home for a week due to a severe family emergency.
            But most of all, my fellow classmates and students are what make Angee.Edu exceptional. "</p>
          <h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false">Sean Carter</h5>
          <small class="font-cond case-u lts-sm fs-80 fg-text-l" contenteditable="false">Freshman - Montego Bay</small>
        </li>
      </ul>
    </div>

</body>


<!-- Site footer -->
<footer class="site-footer">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-6">
        <h6>About</h6>
        <p class="text-justify">Angee.Edu.com is an institution to help upcoming programmers with a career in coding. Angee.edu 
          focuses on providing the most efficient code or snippets as the code wants to be simple. We will help programmering 
          student build up concepts in different programming languages that include C, C++, Java, HTML, CSS, Bootstrap, JavaScript,
           PHP, Android, SQL and Algorithm.</p>
      </div>

      <div class="col-xs-6 col-md-3">
        <h6>Subjects</h6>
        <ul class="footer-links">
          <li><a href="http://scanfcode.com/category/c-language/">C</a></li>
          <li><a href="http://scanfcode.com/category/front-end-development/">HTML/CSS</a></li>
          <li><a href="http://scanfcode.com/category/back-end-development/">PHP</a></li>
          <li><a href="http://scanfcode.com/category/java-programming-language/">Java</a></li>
          <li><a href="http://scanfcode.com/category/android/">SQL</a></li>
          <li><a href="http://scanfcode.com/category/templates/">Python</a></li>
        </ul>
      </div>

      <div class="col-xs-6 col-md-3">
        <h6>Quick Links</h6>
        <ul class="footer-links">
          <li><a href="http://scanfcode.com/about/">About Us</a></li>
          <li><a href="/contactform">Contact Us</a></li>
          <li><a href="http://scanfcode.com/contribute-at-scanfcode/">Contribute</a></li>
          <li><a href="http://scanfcode.com/privacy-policy/">Privacy Policy</a></li>
          <li><a href="http://scanfcode.com/sitemap/">Sitemap</a></li>
        </ul>
      </div>
    </div>
    <hr>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-sm-6 col-xs-12">
        <p class="copyright-text">Copyright &copy; 2021 All Rights Reserved by
          <a href="/">Angee.Edu.com</a>.
        </p>
      </div>

      <div class="col-md-4 col-sm-6 col-xs-12">
        <ul class="social-icons">
          <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
          <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>

</html>