const opisi = {
    "slika1": "Mapa prikazuje raspored sedam svetskih čuda antičkog sveta i mesta na kojima su se ona nalazila. Na njoj možemo videti da su čuda bila raspoređena u različitim delovima starog sveta, od Egipta i Mesopotamije do Male Azije i Grčke. Ova mapa pomaže korisniku da lakše poveže svako čudo sa njegovim geografskim položajem i istorijskim okruženjem. Sedam svetskih čuda antičkog sveta predstavljaju najpoznatija graditeljska i umetnička dostignuća starih civilizacija. Ona pokazuju veliko znanje, bogatstvo, verovanja i veštinu naroda koji su ih stvorili. Od svih antičkih čuda do danas je u potpunosti sačuvana samo Keopsova piramida u Gizi, dok su ostala poznata na osnovu istorijskih izvora, opisa i arheoloških ostataka.",
    "slika2": "Viseći vrtovi Semiramide, prema predanju, nalazili su se u Vavilonu. Smatra se da ih je izgradio kralj Navuhodonosor II za svoju suprugu. Vrtovi su bili postavljeni na visokim terasama i ispunjeni zelenilom, zbog čega su ostali simbol lepote i raskoši drevnog Vavilona.",

    "slika3": "Artemidin hram u Efesu bio je posvećen boginji Artemidi, zaštitnici lova i prirode. Nalazio se na prostoru današnje Turske i bio je poznat po velikom broju stubova, raskošnoj dekoraciji i veličini. Smatra se jednim od najlepših hramova antičkog sveta.",

    "slika4": "Mauzolej u Halikarnasu bio je raskošna grobnica kralja Mauzola i njegove supruge Artemizije. Izgrađen je u 4. veku pre nove ere u Halikarnasu, današnjem Bodrumu u Turskoj. Bio je poznat po bogatoj dekoraciji, monumentalnom izgledu i velikom uticaju na kasniju arhitekturu.",

    "slika5": "Keopsova piramida u Gizi je najstarije i jedino sačuvano čudo antičkog sveta. Podignuta je kao grobnica faraona Keopsa oko 2560. godine pre nove ere. Sagrađena je od velikih kamenih blokova i vekovima je bila jedna od najviših građevina na svetu.",

    "slika6": "Zevsova statua u Olimpiji bila je delo poznatog grčkog vajara Fidije. Predstavljala je vrhovnog grčkog boga Zevsa kako sedi na prestolu. Bila je izrađena od zlata, slonovače i drveta, a nalazila se u Zevsovom hramu u Olimpiji.",

    "slika7": "Ostaci Artemidinog hrama u Efesu danas svedoče o nekadašnjoj veličini ovog antičkog svetilišta. Iako hram više ne postoji u svom prvobitnom obliku, sačuvani stubovi i ruševine podsećaju na značaj Efesa i na arhitektonska dostignuća starog sveta.",

    "slika8": "Piramide u Gizi predstavljaju jedan od najpoznatijih simbola starog Egipta. Najpoznatija među njima je Keopsova piramida, koja pripada sedam svetskih čuda antičkog sveta. Ove građevine pokazuju razvijeno znanje Egipćana iz matematike, građevinarstva i organizacije rada.",

    "slika9": "Kolos sa Rodosa bio je ogromna bronzana statua boga Heliosa, zaštitnika ostrva Rodos. Podignut je u znak pobede i slobode grada. Iako je srušen u zemljotresu, ostao je jedan od najpoznatijih simbola snage, umetnosti i graditeljstva antičke Grčke.",

    "slika10": "Čičen Ica je poznato arheološko nalazište na poluostrvu Jukatan u Meksiku. Najpoznatija građevina je Kukulkanova piramida, koja pokazuje znanje Maja iz astronomije, matematike i arhitekture. Ova slika predstavlja jedno od najpoznatijih svetskih kulturnih nasleđa."
};

window.addEventListener("DOMContentLoaded", () => {
    const opis = document.querySelector("textarea");
    const centralnaSlika = document.querySelector(".center-image img");
    const maleSlike = document.querySelectorAll(".small-image img");

    // Odmah prikazuje tekst za početnu sliku, da se ne vidi Lorem ipsum.
    if (opis) {
        opis.value = opisi["slika1"];
    }

    maleSlike.forEach(img => {
        img.addEventListener("click", () => {
            centralnaSlika.src = img.src;
            centralnaSlika.alt = img.alt;
            opis.value = opisi[img.id];
        });
    });
});
