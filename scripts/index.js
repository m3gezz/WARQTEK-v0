const slide_buttons = document.querySelectorAll(".slide-buttons");
slide_buttons.forEach((button) => {
  button.addEventListener("click", () => {

    slide_buttons.forEach((a) => {
      if (a.style.backgroundColor == "var(--button)") {
        a.style.backgroundColor = "var(--border)";
      }
    })

    button.style.backgroundColor = "var(--button)";

  })
})

const animated_numbers = document.querySelectorAll(".animated-numbers");

animated_numbers.forEach((number) => {
  let reset = number.innerHTML;

  let target = number.getAttribute("data-number");

  let start = 0;

  let adding = setInterval(() => {
    start+= 100;

    number.textContent = start;

    if (start == target) {

      clearInterval(adding);
      number.innerHTML = reset;

    }
  }, 1);
})