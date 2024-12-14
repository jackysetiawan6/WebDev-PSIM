$(document).ready(function () {
    $('#datatable').DataTable({
        dom: 'rtp',
        pageLength: 15,
    });
    $('#search').on('keyup', function () {
        $('#datatable').DataTable().search(this.value).draw();
    });
    $('#datatable').on('draw.dt', function () {
        var info = $('#datatable').DataTable().page.info();
        $('.options>p').html(
            '(' + (info.start + 1) + ' - ' + info.end + ' of ' + info.recordsTotal + ' records)'
        );
        manualRefresh();
    });
    manualRefresh();
});

function manualRefresh() {
    var info = $('#datatable').DataTable().page.info();
    $('.options>p').html(
        '(' + (info.start + 1) + ' - ' + info.end + ' of ' + info.recordsTotal + ' records)'
    );
    var first = document.querySelector('.dt-paging-button.first');
    first.innerHTML = `
        <svg xmlns="http://www.w3.org/2000/svg" height=24 width=24 viewBox="0 0 24 24">
            <title>Go to first page</title>
            <path
                d="M18.41,7.41L17,6L11,12L17,18L18.41,16.59L13.83,12L18.41,7.41M12.41,7.41L11,6L5,12L11,18L12.41,16.59L7.83,12L12.41,7.41Z" />
        </svg>`;
    var previous = document.querySelector('.dt-paging-button.previous');
    previous.innerHTML = `
        <svg xmlns="http://www.w3.org/2000/svg" height=24 width=24 viewBox="0 0 24 24">
            <title>Go to previous page</title>
            <path
                d="M15.41,16.58L10.83,12L15.41,7.41L14,6L8,12L14,18L15.41,16.58Z" />
        </svg>`;
    var next = document.querySelector('.dt-paging-button.next');
    next.innerHTML = `
        <svg xmlns="http://www.w3.org/2000/svg" height=24 width=24 viewBox="0 0 24 24">
            <title>Go to next page</title>
            <path
                d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z" />
        </svg>`;
    var last = document.querySelector('.dt-paging-button.last');
    last.innerHTML = `
        <svg xmlns="http://www.w3.org/2000/svg" height=24 width=24 viewBox="0 0 24 24">
            <title>Go to last page</title>
            <path
                d="M5.59,7.41L7,6L13,12L7,18L5.59,16.59L10.17,12L5.59,7.41M11.59,7.41L13,6L19,12L13,18L11.59,16.59L16.17,12L11.59,7.41Z" />
        </svg>`;
}