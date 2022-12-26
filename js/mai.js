var table1 = document.querySelectorAll('li.table1')
var table2 = document.querySelectorAll('li.table2')

var i = 2
var edit = document.getElementById('edit').onclick = function() {

    if(i%2 == 0){
        this.textContent = "End"
        for(var l=0; l<table1.length; l++)table1[l].style.display='none';
        for(var e=0; e<table2.length; e++)table2[e].style.display='flex';
        i++
    }

    else{
        this.textContent = "Edit"
        for(var l=0; l<table1.length; l++)table1[l].style.display='flex';
        for(var e=0; e<table2.length; e++)table2[e].style.display='none';
        i++
    }
    
}