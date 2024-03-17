$(document).ready(function() {
    $("#hamburger").on("click", function () {
        console.log("Hamburger menu clicked");
        console.log("Current name attribute:", $(this).attr("name"));

        if ($(this).attr("name") === "menu") {
            $(this).attr("name", "close");
            $("nav").removeClass('hidden');
        } else {
            $(this).attr("name", "menu");
            console.log("Changing name attribute to menu");
            $("nav").addClass('hidden');
        }
    });
});
