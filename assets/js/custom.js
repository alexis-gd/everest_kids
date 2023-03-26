//Variables
const cont_mision = document.getElementById('anim_mision')
const cont_mision_open = document.getElementById('anim_mision_open')
const cont_vision = document.getElementById('anim_vision')
const cont_vision_open = document.getElementById('anim_vision_open')
const cont_filosofia = document.getElementById('anim_filosofia')
const cont_filosofia_open = document.getElementById('anim_filosofia_open')
const parent = document.querySelectorAll('a.nav-link')
var hijo
var btn_actual

//Animations
animation_vision = bodymovin.loadAnimation(setAnimData(cont_vision, 'vision'))
animation_vision_open = bodymovin.loadAnimation(setAnimData(cont_vision_open, 'vision'))
animation_mision = bodymovin.loadAnimation(setAnimData(cont_mision, 'mision'))
animation_mision_open = bodymovin.loadAnimation(setAnimData(cont_mision_open, 'mision'))
animation_filosofia = bodymovin.loadAnimation(setAnimData(cont_filosofia, 'filosofia'))
animation_filosofia_open = bodymovin.loadAnimation(setAnimData(cont_filosofia_open, 'filosofia'))

// DOM Ready
document.addEventListener('DOMContentLoaded', function(event) {
    for (son of parent) {
        son.addEventListener("click", function(evt) {
            hijo = this.href.split('#')[1];
            btn_actual = this
            btn_actual.children[0].classList.add("selected-2")
            btn_actual.children[0].children[0].classList.add("selected")
            btn_actual.children[0].children[1].classList.add("selected")
            if (document.getElementById(hijo).classList.contains("active")) {
                delete_status()
            } else {
                delete_status()
                btn_actual.children[0].classList.add("selected-2")
                btn_actual.children[0].children[0].classList.add("selected")
                btn_actual.children[0].children[1].classList.add("selected")
                document.getElementById(hijo).classList.add("active", "show")
            }
        });
    }

    document.getElementById('btn_lic').addEventListener('click', evaluateClick);
    document.getElementById('btn_mae').addEventListener('click', evaluateClick);
    document.getElementById('btn_doc').addEventListener('click', evaluateClick);
});

// Functions
function setAnimData(container, json) {
    var animData = {
        container: container,
        renderer: 'svg',
        loop: true,
        autoplay: true,
        path: 'assets/animation/json/' + json + '.json'
    };
    return animData
}

function delete_status() {
    document.getElementById('nav-mision').classList.remove("active", "show")
    document.getElementById('nav-vision').classList.remove("active", "show")
    document.getElementById('nav-filosofia').classList.remove("active", "show")
    document.getElementById('nav-mision-tab').children[0].classList.remove("selected-2")
    document.getElementById('nav-mision-tab').children[0].children[0].classList.remove("selected")
    document.getElementById('nav-mision-tab').children[0].children[1].classList.remove("selected")
    document.getElementById('nav-vision-tab').children[0].classList.remove("selected-2")
    document.getElementById('nav-vision-tab').children[0].children[0].classList.remove("selected")
    document.getElementById('nav-vision-tab').children[0].children[1].classList.remove("selected")
    document.getElementById('nav-filosofia-tab').children[0].classList.remove("selected-2")
    document.getElementById('nav-filosofia-tab').children[0].children[0].classList.remove("selected")
    document.getElementById('nav-filosofia-tab').children[0].children[1].classList.remove("selected")
}

function evaluateClick() {
    const buttons = {
        btn_lic: 'format_lic',
        btn_mae: 'format_mae',
        btn_doc: 'format_doc'
    }
    const button_default = 'none'
    const btn_clicked = buttons[this.id] || button_default

    if (document.getElementById(btn_clicked).classList.contains("show")) {
        document.getElementById(btn_clicked).classList.remove("show")
    } else {
        for (everyMatch of document.querySelectorAll('.inf-oferta')) {
            document.getElementById(everyMatch.id).classList.remove("show")
        }
        document.getElementById(btn_clicked).classList.add("show")
    }
}