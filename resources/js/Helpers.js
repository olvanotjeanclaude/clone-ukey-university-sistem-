var todayIs = function() {
    var date = new Date();
    var currentDay = date.getDate();
    var currentMonth = date.getMonth();
    var currentYear = date.getFullYear();
    var currentHours = date.getHours();
    var currentMinutes = date.getMinutes();
    //currentHours = currentHours < 10 ? `0${currentHours}` : currentHours;
    //currentMonth = currentMonth < 10 ? `${currentMonth}` : currentMonth;
    // currentMinutes = currentMinutes < 10 ? `0${currentMinutes}` : currentMinutes;

    // var currentSeconds = date.getSeconds();

    var today = `${currentDay}.${currentMonth + 1
        }.${currentHours} ${currentHours}:${currentMinutes}`;

    console.log(today);

    return today;
}