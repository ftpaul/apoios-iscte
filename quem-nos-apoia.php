
    <?php
      require 'header.php';
    ?>


    <div class="col-lg-12 col-md-12 col-sm-12" style="padding-left:0px;padding-right:0px;padding-top:0px;">

    <div class="row fivecolumns" style="margin:0px;">
    <div class="col-lg-2 col-md-2" style="padding-left:0;">
        <img class="img-responsive" src="img/quadrados/quadrado0.jpg" >

        <div class="row" style="margin: 5px 0 ;">
          <div class="col-lg-6 col-md-6" style="padding-right:3px;padding-left:0px;">

            <a class="nyro" rel="gallery" href="http://www.youtube.com/embed/FJ-xhwKV-ZM">
              <img src="http://img.youtube.com/vi/FJ-xhwKV-ZM/0.jpg" class="img-responsive" >
            </a>

          </div>
          
          <div class="col-lg-6 col-md-6" style="padding-right:0px;padding-left:3px;">

          <a class="nyro" rel="gallery" href="http://www.youtube.com/embed/6EMYzeYvEJE">
            <img src="http://img.youtube.com/vi/6EMYzeYvEJE/0.jpg" class="img-responsive" >
          </a>

          </div>
        </div>

        <div class="row" style="margin: 5px 0 ;">
          <div class="col-lg-6 col-md-6" style="padding-right:3px;padding-left:0px;">

            <a class="nyro" rel="gallery" href="http://www.youtube.com/embed/aZru_DapM_A">
              <img src="http://img.youtube.com/vi/aZru_DapM_A/0.jpg" class="img-responsive">
            </a>

          </div>
          
          <div class="col-lg-6 col-md-6" style="padding-right:0px;padding-left:3px;">

          <a class="nyro" rel="gallery" href="http://www.youtube.com/embed/GUyJqerirQw">
            <img src="http://img.youtube.com/vi/GUyJqerirQw/0.jpg" class="img-responsive">
          </a>

          </div>
        </div>

    </div>

    <div class="col-lg-3 col-md-3">
        <div class="row">
          <div class="col-lg-12 col-md-12" style="padding-right:15px;padding-left:15px;text-align:justify;">
<ul class="nav nav-tabs nav-justified">
  <li class="active"><a href="#pane1" data-toggle="tab">Institui&ccedil;&otilde;es</a></li>
  <li><a href="#pane2" data-toggle="tab">Particulates</a></li>

  <div class="tab-content">
    <div id="pane1" class="tab-pane active">
      <?php    

  $text = file_get_contents("js/instituicoes.js");

  $exploded = explode("\n",$text);

  $size = sizeof($exploded);

  if ($size > 1) {
    
    echo '<div class="row">';
    echo '<div class="col-lg-6 col-md-6" style="padding-right:15px;padding-left:15px;text-align:justify;">';

    if ($size % 2 == 0) {

      for ($i = 0; $i != $size/2; $i++) { 
        echo "<p>" . $exploded[$i] . "</p>";
        
      }

    } else {

      for ($i = 0; $i != ($size-1)/2; $i++) { 
        echo "<p>" . $exploded[$i] . "</p>";
        
      }

    }
    echo '</div>';
    echo '<div class="col-lg-6 col-md-6" style="padding-right:15px;padding-left:15px;text-align:justify;">';
    for (; $i != $size; $i++) { 
      echo "<p>" . $exploded[$i] . "</p>";
    }
    echo '</div>';
    echo '</div>';

  }

  ?>
    </div>
    <div id="pane2" class="tab-pane">

  <?php    

  $text = file_get_contents("js/particulares.js");

  $exploded = explode("\n",$text);

  $size = sizeof($exploded);

  echo '<div class="row">';
  echo '<div class="col-lg-6 col-md-6" style="padding-right:15px;padding-left:15px;text-align:justify;">';

  if ($size % 2 == 0) {

    for ($i = 0; $i != $size/2; $i++) { 
      echo "<p>" . $exploded[$i] . "</p>";
      
    }

  } else {

    for ($i = 0; $i != ($size-1)/2; $i++) { 
      echo "<p>" . $exploded[$i] . "</p>";
      
    }

  }
  echo '</div>';
  echo '<div class="col-lg-6 col-md-6" style="padding-right:15px;padding-left:15px;text-align:justify;">';
  for (; $i != $size; $i++) { 
    echo "<p>" . $exploded[$i] . "</p>";
  }
  echo '</div>';
  echo '</div>';

  ?>
    </div>

  </div><!-- /.tab-content -->
</ul>
          </div>

        </div>
    </div>
    <div class="col-lg-2 col-md-2" style="padding-right:0;" >
        
        <div class="row" style="margin: 0px 0 ;">
          <div class="col-lg-6 col-md-6" style="padding-right:3px;padding-left:0px;">

            <a href="catedra"><img class="img-responsive" src="img/quadrados/quadrado1.jpg" ></a>

          </div>
          
          <div class="col-lg-6 col-md-6" style="padding-right:0px;padding-left:3px;">

          <a href="network"><img class="img-responsive" src="img/quadrados/quadrado2.jpg" ></a>

          </div>
        </div>

        <div class="row" style="margin: 5px 0 ;">
          <div class="col-lg-6 col-md-6" style="padding-right:3px;padding-left:0px;">

            <a target="_blank" href="http://muralsolidario.iscte-iul.pt/"><img class="img-responsive" src="img/quadrados/quadrado3.jpg" ></a>

          </div>
          
          <div class="col-lg-6 col-md-6" style="padding-right:0px;padding-left:3px;">

          <a href="network"><img class="img-responsive" src="img/quadrados/quadrado4.jpg" ></a>

          </div>
        </div>
    </div>
    </div>

      </div>
        
      </div>
    </div>
    </div>
    
    </div><!-- end wrap -->

    <?php
      require 'footer.php';
    ?>