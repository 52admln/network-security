<?php 
$ip = $_SERVER['REMOTE_ADDR']; 
?> 
<!DOCTYPE html>
<html>
  <head>
    <title>PHPDoS Attack</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
      <style>
      body {
        padding-top: 80px;
        padding-bottom: 80px;
        background-color: #f5f5f5;
      }
      .form-attack {
        max-width: 400px;
        padding: 29px 39px 39px;
        margin: 0 auto 40px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-attack .form-attack-heading,
      .form-attack  {
        margin-bottom: 10px;
      }
      #push,#footer {
        height: 60px;
      }
      #footer {
        background-color: #fff;
      }
      .container {
        width: auto;
        max-width: 680px;
      }
      .container .credit {
        margin: 20px 0;
      }
    </style>
  </head>
  <body>

        <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">PHPDoS Attack</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="../index.html">Home</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">
      <div class="form-attack">
      <h2 class="form-attack-heading">PHPDoS</h2>
<b>Your IP Add.</b><font color="blue"><?php echo $ip; ?></font>
<br><blockquote>Don't attack youself!</blockquote>
<form name="input" action="function.php" method="post"> 
<label>IP Address:</label>
<input type="text" name="ip" size="15" maxlength="15" class="main" value = "" onblur = "if ( this.value=='' ) this.value = '0.0.0.0';" onfocus = " if ( this.value == '0.0.0.0' ) this.value = '';">
<label>Port:</label>
<input type="text" name="port" size="15" maxlength="15" class="main" value = "" onblur = "if ( this.value=='' ) this.value = 'port';" onfocus = " if ( this.value == 'port' ) this.value = '';">
<br>
<label>Time/Second: </label>
<input type="text" name="time" size="15" maxlength="15" class="main" value = "" onblur = "if ( this.value=='' ) this.value = 'time (in seconds)';" onfocus = " if ( this.value == 'time (in seconds)' ) this.value = '';">
<br>
<br>
<input class="btn btn-large btn-primary" type="submit" value="Start Attack">
<br>
<br>
<blockquote>
After the DoS attack, please wait for the browser to load.
</blockquote>
</div> 
    </div> <!-- /container -->
          <div id="push"></div>
    </div>
        <div id="footer">
      <div class="container">
        <p class="muted credit">本工具仅用于学习PHPDos攻击原理，切勿用于非法用途.</p>
      </div>
    </div>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
  </form> 
</html>