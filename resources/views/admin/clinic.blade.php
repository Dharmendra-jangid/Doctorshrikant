@extends('layout.admin')
@section('content')
<div class="main-content-inner">
    <div class="main-content-wrap">
        <div class="flex items-center flex-wrap justify-between gap20 mb-27">
            <h3>Clinic</h3>
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
                    <div class="text-tiny">Clinic</div>
                </li>
            </ul>
        </div>

        <div class="wg-box">
            <div class="flex items-center justify-between gap10 flex-wrap">
                <div class="wg-filter flex-grow">
                    {{-- <form class="form-search">
                        <fieldset class="name">
                            <input type="text" placeholder="Search here..." class="" name="name"
                                tabindex="2" value="" aria-required="true" required="">
                        </fieldset>
                        <div class="button-submit">
                            <button class="" type="submit"><i class="icon-search"></i></button>
                        </div>
                    </form> --}}
                </div>
                <a class="tf-button style-1 w208" href="{{route('admin.addclinic')}}"><i
                        class="icon-plus"></i>Add new</a>
            </div>
            @if (Session::has('status'))
<p class="text-success">{{Session::get('status')}}</p>
            @endif
            <div class="wg-table table-all-user">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Clinic Name</th>
                            <th>Mobil</th>
                            <th>Email</th>


                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clinic as $index=>$clinic)


                        <tr>
                            <td>{{$index+1}}</td>
                            <td>{{$clinic->clinicname}}</td>
                            <td>{{$clinic->phone}}</td>
                            <td>{{$clinic->email}}</td>

                            <td>
                                <div class="list-icon-function">
                                    <a href="{{route('admin.editclinic',['id'=>$clinic->id])}}">
                                        <div class="item edit">
                                            <i class="icon-edit-3"></i>
                                        </div>
                                    </a>
                                   <a href="{{route('admin.clinicdelete',['id'=>$clinic->id])}}">
                                        <div class="item text-danger delete">
                                            <i class="icon-trash-2"></i>
                                        </div>
                                        </a>

                                </div>
                            </td>



                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="divider"></div>
            <div class="flex items-center justify-between flex-wrap gap10 wgp-pagination">

            </div>
        </div>
    </div>
</div>

@endsection
