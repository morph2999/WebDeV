<!DOCTYPE html>
<html>

    <head>
        <title>WebShop</title>

        <!-- Link zur css-Datei -->
        <link href="newcss.css" type="text/css" rel="stylesheet">

        <!-- link zur Javaskript-Datei -->
        <script language="javascript" type="text/javascript" src="javascript.js"></script>
        <meta charset="UTF-8">
    </head>

    <body>
            <div id="inhalt" align="center" style="background: rgba(225, 225, 225, 0.5);">    
                <img src="images/malefemale.png" align="center" usemap="#areale">
                <map name="areale">
                    <area shape="rect" coords="0,0,333,500" href='#' onclick="Damen()" alt="EckeLinks" title=Damen>
                    <area shape="rect" coords="333,0,666,500" href='#' onclick="Herren()" alt="EckeRechts" title="Herren">                    
                </map>
            </div>
        </div>
    </body>
</html>