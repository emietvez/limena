const navbar = document.getElementById("navbar");
const logoWhite = document.getElementById("logo-white")
const logoColor = document.getElementById("logo-color")
const links = document.querySelectorAll(".items")


window.addEventListener("scroll", () => {
    if (window.scrollY == 0) {
        navbar.classList.remove("md:bg-white");
        navbar.classList.add("md:bg-transparent");
        logoWhite.classList.add("md:flex");
        logoColor.classList.remove("md:flex");

        links.forEach((e) => {
            e.classList.remove("md:text-black")
            e.classList.add("md:text-gray-200")
        })
      

    } else if (window.scrollY > 50) {
        navbar.classList.add("md:bg-white", "shadow-lg");
        navbar.classList.remove("md:bg-transparent");
        logoWhite.classList.remove("md:flex")
        logoColor.classList.add("md:flex");

        links.forEach((e) => {
            e.classList.add("md:text-black")
            e.classList.remove("md:text-gray-200")
        })
    }
});












// const menu          = document.getElementById('menu')
// const btnMenu       = document.getElementById('btnMenu')
// const btnMenuClose  = document.getElementById('btnClose')
// const dropLen       = document.getElementById('drop-len')
// const dropMenu      = document.getElementById('drop-menu')

// btnMenu.addEventListener('click', () => {
//     menu.classList.remove('hidden')
// })
// btnMenuClose.addEventListener('click', () => {
//     menu.classList.add('hidden')
// })

// dropLen.addEventListener('click', () => {
//     dropMenu.classList.toggle('hidden')
//     dropLen.classList.toggle('text-gray-900')

// })
