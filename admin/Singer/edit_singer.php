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
                                <a class="dropdown-item" href="edit_singer.php">Edit Author</a>
                                <a class="dropdown-item" href="view_singer.php">Author Management</a>
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
                                <a class="dropdown-item" href="../User/edit_user.php">Edit Users</a>
                                <a class="dropdown-item" href="../User/view_user.php">Users Management</a>
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
            <form class="row" method="post">
                <h2>Edit Author</h2>
                <table class="table">
                 <?php 
                        include("../../connect.php");
                    $SingerID='-1';
                    $SingerName='';
                    if (isset($_GET["SingerID"])) {   
                        $SingerID = intval($_GET['SingerID']);
                        $sql = " select* from singer where SingerID = $SingerID";
                        $result = mysqli_query($connect, $sql);
                        while($singer =  mysqli_fetch_array($result)){
                            $SingerID =$singer['SingerID'];
                            $SingerName =$singer['SingerName'];
                        }
                    }
                    echo "
                        <tr>
                            <td>ID</td>
                            <td colspan='2'><input type='text' name='SingerID' value='$SingerID'></td>
                        </tr>
                        <tr>
                            <td>Name of the author</td>
                            <td colspan='2'><input type='text' name='SingerName' value='$SingerName'></td>
                        </tr>
                    ";
                  ?>

        
        <tr>
        <td><input type="submit" class="btn btn-outline-success" name="add" value="Add Singer"></td>
        <td><input type="submit" class="btn btn-outline-success" name="edit" value="Edit Singer"></td>
        <td><input type="submit" class="btn btn-outline-warning" name="delete" value="Delete Singer"></td>
        </tr>
            </table>
            </form>
        
    <?php
 
    if (isset($_POST['add'])) {
        $SingerID=$_POST['SingerID'];
        $SingerName=$_POST['SingerName'];
        $sql="insert into singer values ('$SingerID','$SingerName')";
        $result = mysqli_query($connect,$sql);
        if ($result){
            echo "<script>alert('Singer has been added successfull!')</script>";
            echo "<script>window.open('view_singer.php','_self')</script>";
        }
    else{
        echo"<script>alert('Error')</script>";
    }
    }
    
    
    
    
    if(isset($_POST['edit'])){
                $SingerID=$_POST['SingerID'];
                $SingerName=$_POST['SingerName'];
                $check_exist = mysqli_query($connect,"select * from singer");
                $singer = mysqli_fetch_array($check_exist);

                $sql="update singer set SingerName='$SingerName' where SingerID=$SingerID";
                $result = mysqli_query($connect, $sql);
                if ($result) {
                    echo "<script>alert('Singer has been edited successfull!')</script>";
                    echo "<script>window.open('view_singer.php','_self')</script>";
                }
                else {
                    echo "<script>alert('Error')</script>";
                }
            }
        
        
        
        if(isset($_POST['delete'])){
                $SingerID=$_POST['SingerID'];
                $sql="delete from singer where SingerID=$SingerID";
                $result = mysqli_query($connect, $sql);
                $check_exist = mysqli_query($connect,"select * from singer");
                $singer = mysqli_fetch_array($check_exist);
                if ($result) {
                    echo "<script>alert('Singer has been deleted successfull!')</script>";
                    echo "<script>window.open('view_singer.php','_self')</script>";
                }
                else {
                    echo "<script>alert('Error')</script>";

                }
            }


    ?>
        </div>
         
    </div>