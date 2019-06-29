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
          
        <form  method="post" action="{{route('stuff.update',$row->id)}}" enctype="multipart/form-data">
            @csrf
            <div class="form-body">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>الاسم</label>
                            <div class="input-group input-icon right">
                                <span class="input-group-addon">
                                    <strong> 
                                        <i class="fa fa-envelope "></i>
                                    </strong>
                                </span>
                            <input name='name' value="{{$row->name}}" required  class="input-error form-control"  type="text" >
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label>الوظيفه</label>
                            <div class="input-group input-icon right">
                                <span class="input-group-addon">
                                    <strong> 
                                        <i class="fa fa-envelope "></i>
                                    </strong>
                                </span>
                                <input name='job' value="{{$row->job}}" required  class="input-error form-control"  type="text" >
                            </div>
                        </div>
                
                        <img width="100px" src="{{ url('storage/app/'.$row->image) }}">
                        <div class="form-group col-md-6">
                            <label>الصوره</label>
                            <div class="input-group input-icon right">
                                <span class="input-group-addon">
                                    <strong> 
                                        <i class="fa fa-envelope "></i>
                                    </strong>
                                </span>
                                <input name='image' type="file"  class="input-error form-control"  type="text" >
                            </div>
                        </div>
                        
                                 
                     </div>
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