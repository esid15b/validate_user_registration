<template>
    <div class="navbar">
      <div class="navbar-left">
        <img src="path/to/toyota-logo.png" alt="Toyota Logo" class="logo" />
        <span class="brand">Toyota Mobility Solutions</span>
        <span class="beta">BETA</span>
      </div>
      <div class="navbar-center">
        <a href="#" class="nav-link">About</a>
        <div class="dropdown">
          <a href="#" class="nav-link">Services</a>
          <div class="dropdown-content">
            <a href="#">Service 1</a>
            <a href="#">Service 2</a>
            <a href="#">Service 3</a>
          </div>
        </div>
        <a href="#" class="nav-link">Contact</a>
      </div>
      <div class="navbar-right">
        <a href="#" class="login">Login</a>
        <button class="register">Register</button>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    name: 'Navbar'
  }
  </script>
  
  <style scoped>
  .navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 20px;
    background-color: white;
    border-bottom: 1px solid #ddd;
  }
  
  .navbar-left {
    display: flex;
    align-items: center;
  }
  
  .logo {
    height: 40px;
    margin-right: 10px;
  }
  
  .brand {
    font-size: 18px;
    font-weight: bold;
  }
  
  .beta {
    background-color: #333;
    color: white;
    padding: 2px 6px;
    margin-left: 5px;
    font-size: 12px;
    border-radius: 3px;
  }
  
  .navbar-center {
    display: flex;
    align-items: center;
  }
  
  .nav-link {
    margin: 0 15px;
    text-decoration: none;
    color: black;
    font-size: 16px;
  }
  
  .dropdown {
    position: relative;
    display: inline-block;
  }
  
  .dropdown-content {
    display: none;
    position: absolute;
    background-color: white;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
  }
  
  .dropdown:hover .dropdown-content {
    display: block;
  }
  
  .dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
  }
  
  .dropdown-content a:hover {
    background-color: #ddd;
  }
  
  .navbar-right {
    display: flex;
    align-items: center;
  }
  
  .login {
    margin-right: 15px;
    text-decoration: none;
    color: black;
    font-size: 16px;
  }
  
  .register {
    background-color: red;
    color: white;
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    border-radius: 5px;
  }
  </style>
  