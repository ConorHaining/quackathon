// Quick and Messy Countdown Timer (QMCT) (c)(TM) 2017 Adam Hirst

var countdownConfig = {
  title: 'Time left:',
  debug: true,
  fromTime: 1510401600000,
  endTime: 1510488000000,
  mainEl: 'qmct_main',
  styles: `#qmct_main {
      text-align: center;
      border-radius: 100%;
    }

    .qmct_title {
      font-size: 20px;
      text-align: center;
    }

    .qmct_circle {
      width: 200px;
      height: 200px;
      background-color: #f0a141;
      text-align: center;
      font-size: 30px;
      padding: 27px;
      margin: 10px;
      display: inline-block;
      border: 5px solid #001E6E;
      border-radius: 100%;
    }

    .qmct_time {
      display: block;
      font-size: 60px;
    }`
}

function qmctInit(config) {
  var constructLayout = function() {
    var el = document.getElementById(config.mainEl);
    var style = document.createElement("style");
    style.innerHTML = config.styles;
    el.parentNode.insertBefore( style, el );
    el.innerHTML += '<div class="qmct_title">' + config.title + '</div>';
    el.innerHTML += '<div class="qmct_circle"><span id="qmct_h" class="qmct_time"></span> hours</div>';
    el.innerHTML += '<div class="qmct_circle"><span id="qmct_m" class="qmct_time"></span> minutes</div>';
    el.innerHTML += '<div class="qmct_circle"><span id="qmct_s" class="qmct_time"></span> seconds</div>';
  }

  var updateTimer = function() {
    if (!config.debug)
      if (Date.now() > config.endTime) return;

    var h = document.getElementById("qmct_h");
    var m = document.getElementById("qmct_m");
    var s = document.getElementById("qmct_s");

    // get time diff
    var diff = config.endTime - Date.now();
    diff = Math.floor(diff / 1000);

    s.innerText = diff % 60;
    m.innerText = Math.floor((diff / 60)) % 60;
    h.innerText = Math.floor(diff / 3600);
  }

  if (!config.debug)
    if (Date.now() > config.fromTime) return;

  constructLayout();
  window.setInterval(updateTimer, 500);
}

qmctInit(countdownConfig);
