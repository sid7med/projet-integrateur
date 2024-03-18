<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="page1.css">
        <title>Sign Up Form</title>
    </head>
    <body style="background-color:bisque ;">
        <h1 style="background-color: #3ac162;text-align: left;padding: 20px;margin-top: -10px ;font-family: Lucida Calligraphy;text-decoration: underline;font-size: large;">Creation de Profile </h1>
        <h1 id="ski"style="background-color: #3ac162;padding: 20px;width: fit-content;margin: auto; border-radius: 25px; margin-bottom: 5px;font-family: Lucida Calligraphy;font-size: large;">Type de Compte</h1>
        <div class="container">
          <button class="ewe" onclick="j()">Entreprise</button>
          <button class="ewe" onclick="e()">Etudiant</button>
          <button class="ewe" onclick="e()">Proffesseur</button></div>
      <form action="insertion.php" method="post" id="form" style="display: none;">
        
     
        
        <fieldset>
         
       
          
          <label for="name" class="mche" id="nm">Nom:</label>
          <input type="text" id="nom" name="nom" class="mche">
          <label for="name" id="je" style="display: none;">Libelle:</label>
          <input type="text" id="lib" name="libelle" class="je" style="display: none;">
          <label for="name" id="ad" style="display: none;">Adresse:</label>
          <input type="text" id="adr" name="adress" class="je" style="display: none;">
          
          <label for="prenom" class="mche" id="pr">Prenom:</label>
          <input type="text" id="prenom" name="prenom" class="mche">
          
          <label for="password">Tel:</label>
          <input type="tel" id="tel" name="tel">
          
      
        </fieldset>
        
           
           <div class="container"><button type="submit" class="ewe">Valider</button>
           <button type="reset" class="ewe">Annuler</button></div>
        
        
      </form>
      <script>
        function j(){
            document.getElementById('lib').style.display="block";
            document.getElementById('je').style.display="block";
            document.getElementById('ad').style.display="block";
            document.getElementById('adr').style.display="block";
            document.getElementById('nom').style.display=   "none";
            document.getElementById('nm').style.display=    "none";
            document.getElementById('pr').style.display=    "none";
            document.getElementById('prenom').style.display="none";
            document.getElementById('ski').style.display="none";
            document.getElementById('form').style.display="block";
            
        }
        function e(){
            document.getElementById('lib').style.display="none";
            document.getElementById('je').style.display=" none";
            document.getElementById('ad').style.display=" none";
            document.getElementById('adr').style.display="none";
            document.getElementById('ski').style.display="none";
            document.getElementById('nom').style.display=   "block";
            document.getElementById('nm').style.display=    "block";
            document.getElementById('pr').style.display=    "block";
            document.getElementById('prenom').style.display="block";
            document.getElementById('form').style.display="block";
            
        }
        
      </script>
    </body>
</html>



