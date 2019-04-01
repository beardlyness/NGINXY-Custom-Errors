<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- Title -->
    <title>NGINXY Proxy Error</title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="NGINX Proxy Server">
    <meta name="keywords" content="Proxy, NGINX, NGINXY">
    <meta name="robots" content="index, follow">

    <!-- Stylesheets -->
    <style>
    /*
    CSS Google Fonts import
    */

    @import url('https://fonts.googleapis.com/css?family=Germania+One');

    /*---- BODY ----*/
    body  {
      height: 100%;
      font-family: 'Germania One', cursive;
      font-weight: 400;
      color: #727272;
      background-color: #161716e6;
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
      -webkit-box-shadow: 0 0 60px rgb(91, 207, 182);
      -moz-box-shadow: 0 0 60px rgb(91, 207, 182);
      box-shadow: 0 0 60px rgb(91, 207, 182);
    }

    /*---- CONTAINER ----*/

    .container {
      overflow: hidden;
      position: relative;
      width: 50%;
      height: 50%;
      border-radius: 4px;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.3);
      box-sizing: border-box;
      color: black;
      line-height: 1.5;
      margin: 2.5em auto 0;
      word-wrap: break-word;
      padding-top: 28.2%;
    }

    /*---- ROWS ----*/
    .row  {
      display: table;
      position: relative;
      width: 100%;
      z-index: 15;
      transition: ease 100ms;
      -webkit-transition: ease 100ms;
    }

    .row#hero {
    	text-align: center;
    	background: #fff0;
    }

    .row#hero h4 {
    	max-width: 400px;
    	margin: 2em auto 1em auto;
    }
    /*----- Text -----*/

    /* P CSS */
    p {
        line-height: 4px;
        position: relative;
        border-radius: 5px;
        font-size: 14px;
        word-wrap: break-word;
    }

    h2, h3, h4, h5 {
        font-family: 'Germania One', cursive;
        margin-top: 0.75em;
        margin-bottom: 0.75em;
    }

    h1 {
      font-size: calc(100% + 3vw);
      cursor: pointer;
      line-height: 1.2;
      margin: 0.3em 0;

      color: transparent;
      -webkit-background-clip: text;
      background-clip: text;
      background-repeat: no-repeat;
      transition: 0.5s ease-out;
    }
    .maintxt {
      background-image: linear-gradient(to bottom, #59837f 45%, rgb(91, 207, 182) 55%);
      background-size: 100% 220%;
      background-position: 50% 100%;
    }

    .maintxt:hover {
      background-position: 50% 0%;
    }

    h2 {
        font-weight: 300;
        font-size: 2.5em;
    }

    h3 {
        font-weight: 400;
        font-size: 1.5em;
        line-height: 1em;
    }

    h4 {
        font-weight: 400;
        margin: 1em 0;
        font-size: 1.25em;
    }

    h5 {
        font-weight: 400;
        font-size: 1em;
    }

    b {
      color: #3f3434;
      font-weight: 200;
      transition:ease 200ms;
      -webkit-transition:ease 200ms;
    }

    b:hover {
      cursor: pointer;
      font-weight: 200;
      font-size: 42px;
      color: #d63031;
      transition:ease 200ms;
      -webkit-transition:ease 200ms;
    }

    code {
    	color: #c7254e;
    	background-color: #f9f2f4;
    	border-radius: 4px;
    }

    blockquote {
      border-left: 3px solid #e7e9ec;
      padding: 0 0 0 16px;
      margin: 0 0 30px;
    }

    /*---- A HREF ----*/
    a {
      outline: none;
      border:none;
      color:#54B9B5;
      font-size:1em;
      cursor:pointer;
      text-decoration:none;
      text-shadow:none;
      transition:ease 200ms;
      -webkit-transition:ease 200ms;
    }

    a:visited {
      opacity:0.8;
      transition:ease 200ms;
      -webkit-transition:ease 200ms;
    }

    a:hover {
      color:rgba(0,0,0,0.5);
      transition:ease 200ms;
      -webkit-transition:ease 200ms;
    }

    p a:hover {
      background-color: #39988d;
      color: #fff;
      border-radius: 2px;
      padding: 2px;
      transition:ease 60ms;
      -webkit-transition:ease 60ms;
    }
    /*----- Footer -----*/

    footer {
      padding: 2em 0;
      display: inline-block;
      width: 100%;
      font-size:0.938em;
      text-align: center;
      background-color: #fff0;
    }

    footer p {
      line-height: 1.5em;
      color: #9e9e9e;
    }

    footer span,
    footer a {
      color: #9e9e9e;
      border-radius: 2px;
      text-shadow:none;
      display: inline-block;
      padding:0 4px;
    }

    footer a:hover {
      background-color: #27ae60;
      border-radius: 2px;
    }

    footer a:focus {
      font-weight: 700;
      padding: 0 3px;
    }

    footer span:before {
      content: "ÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â‚¬Å¡Ã‚Â¬Ãƒâ€šÃ‚Â¢";
      padding-right: 0.5em;
    }

    footer span:nth-child(1):before {
        content: "";
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
      transform: rotateY(180deg);
      transition: 1.5s;
      transition: transform 1.5s;
      -o-transition:  1.5s;
      -ms-transition: 1.5s;
      -webkit-transition: 1.5s;
    }

    /*---- SVG Logo----*/
    .svglogo {
      max-width: 10%;
      max-height: 10%;
      transition: 1.5s;
      transition: transform 1.5s;
      -o-transition:  1.5s;
      -ms-transition: 1.5s;
      -webkit-transition: 1.5s;
    }

    .svglogo:hover {
      transform: rotateY(180deg);
      transition: 1.5s;
      transition: transform 1.5s;
      -o-transition:  1.5s;
      -ms-transition: 1.5s;
      -webkit-transition: 1.5s;
    }

    /*---- SOCIAL ----*/
    .social {
      display: inline;
      text-align: center;
      transition: 1.5s;
      transition: transform 1.5s;
      -webkit-filter: grayscale(0%);
      -o-transition:  1.5s;
      -ms-transition: 1.5s;
      -webkit-transition: 1.5s;
    }

    .social:hover {
      background-color: transparent;
      -webkit-filter: grayscale(100%);
    }

    /*---- SVG/XML ----*/
    .xmlsoc {
      width: auto;
      height: auto;
      transition: 1.5s;
      transition: transform 1.5s;
      -o-transition:  1.5s;
      -ms-transition: 1.5s;
      -webkit-transition: 1.5s;
    }

    .xmlsoc:hover {
      transform: rotate(720deg);
      /* Oh noes a spooky ghoooooost */
    }

    /*---- MEDIA ----*/
    @media only screen and (max-width:1600px) {
      section {
        width: 80%;
        }
      }

    @media screen and (max-width: 1280px)  {
      div.container {
        width: 100% !important;
        height: 100% !important;
        padding-top: 56.3% !important;
        display:block !important;
      }
    }

    @media only screen and (max-width:1000px) {
      section {
        width:80%;
        }
      }

    @media only screen and (max-width: 630px) {
      h4 {
        line-height: 16px;
        position: relative;
        border-radius: 5px;
        font-size: 16px;
        word-wrap: break-word;
      }
      p {
          line-height: 12px;
          position: relative;
          border-radius: 5px;
          font-size: 12px;
          word-wrap: break-word;
      }
      b {
        color: #3f3434;
        font-weight: 200;
        transition:ease 200ms;
        -webkit-transition:ease 200ms;
      }

      b:hover {
        cursor: pointer;
        font-weight: 200;
        font-size: 24px;
        color: #d63031;
        transition:ease 200ms;
        -webkit-transition:ease 200ms;
      }
    }

    @media only screen and (max-width:600px) {
      footer span {
        display:block;
        width:95%;
        margin: 1em auto;
        }
      footer span:before {
          content: "";
        }
      .logo {
        max-width: 33% !important;
        max-height: 33% !important;
      }
      h1 {
        font-family: 'Germania One', cursive; !important;
        font-weight: 200 !important;
        font-size: 3em !important;
        margin-top: 0.3em !important;
        margin-bottom: 0.75em !important;
      }
    }
  </style>

    <link rel="icon" type="image/png" href="images/icon.png" />

  </head>
  <body>
    <!-- PHP -->
    <?php
            $backend = ($_SERVER['SERVER_ADDR']);
            $proxyhost = (gethostname());
            $origin = ($_SERVER['REMOTE_ADDR']);
    ?>

      <!-- Row -->
    <div class="row" id="hero">
      <section>
        <a href="https://github.com/beardlyness/NGINXY"><h1 class="maintxt">NGINXY</h1></a>

        <svg class="logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" version="1.1">
        <g id="surface1">
        <path style=" fill:#85CBF8;" d="M 54.289063 12.570313 L 50.789063 12.339844 C 45.078125 11.964844 39.621094 9.84375 35.160156 6.261719 L 33.808594 5.179688 C 32.753906 4.328125 31.246094 4.328125 30.191406 5.179688 L 28.839844 6.261719 C 24.375 9.84375 18.914063 11.96875 13.199219 12.339844 L 9.699219 12.570313 C 8.109375 12.683594 6.902344 14.054688 7 15.648438 L 7.671875 24.871094 C 8.402344 35.308594 13.265625 45.023438 21.179688 51.871094 L 30.089844 59.621094 C 31.183594 60.5625 32.796875 60.5625 33.890625 59.621094 L 42.800781 51.871094 C 50.714844 45.023438 55.574219 35.308594 56.308594 24.871094 L 57 15.640625 C 57.097656 14.042969 55.886719 12.671875 54.289063 12.570313 Z "></path>
        <path style=" fill:#7BBEEB;" d="M 54.289063 12.570313 L 50.789063 12.339844 C 45.078125 11.964844 39.621094 9.84375 35.160156 6.261719 L 33.808594 5.179688 C 33.296875 4.765625 32.660156 4.539063 32 4.539063 L 32 60.359375 C 32.699219 60.359375 33.375 60.109375 33.898438 59.648438 L 42.808594 51.898438 C 50.722656 45.054688 55.585938 35.339844 56.320313 24.898438 L 57 15.640625 C 57.097656 14.042969 55.886719 12.671875 54.289063 12.570313 Z "></path>
        <path style=" fill:#9FDDFF;" d="M 48.5 20 L 49.738281 22.261719 L 52 23.5 L 49.738281 24.738281 L 48.5 27 L 47.261719 24.738281 L 45 23.5 L 47.261719 22.261719 Z "></path>
        <path style=" fill:#9FDDFF;" d="M 15.421875 24 L 16.269531 25.558594 L 17.839844 26.421875 L 16.269531 27.269531 L 15.421875 28.839844 L 14.558594 27.269531 L 13 26.421875 L 14.558594 25.558594 Z "></path>
        <path style=" fill:#9FDDFF;" d="M 40.648438 39 L 41.230469 40.058594 L 42.300781 40.648438 L 41.230469 41.230469 L 40.648438 42.300781 L 40.058594 41.230469 L 39 40.648438 L 40.058594 40.058594 Z "></path>
        <path style=" fill:#FAEFDE;" d="M 32 16.058594 C 25.40625 16.058594 20.058594 21.40625 20.058594 28 C 20.058594 34.59375 25.40625 39.941406 32 39.941406 C 38.59375 39.941406 43.941406 34.59375 43.941406 28 C 43.90625 21.417969 38.582031 16.09375 32 16.058594 Z M 42 27.058594 L 38.921875 27.058594 C 38.878906 24.242188 38.105469 21.484375 36.671875 19.058594 C 39.6875 20.652344 41.691406 23.664063 42 27.058594 Z M 31 18.160156 L 31 27.058594 L 27 27.058594 C 27.179688 22.691406 28.871094 19 31 18.148438 Z M 31 28.949219 L 31 37.851563 C 28.871094 36.960938 27.179688 33.308594 27 28.949219 Z M 33 37.851563 L 33 28.949219 L 37 28.949219 C 36.820313 33.308594 35.128906 37 33 37.851563 Z M 33 27.058594 L 33 18.160156 C 35.128906 19.050781 36.820313 22.699219 37 27.058594 Z M 27.328125 19.058594 C 25.894531 21.484375 25.121094 24.242188 25.078125 27.058594 L 22 27.058594 C 22.320313 23.675781 24.324219 20.683594 27.328125 19.101563 Z M 22 28.941406 L 25.089844 28.941406 C 25.128906 31.757813 25.90625 34.515625 27.339844 36.941406 C 24.320313 35.351563 22.308594 32.339844 22 28.941406 Z M 36.671875 36.941406 C 38.105469 34.515625 38.878906 31.757813 38.921875 28.941406 L 42 28.941406 C 41.679688 32.324219 39.675781 35.316406 36.671875 36.898438 Z "></path>
        <path style=" fill:#8D6C9F;" d="M 55.078125 11.410156 L 51.460938 11.171875 C 45.546875 10.785156 39.894531 8.589844 35.269531 4.878906 L 33.871094 3.761719 C 32.773438 2.882813 31.214844 2.882813 30.121094 3.761719 L 28.71875 4.878906 C 24.097656 8.589844 18.445313 10.785156 12.53125 11.171875 L 8.910156 11.410156 C 7.261719 11.527344 6.019531 12.953125 6.128906 14.601563 L 6.820313 24.140625 C 7.570313 34.964844 12.609375 45.042969 20.820313 52.140625 L 30.050781 60.140625 C 31.179688 61.125 32.859375 61.125 33.988281 60.140625 L 43.21875 52.140625 C 51.429688 45.042969 56.46875 34.964844 57.21875 24.140625 L 57.910156 14.589844 C 57.960938 13.792969 57.6875 13.007813 57.15625 12.410156 C 56.625 11.8125 55.878906 11.453125 55.078125 11.410156 Z M 55.191406 24 C 54.667969 31.492188 51.976563 38.667969 47.449219 44.660156 C 47.3125 44.585938 47.15625 44.542969 47 44.539063 C 46.449219 44.539063 46 44.988281 46 45.539063 L 46 46.46875 C 44.730469 47.953125 43.355469 49.339844 41.878906 50.621094 L 32.648438 58.621094 C 32.273438 58.945313 31.714844 58.945313 31.339844 58.621094 L 22.109375 50.621094 C 20.640625 49.339844 19.265625 47.953125 18 46.46875 L 18 45.539063 C 18 44.988281 17.550781 44.539063 17 44.539063 C 16.84375 44.542969 16.6875 44.585938 16.550781 44.660156 C 12.023438 38.667969 9.332031 31.492188 8.808594 24 L 8.121094 14.46875 C 8.085938 13.921875 8.5 13.449219 9.050781 13.410156 L 12.671875 13.171875 C 19 12.761719 25.054688 10.410156 30 6.441406 L 31.398438 5.320313 C 31.765625 5.027344 32.285156 5.027344 32.648438 5.320313 L 34 6.441406 C 38.941406 10.402344 44.980469 12.75 51.300781 13.160156 L 54.921875 13.398438 C 55.464844 13.4375 55.878906 13.90625 55.851563 14.449219 Z "></path>
        <path style=" fill:#8D6C9F;" d="M 44.210938 14.199219 C 41.175781 13.3125 38.308594 11.933594 35.71875 10.121094 L 33.148438 8.320313 C 32.460938 7.839844 31.546875 7.839844 30.859375 8.320313 L 28.289063 10.121094 C 23.953125 13.15625 18.871094 14.945313 13.589844 15.300781 L 11.910156 15.410156 C 11.359375 15.429688 10.925781 15.894531 10.945313 16.445313 C 10.964844 16.996094 11.425781 17.429688 11.980469 17.410156 L 12 17.410156 L 13.679688 17.300781 C 19.328125 16.925781 24.761719 15.011719 29.398438 11.769531 L 32 10 L 34.570313 11.800781 C 37.339844 13.738281 40.40625 15.210938 43.648438 16.160156 C 44.179688 16.316406 44.734375 16.011719 44.890625 15.480469 C 45.042969 14.949219 44.738281 14.394531 44.210938 14.238281 Z "></path>
        <path style=" fill:#8D6C9F;" d="M 52.121094 15.421875 L 50.410156 15.308594 C 49.648438 15.261719 48.878906 15.179688 48.128906 15.070313 C 47.578125 14.988281 47.066406 15.371094 46.984375 15.925781 C 46.90625 16.476563 47.289063 16.988281 47.839844 17.070313 C 48.648438 17.191406 49.46875 17.28125 50.28125 17.328125 L 51.988281 17.441406 L 52.058594 17.441406 C 52.613281 17.460938 53.074219 17.027344 53.09375 16.476563 C 53.113281 15.921875 52.683594 15.460938 52.128906 15.441406 Z "></path>
        <path style=" fill:#8D6C9F;" d="M 22 44.539063 C 21.449219 44.539063 21 44.988281 21 45.539063 L 21 47.539063 C 21 48.09375 21.449219 48.539063 22 48.539063 C 22.550781 48.539063 23 48.09375 23 47.539063 L 23 45.539063 C 23 44.988281 22.550781 44.539063 22 44.539063 Z "></path>
        <path style=" fill:#8D6C9F;" d="M 27 44.539063 C 26.449219 44.539063 26 44.988281 26 45.539063 L 26 47.539063 C 26 48.09375 26.449219 48.539063 27 48.539063 C 27.550781 48.539063 28 48.09375 28 47.539063 L 28 45.539063 C 28 44.988281 27.550781 44.539063 27 44.539063 Z "></path>
        <path style=" fill:#8D6C9F;" d="M 32 44.539063 C 31.449219 44.539063 31 44.988281 31 45.539063 L 31 47.539063 C 31 48.09375 31.449219 48.539063 32 48.539063 C 32.550781 48.539063 33 48.09375 33 47.539063 L 33 45.539063 C 33 44.988281 32.550781 44.539063 32 44.539063 Z "></path>
        <path style=" fill:#8D6C9F;" d="M 37 44.539063 C 36.449219 44.539063 36 44.988281 36 45.539063 L 36 47.539063 C 36 48.09375 36.449219 48.539063 37 48.539063 C 37.550781 48.539063 38 48.09375 38 47.539063 L 38 45.539063 C 38 44.988281 37.550781 44.539063 37 44.539063 Z "></path>
        <path style=" fill:#8D6C9F;" d="M 42 44.539063 C 41.449219 44.539063 41 44.988281 41 45.539063 L 41 47.539063 C 41 48.09375 41.449219 48.539063 42 48.539063 C 42.550781 48.539063 43 48.09375 43 47.539063 L 43 45.539063 C 43 44.988281 42.550781 44.539063 42 44.539063 Z "></path>
        </g>
        </svg>

        <h4>Welcome to our project NGINXY!</h4>
          <p>This is a Frontend Reverse Proxy made with NGINX, and that has some configured options setup.</p>
          <p>Fast, and Easy to use. What more could you want? Ok fine.. we'll add Encryption too.</p>
