<?php
include "../c/participationC.php";

$c = new participationC();
$tab = $c->listpart();

?>

<center>
    <h1>Participation list </h1>
    <h2>
        <a href="form1.php">Add </a>
    </h2>
</center>
<table border="1" align="center" width="70%">
    <tr>
        <th>id</th>
        <th>cin</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Email</th>
        <th>Tel</th>
        <th>ide</th>
        <th>delete<th> 
       
    </tr>


    <?php
    foreach ($tab as $participation) {
    ?>




        <tr>
            <td><?php echo $participation['idp']; ?></td>
            <td><?php echo $participation['cin']; ?></td>
            <td><?php echo $participation['nomp']; ?></td>
            <td><?php echo $participation['prep']; ?></td>
            <td><?php echo $participation['emailp']; ?></td>
            <td><?php echo $participation['telp']; ?></td>
            <td>
                <a href="delete.php?cin=<?php echo $participation['cin']; ?>">Delete</a>
            </td>
            
        </tr>
    <?php
    }
    ?>
</table>