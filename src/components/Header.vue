
<template>
  <div class="header container-fluid">
    <Navbar />

    <div class="header-bg"></div>
    <div class="container">
      <div class="header_text" data-aos="fade-right">
        <h1>BRAJ DECORS AND DESIGNERS</h1>
        <h2>The Complete Interior and Exterior Junction</h2>
      </div>
    </div>

  </div>
</template>

<script>
import Navbar from "./Navbar.vue";

export default {
  components: {
    Navbar,
  },
};
</script>


<style scoped>
.header{
  padding:0;
}

.header-bg {
  width: 100%;
  height: 100vh;
  background: url(/header_bg2.jpg) no-repeat center;
  background-size: cover;
  position: absolute;
  top: 60px;
  z-index:-1;
}

.header_text{
  height:100vh;
}

.header_text h1{
  color:#fff;
  padding-top:20vh;
  width:60%;
  text-align: left;
  font-weight:bolder;
  font-size:8vh;
}

.header_text h2{
  color:#fff;
  padding-top:7vh;
  width:60%;
  text-align: left;
  font-weight:bolder;
  font-size:5vh;
}

@media(max-width:770px){
  .header_text h1{
    width:80%;
    padding-top:10vh;
  }

  .header_text h2{
    width:80%;
  }
}
</style>