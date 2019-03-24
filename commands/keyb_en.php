<?php

?>

<script>
    function keyb_add(what) {
        usr_input = gbi("usr_input");
        if(what == "backspace") {
            tmp = usr_input.value;
            tmp_size = (tmp.length == 0) ? 1 : tmp.length;
            tmp = tmp.substring(0, tmp_size - 1);
            usr_input.value = tmp;
        }
        if (what == "quot") {
            usr_input.value = usr_input.value + "\"";
        }
        if (what != "quot" && what != "backspace") {
            usr_input.value = usr_input.value + "" + what;
        }
        y = document.getElementById("counter");
        y.innerHTML = usr_input.value.length;
    }

  function enter_key(){
    o = new Object;
    o.which = 13;
    press_key(o);
  }
    
  function change_keys(variant){
    div_normal = gbi("normal");
    div_capital = gbi("capital");
    div_symbol = gbi("symbol");

    if(variant == 'normal'){
      div_normal.style.display = "block";
      div_capital.style.display = "none";
      div_symbol.style.display = "none";
    } 
    if (variant == 'capital'){
      div_normal.style.display = "none";
      div_capital.style.display = "block";
      div_symbol.style.display = "none";
    }
    if (variant == 'symbol'){
      div_normal.style.display = "none";
      div_capital.style.display = "none";
      div_symbol.style.display = "block";
    }
  }
    
  function show_keyb(){
    keyb_us_all = gbi("keyb_us_all");
    terminal_out = gbi("terminal_out");
    
    if(keyb_us_all.style.display == "none") {
      keyb_us_all.style.display = "block";
      terminal_out.style.height = "50%";
    } else {
      keyb_us_all.style.display = "none";
      terminal_out.style.height = "80%";
    }
  }
</script>
<STYLE>


.butt:active{
    background:gray;
}
.but2:active{
    background:gray;
}
.but3:active{
    background:gray;
}
.but4:active{
    background:gray;
}


.butt { font-family: monospace;
        font-size: 18px;
        padding: 0.3em;
        margin: 0.2em; 
        display:inline-block;
        background-color:151515;
        color:lightgreen;
      }
.but2 { font-family: monospace;
        font-size: 18px;
        padding: 0.3em;
        margin: 0.2em; 
        display:inline-block;
        background-color:black;
        color:black;
      }
.but3 { font-family: monospace;
        font-size: 18px;
        padding: 0.3em;
        margin: 0.2em; 
        display:inline-block;
        background-color:lightgreen;
        color:black;
      }
.but4 { font-family: monospace;
        font-size: 18px;
        padding: 0.3em;
        margin: 0.2em; 
        display:inline-block;
        background-color:gray;
        color:black;
      }
      

      
</STYLE>
<a href="javascript:show_keyb();">SHOW / HIDE KEYBOARD</a>
<br>
<div id="keyb_us_all" style="display:none;">
  <div id="normal" style="display:block; text-align:center;"> 
    <div class="butt" onclick="keyb_add('q');">q</div>
    <div class="butt" onclick="keyb_add('w');">w</div>
    <div class="butt" onclick="keyb_add('e');">e</div>
    <div class="butt" onclick="keyb_add('r');">r</div>
    <div class="butt" onclick="keyb_add('t');">t</div>
    <div class="butt" onclick="keyb_add('y');">y</div>
    <div class="butt" onclick="keyb_add('u');">u</div>
    <div class="butt" onclick="keyb_add('i');">i</div>
    <div class="butt" onclick="keyb_add('o');">o</div>
    <div class="butt" onclick="keyb_add('p');">p</div>

    <br>
    <div class="butt" onclick="keyb_add('a');">a</div>
    <div class="butt" onclick="keyb_add('s');">s</div>
    <div class="butt" onclick="keyb_add('d');">d</div>
    <div class="butt" onclick="keyb_add('f');">f</div>
    <div class="butt" onclick="keyb_add('g');">g</div>
    <div class="butt" onclick="keyb_add('h');">h</div>
    <div class="butt" onclick="keyb_add('j');">j</div>
    <div class="butt" onclick="keyb_add('k');">k</div>
    <div class="butt" onclick="keyb_add('l');">l</div>
    <br>
    <div class="butt" onclick="keyb_add('z');">z</div>
    <div class="butt" onclick="keyb_add('x');">x</div>
    <div class="butt" onclick="keyb_add('c');">c</div>
    <div class="butt" onclick="keyb_add('v');">v</div>
    <div class="butt" onclick="keyb_add('b');">b</div>
    <div class="butt" onclick="keyb_add('n');">n</div>
    <div class="butt" onclick="keyb_add('m');">m</div>
    <div class="butt" onclick="keyb_add(',');">,</div>
    <div class="butt" onclick="keyb_add('.');">.</div>
    <br>
    <div class="butt" onclick="keyb_add('backspace')">&#x25C0;</div>
    <div class="butt" onclick="keyb_add(' ')">____________</div>
    <div class="but3" onclick="change_keys('symbol');">%</div>
    <div class="but3" onclick="change_keys('capital');">&#x23CF</div>
    <div class="butt" onclick="enter_key();"> &#x23CE </div>

  </div>

  <div id="capital" style="display:none; text-align:center;">
    <div class="butt" onclick="keyb_add('Q');">Q</div>
    <div class="butt" onclick="keyb_add('W');">W</div>
    <div class="butt" onclick="keyb_add('E');">E</div>
    <div class="butt" onclick="keyb_add('R');">R</div>
    <div class="butt" onclick="keyb_add('T');">T</div>
    <div class="butt" onclick="keyb_add('Y');">Y</div>
    <div class="butt" onclick="keyb_add('U');">U</div>
    <div class="butt" onclick="keyb_add('I');">I</div>
    <div class="butt" onclick="keyb_add('O');">O</div>
    <div class="butt" onclick="keyb_add('P');">P</div>
    <br>
    <div class="butt" onclick="keyb_add('A');">A</div>
    <div class="butt" onclick="keyb_add('S');">S</div>
    <div class="butt" onclick="keyb_add('D');">D</div>
    <div class="butt" onclick="keyb_add('F');">F</div>
    <div class="butt" onclick="keyb_add('G');">G</div>
    <div class="butt" onclick="keyb_add('H');">H</div>
    <div class="butt" onclick="keyb_add('J');">J</div>
    <div class="butt" onclick="keyb_add('K');">K</div>
    <div class="butt" onclick="keyb_add('L');">L</div>

    <br>
    <div class="butt" onclick="keyb_add('Z');">Z</div>
    <div class="butt" onclick="keyb_add('X');">X</div>
    <div class="butt" onclick="keyb_add('C');">C</div>
    <div class="butt" onclick="keyb_add('V');">V</div>
    <div class="butt" onclick="keyb_add('B');">B</div>
    <div class="butt" onclick="keyb_add('N');">N</div>
    <div class="butt" onclick="keyb_add('M');">M</div>
    <div class="butt" onclick="keyb_add(',');">,</div>
    <div class="butt" onclick="keyb_add('.');">.</div>
    <br>
    <div class="butt" onclick="keyb_add('backspace')">&#x25C0;</div>
    <div class="butt" onclick="keyb_add(' ')">____________</div>
    <div class="but3" onclick="change_keys('symbol');">%</div>
    <div class="but4" onclick="change_keys('normal');">&#x23CF</div>
    <div class="butt" onclick="enter_key();"> &#x23CE </div>

    <br>
  </div>

  <div id="symbol" style="display:none; text-align:center;">
    <div class="butt" onclick="keyb_add('1');">1</div>
    <div class="butt" onclick="keyb_add('2');">2</div>
    <div class="butt" onclick="keyb_add('3');">3</div>
    <div class="butt" onclick="keyb_add('4');">4</div>
    <div class="butt" onclick="keyb_add('5');">5</div>
    <div class="butt" onclick="keyb_add('6');">6</div>
    <div class="butt" onclick="keyb_add('7');">7</div>
    <div class="butt" onclick="keyb_add('8');">8</div>
    <div class="butt" onclick="keyb_add('9');">9</div>
    <div class="butt" onclick="keyb_add('0');">0</div>
    <br>
    <div class="butt" onclick="keyb_add('!');">!</div>
    <div class="butt" onclick="keyb_add('@');">@</div>
    <div class="butt" onclick="keyb_add('#');">#</div>
    <div class="butt" onclick="keyb_add('$');">$</div>
    <div class="butt" onclick="keyb_add('%');">%</div>
    <div class="butt" onclick="keyb_add('^');">^</div>
    <div class="butt" onclick="keyb_add('&');">&</div>
    <div class="butt" onclick="keyb_add('*');">*</div>
    <div class="butt" onclick="keyb_add('(');">(</div>
    <div class="butt" onclick="keyb_add(')');">)</div>
    <br>
    <div class="butt" onclick="keyb_add('-');">-</div>
    <div class="butt" onclick="keyb_add('_');">_</div>
    <div class="butt" onclick="keyb_add('=');">=</div>
    <div class="butt" onclick="keyb_add('+');">+</div>
    <div class="butt" onclick="keyb_add('<');">&lt;</div>
    <div class="butt" onclick="keyb_add('>');">&gt;</div>
    <div class="butt" onclick="keyb_add('?');">?</div>
    <div class="butt" onclick="keyb_add('~');">~</div>
    <div class="butt" onclick="keyb_add('`');">`</div>
    <div class="butt" onclick="keyb_add(';');">;</div>
    <br>
    <div class="butt" onclick="keyb_add(':');">:</div>
    <div class="butt" onclick="keyb_add('\'');">'</div>
    <div class="butt" onclick="keyb_add('quot');">"</div>
    <div class="butt" onclick="keyb_add('/');">/</div>
    <div class="butt" onclick="keyb_add('[');">[</div>
    <div class="butt" onclick="keyb_add('{');">{</div>
    <div class="butt" onclick="keyb_add(']');">]</div>
    <div class="butt" onclick="keyb_add('}');">}</div>
    <div class="butt" onclick="keyb_add('\\');">\</div>
    <div class="butt" onclick="keyb_add('|');">|</div>
    <div class="but3" onclick="change_keys('normal');">A</div>
    <div class="butt" onclick="enter_key();"> &#x23CE </div>


  </div>
</div>




