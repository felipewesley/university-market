window.onload = function() {

    if (window.innerWidth > 600) {

        return document.getElementById("input-search-lg").focus()
    }
    
    return document.getElementById("input-search-sm").focus()
}

let filter_valor = document.getElementById("input-filter-valor")
filter_valor.setAttribute("min", 0)
filter_valor.setAttribute("max", 100)
// filter_valor.setAttribute("value", 25)
document.getElementById("filter-valor-label").innerText = `R$ ${filter_valor.value}.00`
filter_valor.oninput = async function() {

    let target = document.getElementById("filter-valor-label")
    target.innerText = `R$ ${this.value}.00`

    if (this.value == 0) {
        target.className = "badge badge-danger"
    } else {
        target.className = "badge badge-primary"
    }
}

let input_search = document.querySelectorAll("#input-search-sm, #input-search-lg")
for (let index in input_search) {
    
    const filtro = input_search[index]
    filtro.onfocus = function() {
        $("#collapse-filters-search").collapse("hide")
    }
}

let filters = document.querySelectorAll("#form-filters input, #form-filters select")
for (let index in filters) {
    
    const filtro = filters[index]

    filtro.onchange = function() {

        if (this.value != "%") {
            
            let f = document.createElement("span")
            f.className = "badge badge-primary"
            f.innerText = this.value

            // document.getElementById("selected-filter").appendChild(f)
        }
    }
}