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
WHERE  `ID` < 5   ");//從member中選取全部(*)的資料

?>
<!DOCTYPE html>
<html lang="zh-Hant-TW">

<head>
   
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="keywords" content="揚生青年,youngsun">
    <meta name="author" content="KevinHu">

    <meta property="og:url" content="http://youngsun.lionfree.net/">
    <meta property="og:title" content="揚生青年">
    <meta property="og:description" content="加入揚生青年，讓你具備「硬實力」、「軟實力」與「執行力」，培養人脈與國際視野，使你發揮你所不知道的潛力，成為能影響社會的新創人才! ">
    <meta property="og:site_name" content="揚生青年">
    <!-- <meta property="og:image" content=""> -->
    <!-- <meta property="fb:app_id" content="591899370939286"> -->
    <meta property="og:type" content="website">
    <meta property="og:locale" content="zh_TW">

    <title>揚生青年|一群跟你一樣在乎未來的人</title>
    <meta name="description" content="加入揚生青年，讓你具備「硬實力」、「軟實力」與「執行力」，培養人脈與國際視野，使你發揮你所不知道的潛力，成為能影響社會的新創人才! ">

    
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <link rel="canonical" href="http://youngsun.lionfree.net/" >
    <link rel="stylesheet" href="css/main.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

   
</head>

<body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/zh_TW/sdk.js#xfbml=1&version=v2.4";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

    <?php require_once './header.php';?>
    
    
    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- <img class="img-responsive center-block" src="https://goo.gl/gbHQ3r"> -->
                <div class="fill" style="background-image:url('https://goo.gl/gbHQ3r');"></div>
                <div class="carousel-caption">
                    <h2>自主學習總決賽</h2>
                </div>
            </div>
            <div class="item">
               <!--  <img class="img-responsive center-block" src="https://goo.gl/dF9hQf"> -->
                <div class="fill" style="background-image:url('https://goo.gl/dF9hQf');"></div>
                <div class="carousel-caption">
                    <h2>幹部訓練</h2>
                </div>
            </div>
            <div class="item">
                <!--  <img class="img-responsive center-block" src="https://goo.gl/jZ7Anc"> -->
                <div class="fill" style="background-image:url('https://goo.gl/jZ7Anc');"></div>
                <div class="carousel-caption">
                    <h2>期末成發</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <!--<div class="col-lg-12">
                <h1 class="page-header">
                    Welcome to Modern Business
                </h1>
            </div>-->
            <hr>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><strong>關於揚生</strong></h4>
                    </div>
                    <div class="panel-body">
                        <p>揚生青年是一群跟你一樣在乎未來的人。大學四年一晃眼就過，把握時間充實自己以面對未來瞬息萬變的社會，對於停滯不前就應該勇於改變。從認識自己找到信念、訂定目標、人際溝通到團隊合作，讓你具備「硬實力」、「軟實力」與「執行力」，幫助你培養好的習慣，讓你更容易實現目標，培養人脈與國際視野，使你發揮你所不知道的潛力，成為能影響社會的新創人才!
                        「透過結合學習小組、科技方法與教練架構，營造人性、科技與社群，三位一體的架構。在專業團隊的支持下，對未來世代的青年發展工作，提供改變、創新的行動方案。」</p>
                        <!-- <a href="#" class="btn btn-default">Learn More</a> -->
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><strong>最新消息</strong></h4>
                    </div>
                    <div class="panel-body">
                        <p><big>2015招生中</big><br>
                            時間:10/7(三)<br>
                            18:40進場<br>
                            19:00開始<br>
                            地點:聖言樓SF132教室<br>
                            <br>
                            <big>~費用一律全免，歡迎參加~</big>
                        </p>
                        <a class="btn btn-primary"href="http://goo.gl/forms/0Uf7oW9eUD" target="_blank" class="b
                        tn btn-default">立即報名<i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><strong>行事曆</strong></h4>
                    </div>
                    <div class="panel-body">
                        <!-- Responsive iFrame -->
                        <div class="responsive-iframe-container">
                            <iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;height=300&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=cuteyoungsun%40gmail.com&amp;color=%238C500B&amp;ctz=Asia%2FTaipei" style=" border-width:0 " width="328" height="300" frameborder="0" scrolling="no">
                            
                            </iframe>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">揚生活動</h2>
            </div>
            <?php
            for($i=1;$i<=mysql_num_rows($data);$i++)
            { $rs=mysql_fetch_row($data);
    
        ?>
            <div class="col-md-4 col-sm-6">
                <a href="blog-post-<?php echo $rs[0]?>.php">
                    <img class="img-responsive img-portfolio img-hover" src="img/Blog/<?php echo $rs[0]?>.jpg" alt="">
                </a>
            </div>
            
            <?php }?>
        </div>
        <!-- /.row -->


        <hr>
         

        <!-- Call to Action Section -->
            <div class="row">
                <div class="col-md-6">
                    <div class="fb-page" data-href="https://www.facebook.com/fjuyoungsun" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/fjuyoungsun"><a href="https://www.facebook.com/fjuyoungsun">揚生青年</a></blockquote></div></div>
                </div>
                <div class="col-md-6">
                    <div class="panel-body">
                    <div class="responsive-iframe-container">
                        <iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;height=300&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=cuteyoungsun%40gmail.com&amp;color=%238C500B&amp;ctz=Asia%2FTaipei" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    </div>
                </div>
            </div>
      


                <hr>
        <?php require_once './footer.php';?>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
