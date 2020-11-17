window.onload = function() {

    // Div with selected filters
    let div_selected_filters = document.getElementById("selected-filter")

    // On filter apply button is clicked
    let filter_apply_button = document.querySelectorAll("button[aria-value=filter-apply]")
    for (let filter_btn of filter_apply_button) {

        filter_btn.onclick = function() {

            let target = document.getElementById(filter_btn.getAttribute("data-target"))
            let filter_name = 'filter-' + filter_btn.getAttribute("data-target")

            let val = target.value
            
            if (target.tagName.toUpperCase() == "SELECT") {
                for (let option of target) {
                    
                    if (option.value == val) {
                        
                        let txt = option.getAttribute("aria-label")

                        if (document.getElementById(filter_name) == null) {
                            
                            let white_space = document.createElement("i")
                            white_space.className = "white_space"
                            white_space.style.width = "4.4px"
                            white_space.style.display = "inline-block"
                            let span_filter = document.createElement("span")
                            span_filter.className = "badge badge-primary"
                            span_filter.id = filter_name
                            span_filter.setAttribute("aria-value", val)
                            span_filter.innerText = txt
                            div_selected_filters.appendChild(span_filter)
                            div_selected_filters.appendChild(white_space)
                        } else {
                            
                            let filter_origin = document.getElementById(filter_name);
                            filter_origin.setAttribute("aria-value", val)
                            filter_origin.innerText = txt
                        }
                    }
                }
            } else {
                
                let f = document.getElementById(filter_name)
                f.setAttribute("aria-value", val)
                f.innerText = `Até R$ ${val}.00`
            }
        }
        

    }

    // Set 'Qualquer valor' filter
    document.getElementById("filter-valor-qualquer-valor").onclick = function() {
        
        let e = document.getElementById("input-filter-valor")
        e.value = e.getAttribute("max")
        document.getElementById("filter-valor-label").innerText = `R$ ${e.value}.00`
        document.getElementById("filter-valor-label").className = "badge badge-success"
        document.getElementById("filter-input-filter-valor").innerText = "Todos os valores"
    }

    // Focus no input de pesquisa visivel de acordo com a largura da pagina
    if (window.location.href.indexOf("?") == -1) {
        if (window.innerWidth > 600) {

            return document.getElementById("input-search-lg").focus()
        }
    
        document.getElementById("faca-sua-pesquisa").className += "h4"
        return document.getElementById("input-search-sm").focus()
    }
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
    } else if (this.value == 100) {
        target.className = "badge badge-success"
    } else {
        target.className = "badge badge-primary"
    }
}

let input_search = document.querySelectorAll("#input-search-sm, #input-search-lg")
for (let index in input_search) {
    
    const filtro = input_search[index]
    filtro.onfocus = function() {
        window.scrollTo(0, function(e) {
            e.preventDefault();
            var id = $(this).attr('href'),
                    targetOffset = $(id).offset().top;
                    
            $('html, body').animate({ 
                scrollTop: targetOffset - 100
            }, 500);
        })
        $("#collapse-filters-search").collapse("hide")
        this.focus()
    }
    filtro.onkeypress = function() {
        window.scrollTo(0, function(e) {
            e.preventDefault();
            var id = $(this).attr('href'),
                    targetOffset = $(id).offset().top;
                    
            $('html, body').animate({ 
                scrollTop: targetOffset - 100
            }, 500);
        })
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

function getSelectedFilters() {
    
    let selected_filters = document.getElementById("selected-filter").childNodes;
    let arr = []

    for (let element of selected_filters) {

        if (element.id != "") {
        
            if (document.getElementById(element.id) !== null) {
                
                const e = document.getElementById(element.id)

                if (e.tagName.toUpperCase() == "SPAN") {
                    let data = []
                    data['id'] = e.id
                    data['type'] = e.id.slice(String("filter-input-filter-").length, this.lenght)
                    data['text'] = e.innerText
                    data['value'] = e.getAttribute("aria-value")
                    arr.push(data)
                }
            }
        }
    }
    return arr
}

function make_string_with_filters(filters = []) {
    
    let str = "";

    for (let index in filters) {
        
        const element = filters[index]

        str+= `${element.type}=${element.value}`

        if (index < filters.length-1) {
            str+= "&"
        }
    }
    return str;
}

/* Função de pesquisa */
let btn_search = document.querySelectorAll("#btn-search-sm, #btn-search-lg")
for (let btn of btn_search) {
    continue;
}

/* Evento submit do formulário de pesquisa */
let form = document.getElementById("form-search")
form.onsubmit = function(event) {
    
    // event.preventDefault()

    // Removendo input nao visivel para nao enviar por get
    if (window.innerWidth < 600) {
        let ref = document.getElementById("input-group-search-lg")
        this.removeChild(ref)
    } else {
        let ref = document.getElementById("input-group-search-sm")
        this.removeChild(ref)
    }

    let e = document.createElement("input")
    e.type = "hidden"
    e.name = "f"
    
    let selected_filters = getSelectedFilters()
    let str_filters = make_string_with_filters(selected_filters)
    e.value = btoa(str_filters)

    this.appendChild(e)

    // return this.submit()
    return true
}