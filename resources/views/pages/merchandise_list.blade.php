@extends('layouts.app')
@section('content')


<div class="container mt-1">
    <table class="table border table-striped">
        <thead class="bg-primary">
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Quantity</th>
            <th scope="col">Price</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($merchandises as $merchandise)
                <tr>
                    <td>{{ $merchandise->name }}</td>
                    <td>{{ $merchandise->description }}</td>
                    <td>{{ $merchandise->quantity }}</td>
                    <td>{{ $merchandise->price }}</td>
                </tr>
            @endforeach
        </tbody>
      </table>

</div>




@endsection
