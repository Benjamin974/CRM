
<template>
  <div>
    <h1>Client components</h1>
    <h2>{{toto}}</h2>
    <formulaire v-on:addClientAlert="addClient($event)" v-bind:title="formTitle"></formulaire>
    <table>
      <thead>
        <tr>
          <th colspan="2">Tableau des clients</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="(client,key) in clients" :key="key">
          <td>{{client.adresse.ville}}</td>
          <td>{{client.nomClient}}</td>
          <td>{{client.adresse.adresse}}</td>
          <td>{{client.contacts[0].nom}}</td>
        </tr>
      </tbody>
    </table>
    <v-data-table :headers="headers" :items="clients" :items-per-page="5" class="elevation-1" dark></v-data-table>
  </div>
</template>
<script src="./client.js"></script>

