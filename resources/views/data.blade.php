<html>
<head>

    <title>
        App
    </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />

    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">

    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>

    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
</head>
    <body>
    <div class="col-lg-8 mx-auto p-5">
    <table class="table shadow table-hover table-bordered table-striped table-sm " id="example">
        <thead>
        <th>id</th>
        <th>name</th>
        <th>email</th>


        </thead>
        <tbody>
        @foreach($data['data'] as $item)
        <tr>
            <td class="align-middle">{{$item['id']}}</td>
            <td class="align-middle"><span>
                    <img src="{{$item['avatar']}}" alt="picture" height="60" width="60" class="rounded-circle">
                </span>{{$item['first_name']}} {{$item['last_name']}}</td>
            <td class="align-middle">{{$item['email']}}</td>

        </tr>
        @endforeach






        </tbody>
    </table>
    </div>
    <script type="text/javascript">

        {{--$(function () {--}}



        {{--    var table = $('#example').DataTable({--}}

        {{--        processing: true,--}}

        {{--        serverSide: true,--}}

        {{--        ajax: "{{ route('api_call') }}",--}}
        {{--            'name', name: 'name'},--}}

        {{--        {data: 'email', name: 'email'},--}}

        {{--        {data: 'action', name: 'action', orderable: false, searchable: false},--}}

        {{--]--}}

        {{--});--}}



        {{--});--}}
        $(document).ready( function () {
            $('#example').DataTable();
        } );
    </script>
{{--                columns: [--}}

{{--                    {data: 'id', name: 'id'},--}}

{{--                    {data:--}}
</body>
</html>
