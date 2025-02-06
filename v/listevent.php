<?php
include "../c/eventC.php";

$c = new eventC();
$tab = $c->listevent();

?>

<center>
    <h1>Events list </h1>
    <h2>
        <a href="form2.php">Add </a>
    </h2>
</center>
<table border="1" align="center" width="70%">
    <tr>
        <th>id</th>
        <th>obj</th>
        <th>place</th>
        <th>dh</th>
        <th>bud</th>
        <th>be</th>
        <th>nbrp</th>
        <th>delete<th> 
       
    </tr>


    <?php
    foreach ($tab as $event) {
    ?>




        <tr>
            <td><?php echo $event['ide']; ?></td>
            <td><?php echo $event['obj']; ?></td>
            <td><?php echo $event['place']; ?></td>
            <td><?php echo $event['dh']; ?></td>
            <td><?php echo $event['bud']; ?></td>
            <td><?php echo $event['be']; ?></td>
            <td><?php echo $event['nbrp']; ?></td>
            <td align="center">
                <form method="POST" action="update.php">
                    <input type="submit" name="update" value="Update">
                    <input type="hidden" value=<?PHP echo $event['ide']; ?> name="ide">
                </form>
            </td>
            <td>
                <a href="deleteE.php?ide=<?php echo $event['ide']; ?>">Delete</a>
            </td>
            
        </tr>
    <?php
    }
    ?>
</table>