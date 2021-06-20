
<?php
use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
  <meta charset="<?= Yii::$app->charset ?>">
  <title>Plato - Clean responsive bootstrap website template</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Clean responsive bootstrap website template">
  <meta name="author" content="">
  <link rel="shortcut icon" href="assets/ico/favicon.ico">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

 <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <?php $this->head() ?>
</head>

<body>
<?php $this->beginBody() ?>
  <header>
         <?= $this -> render('//layouts/inc/topmenu') ?>
  </header>
   <?= $content  ?>
  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="span3">
          <div class="widget">
            <div class="footerlogo">
              <h6><a href="index.html">Plato</a></h6> 
            </div>
            <address>
				<strong>Plato business company, Inc.</strong><br>
				 4455 Great building Ave, Suite A10<br>
				 San Francisco, CA 94107<br>
				<abbr title="Phone">P:</abbr> (123) 456-7890 </address>
          </div>
        </div>
        <div class="span3">
          <div class="widget">
            <h5>Browse pages</h5>
            <ul class="list list-ok">
              <li><a href="#">Lorem ipsum dolor sit amet</a></li>
              <li><a href="#">Tamquam ponderum at eum, nibh dicta offendit mei</a></li>
              <li><a href="#">Vix no vidisse dolores intellegam</a></li>
              <li><a href="#">Est virtute feugiat accommodare eu</a></li>
            </ul>
          </div>
        </div>
        <div class="span3">
          <div class="widget">
            <h5>Flickr photostream</h5>
            <div class="flickr_badge">
              <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=8&amp;display=random&amp;size=s&amp;layout=x&amp;source=user&amp;user=34178660@N03"></script>
            </div>
            <div class="clear"></div>
          </div>
        </div>
        <div class="span3">
          <div class="widget">
            <h5>Keep updated</h5>
            <p>
              Enter your email to subcribe newsletter
            </p>
            <form>
              <div class="input-append">
                <input class="span2" id="appendedInputButton" type="text">
                <button class="btn btn-color" type="submit">Subscribe</button>
              </div>
            </form>
            <ul class="social-network">
              <li><a href="#"><i class="icon-bg-light icon-facebook icon-circled icon-1x"></i></a></li>
              <li><a href="#" title="Twitter"><i class="icon-bg-light icon-twitter icon-circled icon-1x"></i></a></li>
              <li><a href="#" title="Linkedin"><i class="icon-bg-light icon-linkedin icon-circled icon-1x"></i></a></li>
              <li><a href="#" title="Pinterest"><i class="icon-bg-light icon-pinterest icon-circled icon-1x"></i></a></li>
              <li><a href="#" title="Google plus"><i class="icon-bg-light icon-google-plus icon-circled icon-1x"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="subfooter">
      <div class="container">
        <div class="row">
          <div class="span6">
            <p>
              &copy; mastermall- All right reserved
            </p>
          </div>
          <div class="span6">
            <div class="pull-right">
              <div class="credits">            
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer> 
  <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>
