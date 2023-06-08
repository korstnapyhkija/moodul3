function updateCountdown() {
    const targetDate = new Date("October 10, 2034").getTime();
    const now = new Date().getTime();
    const difference = targetDate - now;
  
    if (difference <= 0) {
      document.getElementById("countdown-container").innerHTML = "Expired";
      return;
    }
  
    const days = Math.floor(difference / (1000 * 60 * 60 * 24));
    const hours = Math.floor((difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const seconds = Math.floor((difference % (1000 * 60)) / 1000);
  
    document.getElementById("days").innerText = formatTime(days);
    document.getElementById("hours").innerText = formatTime(hours);
    document.getElementById("seconds").innerText = formatTime(seconds);
  
    setTimeout(updateCountdown, 1000);
  }
  
  function formatTime(time) {
    return time < 10 ? `0${time}` : time;
  }
  
  window.onload = function () {
    document.getElementById("countdown-container").style.display = "block";
    updateCountdown();
  };
