<template>
  <v-container>
    <v-navigation-drawer app>
      <router-link tag="li" to="/">Home</router-link>
      <router-link tag="li" to="/about">About</router-link>
      <router-link tag="li" to="/clients">Client</router-link>
    </v-navigation-drawer>
    <v-content>
      <!--The most important thing here-->
      <router-view></router-view>
    </v-content>
    <v-footer app></v-footer>
  </v-container>
</template>
<script>
export default {};
</script>