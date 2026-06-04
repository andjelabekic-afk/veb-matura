const opisi = {
	"slika1": {
		naziv: "Стари гитариста",
		opis: "Стари гитариста је уљана слика Пабла Пикаса, коју је створио крајем 1903. и почетком 1904. године. На њој је приказан старији музичар, изнемогао човек у излизаној одећи, који је погрбљен над гитаром док свира на улицама Барселоне у Шпанији.",
		godina: 1903
	},
	"slika2": {
		naziv: "Сан",
		opis: "Сан је слика уље на платну из 1932. године Пабла Пикаса. На слици је приказана Мари-Терез Валтер, Пикасова муза и љубавница. Сматра се једним од његових препознатљивих дела из тог периода.",
		godina: 1932
	},
	"slika3": {
		naziv: "Девојка пред огледалом",
		opis: "Девојка пред огледалом је слика уља на платну Пабла Пикаса, настала 1932. године. Слика представља портрет Мари-Терез Валтер, која стоји испред огледала и посматра свој одраз. Дело се налази у колекцији Музеја модерне уметности у Њујорку.", 
		godina: 1932
	},
	"slika4": {
		naziv: "Девојка на лопти",
		opis: "Девојка на лопти, позната и као Млади акробата на лопти, слика је Пабла Пикаса из 1905. године. Настала је током његовог ружичастог периода и приказује циркуске извођаче током пробе. Од 1948. године налази се у збирци Пушкиновог музеја у Москви.",
		godina: 1905
	},
	"slika5": {
		naziv: "Дечак са лулом",
		opis: "Дечак са лулом је дело шпанског сликара Пабла Пикаса. Насликана је 1905. године, када је Пикасо имао 24 године и био у својој ружичастој фази, непосредно након што се преселио у Монмартр, северни део Париза. Дело се данас налази у приватној колекцији.",
		godina: 1905
	}
}
const slike = Array.from(document.querySelectorAll("#slike img"));
const indikatori = Array.from(document.querySelectorAll(".indikator"));

let index = 0;

setInterval(() => {
	index = (index + 1) % slike.length;
	for (const slika of slike) {
		slika.classList.remove("active");
	}
	for (const indikator of indikatori) {
		indikator.classList.remove("active");
	}
	slike[index].classList.add("active");
	indikatori[index].classList.add("active");
	const podaci = opisi[`slika${index+1}`];
	document.getElementById("naziv").innerText = podaci.naziv;
	document.getElementById("godina").innerText = podaci.godina;
	document.getElementById("opis").innerText = podaci.opis;
}, 3 * 1000);
