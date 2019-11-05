<table><?php
require_once "mysqli.php";
$q = "SELECT * FROM volunteer";
$v = [];
$fire = $mysqli->query($q);
if($fire){
    while($data = $fire->fetch_assoc()){
        $v[] = $data;
        ?>
        
            <tr>
                <td><?php echo $data['id']; ?></td>
                <td><?php echo $data['name']; ?></td>
                <td><?php echo $data['roll']; ?></td>
                <td><?php echo $data['email']; ?></td>
                <td><?php echo $data['phone']; ?></td>
                <td><?php echo $data['department']; ?></td>
                <td><?php echo $data['work_as']; ?></td>
            </tr>
            
        <?php
    }
}
?></table>
<style>
tr:hover{
    /*border:1px solid black;*/
    background:black;
    color:white;
}
    td{
        margin:6px;
        padding:5px;
        border:1px dashed black;
    }
</style>