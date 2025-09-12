document.addEventListener("DOMContentLoaded", function () {
  const bouton_bebe = document.getElementById("menu-bebe");
  const bouton_accompagnement = document.getElementById("menu-accompagnement");
  const bouton_validation = document.querySelector(".menu-validation");

  const menu_bebe_choix = document.querySelector(".menu-bebe-choix");
  const menu_accompagnement_choix = document.querySelector(
    ".menu-accompagnement-choix"
  );

  const form = document.getElementById("commande-form");
  const inputBebe = document.getElementById("id_bebe");
  const inputIngredient = document.getElementById("id_ingredient");

  // Afficher par défaut les bébés
  menu_bebe_choix.classList.add("menu-actif");
  bouton_bebe.classList.add("choix-actif");

  // Basculer entre les bébés et les accompagnements
  bouton_bebe.addEventListener("click", () => {
    menu_bebe_choix.classList.add("menu-actif");
    bouton_bebe.classList.add("choix-actif");
    menu_accompagnement_choix.classList.remove("menu-actif");
    bouton_accompagnement.classList.remove("choix-actif");
  });

  bouton_accompagnement.addEventListener("click", () => {
    menu_accompagnement_choix.classList.add("menu-actif");
    bouton_accompagnement.classList.add("choix-actif");
    menu_bebe_choix.classList.remove("menu-actif");
    bouton_bebe.classList.remove("choix-actif");
  });

  // Gestion des bébés - récupérer tous les éléments de bébé chargés dynamiquement
  const bebeElements = document.querySelectorAll(".bebe-choix");
  bebeElements.forEach((bebe) => {
    bebe.addEventListener("click", () => {
      // Désactiver tous les autres bébés
      bebeElements.forEach((b) => {
        b.classList.remove("choix-actif");
      });

      // Activer le bébé courant
      bebe.classList.add("choix-actif");

      // Mettre à jour l'input du formulaire
      inputBebe.value = bebe.dataset.id;
      console.log("Bébé sélectionné:", bebe.dataset.id);
    });
  });

  // Gestion des accompagnements - récupérer tous les éléments d'accompagnement chargés dynamiquement
  const ingredientElements = document.querySelectorAll(".accompagnement-choix");
  ingredientElements.forEach((ingredient) => {
    ingredient.addEventListener("click", () => {
      // Désactiver tous les autres ingrédients
      ingredientElements.forEach((i) => {
        i.classList.remove("choix-actif");
      });

      // Activer l'ingrédient courant
      ingredient.classList.add("choix-actif");

      // Mettre à jour l'input du formulaire
      inputIngredient.value = ingredient.dataset.id;
      console.log("Ingrédient sélectionné:", ingredient.dataset.id);
    });
  });

  // Validation de la commande
  bouton_validation.addEventListener("click", () => {
    // Vérifier qu'un bébé et un ingrédient ont été sélectionnés
    const bebeSelectionne = document.querySelector(".bebe-choix.choix-actif");
    const ingredientSelectionne = document.querySelector(
      ".accompagnement-choix.choix-actif"
    );

    if (!bebeSelectionne) {
      alert("Veuillez sélectionner un bébé");
      return;
    }

    if (!ingredientSelectionne) {
      alert("Veuillez sélectionner un accompagnement");
      return;
    }

    // Mettre à jour les valeurs du formulaire avec les sélections
    inputBebe.value = bebeSelectionne.dataset.id;
    inputIngredient.value = ingredientSelectionne.dataset.id;

    console.log("Bébé sélectionné:", inputBebe.value);
    console.log("Ingrédient sélectionné:", inputIngredient.value);
    console.log("Table:", document.getElementById("id_table").value);

    // Soumettre le formulaire
    form.submit();
  });
});
