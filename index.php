<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <link rel="icon" href="6.png">
    <title>Speedtest</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Paytone+One|Montserrat" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div id="masterCont">
        <div id="left">
            <div id="timeLeft">
                <p id="counthead" class="BryantWebRegular">Timeleft</p>
                <p id="secs" class="BryantWebRegular"></p>
            </div>
            <div id="current">
                <p id="counthead" class="BryantWebRegular">Score</p>
                <p id="score" class="BryantWebRegular">0</p>
            </div>
            <div id="level">
                <p id="counthead" class="BryantWebRegular">Level</p>
                <p id="score" class="BryantWebRegular">1</p>
            </div>
            <div id="wordlist">
                <div id="arrow"></div>
                <div id="scrollingwords">
                    <ul style="list-style: none;" class="BryantWebRegular"></ul>
                </div>
            </div>
        </div>

        <div id="center">
            <div id="circular">
                <!--<img src="svive_ikon.png" class="klogo" />-->
                <div id="quaters-hider" class="movers"></div>
                <div class="quaters movers" id="q1"></div>
                <div class="quaters movers" id="q2"></div>
                <div class="quaters movers" id="q3"></div>
                <div class="quaters movers" id="q4"></div>
                <!--<div class="bouncy"></div>-->
                <p id="word" class="BryantWebRegular"></p>
                <p class="inBeforeStart">Type the exact word as shown. If its correct, a new word will appear.</p>
                <button class="button letsplay" onclick="startGame();">Let's play!</button>
            </div>
            <div id="">
                <input id="input" class="wordInput" disabled="false" class="BryantWebRegular" type="text" placeholder="Press play to begin" spellcheck="false" />
            </div>
            <!--<div id="message">
                    Level 0
                </div>-->
        </div>
        <!--<div id="stats">
            <div style="display:flex;">

                <div id="high">
                    <p id="highhead" class="BryantWebRegular"><?php echo ($highscore['date'] == $yearMonthDay ? 'All time high<br>' . $highscore['name'] . '' : 'No High Score Today'); ?></p>
                    <p id="highalltime"><?php echo (isset($allTimeHigh) ? 'All time high<br>' . $allTimeHigh['name'] . '' : 'No High Score Today'); ?></p>
                    <p id="highscore" class="BryantWebRegular"><?php echo ($highscore['date'] == $yearMonthDay ? '' . $highscore['score'] . '' : '0'); ?> </p>
                </div>
            </div>
            <div id="graph">
                <canvas id="wpmchart" width="100%" height="100%"></canvas>
            </div>
        </div>-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/howler/2.1.2/howler.js"></script>
        <script src="script.js"></script>
        <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js"></script>-->

    </div>
</body>

</html>