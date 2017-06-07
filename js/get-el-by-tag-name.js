//select the element by id
var elements = document.getElementsByTagName("li");

if(elements.length > 0){
    //select the first one using array syntax
    var el = elements[3];
    el.className = "cool";
    
}