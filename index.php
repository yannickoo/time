<!doctype html>
<html>
  <head>
    <title>Current UNIX timestamp</title>
    <link rel="stylesheet" href="http://cdn.yannickoo.de/css/vertical-aligned.css">
    <style>
      input { border: 0; font-size: 32px; font-family: helvetica, sans-serif; text-align: center; }
    </style>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        var input = document.querySelector('input');
        input.select();

        setInterval(function() {
          input.value = parseInt(input.value) + 1;
          input.select();
        }, 1000);
      });
    </script>
  </head>
  <body>
    <input type="text" value="<?php print time(); ?>" readonly>
  </body>
</html>
