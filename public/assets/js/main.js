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

const textArray = [
  // Core Services (unchanged)
  `<span class="color-primary">Trusted</span>&nbsp;&nbsp;<span class="color-accent">Training</span><br><span class="color-accent">Reliable</span>&nbsp;&nbsp;<span class="color-primary">Support</span>`,

  // Certifications
  `<span class="color-primary">Certified</span>&nbsp;&nbsp;<span class="color-accent">Quality</span><br><span class="color-accent">Registered</span>&nbsp;&nbsp;<span class="color-primary">Excellence</span>`,

  // Registration Focus
  `<span class="color-primary">Accredited</span>&nbsp;&nbsp;<span class="color-accent">Approved</span><br><span class="color-accent">Verified</span>&nbsp;&nbsp;<span class="color-primary">Professionals</span>`,
  // Team & Expertise
  `<span class="color-primary">Expert</span>&nbsp;&nbsp;<span class="color-accent">Team</span><br><span class="color-accent">Certified</span>&nbsp;&nbsp;<span class="color-primary">Professionals</span>`,

  // Standards & Compliance
  `<span class="color-primary">Global</span>&nbsp;&nbsp;<span class="color-accent">Standards</span><br><span class="color-accent">Quality</span>&nbsp;&nbsp;<span class="color-primary">Compliance</span>`
];

let textIndex = 0;

function animateText() {
  heading.innerHTML = textArray[textIndex]; // insert HTML (renders colored spans)

  // select all letters inside spans + text nodes
  const chars = heading.querySelectorAll("span, span *");
  const allNodes = [...heading.childNodes];

  allNodes.forEach(node => {
    if (node.nodeType === Node.TEXT_NODE) {
      // for plain text
      const fragment = document.createDocumentFragment();
      node.textContent.split("").forEach((char, i) => {
        const span = document.createElement("span");
        span.textContent = char;
        span.classList.add("char");
        if (i % 2 !== 0) span.classList.add("up");
        fragment.appendChild(span);
      });
      node.replaceWith(fragment);
    } else if (node.nodeType === Node.ELEMENT_NODE) {
      // for colored spans
      const words = node.textContent.split(" ");
      node.textContent = "";
      words.forEach((word, i) => {
        // wrap each character in the word
        word.split("").forEach((char, j) => {
          const span = document.createElement("span");
          span.textContent = char;
          span.classList.add("char");
          if (j % 2 !== 0) span.classList.add("up");
          node.appendChild(span);
        });
  
        // add a space after each word (visually)
        if (i < words.length - 1) {
          const space = document.createElement("span");
          space.textContent = " ";
          space.classList.add("char");
          node.appendChild(space);
        }
      });
    }
  });

  // animate in
  const allChars = heading.querySelectorAll(".char");
  allChars.forEach((span, i) => {
    setTimeout(() => {
      span.classList.add("show");
    }, i * 60);
  });

  // fade out and move to next phrase
  setTimeout(() => {
    allChars.forEach((span, i) => {
      setTimeout(() => {
        span.classList.remove("show");
      }, i * 25);
    });

    textIndex = (textIndex + 1) % textArray.length;
    setTimeout(animateText, 2000);
  }, 4000);
}

animateText();

