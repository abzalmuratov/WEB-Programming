var url = "http://demo4296963.mockable.io/listCars";
var load = document.querySelectorAll("button")[0];
var sortByMaker = document.querySelector("#sortByMaker")
var sortByPrice = document.querySelector("#sortByPrice")
var img = document.querySelector("#loading");
var cards = document.querySelector("#cards");
var acards;

function on(text) {
    acards = new Array();
    acards = JSON.parse("[" + text + "]")[0];
    //console.log(acards);
    pushAll(acards)
    img.style = "";
    load.textContent = "Loaded";
}

function pushAll(acards) {
    cards.innerHTML = "";
    for(var i = 0; i < acards.length; ++i) {
        var card = document.createElement("div");
        var title = document.createElement("p");
        var price = document.createElement("p");

        var x = acards[i];
        title.innerHTML = x.maker + " " + x.model;
        price.innerHTML = x.price;

        title.classList.add("title");
        price.classList.add("price");

        card.appendChild(title);
        card.appendChild(price);

        card.classList.add("card");
        cards.appendChild(card);
    }
}
function success(response) { response.text().then(on); }

function fail(error) { load.textContent = "some error"; }

function compareName(a, b) {
    if (a.maker < b.maker) return -1;
    if (a.maker > b.maker) return 1;
    return 0;
}

function comparePrice(a, b) {
    if (a.price < b.price) return -1;
    if (a.price > b.price) return 1;
    return 0;
}

load.addEventListener("click", function(e) {
    load.textContent = "Loading...";
    img.style = "display: block"
    fetch(url).then(success, fail)
});

sortByMaker.addEventListener("click", function(e) {
    acards.sort(compareName);
    //console.log(acards);
    pushAll(acards);
})

sortByPrice.addEventListener("click", function(e) {
    acards.sort(comparePrice);
    //console.log(acards);
    pushAll(acards);
})