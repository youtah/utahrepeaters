<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Utah HAM Radio Repeaters</title>
        <meta name="description" content="Utah HAM Radio Repeaters">
        <meta name="keywords" content="Utah, HAM, HAM RADIO, Operators, Repeaters, amateur radio, amateue, Repeater Systems">
        <meta name="author" content="Jeff McGrath">
        <link rel="stylesheet" href="main.css" media="all" type="text/css" />
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="main.js"></script>
        <!-- bootstrap responsive ui -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>    
        <!-- end bootstrap -->
        
    </head>
    <body>
        <div id="container" class="rounded-corners">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="#">Utah HAM Repeater Maps</a>
                    </div>
                    
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbar-collapse">
                        <!-- Nav tabs -->
                        <ul class="nav navbar-nav" role="tablist">
                          <li role="presentation" class="active"><a href="#2M" role="tab" data-toggle="tab">2 meter</a></li>
                          <li role="presentation"><a href="#70CM" role="tab" data-toggle="tab">70CM</a></li>
                          <li role="presentation"><a href="#INTER" role="tab" data-toggle="tab">Intertie</a></li>
                          <li role="presentation"><a href="#SDARC" role="tab" data-toggle="tab">SDARC Sinbad</a></li>
                          <li role="presentation"><a href="#1-25M" role="tab" data-toggle="tab">1.25 Meter</a></li>
                          <li role="presentation"><a href="#6M" role="tab" data-toggle="tab">6 Meter</a></li>
                          <li role="presentation"><a href="#23CM" role="tab" data-toggle="tab">23CM</a></li>
                          <li role="presentation"><a href="#33CM" role="tab" data-toggle="tab">33CM</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
            <section id="maps">
                <div role="tabpanel">
                    
                  
                    <!-- Tab panes -->
                    <div class="tab-content">
                      <div role="tabpanel" class="tab-pane active map-div" id="2M"></div>
                      <div role="tabpanel" class="tab-pane map-div" id="70CM"></div>
                      <div role="tabpanel" class="tab-pane map-div" id="INTER"></div>
                      <div role="tabpanel" class="tab-pane map-div" id="SDARC"></div>
                      <div role="tabpanel" class="tab-pane map-div" id="1-25M"></div>
                      <div role="tabpanel" class="tab-pane map-div" id="6M"></div>
                      <div role="tabpanel" class="tab-pane map-div" id="23CM"></div>
                      <div role="tabpanel" class="tab-pane map-div" id="33CM"></div>
                    </div>  
                </div>
            </section>
            <article>
                <p>A collection of Utah amateur HAM radio repeaters and systems displayed on Google Maps.</p>
                <p>This site is privately owned and operated. This site has no affiliation with any groups.</p>
            </article>
            <div class="float-clear"></div>
        </div>
        <?php include("googleanalyticsjavascript.php"); ?>
    </body>
</html>
