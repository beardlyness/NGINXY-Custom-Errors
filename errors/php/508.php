<?php require "inc/head.php"; ?>
  <body>
    <section>
      <a href="https://github.com/beardlyness/NGINXY"><h1 class="maintxt">NGINXY</h1></a>
      <a href="https://nginx.org/en/docs/"><img class="logo" src="https://raw.githubusercontent.com/beardlyness/NGINXY-Custom-Errors/master/nginxy.png" /></a>
      
        <p><code><a href="https://httpstatuses.com/508">Error 508 Loop Detected</a></code></p>
        <p>This is the 508 Error Page for NGINXY.</p>
        <p>The server terminated an operation because it encountered an infinite loop while processing a request with "Depth: infinity". This status indicates that the entire operation failed.</p>
        <p>Server: <code><?php echo $server_ip; ?></code> | Visitor: <code><?php echo $origin_ip; ?></code></p>
        <p>Hostname: <code><?php echo $server_host; ?></code></p>
        <p>URI Request: <code><?php echo $url_path; ?></code></p>
        <p>Web Directory: <code>/var/www/html/domain/live</code></p>
    </section>

  </body>
</html>
