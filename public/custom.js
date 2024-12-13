$(document).ready(function () {
    $('#datatable').DataTable(
        {
            dom: 'rt',
            pageLength: 15
        }
    );
});

$('#search').on('keyup', function () {
    var table = $('#datatable').DataTable();
    table.search(this.value).draw();
});

function updateInfo(table, level) {
    var count = table.column(6).data().filter(function (value) {
        return value === level;
    }).length;
    $('#stat-' + level.toLowerCase() + '>p').html(
        count + ' / ' + count
    );
}

$('#datatable').on('draw.dt', function () {
    var table = $('#datatable').DataTable();
    var info = table.page.info();
    $('.options>p').html(
        '(' + (info.start + 1) + ' - ' + info.end + ' of ' + info.recordsTotal + ' records)'
    );
    updateInfo(table, 'High');
    updateInfo(table, 'Medium');
    updateInfo(table, 'Low');
});