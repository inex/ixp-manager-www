<?php
    $active = 'users';

    $additionalHeader = <<<END_HEADER
    <link rel="stylesheet" href="css/leaflet/v0.7.7/leaflet.css" />
    <link rel="stylesheet" href="css/map.css" />
END_HEADER;

    $ixps = file_get_contents("js/ixp-manager-users.json");

    $additionalFooter = <<<END_HEADER
    <script>
        var ixps = {$ixps};
    </script>
    <script src="js/leaflet/v0.7.7/leaflet.js"></script>
    <script src="js/map.js"></script>
END_HEADER;


    include 'header.php'
?>

      <div class="row marketing">
        <div class="col-lg-12">

<h2>IXP Manager Around the World</h2>

<p>
    We're proud to say that, at last count, there are <span id="numixps">...</span> IXPs
    using IXP Manager around the world
</p>

<div id="mapid"></div>

<h3>Get Listed / Correct My Entry</h3>

<p>
    We've done out best to make this as accurate as possible. But, if you are not
    listed above (or you want to change your entry), please email
    <a href="mailto:operations@inex.ie">operations@inex.ie</a> with your IXP's:
    full name, short name, city / region / country, GPS co-ordinates and website URL.
</p>

<h3>IXP Manager Users</h3>

<table id="table-users" class="table">
    <thead>
        <tr>
            <th>Name</th>
            <TH>Shortname</th>
            <th>Location</a>
        </tr>
    </thead>
    <tbody id="table-users-body">
    </tbody>
</table>


<br><br>
<p>
    <em>This data is available <a href="http://www.ixpmanager.org/js/ixp-manager-users.json">as JSON from here</a>.</em>
</p>



        </div>


<?php include 'footer.php'; ?>
