<?php require 'con.php'; ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
</head>
<body>
<form style="padding-left: 20px;" method="post" action="post/add_post.php">
    title : <input type="text" name="title">
    <br>
    <br>
    post : <textarea name="post" cols="50" rows="10"></textarea>
    <br>
    <input type="Submit" name="add">
</form>

<table border="1" width="80%">
    <tr>
        <th>title</th>
        <th>post</th>
        <th>Action</th>
    </tr>
    <?php
    //$con = mysqli_connect('localhost', 'root', 'root', 'FSDB');
    $sql = 'SELECT * FROM blog';

    $result = mysqli_query($con, $sql);

    while ($row = mysqli_fetch_assoc($result)):
        ?>
        <tr>
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['post']; ?></td>
            <td>
                <a href="delete.php?id=<?php echo $row['id']; ?>">delete</a>

                <a href="update.php?id=<?php echo $row['id']; ?>"">update</a>
            </td>
        </tr>
    <?php endwhile;
    mysqli_close($con);
    ?>

</table>

</body>
</html>