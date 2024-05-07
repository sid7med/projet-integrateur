<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Datatable utilisateurs</title>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.0/css/dataTables.bootstrap5.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.3.3/css/select.bootstrap5.min.css"/>

<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.0/js/dataTables.bootstrap5.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/select/1.3.3/js/dataTables.select.min.js"></script>
<body class="py-4" data-new-gr-c-s-check-loaded="14.1027.0" data-gr-ext-installed="">
    
<main>
  <div class="container">
      <div class="">
        <center><h1>Listes des utilisateurs</h1></center>
        <a href="add-u.php" class="btn btn-primary mb-3">ajouter un nouveau</a>
        <div class="">
		<table id="employee_grid" class="table table-striped" style="width:100%" cellspacing="0">
        <thead>
            <tr>
            
				        <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Mot de passe</th>
                
            </tr>
        </thead>
 
        <tfoot>
            <tr>
                
            <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Mot de passe</th>
                
            </tr>
        </tfoot>
    </table>
    </div>
      </div>

    </div>

</main>

<script type="text/javascript">
$( document ).ready(function() {
$('#employee_grid').DataTable({
				 "bProcessing": true,
         "serverSide": true,
         "select": true,
         "ajax":{
            url :"response.php", // json datasource
            type: "post",  // type of method  ,GET/POST/DELETE
            error: function(){
              console.log('error');
            }
          }
        });   
});
</script>
</body>