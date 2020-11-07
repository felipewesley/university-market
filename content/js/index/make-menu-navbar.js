const ID_NAVBAR_TOP = "navbar-top-desktop"
const ID_NAVBAR_BOTTOM = "navbar-bottom-mobile"

let NAVBAR_TOP = document.getElementById(ID_NAVBAR_TOP)
    NAVBAR_TOP.className = "navbar sticky-top justify-content-center navbar-light navbar-block bg-light"

let NAVBAR_BOTTOM = document.getElementById(ID_NAVBAR_BOTTOM)
    NAVBAR_BOTTOM.className = "navbar fixed-bottom navbar-light bg-light"

const MENU_LIST_FILE = "./content/json/index/menu-list.json"

fetch(MENU_LIST_FILE)
.then(response => response.json())
.then(function (response) {

    for (let index in response.$menuList) {

        const element = response.$menuList[index]

        let to_menu_top = make_menu_item(element.title, element.href, element.icon, element.help)
        let to_menu_bottom = make_menu_item(false, element.href, element.icon, element.help)
        
        NAVBAR_TOP.appendChild(to_menu_top)
        NAVBAR_BOTTOM.appendChild(to_menu_bottom)
    }
    return true
})

function make_menu_item(title, href, icon, help) {

    const DEFAULT_ICON_CLASS = "nav-link-icon"
    let a = document.createElement("a")
        a.setAttribute("class", "nav-link")
        a.setAttribute("href", href)

    if (help) {
        a.setAttribute("title", help)
    }

    let i = document.createElement("i")
        i.setAttribute("class", `${icon} ${DEFAULT_ICON_CLASS}`)

    a.appendChild(i)
    
    if (title) {
        let t = document.createElement("span")
        t.innerText = title

        a.appendChild(t)
    }

    return a
}