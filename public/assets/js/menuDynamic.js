const bouton_bebe = document.getElementById('menu-bebe');
const bouton_accompagnement = document.getElementById('menu-accompagnement');

const menu_bebe_choix = document.querySelector('.menu-bebe-choix');
const menu_accompagnement_choix = document.querySelector('.menu-accompagnement-choix');

const tete_bebe_blanc = document.getElementById('tete-bebe-blanc');
const tete_bebe_japonaise = document.getElementById('tete-bebe-japonaise');
const tete_bebe_italienne = document.getElementById('tete-bebe-italienne');
const tete_bebe_mexicain = document.getElementById('tete-bebe-mexicain');
const tete_bebe_antillaise = document.getElementById('tete-bebe-antillaise');
const tete_bebe_bresilien = document.getElementById('tete-bebe-bresilien');

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

tete_bebe_blanc.addEventListener('click', () => {
    tete_bebe_blanc.classList.add('choix-actif');
    console.log('click');
    if (tete_bebe_japonaise.classList.contains('choix-actif')) {
        tete_bebe_japonaise.classList.remove('choix-actif');
    }
    if (tete_bebe_italienne.classList.contains('choix-actif')) {
        tete_bebe_italienne.classList.remove('choix-actif');
    }
    if (tete_bebe_mexicain.classList.contains('choix-actif')) {
        tete_bebe_mexicain.classList.remove('choix-actif');
    }
    if (tete_bebe_antillaise.classList.contains('choix-actif')) {
        tete_bebe_antillaise.classList.remove('choix-actif');
    }
    if (tete_bebe_bresilien.classList.contains('choix-actif')) {
        tete_bebe_bresilien.classList.remove('choix-actif');
    }

});
tete_bebe_japonaise.addEventListener('click', () => {
    tete_bebe_japonaise.classList.add('choix-actif');
    console.log('click');
    if (tete_bebe_blanc.classList.contains('choix-actif')) {
        tete_bebe_blanc.classList.remove('choix-actif');
    }
    if (tete_bebe_italienne.classList.contains('choix-actif')) {
        tete_bebe_italienne.classList.remove('choix-actif');
    }
    if (tete_bebe_mexicain.classList.contains('choix-actif')) {
        tete_bebe_mexicain.classList.remove('choix-actif');
    }
    if (tete_bebe_antillaise.classList.contains('choix-actif')) {
        tete_bebe_antillaise.classList.remove('choix-actif');
    }
    if (tete_bebe_bresilien.classList.contains('choix-actif')) {
        tete_bebe_bresilien.classList.remove('choix-actif');
    }
});
tete_bebe_italienne.addEventListener('click', () => {
    tete_bebe_italienne.classList.add('choix-actif');
    console.log('click');
    if (tete_bebe_blanc.classList.contains('choix-actif')) {
        tete_bebe_blanc.classList.remove('choix-actif');
    }
    if (tete_bebe_japonaise.classList.contains('choix-actif')) {
        tete_bebe_japonaise.classList.remove('choix-actif');
    }
    if (tete_bebe_mexicain.classList.contains('choix-actif')) {
        tete_bebe_mexicain.classList.remove('choix-actif');
    }
    if (tete_bebe_antillaise.classList.contains('choix-actif')) {
        tete_bebe_antillaise.classList.remove('choix-actif');
    }
    if (tete_bebe_bresilien.classList.contains('choix-actif')) {
        tete_bebe_bresilien.classList.remove('choix-actif');
    }
});
tete_bebe_mexicain.addEventListener('click', () => {
    tete_bebe_mexicain.classList.add('choix-actif');
    console.log('click');
    if (tete_bebe_blanc.classList.contains('choix-actif')) {
        tete_bebe_blanc.classList.remove('choix-actif');
    }
    if (tete_bebe_japonaise.classList.contains('choix-actif')) {
        tete_bebe_japonaise.classList.remove('choix-actif');
    }
    if (tete_bebe_italienne.classList.contains('choix-actif')) {
        tete_bebe_italienne.classList.remove('choix-actif');
    }
    if (tete_bebe_antillaise.classList.contains('choix-actif')) {
        tete_bebe_antillaise.classList.remove('choix-actif');
    }
    if (tete_bebe_bresilien.classList.contains('choix-actif')) {
        tete_bebe_bresilien.classList.remove('choix-actif');
    }
});
tete_bebe_antillaise.addEventListener('click', () => {
    tete_bebe_antillaise.classList.add('choix-actif');
    console.log('click');
    if (tete_bebe_blanc.classList.contains('choix-actif')) {
        tete_bebe_blanc.classList.remove('choix-actif');
    }
    if (tete_bebe_japonaise.classList.contains('choix-actif')) {
        tete_bebe_japonaise.classList.remove('choix-actif');
    }
    if (tete_bebe_italienne.classList.contains('choix-actif')) {
        tete_bebe_italienne.classList.remove('choix-actif');
    }
    if (tete_bebe_mexicain.classList.contains('choix-actif')) {
        tete_bebe_mexicain.classList.remove('choix-actif');
    }
    if (tete_bebe_bresilien.classList.contains('choix-actif')) {
        tete_bebe_bresilien.classList.remove('choix-actif');
    }
});
tete_bebe_bresilien.addEventListener('click', () => {
    tete_bebe_bresilien.classList.add('choix-actif');
    console.log('click');
    if (tete_bebe_blanc.classList.contains('choix-actif')) {
        tete_bebe_blanc.classList.remove('choix-actif');
    }
    if (tete_bebe_japonaise.classList.contains('choix-actif')) {
        tete_bebe_japonaise.classList.remove('choix-actif');
    }
    if (tete_bebe_italienne.classList.contains('choix-actif')) {
        tete_bebe_italienne.classList.remove('choix-actif');
    }
    if (tete_bebe_mexicain.classList.contains('choix-actif')) {
        tete_bebe_mexicain.classList.remove('choix-actif');
    }
    if (tete_bebe_antillaise.classList.contains('choix-actif')) {
        tete_bebe_antillaise.classList.remove('choix-actif');
    }
});

burguignon.addEventListener('click', () => {
    burguignon.classList.add('choix-actif');
    console.log('click');
    if (risotto.classList.contains('choix-actif')) {
        risotto.classList.remove('choix-actif');
    }
    if (farofa.classList.contains('choix-actif')) {
        farofa.classList.remove('choix-actif');
    }
    if (riz.classList.contains('choix-actif')) {
        riz.classList.remove('choix-actif');
    }
    if (chili.classList.contains('choix-actif')) {
        chili.classList.remove('choix-actif');
    }
    if (legume.classList.contains('choix-actif')) {
        legume.classList.remove('choix-actif');
    }
    if (salade.classList.contains('choix-actif')) {
        salade.classList.remove('choix-actif');
    }
    if (pates.classList.contains('choix-actif')) {
        pates.classList.remove('choix-actif');
    }
});
risotto.addEventListener('click', () => {
    risotto.classList.add('choix-actif');
    console.log('click');
    if (burguignon.classList.contains('choix-actif')) {
        burguignon.classList.remove('choix-actif');
    }
    if (farofa.classList.contains('choix-actif')) {
        farofa.classList.remove('choix-actif');
    }
    if (riz.classList.contains('choix-actif')) {
        riz.classList.remove('choix-actif');
    }
    if (chili.classList.contains('choix-actif')) {
        chili.classList.remove('choix-actif');
    }
    if (legume.classList.contains('choix-actif')) {
        legume.classList.remove('choix-actif');
    }
    if (salade.classList.contains('choix-actif')) {
        salade.classList.remove('choix-actif');
    }
    if (pates.classList.contains('choix-actif')) {
        pates.classList.remove('choix-actif');
    }
});
farofa.addEventListener('click', () => {
    farofa.classList.add('choix-actif');
    console.log('click');
    if (burguignon.classList.contains('choix-actif')) {
        burguignon.classList.remove('choix-actif');
    }
    if (risotto.classList.contains('choix-actif')) {
        risotto.classList.remove('choix-actif');
    }
    if (riz.classList.contains('choix-actif')) {
        riz.classList.remove('choix-actif');
    }
    if (chili.classList.contains('choix-actif')) {
        chili.classList.remove('choix-actif');
    }
    if (legume.classList.contains('choix-actif')) {
        legume.classList.remove('choix-actif');
    }
    if (salade.classList.contains('choix-actif')) {
        salade.classList.remove('choix-actif');
    }
    if (pates.classList.contains('choix-actif')) {
        pates.classList.remove('choix-actif');
    }
});
riz.addEventListener('click', () => {
    riz.classList.add('choix-actif');
    console.log('click');
    if (burguignon.classList.contains('choix-actif')) {
        burguignon.classList.remove('choix-actif');
    }
    if (risotto.classList.contains('choix-actif')) {
        risotto.classList.remove('choix-actif');
    }
    if (farofa.classList.contains('choix-actif')) {
        farofa.classList.remove('choix-actif');
    }
    if (chili.classList.contains('choix-actif')) {
        chili.classList.remove('choix-actif');
    }
    if (legume.classList.contains('choix-actif')) {
        legume.classList.remove('choix-actif');
    }
    if (salade.classList.contains('choix-actif')) {
        salade.classList.remove('choix-actif');
    }
    if (pates.classList.contains('choix-actif')) {
        pates.classList.remove('choix-actif');
    }
});
chili.addEventListener('click', () => {
    chili.classList.add('choix-actif');
    console.log('click');
    if (burguignon.classList.contains('choix-actif')) {
        burguignon.classList.remove('choix-actif');
    }
    if (risotto.classList.contains('choix-actif')) {
        risotto.classList.remove('choix-actif');
    }
    if (farofa.classList.contains('choix-actif')) {
        farofa.classList.remove('choix-actif');
    }
    if (riz.classList.contains('choix-actif')) {
        riz.classList.remove('choix-actif');
    }
    if (legume.classList.contains('choix-actif')) {
        legume.classList.remove('choix-actif');
    }
    if (salade.classList.contains('choix-actif')) {
        salade.classList.remove('choix-actif');
    }
    if (pates.classList.contains('choix-actif')) {
        pates.classList.remove('choix-actif');
    }
});
legume.addEventListener('click', () => {
    legume.classList.add('choix-actif');
    console.log('click');
    if (burguignon.classList.contains('choix-actif')) {
        burguignon.classList.remove('choix-actif');
    }
    if (risotto.classList.contains('choix-actif')) {
        risotto.classList.remove('choix-actif');
    }
    if (farofa.classList.contains('choix-actif')) {
        farofa.classList.remove('choix-actif');
    }
    if (riz.classList.contains('choix-actif')) {
        riz.classList.remove('choix-actif');
    }
    if (chili.classList.contains('choix-actif')) {
        chili.classList.remove('choix-actif');
    }
    if (salade.classList.contains('choix-actif')) {
        salade.classList.remove('choix-actif');
    }
    if (pates.classList.contains('choix-actif')) {
        pates.classList.remove('choix-actif');
    }
});
salade.addEventListener('click', () => {
    salade.classList.add('choix-actif');
    console.log('click');
    if (burguignon.classList.contains('choix-actif')) {
        burguignon.classList.remove('choix-actif');
    }
    if (risotto.classList.contains('choix-actif')) {
        risotto.classList.remove('choix-actif');
    }
    if (farofa.classList.contains('choix-actif')) {
        farofa.classList.remove('choix-actif');
    }
    if (riz.classList.contains('choix-actif')) {
        riz.classList.remove('choix-actif');
    }
    if (chili.classList.contains('choix-actif')) {
        chili.classList.remove('choix-actif');
    }
    if (legume.classList.contains('choix-actif')) {
        legume.classList.remove('choix-actif');
    }
    if (pates.classList.contains('choix-actif')) {
        pates.classList.remove('choix-actif');
    }
});
pates.addEventListener('click', () => {
    pates.classList.add('choix-actif');
    console.log('click');
    if (burguignon.classList.contains('choix-actif')) {
        burguignon.classList.remove('choix-actif');
    }
    if (risotto.classList.contains('choix-actif')) {
        risotto.classList.remove('choix-actif');
    }
    if (farofa.classList.contains('choix-actif')) {
        farofa.classList.remove('choix-actif');
    }
    if (riz.classList.contains('choix-actif')) {
        riz.classList.remove('choix-actif');
    }
    if (chili.classList.contains('choix-actif')) {
        chili.classList.remove('choix-actif');
    }
    if (legume.classList.contains('choix-actif')) {
        legume.classList.remove('choix-actif');
    }
});