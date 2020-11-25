<template>
  <div id="home">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <div v-if="!cookieState">
      <b-modal id="modal-scoped" centered hide-footer :no-close-on-backdrop="true"  :no-close-on-esc="true" >
        <template #modal-header>
          <h5 class="mb-0">Please Enter Your Information to Continue</h5>
        </template>
        <b-form action="/braj/index.php" method="POST" class="text-center">
            <b-input
              id="inline-form-input-name"
              class="mb-2 mr-sm-2 mb-sm-0"
              v-model="name"
              placeholder="John Doe"
              name="name"
              type="text"
              required
            ></b-input>

            <b-input-group prepend="+91" class="mb-2 mr-sm-2 mb-sm-0 mt-2">
              <b-input
                id="inline-form-input-name"
                placeholder="Mobile number"
                name="number"
                type="tel"
                pattern="[0-9]{10}"
                required
                v-model="mobile"
              >
              </b-input>
            </b-input-group>
            <b-input
              id="inline-form-input-name"
              class="mb-2 mr-sm-2 mb-sm-0 mt-2"
              placeholder="Age"
              name="age"
              type="number"
              required
              v-model="age"
            ></b-input>
            <b-input
              id="inline-form-input-name"
              class="mb-2 mr-sm-2 mb-sm-0 mt-2"
              placeholder="E-mail"
              name="email"
              type="email"
              required
              v-model="email"
            ></b-input>
            <input
              type="submit"
              value="Submit"
              class="btn btn-success mt-2"
              @click="createCookies"
            />

        </b-form>
      </b-modal>
    </div>

    <div class="header">
      <Header />
    </div>
    <div class="main">
      <div class="header-bottom row">
        <div
          class="header-logo1 col-12 col-md-4 col-lg-4 col-xl-4"
          data-aos="fade-right"
        ></div>
        <div class="header-logo2 col-12 col-md-8 col-lg-8 col-xl-8"></div>
      </div>
      <div class="container">
        <div class="info" data-aos="fade-up">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec
            odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla
            quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent
            mauris. Curabitur sodales ligula in libero. Sed dignissim lacinia
            nunc.
          </p>
          <p>
            Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem
            at dolor. Maecenas mattis. Sed convallis tristique sem. Proin ut
            ligula vel nunc egestas porttitor. Morbi lectus risus, iaculis vel,
            suscipit quis, luctus non, massa. Fusce ac turpis quis ligula
            lacinia aliquet.
          </p>
        </div>
        <div class="service" data-aos="fade-up">
          <service />
        </div>
      </div>

      <div class="shop-banner">
        <h1 data-aos="fade-right">
          Check Out our products. You might just find what you need!
        </h1>
        <div data-aos="fade-left" class="shop-btn-div">
          <a href="https://mydukaan.io/braj32" target="_blank">
            <span class="btn btn-primary shop-btn"
              >SHOP<b-icon icon="chevron-double-right"></b-icon
            ></span>
          </a>
        </div>
      </div>

      <div class="container">
        <div class="testimonials">
          <h1 data-aos="fade-up">TESTIMONIALS</h1>
          <carousel
            :perPageCustom="[
              [320, 1],
              [768, 2],
              [1199, 3],
            ]"
            data-aos="fade-up"
          >
            <slide>
              <div>
                <b-card
                  title="Card Title"
                  img-src="https://picsum.photos/600/300/?image=25"
                  img-alt="Image"
                  img-top
                  tag="article"
                  style="max-width: 20rem"
                  class="mb-2"
                >
                  <b-card-text>
                    Some quick example text to build on the card title and make
                    up the bulk of the card's content.
                  </b-card-text>
                </b-card>
              </div>
            </slide>

            <slide>
              <div>
                <b-card
                  title="Card Title"
                  img-src="https://placekitten.com/600/300"
                  img-alt="Image"
                  img-top
                  tag="article"
                  style="max-width: 20rem"
                  class="mb-2"
                >
                  <b-card-text>
                    Some quick example text to build on the card title and make
                    up the bulk of the card's content.
                  </b-card-text>
                </b-card>
              </div>
            </slide>

            <slide>
              <div>
                <b-card
                  title="Card Title"
                  img-src="https://picsum.photos/600/300/?image=25"
                  img-alt="Image"
                  img-top
                  tag="article"
                  style="max-width: 20rem"
                  class="mb-2"
                >
                  <b-card-text>
                    Some quick example text to build on the card title and make
                    up the bulk of the card's content.
                  </b-card-text>
                </b-card>
              </div>
            </slide>

            <slide>
              <div>
                <b-card
                  title="Card Title"
                  img-src="https://placekitten.com/600/300"
                  img-alt="Image"
                  img-top
                  tag="article"
                  style="max-width: 20rem"
                  class="mb-2"
                >
                  <b-card-text>
                    Some quick example text to build on the card title and make
                    up the bulk of the card's content.
                  </b-card-text>
                </b-card>
              </div>
            </slide>
          </carousel>
        </div>
      </div>
    </div>
    <Footer />
  </div>
</template>

<script>
import AOS from "aos";
import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";
import { Carousel, Slide } from "vue-carousel";
import Service from "../components/service.vue";
import Footer from "../components/footer";
import Header from "../components/Header";

export default {
  data() {
    return {
      name: "",
      mobile: "",
      age: "",
      email: "",
      allcookies: [],
      cookieState: false,
    };
  },
  components: {
    Carousel,
    Slide,
    FontAwesomeIcon,
    Service,
    Footer,
    Header,
  },
  mounted() {
    AOS.init({ duration: 1000 });

    setTimeout(() => {
      this.$bvModal.show("modal-scoped");
    }, 1000);

    this.allcookies = document.cookie;
    if (this.allcookies) {
      this.cookieState = true;
    }
  },
  methods: {
    createCookies() {
      document.cookie = "name=" + this.name;
      document.cookie = "mobile=" + this.mobile;
      document.cookie = "age=" + this.age;
      document.cookie = "email=" + this.email;
      function alertCookie() {
        alert(document.cookie);
      }
    },
  },
};
</script>

<style scoped>
.main {
  background: #1d1916;
  color: #d4af37;
}

.modal-dialog{
  min-width:200px !important;
}

.header {
  margin-bottom: -5px !important;
}

.header-bottom {
  width: 100%;
  background: #000;
  position: relative;
}

.row {
  margin: 0 !important;
}

.header-logo1 {
  height: 348px;
  background: #000 url("/new_logo2.jpg") no-repeat center;
  background-size: contain;
}

.header-logo2 {
  height: 348px;
  background: #000 url("/new_logo3.jpg") no-repeat center;
  background-size: cover;
}

@media (max-width: 580px) {
  .header-logo1 {
    background-size: 80%;
    height: 248px;
  }
  .header-logo2 {
    background-size: 170%;
    height: 270px;
  }
}

.info {
  font-size: 1.2rem;
  text-align: justify;
  padding-top: 10vh;
}

.service {
  margin-top: 10vh;
  margin-bottom: 10vh;
  padding: 0;
  text-align: justify;
}

.shop-banner {
  width: 100%;
  height: 70vh;
  background: linear-gradient(0deg, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)),
    url("/shop_banner.jpg") no-repeat;
  background-position: 50% 70%;
  background-size: cover;
  position: relative;
}

.shop-banner h1 {
  color: #fff;
  text-align: left;
  padding: 15vh 0 0 10vw;
  font-size: 3rem;
  width: 50%;
}

.shop-btn-div {
  position: absolute;
  bottom: 15%;
  right: 15%;
}

.shop-btn {
  background-color: transparent !important;
  border-color: #ced3e4 !important;
  color: #fff !important;
  box-shadow: #d4af37 0px 0px 10px -3px;
  font-size: 2rem;
  letter-spacing: 3px;
  border: 2px solid #fff;
}

@media (max-width: 780px) {
  .shop-banner h1 {
    width: 80%;
    padding-top: 10vh;
    font-size: 2.5rem;
  }

  .shop-btn {
    font-size: 1.5rem;
  }
}

@media (max-width: 350px) {
  .shop-banner h1 {
    width: 100%;
    font-size: 2rem;
  }
}

.testimonials {
  padding-top: 12vh;
  padding-bottom: 10vh;
}

.testimonials h1 {
  text-align: left;
  font-weight: bolder;
}

.card {
  color: #000;
}
</style>