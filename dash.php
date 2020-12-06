<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.top{
  background-color: #696969;
  padding: 25px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav {

  overflow: hidden;

  background-color: white;
}

.topnav a {
  float: right;
  color: black;
  text-align: center;
  padding: 16px 16px; 
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
  padding: 16px 16px; 
}

.topnav a.active {
  background-color: #D3D3D3;
  color: black;
}
.dropbtn {
  background-color: white;
  color: black;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: white;
 
  box-shadow:  rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
 
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: darkgrey;}
</style>
</head>
<body>
<div class="top">

</div>

<div class="topnav">
  
  <a href=" "  style="float: left;background:white;padding-left: 105px"><img src="logo.svg"  width=50px height="54px"></a>
  <a href="" style="float:left;padding-top: 32px;background:white"> <b>intugine</b></a>

  <div class="dropdown" style="float: right;padding-right: 81px">
  <a><i class="fas fa-angle-down" ></i></a>
  <div class="dropdown-content">
    <a href="#">Link number 1</a>
  </div>
</div>
  <a href="" style="padding-top: 30px;background:white"><img src="profile.svg"    style="size:23px;border-radius: 50%;background-color: darkgrey;float: right;"></a>
  <a href="#transporters" style="padding-top: 32px"><b>transporters</a>
  <a href="#Brands" style="padding-top: 32px">brands</a>
  <a class="active" href="#home" style="padding-top: 32px">home</a>
  
  
  </div>





</body>
</html>
