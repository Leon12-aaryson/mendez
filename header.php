<?php
include "include.php";
?>

<nav>
    <ul class="menu">
        <li class="logo"><a href="index.php">Dimension Pictures</a></li>
        <li class="item"><a href="index.php">Home</a></li>
        <!-- <li class="item"><a href="works.php">How It works</a></li> -->
        <li class="item"><a href="about.php">About Us</a></li>
        <!-- <li class="item"><a href="#">Blog</a></li> -->
        <li class="item"><a href="#contact">Contact</a></li>

        <li class="toggle"><a href="#"><i class="bx bx-menu"></i></a></li>
    </ul>
</nav>
<!-- <img src="" alt=""> -->

<script>
    const toggle = document.querySelector(".toggle");
    const menu = document.querySelector(".menu");
    /* Toggle mobile menu */
    function toggleMenu() {
        if (menu.classList.contains("active")) {
            menu.classList.remove("active");

            // adds the menu (hamburger) icon 
            toggle.querySelector("a").innerHTML = "<i class='bx bx-menu'></i>";
        } else {
            menu.classList.add("active");

            // adds the close (x) icon 
            toggle.querySelector("a").innerHTML = "<i class='bx bx-x'></i>";
        }
    }
    /* Event Listener */
    toggle.addEventListener("click", toggleMenu, false);


    const items = document.querySelectorAll(".item");
    /* Activate Submenu */
    function toggleItem() {
        if (this.classList.contains("submenu-active")) {
            this.classList.remove("submenu-active");
        } else if (menu.querySelector(".submenu-active")) {
            menu.querySelector(".submenu-active").classList.remove("submenu-active");
            this.classList.add("submenu-active");
        } else {
            this.classList.add("submenu-active");
        }
    }
    /* Event Listeners */
    for (let item of items) {
        if (item.querySelector(".submenu")) {
            item.addEventListener("click", toggleItem, false);
            item.addEventListener("keypress", toggleItem, false);
        }
    }


    /* Close Submenu From Anywhere */
    function closeSubmenu(e) {
        if (menu.querySelector(".submenu-active")) {
            let isClickInside = menu
                .querySelector(".submenu-active")
                .contains(e.target);
            if (!isClickInside && menu.querySelector(".submenu-active")) {
                menu.querySelector(".submenu-active").classList.remove("submenu-active");
            }
        }
    }
    /* Event listener */
    document.addEventListener("click", closeSubmenu, false);
</script>


<!-- profile -->