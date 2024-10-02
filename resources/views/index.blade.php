
@extends('layout.app')
@section('content')

<style>
    .aboutname{
        border: 2px solid rgba(0, 0, 0, 0.05);
        background: rgba(0, 0, 0, 0.05);
    }
    .img-heading {
    overflow: hidden; /* Hides the overflow of the zoomed image */
    position: relative; /* Required for the child image */
}

.zoom-img {
    transition: transform 0.3s ease; /* Smooth transition */
    width: 100%; /* Ensure the image takes full width */
    height: auto; /* Maintain aspect ratio */
}

.zoom-img:hover {
    transform: scale(1.3); /* Scale the image to 110% */
}

</style>

    <section class="home-slider owl-carousel">
@foreach ($slidess as $slide )


      <div class="slider-item" style="background-image:url({{asset('slide/')}}/{{$slide->image}});">
      	<div class="overlay"></div>
      </div>

      @endforeach

      {{-- <div class="slider-item" style="background-image:url(images/banner_sr1.jpg);">
        <div class="overlay"></div>
      </div>

      <div class="slider-item" style="background-image:url(images/banner_sr2.jpg);">
        <div class="overlay"></div>
      </div>

      <div class="slider-item" style="background-image:url(images/banner_sr3.jpg);">
        <div class="overlay"></div>
      </div>

      <div class="slider-item" style="background-image:url(images/slide-new.jpg);">
      	<div class="overlay"></div>
      </div>

      <div class="slider-item" style="background-image:url(images/banner3.jpg);">
      	<div class="overlay"></div>
      </div> --}}

    </section>



    <section class="ftco-services ftco-no-pb">

			<div class="container">
				<div class="row no-gutters">
                    @foreach ($clinics as $clinic)
          <div class="col-lg-4 col-md-6 col-12 d-flex services align-self-stretch ftco-animate">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-stethoscope"></span>
              </div>
              <div class="media-body mt-3">
                <h3 class="heading">Clinic</h3>
                <h4 class="heading heading-titles">{{$clinic->clinicname}}</h4>
                <div class="timings">
                	<strong>Consultation Timings:</strong>
                	<div class="ms">
                      <p>@php echo "{$clinic->consultationtimings}"  @endphp
                		</p>
                        <p><strong>Book an Appointment</strong> <span>{{$clinic->phone}}</span></p>
                	</div>
                </div>
                <div class="timings">
                	<strong>Clinic Addres:</strong>
                	<div class="ms new-ms">
                         <a href="" data-effect="xx-zoom-out"><i class="icon xcon-location fa fa-map-marker"></i></a>
                        <p class="loction"> @php echo "{$clinic->clinicaddres}"  @endphp</p>
                	</div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
    </div>

</section>


          {{-- <div class="col-lg-4 col-md-6 col-12 d-flex services align-self-stretch ftco-animate">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-stethoscope"></span>
              </div>
              <div class="media-body mt-3">
                <h3 class="heading">Clinic</h3>
                <h4 class="heading heading-titles">R N Tagore Hospital, Mukundpur</h4>
                <div class="timings">
                	<strong>Consultation Timings:</strong>
                	<div class="ms">
                		  <p><strong>Wed/Friday/Saturday</strong> <span>9:00 am - 11:00 am</span></p>
                		  <p><strong>Book an Appointment</strong> <span>+91 8287228259</span></p>
                	</div>
                </div>
                <div class="timings">
                	<strong>Clinic Addres:</strong>
                	<div class="ms new-ms">
                         <a href="" data-effect="xx-zoom-out"><i class="icon xcon-location fa fa-map-marker"></i></a>
                        <p class="loction">1489, Mukundapur Main Road, 124, Eastern Metropolitan Bypass, Mukundapur, Kolkata, West Bengal 700099</p>
                	</div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-12 col-12 d-flex services align-self-stretch ftco-animate">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-stethoscope"></span>
              </div>
              <div class="media-body mt-3">
                <h3 class="heading">Clinic</h3>
                <h4 class="heading heading-titles">Apollo Clinic Ballygunge <br><span class="apollo_clinic">Apollo Clinic Ballygunge</span></h4>
                <div class="timings">
                	<strong>Consultation Timings:</strong>
                	<div class="ms">
                		  <p><strong>Monday & Thursday</strong> <span>7:00 pm - 8:00 pm</span></p>
                		  <p><strong>Book an Appointment</strong> <span>+91 85850 92299</span></p>
                	</div>
                </div>
                <div class="timings">
                	<strong>Clinic Addres:</strong>
                	<div class="ms new-ms">
                         <a href="" data-effect="xx-zoom-out"><i class="icon xcon-location fa fa-map-marker"></i></a>
                        <p class="loction">56, Jamini Roy Sarani Above Samsung Showroom on Ballygunge Phari</p>
                	</div>
                </div>
              </div>
            </div>
          </div> --}}

          <!-- <div class="col-lg-4 col-md-12 col-12 d-flex services align-self-stretch ftco-animate">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-24-hours"></span>
              </div>
              <div class="media-body mt-3">
                <h3 class="heading">Call For The Appointment</h3>
                  <div class="contact">
                		<span class="icon icon-phone"></span>
                		<p class="call">0294-2413372, 9887038818,  8287228259</p>
                  </div>
                  <div class="contact">
                		<span class="icon icon-envelope"></span>
                		<p class="call">srikantmohta27491@gmail.com</p>
                  </div>
              </div>
            </div>
          </div> -->





		<section class="ftco-section ftco-no-pt ftc-no-pb">

			<div class="container">

				<div class="row no-gutters">
					<div class="col-md-5 p-md-4 img img-2 mt-5 mt-md-0">
               <img src="{{asset('about')}}/{{$about->image}}" alt="">
               <h2 class="mb-4 text-center aboutname" style="font-size: 28px;">{{$about->name}}</h2>
					</div>

					<div class="col-md-7 wrap-about py-md-4 ftco-animate">
			          <div class="heading-section mb-5">
			          	<div class="pl-md-5">
				          	<span class="subheading">About Us</span>
				            {{-- <h2 class="mb-4" style="font-size: 28px;">{{$about->name}}</h2> --}}
			            </div>

			          </div>

			          <div class="pl-md-5 mb-5">

					     <div class="about-mohan">
                  <span>@php
                    echo "{$about->title}"
                @endphp
                    </span>


                          <hr style="margin:10px 0;color: #000;">
                           <!-- <P><strong class="sahil_parmar">Dr. Srikant Mohta</strong> is a renowned Gastro & Liver Care in Udaipur, Rajasthan, Who has vast experience of more than 5 years and has done 7000+ Consultant Gastroenterologist in the field of ENDOSCOPY (Gastroscopy, Colonoscopy), ERCP , Endscopic : Variceal Banding, Sclerotherapy. Dr. Srikant Mohta is A well-known Gastro & Liver Care. </P> -->
                           <p>@php
                            echo "{$about->shortdescription}"
                        @endphp</p>

                            <a href="{{route('home.aboutus')}}" class="btn btn-secondary py-2 px-3">Read More</a>

                         </div>

					  </div>

					</div>

				</div>

			</div>

		</section>



    <section class="ftco-section">

    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4">Our Services</h2>
          </div>
        </div>
{{--
        <div class="row">
             @foreach ($gastros as $gastro)


            <div class="col-lg-3 col-md-4 col-sm-2 col-12">
                <div class="heading_services">
                    <div class="img-heading">
                      <img src="{{asset('gastro')}}/{{$gastro->image}}">

                   </div>
                    <h2>{{$gastro->name}}</h2>
                     <p> {!! Str::limit($gastro->shortdescription,70 )!!} </p>
                     <a href="{{route('home.gastrotreatments',['id'=>$gastro->id])}}"  class="btn btn-secondary py-2 px-3">Read More</a>
                </div>
            </div>
            @endforeach
        </div> --}}

        <div class="row">
            @foreach ($gastros as $gastro)
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="heading_services">
                        <div class="img-heading">
                            <img src="{{ asset('gastro/' . $gastro->image) }}" class="zoom-img">
                        </div>
                        <h2>{{ $gastro->name }}</h2>
                        <p>{!! Str::limit($gastro->shortdescription, 70) !!}</p>
                        <a href="{{ route('home.gastrotreatments', ['id' => $gastro->id]) }}" class="btn btn-secondary py-2 px-3">Read More</a>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="row">
            @foreach ($livertreats as $livertreat)


            <div class="col-lg-3 col-md-4 col-sm-2 col-12">
                <div class="heading_services">
                    <div class="img-heading">
                      <img src="{{asset('livertreat')}}/{{$livertreat->image}}" class="zoom-img">
                    </div>
                    <h2>{{$livertreat->name}}</h2>
                     <p> {!! Str::limit($livertreat->shortdescription,70 )!!} </p>
                     <a href="{{route('home.livertreatments',['id'=>$livertreat->id])}}"  class="btn btn-secondary py-2 px-3">Read More</a>
                </div>
            </div>
            @endforeach
        </div>
</div>

    		<div class="ftco-departments">
        </div>
    	</div>

    </section>



    <section class="ftco-section">

      <div class="container">

        <div class="row justify-content-center mb-5 pb-2">

          <div class="col-md-8 text-center heading-section ftco-animate">

            <h2 class="mb-4">Common Symptoms of {{$commons->name}}</h2>

          </div>

        </div>

        <div class="row ftco-animate">

           <div class="col-lg-6 col-md-6 col-12">

              <img src="{{asset('common')}}/{{$commons->image}}" alt="">

           </div>

           <div class="col-lg-6 col-md-6 col-12">

             <ul class="symptoms-list">

              <p>@php
                  echo "{$commons->title}"
              @endphp</p>
             </ul>

           </div>

        </div>

      </div>

    </section>

    <section class="video_section">
           <div class="container">
              <div class="row">
                <div class="col-md-12 text-center heading-section ftco-animate fadeInUp ftco-animated">
                   <h2 class="mb-4">Video</h2>
                </div>
                @foreach ($videos as $video )


                 <div class="col-lg-3 col-md-4 col-sm-2 col-12">
                    <div class="video_heading">
                      <iframe width="560" height="315" src="{{$video->videolink}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                 </div>
                 @endforeach



              </div>
           </div>
    </section>



    <section class="ftco-section testimony-section bg-light">

      <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
          	<span class="subheading">Testimonials</span>
            <h2 class="mb-4">Our Patients Says</h2>
          </div>
        </div>

        <div class="row ftco-animate justify-content-center">

          <div class="col-lg-8 col-md-12 col-12">
            <div class="carousel-testimony owl-carousel">
                @foreach ($testimonialss as $testimonials)


              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="text ml-2 bg-light">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>   {!! Str::limit($testimonials->comment,300 )!!}

                     </p>
                    <h5>{{$testimonials->name}}</h5>
                  </div>
                </div>
              </div>
              @endforeach


            </div>
          </div>
        </div>

      </div>

    </section>

    <section class="book_appointmet-section">
      <div class="heading-section heading-section-white ftco-animate mb-5">
        <h2 class="mb-4 text-center">Book An Appointment</h2>
      </div>
          <div class="container">

              <div class="row">

               @foreach ($clinics as $clinic)

                  <div class="col-lg-4">
                    <div class="book_box">
                        <div class="map_box">
                          <iframe src="{{$clinic->link}}" width="100%" height="450"></iframe>
                        </div>

                        <div class="heading-an">
                            <h2>{{$clinic->clinicname}} </h2>
                            <ul class="card-details-list">
                              <li>
                                  <div class="list-row">
                                    <i class="fa-solid fa-mobile-screen-button"></i>
                                      <a href="tel:+91 {{$clinic->phone}}"> {{$clinic->phone}}</a>
                                  </div>
                              </li>
                              <li>
                                  <div class="list-row">
                                    <i class="fa-solid fa-envelope"></i>
                                      <a href="">{{$clinic->email}}  </a>
                                  </div>
                              </li>
                              <li>
                                  <div class="list-row">
                                    <i class="fa-solid fa-location-arrow"></i>
                                      <a href="">@php echo "{$clinic->clinicaddres}"  @endphp </a>
                                  </div>
                              </li>
                              <li>
                                  <div class="list-row">
                                    <i class="fa-solid fa-clock"></i>
                                      <a href="#">@php echo "{$clinic->consultationtimings}"  @endphp</a>
                                  </div>
                              </li>

                              </li>
                          </ul>
                        </div>
                    </div>
                  </div>
                  @endforeach
                  {{-- <div class="col-lg-4">
                    <div class="book_box">
                        <div class="map_box">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3686.337012302755!2d88.40038921495812!3d22.49153538522463!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0273dff60b2adb%3A0xa56571cbd5cfa88b!2sNH%20Rabindranath%20Tagore%20International%20Institute%20Of%20Cardiac%20Sciences!5e0!3m2!1sen!2sin!4v1676611232413!5m2!1sen!2sin" width="100%" height="450"></iframe>
                        </div>

                        <div class="heading-an">
                            <h2>R N Tagore Hospital, Mukundpur </h2>

                            <ul class="card-details-list">
                              <li>
                                  <div class="list-row">
                                    <i class="fa fa-mobile" aria-hidden="true"></i>
                                      <a href="tel:+91 8287228259">+91 8287228259</a>
                                  </div>
                              </li>
                              <li>
                                  <div class="list-row">
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                      <a href="">srikantmohta27491@gmail.com   </a>
                                  </div>
                              </li>
                              <li>
                                  <div class="list-row">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                      <a href="">1489, Mukundapur Main Road, 124, Eastern Metropolitan Bypass, Mukundapur, Kolkata, West Bengal 700099 </a>
                                  </div>
                              </li>
                              <li>
                                  <div class="list-row">
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                                      <a href="#">Wed/Fri/Sat | 9:00 am - 11:00 am</a>
                                  </div>
                              </li>
                          </ul>
                        </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="book_box">
                        <div class="map_box">
                          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3685.390946304503!2d88.36361971495877!3d22.527023385206274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a027730025a8821%3A0x739f3012e9ad0d2f!2sApollo%20Clinic%20Ballygunge!5e0!3m2!1sen!2sin!4v1675418033504!5m2!1sen!2sin" width="100%" height="450"></iframe>
                        </div>

                        <div class="heading-an">
                            <h2>Apollo Clinic Ballygunge <br><span class="apollose">Apollo Clinic Ballygunge</span></h2>

                            <ul class="card-details-list">
                              <li>
                                  <div class="list-row">
                                    <i class="fa fa-mobile" aria-hidden="true"></i>
                                      <a href="tel:+91 85850 92299">+91 85850 92299</a>
                                  </div>
                              </li>
                              <li>
                                  <div class="list-row">
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                      <a href="">srikantmohta27491@gmail.com   </a>
                                  </div>
                              </li>
                              <li>
                                  <div class="list-row">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                      <a href="">56, Jamini Roy Sarani Above Samsung Showroom on Ballygunge Phari</a>
                                  </div>
                              </li>
                              <li>
                                  <div class="list-row">
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                                      <a href="#">Mon & Thu | 7:00 pm - 8:00 pm</a>
                                  </div>
                              </li>
                          </ul>
                        </div>
                    </div>
                  </div> --}}
                  <div class="col-lg-4">
                    <div class="book_box books">
                      <div class="heading-section heading-section-white ftco-animate mb-5">
                        <h2 class="mb-4">Book An Appointment</h2>
                      </div>
                      <ul class="book-list">
                        <li>Download NH care app and Register With otp</li>
                        <li>Click on book appointment</li>
                        <li>Search for Dr. Srikant Mohta </li>
                        <li>Select Narayana superspeciality hospital</li>
                        <li>Choose slot and confirm appointment</li>
                     </ul>
                      <div class="makeappoinment">
                        <a href="https://wa.me/+91 8287228259/?text=" class="link_up"><span><i class="fa-brands fa-whatsapp"></i></span><p>Connect on WhatsApp </p></a>
                    </div>
                    </div>
                  </div>


              </div>
          </div>
    </section>

    @endsection
