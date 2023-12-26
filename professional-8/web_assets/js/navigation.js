function classChecker(target, name, checkInheritance) {
    "use strict";
    if (
        target.className &&
        // We cast to string as className could be
        // SVGAnimatedString for example
        target.className.toString().split(" ").indexOf(name) !== -1
    ) {
        return target;
    } else if (!checkInheritance) {
        return null;
    } else if (!target.parentElement) {
        return null;
    } else {
        return classChecker(
            target.parentElement,
            name,
            checkInheritance
        );
    }
}

function hasOrInheritsClass(target, name) {
    "use strict";
    if (classChecker(target, name, true)) {
        return true;
    }
    else {
        return false;
    }
}

function deviceIsMobile() {
  const regex = /Mobi|Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i;
  return regex.test(navigator.userAgent);
}

/*Toggle secondary navigation menu. Cases:
- When user clicks on hamburger icon
- When user clicks anywhere on the page other than the
  hamburger icon/its menu content
- When secondary navigation menu is open and logged-in user
  hovers/clicks (depending on device) on avatar icon
- Prevents default events like links from firing while menu is open
*/
function changeAvatarIconState(state) {
    let avatarImg = document.querySelector(".nav-item.has_dropdown .nav-link > img");

    if (avatarImg) {
        if(state !== "active") {
            avatarImg.src = "https://internal.mobrog.com/assets/mobrog2/img/profile-no-avatar-img.svg";
        } else {
            avatarImg.src = "https://internal.mobrog.com/assets/mobrog2/img/profile-no-avatar-img-hover.svg";
        }
    }
}

function toggleHamburgerNavigation() {
    const toggleButton = document.querySelectorAll("[data-toggle='collapse']")[0];
    const hamburgerMenu = document.getElementById("navbarSupportedContent");
    const userAvatarLink = document.getElementsByClassName("nav-item has_dropdown")[0];

    if (toggleButton && hamburgerMenu) {

        //Open and close secondary menu using hamburger icon
        toggleButton.addEventListener("click", () => {
            if(hamburgerMenu) {
                if(hamburgerMenu.classList.contains("show-menu")) {
                    hamburgerMenu.classList.remove("show-menu");
                } else {
                    hamburgerMenu.classList.add("show-menu");
                }
            }
        });

        //Close secondary menu if user clicks outside the menu
        document.addEventListener("click", function(e) {
            const target = e.target;

            if(!target) { return false; }

            if(
                !hasOrInheritsClass(target, "navbar-collapse") &&
                !hasOrInheritsClass(target, "navbar-toggler") &&
                hamburgerMenu.classList.contains("show-menu")
            ) {
                e.preventDefault();
                hamburgerMenu.classList.remove("show-menu");
            }

            if(
                !hasOrInheritsClass(target, "sub_menu") &&
                !hasOrInheritsClass(target, "has_dropdown") &&
                userAvatarLink.classList.contains("hover-dropdown")
            ) {
                e.preventDefault();
                userAvatarLink.classList.remove("hover-dropdown");
            }
        });

        //If screen is made smaller (eg: users changes screen)
        window.addEventListener("resize", function(){
            if(hamburgerMenu) {
                if(
                    window.innerWidth >= 992 &&
                    hamburgerMenu.classList.contains("show-menu")
                ) {
                    hamburgerMenu.classList.remove("show-menu");
                }
            }
        });

        if(userAvatarLink) {
            //For desktop users
            if (!deviceIsMobile()) {
                userAvatarLink.addEventListener("mouseover", function(){
                    if(hamburgerMenu.classList.contains("show-menu")) {
                        hamburgerMenu.classList.remove("show-menu");
                    }
                    if(!userAvatarLink.classList.contains("hover-dropdown")) {
                        userAvatarLink.classList.add("hover-dropdown");
                        changeAvatarIconState("active");
                    }
                });

                userAvatarLink.addEventListener("mouseout", function(){
                    if(userAvatarLink.classList.contains("hover-dropdown")) {
                        userAvatarLink.classList.remove("hover-dropdown");
                        changeAvatarIconState("inactive");
                    }
                });
            }
            //For mobile users
            userAvatarLink.addEventListener("click", function(){
                if(hamburgerMenu.classList.contains("show-menu")) {
                    hamburgerMenu.classList.remove("show-menu");
                }
                //Check if element is in hover state
                if(!userAvatarLink.classList.contains("hover-dropdown")) {
                    userAvatarLink.classList.add("hover-dropdown");
                    changeAvatarIconState("active");
                } else {
                    userAvatarLink.classList.remove("hover-dropdown");
                    changeAvatarIconState("inactive");
                }
            });
        }
    }
}

function addBackgroundToNav() {
    const nav = document.querySelector(".mobrog-2-transparent-index-navbar > header");
    const triggerElement = document.querySelector(".mobrog-2-transparent-index-navbar .banner_section")

    if (nav && triggerElement) {
        if (triggerElement.getBoundingClientRect().top < 0) {
            nav.setAttribute("data-scrolled", "scrolled");
        } else if (triggerElement.getBoundingClientRect().top === 0) {
            nav.removeAttribute("data-scrolled");
        }
    }
}


//Achievements section collapse function
function collapseSiblingPanel () {
    const childAnchor = this.querySelector(".panel-title > a");

    if(this.nextElementSibling) {
        if(this.nextElementSibling.classList.contains("collapse")) {
            this.nextElementSibling.classList.remove("collapse");
            childAnchor.classList.add("open");
        } else {
            this.nextElementSibling.classList.add("collapse");
            childAnchor.classList.remove("open");
        }
    }
}

function initClickEventOnAchievementTitle() {
    const panelTitles = document.querySelectorAll(".mobrog-2-main-achievements-container .panel-heading");

    //Prevented event on achors inside panel-title using CSS
    panelTitles.forEach(title => {
        title.addEventListener("click", collapseSiblingPanel);
    });
}


/*Condition should only pass on logged out index page*/
if (document.getElementsByClassName("mobrog-2-transparent-index-navbar")[0]) {
    document.addEventListener("scroll", addBackgroundToNav);
    addBackgroundToNav();
}

//Commented out temporarily - 22/11/2023
//To be reviewed at a later date

//Display on-scroll
// function revealContainer() {

// console.log("hello");

//     const target = document.querySelectorAll(".reveal-on-scroll");
//     const windowHeight = window.innerHeight;
//     const leeway = 100;
//     let elementTop;
//     let i;

//     for (i = 0; i < target.length; i += 1) {
//         elementTop = target[i].getBoundingClientRect().top;

//         if (elementTop < (windowHeight - (elementTop - leeway))) {
//             target[i].classList.add("reveal");
//         }
//     }
// }

// document.addEventListener("scroll", function() { revealContainer(); });

toggleHamburgerNavigation();
initClickEventOnAchievementTitle();
// revealContainer();