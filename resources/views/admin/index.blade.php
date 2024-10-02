@extends('layout.admin')
@section('content')


 <div class="main-content-inner">

                            <div class="main-content-wrap">
                                <div class="tf-section-2 mb-30">
                                    <div class="flex gap20 flex-wrap-mobile">
                                        <div class="w-half">
                                            <a href="{{route('admin.gastrogTreatments')}}">
                                            <div class="wg-chart-default mb-20">
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center gap14">
                                                        <div class="image ic-bg">
                                                            <i class="icon-shopping-bag"></i>
                                                        </div>
                                                        <div>
                                                            <div class="body-text mb-2">Gastro Treatments</div>
                                                            @php
                                                            $gastrotreatment = DB::table('gastrotreatments')->get();
                                                            $gastrotreatmentCount = $gastrotreatment->count();
                                                        @endphp
                                                            @if ($gastrotreatmentCount)
                                                            <h4>{{$gastrotreatmentCount}}</h4>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                                    <a href="{{route('admin.clinic')}}">
                                            <div class="wg-chart-default mb-20">
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center gap14">
                                                        <div class="image ic-bg">
                                                            <i class="bi bi-house"></i>
                                                        </div>
                                                        <div>
                                                            <div class="body-text mb-2">Clinic
                                                            </div>
                                                            @php
                                                            $clinic = DB::table('clinics')->get();
                                                            $clinicCount = $clinic->count();
                                                        @endphp
                                                            @if ($clinicCount)
                                                            <h4>{{$clinicCount}}</h4>
                                                            @endif

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="{{route('admin.gallery')}}">
                                            <div class="wg-chart-default mb-20">
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center gap14">
                                                        <div class="image ic-bg">
                                                            <i class="icon-image"></i>
                                                        </div>
                                                        <div>
                                                            <div class="body-text mb-2">Gallery</div>
                                                            @php
                                                            $gallery = DB::table('galleries')->get();
                                                            $galleryCount = $gallery->count();
                                                        @endphp
                                                            @if ($galleryCount)
                                                            <h4>{{$galleryCount}}</h4>
                                                            @endif

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="{{route('admin.testimonials')}}">
                                            <div class="wg-chart-default">
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center gap14">
                                                        <div class="image ic-bg">
                                                            <i class="bi bi-chat-left"></i>
                                                        </div>
                                                        <div>
                                                            <div class="body-text mb-2">Testimonials</div>
                                                            @php
                                                            $testimonial = DB::table('testimonials')->get();
                                                            $testimonialCount = $testimonial->count();
                                                        @endphp
                                                            @if ($testimonialCount)
                                                            <h4>{{$testimonialCount}}</h4>
                                                            @endif

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </a>
                                        <div class="w-half">
                                            <a href="{{route('admin.livertreatments')}}">
                                            <div class="wg-chart-default mb-20">
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center gap14">
                                                        <div class="image ic-bg">
                                                            <i class="icon-shopping-bag"></i>
                                                        </div>
                                                        <div>
                                                            <div class="body-text mb-2">Liver Treatment
                                                            </div>
                                                            @php
                                                            $livertreatment = DB::table('livertreatments')->get();
                                                            $livertreatmentCount = $livertreatment->count();
                                                        @endphp
                                                            @if ($livertreatmentCount)
                                                            <h4>{{$livertreatmentCount}}</h4>
                                                            @endif

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            </a>
                                            <a href="{{route('admin.slide')}}">
                                            <div class="wg-chart-default mb-20">
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center gap14">
                                                        <div class="image ic-bg">
                                                            <i  class="bi bi-sliders"></i>
                                                        </div>
                                                        <div>
                                                            <div class="body-text mb-2">Slider</div>
                                                            @php
                                                            $slide = DB::table('slides')->get();
                                                            $slideCount = $slide->count();
                                                        @endphp
                                                            @if ($slideCount)
                                                            <h4>{{$slideCount}}</h4>
                                                            @endif
                                                                                                                  </div>
                                                    </div>
                                                </div>
                                            </div>

                                            </a>
                                            <a href="{{route('admin.video')}}">
                                            <div class="wg-chart-default mb-20">
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center gap14">
                                                        <div class="image ic-bg">
                                                            <i class="bi bi-camera-video"></i>
                                                        </div>
                                                        <div>
                                                            <div class="body-text mb-2">Video</div>
                                                            @php
                                                            $video = DB::table('videos')->get();
                                                            $videoCount = $video->count();
                                                        @endphp
                                                            @if ($videoCount)
                                                            <h4>{{$videoCount}}</h4>
                                                            @endif

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            </a>
                                            <a href="{{route('admin.appointments')}}">

                                            <div class="wg-chart-default">
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center gap14">
                                                        <div class="image ic-bg">
                                                            <i class="bi bi-arrow-bar-right"></i>
                                                        </div>
                                                        <div>
                                                            <div class="body-text mb-2">Appointment</div>
                                                            @php
                                                            $commonsymptom = DB::table('billings')->get();
                                                            $commonsymptomCount = $commonsymptom->count();
                                                        @endphp
                                                            @if ($commonsymptomCount)
                                                            <h4>{{$commonsymptomCount}}</h4>
                                                            @endif

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                                    {{-- <div class="wg-box">
                                        <div class="flex items-center justify-between">
                                            <h5>Earnings revenue</h5>
                                            <div class="dropdown default">
                                                <button class="btn btn-secondary dropdown-toggle" type="button"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <span class="icon-more"><i class="icon-more-horizontal"></i></span>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li>
                                                        <a href="javascript:void(0);">This Week</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Last Week</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="flex flex-wrap gap40">
                                            <div>
                                                <div class="mb-2">
                                                    <div class="block-legend">
                                                        <div class="dot t1"></div>
                                                        <div class="text-tiny">Revenue</div>
                                                    </div>
                                                </div>
                                                <div class="flex items-center gap10">
                                                    <h4>$37,802</h4>
                                                    <div class="box-icon-trending up">
                                                        <i class="icon-trending-up"></i>
                                                        <div class="body-title number">0.56%</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="mb-2">
                                                    <div class="block-legend">
                                                        <div class="dot t2"></div>
                                                        <div class="text-tiny">Order</div>
                                                    </div>
                                                </div>
                                                <div class="flex items-center gap10">
                                                    <h4>$28,305</h4>
                                                    <div class="box-icon-trending up">
                                                        <i class="icon-trending-up"></i>
                                                        <div class="body-title number">0.56%</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="line-chart-8"></div>
                                    </div> --}}


                                {{-- <div class="tf-section mb-30">

                                    <div class="wg-box"> --}}
                                        {{-- <div class="flex items-center justify-between">
                                            <h5>Recent orders</h5>
                                            <div class="dropdown default">
                                                <a class="btn btn-secondary dropdown-toggle" href="#">
                                                    <span class="view-all">View all</span>
                                                </a>
                                            </div>
                                        </div> --}}
                                        {{-- <div class="wg-table table-all-user">
                                            <div class="table-responsive">
                                                <table class="table table-striped table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 80px">OrderNo</th>
                                                            <th>Name</th>
                                                            <th class="text-center">Phone</th>
                                                            <th class="text-center">Subtotal</th>
                                                            <th class="text-center">Tax</th>
                                                            <th class="text-center">Total</th>

                                                            <th class="text-center">Status</th>
                                                            <th class="text-center">Order Date</th>
                                                            <th class="text-center">Total Items</th>
                                                            <th class="text-center">Delivered On</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-center">1</td>
                                                            <td class="text-center">Divyansh Kumar</td>
                                                            <td class="text-center">1234567891</td>
                                                            <td class="text-center">$172.00</td>
                                                            <td class="text-center">$36.12</td>
                                                            <td class="text-center">$208.12</td>

                                                            <td class="text-center">ordered</td>
                                                            <td class="text-center">2024-07-11 00:54:14</td>
                                                            <td class="text-center">2</td>
                                                            <td></td>
                                                            <td class="text-center">
                                                                <a href="#">
                                                                    <div class="list-icon-function view-icon">
                                                                        <div class="item eye">
                                                                            <i class="icon-eye"></i>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div> --}}
                                    </div>

                                </div>
                            </div>

                        </div>

                        @endsection

