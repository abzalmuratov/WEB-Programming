var url = "http://demo4296963.mockable.io/listCars";
var load = document.querySelector("button");
var img = document.querySelector("#loading");
var cards = document.querySelector("#cards");

function on(text) {
    var acards = new Array();
    acards = JSON.parse("[" + text + "]")[0];
    //console.log(acards);
  
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
    img.style = "";
    load.textContent = "Loaded";
}

function success(response) { response.text().then(on); }

function fail(error) {
    console.log("Error " + error);
    load.textContent = "some error";
}

var boo = false;
load.addEventListener("click", function(e) {
    if(boo == false) {
        load.textContent = "Loading...";
        img.style = "display: block"
        fetch(url).then(success, fail)
        boo = true;
    }
});