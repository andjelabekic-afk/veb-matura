const URL = "https://naslovi.net/vremenska-prognoza/";

document.getElementById("grad").onchange = (e) => {
    let grad = e.currentTarget.value;  

    document.querySelector("iframe").src = URL + grad;

    window.open(
        "gradovi.php?grad=" + grad,
        "Grad",
        "width=500,height=300"
    );
};