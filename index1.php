<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my first project</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" type="text/css" href="css/all.min.css">
    
    <style>

    </style>
</head>
<body>
<div class="container">
        <div class="empty"></div>
        <div class="navbar">
        <div class="logo">
            <a href="#"><i class="fas fa-1x fa-book-reader"></i>EDUCATION</a>
        </div>
            <div class="logo_items">
            <ul>
                <li><i class="fab fa-2x fa-facebook" title="facebook"></i></li>
                <li><i class="fab fa-2x fa-twitter"></i></li>
                <li><i class="fab fa-2x fa-instagram"></i></li>
                <li><i class="fab fa-2x fa-github"></i></li>
            </ul>
            </div>
        
    </div>
        <div class="navbar_items">
            <ul>
                <li><a href="#">home</a></li>
                <li><a href="#register">REGISTER</a></li>
                <li><a href="#blog">blog</a></li>
                <li><a href="#search">search</a></li>
                <li><a href="#contact_us">Contact as</a></li>
            </ul>
        </div>
    <div class="image">
        <div class="image_contact">
            <h1> only I can change my life.<br>
                <span>on one do it for me.</span>
            </h1>
        <a id="button" href="#search">go for search</a>
        </div>
    </div>
    <div class="cont1">
          <div class="reg" id="register">
              <form action="validation.php" method="post" class="form" name="form" id="form" onsubmit="return validation()">
              <h2 id="registration">REGISTRATION</h2>
              <div id="meg"class="meg"></div>
              <label>
                  <span>USERNAME</span>
                  <i id="icon_name" class="fas fa-check-circle"></i>
                  <input type="text" class="username" name="username" id="username" size="9" maxlenth="15">
              </label>
              <label>
                  <span>REGISTER NO</span>
                  <i id="icon_id"  class="fas fa-check-circle icon-s"></i>
                  <input type="text" class="register_no" name="register_no" id="register_no">
              </label>
              <label>
                  <span>EMAIL ID</span>
                  <i id="icon_email" class="fas fa-check-circle"></i>
                  <input type="text" class="email" name="email" id="email">
              </label>
              <label>
                  <span id="dept">DEPARTMENT</span>
                  <select class="select" name="department" id="select">
                      <option selected disabled value="">-select-</option>
                      <option value="BCA">BCA</option>
                      <option value="B.SC IT">B.sc IT</option>
                      <option value="B.SC CS">B.sc CS</option>
                  </select>
              </label>
              <label>
                <span>FEEDBACK</span>
                <textarea cols="40" rows="3"  name="feedback" id="feedback"></textarea>
              </label>
              <div class="register_btn">
              <input type="submit" class="submit" name="submit" value="register">
            </div>
          </form>
          </div>
      </div>
    <div class="blog" id="blog">
        <h1 class="title">blog</h1>
        <div class="blog_wrepper">
            <div class="blog1">
                <div class="blog_contact">
                    <h2>CSS</h2>
                    <i class="fab fa-3x fa-css3-alt"></i>
                    <p>Cascading Style Sheet CSS was first proposed by HAKON WIUM LIE on OCTOBER 10,1994 the latest version of CSS is CSS3</p>
                </div>
                <div class="blog_contact">
                    <h2>HTML</h2>
                    <i class="fab fa-3x fa-html5"></i>
                    <p>Hyper Text Markup Language HTML was created by SIR TIM BENERS_LEE on 1995 HTML is very evolving markup language latest version of HTML is HTML5</p>
                </div>
                <div class="blog_contact">
                    <h2>Java script</h2>
                    <i class="fab fa-3x fa-js-square"></i>
                    <p>Java Script was create by brendan Eich in 1995 it used both client-side and seve-side it make webpage interactive. farmeworks REACT, ANGULAR,EMBER... </p>
                </div>
            </div>
            <div class="blog2">
                <div class="blog_contact">
                    <h2>java</h2>
                    <i class="fab fa-3x fa-java"></i>
                    <p>Java is an Object-Oriented-Programming-Language developed by James Gosling at SUN MIRCOSYSTEM in early 1990s the latest version is JAVA15 frameworks SPRING APACHE STRUTS GRAILS JSF(javaserever face)</p>
                </div>
                <div class="blog_contact">
                    <h2>python</h2>
                    <i class="fab fa-3x fa-python"></i>
                    <p>Python was conceived in the late 1980s by GUIDO VAN ROSSUM it is highly productive as compared to other programming language latest version is python3.7.7 farmworks DJANGO FLASK PYRAMID </p>
                </div>
                <div class="blog_contact">
                    <h2>PHP</h2>
                    <i class="fab fa-3x fa-php"></i>
                    <p>PHP:Hypertext Perprocessor is a open source scripting language Created in 1994 by Rasmu Lerdorf we can create static or dynamic website using PHP</p>
                </div>
            </div>
        </div>
    </div>
  
    <form  method="POST" onsubmit="return check()">
 <div class="cont2">
        <div class="search">
            <h2 id="search">SEARCH</h2>
            <div id="note" class="meg"></div>
            <label>
                <span>USERNAME</span>
                <input type="text" name="uname" id="uname" size="9" maxlenth="15" >
            </label>
            <label>
                <span>ID</span>
                <input type="text" name="id" id="id" >
            </label>
            <label>
                <span >DEPARTMENT</span>
                    <select class="select" id="dept" name="dept">
                    <option selected disabled value="">-select-</option>
                    <option value="BCA">BCA</option>
                    <option value="B.SC IT">B.sc IT</option>
                    <option value="B.SC CS">B.sc CS</option>
                </select>
                </label>
                <label>
                    <span>YEAR</span>
                        <select name="year" id="year" class="select">
                        <option selected disabled value="">-select-</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </label>
               
            <input type="submit" class="submit" name="search" value="search">
<?php include_once('search_db.php') ?>
    
</div>
</div>
</form>
  
    <div class="space"></div>
    <div class="contact_as" id="contact_us">
        <h2>CONTACT-US</h2>
        <div class="cont_wrepper">
        <div class="contact">
            <div class="cont_contact">
                <br>
            <i class="fas fa-3x fa-map-marker-alt"></i>
            <h3>ADDRESS</h3>
            <span>Office,Chennai</span>
            <p>26,raja Annamalai Rd<br>
            Chennai<br>
            Tamilnadu-641 044</p>
            <span>Office,Coimbator</span>
            <p>666,Sakthi Road,<br>
            Bus Stop Gandhipuram</p>
        </div>
        <div class="cont_contact">
            <br>
            <i class="fas fa-3x fa-phone-alt"></i>
            <h3>PHONE</h3>
            <span>Call Free<br></span>
            <p>1-888-123-465</p>
            <span>Fax<br></span>
            <p>167-133-490</p>
            <p>Mon-Sat 8.00-18.00</p>
        </div>
        <div class="cont_contact">
            <br>
            <i class="far fa-3x fa-comment-dots"></i>
            <h3>EMAIL</h3>
            <span>Request For Personal</span>
            <p>info@edugroup.com</p>
            <span>Employeement oppertunities</span>
            <p>carees@edugroup.com</p>
        </div>
    </div>
    </div>
</div>
<div class="space"></div>
<div class="footer">
    <a href="#">Copyright @2020 All righs reserved</a>
</div>
</div>
<script src="search.js"></script>
<script src="register.js"></script>     
</body>
</html>
