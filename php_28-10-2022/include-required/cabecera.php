<?php
    function createHeader($title = "ejemplo"){
        print <<<END
            <head>
                <title>$title</title>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link href="css/style.css" rel="stylesheet">
            </head>
        END;

        // print "<head>\n";
        // print "<title>$title</title>\n";
        // print "<meta charset='UTF-8'>\n";
        // print "<meta name='viewport' content='width=device-width, initial-scale=1'>\n";
        // print "<link href='css/style.css' rel='stylesheet'>\n";
        // print "</head>\n";
    }
?>


