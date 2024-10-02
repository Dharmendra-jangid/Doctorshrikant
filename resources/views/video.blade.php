@extends('layout.app')
@section('content')

<section class="hero-wrap hero-wrap-2" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-2 bread">Video</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="{{route('home.index')}}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Video<i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section ftco-no-pt ftc-no-pb constom">
      <div class="container">
          <div class="gallery-box">
              <div class="row mb-3">

  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center heading-section ftco-animate fadeInUp ftco-animated">

      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center heading-section ftco-animate fadeInUp ftco-animated">

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


          {{-- <div class="col-lg-4 col-md-6 col-12">
          <!-- The Modal -->
        <img src="images/new2.jfif" onclick="onClick(this)" class="modal-hover-opacity">

          <div id="modal01" class="modal" onclick="this.style.display='none'">
            <span class="close">&times;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            <div class="modal-content">
              <img id="img01" style="max-width:100%">
            </div>
          </div>
          </div>



          <div class="col-lg-4 col-md-6 col-12">
          <!-- The Modal -->
        <img src="images/new3.jfif" onclick="onClick(this)" class="modal-hover-opacity">

          <div id="modal01" class="modal" onclick="this.style.display='none'">
            <span class="close">&times;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            <div class="modal-content">
              <img id="img01" style="max-width:100%">
            </div>
          </div>
          </div>


                  <div class="col-lg-4 col-md-6 col-12">
                  <!-- The Modal -->
                  <img src="images/SAMnew.png" onclick="onClick(this)" class="modal-hover-opacity">

                      <div id="modal01" class="modal" onclick="this.style.display='none'">
                        <span class="close">&times;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        <div class="modal-content">
                          <img id="img01" style="max-width:100%">
                        </div>
                      </div>
                  </div>


                  <div class="col-lg-4 col-md-6 col-12">
                  <!-- The Modal -->

                <img src="images/gl1.jpg" onclick="onClick(this)" class="modal-hover-opacity">
                  <div id="modal01" class="modal" onclick="this.style.display='none'">
                    <span class="close">&times;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    <div class="modal-content">
                      <img id="img01" style="max-width:100%">
                    </div>
                  </div>
                  </div>

                  <div class="col-lg-4 col-md-6 col-12">
                  <!-- The Modal -->
                <img src="images/gl2.jpg" onclick="onClick(this)" class="modal-hover-opacity">

                  <div id="modal01" class="modal" onclick="this.style.display='none'">
                    <span class="close">&times;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    <div class="modal-content">
                      <img id="img01" style="max-width:100%">
                    </div>
                  </div>
                  </div>


                  <div class="col-lg-4 col-md-6 col-12">
                  <!-- The Modal -->
                <img src="images/gl3.jpg" onclick="onClick(this)" class="modal-hover-opacity">

                  <div id="modal01" class="modal" onclick="this.style.display='none'">
                    <span class="close">&times;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    <div class="modal-content">
                      <img id="img01" style="max-width:100%">
                    </div>
                  </div>
                  </div>


                  <div class="col-lg-4 col-md-6 col-12">
                  <!-- The Modal -->
                <img src="images/gl4.jpg" onclick="onClick(this)" class="modal-hover-opacity">

                  <div id="modal01" class="modal" onclick="this.style.display='none'">
                    <span class="close">&times;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    <div class="modal-content">
                      <img id="img01" style="max-width:100%">
                    </div>
                  </div>
                  </div>


                  <div class="col-lg-4 col-md-6 col-12">
                  <!-- The Modal -->
                <img src="images/gl5.jpg" onclick="onClick(this)" class="modal-hover-opacity">

                  <div id="modal01" class="modal" onclick="this.style.display='none'">
                    <span class="close">&times;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    <div class="modal-content">
                      <img id="img01" style="max-width:100%">
                    </div>
                  </div>
                  </div> --}}

{{--
                  <div class="col-lg-4 col-md-6 col-12">
                  <!-- The Modal -->
                <img src="images/gl6.jpg" onclick="onClick(this)" class="modal-hover-opacity">

                  <div id="modal01" class="modal" onclick="this.style.display='none'">
                    <span class="close">&times;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    <div class="modal-content">
                      <img id="img01" style="max-width:100%">
                    </div>
                  </div>
                  </div>


                  <div class="col-lg-4 col-md-6 col-12">
                  <!-- The Modal -->
                <img src="images/gl7.jpg" onclick="onClick(this)" class="modal-hover-opacity">

                  <div id="modal01" class="modal" onclick="this.style.display='none'">
                    <span class="close">&times;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    <div class="modal-content">
                      <img id="img01" style="max-width:100%">
                    </div>
                  </div>
                  </div>


                  <div class="col-lg-4 col-md-6 col-12">
                  <!-- The Modal -->
                <img src="images/gl8.jpg" onclick="onClick(this)" class="modal-hover-opacity">

                  <div id="modal01" class="modal" onclick="this.style.display='none'">
                    <span class="close">&times;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    <div class="modal-content">
                      <img id="img01" style="max-width:100%">
                    </div>
                  </div>
                  </div> --}}


                  {{-- <div class="col-lg-4 col-md-6 col-12">
                  <!-- The Modal -->
                <img src="images/gl9.jpg" onclick="onClick(this)" class="modal-hover-opacity">

                  <div id="modal01" class="modal" onclick="this.style.display='none'">
                    <span class="close">&times;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    <div class="modal-content">
                      <img id="img01" style="max-width:100%">
                    </div>
                  </div>
                  </div>

 --}}


                </div>
          </div>
      </div>
  </section>


@endsection
