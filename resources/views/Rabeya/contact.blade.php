@extends('Rabeya.layouts.main')
@section('main-container')

 <!-- Hero Section Begin -->
 <section class="hero spad set-bg ftco-animate" style="height: 20px; align-items:center" data-setbg="{{url('Rabeya/img/contactus.png')}}">

    <h1 class="banner_write">Contact Us</h1>
 </section>
 <!-- Hero Section End -->

 <hr size="8" color="black">





 <section class="ftco-section contact-section bg-light">
    <div class="container">
        <div class="row d-flex mb-5 contact-info">
        <div class="w-100"></div>
        <div class="col-md-3 d-flex">
            <div class="info bg-white p-4">
              <p><span>Address:</span> UNITED INTERNATIONAL UNIVERSITY , MADANI AVENUE</p>
            </div>
        </div>
        <div class="col-md-3 d-flex">
            <div class="info bg-white p-4">
              <p><span>Phone:</span> <a href="tel://1234567920">015354566576</a></p>
            </div>
        </div>
        <div class="col-md-3 d-flex">
            <div class="info bg-white p-4">
              <p><span>Email:</span> <a href="mailto:info@yoursite.com">uiucanteen@uiu.ac.bd</a></p>
            </div>
        </div>
        <div class="col-md-3 d-flex">
            <div class="info bg-white p-4">
              <p><span>Website</span> <a href="#">uiucanteen.uiu.ac.bd</a></p>
            </div>
        </div>
      </div>
      <div class="row block-9">
        <div class="col-md-12 order-md-last d-flex">
          <form action="{{url('/')}}/post_opinion" class="bg-white p-5 contact-form"  method="post"  enctype="multipart/form-data">
           @csrf
            <div class="form-group">
              <input type="text" class="form-control" name="student_name" id="student_name" placeholder="Your Name">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="student_id" id="student_id" placeholder="Student ID">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
            </div>
            <div class="form-group">
              <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
            </div>
            <div class="form-group" >
                <button type="submit" value="Send Message" class="btn btn-primary py-3 px-5" style="margin-left:72%">Send Message</button>
              {{-- <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5"> --}}
            </div>
          </form>

        </div>



        {{-- <div class="col-md-6 d-flex">
            <iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d29204.789392953928!2d90.42815831560641!3d23.79730141877707!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3755c7ba91dfe545%3A0x91f5c3830cc60110!2sNatun%20Bazaar%20Bus%20Stand%2C%20Dhaka!3m2!1d23.797383099999998!2d90.4237096!4m5!1s0x3755c7d8042caf2d%3A0x686fa3e360361ddf!2sUnited%20International%20University%2C%20United%20City%2C%20Madani%20Ave%2C%20Dhaka%201212!3m2!1d23.797882899999998!2d90.44971!5e0!3m2!1sen!2sbd!4v1679251503257!5m2!1sen!2sbd" width="100%" height="700" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            {{-- <div id="map" class="bg-white"></div> --}}
        </div>
      </div>
    </div>
  </section>











<!--Arrow Up-->

<hr size="8" color="black">


<!-- Arrow ENDS-->






















@endsection
