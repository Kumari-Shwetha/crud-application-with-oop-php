<?php
    include_once("classes/Crud.php");
    $crud=new Crud();

    if(isset($_GET['id']))
    {
        $id=$_GET['id'];
        $sql="SELECT * FROM `users` where `id`='$id'";
        $row=$crud->getData($sql);

        foreach ($row as $res) {
            $name = $res['name'];
            $age = $res['age'];
            $email = $res['email'];
        }
    }


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
                    <a href="" class="btn btn-info">Home</a><br/><br/>
                    <form class="form-horizontal" method="POST" action="action.php" >
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="name">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name" id="name" value="<?php echo $name; ?>" placeholder="Enter your Name" autocomplete="off"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="age">Age</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="age" value="<?php echo $age; ?>" id="age" placeholder="Enter your Age" autocomplete="off"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="email">E-Mail</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" name="email" id="email" value="<?php echo $email; ?>" placeholder="Enter your E-Mail" />
                            </div>
                        </div>
                        <input type="hidden" name="id" value="<?php echo $id; ?>/>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-2">
                                <input type="submit" class="btn btn-info btn-block" value="Submit" name="update">
                            </div>
                            <div class="col-sm-2">
                                <button type="clear" class="btn btn-danger btn-block" name="clear">Clear</button>
                            </div>
                        </div> 
                    </form>
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