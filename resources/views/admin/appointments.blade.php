@extends('layout.admin')
@section('content')
<div class="main-content-inner">
    <div class="main-content-wrap">
        <div class="flex items-center flex-wrap justify-between gap20 mb-27">
            <h3>Appointment</h3>
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
                    <div class="text-tiny">Appointments</div>
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

            </div>
            @if (Session::has('status'))
<p class="text-success">{{Session::get('status')}}</p>
            @endif
            <div class="wg-table table-all-user">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th> Name</th>
                            <th> Payment ID</th>
                            <th> Status</th>

                            <th> Appointment Date</th>
                            <th> Appointment Time</th>
                            <th> Mobil </th>


                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($billings as $index=>$billing )
                        <tr>
                            <td>{{$index+1}}</td>
                            <td>{{$billing->name}}</td>
                            <td>{{$billing->payment_id}}</td>
                            <td>{{$billing->status}}</td>
                            <td>{{$billing->appointment_date}}</td>
                            <td>{{$billing->appointment_time}}</td>
                            <td>{{$billing->phone}}</td>
                            <td>
                                <div class="list-icon-function">
                                            <a href="">
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
