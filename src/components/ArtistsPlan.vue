<template>
  <div class="plan-container">
    <div class="plan-card-container">
      <!-- Standard Plan -->
      <div class="plan-card-left">
        <span class="plan-card-small-hl">STANDARD</span>
        <p>Unlock a world of live music with Gigz's free Standard Membership, connecting artists and fans for unforgettable performances.</p>
        <div class="button-container">
          <div class="button1">Join Now</div>
        </div>
        <ul class="plan-list">
          <li>Cash out above $100 in earnings</li>
          <li>Access to the Venue Marketplace</li>
          <li>Access to BANI (AI Show Creation Tool)</li>
          <li>Basic Analytics Dashboard</li>
          <li>Event Budget Sandbox</li>
          <li>Access to GratiaLink to support talent</li>
        </ul>
      </div>
      <!-- Ella Plan -->
      <div class="plan-card-center">
        <span class="plan-card-small-hl">ELLA</span>
        <p>Unlock premium features, priority bookings, and exclusive support to spotlight your talent on the Gigz platform.</p>
        <div class="button-container">
          <div class="button2">Join Now</div>
        </div>
        <ul class="plan-list">
          <li>Cash out at any time</li>
          <li>Access to GratiaLink Payments</li>
          <li>Submit for Festival Plays at 35+ festivals like Ember Shores, Ubbi Dubbi, and Paradise Blue.</li>
          <li>Submit for Support Slots at 1000+ club shows and private events</li>
          <li>Shareable MasterLinks to drive event sales and GratiaLink payments</li>
          <li>Access Exclusive brand & sync deals</li>
          <li>Enroll qualified events into Spotify's Event Portal</li>
          <li>Unlimited access to GratiaLink</li>
          <li>Access to the Artist Education Portal</li>
        </ul>
      </div>
      <!-- Apex Plan -->
      <div class="plan-card-right">
        <span class="plan-card-small-hl">APEX</span>
        <p>An invitation-only tier offering unparalleled access to elite networking opportunities, top-tier gigs, and personalized concierge services.</p>
        <div class="button-container">
          <div class="button3">Invitation Only</div>
        </div>
        <ul class="plan-list">
          <li>Access to Advances</li>
          <li>Create Your own arena-scale live show</li>
          <li>Create Your own festival</li>
          <li>Custom Placements Strategy</li>
          <li>Advanced Booking Analytics</li>
          <li>Access to Brand & Sync pitching</li>
          <li>Enroll qualified events into Spotify's Event Portal</li>
          <li>Dedicated artist relations support</li>
          <li>Personalized marketing & rollout strategy</li>
          <li>Personal Gigz customer support representative</li>
          <li>Mentorship from our in-house team</li>
          <li>Unlimited access to GratiaLink</li>
        </ul>
      </div>
    </div>
  </div>
</template>


<script>
import { ref } from 'vue'
export default {
  name: 'ArtistsPlanSection',
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


.plan-container {
  margin-top: -250px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
  background: #000000;
  min-height: 2000px;  // Use min-height instead of height
  width: 100%;
  overflow: hidden;  // Add overflow hidden or auto based on your needs
}

.trans {
  transform: rotate(180deg);
}
.lower-transtion {
  margin-top: 50px;
  background: #ffffff;
}
.comp-container {
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
.button-container {
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

.button1, .button2, .button3 {
  margin-top: 20px;
  width: 150px;
  height: 40px;
  border-radius: 48.79px;
  text-align: center;
  justify-content: center;
  font-size: 12px;
  padding-top: 10px;
  font-weight: 700;
}

.button1 { background: #35BCBC; color: #000000; }
.button2 { background: #5E268B; color: #ffffff; }
.button3 { background: #000000; color: #ffffff; }

.plan-list {
  padding-left: 12px;
  padding-bottom: 1.25rem;
  text-align: center; // Align text to the center of its container
  display: flex; // Enables flexbox
  flex-direction: column; // Stack children vertically
  align-items: center; // Center-align the flex items vertically in the container


}

.plan-container {
  margin-top: -660px;
  justify-content: center;
  align-items: center;
  text-align: center;
  background: #000000;

}
.plan-card-left {
  height: 1100px;
  max-width: 30%;
  margin-top: 20px;
  margin: 1rem;
  color: #ffffff;
  background: #262626;
  text-align: left;
  border: 0.74px solid black;
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
  li {
  font-weight: 800;
  font-size: 12px;
  list-style-type: disc;
  margin-top: 20px;
  padding-right: 85px; // Adjust padding as needed
  width: 140%; // Increase the width of the ul element
  display: flex;
  flex-direction: column;
  align-items: center;
  box-sizing: border-box; // Ensures padding and border are included in the width
  font-family: "LabGrostesque", sans-serif;
  padding-left: 12px;
  padding-bottom: 1.25rem;
  text-align: center; // Align text to the center of its container
  line-height: 6;  // Good line spacing for readability
  
}
}
.plan-card-right {
  height: 1200px;
  max-width: 30%;
  color: #ffffff;
  margin-top: 20px;
  margin: 1rem;
  // Updated radial gradient with adjusted size to make it wider
  background: radial-gradient(circle at center, #D4AF37 0%, #000000 83%) no-repeat;
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
  li {
    font-weight: 600;
  list-style-type: disc;
  margin-top: 20px;
  padding-right: 60px; // Adjust padding as needed
  width: 140%; // Increase the width of the ul element
  display: flex;
  flex-direction: column;
  align-items: center;
  box-sizing: border-box; // Ensures padding and border are included in the width
  font-family: "LabGrostesque", sans-serif;
  font-size: 13px;
  padding-left: 12px;
  padding-bottom: 1.25rem;
  text-align: center; // Align text to the center of its container
  line-height: 1.8;  // Good line spacing for readability
  
}
}
.plan-card-center {
  height: 1100px;
  max-width: 30%;
  color: #ffffff;
  margin-top: 20px;
  margin: 1rem;
  // Updated radial gradient with adjusted size to make it wider
  background: radial-gradient(circle at center, #000000 0%, #5E268B 150%) no-repeat;
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
  li {
    font-weight: 600;
  list-style-type: disc;
  margin-top: 20px;
  padding-right: 60px; // Adjust padding as needed
  width: 140%; // Increase the width of the ul element
  display: flex;
  flex-direction: column;
  align-items: center;
  box-sizing: border-box; // Ensures padding and border are included in the width
  font-family: "LabGrostesque", sans-serif;
  font-size: 13px;
  padding-left: 12px;
  padding-bottom: 1.25rem;
  text-align: center; // Align text to the center of its container
  line-height: 2.5;  // Good line spacing for readability
  
}
}

.plan-button {
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
.plan-card-container {
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
.plan-card-small-hl {

  font-family: "LabGrostesque", sans-serif;
  font-weight: bold;
  font-size: 40px; // Increased font size for better visibility
  line-height: 29px;
  text-align: center; // Centers the text horizontally
  display: block; // Ensures the span behaves like a block element for centering
  margin: 0 auto; // Adds automatic margins on both sides to aid in centering
  padding: 10px 0; // Adds vertical padding for better spacing

}

.plan-headline {
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
