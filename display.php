<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $conn = mysqli_connect("localhost", "root","", "a_shop");
        $sql = "SELECT * FROM users";
        $run = mysqli_query($conn, $sql);
        if(mysqli_num_rows($run)>0){
    ?>
    <table border="1" cellpadding="20px" cellspacing="0">
        <thead>
            <tr>
                <th>User Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>PhoneNo</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            while($data = mysqli_fetch_assoc($run)){
            ?>
            <tr>
               
                <td><?php echo $data['Username'];?></td>
                <td><?php echo $data['email'];?></td>
                <td><?php echo $data['Address'];?></td>
                <td><?php echo $data['PhoneNO'];?></td>
                <td>
                    <a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a>
                    <a href="delete.php>?id=<?php echo $data['id']; ?>">Delete</a>
                </td>
            </tr>
            <?php }?>
        </tbody>
    </table>

    <?php }?>
 
    <br><br><br>
    <a href="form.php"><button>Add New User</button></a>
</body>
</html>