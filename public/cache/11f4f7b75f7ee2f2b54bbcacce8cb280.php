<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>雪行风上 | 添加相册</title>
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
              <span id="login-area"><?=$username; ?></span>
              
              <ul class="nav nav-tabs" id="user-nav">
                <li role="presentation"><a href="index.php?m=addatc" class="active">添加文章</a></li>
                <li role="presentation"><a href="index.php?m=addphoto">添加相册</a></li>
                <li role="presentation"><a href="index.php?m=index&a=logout">退出登录</a></li>
              </ul>
              <?php endif?>
              <ul class="nav nav-pills" id="nav-ul">
                <li role="presentation" class="active"><a href="index.php">主页</a></li>
                <li role="presentation"><a href="index.php?m=gallery">画廊</a></li>
                <li role="presentation"><a href="index.php?m=about">关于</a></li>
                <li role="presentation"><a href="index.php?m=signup">加入我们</a></li>
              </ul>
            </div>
            <div id="header-inner"></div>
          </div>
        </div>
      </div>
    </header>
    <!-- 内容部分 -->
    <div id="container">
      <div class="container">
        <div class="panel panel-default about-text atc-panel">
          <h3 class="title">选择要上传的图片,大小不得超过2M</h3>
          <form action="index.php?m=addphoto&a=upload" method="post" enctype="multipart/form-data">
            <input type="file" name="fm" style="margin: 80px auto;">
            <button class="btn btn-info" id="atc-btn">上传</button>
          </form>
        </div>
      </div>
    </div>
    <!-- 尾部 -->
    <footer">
      <div id="footer">
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
