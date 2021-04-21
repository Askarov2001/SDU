<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--========== BOX ICONS ==========-->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <!--========== CSS ==========-->
       <style>
         /*===== GOOGLE FONTS =====*/
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap");

/*===== VARIABLES CSS =====*/
:root {
  --header-height: 3rem;

  /*========== Colors ==========*/
  --first-color: #069C54;
  --first-color-alt: #048654;
  --title-color: #393939;
  --text-color: #707070;
  --text-color-light: #A6A6A6;
  --body-color: #FBFEFD;
  --container-color: #FFFFFF;

  /*========== Font and typography ==========*/
  --body-font: 'Poppins', sans-serif;
  --biggest-font-size: 2.25rem;
  --h1-font-size: 1.5rem;
  --h2-font-size: 1.25rem;
  --h3-font-size: 1rem;
  --normal-font-size: .938rem;
  --small-font-size: .813rem;
  --smaller-font-size: .75rem;

  /*========== Font weight ==========*/
  --font-medium: 500;
  --font-semi-bold: 600;

  /*========== Margenes ==========*/
  --mb-1: .5rem;
  --mb-2: 1rem;
  --mb-3: 1.5rem;
  --mb-4: 2rem;
  --mb-5: 2.5rem;
  --mb-6: 3rem;

  /*========== z index ==========*/
  --z-tooltip: 10;
  --z-fixed: 100;
}

@media screen and (min-width: 768px){
  :root{
    --biggest-font-size: 4rem;
    --h1-font-size: 2.25rem;
    --h2-font-size: 1.5rem;
    --h3-font-size: 1.25rem;
    --normal-font-size: 1rem;
    --small-font-size: .875rem;
    --smaller-font-size: .813rem;
  }
}

/*========== BASE ==========*/
*,::before,::after{
  box-sizing: border-box;
}

html{
  scroll-behavior: smooth;
}

/*========== Variables Dark theme ==========*/
body.dark-theme{
  --title-color: #F1F3F2;
  --text-color: #C7D1CC;
  --body-color: #1D2521;
  --container-color: #27302C;
}

/*========== Button Dark/Light ==========*/
.change-theme{
  position: absolute;
  right: 1rem;
  top: 1.8rem;
  color: var(--text-color);
  font-size: 1rem;
  cursor: pointer;
}

body{
  margin: var(--header-height) 0 0 0;
  font-family: var(--body-font);
  font-size: var(--normal-font-size);
  background-color: var(--body-color);
  color: var(--text-color);
  line-height: 1.6;
}

h1,h2,h3,p,ul{
  margin: 0;
}

ul{
  padding: 0;
  list-style: none;
}

a{
  text-decoration: none;
}

img{
  max-width: 100%;
  height: auto;
}

/*========== CLASS CSS ==========*/
.section{
  padding: 4rem 0 2rem;
}

.section-title, .section-subtitle{
  text-align: center;
}

.section-title{
  font-size: var(--h1-font-size);
  color: var(--title-color);
  margin-bottom: var(--mb-3);
}

.section-subtitle{
  display: block;
  color: var(--first-color);
  font-weight: var(--font-medium);
  margin-bottom: var(--mb-1);
}

/*========== LAYOUT ==========*/
.bd-container{
  max-width: 960px;
  width: calc(100% - 2rem);
  margin-left: var(--mb-2);
  margin-right: var(--mb-2);
}

.bd-grid{
  display: grid;
  gap: 1.5rem;
}

.l-header{
  width: 100%;
  position: fixed;
  top: 0;
  left: 0;
  z-index: var(--z-fixed);
  background-color: var(--body-color);
}

/*========== NAV ==========*/
.nav{
  max-width: 1024px;
  height: var(--header-height);
  display: flex;
  justify-content: space-between;
  align-items: center;
}

@media screen and (max-width: 768px){
  .nav__menu{
    position: fixed;
    top: -100%;
    left: 0;
    width: 100%;
    padding: 1.5rem 0 1rem;
    text-align: center;
    background-color: var(--body-color);
    transition: .4s;
    box-shadow: 0 4px 4px rgba(0,0,0,.1);
    border-radius: 0 0 1rem 1rem;
    z-index: var(--z-fixed);
  }
}

.nav__item{
  margin-bottom: var(--mb-2);
}

.nav__link, .nav__logo, .nav__toggle{
  color: var(--text-color);
  font-weight: var(--font-medium);
}

.nav__logo:hover{
  color: var(--first-color);
}

.nav__link{
  transition: .3s;
}

.nav__link:hover{
  color: var(--first-color);
}

.nav__toggle{
  font-size: 1.3rem;
  cursor: pointer;
}

/* Show menu */
.show-menu{
  top: var(--header-height);
}

/* Active menu */
.active-link{
  color: var(--first-color);
}

/* Change background header */
.scroll-header{
  box-shadow: 0 2px 4px rgba(0,0,0,.1);
}

/* Scroll top */
.scrolltop{
  position: fixed;
  right: 1rem;
  bottom: -20%;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: .3rem;
  background: rgba(6,156,84,.5);
  border-radius: .4rem;
  z-index: var(--z-tooltip);
  transition: .4s;
  visibility: hidden;
}

.scrolltop:hover{
  background-color: var(--first-color-alt);
}

.scrolltop__icon{
  font-size: 1.8rem;
  color: var(--body-color);
}

/* Show scrolltop */
.show-scroll{
  visibility: visible;
  bottom: 1.5rem;
}

/*========== HOME ==========*/
.home__container{
  height: calc(100vh - var(--header-height));
  align-content: center;
}

.home__title{
  font-size: var(--biggest-font-size);
  color: var(--first-color);
  margin-bottom: var(--mb-1);
}

.home__subtitle{
  font-size: var(--h1-font-size);
  color: var(--title-color);
  margin-bottom: var(--mb-4);
}

.home__img{
  width: 300px;
  justify-self: center;
}

/*========== BUTTONS ==========*/
.button{
  display: inline-block;
  background-color: var(--first-color);
  color: #FFF;
  padding: .75rem 1rem;
  border-radius: .5rem;
  transition: .3s;
}

.button:hover{
  background-color: var(--first-color-alt);
}

/*========== ABOUT ==========*/
.about__data{
  text-align: center;
}

.about__description{
  margin-bottom: var(--mb-3);
}

.about__img{
  width: 280px;
  border-radius: .5rem;
  justify-self: center;
}

/*========== SERVICES ==========*/
.services__container{
  row-gap: 2.5rem;
  grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
}

.services__content{
  text-align: center;
}

.services__img{
  width: 64px;
  height: 64px;
  fill: var(--first-color);
  margin-bottom: var(--mb-2);
}

.services__title{
  font-size: var(--h3-font-size);
  color: var(--title-color);
  margin-bottom: var(--mb-1);
}

.services__description{
  padding: 0 1.5rem;
}

/*========== MENU ==========*/
.menu__container{
  grid-template-columns: repeat(2, 1fr);
  justify-content: center;
}

.menu__content{
  position: relative;
  display: flex;
  flex-direction: column;
  background-color: var(--container-color);
  border-radius: .5rem;
  box-shadow: 0 2px 4px rgba(3,74,40,.15);
  padding: .75rem;
}

.menu__img{
  width: 100px;
  align-self: center;
  margin-bottom: var(--mb-2);
}

.menu__name, .menu__preci{
  font-weight: var(--font-semi-bold);
  color: var(--title-color);
}

.menu__name{
  font-size: var(--normal-font-size);
}

.menu__detail, .menu__preci{
  font-size: var(--small-font-size);
}

.menu__detail{
  margin-bottom: var(--mb-1);
}

.menu__button{
  position: absolute;
  bottom: 0;
  right: 0;
  display: flex;
  padding: .625rem .813rem;
  border-radius: .5rem 0 .5rem 0;
}

/*========== APP ==========*/
.app__data{
  text-align: center;
}

.app__description{
  margin-bottom: var(--mb-5);
}

.app__stores{
  margin-bottom: var(--mb-4);
}

.app__store{
  width: 120px;
  margin: 0 var(--mb-1);
}

.app__img{
  width: 230px;
  justify-self: center;
}

/*========== CONTACT ==========*/
.contact__container{
  text-align: center;
}

.contact__description{
  margin-bottom: var(--mb-3);
}

/*========== FOOTER ==========*/
.footer__container{
  grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
  row-gap: 2rem;
}

.footer__logo{
  font-size: var(--h3-font-size);
  color: var(--first-color);
  font-weight: var(--font-semi-bold);
}

.footer__description{
  display: block;
  font-size: var(--small-font-size);
  margin: .25rem 0 var(--mb-3);
}

.footer__social{
  font-size: 1.5rem;
  color: var(--title-color);
  margin-right: var(--mb-2);
}

.footer__title{
  font-size: var(--h2-font-size);
  color: var(--title-color);
  margin-bottom: var(--mb-2);
}

.footer__link{
  display: inline-block;
  color: var(--text-color);
  margin-bottom: var(--mb-1);
}

.footer__link:hover{
  color: var(--first-color);
}

.footer__copy{
  text-align: center;
  font-size: var(--small-font-size);
  color: var(--text-color-light);
  margin-top: 3.5rem;
}

/*========== MEDIA QUERIES ==========*/
@media screen and (min-width: 576px){
  .home__container,
  .about__container,
  .app__container{
    grid-template-columns: repeat(2,1fr);
    align-items: center;
  }

  .about__data, .about__initial,
  .app__data, .app__initial,
  .contact__container, .contact__initial{
    text-align: initial;
  }

  .about__img, .app__img{
    width: 380px;
    order: -1;
  }

  .contact__container{
    grid-template-columns: 1.75fr 1fr;
    align-items: center;
  }
  .contact__button{
    justify-self: center;
  }
}

@media screen and (min-width: 768px){
  body{
    margin: 0;
  }

  .section{
    padding-top: 8rem;
  }

  .nav{
    height: calc(var(--header-height) + 1.5rem);
  }
  .nav__list{
    display: flex;
  }
  .nav__item{
    margin-left: var(--mb-5);
    margin-bottom: 0;
  }
  .nav__toggle{
    display: none;
  }

  .change-theme{
    position: initial;
    margin-left: var(--mb-2);
  }

  .home__container{
    height: 100vh;
    justify-items: center;
  }

  .services__container,
  .menu__container{
    margin-top: var(--mb-6);
  }

  .menu__container{
    grid-template-columns: repeat(3, 210px);
    column-gap: 4rem;
  }
  .menu__content{
    padding: 1.5rem;
  }
  .menu__img{
    width: 130px;
  }

  .app__store{
    margin: 0 var(--mb-1) 0 0;
  }
}

@media screen and (min-width: 960px){
  .bd-container{
    margin-left: auto;
    margin-right: auto;
  }

  .home__img{
    width: 500px;
  }

  .about__container,
  .app__container{
    column-gap: 7rem;
  }
}

/* For tall screens on mobiles y desktop*/
@media screen and (min-height: 721px) {
    .home__container {
        height: 640px;
    }
}
       </style>
        <title>Responsive website of books</title>
    </head>
    <body>

        <!--========== SCROLL TOP ==========-->
        <a href="#" class="scrolltop" id="scroll-top">
            <i class='bx bx-chevron-up scrolltop__icon'></i>
        </a>

        <!--========== HEADER ==========-->
        <header class="l-header" id="header">
            <nav class="nav bd-container">
                <a href="#" class="nav__logo">{{__('message.page_message')}}</a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="#home" class="nav__link active-link">{{__('message.page_message2')}}</a></li>
                        <li class="nav__item"><a href="#about" class="nav__link">{{__('message.page_message3')}}</a></li>
                        <li class="nav__item"><a href="#services" class="nav__link">{{__('message.page_message4')}}</a></li>
                        <li class="nav__item"><a href="#menu" class="nav__link">{{__('message.page_message5')}}</a></li>
                        <li class="nav__item"><a href="#contact" class="nav__link">{{__('message.page_message6')}}</a></li>

                        <li><i class='bx bx-moon change-theme' id="theme-button"></i></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

        <main class="l-main">
            <!--========== HOME ==========-->
            <section class="home" id="home">
                <div class="home__container bd-container bd-grid">
                    <div class="home__data">
                        <h1 class="home__title">{{__('message.page_message7')}}</h1>
                        <h2 class="home__subtitle">{{__('message.page_message8')}}<br>{{__('message.page_message9')}} </h2>
                        <a href="{{route('send-email')}}" class="button">{{__('message.page_message10')}}</a>
                    </div>
    
                    <img src="https://blog.mann-ivanov-ferber.ru/wp-content/uploads/2014/04/%D0%BA%D0%BD%D0%B8%D0%B3%D0%B8.%D0%B3%D0%BE%D1%80%D0%B0.jpg" alt="" class="home__img">
                </div>
            </section>
            
            <!--========== ABOUT ==========-->
            <section class="about section bd-container" id="about">
                <div class="about__container  bd-grid">
                    <div class="about__data">
                        <span class="section-subtitle about__initial">{{__('message.page_message11')}}</span>
                        <h2 class="section-title about__initial">{{__('message.page_message12')}} <br> {{__('message.page_message13')}}</h2>
                        <p class="about__description">{{__('message.page_message14')}}</p>
                        <a href="#" class="button">{{__('message.page_message15')}}</a>
                    </div>

                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQdchkQJGKlYaR2mtqL__y0G_IX7c8slo1qXA&usqp=CAU" alt="" class="about__img">
                </div>
            </section>

            
            <!--========== SERVICES ==========-->
            <section class="services section bd-container" id="services">
                <span class="section-subtitle">{{__('message.page_message16')}}</span>
                <h2 class="section-title">{{__('message.page_message17')}}</h2>

                <div class="services__container  bd-grid">
                    <div class="services__content">
                        
                        <h3 class="services__title">{{__('message.page_message18')}}</h3>
                        <p class="services__description">{{__('message.page_message19')}}</p>
                    </div>

                    <div class="services__content">
                      
                        <h3 class="services__title">{{__('message.page_message20')}}</h3>
                        <p class="services__description">{{__('message.page_message21')}}</p>
                    </div>

                    <div class="services__content">
                      
                        <h3 class="services__title">{{__('message.page_message22')}}</h3>
                        <p class="services__description">{{__('message.page_message23')}}</p>
                    </div>
                </div>
            </section>




               <!--========== MENU ==========-->
            <section class="menu section bd-container" id="menu">
                <span class="section-subtitle">{{__('message.page_message24')}}</span>
                <h2 class="section-title">{{__('message.page_message25')}}</h2>

                <div class="menu__container bd-grid">
                    <div class="menu__content">
                        <img src="assets/img/plate1.png" alt="" class="menu__img">
                        <h3 class="menu__name">{{__('message.page_message26')}}</h3>
                        <span class="menu__detail">{{__('message.page_message27')}}</span>
                        <span class="menu__preci">$35.00</span>
                        <a href="{{route('upload')}}" class="button menu__button"><i class='bx bx-cart-alt'></i></a>
                    </div>

                    <div class="menu__content">
                        <img src="assets/img/plate2.png" alt="" class="menu__img">
                        <h3 class="menu__name">{{__('message.page_message28')}}</h3>
                        <span class="menu__detail">{{__('message.page_message29')}}</span>
                        <span class="menu__preci">$60.00</span>
                        <a href="{{route('upload')}}" class="button menu__button"><i class='bx bx-cart-alt'></i></a>
                    </div>
                    
                    <div class="menu__content">
                        <img src="assets/img/plate3.png" alt="" class="menu__img">
                        <h3 class="menu__name">{{__('message.page_message30')}}</h3>
                        <span class="menu__detail">{{__('message.page_message31')}}</span>
                        <span class="menu__preci">$88.00</span>
                        <a href="{{route('upload')}}" class="button menu__button"><i class='bx bx-cart-alt'></i></a>
                    </div>
                </div>
            </section>

            <!--===== APP =======-->
            <section class="app section bd-container">
                <div class="app__container bd-grid">
                    <div class="app__data">
                        <span class="section-subtitle app__initial">{{__('message.page_message32')}}</span>
                        <h2 class="section-title app__initial">{{__('message.page_message33')}}</h2>
                        <p class="app__description">{{__('message.page_message34')}}</p>
                        <div class="contact__button">
                        <a href="{{route('employee.store')}}" class="button">{{__('message.page_message35')}} </a>
                    	</div>
                       
                    </div>

                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSepD8CV6HosWV5Mu8WIwmBdoppUD_fL_ZMyg&usqp=CAU" alt="" class="app__img">
                </div>
            </section>

            <!--========== CONTACT US ==========-->
            <section class="contact section bd-container" id="contact">
                <div class="contact__container bd-grid">
                    <div class="contact__data">
                        <span class="section-subtitle contact__initial">{{__('message.page_message36')}}</span>
                        <h2 class="section-title contact__initial">{{__('message.page_message37')}}</h2>
                        <p class="contact__description">{{__('message.page_message38')}}</p>
                    </div>

                    <div class="contact__button">
                        <a href="" class="button">{{__('message.page_message39')}}</a>
                    </div>
                </div>
            </section>
        </main>

        <!--========== FOOTER ==========-->
        <footer class="footer section bd-container">
            <div class="footer__container bd-grid">
                <div class="footer__content">
                    <a href="#" class="footer__logo">{{__('message.page_message40')}}</a>
                    <span class="footer__description">{{__('message.page_message41')}}</span>
                    <div>
                        <a href="https://www.instagram.com/aaskarov.17/" class="footer__social"><i class='bx bxl-facebook'></i></a>
                        <a href="https://www.instagram.com/aaskarov.17/" class="footer__social"><i class='bx bxl-instagram'></i></a>
                        <a href="https://www.instagram.com/aaskarov.17/" class="footer__social"><i class='bx bxl-twitter'></i></a>
                    </div>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">{{__('message.page_message42')}}</h3>
                    <ul>
                        <li><a href="#" class="footer__link">{{__('message.page_message43')}}</a></li>
                        <li><a href="#" class="footer__link">{{__('message.page_message44')}}</a></li>
                        <li><a href="#" class="footer__link">{{__('message.page_message45')}}</a></li>
                        <li><a href="#" class="footer__link">{{__('message.page_message46')}}</a></li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">{{__('message.page_message47')}}</h3>
                    <ul>
                        <li><a href="#" class="footer__link">{{__('message.page_message48')}}</a></li>
                        <li><a href="#" class="footer__link">{{__('message.page_message49')}}</a></li>
                        <li><a href="#" class="footer__link">{{__('message.page_message50')}}</a></li>
                        <li><a href="#" class="footer__link">{{__('message.page_message51')}}</a></li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">{{__('message.page_message52')}}</h3>
                    <ul>
                        <li>{{__('message.page_message53')}}</li>
                        <li>{{__('message.page_message54')}}</li>
                        <li>8 - (700) - 601 - 00- 63</li>
                        <li>190103325@email.com</li>
                    </ul>
                </div>
            </div>

            <p class="footer__copy"> 2021 Adlet-Company. All right reserved</p>
        </footer>

        <!--========== SCROLL REVEAL ==========-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--========== MAIN JS ==========-->
        <script>
            /*==================== SHOW MENU ====================*/
const showMenu = (toggleId, navId) =>{
    const toggle = document.getElementById(toggleId),
    nav = document.getElementById(navId)
    
    // Validate that variables exist
    if(toggle && nav){
        toggle.addEventListener('click', ()=>{
            // We add the show-menu class to the div tag with the nav__menu class
            nav.classList.toggle('show-menu')
        })
    }
}
showMenu('nav-toggle','nav-menu')

/*==================== REMOVE MENU MOBILE ====================*/
const navLink = document.querySelectorAll('.nav__link')

function linkAction(){
    const navMenu = document.getElementById('nav-menu')
    // When we click on each nav__link, we remove the show-menu class
    navMenu.classList.remove('show-menu')
}
navLink.forEach(n => n.addEventListener('click', linkAction))

/*==================== SCROLL SECTIONS ACTIVE LINK ====================*/
const sections = document.querySelectorAll('section[id]')

function scrollActive(){
    const scrollY = window.pageYOffset

    sections.forEach(current =>{
        const sectionHeight = current.offsetHeight
        const sectionTop = current.offsetTop - 50;
        sectionId = current.getAttribute('id')

        if(scrollY > sectionTop && scrollY <= sectionTop + sectionHeight){
            document.querySelector('.nav__menu a[href*=' + sectionId + ']').classList.add('active-link')
        }else{
            document.querySelector('.nav__menu a[href*=' + sectionId + ']').classList.remove('active-link')
        }
    })
}
window.addEventListener('scroll', scrollActive)

/*==================== CHANGE BACKGROUND HEADER ====================*/ 
function scrollHeader(){
    const nav = document.getElementById('header')
    // When the scroll is greater than 200 viewport height, add the scroll-header class to the header tag
    if(this.scrollY >= 200) nav.classList.add('scroll-header'); else nav.classList.remove('scroll-header')
}
window.addEventListener('scroll', scrollHeader)

/*==================== SHOW SCROLL TOP ====================*/ 
function scrollTop(){
    const scrollTop = document.getElementById('scroll-top');
    // When the scroll is higher than 560 viewport height, add the show-scroll class to the a tag with the scroll-top class
    if(this.scrollY >= 560) scrollTop.classList.add('show-scroll'); else scrollTop.classList.remove('show-scroll')
}
window.addEventListener('scroll', scrollTop)

/*==================== DARK LIGHT THEME ====================*/ 
const themeButton = document.getElementById('theme-button')
const darkTheme = 'dark-theme'
const iconTheme = 'bx-sun'

// Previously selected topic (if user selected)
const selectedTheme = localStorage.getItem('selected-theme')
const selectedIcon = localStorage.getItem('selected-icon')

// We obtain the current theme that the interface has by validating the dark-theme class
const getCurrentTheme = () => document.body.classList.contains(darkTheme) ? 'dark' : 'light'
const getCurrentIcon = () => themeButton.classList.contains(iconTheme) ? 'bx-moon' : 'bx-sun'

// We validate if the user previously chose a topic
if (selectedTheme) {
  // If the validation is fulfilled, we ask what the issue was to know if we activated or deactivated the dark
  document.body.classList[selectedTheme === 'dark' ? 'add' : 'remove'](darkTheme)
  themeButton.classList[selectedIcon === 'bx-moon' ? 'add' : 'remove'](iconTheme)
}

// Activate / deactivate the theme manually with the button
themeButton.addEventListener('click', () => {
    // Add or remove the dark / icon theme
    document.body.classList.toggle(darkTheme)
    themeButton.classList.toggle(iconTheme)
    // We save the theme and the current icon that the user chose
    localStorage.setItem('selected-theme', getCurrentTheme())
    localStorage.setItem('selected-icon', getCurrentIcon())
})

/*==================== SCROLL REVEAL ANIMATION ====================*/
const sr = ScrollReveal({
    origin: 'top',
    distance: '30px',
    duration: 2000,
    reset: true
});

sr.reveal(`.home__data, .home__img,
            .about__data, .about__img,
            .services__content, .menu__content,
            .app__data, .app__img,
            .contact__data, .contact__button,
            .footer__content`, {
    interval: 200
})
        </script>
    </body>
</html>