<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">

	<head>
		<style>
			@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
body{
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 10px;
  background-image: url("<?php

use CodeIgniter\HTTP\Message;

 echo base_url(); ?>/public/assets/img/bgImgBlack.jpg");
  /* background: linear-gradient(135deg, #71b7e6, #9b59b6); */
}
.container{
  max-width: 700px;
  width: 100%;
  background-color: #fff;
  padding: 25px 30px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
}
.container .title{
  font-size: 25px;
  font-weight: 500;
  position: relative;
}
.container .title::before{
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 30px;
  border-radius: 5px;
  background: linear-gradient(135deg, #ed0a00, #ed0a00);
}
.content form .user-details{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 20px 0 12px 0;
}
form .user-details .input-box{
  margin-bottom: 15px;
  width: calc(100% / 2 - 20px);
}
form .input-box span.details{
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
}
.user-details .input-box input{
  height: 45px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}
.user-details .input-box input:focus,
.user-details .input-box input:valid{
  border-color: #9b59b6;
}
 form .gender-details .gender-title{
  font-size: 20px;
  font-weight: 500;
 }
 form .category{
   display: flex;
   width: 80%;
   margin: 14px 0 ;
   justify-content: space-between;
 }
 form .category label{
   display: flex;
   align-items: center;
   cursor: pointer;
 }
 form .category label .dot{
  height: 18px;
  width: 18px;
  border-radius: 50%;
  margin-right: 10px;
  background: #d9d9d9;
  border: 5px solid transparent;
  transition: all 0.3s ease;
}
 #dot-1:checked ~ .category label .one,
 #dot-2:checked ~ .category label .two,
 #dot-3:checked ~ .category label .three{
   background: #ed0a00;
   border-color: #d9d9d9;
 }
 form input[type="radio"]{
   display: none;
 }
 form .button{
   height: 45px;
   margin: 35px 0
 }
 form .button input{
   height: 100%;
   padding: 10px;
   /* width: 100%; */
   border-radius: 5px;
   border: none;
   color: #fff;
   font-size: 18px;
   font-weight: 500;
   letter-spacing: 1px;
   cursor: pointer;
   transition: all 0.3s ease;
   /* background: linear-gradient(135deg, #71b7e6, #9b59b6); */
   background-color: #ed0a00;
 }
 form .button input:hover{
  /* transform: scale(0.99); */
  background-color:#000;
  }
 @media(max-width: 584px){
 .container{
  max-width: 100%;
}
form .user-details .input-box{
    margin-bottom: 15px;
    width: 100%;
  }
  form .category{
    width: 100%;
  }
  .content form .user-details{
    max-height: 300px;
    overflow-y: scroll;
  }
  .user-details::-webkit-scrollbar{
    width: 5px;
  }
  }
  @media(max-width: 459px){
  .container .content .category{
    flex-direction: column;
  }
}

	</style>
    <meta charset="UTF-8">
    <title>Seone Academy Registration Form</title>
    <link rel="icon" href="<?php echo base_url(); ?>/public/assets/img/favicon.png">
    <link rel="stylesheet" href="style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form action="<?php echo base_url("registration"); ?>" method="POST">
        
        <?php 
            // Display Response
            if(session()->has('message')){
            ?>
                <div class="alert <?= session()->getFlashdata('alert-class') ?>">
                  <?= session()->getFlashdata('message') ?>
                </div>
            <?php
            }
        ?> 
                  

        <div class="user-details">
          <div class="input-box">
            <span class="details" for="full_name">Full Name</span>
            <input type="text" name="full_name" id="full_name" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="addr" for="addr">Address</span>
            <input type="text" name="addr" id="addr" placeholder="Enter your Address" required>
          </div>
          <div class="input-box">
            <span class="details" for="email">Email</span>
            <input type="email" name="email" id="email" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details" for="phone">Phone Number</span>
            <input type="text" name="phone" id="phone" placeholder="Enter your number" required>
          </div>
        </div>
        
        <div class="button">
          <input type="submit" value="Register">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
