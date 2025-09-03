/* MOBİL MENÜ ACCORDION */
var Accordion = function (el, multiple) {
  this.el = el || {};
  this.multiple = multiple || false;
  var links = this.el.find(".link");
  links.on("click", { el: this.el, multiple: this.multiple }, this.dropdown);
};
Accordion.prototype.dropdown = function (e) {
  var $el = e.data.el;
  var $this = $(this),
    $next = $this.next();
  $next.slideToggle();
  $this.parent().toggleClass("open");
  if (!e.data.multiple) {
    $el.find(".submenu").not($next).slideUp().parent().removeClass("open");
  }
};
var accordion = new Accordion($("#accordion"), false);
// SLIDER
document.addEventListener("DOMContentLoaded", () => {
  const cards = document.querySelectorAll(".card");
  const fullscreenBg = document.getElementById("fullscreen-bg");
  const fullscreenText = document.getElementById("fullscreen-text");
  const fullscreenDesc = document.getElementById("fullscreen-desc");
  const cardTrack = document.getElementById("card-track");
  const navLeft = document.getElementById("nav-left");
  const navRight = document.getElementById("nav-right");

  let activeIndex = 0;

  if (!cards.length) return; // Eğer hiç card yoksa, script çalışmaz

  function updateActiveCard() {
    cards.forEach((card, i) =>
      card.classList.toggle("active", i === activeIndex)
    );

    const imgEl = cards[activeIndex].querySelector("img");
    const titleEl = cards[activeIndex].querySelector("h2");
    const descEl = cards[activeIndex].querySelector(".desc");
    console.log(descEl);

    if (imgEl && fullscreenBg)
      fullscreenBg.style.backgroundImage = `url(${imgEl.src})`;
    if (titleEl && fullscreenText) fullscreenText.innerText = titleEl.innerText;
    if (descEl && fullscreenDesc) fullscreenDesc.innerText = descEl.innerText;
  }

  function scrollToCard(index) {
    if (!cardTrack) return;
    const cardWidth = cards[0].offsetWidth + 16; // 16px margin/gap varsa
    cardTrack.scrollTo({ left: cardWidth * index, behavior: "smooth" });
  }

  // Kart tıklama
  cards.forEach((card, i) => {
    if (card) {
      card.addEventListener("click", () => {
        activeIndex = i;
        updateActiveCard();
        scrollToCard(i);
      });
    }
  });

  // Sol ve sağ butonlar
  if (navLeft) {
    navLeft.addEventListener("click", () => {
      activeIndex = (activeIndex - 1 + cards.length) % cards.length;
      updateActiveCard();
      scrollToCard(activeIndex);
    });
  }

  if (navRight) {
    navRight.addEventListener("click", () => {
      activeIndex = (activeIndex + 1) % cards.length;
      updateActiveCard();
      scrollToCard(activeIndex);
    });
  }

  // Başlangıçta aktif kart
  updateActiveCard();
});

// YUKARI BUTONU

document.addEventListener("DOMContentLoaded", () => {
  const upButton = document.querySelector(".up-to-top-button");
  if (!upButton) return; // Element yoksa script çalışmaz

  upButton.addEventListener("click", () => {
    window.scrollTo({
      top: 0,
      behavior: "smooth",
    });
  });
});

// // HABER SLİDER
// const slider = document.querySelector(".haber_kapsayici");
// const nextBtn = document.querySelector(".slider_btn.next");
// const prevBtn = document.querySelector(".slider_btn.prev");
// const scrollAmount = 580;

// nextBtn.addEventListener("click", () => {
//   slider.scrollBy({ left: scrollAmount, behavior: "smooth" });
// });

// prevBtn.addEventListener("click", () => {
//   slider.scrollBy({ left: -scrollAmount, behavior: "smooth" });
// });

// setInterval(() => {
//   if (slider.scrollLeft + slider.clientWidth >= slider.scrollWidth) {
//     slider.scrollTo({ left: 0, behavior: "smooth" });
//   } else {
//     slider.scrollBy({ left: scrollAmount, behavior: "smooth" });
//   }
// }, 4000);
