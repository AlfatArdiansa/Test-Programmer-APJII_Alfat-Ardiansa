@extends('layouts.main')

@section('content')
<div style="background-color: rgba(5,25,35,1)">
  <div class="container py-3">
    <div class="row align-items-center">
      <div class="col-12 col-sm-8 text-white">
        <h1 class="fw-bolder">Information Technology Bootcamp 2023</h1>
        <p>Upgrade your IT Skils with us for free!<br>let the world know what you are capable of 🚀</p>
        <a href="/registration"><button class="btn fw-bolder" style="background-color: rgba(0,166,251,1); color: #ffffff">Register Now!</button></a>
      </div>
      <img src="img/landingpage-hero-img.svg" class="img-fluid col-4 d-none d-sm-block" alt="">
    </div>
  </div>
  <div class="container">
    <div class="px-5 rounded-2 py-4" style="background-color: rgba(1,17,25,1); color: rgba(255,255,255,1)">
      <h2 class="text-center fw-bold pb-4">Trainings</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="row justify-content-center">
            <img src="img/networking.png" class="img-fluid w-50" alt="">
          </div>
          <p class="fw-bold text-center fs-5">Networking</p>
        </div>
        <div class="col-md-4">
          <div class="row justify-content-center">
            <img src="img/programming.png" class="img-fluid w-50" alt="">
          </div>
          <p class="fw-bold text-center fs-5">Web Programming</p>
        </div>
        <div class="col-md-4">
          <div class="row justify-content-center">
            <img src="img/graphic.png" class="img-fluid w-50" alt="">
          </div>
          <p class="fw-bold text-center fs-5">Graphic Design</p>
        </div>
      </div>
    </div>
  </div>
  <div class="container pt-5 pb-2">
    <h2 style="color: #ffffff">About Our Bootcamp</h2>
    <p style="color: #ffffff; text-align: justify; text-indent: 25px;">
      Welcome to our IT Bootcamp, where we empower individuals with the skills and knowledge to thrive in the dynamic world of technology. Whether you're a novice looking to start a career in IT or an experienced professional seeking to expand your expertise, our bootcamp is designed to provide you with a comprehensive learning experience.
      At our IT Bootcamp, we believe in practical, hands-on training that prepares you for real-world challenges. Our carefully crafted curriculum covers a wide range of topics, including web programming, network administration, and graphic designer. We ensure that you acquire the essential skills demanded by the industry today and stay ahead in the rapidly evolving IT landscape.
      What sets our bootcamp apart is our team of dedicated instructors who bring a wealth of industry experience and expertise to the classroom. They are passionate about teaching and guiding you through every step of your learning journey. With their guidance, you'll gain valuable insights and learn best practices from professionals who have been at the forefront of the IT field.
      In addition to the comprehensive curriculum and experienced instructors, we provide a supportive and collaborative learning environment. You'll be part of a diverse community of learners, all driven by a common goal of excelling in IT. Networking opportunities, team projects, and interactive sessions foster a sense of camaraderie and allow you to build connections with like-minded individuals who share your passion for technology.
      To enhance your learning experience, we also offer industry-relevant resources and tools. Access to cutting-edge software, online libraries, and practical assignments will give you the opportunity
    </p>
  </div>
  <div class="container pt-5 pb-2">

  </div>
</div>
@endsection