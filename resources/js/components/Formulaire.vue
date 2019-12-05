
<template>
  <div>
    <h1>{{title}}</h1>

    <v-form ref="form" v-model="valid" lazy-validation>
      <v-container>
        <v-row>
          <h2>Adresse :</h2>
        </v-row>
        <v-row>
          <v-text-field v-model="adresse" label="Adresse" required></v-text-field>
        </v-row>
        <v-row>
          <v-text-field v-model="code_postal" label="Code Postal" required></v-text-field>
        </v-row>
        <v-row>
          <v-text-field v-model="ville" label="Ville" required></v-text-field>
        </v-row>
      </v-container>
      <v-container>
        <v-row>
          <h2>Client :</h2>
        </v-row>
        <v-row>
          <v-text-field v-model="client" label="Client" required></v-text-field>
        </v-row>
      </v-container>

      <v-container>
        <v-row>
          <h2>Contact :</h2>
        </v-row>
        <v-row>
          <v-text-field v-model="nom" label="Nom" required></v-text-field>
        </v-row>
        <v-row>
          <v-text-field v-model="prenom" label="Prénom" required></v-text-field>
        </v-row>
        <v-row>
          <v-text-field v-model="tel" label="Téléphone" required></v-text-field>
        </v-row>
        <v-row>
          <v-text-field v-model="email" label="Email" required></v-text-field>
        </v-row>
        <v-row>
          <v-text-field v-model="poste" label="Poste occupé" required></v-text-field>
        </v-row>
      </v-container>

      <v-btn :disabled="!valid" color="success" class="mr-4" @click="addClient">Ajouter le client</v-btn>
    </v-form>
  </div>
</template>

<script src="./Formulaire.js"></script>