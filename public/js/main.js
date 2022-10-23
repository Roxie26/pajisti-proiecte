(function () {
  "use strict";
  window.addEventListener(
    "load",
    function () {
      var forms = document.getElementsByClassName("needs-validation");
      var validation = Array.prototype.filter.call(forms, function (form) {
        form.addEventListener(
          "submit",
          function (event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
              form.classList.add("was-validated");
            } else {
             /*  event.preventDefault();
              event.stopPropagation(); */

              // aduc mesajele din localStorage
              let mesajeTrimise = JSON.parse(localStorage.getItem("messages"));

              // preiau datele din formular
              const data = new FormData(event.target);
              const value = Object.fromEntries(data.entries());
              if (!Array.isArray(mesajeTrimise)) {
                mesajeTrimise = [];
              }
              mesajeTrimise.push(value);

              // salvez datele in localStorage
              localStorage.setItem("messages", JSON.stringify(mesajeTrimise));

              // resetare formular
              form.reset();
              form.classList.remove("was-validated");

              // afisez alert la finalizare si ascund dupa 5 secunde
             /*  const alert = document.getElementById("alert");
              alert.classList.remove("hide");
              setTimeout(() => alert.classList.add("hide"), 5000); */
            }
          },
          false
        );
      });
    },
    false
  );
})();

function toggleMenu() {
  const x = document.getElementById("navi");
  if (x.classList.contains("responsive")) {
    x.classList.remove("responsive");
  } else {
    x.classList.add("responsive");
  }
}

function closeMenu(){
	const x = document.getElementById("navi");
	x.classList.remove("responsive");
}

AOS.init();