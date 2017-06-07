/*declare and initialize variables
    note the escape sequence*/
        var hello = "Hello, how was your day, ";
        var name = "Analia";
        
        //Join (concatenate) the strings together
        var helloMessage = hello + name + "?";
        
        //get hold of the node with the ID of hello
        var el = document.getElementById("hello");
        
        //replace the content 
        el.textContent = helloMessage;