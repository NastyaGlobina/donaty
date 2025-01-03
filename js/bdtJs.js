/**
 * @license MIT
 * @license http://opensource.org/licenses/MIT Massachusetts Institute of Technology
 * @copyright 2014 Patric Gutersohn
 * @author Patric Gutersohn
 * @example index.html BDT in action.
 * @link http://bdt.gutersohn.de Documentation
 * @version 1.0.0
 *
 * @summary BDT - Bootstrap Data Tables
 * @description sorting, paginating and search for bootstrap tables
 */
!function (a) {
    "use strict";
    var e = 1, t = 0, n = 0, s = "", d = null, l = !1, r = "", i = "", o = "", p = "", c = "";
    a.fn.bdt = function (f, h) {
        function u(e) {
            var t = e, n = 0;
            e.find("thead th").wrapInner('<span class="sort-element"/>').append(a("<span/>").addClass("sort-icon fa")).each(function () {
                var s = a(this), d = s.index(), l = !1, o = !0;
                s.click(function () {
                    a(this).hasClass("disable-sorting") || (a(this).find(".sort-icon").hasClass(i) ? a(this).find(".sort-icon").removeClass(i).addClass(r) : a(this).find(".sort-icon").removeClass(r).addClass(i), n != d && (e.find(".sort-icon").removeClass(i), e.find(".sort-icon").removeClass(r), a(this).find(".sort-icon").toggleClass(i, o)), t.find("td").filter(function () {
                        return a(this).index() === d
                    }).sortElements(function (e, t) {
                        return a.text([e]) > a.text([t]) ? l ? -1 : 1 : l ? 1 : -1
                    }, function () {
                        return this.parentNode
                    }), l = !l, n = d)
                })
            })
        }

        function C() {
            a("#table-nav").remove(), s = a("<ul/>"), a.each(new Array(t), function (e) {
                var t = "";
                a();
                e + 1 == 1 && (t = "active"), s.append(a("<li/>").addClass(t).data("page", e + 1).append(a("<a/>").text(e + 1)))
            }), a("#table-footer").addClass("row").append(a("<nav/>").addClass("pull-right").attr("id", "table-nav").append(s.addClass("pagination pull-right").prepend(a("<li/>").addClass("disabled").data("page", "previous").append(a('<a href="#" />').append(a("<span/>").attr("aria-hidden", "true").html("&laquo;")).append(a("<span/>").addClass("sr-only").text("Previous")))).append(a("<li/>").addClass("disabled").data("page", "next").append(a('<a href="#" />').append(a("<span/>").attr("aria-hidden", "true").html("&raquo;")).append(a("<span/>").addClass("sr-only").text("Next"))))))
        }

        function v(e) {
            a("#search").on("keyup", function () {
                a.each(e.find("tr"), function () {
                    var e = a(this).text().replace(/ /g, "").replace(/(\r\n|\n|\r)/gm, ""), t = a("#search").val();
                    -1 == e.toLowerCase().indexOf(t.toLowerCase()) ? a(this).hide().removeClass("search-item") : a(this).show().addClass("search-item"), l = "" != t ? !0 : !1
                }), g(e), C(), m(e, 1)
            })
        }

        function g(a) {
            t = l ? Math.ceil(a.children(".search-item").length / n) : Math.ceil(a.children("tr").length / n), 0 == t && (t = 1)
        }

        function m(s, d) {
            "next" == d ? d = e + 1 : "previous" == d && (d = e - 1), e = d;
            var r = l ? s.find(".search-item") : s.find("tr"), i = n * d, o = i - n, p = a(".pagination");
            r.hide(), r.slice(o, i).show(), p.find("li").removeClass("active disabled"), p.find("li:eq(" + d + ")").addClass("active"), 1 == d ? p.find("li:first").addClass("disabled") : d == t && p.find("li:last").addClass("disabled")
        }

        var x = a.extend({
            pageRowCount: 10,
            arrowDown: "fa-angle-down",
            arrowUp: "fa-angle-up",
            searchFormClass: "pull-left search-form",
            pageFieldText: "Entries per Page:",
            searchFieldText: "Search"
        }, f), b = null;
        return this.each(function () {
            d = a(this).addClass("bdt"), b = d.find("tbody"), n = x.pageRowCount, i = x.arrowDown, r = x.arrowUp, o = x.searchFormClass, p = x.pageFieldText, c = x.searchFieldText, d.before(a("<div/>").addClass("table-header").append(a("<form/>").addClass(o).attr("role", "form").append(a("<div/>").addClass("form-group").append(a("<input/>").addClass("form-control").attr("id", "search").attr("placeholder", c)))).append(a("<div/>").addClass("pull-left").append(a("<form/>").addClass("form-horizontal").attr("id", "page-rows-form").append(a("<label/>").addClass("pull-left control-label").text(p)).append(a("<div/>").addClass("pull-left").append(a("<select/>").addClass("form-control").append(a("<option>", {
                value: 5,
                text: 5
            })).append(a("<option>", {value: 10, text: 10, selected: "selected"})).append(a("<option>", {
                value: 15,
                text: 15
            })).append(a("<option>", {value: 20, text: 20})).append(a("<option>", {
                value: 25,
                text: 25
            }))))))), d.after(a("<div/>").attr("id", "table-footer").append(a("<div/>").addClass("pull-left table-info"))), b.children("tr").length > n && (g(b), C(), m(b, e)), v(b), u(d, b), a("body").on("click", ".pagination li", function (e) {
                var t;
                t = a(e.target).is("a") ? a(e.target).parent() : a(e.target).parent().parent();
                var n = t.data("page");
                t.hasClass("disabled") || t.hasClass("active") || m(b, n)
            }), a("#page-rows-form").on("change", function () {
                var e = a(this).find("select");
                n = e.val(), g(b), C(), m(b, 1)
            })
        })
    }
}(jQuery);