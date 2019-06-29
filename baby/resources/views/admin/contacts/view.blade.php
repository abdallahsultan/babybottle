@extends('admin.layouts.main')
@section('content')
<div class="col-md-12">
    <!-- BEGIN PORTLET-->
    <div class="portlet light bordered">
        <div class="portlet-title">
            <div class="caption">
                <i class="icon-plus font-dark"></i>
                <span class="caption-subject font-dark bold uppercase">@if(isset($title)) {{$title}} @endif</span>
          
            </div>
           
           
        </div>
        <div class="portlet-body">
                <table class="table table-hover table-light">
                        <thead>
                            <tr>
                                <th> # </th>
                                <th> الايميل </th>
                                <th> الرساله </th>
                                <th> التاريخ </th>
                                <th> حذف  </th>
                             
                            </tr>
                        </thead>
                        <tbody>
                           @foreach ($rows as $row)
                           <tr>
                                <td>{{ $row->id }}</td>
                                <td>{{ $row->message }}</td>
                             
                           <td>{{$row->created_at}}</td>
                               
                                <td>
                                        <a class="label label-sm label-danger" href="{{ route('contact.delete',$row->id) }}">  حذف </a>
                                </td>
                            </tr>
                           @endforeach
                          
                        </tbody>
                    </table>
        </div>
    </div>
</div>
@endsection