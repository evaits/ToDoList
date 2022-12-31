// function edit
var table1 = document.querySelectorAll('li.table1')
var table2 = document.querySelectorAll('li.table2')
var input = document.getElementById('task')
var btn = document.getElementById('btn')


var i = 2
var edit = document.getElementById('edit').onclick = function() {

    if(i%2 == 0){
        this.textContent = "End"
        for(var l=0; l<table1.length; l++)table1[l].style.display='none';
        for(var e=0; e<table2.length; e++)table2[e].style.display='flex';
        input.setAttribute('disabled', '')
        btn.setAttribute('disabled', '')
        i++
        
    }

    else{
        location. reload()
    }
    
    
};

// save coockie
(function() {
    'use strict';
    var cn = 'CheckBoxes', set = {}, cook = cookies(cn) || {};
    cookies.expires = 10 * 24 * 3600;

    function saveChecked() {
    cook[this.id] = this.checked;
    set[cn] = cook;

    // Записываем в кукис текущее значение checked
    cookies(set);
    };

    document.querySelectorAll('#ch input[type=checkbox]').forEach(function(r) {
    r.onchange = saveChecked;
    // Устанавливаем значение из кукиса
    r.checked = !!cook[r.id];
    
    })
})();


