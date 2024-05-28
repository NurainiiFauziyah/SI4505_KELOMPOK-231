<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap");
* {
  box-sizing: border-box;
  padding: 0;
  margin: 0;
}

body {
  font-family: "Poppins", sans-serif;
  font-size: 0.925rem;
}

a {
  text-decoration: none;
}

.container {
  width: 1170px;
  position: relative;
  margin-left: auto;
  margin-right: auto;
  padding-left: 15px;
  padding-right: 15px;
}

.navbar,
.navbar > .container {
  width: 100%;
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-between;
}
@media (max-width: 768px) {
  .navbar,
.navbar > .container {
    display: block;
  }
}

.navbar {
  box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
  background-color: #1B4445;
  padding: 1rem 1.15rem;
  border-bottom: 1px solid #eceef3;
  /*
  |-----------------------------------
  | Start navbar logo or brand etc..
  |-----------------------------------
  */
  /*
  |-----------------------------------
  | Start navbar menu
  |-----------------------------------
  */
}
@media (min-width: 576px) {
  .navbar .container {
    max-width: 540px;
  }
}
@media (min-width: 768px) {
  .navbar .container {
    max-width: 720px;
  }
}
@media (min-width: 992px) {
  .navbar .container {
    max-width: 960px;
  }
}
@media (min-width: 1200px) {
  .navbar .container {
    max-width: 1140px;
  }
}
.navbar .navbar-header {
  display: flex;
  align-items: center;
}
@media (max-width: 768px) {
  .navbar .navbar-header {
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-direction: row-reverse;
  }
}
.navbar .navbar-header .navbar-toggler {
  cursor: pointer;
  border: none;
  display: none;
  outline: none;
}
@media (max-width: 768px) {
  .navbar .navbar-header .navbar-toggler {
    display: block;
  }
}
.navbar .navbar-header .navbar-toggler span {
  height: 2px;
  width: 22px;
  background-color: #fff;
  display: block;
}
.navbar .navbar-header .navbar-toggler span:not(:last-child) {
  margin-bottom: 0.2rem;
}
.navbar .navbar-header > a {
  font-weight: 500;
  color: #fff;
}
.navbar .navbar-menu {
  display: flex;
  align-items: center;
  flex-basis: auto;
  flex-grow: 1;
}
@media (max-width: 768px) {
  .navbar .navbar-menu {
    display: none;
    text-align: center;
  }
}
.navbar .navbar-menu.active {
  display: flex !important;
}
.navbar .navbar-menu .navbar-nav {
  margin-left: auto;
  flex-direction: row;
  display: flex;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none;
}
@media (max-width: 768px) {
  .navbar .navbar-menu .navbar-nav {
    width: 100%;
    display: block;
    border-top: 1px solid #EEE;
    margin-top: 1rem;
  }
}
.navbar .navbar-menu .navbar-nav > li > a {
  color: #fff;
  text-decoration: none;
  display: inline-block;
  padding: 0.5rem 1rem;
}
.navbar .navbar-menu .navbar-nav > li > a:hover {
  color: orange; 
}
@media (max-width: 768px) {
  .navbar .navbar-menu .navbar-nav > li > a {
    border-bottom: 1px solid #eceef3;
  }
}
.navbar .navbar-menu .navbar-nav > li.active a {
  color: orange;
}
.navbar .navbar-menu .navbar-nav .navbar-dropdown .dropdown {
  list-style: none;
  position: absolute;
  top: 150%;
  left: 0;
  background-color: #1B4445;
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  min-width: 160px;
  width: auto;
  white-space: nowrap;
  box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
  z-index: 99999;
  border-radius: 0.75rem;
  display: none;
}
@media (max-width: 768px) {
  .navbar .navbar-menu .navbar-nav .navbar-dropdown .dropdown {
    position: relative;
    box-shadow: none;
  }
}
.navbar .navbar-menu .navbar-nav .navbar-dropdown .dropdown li a {
  color: #3c4250;
  padding: 0.25rem 1rem;
  display: block;
}
.navbar .navbar-menu .navbar-nav .navbar-dropdown .dropdown.show {
  display: block !important;
}
.navbar .navbar-menu .navbar-nav .dropdown > .separator {
  height: 1px;
  width: 100%;
  margin-top: 9px;
  margin-bottom: 9px;
  background-color: #1B4445;
}
.navbar .navbar-dropdown {
  position: relative;
}

.navbar .navbar-header > a span {
  color: #66f;
}

.navbar .navbar-header h4 {
  font-weight: 500;
  font-size: 1.25rem;
}
@media (max-width: 768px) {
  .navbar .navbar-header h4 {
    font-size: 1.05rem;
  }
}

</style>


<nav class="navbar">
  <div class="container">

    <div class="navbar-header">
      <button class="navbar-toggler" data-toggle="open-navbar1">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a href="homepage">
        <h4>F A R M E D I C <span></span></h4>
      </a>
    </div>

    <div class="navbar-menu" id="open-navbar1">
      <ul class="navbar-nav">
        <li class="active"><a href="#">Katalog</a></li>
        <li class="navbar-dropdown">
          <a href="#" class="dropdown-toggler" data-dropdown="my-dropdown-id">
            Forum <i class="fa fa-angle-down"></i>
          </a>
          <ul class="dropdown" id="my-dropdown-id">
            <li><a href="#">Category 1</a></li>
            <li class="separator"></li>
            <li><a href="#">Category 2</a></li>
            <li class="separator"></li>
            <li><a href="#">Category 3</a></li>
          </ul>
        </li>

        <li><a href="#">Treckmind</a></li>
        <li><a href="#">Artikel</a></li>
        <li><a href="#">Kontak</a></li>
      </ul>
      <!-- search -->
      <form class="w-auto">
        <input style="width: 131px; height: 34px; left: 620.05px; top: 8px; border-radius: 30px" 
          type="search"
          class="form-control"
          placeholder="    Search here"
          aria-label="Search"
        />
      </form>
      <!-- profile -->
      <div class="dropdown">
        <a
          data-mdb-dropdown-init
          class="dropdown-toggle d-flex align-items-center hidden-arrow"
          href="#"
          id="navbarDropdownMenuAvatar"
          role="button"
          aria-expanded="false"
        >
          <img
            src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp"
            class="rounded-circle"
            height="40"
            alt="Black and White Portrait of a Man"
            loading="lazy"
            
          />
        </a>
       
      </div>
    </div>
  </div>
</nav>