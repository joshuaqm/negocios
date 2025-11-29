// app.js
// Funciones JavaScript para cambiar aspecto de un párrafo o imagen

// Resalta o quita el resaltado de un párrafo por id
function resaltarParrafo(idElemento) {
    var p = document.getElementById(idElemento);
    if (!p) return;

    if (p.classList.contains("resaltado")) {
        p.classList.remove("resaltado");
    } else {
        p.classList.add("resaltado");
    }
}

// Agranda ligeramente la imagen dentro de una tarjeta de servicio
function agrandarImagen(card) {
    var img = card.querySelector("img");
    if (img) {
        img.style.transform = "scale(1.05)";
    }
}

// Restaura el tamaño normal de la imagen
function restaurarImagen(card) {
    var img = card.querySelector("img");
    if (img) {
        img.style.transform = "scale(1)";
    }
}

document.addEventListener('DOMContentLoaded', () => {
    const modal = document.getElementById('modal-detalle');
    const modalImg = document.getElementById('modal-imagen');
    const modalTitulo = document.getElementById('modal-titulo');
    const modalTexto = document.getElementById('modal-texto');
    const btnCerrar = document.querySelector('.modal-cerrar');

    document.querySelectorAll('.btn-detalle').forEach(btn => {
        btn.addEventListener('click', () => {
            const card = btn.closest('.servicio-card');
            modalImg.src = card.dataset.img;
            modalTitulo.textContent = card.dataset.titulo;
            modalTexto.textContent = card.dataset.detalle;
            modal.style.display = 'flex';
        });
    });

    btnCerrar.addEventListener('click', () => {
        modal.style.display = 'none';
    });

    modal.addEventListener('click', (e) => {
        if (e.target === modal) modal.style.display = 'none';
    });
});
// Contadores animados
const stats = document.querySelectorAll('.stat-num');

function animarContador(elem) {
    const final = parseInt(elem.dataset.final, 10);
    let actual = 0;
    const incremento = Math.max(1, Math.floor(final / 60)); // velocidad

    const intervalo = setInterval(() => {
        actual += incremento;
        if (actual >= final) {
            actual = final;
            clearInterval(intervalo);
        }
        elem.textContent = actual;
    }, 20);
}

if (stats.length > 0) {
    stats.forEach(animarContador);
}

