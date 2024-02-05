<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title class="btn-success">CRM</title>
    <link rel="shortcut icon" href="/img/small.png"/>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="/backend/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/backend/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="/backend/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/backend/dist/css/AdminLTE.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.4.2.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect. -->
    <link rel="stylesheet" href="/backend/dist/css/skins/skin-blue.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>



    <![endif]-->
    <!-- JavaScript -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>

    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
<style>
    #example1_filter {text-align:end}
</style>

    <style>
        .content-wrapper {margin-bottom:40px;}
    </style>

    <style>
        #paginationNumbers_filter {text-align:end}
    </style>
    <style>
        .wrapper
        {
            overflow: auto;
        }
    </style>
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini" >
<div class="wrapper" style="background-color: #fff">


    <!-- Main Header -->
    <header class="main-header"  >


        <!-- Header Navbar: style can be found in header.less -->


        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" style="background-color: #fff" role="navigation">

            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button" style="background-color: white; color: black">
                <span class="sr-only">Toggle navigation</span>

            </a>
            <!-- Sidebar toggle button-->
            <a href="<?php echo e(route('anasayfa')); ?>"><img height="100px;" width="238px;" style="" src="/img/more-payroll-bordrolama-tesvik-danismanligi.png" alt=""></a>
            <!-- Navbar Right Menu -->




            <div class="navbar-custom-menu" style=" margin-top: 25px; background-color: #fff">

                <ul class="nav navbar-nav">

                    <li class="dropdown user user-menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!-- The user image in the navbar-->
                            <img src="/img/small.png" class=" img-circle" alt="User Image"  width="50px;">
                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                            <span class="hidden-xs"><?php echo e(Auth::user()->name); ?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- The user image in the menu -->
                            <li class="">
                                <img style="margin-left: 30px;" src="/img/more-payroll-bordrolama-tesvik-danismanligi.png"  width="225px;"  alt="User Image">

                                <p class="-align-centerS" align="center">


                                </p>
                            </li>


                            <!-- Menu Footer-->
                            <li class="user-footer">

                                <div class=""align="center" >
                                    <a href="<?php echo e(route('logout')); ?>" class="btn btn-default "style="">Çıkış Yap</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->

                </ul>

            </div>

        </nav>

    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel" style="margin-top: 25px;">
                <div class="pull-left image">
                    <img src="/img/small.png" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p><?php echo e(Auth::user()->name); ?></p>
                    <!-- Status -->

                </div>
            </div>

            <ul class="sidebar-menu" data-widget="tree" style="margin-top: 0px;">


                <li class=" treeview">
                    <a href="#">
                        <i class="fa fa-dashboard"></i> <span>Firmalar</span>
                    </a>

                    <ul class="treeview-menu">

                        <li><a href="<?php echo e(route('customer.index')); ?>"><i class="fa fa-circle-o"></i> Müşteri Ekle</a></li>
                        <?php if(Auth::user()->id==5 || Auth::user()->id==6 ||Auth::user()->id==1||Auth::user()->id==21 ||Auth::user()->id==4 ||Auth::user()->id==32 ): ?>
                        <li><a href="<?php echo e(route('email.index')); ?>"><i class="fa fa-circle-o"></i> Müşteri Sicil Kart</a></li>

                        <?php endif; ?>

                    </ul>
                </li>




                <li class=" treeview">
                    <a href="#">
                        <i class="fa fa-dashboard"></i> <span>Teklif Ekranı</span>
                    </a>

                <ul class="treeview-menu">

                <li><a href="<?php echo e(route('offer_create')); ?>"><i class="fa fa-users"> </i>Teklif Ver</a></li>
                <li><a href="<?php echo e(route('offer.index')); ?>"><i class="fa fa-users"> </i>Teklif Tablom</a></li>
                    <?php if(Auth::user()->id==5 || Auth::user()->id==6 ||Auth::user()->id==1||Auth::user()->id==21 ||Auth::user()->id==4 || Auth::user()->id==10 ): ?>
                    <li><a href="<?php echo e(route('offer.report')); ?>"><i class="fa fa-users"> </i>Rapor Bilgisi</a></li>
                    <?php endif; ?>

                    <?php if(Auth::user()->id==1 ||  Auth::user()->id==5): ?>

                            <li><a href="<?php echo e(route('notification.index')); ?>"><i class="fa fa-users"> </i>Teklif Bildirim </a></li>

                    <?php endif; ?>
                </ul>
                </li>

                <li class=" treeview">
                    <a href="#">
                        <i class="fa fa-dashboard"></i> <span>Muhasebe Finans</span>
                    </a>
                <ul class="treeview-menu">
                    <?php if(Auth::user()->id==5 || Auth::user()->id==6 ||Auth::user()->id==1 || Auth::user()->id==13 ): ?>
                    <li><a href="<?php echo e(route('office.index')); ?>"><i class="fa fa-users"> </i>Ofis Harcamaları</a></li>
                    <li><a href="<?php echo e(route('muhasebe.index')); ?>"><i class="fa fa-users"> </i>Masraflar</a></li>
                    <li><a href="<?php echo e(route('cos.report.index')); ?>"><i class="fa fa-users"> </i> Personel Masraf Raporu</a></li>
                    <?php endif; ?>
                <li><a href="<?php echo e(route('form',['id'=>Auth::user()->id])); ?>"><i class="fa fa-users"> </i>Masraf Formu</a></li>
                </ul>
                </li>
                    <?php if(Auth::user()->id==5 || Auth::user()->id==6 ||Auth::user()->id==1 ): ?>
                <li class=" treeview">
                    <a href="#">
                        <i class="fa fa-dashboard"></i> <span>Gelir/Gider</span>
                    </a>
                    <ul class="treeview-menu">

                            <li><a href="<?php echo e(route('file.index')); ?>"><i class="fa fa-users"> </i>excell</a></li>
                            <li><a href="<?php echo e(route('excel.show')); ?>"><i class="fa fa-users"> </i>Excell Tablo</a></li>
                            <li><a href="<?php echo e(route('excel.report.get')); ?>"><i class="fa fa-users"> </i>Faliyet Raporu</a></li>


                    </ul>
                </li>
                    <?php endif; ?>
                <li class=" treeview">
                    <a href="#">
                        <?php if(Auth::user()->id==1 || Auth::user()->id==5||Auth::user()->id==11 || Auth::user()->id==10): ?>
                        <i class="fa fa-dashboard"></i> <span>Satışcılar</span>
                            <?php endif; ?>
                    </a>
                    <ul class="treeview-menu">
                        <?php if(Auth::user()->id==1 || Auth::user()->id==5): ?>
                            <li><a href="<?php echo e(route('target.index')); ?>"><i class="fa fa-users"> </i>Satışcı Hedef Bidirimi </a></li>
                        <?php endif; ?>
                            <?php if(Auth::user()->id==11 || Auth::user()->id==10 || Auth::user()->id==1): ?>
                            <li><a href="<?php echo e(route('personel.show',['id'=>Auth::user()->id])); ?>"><i class="fa fa-users"> </i>Satışcı Ekranı </a></li>
                            <?php endif; ?>

                    </ul>
                </li>
                <?php if(Auth::user()->id==1): ?>
                    <a href="">
                        <li><a href="<?php echo e(route('users.index')); ?>"><i class="fa fa-users"> </i>Kullanıcılar </a></li>
                    </a>
                <?php endif; ?>
                <?php if(Auth::user()->power_status==1||Auth::user()->power_status==2): ?>
                <li class=" treeview">
                    <a href="#">
                        <i class="fa fa-dashboard"></i> <span>ikmetrik
                        </span>
                    </a>
                    <ul class="treeview-menu">
                            <li><a href=""><i class="fa fa-users"> </i> İkmetrik</a></li>


                    </ul>
                </li>


<?php endif; ?>



            </ul>

            <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <?php echo $__env->yieldContent('content'); ?>


    </div>

    <footer class="main-footer">

        <div class="pull-right hidden-xs">

        </div>
        <!-- Default to the left -->
        <div align="center">
            <strong>MorePayroll &copy; 2020 <a href="#">Company</a>.</strong> Telif Hakkı Saklıdır.</div>
    </footer>

    <!-- Control Sidebar -->

    <div class="control-sidebar-bg"></div>
</div>
<script src="/backend/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/backend/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="/backend/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="/backend/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- AdminLTE App -->
<link  href="https://code.jquery.com/jquery-3.5.1.js">
<script src="/backend/dist/js/adminlte.min.js"></script>
<script>
    $(function () {
        $('#example1').DataTable()
        $('#example2').DataTable({
            'paging'      : true,
            'lengthChange': true,
            'searching'   : true,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : true
        })
    })

</script>
<script src = "/backend/bower_components/bootstrap/js/SweetAlert.min.js"></script >
<script>

        $('.fa-trash').click(function () {
            var id = $(this).data('id');
            console.log(id);
            swal({
                title: "Eminmisiniz?",
                text: "Silme İşlemi İçin Onaylayın!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
                .then((willDelete) => {
                    if (willDelete) {
                        $("#musterifrm"+id).submit();
                        $("#teklif_frm"+id).submit();
                        swal("Silme İşlemi Başarılı", {
                            icon: "success",
                        });
                    } else {
                        swal("Silme İşlemi İptal Edildi");
                    }
                });



        });

</script>
<script>

</script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#sec').click(function(event) {  //on click
                if(this.checked) { // check select status
                    $(":checkbox").attr("checked", true);
                }else{
                    $(":checkbox").attr("checked", false);
                }
            });

        });

</script>
<script src="/js/select2.min.js"></script>
<?php echo $__env->yieldContent('js'); ?>

</body>
</html>
<?php /**PATH /home/morepayroll/public_html/arge/resources/views/backend/layout.blade.php ENDPATH**/ ?>