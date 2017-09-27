<?php require 'con.php'; ?>
<?php

$id = $_GET['id'];

$sql = "SELECT * FROM blog WHERE id = '$id'";

$result = mysqli_query($con,$sql);

while ($row = mysqli_fetch_assoc($result)):
?>
<form style="padding-left: 20px;" method="post"
      action="post/update_post.php?id=<?php echo $id; ?>">
    title : <input type="text" name="title" value="<?php echo $row ['title']; ?>">
    <br>
    <br>
    post : <textarea name="post" cols="50" rows="10"><?php echo $row ['post']; ?></textarea>
    <br>
    <input type="Submit" value="update" name="update">
</form>

<?php endwhile;

mysqli_close($con);
?>