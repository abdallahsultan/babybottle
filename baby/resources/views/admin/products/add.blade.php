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
          
        <form  method="post" action="{{route('products.save')}}" enctype="multipart/form-data">
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
                                <input name='name' required  class="input-error form-control"  type="text" >
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
                              <option value="{{$category->id}}">{{$category->name}}</option>
                                  @endforeach
                              </select>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label>الصوره</label>
                            <div class="input-group input-icon right">
                                <span class="input-group-addon">
                                    <strong> 
                                        <i class="fa fa-envelope "></i>
                                    </strong>
                                </span>
                                <input name='file' type="file" required class="input-error form-control"  type="text" >
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
                                    <input name='video'   class="input-error form-control"  type="text" >
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
                                        <input name='size'   class="input-error form-control"  type="text" >
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
                                            <input name='price'   class="input-error form-control"  type="text" >
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
                                            <input name='type'   class="input-error form-control"  type="text" >
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                            <label>الوصف </label>
                                            <div class="input-group input-icon right">
                                                
                                               <textarea name="description" class="form-control"></textarea>
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