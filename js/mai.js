jQuery(function($) {
    $('.delete-link').on("click", function(){
        var id =`#${$(this).prop('id')}`;
        $(id).css('text-decoration-line', 'line-through')
        $(id).css('color', "#8F98A8")
        $('a'+id).css({
          'pointer-events': "none",
          'opacity': '0.7'
        })
      })
});

// Зробити відмічання в Едіт, якщо завдання виконано