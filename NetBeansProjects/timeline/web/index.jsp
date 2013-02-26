<!DOCTYPE html>
<html lang="en">

  <head>
    <title>Timeline JS Example</title>
    <meta charset="utf-8">
    <meta name="description" content="TimelineJS example">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <!-- Style-->
    <style>
      html, body {
       height:100%;
       padding: 0px;
       margin: 0px;
      }
    </style>
   
  </head>
  
  <body>
  <!-- BEGIN Timeline Embed -->
  <div id="timeline-embed"></div>
  <script type="text/javascript">
    var timeline_config = {
     width: "100%",
     height: "100%",
     source: 'cerok.jsonp'
    }
  </script>
  <!--se carga el script con los datos (arreglo) enviado por el archivo jsonp-->
  <script type="text/javascript" src="./compiled/js/storyjs-embed.js"></script>
  <!-- END Timeline Embed-->
</body>
</html>
