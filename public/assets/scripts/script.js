// REVEAL

const ratio = .1
const options = {
    root: null,
    rootMargin: '0px',
    threshold: ratio
}

const handleIntersect = function (entries, observer) {
    entries.forEach(function (entry) {
        if (entry.intersectionRatio > ratio) {
            entry.target.classList.add('reveal-visible')
            observer.unobserve(entry.target)
        }
    })
    console.log('handleIntersect')
}

const observer = new IntersectionObserver(handleIntersect, options)
document.querySelectorAll('.reveal').forEach(function (r) {
    observer.observe(r)
})

// Changer image key

function checkKey1() {
    var element = document.getElementById("key1");
    var elementFixed = document.getElementById("keyFixed1");
    element.src = "/assets/ressources/accueil/keyCheck.png";
    elementFixed.src = "/assets/ressources/accueil/keyCheck.png";
}

function checkKey2() {
    var element = document.getElementById("key2");
    var elementFixed = document.getElementById("keyFixed2");
    element.src = "ressources/images/keyCheck.png";
    elementFixed.src = "ressources/images/keyCheck.png";
}

function checkKey3() {
    var element = document.getElementById("key3");
    var elementFixed = document.getElementById("keyFixed3");
    element.src = "/assets/ressources/accueil/keyCheck.png";
    elementFixed.src = "/assets/ressources/accueil/keyCheck.png";
}

function checkKey4() {
    var element = document.getElementById("key4");
    var elementFixed = document.getElementById("keyFixed4");
    element.src = "/assets/ressources/accueil/keyCheck.png";
    elementFixed.src = "/assets/ressources/accueil/keyCheck.png";
}

function checkKey5() {
    var element = document.getElementById("key5");
    var elementFixed = document.getElementById("keyFixed5");
    element.src = "/assets/ressources/accueil/keyCheck.png";
    elementFixed.src = "/assets/ressources/accueil/keyCheck.png";
}

function checkKey6() {
    var element = document.getElementById("key6");
    var elementFixed = document.getElementById("keyFixed6");
    element.src = "/assets/ressources/accueil/keyCheck.png";
    elementFixed.src = "/assets/ressources/accueil/keyCheck.png";
}

function checkKey7() {
    var element = document.getElementById("key7");
    var elementFixed = document.getElementById("keyFixed7");
    element.src = "/assets/ressources/accueil/keyCheck.png";
    elementFixed.src = "/assets/ressources/accueil/keyCheck.png";
}

function checkKey8() {
    var element = document.getElementById("key8");
    var elementFixed = document.getElementById("keyFixed8");
    element.src = "/assets/ressources/accueil/keyCheck.png";
    elementFixed.src = "/assets/ressources/accueil/keyCheck.png";
}