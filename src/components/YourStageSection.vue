<template>
  <div class="YourStageContainer">
    <div class="headline">
      <h1>Your Stage, Anytime, Anywhere:</h1>
      <h2>Book and Create your own show on-the-go</h2>
      <h3>Tap into all the tools you need on any device. Sign up now to book shows, apply for Exclusive brand & sync deals, manage payouts, and more.</h3>     
      <div class="SignUpNowButton">Sign Up Now</div>
    </div>
    <div class="image">
      <img class="dashboard-image" src="../assets/MacPic.png"/>
    </div>
  </div>
</template>


<style lang="scss">


@font-face {
  font-family: 'Lab Grotesque';
  src: url('/media/fonts/LabGrotesque/LabGrotesqueBold.woff') format('woff');
  font-weight: bold;
  font-style: normal;
}

.YourStageContainer {
  display: flex;
  flex-direction: row;  
  justify-content: flex-start; 
  align-items: center;  
  width: 100%;
  background: #000000;
  padding-top: 20px;
}

.headline {
  text-align: left;
  color: #ffffff;
  font-family: 'Lab Grotesque', sans-serif;
  flex: 0 1 60%; 
  box-sizing: border-box;
  
  margin-left: 200px; 

 
  h1 {
    font-size: 2.5rem;
    font-weight: bold;
   line-height: 60px;
    width: 500px;
  }

  h2 {
    font-size: 1.5rem;
    font-weight: bold;
    width: 650px;
  }

  h3 {
    letter-spacing: 2%;
    font-size: 1.1rem;
    font-weight: normal;
    margin-bottom: 0.3rem;
    width: 500px;
  }
}
.SignUpNowButton{
  background-color: #CDB776;
  color: #ffffff;
  margin-top: 20px;
  width: 150px;
  height: 40px;
  text-align: center;
  justify-content: center;
  font-size: 14px;
  padding-top: 10px;
  font-weight: 700;
}


.image {
  flex: 0 1 50%; 
  display: flex;
  align-items: center;  
  justify-content: flex-end; 
  margin-right: 200px; 
  padding-top: 20px;

  img {
    max-width: 130%;
    height: auto; 
  }
}


</style>
