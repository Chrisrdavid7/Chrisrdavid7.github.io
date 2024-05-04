<template>
  <div class="footer-container">
    <div class="upper-footer">
      <img src="../assets/footerLogo.png" alt="Footer Logo" />
      <div id="mc_embed_signup">
          <form
            action="https://crowdfun.us10.list-manage.com/subscribe/post?u=abbc2db7cda96c2f169bd4135&amp;id=8e4816985f&amp;f_id=00932be2f0"
            method="post"
            id="mc-embedded-subscribe-form"
            name="mc-embedded-subscribe-form"
            class="validate"
            target="_blank"
            novalidate
          >
            <div id="mc_embed_signup_scroll">
              <div class="indicates-required">
                <span class="asterisk"></span>
              </div>
              <div class="mc-field-group">
                <div class="input-container">
                <input
                  type="text"
                  name="ARTIST"
                  class="text"
                  id="mce-ARTIST"
                  placeholder="Artist Name"
                  value=""
                />
                </div>
              </div>
              <div aria-hidden="true" style="position: absolute; left: -5000px">
                <div class="input-container">
                <input
                  type="text"
                  name="b_abbc2db7cda96c2f169bd4135_8e4816985f"
                  tabindex="-1"
                  value=""
                />
                </div>
              </div>
              <div class="mc-field-group">
                <div class="input-container">
                  <label for="mce-EMAIL" style="display: none"
                    ><span class="asterisk"></span>
                  </label>
                  <input
                    type="email"
                    value=""
                    name="EMAIL"
                    class="required email"
                    id="mce-EMAIL"
                    required
                    placeholder="Email"
                  />
                </div>
              </div>
              <div class="mc-field-group" style="margin: 1em 3em">
                <div class="input-container">
                  <input
                    type="submit"
                    value="Join the Waitlist"
                    name="subscribe"
                    id="mc-embedded-subscribe"
                    class="button-mailinglist"
                  />
                </div>
                <label>
                  By entering your email you consent to receive communication from Gigz
                </label>
              </div>
              <div id="mce-responses" class="clear foot">
                <div
                  class="response"
                  id="mce-error-response"
                  style="display: none"
                ></div>
                <div
                  class="response"
                  id="mce-success-response"
                  style="display: none"
                ></div>
              </div>
              <div style="position: absolute; left: -5000px" aria-hidden="true">
                <input
                  type="text"
                  name="b_abbc2db7cda96c2f169bd4135_8e4816985f"
                  tabindex="-1"
                  value=""
                />
              </div>
            </div>
          </form>
        </div>
      <div class="copyright">
        <span>©2024 Gigz Inc</span>
      </div>
    </div>
    <div class="lower-footer">
     <!-- <div class="social-links">
        <img src="../assets/facebook.png" alt="Facebook" />
        <img src="../assets/twitter.png" alt="Twitter" />
        <img src="../assets/instagram.png" alt="Instagram" />
        <img src="../assets/linkedin.png" alt="LinkedIn" />
        <img src="../assets/instagram.png" alt="Instagram" />
        <img src="../assets/linkedin.png" alt="LinkedIn" />
      </div> -->
    <!--  <div class="footer-menu">
        <a class="menu-link" href="#">FAQ</a>
        <a class="menu-link" href="#">Privacy</a>
        <a class="menu-link" href="#">Terms</a>
        <a class="menu-link" href="#">Do Not Sell My Information</a>
      </div> -->

    </div>
  </div>
</template>
<script>
import { ref } from 'vue'
export default {
  name: 'GigzFooter',
  components: {
  }

}
</script>
<style lang="scss">
.footer-menu {
  display: flex;
  justify-content: space-between;
  margin-top: 50px;
  padding-bottom: 50px;
  display: flex;
  justify-content: space-between;
  margin-top: 50px;
  padding-bottom: 50px;
  text-decoration: none;
  padding-left: 30%;
  padding-right: 30%;
  @media (max-width: 768px) {
    padding-left: 0;
    padding-right: 0;
    font-size: 1rem;
    display: block;
  }
}
.footer-container {
  background: #000000;
  display: flex;
  justify-content: center;
  width: 100%;
  bottom: 0px;
  text-align: center;
  padding-top: 12rem;
}
.input-container {
  display: flex;
  justify-content: center;
  text-align: center;
  margin-top: 20px;
}
.text, .required.email {
  max-width: 600px;
  width: 100%;
}
#mc_embed_signup {
  margin-top: 8rem;
  margin-bottom: 10rem;
}
#mc-embedded-subscribe-form {
  font-size: 1.25rem;
}
#mce-ARTIST {
  // width: 256px;
  padding-left: 10px;
  border-radius: 15px;
  border: 1px solid #35BCBC;
}
#mce-EMAIL {
  // width: 256px;
  padding-left: 10px;
  border-radius: 15px;
  border: 1px solid #35BCBC;
}
#mc-embedded-subscribe {
  border-radius: 15px;
  // width: 256px;
  background: #35BCBC;
  margin-bottom: 20px;
}
.upper-footer {
  display: block;
  color: #ffffff;
  max-width: 1276px;
  width:80%
}
.copyright {
  margin-top: 40px;
  margin-bottom: 40px;
  font-weight: 700;
  font-size: 22px;
}
.menu-link {
  font-weight: 400;
  font-size: 22px;
  color: #ffffff;
  text-decoration: none;
  @media (max-width: 768px) {
    display: block;
    margin-top: 20px;
  }
}
.button-mailinglist {
  /* height: 54px; */
  background: #35BCBC;
  border-radius: 25px;
  text-align: center;
  justify-content: center;
  // font-size: 1.3rem;
  color: #000000;
  /* padding-top: 12px; */
  font-weight: 500;
  max-width: 600px;
  width: 100%;
}
  </style>
