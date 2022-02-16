$(document).ready(function () {
    $('.category-item').on('click', function() {
        category_id = $(this).data("id");

        $('.sort-filter').removeClass("active");
        $(`.category${category_id}`).addClass("active");
        
        fetchItems(category_id)
    })

    function fetchItems(category_id) {
        $.ajax(
            {
              url: '/api/market',
              type: 'GET',
              success: function (result) {
                console.log(result)
            },
              error: function (error) {
                console.log(error);
              }
            }
          )
    }
});