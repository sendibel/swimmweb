<?php 

$server = "localhost";
$user = "root";
$password = "";
$baza = "butterfly";
//ostvarivanje veze
  $conect = mysqli_connect($server,$user,$password,$baza);
  $sql = 'SELECT s.name as style, r.time, r.date, r.meet, l.address, c.name as country, u.name, u.lastname  FROM style as s inner join records as r on s.id_records = r.id inner join location as l on l.id = r.id_location inner join country as c on c.id = l.id_country inner join users as u on u.id = r.id_users';
    $mysqli = $conect->query($sql);
    $result = $mysqli->fetch_all(MYSQLI_ASSOC);
    $records = $result;

    $sql = 'SELECT u.name, u.lastname, u.image, c.name as country FROM users as u inner join country as c on u.id_country = c.id';
    $mysqli = $conect->query($sql);
    $result = $mysqli->fetch_all(MYSQLI_ASSOC);
    $users = $result;

      var_dump($result);

?>
  <?php 
	require('include/header.php');
	?>

    <h3 style="color: #848158;padding-left: 750px;"> records</h3>
    <table class="table table-hover" style="background-color: #848158;color: white;font-size: larger;">
      <thead>
        <tr>
          <th>STYLE</th>
          <th>TIME</th>
          <th>DATE</th>
          <th>MEET</th>
          <th>ADDRES</th>
          <th>COUNTRY</th>
          <th>NAME</th>
          <th>LASTNAME</th>
        </tr>
      </thead>
    <tbody>
    <?php
        foreach ($records as $record) {
        echo '<tr>
                <th>'.$record['style'].'</th>
                <th>'.$record['time'].'</th>
                <th>'.$record['date'].'</th>
                <th>'.$record['meet'].'</th>
                <th>'.$record['address'].'</th>
                <th>'.$record['country'].'</th>
                <th>'.$record['name'].'</th>
                <th>'.$record['lastname'].'</th>
              </tr>';}
    ?>
        </tbody>
    </table> 
    <h3 style="color: #848158;padding-left: 750px;"> swimmers</h3>
    <table class="table table-hover" style="background-color: #848158;color: white;font-size: larger;">
    <thead>
      <tr>
        <th>Name</th>
        <th>Lastname</th>
        <th>Country</th>
        <th>Image</th>
      </tr>
    </thead>
    <tbody>

    <?php
        foreach ($users as $user) {
        echo '<tr>
                <td>'.$user['name'].'</td>
                <td>'.$user['lastname'].'</td>
                <td>'.$user['country'].'</td>
                <td><img class="users_img" style="width:145px;height:175px;border-radius:33px;" src="images/'.$user['image'].'"></td>
              </tr>';}  
    ?>
    	
    </tbody>
    </table>
  
    
        
  
