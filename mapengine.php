<?php
    $map = $_POST['map'];
    $map_id = '';
    
    $maps = array(
        "#2M"    => "zaXaLzxN782g.kbY2MagcIIIY",
        "#70CM"  => "zaXaLzxN782g.khafwLa9JIfU",
        "#INTER" => "zaXaLzxN782g.kuFTu3PJ38jI",
        "#SDARC" => "zaXaLzxN782g.kMD-d26hLMwk"
    );
    
    if (array_key_exists($map, $maps)) {
        $map_id =$maps[$map];
    }
    

    function make_iframe_map ($map_id){
        $html = "<p><i>More info to come...</i></p>";
        if ( $map_id ) {
            $html     = "<iframe class=\"map-iframe\" ";
            $html    .= "frameborder=\"0\" style=\"border:0\" ";
            $html    .= "src=\"https://mapsengine.google.com/map/embed?&mid=$map_id\"></iframe>";
        }
        return $html;
    }

    $final_iframe = make_iframe_map($map_id);
    echo($final_iframe);

?>
