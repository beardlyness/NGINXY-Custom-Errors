<?php require "inc/head.php"; ?>
  <body>
    <section>
      <a href="https://github.com/beardlyness/NGINXY"><h1 class="maintxt">NGINXY</h1></a>
      <a href="https://nginx.org/en/docs/"><img class="logo" src="https://raw.githubusercontent.com/beardlyness/NGINXY-Custom-Errors/master/nginxy.png" /></a>
      
        <p><code><a href="https://httpstatuses.com/505">Error 505 HTTP Version Not Supported</a></code></p>
        <p>This is the 505 Error Page for NGINXY.</p>
        <p>The server does not support, or refuses to support, the major version of HTTP that was used in the request message.</p>
        <p>Server: <code><?php echo $server_ip; ?></code> | Visitor: <code><?php echo $origin_ip; ?></code></p>
        <p>Hostname: <code><?php echo $server_host; ?></code></p>
        <p>URI Request: <code><?php echo $url_path; ?></code></p>
        <p>Web Directory: <code>/var/www/html/domain/live</code></p>
    </section>

  </body>
</html>
