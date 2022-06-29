function realDay(){
    let mydate = new Date();
    let day = mydate.getDay();

    const dayArray = new Array("Niedziela", "Poniedziałek", "Wtorek", "Środa", "Czwartek", "Piątek", "Sobota");

    const myDate = document.getElementById("realDay");
    myDate.textContent = "" + dayArray[day];
}

realDay();
