<?php require "inc/head.php"; ?>
  <body>
    <section>
      <a href="https://github.com/beardlyness/NGINXY"><h1 class="maintxt">NGINXY</h1></a>
      <a href="https://nginx.org/en/docs/"><img class="logo" src="https://raw.githubusercontent.com/beardlyness/NGINXY-Custom-Errors/master/nginxy.png" /></a>
      
        <p><code><a href="https://httpstatuses.com/408">Error 408 Request Timeout</a></code></p>
        <p>This is the 408 Error Page for NGINXY.</p>
        <p>A server SHOULD send the "close" connection option in the response, since 408 implies that the server has decided to close the connection rather than continue waiting. If the client has an outstanding request in transit, the client MAY repeat that request on a new connection.</p>
        <p>Server: <code><?php echo $server_ip; ?></code> | Visitor: <code><?php echo $origin_ip; ?></code></p>
        <p>Hostname: <code><?php echo $server_host; ?></code></p>
        <p>URI Request: <code><?php echo $url_path; ?></code></p>
        <p>Web Directory: <code>/var/www/html/domain/live</code></p>
    </section>

  </body>
</html>
