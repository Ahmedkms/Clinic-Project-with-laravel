@extends('layout.app')
@section('title', 'doctor-contact')
@section('content')

    <div class="page-wrapper">

      <div class="container">
      
        <div class="d-flex flex-column gap-3 details-card doctor-details">
          <div class="details d-flex gap-2 align-items-center">
            <img
              src="../assets/images/major.jpg"
              alt="doctor"
              class="img-fluid rounded-circle"
              height="150"
              width="150"
            />
            <div class="details-info d-flex flex-column gap-3">
              <h4 class="card-title fw-bold">Doctor name</h4>
              <h6 class="card-title fw-bold">
                doctor major and more info about the doctor in summary
              </h6>
            </div>
          </div>
          <hr />
          <form class="form">
            <div class="form-items">
              <div class="mb-3">
                <label class="form-label required-label" for="name">Name</label>
                <input type="text" class="form-control" id="name" required />
              </div>
              <div class="mb-3">
                <label class="form-label required-label" for="phone"
                  >Phone</label
                >
                <input type="tel" class="form-control" id="phone" required />
              </div>
              <div class="mb-3">
                <label class="form-label required-label" for="email"
                  >Email</label
                >
                <input type="email" class="form-control" id="email" required />
              </div>
            </div>
            <button type="submit" class="btn btn-primary">
              Confirm Booking
            </button>
          </form>
        </div>
      </div>
    </div>

    <script>
      const stars = document.querySelectorAll(".star");

      stars.forEach((star, index) => {
        star.addEventListener("click", () => {
          const isActive = star.classList.contains("active");
          if (isActive) {
            star.classList.remove("active");
          } else {
            star.classList.add("active");
          }
          for (let i = 0; i < index; i++) {
            stars[i].classList.add("active");
          }
          for (let i = index + 1; i < stars.length; i++) {
            stars[i].classList.remove("active");
          }
        });
      });
    </script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.min.js"
      integrity="sha512-fHY2UiQlipUq0dEabSM4s+phmn+bcxSYzXP4vAXItBvBHU7zAM/mkhCZjtBEIJexhOMzZbgFlPLuErlJF2b+0g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
  </body>
</html>


@endsection

