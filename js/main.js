data = document.getElementById("symptoms");
// console.log(data.innerText.split('|'));
symptoms = data.innerText.split('|');
console.log(symptoms);

show = document.getElementById("show");
nextButton = document.getElementById("next");
symptomChecks = [];

const array1 = ['a', 'b', 'c'];

array1.forEach(element => console.log(element));
count = 0;
original_text = show.innerText;
show.innerText += " " + symptoms[count];

nextButton.onclick = function() {
    if(symptoms[count] !== ""){
        if(document.getElementById('Yes').checked){
            symptomChecks.push(1);
            count++;
            show.innerText = original_text;
            show.innerText += " " + symptoms[count];
        } else if (document.getElementById('No').checked){
            symptomChecks.push(0);
            count++;
            show.innerText = original_text;
            show.innerText += " " + symptoms[count];
        }
    }
    if(symptoms.length === count+1) {
        document.getElementById("questions").style.display = "none";
        document.getElementById("showresults").style.display = "inline";
        document.getElementById("datainput").setAttribute("value", symptomChecks);
    }
}
console.log(symptomChecks);

jsondata = {};
for(i = 0; i < count+1; i ++) {
    jsondata.i = symptomChecks[i];
}
console.log(jsondata);

