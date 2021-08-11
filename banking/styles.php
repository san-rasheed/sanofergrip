<style>
html,body {
    margin:0;
    padding:0;
    width: 100vw;
    overflow-x:hidden;
    font-family: 'Merriweather Sans', sans-serif;

}
#top{
  background: url('images/top.jpg') no-repeat center;
  background-size:cover;
  background-position: 0 0;
  height: 750px;
  max-height: 1150px;
}
nav{
      font-weight: bolder;
  /* background: brown; */
    height: 100px;
    letter-spacing: 2px;
}
.navbar-brand,nav li{
      font-size: 1.4rem;
      padding-right: 20px;
      color: white;
          text-shadow: 1px 2px 5px white;
}

.heading{
  text-shadow: 3px 2px 5px black;
  margin-top: 60px;
    text-align: center;
    font-size: 3rem;
}
#about{
  width: 88vw;
font-size: 1.5rem;
padding: 100px;
}
h1{
  color: brown;

}
.table{
  box-shadow: 0 3px 15px 0 saddlebrown;
  margin-top: 20px;
  width: 80%;
margin-bottom: 1rem;
color: white;
margin-left: 100px;
text-align: center;
/* margin-right: 50px; */
background: brown;
}

.btn{
  background: bisque;

}
.btn:hover{
  background: antiquewhite;
  color: black;
}
.table .thead-light th {
    background-color: bisque;
  }
  .input-group-prepend span{
  width: 40px;
  background-color: bisque;;
  color: black;
  border:0 !important;
  }
#contact .input-group-prepend span,#contact   .login_btn{
  background: white;
  color: black
}
#contact   .login_btn:hover{
  color: white;
  background: black;
}
#contactsvg:not(:root).svg-inline--fa {
  color: white
}

  input:focus{
  outline: 0 0 0 0  !important;
  box-shadow: 0 0 0 0 !important;

  }

  .card
  {
     box-shadow: 0 3px 15px 0 saddlebrown;
  height: 47vh;
  margin-top: 30px;
  margin-bottom: auto;
  width: 48vw;
  background-color: rgba(0,0,0,0.3) !important;
  }
  .login_btn{
  color: white;
  background-color: brown;
  width: 110px;
  }

  .login_btn:hover{
  color: black;
  background-color: white;
  }

  .container{
height: 100%;
align-content: center;
padding-top: 100px;
}
.container h1{
  margin-top: 10px;
  color: black;
  text-shadow: 1px 2px 3px black;
  text-align: center;

}
#success{
  box-shadow: 3px 3px 15px 0 saddlebrown;
  padding: 20px;
  text-align: center;
    margin-top: 100px;
    width: 25vw;
    background: burlywood;
    color: black;
    margin-left: 600px;
}
#btndiv{
  display:flex;
  justify-content: space-between;

}
svg:not(:root).svg-inline--fa{

  margin-top: auto;
  margin-right: 30px;
}

.head{
  flex-wrap: wrap;
  display: flex;
    justify-content: center;
}
.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}
#navbarr {
  overflow: hidden;
  background: brown;
  opacity: 0.8;

}
#navbarr a:hover{
  color:rgba(255, 255, 255, 0.5);


}
/* Navbar links */
#navbarr a {
  float: left;
  display: block;
  color: white;

  text-shadow: 2px 2px 10px white;
  text-align: center;
  padding: 14px;
  text-decoration: none;
}

/* Page content */
.content {
  padding: 16px;
}
/* Add some top padding to the page content to prevent sudden quick movement (as the navigation bar gets a new position at the top of the page (position:fixed and top:0) */
.sticky + .content {
  padding-top: 60px;
}

@media screen and (max-width:980px){

#about{
  font-size: revert;
}
  #tabdiv table{
    margin-left: 18px;
    font-size: : xx-small;
  }
  #navbarr{
    background: transparent;
    height: 300px;


  }
  #navbarr a,.navbar-dark .navbar-toggler{

    color: black;
    position: relative;
    bottom: 40px;
    line-height: 2px;
  }

  .table td, .table th {
    padding: 0.5rem;
    font-size: 0.5rem;
  }
  .heading{
    position: relative;
top: 20px;
  }
}













</style>
