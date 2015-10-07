<?php 

    $dbhost = 'localhost';
    $dbuser = '';
    $dbpass = '';
    $dbname = '';
mysql_connect($dbhost, $dbuser, $dbpass) or die("cannot connect"); //
mysql_select_db($dbname)or die("cannot select DB");//我要從member這個資料庫撈資料
mysql_query("set names utf8");//設定utf8 中文字才不會出現亂碼
$data=mysql_query("SELECT * 
FROM  `Team2014` 
LIMIT 0 ,30");//從member中選取全部(*)的資料

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>2014幹部介紹</title>

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
    
     <?php require_once './header.php';?>
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    2014幹部介紹
                </h1>
               <!--  <ol class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">About</li>
                </ol> -->
            </div>
        </div>
        <!-- /.row -->

        <!-- Intro Content -->
        <div class="row">
            <div class="col-md-6">
                <!-- <img class="img-responsive" src="http://placehold.it/750x450" alt=""> -->
                <img class="img-responsive" src="img/team1.jpg" alt="">
            </div>
            <div class="col-md-6">
                <h2 class="page-header">關於揚生青年</h2>
                <h4 style="line-height: 1.5;">揚生青年是一群跟你一樣在乎未來的人。大學四年一晃眼就過，
                    把握時間充實自己以面對未來瞬息萬變的社會，對於停滯不前就應該勇於改變。
                    從認識自己找到信念、訂定目標、人際溝通到團隊合作，讓你具備「硬實力」、
                    「軟實力」與「執行力」，幫助你培養好的習慣，讓你更容易實現目標，
                    培養人脈與國際視野，使你發揮你所不知道的潛力，成為能影響社會的新創人才!
                     「透過結合學習小組、科技方法與教練架構，營造人性、科技與社群，三位一體的架構。
                     在專業團隊的支持下，對未來世代的青年發展工作，提供改變、創新的行動方案。」
                </h4>     
            </div>
        </div>
        <!-- /.row -->

        <!-- Team Members -->
        <div class="row">

            <div class="col-lg-12">
                <h2 class="page-header">幹部</h2>
            </div>

            <?php
			for($i=1;$i<=mysql_num_rows($data);$i++)
			{ $rs=mysql_fetch_row($data);
			?>
            <div class="col-md-4 text-center">
                <div class="thumbnail">
                    <img class="img-responsive" src="img/team2014/<?php echo $rs[0]?>.jpg" alt="">
                    <div class="caption">
                        <h3><?php echo $rs[1]?><br>
                            <small><?php echo $rs[2]?></small>
                        </h3>
                        <ul class="list-inline">
                            <li><a href="https://www.facebook.com/<?php echo $rs[4]?>"><i class="fa fa-2x fa-facebook-square"></i></a>
                            </li>
                           <!--  <li><a href="#"><i class="fa fa-2x fa-linkedin-square"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-2x fa-twitter-square"></i></a>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </div>
			<?php }?> 

        </div>
        <!-- /.row -->
        


        <!-- Our Customers -->
        <div class="row">

            <div class="col-lg-12">
                <h2 class="page-header">小組輔</h2>
            </div>
            <?php
                for($j=1;$j<=11;$j++)
                { 
            ?>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <img class="img-responsive customer-img" src="img/team2014/<?php echo $j?>.jpg" alt="">
            </div>
            <?php 
                }
             ?>

        </div>
        <!-- /.row -->

        <hr>

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
