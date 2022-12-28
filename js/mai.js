jQuery(function($) {
    $('.delete-link').on("click", function(){
        var id =`#${$(this).prop('id')}`;
        $(id).css('text-decoration-line', 'line-through')
        console.log(id)
      })
});