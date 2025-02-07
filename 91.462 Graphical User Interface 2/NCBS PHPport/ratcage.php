<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <!--
            File: http://weblab.cs.uml.edu/~cburbine/A4_1984ratcage.html
            Christopher Burbine, UMass Lowell Compter Science Student, christopher_burbine@student.uml.edu
            91.461 GUI Programming I, Assignment 4: Formatting Dynamic Text
            Created on September 30, 2013 at 1:21 PM
        
            The HTML doc for assignment 4, loads CSS and JSON to be displayed.
        -->

        <title>Room 101</title>
        
        <!--Links in the Titillium Web font fomr Google Fonts (http://www.google.com/fonts#QuickUsePlace:quickUse/Family).-->
        <link href="http://fonts.googleapis.com/css?family=Titillium+Web:400,700" rel="stylesheet" type="text/css">
        <link href="ratcage.css" type="text/css" rel="stylesheet">

        <!-- 
            Loads jQuery library from the Google Content Delivery Network (CDN).
            Line taken from (http://encosia.com/3-reasons-why-you-should-let-google-host-jquery-for-you/)
            a link provided by Prof. Heines.
        -->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" ></script>

        <!-- Loads JSON file containing the excerpt from 1984, method described and provided by Prof. Heines.-->
        <script type="text/javascript">
            var excerpt;

            jQuery.ajax({
                async: false,
                dataType: "json",
                url: "ratcage.json",
                success: function(data) {
                    excerpt = data;
                }
            });

            $(document).ready(function() {
                placeContent();
            });
        </script>
        <!-- Following script places JSON text in the placeholder on this page, method described and provided by Prof. Heines.-->
        <script type="text/javascript">
            function placeContent() {
                var strContent = "";

                //Creates dynamic content fomr JSON, method described and provided by Prof. Heines.
                strContent += "<h1 class='title'>" + excerpt.title + "</h1>";
                strContent += "<h2 class='author'>" + excerpt.author + "<\h2>";
                strContent += "<h2 class='published'>" + excerpt.published + "<\h3>";
                strContent += "<h2 class='publisher'>" + excerpt.publisher + "<\h3>";
                
                //Following lines will create a button to return to my Assignments page which in turn will link back to this page.
                strContent += "<div class='retAssign'><a href='http://www.cs.uml.edu/~cburbine/PHPport/GUI1.php'>Return to Assignments page</a></div>";
                strContent += "<br>";
               
                //Loops through all paragraphs and sentences. Commented out content used in orginal non-CSS method. Both methods described and provided by Prof. Heines.
                for (var para = 0; para < excerpt.text.paragraphs.length; para++) {
                    strContent += "<p>";
                    //document.writeln("<p>");
                    for (var sent = 0; sent < excerpt.text.paragraphs[para].length; sent++) {
                        strContent += excerpt.text.paragraphs[para][sent] + "&nbsp; ";
                        //document.writeln( excerpt.text.paragraphs[para][sent] + "&nbsp; ");
                    }
                    strContent += "</p>";
                    //document.writeln("</p>");
                }
                //Places dynamic content on page, method described and provided by Prof. Heines.
                $("#content").html(strContent);
            }
        </script>
    </head>
    <body>
        <div class="main">

            <!-- Places dynamic content on the page, method described and provided by Prof. Heines.-->
            <div id="content"></div>

            <!-- Links a YouTube video to the bottom of the page. The video is from the 1984 movie depicting the scene printed from the JSON file. Video posted by user wipeout2x.-->
            <iframe width="540" height="360" src="//www.youtube.com/embed/pLFIxt2cK_0"></iframe>
            <p class="vid">Video source: <a href="http://www.youtube.com/watch?v=pLFIxt2cK_0">http://www.youtube.com/watch?v=pLFIxt2cK_0</a></p>
            
            
            <!--Creates a second "Return to Assignments" button. -->
            <br><div class="retAssign"><a href='http://www.cs.uml.edu/~cburbine/A3_index_Assign.html'>Return to Assignments page</a></div>

        </div>
    </body>
</html>
