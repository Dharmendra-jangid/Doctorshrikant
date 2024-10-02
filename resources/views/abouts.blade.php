@extends('layout.app')
@section('content')

<section class="hero-wrap hero-wrap-2" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-2 bread">About Us</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="{{route('home.index')}}">Home <i
                  class="ion-ios-arrow-forward"></i></a></span> <span>About us <i
                class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>


<section class="ftco-section ftco-no-pt ftc-no-pb">
    <div class="container">
        @if ($about)
      <div class="row no-gutters">
        <div class="col-md-5 p-md-5 img img-2 mt-md-0">
          <img src="{{asset('about')}}/{{$about->image}}">
        </div>
        <div class="col-md-7 wrap-about py-4 ftco-animate">
          <div class="heading-section mb-5">
            <div class="pl-md-5 ml-md-5">



              <span class="subheading">ABOUT US</span>
              <h2 class="mb-4" style="font-size: 28px;">{{$about->name}}</h2>
            </div>
          </div>
          <div class="pl-md-5 ml-md-5 mb-5">
            <div class="about-mohan">

              <span>@php
                  echo "{$about->title}"
              @endphp</span>
              <hr style="margin:10px 0;color: #000;">



              <p>@php
                echo "{$about->shortdescription}"
            @endphp</p>

            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
           <p>
            @php
            echo "{$about->qualifications}"
        @endphp
              </p>


          </div>
        </div>
      </div>

       <div class="row row-cols-4">

      </div>

        <div class="row clips">
            @php
                  echo "{$about->projectsundertaken}"
              @endphp
        </div>

      {{-- <div class="row clips">

          <div class="col-sm-2 listin">S.No.</div>
          <div class="col-sm-4 listin">Name of Award </div>
          <div class="col-sm-4 listin">Awarding Agency</div>
          <div class="col-sm-2 listin">Year</div>

          <div class="col-sm-2 listin">1</div>
          <div class="col-sm-4 listin">N1st Rank in National Level</div>
          <div class="col-sm-4 listin">National Level Science Talent Search Examination </div>
          <div class="col-sm-2 listin">2008</div>

          <div class="col-sm-2 listin">2</div>
          <div class="col-sm-4 listin">2nd Rank in National Level </div>
          <div class="col-sm-4 listin">National Science Olympiad</div>
          <div class="col-sm-2 listin">2008</div>

          <div class="col-sm-2 listin">3</div>
          <div class="col-sm-4 listin">National Level Qualified </div>
          <div class="col-sm-4 listin">International Physics Olympiad. Homi Bhabha
                           Centre for Science Education, Mumbai
            </div>
          <div class="col-sm-2 listin">2008</div>

          <div class="col-sm-2 listin">4</div>
          <div class="col-sm-4 listin">National Level Qualified</div>
          <div class="col-sm-4 listin">nternational Biology Olympiad. Homi Bhabha
             Centre for Science Education, Mumbai
          </div>
          <div class="col-sm-2 listin">2009</div>

          <div class="col-sm-2 listin">5</div>
          <div class="col-sm-4 listin">1st IN batch  </div>
          <div class="col-sm-4 listin">Residency program, Department of Medicine,
            AIIMS, New Delhi
             </div>
          <div class="col-sm-2 listin">2018</div>

          <div class="col-sm-2 listin">6</div>
          <div class="col-sm-4 listin">1st IN batch  </div>
          <div class="col-sm-4 listin">Residency program, Department of
              Gastroenterology, AIIMS, New Delhi
            </div>
          <div class="col-sm-2 listin">2021</div>

                 <ul class="list-about">
              <li>Dissertation in Post-graduation- Association of ectopic fat depots and metabolic
                  parameters in metabolic syndrome</li>
              <li>Dissertation in Gastroenterology fellowship- A randomized controlled trial to assess
                  efficacy of branched chain amino acids in patients of cirrhosis with sarcopenia</li>
          </ul>

      </div> --}}

      <div class="add-contents">
          <p>@php
            echo "{$about->description}"
        @endphp</p>
      </div>


       <div class="add-contents">
          <h2 class="title-about">National presentations</h2>

          <ul class="list-about">
              <li>Systematic review and meta-analysis: Is there any role of antioxidant therapy for pain
                  in chronic pancreatitis – ISG 2020</li>
              <li>Clinical response to anti tubercular therapy given as a diagnostic strategy does not
                   affect long term outcomes in patients with Crohn's disease – ISG 2020</li>
                   <li>Falsely elevated anti-tissue transglutaminase antibodies in patients with
                       immunoproliferative small intestinal diseases: A case series – ISG 2020</li>
                   <li>Differential location of growth factors and pancreatic stellate cell activation in chronic
                       pancreatitis – ISG 2020</li>
          </ul>
      </div>


    </div>
    @endif
  </section>

@endsection
