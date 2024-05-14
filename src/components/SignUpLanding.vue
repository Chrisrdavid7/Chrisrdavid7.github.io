<template>
    <div class="landing-container">
      <div class="photo-section">
        <img src="../assets/landingImage.png" alt="Landing Photo" class="full-width-image">
      </div>
      <div class="signup-section">
        <div class="top-transition">
          <img src="../assets/topPurple.png" alt="Decorative Transition" class="top-trans">
        </div>
        <h1 class="signup-header">Sign up</h1>
        <div class="names-container">
          <div class="name-field">
            <label for="first-name">First Name</label>
            <input id="first-name" type="text" class="first-name" placeholder="First Name" v-model="firstName" required>
          </div>
          <div class="name-field">
            <label for="last-name">Last Name</label>
            <input id="last-name" type="text" class="last-name" placeholder="Last Name" v-model="lastName" required>
          </div>
        </div>
        <div class="additional-info">
          <label for="email">Email ID</label>
          <input id="email" class="email" type="email" placeholder="Email" v-model="email" required>
          <label for="password">Password</label>
          <input id="password" class="password" type="password" placeholder="Password" v-model="password" required>
          <label for="confirm-password">Confirm Password</label>
          <input id="confirm-password" class="password-confirmed" type="password" placeholder="Confirm Password" v-model="confirmPassword" required>
        </div>
        <div class="checkbox-container">
           <label class="custom-checkbox">
           <input type="checkbox" id="remember" v-model="rememberCredentials">
           <span class="checkmark"></span>  Remember Credentials</label>
        </div>
        <div class="checkbox-container">
        <label class="custom-checkbox">
          <input type="checkbox" id="terms" v-model="agreeTerms">
          <span class="checkmark"></span> I hereby confirm that I have read all the Terms & Conditions carefully and I agree with the same.
        </label>
      </div>
        <button type="submit" @click="onSubmit">Sign Up</button>
        <p class="login-prompt">Already have an account? <a href="/login">Login</a></p>
        <div class="bottom-transition">
          <img src="../assets/bottomPurple.png" alt="Decorative Transition" class="bottom-trans">
        </div>
      </div>
    </div>
  </template>
  

  <script>
import { reactive, toRefs } from 'vue';
import { useRouter } from 'vue-router';

export default {
  name: 'SignUpLanding',
  setup() {
    const router = useRouter();
    const state = reactive({
      firstName: '',
      lastName: '',
      email: '',
      password: '',
      confirmPassword: '',
      rememberCredentials: false,
      agreeTerms: false
    });

    const onSubmit = () => {
      if (state.password !== state.confirmPassword) {
        alert("Passwords do not match!");
        return;
      }
      if (!state.agreeTerms) {
        alert("You must agree to the terms and conditions.");
        return;
      }

      // If validation passes, proceed to navigate
      console.log('Sign Up with:', state.firstName, state.lastName, state.email, state.password);
      router.push('/whoareyou');
    };

    // Using toRefs to ensure reactivity is preserved when passing state properties individually
    return { ...toRefs(state), onSubmit };
  }
}
</script>

  
  


  <style scoped>

@font-face {
  font-family: 'Quicksand';
  src: url('/media/fonts/Quicksand/Quicksand_Bold.woff') format('woff');
  font-weight: normal; 
  font-style: normal;
}

.names-container {
  margin-top: 50px;
  display: flex;
  justify-content: space-between; 
  width: 100%;
  padding: 0 20px; 
}


.name-field {
  width: 300px; 
}

.first-name{
    background-color: #000000; 
    color: #ffffff; 
    font-size: 18px; 
    border: 1px solid #D4AF37; 
    border-radius: 55.82px; 
    padding: 10px 20px; 
    width: 100%; 
    box-sizing: border-box; 

}
.last-name{
    background-color: #000000; 
    color: #ffffff; 
    font-size: 18px; 
    border: 1px solid #D4AF37; 
    border-radius: 55.82px; 
    padding: 10px 20px; 
    width: 100%; 
    box-sizing: border-box; 

}
.email {
    height: 50px;  
    width: 670px; 
    background-color: #000000; 
    color: #ffffff; 
    font-size: 18px; 
    border: 1px solid #35BCBC; 
    border-radius: 55.82px; 
    padding: 10px 20px; 
    box-sizing: border-box; 
}
.password {
    height: 50px; 
    width: 670px;
    background-color: #000000; 
    color: #ffffff;
    font-size: 18px; 
    border: 1px solid #D4AF37; 
    border-radius: 55.82px; 
    padding: 10px 20px; 
    box-sizing: border-box; 
}


.password-confirmed {
    height: 50px; 
    width: 670px; 
    background-color: #000000; 
    color: #ffffff; 
    font-size: 18px; 
    border: 1px solid #35BCBC; 
    border-radius: 55.82px; 
    padding: 10px 20px; 
   
    box-sizing: border-box; 
}
.name-field:first-child {
  margin-right: 50px; /* Adds 50px margin to the right of the first name field */
}


.first-name, .last-name {
  flex: 1; /* Each takes half of the container width */

}


  label {

  display: block;
  margin-top: 10px;
  color: #ffffff;  /* Assuming a light color for visibility on a dark background */
  font-size:20px;  /* Appropriate font size for labels */
  font-weight: 200px;
  letter-spacing: 3%;
  margin-bottom: 10px;  /* Space between label and input */
}



.signup-header {
  position: absolute;
  top: 0;
  width: 100%;
  text-align: center;
  color: #FFF;
  font-size: 45px;
  font-family: 'Quicksand', sans-serif; /* Ensures Quicksand is used, falling back to sans-serif if not found */
  font-weight: 700; 
  z-index: 11;
  padding-top: 1px;
}
 html, body {
  margin: 0;
  padding: 0;
  height: 100%;
  width: 100%;
  overflow: hidden;  
}

.landing-container {
  display: flex;
  height: 100vh;
  width: 100vw;
  overflow: hidden;
}

.photo-section {
  flex: 1;  
  width: 50%;  
  height: 100%;  
  margin: 0;  
  display: flex;
  align-items: center;
  justify-content: center;
}


.full-width-image {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.signup-section {
  background-color: #000000;
  width: 50%;
  height: 100%;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  margin-left: -20px;  
  padding: 20px;
  box-sizing: border-box;
  position: relative;  
  z-index: 2; 
  
}



input { 

  width: 100%;
  padding: 30px;
  margin-bottom: 10px;
  box-sizing: border-box;
  background: #ffffff;
  color: #333333;
}



.custom-checkbox {
    margin-top: 15px;
  position: relative;
  padding-left: 35px; 
  cursor: pointer;
  display: inline-block; 
  color: #ffffff; 
  font-size: 11px;
}

.custom-checkbox input[type="checkbox"] {
  opacity: 0; 
  cursor: pointer;
  height: 0;
  width: 0;
}

.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #000000; /* Black background */
  border: 2px solid #7A0BC0; /* Purple border */
  box-sizing: border-box;
}

.custom-checkbox:hover input ~ .checkmark {
  background-color: #333; /* Slightly lighter black on hover */
}

.custom-checkbox input:checked ~ .checkmark {
  background-color: #000000; /* Black background when checked */
}

/* Style the checkmark/indicator (hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
.custom-checkbox input:checked ~ .checkmark:after {
  display: block;
}

/* Style the checkmark/indicator */
.custom-checkbox .checkmark:after {
  left: 9px;
  top: 5px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}

button {
  width: 200px; /* Specific width for the button */
  height: 50px;
  padding: 0px 20px; /* Padding around the text inside the button */
  margin: 20px 20px 10px 20px; /* Top, right, bottom, and left margins */
  cursor: pointer; /* Changes the cursor to a pointer when hovering over the button */
  background: linear-gradient(to bottom right, #7A0BC0 18%, #FA58B6 90%); 
  color: #ffffff;
  font-size: 19px;
  border: none;
  border-radius:15.82px; 
  z-index: 11;
}

.login-prompt {
  margin-top: 0px;
  font-size: 9px;
  color: #ffffff; 
  text-align: center;
}

.login-prompt a {
  color: #FA58B6; 
  text-decoration: none;
}

.login-prompt a:hover {
  text-decoration: underline; 
}





.top-transition, .bottom-transition {
  width: 100%; 
  position: absolute;
  left: 0;
  z-index: 10;
}


.top-trans, .bottom-trans {
  width: 100%;
  height: auto;
}


.top-transition {
  top: 0;
}
  
.bottom-transition {
  bottom: 0; /* Align to the bottom of the signup section */
}
</style>
