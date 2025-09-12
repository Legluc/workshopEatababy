const bouton_bebe = document.getElementById('menu-bebe');
const bouton_accompagnement = document.getElementById('menu-accompagnement');

const menu_bebe_choix = document.querySelector('.menu-bebe-choix');
const menu_accompagnement_choix = document.querySelector('.menu-accompagnement-choix');

const bebe_blanc = document.getElementById('bebe-blanc');
const bebe_japonaise = document.getElementById('bebe-japonaise');
const bebe_italienne = document.getElementById('bebe-italienne');
const bebe_mexicain = document.getElementById('bebe-mexicain');
const bebe_antillaise = document.getElementById('bebe-antillaise');
const bebe_bresilien = document.getElementById('bebe-bresilien');

const burguignon = document.getElementById('bourguignon');
const risotto = document.getElementById('risotto');
const farofa = document.getElementById('farofa');
const riz = document.getElementById('riz');
const chili = document.getElementById('chili');
const legume = document.getElementById('legume');
const salade = document.getElementById('salade');
const pates = document.getElementById('pates');

menu_bebe_choix.classList.add('menu-actif'); 
bouton_bebe.classList.add('choix-actif');

const bebe = document.querySelectorAll('.bebe-choix');
const accompagnement = document.querySelectorAll('.accompagnement-choix');

bouton_bebe.addEventListener('click', () => {
    menu_bebe_choix.classList.add('menu-actif'); 
    bouton_bebe.classList.add('choix-actif');
    console.log('click');
    if (menu_accompagnement_choix.classList.contains('menu-actif') && bouton_accompagnement.classList.contains('choix-actif')) {
        menu_accompagnement_choix.classList.remove('menu-actif');
        bouton_accompagnement.classList.remove('choix-actif');
    }
});

bouton_accompagnement.addEventListener('click', () => {
    menu_accompagnement_choix.classList.add('menu-actif'); 
    bouton_accompagnement.classList.add('choix-actif');
    console.log('click');
    if (menu_bebe_choix.classList.contains('menu-actif') && bouton_bebe.classList.contains('choix-actif')) {
        menu_bebe_choix.classList.remove('menu-actif');
        bouton_bebe.classList.remove('choix-actif');
    }
});

bebe_blanc.addEventListener('click', () => {
    bebe.forEach(div => div.classList.remove('choix-actif'));
    bebe_blanc.classList.add('choix-actif');
    console.log('click');
});
bebe_japonaise.addEventListener('click', () => {
    bebe.forEach(div => div.classList.remove('choix-actif'));
    bebe_japonaise.classList.add('choix-actif');
    console.log('click');
});
bebe_italienne.addEventListener('click', () => {
    bebe.forEach(div => div.classList.remove('choix-actif'));
    bebe_italienne.classList.add('choix-actif');
    console.log('click');
});
bebe_mexicain.addEventListener('click', () => {
    bebe.forEach(div => div.classList.remove('choix-actif'));
    bebe_mexicain.classList.add('choix-actif');
    console.log('click');
});
bebe_antillaise.addEventListener('click', () => {
    bebe.forEach(div => div.classList.remove('choix-actif'));
    bebe_antillaise.classList.add('choix-actif');
    console.log('click');
});
bebe_bresilien.addEventListener('click', () => {
    bebe.forEach(div => div.classList.remove('choix-actif'));
    bebe_bresilien.classList.add('choix-actif');
    console.log('click');
});
burguignon.addEventListener('click', () => {
    accompagnement.forEach(div => div.classList.remove('choix-actif'));
    burguignon.classList.add('choix-actif');
    console.log('click');
});
risotto.addEventListener('click', () => {
    accompagnement.forEach(div => div.classList.remove('choix-actif'));
    risotto.classList.add('choix-actif');
    console.log('click');

});
farofa.addEventListener('click', () => {
    accompagnement.forEach(div => div.classList.remove('choix-actif'));
    farofa.classList.add('choix-actif');
    console.log('click');
});
riz.addEventListener('click', () => {
    accompagnement.forEach(div => div.classList.remove('choix-actif'));
    riz.classList.add('choix-actif');
    console.log('click');
});
chili.addEventListener('click', () => {
    accompagnement.forEach(div => div.classList.remove('choix-actif'));
    chili.classList.add('choix-actif');
    console.log('click');
});
legume.addEventListener('click', () => {
    accompagnement.forEach(div => div.classList.remove('choix-actif'));
    legume.classList.add('choix-actif');
    console.log('click');
});
salade.addEventListener('click', () => {
    accompagnement.forEach(div => div.classList.remove('choix-actif'));
    salade.classList.add('choix-actif');
    console.log('click');
});
pates.addEventListener('click', () => {
    accompagnement.forEach(div => div.classList.remove('choix-actif'));
    pates.classList.add('choix-actif');
    console.log('click');
});