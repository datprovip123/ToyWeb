<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/33a12d68d3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../Demowebsite(1)/Vendors/css/grid.css">
    <link rel="stylesheet" type="text/css" href="/Vendors/css/style.css">
    <link rel="stylesheet" type="text/css" href="/Resources/bootstrap-5.0.0-beta3-dist/css/bootstrap.min.css">

    <style>
        *{
    margin: 0;
    padding: 0;
}

body{
    background-image: url(https://image4.uhdpaper.com/wallpaper/mountain-scenery-landscape-sunset-uhdpaper.com-4K-4.3289.jpg);
    background-repeat: no-repeat;
    background-size:cover;
}
/*xử lý menu*/
.dropdown{
    position: relative;
    display: inline-block;
}
.dropdown-content{
    display: none;
    position: absolute;
    z-index: 1;
    background-color: #f5f5f5;
}
.dropdown:hover .dropdown-content{
    display: block;
}
/*list product*/
.list-product-title{
    width: 100%;
    text-transform: uppercase;
    margin-left: 5px;
    margin-right: 5px;

}
.list-product-subtitle{
    width: 100%;
    margin-left: 5px;
    margin-right: 5px;
}

/*product card*/
.card-product{
    width: 100%;
    margin-left: 5px;
    margin-right: 5px;
    overflow: hidden;   
}
img.d-block {
  display: block;
  max-width:1920px;
  max-height:530px;
  width: auto;
  height: auto;
  
}
    </style>
    <title>Document</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">Marvel Store</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="../admin.php"> Home <span class="glyphicon glyphicon-home sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="navbarDropdown">
                                Toy
                            </a>
                            <div class="dropdown-content">
                                <a class="dropdown-item" href="../Song/edit_song.php">Edit Toy</a>
                                <a class="dropdown-item" href="../Song/view_song.php">Toy management</a>
                                <div class="dropdown-divider"></div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="navbarDropdown">
                                Author
                            </a>
                            <div class="dropdown-content">
                                <a class="dropdown-item" href="../Singer/edit_singer.php">Edit Author</a>
                                <a class="dropdown-item" href="../Singer/view_singer.php">Author Management</a>
                                <div class="dropdown-divider"></div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="navbarDropdown">
                                Genre
                            </a>
                            <div class="dropdown-content">
                                <a class="dropdown-item" href="../Genres/edit_genres.php">Edit Genres</a>
                                <a class="dropdown-item" href="../Genres/view_genres.php">Genre Management</a>
                                <div class="dropdown-divider"></div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="navbarDropdown">
                                Users 
                            </a>
                            <div class="dropdown-content">
                                <a class="dropdown-item" href="edit_user.php">Edit Users</a>
                                <a class="dropdown-item" href="view_user.php">Users Management</a>
                                <div class="dropdown-divider"></div>
                            </div>
                        </li>
                        <li class="nav-item dropdown" >
                            <a class="nav-link" href="../../dangxuat.php" id="navbarDropdown">
                                Log Out
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
          </nav>
    </header>



         <div class="example">
        <div class="container">
            <form class="row" method="post" enctype="multipart/form-data">
                <h2>Edit Users</h2>
                <table class="table">
                 <?php 
                    include("../../connect.php");
                    $UserID='-1';
                    $UserName='';
                    $Password='';
                    $PhoneNumber='';
                    $FullName='';
                    $Email='';
                                   
                    if (isset($_GET["UserID"])) {    
                        $UserID = intval($_GET['UserID']);
                        $sql = " select* from users where UserID = $UserID";
                        $result = mysqli_query($connect, $sql);
                        while($user =  mysqli_fetch_array($result)){
                            $UserID =$user['UserID'];
                            $UserName =$user['UserName'];
                            $Password =$user['Password'];
                            $PhoneNumber=$user['PhoneNumber'];
                            $FullName=$user['FullName'];
                            $Email=$user['Email'];                                                     
                        }
                    }
                    echo "
                        <tr>
                            <td>ID</td>
                            <td colspan='2'><input type='text' name='UserID' value='$UserID'></td>
                        </tr>
                        <tr>
                            <td>User Name</td>
                            <td colspan='2'><input type='text' name='UserName' value='$UserName'></td>
                        </tr>
                        <td>Password</td>
                            <td colspan='2'><input type='text' name='Password' value='$Password'></td>
                        </tr>
                        <tr>
                            <td>Phone Number</td>
                            <td colspan='2'><input type='text' name='PhoneNumber' value='$PhoneNumber'></td>
                        </tr>
                        <td>Full Name</td>
                            <td colspan='2'><input type='text' name='FullName' value='$FullName'></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td colspan='2'><input type='text' name='Email' value='$Email'></td>
                    ";
                ?>
        
        
        <tr>
        <td><input type="submit" class="btn btn-outline-success" name="add" value="Add User"></td>
        <td><input type="submit" class="btn btn-outline-success" name="edit" value="Edit User"></td>
        <td><input type="submit" class="btn btn-outline-warning" name="delete" value="Delete User"></td>
        </tr>
            </table>
    </form>
    <?php
    include("../../connect.php");
    if (isset($_POST['add'])) {
        $UserID =$_POST['UserID'];
        $UserName =$_POST['UserName'];
        $Password =$_POST['Password'];
        $PhoneNumber=$_POST['PhoneNumber'];
        $FullName=$_POST['FullName'];
        $Email=$_POST['Email'];
        $sql="insert into users values ('$UserID','$UserName','$Password','$PhoneNumber','$FullName','$Email')";
        $result = mysqli_query($connect,$sql);
        if ($result){
            echo "<script>alert('User has been added successfull!')</script>";
            echo "<script>window.open('view_user.php','_self')</script>";
        }
    else{
        echo"<script>alert('Loi roi ne hihi')</script>";
    }
    }
    
    
    
    
    if(isset($_POST['edit'])){
                $UserID =$_POST['UserID'];
                $UserName =$_POST['UserName'];
                $Password =$_POST['Password'];
                $PhoneNumber=$_POST['PhoneNumber'];
                $FullName=$_POST['FullName'];
                $Email=$_POST['Email'];
                $check_exist = mysqli_query($connect,"select * from users");
                $row_cat = mysqli_fetch_array($check_exist);
                $sql="update users set UserName='$UserName' where UserID=$UserID";
                $result = mysqli_query($connect, $sql);
                if ($result) {
                    echo "<script>alert('User has been edited successfull!')</script>";
                    echo "<script>window.open('view_user.php','_self')</script>";
                }
                else {
                    echo "<script>alert('Error')</script>";
                }
            }
        
        
        
        if(isset($_POST['delete'])){
                $UserID = $_POST['UserID'];
                $sql="delete from users where UserID=$UserID";
                $result = mysqli_query($connect, $sql);
                $check_exist = mysqli_query($connect,"select * from users");
                $row_cat = mysqli_fetch_array($check_exist);
                if ($result) {
                    echo "<script>alert('User has been deleted successfull!')</script>";
                    echo "<script>window.open('view_user.php','_self')</script>";
                }
                else {
                    echo "<script>alert('Error')</script>";

                }
            }


    ?>