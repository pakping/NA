<!-- 
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <img src="https://www.thenathailand.com/wp-content/uploads/2020/11/Nathailand-120x64-1.png" alt="" width="100" height="52">
    <a class="navbar-brand" >The Na Thailand</a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
        <a class="nav-link"  href="../index.php" >หน้าหลัก</a>
        </li>
        <li class="nav-item">
        <a  class="nav-link" class="link-primary" href="../app/library.php">สินค้าของเรา</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="../app/about.php">เกี่ยวกับเรา</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="../auth/login.php">เข้าสู่ระบบ</a>
                </li>
            </ul>
    </div>
  </div>
</nav>
 -->

 <nav class="navbar navbar-expand-lg header-nav fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">The na thailand</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span></span>
      <span></span>
      <span></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
       <li class="nav item">
            <a  class="nav-link" href="#"> ME US </a>
       </li>
      </ul>
      <ul class ="navbar-nav ml-auto">
      <button class="btn" >Login</button>
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
  overflow: hidden;
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
  padding: 3rem 2rem;
  height: 0rem;
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
  font-size: 1.4rem;
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
  padding: 1rem 1.5rem;
  font-size: 1.2rem;
  margin-top: -10px;
}
.navbar-nav .btn:hover{
  background-color: #0a3d62 ;
}

</style>