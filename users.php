<?php
ob_start();
require_once "config.php";
session_start();
ob_end_flush();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>SRET BANK</title>
       
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

   <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

   
    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js"></script>

    <link rel = "stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.min.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
    
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../basic banking system/style.css">
    <link href="../basic banking system/assets/css/style.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
     <style>
        body{
            backdrop-filter: blur(7px);
        }
        body{
    margin: 0;
    padding: 0;
}
.navbar-brand{
    font-family: 'Sansita Swashed', cursive;
    font-size: 1.5rem;
    color: #5f73055!important;
}

.nav-link{
    color: #5f73055!important;
    font-family: 'Noto Sans JP', sans-serif;
}

.nav-link:hover{
    background-color: ;
}
.row> p{
    color: honeydew;
    padding-left: 19vw;
    position: absolute;
    top: 0;bottom: 0;right: 0;left: 0;
    padding-top: 52vh;
    font-family: 'Cookie';
    font-size: 2.5vw;
}
.bg-light{
    background-color: #f432f4!important;
}
    
    </style>
</head>

<body style="background-image:url(images/12.jpg)">
<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <span>SRET BANK</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link" href="./index.php">Home</a></li>
          <li><a class="nav-link" href="./users.php">Users</a></li>
          <li><a class="nav-link" href="../basic banking system/history.php">Transaction</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

    </div>
  </header>
       

        <div class="row row-content">
                <div class="col-12 offset-sm-1 col-sm-10">
                    <h2 style="padding-top: 120px ;text-align: center; padding-bottom: 5px; color: black;"><b>ACCOUNTS</b></h2>
                    <div class="table-responsive tb">
                        <table class="table table-striped">
                            <thead class="thead">
                            <tr>
                            <th>ID</th>
                            <th>USER</th>
                            <th>EMAIL</th>
                            <th>BALANCE</th>
                            <th>ACTION</th>
                            </tr>
                            </thead>
                            <tbody> 
                            <tr>
                            <?php 
                            $stmt = $pdo->query("SELECT * FROM users");
                            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
                            if(count($rows)>0){
                                foreach($rows as $row ) { ?>
                                <td><?php echo htmlentities($row['user_id']); ?> </td>
                                <td style="text-tranform: uppercase; text-decoration: none;"><?php echo('<a href="profile.php?user_id='.$row['user_id'].'">'.htmlentities($row['user_name']).'</a> ');
                                                ?>  </td>
                                <td><?php echo htmlentities($row['email']); ?> </td>
                                <td><?php echo htmlentities($row['user_credits']); ?> </td>
                                <td>
                                    <button>
                                        <?php  echo('<a href="profile.php?user_id='.$row['user_id'].'">'."View".'</a> ');?>
                                    <button>
                                </td>
                                </tr>
                                <?php }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
        </div> 
</div>                  


 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>   
</body>
</html>


