<template>
   <div>
        <!-- Navbar -->
    <Navbar :ruta="ruta"></Navbar>
    <!-- /.navbar -->
    <Sidebar :ruta="ruta"></Sidebar>
    <!-- Main Sidebar Container -->


    <!-- Content Wrapper. Contains page content -->
     <div class="content-wrapper">
        <router-view></router-view>
     </div>

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
    props: ['ruta'],
    components:{Navbar,Sidebar,Content,Footer}
}
</script>

