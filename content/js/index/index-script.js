window.onload = function(event) {
    // console.clear()
    // console.error("Hello world in Homepage")

    let btn1 = document.getElementById("mais-procurados-ver-mais-button")
    btn1.onclick = function() {
        this.style.display = 'none'
    }

    let btn2 = document.getElementById("btn-show-all-courses")
    btn2.onclick = function() {
        
        window.location.replace("/home/cursos");
    }

    let btns_ver_produto = document.querySelectorAll("button.btn-ver-produto")
    for (let index in btns_ver_produto) {
        
        const btn = btns_ver_produto[index]

        btn.onclick = function() {
            
            let val = this.getAttribute("aria-valuenow")
            
            window.location.href = "/product/getProduct/"+val
            
            return true;
        }
    }
    /*let btn3 = [document.getElementsByClassName("btn-ver-produto")]
    console.log(btn3)
    btn3.forEach(function(element) {
        this.onclick = function() {
            window.location.replace("/home/cursos/")
        }
    });*/
}
// window.onresize = function() {
//     console.clear()
//     console.log('Current width of this window is', this.innerWidth, 'pixels.')
// }