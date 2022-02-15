var Dice = (function() {
  var entity = {
    "history": [],
    "first": 1
  };

  entity.roll = function() {
    var nextValue = Math.floor(1 + Math.random() * 6);
    if (this.first) {this.history.push(nextValue);}
    else {
      for (i=0; i<this.history.length; i++) {
        if (this.history[i] == 0) {
          this.history[i] = nextValue;
        }
      }
    }
    return nextValue;
  }

  entity.showHistory = function() { 
    if (this.history.length == 0) {
      document.writeln("<br>No die has been thrown yet.<br>");
    } else {
      document.writeln("<br>Dice rolls ("+ this.history.length +")<br>");
      for (var i = 0, len = this.history.length; i < len; i++) {
        document.writeln("<li>" + this.history[i] + "</li>");
      }
    }
  }

  entity.showDie = function(id, num) {
    var html = htmlDie(num);
    document.getElementById(id).innerHTML = html;
    return html;
  }

  entity.calScore = function() {

    var same = 1;
    var sum = 0;
    var fh = 0;
    var toak = 0;
    var foak = 0;
    var yatze = 0;
    var ss = 0;
    var ls = 0;
    var fin = 0;
    //document.writeln(this.history.length);
    this.history.sort();
    for(i=0; i<4; i++) {
      if (this.history[i] == this.history[i+1]){
        same = same+1;
        //document.writeln("same:"+same);
        if (i==3) {
          if (same == 2) {
            fh = 1;
          }
          else if (same == 3) {
            toak = 1;
          }
          else if (same == 4) {
            foak = 1;
          }
          else if (same == 5) {
            yatze = 1;
          }
        }
      }
      else {
        if (same == 2) {
          fh = 1;
        }
        else if (same == 3) {
          toak = 1;
        }
        else if (same == 4) {
          foak = 1;
        }
        else if (same == 5) {
          yatze = 1;
        }
        same = 1;
      }
      //document.writeln(this.history[i]);
      sum = sum+this.history[i];
    }
    //document.writeln(this.history[4]);
    //document.writeln("sum: "+sum);
    //document.writeln("a:"+fh);
    sum = sum+this.history[4];
    fin = sum;
    if (yatze) {
      fin = fin+50;
      //document.writeln("yatze");
    }
    if (foak) {
      fin = fin+sum;
      //document.writeln("foak");
    }
    if (toak) {
      if (fh) {
        fin = fin+25;
        //document.writeln("fh");
      }
      fin = fin+sum;
      //document.writeln("toak");  
    }
    
    //document.writeln(sum);
    alert("Game Ends, your score is: "+fin)

  }

  function htmlDie(num) {
    var html = '<div class="dice" />';
    var pos = positions(num);
    for (var i = 0, len = pos.length; i < len; i++) {
      html += htmlDot(pos[i]);
    }    
    html += '</div>';
    return html;
  }

  function htmlDot(position) {
    return '<div class="'+ position +'"><div class="dot"></div></div>';
  }

  function positions(num) {
    switch (num) {
      case 0: return [];
      case 1: return ["middle"];
      case 2: return ["top-left", "bottom-right"];
      case 3: return ["top-left", "middle", "bottom-right"];
      case 4: return ["top-left", "top-right", "bottom-left", "bottom-right"];
      case 5: return ["top-left", "top-right", "bottom-left", "bottom-right", "middle"];
      case 6: return ["top-left", "top-right", "bottom-left", "bottom-right", "middle-left", "middle-right",];
    }
  }

  return entity;
}());


window.onload = function()
{
  var roller = document.getElementById("roller");
  var refresh = document.getElementById("refresh");
  var finish = document.getElementById("finish");
  var die01 = document.getElementById("die01");
  var die02 = document.getElementById("die02");
  var die03 = document.getElementById("die03");
  var die04 = document.getElementById("die04");
  var die05 = document.getElementById("die05");
  var f1 = 0;
  var f2 = 0;
  var f3 = 0;
  var f4 = 0;
  var f5 = 0;
  var p = 0;
  die01.addEventListener(
    "click",
    function () {
      f1=!f1;
    },
    false);
  die02.addEventListener(
    "click",
    function () {
      f2=!f2;
    },
    false);
  die03.addEventListener(
    "click",
    function () {
      f3=!f3;
    },
    false);
  die04.addEventListener(
    "click",
    function () {
      f4=!f4;
    },
    false);
  die05.addEventListener(
    "click",
    function () {
      f5=!f5;
    },
    false);
  roller.addEventListener(
    "click", 
    function () {
      if (p == 0) {
        Dice.showDie("die01", Dice.roll());
        Dice.showDie("die02", Dice.roll());
        Dice.showDie("die03", Dice.roll());
        Dice.showDie("die04", Dice.roll());
        Dice.showDie("die05", Dice.roll());
        Dice.first = 0;
      }
      else if (p<3){
        if (f1) {
          Dice.history[0]=0;
          Dice.showDie("die01", Dice.roll());}
        if (f2) {
          Dice.history[1]=0;
          Dice.showDie("die02", Dice.roll());}
        if (f3) {
          Dice.history[2]=0;
          Dice.showDie("die03", Dice.roll());}
        if (f4) {
          Dice.history[3]=0;
          Dice.showDie("die04", Dice.roll());}
        if (f5) {
          Dice.history[4]=0;
          Dice.showDie("die05", Dice.roll());}
      }
      p=p+1;
      f1=0;
      f2=0;
      f3=0;
      f4=0;
      f5=0;
    }, 
    false);
  refresh.addEventListener(
    "click",
    function () {
      p=0;
      Dice.showDie("die01", 0);
      Dice.showDie("die02", 0);  
      Dice.showDie("die03", 0);  
      Dice.showDie("die04", 0);  
      Dice.showDie("die05", 0);
    }, 
    false)
  finish.addEventListener(
    "click",
    function () {
      Dice.calScore();
    },
    false)

  Dice.showDie("die01", 0);
  Dice.showDie("die02", 0);  
  Dice.showDie("die03", 0);  
  Dice.showDie("die04", 0);  
  Dice.showDie("die05", 0);  

}
