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
          
        <form  method="post" action="{{route('statistics.save')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-body">
                @foreach ($rows as $row)
                    <div class="row">
                        <div class="form-group col-md-6">
                                <label>{{$row->key}}</label>
                                <div class="input-group input-icon right">
                                    <span class="input-group-addon">
                                        <strong> 
                                            <i class="fa fa-envelope "></i>
                                        </strong>
                                    </span>
                                <input name='{{$row->key}}' value="{{$row->value}}"  class="input-error form-control"  type="text" >
                                </div>
                        </div>
                    </div>
                     @endforeach
                </div>
                <div class="form-actions">
                    <div class="row">
                        <button type="submit" class="btn btn-success">حفظ</button>
                    </div>
                </div>
              </form>
        </div>
    </div>
</div>
@endsection