function calcBil(val) {
    console.log("calcBil(): " +  val);
    const calcResult = document.getElementById('calc-result');
    calcResult.style.display = "block";

    const resultM = document.getElementById('result-m');
    const resultY = document.getElementById('result-y');

    resultM.innerHTML = "Miesięczne zużycie <FONT SIZE=+2>[Wh]</FONT>: " +  (val/0.72).toFixed(2)
    resultY.innerHTML = "Roczne zużycie <FONT SIZE=+2>[Wh]</FONT>: " + (val/0.72*12).toFixed(2)
	
}
let Url = document.querySelector('button');
Url.addEventListener('click', () => {
window.open("https://optimalenergy.pl/aktualnosci/prad/jak-obliczyc-rachunek-za-prad/", '_blank', 'width=800px, height=600px')});

