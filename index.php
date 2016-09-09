<html>
<head>
    <script src="js/svg.js"></script>
    <script src="js/turtle.js"></script>
    <script   src="//code.jquery.com/jquery-1.12.4.js"   integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="   crossorigin="anonymous"></script>
    <script>
        jQuery(function(){


        });
    </script>
    <style>
      line, circle{
          stroke: black;
          fill: none;
      }
    </style>
</head>
<body>
<textarea id="textbox">
    turtle
                .down()
                .fw(100)
                .left(90)
                .fw(100)
                .circle(200)
                .arc(98, -180)

                .up()
                .fw(80)

                .down()
                .right(90)
                .fw(25)
</textarea>
<button onclick="var turtle = new Turtle(document.getElementById('svg')); eval(jQuery('#textbox').val());"></button>
    <div id="svg-container" style="width: 1000px; height: 1000px">
        <svg
            xmlns:dc="http://purl.org/dc/elements/1.1/"
            xmlns:cc="http://creativecommons.org/ns#"
            xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
            xmlns:svg="http://www.w3.org/2000/svg"
            xmlns="http://www.w3.org/2000/svg"
            xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
            xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
            width="210mm"
            height="297mm"
            viewBox="0 0 744.09448819 1052.3622047"
            id="svg"
            version="1.1"
            inkscape:version="0.91 r13725"
            sodipodi:docname="drawing-1.svg">
            <defs
                id="defs6058" />
            <sodipodi:namedview
                id="base"
                pagecolor="#ffffff"
                bordercolor="#666666"
                borderopacity="1.0"
                inkscape:pageopacity="0.0"
                inkscape:pageshadow="2"
                inkscape:zoom="0.35"
                inkscape:cx="-39.285714"
                inkscape:cy="520"
                inkscape:document-units="mm"
                inkscape:current-layer="main"
                showgrid="false"
                inkscape:window-width="1680"
                inkscape:window-height="901"
                inkscape:window-x="0"
                inkscape:window-y="1"
                inkscape:window-maximized="1" />
            <metadata
                id="metadata6061">
                <rdf:RDF>
                    <cc:Work
                        rdf:about="">
                        <dc:format>image/svg+xml</dc:format>
                        <dc:type
                            rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
                        <dc:title></dc:title>
                    </cc:Work>
                </rdf:RDF>
            </metadata>
            <g
                inkscape:label="Layer 1"
                inkscape:groupmode="layer"
                id="layer1" />
        </svg>

    </div>
</body>
</html>