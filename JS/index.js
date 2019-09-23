function date_time() {
    let d = new Date();
    let hour = d.getHours();
    let min = ('0'+d.getMinutes()).slice(-2);
    if(hour > 12) {
        document.getElementById("hour").innerHTML = ('0'+(hour-12)).slice(-2);
        document.getElementById("format").innerHTML = "PM";
    }
    else{
        document.getElementById("hour").innerHTML = hour;
        document.getElementById("format").innerHTML = "AM";
    }
    document.getElementById("min").innerHTML = min;
    document.getElementById("date").innerHTML = d.toDateString();
    document.getElementById("separator").classList.toggle("hide");
}setInterval(date_time, 500);

var c = false;

function open_menu(){
    if(c === false) {
        document.getElementById("home").style.height = "0vh";
        document.getElementById("menu").style.height = "100vh";
        document.getElementById('left').style.display = "none";
        document.getElementById('right').style.display = "none";

        c = true;
    }
    else{
        document.getElementById("home").style.height = "100vh";
        document.getElementById("menu").style.height = "0vh";
        document.getElementById('left').style.display = "flex";
        document.getElementById('right').style.display = "flex";
        c = false;
    }
}

function open_browser(e){
        document.getElementById("home").style.height = "0vh";
        document.getElementById("browser").style.height = "100vh";
    document.getElementById('apps').style.display = "none";
        document.getElementById("iframe1").src = e;
}

function close_browser(){
    document.getElementById("home").style.height = "100vh";
    document.getElementById("browser").style.height = "0vh";
    document.getElementById('apps').style.display = "flex";
}

function open_option(e) {
    document.getElementById("menu").style.height = "0vh";
    document.getElementById(e).style.height = "100vh";
    document.getElementById('apps').style.display = "none";
}

function minimise(e) {
    document.getElementById(e).style.height = "0vh";
    document.getElementById("menu").style.height = "100vh";
    document.getElementById('apps').style.display = "flex";
}

function open_chrome(){
    document.getElementById("home").style.height = "0vh";
    document.getElementById("chrome").style.height = "100vh";
    document.getElementById('apps').style.display = "none";
}

function close_chrome(){
    document.getElementById("home").style.height = "100vh";
    document.getElementById("chrome").style.height = "0vh";
    document.getElementById('apps').style.display = "flex";
}

function chrome_search() {
    let x = document.getElementById("search").value;
    document.getElementById("iframe2").src = x;
}

function battery() {
    navigator.getBattery().then(
        function (batteryManager) {
            let level = batteryManager.level * 100;

            if (batteryManager.charging) {
                document.getElementById("bat_percent").innerHTML = '<i class="fas fa-plug fa-rotate-270"></i>';
            }else{
                document.getElementById("bat_percent").innerHTML = Math.round(level);
            }
        })
}setInterval(battery, 100);

function signal() {
    if(navigator.onLine){
        document.getElementById("signal").className = "fas fa-signal fa-inverse";
    }else{
        document.getElementById("signal").className = "fas fa-times fa-inverse";
    }
}setInterval(signal, 100);