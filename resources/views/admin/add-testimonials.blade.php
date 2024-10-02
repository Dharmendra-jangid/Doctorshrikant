@extends('layout.admin')
@section('content')
<div class="main-content-inner">
    <!-- main-content-wrap -->
    <div class="main-content-wrap">
        <div class="flex items-center flex-wrap justify-between gap20 mb-27">
            <h3>Testimonials</h3>
            <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                <li>
                    <a href="{{route('admin.index')}}">
                        <div class="text-tiny">Dashboard</div>
                    </a>
                </li>
                <li>
                    <i class="icon-chevron-right"></i>
                </li>
                <li>
                    <a href="{{route('admin.testimonials')}}">
                        <div class="text-tiny">Testimonials</div>
                    </a>
                </li>
                <li>
                    <i class="icon-chevron-right"></i>
                </li>
                <li>
                    <div class="text-tiny">New Slide</div>
                </li>
            </ul>
        </div>
        <!-- new-category -->
        <div class="wg-box">
            <form class="form-new-product form-style-1" action="{{route('admin.store.testimonials')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <fieldset class="name">
                    <div class="body-title"> Name <span class="tf-color-1">*</span></div>
                    <input class="flex-grow" type="text" placeholder="Testimonials name" name="name"
                        tabindex="0" value="" aria-required="true" >

                </fieldset>
                @error('name')<p class="text-danger">{{$message}}</p> @enderror

                <fieldset class="name">
                    <div class="body-title"> Comment   <span class="tf-color-1">*</span></div>
                   <textarea  name="comment" id="editor" class="text"  ></textarea>
                </fieldset>

                {{-- <fieldset class="name">
                    <div class="body-title">Line 1 <span class="tf-color-1">*</span></div>
                    <input class="flex-grow" type="text" placeholder="Line 1" name="text"
                        tabindex="0" value="" aria-required="true" required="">
                </fieldset>
                <fieldset class="name">
                    <div class="body-title">Line 2 <span class="tf-color-1">*</span></div>
                    <input class="flex-grow" type="text" placeholder="Line 2" name="text"
                        tabindex="0" value="" aria-required="true" required="">
                </fieldset> --}}
                <fieldset>
                    <div class="body-title">Upload images <span class="tf-color-1">*</span>
                    </div>
                    <div class="upload-image flex-grow">
                        <div class="item up-load">
                            <label class="uploadfile" for="myFile">
                                <span class="icon">
                                    <i class="icon-upload-cloud"></i>
                                </span>
                                <span class="body-text">Drop your images here or select <span
                                        class="tf-color">click to browse</span></span>
                                <input type="file" id="myFile" name="image">
                                @error('image')<p class="text-danger">{{$message}}</p> @enderror

                            </label>
                        </div>
                    </div>
                </fieldset>

                <div class="bot">
                    <div></div>
                    <button class="tf-button w208" type="submit">Save</button>
                </div>
            </form>
        </div>
        <!-- /new-category -->
    </div>
    <!-- /main-content-wrap -->
</div>
@endsection
