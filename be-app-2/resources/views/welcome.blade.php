
<style>
html {
  height: 100%;
}

body {
  margin: 0;
  padding: 0;
  background: #172031
}

* {
  font-family: sans-serif;
}

.login-box {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 400px;
  padding: 40px;
  transform: translate(-50%, -50%);
  background: rgba(0, 0, 0, .5);
  box-sizing: border-box;
  border-radius: 10px;
}

.login-box h2 {
  margin: 0 0 30px;
  padding: 0;
  color: #fff;
  text-align: center;
}

.login-box .user-box {
  position: relative;
}

.login-box .user-box input {
  width: 100%;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  margin-bottom: 30px;
  border: none;
  border-bottom: 1px solid #fff;
  outline: none;
  background: transparent;
}

.login-box .user-box label {
  position: absolute;
  top: 0;
  left: 0;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  pointer-events: none;
  transition: .4s;
}

.login-box .user-box input:focus~label,
.login-box .user-box input:valid~label {
  top: -20px;
  left: 0;
  color: #03e9f4;
  font-size: 12px;
}

.forget_pass {
  font-size: 12px;
  color: #3F48CC;
  float: right;
}

.btn_submit {
  color: #fff;
  position: relative;
  display: inline-block;
  padding: 10px 20px;
  font-size: 13px;
  font-weight: 700;
  text-decoration: none;
  overflow: hidden;
  transition: .3s;
  margin-top: 20px;
  letter-spacing: 2px
}

.btn_submit:hover {
  background: #1A4C91;
  color: rgb(10, 11, 21);
  border-radius: 5px;
}

.btn_submit span {
  position: absolute;
  display: block;
}

.btn_submit span:nth-child(1) {
  bottom: 0;
  right: 100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(90deg, transparent, #03e9f4);
  animation: btn-anim 1s linear infinite;
  animation-delay: .4s
}

@keyframes btn-anim {
  0% {
    right: 100%;
  }

  50%,
  100% {
    right: -100%;
  }
}

</style>
<div class="login-box">
  <h2>Login</h2>
  <form>
    <div class="user-box">
      <input type="text" name="" required="">
      <label>Username</label>
    </div>
    
    <div class="user-box">
      <input type="password" name="" required="">
      <label>Password</label>
    </div>
    
    <div>
      <a herf="a" class="forget_pass">Forgot Password ? </a>
    </div>
    
    <a class="btn_submit" herf="a">

    </form>
</div> 
</body>
</html>
