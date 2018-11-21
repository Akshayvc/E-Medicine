<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>CSS MenuMaker</title>
   <style>
   #cssmenu,
#cssmenu > ul {
  background: url(images/highlight-bg.png) repeat;
  padding-bottom: 3px;
  font-family: 'Open Sans', sans-serif;
  font-weight: 600;
}
#cssmenu:before,
#cssmenu:after,
#cssmenu > ul:before,
#cssmenu > ul:after {
  content: "";
  display: table;
}
#cssmenu:after,
#cssmenu > ul:after {
  clear: both;
}
#cssmenu {
  width: auto;
  zoom: 1;
}
#cssmenu > ul {
  background: url(images/menu-bg.png) repeat;
  margin: 0;
  padding: 0;
  position: relative;
}
#cssmenu > ul li {
  margin: 0;
  padding: 0;
  list-style: none;
}
#cssmenu > ul > li {
  float: left;
  position: relative;
}
#cssmenu > ul > li > a {
  padding: 23px 26px;
  display: block;
  color: white;
  font-size: 13px;
  text-decoration: none;
  text-transform: uppercase;
  text-shadow: 0 -1px 0 #0d0d0d;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.7);
  line-height: 18px;
}
#cssmenu > ul > li:hover > a {
  background: url(images/highlight-bg.png) repeat;
  text-shadow: 0 -1px 0 #97321f;
  text-shadow: 0 -1px 0 rgba(122, 42, 26, 0.64);
}
#cssmenu > ul > li > a > span {
  line-height: 18px;
}
#cssmenu > ul > li.active > a,
#cssmenu > ul > li > a:active {
  background: url(images/hover.png) repeat;
}
/* Childs */
#cssmenu > ul ul {
  opacity: 0;
  visibility: hidden;
  position: absolute;
  top: 120px;
  background: url(images/menu-bg.png) repeat;
  margin: 0;
  padding: 0;
  z-index: -1;
}
#cssmenu > ul li:hover ul {
  opacity: 1;
  visibility: visible;
  margin: 0;
  color: #000;
  z-index: 2;
  top: 64px;
  left: 0;
}
#cssmenu > ul ul:before {
  content: "";
  position: absolute;
  top: -10px;
  width: 100%;
  height: 20px;
  background: transparent;
}
#cssmenu > ul ul li {
  list-style: none;
  padding: 0;
  margin: 0;
  width: 100%;
}
#cssmenu > ul ul li a {
  padding: 18px 26px;
  display: block;
  color: white;
  font-size: 13px;
  text-decoration: none;
  text-transform: uppercase;
  width: 150px;
  border-left: 4px solid transparent;
  -webkit-transition: all 0.35s ease-in-out;
  -moz-transition: all 0.35s ease-in-out;
  -ms-transition: all 0.35s ease-in-out;
  transition: all 0.35s ease-in-out;
}
#cssmenu > ul ul li a:hover {
  border-left: 4px solid #d64e34;
  background: url(images/hover.png) repeat;
}
#cssmenu > ul ul li a:active {
  background: url(images/menu-bg.png) repeat;
}

   </style>
</head>
<body>

<div id='cssmenu'>
<ul>
   <li class='active'><a href='index.php'><span>Home</span></a></li>
   <li class='last'><a href='home.php'><span>Search</span></a></li>
   <li class='has-sub'><a href='#'><span>Registration</span></a>
      <ul>
         <li><a href='regi.php'><span>Pharmacy Registartion</span></a></li>
       
         
      </ul>
	  <li class='has-sub'><a href='#'><span>Login</span></a>
      <ul>
         <li><a href='pharmacylogin.php'><span>Pharmacy Login</span></a></li>
       <li class="last"><a href='adminlogin.php'><span>Admin Login</span></a></li> 
         
      </ul>
   </li>
   <li class='last'><a href='about.php'><span>About</span></a>
   </li>
   <li class='last'><a href='contact.php'><span>Contact</span></a></li>
</ul>
</div>
</body>
<html>