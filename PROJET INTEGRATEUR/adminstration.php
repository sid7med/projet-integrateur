<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Navbar</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

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
  .dropdown-content a:hover {
    background-color: #f1f1f1;
  }

  .dropdown {
    float: left;
    overflow: hidden;
  }

  .dropdown .dropbtn {
    font-size: 16px;
    border: none;
    outline: none;
    color: white;
    padding: 8px 8px;
    background-color: inherit;
    font-family: inherit;
    margin-left: 20px;
    position: relative; 
  }
  

  .dropdown .dropbtn i {
    transition: transform 0.3s ease-in-out; 
  }

  .dropbtn {
    cursor: pointer;
  }

  .dropdown:hover .dropbtn i {
    transform: rotate(180deg); 
  }

  .navbar a, .dropdown .dropbtn {
    display: inline-block;
  }

  .dropdown-content {
    display: none;
    position: absolute;
    background-color: black; 
    min-width: 60px;
    height: 100px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    margin-left: -5px;
    font-size: 14px;
  }

  .dropdown-content a {
    float: none;
    color: white;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
  }

  .dropdown-content a:hover {
    background-color: #ddd;
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
         <a class="dropbtn">Administrateur <i class="fas fa-caret-down"></i></a>
         <div class="dropdown-content"> 
         <a href="gestion des étudiants/index.php">Gestion des étudiants</a>
         <a href="#">Gestion des utilisateurs</a>
         
          </div>
       </div>
    </li>

    <li style="float:right"><a href="deconnexion.php">Déconnexion</a></li>
</ul>

       </div>
       
       </body>
       </html>
