<?php
    $map = $_POST['map'];
    $map_id = '';

    if ($map == '2M') {
        $map_id = "zaXaLzxN782g.kbY2MagcIIIY";
    }

    if ($map == '70CM') {
        $map_id = "zaXaLzxN782g.khafwLa9JIfU";
    }

    if ($map == 'INTER') {
        $map_id = "zaXaLzxN782g.kuFTu3PJ38jI";
    }

    if ($map == 'SDARC') {
        $map_id = "zaXaLzxN782g.kMD-d26hLMwk";
    }

    if ($map == '1-25M') {
        $map_id = "";
    }

    if ($map == '6M') {
        $map_id = "";
    }

    if ($map == '33CM') {
        $map_id = "";
    }

    if ($map == '23CM') {
        $map_id = "";
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
