
$( function() {

    var mymap = L.map('mapid').setView([0, 0], 1);

    L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
        attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://mapbox.com">Mapbox</a>',
        maxZoom: 18,
        id: 'mapbox.satellite',
        accessToken: 'pk.eyJ1IjoiYmFycnlvNzkiLCJhIjoiY2lwNnM3ZDdiMDAwdnVxbmw1bDl2bXlqMCJ9.oessFntE_PmG5JFOigEP5Q'
    }).addTo(mymap);

    var count = 0;

    ixps.ixp_list.forEach( function(ixp) {
        var marker = L.marker(ixp.gps).addTo(mymap);
        marker.bindPopup(
            '<b><a href="' + ixp.url + '">' + ixp.shortname +
            '</a></b><br>' +
            ( ixp.city ? ixp.city + ', ' : '' ) + ixp.country
        );

        $("#table-users-body").append( "<tr>" +
            "<td>" + ixp.name + "</td>" +
            "<td><a href=\"" +ixp.url + "\">" + ixp.shortname + "</a></td>" +
            "<td>" + ( ixp.city ? ixp.city + ', ' : '' ) + ixp.country + "</td>" +
            "</tr>"
        );

        count++;
    });

    $("#numixps").html("<b>" + count + "</b>" );

});
