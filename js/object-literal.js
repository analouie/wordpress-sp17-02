//set up the object
var hotel={
    //properties 
    name : "Quay",
    rooms : 100,
    booked : 25,
    //function
    checkAvailability : function(){
        return this.rooms - this.booked;
    }
    
    
};

//update the html
var elName = document.getElementById("hotelName");
elName.textContent = hotel.name;

var elRooms = document.getElementById("rooms");
elRooms.textContent = hotel.checkAvailability();