@extends('admin.layouts.main')
@section('content')
<div class="col-md-12">
    <!-- BEGIN PORTLET-->
    <div class="portlet light bordered">
        <div class="portlet-title">
            <div class="caption">
                <i class="icon-plus font-dark"></i>
                <span class="caption-subject font-dark bold uppercase">@if(isset($title)) {{$title}} @endif</span>
           <a class="btn btn-success" href="{{ route('gallery.add') }}">اضف جديد</a>
            </div>
           
           
        </div>
        <div class="portlet-body">
                <table class="table table-hover table-light">
                        <thead>
                            <tr>
                                <th> # </th>
                                <th> الصوره </th>
                                <th> تاريخ الاضافه </th>
                                <th> حذف  </th>
                             
                            </tr>
                        </thead>
                        <tbody>
                           @foreach ($rows as $row)
                           <tr>
                                <td>{{ $row->id }}</td>
                                <td><img width="100px" src="{{ url('storage/app/'.$row->image) }}"></td>
                           <td>{{$row->created_at}}</td>
                                <td>
                                        <a class="label label-sm label-danger" href="{{ route('gallery.delete',$row->id) }}">  حذف </a>
                                </td>
                            </tr>
                           @endforeach
                          
                        </tbody>
                    </table>
        </div>
    </div>
</div>
@endsection