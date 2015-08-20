<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Ajax Progress Bar</title>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
  </head>
  <body>
    <div class="container">
      <h1>Click to Load the Progress Bar</h1>
      <div class="progress-bar-wrapper">
        <div class="progress-bar"></div>
      </div>
      <button class="load-button">LOAD</button>
    </div>
    <style type="text/css">
      body{
        background: #3B2D4E;
        font-family: 'Varela Round', sans-serif;
      }
      .container {
        width: 40%;
        margin: 0 auto;
        margin-top: 100px;
      }
      h1 {
        text-align: center;
        color: #89A4FF;
      }
      .progress-bar-wrapper{
        max-width: 500px;
        background: #2F2540;
      }
      .progress-bar{
        background: #89A4FF;
        height: 10px;
        width: 0px;
      }
      .load-button{
        margin-top: 10px;
        padding: 5px 10px;
        border: 1px solid #89A4FF;
        border-radius: 2px;
        background: #89A4FF;
        color: white;
        font-weight: bold;
        letter-spacing: 1px;
        font-family: 'Varela Round', sans-serif;
        outline: none;  /*to remove bluw glow in chrome*/
      }
    </style>
  </body>

  <script type="text/javascript">
    $(document).ready(function() {
      $('body').on('click','.load-button',function(){
        myloader();
      })
    });

    //this function will call after every 10 mili sec
    function myloader() {
      var width = parseInt($('.progress-bar').css('width')) + 1;
      if(width <= 500) {
        $('.progress-bar').css('width', width);
        setTimeout("myloader()", 10); //this should be in if condition
      }
      else {
        $('.progress-bar').css('width', 0);
      }
    }
  </script>

</html>
