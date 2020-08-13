<?php
$server='localhost';
$user='root';
$pass='';
$db='coronadb';

$con = mysqli_connect($server,$user,$pass,$db);

if($con)
{
  ?>
  <script>
      alert('Connection successful')
  </script>
  <?php
}else{
 ?>
 <script>
     alert('Connection unsuccessful')
 </script>
<?php
}
 ?>
