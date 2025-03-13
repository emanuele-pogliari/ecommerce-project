<script setup>
import HelloWorld from "./components/HelloWorld.vue";
</script>

<template>
  <h1 class="text-3xl font-bold text-green-600 underline">Hello world!</h1>

  <div>
    <a href="https://vite.dev" target="_blank">
      <img src="/vite.svg" class="logo" alt="Vite logo" />
    </a>
    <a href="https://vuejs.org/" target="_blank">
      <img src="./assets/vue.svg" class="logo vue" alt="Vue logo" />
    </a>
  </div>
  <HelloWorld msg="Vite + Vue" />
  <button id="dropdownButton" data-dropdown-toggle="dropdown">Apri</button>
  <div id="dropdown" class="hidden p-2 bg-white shadow-md">
    <p class="text-black">Contenuto del dropdown</p>
  </div>
</template>

<style scoped>
.logo {
  height: 6em;
  padding: 1.5em;
  will-change: filter;
  transition: filter 300ms;
}
.logo:hover {
  filter: drop-shadow(0 0 2em #646cffaa);
}
.logo.vue:hover {
  filter: drop-shadow(0 0 2em #42b883aa);
}
</style>
