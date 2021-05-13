<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/tables/datatable/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tables/datatable/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tables/datatable/buttons.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/tables/datatable/rowGroup.bootstrap4.min.css') }}">

    <style>
        body {
            background-color: #eee
        }

        label.radio {
            cursor: pointer
        }

        label.radio input {
            position: absolute;
            top: 0;
            left: 0;
            visibility: hidden;
            pointer-events: none
        }

        label.radio span {
            padding: 4px 4px 4px 4px;
            border: 1px solid red;
            display: inline-block;
            color: red;
            width: auto;
            text-align: center;
            border-radius: 3px;
            margin-top: 7px;
            text-transform: uppercase
        }

        label.radio input:checked+span {
            border-color: red;
            background-color: red;
            color: #fff
        }


    </style>

</head>
<body >
<div class="container mt-5">
    <div class="d-flex justify-content-center row">
        <div class="col-md-12 col-lg-12">
            <div class="border">
                <div class="question bg-white p-3 border-bottom">
                    <div class="d-flex flex-row justify-content-between align-items-center mcq">
                        <h4>All  Quiz Results  </h4><span></span>
                    </div>
                </div>

                <div class=" bg-white p-3 border-bottom">

                    <table id="example1" class="table table-bordered table-striped table-sm dataTable" style="width: 100%">
                        <thead>
                        <tr>
                            <th>User</th>
                            <th>Email</th>
                            <th>Date</th>
                            <th>Score</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($marks as  $mark)
                            <tr>
                                <td>{{$mark->user->name}}</td>
                                <td>{{$mark->user->email}}</td>
                                <td>{{\Carbon\Carbon::parse( $mark->created_at)->diffForHumans()}}</td>
                                <td>{{$mark->mark*2}}%</td>
                                <td>{{$mark->status}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>

            </div>
            <br><br><br><br>
        </div>
    </div>
</div>


<script src="{{ asset('js/jquery-3.5.1.js') }}"></script>
<script src="{{ asset('js/tables/datatable/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/tables/datatable/datatables.bootstrap4.min.js')}}"></script>
<script src="{{ asset('js/tables/datatable/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('js/tables/datatable/responsive.bootstrap4.js')}}"></script>
<script src="{{ asset('js/tables/datatable/datatables.checkboxes.min.js')}}"></script>
<script src="{{ asset('js/tables/datatable/datatables.buttons.min.js') }}"></script>
<script src="{{ asset('js/tables/datatable/jszip.min.js') }}"></script>
<script src="{{ asset('js/tables/datatable/pdfmake.min.js') }}"></script>
<script src="{{ asset('js/tables/datatable/vfs_fonts.js') }}"></script>
<script src="{{ asset('js/tables/datatable/buttons.html5.min.js') }}"></script>
<script src="{{ asset('js/tables/datatable/buttons.print.min.js') }}"></script>
<script src="{{ asset('js/tables/datatable/dataTables.rowGroup.min.js') }}"></script>



<script>
    $(document).ready(function() {
        $.noConflict();
        $('#example1').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
            ]
        } );

    } );
</script>

</body>
</html>
