<!-- CORE PLUGINS-->
<script src="{{asset('/admin-assets')}}/vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
<script src="{{asset('/admin-assets')}}/vendors/popper.js/dist/umd/popper.min.js" type="text/javascript"></script>
<script src="{{asset('/admin-assets')}}/vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
<script src="{{asset('/admin-assets')}}/vendors/metisMenu/dist/metisMenu.min.js" type="text/javascript"></script>
<script src="{{asset('/admin-assets')}}/vendors/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<!-- PAGE LEVEL PLUGINS-->
<script src="{{asset('/admin-assets')}}/vendors/chart.js/dist/Chart.min.js" type="text/javascript"></script>
<script src="{{asset('/admin-assets')}}/vendors/jvectormap/jquery-jvectormap-2.0.3.min.js" type="text/javascript"></script>
<script src="{{asset('/admin-assets')}}/vendors/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
<script src="{{asset('/admin-assets')}}/vendors/jvectormap/jquery-jvectormap-us-aea-en.js" type="text/javascript"></script>
<!-- CORE SCRIPTS-->
<script src="{{asset('/admin-assets')}}/js/app.min.js" type="text/javascript"></script>
<!-- PAGE LEVEL SCRIPTS-->
<script src="{{asset('/admin-assets')}}/js/scripts/dashboard_1_demo.js" type="text/javascript"></script>

{{--toastr js cdn Link: https://cdnjs.com/libraries/toastr.js/latest--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

{{--DataTables--}}
<script src="{{asset('/admin-assets')}}/vendors/DataTables/datatables.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(function() {
        $('#example-table').DataTable({
            pageLength: 5,
            //"ajax": './assets/demo/data/table_data.json',
            /*"columns": [
                { "data": "name" },
                { "data": "office" },
                { "data": "extn" },
                { "data": "start_date" },
                { "data": "salary" }
            ]*/
        });
    })
</script>

<!-- Text Editor -->
<script src="{{asset('/admin-assets')}}/vendors/summernote/dist/summernote.min.js" type="text/javascript"></script>
<script src="{{asset('/admin-assets')}}/vendors/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
<!-- Text Editor -->
<script type="text/javascript">
    $(function() {
        $('.summernote').summernote();
        $('.summernote_air').summernote({
            airMode: true
        });
    });
</script>
{{--====================================Dashboard================================================================--}}

<!-- PAGE LEVEL PLUGINS -->
<script src="{{asset('/admin-assets')}}/vendors/jquery-validation/dist/jquery.validate.min.js" type="text/javascript"></script>
<!-- CORE SCRIPTS-->
<script src="{{asset('/admin-assets')}}/js/app.js" type="text/javascript"></script>
<!-- PAGE LEVEL SCRIPTS-->
<script type="text/javascript">
    $(function() {
        $('#login-form').validate({
            errorClass: "help-block",
            rules: {
                email: {
                    required: true,
                    email: true
                },
                password: {
                    required: true
                }
            },
            highlight: function(e) {
                $(e).closest(".form-group").addClass("has-error")
            },
            unhighlight: function(e) {
                $(e).closest(".form-group").removeClass("has-error")
            },
        });
    });
</script>

{{--======================================Login==================================================================--}}

@yield('admin-js')
