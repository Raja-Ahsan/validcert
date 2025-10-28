let navs = document.querySelector('.primary-navs')
let menuIcon = document.querySelectorAll('.menu-toggle')
console.log(navs, menuIcon);
menuIcon.forEach(function (e) {
    e.addEventListener('click', function () {
        navs.classList.toggle('active');
    });
});

$('.testimonials-slider').slick({
    dots: true,
    arrows: false,
    infinite: false,
    speed: 300,
    slidesToShow: 2,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    responsive: [
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
            }
        },
    ]
});





const heading = document.getElementById("animated-heading");
const textArray = ["Engineering Precision.", "Environmental Integrity.", "Innovative Solutions."]; // multiple phrases
let textIndex = 0;

function animateText() {
  heading.innerHTML = ""; // clear
  const text = textArray[textIndex];
  
  // split text into characters
  [...text].forEach((char, i) => {
    const span = document.createElement("span");
    span.textContent = char;
    span.classList.add("char");
    // alternate direction up/down
    if (i % 2 !== 0) span.classList.add("up");
    heading.appendChild(span);

    // animate in sequence
    setTimeout(() => {
      span.classList.add("show");
    }, i * 60);
  });

  // next phrase after 4s
  setTimeout(() => {
    // fade out
    document.querySelectorAll(".char").forEach((span, i) => {
      setTimeout(() => {
        span.classList.remove("show");
      }, i * 30);
    });
    // change text
    textIndex = (textIndex + 1) % textArray.length;
    setTimeout(animateText, 2000);
  }, 4000);
}

animateText();
