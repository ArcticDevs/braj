<template>
  <div class="container service">
    <h1>SERVICES</h1>
    <span class="btn btn-primary service-btn" @click="showModal"
      >Interior & Exterior Designing</span
    >

    <span class="btn btn-primary service-btn" @click="showModal"
      >3D & 2D Designing</span
    >

    <span class="btn btn-primary service-btn" @click="showModal"
      >False Ceiling</span
    >

    <span class="btn btn-primary service-btn" @click="showModal">Glass Work</span>

    <span class="btn btn-primary service-btn" @click="showModal">ACP Work </span>

    <span class="btn btn-primary service-btn" @click="showModal"
      >Elevation Work</span
    >

    <span class="btn btn-primary service-btn" @click="showModal"
      >Glazing Work</span
    >

    <span class="btn btn-primary service-btn" @click="showModal"
      >Alluminium Work</span
    >

    <span class="btn btn-primary service-btn" @click="showModal"
      >Wooden & Furniture Work
    </span>

    <span class="btn btn-primary service-btn" @click="showModal"
      >Modular Kitchen
    </span>

    <span class="btn btn-primary service-btn" @click="showModal">Painting </span>

    <span class="btn btn-primary service-btn" @click="showModal"
      >Sketch & Portrait
    </span>

    <span class="btn btn-primary service-btn" @click="showModal"
      >Partition Solution
    </span>

    <span class="btn btn-primary service-btn" @click="showModal">PUC Work </span>

    <span class="btn btn-primary service-btn" @click="showModal"
      >Wooden Flooring</span
    >

    <span class="btn btn-primary service-btn" @click="showModal"
      >Wallpaper Work
    </span>

    <span class="btn btn-primary service-btn" @click="showModal"
      >Electric Solution
    </span>

    <b-modal id="modal-center" size="xl" centered title="BootstrapVue">
      <Carousel />
    </b-modal>
  </div>
</template>

<script>
import Carousel from "./service_carousel";
import { Carousel3d, Slide } from "vue-carousel-3d";

export default {
  components: {
    Carousel,
    Carousel3d,
    Slide,
  },
  methods: {
    showModal() {
      this.$bvModal.show("modal-center");
    },
  },
};
</script>

<style>
h1 {
  font-weight: bold;
}

#modal-center {
  height: 100vh;
  width: 100vw;
}

.service-btn{
  background-color: transparent !important;
    border-color:#d4af37 !important;
    color:#d4af37 !important;
    box-shadow: #d4af37 0px 3px 18px -9px;
    margin:6px;
}

/* .modal-body {
  height: 70vh;
} */

/* .carousel-3d-container, #car {
  min-height: 400px;
}
.carousel-3d-slider {
  min-height: 272px ;
  margin-top:auto !important;
}

.carousel-3d-slide{
    min-height: 272px;
  min-width:362px;
} */
</style>