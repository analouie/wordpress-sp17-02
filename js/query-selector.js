//querySelector only returns the first match
//var el = document.querySelector("li.hot");
//el.className = "cool";

//querySelectorAll return a nodelist
var els = document.querySelectorAll("li.hot");
//els[1].className = "cool";

//loop
for (var i = 0; i <els.length; i++){
    els[i].className="cool";
}