$(function() {
    // Initial page load
    $.ajax({
        type: "POST",
        url: "mapengine.php",
        data: { map: "2M"},
        success: function(result){
            $("#googlemaps-tab1").html(result);
        }
    });

    // Reloads the map on each tab click
    $("a").click(function(event){
        event.preventDefault();
        var mapid = $(this).attr('id');
        var maptab = $(this).attr('href');
        //console.log("Map ID: "+mapid);
        //console.log("Tab Target: "+maptab);
        $.ajax({
            type: "POST",
            url: "mapengine.php",
            data: { map: mapid},
            success: function(result){
                $(maptab).html(result);
            }
        });
    });
});
