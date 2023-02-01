const countdown = () => {
    const countDate = new Date("October 18, 2023 00:00:00").getTime();
    const dateNow = new Date().getTime();
    const gap = countDate - dateNow;

    //time
    const second = 1000;
    const minute = second * 60;
    const hour = minute * 60;
    const day = hour * 24;

    //time calculation
    const textDay = Math.floor(gap / day);
    const textHour = Math.floor((gap % day) / hour);
    const textMinute = Math.floor((gap % hour) / minute);
    const textSecond = Math.floor((gap % minute) / second);

    document.querySelector(".hari").innerText = textDay;
    document.querySelector(".jam").innerText = textHour;
    document.querySelector(".menit").innerText = textMinute;
    document.querySelector(".detik").innerText = textSecond;
    // console.log(textDay);
};

setInterval(countdown, 1000);