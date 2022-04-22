<template>
   <div>
        <!-- Navbar -->
    <Navbar></Navbar>
    <!-- /.navbar -->
    <Sidebar></Sidebar>
    <!-- Main Sidebar Container -->


    <!-- Content Wrapper. Contains page content -->
    <Content></Content>
    <!-- /.content-wrapper -->
    <Footer></Footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>

</template>

<script>
import Navbar from './plantilla/Navbar'
import Sidebar from './plantilla/Sidebar'
import Content from './plantilla/Content'
import Footer from './plantilla/Footer'
export default {
    componets:{Navbar,Sidebar,Content,Footer}
}
</script>

