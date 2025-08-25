const scrollTo = (href) => {
    $("html, body").animate(
        {
            scrollTop: $(href).offset().top - 50,
        },
        1000
    );
};

if ($("#getInTouch").length > 0) {
    $("#getInTouch").on("click", function (e) {
        e.preventDefault();
        const href = $(this).attr("href");
        if ($(href).length > 0) {
            scrollTo(href);
        } else {
            localStorage.setItem("scrollToHomeFAQ", href);
            window.location.replace("/");
        }
    });
}

$(document).ready(function () {
    const hasToScrollFAQ = localStorage.getItem("scrollToHomeFAQ");
    if (hasToScrollFAQ) {
        if ($(hasToScrollFAQ).length > 0) {
            scrollTo(hasToScrollFAQ);
        }
        localStorage.removeItem("scrollToHomeFAQ");
    }
});
