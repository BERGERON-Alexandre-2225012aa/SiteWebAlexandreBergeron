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
    element.src = "ressources/images/keyCheck.png";
}

function checkKey2() {
    var element = document.getElementById("key2");
    element.src = "ressources/images/keyCheck.png";
}

function checkKey3() {
    var element = document.getElementById("key3");
    element.src = "ressources/images/keyCheck.png";
}

function checkKey4() {
    var element = document.getElementById("key4");
    element.src = "ressources/images/keyCheck.png";
}