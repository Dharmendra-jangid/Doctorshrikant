@extends('layout.admin')
@section('content')
<div class="main-content-inner">
    <div class="main-content-wrap">
        <div class="flex items-center flex-wrap justify-between gap20 mb-27">
            <h3>Gastro Treatments </h3>
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
                    <div class="text-tiny">Gastro Treatments </div>
                </li>
            </ul>
        </div>

        <div class="wg-box">
            <div class="flex items-center justify-between gap10 flex-wrap">
                <div class="wg-filter flex-grow">

                </div>
                <a class="tf-button style-1 w208" href="{{route('admin.addgstroTreatments')}}"><i
                        class="icon-plus"></i>Add new</a>
            </div>
            <div class="wg-table table-all-user">
                @if (Session::has('status'))
                <p class="text-success">{{Session::get('status')}}</p>
                            @endif
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Gastro Treatments Name</th>


                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($gastro as $index=> $gastro )


                            <tr>
                                <td>{{$index+1}}</td>
                                <td class="pname"><div class="image">   <img src="{{asset('gastro')}}/{{$gastro->image}}" alt="" class="image">
                                    </div>

                                </td>
                                {{-- <td>brand4</td> --}}
                                <td>{{$gastro->name}}</td>
                                <td>
                                    <div class="list-icon-function">
                                        <a href="{{route('admin.edit.gastro',['id'=>$gastro->id])}}">
                                            <div class="item edit">
                                                <i class="icon-edit-3"></i>
                                            </div>
                                        </a>
                                       <a href="{{route('admin.gastrodelete',['id'=>$gastro->id])}}">
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
</div>

@endsection
