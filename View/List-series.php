<!DOCTYPE html>
<html>
  <head>
  <title>Liste</title>
    <style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #dddddd;
    }
    
    </style>
  </head>
<body>

  <h2>Listes des Series</h2>

  <table>
    <tr>
      <th>Serie</th>
      <th>Poster</th>
      <th>Seen</th>
      <th>Favorite</th>
      <th>info</th>
    </tr>
    <?php
     if (isset($_POST['list_serie'])){
      foreach($_POST['list_serie'] as $serie){
        echo "<tr>";
        echo ' <td>'.$serie['titre'].'</td> ';
        if(isset($serie['poster'])){
          echo ' <td><img src="'.$serie['poster'].'"/></td> ';
        }
        else{
          echo ' <td></td> ';
        }
        if(isset($serie['seen'])){
          echo ' <td>'.$serie['seen'].'</td> ';
        }
        else{
          echo ' <td></td> ';
        }
        if(isset($serie['favorite'])){
          echo ' <td>'.$serie['favorite'].'</td> ';
        }
        else{
          echo ' <td></td> ';
        }
        echo ' <td><a href="Serie-info?serie='.$serie['id'].'">info</a></td>';
        echo "</tr>";
      }
    } 
    
    ?>
  </table>

</body>
</html>

