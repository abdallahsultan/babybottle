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
          
        <form  method="post" action="{{route('products.update',$row->id)}}" enctype="multipart/form-data">
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
                                <label>الفئه</label>
                                <div class="input-group input-icon right">
                                    <span class="input-group-addon">
                                        <strong> 
                                            <i class="fa fa-envelope "></i>
                                        </strong>
                                    </span>
                                  <select name="category_id" class="form-control" required>
                                      @foreach ($categories as $category)
                                  <option @if($category->id == $row->category_id) selected  @endif value="{{$category->id}}">{{$category->name}}</option>
                                      @endforeach
                                  </select>
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
                                <input name='file'  type="file"  class="input-error form-control"  type="text" >
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                                <label>لينك الفيديو</label>
                                <div class="input-group input-icon right">
                                    <span class="input-group-addon">
                                        <strong> 
                                            <i class="fa fa-envelope "></i>
                                        </strong>
                                    </span>
                                    <input name='video' value="{{$row->video}}"   class="input-error form-control"  type="text" >
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                    <label>الحجم </label>
                                    <div class="input-group input-icon right">
                                        <span class="input-group-addon">
                                            <strong> 
                                                <i class="fa fa-envelope "></i>
                                            </strong>
                                        </span>
                                        <input name='size' value="{{$row->size}}"   class="input-error form-control"  type="text" >
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                        <label>السعر </label>
                                        <div class="input-group input-icon right">
                                            <span class="input-group-addon">
                                                <strong> 
                                                    <i class="fa fa-envelope "></i>
                                                </strong>
                                            </span>
                                            <input name='price' value="{{$row->price}}"   class="input-error form-control"  type="text" >
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                            <label>النوع </label>
                                            <div class="input-group input-icon right">
                                                <span class="input-group-addon">
                                                    <strong> 
                                                        <i class="fa fa-envelope "></i>
                                                    </strong>
                                                </span>
                                                <input name='type' value="{{$row->type}}"  class="input-error form-control"  type="text" >
                                            </div>
                                        </div>
                                    <div class="form-group col-md-12">
                                            <label>الوصف </label>
                                            <div class="input-group input-icon right">
                                                
                                            <textarea name="description" class="form-control">{{$row->description}}</textarea>
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