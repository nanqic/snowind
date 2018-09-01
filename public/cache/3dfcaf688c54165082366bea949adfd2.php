<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>雪行风上 | 画廊</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="//at.alicdn.com/t/font_799773_4q5k5xrkrm8.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="icon" href="images/favicon.ico">
  </head>
  <body>
  <div id="wrap">
    <!-- 头部 -->
    <header id="header">
      <div id="header-outer">
        <div class="container">
          <div class="container-inner">
            <div id="header-title">
             <h1 class="logo-wrap">
               <a href="index.php" class="sw-logo"></a>
             </h1> 
             <h2 class="subtitle-wrap" style="display: inline-block;">
               <p class="subtitle">社区型博客</p>
             </h2>
            </div>
            <div class="nav-container-inner">
              <?php if ($_SESSION['isLogin']): ?>
              <span id="login-area">嗨, <?=$user; ?></span>
              <ul class="nav nav-tabs" id="user-nav">
                <li role="presentation"><a href="index.php?m=addatc">添加文章</a></li>
                <li role="presentation"><a href="index.php?m=addphoto">添加相册</a></li>
                <li role="presentation"><a href="index.php?m=index&a=logout">退出登录</a></li>
              </ul>
              <?php endif?>
              <ul class="nav nav-pills" id="nav-ul">
                <li role="presentation"><a href="index.php">主页</a></li>
                <li role="presentation" class="active"><a href="index.php?m=gallery">画廊</a></li>
                <li role="presentation"><a href="index.php?m=about">关于</a></li>
                <li role="presentation"><a href="index.php?m=signin">加入我们</a></li>
              </ul>
            </div>
            <div id="header-inner"></div>
          </div>
        </div>
      </div>
    </header>
    <!-- 内容部分 -->
    <div id="container">
      <div id="main" class="photo">
        <div class="container-fluid gallery">
          
          <div align="center" id="myCarousel" class="carousel slide">
              <!-- 轮播（Carousel）指标 -->
              <ul class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                  <li data-target="#myCarousel" data-slide-to="3"></li>
              </ul>   
              <!-- 轮播（Carousel）项目 -->
              <div class="carousel-inner">
                  <div class="item active">
                      <img src="images/15.jpg" alt="">
                  </div>
                  <div class="item">
                      <img src="images/23.jpeg" alt="">
                  </div>
                  <div class="item">
                      <img src="images/12.jpg" alt="">
                  </div>
                  <div class="item">
                      <img src="images/11.jpg" alt="">
                  </div>
              </div>
              <!-- 轮播（Carousel）导航 -->
              <a class="carousel-control left" href="#myCarousel" 
                  data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
              </a>
              <a class="carousel-control right" href="#myCarousel" 
                  data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
              </a>
          </div>
          <div class="photo-list">
            <ul>
              <?php for ($i = 0; $i < $imgCount; $i++):?>
              <li><img src="../<?=$imagepath[$i]; ?>" alt="..."></li>
              <?php endfor?>
            </ul>
          </div>
        </div>
      </div>
      <div id="asidepart">
        <div class="container-fluid item-right">
          <ul class="list-group" id="sort-ul">
          <li class="list-group-item" id="sort-title"><h4 class="title">分类</h4></li>
          <li class="list-group-item"><a href="">随笔</a></li>
          <li class="list-group-item"><a href="">音乐</a></li>
          <li class="list-group-item"><a href="">摄影</a></li>
          <li class="list-group-item"><a href="">留言</a></li>
        </ul>
        </div>
        <div class="container-fluid">
          <div class="hero-unit">
            <h4 id="hero-title" class="title">标签</h4>
            <div class="hero-wrap">
            <span class="label label-default"><a href="">标签</a></span>
            </div>
          </div>
        </div>
        <div class="container-fluid">
          <div class="friend-link">
            <h4 id="link-title" class="title">友情链接</h4>
            <p class="link-wrap">
              <a href="https://www.github.com" target="_blank">github</a><br><br>
              <a href="https://www.jianshu.com" target="_blank">简书</a><br><br>
              <a href="http://www.runoob.com" target="_blank">菜鸟学院</a>
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- 尾部 -->
    <footer">
      <div id="footer">
        <div id="totop"><a href="" class="btn btn-default"><i class="glyphicon glyphicon-chevron-up"></i></a></div>
        <div class="line-wrap">
          <span></span>
          <div class="author"></div>
        </div>
        <section class="auth-info">
          <p>Hello ,I'm Larry Page in Google. <br>
            This is my blog,believe it or not.
          </p>
        </section>
        <div class="social">
          <a href="https://github.com/nanqic" class="iconfont icon-github" target="_blank"></a>
          <a href="https://zhihu.com" class="iconfont icon-zhihu" target="_blank"></a>
          <a href="mailto:nanqic@163.com" class="iconfont icon-youxiang" target="_blank"></a>
          <a href="" class="iconfont icon-facebook"></a>
          <a href="" class="iconfont icon-tuitetwitter43"></a>
          <a href="" class="iconfont icon-CN_bilibiliB"></a>
          <a href="" class="iconfont icon-shejiaoweibo"></a>
          <a href="" class="iconfont icon-shejiaoweixin"></a>
          <a href="" class="iconfont icon-shejiaoqq"></a>
        </div>
      </div>
      <p class="copyright">Powered by bootstrap and Author by Nanqic © 2018 Copyright</p>
    </footer>
  </div>
    <!-- jQuery (Bootstrap 的所有 JavaScript 插件都依赖 jQuery，所以必须放在前边) -->
    <script src="js/jquery.js"></script>
    <!-- 加载 Bootstrap 的所有 JavaScript 插件。你也可以根据需要只加载单个插件。 -->
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>
