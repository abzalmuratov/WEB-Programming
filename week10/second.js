let car = ["Toyota", "BMW", "Mercedes"];
let maker = document.getElementById("cars");
let years = document.getElementById("years");

let n = car.length;
for(let i = 0; i < n; ++i) {
	let x = document.createElement("option");
	x.text = car[i];
	maker.add(x);
}

for(let i = 2018; i > 1998; --i) {
	let x = document.createElement("option");
	x.text = i;
	years.add(x);
}