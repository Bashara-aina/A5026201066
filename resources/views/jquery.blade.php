<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JQuery Dimensions</title>

    <style>
        body {
            background: #5555;
        }
        button {
            font-size: 12px;
            align-items: center;
            margin: auto;
            width: 80%;
            display: flex;
            text-align: center;
            display: grid;

        }
        p {
            width: 30%;
            border: 2px red solid;
            text-align: center;
            margin-left: 35%;
            padding: 5px;
        }
        div {
            color: red;
            font-weight: bold;
        }

        .innerheight {
            width: 60px;
            padding: 10px;
            height: 70px;
            float: left;
            margin: 5px;
            background: red;
            color: white;
            cursor: pointer;
            display: flex;
            text-align: center;
            display: grid;
            align-items: center;
            margin: 0 5px 0 50px;
        }

        .innerheight:hover{
            background: blue;
        }

        .mod{
            background: green;
            cursor: default;
        }

    </style>

    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
</head>

<body>
<!-- Button -->
<button id="getp">Get Paragraph Height</button>
<button id="getd">Get Document Height</button>
<button id="getw">Get Window Height</button>

<div id="jawaban">&nbsp;</div>
<div id="jawaban2">&nbsp;</div>
<p>
  Sample paragraph to test height
</p>

<br><br>

<div class="innerheight">Satu</div>
<div class="innerheight">Dua</div>
<div class="innerheight">Tiga</div>
<div class="innerheight">Empat</div>
<div class="innerheight">Lima</div>


<script>
    function showHeight(element, height) {
    $("#jawaban").text("The height for the " + element + " is " + height + "px.");
    }
    $("#getp").click(function() {
    showHeight("paragraph", $("p").height());
    });
    $("#getd").click(function() {
    showHeight("document", $(document).height());
    });
    $("#getw").click(function() {
    showHeight("window", $(window).height());
    });

    function showWidth( element, width ) {
  $( "#jawaban2" ).text( "The width for the " + element + " is " + width + "px." );
    }
    $( "#getp" ).click(function() {
    showWidth( "paragraph", $( "p" ).width() );
    });
    $( "#getd" ).click(function() {
    showWidth( "document", $( document ).width() );
    });
    $("#getw").click(function() {
    showWidth( "window", $( window ).width() );
    });

    var p = $("p").first();
    $("p").last().text("Sample paragraph to test height innerHeight:" + p.innerHeight() + " innerWidth:" + p.innerWidth() + " outerHeight:" + p.outerHeight() + " outerHeight(true):" + p.outerHeight(true));

    var modHeight = 70;
    var modWidth = 60;
    $("div").one("click", function() {
    $(this).innerHeight(modHeight).addClass("mod");
    $(this).innerWidth(modWidth).addClass("mod");
    modHeight -= 8;
    modWidth -= 8;
    });

</script>

</body>
</html>
