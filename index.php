<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php include("links.php"); ?>
    <link rel="stylesheet" href="CSS/setting.css">
    <title>LightOS</title>
</head>
<body onload="date_time()">

<div id="home">

    <div class="w3-bar" id="status_bar">
        <div class="w3-bar-item w3-right" style="padding: 7px 8px;font-size: .8em">
        <span class="fa-stack">
        <i class="fas fa-battery-empty fa-inverse fa-rotate-180 fa-stack-2x"  id="charging"></i>
        <i class="fas fa-stack-1x fa-inverse" style="font-size: 8px" id="bat_percent">78</i>
        </span>
        </div>
        <div class="w3-bar-item w3-right" style="padding:8px 2px;font-size: 1em">
            <i class="fas fa-signal fa-inverse" id="signal"></i>
        </div>
    </div>


    <div id="watch_container">
    <div id="hour" class="cell"></div>
    <div id="separator" class="hide cell separator">:</div>
    <div id="min" class="cell"></div>
    <div id="format" class="cell"></div>
    <div id="date"></div>
</div>

<div id="apps">
    <div id="left" style="display: flex;width: 100%">
        <div id="one" class="col one" onclick="open_browser('https://www.wikipedia.org')"><i class="fab fa-wikipedia-w"></i></div>
        <div id="two" class="col two" onclick="open_browser('https://www.google.com/search?igu=1&ei=&q=Urooj+Khan')"><i class="fab fa-google"></i></div>
    </div>
    <div class="col three" onclick="open_menu()" ondblclick="minimise()"><i class="fas fa-grip-horizontal"></i></div>
    <div id="right" style="display: flex;width: 100%">
        <div id="four" class="col four" onclick="open_browser('https://hydro.click')"><i class="fab fa-spotify"></i></div>
        <div id="five" class="col five" onclick="open_chrome()"><i class="fab fa-chrome"></i></div>
    </div>
</div>
</div>

<div id="menu">
    <div id="menu_container">
        <div id="row">
            <div class="col" onclick="battery()"><i class="fab fa-facebook-square" style="color: #3b5998"></i></div>
            <div class="col"><i class="fab fa-instagram" style="color: blueviolet;"></i></div>
            <div class="col"><i class="fab fa-google" style="color: white"></i></div>
            <div class="col"><i class="fab fa-twitter w3-text-blue"></i></div>
        </div>
        <div id="row">
            <div class="col"><i class="fas fa-camera" onclick="open_option('camera')" style="color: #ffff65;"></i></div>
            <div class="col"><i class="fab fa-facebook-messenger" style="color: #01abff;"></i></div>
            <div class="col"><i class="fab fa-linkedin" style="color: #3F729B"></i></div>
            <div class="col"><i class="fab fa-whatsapp w3-text-green"></i></div>
        </div>
        <div id="row">
            <div class="col"><i class="fab fa-spotify w3-text-green"></i></div>
            <div class="col" onclick="open_option('setting')"><i class="fas fa-cog" style="color: fuchsia"></i></div>
            <div class="col"><i class="fab fa-chrome" style="color: orange"></i></div>
            <div class="col"><i class="fab fa-youtube w3-text-red"></i></div>
        </div>
        <div id="row">
            <div class="col"><i class="fab fa-google-drive"  style="color: #FBBC05;"></i></div>
            <div class="col"><i class="fab fa-amazon"  style="color: white;"></i></div>
            <div class="col"><i class="fas fa-envelope"  style="color: white;"></i></div>
            <div class="col" onclick="open_option('calculator')"><i class="fas fa-calculator"  style="color: white;"></i></div>
        </div>
    </div>
</div>

<div id="browser">
    <div class="w3-bar w3-blue w3-center">
        <div class="w3-bar-item w3-button w3-left w3-xlarge" onclick="history.back()"><i class="fas fa-long-arrow-alt-left"></i></div>
        <span class="w3-button w3-hover-red w3-xlarge" onclick="close_browser()"><i class="fas fa-times"></i></span>
        <div class="w3-bar-item w3-button w3-right w3-xlarge" onclick="history.forward()"><i class="fas fa-long-arrow-alt-right"></i></div>
    </div>
    <iframe id="iframe1" src="" frameborder="0"></iframe>
</div>

<div id="setting">
    <?php include('setting.php');?>
</div>

<div id="chrome">
    <div class="w3-row w3-dark-gray w3-center">
        <div class="w3-col s1 w3-hover-gray w3-large" onclick="history.back()" title="back" ><i class="fas fa-long-arrow-alt-left"></i></div>
        <div class="w3-col s1 w3-hover-gray w3-large" onclick="history.forward()" title="forward" ><i class="fas fa-long-arrow-alt-right"></i></div>
        <div class="w3-col s1 w3-hover-gray w3-large" onclick="document.getElementById('iframe2').src += '';" title="reload" ><i class="fas fa-redo"></i></div>
        <div class="w3-col s7 m6 l5 searchcenter w3-padding">
            <div id="searchcontainer" class="w3-row">
                <div class="w3-col" style="width: 80%">
                    <input type="search" name="" id="search" value="https://www.">
                </div>
                <div id="srcbtn" class="w3-col" style="width: 20%" onclick="chrome_search()">
                    <i class="fa fa-search"></i>
                </div>
            </div>
        </div>
        <div class="w3-col s1 w3-hover-red w3-large w3-right" onclick="close_chrome()" title="close"><i class="fas fa-times"></i></div>
    </div>
    <iframe id="iframe2" src="https://www.wikipedia.org" frameborder="0"></iframe>
</div>

<div id="calculator">
    <?php include('calculator.php');?>
</div>

<div id="camera">
    <iframe src="https://uroojk844.github.io/camera-app/" frameborder="0"></iframe>
</div>

<script src="JS/index.js?v=<?php echo rand(); ?>"></script>
</body>
</html>