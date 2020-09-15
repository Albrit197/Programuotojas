@extends('layouts.app')
@section('content')
<div class="card-body">
    <table class="table">
        <tr>
            <th>Vardas</th>
            <th>Pavardė</th>
            <th>Tel Nr.</th>
            <th>Email</th>
            <th>Aprašymas</th>
            <th>Kompanija</th>

            <th>Veiksmai</th>
        </tr>
        @foreach ($customers as $customer)
        <tr>
            <td>{{ $customer->name }}</td>
            <td>{{ $customer->surname }}</td>
            <td>{{ $customer->phone }}</td>
            <td>{{ $customer->email }}</td>
            <td>{{ $customer->comment }}</td>
            <td>{{ $customer->company_id }}</td>
            <td>
                <form action={{ route('customers.destroy', $customer->id) }} method="POST">
                    <a class="btn btn-success" href={{ route('customers.edit', $customer->id) }}>Redaguoti</a>
                    @csrf @method('delete')
                    <input type="submit" class="btn btn-danger" value="Trinti"/>
                </form>
            </td>

        </tr>
        @endforeach
    </table>
    <div>
        <a href="{{ route('customers.create') }}" class="btn btn-success">Pridėti klientą</a>
    </div>
</div>
@endsection