// after delete and checkbox:checked
jQuery(function($) {
    $('.delete-link').on("click", function(){
        var id =`#m${$(this).prop('id')}`;
        $('li'+id).css('display', 'none')
      })
      
});

$('.item').click(function(){
  //создаём массив для значений флажков
  var checkboxes = [];
  $('input:checkbox:checked').each(function(){
    //добавляем значение каждого флажка в этот массив
    checkboxes.push(this.id);
  });
  /*объединяем массив в строку с разделителем-запятой. Но лучше подобные вещи хранить в массиве. Для наглядности - вывод в консоль.*/
  var check = checkboxes.map( checkboxes => '#m' + checkboxes);
  $.each(check, function(index,value){
    id = value
    $('img'+id).css('opacity', '0.5')
  });
  
})
