@extends('app')

@section('title')
  Airport
@endsection

@section('content')
  <section class="main-content">
    <div class="content-wrap">
      <div class="wrapper">
        <div class="row">
          <div class="col-md-12">
            <section class="panel no-b">
              <header class="panel-heading no-b"> <h2><b>Airport</b></h2> </header>
              <div class="panel-body">
                <div class="table-responsive">
                  <table class="table table-striped table-bordered responsive no-m" data-sortable="" data-sortable-initialized="true">
                    <thead>
                      <tr>
                        <th style="width: 30px;">No</th>
                        <th>Airport Name</th>
                        <th>Location</th>
                        <th>Country</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($data as $key => $row)
                        <tr>
                          <td>{{$key+1}}</td>
                          <td>{{$row->airport_name}} ({{$row->airport_code}})</td>
                          <td>{{$row->location_name}}</td>
                          <td>{{$row->country->country_name}}</td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>
    </div>
    <a class="exit-offscreen"></a>
  </section>
@endsection
