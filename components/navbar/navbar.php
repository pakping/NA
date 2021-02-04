<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">The Na Thailand</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      <span class="navbar-toggler-icon"></span>
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " href="index.php" >หน้าหลัก</a>
        </li>
        <li class="nav-item">
        <a  class="nav-link" class="link-primary" href="app/library.php">สินค้าของเรา</a>
        </li>
       
        <li class="nav-item">
        <a class="nav-link" href="app/about.php">เกี่ยวกับเรา</a>
        </li>
      </ul>
      <ul class ="navbar-nav ml-auto">
      <button  class="btn" >เข้าสู่ระบบ</button>
      </ul>
    </div>
  </div>
</nav>

<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Pacifico&family=Poppins:ital,wght@0,300;0,400;1,400&display=swap');
html ,body {
  font-family: 'Poppins';
  font-size: 15px;
  line-height: 1.5;
  box-sizing: border-box;
  margin: 0;
  top: 0;
  left: 0;
}
a{
   text-decoration:  none;
   color: rgba(34,54,69,.7);
   font-weight: 500;
}
a:hover{
  color: #e74c3c;
}
ul{
  list-style-type: none;
}
.navbar{
  background: white;
  padding: 1.5rem 1.5rem;;
  min-height: 12vh;
  
}
.navbar .navbar-brand a {
  padding: 1rem 0;
  display: block;
  text-decoration: none;
}
.navbar-brand{
  font-family: 'Pacifico', cursive;
  font-size: 2.5rem;
  color: #e74c3c;
}
.navbar-toggler{
  background: #e74c3c;
  border:none;
  padding: 10px 6px;
  outline: none;
}
.navbar-toggler span{
  display: block;
  width: 22px;
  height: 2px;
  border: 1px;
  background: #fff ;
}
.navbar-toggler span + span {
  margin-top: 4px;
  width: 18px;
  margin-left: 4px;
}
.navbar-toggler span + span + span {
  width: 10px;
  margin-left: 10px;
}
.navbar-expand-lg .navbar-nav .nav-link {
  padding:  2rem 1.2rem;
  font-size: 1.2rem;
  position: relative;

}
.navbar-expand-lg .navbar-nav .nav-link:hover{
  border-top:4px solid #e74c3c;
}
.navbar-expand-lg .navbar-nav .nav-link:active{
  border-top:4px solid #e74c3c;
  color: #e74c3c;
}
.navbar-nav button{
  padding: 1.2rem 0;
}
 
.navbar-nav .btn{
  background-color: #e74c3c;
  color: white;
  border-radius: 25;
  padding: 0.5rem 1.2rem;
  font-size: 1.2rem;
  margin-top: -10px;
}
.navbar-nav .btn:hover{
  background-color: #0a3d62 ;
}
</style>
