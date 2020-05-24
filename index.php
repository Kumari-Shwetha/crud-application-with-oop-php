<?php
    include_once("classes/Crud.php");
    $crud=new Crud();

    $sql="Select * from `users`";
    $row=$crud->getData($sql);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>home</title>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="js/jquery.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
         <div class="jumbotron text-center">
            <h2>Welcome to our home page</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <?php
                        if(isset($_SESSION['success']) && $_SESSION['success'] != '')
                        {
                            echo "<div class='alert alert-success'>".$_SESSION['success']."</div>";
                            unset($_SESSION['success']);
                        }
                        else if(isset($_SESSION['error']) && $_SESSION['error'] != '')
                        {
                            echo "<div class='alert alert-danger'>".$_SESSION['error']."</div>";
                            unset($_SESSION['error']);
                        }
                    ?>
                    <a href="add.php" class="btn btn-info">Add new data</a><br/><br/>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            foreach($row as $key=>$value)
                            {

                        ?>
                            <tr>

                                <td><?php echo $key+1; ?></td>
                                <td><?php echo $value['name']; ?></td>
                                <td><?php echo $value['age']; ?></td>
                                <td><?php echo $value['email']; ?></td>
                                <td><a href="edit.php?id=<?php echo $value['id']; ?>" class="btn btn-sm btn-success">Edit</a> | <a href="action.php?id=<?php echo $value['id']; ?>"  onClick="return confirm('Are you sure want to delete')" class="btn btn-sm btn-danger">delete</a></td>
    </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>   
        </div>

        <script>
            $(function(){
                $("#dob").datepicker();
            });
        </script>

    </body>
    
</html>