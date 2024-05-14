<template>
    <div class="landing-container">
      <h2 class="heading">Who Are You?</h2>
      <div class="role-container">
        <div class="role" 
             :class="{ 'selected': selectedRole === 'artist' }" 
             @click="selectRole('artist')">
          <img src="../assets/artist.png" alt="Artist">
          <p>Artist</p>
        </div>
        <div class="role" 
             :class="{ 'selected': selectedRole === 'manager' }" 
             @click="selectRole('manager')">
          <img src="../assets/manager.png" alt="Manager">
          <p>Manager</p>
        </div>
        <div class="role" 
             :class="{ 'selected': selectedRole === 'supporter' }" 
             @click="selectRole('supporter')">
          <img src="../assets/supporter.png" alt="Supporter">
          <p>Supporter</p>
        </div>
      </div>
      <button :class="{ 'active': isActive }" @click="completeProfile">Complete Profile</button>

    </div>
  </template>
  
  <script>
  export default {
  name: 'WhoAreYouLanding',
  data() {
    return {
      selectedRole: null,
      isActive: false,  // Tracks whether the button is in an 'active' state
    };
  },
  methods: {
    selectRole(role) {
      this.selectedRole = role;
      console.log(`Role selected: ${role}`);
    },
    completeProfile() {
      this.isActive = !this.isActive;  
      console.log('Completing profile...');
    }
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
  
  .landing-container {
    background: #000000;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100vh;
    background-image: url('../assets/background.png');
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
  }
  
  .heading {
    font-family: 'Lab Grotesque', sans-serif;
    font-size: 50px;
    font-weight: 600;
    letter-spacing: 4%;
    color: #FFF;
    margin-top: 10vh;
    margin-bottom: 2vh;
    text-align: center;
  }
  
  .role-container {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: auto;
    margin-bottom: auto;
  }
  
  .role {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin: 0 80px;
    cursor: pointer;
  }
  
  .role.selected {
    transform: scale(1.1);
    border: 0.5px solid #35BCBC; 
  }
  
  .role img {
    width: 250px;
    height: 250px;
    border-radius: 50%;
    object-fit: cover;
  }
  
  .role p {
    font-size: 40px;
    margin-top: 10px;
    color: #FFF;
    text-align: center;
  }
  .role:hover {
  transform: scale(1.1);
  transition: all 0.3s ease-in-out;
}
button {
  margin-bottom: 100px;
  padding: 10px 20px;
  font-size: 16px;
  width: 200px;
  background-color: #000000;
  border: 1px solid #c0961a;
  color: white;
  cursor: pointer;
  transition: background-color 0.3s, color 0.3s;  
}

button:hover, button.active {
  background-color: #c0961a;  
  color: #000000;  
}

  </style>
  