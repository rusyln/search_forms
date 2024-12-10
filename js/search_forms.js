(function ($, Drupal) {
    Drupal.behaviors.searchForms = {
      attach: function (context, settings) {
        $('#search-input', context).once('searchForms').on('input', function () {
          const searchTerm = $(this).val().toLowerCase();
  
          $('.card', context).each(function () {
            const keywords = $(this).data('keywords').toLowerCase();
            if (keywords.includes(searchTerm)) {
              $(this).removeClass('hidden');
            } else {
              $(this).addClass('hidden');
            }
          });
        });
      }
    };
  })(jQuery, Drupal);
  