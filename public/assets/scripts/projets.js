const sleepNow = (delay) => new Promise((resolve) => setTimeout(resolve, delay));

var clicks = 0;

async function changeImageOnClick() {
    const image = document.getElementById('spartiatesProjectImage');
    const image2 = document.getElementById('spartiatesProjectImage2');
    const images = ['/assets/ressources/projets/spartiates_accueil.png', '/assets/ressources/projets/spartiates_quiz.png', '/assets/ressources/projets/spartiates_admin.png']
    clicks++;
    image2.src = images[clicks%3];
    image2.style.display = 'flex';
    image2.style.animation = 'spartiatesImgAnimation 2s';
    image2.style.animation = 'disparitionImage 2s forward 1s';
    await sleepNow(2000);
    image.src = images[clicks%3];
}