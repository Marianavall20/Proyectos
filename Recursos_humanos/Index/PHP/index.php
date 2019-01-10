
<meta http-equiv="Expires" content="0" />
<meta http-equiv="Pragma" content="no-cache" />

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" type="text/css" href="../CSS/reset.css">
    <link rel="stylesheet" type="text/css" href="../CSS/main.css">
    <link rel="stylesheet" type="text/css" href="../CSS/galeria.css">
    <link rel="stylesheet" href="footer.css">
    <style type="text/css">
      .footer-distributed{
  background-color: #292c2f;
  box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
  box-sizing: border-box;
  width: 100%;
  text-align: left;
  font: bold 16px sans-serif;

  padding: 30px 50px;

}

.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right{
  display: inline-block;
  vertical-align: top;
}

/* Footer left */

.footer-distributed .footer-left{
  width: 40%;
}

/* The company logo */

.footer-distributed h2{
  color:  #ffffff;
  font: normal 36px 'Cookie';
  margin-left: -160px;
}

.footer-distributed h3 span{
  color:  #5383d3;
}

/* Footer links */

.footer-distributed .footer-links{
  color:  #ffffff;
  margin: 20px 0 12px;
  padding: 0;
}

.footer-distributed .footer-links a{
  display:inline-block;
  line-height: 1.8;
  text-decoration: none;
  color:  inherit;
}

/* Footer Center */

.footer-distributed .footer-center{
  width: 35%;
}

.footer-distributed .footer-center i{
  background-color:  #33383b;
  color: #fff;
  font-size: 25px;
  width: 38px;
  height: 38px;
  border-radius: 50%;
  text-align: center;
  line-height: 42px;
  margin: 50px 15px;
  vertical-align: middle;
}

.footer-distributed .footer-center i.fa-envelope{
  font-size: 17px;
  line-height: 38px;
}

.footer-distributed .footer-center p{
  display: inline-block;
  color: #ffffff;
  vertical-align: middle;
  margin:0;
}

.footer-distributed .footer-center p span{
  display:block;
  font-weight: normal;
  font-size:14px;
  line-height:2;
}

.footer-distributed .footer-center p a{
  color:  #5383d3;
  text-decoration: none;;
}


/* Footer Right */

.footer-distributed .footer-right{
  width: 20%;
}

.footer-distributed .footer-company-about{
  line-height: 20px;
  color:  #92999f;
  font-size: 17px;
  font-weight: normal;
  margin: 0;
  width: 360px;
}

.footer-distributed .footer-company-about span{
  display: block;
  color:  #ffffff;
  font-size: 14px;
  font-weight: bold;
  margin-bottom: 20px;
}

.footer-distributed .footer-icons{
  margin-top: 25px;
  margin-left: 15px;
}

.footer-distributed .footer-icons a{
  display: inline-block;
  width: 35px;
  height: 35px;
  cursor: pointer;
  background-color:  #33383b;
  border-radius: 2px;
  font-size: 20px;
  color: #ffffff;
  padding: 8px;
  text-align: center;
  line-height: 35px;
  margin-right: 3px;
  margin-bottom: 5px;
}

/* If you don't want the footer to be responsive, remove these media queries */

@media (max-width: 880px) {

  .footer-distributed{
    font: bold 14px sans-serif;
  }

  .footer-distributed .footer-left,
  .footer-distributed .footer-center,
  .footer-distributed .footer-right{
    display: block;
    width: 100%;
    margin-bottom: 40px;
    text-align: center;
  }

  .footer-distributed .footer-center i{
    margin-left: 80px;
    margin-top: 150px;
  }

}
.footer-left img{
  width: 300px;
  height: 250px;
  margin-left: 70px;
}

  

.fa-facebook:hover{
  color: #3b5998;
}
.fa-twitter:hover{
  color:#55acee ;
}
.fa-linkedin:hover{
  color:#cb2026 ;
}
.fa-github:hover{
  color:#dd4b39 ;
}
.form-group{
  width: 350px;
}
.footer-center{
  margin-left: -90px;
  margin-top: 70px;

}
.footer-right{
   margin-left: -30px;
  margin-top: 70px;

}
    </style>


   
  
</head>
<body>
    <!-- scroll -->
  <script src="../lib/smooth-scroll.min.js"></script>
  <script>
  var scroll = new SmoothScroll('a[href*="#"]', {
  // Selectors
  ignore: '[data-scroll-ignore]', // Selector for links to ignore (must be a valid CSS selector)
  header: null, // Selector for fixed headers (must be a valid CSS selector)

  // Speed & Easing
  speed: 1000, // Integer. How fast to complete the scroll in milliseconds
  offset: 0, // Integer or Function returning an integer. How far to offset the scrolling anchor location in pixels
  easing: 'easeInOutCubic', // Easing pattern to use
  customEasing: function (time) {

    // Function. Custom easing pattern
    // If this is set to anything other than null, will override the easing option above

    // return <your formulate with time as a multiplier>

    // Example: easeInOut Quad
    return time < 0.5 ? 2 * time * time : -1 + (4 - 2 * time) * time;

  },

  // Callback API
  before: function (anchor, toggle) {}, // Callback to run before scroll
  after: function (anchor, toggle) {} // Callback to run after scroll
});
  </script>
<div id="sec"></div>
  <div id="header">
    
        <img src="../images/otra.png" width="220px" height="100px">
        <div id="main_menu">
        <div class="menu-fixed">
            <ul >
<li class="first_list"><a data-scroll href="#sec" class="main_menu_first ">inicio</a></li>
                <li class="first_list "><a data-scroll href="#sec-2" class="main_menu_first">nosotros</a></li>
                <li class="first_list "><a data-scroll href="#sec-3" class="main_menu_first">acerca de</a></li>
                <li class="first_list "><a data-scroll href="#sec-4" class="main_menu_first">servicios</a></li>
                <li class="first_list "><a data-scroll href="#sec-5" class="main_menu_first">testimonios</a></li>
            </ul>
            </div>
    </div> <!-- END #main_menu -->

  </div><!-- END .<header></header> -->
        
<?php
include("galeria.php")
?>
<!-- Section nosostros -->
<div id="sec-2"></div>
    
<?php
include("filosofia.php");
?>
<!-- Finaliza section nosotros -->      
        
<!-- Section servicios --> 
<div id="sec-3"></div>
<?php
include("acercade.php");
?>

  
<div id="sec-4"></div>
<?php
include("servicios.php");
?> 
<?php
include("parallax.php");
?> 
<!-- testimonios -->
<div id="sec-5"></div>

<?php
include("testimonios.php");
?>
<!-- Finaliza servicios -->
<footer class="footer-distributed">

      <div class="footer-left">
      <h2>CONTÁCTENOS</h2>
        <div class="form-group">      
      <input type="text" class="form-control" id="email" placeholder="Nombre completo" name="email">
    </div>
    <div class="form-group">   
      <input type="text" class="form-control" id="pwd" placeholder="Correo electrónico" name="pwd">
    </div>
       <div class="form-group">   
      <input type="text" class="form-control" id="pwd" placeholder="Teléfono" name="pwd">
    </div>
       <div class="form-group">   
      <textarea  type="password" class="form-control" id="pwd" placeholder="Mensaje" name="pwd"></textarea> 
    </div>
      </div>

      <div class="footer-center">

        <div>
          <i class="fa fa-map-marker"></i>
          <p><span>Cra 55 #46-22 </span> Abejorral, Antioquia</p>
        </div>
      <div>
          <i class="fa fa-phone"></i>
          <p>+57 302436285</p>
      </div>

        <div>
          <i class="fa fa-envelope"></i>
          <p><a href="mailto:support@company.com">RecursosHumanos@gmail.com</a></p>
        </div>

      </div>

      <div class="footer-right">

        <p class="footer-company-about">
          <span>About the company</span>
          Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
        </p>

        <div class="footer-icons">
          <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
          <a href="https://twitter.com/twitter"><i class="fa fa-twitter"></i></a>
          <a href="https://co.linkedin.com/"><i class="fa fa-linkedin"></i></a>
          <a href="https://github.com/Magtimus/Web-Servicio-Tutorial"><i class="fa fa-github"></i></a>
        </div>
      </div>

    </footer>   
</body>
</html>
