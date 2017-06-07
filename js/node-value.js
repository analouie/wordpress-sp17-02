var itemTwo = document.getElementById("two");
var elText = itemTwo.firstChild.nodeValue; //get the text content

elText = elText.replace("pine nuts", "kale");
itemTwo.firstChild.nodeValue = elText;