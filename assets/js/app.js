$(document).ready(function () {
    tableSearch();


    function tableSearch() {
        let searchInput = $('.home--search--input');
        let table = $('.items--table');


        searchInput.on('keyup', function () {
            let searchValue = searchInput.val();
            let rows = table.find('tr').not('.header-line, .total-line');

            rows.each(function () {
                let row = $(this);
                let cel = row.find('.item--column');


                if (cel.text().toLowerCase().indexOf(searchValue.toLowerCase()) === -1) {
                    row.addClass('hidden');
                } else {
                    row.removeClass('hidden');
                }
            });

            updateTotalValue();
        });
    }

    function updateTotalValue() {
        let totalValueContainer = $('.total-line').find('.price--column').children();
        let rows = $('.items--table').find('tr').not('.hidden, .header-line, .total-line');
        let total = 0;

        rows.each(function () {
            let celValue = $(this).find('.price--column').text();

            total += parseFloat(celValue.replace('$', ''));
        });

        totalValueContainer.html('$' + total);
    }

});