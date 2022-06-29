function realDate(){
    let mydate = new Date();
    let year = mydate.getFullYear();
        if (year < 1000){
            year =+ 1900;
        }
   
    let month = mydate.getMonth();
    let daym = mydate.getDate();

    const monthArray = new Array ("Styczeń", "Luty", "Marzec", "Kwiecień", "Maj", "Czerwiec", "Lipiec", "Sierpień", "Wrzesień", "Październik", "Listopad", "Grudzień");

    const myDate = document.getElementById("date");
    myDate.textContent = "" + daym + "  " + monthArray[month] + "  " + year;


}

realDate();

// myDate.innerText = "" + dayArray[day] + "  "  + daym + " " + monthArray[month] + " " + year;