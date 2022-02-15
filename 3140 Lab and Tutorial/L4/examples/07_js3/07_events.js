var roller = document.getElementById("roller");
var rollHistory = document.getElementById("rollHistory");

roller.onclick = function() {
  var nextValue = Dice.roll();
  var nextHtml = Dice.showDie("die01", nextValue);
  rollHistory.innerHTML += '<div class="dice-container">' + nextHtml + '</div>';
}

Dice.showDie("die01", 1);
