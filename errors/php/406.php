<?php require "inc/head.php"; ?>
  <body>
    <section>
      <a href="https://github.com/beardlyness/NGINXY"><h1 class="maintxt">NGINXY</h1></a>
      <a href="https://nginx.org/en/docs/"><img class="logo" src="https://raw.githubusercontent.com/beardlyness/NGINXY-Custom-Errors/master/nginxy.png" /></a>
      
        <p><code><a href="https://httpstatuses.com/406">Error 406 Not Acceptable</a></code></p>
        <p>This is the 406 Error Page for NGINXY.</p>
        <p>The target resource does not have a current representation that would be acceptable to the user agent, according to the proactive negotiation header fields received in the request, and the server is unwilling to supply a default representation.</p>
        <p>Server: <code><?php echo $server_ip; ?></code> | Visitor: <code><?php echo $origin_ip; ?></code></p>
        <p>Hostname: <code><?php echo $server_host; ?></code></p>
        <p>URI Request: <code><?php echo $url_path; ?></code></p>
        <p>Web Directory: <code>/var/www/html/domain/live</code></p>
    </section>

  </body>
</html>
