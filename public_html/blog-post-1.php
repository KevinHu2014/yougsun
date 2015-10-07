<?php 

     $dbhost = 'localhost';
    $dbuser = '';
    $dbpass = '';
    $dbname = '';
    
mysql_connect($dbhost, $dbuser, $dbpass) or die("cannot connect"); //
mysql_select_db($dbname)or die("cannot select DB");//我要從member這個資料庫撈資料
mysql_query("set names utf8");//設定utf8 中文字才不會出現亂碼
$data=mysql_query("SELECT * 
FROM  `Blog` 
WHERE  `ID` =1");//從member中選取全部(*)的資料

?>
<!DOCTYPE html>
<html lang="zh-Hant-TW">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
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
    <?php $rs=mysql_fetch_row($data);?>
    <!-- Page Content -->
    <div class="container">
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <!-- 標題 -->
                    <?php echo $rs[2]?>
                    <!-- 作者 -->
                    <small>by <?php echo $rs[3]?>
                    </small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">首頁</a>
                    </li>
                    <li class="active"><?php echo $rs[2]?></li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
        <!-- Content Row -->
        <div class="row">
            <!-- Blog Post Content Column -->
            <div class="col-lg-8">
                <!-- Blog Post -->
                <hr>
                <!-- Date/Time -->
                <p><i class="fa fa-clock-o"></i> Posted on <?php echo $rs[1]?></p>
                <hr>
                <!-- Preview Image -->
                <img class="img-responsive" src="img/Blog/<?php echo $rs[0]?>.jpg" alt="">
                <hr>
                <!-- Post Content -->
                <p class="lead"><?php echo $rs[4]?></p>
                
                <hr>
                <!-- Blog Comments -->
                
                <div id="disqus_thread"></div>
                <script type="text/javascript">
                /* * * CONFIGURATION VARIABLES * * */
                var disqus_shortname = 'youngsun';

                /* * * DON'T EDIT BELOW THIS LINE * * */
                (function() {
                    var dsq = document.createElement('script');
                    dsq.type = 'text/javascript';
                    dsq.async = true;
                    dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                })();
                </script>
                <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
                <hr>
               
            </div>
         
        </div>
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
