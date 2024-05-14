<template>
  <div class="login-page-wrapper">
    <div class="login-content-section">
      <img src="../assets/GigzLogo.png" alt="Gigz Logo" class="logo-image">
      <h2 class="login-header">Log In to Gigz</h2>
      <p class="signup-link-wrapper">
        Don't have a Gigz account? <a href="/signup" class="signup-link">Sign Up</a>
      </p>
      <div class="input-wrapper">
        <label for="user-email">EMAIL ADDRESS</label>
        <input
          id="user-email"
          type="email"
          placeholder="ENTER YOUR EMAIL ADDRESS"
          v-model="email"
          required
        />
      </div>
      <div class="input-wrapper">
        <label for="user-password">PASSWORD</label>
        <input
          id="user-password"
          type="password"
          placeholder="ENTER YOUR PASSWORD"
          v-model="password"
          required
        />
      </div>
      <button type="submit" @click="loginHandler" class="login-action-button">NEXT</button>
      <p class="reset-password-wrapper">
        <a href="#" class="reset-password-link">Need to reset your password?</a>
      </p>
    </div>
  </div>
</template>

<script>
import { reactive, toRefs } from 'vue';
import { useRouter } from 'vue-router';

export default {
  name: 'LoginInLanding',
  setup() {
    const router = useRouter();
    const state = reactive({
      email: '',
      password: ''
    });

    const loginHandler = () => {
      console.log('Log In with:', state.email, state.password);
      router.push('/whoareyou');
    };

    return { ...toRefs(state), loginHandler };
  }
}
</script>

<style scoped>
@font-face {
  font-family: 'Lab Grotesque';
  src: url('/media/fonts/LabGrotesque/LabGrotesqueBold.woff') format('woff');
  font-weight: bold; 
  font-style: normal;
}

@font-face {
  font-family: 'Lab Grotesque Light';
  src: url('/media/fonts/LabGrotesque/LabGrotesqueLight.woff') format('woff');
  font-weight: normal;
  font-style: normal;
}

.login-page-wrapper {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background-color: #000;
}

.login-content-section {
  text-align: center;
  max-width: 500px; /* Increased max-width for wider text fields */
  width: 100%;
  padding: 20px;
  box-sizing: border-box;
  color: white;
}

.logo-image {
  width: 150px;
  margin-bottom: 20px;
}

.login-header {
  font-family: 'Lab Grotesque', sans-serif;
  font-size: 36px;
  font-weight: bold;
  margin-bottom: 10px;
}

.signup-link-wrapper {
  margin: 10px 0;
  font-size: 14px;
}

.signup-link {
  color: #D4AF37;
  text-decoration: none;
}

.signup-link:hover {
  text-decoration: underline;
}

.input-wrapper {
  margin: 25px 0; /* Increased margin for more spacing */
  text-align: left; /* Align text to the left */
}

label {
  display: block;
  margin-bottom: 5px;
  font-size: 14px;
  color: #888;
}

input {
  width: 100%;
  padding: 15px;
  background-color: #333;
  border: 1px solid #555;
  border-radius: 5px;
  color: #CDB776; /* Set font color to CDB776 */
  font-family: 'Lab Grotesque Light', sans-serif; /* Apply Lab Grotesque Light font */
  font-size: 16px;
  max-width: 450px; /* Set max-width to make inputs wider */
  letter-spacing: 1px; /* Add spacing between letters */
}

input::placeholder {
  color: #CDB776; /* Set placeholder font color to CDB776 */
}

.login-action-button {
  width: 100%;
  padding: 15px;
  background-color: #CDB776;
  border: none;
  border-radius: 5px;
  font-size: 16px;
  color: black;
  cursor: pointer;
}

.login-action-button:hover {
  background-color: #b59432;
}

.reset-password-wrapper {
  margin-top: 20px;
  font-size: 14px;
  text-align: left; /* Align text to the left */
}

.reset-password-link {
  color: #CDB776;
  text-decoration: none;
}

.reset-password-link:hover {
  text-decoration: underline;
}
</style>
