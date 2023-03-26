const btn_yeti = document.getElementById("btn_yeti");
const btn_yeti2 = document.getElementById("btn_yeti2");
const yeti = document.getElementById("yeti");
const respuestas = document.getElementById("respuestas");
const mensaje_saludo = document.getElementById("mensaje_saludo");
const mensaje_1 = document.getElementById("mensaje_1");
const mensaje_2 = document.getElementById("mensaje_2");
const mensaje_3 = document.getElementById("mensaje_3");

yeti.addEventListener('click', function (event) {
  mensaje_saludo.classList.remove("d-none")
  mensaje_1.classList.add("d-none")
  mensaje_2.classList.add("d-none")
  mensaje_3.classList.add("d-none")
  respuestas.classList.add("fade-in")
  setTimeout(function () { respuestas.classList.remove("fade-in"); }, 500);
});
document.getElementById("pregunta1").addEventListener('click', function (event) {
  mensaje_saludo.classList.add("d-none")
  mensaje_1.classList.remove("d-none")
  mensaje_2.classList.add("d-none")
  mensaje_3.classList.add("d-none")
  respuestas.classList.add("fade-in")
  setTimeout(function () { respuestas.classList.remove("fade-in"); }, 500);
});
document.getElementById("pregunta2").addEventListener('click', function (event) {
  mensaje_saludo.classList.add("d-none")
  mensaje_1.classList.add("d-none")
  mensaje_2.classList.remove("d-none")
  mensaje_3.classList.add("d-none")
  respuestas.classList.add("fade-in")
  setTimeout(function () { respuestas.classList.remove("fade-in"); }, 500);
});
document.getElementById("pregunta3").addEventListener('click', function (event) {
  mensaje_saludo.classList.add("d-none")
  mensaje_1.classList.add("d-none")
  mensaje_2.classList.add("d-none")
  mensaje_3.classList.remove("d-none")
  respuestas.classList.add("fade-in")
  setTimeout(function () { respuestas.classList.remove("fade-in"); }, 500);
});

function pointer(id, clase, time) {
  document.getElementById(id).classList.add(clase);
  setTimeout(function () { document.getElementById(id).classList.remove(clase); }, time);
}
function posicionar(coords) {
  window.scroll({
    top: coords,
    behavior: 'smooth'
  });
}
$('#preguntas').on('hidden.bs.modal', function (e) {
  btn_yeti.style.opacity = '1'
  btn_yeti2.style.opacity = '1'
});


var animData = {
  container: btn_yeti,
  renderer: 'svg',
  loop: false,
  autoplay: false,
  autoloadSegments: false,
  path: 'yeti_mayo2.json',
  name: "yeti con burbuja de mensaje"
};
var animData2 = {
  container: btn_yeti2,
  renderer: 'svg',
  loop: true,
  autoplay: false,
  path: 'entrada-y-salida-2.json',
  name: "cabeza del yeti con animaciones"
};
var animData3 = {
  container: yeti,
  renderer: 'svg',
  loop: true,
  autoplay: false,
  path: 'yeti.json',
  name: "yetiComplete"
};

animation = bodymovin.loadAnimation(animData);
animation.addEventListener('DOMLoaded', startAnimation);
function startAnimation() {
  animation.playSegments([0, 500], true);
  animation.setSpeed(0.8)
}


animation2 = bodymovin.loadAnimation(animData2);
animation.addEventListener('complete', startAnimation2);
function startAnimation2() {
  setTimeout(destroy, 1000)
  animation2.playSegments([[0, 400], [130, 400]], true);
}
function destroy() {
  animation.destroy()
}

animation3 = bodymovin.loadAnimation(animData3);

function showModal() {
  $('#preguntas').modal('show')
  setTimeout(play, 1500)
}
function play() {
  animation3.play()
}


// ocultar yeti y mostrar modal
btn_yeti.onclick = hideYetiShowModal;
btn_yeti2.onclick = hideYetiShowModal;
function hideYetiShowModal() {
  this.style.opacity = '0'
  setTimeout(showModal, 300)
}

// ocultar modal
document.getElementById("res1_opt1").onclick = hideModal;
document.getElementById("res1_opt2").onclick = hideModal;
document.getElementById("res1_opt3").onclick = hideModal;
document.getElementById("res2_opt1").onclick = hideModal;
document.getElementById("res2_opt2").onclick = hideModal;
document.getElementById("res2_opt3").onclick = hideModal;
document.getElementById("res3_opt1").onclick = hideModal;

function hideModal(e) {
  $('#preguntas').modal('hide')
  if (this.id == "res1_opt1") {
    e.preventDefault();
    if (document.body.scrollWidth >= 756) {
      pointer("hand_1", "hand_animate", 10000)
      pointer("btnguardar", "sup_border2", 10000)
      posicionar(0)
    } else {
      pointer("hand_1_m", "hand_animate", 10000)
      pointer("btnguardar2", "sup_border2", 10000)
      posicionar(917)
    }
  }
  // Lic
  if (this.id == "res2_opt1") {
    e.preventDefault();
    if (document.body.scrollWidth >= 756) {
      posicionar(590)
      setTimeout(function () { $("#licenciaturas").trigger("click"); }, 500);
    } else {
      posicionar(502)
      setTimeout(function () { $("#licenciaturas").trigger("click"); }, 500);
    }
  }
  // Mae
  if (this.id == "res2_opt2") {
    e.preventDefault();
    if (document.body.scrollWidth >= 756) {
      posicionar(590)
      setTimeout(function () { $("#maestrias").trigger("click"); }, 500);
    } else {
      posicionar(615)
      setTimeout(function () { $("#maestrias").trigger("click"); }, 500);
    }
  }
  // Doc
  if (this.id == "res2_opt3") {
    e.preventDefault();
    if (document.body.scrollWidth >= 756) {
      posicionar(590)
      setTimeout(function () { $("#doctorados").trigger("click"); }, 500);
    } else {
      posicionar(502)
      setTimeout(function () { $("#doctorados").trigger("click"); }, 500);
    }
  }
}