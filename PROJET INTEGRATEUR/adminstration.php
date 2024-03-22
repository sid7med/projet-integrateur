<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Navbar</title>
<style>
  body {
    margin: 0;
    font-family: Arial, sans-serif;
  }
  .navbar {
    background-color: #7C16D5;
    overflow: hidden;
  }
   .navbar ul {
    list-style-type: none;
  
  } 
   
  .navbar li {
    float: left;
  }
  .navbar li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 20px;
    text-decoration: none;
  }
  .navbar li a:hover {
    background-color: #ddd;
    color: blueviolet;
  }
  
</style>

<style>
  .dropdown {
    position: relative;
    display: inline-block;
  }

   .dropdown-content {
    display: none; 
   
  }

  .dropdown-content a {
    display: block;
  }

  .dropdown-content a:hover {
    background-color: #f1f1f1;
  }

  .dropdown:hover .dropdown-content {
    display: block;
  }
</style>
</head>
<body>

<div class="navbar">
<ul>
    <li>
    <div class="dropdown">
         <a class="dropbtn">Administrateur</a>
         <div class="dropdown-content">
          
         <a href="#">Gestion des etudients</a>
         <a href="#">Gestion des utilisateurs</a>
          </div>
       </div>
    </li>

    <li style="float:right"><a href="#l">Deconnection</a></li>
</ul>

       </div>
       
       </body>
       </html>
 
