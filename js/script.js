const roles = [
    "Web Developer",
    "UI/UX Designer",
    "Frontend Developer"
];

let roleIndex = 0;
let charIndex = 0;

const typingElement = document.querySelector('.typing');

function typeEffect(){

    if(!typingElement) return;

    if(charIndex < roles[roleIndex].length){

        typingElement.textContent +=
        roles[roleIndex].charAt(charIndex);

        charIndex++;

        setTimeout(typeEffect,100);
    }

    else{

        setTimeout(eraseEffect,2000);
    }
}

function eraseEffect(){

    if(charIndex > 0){

        typingElement.textContent =
        roles[roleIndex].substring(0,charIndex-1);

        charIndex--;

        setTimeout(eraseEffect,50);
    }

    else{

        roleIndex++;

        if(roleIndex >= roles.length){
            roleIndex = 0;
        }

        setTimeout(typeEffect,500);
    }
}

window.onload = typeEffect;