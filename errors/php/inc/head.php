<!DOCTYPE html>
  <html>
    <head>
      <title>NGINXY | Error</title>
       <meta charset="UTF-8">

       <style>

           @import url('https://fonts.googleapis.com/css?family=VT323');

           body{
           background: #0984e3;
           font-family: 'VT323', monospace;
           font-weight: 400;
           color: #727272;
           text-align: center;
           overflow-x: auto;
           overflow-y: auto;
           text-rendering: optimizeLegibility;
           font-kerning: initial;
           -webkit-font-smoothing: subpixel-antialiased;
           -moz-osx-font-smoothing:  inherit;
           }

           section {
           max-width: 850px;
           margin: 0 auto;
           padding: 20px;
           margin-top: 100px;
           background: #fff;
           border-radius: 5px;
           -webkit-box-shadow: 0 2px 5px rgba(0,0,0,0.3);
           -moz-box-shadow: 0 2px 5px rgba(0,0,0,0.3);
           box-shadow: 0 2px 5px rgba(0,0,0,0.3);
           }

           /*----- Text -----*/

           h2, h3, h4, h5 {
               font-family: 'VT323', monospace;
               margin-top: 0.75em;
               margin-bottom: 0.75em;
           }

           h1 {
             font-size: calc(100% + 7vw);
             line-height: 1.2;
             margin: 0.1em 0;
             color: transparent;
             -webkit-background-clip: text;
             background-clip: text;
             background-repeat: no-repeat;
             transition: 0.5s ease-out;
           }

           .maintxt {
             background-image: linear-gradient(to bottom, #0951e3 45%, #0984e3 55%);
             background-size: 100% 220%;
             background-position: 50% 100%;
           }

           .maintxt:hover {
             background-position: 50% 0%;
           }

           p {
               position: relative;
               border-radius: 5px;
               font-size: 24px;
               word-wrap: break-word;
           }

           code {
             color: #0984e3;
             background-color: #f9f2f4;
             border-radius: 4px;
             padding: 3px;
           }

           /*---- A HREF ----*/
           a {
             outline: none;
             border: none;
             color: #0984e3;
             font-size:  1em;
             cursor:pointer;
             text-decoration:  none;
             text-shadow:  none;
             transition: ease 200ms;
             -webkit-transition: ease 200ms;
           }

           a:visited {
             opacity:  0.8;
             transition: ease 200ms;
             -webkit-transition: ease 200ms;
           }

           a:hover {
             color:  #0951e3;
             transition: ease 200ms;
             -webkit-transition: ease 200ms;
           }

           /*---- CUSTOM ----*/

           /*---- LOGO ----*/
           .logo {
             max-width: 20%;
             max-height: 20%;
             transition: 1.5s;
             transition: transform 1.5s;
             -o-transition:  1.5s;
             -ms-transition: 1.5s;
             -webkit-transition: 1.5s;
           }

           .logo:hover {
             transform: rotateZ(180deg);
             transition: 1.5s;
             transition: transform 1.5s;
             -o-transition:  1.5s;
             -ms-transition: 1.5s;
             -webkit-transition: 1.5s;
           }

           @media only screen and (max-width:600px) {
             h1 {
               font-family: 'VT323', monospace;
               font-weight: 200 !important;
               font-size: 3em !important;
               margin-top: 0.3em !important;
               margin-bottom: 0.75em !important;
             }
             p {
               line-height: 12px;
               position: relative;
               border-radius: 5px;
               font-size: 12px;
               word-wrap: break-word;
             }
             code {
               font-size: 10px;
               word-wrap: break-word;
             }
           }

       </style>
  </head>

<!-- PHP -->
<?php
        $server_ip = ($_SERVER['SERVER_ADDR']);
        $server_host = (gethostname());
        $origin_ip = ($_SERVER['REMOTE_ADDR']);
        function url(){
          return sprintf(
            "%s://%s%s",
            isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
            $_SERVER['SERVER_NAME'],
            $_SERVER['REQUEST_URI']
          );
        }
        $url_path = (url());
?>
