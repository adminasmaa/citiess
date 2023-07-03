@extends('dashboard.layouts.app')

@section('content')

    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <!--begin::Content wrapper-->
        <div class="d-flex flex-column flex-column-fluid">
            <!--begin::Toolbar-->
            <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                <!--begin::Toolbar container-->
                <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                    <!--begin::Page title-->
                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                        <!--begin::Title-->
                        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">@lang('site.dashboard')</h1>
                        <!--end::Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">
                                <a href="{{route('dashboard')}}" class="text-muted text-hover-primary">@lang('site.dashboard')</a>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-400 w-5px h-2px"></span>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <!--end::Item-->
                        </ul>
                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Page title-->
                    <!--begin::Actions-->

                    <!--end::Actions-->
                </div>
                <!--end::Toolbar container-->
            </div>
            <!--end::Toolbar-->
            <!--begin::Content-->
            <div id="kt_app_content" class="app-content flex-column-fluid">
                <!--begin::Content container-->
                <div id="kt_app_content_container" class="app-container container-fluid">
                    <!--begin::Row-->
                    <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                        <!--begin::Col-->
                        <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
                            <!--begin::Card widget 20-->
                            <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-md-50 mb-5 mb-xl-10" style="background-color: #F1416C;background-image:url('assets/media/patterns/vector-1.png')">
                                <!--begin::Header-->
                                <div class="card-header pt-5">
                                    <!--begin::Title-->
                                    <div class="card-title d-flex flex-column">
                                        <!--begin::Amount-->
                                        <span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">{{$users}}</span>
                                        <!--end::Amount-->
                                        <!--begin::Subtitle-->
                                        <span class="text-white opacity-75 pt-1 fw-semibold fs-6"> @lang('site.users')</span>
                                        <!--end::Subtitle-->
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Card body-->
                                <div class="card-body d-flex align-items-end pt-0">
                                    <!--begin::Progress-->
                                    <div class="d-flex align-items-center flex-column mt-3 w-100">
                                        <div class="d-flex justify-content-between fw-bold fs-6 text-white opacity-75 w-100 mt-auto mb-2">
                                            <span>20 Pending</span>
                                            <span>72%</span>
                                        </div>
                                        <div class="h-8px mx-3 w-100 bg-white bg-opacity-50 rounded">
                                            <div class="bg-white rounded h-8px" role="progressbar" style="width: 72%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <!--end::Progress-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Card widget 20-->
                            <!--begin::Card widget 7-->
                            <div class="card card-flush h-md-50 mb-5 mb-xl-10">
                                <!--begin::Header-->
                                <div class="card-header pt-5">
                                    <!--begin::Title-->
                                    <div class="card-title d-flex flex-column">
                                        <!--begin::Amount-->
                                        <span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">{{$installments}}</span>
                                        <!--end::Amount-->
                                        <!--begin::Subtitle-->
                                        <span class="text-gray-400 pt-1 fw-semibold fs-6">@lang('site.installments')</span>
                                        <!--end::Subtitle-->
                                    </div>

                                    <div class="d-flex flex-center me-5 pt-2">
                                        <div id="kt_card_widget_17_chart" style="min-width: 70px; min-height: 70px" data-kt-size="70" data-kt-line="11"><span></span><canvas height="70" width="70"></canvas></div>
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Card body-->
                                <!--end::Card body-->
                            </div>
                            <!--end::Card widget 7-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
                            <!--begin::Card widget 17-->
                            <div class="card card-flush h-md-50 mb-5 mb-xl-10">
                                <!--begin::Header-->
                                <div class="card-header pt-5">
                                    <!--begin::Title-->
                                    <div class="card-title d-flex flex-column">
                                        <!--begin::Info-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Currency-->
                                            <span class="fs-4 fw-semibold text-gray-400 me-1 align-self-start">$</span>
                                            <!--end::Currency-->
                                            <!--begin::Amount-->
                                            <span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">{{$clients}}</span>
                                            <!--end::Amount-->
                                            <!--begin::Badge-->
                                            <span class="badge badge-light-success fs-base">
															<i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>2.2%</span>
                                            <!--end::Badge-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Subtitle-->
                                        <span class="text-gray-400 pt-1 fw-semibold fs-6">@lang('site.client')</span>
                                        <!--end::Subtitle-->
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-2 pb-4 d-flex flex-wrap align-items-center">
                                    <!--begin::Chart-->
                                    <div class="d-flex flex-center me-5 pt-2">
                                        <div id="kt_card_widget_17_chart" style="min-width: 70px; min-height: 70px" data-kt-size="70" data-kt-line="11"><span></span><canvas height="70" width="70"></canvas></div>
                                    </div>
                                    <!--end::Chart-->
                                    <!--begin::Labels-->
                                    <div class="d-flex flex-column content-justify-center flex-row-fluid">
                                        <!--begin::Label-->
                                        <div class="d-flex fw-semibold align-items-center">
                                            <!--begin::Bullet-->
                                            <div class="bullet w-8px h-3px rounded-2 bg-success me-3"></div>
                                            <!--end::Bullet-->
                                            <!--begin::Label-->
                                            <div class="text-gray-500 flex-grow-1 me-4">Active</div>
                                            <!--end::Label-->
                                            <!--begin::Stats-->
                                            <div class="fw-bolder text-gray-700 text-xxl-end">$4</div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::Label-->
                                        <!--begin::Label-->
                                        <div class="d-flex fw-semibold align-items-center my-3">
                                            <!--begin::Bullet-->
                                            <div class="bullet w-8px h-3px rounded-2 bg-primary me-3"></div>
                                            <!--end::Bullet-->
                                            <!--begin::Label-->
                                            <div class="text-gray-500 flex-grow-1 me-4">No Active</div>
                                            <!--end::Label-->
                                            <!--begin::Stats-->
                                            <div class="fw-bolder text-gray-700 text-xxl-end">$2</div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::Label-->
                                        <!--begin::Label-->
                                        <div class="d-flex fw-semibold align-items-center">
                                            <!--begin::Bullet-->
                                            <!--end::Bullet-->
                                            <!--begin::Label-->

                                            <!--end::Stats-->
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Labels-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Card widget 17-->
                            <!--begin::List widget 26-->
                            <div class="card card-flush h-lg-50">
                                <!--begin::Header-->
                                <div class="card-header pt-5">
                                    <!--begin::Title-->
                                    <h3 class="card-title text-gray-800 fw-bold">@lang('site.city map management')</h3>
                                    <!--end::Title-->
                                    <!--begin::Toolbar-->
                                    <div class="card-toolbar">
                                        <!--begin::Menu-->
                                        <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                            <i class="ki-duotone ki-dots-square fs-1 text-gray-300 me-n1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                            </i>
                                        </button>
                                        <!--begin::Menu 2-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator mb-3 opacity-75"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">New Ticket</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">New Customer</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                                <!--begin::Menu item-->
                                                <a href="#" class="menu-link px-3">
                                                    <span class="menu-title">New Group</span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <!--end::Menu item-->
                                                <!--begin::Menu sub-->
                                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Admin Group</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Staff Group</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Member Group</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu sub-->
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">New Contact</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator mt-3 opacity-75"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content px-3 py-3">
                                                    <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                                </div>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu 2-->
                                        <!--end::Menu-->
                                    </div>
                                    <!--end::Toolbar-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body pt-5">
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Section-->
                                        <a href="{{route('dashboard.zones.index')}}" class="text-primary fw-semibold fs-6 me-2">@lang('site.zones')</a>
                                        <!--end::Section-->
                                        <!--begin::Action-->
                                        <button type="button" class="btn btn-icon btn-sm h-auto btn-color-gray-400 btn-active-color-primary justify-content-end">
                                            <i class="ki-duotone ki-exit-right-corner fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </button>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-3"></div>
                                    <!--end::Separator-->
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Section-->
                                        <a href="{{route('dashboard.blocks.index')}}" class="text-primary fw-semibold fs-6 me-2">@lang('site.blocks')</a>
                                        <!--end::Section-->
                                        <!--begin::Action-->
                                        <button type="button" class="btn btn-icon btn-sm h-auto btn-color-gray-400 btn-active-color-primary justify-content-end">
                                            <i class="ki-duotone ki-exit-right-corner fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </button>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-3"></div>
                                    <!--end::Separator-->
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Section-->
                                        <a href="{{route('dashboard.units.index')}}" class="text-primary fw-semibold fs-6 me-2">@lang('site.units')</a>
                                        <!--end::Section-->
                                        <!--begin::Action-->
                                        <button type="button" class="btn btn-icon btn-sm h-auto btn-color-gray-400 btn-active-color-primary justify-content-end">
                                            <i class="ki-duotone ki-exit-right-corner fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </button>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::LIst widget 26-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-xxl-6">
                            <!--begin::Engage widget 10-->
                            <div class="card card-flush h-md-100">
                                <!--begin::Body-->
                                <div class="card-body d-flex flex-column justify-content-between mt-9 bgi-no-repeat bgi-size-cover bgi-position-x-center pb-0" style="background-position: 100% 50%; background-image:url('assets/media/stock/900x600/42.png')">
                                    <!--begin::Wrapper-->
                                    <div class="mb-10">
                                        <!--begin::Title-->
                                        <div class="fs-2hx fw-bold text-gray-800 text-center mb-13">
														<span class="me-2">Try our all new Enviroment with
														<br>
														<span class="position-relative d-inline-block text-danger">
															<a class="text-danger opacity-75-hover">Pro Plan</a>
                                                            <!--begin::Separator-->
															<span class="position-absolute opacity-15 bottom-0 start-0 border-4 border-danger border-bottom w-100"></span>
                                                            <!--end::Separator-->
														</span></span>for Free</div>
                                        <!--end::Title-->
                                        <!--begin::Action-->
                                        <div class="text-center">
                                            <a href="#" class="btn btn-sm btn-dark fw-bold" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">Upgrade Now</a>
                                        </div>
                                        <!--begin::Action-->
                                    </div>
                                    <!--begin::Wrapper-->
                                    <!--begin::Illustration-->
                                    <img class="mx-auto h-150px h-lg-200px theme-light-show" src="{{asset('style/assets/media/illustrations/misc/upgrade.svg')}}" alt="">
                                    <img class="mx-auto h-150px h-lg-200px theme-dark-show" src="{{asset('style/assets/media/illustrations/misc/upgrade-dark.svg')}}" alt="">
                                    <!--end::Illustration-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Engage widget 10-->
                        </div>
                        <!--end::Col-->
                    </div>

                    <div class="row g-5 g-xl-10">
                        <!--begin::Col-->
                        <div class="col-xl-4 mb-xl-10">

                            <!--begin::Lists Widget 19-->
                            <div class="card card-flush h-xl-100">
                                <!--begin::Heading-->
                                <div class="card-header rounded bgi-no-repeat bgi-size-cover bgi-position-y-top bgi-position-x-center align-items-start h-250px" style="background-image:url('/metronic8/demo1/assets/media/svg/shapes/top-green.png" data-bs-theme="light">
                                    <!--begin::Title-->
                                    <h3 class="card-title align-items-start flex-column text-white pt-15">
                                        <span class="fw-bold fs-2x mb-3">My Tasks</span>

                                        <div class="fs-4 text-white">
                                            <span class="opacity-75">You have</span>

                                            <span class="position-relative d-inline-block">
                    <a href="/metronic8/demo1/../demo1/pages/user-profile/projects.html" class="link-white opacity-75-hover fw-bold d-block mb-1">4 tasks</a>

                                                <!--begin::Separator-->
                    <span class="position-absolute opacity-50 bottom-0 start-0 border-2 border-body border-bottom w-100"></span>
                                                <!--end::Separator-->
                </span>

                                            <span class="opacity-75">to comlete</span>
                                        </div>
                                    </h3>
                                    <!--end::Title-->

                                    <!--begin::Toolbar-->
                                    <div class="card-toolbar pt-5">
                                        <!--begin::Menu-->
                                        <button class="btn btn-sm btn-icon btn-active-color-primary btn-color-white bg-white bg-opacity-25 bg-hover-opacity-100 bg-hover-white bg-active-opacity-25 w-20px h-20px" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true" fdprocessedid="foit1bi">

                                            <i class="ki-duotone ki-dots-square fs-4"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                        </button>


                                        <!--begin::Menu 2-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu separator-->
                                            <div class="separator mb-3 opacity-75"></div>
                                            <!--end::Menu separator-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    New Ticket
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    New Customer
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                                <!--begin::Menu item-->
                                                <a href="#" class="menu-link px-3">
                                                    <span class="menu-title">New Group</span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <!--end::Menu item-->

                                                <!--begin::Menu sub-->
                                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">
                                                            Admin Group
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">
                                                            Staff Group
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">
                                                            Member Group
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu sub-->
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    New Contact
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu separator-->
                                            <div class="separator mt-3 opacity-75"></div>
                                            <!--end::Menu separator-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content px-3 py-3">
                                                    <a class="btn btn-primary  btn-sm px-4" href="#">
                                                        Generate Reports
                                                    </a>
                                                </div>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu 2-->

                                        <!--end::Menu-->
                                    </div>
                                    <!--end::Toolbar-->
                                </div>
                                <!--end::Heading-->

                                <!--begin::Body-->
                                <div class="card-body mt-n20">
                                    <!--begin::Stats-->
                                    <div class="mt-n20 position-relative">
                                        <!--begin::Row-->
                                        <div class="row g-3 g-lg-6">
                                            <!--begin::Col-->
                                            <div class="col-6">
                                                <!--begin::Items-->
                                                <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-30px me-5 mb-8">
                                <span class="symbol-label">
                                    <i class="ki-duotone ki-flask fs-1 text-primary"><span class="path1"></span><span class="path2"></span></i>
                                </span>
                                                    </div>
                                                    <!--end::Symbol-->

                                                    <!--begin::Stats-->
                                                    <div class="m-0">
                                                        <!--begin::Number-->
                                                        <span class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">{{$services}}</span>
                                                        <!--end::Number-->

                                                        <!--begin::Desc-->
                                                        <span class="text-gray-500 fw-semibold fs-6">@lang('site.services')</span>
                                                        <!--end::Desc-->
                                                    </div>
                                                    <!--end::Stats-->
                                                </div>
                                                <!--end::Items-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-6">
                                                <!--begin::Items-->
                                                <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-30px me-5 mb-8">
                                <span class="symbol-label">
                                    <i class="ki-duotone ki-bank fs-1 text-primary"><span class="path1"></span><span class="path2"></span></i>
                                </span>
                                                    </div>
                                                    <!--end::Symbol-->

                                                    <!--begin::Stats-->
                                                    <div class="m-0">
                                                        <!--begin::Number-->
                                                        <span class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">{{$employees}}</span>
                                                        <!--end::Number-->

                                                        <!--begin::Desc-->
                                                        <span class="text-gray-500 fw-semibold fs-6">@lang('site.employees')</span>
                                                        <!--end::Desc-->
                                                    </div>
                                                    <!--end::Stats-->
                                                </div>
                                                <!--end::Items-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-6">
                                                <!--begin::Items-->
                                                <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-30px me-5 mb-8">
                                <span class="symbol-label">
                                    <i class="ki-duotone ki-award fs-1 text-primary"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                </span>
                                                    </div>
                                                    <!--end::Symbol-->

                                                    <!--begin::Stats-->
                                                    <div class="m-0">
                                                        <!--begin::Number-->
                                                        <span class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">{{$notes}}</span>
                                                        <!--end::Number-->

                                                        <!--begin::Desc-->
                                                        <span class="text-gray-500 fw-semibold fs-6">@lang('site.notes')</span>
                                                        <!--end::Desc-->
                                                    </div>
                                                    <!--end::Stats-->
                                                </div>
                                                <!--end::Items-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-6">
                                                <!--begin::Items-->
                                                <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-30px me-5 mb-8">
                                <span class="symbol-label">
                                    <i class="ki-duotone ki-timer fs-1 text-primary"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                </span>
                                                    </div>
                                                    <!--end::Symbol-->

                                                    <!--begin::Stats-->
                                                    <div class="m-0">
                                                        <!--begin::Number-->
                                                        <span class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">{{$sections}}</span>
                                                        <!--end::Number-->

                                                        <!--begin::Desc-->
                                                        <span class="text-gray-500 fw-semibold fs-6">@lang('site.sections')</span>
                                                        <!--end::Desc-->
                                                    </div>
                                                    <!--end::Stats-->
                                                </div>
                                                <!--end::Items-->
                                            </div>
                                            <!--end::Col-->

                                        </div>
                                        <!--end::Row-->
                                    </div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Lists Widget 19-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-xl-8 mb-5 mb-xl-10">
                            <!--begin::Row-->
                            <div class="row g-5 g-xl-10">
                                <!--begin::Col-->
                                <div class="col-xl-6 mb-xl-10">


                                    <!--begin::Slider Widget 1-->
                                    <div id="kt_sliders_widget_1_slider" class="card card-flush carousel carousel-custom carousel-stretch slide h-xl-100 pointer-event" data-bs-ride="carousel" data-bs-interval="5000">
                                        <!--begin::Header-->
                                        <div class="card-header pt-5">
                                            <!--begin::Title-->
                                            <h4 class="card-title d-flex align-items-start flex-column">
                                                <span class="card-label fw-bold text-gray-800">@lang('site.salesmangement')</span>
                                                <span class="text-gray-400 mt-1 fw-bold fs-7">{{ \App\Models\Price::count() }} @lang('site.prices')</span>
                                            </h4>
                                            <!--end::Title-->

                                            <!--begin::Toolbar-->
                                            <div class="card-toolbar">
                                                <!--begin::Carousel Indicators-->
                                                <ol class="p-0 m-0 carousel-indicators carousel-indicators-bullet carousel-indicators-active-primary">
                                                    <li data-bs-target="#kt_sliders_widget_1_slider" data-bs-slide-to="0" class="ms-1"></li>
                                                    <li data-bs-target="#kt_sliders_widget_1_slider" data-bs-slide-to="1" class="ms-1 active" aria-current="true"></li>
                                                    <li data-bs-target="#kt_sliders_widget_1_slider" data-bs-slide-to="2" class="ms-1"></li>

                                                </ol>
                                                <!--end::Carousel Indicators-->
                                            </div>
                                            <!--end::Toolbar-->
                                        </div>
                                        <!--end::Header-->

                                        <!--begin::Body-->
                                        <div class="card-body py-6">
                                            <!--begin::Carousel-->
                                            <div class="carousel-inner mt-n5">
                                                <!--begin::Item-->
                                                <div class="carousel-item show">
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex align-items-center mb-5">
                                                        <!--begin::Chart-->
                                                        <div class="w-80px flex-shrink-0 me-2">
                                                            <div class="min-h-auto ms-n3 initialized" id="kt_slider_widget_1_chart_1" style="height: 100px; min-height: 100px;"><div id="apexchartsoyd1etle" class="apexcharts-canvas apexchartsoyd1etle" style="width: 0px; height: 100px;"><svg id="SvgjsSvg1358" width="0" height="100" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1361" class="apexcharts-annotations"></g><g id="SvgjsG1360" class="apexcharts-inner apexcharts-graphical"><defs id="SvgjsDefs1359"></defs></g></svg><div class="apexcharts-legend"></div></div></div>
                                                        </div>
                                                        <!--end::Chart-->

                                                        <!--begin::Info-->
                                                        <div class="m-0">
                                                            <!--begin::Subtitle-->
                                                            <h4 class="fw-bold text-gray-800 mb-3">Ruby on Rails</h4>
                                                            <!--end::Subtitle-->

                                                            <!--begin::Items-->
                                                            <div class="d-flex d-grid gap-5">
                                                                <!--begin::Item-->
                                                                <div class="d-flex flex-column flex-shrink-0 me-4">
                                                                    <!--begin::Section-->
                                                                    <span class="d-flex align-items-center fs-7 fw-bold text-gray-400 mb-2">
                                        <i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2"><span class="path1"></span><span class="path2"></span></i> @lang('site.unitstatus')
                                    </span>
                                                                    <!--end::Section-->

                                                                    <!--begin::Section-->
                                                                    <span class="d-flex align-items-center text-gray-400 fw-bold fs-7">
                                        <i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2"><span class="path1"></span><span class="path2"></span></i> {{\App\Models\UnitStatus::count()}}
                                    </span>
                                                                    <!--end::Section-->
                                                                </div>
                                                                <!--end::Item-->

                                                                <!--begin::Item-->
                                                                <div class="d-flex flex-column flex-shrink-0">
                                                                    <!--begin::Section-->
                                                                    <span class="d-flex align-items-center fs-7 fw-bold text-gray-400 mb-2">
                                        <i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2"><span class="path1"></span><span class="path2"></span></i> @lang('site.units')
                                    </span>
                                                                    <!--end::Section-->

                                                                    <!--begin::Section-->
                                                                    <span class="d-flex align-items-center text-gray-400 fw-bold fs-7">
                                        <i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2"><span class="path1"></span><span class="path2"></span></i> {{\App\Models\Unit::count()}}
                                    </span>
                                                                    <!--end::Section-->
                                                                </div>
                                                                <!--end::Item-->
                                                            </div>
                                                            <!--end::Items-->
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::Wrapper-->

                                                    <!--begin::Action-->
                                                    <div class="m-0">
                                                        <a href="{{route('dashboard.employees.index')}}" class="btn btn-sm btn-light me-2 mb-2">@lang('site.employees')</a>

                                                        <a href="{{route('dashboard.notes.index')}}" class="btn btn-sm btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">@lang('site.notes')</a>
                                                    </div>
                                                    <!--end::Action-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="carousel-item active">
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex align-items-center mb-5">
                                                        <!--begin::Chart-->
                                                        <div class="w-80px flex-shrink-0 me-2">
                                                            <div class="min-h-auto ms-n3 initialized" id="kt_slider_widget_1_chart_2" style="height: 100px; min-height: 101px;"><div id="apexchartskdqyn4gc" class="apexcharts-canvas apexchartskdqyn4gc apexcharts-theme-light" style="width: 90px; height: 101px;"><svg id="SvgjsSvg1340" width="90" height="100.99999999999999" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1342" class="apexcharts-inner apexcharts-graphical" transform="translate(-5, 0)"><defs id="SvgjsDefs1341"><clipPath id="gridRectMaskkdqyn4gc"><rect id="SvgjsRect1344" width="106" height="102" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskkdqyn4gc"></clipPath><clipPath id="nonForecastMaskkdqyn4gc"></clipPath><clipPath id="gridRectMarkerMaskkdqyn4gc"><rect id="SvgjsRect1345" width="104" height="104" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1346" class="apexcharts-radialbar"><g id="SvgjsG1347"><g id="SvgjsG1348" class="apexcharts-tracks"><g id="SvgjsG1349" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 50 18.84146341463414 A 31.15853658536586 31.15853658536586 0 1 1 49.994561809492424 18.84146388920579" fill="none" fill-opacity="1" stroke="rgba(241,250,255,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="8.414634146341463" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 50 18.84146341463414 A 31.15853658536586 31.15853658536586 0 1 1 49.994561809492424 18.84146388920579"></path></g></g><g id="SvgjsG1351"><g id="SvgjsG1354" class="apexcharts-series apexcharts-radial-series" seriesName="Progress" rel="1" data:realIndex="0"><path id="SvgjsPath1355" d="M 50 18.84146341463414 A 31.15853658536586 31.15853658536586 0 1 1 40.37148267526841 79.63352925773314" fill="none" fill-opacity="0.85" stroke="rgba(0,158,247,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="8.414634146341463" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="198" data:value="55" index="0" j="0" data:pathOrig="M 50 18.84146341463414 A 31.15853658536586 31.15853658536586 0 1 1 40.37148267526841 79.63352925773314"></path></g><circle id="SvgjsCircle1352" r="26.951219512195127" cx="50" cy="50" class="apexcharts-radialbar-hollow" fill="transparent"></circle><g id="SvgjsG1353" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"></g></g></g></g><line id="SvgjsLine1356" x1="0" y1="0" x2="100" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1357" x1="0" y1="0" x2="100" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1343" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div></div></div>
                                                        </div>
                                                        <!--end::Chart-->

                                                        <!--begin::Info-->
                                                        <div class="m-0">
                                                            <!--begin::Subtitle-->
                                                            <h4 class="fw-bold text-gray-800 mb-3">Ruby on Rails</h4>
                                                            <!--end::Subtitle-->

                                                            <!--begin::Items-->
                                                            <div class="d-flex d-grid gap-5">
                                                                <!--begin::Item-->
                                                                <div class="d-flex flex-column flex-shrink-0 me-4">
                                                                    <!--begin::Section-->
                                                                    <span class="d-flex align-items-center fs-7 fw-bold text-gray-400 mb-2">
                                        <i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2"><span class="path1"></span><span class="path2"></span></i> @lang('site.services')
                                    </span>
                                                                    <!--end::Section-->

                                                                    <!--begin::Section-->
                                                                    <span class="d-flex align-items-center text-gray-400 fw-bold fs-7">
                                        <i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2"><span class="path1"></span><span class="path2"></span></i> @lang('site.repairs')
                                    </span>
                                                                    <!--end::Section-->
                                                                </div>
                                                                <!--end::Item-->

                                                                <!--begin::Item-->
                                                                <div class="d-flex flex-column flex-shrink-0">
                                                                    <!--begin::Section-->
                                                                    <span class="d-flex align-items-center fs-7 fw-bold text-gray-400 mb-2">
                                        <i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2"><span class="path1"></span><span class="path2"></span></i> {{\App\Models\Service::count()}}
                                    </span>
                                                                    <!--end::Section-->

                                                                    <!--begin::Section-->
                                                                    <span class="d-flex align-items-center text-gray-400 fw-bold fs-7">
                                        <i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2"><span class="path1"></span><span class="path2"></span></i> {{ \App\Models\AcRepair::count() }}
                                    </span>
                                                                    <!--end::Section-->
                                                                </div>
                                                                <!--end::Item-->
                                                            </div>
                                                            <!--end::Items-->
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::Wrapper-->

                                                    <!--begin::Action-->
                                                    <div class="m-0">
                                                        <a href="{{route('dashboard.prices.index')}}" class="btn btn-sm btn-light me-2 mb-2">@lang('site.prices')</a>

                                                        <a href="{{route('dashboard.unitstatus.index')}}" class="btn btn-sm btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">@lang('site.unitstatus')</a>
                                                    </div>
                                                    <!--end::Action-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="carousel-item">
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex align-items-center mb-5">
                                                        <!--begin::Chart-->
                                                        <div class="w-80px flex-shrink-0 me-2">
                                                            <div class="min-h-auto ms-n3 initialized" id="kt_slider_widget_1_chart_3" style="height: 100px; min-height: 100px;"><div id="apexcharts4jzurzbv" class="apexcharts-canvas apexcharts4jzurzbv" style="width: 0px; height: 100px;"><svg id="SvgjsSvg1336" width="0" height="100" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1339" class="apexcharts-annotations"></g><g id="SvgjsG1338" class="apexcharts-inner apexcharts-graphical"><defs id="SvgjsDefs1337"></defs></g></svg><div class="apexcharts-legend"></div></div></div>
                                                        </div>
                                                        <!--end::Chart-->

                                                        <!--begin::Info-->
                                                        <div class="m-0">
                                                            <!--begin::Subtitle-->
                                                            <h4 class="fw-bold text-gray-800 mb-3">Ruby on Rails</h4>
                                                            <!--end::Subtitle-->

                                                            <!--begin::Items-->
                                                            <div class="d-flex d-grid gap-5">
                                                                <!--begin::Item-->
                                                                <div class="d-flex flex-column flex-shrink-0 me-4">
                                                                    <!--begin::Section-->
                                                                    <span class="d-flex align-items-center fs-7 fw-bold text-gray-400 mb-2">
                                        <i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2"><span class="path1"></span><span class="path2"></span></i> @lang('site.notes')
                                    </span>
                                                                    <!--end::Section-->

                                                                    <!--begin::Section-->
                                                                    <span class="d-flex align-items-center text-gray-400 fw-bold fs-7">
                                        <i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2"><span class="path1"></span><span class="path2"></span></i>  @lang('site.sections')
                                    </span>
                                                                    <!--end::Section-->
                                                                </div>
                                                                <!--end::Item-->

                                                                <!--begin::Item-->
                                                                <div class="d-flex flex-column flex-shrink-0">
                                                                    <!--begin::Section-->
                                                                    <span class="d-flex align-items-center fs-7 fw-bold text-gray-400 mb-2">
                                        <i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2"><span class="path1"></span><span class="path2"></span></i> {{\App\Models\Notes::count()}}
                                    </span>
                                                                    <!--end::Section-->

                                                                    <!--begin::Section-->
                                                                    <span class="d-flex align-items-center text-gray-400 fw-bold fs-7">
                                        <i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2"><span class="path1"></span><span class="path2"></span></i> {{\App\Models\Section::count()}}
                                    </span>
                                                                    <!--end::Section-->
                                                                </div>
                                                                <!--end::Item-->
                                                            </div>
                                                            <!--end::Items-->
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::Wrapper-->

                                                    <!--begin::Action-->
                                                    <div class="m-0">
                                                        <a href="{{route('dashboard.services.index')}}" class="btn btn-sm btn-light me-2 mb-2">@lang('site.services')</a>

                                                        <a href="{{route('dashboard.repairs.index')}}" class="btn btn-sm btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">@lang('site.repairs')</a>
                                                    </div>
                                                    <!--end::Action-->
                                                </div>
                                                <!--end::Item-->

                                            </div>
                                            <!--end::Carousel-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Slider Widget 1-->


                                </div>
                                <!--end::Col-->

                                <!--begin::Col-->
                                <div class="col-xl-6 mb-5 mb-xl-10">


                                    <!--begin::Slider Widget 2-->
                                    <div id="kt_sliders_widget_2_slider" class="card card-flush carousel carousel-custom carousel-stretch slide h-xl-100 pointer-event" data-bs-ride="carousel" data-bs-interval="5500">
                                        <!--begin::Header-->
                                        <div class="card-header pt-5">
                                            <!--begin::Title-->
                                            <h4 class="card-title d-flex align-items-start flex-column">
                                                <span class="card-label fw-bold text-gray-800">@lang('site.client')</span>
                                                <span class="text-gray-400 mt-1 fw-bold fs-7">@lang('site.clients')</span>
                                            </h4>
                                            <!--end::Title-->

                                            <!--begin::Toolbar-->
                                            <div class="card-toolbar">
                                                <!--begin::Carousel Indicators-->
                                                <ol class="p-0 m-0 carousel-indicators carousel-indicators-bullet carousel-indicators-active-success">
                                                    <li data-bs-target="#kt_sliders_widget_2_slider" data-bs-slide-to="0" class="ms-1"></li>
                                                    <li data-bs-target="#kt_sliders_widget_2_slider" data-bs-slide-to="1" class="ms-1"></li>
                                                    <li data-bs-target="#kt_sliders_widget_2_slider" data-bs-slide-to="2" class="ms-1 active" aria-current="true"></li>

                                                </ol>
                                                <!--end::Carousel Indicators-->
                                            </div>
                                            <!--end::Toolbar-->
                                        </div>
                                        <!--end::Header-->

                                        <!--begin::Body-->
                                        <div class="card-body py-6">
                                            <!--begin::Carousel-->
                                            <div class="carousel-inner">
                                                <!--begin::Item-->
                                                <div class="carousel-item show">
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex align-items-center mb-9">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-70px symbol-circle me-5">
                            <span class="symbol-label bg-light-success">
                                <i class="ki-duotone ki-abstract-24 fs-3x text-success"><span class="path1"></span><span class="path2"></span></i>
                            </span>
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Info-->
                                                        <div class="m-0">
                                                            <!--begin::Subtitle-->
                                                            <h4 class="fw-bold text-gray-800 mb-3">Ruby on Rails</h4>
                                                            <!--end::Subtitle-->

                                                            <!--begin::Items-->
                                                            <div class="d-flex d-grid gap-5">
                                                                <!--begin::Item-->
                                                                <div class="d-flex flex-column flex-shrink-0 me-4">
                                                                    <!--begin::Section-->
                                                                    <span class="d-flex align-items-center fs-7 fw-bold text-gray-400 mb-2">
                                        <i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2"><span class="path1"></span><span class="path2"></span></i> @lang('site.clients')
                                    </span>
                                                                    <!--end::Section-->

                                                                    <!--begin::Section-->
                                                                    <span class="d-flex align-items-center text-gray-400 fw-bold fs-7">
                                        <i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2"><span class="path1"></span><span class="path2"></span></i> @lang('site.installments')
                                    </span>
                                                                    <!--end::Section-->
                                                                </div>
                                                                <!--end::Item-->

                                                                <!--begin::Item-->
                                                                <div class="d-flex flex-column flex-shrink-0">
                                                                    <!--begin::Section-->
                                                                    <span class="d-flex align-items-center fs-7 fw-bold text-gray-400 mb-2">
                                        <i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2"><span class="path1"></span><span class="path2"></span></i> {{ \App\Models\Client::count() }}
                                    </span>
                                                                    <!--end::Section-->

                                                                    <!--begin::Section-->
                                                                    <span class="d-flex align-items-center text-gray-400 fw-bold fs-7">
                                        <i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2"><span class="path1"></span><span class="path2"></span></i> {{ \App\Models\Installment::count() }}
                                    </span>
                                                                    <!--end::Section-->
                                                                </div>
                                                                <!--end::Item-->
                                                            </div>
                                                            <!--end::Items-->
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::Wrapper-->

                                                    <!--begin::Action-->
                                                    <div class="m-0">
                                                        <a href="{{route('dashboard.units.index')}}" class="btn btn-sm btn-light me-2 mb-2">@lang('site.units')</a>

                                                        <a href="{{route('dashboard.sections.index')}}" class="btn btn-sm btn-success mb-2" data-bs-toggle="modal" data-bs-target="#kt_modal_create_campaign">@lang('site.sections')</a>
                                                    </div>
                                                    <!--end::Action-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="carousel-item">
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex align-items-center mb-9">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-70px symbol-circle me-5">
                            <span class="symbol-label bg-light-danger">
                                <i class="ki-duotone ki-abstract-25 fs-3x text-danger"><span class="path1"></span><span class="path2"></span></i>
                            </span>
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Info-->
                                                        <div class="m-0">
                                                            <!--begin::Subtitle-->
                                                            <h4 class="fw-bold text-gray-800 mb-3">Ruby on Rails</h4>
                                                            <!--end::Subtitle-->

                                                            <!--begin::Items-->
                                                            <div class="d-flex d-grid gap-5">
                                                                <!--begin::Item-->
                                                                <div class="d-flex flex-column flex-shrink-0 me-4">
                                                                    <!--begin::Section-->
                                                                    <span class="d-flex align-items-center fs-7 fw-bold text-gray-400 mb-2">
                                        <i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2"><span class="path1"></span><span class="path2"></span></i> @lang('site.invoices')
                                    </span>
                                                                    <!--end::Section-->

                                                                    <!--begin::Section-->
                                                                    <span class="d-flex align-items-center text-gray-400 fw-bold fs-7">
                                        <i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2"><span class="path1"></span><span class="path2"></span></i> @lang('site.invoicesbase')
                                    </span>
                                                                    <!--end::Section-->
                                                                </div>
                                                                <!--end::Item-->

                                                                <!--begin::Item-->
                                                                <div class="d-flex flex-column flex-shrink-0">
                                                                    <!--begin::Section-->
                                                                    <span class="d-flex align-items-center fs-7 fw-bold text-gray-400 mb-2">
                                        <i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2"><span class="path1"></span><span class="path2"></span></i> {{\App\Models\Invoice::count()}}
                                    </span>
                                                                    <!--end::Section-->

                                                                    <!--begin::Section-->
                                                                    <span class="d-flex align-items-center text-gray-400 fw-bold fs-7">
                                        <i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2"><span class="path1"></span><span class="path2"></span></i>{{  \App\Models\BasicInvoice::count() }}
                                    </span>
                                                                    <!--end::Section-->
                                                                </div>
                                                                <!--end::Item-->
                                                            </div>
                                                            <!--end::Items-->
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::Wrapper-->

                                                    <!--begin::Action-->
                                                    <div class="m-0">
                                                        <a href="{{route('dashboard.clients.index')}}" class="btn btn-sm btn-light me-2 mb-2">@lang('site.clients')</a>

                                                        <a href="{{route('dashboard.installments.index')}}" class="btn btn-sm btn-success mb-2" data-bs-toggle="modal" data-bs-target="#kt_modal_create_campaign">@lang('site.installments') </a>
                                                    </div>
                                                    <!--end::Action-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="carousel-item active">
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex align-items-center mb-9">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-70px symbol-circle me-5">
                            <span class="symbol-label bg-light-primary">
                                <i class="ki-duotone ki-abstract-36 fs-3x text-primary"><span class="path1"></span><span class="path2"></span></i>
                            </span>
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Info-->
                                                        <div class="m-0">
                                                            <!--begin::Subtitle-->
                                                            <h4 class="fw-bold text-gray-800 mb-3">Ruby on Rails</h4>
                                                            <!--end::Subtitle-->

                                                            <!--begin::Items-->
                                                            <div class="d-flex d-grid gap-5">
                                                                <!--begin::Item-->
                                                                <div class="d-flex flex-column flex-shrink-0 me-4">
                                                                    <!--begin::Section-->
                                                                    <span class="d-flex align-items-center fs-7 fw-bold text-gray-400 mb-2">
                                        <i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2"><span class="path1"></span><span class="path2"></span></i> @lang('site.blocks')
                                    </span>
                                                                    <!--end::Section-->

                                                                    <!--begin::Section-->
                                                                    <span class="d-flex align-items-center text-gray-400 fw-bold fs-7">
                                        <i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2"><span class="path1"></span><span class="path2"></span></i> @lang('site.zones')
                                    </span>
                                                                    <!--end::Section-->
                                                                </div>
                                                                <!--end::Item-->

                                                                <!--begin::Item-->
                                                                <div class="d-flex flex-column flex-shrink-0">
                                                                    <!--begin::Section-->
                                                                    <span class="d-flex align-items-center fs-7 fw-bold text-gray-400 mb-2">
                                        <i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2"><span class="path1"></span><span class="path2"></span></i> {{ \App\Models\Block::count() }}
                                    </span>
                                                                    <!--end::Section-->

                                                                    <!--begin::Section-->
                                                                    <span class="d-flex align-items-center text-gray-400 fw-bold fs-7">
                                        <i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2"><span class="path1"></span><span class="path2"></span></i>  {{ \App\Models\Zone::count() }}
                                    </span>
                                                                    <!--end::Section-->
                                                                </div>
                                                                <!--end::Item-->
                                                            </div>
                                                            <!--end::Items-->
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::Wrapper-->

                                                    <!--begin::Action-->
                                                    <div class="m-0">
                                                        <a href="{{route('dashboard.zones.index')}}" class="btn btn-sm btn-light me-2 mb-2">@lang('site.zones')</a>

                                                        <a href="{{route('dashboard.blocks.index')}}" class="btn btn-sm btn-success mb-2" data-bs-toggle="modal" data-bs-target="#kt_modal_create_campaign">@lang('site.blocks') </a>
                                                    </div>
                                                    <!--end::Action-->
                                                </div>
                                                <!--end::Item-->

                                            </div>
                                            <!--end::Carousel-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Slider Widget 2-->             </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->

                            <!--begin::Engage widget 4-->
                            <div class="card border-transparent " data-bs-theme="light" style="background-color: #1C325E;">
                                <!--begin::Body-->
                                <div class="card-body d-flex ps-xl-15">
                                    <!--begin::Wrapper-->
                                    <div class="m-0">
                                        <!--begin::Title-->
                                        <div class="position-relative fs-2x z-index-2 fw-bold text-white mb-7">
                <span class="me-2">
                    You have got
                    <span class="position-relative d-inline-block text-danger">
                        <a href="{{route('dashboard.users.index')}}" class="text-danger opacity-75-hover">@lang('site.users')</a>

                        <!--begin::Separator-->
                        <span class="position-absolute opacity-50 bottom-0 start-0 border-4 border-danger border-bottom w-100"></span>
                        <!--end::Separator-->
                    </span>
                </span>
                                            points.<br>
                                            Feel free to use them in your lessons
                                        </div>
                                        <!--end::Title-->

                                        <!--begin::Action-->
                                        <div class="mb-3">
                                            <a href="{{route('dashboard.employees.index')}}" class="btn btn-danger fw-semibold me-2" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">
                                                @lang('site.employees')
                                            </a>

                                            <a href="{{route('dashboard.roles.index')}}" class="btn btn-color-white bg-white bg-opacity-15 bg-hover-opacity-25 fw-semibold">
                                               @lang('site.roles')
                                            </a>
                                        </div>
                                        <!--begin::Action-->
                                    </div>
                                    <!--begin::Wrapper-->

                                    <!--begin::Illustration-->
                                    <img src="{{asset('style/assets/media/illustrations/sigma-1/17-dark.png')}}" class="position-absolute me-3 bottom-0 end-0 h-200px" alt="">
                                    <!--end::Illustration-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Engage widget 4-->


                        </div>
                        <!--end::Col-->
                    </div>
                </div>
                    <!--end::Row-->
                    <!--begin::Row-->
                    <!--end::Row-->
                    <!--begin::Row-->

                        <!--end::Col-->
                        <!--begin::Col-->

                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                    <!--begin::Row-->

                    <!--end::Row-->
                    <!--begin::Row-->
                    <!--end::Row-->
                </div>
                <!--end::Content container-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Content wrapper-->
        <!--begin::Footer-->

        <!--end::Footer-->
    </div>




@endsection
