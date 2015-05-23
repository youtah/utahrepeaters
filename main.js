$(function() {
    // Initial page load
    $.ajax({
        type: "POST",
        url: "mapengine.php",
        data: { map: "#2M"},
        success: function(result){
            $("#2M").html(result);
        }
    });

    // Reloads the map on each tab click
    $("a").click(function(event){
        event.preventDefault();
        var map = $(this).attr('href');
        $.ajax({
            type: "POST",
            url: "mapengine.php",
            data: { map: map},
            success: function(result){
                $(map).html(result);
            }
        });
    });
});
