# MM1 2020 TP JS 1

Le but de ce TP est de découvrir la programmation évenementielle avec Javascript et JQuery en réalisant un "Memory".
Ce repository contient la base du projet projet que vous pouvez télécharger, forker ou clone.

# Step 1

- Créer un fichier `assets/app.js` et utiliser la balise `script` pour le lier au fichier `index.html`.
- Ajouter `"use strict";` en tête de ce fichier.
- Implémenter la fonction `ready` de JQuery : 
```js
$( document ).ready(function() {
  console.log("Hello there!");
});
```
- Ouvrir `index.html` et vérifier la présence de "Hello there!" dans la console du navigateur.
- L'environnement de travail est prêt, nous allons ajouter par la suite du code à la place du `console.log`.

# Step 2

- Jouer avec le selecteur de Jquery `$`. Selectionner les cartes et logger le resultat en console avec `console.log`.
- Utiliser la fonction `on` de JQuery et l'évènement `click` pour déclancher une action lorsque l'on clique sur une carte. 
- Lorsque l'on clique sur une carte, retourner la en ajoutant la class `show` à la div `card` sur laquelle on a cliqué. Pour celà il faut utiliser la fonction `addClass`.
- Lorsque l'on clique à nouveau sur cette carte, elle retrouve sa position initiale. Pour celà utiliser `hasClass` et `removeClass`.
- Refactoriser votre code avec `toggleClass`.
