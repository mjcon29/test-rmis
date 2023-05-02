$(document).ready(function () {
    var dummy = [];

    $(".autocomp").each(function (i, el) {
        el = $(el);
        var id = el.attr("id");

        el.autocomplete({
            source: function (request, response) {
                var bd_tbl = el.attr("data-db");

                $.ajax({
                    url: siteUrl + "/dashboard/" + "autocomplete",
                    data: {
                        term: request.term,
                        db: bd_tbl,
                    },
                    dataType: "json",
                    success: function (data) {
                        var resp = $.map(data, function (obj) {
                            dummy[obj.name] = obj.id;

                            return obj["name"];
                        });
                        response(resp);
                    },
                });
            },

            
            // select: function (event, ui) {
            //     const withnumber = [
            //         "Memorandum Circular",
            //         "Memorandum",
            //     ];

            //     $("[name=" + id + "]").val(dummy[ui.item.label]);

            //     if (withnumber.includes(ui.item.value)) {
            //         $(".doctype_section > div:nth-child(2)").show();
            //     } else {
            //         $(".doctype_section > div:nth-child(2)").hide();
            //     }

            // },
            minLength: 2,
        });
    });
});
