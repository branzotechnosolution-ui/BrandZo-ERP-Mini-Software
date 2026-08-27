window.init = function (parent = "") {
    if (parent != "") {
        parent = parent + " ";
    }
    /*******************************************************
                   SELECT Start
 *******************************************************/
    if (
        /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)
    ) {
        if (typeof $.fn.selectpicker === 'function' && $(parent + ".select-picker").length) {
            $(parent + ".select-picker").selectpicker("mobile");
        }
    } else {
        if (typeof $.fn.selectpicker === 'function' && $(parent + ".select-picker").length) {
            $(parent + ".select-picker").selectpicker();
        }
    }
    // $(parent + ".select2").select2();
    /*******************************************************
                   SELECT End
 *******************************************************/
    //turn off autocomplete for all inputs
    if ($(parent + "input").length) {
        $(parent + "input").attr("autocomplete", "off");
    }

    //initialise tooltip
    if (typeof $.fn.tooltip === 'function') {
        $("body").tooltip({
            selector: '[data-toggle="tooltip"]',
            trigger: 'hover'
        });
    }

    //initialise popover
    if (typeof $.fn.popover === 'function') {
        $(function () {
            $('[data-toggle="popover"]').popover();
        });
    }

    //initialise dropify
    if (typeof $.fn.dropify === 'function' && typeof dropifyMessages !== 'undefined' && $(".dropify").length) {
        var drEvent = $(".dropify").dropify({
            messages: dropifyMessages,
            imgFileExtensions: ['png', 'jpg', 'jpeg', 'gif', 'bmp', 'svg', 'webp'],
        });

        drEvent.on("dropify.afterClear", function (event, element) {
            var elementID = element.element.id;
            var elementName = element.element.name;
            if ($("#" + elementID + "_delete").length == 0) {
                $("#" + elementID).after(
                    '<input type="hidden" name="' +
                        elementName +
                        '_delete" id="' +
                        elementID +
                        '_delete" value="yes">'
                );
            }
        });
    }
};
var init = window.init;

//select row in datatable
window.dataTableRowCheck = function (id) {
    if ($(".select-table-row:checked").length > 0) {
        $("#quick-action-form").fadeIn();
        //if at-least one row is selected
        if (document.getElementById("select-all-table")) {
            document.getElementById("select-all-table").indeterminate = true;
        }
        $("#quick-actions")
            .find("input, textarea, button, select")
            .removeAttr("disabled");
        if ($("#quick-action-type").val() == "") {
            $("#quick-action-apply").attr("disabled", true);
        }
        if (typeof $.fn.selectpicker === 'function') {
            $(".select-picker").selectpicker("refresh");
        }
    } else {
        $("#quick-action-form").fadeOut();
        //if no row is selected
        if (document.getElementById("select-all-table")) {
            document.getElementById("select-all-table").indeterminate = false;
        }
        $("#select-all-table").attr("checked", false);
        resetActionButtons();
    }

    if ($("#datatable-row-" + id).is(":checked")) {
        $("#row-" + id).addClass("table-active");
    } else {
        $("#row-" + id).removeClass("table-active");
    }
};
var dataTableRowCheck = window.dataTableRowCheck;

//select all rows in datatable
window.selectAllTable = function (source) {
    var checkboxes = document.getElementsByName("datatable_ids[]");
    for (var i = 0, n = checkboxes.length; i < n; i++) {
        // if disabled property is given to checkbox, it won't select particular checkbox.
        if (!$("#" + checkboxes[i].id).prop('disabled')){
            checkboxes[i].checked = source.checked;
        }
        if ($("#" + checkboxes[i].id).is(":checked")) {
            $("#" + checkboxes[i].id)
                .closest("tr")
                .addClass("table-active");
            $("#quick-actions")
                .find("input, textarea, button, select")
                .removeAttr("disabled");
            if ($("#quick-action-type").val() == "") {
                $("#quick-action-apply").attr("disabled", true);
            }
            if (typeof $.fn.selectpicker === 'function') {
                $(".select-picker").selectpicker("refresh");
            }
        } else {
            $("#" + checkboxes[i].id)
                .closest("tr")
                .removeClass("table-active");
            resetActionButtons();
        }
    }

    if ($(".select-table-row:checked").length > 0) {
        $("#quick-action-form").fadeIn();
    } else {
        $("#quick-action-form").fadeOut();
    }
};
var selectAllTable = window.selectAllTable;

//reset table action form elements
window.resetActionButtons = function () {
    if ($("#quick-action-form").length) {
        $("#quick-action-form")[0].reset();
    }
    $("#quick-actions")
        .find("input, textarea, button, select")
        .attr("disabled", "disabled");
    if (typeof $.fn.selectpicker === 'function') {
        $(".select-picker").selectpicker("refresh");
    }
};
var resetActionButtons = window.resetActionButtons;

$("body").on("click", ".openRightModal", function (event) {
    event.preventDefault();

    const requestUrl = this.href;
    const inModal = $(this).hasClass("inModal");

    let redirectUrl = "";
    if (typeof $(this).data("redirect-url") !== "undefined") {
        redirectUrl = encodeURIComponent($(this).data("redirect-url"));
    }

    if (typeof $.easyAjax === 'function') {
        $.easyAjax({
            url: requestUrl,
            blockUI: true,
            container: (typeof RIGHT_MODAL !== 'undefined') ? RIGHT_MODAL : '#task-detail-1',
            historyPush: !inModal,
            data: { redirectUrl: redirectUrl },
            success: function (response) {
                if (response.status == "success") {
                    if (typeof RIGHT_MODAL_CONTENT !== 'undefined') {
                        $(RIGHT_MODAL_CONTENT).html(response.html);
                    }
                    if (typeof RIGHT_MODAL_TITLE !== 'undefined') {
                        $(RIGHT_MODAL_TITLE).html(response.title);
                    }
                }
            },
            error: function (request, status, error) {
                var targetContent = (typeof RIGHT_MODAL_CONTENT !== 'undefined') ? RIGHT_MODAL_CONTENT : '#right-modal-content';
                if (request.status == 403) {
                    $(targetContent).html(
                        '<div class="align-content-between d-flex justify-content-center mt-105 f-21">403 | Permission Denied</div>'
                    );
                } else if (request.status == 404) {
                    $(targetContent).html(
                        '<div class="align-content-between d-flex justify-content-center mt-105 f-21">404 | Not Found</div>'
                    );
                } else if (request.status == 500) {
                    $(targetContent).html(
                        '<div class="align-content-between d-flex justify-content-center mt-105 f-21">500 | Something Went Wrong</div>'
                    );
                }
            },
        });
    }
});

// Sidebar open close
$("#sidebarToggle").on("click", function () {
    if ($("body").hasClass("sidebar-toggled")) {
        localStorage.setItem("mini-sidebar", "yes");
    } else {
        localStorage.setItem("mini-sidebar", "no");
    }
});

// active left sub menu item
var currentUrl = window.location;
var pathArray = window.location.pathname.split("account/");
if (typeof pathArray[1] !== "undefined") {
    var currentRoute = pathArray[1].split("/");
    currentRoute = currentRoute[0];
    var element = $("#sideMenuScroll li a")
        .filter(function () {
            return this.href == currentUrl.href;
        })
        .addClass("active")
        .closest("li")
        .removeClass("closeIt")
        .addClass("openIt");

    // active left main menu item
    var element2 = $("#sideMenuScroll li a").filter(function () {
        var pathArray = this.href.split("account/");
        if (currentRoute == pathArray[1]) {
            return true;
        }
    });
    element2.addClass("active");
    element2
        .closest("li")
        .removeClass("closeIt")
        .addClass("openIt")
        .children("a")
        .addClass("active");
}

//nl2br
window.nl2br = function (str, is_xhtml) {
    if (typeof str === "undefined" || str === null) {
        return "";
    }
    var breakTag =
        is_xhtml || typeof is_xhtml === "undefined" ? "<br />" : "<br>";
    return (str + "").replace(
        /([^>\r\n]?)(\r\n|\n\r|\r|\n)/g,
        "$1" + breakTag + "$2"
    );
};
var nl2br = window.nl2br;

//decimal format
window.decimalupto2 = function (num) {
    var amt = Math.round(num * 100) / 100;
    return parseFloat(amt.toFixed(2));
};
var decimalupto2 = window.decimalupto2;

//calculate total of invoices
window.calculateTotal = function () {
    var subtotal = 0;
    var discount = 0;
    var tax = "";
    var taxList = new Object();
    var taxTotal = 0;
    var discountAmount = 0;
    var discountType = $("#discount_type").val();
    var discountValue = $(".discount_value").val();
    var calculateTax = $("#calculate_tax").val();
    var adjustmentAmount = $("#adjustment_amount").val();

    $(".quantity").each(function (index, element) {
        var discountedAmount = 0;
        var amount = parseFloat(
            $(this).closest(".item-row").find(".amount").val()
        );

        if (isNaN(amount)) {
            amount = 0;
        }

        subtotal = (parseFloat(subtotal) + parseFloat(amount)).toFixed(2);
    });

    if (discountType == "percent" && discountValue != "") {
        discountAmount =
            (parseFloat(subtotal) / 100) * parseFloat(discountValue);
        discountedAmount = parseFloat(subtotal - discountAmount);
    } else {
        discountAmount = parseFloat(discountValue);
        discountedAmount = parseFloat(subtotal - parseFloat(discountValue));
    }

    $(".quantity").each(function (index, element) {
        var itemTax = [];
        var itemTaxName = [];
        subtotal = parseFloat(subtotal);

        $(this)
            .closest(".item-row")
            .find("select.type option:selected")
            .each(function (index) {
                itemTax[index] = $(this).data("rate");
                itemTaxName[index] = $(this).data('tax-text');
            });
        var itemTaxId = $(this).closest(".item-row").find("select.type").val();

        var amount = parseFloat(
            $(this).closest(".item-row").find(".amount").val()
        );

        if (isNaN(amount)) {
            amount = 0;
        }

        if (itemTaxId != "") {
            for (var i = 0; i <= itemTaxName.length; i++) {
                if (typeof taxList[itemTaxName[i]] === "undefined") {
                    if (
                        calculateTax == "after_discount" &&
                        discountAmount > 0
                    ) {
                        var taxValue =
                            (amount - (amount / subtotal) * discountAmount) *
                            (parseFloat(itemTax[i]) / 100);

                        if (!isNaN(taxValue)) {
                            taxList[itemTaxName[i]] = parseFloat(taxValue);
                        }
                    } else {
                        var taxValue = amount * (parseFloat(itemTax[i]) / 100);

                        if (!isNaN(taxValue)) {
                            taxList[itemTaxName[i]] = parseFloat(taxValue);
                        }
                    }
                } else {
                    if (
                        calculateTax == "after_discount" &&
                        discountAmount > 0
                    ) {
                        var taxValue =
                            parseFloat(taxList[itemTaxName[i]]) +
                            (amount - (amount / subtotal) * discountAmount) *
                                (parseFloat(itemTax[i]) / 100);

                        if (!isNaN(taxValue)) {
                            taxList[itemTaxName[i]] = parseFloat(taxValue);
                        }
                    } else {
                        var taxValue =
                            parseFloat(taxList[itemTaxName[i]]) +
                            amount * (parseFloat(itemTax[i]) / 100);

                        if (!isNaN(taxValue)) {
                            taxList[itemTaxName[i]] = parseFloat(taxValue);
                        }
                    }
                }
            }
        }
    });

    $.each(taxList, function (key, value) {
        if (!isNaN(value)) {
            tax =
                tax +
                '<tr><td class="text-dark-grey">' +
                key +
                '</td><td><span class="tax-percent">' +
                decimalupto2(value).toFixed(2) +
                "</span></td></tr>";
            taxTotal = taxTotal + decimalupto2(value);
        }
    });

    if (isNaN(subtotal)) {
        subtotal = 0;
    }

    $(".sub-total").html(decimalupto2(subtotal).toFixed(2));
    $(".sub-total-field").val(decimalupto2(subtotal));

    if (discountValue != "") {
        if (discountType == "percent") {
            discount = (parseFloat(subtotal) / 100) * parseFloat(discountValue);
        } else {
            discount = parseFloat(discountValue);
        }
    }

    if (tax != "") {
        $("#invoice-taxes").html(tax);
    } else {
        $("#invoice-taxes").html(
            '<tr><td colspan="2"><span class="tax-percent">0.00</span></td></tr>'
        );
    }

    if (adjustmentAmount && adjustmentAmount != 0 && adjustmentAmount != '') {
        subtotal = subtotal + parseFloat(adjustmentAmount);
    }

    $("#discount_amount").html(decimalupto2(discount).toFixed(2));

    var totalAfterDiscount = decimalupto2(subtotal - discount);

    totalAfterDiscount = totalAfterDiscount < 0 ? 0 : totalAfterDiscount;

    var total = decimalupto2(totalAfterDiscount + taxTotal);

    $(".total").html(total.toFixed(2));
    $(".total-field").val(total.toFixed(2));
};
var calculateTotal = window.calculateTotal;

window.deSelectAll = function () {
    $("#select-all-table").prop("checked", false);
};
var deSelectAll = window.deSelectAll;

$("table th:first-child").removeAttr("title");

//Prevent sidebar dropdown close
$(document).on("click", ".main-sidebar .dropdown-menu", function (e) {
    e.stopPropagation();
});

//submit form on press enter
$(document).on("keypress", "input.form-control", function(e) {
    var inModalLg = (typeof MODAL_LG !== 'undefined') ? $(MODAL_LG).hasClass("show") : false;
    var inModalXl = (typeof MODAL_XL !== 'undefined') ? $(MODAL_XL).hasClass("show") : false;

    if (e.key === "Enter") {
        if (inModalLg || inModalXl) {
            $(this)
                .closest(".modal-content")
                .find(".btn-primary")
                .trigger("click");
        } else {
            $(this).closest("form").find(".btn-primary").trigger("click");
        }
        return false;
    }
});

$("body").on("click", "#right-modal-content .btn-cancel", function (e) {
    e.preventDefault();
    if (typeof closeTaskDetail === 'function') {
        closeTaskDetail();
    }
});

//hide tooltip after click on element
$(document).on('mousedown', "[aria-describedby]", function() {
    if (typeof $.fn.tooltip === 'function') {
        $("[aria-describedby]").tooltip('hide');
    }
});

// Snippet to reload the page on browser back and forward button click
$(document).ready(function () {
    sessionStorage.setItem("RIGHT_MODAL", "closed");
    if (window.history && window.history.pushState) {
        $(window).on("popstate", function () {
            if (sessionStorage.getItem("RIGHT_MODAL") != "opened") {
                window.location.reload();
            }
        });
    }
});

$('#mobile_menu_collapse').on('click', '.dropdown-item', function() {
    $("#dropdownMenuLink").dropdown("toggle");
});
