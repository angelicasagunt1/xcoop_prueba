<!DOCTYPE html>
<html lang="es">
<head>
    <title>Backend - @yield('title')</title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <!--         <meta name="author" content="Educar"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<style>
    th {
        vertical-align: middle !important;
    }
</style>
<body>
<h1>Listado de Emails de acuerdo a Codigo de Ticket </h1>
<p>La vigencia de los cupones es de 3 meses</p>
<table class="table table-bordered table-striped table-condensed">
    <thead>
    <tr>
        <th>Codigo de Ticket</th>
        <th>Email</th>
        <th>Status</th>
    </tr>
    </thead>
    <tbody>
    @forelse($ticketModel as $item)
        <tr>
            <td>{{ $item->ticket }}</td>
            <td>{{ $item->email['email'] }}</td>
            <td>{{(Carbon\Carbon::parse($item->expiration_date)->diffInDays() > 90) ? "Expirado" : "Vigente" }}</td>
        </tr>
    @empty
        <tr>
            <td colspan="100%" style="text-align: center;">
                No se han encontrado emails relacionados al codigo ingresado, intenta con otros codigos :(
            </td>
        </tr>
    @endforelse
    </tbody>

</table>

<h3> Puedes intentar enviar por parametro los siguientes codigos </h3>

<table class="table table-bordered table-striped table-condensed">
    <thead>
    <tr>
        <th>ID</th>
        <th>Codigo</th>
    </tr>
    </thead>
    <tbody>
    @foreach($listModel as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->ticket }}</td>
        <tr>
    @endforeach
    </tbody>

</table>
</body>
</html>
