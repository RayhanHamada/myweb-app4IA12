// Active class on click
$(function () {
    $(".nav li a").click(function () {
        $(".nav li a").removeClass("active");
        $(this).addClass("active");
    });
});

// $("a[href*=\\#]:not([href=\\#])").on("click", function () {
//     if (
//         location.pathname.replace(/^\//, "") ==
//             this.pathname.replace(/^\//, "") ||
//         location.hostname == this.hostname
//     ) {
//         var target = $(this.hash);
//         target = target.length
//             ? target
//             : $("[name=" + this.hash.slice(1) + "]");
//         if (target.length) {
//             $("html,body").animate(
//                 {
//                     scrollTop: target.offset().top - target.height() / 5,
//                 },
//                 1000
//             );
//             return false;
//         }
//     }
// });
