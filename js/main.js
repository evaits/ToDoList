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
        this.textContent = "Edit"
        for(var l=0; l<table1.length; l++)table1[l].style.display='flex';
        for(var e=0; e<table2.length; e++)table2[e].style.display='none';
        location = location;
    }
    
    
}
jQuery(function($) {
    $('.delete-link').on("click", function(){
        var id =`#${$(this).prop('id')}`;
        $(id).css('color', 'line-through')
        console.log(id)
      })
});