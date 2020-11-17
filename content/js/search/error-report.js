if (document.getElementById("filter-problem-report") !== null) {
    
    const USER = "#your_username"
    let error_type = "";

    let filter_reporter = document.getElementById("filter-problem-report")
    error_type = "search"
    filter_reporter.onclick = function() {
        
        filter_report_error(USER, error_type)
        this.style.display = "none"
        return true
    }
}

function show_modal_response(user, errorName, content, status) {

    let modal_id = "modal-error-report-" + errorName
    let status_class = status ? "success" : "danger"

        let modal_header = document.createElement("div")
        modal_header.setAttribute("class", "modal-header")
        let title = document.createElement("h5")
        title.setAttribute("class", "modal-title")
        title.innerText = "Reportar erro de " + errorName
        let btn_dismiss_header = document.createElement("button")
        btn_dismiss_header.type = "button"
        btn_dismiss_header.className = "close"
        btn_dismiss_header.setAttribute("data-dismiss", "modal")
        btn_dismiss_header.setAttribute("aria-label", "Close")
        let span_close = document.createElement("span")
        span_close.setAttribute("aria-hidden", "true")
        span_close.innerHTML = "&times;"
        btn_dismiss_header.appendChild(span_close)
    
        modal_header.appendChild(title)
        modal_header.appendChild(btn_dismiss_header)
    
        let modal_body = document.createElement("div")
        modal_body.setAttribute("class", "modal-body")
        let paragraph_main = document.createElement("p")
        paragraph_main.innerText = status ? "Sucesso!" : "Ops! Algo deu errado :("
        let paragraph_error = document.createElement("p")
        paragraph_error.innerText = content
        let paragraph_user = document.createElement("p")
        paragraph_user.innerHTML = "Usuário: <b>" + user + "</b>"
    
        modal_body.appendChild(paragraph_main)
        modal_body.appendChild(paragraph_error)
        modal_body.appendChild(paragraph_user)
    
        let modal_footer = document.createElement("div")
        modal_footer.setAttribute("class", "modal-footer")
        let btn_dismiss_footer = document.createElement("button")
        btn_dismiss_footer.type = "button"
        btn_dismiss_footer.className = "btn btn-" + status_class
        btn_dismiss_footer.setAttribute("data-dismiss", "modal")
        btn_dismiss_footer.innerText = status ? "Concluído" : "Fechar"

        modal_footer.appendChild(btn_dismiss_footer)
    
        let modal_content = document.createElement("div")
        modal_content.setAttribute("class", "modal-content")
    
        modal_content.appendChild(modal_header)
        modal_content.appendChild(modal_body)
        modal_content.appendChild(modal_footer)
    
        let modal_dialog = document.createElement("div")
        modal_dialog.setAttribute("class", "modal-dialog")
    
        modal_dialog.appendChild(modal_content)
    
        let modal_element = document.createElement("div")
        modal_element.setAttribute("class", "modal fade")
        modal_element.setAttribute("aria-hidden", "true")
        modal_element.setAttribute("tabindex", "-1")
        modal_element.id = modal_id
    
        modal_element.appendChild(modal_dialog)

        document.body.append(modal_element)

    $('#'+modal_id).modal('show')

    return true
}

function filter_report_error(user, error) {

    const target = "/ReportController/searchError/"+user

    var http = new XMLHttpRequest();

    var toSend = String()
        .concat(`user=${user}`)
        .concat(`&error=${error}`)

    http.open('POST', target, true);
    http.onreadystatechange = async function () {

        if (this.readyState == XMLHttpRequest.DONE) {

            if (this.status === 200) {

                const response = JSON.parse(http.responseText)

                if (response.error_code) {
                    
                    show_modal_response(user, error, response.error_msg, true)
                    
                    return true
                }
                
                show_modal_response(user, error, response.error_msg, false)
                
                return true
                
            } else {
                
                let error_msg = "Não foi possivel reportar o seu erro no momento :(";

                show_modal_response(user, error, error_msg, false)
            }
        }
    }
    http.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    http.send(toSend);

    return true
}