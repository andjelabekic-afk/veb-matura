document.addEventListener("DOMContentLoaded", function () {
    const seatInput = document.getElementById("broj_sedista");
    const form = document.getElementById("rezervacija-form");

    document.querySelectorAll(".seat.free").forEach(function (seat) {
        seat.addEventListener("click", function () {
            if (seatInput) {
                seatInput.value = this.dataset.seat;
            }
        });
    });

    if (form) {
        form.addEventListener("submit", function (e) {
            const brojSedista = document.getElementById("broj_sedista").value.trim();
            const imePrezime = document.getElementById("ime_prezime").value.trim();
            const email = document.getElementById("email").value.trim();

            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (brojSedista === "" || imePrezime === "" || email === "") {
                e.preventDefault();
                alert("Sva polja moraju biti popunjena.");
                return;
            }

            if (!emailRegex.test(email)) {
                e.preventDefault();
                alert("Email adresa nije u ispravnom formatu.");
            }
        });
    }
});