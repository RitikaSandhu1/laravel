
<template>
  <v-container fluid>
    <v-row>
      <v-col class="d-flex">
      
        <NuxtLink to="/home" class="nav-link">HOME</NuxtLink>
        <NuxtLink to="/about" class="nav-link">ABOUT</NuxtLink>
        <NuxtLink to="/login" class="nav-link">LOGIN</NuxtLink>
        <NuxtLink to="/register" class="nav-link">REGISTRATION</NuxtLink>
        <NuxtLink to="/signout" class="nav-link">LOG-OUT</NuxtLink>
      </v-col>
    </v-row>
  </v-container>
</template>

<script setup>


</script>

<style scoped>
.d-flex {
  display: flex;
  justify-content: space-between;
  align-items: center;
  background-color: teal;
  padding: 1rem;
  height: 60px;
  width: 100%;
}

.nav-link {
  color: black;
  text-decoration: none;
  padding: 0.5rem 1rem;
  cursor: pointer;
  transition: background-color 0.3s;
  display: inline-block;
}

.nav-link:hover {
  background-color: red;
  border-radius: 5px;
}

/* Add space between each nav-link */
.nav-link+.nav-link {
  margin-left: 10px;
}
</style>