<?php 
$user = 'root';
$pass = '';
try 
{
    $db= new PDO('mysql:host=localhost;dbname=gestion_emploie_du_temps',$user,$pass); 
    // foreach($db->query('SELECT * from utilisateurs') as $row);
    // print_r ($row);
}catch(Exception $e) 
{
    print "erreur :" . $e->getMessage() . "</br>";
    die;
}
?>
