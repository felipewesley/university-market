window.onload = function(event) {
    console.clear()
    console.error("Hello world in Homepage")

    let btn1 = document.getElementById('mais-procurados-ver-mais-button')
    btn1.onclick = function() {
        this.style.display = 'none'
    }
}
window.onresize = function() {
    console.clear()
    console.log(`Current width of window is ${this.innerWidth}px`)
}