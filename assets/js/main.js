var currentPage = 1;

var renderRecord = function (data, tbody) {
    var row = $('<tr/>');
    row.append($('<td>'+data.bankId+'</td>'));
    row.append($('<td>'+data.bankName+'</td>'));
    row.append($('<td>'+data.bankAddress+'</td>'));
    row.append($('<td>'+data.bankLogo+'</td>'));

    $(tbody).append(row);
}

/**
 * Fetch a page and load to currently active tab.
 */
var fetchDataAndRender = function (page) {
    page = page || 1;

    $.get('/bank-accounts?page='+page).done(function (response) {
        console.log(response);
        for (var k in response) {
          renderRecord(response[k], $('.tab-pane.active tbody'));
        }
    });
}

$(document).ready(function () {
    fetchDataAndRender(currentPage);

    /**
     * When a tab is selected, we empty the page and fetch page 1.
     */
    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        $('.tab-pane.active tbody').empty();
        currentPage = 1;
        fetchDataAndRender(currentPage);
    });

    $('.btn-load-more').on('click', function (e) {
        currentPage++;
        fetchDataAndRender(currentPage);
    });
})
