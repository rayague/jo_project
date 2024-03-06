function scrollToTop() {
  window.scrollTo({
    top: 0,
    behavior: "smooth" // Pour un défilement en douceur
  });
}

// Affiche/masque le bouton en fonction de la position de défilement
window.addEventListener("scroll", function () {
  var backToTopBtn = document.getElementById("back-to-top-btn");

  if (window.pageYOffset > 100) { // Vous pouvez ajuster cette valeur selon votre préférence
    backToTopBtn.style.display = "block";
  } else {
    backToTopBtn.style.display = "none";
  }
});


// Affiche la barre de recherche
function showSearchBar() {
    var searchBar = document.getElementById('search-bar-container');
    searchBar.style.display = 'flex';
    window.addEventListener('click', closeSearchBar, true);
  }

  // Ferme la barre de recherche si on clique en dehors
  function closeSearchBar(event) {
    var searchBar = document.getElementById('search-bar-container');
    // Vérifie si le clic est en dehors de la barre de recherche
    if (!searchBar.contains(event.target)) {
      searchBar.style.display = 'none';
      window.removeEventListener('click', closeSearchBar, true); // Nettoie l'écouteur
    }
  }

  // Empêche la propagation du clic à l'intérieur de la barre de recherche au document
  document.getElementById('search-bar-container').addEventListener('click', function(event) {
    event.stopPropagation();
  });

  // Gère la soumission de la recherche
  function submitSearch() {
    var searchQuery = document.getElementById('search-input').value;
    console.log('Recherche pour:', searchQuery); // Remplacer par votre logique de recherche
    document.getElementById('search-bar-container').style.display = 'none';
  }


  document.addEventListener('DOMContentLoaded', function() {
    var menuIcon = document.querySelector('.menu-icon');
    var navContent = document.querySelector('nav');

    menuIcon.addEventListener('click', function() {
      navContent.classList.toggle('active');
    });
  });








  const wrapper = document.querySelector(".wrapper");
  const carousel = document.querySelector(".carousel");
  const firstCardWidth = carousel.querySelector(".card").offsetWidth;
  const arrowBtns = document.querySelectorAll(".wrapper i");
  const carouselChildrens = [...carousel.children];

  let isDragging = false, isAutoPlay = false, startX, startScrollLeft, timeoutId;

  // Get the number of cards that can fit in the carousel at once
  let cardPerView = Math.round(carousel.offsetWidth / firstCardWidth);

  // Insert copies of the last few cards to beginning of carousel for infinite scrolling
  carouselChildrens.slice(-cardPerView).reverse().forEach(card => {
      carousel.insertAdjacentHTML("afterbegin", card.outerHTML);
  });

  // Insert copies of the first few cards to end of carousel for infinite scrolling
  carouselChildrens.slice(0, cardPerView).forEach(card => {
      carousel.insertAdjacentHTML("beforeend", card.outerHTML);
  });

  // Scroll the carousel at appropriate postition to hide first few duplicate cards on Firefox
  carousel.classList.add("no-transition");
  carousel.scrollLeft = carousel.offsetWidth;
  carousel.classList.remove("no-transition");

  // Add event listeners for the arrow buttons to scroll the carousel left and right
  arrowBtns.forEach(btn => {
      btn.addEventListener("click", () => {
          carousel.scrollLeft += btn.id == "left" ? -firstCardWidth : firstCardWidth;
      });
  });

  const dragStart = (e) => {
      isDragging = true;
      carousel.classList.add("dragging");
      // Records the initial cursor and scroll position of the carousel
      startX = e.pageX;
      startScrollLeft = carousel.scrollLeft;
  }

  const dragging = (e) => {
      if(!isDragging) return; // if isDragging is false return from here
      // Updates the scroll position of the carousel based on the cursor movement
      carousel.scrollLeft = startScrollLeft - (e.pageX - startX);
  }

  const dragStop = () => {
      isDragging = false;
      carousel.classList.remove("dragging");
  }

  const infiniteScroll = () => {
      // If the carousel is at the beginning, scroll to the end
      if(carousel.scrollLeft === 0) {
          carousel.classList.add("no-transition");
          carousel.scrollLeft = carousel.scrollWidth - (2 * carousel.offsetWidth);
          carousel.classList.remove("no-transition");
      }
      // If the carousel is at the end, scroll to the beginning
      else if(Math.ceil(carousel.scrollLeft) === carousel.scrollWidth - carousel.offsetWidth) {
          carousel.classList.add("no-transition");
          carousel.scrollLeft = carousel.offsetWidth;
          carousel.classList.remove("no-transition");
      }

      // Clear existing timeout & start autoplay if mouse is not hovering over carousel
      clearTimeout(timeoutId);
      if(!wrapper.matches(":hover")) autoPlay();
  }

  const autoPlay = () => {
      if(window.innerWidth < 800 || !isAutoPlay) return; // Return if window is smaller than 800 or isAutoPlay is false
      // Autoplay the carousel after every 2500 ms
      timeoutId = setTimeout(() => carousel.scrollLeft += firstCardWidth, 2500);
  }
  autoPlay();

  carousel.addEventListener("mousedown", dragStart);
  carousel.addEventListener("mousemove", dragging);
  document.addEventListener("mouseup", dragStop);
  carousel.addEventListener("scroll", infiniteScroll);
  wrapper.addEventListener("mouseenter", () => clearTimeout(timeoutId));
  wrapper.addEventListener("mouseleave", autoPlay);



  document.addEventListener("DOMContentLoaded", function () {
    let currentIndex = 2; // Index de la diapositive initiale (s3)
    const totalSlides = 5; // Nombre total de diapositives
    const interval = 1000; // Intervalle en millisecondes (1 seconde)

    function switchSlide() {
      const nextIndex = (currentIndex % totalSlides) + 1;
      document.getElementById(`s${currentIndex}`).checked = false;
      document.getElementById(`s${nextIndex}`).checked = true;
      currentIndex = nextIndex;
    }

    setInterval(switchSlide, interval);
  });

