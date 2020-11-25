<template>
     <div>
      <b-navbar toggleable="md" type="dark">
           <b-navbar-brand href="#">BRAJ</b-navbar-brand>
        <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>
        <b-collapse id="nav-collapse" is-nav fixed>
          <!-- Right aligned nav items -->
          <b-navbar-nav class="ml-auto">
            <b-nav-item class="mr-5">
              <router-link to="/">Home</router-link>
            </b-nav-item>
            <b-nav-item class="mr-5">
              <router-link to="/about">About Us</router-link>
            </b-nav-item>
            <b-nav-item class="mr-5">
              <router-link to="/contact">Contact</router-link>
            </b-nav-item>
          </b-navbar-nav>
        </b-collapse>
      </b-navbar>
    </div>
</template>

<style scoped>
.navbar{
  background:#000;
}

.navbar .navbar-brand{
    height:100%;
    font-size:30px;;
    padding:0;
    letter-spacing: 5px;
    margin-left:5vw;
    color:#fff;
}

.nav-link a{
  color:#d4af37;
}
</style>