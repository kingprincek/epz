<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

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

        .ans {
            margin-left: 36px !important
        }

        .btn:focus {
            outline: 0 !important;
            box-shadow: none !important
        }

        .btn:active {
            outline: 0 !important;
            box-shadow: none !important
        }

        .card {
            width: 380px;
            border: none
        }

        .border {
            border-radius: 12px
        }

        .score {
            background-color: #B9F6CA
        }

        .heading1 {
            color: #0D47A1
        }

        .text {
            color: #0D47A1
        }

        .speed {
            background-color: #FFE082
        }
        .cpass {
            background-color: rgba(234, 134, 122, 0.79)
        }
        .dpass {
            background-color: #c41818
        }
        .epass {
            background-color: #131301
        }
        .fpass {
            background-color: #474947
        }

        .char {
            font-size: 30px;
            font-weight: 700
        }
    </style>
    @livewireStyles
</head>
<body >

@livewire('quiz')

@livewireScripts

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
</body>
</html>
