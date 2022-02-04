<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Welcome</title>
   </head>
   <body>
      <div id="myStatus"></div>
      <meter min="0" max="20" value="0" id="myMeter">
   </body>
   <script>
     var m = document.getElementById("myMeter");
     var s = document.getElementById("myStatus");
     var tick = function() {
       if (m.value < m.max) { 
         m.value = m.value + 1; 
         s.innerHTML = "Done " + m.value + " out of " + m.max;
         setTimeout(tick, 100);
       } else {
         s.innerHTML = "Finished!";
       }
     }
     tick();
   </script>
</html>
