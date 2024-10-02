@extends('layout.admin')
@section('content')
<div class="main-content-inner">
    <div class="main-content-wrap">
        <div class="flex items-center flex-wrap justify-between gap20 mb-27">
            <h3>Edit Common Symptoms</h3>
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
                    <a href="{{route('admin.common.Symptoms')}}">
                        <div class="text-tiny">Common Symptoms</div>
                    </a>
                </li>
                <li>
                    <i class="icon-chevron-right"></i>
                </li>
                <li>
                    <div class="text-tiny">Edit Common Symptoms</div>
                </li>
            </ul>
        </div>
        <!-- new-category -->
        <div class="wg-box">
            <form class="form-new-product form-style-1" action="{{ route('admin.update.commonSymptoms', ['id' => $common->id]) }}" method="POST" enctype="multipart/form-data">

                @csrf
                <fieldset class="name">
                    <div class="body-title">Common Symptoms Name <span class="tf-color-1">*</span></div>
                    <input class="flex-grow" type="text" placeholder="Common Symptoms name" name="name"
                        tabindex="0" value="{{$common->name}}" aria-required="true" >
                        @error('name')
                            <p class="text-dander">{{$message}}</p>
                        @enderror
                </fieldset>


                <fieldset class="name">
                    <div class="body-title">Title <span class="tf-color-1">*</span></div>
                   <textarea  name="title" id="editor" class="text"  >{{$common->title}}</textarea>
                   @error('title')
                   <p class="text-dander">{{$message}}</p>
               @enderror
                </fieldset>


                <fieldset>
                    <div class="body-title">Upload images <span class="tf-color-1">*</span>
                    </div>
                    <div class="upload-image flex-grow">
                        <div class="item" id="imgpreview" >
                            <img src="{{asset('common')}}/{{$common->image}}" class="effect8" alt="">
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
