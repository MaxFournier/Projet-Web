<!doctype html>
<html>
<head>
<title>info</title>
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
  body{
    text-align : center;
  }
</style>
</head>
 <body>
   <h1>Info Serie</h1>
   <?php
    //var_dump($_POST['serie-info']);
    if(!isset($_GET['serie'] )){
   ?>
   pas d'info sur la serie
   <?php
    }else{
      $data = $_POST['serie-info'];
      if(isset($data['favorite']) && $data['favorite'] == 1){
        echo '<strong> Cette serie fait partie de vos serie favorites</strong>';
      }
      echo '<h2>'.$data['titre'].'</h2>';
      echo '<p>'.$data['description'].'<p>';
      echo '<p>Nombre de saison : '.$data['nb_saison'].'</p>';
      if(isset($data['poster'])){
        echo '<img src="'.$data['poster'].'"/>';
      }
      echo '<p><a href="Avancement?serie='.$data['id'].'">changer le dernier episode vu</a></p>';
   ?>
    
    <h3>Liste des episodes</h3>
    <table>
      <tr>
        <th>Episode</th>
        <th>description</th>
        <th>saison</th>
        <th>numero</th>
        <th>dernier vu</th>
      </tr>
      <?php
        foreach ($data['episodes'] as $episode) {
          echo '<tr>';
          echo '<td>'.$episode['titre'].'</td>';
          if(isset($episode['description'])){
            echo ' <td>'.$episode['description'].'</td> ';
          }
          else{
            echo ' <td></td> ';
          }
          echo '<td>'.$episode['saison'].'</td>';
          echo '<td>'.$episode['numero'].'</td>';
          if($data['id_last_episode'] == $episode['id']){
            echo ' <td>dernier vu</td> ';
          }
          else{
            echo ' <td></td> ';
          }
          echo '</tr>';
        }
      ?>
    </table>
<?php
    }      
   ?> 
 </body>
</html>