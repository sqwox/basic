 <!-- Navbar
    ================================================== -->
    <div class="cbp-af-header">
      <div class=" cbp-af-inner">
        <div class="container">
          <div class="row">

            <div class="span4">
              <!-- logo -->
              <div class="logo">
                <h1><a href="index.html">Plato</a></h1>
                <!-- <img src="assets/img/logo.png" alt="" /> -->
              </div>
              <!-- end logo -->
            </div>

            <div class="span8">
              <!-- top menu -->
              <div class="navbar">
                <div class="navbar-inner">
                  <nav>
                  <?= \app\components\TopMenuWidget::widget([
                    'tpl' => 'select',
                    'ul_class' => 'nav topnav'
                  ])?>
                  <!--
                    <ul class="nav topnav">
                      <li class="dropdown active">
                        <a href="index.html">Главная</a>
                      </li>
                      <li class="dropdown">
                        <a href="#">Мебельная фурнитура</a>
                        <ul class="dropdown-menu">
                          <li><a href="scaffolding.html">Ручки</a></li>
                          <li><a href="base-css.html">Замки</a></li>
                          <li><a href="components.html">Петли</a></li>
                          <li><a href="icons.html">Системы выдвижения</a></li>
                          <li><a href="list.html">крючки</a></li>
                          <li class="dropdown"><a href="#">3rd level</a>
                            <ul class="dropdown-menu sub-menu">
                              <li><a href="#">Example menu</a></li>
                              <li><a href="#">Example menu</a></li>
                              <li><a href="#">Example menu</a></li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                      <li class="dropdown">
                   
                        <a href="#">О Магазине</a>
                        <ul class="dropdown-menu">
                          <li><a href="blog_left_sidebar.html">Где мы находимся</a></li>
                          <li><a href="blog_right_sidebar.html">Обратная связь</a></li>
                          <li><a href="post_left_sidebar.html">График работы</a></li>
                          
                        </ul>
                      </li>
                     
                    </ul>
                    -->
                  </nav>
                </div>
              </div>
              <!-- end menu -->
            </div>

          </div>
        </div>
      </div>
    </div>