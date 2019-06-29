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
          
        <form  method="post" action="{{route('about.save')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-body">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>العنوان</label>
                            <div class="input-group input-icon right">
                                <span class="input-group-addon">
                                    <strong> 
                                        <i class="fa fa-envelope "></i>
                                    </strong>
                                </span>
                            <input name='title' @isset($row) value="{{$row->title}}" @endisset class="input-error form-control"  type="text" >
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <label>الوصف</label>
                            <div class="input-group input-icon right">
                                <span class="input-group-addon">
                                    <strong> 
                                        <i class="fa fa-envelope "></i>
                                    </strong>
                                </span>
                            <textarea name="description" class="form-control" required>@isset($row) {{ $row->description}} @endisset</textarea>   
                            </div>
                        </div>
                       
                       

                    </div>
                        <div class="row">
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
                                    
                     @isset($row)
                       <img width="100px" src="{{ url('storage/app/'.$row->image) }}">
                       @endisset 
                        </div>
                         <div class="row">
                        <div class="form-group col-md-6">
                            <label>التوقيع</label>
                            <div class="input-group input-icon right">
                                <span class="input-group-addon">
                                    <strong> 
                                        <i class="fa fa-envelope "></i>
                                    </strong>
                                </span>
                                <input name='signature' type="file"  class="input-error form-control"  type="text" >
                            </div>
                        </div>
                        @isset($row)
                        <img width="100px" src="{{ url('storage/app/'.$row->signature) }}">
                        @endisset 
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