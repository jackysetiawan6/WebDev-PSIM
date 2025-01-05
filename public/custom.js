$(document).ready(() => {
    const currentPage = window.location.pathname.split('/').pop();

    initializeDataTable(currentPage);
    setupSearchHandler();
    setupTableDrawHandler();

    manualRefresh();
    $('#refresh').on('click', manualRefresh);
});

function initializeDataTable(currentPage) {
    var check = currentPage === '';
    const columnWidths = check
        ? ['10%', '10%', '10%', '15%', '15%', '5%', '5%', '20%']
        : ['10%', '15%', '15%', '15%', '10%', '10%', '25%'];

    $('#datatable').DataTable({
        dom: 'rtp',
        pageLength: check ? 14 : 17,
        autoWidth: false,
        columnDefs: columnWidths.map((width, index) => ({ width, targets: index })),
    });
}

function setupSearchHandler() {
    $('#search').on('keyup', function () {
        $('#datatable').DataTable().search(this.value).draw();
    });
}

function setupTableDrawHandler() {
    $('#datatable').on('draw.dt', function () {
        updateRecordInfo();
    });
}

function updateRecordInfo() {
    const table = $('#datatable').DataTable();
    const info = table.page.info();
    $('.options>p').html(
        `(${info.start + 1} - ${info.end} of ${info.recordsTotal} records)`
    );
}

function manualRefresh() {
    toggleLoading();
    updateRecordInfo();
    updatePagingButtons();
    const table = $('#datatable').DataTable();
    table.order([0, 'desc']).draw();
}

function updatePagingButtons() {
    const pagingButtons = [
        { selector: '.dt-paging-button.first', title: 'Go to first page', path: 'M18.41,7.41L17,6L11,12L17,18L18.41,16.59L13.83,12L18.41,7.41M12.41,7.41L11,6L5,12L11,18L12.41,16.59L7.83,12L12.41,7.41Z' },
        { selector: '.dt-paging-button.previous', title: 'Go to previous page', path: 'M15.41,16.58L10.83,12L15.41,7.41L14,6L8,12L14,18L15.41,16.58Z' },
        { selector: '.dt-paging-button.next', title: 'Go to next page', path: 'M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z' },
        { selector: '.dt-paging-button.last', title: 'Go to last page', path: 'M5.59,7.41L7,6L13,12L7,18L5.59,16.59L10.17,12L5.59,7.41M11.59,7.41L13,6L19,12L13,18L11.59,16.59L16.17,12L11.59,7.41Z' },
    ];

    pagingButtons.forEach(button => {
        document.querySelector(button.selector).innerHTML = `
            <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" viewBox="0 0 24 24">
                <title>${button.title}</title>
                <path d="${button.path}" />
            </svg>`;
    });
}

function toggleLoading() {
    const loadingScreen = document.getElementById('loading-screen');
    const panelBottom = document.querySelector('.panel');

    const isLoadingHidden = loadingScreen.style.display === 'none';
    panelBottom.style.display = isLoadingHidden ? 'none' : 'flex';
    loadingScreen.style.display = isLoadingHidden ? 'flex' : 'none';

    setTimeout(() => {
        loadingScreen.style.display = 'none';
        panelBottom.style.display = 'block';
    }, 2000);
}
