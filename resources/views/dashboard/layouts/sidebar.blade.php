<div class="app-sidebar-menu overflow-hidden flex-column-fluid">
    <!--begin::Menu wrapper-->
    <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper hover-scroll-overlay-y my-5" data-kt-scroll="true"
         data-kt-scroll-activate="true" data-kt-scroll-height="auto"
         data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
         data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true">
        <!--begin::Menu-->
        <div class="menu menu-column menu-rounded menu-sub-indention px-3" id="#kt_app_sidebar_menu" data-kt-menu="true"
             data-kt-menu-expand="false">
            <!--begin:Menu item-->
            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                <!--begin:Menu link-->
                <span class="menu-link">
											<span class="menu-icon">
												<i class="ki-duotone ki-element-11 fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
													<span class="path4"></span>
												</i>
											</span>
											<span class="menu-title">@lang('site.dashboard')</span>
											<span class="menu-arrow"></span>
										</span>
                <!--end:Menu link-->
                @php $current_route=Route::currentRouteName();@endphp

                    <!--begin:Menu sub-->
                <div class="menu-sub menu-sub-accordion {{($current_route=='dashboard')?'hover show active':'' }}">
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link {{($current_route=='dashboard')?'hover show active':'' }}"
                           href="{{route('dashboard')}}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                            <span class="menu-title">@lang('site.dashboard')</span>
                        </a>
                        <!--end:Menu link-->
                    </div>

                </div>
                <!--end:Menu sub-->
            </div>
            <!--end:Menu item-->
            <!--begin:Menu item-->
            <div class="menu-item pt-5">
                <!--begin:Menu content-->
                <div class="menu-content">
                    <span class="menu-heading fw-bold text-uppercase fs-7">Pages</span>
                </div>
                <!--end:Menu content-->
            </div>
            <!--end:Menu item-->

            @if (auth()->user()->hasPermission('read_roles')  || auth()->user()->hasPermission('read_users'))

            <!--begin:Menu item-->
            <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{((in_array($current_route,
                                ['dashboard.roles.index','dashboard.roles.create','dashboard.users.index','dashboard.users.create']))?'hover show active':'' )}}">
                <!--begin:Menu link-->


                <span class="menu-link">
											<span class="menu-icon">
												<i class="ki-duotone ki-address-book fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
												</i>
											</span>
											<span class="menu-title">@lang('site.MemberShip Moodle')</span>
											<span class="menu-arrow"></span>
										</span>
                <!--end:Menu link-->
                <!--begin:Menu sub-->
                <div
                    class="menu-sub menu-sub-accordion {{($current_route=='dashboard.roles.index')?'hover showing':'' }}">
                    @if (auth()->user()->hasPermission('read_roles'))
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link {{((in_array($current_route,
                                ['dashboard.roles.index','dashboard.roles.create']))?'hover show active':'' )}}"
                           href="{{route('dashboard.roles.index')}}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                            <span class="menu-title">@lang('site.roles')</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    @endif
                    <!--begin:Menu item-->
                    @if (auth()->user()->hasPermission('read_users'))
                        <div class="menu-item">
                            <!--begin:Menu link-->
                            <a class="menu-link {{((in_array($current_route,
                                ['dashboard.users.index','dashboard.users.create']))?'hover show active':'' )}}"
                               href="{{route('dashboard.users.index')}}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                <span class="menu-title">@lang('site.users')</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                    @endif
                    <!--end:Menu item-->
                </div>
                <!--end:Menu sub-->
            </div>

            @endif
            <!--end:Menu item-->

            @if (auth()->user()->hasPermission('read_zones')  || auth()->user()->hasPermission('read_blocks')|| auth()->user()->hasPermission('read_units'))

            <!--begin:Menu item-->
            <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{((in_array($current_route,
                                ['dashboard.zones.index','dashboard.zones.create','dashboard.blocks.index','dashboard.blocks.create','dashboard.units.index','dashboard.units.create']))?'hover show':'' )}}">
                <!--begin:Menu link-->
                <span class="menu-link">
											<span class="menu-icon">
												<i class="ki-duotone ki-element-plus fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
													<span class="path4"></span>
													<span class="path5"></span>
												</i>
											</span>
											<span class="menu-title">@lang('site.city map management')</span>
											<span class="menu-arrow"></span>
										</span>
                <!--end:Menu link-->
                <!--begin:Menu sub-->
                <div class="menu-sub menu-sub-accordion">

                    @if (auth()->user()->hasPermission('read_zones'))

                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link {{((in_array($current_route,
                                ['dashboard.zones.index','dashboard.zones.create']))?'hover show active':'' )}}"
                           href="{{route('dashboard.zones.index')}}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                            <span class="menu-title">@lang('site.zones')</span>
                        </a>
                        <!--end:Menu link-->
                    </div>

                    @endif
                    <!--end:Menu item-->
                        @if (auth()->user()->hasPermission('read_blocks'))

                        <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link {{((in_array($current_route,
                                ['dashboard.blocks.index','dashboard.blocks.create']))?'hover show active':'' )}}"
                           href="{{route('dashboard.blocks.index')}}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                            <span class="menu-title">@lang('site.blocks')</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                        @endif
                        @if (auth()->user()->hasPermission('read_units'))
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link {{((in_array($current_route,
                                ['dashboard.units.index','dashboard.units.create']))?'hover show active':'' )}}"
                           href="{{route('dashboard.units.index')}}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                            <span class="menu-title">@lang('site.units')</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->

                        @endif
                    <!--end:Menu item-->
                </div>
                <!--end:Menu sub-->
            </div>
            <!--end:Menu item-->

            @endif
            <!--begin:Menu item-->

            @if (auth()->user()->hasPermission('read_clients')  || auth()->user()->hasPermission('read_installments')|| auth()->user()->hasPermission('read_invoices'))

            <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{((in_array($current_route,
                                ['dashboard.clients.index','dashboard.invoicesAll','dashboard.clients.create','dashboard.installments.index','dashboard.installments.create','dashboard.invoices.index','dashboard.invoices.create']))?'hover show':'' )}}">
                <!--begin:Menu link-->
                <span class="menu-link {{((in_array($current_route,
                                ['dashboard.client.index','dashboard.client.create']))?'hover show active':'' )}}">
											<span class="menu-icon">
												<i class="ki-duotone ki-user fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</span>
											<span class="menu-title">@lang('site.client')</span>
											<span class="menu-arrow"></span>
										</span>
                <!--end:Menu link-->
                <!--begin:Menu sub-->
                <div class="menu-sub menu-sub-accordion">
                    <!--begin:Menu item-->


                    <div class="menu-item">
                        <!--begin:Menu link-->
                        @if (auth()->user()->hasPermission('read_clients'))

                        <a class="menu-link {{((in_array($current_route,
                                ['dashboard.clients.index','dashboard.clients.create']))?'hover show active':'' )}}"
                           href="{{route('dashboard.clients.index')}}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                            <span class="menu-title">@lang('site.clients')</span>
                        </a>
                        @endif

                        @if (auth()->user()->hasPermission('read_installments'))

                        <a class="menu-link {{((in_array($current_route,
                                ['dashboard.installments.index','dashboard.installments.create']))?'hover show active':'' )}}"
                           href="{{route('dashboard.installments.index')}}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                            <span class="menu-title">@lang('site.installments')</span>
                        </a>

                        @endif


                        @if (auth()->user()->hasPermission('read_invoices'))

                        <a class="menu-link  {{((in_array($current_route,
                                ['dashboard.invoicesAll','dashboard.invoicesbase.create','dashboard.invoicesbase.create']))?'hover show active':'' )}}"
                                href="{{route('dashboard.invoicesAll')}}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                            <span class="menu-title">@lang('site.invoices')</span>
                        </a>
                        @endif
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->


                    <!--end:Menu item-->
                </div>
                <!--end:Menu sub-->
            </div>
            <!--end:Menu item-->

            @endif
            <!--begin:Menu item-->


            @if (auth()->user()->hasPermission('read_employees')  || auth()->user()->hasPermission('read_sections')|| auth()->user()->hasPermission('read_notes'))

            <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{((in_array($current_route,
                                ['dashboard.employees.index','dashboard.employees.create','dashboard.sections.index','dashboard.sections.create','dashboard.notes.index','dashboard.notes.create']))?'hover show':'' )}}">
                <!--begin:Menu link-->
                <span class="menu-link">
											<span class="menu-icon">
												<i class="ki-duotone ki-bank fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</span>
											<span class="menu-title">@lang('site.emlpoyees')</span>
											<span class="menu-arrow"></span>
										</span>
                <!--end:Menu link-->
                <!--begin:Menu sub-->
                <div class="menu-sub menu-sub-accordion menu-active-bg">
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        @if (auth()->user()->hasPermission('read_employees'))


                        <a class="menu-link {{((in_array($current_route,
                                ['dashboard.employees.index','dashboard.employees.create']))?'hover show active':'' )}}"
                           href="{{route('dashboard.employees.index')}}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                            <span class="menu-title">@lang('site.emlpoyeeslist')</span>
                        </a>

                        @endif

                        @if (auth()->user()->hasPermission('read_sections'))


                        <a class="menu-link {{((in_array($current_route,
                                ['dashboard.sections.index','dashboard.sections.create']))?'hover show active':'' )}}"
                           href="{{route('dashboard.sections.index')}}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                            <span class="menu-title">@lang('site.sections')</span>
                        </a>

                        @endif

                        @if (auth()->user()->hasPermission('read_notes'))

                        <a class="menu-link {{((in_array($current_route,
                                ['dashboard.notes.index','dashboard.notes.create']))?'hover show active':'' )}}"
                           href="{{route('dashboard.notes.index')}}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                            <span class="menu-title">@lang('site.notes')</span>
                        </a>
                        @endif

                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->

                    {{--                    <!--end:Menu item-->--}}
                </div>
                {{--                <!--end:Menu sub-->--}}
            </div>

            @endif


            @if (auth()->user()->hasPermission('read_prices')  || auth()->user()->hasPermission('read_unitstatus')|| auth()->user()->hasPermission('read_reports'))

            <!--begin:Menu item-->
            <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{((in_array($current_route,
                                ['dashboard.prices.index','dashboard.reports','dashboard.prices.create','dashboard.unitstatus.index','dashboard.unitstatus.create']))?'hover show':'' )}}">
                <!--begin:Menu link-->
                <span class="menu-link">
            											<span class="menu-icon">
            												<i class="ki-duotone ki-abstract-41 fs-2">
            													<span class="path1"></span>
            													<span class="path2"></span>
            												</i>
            											</span>
            											<span class="menu-title">@lang('site.salesmangement')</span>
            											<span class="menu-arrow"></span>
            										</span>
                <!--end:Menu link-->
                <!--begin:Menu sub-->
                <div class="menu-sub menu-sub-accordion">
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        @if (auth()->user()->hasPermission('read_prices'))

                        <a class="menu-link {{((in_array($current_route,
                                ['dashboard.prices.index','dashboard.prices.create']))?'hover show active':'' )}}"
                           href="{{route('dashboard.prices.index')}}">
            													<span class="menu-bullet">
            														<span class="bullet bullet-dot"></span>
            													</span>
                            <span class="menu-title">@lang('site.prices')</span>
                        </a>
                        @endif
                        @if (auth()->user()->hasPermission('read_unitstatus'))


                        <a class="menu-link {{((in_array($current_route,
                                ['dashboard.unitstatus.index','dashboard.unitstatus.create']))?'hover show active':'' )}}"
                           href="{{route('dashboard.unitstatus.index')}}">
            													<span class="menu-bullet">
            														<span class="bullet bullet-dot"></span>
            													</span>
                            <span class="menu-title">@lang('site.unitstatus')</span>
                        </a>
                        @endif

                        @if (auth()->user()->hasPermission('read_reports'))

                        <a class="menu-link {{((in_array($current_route,
                                ['dashboard.reports']))?'hover show active':'' )}}"
                           href="{{route('dashboard.reports')}}">
            													<span class="menu-bullet">
            														<span class="bullet bullet-dot"></span>
            													</span>
                            <span class="menu-title">@lang('site.reports')</span>
                        </a>
                        @endif

                        <!--end:Menu link-->
                    </div>


                </div>
                <!--end:Menu sub-->
            </div>

            @endif
            <!--end:Menu item-->
            <!--end:Menu item-->
            <!--begin:Menu item-->


            @if (auth()->user()->hasPermission('read_repairs')  || auth()->user()->hasPermission('read_services'))

            <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{((in_array($current_route,
                                ['dashboard.repairs.index','dashboard.repairs.create','dashboard.services.index','dashboard.services.create']))?'hover show':'' )}}">
                <!--begin:Menu link-->
                <span class="menu-link">
            											<span class="menu-icon">
            												<i class="ki-duotone ki-chart-pie-3 fs-2">
            													<span class="path1"></span>
            													<span class="path2"></span>
            													<span class="path3"></span>
            												</i>
            											</span>
            											<span class="menu-title">@lang('site.servicemangement')</span>
            											<span class="menu-arrow"></span>
            										</span>
                <!--end:Menu link-->
                <!--begin:Menu sub-->
                <div class="menu-sub menu-sub-accordion menu-active-bg">
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->


                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        @if (auth()->user()->hasPermission('read_repairs'))

                        <a class="menu-link {{((in_array($current_route,
                                ['dashboard.repairs.index','dashboard.repairs.create']))?'hover show active':'' )}}"
                           href="{{route('dashboard.repairs.index')}}">
            													<span class="menu-bullet">
            														<span class="bullet bullet-dot"></span>
            													</span>
                            <span class="menu-title">@lang('site.repairs')</span>
                        </a>
                        @endif

                        @if (auth()->user()->hasPermission('read_services'))

                        <a class="menu-link {{((in_array($current_route,
                                ['dashboard.services.index','dashboard.services.create']))?'hover show active':'' )}}"
                           href="{{route('dashboard.services.index')}}">
            													<span class="menu-bullet">
            														<span class="bullet bullet-dot"></span>
            													</span>
                            <span class="menu-title">@lang('site.services')</span>
                        </a>

                        @endif
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                </div>
                <!--end:Menu sub-->
            </div>

            @endif
            <!--end:Menu item-->
            <!--begin:Menu item-->

            @if (auth()->user()->hasPermission('read_categories')  || auth()->user()->hasPermission('read_products'))

            <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{((in_array($current_route,
                                ['dashboard.categories.index','dashboard.categories.create','dashboard.products.index','dashboard.products.create']))?'hover show':'' )}}">
                <!--begin:Menu link-->
                <span class="menu-link">
            											<span class="menu-icon">
            												<i class="ki-duotone ki-bucket fs-2">
            													<span class="path1"></span>
            													<span class="path2"></span>
            													<span class="path3"></span>
            													<span class="path4"></span>
            												</i>
            											</span>
            											<span
                                                            class="menu-title">  @lang('site.restaurant_management')</span>
            											<span class="menu-arrow"></span>
            										</span>
                <!--end:Menu link-->
                <!--begin:Menu sub-->
                <div class="menu-sub menu-sub-accordion menu-active-bg">
                    <!--begin:Menu item-->


                    @if (auth()->user()->hasPermission('read_categories'))
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link {{((in_array($current_route,
                                ['dashboard.categories.index','dashboard.categories.create']))?'hover show active':'' )}}"
                           href="{{route('dashboard.categories.index')}}">
            													<span class="menu-bullet">
            														<span class="bullet bullet-dot"></span>
            													</span>
                            <span class="menu-title">@lang('site.categories')</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    @endif
                    <!--end:Menu item-->


                    @if (auth()->user()->hasPermission('read_products'))
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link {{((in_array($current_route,
                                ['dashboard.products.index','dashboard.products.create']))?'hover show active':'' )}}"
                           href="{{route('dashboard.products.index')}}">
            													<span class="menu-bullet">
            														<span class="bullet bullet-dot"></span>
            													</span>
                            <span class="menu-title">@lang('site.products')</span>
                        </a>
                        <!--end:Menu link-->
                    </div>

                    @endif
                    <!--end:Menu item-->
                </div>
                <!--end:Menu sub-->
            </div>

            @endif
            <!--end:Menu item-->
            {{--            <!--begin:Menu item-->--}}
            {{--            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">--}}
            {{--                <!--begin:Menu link-->--}}
            {{--                <span class="menu-link">--}}
            {{--											<span class="menu-icon">--}}
            {{--												<i class="ki-duotone ki-call fs-2">--}}
            {{--													<span class="path1"></span>--}}
            {{--													<span class="path2"></span>--}}
            {{--													<span class="path3"></span>--}}
            {{--													<span class="path4"></span>--}}
            {{--													<span class="path5"></span>--}}
            {{--													<span class="path6"></span>--}}
            {{--													<span class="path7"></span>--}}
            {{--													<span class="path8"></span>--}}
            {{--												</i>--}}
            {{--											</span>--}}
            {{--											<span class="menu-title">Careers</span>--}}
            {{--											<span class="menu-arrow"></span>--}}
            {{--										</span>--}}
            {{--                <!--end:Menu link-->--}}
            {{--                <!--begin:Menu sub-->--}}
            {{--                <div class="menu-sub menu-sub-accordion">--}}
            {{--                    <!--begin:Menu item-->--}}
            {{--                    <div class="menu-item">--}}
            {{--                        <!--begin:Menu link-->--}}
            {{--                        <a class="menu-link" href="../../demo1/dist/pages/careers/list.html">--}}
            {{--													<span class="menu-bullet">--}}
            {{--														<span class="bullet bullet-dot"></span>--}}
            {{--													</span>--}}
            {{--                            <span class="menu-title">Careers List</span>--}}
            {{--                        </a>--}}
            {{--                        <!--end:Menu link-->--}}
            {{--                    </div>--}}
            {{--                    <!--end:Menu item-->--}}
            {{--                    <!--begin:Menu item-->--}}
            {{--                    <div class="menu-item">--}}
            {{--                        <!--begin:Menu link-->--}}
            {{--                        <a class="menu-link" href="../../demo1/dist/pages/careers/apply.html">--}}
            {{--													<span class="menu-bullet">--}}
            {{--														<span class="bullet bullet-dot"></span>--}}
            {{--													</span>--}}
            {{--                            <span class="menu-title">Careers Apply</span>--}}
            {{--                        </a>--}}
            {{--                        <!--end:Menu link-->--}}
            {{--                    </div>--}}
            {{--                    <!--end:Menu item-->--}}
            {{--                </div>--}}
            {{--                <!--end:Menu sub-->--}}
            {{--            </div>--}}
            {{--            <!--end:Menu item-->--}}
            {{--            <!--begin:Menu item-->--}}
            {{--            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">--}}
            {{--                <!--begin:Menu link-->--}}
            {{--                <span class="menu-link">--}}
            {{--											<span class="menu-icon">--}}
            {{--												<i class="ki-duotone ki-color-swatch fs-2">--}}
            {{--													<span class="path1"></span>--}}
            {{--													<span class="path2"></span>--}}
            {{--													<span class="path3"></span>--}}
            {{--													<span class="path4"></span>--}}
            {{--													<span class="path5"></span>--}}
            {{--													<span class="path6"></span>--}}
            {{--													<span class="path7"></span>--}}
            {{--													<span class="path8"></span>--}}
            {{--													<span class="path9"></span>--}}
            {{--													<span class="path10"></span>--}}
            {{--													<span class="path11"></span>--}}
            {{--													<span class="path12"></span>--}}
            {{--													<span class="path13"></span>--}}
            {{--													<span class="path14"></span>--}}
            {{--													<span class="path15"></span>--}}
            {{--													<span class="path16"></span>--}}
            {{--													<span class="path17"></span>--}}
            {{--													<span class="path18"></span>--}}
            {{--													<span class="path19"></span>--}}
            {{--													<span class="path20"></span>--}}
            {{--													<span class="path21"></span>--}}
            {{--												</i>--}}
            {{--											</span>--}}
            {{--											<span class="menu-title">Utilities</span>--}}
            {{--											<span class="menu-arrow"></span>--}}
            {{--										</span>--}}
            {{--                <!--end:Menu link-->--}}
            {{--                <!--begin:Menu sub-->--}}
            {{--                <div class="menu-sub menu-sub-accordion">--}}
            {{--                    <!--begin:Menu item-->--}}
            {{--                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">--}}
            {{--                        <!--begin:Menu link-->--}}
            {{--                        <span class="menu-link">--}}
            {{--													<span class="menu-bullet">--}}
            {{--														<span class="bullet bullet-dot"></span>--}}
            {{--													</span>--}}
            {{--													<span class="menu-title">Modals</span>--}}
            {{--													<span class="menu-arrow"></span>--}}
            {{--												</span>--}}
            {{--                        <!--end:Menu link-->--}}
            {{--                        <!--begin:Menu sub-->--}}
            {{--                        <div class="menu-sub menu-sub-accordion">--}}
            {{--                            <!--begin:Menu item-->--}}
            {{--                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">--}}
            {{--                                <!--begin:Menu link-->--}}
            {{--                                <span class="menu-link">--}}
            {{--															<span class="menu-bullet">--}}
            {{--																<span class="bullet bullet-dot"></span>--}}
            {{--															</span>--}}
            {{--															<span class="menu-title">General</span>--}}
            {{--															<span class="menu-arrow"></span>--}}
            {{--														</span>--}}
            {{--                                <!--end:Menu link-->--}}
            {{--                                <!--begin:Menu sub-->--}}
            {{--                                <div class="menu-sub menu-sub-accordion menu-active-bg">--}}
            {{--                                    <!--begin:Menu item-->--}}
            {{--                                    <div class="menu-item">--}}
            {{--                                        <!--begin:Menu link-->--}}
            {{--                                        <a class="menu-link" href="../../demo1/dist/utilities/modals/general/invite-friends.html">--}}
            {{--																	<span class="menu-bullet">--}}
            {{--																		<span class="bullet bullet-dot"></span>--}}
            {{--																	</span>--}}
            {{--                                            <span class="menu-title">Invite Friends</span>--}}
            {{--                                        </a>--}}
            {{--                                        <!--end:Menu link-->--}}
            {{--                                    </div>--}}
            {{--                                    <!--end:Menu item-->--}}
            {{--                                    <!--begin:Menu item-->--}}
            {{--                                    <div class="menu-item">--}}
            {{--                                        <!--begin:Menu link-->--}}
            {{--                                        <a class="menu-link" href="../../demo1/dist/utilities/modals/general/view-users.html">--}}
            {{--																	<span class="menu-bullet">--}}
            {{--																		<span class="bullet bullet-dot"></span>--}}
            {{--																	</span>--}}
            {{--                                            <span class="menu-title">View Users</span>--}}
            {{--                                        </a>--}}
            {{--                                        <!--end:Menu link-->--}}
            {{--                                    </div>--}}
            {{--                                    <!--end:Menu item-->--}}
            {{--                                    <!--begin:Menu item-->--}}
            {{--                                    <div class="menu-item">--}}
            {{--                                        <!--begin:Menu link-->--}}
            {{--                                        <a class="menu-link" href="../../demo1/dist/utilities/modals/general/select-users.html">--}}
            {{--																	<span class="menu-bullet">--}}
            {{--																		<span class="bullet bullet-dot"></span>--}}
            {{--																	</span>--}}
            {{--                                            <span class="menu-title">Select Users</span>--}}
            {{--                                        </a>--}}
            {{--                                        <!--end:Menu link-->--}}
            {{--                                    </div>--}}
            {{--                                    <!--end:Menu item-->--}}
            {{--                                    <!--begin:Menu item-->--}}
            {{--                                    <div class="menu-item">--}}
            {{--                                        <!--begin:Menu link-->--}}
            {{--                                        <a class="menu-link" href="../../demo1/dist/utilities/modals/general/upgrade-plan.html">--}}
            {{--																	<span class="menu-bullet">--}}
            {{--																		<span class="bullet bullet-dot"></span>--}}
            {{--																	</span>--}}
            {{--                                            <span class="menu-title">Upgrade Plan</span>--}}
            {{--                                        </a>--}}
            {{--                                        <!--end:Menu link-->--}}
            {{--                                    </div>--}}
            {{--                                    <!--end:Menu item-->--}}
            {{--                                    <!--begin:Menu item-->--}}
            {{--                                    <div class="menu-item">--}}
            {{--                                        <!--begin:Menu link-->--}}
            {{--                                        <a class="menu-link" href="../../demo1/dist/utilities/modals/general/share-earn.html">--}}
            {{--																	<span class="menu-bullet">--}}
            {{--																		<span class="bullet bullet-dot"></span>--}}
            {{--																	</span>--}}
            {{--                                            <span class="menu-title">Share & Earn</span>--}}
            {{--                                        </a>--}}
            {{--                                        <!--end:Menu link-->--}}
            {{--                                    </div>--}}
            {{--                                    <!--end:Menu item-->--}}
            {{--                                </div>--}}
            {{--                                <!--end:Menu sub-->--}}
            {{--                            </div>--}}
            {{--                            <!--end:Menu item-->--}}
            {{--                            <!--begin:Menu item-->--}}
            {{--                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">--}}
            {{--                                <!--begin:Menu link-->--}}
            {{--                                <span class="menu-link">--}}
            {{--															<span class="menu-bullet">--}}
            {{--																<span class="bullet bullet-dot"></span>--}}
            {{--															</span>--}}
            {{--															<span class="menu-title">Forms</span>--}}
            {{--															<span class="menu-arrow"></span>--}}
            {{--														</span>--}}
            {{--                                <!--end:Menu link-->--}}
            {{--                                <!--begin:Menu sub-->--}}
            {{--                                <div class="menu-sub menu-sub-accordion menu-active-bg">--}}
            {{--                                    <!--begin:Menu item-->--}}
            {{--                                    <div class="menu-item">--}}
            {{--                                        <!--begin:Menu link-->--}}
            {{--                                        <a class="menu-link" href="../../demo1/dist/utilities/modals/forms/new-target.html">--}}
            {{--																	<span class="menu-bullet">--}}
            {{--																		<span class="bullet bullet-dot"></span>--}}
            {{--																	</span>--}}
            {{--                                            <span class="menu-title">New Target</span>--}}
            {{--                                        </a>--}}
            {{--                                        <!--end:Menu link-->--}}
            {{--                                    </div>--}}
            {{--                                    <!--end:Menu item-->--}}
            {{--                                    <!--begin:Menu item-->--}}
            {{--                                    <div class="menu-item">--}}
            {{--                                        <!--begin:Menu link-->--}}
            {{--                                        <a class="menu-link" href="../../demo1/dist/utilities/modals/forms/new-card.html">--}}
            {{--																	<span class="menu-bullet">--}}
            {{--																		<span class="bullet bullet-dot"></span>--}}
            {{--																	</span>--}}
            {{--                                            <span class="menu-title">New Card</span>--}}
            {{--                                        </a>--}}
            {{--                                        <!--end:Menu link-->--}}
            {{--                                    </div>--}}
            {{--                                    <!--end:Menu item-->--}}
            {{--                                    <!--begin:Menu item-->--}}
            {{--                                    <div class="menu-item">--}}
            {{--                                        <!--begin:Menu link-->--}}
            {{--                                        <a class="menu-link" href="../../demo1/dist/utilities/modals/forms/new-address.html">--}}
            {{--																	<span class="menu-bullet">--}}
            {{--																		<span class="bullet bullet-dot"></span>--}}
            {{--																	</span>--}}
            {{--                                            <span class="menu-title">New Address</span>--}}
            {{--                                        </a>--}}
            {{--                                        <!--end:Menu link-->--}}
            {{--                                    </div>--}}
            {{--                                    <!--end:Menu item-->--}}
            {{--                                    <!--begin:Menu item-->--}}
            {{--                                    <div class="menu-item">--}}
            {{--                                        <!--begin:Menu link-->--}}
            {{--                                        <a class="menu-link" href="../../demo1/dist/utilities/modals/forms/create-api-key.html">--}}
            {{--																	<span class="menu-bullet">--}}
            {{--																		<span class="bullet bullet-dot"></span>--}}
            {{--																	</span>--}}
            {{--                                            <span class="menu-title">Create API Key</span>--}}
            {{--                                        </a>--}}
            {{--                                        <!--end:Menu link-->--}}
            {{--                                    </div>--}}
            {{--                                    <!--end:Menu item-->--}}
            {{--                                    <!--begin:Menu item-->--}}
            {{--                                    <div class="menu-item">--}}
            {{--                                        <!--begin:Menu link-->--}}
            {{--                                        <a class="menu-link" href="../../demo1/dist/utilities/modals/forms/bidding.html">--}}
            {{--																	<span class="menu-bullet">--}}
            {{--																		<span class="bullet bullet-dot"></span>--}}
            {{--																	</span>--}}
            {{--                                            <span class="menu-title">Bidding</span>--}}
            {{--                                        </a>--}}
            {{--                                        <!--end:Menu link-->--}}
            {{--                                    </div>--}}
            {{--                                    <!--end:Menu item-->--}}
            {{--                                </div>--}}
            {{--                                <!--end:Menu sub-->--}}
            {{--                            </div>--}}
            {{--                            <!--end:Menu item-->--}}
            {{--                            <!--begin:Menu item-->--}}
            {{--                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">--}}
            {{--                                <!--begin:Menu link-->--}}
            {{--                                <span class="menu-link">--}}
            {{--															<span class="menu-bullet">--}}
            {{--																<span class="bullet bullet-dot"></span>--}}
            {{--															</span>--}}
            {{--															<span class="menu-title">Wizards</span>--}}
            {{--															<span class="menu-arrow"></span>--}}
            {{--														</span>--}}
            {{--                                <!--end:Menu link-->--}}
            {{--                                <!--begin:Menu sub-->--}}
            {{--                                <div class="menu-sub menu-sub-accordion menu-active-bg">--}}
            {{--                                    <!--begin:Menu item-->--}}
            {{--                                    <div class="menu-item">--}}
            {{--                                        <!--begin:Menu link-->--}}
            {{--                                        <a class="menu-link" href="../../demo1/dist/utilities/modals/wizards/create-app.html">--}}
            {{--																	<span class="menu-bullet">--}}
            {{--																		<span class="bullet bullet-dot"></span>--}}
            {{--																	</span>--}}
            {{--                                            <span class="menu-title">Create App</span>--}}
            {{--                                        </a>--}}
            {{--                                        <!--end:Menu link-->--}}
            {{--                                    </div>--}}
            {{--                                    <!--end:Menu item-->--}}
            {{--                                    <!--begin:Menu item-->--}}
            {{--                                    <div class="menu-item">--}}
            {{--                                        <!--begin:Menu link-->--}}
            {{--                                        <a class="menu-link" href="../../demo1/dist/utilities/modals/wizards/create-campaign.html">--}}
            {{--																	<span class="menu-bullet">--}}
            {{--																		<span class="bullet bullet-dot"></span>--}}
            {{--																	</span>--}}
            {{--                                            <span class="menu-title">Create Campaign</span>--}}
            {{--                                        </a>--}}
            {{--                                        <!--end:Menu link-->--}}
            {{--                                    </div>--}}
            {{--                                    <!--end:Menu item-->--}}
            {{--                                    <!--begin:Menu item-->--}}
            {{--                                    <div class="menu-item">--}}
            {{--                                        <!--begin:Menu link-->--}}
            {{--                                        <a class="menu-link" href="../../demo1/dist/utilities/modals/wizards/create-account.html">--}}
            {{--																	<span class="menu-bullet">--}}
            {{--																		<span class="bullet bullet-dot"></span>--}}
            {{--																	</span>--}}
            {{--                                            <span class="menu-title">Create Business Acc</span>--}}
            {{--                                        </a>--}}
            {{--                                        <!--end:Menu link-->--}}
            {{--                                    </div>--}}
            {{--                                    <!--end:Menu item-->--}}
            {{--                                    <!--begin:Menu item-->--}}
            {{--                                    <div class="menu-item">--}}
            {{--                                        <!--begin:Menu link-->--}}
            {{--                                        <a class="menu-link" href="../../demo1/dist/utilities/modals/wizards/create-project.html">--}}
            {{--																	<span class="menu-bullet">--}}
            {{--																		<span class="bullet bullet-dot"></span>--}}
            {{--																	</span>--}}
            {{--                                            <span class="menu-title">Create Project</span>--}}
            {{--                                        </a>--}}
            {{--                                        <!--end:Menu link-->--}}
            {{--                                    </div>--}}
            {{--                                    <!--end:Menu item-->--}}
            {{--                                    <!--begin:Menu item-->--}}
            {{--                                    <div class="menu-item">--}}
            {{--                                        <!--begin:Menu link-->--}}
            {{--                                        <a class="menu-link" href="../../demo1/dist/utilities/modals/wizards/top-up-wallet.html">--}}
            {{--																	<span class="menu-bullet">--}}
            {{--																		<span class="bullet bullet-dot"></span>--}}
            {{--																	</span>--}}
            {{--                                            <span class="menu-title">Top Up Wallet</span>--}}
            {{--                                        </a>--}}
            {{--                                        <!--end:Menu link-->--}}
            {{--                                    </div>--}}
            {{--                                    <!--end:Menu item-->--}}
            {{--                                    <!--begin:Menu item-->--}}
            {{--                                    <div class="menu-item">--}}
            {{--                                        <!--begin:Menu link-->--}}
            {{--                                        <a class="menu-link" href="../../demo1/dist/utilities/modals/wizards/offer-a-deal.html">--}}
            {{--																	<span class="menu-bullet">--}}
            {{--																		<span class="bullet bullet-dot"></span>--}}
            {{--																	</span>--}}
            {{--                                            <span class="menu-title">Offer a Deal</span>--}}
            {{--                                        </a>--}}
            {{--                                        <!--end:Menu link-->--}}
            {{--                                    </div>--}}
            {{--                                    <!--end:Menu item-->--}}
            {{--                                    <!--begin:Menu item-->--}}
            {{--                                    <div class="menu-item">--}}
            {{--                                        <!--begin:Menu link-->--}}
            {{--                                        <a class="menu-link" href="../../demo1/dist/utilities/modals/wizards/two-factor-authentication.html">--}}
            {{--																	<span class="menu-bullet">--}}
            {{--																		<span class="bullet bullet-dot"></span>--}}
            {{--																	</span>--}}
            {{--                                            <span class="menu-title">Two Factor Auth</span>--}}
            {{--                                        </a>--}}
            {{--                                        <!--end:Menu link-->--}}
            {{--                                    </div>--}}
            {{--                                    <!--end:Menu item-->--}}
            {{--                                </div>--}}
            {{--                                <!--end:Menu sub-->--}}
            {{--                            </div>--}}
            {{--                            <!--end:Menu item-->--}}
            {{--                            <!--begin:Menu item-->--}}
            {{--                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">--}}
            {{--                                <!--begin:Menu link-->--}}
            {{--                                <span class="menu-link">--}}
            {{--															<span class="menu-bullet">--}}
            {{--																<span class="bullet bullet-dot"></span>--}}
            {{--															</span>--}}
            {{--															<span class="menu-title">Search</span>--}}
            {{--															<span class="menu-arrow"></span>--}}
            {{--														</span>--}}
            {{--                                <!--end:Menu link-->--}}
            {{--                                <!--begin:Menu sub-->--}}
            {{--                                <div class="menu-sub menu-sub-accordion menu-active-bg">--}}
            {{--                                    <!--begin:Menu item-->--}}
            {{--                                    <div class="menu-item">--}}
            {{--                                        <!--begin:Menu link-->--}}
            {{--                                        <a class="menu-link" href="../../demo1/dist/utilities/modals/search/users.html">--}}
            {{--																	<span class="menu-bullet">--}}
            {{--																		<span class="bullet bullet-dot"></span>--}}
            {{--																	</span>--}}
            {{--                                            <span class="menu-title">Users</span>--}}
            {{--                                        </a>--}}
            {{--                                        <!--end:Menu link-->--}}
            {{--                                    </div>--}}
            {{--                                    <!--end:Menu item-->--}}
            {{--                                    <!--begin:Menu item-->--}}
            {{--                                    <div class="menu-item">--}}
            {{--                                        <!--begin:Menu link-->--}}
            {{--                                        <a class="menu-link" href="../../demo1/dist/utilities/modals/search/select-location.html">--}}
            {{--																	<span class="menu-bullet">--}}
            {{--																		<span class="bullet bullet-dot"></span>--}}
            {{--																	</span>--}}
            {{--                                            <span class="menu-title">Select Location</span>--}}
            {{--                                        </a>--}}
            {{--                                        <!--end:Menu link-->--}}
            {{--                                    </div>--}}
            {{--                                    <!--end:Menu item-->--}}
            {{--                                </div>--}}
            {{--                                <!--end:Menu sub-->--}}
            {{--                            </div>--}}
            {{--                            <!--end:Menu item-->--}}
            {{--                        </div>--}}
            {{--                        <!--end:Menu sub-->--}}
            {{--                    </div>--}}
            {{--                    <!--end:Menu item-->--}}
            {{--                    <!--begin:Menu item-->--}}
            {{--                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">--}}
            {{--                        <!--begin:Menu link-->--}}
            {{--                        <span class="menu-link">--}}
            {{--													<span class="menu-bullet">--}}
            {{--														<span class="bullet bullet-dot"></span>--}}
            {{--													</span>--}}
            {{--													<span class="menu-title">Search</span>--}}
            {{--													<span class="menu-arrow"></span>--}}
            {{--												</span>--}}
            {{--                        <!--end:Menu link-->--}}
            {{--                        <!--begin:Menu sub-->--}}
            {{--                        <div class="menu-sub menu-sub-accordion">--}}
            {{--                            <!--begin:Menu item-->--}}
            {{--                            <div class="menu-item">--}}
            {{--                                <!--begin:Menu link-->--}}
            {{--                                <a class="menu-link" href="../../demo1/dist/utilities/search/horizontal.html">--}}
            {{--															<span class="menu-bullet">--}}
            {{--																<span class="bullet bullet-dot"></span>--}}
            {{--															</span>--}}
            {{--                                    <span class="menu-title">Horizontal</span>--}}
            {{--                                </a>--}}
            {{--                                <!--end:Menu link-->--}}
            {{--                            </div>--}}
            {{--                            <!--end:Menu item-->--}}
            {{--                            <!--begin:Menu item-->--}}
            {{--                            <div class="menu-item">--}}
            {{--                                <!--begin:Menu link-->--}}
            {{--                                <a class="menu-link" href="../../demo1/dist/utilities/search/vertical.html">--}}
            {{--															<span class="menu-bullet">--}}
            {{--																<span class="bullet bullet-dot"></span>--}}
            {{--															</span>--}}
            {{--                                    <span class="menu-title">Vertical</span>--}}
            {{--                                </a>--}}
            {{--                                <!--end:Menu link-->--}}
            {{--                            </div>--}}
            {{--                            <!--end:Menu item-->--}}
            {{--                            <!--begin:Menu item-->--}}
            {{--                            <div class="menu-item">--}}
            {{--                                <!--begin:Menu link-->--}}
            {{--                                <a class="menu-link" href="../../demo1/dist/utilities/search/users.html">--}}
            {{--															<span class="menu-bullet">--}}
            {{--																<span class="bullet bullet-dot"></span>--}}
            {{--															</span>--}}
            {{--                                    <span class="menu-title">Users</span>--}}
            {{--                                </a>--}}
            {{--                                <!--end:Menu link-->--}}
            {{--                            </div>--}}
            {{--                            <!--end:Menu item-->--}}
            {{--                            <!--begin:Menu item-->--}}
            {{--                            <div class="menu-item">--}}
            {{--                                <!--begin:Menu link-->--}}
            {{--                                <a class="menu-link" href="../../demo1/dist/utilities/search/select-location.html">--}}
            {{--															<span class="menu-bullet">--}}
            {{--																<span class="bullet bullet-dot"></span>--}}
            {{--															</span>--}}
            {{--                                    <span class="menu-title">Location</span>--}}
            {{--                                </a>--}}
            {{--                                <!--end:Menu link-->--}}
            {{--                            </div>--}}
            {{--                            <!--end:Menu item-->--}}
            {{--                        </div>--}}
            {{--                        <!--end:Menu sub-->--}}
            {{--                    </div>--}}
            {{--                    <!--end:Menu item-->--}}
            {{--                    <!--begin:Menu item-->--}}
            {{--                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">--}}
            {{--                        <!--begin:Menu link-->--}}
            {{--                        <span class="menu-link">--}}
            {{--													<span class="menu-bullet">--}}
            {{--														<span class="bullet bullet-dot"></span>--}}
            {{--													</span>--}}
            {{--													<span class="menu-title">Wizards</span>--}}
            {{--													<span class="menu-arrow"></span>--}}
            {{--												</span>--}}
            {{--                        <!--end:Menu link-->--}}
            {{--                        <!--begin:Menu sub-->--}}
            {{--                        <div class="menu-sub menu-sub-accordion">--}}
            {{--                            <!--begin:Menu item-->--}}
            {{--                            <div class="menu-item">--}}
            {{--                                <!--begin:Menu link-->--}}
            {{--                                <a class="menu-link" href="../../demo1/dist/utilities/wizards/horizontal.html">--}}
            {{--															<span class="menu-bullet">--}}
            {{--																<span class="bullet bullet-dot"></span>--}}
            {{--															</span>--}}
            {{--                                    <span class="menu-title">Horizontal</span>--}}
            {{--                                </a>--}}
            {{--                                <!--end:Menu link-->--}}
            {{--                            </div>--}}
            {{--                            <!--end:Menu item-->--}}
            {{--                            <!--begin:Menu item-->--}}
            {{--                            <div class="menu-item">--}}
            {{--                                <!--begin:Menu link-->--}}
            {{--                                <a class="menu-link" href="../../demo1/dist/utilities/wizards/vertical.html">--}}
            {{--															<span class="menu-bullet">--}}
            {{--																<span class="bullet bullet-dot"></span>--}}
            {{--															</span>--}}
            {{--                                    <span class="menu-title">Vertical</span>--}}
            {{--                                </a>--}}
            {{--                                <!--end:Menu link-->--}}
            {{--                            </div>--}}
            {{--                            <!--end:Menu item-->--}}
            {{--                            <!--begin:Menu item-->--}}
            {{--                            <div class="menu-item">--}}
            {{--                                <!--begin:Menu link-->--}}
            {{--                                <a class="menu-link" href="../../demo1/dist/utilities/wizards/two-factor-authentication.html">--}}
            {{--															<span class="menu-bullet">--}}
            {{--																<span class="bullet bullet-dot"></span>--}}
            {{--															</span>--}}
            {{--                                    <span class="menu-title">Two Factor Auth</span>--}}
            {{--                                </a>--}}
            {{--                                <!--end:Menu link-->--}}
            {{--                            </div>--}}
            {{--                            <!--end:Menu item-->--}}
            {{--                            <!--begin:Menu item-->--}}
            {{--                            <div class="menu-item">--}}
            {{--                                <!--begin:Menu link-->--}}
            {{--                                <a class="menu-link" href="../../demo1/dist/utilities/wizards/create-app.html">--}}
            {{--															<span class="menu-bullet">--}}
            {{--																<span class="bullet bullet-dot"></span>--}}
            {{--															</span>--}}
            {{--                                    <span class="menu-title">Create App</span>--}}
            {{--                                </a>--}}
            {{--                                <!--end:Menu link-->--}}
            {{--                            </div>--}}
            {{--                            <!--end:Menu item-->--}}
            {{--                            <!--begin:Menu item-->--}}
            {{--                            <div class="menu-item">--}}
            {{--                                <!--begin:Menu link-->--}}
            {{--                                <a class="menu-link" href="../../demo1/dist/utilities/wizards/create-campaign.html">--}}
            {{--															<span class="menu-bullet">--}}
            {{--																<span class="bullet bullet-dot"></span>--}}
            {{--															</span>--}}
            {{--                                    <span class="menu-title">Create Campaign</span>--}}
            {{--                                </a>--}}
            {{--                                <!--end:Menu link-->--}}
            {{--                            </div>--}}
            {{--                            <!--end:Menu item-->--}}
            {{--                            <!--begin:Menu item-->--}}
            {{--                            <div class="menu-item">--}}
            {{--                                <!--begin:Menu link-->--}}
            {{--                                <a class="menu-link" href="../../demo1/dist/utilities/wizards/create-account.html">--}}
            {{--															<span class="menu-bullet">--}}
            {{--																<span class="bullet bullet-dot"></span>--}}
            {{--															</span>--}}
            {{--                                    <span class="menu-title">Create Account</span>--}}
            {{--                                </a>--}}
            {{--                                <!--end:Menu link-->--}}
            {{--                            </div>--}}
            {{--                            <!--end:Menu item-->--}}
            {{--                            <!--begin:Menu item-->--}}
            {{--                            <div class="menu-item">--}}
            {{--                                <!--begin:Menu link-->--}}
            {{--                                <a class="menu-link" href="../../demo1/dist/utilities/wizards/create-project.html">--}}
            {{--															<span class="menu-bullet">--}}
            {{--																<span class="bullet bullet-dot"></span>--}}
            {{--															</span>--}}
            {{--                                    <span class="menu-title">Create Project</span>--}}
            {{--                                </a>--}}
            {{--                                <!--end:Menu link-->--}}
            {{--                            </div>--}}
            {{--                            <!--end:Menu item-->--}}
            {{--                            <!--begin:Menu item-->--}}
            {{--                            <div class="menu-item">--}}
            {{--                                <!--begin:Menu link-->--}}
            {{--                                <a class="menu-link" href="../../demo1/dist/utilities/modals/wizards/top-up-wallet.html">--}}
            {{--															<span class="menu-bullet">--}}
            {{--																<span class="bullet bullet-dot"></span>--}}
            {{--															</span>--}}
            {{--                                    <span class="menu-title">Top Up Wallet</span>--}}
            {{--                                </a>--}}
            {{--                                <!--end:Menu link-->--}}
            {{--                            </div>--}}
            {{--                            <!--end:Menu item-->--}}
            {{--                            <!--begin:Menu item-->--}}
            {{--                            <div class="menu-item">--}}
            {{--                                <!--begin:Menu link-->--}}
            {{--                                <a class="menu-link" href="../../demo1/dist/utilities/wizards/offer-a-deal.html">--}}
            {{--															<span class="menu-bullet">--}}
            {{--																<span class="bullet bullet-dot"></span>--}}
            {{--															</span>--}}
            {{--                                    <span class="menu-title">Offer a Deal</span>--}}
            {{--                                </a>--}}
            {{--                                <!--end:Menu link-->--}}
            {{--                            </div>--}}
            {{--                            <!--end:Menu item-->--}}
            {{--                        </div>--}}
            {{--                        <!--end:Menu sub-->--}}
            {{--                    </div>--}}
            {{--                    <!--end:Menu item-->--}}
            {{--                </div>--}}
            {{--                <!--end:Menu sub-->--}}
            {{--            </div>--}}
            {{--            <!--end:Menu item-->--}}
            {{--            <!--begin:Menu item-->--}}
            {{--            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">--}}
            {{--                <!--begin:Menu link-->--}}
            {{--                <span class="menu-link">--}}
            {{--											<span class="menu-icon">--}}
            {{--												<i class="ki-duotone ki-element-7 fs-2">--}}
            {{--													<span class="path1"></span>--}}
            {{--													<span class="path2"></span>--}}
            {{--												</i>--}}
            {{--											</span>--}}
            {{--											<span class="menu-title">Widgets</span>--}}
            {{--											<span class="menu-arrow"></span>--}}
            {{--										</span>--}}
            {{--                <!--end:Menu link-->--}}
            {{--                <!--begin:Menu sub-->--}}
            {{--                <div class="menu-sub menu-sub-accordion">--}}
            {{--                    <!--begin:Menu item-->--}}
            {{--                    <div class="menu-item">--}}
            {{--                        <!--begin:Menu link-->--}}
            {{--                        <a class="menu-link" href="../../demo1/dist/widgets/lists.html">--}}
            {{--													<span class="menu-bullet">--}}
            {{--														<span class="bullet bullet-dot"></span>--}}
            {{--													</span>--}}
            {{--                            <span class="menu-title">Lists</span>--}}
            {{--                        </a>--}}
            {{--                        <!--end:Menu link-->--}}
            {{--                    </div>--}}
            {{--                    <!--end:Menu item-->--}}
            {{--                    <!--begin:Menu item-->--}}
            {{--                    <div class="menu-item">--}}
            {{--                        <!--begin:Menu link-->--}}
            {{--                        <a class="menu-link" href="../../demo1/dist/widgets/statistics.html">--}}
            {{--													<span class="menu-bullet">--}}
            {{--														<span class="bullet bullet-dot"></span>--}}
            {{--													</span>--}}
            {{--                            <span class="menu-title">Statistics</span>--}}
            {{--                        </a>--}}
            {{--                        <!--end:Menu link-->--}}
            {{--                    </div>--}}
            {{--                    <!--end:Menu item-->--}}
            {{--                    <!--begin:Menu item-->--}}
            {{--                    <div class="menu-item">--}}
            {{--                        <!--begin:Menu link-->--}}
            {{--                        <a class="menu-link" href="../../demo1/dist/widgets/charts.html">--}}
            {{--													<span class="menu-bullet">--}}
            {{--														<span class="bullet bullet-dot"></span>--}}
            {{--													</span>--}}
            {{--                            <span class="menu-title">Charts</span>--}}
            {{--                        </a>--}}
            {{--                        <!--end:Menu link-->--}}
            {{--                    </div>--}}
            {{--                    <!--end:Menu item-->--}}
            {{--                    <!--begin:Menu item-->--}}
            {{--                    <div class="menu-item">--}}
            {{--                        <!--begin:Menu link-->--}}
            {{--                        <a class="menu-link" href="../../demo1/dist/widgets/mixed.html">--}}
            {{--													<span class="menu-bullet">--}}
            {{--														<span class="bullet bullet-dot"></span>--}}
            {{--													</span>--}}
            {{--                            <span class="menu-title">Mixed</span>--}}
            {{--                        </a>--}}
            {{--                        <!--end:Menu link-->--}}
            {{--                    </div>--}}
            {{--                    <!--end:Menu item-->--}}
            {{--                    <!--begin:Menu item-->--}}
            {{--                    <div class="menu-item">--}}
            {{--                        <!--begin:Menu link-->--}}
            {{--                        <a class="menu-link" href="../../demo1/dist/widgets/tables.html">--}}
            {{--													<span class="menu-bullet">--}}
            {{--														<span class="bullet bullet-dot"></span>--}}
            {{--													</span>--}}
            {{--                            <span class="menu-title">Tables</span>--}}
            {{--                        </a>--}}
            {{--                        <!--end:Menu link-->--}}
            {{--                    </div>--}}
            {{--                    <!--end:Menu item-->--}}
            {{--                    <!--begin:Menu item-->--}}
            {{--                    <div class="menu-item">--}}
            {{--                        <!--begin:Menu link-->--}}
            {{--                        <a class="menu-link" href="../../demo1/dist/widgets/feeds.html">--}}
            {{--													<span class="menu-bullet">--}}
            {{--														<span class="bullet bullet-dot"></span>--}}
            {{--													</span>--}}
            {{--                            <span class="menu-title">Feeds</span>--}}
            {{--                        </a>--}}
            {{--                        <!--end:Menu link-->--}}
            {{--                    </div>--}}
            {{--                    <!--end:Menu item-->--}}
            {{--                </div>--}}
            {{--                <!--end:Menu sub-->--}}
            {{--            </div>--}}
            {{--            <!--end:Menu item-->--}}
            {{--            <!--begin:Menu item-->--}}
            {{--            <div class="menu-item pt-5">--}}
            {{--                <!--begin:Menu content-->--}}
            {{--                <div class="menu-content">--}}
            {{--                    <span class="menu-heading fw-bold text-uppercase fs-7">Apps</span>--}}
            {{--                </div>--}}
            {{--                <!--end:Menu content-->--}}
            {{--            </div>--}}
            {{--            <!--end:Menu item-->--}}
            {{--            <!--begin:Menu item-->--}}
            {{--            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">--}}
            {{--                <!--begin:Menu link-->--}}
            {{--                <span class="menu-link">--}}
            {{--											<span class="menu-icon">--}}
            {{--												<i class="ki-duotone ki-abstract-41 fs-2">--}}
            {{--													<span class="path1"></span>--}}
            {{--													<span class="path2"></span>--}}
            {{--												</i>--}}
            {{--											</span>--}}
            {{--											<span class="menu-title">Projects</span>--}}
            {{--											<span class="menu-arrow"></span>--}}
            {{--										</span>--}}
            {{--                <!--end:Menu link-->--}}
            {{--                <!--begin:Menu sub-->--}}
            {{--                <div class="menu-sub menu-sub-accordion">--}}
            {{--                    <!--begin:Menu item-->--}}
            {{--                    <div class="menu-item">--}}
            {{--                        <!--begin:Menu link-->--}}
            {{--                        <a class="menu-link" href="../../demo1/dist/apps/projects/list.html">--}}
            {{--													<span class="menu-bullet">--}}
            {{--														<span class="bullet bullet-dot"></span>--}}
            {{--													</span>--}}
            {{--                            <span class="menu-title">My Projects</span>--}}
            {{--                        </a>--}}
            {{--                        <!--end:Menu link-->--}}
            {{--                    </div>--}}
            {{--                    <!--end:Menu item-->--}}
            {{--                    <!--begin:Menu item-->--}}
            {{--                    <div class="menu-item">--}}
            {{--                        <!--begin:Menu link-->--}}
            {{--                        <a class="menu-link" href="../../demo1/dist/apps/projects/project.html">--}}
            {{--													<span class="menu-bullet">--}}
            {{--														<span class="bullet bullet-dot"></span>--}}
            {{--													</span>--}}
            {{--                            <span class="menu-title">View Project</span>--}}
            {{--                        </a>--}}
            {{--                        <!--end:Menu link-->--}}
            {{--                    </div>--}}
            {{--                    <!--end:Menu item-->--}}
            {{--                    <!--begin:Menu item-->--}}
            {{--                    <div class="menu-item">--}}
            {{--                        <!--begin:Menu link-->--}}
            {{--                        <a class="menu-link" href="../../demo1/dist/apps/projects/targets.html">--}}
            {{--													<span class="menu-bullet">--}}
            {{--														<span class="bullet bullet-dot"></span>--}}
            {{--													</span>--}}
            {{--                            <span class="menu-title">Targets</span>--}}
            {{--                        </a>--}}
            {{--                        <!--end:Menu link-->--}}
            {{--                    </div>--}}
            {{--                    <!--end:Menu item-->--}}
            {{--                    <!--begin:Menu item-->--}}
            {{--                    <div class="menu-item">--}}
            {{--                        <!--begin:Menu link-->--}}
            {{--                        <a class="menu-link" href="../../demo1/dist/apps/projects/budget.html">--}}
            {{--													<span class="menu-bullet">--}}
            {{--														<span class="bullet bullet-dot"></span>--}}
            {{--													</span>--}}
            {{--                            <span class="menu-title">Budget</span>--}}
            {{--                        </a>--}}
            {{--                        <!--end:Menu link-->--}}
            {{--                    </div>--}}
            {{--                    <!--end:Menu item-->--}}
            {{--                    <!--begin:Menu item-->--}}
            {{--                    <div class="menu-item">--}}
            {{--                        <!--begin:Menu link-->--}}
            {{--                        <a class="menu-link" href="../../demo1/dist/apps/projects/users.html">--}}
            {{--													<span class="menu-bullet">--}}
            {{--														<span class="bullet bullet-dot"></span>--}}
            {{--													</span>--}}
            {{--                            <span class="menu-title">Users</span>--}}
            {{--                        </a>--}}
            {{--                        <!--end:Menu link-->--}}
            {{--                    </div>--}}
            {{--                    <!--end:Menu item-->--}}
            {{--                    <!--begin:Menu item-->--}}
            {{--                    <div class="menu-item">--}}
            {{--                        <!--begin:Menu link-->--}}
            {{--                        <a class="menu-link" href="../../demo1/dist/apps/projects/files.html">--}}
            {{--													<span class="menu-bullet">--}}
            {{--														<span class="bullet bullet-dot"></span>--}}
            {{--													</span>--}}
            {{--                            <span class="menu-title">Files</span>--}}
            {{--                        </a>--}}
            {{--                        <!--end:Menu link-->--}}
            {{--                    </div>--}}
            {{--                    <!--end:Menu item-->--}}
            {{--                    <!--begin:Menu item-->--}}
            {{--                    <div class="menu-item">--}}
            {{--                        <!--begin:Menu link-->--}}
            {{--                        <a class="menu-link" href="../../demo1/dist/apps/projects/activity.html">--}}
            {{--													<span class="menu-bullet">--}}
            {{--														<span class="bullet bullet-dot"></span>--}}
            {{--													</span>--}}
            {{--                            <span class="menu-title">Activity</span>--}}
            {{--                        </a>--}}
            {{--                        <!--end:Menu link-->--}}
            {{--                    </div>--}}
            {{--                    <!--end:Menu item-->--}}
            {{--                    <!--begin:Menu item-->--}}
            {{--                    <div class="menu-item">--}}
            {{--                        <!--begin:Menu link-->--}}
            {{--                        <a class="menu-link" href="../../demo1/dist/apps/projects/settings.html">--}}
            {{--													<span class="menu-bullet">--}}
            {{--														<span class="bullet bullet-dot"></span>--}}
            {{--													</span>--}}
            {{--                            <span class="menu-title">Settings</span>--}}
            {{--                        </a>--}}
            {{--                        <!--end:Menu link-->--}}
            {{--                    </div>--}}
            {{--                    <!--end:Menu item-->--}}
            {{--                </div>--}}
            {{--                <!--end:Menu sub-->--}}
            {{--            </div>--}}
            {{--            <!--end:Menu item-->--}}
            {{--            <!--begin:Menu item-->--}}
            {{--            <div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">--}}
            {{--                <!--begin:Menu link-->--}}
            {{--                <span class="menu-link">--}}
            {{--											<span class="menu-icon">--}}
            {{--												<i class="ki-duotone ki-basket fs-2">--}}
            {{--													<span class="path1"></span>--}}
            {{--													<span class="path2"></span>--}}
            {{--													<span class="path3"></span>--}}
            {{--													<span class="path4"></span>--}}
            {{--												</i>--}}
            {{--											</span>--}}
            {{--											<span class="menu-title">eCommerce</span>--}}
            {{--											<span class="menu-arrow"></span>--}}
            {{--										</span>--}}
            {{--                <!--end:Menu link-->--}}
            {{--                <!--begin:Menu sub-->--}}
            {{--                <div class="menu-sub menu-sub-accordion">--}}
            {{--                    <!--begin:Menu item-->--}}
            {{--                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">--}}
            {{--                        <!--begin:Menu link-->--}}
            {{--                        <span class="menu-link">--}}
            {{--													<span class="menu-bullet">--}}
            {{--														<span class="bullet bullet-dot"></span>--}}
            {{--													</span>--}}
            {{--													<span class="menu-title">Catalog</span>--}}
            {{--													<span class="menu-arrow"></span>--}}
            {{--												</span>--}}
            {{--                        <!--end:Menu link-->--}}
            {{--                        <!--begin:Menu sub-->--}}
            {{--                        <div class="menu-sub menu-sub-accordion">--}}
            {{--                            <!--begin:Menu item-->--}}
            {{--                            <div class="menu-item">--}}
            {{--                                <!--begin:Menu link-->--}}
            {{--                                <a class="menu-link" href="../../demo1/dist/apps/ecommerce/catalog/products.html">--}}
            {{--															<span class="menu-bullet">--}}
            {{--																<span class="bullet bullet-dot"></span>--}}
            {{--															</span>--}}
            {{--                                    <span class="menu-title">Products</span>--}}
            {{--                                </a>--}}
            {{--                                <!--end:Menu link-->--}}
            {{--                            </div>--}}
            {{--                            <!--end:Menu item-->--}}
            {{--                            <!--begin:Menu item-->--}}
            {{--                            <div class="menu-item">--}}
            {{--                                <!--begin:Menu link-->--}}
            {{--                                <a class="menu-link" href="../../demo1/dist/apps/ecommerce/catalog/categories.html">--}}
            {{--															<span class="menu-bullet">--}}
            {{--																<span class="bullet bullet-dot"></span>--}}
            {{--															</span>--}}
            {{--                                    <span class="menu-title">Categories</span>--}}
            {{--                                </a>--}}
            {{--                                <!--end:Menu link-->--}}
            {{--                            </div>--}}
            {{--                            <!--end:Menu item-->--}}
            {{--                            <!--begin:Menu item-->--}}
            {{--                            <div class="menu-item">--}}
            {{--                                <!--begin:Menu link-->--}}
            {{--                                <a class="menu-link" href="../../demo1/dist/apps/ecommerce/catalog/add-product.html">--}}
            {{--															<span class="menu-bullet">--}}
            {{--																<span class="bullet bullet-dot"></span>--}}
            {{--															</span>--}}
            {{--                                    <span class="menu-title">Add Product</span>--}}
            {{--                                </a>--}}
            {{--                                <!--end:Menu link-->--}}
            {{--                            </div>--}}
            {{--                            <!--end:Menu item-->--}}
            {{--                            <!--begin:Menu item-->--}}
            {{--                            <div class="menu-item">--}}
            {{--                                <!--begin:Menu link-->--}}
            {{--                                <a class="menu-link" href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html">--}}
            {{--															<span class="menu-bullet">--}}
            {{--																<span class="bullet bullet-dot"></span>--}}
            {{--															</span>--}}
            {{--                                    <span class="menu-title">Edit Product</span>--}}
            {{--                                </a>--}}
            {{--                                <!--end:Menu link-->--}}
            {{--                            </div>--}}
            {{--                            <!--end:Menu item-->--}}
            {{--                            <!--begin:Menu item-->--}}
            {{--                            <div class="menu-item">--}}
            {{--                                <!--begin:Menu link-->--}}
            {{--                                <a class="menu-link" href="../../demo1/dist/apps/ecommerce/catalog/add-category.html">--}}
            {{--															<span class="menu-bullet">--}}
            {{--																<span class="bullet bullet-dot"></span>--}}
            {{--															</span>--}}
            {{--                                    <span class="menu-title">Add Category</span>--}}
            {{--                                </a>--}}
            {{--                                <!--end:Menu link-->--}}
            {{--                            </div>--}}
            {{--                            <!--end:Menu item-->--}}
            {{--                            <!--begin:Menu item-->--}}
            {{--                            <div class="menu-item">--}}
            {{--                                <!--begin:Menu link-->--}}
            {{--                                <a class="menu-link" href="../../demo1/dist/apps/ecommerce/catalog/edit-category.html">--}}
            {{--															<span class="menu-bullet">--}}
            {{--																<span class="bullet bullet-dot"></span>--}}
            {{--															</span>--}}
            {{--                                    <span class="menu-title">Edit Category</span>--}}
            {{--                                </a>--}}
            {{--                                <!--end:Menu link-->--}}
            {{--                            </div>--}}
            {{--                            <!--end:Menu item-->--}}
            {{--                        </div>--}}
            {{--                        <!--end:Menu sub-->--}}
            {{--                    </div>--}}
            {{--                    <!--end:Menu item-->--}}
            {{--                    <!--begin:Menu item-->--}}
            {{--                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">--}}
            {{--                        <!--begin:Menu link-->--}}
            {{--                        <span class="menu-link">--}}
            {{--													<span class="menu-bullet">--}}
            {{--														<span class="bullet bullet-dot"></span>--}}
            {{--													</span>--}}
            {{--													<span class="menu-title">Sales</span>--}}
            {{--													<span class="menu-arrow"></span>--}}
            {{--												</span>--}}
            {{--                        <!--end:Menu link-->--}}
            {{--                        <!--begin:Menu sub-->--}}
            {{--                        <div class="menu-sub menu-sub-accordion">--}}
            {{--                            <!--begin:Menu item-->--}}
            {{--                            <div class="menu-item">--}}
            {{--                                <!--begin:Menu link-->--}}
            {{--                                <a class="menu-link" href="../../demo1/dist/apps/ecommerce/sales/listing.html">--}}
            {{--															<span class="menu-bullet">--}}
            {{--																<span class="bullet bullet-dot"></span>--}}
            {{--															</span>--}}
            {{--                                    <span class="menu-title">Orders Listing</span>--}}
            {{--                                </a>--}}
            {{--                                <!--end:Menu link-->--}}
            {{--                            </div>--}}
            {{--                            <!--end:Menu item-->--}}
            {{--                            <!--begin:Menu item-->--}}
            {{--                            <div class="menu-item">--}}
            {{--                                <!--begin:Menu link-->--}}
            {{--                                <a class="menu-link" href="../../demo1/dist/apps/ecommerce/sales/details.html">--}}
            {{--															<span class="menu-bullet">--}}
            {{--																<span class="bullet bullet-dot"></span>--}}
            {{--															</span>--}}
            {{--                                    <span class="menu-title">Order Details</span>--}}
            {{--                                </a>--}}
            {{--                                <!--end:Menu link-->--}}
            {{--                            </div>--}}
            {{--                            <!--end:Menu item-->--}}
            {{--                            <!--begin:Menu item-->--}}
            {{--                            <div class="menu-item">--}}
            {{--                                <!--begin:Menu link-->--}}
            {{--                                <a class="menu-link" href="../../demo1/dist/apps/ecommerce/sales/add-order.html">--}}
            {{--															<span class="menu-bullet">--}}
            {{--																<span class="bullet bullet-dot"></span>--}}
            {{--															</span>--}}
            {{--                                    <span class="menu-title">Add Order</span>--}}
            {{--                                </a>--}}
            {{--                                <!--end:Menu link-->--}}
            {{--                            </div>--}}
            {{--                            <!--end:Menu item-->--}}
            {{--                            <!--begin:Menu item-->--}}
            {{--                            <div class="menu-item">--}}
            {{--                                <!--begin:Menu link-->--}}
            {{--                                <a class="menu-link" href="../../demo1/dist/apps/ecommerce/sales/edit-order.html">--}}
            {{--															<span class="menu-bullet">--}}
            {{--																<span class="bullet bullet-dot"></span>--}}
            {{--															</span>--}}
            {{--                                    <span class="menu-title">Edit Order</span>--}}
            {{--                                </a>--}}
            {{--                                <!--end:Menu link-->--}}
            {{--                            </div>--}}
            {{--                            <!--end:Menu item-->--}}
            {{--                        </div>--}}
            {{--                        <!--end:Menu sub-->--}}
            {{--                    </div>--}}
            {{--                    <!--end:Menu item-->--}}
            {{--                    <!--begin:Menu item-->--}}
            {{--                    <div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">--}}
            {{--                        <!--begin:Menu link-->--}}
            {{--                        <span class="menu-link">--}}
            {{--													<span class="menu-bullet">--}}
            {{--														<span class="bullet bullet-dot"></span>--}}
            {{--													</span>--}}
            {{--													<span class="menu-title">Customers</span>--}}
            {{--													<span class="menu-arrow"></span>--}}
            {{--												</span>--}}
            {{--                        <!--end:Menu link-->--}}
            {{--                        <!--begin:Menu sub-->--}}
            {{--                        <div class="menu-sub menu-sub-accordion">--}}
            {{--                            <!--begin:Menu item-->--}}
            {{--                            <div class="menu-item">--}}
            {{--                                <!--begin:Menu link-->--}}
            {{--                                <a class="menu-link active" href="../../demo1/dist/apps/ecommerce/customers/listing.html">--}}
            {{--															<span class="menu-bullet">--}}
            {{--																<span class="bullet bullet-dot"></span>--}}
            {{--															</span>--}}
            {{--                                    <span class="menu-title">Customer Listing</span>--}}
            {{--                                </a>--}}
            {{--                                <!--end:Menu link-->--}}
            {{--                            </div>--}}
            {{--                            <!--end:Menu item-->--}}
            {{--                            <!--begin:Menu item-->--}}
            {{--                            <div class="menu-item">--}}
            {{--                                <!--begin:Menu link-->--}}
            {{--                                <a class="menu-link" href="../../demo1/dist/apps/ecommerce/customers/details.html">--}}
            {{--															<span class="menu-bullet">--}}
            {{--																<span class="bullet bullet-dot"></span>--}}
            {{--															</span>--}}
            {{--                                    <span class="menu-title">Customer Details</span>--}}
            {{--                                </a>--}}
            {{--                                <!--end:Menu link-->--}}
            {{--                            </div>--}}
            {{--                            <!--end:Menu item-->--}}
            {{--                        </div>--}}
            {{--                        <!--end:Menu sub-->--}}
            {{--                    </div>--}}
            {{--                    <!--end:Menu item-->--}}
            {{--                    <!--begin:Menu item-->--}}
            {{--                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">--}}
            {{--                        <!--begin:Menu link-->--}}
            {{--                        <span class="menu-link">--}}
            {{--													<span class="menu-bullet">--}}
            {{--														<span class="bullet bullet-dot"></span>--}}
            {{--													</span>--}}
            {{--													<span class="menu-title">Reports</span>--}}
            {{--													<span class="menu-arrow"></span>--}}
            {{--												</span>--}}
            {{--                        <!--end:Menu link-->--}}
            {{--                        <!--begin:Menu sub-->--}}
            {{--                        <div class="menu-sub menu-sub-accordion">--}}
            {{--                            <!--begin:Menu item-->--}}
            {{--                            <div class="menu-item">--}}
            {{--                                <!--begin:Menu link-->--}}
            {{--                                <a class="menu-link" href="../../demo1/dist/apps/ecommerce/reports/view.html">--}}
            {{--															<span class="menu-bullet">--}}
            {{--																<span class="bullet bullet-dot"></span>--}}
            {{--															</span>--}}
            {{--                                    <span class="menu-title">Products Viewed</span>--}}
            {{--                                </a>--}}
            {{--                                <!--end:Menu link-->--}}
            {{--                            </div>--}}
            {{--                            <!--end:Menu item-->--}}
            {{--                            <!--begin:Menu item-->--}}
            {{--                            <div class="menu-item">--}}
            {{--                                <!--begin:Menu link-->--}}
            {{--                                <a class="menu-link" href="../../demo1/dist/apps/ecommerce/reports/sales.html">--}}
            {{--															<span class="menu-bullet">--}}
            {{--																<span class="bullet bullet-dot"></span>--}}
            {{--															</span>--}}
            {{--                                    <span class="menu-title">Sales</span>--}}
            {{--                                </a>--}}
            {{--                                <!--end:Menu link-->--}}
            {{--                            </div>--}}
            {{--                            <!--end:Menu item-->--}}
            {{--                            <!--begin:Menu item-->--}}
            {{--                            <div class="menu-item">--}}
            {{--                                <!--begin:Menu link-->--}}
            {{--                                <a class="menu-link" href="../../demo1/dist/apps/ecommerce/reports/returns.html">--}}
            {{--															<span class="menu-bullet">--}}
            {{--																<span class="bullet bullet-dot"></span>--}}
            {{--															</span>--}}
            {{--                                    <span class="menu-title">Returns</span>--}}
            {{--                                </a>--}}
            {{--                                <!--end:Menu link-->--}}
            {{--                            </div>--}}
            {{--                            <!--end:Menu item-->--}}
            {{--                            <!--begin:Menu item-->--}}
            {{--                            <div class="menu-item">--}}
            {{--                                <!--begin:Menu link-->--}}
            {{--                                <a class="menu-link" href="../../demo1/dist/apps/ecommerce/reports/customer-orders.html">--}}
            {{--															<span class="menu-bullet">--}}
            {{--																<span class="bullet bullet-dot"></span>--}}
            {{--															</span>--}}
            {{--                                    <span class="menu-title">Customer Orders</span>--}}
            {{--                                </a>--}}
            {{--                                <!--end:Menu link-->--}}
            {{--                            </div>--}}
            {{--                            <!--end:Menu item-->--}}
            {{--                            <!--begin:Menu item-->--}}
            {{--                            <div class="menu-item">--}}
            {{--                                <!--begin:Menu link-->--}}
            {{--                                <a class="menu-link" href="../../demo1/dist/apps/ecommerce/reports/shipping.html">--}}
            {{--															<span class="menu-bullet">--}}
            {{--																<span class="bullet bullet-dot"></span>--}}
            {{--															</span>--}}
            {{--                                    <span class="menu-title">Shipping</span>--}}
            {{--                                </a>--}}
            {{--                                <!--end:Menu link-->--}}
            {{--                            </div>--}}
            {{--                            <!--end:Menu item-->--}}
            {{--                        </div>--}}
            {{--                        <!--end:Menu sub-->--}}
            {{--                    </div>--}}
            {{--                    <!--end:Menu item-->--}}
            {{--                    <!--begin:Menu item-->--}}
            {{--                    <div class="menu-item">--}}
            {{--                        <!--begin:Menu link-->--}}
            {{--                        <a class="menu-link" href="../../demo1/dist/apps/ecommerce/settings.html">--}}
            {{--													<span class="menu-bullet">--}}
            {{--														<span class="bullet bullet-dot"></span>--}}
            {{--													</span>--}}
            {{--                            <span class="menu-title">Settings</span>--}}
            {{--                        </a>--}}
            {{--                        <!--end:Menu link-->--}}
            {{--                    </div>--}}
            {{--                    <!--end:Menu item-->--}}
            {{--                </div>--}}
            {{--                <!--end:Menu sub-->--}}
            {{--            </div>--}}
            {{--            <!--end:Menu item-->--}}
            {{--            <!--begin:Menu item-->--}}
            {{--            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">--}}
            {{--                <!--begin:Menu link-->--}}
            {{--                <span class="menu-link">--}}
            {{--											<span class="menu-icon">--}}
            {{--												<i class="ki-duotone ki-abstract-25 fs-2">--}}
            {{--													<span class="path1"></span>--}}
            {{--													<span class="path2"></span>--}}
            {{--												</i>--}}
            {{--											</span>--}}
            {{--											<span class="menu-title">Contacts</span>--}}
            {{--											<span class="menu-arrow"></span>--}}
            {{--										</span>--}}
            {{--                <!--end:Menu link-->--}}
            {{--                <!--begin:Menu sub-->--}}
            {{--                <div class="menu-sub menu-sub-accordion">--}}
            {{--                    <!--begin:Menu item-->--}}
            {{--                    <div class="menu-item">--}}
            {{--                        <!--begin:Menu link-->--}}
            {{--                        <a class="menu-link" href="../../demo1/dist/apps/contacts/getting-started.html">--}}
            {{--													<span class="menu-bullet">--}}
            {{--														<span class="bullet bullet-dot"></span>--}}
            {{--													</span>--}}
            {{--                            <span class="menu-title">Getting Started</span>--}}
            {{--                        </a>--}}
            {{--                        <!--end:Menu link-->--}}
            {{--                    </div>--}}
            {{--                    <!--end:Menu item-->--}}
            {{--                    <!--begin:Menu item-->--}}
            {{--                    <div class="menu-item">--}}
            {{--                        <!--begin:Menu link-->--}}
            {{--                        <a class="menu-link" href="../../demo1/dist/apps/contacts/add-contact.html">--}}
            {{--													<span class="menu-bullet">--}}
            {{--														<span class="bullet bullet-dot"></span>--}}
            {{--													</span>--}}
            {{--                            <span class="menu-title">Add Contact</span>--}}
            {{--                        </a>--}}
            {{--                        <!--end:Menu link-->--}}
            {{--                    </div>--}}
            {{--                    <!--end:Menu item-->--}}
            {{--                    <!--begin:Menu item-->--}}
            {{--                    <div class="menu-item">--}}
            {{--                        <!--begin:Menu link-->--}}
            {{--                        <a class="menu-link" href="../../demo1/dist/apps/contacts/edit-contact.html">--}}
            {{--													<span class="menu-bullet">--}}
            {{--														<span class="bullet bullet-dot"></span>--}}
            {{--													</span>--}}
            {{--                            <span class="menu-title">Edit Contact</span>--}}
            {{--                        </a>--}}
            {{--                        <!--end:Menu link-->--}}
            {{--                    </div>--}}
            {{--                    <!--end:Menu item-->--}}
            {{--                    <!--begin:Menu item-->--}}
            {{--                    <div class="menu-item">--}}
            {{--                        <!--begin:Menu link-->--}}
            {{--                        <a class="menu-link" href="../../demo1/dist/apps/contacts/view-contact.html">--}}
            {{--													<span class="menu-bullet">--}}
            {{--														<span class="bullet bullet-dot"></span>--}}
            {{--													</span>--}}
            {{--                            <span class="menu-title">View Contact</span>--}}
            {{--                        </a>--}}
            {{--                        <!--end:Menu link-->--}}
            {{--                    </div>--}}
            {{--                    <!--end:Menu item-->--}}
            {{--                </div>--}}
            {{--                <!--end:Menu sub-->--}}
            {{--            </div>--}}
            {{--            <!--end:Menu item-->--}}
            {{--            <!--begin:Menu item-->--}}
            {{--            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">--}}
            {{--                <!--begin:Menu link-->--}}
            {{--                <span class="menu-link">--}}
            {{--											<span class="menu-icon">--}}
            {{--												<i class="ki-duotone ki-chart fs-2">--}}
            {{--													<span class="path1"></span>--}}
            {{--													<span class="path2"></span>--}}
            {{--												</i>--}}
            {{--											</span>--}}
            {{--											<span class="menu-title">Support Center</span>--}}
            {{--											<span class="menu-arrow"></span>--}}
            {{--										</span>--}}
            {{--                <!--end:Menu link-->--}}
            {{--                <!--begin:Menu sub-->--}}
            {{--                <div class="menu-sub menu-sub-accordion">--}}
            {{--                    <!--begin:Menu item-->--}}
            {{--                    <div class="menu-item">--}}
            {{--                        <!--begin:Menu link-->--}}
            {{--                        <a class="menu-link" href="../../demo1/dist/apps/support-center/overview.html">--}}
            {{--													<span class="menu-bullet">--}}
            {{--														<span class="bullet bullet-dot"></span>--}}
            {{--													</span>--}}
            {{--                            <span class="menu-title">Overview</span>--}}
            {{--                        </a>--}}
            {{--                        <!--end:Menu link-->--}}
            {{--                    </div>--}}
            {{--                    <!--end:Menu item-->--}}
            {{--                    <!--begin:Menu item-->--}}
            {{--                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">--}}
            {{--                        <!--begin:Menu link-->--}}
            {{--                        <span class="menu-link">--}}
            {{--													<span class="menu-bullet">--}}
            {{--														<span class="bullet bullet-dot"></span>--}}
            {{--													</span>--}}
            {{--													<span class="menu-title">Tickets</span>--}}
            {{--													<span class="menu-arrow"></span>--}}
            {{--												</span>--}}
            {{--                        <!--end:Menu link-->--}}
            {{--                        <!--begin:Menu sub-->--}}
            {{--                        <div class="menu-sub menu-sub-accordion">--}}
            {{--                            <!--begin:Menu item-->--}}
            {{--                            <div class="menu-item">--}}
            {{--                                <!--begin:Menu link-->--}}
            {{--                                <a class="menu-link" href="../../demo1/dist/apps/support-center/tickets/list.html">--}}
            {{--															<span class="menu-bullet">--}}
            {{--																<span class="bullet bullet-dot"></span>--}}
            {{--															</span>--}}
            {{--                                    <span class="menu-title">Tickets List</span>--}}
            {{--                                </a>--}}
            {{--                                <!--end:Menu link-->--}}
            {{--                            </div>--}}
            {{--                            <!--end:Menu item-->--}}
            {{--                            <!--begin:Menu item-->--}}
            {{--                            <div class="menu-item">--}}
            {{--                                <!--begin:Menu link-->--}}
            {{--                                <a class="menu-link" href="../../demo1/dist/apps/support-center/tickets/view.html">--}}
            {{--															<span class="menu-bullet">--}}
            {{--																<span class="bullet bullet-dot"></span>--}}
            {{--															</span>--}}
            {{--                                    <span class="menu-title">View Ticket</span>--}}
            {{--                                </a>--}}
            {{--                                <!--end:Menu link-->--}}
            {{--                            </div>--}}
            {{--                            <!--end:Menu item-->--}}
            {{--                        </div>--}}
            {{--                        <!--end:Menu sub-->--}}
            {{--                    </div>--}}
            {{--                    <!--end:Menu item-->--}}
            {{--                    <!--begin:Menu item-->--}}
            {{--                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">--}}
            {{--                        <!--begin:Menu link-->--}}
            {{--                        <span class="menu-link">--}}
            {{--													<span class="menu-bullet">--}}
            {{--														<span class="bullet bullet-dot"></span>--}}
            {{--													</span>--}}
            {{--													<span class="menu-title">Tutorials</span>--}}
            {{--													<span class="menu-arrow"></span>--}}
            {{--												</span>--}}
            {{--                        <!--end:Menu link-->--}}
            {{--                        <!--begin:Menu sub-->--}}
            {{--                        <div class="menu-sub menu-sub-accordion">--}}
            {{--                            <!--begin:Menu item-->--}}
            {{--                            <div class="menu-item">--}}
            {{--                                <!--begin:Menu link-->--}}
            {{--                                <a class="menu-link" href="../../demo1/dist/apps/support-center/tutorials/list.html">--}}
            {{--															<span class="menu-bullet">--}}
            {{--																<span class="bullet bullet-dot"></span>--}}
            {{--															</span>--}}
            {{--                                    <span class="menu-title">Tutorials List</span>--}}
            {{--                                </a>--}}
            {{--                                <!--end:Menu link-->--}}
            {{--                            </div>--}}
            {{--                            <!--end:Menu item-->--}}
            {{--                            <!--begin:Menu item-->--}}
            {{--                            <div class="menu-item">--}}
            {{--                                <!--begin:Menu link-->--}}
            {{--                                <a class="menu-link" href="../../demo1/dist/apps/support-center/tutorials/post.html">--}}
            {{--															<span class="menu-bullet">--}}
            {{--																<span class="bullet bullet-dot"></span>--}}
            {{--															</span>--}}
            {{--                                    <span class="menu-title">Tutorial Post</span>--}}
            {{--                                </a>--}}
            {{--                                <!--end:Menu link-->--}}
            {{--                            </div>--}}
            {{--                            <!--end:Menu item-->--}}
            {{--                        </div>--}}
            {{--                        <!--end:Menu sub-->--}}
            {{--                    </div>--}}
            {{--                    <!--end:Menu item-->--}}
            {{--                    <!--begin:Menu item-->--}}
            {{--                    <div class="menu-item">--}}
            {{--                        <!--begin:Menu link-->--}}
            {{--                        <a class="menu-link" href="../../demo1/dist/apps/support-center/faq.html">--}}
            {{--													<span class="menu-bullet">--}}
            {{--														<span class="bullet bullet-dot"></span>--}}
            {{--													</span>--}}
            {{--                            <span class="menu-title">FAQ</span>--}}
            {{--                        </a>--}}
            {{--                        <!--end:Menu link-->--}}
            {{--                    </div>--}}
            {{--                    <!--end:Menu item-->--}}
            {{--                    <!--begin:Menu item-->--}}
            {{--                    <div class="menu-item">--}}
            {{--                        <!--begin:Menu link-->--}}
            {{--                        <a class="menu-link" href="../../demo1/dist/apps/support-center/licenses.html">--}}
            {{--													<span class="menu-bullet">--}}
            {{--														<span class="bullet bullet-dot"></span>--}}
            {{--													</span>--}}
            {{--                            <span class="menu-title">Licenses</span>--}}
            {{--                        </a>--}}
            {{--                        <!--end:Menu link-->--}}
            {{--                    </div>--}}
            {{--                    <!--end:Menu item-->--}}
            {{--                    <!--begin:Menu item-->--}}
            {{--                    <div class="menu-item">--}}
            {{--                        <!--begin:Menu link-->--}}
            {{--                        <a class="menu-link" href="../../demo1/dist/apps/support-center/contact.html">--}}
            {{--													<span class="menu-bullet">--}}
            {{--														<span class="bullet bullet-dot"></span>--}}
            {{--													</span>--}}
            {{--                            <span class="menu-title">Contact Us</span>--}}
            {{--                        </a>--}}
            {{--                        <!--end:Menu link-->--}}
            {{--                    </div>--}}
            {{--                    <!--end:Menu item-->--}}
            {{--                </div>--}}
            {{--                <!--end:Menu sub-->--}}
            {{--            </div>--}}
            {{--            <!--end:Menu item-->--}}
            {{--            <!--begin:Menu item-->--}}
            {{--            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">--}}
            {{--                <!--begin:Menu link-->--}}
            {{--                <span class="menu-link">--}}
            {{--											<span class="menu-icon">--}}
            {{--												<i class="ki-duotone ki-abstract-28 fs-2">--}}
            {{--													<span class="path1"></span>--}}
            {{--													<span class="path2"></span>--}}
            {{--												</i>--}}
            {{--											</span>--}}
            {{--											<span class="menu-title">User Management</span>--}}
            {{--											<span class="menu-arrow"></span>--}}
            {{--										</span>--}}
            {{--                <!--end:Menu link-->--}}
            {{--                <!--begin:Menu sub-->--}}
            {{--                <div class="menu-sub menu-sub-accordion">--}}
            {{--                    <!--begin:Menu item-->--}}
            {{--                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">--}}
            {{--                        <!--begin:Menu link-->--}}
            {{--                        <span class="menu-link">--}}
            {{--													<span class="menu-bullet">--}}
            {{--														<span class="bullet bullet-dot"></span>--}}
            {{--													</span>--}}
            {{--													<span class="menu-title">Users</span>--}}
            {{--													<span class="menu-arrow"></span>--}}
            {{--												</span>--}}
            {{--                        <!--end:Menu link-->--}}
            {{--                        <!--begin:Menu sub-->--}}
            {{--                        <div class="menu-sub menu-sub-accordion">--}}
            {{--                            <!--begin:Menu item-->--}}
            {{--                            <div class="menu-item">--}}
            {{--                                <!--begin:Menu link-->--}}
            {{--                                <a class="menu-link" href="../../demo1/dist/apps/user-management/users/list.html">--}}
            {{--															<span class="menu-bullet">--}}
            {{--																<span class="bullet bullet-dot"></span>--}}
            {{--															</span>--}}
            {{--                                    <span class="menu-title">Users List</span>--}}
            {{--                                </a>--}}
            {{--                                <!--end:Menu link-->--}}
            {{--                            </div>--}}
            {{--                            <!--end:Menu item-->--}}
            {{--                            <!--begin:Menu item-->--}}
            {{--                            <div class="menu-item">--}}
            {{--                                <!--begin:Menu link-->--}}
            {{--                                <a class="menu-link" href="../../demo1/dist/apps/user-management/users/view.html">--}}
            {{--															<span class="menu-bullet">--}}
            {{--																<span class="bullet bullet-dot"></span>--}}
            {{--															</span>--}}
            {{--                                    <span class="menu-title">View User</span>--}}
            {{--                                </a>--}}
            {{--                                <!--end:Menu link-->--}}
            {{--                            </div>--}}
            {{--                            <!--end:Menu item-->--}}
            {{--                        </div>--}}
            {{--                        <!--end:Menu sub-->--}}
            {{--                    </div>--}}
            {{--                    <!--end:Menu item-->--}}
            {{--                    <!--begin:Menu item-->--}}
            {{--                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">--}}
            {{--                        <!--begin:Menu link-->--}}
            {{--                        <span class="menu-link">--}}
            {{--													<span class="menu-bullet">--}}
            {{--														<span class="bullet bullet-dot"></span>--}}
            {{--													</span>--}}
            {{--													<span class="menu-title">Roles</span>--}}
            {{--													<span class="menu-arrow"></span>--}}
            {{--												</span>--}}
            {{--                        <!--end:Menu link-->--}}
            {{--                        <!--begin:Menu sub-->--}}
            {{--                        <div class="menu-sub menu-sub-accordion">--}}
            {{--                            <!--begin:Menu item-->--}}
            {{--                            <div class="menu-item">--}}
            {{--                                <!--begin:Menu link-->--}}
            {{--                                <a class="menu-link" href="../../demo1/dist/apps/user-management/roles/list.html">--}}
            {{--															<span class="menu-bullet">--}}
            {{--																<span class="bullet bullet-dot"></span>--}}
            {{--															</span>--}}
            {{--                                    <span class="menu-title">Roles List</span>--}}
            {{--                                </a>--}}
            {{--                                <!--end:Menu link-->--}}
            {{--                            </div>--}}
            {{--                            <!--end:Menu item-->--}}
            {{--                            <!--begin:Menu item-->--}}
            {{--                            <div class="menu-item">--}}
            {{--                                <!--begin:Menu link-->--}}
            {{--                                <a class="menu-link" href="../../demo1/dist/apps/user-management/roles/view.html">--}}
            {{--															<span class="menu-bullet">--}}
            {{--																<span class="bullet bullet-dot"></span>--}}
            {{--															</span>--}}
            {{--                                    <span class="menu-title">View Role</span>--}}
            {{--                                </a>--}}
            {{--                                <!--end:Menu link-->--}}
            {{--                            </div>--}}
            {{--                            <!--end:Menu item-->--}}
            {{--                        </div>--}}
            {{--                        <!--end:Menu sub-->--}}
            {{--                    </div>--}}
            {{--                    <!--end:Menu item-->--}}
            {{--                    <!--begin:Menu item-->--}}
            {{--                    <div class="menu-item">--}}
            {{--                        <!--begin:Menu link-->--}}
            {{--                        <a class="menu-link" href="../../demo1/dist/apps/user-management/permissions.html">--}}
            {{--													<span class="menu-bullet">--}}
            {{--														<span class="bullet bullet-dot"></span>--}}
            {{--													</span>--}}
            {{--                            <span class="menu-title">Permissions</span>--}}
            {{--                        </a>--}}
            {{--                        <!--end:Menu link-->--}}
            {{--                    </div>--}}
            {{--                    <!--end:Menu item-->--}}
            {{--                </div>--}}
            {{--                <!--end:Menu sub-->--}}
            {{--            </div>--}}
            {{--            <!--end:Menu item-->--}}
            {{--            <!--begin:Menu item-->--}}
            {{--            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">--}}
            {{--                <!--begin:Menu link-->--}}
            {{--                <span class="menu-link">--}}
            {{--											<span class="menu-icon">--}}
            {{--												<i class="ki-duotone ki-abstract-38 fs-2">--}}
            {{--													<span class="path1"></span>--}}
            {{--													<span class="path2"></span>--}}
            {{--												</i>--}}
            {{--											</span>--}}
            {{--											<span class="menu-title">Customers</span>--}}
            {{--											<span class="menu-arrow"></span>--}}
            {{--										</span>--}}
            {{--                <!--end:Menu link-->--}}
            {{--                <!--begin:Menu sub-->--}}
            {{--                <div class="menu-sub menu-sub-accordion">--}}
            {{--                    <!--begin:Menu item-->--}}
            {{--                    <div class="menu-item">--}}
            {{--                        <!--begin:Menu link-->--}}
            {{--                        <a class="menu-link" href="../../demo1/dist/apps/customers/getting-started.html">--}}
            {{--													<span class="menu-bullet">--}}
            {{--														<span class="bullet bullet-dot"></span>--}}
            {{--													</span>--}}
            {{--                            <span class="menu-title">Getting Started</span>--}}
            {{--                        </a>--}}
            {{--                        <!--end:Menu link-->--}}
            {{--                    </div>--}}
            {{--                    <!--end:Menu item-->--}}
            {{--                    <!--begin:Menu item-->--}}
            {{--                    <div class="menu-item">--}}
            {{--                        <!--begin:Menu link-->--}}
            {{--                        <a class="menu-link" href="../../demo1/dist/apps/customers/list.html">--}}
            {{--													<span class="menu-bullet">--}}
            {{--														<span class="bullet bullet-dot"></span>--}}
            {{--													</span>--}}
            {{--                            <span class="menu-title">Customer Listing</span>--}}
            {{--                        </a>--}}
            {{--                        <!--end:Menu link-->--}}
            {{--                    </div>--}}
            {{--                    <!--end:Menu item-->--}}
            {{--                    <!--begin:Menu item-->--}}
            {{--                    <div class="menu-item">--}}
            {{--                        <!--begin:Menu link-->--}}
            {{--                        <a class="menu-link" href="../../demo1/dist/apps/customers/view.html">--}}
            {{--													<span class="menu-bullet">--}}
            {{--														<span class="bullet bullet-dot"></span>--}}
            {{--													</span>--}}
            {{--                            <span class="menu-title">Customer Details</span>--}}
            {{--                        </a>--}}
            {{--                        <!--end:Menu link-->--}}
            {{--                    </div>--}}
            {{--                    <!--end:Menu item-->--}}
            {{--                </div>--}}
            {{--                <!--end:Menu sub-->--}}
            {{--            </div>--}}
            {{--            <!--end:Menu item-->--}}
            {{--            <!--begin:Menu item-->--}}
            {{--            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">--}}
            {{--                <!--begin:Menu link-->--}}
            {{--                <span class="menu-link">--}}
            {{--											<span class="menu-icon">--}}
            {{--												<i class="ki-duotone ki-map fs-2">--}}
            {{--													<span class="path1"></span>--}}
            {{--													<span class="path2"></span>--}}
            {{--													<span class="path3"></span>--}}
            {{--												</i>--}}
            {{--											</span>--}}
            {{--											<span class="menu-title">Subscription</span>--}}
            {{--											<span class="menu-arrow"></span>--}}
            {{--										</span>--}}
            {{--                <!--end:Menu link-->--}}
            {{--                <!--begin:Menu sub-->--}}
            {{--                <div class="menu-sub menu-sub-accordion">--}}
            {{--                    <!--begin:Menu item-->--}}
            {{--                    <div class="menu-item">--}}
            {{--                        <!--begin:Menu link-->--}}
            {{--                        <a class="menu-link" href="../../demo1/dist/apps/subscriptions/getting-started.html">--}}
            {{--													<span class="menu-bullet">--}}
            {{--														<span class="bullet bullet-dot"></span>--}}
            {{--													</span>--}}
            {{--                            <span class="menu-title">Getting Started</span>--}}
            {{--                        </a>--}}
            {{--                        <!--end:Menu link-->--}}
            {{--                    </div>--}}
            {{--                    <!--end:Menu item-->--}}
            {{--                    <!--begin:Menu item-->--}}
            {{--                    <div class="menu-item">--}}
            {{--                        <!--begin:Menu link-->--}}
            {{--                        <a class="menu-link" href="../../demo1/dist/apps/subscriptions/list.html">--}}
            {{--													<span class="menu-bullet">--}}
            {{--														<span class="bullet bullet-dot"></span>--}}
            {{--													</span>--}}
            {{--                            <span class="menu-title">Subscription List</span>--}}
            {{--                        </a>--}}
            {{--                        <!--end:Menu link-->--}}
            {{--                    </div>--}}
            {{--                    <!--end:Menu item-->--}}
            {{--                    <!--begin:Menu item-->--}}
            {{--                    <div class="menu-item">--}}
            {{--                        <!--begin:Menu link-->--}}
            {{--                        <a class="menu-link" href="../../demo1/dist/apps/subscriptions/add.html">--}}
            {{--													<span class="menu-bullet">--}}
            {{--														<span class="bullet bullet-dot"></span>--}}
            {{--													</span>--}}
            {{--                            <span class="menu-title">Add Subscription</span>--}}
            {{--                        </a>--}}
            {{--                        <!--end:Menu link-->--}}
            {{--                    </div>--}}
            {{--                    <!--end:Menu item-->--}}
            {{--                    <!--begin:Menu item-->--}}
            {{--                    <div class="menu-item">--}}
            {{--                        <!--begin:Menu link-->--}}
            {{--                        <a class="menu-link" href="../../demo1/dist/apps/subscriptions/view.html">--}}
            {{--													<span class="menu-bullet">--}}
            {{--														<span class="bullet bullet-dot"></span>--}}
            {{--													</span>--}}
            {{--                            <span class="menu-title">View Subscription</span>--}}
            {{--                        </a>--}}
            {{--                        <!--end:Menu link-->--}}
            {{--                    </div>--}}
            {{--                    <!--end:Menu item-->--}}
            {{--                </div>--}}
            {{--                <!--end:Menu sub-->--}}
            {{--            </div>--}}
            {{--            <!--end:Menu item-->--}}
            {{--            <!--begin:Menu item-->--}}
            {{--            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">--}}
            {{--                <!--begin:Menu link-->--}}
            {{--                <span class="menu-link">--}}
            {{--											<span class="menu-icon">--}}
            {{--												<i class="ki-duotone ki-credit-cart fs-2">--}}
            {{--													<span class="path1"></span>--}}
            {{--													<span class="path2"></span>--}}
            {{--												</i>--}}
            {{--											</span>--}}
            {{--											<span class="menu-title">Invoice Manager</span>--}}
            {{--											<span class="menu-arrow"></span>--}}
            {{--										</span>--}}
            {{--                <!--end:Menu link-->--}}
            {{--                <!--begin:Menu sub-->--}}
            {{--                <div class="menu-sub menu-sub-accordion">--}}
            {{--                    <!--begin:Menu item-->--}}
            {{--                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">--}}
            {{--                        <!--begin:Menu link-->--}}
            {{--                        <span class="menu-link">--}}
            {{--													<span class="menu-bullet">--}}
            {{--														<span class="bullet bullet-dot"></span>--}}
            {{--													</span>--}}
            {{--													<span class="menu-title">View Invoices</span>--}}
            {{--													<span class="menu-arrow"></span>--}}
            {{--												</span>--}}
            {{--                        <!--end:Menu link-->--}}
            {{--                        <!--begin:Menu sub-->--}}
            {{--                        <div class="menu-sub menu-sub-accordion menu-active-bg">--}}
            {{--                            <!--begin:Menu item-->--}}
            {{--                            <div class="menu-item">--}}
            {{--                                <!--begin:Menu link-->--}}
            {{--                                <a class="menu-link" href="../../demo1/dist/apps/invoices/view/invoice-1.html">--}}
            {{--															<span class="menu-bullet">--}}
            {{--																<span class="bullet bullet-dot"></span>--}}
            {{--															</span>--}}
            {{--                                    <span class="menu-title">Invoice 1</span>--}}
            {{--                                </a>--}}
            {{--                                <!--end:Menu link-->--}}
            {{--                            </div>--}}
            {{--                            <!--end:Menu item-->--}}
            {{--                            <!--begin:Menu item-->--}}
            {{--                            <div class="menu-item">--}}
            {{--                                <!--begin:Menu link-->--}}
            {{--                                <a class="menu-link" href="../../demo1/dist/apps/invoices/view/invoice-2.html">--}}
            {{--															<span class="menu-bullet">--}}
            {{--																<span class="bullet bullet-dot"></span>--}}
            {{--															</span>--}}
            {{--                                    <span class="menu-title">Invoice 2</span>--}}
            {{--                                </a>--}}
            {{--                                <!--end:Menu link-->--}}
            {{--                            </div>--}}
            {{--                            <!--end:Menu item-->--}}
            {{--                            <!--begin:Menu item-->--}}
            {{--                            <div class="menu-item">--}}
            {{--                                <!--begin:Menu link-->--}}
            {{--                                <a class="menu-link" href="../../demo1/dist/apps/invoices/view/invoice-3.html">--}}
            {{--															<span class="menu-bullet">--}}
            {{--																<span class="bullet bullet-dot"></span>--}}
            {{--															</span>--}}
            {{--                                    <span class="menu-title">Invoice 3</span>--}}
            {{--                                </a>--}}
            {{--                                <!--end:Menu link-->--}}
            {{--                            </div>--}}
            {{--                            <!--end:Menu item-->--}}
            {{--                        </div>--}}
            {{--                        <!--end:Menu sub-->--}}
            {{--                    </div>--}}
            {{--                    <!--end:Menu item-->--}}
            {{--                    <!--begin:Menu item-->--}}
            {{--                    <div class="menu-item">--}}
            {{--                        <!--begin:Menu link-->--}}
            {{--                        <a class="menu-link" href="../../demo1/dist/apps/invoices/create.html">--}}
            {{--													<span class="menu-bullet">--}}
            {{--														<span class="bullet bullet-dot"></span>--}}
            {{--													</span>--}}
            {{--                            <span class="menu-title">Create Invoice</span>--}}
            {{--                        </a>--}}
            {{--                        <!--end:Menu link-->--}}
            {{--                    </div>--}}
            {{--                    <!--end:Menu item-->--}}
            {{--                </div>--}}
            {{--                <!--end:Menu sub-->--}}
            {{--            </div>--}}
            {{--            <!--end:Menu item-->--}}
            {{--            <!--begin:Menu item-->--}}
            {{--            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">--}}
            {{--                <!--begin:Menu link-->--}}
            {{--                <span class="menu-link">--}}
            {{--											<span class="menu-icon">--}}
            {{--												<i class="ki-duotone ki-switch fs-2">--}}
            {{--													<span class="path1"></span>--}}
            {{--													<span class="path2"></span>--}}
            {{--												</i>--}}
            {{--											</span>--}}
            {{--											<span class="menu-title">File Manager</span>--}}
            {{--											<span class="menu-arrow"></span>--}}
            {{--										</span>--}}
            {{--                <!--end:Menu link-->--}}
            {{--                <!--begin:Menu sub-->--}}
            {{--                <div class="menu-sub menu-sub-accordion">--}}
            {{--                    <!--begin:Menu item-->--}}
            {{--                    <div class="menu-item">--}}
            {{--                        <!--begin:Menu link-->--}}
            {{--                        <a class="menu-link" href="../../demo1/dist/apps/file-manager/folders.html">--}}
            {{--													<span class="menu-bullet">--}}
            {{--														<span class="bullet bullet-dot"></span>--}}
            {{--													</span>--}}
            {{--                            <span class="menu-title">Folders</span>--}}
            {{--                        </a>--}}
            {{--                        <!--end:Menu link-->--}}
            {{--                    </div>--}}
            {{--                    <!--end:Menu item-->--}}
            {{--                    <!--begin:Menu item-->--}}
            {{--                    <div class="menu-item">--}}
            {{--                        <!--begin:Menu link-->--}}
            {{--                        <a class="menu-link" href="../../demo1/dist/apps/file-manager/files.html">--}}
            {{--													<span class="menu-bullet">--}}
            {{--														<span class="bullet bullet-dot"></span>--}}
            {{--													</span>--}}
            {{--                            <span class="menu-title">Files</span>--}}
            {{--                        </a>--}}
            {{--                        <!--end:Menu link-->--}}
            {{--                    </div>--}}
            {{--                    <!--end:Menu item-->--}}
            {{--                    <!--begin:Menu item-->--}}
            {{--                    <div class="menu-item">--}}
            {{--                        <!--begin:Menu link-->--}}
            {{--                        <a class="menu-link" href="../../demo1/dist/apps/file-manager/blank.html">--}}
            {{--													<span class="menu-bullet">--}}
            {{--														<span class="bullet bullet-dot"></span>--}}
            {{--													</span>--}}
            {{--                            <span class="menu-title">Blank Directory</span>--}}
            {{--                        </a>--}}
            {{--                        <!--end:Menu link-->--}}
            {{--                    </div>--}}
            {{--                    <!--end:Menu item-->--}}
            {{--                    <!--begin:Menu item-->--}}
            {{--                    <div class="menu-item">--}}
            {{--                        <!--begin:Menu link-->--}}
            {{--                        <a class="menu-link" href="../../demo1/dist/apps/file-manager/settings.html">--}}
            {{--													<span class="menu-bullet">--}}
            {{--														<span class="bullet bullet-dot"></span>--}}
            {{--													</span>--}}
            {{--                            <span class="menu-title">Settings</span>--}}
            {{--                        </a>--}}
            {{--                        <!--end:Menu link-->--}}
            {{--                    </div>--}}
            {{--                    <!--end:Menu item-->--}}
            {{--                </div>--}}
            {{--                <!--end:Menu sub-->--}}
            {{--            </div>--}}
            {{--            <!--end:Menu item-->--}}
            {{--            <!--begin:Menu item-->--}}
            {{--            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">--}}
            {{--                <!--begin:Menu link-->--}}
            {{--                <span class="menu-link">--}}
            {{--											<span class="menu-icon">--}}
            {{--												<i class="ki-duotone ki-sms fs-2">--}}
            {{--													<span class="path1"></span>--}}
            {{--													<span class="path2"></span>--}}
            {{--												</i>--}}
            {{--											</span>--}}
            {{--											<span class="menu-title">Inbox</span>--}}
            {{--											<span class="menu-arrow"></span>--}}
            {{--										</span>--}}
            {{--                <!--end:Menu link-->--}}
            {{--                <!--begin:Menu sub-->--}}
            {{--                <div class="menu-sub menu-sub-accordion">--}}
            {{--                    <!--begin:Menu item-->--}}
            {{--                    <div class="menu-item">--}}
            {{--                        <!--begin:Menu link-->--}}
            {{--                        <a class="menu-link" href="../../demo1/dist/apps/inbox/listing.html">--}}
            {{--													<span class="menu-bullet">--}}
            {{--														<span class="bullet bullet-dot"></span>--}}
            {{--													</span>--}}
            {{--                            <span class="menu-title">Messages</span>--}}
            {{--                            <span class="menu-badge">--}}
            {{--														<span class="badge badge-success">3</span>--}}
            {{--													</span>--}}
            {{--                        </a>--}}
            {{--                        <!--end:Menu link-->--}}
            {{--                    </div>--}}
            {{--                    <!--end:Menu item-->--}}
            {{--                    <!--begin:Menu item-->--}}
            {{--                    <div class="menu-item">--}}
            {{--                        <!--begin:Menu link-->--}}
            {{--                        <a class="menu-link" href="../../demo1/dist/apps/inbox/compose.html">--}}
            {{--													<span class="menu-bullet">--}}
            {{--														<span class="bullet bullet-dot"></span>--}}
            {{--													</span>--}}
            {{--                            <span class="menu-title">Compose</span>--}}
            {{--                        </a>--}}
            {{--                        <!--end:Menu link-->--}}
            {{--                    </div>--}}
            {{--                    <!--end:Menu item-->--}}
            {{--                    <!--begin:Menu item-->--}}
            {{--                    <div class="menu-item">--}}
            {{--                        <!--begin:Menu link-->--}}
            {{--                        <a class="menu-link" href="../../demo1/dist/apps/inbox/reply.html">--}}
            {{--													<span class="menu-bullet">--}}
            {{--														<span class="bullet bullet-dot"></span>--}}
            {{--													</span>--}}
            {{--                            <span class="menu-title">View & Reply</span>--}}
            {{--                        </a>--}}
            {{--                        <!--end:Menu link-->--}}
            {{--                    </div>--}}
            {{--                    <!--end:Menu item-->--}}
            {{--                </div>--}}
            {{--                <!--end:Menu sub-->--}}
            {{--            </div>--}}
            {{--            <!--end:Menu item-->--}}
            {{--            <!--begin:Menu item-->--}}
            {{--            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">--}}
            {{--                <!--begin:Menu link-->--}}
            {{--                <span class="menu-link">--}}
            {{--											<span class="menu-icon">--}}
            {{--												<i class="ki-duotone ki-message-text-2 fs-2">--}}
            {{--													<span class="path1"></span>--}}
            {{--													<span class="path2"></span>--}}
            {{--													<span class="path3"></span>--}}
            {{--												</i>--}}
            {{--											</span>--}}
            {{--											<span class="menu-title">Chat</span>--}}
            {{--											<span class="menu-arrow"></span>--}}
            {{--										</span>--}}
            {{--                <!--end:Menu link-->--}}
            {{--                <!--begin:Menu sub-->--}}
            {{--                <div class="menu-sub menu-sub-accordion">--}}
            {{--                    <!--begin:Menu item-->--}}
            {{--                    <div class="menu-item">--}}
            {{--                        <!--begin:Menu link-->--}}
            {{--                        <a class="menu-link" href="../../demo1/dist/apps/chat/private.html">--}}
            {{--													<span class="menu-bullet">--}}
            {{--														<span class="bullet bullet-dot"></span>--}}
            {{--													</span>--}}
            {{--                            <span class="menu-title">Private Chat</span>--}}
            {{--                        </a>--}}
            {{--                        <!--end:Menu link-->--}}
            {{--                    </div>--}}
            {{--                    <!--end:Menu item-->--}}
            {{--                    <!--begin:Menu item-->--}}
            {{--                    <div class="menu-item">--}}
            {{--                        <!--begin:Menu link-->--}}
            {{--                        <a class="menu-link" href="../../demo1/dist/apps/chat/group.html">--}}
            {{--													<span class="menu-bullet">--}}
            {{--														<span class="bullet bullet-dot"></span>--}}
            {{--													</span>--}}
            {{--                            <span class="menu-title">Group Chat</span>--}}
            {{--                        </a>--}}
            {{--                        <!--end:Menu link-->--}}
            {{--                    </div>--}}
            {{--                    <!--end:Menu item-->--}}
            {{--                    <!--begin:Menu item-->--}}
            {{--                    <div class="menu-item">--}}
            {{--                        <!--begin:Menu link-->--}}
            {{--                        <a class="menu-link" href="../../demo1/dist/apps/chat/drawer.html">--}}
            {{--													<span class="menu-bullet">--}}
            {{--														<span class="bullet bullet-dot"></span>--}}
            {{--													</span>--}}
            {{--                            <span class="menu-title">Drawer Chat</span>--}}
            {{--                        </a>--}}
            {{--                        <!--end:Menu link-->--}}
            {{--                    </div>--}}
            {{--                    <!--end:Menu item-->--}}
            {{--                </div>--}}
            {{--                <!--end:Menu sub-->--}}
            {{--            </div>--}}
            {{--            <!--end:Menu item-->--}}
            {{--            <!--begin:Menu item-->--}}
            {{--            <div class="menu-item">--}}
            {{--                <!--begin:Menu link-->--}}
            {{--                <a class="menu-link" href="../../demo1/dist/apps/calendar.html">--}}
            {{--											<span class="menu-icon">--}}
            {{--												<i class="ki-duotone ki-calendar-8 fs-2">--}}
            {{--													<span class="path1"></span>--}}
            {{--													<span class="path2"></span>--}}
            {{--													<span class="path3"></span>--}}
            {{--													<span class="path4"></span>--}}
            {{--													<span class="path5"></span>--}}
            {{--													<span class="path6"></span>--}}
            {{--												</i>--}}
            {{--											</span>--}}
            {{--                    <span class="menu-title">Calendar</span>--}}
            {{--                </a>--}}
            {{--                <!--end:Menu link-->--}}
            {{--            </div>--}}
            {{--            <!--end:Menu item-->--}}
            {{--            <!--begin:Menu item-->--}}
            {{--            <div class="menu-item pt-5">--}}
            {{--                <!--begin:Menu content-->--}}
            {{--                <div class="menu-content">--}}
            {{--                    <span class="menu-heading fw-bold text-uppercase fs-7">Layouts</span>--}}
            {{--                </div>--}}
            {{--                <!--end:Menu content-->--}}
            {{--            </div>--}}
            {{--            <!--end:Menu item-->--}}
            {{--            <!--begin:Menu item-->--}}
            {{--            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">--}}
            {{--                <!--begin:Menu link-->--}}
            {{--                <span class="menu-link">--}}
            {{--											<span class="menu-icon">--}}
            {{--												<i class="ki-duotone ki-element-7 fs-2">--}}
            {{--													<span class="path1"></span>--}}
            {{--													<span class="path2"></span>--}}
            {{--												</i>--}}
            {{--											</span>--}}
            {{--											<span class="menu-title">Layout Options</span>--}}
            {{--											<span class="menu-arrow"></span>--}}
            {{--										</span>--}}
            {{--                <!--end:Menu link-->--}}
            {{--                <!--begin:Menu sub-->--}}
            {{--                <div class="menu-sub menu-sub-accordion">--}}
            {{--                    <!--begin:Menu item-->--}}
            {{--                    <div class="menu-item">--}}
            {{--                        <!--begin:Menu link-->--}}
            {{--                        <a class="menu-link" href="../../demo1/dist/layouts/light-sidebar.html">--}}
            {{--													<span class="menu-bullet">--}}
            {{--														<span class="bullet bullet-dot"></span>--}}
            {{--													</span>--}}
            {{--                            <span class="menu-title">Light Sidebar</span>--}}
            {{--                        </a>--}}
            {{--                        <!--end:Menu link-->--}}
            {{--                    </div>--}}
            {{--                    <!--end:Menu item-->--}}
            {{--                    <!--begin:Menu item-->--}}
            {{--                    <div class="menu-item">--}}
            {{--                        <!--begin:Menu link-->--}}
            {{--                        <a class="menu-link" href="../../demo1/dist/layouts/dark-sidebar.html">--}}
            {{--													<span class="menu-bullet">--}}
            {{--														<span class="bullet bullet-dot"></span>--}}
            {{--													</span>--}}
            {{--                            <span class="menu-title">Dark Sidebar</span>--}}
            {{--                        </a>--}}
            {{--                        <!--end:Menu link-->--}}
            {{--                    </div>--}}
            {{--                    <!--end:Menu item-->--}}
            {{--                    <!--begin:Menu item-->--}}
            {{--                    <div class="menu-item">--}}
            {{--                        <!--begin:Menu link-->--}}
            {{--                        <a class="menu-link" href="../../demo1/dist/layouts/light-header.html">--}}
            {{--													<span class="menu-bullet">--}}
            {{--														<span class="bullet bullet-dot"></span>--}}
            {{--													</span>--}}
            {{--                            <span class="menu-title">Light Header</span>--}}
            {{--                        </a>--}}
            {{--                        <!--end:Menu link-->--}}
            {{--                    </div>--}}
            {{--                    <!--end:Menu item-->--}}
            {{--                    <!--begin:Menu item-->--}}
            {{--                    <div class="menu-item">--}}
            {{--                        <!--begin:Menu link-->--}}
            {{--                        <a class="menu-link" href="../../demo1/dist/layouts/dark-header.html">--}}
            {{--													<span class="menu-bullet">--}}
            {{--														<span class="bullet bullet-dot"></span>--}}
            {{--													</span>--}}
            {{--                            <span class="menu-title">Dark Header</span>--}}
            {{--                        </a>--}}
            {{--                        <!--end:Menu link-->--}}
            {{--                    </div>--}}
            {{--                    <!--end:Menu item-->--}}
            {{--                </div>--}}
            {{--                <!--end:Menu sub-->--}}
            {{--            </div>--}}
            {{--            <!--end:Menu item-->--}}
            {{--            <!--begin:Menu item-->--}}
            {{--            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">--}}
            {{--                <!--begin:Menu link-->--}}
            {{--                <span class="menu-link">--}}
            {{--											<span class="menu-icon">--}}
            {{--												<i class="ki-duotone ki-text-align-center fs-2">--}}
            {{--													<span class="path1"></span>--}}
            {{--													<span class="path2"></span>--}}
            {{--													<span class="path3"></span>--}}
            {{--													<span class="path4"></span>--}}
            {{--												</i>--}}
            {{--											</span>--}}
            {{--											<span class="menu-title">Toolbars</span>--}}
            {{--											<span class="menu-arrow"></span>--}}
            {{--										</span>--}}
            {{--                <!--end:Menu link-->--}}
            {{--                <!--begin:Menu sub-->--}}
            {{--                <div class="menu-sub menu-sub-accordion">--}}
            {{--                    <!--begin:Menu item-->--}}
            {{--                    <div class="menu-item">--}}
            {{--                        <!--begin:Menu link-->--}}
            {{--                        <a class="menu-link" href="../../demo1/dist/toolbars/classic.html">--}}
            {{--													<span class="menu-bullet">--}}
            {{--														<span class="bullet bullet-dot"></span>--}}
            {{--													</span>--}}
            {{--                            <span class="menu-title">Classic</span>--}}
            {{--                        </a>--}}
            {{--                        <!--end:Menu link-->--}}
            {{--                    </div>--}}
            {{--                    <!--end:Menu item-->--}}
            {{--                    <!--begin:Menu item-->--}}
            {{--                    <div class="menu-item">--}}
            {{--                        <!--begin:Menu link-->--}}
            {{--                        <a class="menu-link" href="../../demo1/dist/toolbars/saas.html">--}}
            {{--													<span class="menu-bullet">--}}
            {{--														<span class="bullet bullet-dot"></span>--}}
            {{--													</span>--}}
            {{--                            <span class="menu-title">SaaS</span>--}}
            {{--                        </a>--}}
            {{--                        <!--end:Menu link-->--}}
            {{--                    </div>--}}
            {{--                    <!--end:Menu item-->--}}
            {{--                    <!--begin:Menu item-->--}}
            {{--                    <div class="menu-item">--}}
            {{--                        <!--begin:Menu link-->--}}
            {{--                        <a class="menu-link" href="../../demo1/dist/toolbars/accounting.html">--}}
            {{--													<span class="menu-bullet">--}}
            {{--														<span class="bullet bullet-dot"></span>--}}
            {{--													</span>--}}
            {{--                            <span class="menu-title">Accounting</span>--}}
            {{--                        </a>--}}
            {{--                        <!--end:Menu link-->--}}
            {{--                    </div>--}}
            {{--                    <!--end:Menu item-->--}}
            {{--                    <!--begin:Menu item-->--}}
            {{--                    <div class="menu-item">--}}
            {{--                        <!--begin:Menu link-->--}}
            {{--                        <a class="menu-link" href="../../demo1/dist/toolbars/extended.html">--}}
            {{--													<span class="menu-bullet">--}}
            {{--														<span class="bullet bullet-dot"></span>--}}
            {{--													</span>--}}
            {{--                            <span class="menu-title">Extended</span>--}}
            {{--                        </a>--}}
            {{--                        <!--end:Menu link-->--}}
            {{--                    </div>--}}
            {{--                    <!--end:Menu item-->--}}
            {{--                    <!--begin:Menu item-->--}}
            {{--                    <div class="menu-item">--}}
            {{--                        <!--begin:Menu link-->--}}
            {{--                        <a class="menu-link" href="../../demo1/dist/toolbars/reports.html">--}}
            {{--													<span class="menu-bullet">--}}
            {{--														<span class="bullet bullet-dot"></span>--}}
            {{--													</span>--}}
            {{--                            <span class="menu-title">Reports</span>--}}
            {{--                        </a>--}}
            {{--                        <!--end:Menu link-->--}}
            {{--                    </div>--}}
            {{--                    <!--end:Menu item-->--}}
            {{--                </div>--}}
            {{--                <!--end:Menu sub-->--}}
            {{--            </div>--}}
            {{--            <!--end:Menu item-->--}}
            {{--            <!--begin:Menu item-->--}}
            {{--            <div class="menu-item">--}}
            {{--                <!--begin:Menu link-->--}}
            {{--                <a class="menu-link" href="https://preview.keenthemes.com/metronic8/demo1/layout-builder.html">--}}
            {{--											<span class="menu-icon">--}}
            {{--												<i class="ki-duotone ki-abstract-13 fs-2">--}}
            {{--													<span class="path1"></span>--}}
            {{--													<span class="path2"></span>--}}
            {{--												</i>--}}
            {{--											</span>--}}
            {{--                    <span class="menu-title">Layout Builder</span>--}}
            {{--                </a>--}}
            {{--                <!--end:Menu link-->--}}
            {{--            </div>--}}
            {{--            <!--end:Menu item-->--}}
            {{--            <!--begin:Menu item-->--}}
            {{--            <div class="menu-item pt-5">--}}
            {{--                <!--begin:Menu content-->--}}
            {{--                <div class="menu-content">--}}
            {{--                    <span class="menu-heading fw-bold text-uppercase fs-7">Help</span>--}}
            {{--                </div>--}}
            {{--                <!--end:Menu content-->--}}
            {{--            </div>--}}
            {{--            <!--end:Menu item-->--}}
            {{--            <!--begin:Menu item-->--}}
            {{--            <div class="menu-item">--}}
            {{--                <!--begin:Menu link-->--}}
            {{--                <a class="menu-link" href="https://preview.keenthemes.com/html/metronic/docs/base/utilities" target="_blank">--}}
            {{--											<span class="menu-icon">--}}
            {{--												<i class="ki-duotone ki-rocket fs-2">--}}
            {{--													<span class="path1"></span>--}}
            {{--													<span class="path2"></span>--}}
            {{--												</i>--}}
            {{--											</span>--}}
            {{--                    <span class="menu-title">Components</span>--}}
            {{--                </a>--}}
            {{--                <!--end:Menu link-->--}}
            {{--            </div>--}}
            {{--            <!--end:Menu item-->--}}
            {{--            <!--begin:Menu item-->--}}
            {{--            <div class="menu-item">--}}
            {{--                <!--begin:Menu link-->--}}
            {{--                <a class="menu-link" href="https://preview.keenthemes.com/html/metronic/docs" target="_blank">--}}
            {{--											<span class="menu-icon">--}}
            {{--												<i class="ki-duotone ki-abstract-26 fs-2">--}}
            {{--													<span class="path1"></span>--}}
            {{--													<span class="path2"></span>--}}
            {{--												</i>--}}
            {{--											</span>--}}
            {{--                    <span class="menu-title">Documentation</span>--}}
            {{--                </a>--}}
            {{--                <!--end:Menu link-->--}}
            {{--            </div>--}}
            {{--            <!--end:Menu item-->--}}
            {{--            <!--begin:Menu item-->--}}
            {{--            <div class="menu-item">--}}
            {{--                <!--begin:Menu link-->--}}
            {{--                <a class="menu-link" href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog" target="_blank">--}}
            {{--											<span class="menu-icon">--}}
            {{--												<i class="ki-duotone ki-code fs-2">--}}
            {{--													<span class="path1"></span>--}}
            {{--													<span class="path2"></span>--}}
            {{--													<span class="path3"></span>--}}
            {{--													<span class="path4"></span>--}}
            {{--												</i>--}}
            {{--											</span>--}}
            {{--                    <span class="menu-title">Changelog v8.1.8</span>--}}
            {{--                </a>--}}
            {{--                <!--end:Menu link-->--}}
            {{--            </div>--}}
            {{--            <!--end:Menu item-->--}}
        </div>
        <!--end::Menu-->
    </div>
    <!--end::Menu wrapper-->
</div>
<div class="app-sidebar-footer flex-column-auto pt-2 pb-6 px-6" id="kt_app_sidebar_footer">
    <a href="https://preview.keenthemes.com/html/metronic/docs"
       class="btn btn-flex flex-center btn-custom btn-primary overflow-hidden text-nowrap px-0 h-40px w-100"
       data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss-="click"
       title="200+ in-house components and 3rd-party plugins">
        <span class="btn-label">Docs & Components</span>
        <i class="ki-duotone ki-document btn-icon fs-2 m-0">
            <span class="path1"></span>
            <span class="path2"></span>
        </i>
    </a>
</div>
