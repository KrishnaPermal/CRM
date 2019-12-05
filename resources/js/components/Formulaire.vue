<template>
<div>
    <h1>{{title}}</h1><br>
<form @submit="addClient">
      <label for="nom">NOM :</label>
      <input v-model="nom" type="text" placeholder="entrer votre nom" id="nom" /><br><br>
      <label for="prenom">PRENOM :</label>
      <input v-model="prenom" type="text" placeholder="entrer votre prenom" id="prenom" /><br><br>
      <label for="tel">TEL :</label>
      <input v-model="tel" type="text" placeholder="entrer votre numero" id="tel" /><br><br>
      <label for="email">EMAIL :</label>
      <input v-model="email" type="text" placeholder="entrer votre email" id="email" /><br><br>
      <label for="poste">POSTE :</label>
      <input v-model="poste" type="text" placeholder="entrer votre poste" id="poste"><br><br>
      <label for="adresse">ADRESSE :</label>
      <input v-model="adresse" type="text" placeholder="entrer votre adresse" id="adresse"><br><br>
      <label for="code_postal">CODE POSTAL :</label>
      <input v-model="code_postal" type="text" placeholder="entrer votre code_postal" id="code_postal"><br><br>
      <label for="villes">VILLE :</label>
      <input v-model="villes" type="text" placeholder="entrer votre ville" id="villes"><br><br>
      <label for="nom_entreprise">NOM DU CLIENT :</label>
      <input v-model="nom_entreprise" type="text" placeholder="entrer votre nom" id="nom_entreprise"><br><br>
      <input type="submit" value="entrer">
</form>
</div>
</template>

<style>
input{
  border: 1px solid black;
}
</style>

<script src="./formulaire.js"></script>