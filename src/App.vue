<template>
  <div id="app">
    <div id="nav">
      
    </div>
    <router-view/>
  </div>
</template>

<script> 

export default {
 
  components :{
   
}
}
</script>
<style>
@import url('https://fonts.googleapis.com/css2?family=Petrona:wght@600&display=swap');
#app {
  font-family: 'Petrona', 'serif' ,Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  
}

/* #nav a {
  font-weight: bold;
  color: #2c3e50;
} */

/* #nav a.router-link-exact-active {
  color: #42b983;
} */
</style>
