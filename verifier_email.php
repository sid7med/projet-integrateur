<?php 
include_once ("db_conn.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head> 
<body>
    
    <div class="container">
        <div class="box form-box" >
            <header>verifier votre email</header>
            <form action="type_de_compte.php" method="post">
                <div class="field input">
                    <input type="email" name="email" id="email" autocomplete="off" placeholder="Entrer votre email" required>
                    </div>
                <div class="field input">
                <input type="number" name="otpverify" class="form-control form-control-lg" id="exampleInputEmail1"  placeholder="Verification Code">
            </div>
                <p id="indication"></p>
                <span class="val">
                <div class="field">
                    <input type="submit" class="btn" name="verifyEmail" value="Valider" id="valide" style="display:none;">
                        </div>       
                        <div class="annul">
                    <a herf="deconnexion.php"><input type="reset"  class="ann"  value="Annuler" id="annuler" style="display:none;"></a>
                </div>
                </span>
                
            </form>
         

        </div>
        
    </div>
    <script>
        var inputElement = document.getElementById('email');
        var name="@supnum.mr";
        var x = document.getElementById('indication');
        var y = document.getElementById('valide');
        var z = document.getElementById('annuler');
inputElement.addEventListener('input', function(event) {
    if((event.target.value).includes(name)){
        x.textContent="vous pouvez valider cette compte";
        y.style.display = "block";
        z.style.display = "block";
    }else{
        x.textContent="cette email n'existe pas";
    }
   });
 
    </script>

</body>
</html>

