<template>
  <div id="contact">
    <Navbar />
    <div class="container-fluid mb-5">
      <div class="contact-banner">
        <img src="contact.jpg" id="contact_photo" class="mx-auto" />
        <h1>CONTACT US</h1>
      </div>

      <div class="container" data-aos="fade-up">
        <h2>Braj Interior & Exterior Designer</h2>
        <h6>Office: 73551-44324</h6>
        <h6>Email: brajdecoranddesigner@gmail.com</h6>
        <h4 class="mt-4"><u>Working Hours</u></h4>
        <h6>Monday - Saturday : 9:00-5:00</h6>

        <h1 class="mt-5">Work With Braj!</h1>
        <p>
          If you are interested in hiring Braj for your project, please fill out
          the following introductory form. By filling this out, you tell us
          about you and your design needs. From there, our team will give you a
          call to quickly chat about how we can help and to set up your initial
          consultation.
        </p>
      </div>
      <div class="container row mx-auto">
        <div
          class="container contactForm col-12 col-lg-6 col-md-12 col-xl-6"
          data-aos="flip-left"
        >
          <form
            id="contact-form"
            name="contact-form"
            action="/braj/contact.php"
            method="POST"
          >
            <div class="row">
              <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-12 mt-3">
                <div>
                  <input
                    type="text"
                    id="fname"
                    name="fname"
                    class="bg-transparent form-control border-right-0 border-left-0 border-top-0"
                    placeholder="First Name"
                  />
                </div>
              </div>

              <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-12 mt-3">
                <div>
                  <input
                    type="text"
                    id="lname"
                    name="lname"
                    class="bg-transparent form-control border-right-0 border-left-0 border-top-0"
                    placeholder="Last Name"
                  />
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-auto mt-3">
                <div>
                  <input
                    type="tel"
                    placeholder="+91"
                    class="bg-transparent form-control border-right-0 border-left-0 border-top-0"
                    style="width: 55px"
                    disabled
                  />
                </div>
              </div>

              <div class="col-auto mt-3">
                <div>
                  <input
                    type="tel"
                    id="phone"
                    name="number"
                    pattern="[0-9]{10}"
                    class="bg-transparent form-control border-right-0 border-left-0 border-top-0"
                  />
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 mt-3">
                <input
                  type="text"
                  id="email"
                  name="email"
                  class="bg-transparent form-control border-right-0 border-left-0 border-top-0"
                  placeholder="Email"
                />
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 mt-3">
                <input
                  type="text"
                  id="subject"
                  name="city"
                  class="bg-transparent form-control border-right-0 border-left-0 border-top-0"
                  placeholder="City"
                />
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 mt-3">
                <input
                  type="text"
                  id="area"
                  name="area"
                  class="bg-transparent form-control border-right-0 border-left-0 border-top-0"
                  placeholder="Approx Work Area"
                />
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 mt-3">
                <input
                  type="date"
                  id="date"
                  name="date"
                  class="bg-transparent form-control border-right-0 border-left-0 border-top-0"
                  value="01-01-2021"
                />
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 mt-4">
                <textarea
                  type="text"
                  id="message"
                  name="message"
                  rows="4"
                  class="bg-transparent form-control md-textarea border-right-0 border-left-0 border-top-0"
                  placeholder="Your message"
                ></textarea>
              </div>
            </div>

            <input
              type="submit"
              value="Submit"
              class="mt-3 btn btn-success mb-4"
            />
          </form>
        </div>
        <div
          class="col-12 col-lg-6 col-md-12 col-xl-6 mx-auto"
          data-aos="flip-left"
        >
          <img src="map.jpg" alt="" srcset="" id="map" />
        </div>
      </div>
    </div>
    <Footer />
  </div>
</template>

<script>
import AOS from "aos";
import Footer from "../components/footer";
import Navbar from "../components/Navbar";

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
  background-size: cover;
  font-family: Julius Sans One;
}
#contact {
  background: #1d1916;
  position: relative;
  color: #d4af37;
}
p {
  font-size: 25px;
}
h6 {
  font-size: 20px;
}

.contact-banner {
  position: relative;
}

.contact-banner h1 {
  text-shadow: #000 5px 5px 15px;
  font-size: 4rem;
  position: absolute;
  left: 50%;
  right: 50%;
  top: 50%;
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
  margin-bottom: 50px;
}
@media (max-width: 670px) {
  #contact_photo {
    height: 35vh;
  }
}

#map {
  border-radius: 25px;
  width: 100%;
  height: 100%;
  text-align: center;
}

.contactForm {
  border-radius: 25px;
  background: #443c35;
  width: 50%;
  position: relative;
}

@media (max-width: 800px) {
  #contact-form #phone {
    width: 115px;
  }

  .contact-banner h1 {
    font-size: 2.8rem;
  }
}
@media (max-width: 350px) {
  #contact-form #phone {
    width: 145px;
  }

  .contact-banner h1 {
    font-size: 2rem;
  }
}

#contact-form input {
  color: #fff;
}

#message {
  resize: none;
  color: #fff;
}

.footer {
  position: absolute;
  bottom: -20px;
  width: 100%;
}
</style>