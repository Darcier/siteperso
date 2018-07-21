const Isotope = require('isotope-layout');

require('../../css/views/competences.scss');

$(function() {

    var iso = new Isotope('.grid', {
        // options
        itemSelector: '.grid-item',
        masonry: {
            columnWidth: 100
        }
    });
    $('.filter-button-group').on( 'click', 'button', function() {
        var filterValue = $(this).attr('data-filter');
        iso.arrange({
            filter: function(itemElem) {
                if (filterValue === '*') {
                    return true;
                } else {
                    return $(itemElem).hasClass(filterValue);
                }
            }
        });
    });
});