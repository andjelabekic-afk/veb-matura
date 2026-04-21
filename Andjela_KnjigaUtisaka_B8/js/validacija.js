document.addEventListener("DOMContentLoaded", function () {
    const forma = document.getElementById("formaUtisak");

    if (!forma) return;

    forma.addEventListener("submit", function (e) {
        const ime = document.getElementById("ime").value.trim();
        const email = document.getElementById("email").value.trim();
        const komentar = document.getElementById("komentar").value.trim();

        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (ime === "" || email === "" || komentar === "") {
            e.preventDefault();
            alert("Sva polja moraju biti popunjena.");
            return;
        }

        if (!emailRegex.test(email)) {
            e.preventDefault();
            alert("Email adresa nije u ispravnom formatu.");
        }
    });
});