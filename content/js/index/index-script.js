window.onload = function(event) {
    console.clear()
    console.error("Hello world in Homepage")

    let btn1 = document.getElementById("mais-procurados-ver-mais-button")
    btn1.onclick = function() {
        this.style.display = 'none'
    }

    let btn2 = document.getElementById("btn-show-all-courses")
    btn2.onclick = function() {
        
        window.location.replace("/Home/cursos");
    }
}
window.onresize = function() {
    console.clear()
    console.log('Current width of this window is', this.innerWidth, 'pixels.')
}