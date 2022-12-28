jQuery(function($) {
    $('.delete-link').on("click", function(){
        var id =`#${$(this).prop('id')}`;
        $(id).css('color', 'line-through')
        console.log(id)
      })
});