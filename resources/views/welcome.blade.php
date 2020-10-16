<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Datatable</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.1/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/g/mark.js(jquery.mark.min.js),datatables.mark.js">
    <link rel="stylesheet" href="https://cdn.datatables.net/plug-ins/1.10.13/features/mark.js/datatables.mark.min.css">
</head>
<body>

    <div class="display-3 text-center">Hello i am DataTable!</div>

<div class="container">
    <table id="users-table" class="display table" style="width:100%">
        <thead>
            <tr>
                <th>name</th>
                <th>email</th>
                <th>country</th>

            </tr>
        </thead>
        
    </table>
</div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.1/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.jsdelivr.net/g/mark.js(jquery.mark.min.js),datatables.mark.js"></script>

    <script>
    $('#users-table').DataTable({
        responsive: true,
        processing: true,
        serverSide: true,
        mark: true,
		pageLength: 15,
        ajax: '{{ route('server.fetch') }}',
        columns: [

            { data: 'name', name: 'name' },
            { data: 'email', name: 'email' },
            { data: 'country', name: 'country' },
        ]

        
    });


    </script>
</body>
</html>