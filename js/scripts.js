function scrollTrigger(selector, cl) {
    let els = document.querySelectorAll(selector)
    els = Array.from(els)

    els.forEach((el) => {
        addObserver(el, cl)
    })
}


class AcceptOnlyNumbers{
    constructor(){
        
    }
}

const input = new AcceptOnlyNumbers

// Home button
function goHome(){
    window.location.href = "index.html"
}

// Navbar navigation functions login
function irL() {
    window.location.href = "llaboratorio.php";
}
function irM() {
    window.location.href = "lmedico.php";
}

function irP() {
    window.location.href = "lpaciente.php";
}

// Navbar navigation function cad
function cadLab() {
    window.location.href = "CADlaboratorio.php";
}

function cadMed() {
    window.location.href = "CADmedico.php";
  }



function addObserver(el, cl){
    let observer = new IntersectionObserver((entries, observer) =>{
        entries.forEach(entry => {
            if(entry.isIntersecting){
                entry.target.classList.add(cl)

                observer.unobserve(entry.target)
            }
        })
    })
    observer.observe(el)
}

scrollTrigger('.hidden-text', 'appear')
scrollTrigger('.hidden-btn', 'appear-left')
scrollTrigger('.text-animation', 'appear-down')
scrollTrigger('.hidden-img', 'img-animation')
scrollTrigger('.about-us-card', 'img-animation')

const mode = document.getElementById('moon')
const body = document.body
const contactForm = document.getElementById('Contacts')

function setContactForm(setClass){
    if(contactForm)
        contactForm.setAttribute('data-bs-theme', setClass)
}

mode.addEventListener('click', () => {
    if(mode.classList.contains('fa-moon')) {
        mode.classList.remove('fa-moon');
        mode.classList.add('fa-sun');
        setContactForm('dark')
        
    }else{
        mode.classList.remove('fa-sun');
        mode.classList.add('fa-moon');
        setContactForm('')
    }
    
    body.classList.toggle('dark');

    if(document.body.classList.contains('dark')){ //when the body has the class 'dark' currently
        localStorage.setItem('darkMode', 'enabled'); //store this data if dark mode is on
    }else{
        localStorage.setItem('darkMode', 'disabled'); //store this data if dark mode is off
    }
})

if(localStorage.getItem('darkMode') == 'enabled'){
    body.classList.toggle('dark');
    mode.classList.remove('fa-moon')
    mode.classList.add('fa-sun')
    setContactForm('dark')
}

const toggleNav = document.querySelector('#nav-checkbox')
toggleNav.addEventListener('change', () =>{
    if(toggleNav.checked){
        document.querySelector('.nav-underline').classList.remove('display-none')
        document.querySelector('.dark-icon').classList.remove('display-none')
        document.querySelector('#navbar').classList.add('view-navbar')
    } else{
        document.querySelector('.nav-underline').classList.add('display-none')
        document.querySelector('.dark-icon').classList.add('display-none')
        document.querySelector('#navbar').classList.remove('view-navbar')
    }
})