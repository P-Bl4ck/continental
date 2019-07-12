var valor = document.getElementById("selectLinea").option; 
var selected = valor.options[valor.selectedIndex].text;



document.getElementById("salvar").addEventListener("click",function(){console.log(selected);});

