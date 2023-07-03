
<!-- BEGIN: Footer-->

<!-- END: Footer-->


<!-- BEGIN: Vendor JS-->
<script src="{{asset('styledashboard/app-assets/vendors/js/vendors.min.js')}}"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{asset('styledashboard/app-assets/vendors/js/charts/apexcharts.min.js')}}"></script>
<script src="{{asset('styledashboard/app-assets/vendors/js/extensions/toastr.min.js')}}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{asset('styledashboard/app-assets/js/core/app-menu.min.js')}}"></script>
<script src="{{asset('styledashboard/app-assets/js/core/app.min.js')}}"></script>
<script src="{{asset('styledashboard/app-assets/js/scripts/customizer.min.js')}}"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="{{asset('styledashboard/app-assets/js/scripts/pages/dashboard-ecommerce.min.js')}}"></script>
<!-- END: Page JS-->
<!-- BEGIN: Page Vendor JS-->
<script src="{{asset('styledashboard/app-assets/vendors/js/extensions/moment.min.js')}}"></script>
<script src="{{asset('styledashboard/app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('styledashboard/app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js')}}"></script>
<script src="{{asset('styledashboard/app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('styledashboard/app-assets/vendors/js/tables/datatable/responsive.bootstrap4.js')}}"></script>
<script src="{{asset('styledashboard/app-assets/vendors/js/tables/datatable/responsive.bootstrap4.js')}}"></script>
<script src="{{asset('styledashboard/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js')}}"></script>
<script src="{{asset('styledashboard/app-assets/vendors/js/tables/datatable/buttons.bootstrap5.min.js')}}"></script>
<script src="{{asset('styledashboard/app-assets/vendors/js/forms/validation/jquery.validate.min.js')}}"></script>


<!-- END: Page Vendor JS-->
<!-- BEGIN: Page Vendor JS-->

<script src="{{asset('styledashboard/app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js')}}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Page JS-->
<!-- BEGIN: Page JS-->
<script src="{{asset('styledashboard/app-assets/js/scripts/tables/table-datatables-advanced.js')}}"></script>
<!-- END: Page JS-->

<!-- END: Page JS-->

@yield('scripts')
<script>
    $(window).on('load',  function(){
        if (feather) {
            feather.replace({ width: 14, height: 14 });
        }
    })


</script>



<br>


<script>
    $(document).ready(function () {
        jQuery('.delete').click(function (event) {
            event.preventDefault();


            console.log("Tapped Delete button")
            var that = $(this)
            e.preventDefault();
            var n = new Noty({
                text: "@lang('site.confirm_delete')",
                type: "error",
                killer: true,
                buttons: [
                    Noty.button("@lang('site.yes')", 'btn btn-success mr-2', function () {
                        that.closest('form').submit();
                    }),
                    Noty.button("@lang('site.no')", 'btn btn-primary mr-2', function () {
                        n.close();
                    })
                ]
            });
            n.show();


        });
    });
</script>





<script>
    function confirmDelete($id) {
        console.log("Tapped Delete button")
        var that = document.getElementById("deleteForm" + $id);
        var n = new Noty({
            text: "@lang('site.confirm_delete')",
            type: "error",
            killer: true,
            buttons: [
                Noty.button("@lang('site.yes')", 'btn btn-success mr-2', function () {
                    that.submit();
                }),
                Noty.button("@lang('site.no')", 'btn btn-primary mr-2', function () {
                    n.close();
                })
            ]
        });
        n.show();
    }

    $(document).ready(function () {

        $("#deleteForm").on('click', "#delete", function (e) {

            console.log("Tapped Delete button")
            var that = $(this)
            e.preventDefault();
            var n = new Noty({
                text: "@lang('site.confirm_delete')",
                type: "error",
                killer: true,
                buttons: [
                    Noty.button("@lang('site.yes')", 'btn btn-success mr-2', function () {
                        that.closest('form').submit();
                    }),
                    Noty.button("@lang('site.no')", 'btn btn-primary mr-2', function () {
                        n.close();
                    })
                ]
            });
            n.show();

        });


    });
</script>
