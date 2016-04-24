@extends('app')
@section('content')
  <table>
    <tr>
      <th>Code</th>
      <th>Long Name</th>
      <th>Short Name</th>
    </tr>
    @foreach($data as $key)
      <td>{{$key->code}}</td>
      <td>{{$key->name_short}}</td>
      <td>{{$key->name_long}}</td>
    @endforeach
  </table>
@endsection
