@extends('layouts.index')
@section('content')
  <!--/breadcrumb-bg-->
  <div class="breadcrumb-bg py-5  w3l-inner-page-breadcrumb">
    <div class="container pt-lg-5 pt-md-3 p-lg-4 pb-md-3 my-lg-3">
      <ul class="breadcrumbs-custom-path mt-4 text-center pt-5">
        <li><a href="index.html">Home</a></li>
        <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Contact </li>
      </ul>
    </div>
  </div>

  <!--//breadcrumb-bg-->
  <!-- contacts -->
  <!-- contact-form 2 -->
  <section class="w3l-contact-2 py-5" id="contact">
    <div class="container py-lg-4 py-md-3 py-2">
      <div class="title-content text-left">
          <h5 class="title-subhny mb-2">Get in touch</h5>
          <h3 class="title-w3l"><span>Contact with our support <br>
            during </span>emergency!</h3>
      </div>
      <div class="contact-grids d-grid mt-5 pt-lg-3">
        <div class="contact-left">
          <div class="cont-details">
            <div class="cont-top margin-up">
              <div class="cont-left text-center">
                <span class="fa fa-map-marker icon-red"></span>
              </div>
              <div class="cont-right">
                <h6>Our head office address:</h6>
                <p>Lorem ipsum Agency, 343 marketing, #4148 Honey street, NY - 62617.</p>
              </div>
            </div>
            <div class="cont-top margin-up">
              <div class="cont-left text-center">
                <span class="fa fa-phone icon-green"></span>
              </div>
              <div class="cont-right">
                <h6>Call for help :</h6>
                <p><a href="tel:+1(21) 234 4567">+1(21) 234 557 4567</a></p>
                <p><a href="tel:+1(21) 234 4567">+1(21) 234 557 4568</a></p>
              </div>
            </div>
            <div class="cont-top margin-up">
              <div class="cont-left text-center">
                <span class="fa fa-envelope-o icon-blue"></span>
              </div>
              <div class="cont-right">
                <h6>
                  Mail us:</h6>
                <p><a href="mailto:support@mail.com" class="mail">support@mail.com</a></p>
                <p><a href="mailto:contact@mail.com" class="mail">contact@mail.com</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="contact-right">
          <form action="https://sendmail.w3layouts.com/submitForm" method="post" class="signin-form">
            <div class="input-grids">
              <input type="text" name="w3lName" id="w3lName" placeholder="Your Name*" class="contact-input"
                required="" />
              <input type="email" name="w3lSender" id="w3lSender" placeholder="Your Email*" class="contact-input"
                required="" />
              <input type="text" name="w3lSubect" id="w3lSubect" placeholder="Subject*" class="contact-input"
                required="" />
            </div>
            <div class="form-input">
              <textarea name="w3lMessage" id="w3lMessage" placeholder="Type your message here*" required=""></textarea>
            </div>
            <div class="submit-w3l-button text-lg-right">
              <button class="btn btn-style btn-primary">Send Message</button>
            </div>
          </form>
        </div>
      </div>
  </section>
  <!-- /contact-form-2 -->
  <div class="map-iframe">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317718.69319292053!2d-0.3817765050863085!3d51.528307984912544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2spl!4v1562654563739!5m2!1sen!2spl"
      width="100%" height="400" frameborder="0" style="border: 0px;" allowfullscreen=""></iframe>
  </div>
  <!-- //contacts -->
  <!-- Footers-14 -->
@endsection