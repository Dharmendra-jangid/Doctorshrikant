@extends('layout.app')
@section('content')

<section class="hero-wrap hero-wrap-2" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-2 bread">Gallery</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="{{route('home.index')}}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Gallery<i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>
{{--
  <section class="ftco-section ftco-no-pt ftc-no-pb constom">
      <div class="container">
          <div class="gallery-box">
              <div class="row mb-3">
  @foreach ($gallery as $gallery )


          <div class="col-lg-4 col-md-6 col-12">
          <!-- The Modal -->
        <img src="{{asset('gallery/')}}/{{$gallery->image}}" onclick="onClick(this)" class="modal-hover-opacity">

          <div id="modal01" class="modal" onclick="this.style.display='none'">
            <span class="close">&times;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            <div class="modal-content">
              <img id="img01" style="max-width:100%">
            </div>
          </div>
          </div>

          @endforeach
        </div>
    </div>
</div>
</section> --}}
<section class="ftco-section ftco-no-pt ftc-no-pb constom">
    <div class="container">
        <div class="gallery-box">
            <div class="row mb-3">
                @foreach ($gallery as $image)
                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- Image Thumbnail -->
                        <img src="{{ asset('gallery/' . $image->image) }}" onclick="openModal(this)" class="modal-hover-opacity" style="cursor: pointer;">
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- The Modal -->
    <div id="modal01" class="modal" onclick="this.style.display='none'">
        <span class="close">&times;&nbsp;&nbsp;&nbsp;&nbsp;</span>
        <div class="modal-content">
            <img id="img01" style="max-width:100%">
        </div>
    </div>
</section>

<script>
    function openModal(element) {
        // Get the modal
        var modal = document.getElementById("modal01");
        // Get the image and set it as the modal's image source
        var img = document.getElementById("img01");
        img.src = element.src;
        // Display the modal
        modal.style.display = "block";
    }
</script>


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





@endsection
