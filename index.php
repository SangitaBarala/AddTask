<!DOCUMENT html>
<head>
    <title>Registration Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body style="background-color: aqua;">
<div class="container">
    <br>
    <?php
         if(isset($_GET['taskAdded'])){
    ?>
        <div class="alert alert-success">
            <strong>Success! </strong><?php echo $_GET['msg']?>;
        </div>
    <?php
    }
    ?>
    <h2>Add task...</h2>
    <form action="lib/task.php" method="post">

        <div class form-group>
            <label for="task">TASK:</label>
            <input type="text" class="form-control" placeholder="what you wanna add.." name="task">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>