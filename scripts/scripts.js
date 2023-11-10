


$(".lalalladsdsd").click(function(){

    var otvrti = [];
    var summ = 0;

    for(var i = 1; i<=5;i++){
        var larvar = document.querySelectorAll(".ans-" + i);

        for (const lar of larvar) {



            if (lar.checked) {
                otvrti.push(lar.value);
                // otvrti[i] = lar.value;
              break;
            }
        }
    }

    
    for(var i = 0; i<otvrti.length;i++){
        summ += +otvrti[i] / +otvrti.length * +100;
    }
    
    $(".testContentmag").empty();

    var container = document.querySelector(".testContentmag");
    var vstavit = '<p class="prosholtect">Вы прошли тест на</p>' + 
    '<h1 class="Big_procent">' + summ +'%</h1>' + 
    '<a href="#" class="ssilka-save">сохранить</a>';
    container.innerHTML = vstavit;
   
    

});