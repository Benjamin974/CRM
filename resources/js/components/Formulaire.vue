
<template>
  <div>
    <h1>{{title}}</h1>

    <form action="/ma-page-de-traitement" @submit="addUser" method="post">
      <div>
        <label for="adresse">Adresse :</label>
        <input id="adresse" v-model="adresse" type="text" placeholder="adresse" />
        <input id="code_postal" v-model="code_postal" type="text" placeholder="code postal" />
        <input id="ville" v-model="ville" type="text" placeholder="ville" />
      </div>
      <div>
        <label for="client">Client :</label>
        <input v-model="client" type="text" id="nomClient" name="nom" />
      </div>

      <div>
        <label for="nom">Contact :</label>
        <input id="nom" v-model="nom" type="text" placeholder="nom" />
        <input id="prenom" v-model="prenom" type="text" placeholder="prenom" />
        <input id="tel" v-model="tel" type="text" placeholder="tel" />
        <input id="email" v-model="email" type="text" placeholder="email" />
        <input id="poste" v-model="poste" type="text" placeholder="poste" />
      </div>

      <input type="submit" value="entrer" />
    </form>
  </div>
</template>

<style>
form {
  /* Uniquement centrer le formulaire sur la page */
  margin: 0 auto;
  width: 400px;
  /* Encadré pour voir les limites du formulaire */
  padding: 1em;
  border: 1px solid #ccc;
  border-radius: 1em;
}

form div + div {
  margin-top: 1em;
}

label {
  /* Pour être sûrs que toutes les étiquettes ont même taille et sont correctement alignées */
  display: inline-block;
  width: 90px;
  text-align: right;
}

input {
  /* Pour s'assurer que tous les champs texte ont la même police.
     Par défaut, les textarea ont une police monospace */
  font: 1em sans-serif;

  /* Pour que tous les champs texte aient la même dimension */
  width: 300px;
  box-sizing: border-box;

  /* Pour harmoniser le look & feel des bordures des champs texte */
  border: 1px solid #999;
  margin-bottom: 20px;
}

input:focus {
  /* Pour souligner légèrement les éléments actifs */
  border-color: #000;
}

.button {
  /* Pour placer le bouton à la même position que les champs texte */
  padding-left: 90px; /* même taille que les étiquettes */
}

button {
  /* Cette marge supplémentaire représente grosso modo le même espace que celui
     entre les étiquettes et les champs texte */
  margin-left: 0.5em;
}
</style>
<script src="./Formulaire.js"></script>