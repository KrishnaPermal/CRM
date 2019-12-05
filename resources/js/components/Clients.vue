<template>
  <div class="clients">
    <h1>Clients Component</h1>
    <br />
    <br />
    <h2>AJOUTER UN CLIENT</h2>
    <br />

<!--FORMULAIRE-->
    <formulaire 
    v-on:addClientAlert="addClient($event)" 
    v-bind:title="titleForm">
    </formulaire>
<!--FORMULAIRE-->

 <v-data-table
    v-model="selected"
    :headers="headers"
    :items="clients"
    item-key="name"
    show-select
    class="elevation-1">

    <template v-slot:top>
      <v-switch v-model="singleSelect" label="Single select" class="pa-3"></v-switch>
    </template>


      <tr v-for="(client,key) in clients" :key="key">
        <td>{{client.nom}}</td>
        <td>{{client.adresse.villes}}</td>
        <td>{{client.contacts[0].nom}}</td>
      </tr>
 </v-data-table>
    <br />
    <br />
  </div>
</template>



<script src="./clients.js"></script>  


