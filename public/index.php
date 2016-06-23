<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Meteo</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/main.css">

        <link rel="stylesheet" href="css/style.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <div id="app" class="container-fluid">
            <!-- loading -->
            <section id="loading">
              <div class="row content">
                <div id="loading-message"></div>
              </div>
            </section>

            <!-- home -->
            <section id="home">
              <div class="row content">
                  <div id="weather">
                      <div id="today" class="weather">
                          <div class="weather-icon
                                      col-xs-3 col-xs-offset-6
                                      col-sm-1 col-sm-offset-10
                                      col-md-1 col-md-offset-10">
                          </div>
                          <div class="temp
                                      col-xs-1
                                      col-sm-1
                                      col-md-1">
                          </div>
                          <div class="city
                                      col-xs-4 col-xs-offset-6
                                      col-sm-2 col-sm-offset-10
                                      col-md-4 col-md-offset-8">
                          </div>
                          <div class="testo col-xs-12">
                            <div class="mbare">Mbare</div>
                            <div class="frase"></div>
                          </div>
                      </div>
                  </div>
              </div>
            </section>
        </div>

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="js/purl.js"></script>
        <script src="js/plugins.js"></script>

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBuMPU68hPxivMPx0WWXn-h6gI92UAZ6w8&callback=initMap"
         type="text/javascript"></script>

        <script src="js/shake.js"></script>
        <script src="js/jquery.simpleWeather.js"></script>
        <script src="js/main.js"></script>

        <!-- SCRIPT INIT -->
        <script>
          $(document).ready(function(){
            init()
            showSection("loading")
            getPosition()

          })
        </script>
    </body>
</html>
