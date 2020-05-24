<?php
    include_once("classes/Crud.php");
    $crud=new Crud();
    if(isset($_POST['insert']))
    {
       
     $name = $crud->escape_string($_POST['name']);
     $age = $crud->escape_string($_POST['age']);
     $email = $crud->escape_string($_POST['email']);

     $sql="INSERT INTO `users`(`id`,`name`,`age`,`email`)VALUES('','$name','$age','$email')";
    
    if($crud->execute($sql))
    {
        $_SESSION['success']="Inserted Successfully";
    }
    else
    {
         $_SESSION['error']="Error,Try again..!!!";
    }
  }
   if(isset($_POST['update']))
    {
       
     $name = $crud->escape_string($_POST['name']);
     $age = $crud->escape_string($_POST['age']);
     $email = $crud->escape_string($_POST['email']);
     $id = $crud->escape_string($_POST['id']);

     $sql="UPDATE `users` SET `name`='$name',`age`='$age',`email`='$email' WHERE `id`='$id'";
    
     if($crud->execute($sql))
    {
        $_SESSION['success']="Updated Successfully";
    }
    else
    {
         $_SESSION['error']="Error,Try again..!!!";
    }
  }
 if(isset($_GET['id']))
    {
        $id=$_GET['id'];
        $sql="DELETE FROM `users` where id='$id'";
        $result=$crud->execute($sql);
        if($result)
        {
            $_SESSION['success']="Deleted Successfully";
        }
        else
        {
            $_SESSION['error']="Error,Try again..!!!";
        }
    }
    header("location:index.php");
?>
    