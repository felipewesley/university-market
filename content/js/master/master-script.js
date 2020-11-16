// Master script of application
const PROJECT_NAME = "University Market";

console.log(`Welcome to ${PROJECT_NAME}`)

$('a[href^="#"]').on('click', function(e) {
    e.preventDefault();
    if (this.getAttribute("data-toggle") != "collapse") {
        var id = $(this).attr('href'),
			targetOffset = $(id).offset().top;
			
        $('html, body').animate({ 
            scrollTop: targetOffset - 100
        }, 500);
    }
});

let btn_back = document.getElementById("control-back")
btn_back.onclick = function() {
    
    return window.history.back()
}