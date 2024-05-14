<template>
  <div class="index-plan-container">
    <div class="index-plan-headline">
      <span>A PLAN FOR EVERY STAGE</span>
    </div>
    <div class="index-plan-card-container">
      <div class="index-plan-card-left">
        <span class="index-plan-card-small-hl">STANDARD</span>
        <p>Unlock a world of live music with Gigz's free Standard Membership, connecting artists and fans for unforgettable performances.</p>
        <ul class="index-plan-list">
          <li>Access to Gigz Platform</li>
          <li>Access to BANI Ai Powered Software </li>
          <li>Access to Venue Marketplace</li>
        </ul>
        <div class="index-button-container">
          <div class="index-button1">Join Now</div>
        </div>
      </div>
      <div class="index-plan-card-center">
        <span class="index-plan-card-small-hl">ELLA</span>
        <p>Unlock premium features, priority bookings, and exclusive support to spotlight your talent on the Gigz platform.</p>
        <ul class="index-plan-list">
          <li>Build Proposals and Submit Offers to Venues</li>
          <li>Create Unlimited Shows</li>
          <li>Submit for Support Slots and Festival Plays</li>
          <li>Get paid with GratiaLink</li>
        </ul>
        <div class="index-button-container">
          <div class="index-button2">Join Now</div>
        </div>
      </div>
      <div class="index-plan-card-right">
        <span class="index-plan-card-small-hl">APEX</span>
        <p>An invitation-only tier offering unparalleled access to elite networking opportunities, top-tier gigs, and personalized concierge services</p>
        <ul class="index-plan-list">
          <li>Create Your Own festival</li>
          <li>Access to financial support like advances</li>
          <li>Access to Brand & Sync pitching</li>
        </ul>
        <div class="index-button-container">
          <div class="index-button3">Invitation Only</div>
        </div>
      </div>
    </div>
    <div class="index-button-container">
          <div class="index-button4">Compare Plans</div>
        </div>
    <div class="index-lower-transtion">
      <img class="index-trans" src="../assets/transition1.png"/>
    </div>
  </div>
</template>
<script>
import { ref } from 'vue'
export default {
  name: 'PlanSection',
  components: {
  }

}
</script>
<style lang="scss">


@font-face {
  font-family: 'Lab Grotesque';
  src: url('/media/fonts/LabGrotesque/LabGrotesqueLight.woff') format('woff');
  font-weight: 300; 
  font-style: normal;
}

@font-face {
  font-family: 'Lab Grotesque';
  src: url('/media/fonts/LabGrotesque/LabGrotesqueRegular.woff') format('woff');
  font-weight: 400; 
  font-style: normal;
}

.index-trans {
  transform: rotate(180deg);
}
.index-lower-transtion {
  margin-top: 50px;
  background: #ffffff;
}
.index-comp-container {
  display: flex;
  justify-content: center;
  text-align: center;
  margin-top: 80px;
  height: 1rem;
  background: #ffffff;
  :hover {
    cursor: pointer;
  }

}
.index-button-container {
  font-family: "LabGrostesque", sans-serif;
  font-weight: 400;
  display: flex;
  justify-content: center;
  text-align: center;
  margin-left: -30px;
  :hover {
    cursor: pointer;
  }
}

.index-button1 {
  margin-top: 20px;
  width: 150px;
  height: 40px;
  background: #8135BC;
  border-radius: 48.79px;
  text-align: center;
  justify-content: center;
  font-size: 12px;
  color: #ffffff;
  padding-top: 10px;
  font-weight: 700;

}
.index-button2 {
  margin-top: 20px;
  width: 150px;
  height: 40px;
  background: #fffdfd;
  border-radius: 48.79px;
  text-align: center;
  justify-content: center;
  font-size: 12px;
  color: #000000;
  padding-top: 10px;
  font-weight: 700;

}
.index-button3 {
  margin-top: 20px;
  width: 150px;
  height: 40px;
  background: #D4AF36;
  border-radius: 48.79px;
  text-align: center;
  justify-content: center;
  font-size: 12px;
  color: #ffffff;
  padding-top: 10px;
  font-weight: 700;

}

.index-button4 {
  font-family: "LabGrostesque", sans-serif;
  font-weight: 300;
  margin-top: 100px;
  margin-bottom: 50px;
  width: 200px;
  height: 50px;
  background: #35BCBC;
  border-radius: 61.8px;
  text-align: center;
  justify-content: center;
  font-size: 12px;
  color: #000000;
  padding-top: 16px;
  font-weight: 700;
}
.index-plan-list {
  font-family: "LabGrostesque", sans-serif;
  font-weight: 400;
  padding-left: 12px;
  padding-bottom: 1.25rem;
  li {
    list-style-type: disc;
    margin-top: 20px;
  }
}
.index-plan-container {
  justify-content: center;
  align-items: center;
  text-align: center;
  background: #ffffff;

}
.index-plan-card-left {
  height: 450px;
  max-width: 30%;
  margin-top: 20px;
  margin: 1rem;
  color: #000000;
  background: linear-gradient(180deg, #FAFBFF 0%, rgba(206, 211, 232, 0.533333) 100%);
  text-align: left;
  border: 0.74px solid black;
  border-radius: 10px;
  padding-top: 40px;
  padding-left: 30px;
  p {
    // line-height: 45px;
    margin-top: 20px;
    padding-right: 40px;
    margin-bottom: 40px;
  }
  @media (max-width: 768px) {
    max-width: 80%;
    margin-right: auto;
    margin-left: auto;
    margin-bottom: 30px;
  }
}
.index-plan-card-right {
  height: 450px;
  max-width: 30%;
  margin-top: 20px;
  margin: 1rem;
  color: #ffffff;
  background: #000000;
  text-align: left;
  border-radius: 10px;
  padding-top: 40px;
  padding-left: 30px;
  p {
    margin-top: 20px;
    padding-right: 40px;
    margin-bottom: 40px;
  }
  @media (max-width: 768px) {
    max-width: 80%;
    margin-right: auto;
    margin-left: auto;
    margin-bottom: 30px;
  }
}
.index-plan-card-center {
  height: 500px;
  max-width: 30%;
  color: #000000;
  margin-top: 20px;
  margin: 1rem;
  background: #D4AF36;
  text-align: left;
  border-radius: 10px;
  padding-top: 40px;
  padding-left: 30px;
  p {
    margin-top: 20px;
    padding-right: 40px;
    margin-bottom: 40px;
  }
  @media (max-width: 768px) {
    max-width: 80%;
    margin-right: auto;
    margin-left: auto;
    margin-bottom: 30px;
  }
}
.index-plan-button {
  &-dark {
    background: #8135BC;
    color: #ffffff;
    margin-top: 20px;
    margin-bottom: 30px;
    width: 250px;
    border-radius: 25px;
    height: 55px;
  }
  &-light {
    background: #ffffff;
    color: #000000;
    margin-top: 20px;
    margin-bottom: 30px;
    width: 250px;
    border-radius: 25px;
    height: 55px;
  }
  &-gold {
    background: #D4AF37;
    color: #ffffff;
    margin-top: 20px;
    margin-bottom: 30px;
    width: 250px;
    border-radius: 25px;
    height: 55px;
  }
  &-blue {
    background: #35BCBC;
    color: #000000;
    margin-top: 20px;
    margin-bottom: 30px;
    width: 300px;
    border-radius: 25px;
    height: 55px;
  }
}
.index-plan-card-container {
  height: 450px;
  margin-top: 50px;
  margin-bottom: 50px;
  margin-left: auto;
  margin-right: auto;
  max-width: 1100px;
  display: flex;
  justify-content: space-around;
  @media (max-width: 768px) {
    display: block;
    justify-content: center;
  }
}
.index-plan-card-small-hl {
  font-family: "LabGrostesque", sans-serif;
  font-weight: bold;
  font-size: 28px;
  line-height: 29px;
  text-align: left;
}
.index-plan-headline {
  font-family: "LabGrostesque", sans-serif;
  font-weight: 300;
  font-size: 3rem;
  line-height: 42.87px;
  letter-spacing: 0.5em;
  text-align: center;
  color: #000000;
  padding-top: 80px;
  @media (max-width: 768px) {
    font-size: 1.5rem;
  }
}
</style>
