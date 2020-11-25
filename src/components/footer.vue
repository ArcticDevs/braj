<template>
  <div id="footer">
    <div class="row container-fluid">
      <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-12 footer-part">
        <div class="footer-heading pl-3">
          <h5><b>Products</b></h5>
        </div>
        <div class="footer-content pl-3">
          <ul>
            <li>
              <p>Living room</p>
            </li>
            <li>
              <p>Bedroom</p>
            </li>
            <li>
              <p>Drawing room</p>
            </li>
          </ul>
        </div>
      </div>

      <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-12 footer-part">
        <div class="footer-heading">
          <h5><b>Contact</b></h5>
        </div>
        <div class="footer-content">
          <p>
            Karmanbirpur trimuhani, Suswahi, Hyderabad Gate, BHU, Varanasi
          </p>
          <p class="mb-0">+91 7355144324</p>
          <p>+91 9889690900</p>
        </div>
      </div>

      <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-12 footer-part">
        <div class="footer-heading">
          <h5><b>Navigate</b></h5>
        </div>
        <div class="footer-content">
          <ul>
            <li>
              <p>Products</p>
            </li>
            <li>
              <p>About Us</p>
            </li>
            <li>
              <p>Contact</p>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="social-icons">
      <div class="social">
        <a href="#"><i class="fab fa-facebook-f fa-2x"></i></a>
        <a href="#"><i class="fab fa-instagram fa-2x"></i></a>
        <a href="mailto:brajdecoranddesigner@gmail.com"
          ><i class="far fa-envelope fa-2x"></i
        ></a>
        <a href="https://wa.me/918574757385" target="_blank"
          ><i class="fab fa-whatsapp fa-2x"></i
        ></a>
        <a href="tel:917355144324"
          ><i class="fas fa-phone-square-alt fa-2x"></i
        ></a>
      </div>
    </div>
    <div id="copyright">
      <p>© 2020 Braj Decor and Designer</p>
    </div>
  </div>
</template>



<style scoped>
#footer {
  background: #3F3A36;
  width: 100%;
  height: auto;
  padding: 2vh 0 0 0;
  color:#ddb27a;
}

.footer-heading {
  text-align: center;
  margin-top: 2vh;
  margin: auto;
  width: auto;
  top: 0;
}

.footer-heading h5{
  text-decoration: underline;
}

.footer-part {
  text-align: center;
}

.footer-content {
  font-size: 15px;
}

#footer ul {
  padding: 0;
}

.row ul {
  list-style: none;
}

#logo-name {
  font-size: 1rem;
  font-weight: 600;
  text-align: left;
  margin-bottom: 0.5rem;
  width: auto;
  position: relative;
  top: 0;
}

#logo-name img {
  height: 35px;
  width: 35px;
  margin-right: 10px;
  display: inline-block;
}

#logo-name p {
  display: inline-block;
}

#copyright {
  text-align: center;
  font-weight: 600;
  width: 100%;
  padding: 3px 0 3px;
  margin-top: 3vh;
}

.social {
  width: 40%;
  margin: auto;
  display: flex;
  justify-content: space-around;
}

.social a:nth-child(1) {
  color: #4d7fe2;
}
.social a:nth-child(2) {
  color: rgb(233, 67, 197);
}
.social a:nth-child(3) {
  color: rgb(209, 205, 205);
}
.social a:nth-child(4) {
  color: #00e676;
}
.social a:nth-child(5) {
  color: #7dd444;
}


@media (max-width:576px){
  .footer-part{
    margin-bottom:4vh;
  }
  .social{
    width:60%;
  }
}
</style>