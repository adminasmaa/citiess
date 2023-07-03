@extends('layouts.dashboard.app')

@section('content')



    <section class="dashboard-section body-collapse">
        <div class="overlay mt-80">
            <div class="container-fluid">
                <div class="page-title">
                    <div class="align-items-center row">
                        <div class="col-6">
                            <h3>@lang('site.Receipt of the employee')</h3>
                        </div>
                        <div class="col-6">
                            <ol class="breadcrumb">

                                <li class="breadcrumb-item"><a href="{{route('dashboard.welcome') }}">
                                    <!--@lang('site.dashboard')-->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24"
                                             fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                             stroke-linejoin="round" class="feather feather-home">
                                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                        </svg>
                                    </a>
                                </li>
                                <li class="breadcrumb-item"><a hhref="{{ route('dashboard.leaves.index') }}">
                                        @lang('site.Receipt of the employee') </a>
                                </li>


                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="row">
                    <!-- Individual column searching (text inputs) Starts-->
                    <div class="col-xl-4 col-lg-12  morning-sec box-col-12 mt-3">
                        <div class="card o-hidden profile-greeting">
                            <div class="card-body">
                                <div class="media">
                                    <div class="badge-groups w-100">
                                        <div class="badge f-12">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                 height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                 stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                 class="feather feather-clock me-1">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <polyline points="12 6 12 12 16 14"></polyline>
                                            </svg>
                                            <span id="txt">{{$date}}  {{$dayName}}




                                            </span>

                                        </div>
                                        <div class="badge f-12"><i class="fa fa-spin fa-cog f-14"></i></div>
                                    </div>
                                </div>
                                <div class="greeting-user text-center">

                                    <div class="profile-vector"><img class="img-fluid"
                                                                     src="{{asset('images/employee/'.auth()->user()->image)}}"
                                                                     onerror="this.src='{{asset("assets/images/dashboard/w-user.jpg")}}'"
                                                                     alt="">
                                    </div>
                                    <h4 class="f-w-600"><span id="greeting">@lang('site.goodmorring')
                                        <span>{{auth()->user()->name ?? ''}}</span></span>
                                        <span.
                                            class="right-circle"><i class="fa fa-check-circle f-14 middle"></i></span>
                                    </h4>
                                    <p>
                                    <span>
                                    @lang('site.Tip of the Day') : {{$note}}</span>
                                    </p>
                                    <div class="whatsnew-btn"><a class="btn " data-bs-original-title=""
                                                                 title="">Whats New !</a></div>
                                    <div class="left-icon"><i class="fa fa-bell"> </i></div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-xl-8  dashboard-sec box-col-12 mt-3">
                        <div class="card earning-card m-0">
                            <div class="card-body p-0">
                                <div class="row m-0">
                                    <div class="col-xl-3 earning-content p-0">
                                        <div class="row m-0 chart-left">
                                            <div class="col-xl-12 p-0 left_side_earning">


                                                {{--                                              {{Auth::user()->company->country}}--}}
                                                <h5>@lang('site.date')</h5>
                                                <p class="font-roboto"> {{ $date ?? ''}} {{$dayName ?? ''}}</p>

                                                <h5>@lang('site.hourss')</h5>

                                                <p class="font-roboto">
                                                    @if(auth::user()->company->country==1)
                                                        <a  id="time_is_link"
                                                            rel="nofollow" style="font-size:36px"></a>
                                                        <span id="Riyadh_z439" style="font-size:36px"></span>
                                                    @else


                                                        <a id="time_is_link"
                                                           rel="nofollow" style="font-size:36px"></a>
                                                        <span id="Al_Mansurah_z00c" style="font-size:36px"></span>
                                                    @endif
                                                </p>
                                            </div>
                                            <div class="col-xl-12 p-0 left_side_earning">
                                                <h5>@lang('site.Remaining salarys') </h5>
                                                <p class="font-roboto">{{$remainday ?? ''}} @lang('site.day')</p>
                                            </div>
                                            <div class="col-xl-12 p-0 left_side_earning">
                                                <h5>@lang('site.ratingss') </h5>
                                                <p class="font-roboto">{{$rate ?? ''}}من  {{$rate ?? ''}}</p>
                                            </div>

                                            <div class="col-xl-12 p-0 left-btn"
                                                 onclick="window.location='{{route('dashboard.employee.show',\Illuminate\Support\Facades\Auth::id())}}';">
                                                <a class="btn btn-primary"> @lang('site.my private information')</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-9 p-0">
                                        <div class="row m-0 p-2 ">
                                            <div class="box-col-6 col-6 col-lg-6 col-sm-4 col-xl-4 col-6">
                                                <div class="card social-widget-card"
                                                     onclick="window.location='{{route('dashboard.messagers.index')}}';">
                                                    <div class="card-body">
                                                        <div class="" data-label="50%">
                                                            <img src="{{asset('assets/images/message.png')}}">
                                                        </div>
                                                        <h5 class="b-t-light"> @lang('site.message')</h5>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-col-6 col-6 col-lg-6 col-sm-4 col-xl-4 col-6">
                                                <div class="card social-widget-card"
                                                     onclick="window.location='{{route('dashboard.dailytasks.index')}}';">
                                                    <div class="card-body">
                                                        <div class="" data-label="50%"><img
                                                                src="{{asset('assets/images/5.png')}}"></div>

                                                        <h5 class="b-t-light">@lang('site.dailydays')</h5>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-col-6 col-6 col-lg-6 col-sm-4 col-xl-4 col-6">
                                                <div class="card social-widget-card"
                                                     onclick="window.location='{{route('dashboard.linkeds.index')}}';">
                                                    <div class="card-body">
                                                        <div class="" data-label="50%">
                                                            <img src="{{asset('assets/images/4.png')}}">
                                                        </div>
                                                        <h5 class="b-t-light">@lang('site.linkeds')</h5>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-col-6 col-6 col-lg-6 col-sm-4 col-xl-4 col-6">
                                                <div class="card social-widget-card"
                                                     onclick="window.location='{{route('dashboard.leaveAttendees')}}';">
                                                    <div class="card-body">
                                                        <div class="" data-label="50%"><img
                                                                src="{{asset('assets/images/image.png')}}">
                                                        </div>
                                                        <h5 class="b-t-light"> @lang('site.LeaveAttendence')</h5>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-col-6 col-6 col-lg-6 col-sm-4 col-xl-4 col-6">
                                                <div class="card social-widget-card"
                                                     onclick="window.location='{{route('dashboard.ratings.index')}}';">
                                                    <div class="card-body">
                                                        <div class="" data-label="50%"><img
                                                                src="{{asset('assets/images/2.png')}}"></div>
                                                        <h5 class="b-t-light"> @lang('site.ratings')</h5>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-col-6 col-6 col-lg-6 col-sm-4 col-xl-4 col-6">
                                                <div class="card social-widget-card"
                                                     onclick="window.location='{{route('dashboard.salaries.index')}}';">
                                                    <div class="card-body">
                                                        <div class="" data-label="50%"><img
                                                                src="{{asset('assets/images/6.png')}}"></div>
                                                        <h5 class="b-t-light">@lang('site.salaries')</h5>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!--<div class="col-sm-12">-->
                    <!--    <div class="card">-->
                    <!--        <div class="card-header">-->


                    <!--        </div>-->
                    <!--        <div class="card-body">-->
                <!--            {{--                            <h4 class="card-title">@lang('site.Receipt of the employee')</h4>--}}-->
                <!--            @include('partials._errors')-->

                    <!--            <div class="row">-->
                <!--                <h4>@lang('site.goodmorring') <span>{{auth()->user()->full_name ?? ''}}</span></h4>-->

                    <!--            </div>-->
                    <!--            <br>-->
                    <!--            <div class="row">-->

                    <!--                <div class="col-md-8">-->

                <!--                    <span>@lang('site.Tip of the Day') : {{$note}}</span>-->

                    <!--                </div>-->

                    <!--                <div class="col-md-2">-->

                <!--                    <span>@lang('site.date') : {{$date}}</span><br>-->
                <!--                    <span>@lang('site.Remaining salary') : 23</span><br>-->
                <!--                    <span>@lang('site.ratings') : {{$rate}}</span><br>-->

                    <!--                </div>-->


                    <!--            </div>-->
                    <!--            <br>-->
                    <!--            <div class="row">-->

                    <!--                <div class="col-md-2">-->

                    <!--                    <button class="btn btn-success"-->
                <!--                            onclick="window.location='{{route('dashboard.employee.show',\Illuminate\Support\Facades\Auth::id())}}';"> @lang('site.my private information')</button>-->
                    <!--                </div>-->

                    <!--                <div class="col-md-2">-->

                <!--                    <button class="btn btn-success"> @lang('site.message')</button>-->
                    <!--                </div>-->

                    <!--                <div class="col-md-2">-->

                <!--                    <button class="btn btn-success"    onclick="window.location='{{route('dashboard.dailytasks.index')}}';" > @lang('site.dailydays')</button>-->
                    <!--                </div>-->

                    <!--            </div>-->
                    <!--            <br><br>-->
                    <!--            <div class="row">-->

                    <!--                <div class="col-md-2">-->

                    <!--                    <button class="btn btn-success"-->
                <!--                            onclick="window.location='{{route('dashboard.leaves.index')}}';"> @lang('site.leaves')</button>-->
                    <!--                </div>-->

                    <!--                <div class="col-md-2">-->

                    <!--                    <button class="btn btn-success"-->
                <!--                            onclick="window.location='{{route('dashboard.attendees.index')}}';"> @lang('site.attendees')</button>-->
                    <!--                </div>-->

                    <!--                <div class="col-md-2">-->

                    <!--                    <button class="btn btn-success"-->
                <!--                            onclick="window.location='{{route('dashboard.ratings.index')}}';"> @lang('site.ratings')</button>-->
                    <!--                </div>-->

                    <!--                <div class="col-md-2">-->

                <!--                    <button class="btn btn-success"> @lang('site.salaries')</button>-->
                    <!--                </div>-->

                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!-- Individual column searching (text inputs) Ends-->
                </div>
            </div>
            <!-- Container-fluid Ends-->
        </div>
    </section>

@endsection

@section('scripts')
    <script src="//widget.time.is/t.js"></script>
    @if(auth::user()->company->country==1)
        <script>
            time_is_widget.init({Riyadh_z439: {}});
        </script>
    @else
        <script>
            time_is_widget.init({Al_Mansurah_z00c: {}});
        </script>
    @endif
    <script type="text/javascript" src="//js.nicedit.com/nicEdit-latest.js"></script>
    <script type="text/javascript">
        bkLib.onDomLoaded(function () {
            nicEditors.allTextAreas()
        });
    </script>
@endsection
