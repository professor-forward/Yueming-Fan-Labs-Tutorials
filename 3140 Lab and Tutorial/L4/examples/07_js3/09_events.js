
window.onload = function()
{
  var roller = document.getElementById("roller");
  roller.addEventListener(
    "click", 
    function () {
      Dice.showDie("die01", Dice.roll());
      Dice.showDie("die02", Dice.roll());
      Dice.showDie("die03", Dice.roll());
      Dice.showDie("die04", Dice.roll());
      Dice.showDie("die05", Dice.roll());
    }, 
    false);

  Dice.showDie("die01", 0);
  Dice.showDie("die02", 0);  
  Dice.showDie("die03", 0);  
  Dice.showDie("die04", 0);  
  Dice.showDie("die05", 0);  

}
