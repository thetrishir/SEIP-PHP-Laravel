<?php
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"
    />
    <link
      href="https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../assets/style.css" />
    <title>Practice Bootstrap</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark py-3 fixed-top">
      <div class="container">
        <a href="" class="navbar-brand">Trishir</a>

        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navmenu"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navmenu">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a href="#Home" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="#About" class="nav-link">About</a>
            </li>
            <li class="nav-item">
              <a href="#Contact" class="nav-link">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Showcase -->
    <section
      class="bg-dark text-light p-5 p-lg-0 pt-lg-5 text-center text-sm-start"
    >
      <div class="container">
        <div class="d-sm-flex align-items-center justify-content-between">
          <div>
            <h1>Become a <span class="text-warning">Web Developer</span></h1>
            <p class="lead my-3">
              We focus on teaching our students the fundamentals of the latest
              and greatest technologies to prepare them for their first dev role
            </p>
            <button
              class="btn btn-primary btn-md"
              data-bs-toggle="modal"
              data-bs-target="#enroll"
            >
              Start The Enrolment
            </button>
          </div>
          <img
            class="img-fluid w-50 d-none d-sm-block"
            src="img/showcase.svg"
            alt=""
          />
        </div>
      </div>
    </section>

    <!-- Newsletter -->
    <section class="bg-primary text-light p-5">
      <div class="container">
        <div class="d-md-flex align-items-center justify-content-between">
          <h3 class="mb-3 mb-md-0">Sign Up For Our Newsletter</h3>
          <div class="input-group news-input">
            <input type="text" class="form-control" placeholder="Enter email" />
            <button class="btn btn-dark" type="button">Subscribe</button>
          </div>
        </div>
      </div>
    </section>

    <!-- Boxes -->
    <section class="p-5">
      <div class="container">
        <div class="row text-center g-3">
          <div class="col-md">
            <div class="card bg-dark text-light">
              <div class="card-body text-center">
                <div class="h1 mb-3">
                  <i class="bi bi-laptop"></i>
                </div>
                <h3 class="card-title mb-3">Virtual</h3>
                <p class="card-text">
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                  Perspiciatis, impedit.
                </p>
                <a href="#" class="btn btn-primary mb-3">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="card bg-secondary text-light">
              <div class="card-body text-center">
                <div class="h1 mb-3">
                  <i class="bi bi-person-square"></i>
                </div>
                <h3 class="card-title mb-3">Hybrid</h3>
                <p class="card-text">
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                  Perspiciatis, impedit.
                </p>
                <a href="#" class="btn btn-dark mb-3">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="card bg-dark text-light">
              <div class="card-body text-center">
                <div class="h1 mb-3">
                  <i class="bi bi-people"></i>
                </div>
                <h3 class="card-title mb-3">In-Person</h3>
                <p class="card-text">
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                  Perspiciatis, impedit.
                </p>
                <a href="#" class="btn btn-primary mb-3">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Home Section -->
    <section class="p-5" id="Home">
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-md">
            <img
              src="img/fundamentals.svg"
              class="img-fluid"
              alt="fundamentals"
            />
          </div>
          <div class="col-md p-5">
            <h2>Fundamentals</h2>
            <p class="lead">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo
              nemo, ipsum earum officia enim incidunt.
            </p>
            <a href="#" class="btn btn-light btn-md">
              <i class="bi bi-chevron-right"></i>Read More
            </a>
          </div>
        </div>
      </div>
    </section>

    <section class="bg-dark text-light p-5" id="Home">
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-md p-5">
            <h2>React</h2>
            <p class="lead">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo
              nemo, ipsum earum officia enim incidunt.
            </p>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt,
              quam laudantium maxime error porro explicabo.
            </p>
            <a href="#" class="btn btn-light btn-md">
              <i class="bi bi-chevron-right"></i>Read More
            </a>
          </div>
          <div class="col-md">
            <img src="img//react.svg" class="img-fluid" alt="fundamentals" />
          </div>
        </div>
      </div>
    </section>

    <!-- Question Aquirion -->
    <section class="p-5" id="About">
      <div class="container">
        <h2 class="text-center mb-4">Frequently Asked About</h2>
        <div class="accordion accordion-flush" id="About">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#AboutOne"
              >
                Where exactly are you located?
              </button>
            </h2>
            <div
              id="AboutOne"
              class="accordion-collapse collapse"
              data-bs-parent="#About"
            >
              <div class="accordion-body">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa
                vero sint autem voluptatem unde enim, velit est tempora odio
                vitae itaque officia esse repellendus dolor, magnam voluptates.
                Possimus repellat et dicta totam nobis vero, eaque deserunt.
                Doloribus facilis velit, sed, eos hic ipsa, maxime cumque alias
                deleniti quas commodi. Pariatur.
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#AboutTwo"
              >
                How much does it cost to attend?
              </button>
            </h2>
            <div
              id="AboutTwo"
              class="accordion-collapse collapse"
              data-bs-parent="#About"
            >
              <div class="accordion-body">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa
                vero sint autem voluptatem unde enim, velit est tempora odio
                vitae itaque officia esse repellendus dolor, magnam voluptates.
                Possimus repellat et dicta totam nobis vero, eaque deserunt.
                Doloribus facilis velit, sed, eos hic ipsa, maxime cumque alias
                deleniti quas commodi. Pariatur.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#AboutThree"
              >
                What do I need to know?
              </button>
            </h2>
            <div
              id="AboutThree"
              class="accordion-collapse collapse"
              data-bs-parent="#About"
            >
              <div class="accordion-body">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa
                vero sint autem voluptatem unde enim, velit est tempora odio
                vitae itaque officia esse repellendus dolor, magnam voluptates.
                Possimus repellat et dicta totam nobis vero, eaque deserunt.
                Doloribus facilis velit, sed, eos hic ipsa, maxime cumque alias
                deleniti quas commodi. Pariatur.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#AboutFour"
              >
                How do I sign up?
              </button>
            </h2>
            <div
              id="AboutFour"
              class="accordion-collapse collapse"
              data-bs-parent="#About"
            >
              <div class="accordion-body">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa
                vero sint autem voluptatem unde enim, velit est tempora odio
                vitae itaque officia esse repellendus dolor, magnam voluptates.
                Possimus repellat et dicta totam nobis vero, eaque deserunt.
                Doloribus facilis velit, sed, eos hic ipsa, maxime cumque alias
                deleniti quas commodi. Pariatur.
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Instructor -->
    <section class="p-5 bg-primary" id="Contact">
      <div class="container">
        <h2 class="text-white text-center">Our Instructor</h2>
        <p class="lead text-white text-center mb-5">
          Our instructor all have 5+ years working as web developer in this
          industry
        </p>
        <div class="row g-4">
          <div class="col-md-6 col-lg-3">
            <div class="card bg-light">
              <div class="card-body text-center">
                <img
                  src="https://randomuser.me/api/portraits/men/10.jpg"
                  class="rounded-circle mb-3"
                  alt=""
                />
                <h3 class="card-title mb-3">Virtual</h3>
                <p class="card-text">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Aperiam iure natus praesentium corporis deleniti voluptatem!
                </p>
                <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="card bg-light">
              <div class="card-body text-center">
                <img
                  src="https://randomuser.me/api/portraits/men/10.jpg"
                  class="rounded-circle mb-3"
                  alt=""
                />
                <h3 class="card-title mb-3">Virtual</h3>
                <p class="card-text">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Aperiam iure natus praesentium corporis deleniti voluptatem!
                </p>
                <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="card bg-light">
              <div class="card-body text-center">
                <img
                  src="https://randomuser.me/api/portraits/men/10.jpg"
                  class="rounded-circle mb-3"
                  alt=""
                />
                <h3 class="card-title mb-3">Virtual</h3>
                <p class="card-text">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Aperiam iure natus praesentium corporis deleniti voluptatem!
                </p>
                <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="card bg-light">
              <div class="card-body text-center">
                <img
                  src="https://randomuser.me/api/portraits/men/10.jpg"
                  class="rounded-circle mb-3"
                  alt=""
                />
                <h3 class="card-title mb-3">Virtual</h3>
                <p class="card-text">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Aperiam iure natus praesentium corporis deleniti voluptatem!
                </p>
                <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact and map -->
    <section class="p-5">
      <div class="container">
        <div class="row g-4">
          <div class="col-md">
            <h2 class="text-center mb-4">Contact Info</h2>
            <ul class="list-group list-group-flush lead">
              <li class="list-group-item">
                <span class="fw-bold">Main Location:</span> Banasree, Dhaka
              </li>
              <li class="list-group-item">
                <span class="fw-bold">Main Location:</span> Banasree, Dhaka
              </li>
              <li class="list-group-item">
                <span class="fw-bold">Main Location:</span> Banasree, Dhaka
              </li>
              <li class="list-group-item">
                <span class="fw-bold">Main Location:</span> Banasree, Dhaka
              </li>
            </ul>
          </div>
          <div class="col-md">
            <div id="map"></div>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="p-5 bg-dark text-white text-center position-relative">
      <div class="container">
        <p class="lead">Copyright &copy; 2021 Frontend Bootcamp</p>

        <a href="#" class="position-absolute bottom-0 end-0 p-5">
          <i class="bi bi-arrow-up-circle h1"></i>
        </a>
      </div>
    </footer>

    <!-- Modal -->
    <div
      class="modal fade"
      id="enroll"
      tabindex="-1"
      aria-labelledby="enrollLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="enrollLabel">Enrollment</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <p class="lead">Fill out this form and we will get back to you</p>
            <form>
              <div class="mb-3">
                <label for="first-name" class="col-form-label">
                  First Name:
                </label>
                <input type="text" class="form-control" id="first-name" />
              </div>
              <div class="mb-3">
                <label for="last-name" class="col-form-label">Last Name:</label>
                <input type="text" class="form-control" id="last-name" />
              </div>
              <div class="mb-3">
                <label for="email" class="col-form-label">Email:</label>
                <input type="email" class="form-control" id="email" />
              </div>
              <div class="mb-3">
                <label for="phone" class="col-form-label">Phone:</label>
                <input type="tel" class="form-control" id="phone" />
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-bs-dismiss="modal"
            >
              Close
            </button>
            <button type="button" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <script src="https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.js"></script>

    <script>
      mapboxgl.accessToken =
        "pk.eyJ1IjoiYnRyYXZlcnN5IiwiYSI6ImNrbmh0dXF1NzBtbnMyb3MzcTBpaG10eXcifQ.h5ZyYCglnMdOLAGGiL1Auw";
      var map = new mapboxgl.Map({
        container: "map",
        style: "mapbox://styles/mapbox/streets-v11",
        center: [-71.060982, 42.35725], // center: [23.761869, 90.429893],
        zoom: 18,
      });
    </script>
  </body>
</html>

