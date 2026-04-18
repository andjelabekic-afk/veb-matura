Array.from(document.querySelectorAll(".image img")).forEach(img => {

    
    img.addEventListener("click", () => {
        window.open(
            "zivotinja.php?zivotinja=" + img.id,
            "Domaće životinje",
            "width=500,height=300,left=100,top=100,menubar=no,toolbar=no"
        );
    });

    
    img.addEventListener("mouseover", () => {
        let audio = document.getElementById("audio-" + img.id);
        
        if (audio) {
            audio.currentTime = 0; 
            audio.play();
        }
    });

});