let cars = ["Toyota Corolla (2015)", "BMW X5 (2012)", "Toyota Camry (2008)"];
let makerOfCars = ["Toyota", "BMW", "Mercedes"];
let carSelect = document.getElementById("cars");
let makerSelect = document.getElementById("makerCars");
let yearSelect = document.getElementById("yearCars");
let modelSelect = document.getElementById("modelCars");
let engineSelect = document.getElementsByName("engine");
let priceSelect = document.getElementById("priceCars"); 
let select1 = document.getElementById("a1");
let select2 = document.getElementById("a2");
let select3 = document.getElementById("a3");

for(let i = 0; i < makerOfCars.length; ++i){
	let option = document.createElement("option");
	option.text = makerOfCars[i];
	makerSelect.add(option);
}

for(let i = 2018; i > 1998; --i){
	let option = document.createElement("option");
	option.text = i;
	yearSelect.add(option);
}

for(let i = 0; i < cars.length; ++i){
	let option = document.createElement("option");
	option.text = cars[i];
	carSelect.add(option);
}

let which;
carSelect.addEventListener("change", function(event){
	which = event.currentTarget.value.split(" ");
	if(which[0] == "Toyota"){
		if(which[1] == "Corolla"){
			makerSelect.value = "Toyota";
			yearSelect.value = 2015;
			modelSelect.value = "Corolla";
			engineSelect[0].setAttribute("checked", "checked");
			priceSelect.value = 30000;
			select1.setAttribute("checked", "checked");
			select3.setAttribute("checked", "checked");
		}
		else{
			makerSelect.value = "Toyota";
			yearSelect.value = 2008;
			modelSelect.value = "Camry";
			engineSelect[2].setAttribute("checked", "checked");
			priceSelect.value = 15000;
			select3.setAttribute("checked", "checked");
		}
	}
	else{
		makerSelect.value = "BMW";
		yearSelect.value = 2012;
		modelSelect.value = "X5";
		engineSelect[0].setAttribute("checked", "checked");
		priceSelect.value = 50000;
		select1.setAttribute("checked", "checked");
		select2.setAttribute("checked", "checked");
		select3.setAttribute("checked", "checked");	
	}
})
