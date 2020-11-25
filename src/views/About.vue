<template>
  <div id="about">
    <Navbar />
    <div class="container-fluid">
      <div class="banner" data-aos="fade-up">
        <img src="about_banner.jpg" id="contact_photo" class="mx-auto" />
        <h1>ABOUT US</h1>
      </div>
    </div>
    <div class="container">
      <div class="about-info" data-aos="fade-up">
        <h1><u>Our Stor</u>y</h1>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec
          odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla
          quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent
          mauris. Fusce nec tellus sed augue semper porta. Mauris massa.
          Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad
          litora torquent per conubia nostra, per inceptos himenaeos. Curabitur
          sodales ligula in libero. Sed dignissim lacinia nunc.
        </p>
      </div>
      <div id="team">
        <h1 class="mt-5 mb-3" data-aos="fade-up"><u>Our Team</u></h1>

        <div class="row container">
          <div class="col-12 col-sm-12 col-md-6 col-lg-6"  data-aos="flip-left">
            <b-card
              img-top
              style="max-width: 20rem; background: transparent"
              class="mb-2 col-6 ml-auto mr-auto owner-card"
            >
              <b-card-img
                src="photo.png"
                alt="Image"
                class="rounded-circle"
              ></b-card-img>
              <b-card-text class="mt-2">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed
                nisi. Nulla quis sem at nibh elementum imperdiet.
              </b-card-text>
            </b-card>
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-6" data-aos="flip-left">
            <b-card
              img-top
              style="max-width: 20rem; background: transparent"
              class="mb-2 col-6 ml-auto mr-auto owner-card"
            >
              <b-card-img
                src="photo.png"
                alt="Image"
                class="rounded-circle"
              ></b-card-img>
              <b-card-text class="mt-2">
                Some quick example text to build on the card title and make up
                the bulk of the card's content. Lorem ipsum dolor sit amet,
                consectetur adipiscing elit.
              </b-card-text>
            </b-card>
          </div>
        </div>
        <div class="container">
          <!-- <div class="row">
        <div class="col-4 mx-auto mb-3">
            <img src="photo.png" alt="" srcset="" class="rounded-circle" id="team_photo">
             <h6 class="mt-2">Name: Abhinav</h6>
             <span >Designation : Manager</span>
           
        </div>
        <div class="col-4">
            <img src="photo.png" alt="" srcset="" class="rounded-circle" id="team_photo">
             <h6 class="mt-2">Name: Abhinav</h6>
             <span >Designation : Manager</span>            
        </div>
        <div class="col-4">
            <img src="photo.png" alt="" srcset="" class="rounded-circle" id="team_photo">
             <h6 class="mt-2">Name: Abhinav</h6>
             <span >Designation : Manager</span>            
        </div>
      </div> -->
          <div class="row mt-4">
            <div class="col-6 mx-auto" data-aos="flip-left">
              <img
                src="photo.png"
                alt=""
                srcset=""
                class="rounded-circle"
                id="team_photo"
              />
              <h6 class="mt-2">Name: Yug</h6>
              <span>Designation : Developer</span>
            </div>
            <div class="col-6" data-aos="flip-left">
              <img
                src="photo.png"
                alt=""
                srcset=""
                class="rounded-circle"
                id="team_photo"
              />
              <h6 class="mt-2">Name: Dhananjay</h6>
              <span>Designation : Developer</span>
            </div>
          </div>
          <div class="row mt-4">
            <div class="col-6 mx-auto" data-aos="flip-left">
              <img
                src="photo.png"
                alt=""
                srcset=""
                class="rounded-circle"
                id="team_photo"
              />
              <h6 class="mt-2">Name: Yug</h6>
              <span>Designation : Developer</span>
            </div>
            <div class="col-6" data-aos="flip-left">
              <img
                src="photo.png"
                alt=""
                srcset=""
                class="rounded-circle"
                id="team_photo"
              />
              <h6 class="mt-2">Name: Dhananjay</h6>
              <span>Designation : Developer</span>
            </div>
          </div>
          <div class="row mt-4">
            <div class="col-6 mx-auto" data-aos="flip-left">
              <img
                src="photo.png"
                alt=""
                srcset=""
                class="rounded-circle"
                id="team_photo"
              />
              <h6 class="mt-2">Name: Yug</h6>
              <span>Designation : Developer</span>
            </div>
            <div class="col-6" data-aos="flip-left">
              <img
                src="photo.png"
                alt=""
                srcset=""
                class="rounded-circle"
                id="team_photo"
              />
              <h6 class="mt-2">Name: Dhananjay</h6>
              <span>Designation : Developer</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <Footer />
  </div>
</template>

<script>
import AOS from "aos";
import Navbar from "../components/Navbar";
import Footer from "../components/footer";
export default {
  components: {
    Navbar,
    Footer,
  },
  mounted() {
    AOS.init({ duration: 1000 });
  },
};
</script>

<style scoped>
* {
  background: #1d1916;
  color: #d4af37;
}

.about-info h1{
  font-size:3rem;
  margin-top:7vh;
}
.about-info p{
  margin-top:3vh;
  font-size:1.2rem;
}

.rounded-circle {
  border-radius: 50%;
}

.owner-card {
  border: 1px solid #d4af37;
  border-radius: 15px;
}

#team {
  margin-top: 10vh;
  margin-bottom: 10vh;
}
#team_photo {
  border-radius: 50%;
  max-width: 10rem;
}

.banner h1 {
  text-shadow: #000 5px 5px 10px;
  font-size: 4rem;
  position: absolute;
  left: 50%;
  right: 50%;
  top: 40%;
  transform: translate(-50%, -50%);
  width: 100%;
  background: transparent;
  color: #fff;
  word-spacing: 20px;
}

#contact_photo {
  width: 85%;
  height: 60vh;
  text-align: center;
}

@media (max-width: 670px) {
  #contact_photo {
    height: 35vh;
  }
  .banner h1 {
    /* top: 25%; */
    font-size: 3rem;
  }
}

@media (max-width: 415px) {
  #team_photo {
    border-radius: 50%;
    max-width: 150px;
  }
}
@media (max-width: 350px) {
  #team_photo {
    border-radius: 50%;
    max-width: 130px;
  }
}
</style>