@extends('guest.front-master')

@section('title')
Front Page
@stop

@section('header')
<link rel="stylesheet" type="text/css" href="{{url('assets/css/simple-line-icons.cs')}}s">
<link rel="stylesheet" type="text/css" href="{{url('assets/css/ionicons.css')}}">

    <!-- Data Table Css -->
    <link rel="stylesheet" type="text/css" href="{{url('assets/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/pages/data-table/css/buttons.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}">
@endsection

@section('content')

@if (session('register') == "success")
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        <span class="sr-only">Close</span>
    </button>
    <strong>Success</strong> Silakan cek email student anda untuk aktivasi Akun.
</div>
@endif
<!-- Page-header start -->
{{--<div class="page-header card">
    <div class="row align-items-end">
        <div class="col-lg-10">
            <div class="">
                <h2 class="">Selamat Datang di Sistem Management PKM UNY</h2>
            </div>
        </div>
    </div>
</div>--}}
<!-- Page-header end -->

<div class="page-body">
    <div class="row">
        <div class="col-sm-12 card">
            <table id="cobaDulu" class="table table-responsive-sm">
                <thead>
                    <tr>
                    <th>Nama Prodi</th>
                    <th>Jenjang</th>
                    <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('footer')

    <!-- data-table js -->
    <script src="{{url('assets/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{url('assets/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{url('assets/pages/data-table/js/jszip.min.js')}}"></script>
    <script src="{{url('assets/pages/data-table/js/pdfmake.min.js')}}"></script>
    <script src="{{url('assets/pages/data-table/js/vfs_fonts.js')}}"></script>
    <script src="{{url('assets/bower_components/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{url('assets/bower_components/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{url('assets/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{url('assets/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{url('assets/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>

    {{--<script>
        $('document').ready(function () {
            setInterval(function () {getRealData()}, 1000);//request every x seconds
        });
    </script>
    <script>
    function getRealData() {
        $.ajax({
            url : '{{url("/all-prodi")}}',
            dataType: 'json',
            success: function(result){
                $('#cobaDulu tbody').empty();
                for( var d in result){
                    var data = result[d];
                    $('#cobaDulu tbody').append($('<tr>')
                    .append($('<td>', {text: data.nama_prodi}))
                    .append($('<td>', {text: data.jenjang_prodi}))
                    )
                }
            }
        });
    }
    </script>--}}
    <script>
$(document).ready(function(){
var table =  $('#cobaDulu').DataTable({
      'serverMethod': 'get',
        //"paging":   false,
       // "ordering": false,
       // "info":     false,
       //"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
      'ajax': {
          'url':'{{url("/all-prodi")}}',
          'dataSrc': ''
      },
      'columns': [
         { data: 'nama_prodi' },
         { data: 'jenjang_prodi' },
         { data: null,
            render: function ( data, type, full,row) {
                if(data.jenjang_prodi == "S1"){
                    return '<button data-oke="'+data.nama_prodi+'" class="okeTombol btn btn-success">oke</button>';
                } else{
                    return "<label class='label label-danger'>dll</label>";
                }
            }
        },
      ]
   });

setInterval(function() {
table.ajax.reload();
}, 1000 );

$('#cobaDulu tbody').on( 'click', 'button', function () {
        var data = $(this).data('oke');
        alert( data +"'s salary is: ");
    } );

});



</script>

@endsection
