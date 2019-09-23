<?php include_once('links.php'); ?>

<div class="w3-bar">
    <div class="w3-bar-item w3-right w3-text-white w3-hover-red"
         onclick="minimise('calculator')"><i class="fas fa-times"></i></div>
</div>

<div id="calc_body" class="w3-card-4 w3-col s10 m6 l4">
    <form name="calc">
    <input type="text" id="display" name="display" readonly>
    <div class="button" onclick="calc.display.value += '1' ;">1</div>
    <div class="button" onclick="calc.display.value += '2' ;">2</div>
    <div class="button" onclick="calc.display.value += '3' ;">3</div>
    <div class="button" onclick="calc.display.value += '+' ;">+</div>
    <div class="button" onclick="calc.display.value += '4' ;">4</div>
    <div class="button" onclick="calc.display.value += '5' ;">5</div>
    <div class="button" onclick="calc.display.value += '6' ;">6</div>
    <div class="button" onclick="calc.display.value += '-' ;">-</div>
    <div class="button" onclick="calc.display.value += '7' ;">7</div>
    <div class="button" onclick="calc.display.value += '8' ;">8</div>
    <div class="button" onclick="calc.display.value += '9' ;">9</div>
    <div class="button" onclick="calc.display.value += '*' ;">*</div>
    <div class="button" onclick="calc.display.value += '.' ;">.</div>
    <div class="button" onclick="calc.display.value += '0' ;">0</div>
    <div class="button" onclick="calc.display.value = calc.display.value.substr(0,calc.display.value.length-1);">&leftarrow;</div>
    <div class="button" onclick="calc.display.value += '/' ;">/</div>
    <div class="button equal" onclick="calc.display.value = eval(calc.display.value);">=</div>
    <div class="button" onclick="calc.display.value = '' ;">C</div>
    <div class="button" onclick="calc.display.value = Math.pow(calc.display.value, 2);">&xscr;<sup><small>2</small></sup></div>
    <div class="button" onclick="calc.display.value = Math.pow(calc.display.value, 3) ;">&xscr;<sup><small>3</small></sup></div>
    <div class="button" onclick="calc.display.value = ">!</div>
    <div class="button" onclick="calc.display.value = Math.sqrt(calc.display.value);">&Sqrt;</div>
    </form>
</div>