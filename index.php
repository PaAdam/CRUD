<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
     <div class="container my-5">
          <h2>Liste des projets</h2>
          <a class="btn btn-primary" href="/CRUD/creer.php" role="button">Nouveau projet</a>
          <br>
          <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Code</th>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Budget</th>
                    <th>Date</th>
                    <th>Statut</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $servername= "localhost";
                $username = "root";
                $password ="";  
                $database="projetl";
                
                require_once 'connection.php';
                while($row = $result->fetch_assoc()){
                    echo "<tr>
                    <td>$row[id]</td>
                    <td>$row[code]</td>
                    <td>$row[nom]</td>
                    <td>$row[description]</td>
                    <td>$row[budget]</td>
                    <td>$row[date]</td>
                    <td>$row[statut]</td>
                    <td>
                        <a class='btn btn-primary btn-sm' href='/CRUD/modifier.php?id=$row[id]'>Modifier</a>
                        <a class='btn btn-danger btn-sm'href='/CRUD/supprimer.php?id=$row[id]'>Supprimer</a>
                    </td>
                </tr>
                    ";
                }
                ?>
            </tbody>
          </table>
     </div>
</body>
</html>