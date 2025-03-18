let request_status = document.getElementById("request").getAttribute("data-request-status");

const bars = document.querySelectorAll(".bar");

bars.forEach((bar, index) => {
  if(index <= request_status - 1) {
    
    bar.style.backgroundColor = "var(--button)";
    bar.style.setProperty('--border', 'var(--button)');
  }
})