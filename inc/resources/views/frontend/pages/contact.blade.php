@extends('frontend.layouts.template')
@section('title','Contact')

@section('content')

  <main id="main">
  
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Contact</h2>
          <ol>
            <li><a href="{{route('home')}}">Home</a></li>
            <li>Contact</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="row mt-5">

          <div class="col-lg-6">
            <div class="location-frame">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.835584614492!2d90.35856181744384!3d23.753241800000012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bf5b7d4f9ba3%3A0x66915569d741558!2s2%20Katasur%20Rd%2C%20Dhaka%201207!5e0!3m2!1sen!2sbd!4v1649479919128!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>অবস্থান: দপ্তর : ১</h4>
                <p>অফিস- ১ : হোল্ডিং-৯০, রোড নং- ২, কাটাসুর, </br>শেরে-ই বাংলা রোড, মোহাম্মদপুর, ঢাকা-১২০৭</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>ইমেইল :</h4>
                <p><a href="https://www.sreestywelfarefoundation@gmail.com">sreestywelfarefoundation@gmail.com</a></p>
              </div>

              <div class="phone">
                <a href="tel:+880-1958-666999"><i class="bi bi-phone"></i></a>
                <h4>ফোন নম্বর :</h4>
                <p><a href="tel:+880-1958-666999">+880-1595-241012</a></p>
              </div>

            </div>

          </div>

          <div class="col-lg-6">
            <div class="location-frame">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.8451929647363!2d90.3587320167768!3d23.752899242510242!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bf5b1b9a6ef9%3A0xe9accd839c762c0f!2s109%20Katasur%20Rd%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1649480155241!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>অবস্থান: দপ্তর : ২</h4>
                <p>অফিস- ২ : ১০৯, কাটাসুর, শেরে-ই বাংলা রোড,</br> মোহাম্মদপুর, ঢাকা-১২০৭</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>ইমেইল :</h4>
                <p><a href="https://www.sreestywelfarefoundation@gmail.com">sreestywelfarefoundation@gmail.com</a></p>
              </div>

              <div class="phone">
                <a href="tel:+880-1847-122943"><i class="bi bi-phone"></i></a>
                <h4>ফোন নম্বর : </h4>
                <p><a href="tel:+880-1847-122943">+880-1847-122943</a></p>
              </div>

            </div>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

    <!-- the email send section if needed-->
    <div class="col-lg-8 mt-lg-0 border m-auto box-background">
        @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>        
        @endif
      <form action="{{route('message')}}" method="POST" >
        @csrf
        <div class="row">
          <div class="col-md-6 form-group  ">
            <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" required>
          </div>
          <div class="col-md-6 form-group  ">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
          </div>
        </div>
        <div class="form-group  ">
          <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
        </div>
        <div class="form-group ">
          <textarea class="form-control" name="message" id="message" rows="5" placeholder="Message" required></textarea>
        </div>
        <div class="text-center "><button type="submit" onclick="" class="btn btn-info">Send Message</button></div>
      </form>
    </div>
  </main><!-- End #main -->


@endsection