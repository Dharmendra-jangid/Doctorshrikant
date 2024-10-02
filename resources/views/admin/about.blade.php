@extends('layout.admin')
@section('content')
<div class="main-content-inner">
    <div class="main-content-wrap">
        <div class="flex items-center flex-wrap justify-between gap20 mb-27">
            <h3>About Us</h3>
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
                    <a href="">
                        <div class="text-tiny">About Us</div>
                    </a>
                </li>

            </ul>
        </div>
        <!-- new-category -->
        @if (Session::has('status'))
        <p class="text-success">{{ Session::get('status') }}</p>
    @endif
        <div class="wg-box">
            <form action="{{route('admin.aboutadd',$about->id)}}" method="POST" enctype="multipart/form-data">


                @csrf
                <fieldset class="name">
                    <div class="body-title"> Name <span class="tf-color-1">*</span></div>
                    <input class="flex-grow" type="text" placeholder=" name" name="name"
                        tabindex="0" value="{{$about->name}}" aria-required="true" >
                </fieldset>
                <fieldset class="name">
                    <div class="body-title"> Phone <span class="tf-color-1">*</span></div>
                    <input class="flex-grow" type="text" placeholder=" phone" name="phone"
                        tabindex="0" value="{{$about->phone}}" aria-required="true" >
                </fieldset>
                <fieldset class="name">
                    <div class="body-title"> Email <span class="tf-color-1">*</span></div>
                    <input class="flex-grow" type="text" placeholder=" email" name="email"
                        tabindex="0" value="{{$about->email}}" aria-required="true" >
                </fieldset>

                <fieldset class="name">
                    <div class="body-title">Title<span class="tf-color-1">*</span></div>
                   <textarea  name="title" id="editor" class="text" >{{$about->title}}</textarea>
                </fieldset>
                <fieldset class="name">
                    <div class="body-title">Short Description <span class="tf-color-1">*</span></div>
                   <textarea  name="shortdescription" id="editor1" class="text"  >{{$about->shortdescription}}</textarea>
                </fieldset>
                <fieldset class="name">
                    <div class="body-title">Qualifications<span class="tf-color-1">*</span></div>
                   <textarea  name="qualifications" id="editor2"class="text"  >{{$about->qualifications}}</textarea>
                </fieldset>
                <fieldset class="name">
                    <div class="body-title">Projects Undertaken<span class="tf-color-1">*</span></div>
                   <textarea  name="projectsundertaken" id="editor3" class="text"  >{{$about->projectsundertaken}}</textarea>
                </fieldset>


                <fieldset class="name">
                    <div class="body-title"> Description <span class="tf-color-1">*</span></div>
                   <textarea  name="description" id="editor4" class="text"  >{{$about->description}}</textarea>
                </fieldset>

                <fieldset class="name">
                    <div class="body-title"> Address <span class="tf-color-1">*</span></div>
                   <textarea  name="address" id="editor5" class="text"  >{{$about->address}}</textarea>
                </fieldset>

                <fieldset>
                    <div class="body-title">Upload images <span class="tf-color-1">*</span>
                    </div>
                    <div class="upload-image flex-grow">
                        <div class="item" id="imgpreview" >
                            <img src="{{asset('about')}}/{{$about->image}}" class="effect8" alt="">
                        </div>
                        <div id="upload-file" class="item up-load">
                            <label class="uploadfile" for="myFile">
                                <span class="icon">
                                    <i class="icon-upload-cloud"></i>
                                </span>
                                <span class="body-text">Drop your images here or select <span
                                        class="tf-color">click to browse</span></span>
                                <input type="file" id="myFile" name="image" accept="image/*">
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
    </div>
</div>

@endsection
