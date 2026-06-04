Array.from(document.querySelectorAll(".zastava")).forEach(zas => {

    // hover → zvuk
    zas.addEventListener("mouseenter", () => {
        let audio = document.getElementById(`audio-${zas.id}`);
        if (audio) {
            audio.currentTime = 0;
            audio.play();
        }
    });

    zas.addEventListener("mouseleave", () => {
        let audio = document.getElementById(`audio-${zas.id}`);
        if (audio) {
            audio.pause();
            audio.currentTime = 0;
        }
    });

    // klik → otvara prozor
    zas.addEventListener("click", () => {
        window.open(
            "drzava.php?drzava=" + zas.id,
            "Srbija i susedi",
            "width=500,height=300,left=100,top=100,menubar=no,toolbar=no"
        );
    });

});