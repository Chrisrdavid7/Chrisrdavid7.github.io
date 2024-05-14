<template>
  <div class="artist-header-container">
    <div class="artist-header-content">
      <div class="artist-logo-container">
        <router-link to="/">
          <img src="../assets/WhiteGigzLogo.png" alt="Gigz Logo" />
        </router-link>
      </div>
      <div class="artist-action-container">
        <div class="artist-action-container-inner">
          <router-link to="/artists" class="for-artists">FOR ARTISTS</router-link>
          <a @click="openLoginModal" class="login-text">LOGIN</a>
          <a @click="openSignUpModal" class="sign-up">SIGN UP</a>
        </div>
      </div>
    </div>]
  </div>
</template>

<script>
export default {
  name: 'ArtistsPageHeaderExport',
  methods: {
    scrollMeTo() {
      let element = document.getElementById("mc_embed_signup");
      element.scrollIntoView({behavior: "smooth", block: "end"});
    },
    openLoginModal() {
      this.$router.push('/login'); 
    },
    openSignUpModal() {
      this.$router.push('/signup'); 
    }
  }
}
</script>



<style lang="scss">

@font-face {
  font-family: 'Lab Grotesque';
  src: url('/media/fonts/LabGrotesque/LabGrotesqueBold.woff') format('woff');
  font-weight: bold;
  font-style: normal;
}

.artist-header-container {
  font-family: 'Lab Grotesque', sans-serif;
  font-weight: bold; // This will use the bold weight as defined in @font-face
  box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.1);
  background: transparent;
  display: flex;
  justify-content: center;
  position: absolute;
  height: 80px;
  z-index: 1000;
  width: 100%;
  align-items: center;
  margin-top: 100px;
}

.artist-header-content {
  display: flex;
  justify-content: space-between;
  align-items: center; /* Ensures all content is centered vertically */
  height: 100%;
  max-width: 1276px;
  width: 80%;
}

.artist-logo-container {
  margin: 1px 0 0 -25px; /* Adjusted margin to shift logo to the left */
  max-width: 60px; /* Adjusted max width of the logo */
  width: 100%;
  img {
    max-width: 100%; /* Ensures image scales within container */
    height: auto;
  }
}

.artist-action-container {
  flex: 1; /* Flex-grow to push other elements */
  display: flex;
  justify-content: flex-end; /* Aligns the actions to the end */
}

.artist-action-container-inner {
  display: flex;
  justify-content: space-evenly; /* Even spacing applied here */
  align-items: center; /* Ensures vertical centering */
  min-width: 280px; /* Ensures a minimum width for layout stability */
}

.artist-action-container-inner a, .action-container-inner button {
  font-size: 12px; /* Font size set here */
  font-weight: 700;
  text-decoration: none;
  cursor: pointer;
  border: none;
  padding: 10px 20px;
}

.for-artists {
  margin-right: -20px; /* Negative margin to bring closer to the next button */
  color: #ffffff; /* White color for text */
  background: none; /* No background for a cleaner look */
}

.login-text {
  color: #CDB776; /* Specific color for login text */
  background: none; /* No background for login button */
}

.sign-up {
  color: #000000; /* Text color for sign up button */
  background: #ffffff; /* White background for sign up button */
  border-radius: 5px; /* Rounded corners for aesthetic */
  padding: 0 10px; /* Padding inside the button */
}

</style>
