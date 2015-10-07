<?php 

    $dbhost = 'localhost';
    $dbuser = 'kevin';
    $dbpass = 'a129749872';
    $dbname = 'kevin_youngsun';
    
mysql_connect($dbhost, $dbuser, $dbpass) or die("cannot connect"); //
mysql_select_db($dbname)or die("cannot select DB");//我要從member這個資料庫撈資料
mysql_query("set names utf8");//設定utf8 中文字才不會出現亂碼
$data=mysql_query("SELECT * 
FROM  `Blog` 
LIMIT 0 ,30");//從member中選取全部(*)的資料

?>
<!DOCTYPE html>
<html lang="zh-Hant-TW">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="KevinHu">

    <title>活動</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/main.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <?php require_once './header.php';?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">揚生活動
                    
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">首頁</a>
                    </li>
                    <li class="active">活動</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
        
        <!-- Blog Post Row -->
         <?php
            for($i=1;$i<=mysql_num_rows($data);$i++)
            { $rs=mysql_fetch_row($data);
            ?>
        <div class="row">
            <div class="col-md-1 text-center">
                <p><i class="fa fa-camera fa-4x"></i>
                    <!-- <i class="fa fa-file-text fa-4x"></i>
                    <i class="fa fa-film fa-4x"></i> -->
                </p>
                <p><?php echo $rs[1]?></p>
            </div>
            <div class="col-md-5">
                <a href="blog-post-<?php echo $rs[0]?>.php">
                    <img class="img-responsive img-hover" src="img/Blog/<?php echo $rs[0]?>.jpg" alt="">
                </a>
            </div>
            <div class="col-md-6">
                <h3>
                    <a href="blog-post-<?php echo $rs[0]?>.php"><?php echo $rs[2]?></a>
                </h3>
                <p>by <?php echo $rs[3]?>
                <!-- 作者 -->
                </p>
                <p style="overflow : hidden;
                         text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 2;
                         -webkit-box-orient: vertical;">
                <!-- 內文 -->
                <?php echo $rs[4]?>
                </p>
                <a class="btn btn-primary" href="blog-post-<?php echo $rs[0]?>.php">Read More <i class="fa fa-angle-right"></i></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>
        <?php 
            }
         ?>

        

        <!-- Pager -->
       <!--  <div class="row">
            <ul class="pager">
                <li class="previous"><a href="#">&larr; Older</a>
                </li>
                <li class="next"><a href="#">Newer &rarr;</a>
                </li>
            </ul>
        </div> -->
        <!-- /.row -->

        

        <!-- Footer -->
         <?php require_once './footer.php';?>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
