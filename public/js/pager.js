var Pager = function() {
    this.itemsPerPage = 10;
    this.currentPage = 1;
    this.pagingControlsContainer = '#pagingControls';
    this.pagingItemsContainer = '#index-list';
    this.numPages = function () {
        var numPages = 0;
        if (this.items != null && this.itemsPerPage != null) {
            numPages = Math.ceil(this.items.length / this.itemsPerPage);
        }
        return numPages;
    };
    this.showPage = function (page) {
        if (page === 0) {
            page = this.numPages();
        }
        if (page === this.numPages() + 1) {
            page = 1;
        }
        this.currentPage = page;
        var html = '';
        var foo = (page - 1) * this.itemsPerPage;
        this.items.slice(foo, foo + this.itemsPerPage).each(function () {
            html += '' + $(this).html() + '';
        });
        $(this.pagingItemsContainer).html(html);
        renderControls(this.pagingControlsContainer, this.currentPage, this.numPages());
    };
    var renderControls = function (controlsContainer, currentPage, numPages) {
        var pagingControls =
            '<ul class="pagination">\n' +
            '<li class="page-item" id="page-previous">\n' +
            '<a class="page-link" href="#" aria-label="Previous" onclick="pager.showPage(pager.currentPage - 1); return false;">\n' +
            '<span aria-hidden="true">&laquo;</span>\n' +
            '<span class="sr-only">Previous</span>\n' +
            '</a>\n' +
            '</li>';
        for (var i = 1; i <= numPages; i++) {
            if (i != currentPage) {
                pagingControls += '<li class="page-item"><a class="page-link" href="#" onclick="pager.showPage(' + i + '); return false;">' + i + '</a></li>'
            } else {
                pagingControls += '<li class="page-item active"><a class="page-link" href="#">' + i + '</a></li>';
            }
        }
        pagingControls +=
            '<li class="page-item" id="page-next">\n' +
            '<a class="page-link" href="#" aria-label="Next" onclick="pager.showPage(pager.currentPage + 1); return false;">\n' +
            '<span aria-hidden="true">&raquo;</span>\n' +
            '<span class="sr-only">Next</span>\n' +
            '</a>\n' +
            '</li>\n' +
            '</ul>';
        $('#pagingControls').html(pagingControls);
    }
}