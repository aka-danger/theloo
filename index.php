<?php

  if (isset($_POST['title'])) {
    if ($_POST['title'] != null){
      echo "true";
    }
  }

  //save data
  $file = 'data/post.json';
  $json = file_get_contents('http://rest/api/theloo');
  file_put_contents($file, $json);
  //read data
  $json = json_decode($json,TRUE);


?>
<!doctype html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="include/css/main.min.css">

        <style>

        ::-webkit-input-placeholder { /* WebKit, Blink, Edge */
          color:    white;
        }
        :-moz-placeholder { /* Mozilla Firefox 4 to 18 */
           color:    white;
           opacity:  1;
        }
        ::-moz-placeholder { /* Mozilla Firefox 19+ */
           color:    white;
           opacity:  1;
        }
        :-ms-input-placeholder { /* Internet Explorer 10-11 */
           color:    white;
        }

          input{
            font-size: 120px !important;
            border: none !important;
            background-color: black !important;
            box-shadow: none !important;
            display: inline !important;
            width: 100% !important;
            height: 150px !important;
            color:white;
          }

          textarea{
            font-size: 30px !important;
            border: none !important;
            background-color: black !important;
            box-shadow: none !important;
            width: 100% !important;
            height: 150px !important;
            display: inline-block !important;
            color: white;
          }

          button{
            width: 100% !important;
            height: 150px !important;
            font-size: 50px;
            border:none !important;
          }
        </style>
    </head>
    <body>

      <nav class="nav">
        <div class="container body">
          <a href ="#"><h1>THELOO</h1></a>
          <!--<input type ="text" placeholder="Title" />-->
          <div>
            <a href="#" id="imgBrand"><img style="float:right" src="img/wc.svg" alt="" width="50%" height="50%"/></button></a>
          </div>
        </div>
      </nav>

      <section id="frmPost" class="form-input-open">
        <div class="container">
          <div class="row">
            <textarea id ="txtBody"  placeholder="Take your mind off things..."></textarea>

          </div>

          <div class="row">
            <div class="eight columns">
              <input type="text" id="txtTitle" placeholder="title"/>
            </div>

            <div class="four columns">
              <button id="btnSubmit"><img src="img/paper.svg" alt="" width="50%" height="50%"></button>
            </div>

          </div>
        </div>
      </section>

      <div class="container">
      <?php echo '<div class="row">' ?>
        <?php foreach($json as $k=>$v): ?>
          <div class="three columns panel">
            <a href ="#">
            <div class="body">
              <h1><?php echo $v['TITLE']; ?></h1>
              <p><?php echo $v['MESSAGE']; ?></p>
            </div>
            </a>
          </div>
        <?php endforeach; ?>
      <?php echo '</div>' ?>

        <div class="row">
          <div class="three columns panel">
            <a href ="#">
            <div class="body">
              <h1>Title</h1>
              <p>on this day everything went away and i was able
              to achieve everythgint that i ever thought. just becasue i onerror="
              had a thought that h is was the direction thte hthe loadd"</p>
            </div>
            </a>
          </div>

          <div class="three columns panel">
            <a href ="#">
            <div class="body">
              <h1>Title</h1>
              <p>on this day everything went away and i was able
              to achieve everythgint that i ever thought. just becasue i onerror="
              had a thought that h is was the direction thte hthe loadd"</p>
            </div>
            </a>
          </div>


          <div class="six columns panel">
            <a href ="#">
            <div class="body">
              <h1>Title</h1>
              <p>on this day everything went away and i was able
              to achieve everythgint that i ever thought. just becasue i onerror="
              had a thought that h is was the direction thte hthe loadd"</p>
            </div>
            </a>
          </div>
        </div> <!--row 1-->

        <div class="row">
          <div class="six columns panel">
            <a href ="#">
            <div class="body">
              <h1>Title</h1>
              <p>on this day everything went away and i was able
              to achieve everythgint that i ever thought. just becasue i onerror="
              had a thought that h is was the direction thte hthe loadd"</p>
            </div>
            </a>
          </div>

          <div class="three columns panel">
            <a href ="#">
            <div class="body">
              <h1>Title</h1>
              <p>on this day everything went away and i was able
              to achieve everythgint that i ever thought. just becasue i onerror="
              had a thought that h is was the direction thte hthe loadd"</p>
            </div>
            </a>
          </div>
          <div class="three columns panel">
            <a href ="#">
            <div class="body">
              <h1>Title</h1>
              <p>on this day everything went away and i was able
              to achieve everythgint that i ever thought. just becasue i onerror="
              had a thought that h is was the direction thte hthe loadd"</p>
            </div>
            </a>
          </div>

        </div><!--row 2-->

        <div class="row">


          <div class="three columns panel">
            <a href ="#">
            <div class="body">
              <h1>Title</h1>
              <p>on this day everything went away and i was able
              to achieve everythgint that i ever thought. just becasue i onerror="
              had a thought that h is was the direction thte hthe loadd"</p>
            </div>
            </a>
          </div>

          <div class="six columns panel">
            <a href ="#">
            <div class="body">
              <h1>Title</h1>
              <p>on this day everything went away and i was able
              to achieve everythgint that i ever thought. just becasue i onerror="
              had a thought that h is was the direction thte hthe loadd"</p>
            </div>
            </a>
          </div>

          <div class="three columns panel">
            <a href ="#">
            <div class="body">
              <h1>Title</h1>
              <p>on this day everything went away and i was able
              to achieve everythgint that i ever thought. just becasue i onerror="
              had a thought that h is was the direction thte hthe loadd"</p>
            </div>
            </a>
          </div>

        </div><!--row 3-->

      </div>
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="include/js/vendor/jquery.min.js"><\/script>')</script>

        <script >

          $(function(){
            $("#imgBrand").click(function(){

              $("#frmPost").toggle(function(){
                $("#frmPost").removeClass("form-input-close");
              },function(){
                $("#frmPost").addClass("form-input-open");
              });

            });

            $("#btnSubmit").click(function(){

              $("#frmPost").toggle(function(){
                $("#frmPost").removeClass("form-input-close");
              },function(){
                $("#frmPost").addClass("form-input-open");
              });

              var title = $("#txtTitle").val();
              var body = $("#txtBody").val();
              var date ="<?php echo date("YYYY-mm-dd")?>";
              var json = "{\"title\":"+title+",\"message\":"+body+", \"date_time\": "+date+" }";
              $.ajax({
                  type: 'POST',
                  url: 'index.php',
                  data: json,
                  success: function(data) { alert('data: ' + data); },
                  contentType: "application/json",
                  dataType: 'json'
              });
            });


          });


        </script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
