@extends('layout.admin')
@section('content')
<div class="main-content-inner">
    <div class="main-content-wrap">
        <div class="flex items-center flex-wrap justify-between gap20 mb-27">
            <h3>Common Symptoms </h3>
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
                    <div class="text-tiny">Common Symptoms</div>
                </li>
            </ul>
        </div>

        <div class="wg-box">
            <div class="flex items-center justify-between gap10 flex-wrap">
                <div class="wg-filter flex-grow">

                </div>
                <a class="tf-button style-1 w208" href="{{route('admin.add.common.Symptoms')}}"><i
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
                                <th>Common Symptoms Name</th>


                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($common as $index=> $common )


                            <tr>
                                <td>{{$index+1}}</td>
                                <td class="pname"><div class="image">   <img src="{{asset('common')}}/{{$common->image}}" alt="" class="image">
                                    </div>

                                </td>

                                <td>{{$common->name}}</td>
                                <td>
                                    <div class="list-icon-function">
                                        <a href="{{route('admin.edit.commonSymptoms',['id'=>$common->id])}}">
                                            <div class="item edit">
                                                <i class="icon-edit-3"></i>
                                            </div>
                                        </a>
                                       <a href="{{route('admin.commonSymptomsdelete',['id'=>$common->id])}}">
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
