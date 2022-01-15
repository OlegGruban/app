<!DOCTYPE html>
<html lang="ru">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.1">
    <meta http-equiv="X-DK-Compatible" content="ie=google">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head> 
<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
      </a>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="home" class="nav-link px-2 link-dark">Home</a></li>
        <li><a href="contacts" class="nav-link px-2 link-dark">Contacts</a></li>
        <li><a href="pricing" class="nav-link px-2 link-dark">Pricing</a></li>
        <li><a href="about" class="nav-link px-2 link-dark">About</a></li>
      </ul>
      </ul>
         <div class="col-md-3 text-end">
         <button type="Logim" class="btn btn-outline-dark me-2">Login</button>
         <button type="SignUp" class="btn btn-outline-dark me-2">Sign-up</button>
      </div>
    </header>
<body>
<div class="container px-4 py-5" id="custom-cards">
    <h2 class="pb-2 border-bottom">Photos</h2>

    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('unsplash-photo-1.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-2">
            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Mountains</h2>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
                <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
              </li>
              <li class="d-flex align-items-center me-3">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
                <small>New York</small>
              </li>
              <li class="d-flex align-items-center">
                <svg class="bi mr-9" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
                <small>3 p.m.</small>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('unsplash-photo-2.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Beach</h2>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
                <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
              </li>
              <li class="d-flex align-items-center me-3">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
                <small>Miami</small>
              </li>
              <li class="d-flex align-items-center">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
                <small>7 a.m.</small>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('unsplash-photo-3.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Forest</h2>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
                <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
              </li>
              <li class="d-flex align-items-center me-3">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
                <small>California</small>
              </li>
              <li class="d-flex align-items-center">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
                <small>1 p.m.</small>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
<footer class="container py-5">
  <div class="row">
    <div class="col-12 col-md">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mb-2" role="img" viewBox="0 0 24 24"><title>Product</title><circle cx="12" cy="12" r="10"></circle><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"></path></svg>
      <small class="d-block mb-3 text-muted">© 2017–2021</small>
    </div>
    <div class="col-6 col-md">
      <h5>Features</h5>
      <ul class="list-unstyled text-small">
        <li><a class="link-secondary" href="CoolStuff">Cool stuff</a></li>
        <li><a class="link-secondary" href="RandomFeature">Random feature</a></li>
        <li><a class="link-secondary" href="TeamFeature">Team feature</a></li>
        <li><a class="link-secondary" href="StuffForDevelopers">Stuff for developers</a></li>
        <li><a class="link-secondary" href="AnotherOne">Another one</a></li>
        <li><a class="link-secondary" href="LastTime">Last time</a></li>
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>Resources</h5>
      <ul class="list-unstyled text-small">
        <li><a class="link-secondary" href="ResourceNam">Resource name</a></li>
        <li><a class="link-secondary" href="Resource">Resource</a></li>
        <li><a class="link-secondary" href="AnotherResource">Another resource</a></li>
        <li><a class="link-secondary" href="FinalResource">Final resource</a></li>
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>Resources</h5>
      <ul class="list-unstyled text-small">
        <li><a class="link-secondary" href="Business">Business</a></li>
        <li><a class="link-secondary" href="Education">Education</a></li>
        <li><a class="link-secondary" href="Government">Government</a></li>
        <li><a class="link-secondary" href="Gaming">Gaming</a></li>
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>About</h5>
      <ul class="list-unstyled text-small">
        <li><a class="link-secondary" href="Team">Team</a></li>
        <li><a class="link-secondary" href="Locations">Locations</a></li>
        <li><a class="link-secondary" href="Privacy">Privacy</a></li>
        <li><a class="link-secondary" href="Terms">Terms</a></li>
      </ul>
    </div>
  </div>
</footer> 
</body>
</html>