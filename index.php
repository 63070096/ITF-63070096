<!DOCTYPE html>
<html>
    <head>
	    <title>Comment Form</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>
    <?php require_once "insert.php"; ?>
    <div class="container">
    <?php
    $conn = mysqli_init();
    mysqli_real_connect($conn, 'itf-63070096.mysql.database.azure.com', 'it63070096@itf-63070096', 'DTSquj72', 'itflab', 3306);
    if (mysqli_connect_errno($conn))
    {
        die('Failed to connect to MySQL: '.mysqli_connect_error());
    }
    $res = mysqli_query($conn, 'SELECT * FROM guestbook');
    ?>
    <table width="600" border="1">
    <table class="table table-dark table-striped">
      <tr>
        <th width="100"> <div align="center">Name</div></th>
        <th width="350"> <div align="center">Comment </div></th>
        <th width="150"> <div align="center">Link </div></th>
      </tr>
    <?php
    while($Result = mysqli_fetch_array($res))
    {
    ?>
      <tr>
        <td><?php echo $Result['Name'];?></div></td>
        <td><?php echo $Result['Comment'];?></td>
        <td><?php echo $Result['Link'];?></td>
        <td>
            <a herf="index.php?edit=<?php echo $row['id']; ?>"
               class="btn btn-info">Edit<</a>
            <a herf="insert.php?delete=<?php echo $row['id']; ?>"
               class="btn btn-danger">Delete</a>
        </td>
      </tr>
    <?php
    }
    ?>
    <?php endwhie; ?>
    </table>
    <?php
    mysqli_close($conn);
    ?>
        <div class="row justify-content-center">
        <form action = "insert.php" method = "post" id="CommentForm" >
            <div class="form-group"
            <label>Name:</label>
            <input type="text" name="name" class="form-control" value="Enter Your Name">
            </div>
            <div class="form-group">
            <label>Comment:</label>
            <input type="text" name="comment" class="form-control" value="Enter Your Comment">
            </div>
            <div class="form-group">
            <label>Link:</label>
            <input type="text" name="link" class="form-control" value="Enter Your Link">
            </div>
            <div class="form-group">
            <buttom type="submit" name="save">Save</buttom>
            </div>
        </form> 
        </div>
        </div>
    </body>
</html>
