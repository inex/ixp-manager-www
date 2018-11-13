<?php

    $req = strtolower( $_SERVER['REQUEST_URI'] );
    $h404 = false;

    // Requires:
    // Options FollowSymLinks
    // AllowOverride None
    //
    // RewriteEngine On
    // RewriteCond %{REQUEST_FILENAME} -s     [OR]
    // RewriteCond %{REQUEST_FILENAME} -l     [OR]
    // RewriteCond %{REQUEST_FILENAME} -d
    // RewriteRule ^.*$ - [NC,L]
    // RewriteRule ^.*$ /index.php [NC,L]

    if( $req == '/' || $req == '/index' || $req == 'index.php' || preg_match( '/^\/\?.*$/', $req ) ) {
        // do nothing
    } elseif( preg_match( '/^\/[a-z0-9]+$/', $req ) && file_exists( __DIR__ . '/' . $req . '.php' ) ) {
        include( __DIR__ . '/' . $req . '.php' );
        die();
    } else {
        header('HTTP/1.1 404 Not Found');
        $h404 = true;
    }


    $ixps = file_get_contents("js/ixp-manager-users.json");

    $additionalFooter = <<<END_HEADER
    <script>
        var ixps = {$ixps};
    </script>
    <script src="js/index.js"></script>
END_HEADER;

    include 'header.php'
?>

    <div class="jumbotron">
      <h1>
          <img class="center-block" src="images/logos/ixp-manager.png">
      </h1>
      <p class="lead">
        <b>IXP Manager</b> is a full stack management system for Internet eXchange Points (IXPs)
        which includes an administration and customer portal; provides end to end provisioning; and
        both teaches and implements best practice.
      </p>
      <p>
        <a class="btn btn-success" href="users" role="button">Powering <span id="numixps"></span> IXPs</a>
        <a class="btn btn-success" href="https://github.com/inex/IXP-Manager"  role="button">GitHub</a>
        <a class="btn btn-success" href="https://twitter.com/ixpmanager" role="button">@ixpmanager</a>
    </p>
      </div>

<!--
    <div class="alert alert-info">
        <strong>We're hiring!</strong> Island Bridge Networks are looking for a full-time PHP developer to work on
        IXP Manager in their Dublin, Ireland offices. See <a href="http://www.islandbridgenetworks.ie/jobs.html">their
        job annoucement</a> for details.
    </div>

-->

    <?php if( $h404 ): ?>
      <div class="row marketing">
        <div class="alert alert-error"><b>Error 404</b> - Requested file / resource was not found.</div>
      </div>
    <?php endif; ?>

      <div class="row marketing">

        <div class="col-lg-12">
          <h2>About</h2>

          <p>
              We started building IXP Manager at <a href="https://www.inex.ie/">INEX</a> nearly 10 years ago (2007). Over that time it has changed a lot, but always for the better and always to help us run INEX efficiently and with low overhead. Three of our key requirements as an IXP are <b>security, consistency and reliability</b>. IXP Manager has been designed to help us meet these.
          </p>
          <p>
              The three main goals of IXP Manager are:
          </p>
          <ol>
              <li>
                  <b>Zero touch provisioning and configuration.</b> Humans make mistakes. By automating common day-to-day tasks, we reduce the liklihood of such errors.
              </li>
              <li>
                  <b>Do more with less.</b> INEX built an IXP with six points of presence, two infrastructures and 80 members with just 1.2 full time equivalent operatons staff. This would not have been possible without IXP Manager.
              </li>
              <li>
                  <b>Provide excellent service to our members.</b> We pride ourselves on how quickly we can turn up new connections, provision new services and diagnose issues. IXP Manager allows us to do this with a few quick clicks.
              </li>
          </ol>

          <h2>Customer Portal Features</h2>

          <p>
              By using IXP Manager, you can give your customers a portal with the following features:
          </p>
          <ul>
              <li>
                  <b>Traffic graphs</b> - individual port graphs, combined LAG / infrastructure / IXP graphs for the usual metrics of bits / packets / errors / discards per second.
              </li>
              <li>
                  <b>Peer to peer graphs</b> - show your customers who their biggest peers are by bits or packets per second and
                  broken down by IPv4/IPv6.
              </li>
              <li>
                  <b>Peering manager</b> - as an IXP grows, it becomes more difficult to work out who you do and do peer with. Especially when route servers are used and not all members use them. Our <em>Peering Manager</em> tool shows members who they do not peer with in any way and provides the ability to send pre-formatted peering requests.
              </li>
              <li>
                  <b>Route Server Prefix Analysis Tool</b> - strict prefix filtering is a requirement on modern route servers at IXPs. However, this can cause confusion for networks that have many prefixes or deaggregate their prefixes. This tool will show your customers what prefixes are being accepted or rejected by the route servers (and also what prefixes would be accepted if advertised).
              </li>
          </ul>
          <p>
              Additional features in addition to the above include: mailing list management; update NOC / peering / contact details; peering matrices; other member details; documentation; and user management.
          </p>

          <h2>Administrative / Automation Features</h2>

          <p>
              Just some of the features that will help you manage your IXP include:
          </p>
          <ul>
              <li>
                  Add / edit / delete core IXP objects such as points of presence, cabinets, switches, ports, IP addressing, VLANs.
              </li>
              <li>
                  Add / edit / delete customers and their ports. Making changes to these objects trigger automated configuration of services such as:
                  <ul>
                      <li>
                          <b>Route collector</b> - a vital tool for management, quarantining and problem diagnosis. Also provides the underlying system for looking glasses. Cisco IOS, Quagga and Bird all supported (additional systems are easy to add via the templating system).
                      </li>
                      <li>
                          <b>Route servers</b> - these are compulsory and critical IXP infrastruture. Templates are included for Bird and Quagga (more easily added) which include INEX's decade of experience running these systems. This includes strict/le prefix filtering from RADBs, standard IXP communities and other security mechanisms.
                      </li>
                      <li>
                          <b>Graphing configuration</b> - for versions <=4.1 this means MRTG configuration and for >= 4.2, this means our new Grapher backend.
                      </li>
                      <li>
                          <b>Monitoring and alerting</b> - IXP Manager will generate configurations for Nagios and Smokeping.
                      </li>
                      <li>
                          Other automated service configuration includes AS112, reverse DNS for the IXP address range, RIR AS-SET and ASN objects.
                      </li>
                  </ul>
              </li>
              <li>
                  <b>JSON Export Schema</b> - <a href="https://github.com/euro-ix/json-schemas">the Euro-IX data export standard</a> <em>just works</em>.
              </li>
              <li>
                  Many more IXP tools and utilities, dashboards and management functions.
              </li>
          </ul>

          <br><br>
        <h4>Copyright, License and Redistribution</h4>
        <p>
          &copy; Copyright 2011 - <?php echo date('Y'); ?> Internet Neutral Exchange Association Company Limited by Guarantee (INEX), Dublin, Ireland.
        </p>
        <p class="small">
          IXP Manager is free software: you can redistribute it and/or modify it under the terms of the
          <a href="http://www.gnu.org/licenses/">GNU General Public License</a> as published by the
          Free Software Foundation, version v2.0 of the License..
        </p>
        </div>

<?php include 'footer.php'; ?>
