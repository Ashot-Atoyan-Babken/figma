function toggleMenu() {
   let menu = document.querySelector('.menu');
   menu.classList.toggle('active');
}
$(document).ready(function () {
   $('.owl-carousel').owlCarousel({
      loop: true,
      margin: 20,
      nav: false,
      dots: true,
      responsive: {
         0: {
            items: 1
         },
         600: {
            items: 2
         },
         1100: {
            items: 3
         },
         1400: {
            items: 4
         }
      }
   });

});

let hasSubmenuItems = document.querySelectorAll(".has-submenu");
hasSubmenuItems.forEach(function (item) {
   item.addEventListener("click", function (event) {
      event.stopPropagation();
      this.querySelector(".submenu").classList.toggle("show-submenu");
   });
});

document.addEventListener("click", function (event) {
   let menu = document.getElementById("menu");
   if (!menu.contains(event.target)) {
      let submenus = document.querySelectorAll(".submenu");
      submenus.forEach(function (submenu) {
         submenu.classList.remove("show-submenu");
      });
   }
});
