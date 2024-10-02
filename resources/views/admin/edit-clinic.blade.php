@extends('layout.admin')
@section('content')
<div class="main-content-inner">
    <div class="main-content-wrap">
        <div class="flex items-center flex-wrap justify-between gap20 mb-27">
            <h3>Edit Clinic</h3>
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
                    <a href="{{route('admin.clinic')}}">
                        <div class="text-tiny">Clinic</div>
                    </a>
                </li>
                <li>
                    <i class="icon-chevron-right"></i>
                </li>
                <li>
                    <div class="text-tiny">Edit Clinic</div>
                </li>
            </ul>
        </div>
        <!-- new-category -->
        <div class="wg-box">
            <form class="form-new-product form-style-1" action="{{ route('admin.update.editclinic', ['id' => $clinic->id]) }}" method="POST" enctype="multipart/form-data">

                @csrf
                <fieldset class="name">
                    <div class="body-title">Clinic Name <span class="tf-color-1">*</span></div>
                    <input class="flex-grow" type="text" placeholder="Clinic name" name="clinicname"
                        tabindex="0" value="{{$clinic->clinicname}}" aria-required="true" >
                        @error('clinicname')
                            <p class="text-dander">{{$message}}</p>
                        @enderror
                </fieldset>
                <fieldset class="name">
                    <div class="body-title">Mobil /NO <span class="tf-color-1">*</span></div>
                    <input class="flex-grow" type="text" placeholder="Clinic phone no" name="phone"
                        tabindex="0" value="{{$clinic->phone}}" aria-required="true" >
                        @error('clinicname')
                            <p class="text-dander">{{$message}}</p>
                        @enderror
                </fieldset>
                <fieldset class="name">
                    <div class="body-title">Email <span class="tf-color-1">*</span></div>
                    <input class="flex-grow" type="text" placeholder="Clinic email" name="email"
                        tabindex="0" value="{{$clinic->email}}" aria-required="true" >
                        @error('email')
                            <p class="text-dander">{{$message}}</p>
                        @enderror
                </fieldset>
                <fieldset class="name">
                    <div class="body-title">Map Link <span class="tf-color-1">*</span></div>
                    <input class="flex-grow" type="text" placeholder="Clinic link" name="link"
                        tabindex="0" value="{{$clinic->link}}" aria-required="true" >
                        @error('link')
                            <p class="text-dander">{{$message}}</p>
                        @enderror
                </fieldset>
                <fieldset class="name">
                    <div class="body-title">Consultation Timings <span class="tf-color-1">*</span></div>
                   <textarea  name="consultationtimings" id="editor" class="text" >{{$clinic->consultationtimings}}</textarea>
                   @error('consultationtimings')
                   <p class="text-dander">{{$message}}</p>
               @enderror
                </fieldset>
                <fieldset class="name">
                    <div class="body-title">Clinic Addres <span class="tf-color-1">*</span></div>
                   <textarea  name="clinicaddres" id="editor1" class="text"  >{{$clinic->clinicaddres}}</textarea>
                   @error('clinicaddres')
                   <p class="text-dander">{{$message}}</p>
               @enderror
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
