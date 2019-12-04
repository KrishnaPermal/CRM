<template>
  <div class="clients">
    <h1>Clients Component</h1><br><br>
    <h2>AJOUTER UN CLIENT</h2>
    <br />

    <table border="1" >
      <tr v-for="(client,key) in clients" :key="key">
        <td>{{client.nom}}</td>
        <td>{{client.adresse.villes}}</td>
        <td>{{client.contacts[0].nom}}</td>
      </tr> 
    </table>

    <form class="flex flex-column">
        <textarea class="border rounded p-3 "></textarea>
        <button type="submit" class="border rounded py-3"></button>

    </form>




  </div>
</template>

<script src="./clients.js"></script>  


