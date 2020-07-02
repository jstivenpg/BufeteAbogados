@extends('layouts.layout')
@section('content')
<div class="row">
      <section class="content">
        <div class="col-md-8 col-md-offset-2">
          <div class="panel panel-default">
            <div class="panel-body">
              <div class="pull-left"><h3>Lawyers List</h3></div>
              <div class="pull-right">
                <div class="btn-group">
                  <a href="{{ route('lawyer.create') }}" class="btn btn-info" >Add Lawyer</a>
                </div>
              </div>
              <div class="table-container">
                <table id="mytable" class="table table-bordred table-striped">
                <thead>
                  <th>id</th>
                  <th>names</th>
                  <th>lastnames</th>
                  <th>document_type_id</th>
                  <th>document_number</th>
                  <th>start_date</th>
                  <th>deleted_at</th>
                  <th>created_at</th>
                  <th>update_at</th>
                </thead>
                <tbody>
                  @if($lawyer->count())  
                  @foreach($lawyer as $lawyers)  
                  <tr>
                    <td>{{$lawyers->id}}</td>
                    <td>{{$lawyers->names}}</td>
                    <td>{{$lawyers->lastname}}</td>
                    <td>{{$lawyers->document_type_id}}</td>
                    <td>{{$lawyers->document_number}}</td>
                    <td>{{$lawyer->start_date}}</td>
                    <td>{{$lawyers->deleted_at}}</td>
                    <td>{{$lawyers->created_at}}</td>
                    <td>{{$lawyers->updated_at}}</td>
                    <td><a class="btn btn-primary btn-xs" href="{{action('LawyerController@edit', $lawyer->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                    <td>
                      <form action="{{action('LawyerController@destroy', $lawyer->id)}}" method="post">
                      {{csrf_field()}}
                      <input name="_method" type="hidden" value="DELETE">
    
                      <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
                    </td>
                  </tr>
                  @endforeach 
                  @else
                  <tr>
                    <td colspan="8">No hay registro !!</td>
                  </tr>
                  @endif
                </tbody>
    
              </table>
            </div>
          </div>
          {{$lawyer->links() }}
        </div>
      </div>
      <section class="content">
        <div class="col-md-8 col-md-offset-2">
          <div class="panel panel-default">
            <div class="panel-body">
              <div class="pull-left"><h3>Clients List</h3></div>
              <div class="pull-right">
                <div class="btn-group">
                  <a href="{{ route('lawyer.create') }}" class="btn btn-info" >Add Client</a>
                </div>
              </div>
              <div class="table-container">
                <table id="mytable" class="table table-bordred table-striped">
                <thead>
                  <th>id</th>
                  <th>names</th>
                  <th>lastnames</th>
                  <th>document_type_id</th>
                  <th>document_number</th>
                  <th>deleted_at</th>
                  <th>created_at</th>
                  <th>update_at</th>
                </thead>
                <tbody>
                  @if($client->count())  
                  @foreach($client as $clients)  
                  <tr>
                    <td>{{$clients->id}}</td>
                    <td>{{$clients->names}}</td>
                    <td>{{$clients->lastname}}</td>
                    <td>{{$clients->document_type_id}}</td>
                    <td>{{$clients->document_number}}</td>
                    <td>{{$clients->deleted_at}}</td>
                    <td>{{$clients->created_at}}</td>
                    <td>{{$clients->updated_at}}</td>
                    <td><a class="btn btn-primary btn-xs" href="{{action('ClientController@edit', $client->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                    <td>
                      <form action="{{action('ClientController@destroy', $client->id)}}" method="post">
                      {{csrf_field()}}
                      <input name="_method" type="hidden" value="DELETE">
    
                      <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
                    </td>
                  </tr>
                  @endforeach 
                  @else
                  <tr>
                    <td colspan="8">No hay registro !!</td>
                  </tr>
                  @endif
                </tbody>
    
              </table>
            </div>
          </div>
          {{$client->links() }}
        </div>
      </div>
</section>

 
@endsection