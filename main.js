$("#33").click(function(){
    $.ajax({url: "mapengine.php?map=33", success: function(result){
        $("#googlemaps-tab8").html(result);
    }});
});
$("#23").click(function(){
    $.ajax({url: "mapengine.php?map=33", success: function(result){
        $("#googlemaps-tab8").html(result);
    }});
});
