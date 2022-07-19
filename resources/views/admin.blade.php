@extends("app")

@section("content")
@if ($errors->any())
      <div class="alert alert-danger my-3">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
@endif
        <example-component></example-component>

@endsection