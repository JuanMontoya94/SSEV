<!DOCTYPE html>
<html>
    @include('sections.head')
<body class="hold-transition sidebar-mini">
<div class="wrapper" id="app">

    <App ruta="{{route('basepath')}}" ></App>

</div>
<!-- ./wrapper -->


    @include('sections.script')
<!-- <script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
});
</script> -->
</body>
</html>
