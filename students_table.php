<?php
//getting data from students.php
$header = array_keys($students[0]);
//function to color the cell when status is PHP
function color($index)
{
    global $students;
    global $header;
    if ($students[$index]['status'] == 'PHP') {
        echo "<td style='color:red' >PHP</td>";
    } else {
        echo "<td>" . $students[$index]['status'] . "</td>";
    }
}
?>
<!-- table design -->
<table class="table table-striped table-bordered text-center">
    <thead>
        <tr>
            <th scope="col"><?php echo ucfirst($header[0]); ?></th>
            <th scope="col"><?php echo ucfirst($header[1]); ?></th>
            <th scope="col"><?php echo ucfirst($header[2]); ?></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo $students[0]['name']; ?></td>
            <td><?php echo $students[0]['email']; ?></td>
            <?php color(0) ?>
        </tr>
        <tr>
            <td><?php echo $students[1]['name']; ?></td>
            <td><?php echo $students[1]['email']; ?></td>
            <?php color(1) ?>
        </tr>
        <tr>
            <td><?php echo $students[2]['name']; ?></td>
            <td><?php echo $students[2]['email']; ?></td>
            <?php color(2) ?>
        </tr>
        <tr>
            <td><?php echo $students[3]['name']; ?></td>
            <td><?php echo $students[3]['email']; ?></td>
            <?php color(3) ?>
        </tr>
        <tr>
            <td><?php echo $students[4]['name']; ?></td>
            <td><?php echo $students[4]['email']; ?></td>
            <?php color(4) ?>
        </tr>

    </tbody>
</table>