<?php require 'con.php'; ?>
<?php

$id = $_GET['id'];

$sql = "SELECT * FROM blog WHERE id = '$id'";

$result = mysqli_query($con,$sql);

while ($row = mysqli_fetch_assoc($result)):
    ?>
    <h1>Are You Sure To Delete this Blog ?</h1>
    <form style="padding-left: 20px;" method="post"
          action="post/delete_post.php?id=<?php echo $id; ?>">
        title : <?php echo $row ['title']; ?>
        <br>
        <br>
        post : <?php echo $row ['post']; ?>
        <br>
        <input type="Submit" value="delete" name="delete">
        <a href="index.php">back to list</a>
    </form>

<?php endwhile;

mysqli_close($con);
?>