@extends('layouts.dashboard')
@section('content')
<div class="content-header row">
    <div class="content-header-left col-md-6 col-12 mb-2">
      <h3 class="content-header-title">السلاديرات</h3>
      <div class="row breadcrumbs-top">
        <div class="breadcrumb-wrapper col-12">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="">الرئيسية</a>
            </li>
            <li class="breadcrumb-item"><a href="{{ route('sliders.index') }}">السلاديرات</a>
            </li>
            <li class="breadcrumb-item active">اضافة سلايدر
            </li>
            
          </ol>
        </div>
      </div>
    </div>
  
  </div>
<section id="basic-form-layouts">
    <div class="row match-height">
     
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title" id="basic-layout-colored-form-control">اضافة سلايدر</h4>
            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
            <div class="heading-elements">
              <ul class="list-inline mb-0">
                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                <li><a data-action="close"><i class="ft-x"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="card-content collapse show">
            <div class="card-body">
              @include('dashboard.partials.alerts.error')
              @include('dashboard.partials.alerts.success')

              <form class="form" method="post" action="{{ route('sliders.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-body">
                  <h4 class="form-section"><i class="la la-add"></i>إضافة سلايدر</h4>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-md-6">
                        <label>Image* </label>
                        <input type="file" name="image" class="form-control image" data-preview="image" value="{{ old('image') }}" id="">
                      </div>
                      <div class="form-group">
                        <img src=""  style="width: 100px" class="img-thumbnail image-preview" alt="">
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-md-6">
                      <label>title ar * </label>
                      <textarea name="title_ar" class="ckeditor" cols="30" rows="10">{{ old('title_ar') }}</textarea>
                  </div>
                  <div class="col-md-6">
                    <label>title en * </label>
                    <textarea name="title_en" class="ckeditor" cols="30" rows="10">{{ old('title_en') }}</textarea>
                </div>
              </div>
                </div>
                <div class="form-group">
                  <div class="row">
                  <div class="col-md-6">
                    <label>text for button ar   </label>
                    <input type="text" name="btn_ar" class="form-control" value="{{ old('btn_ar') }}" id="">
                </div>
                <div class="col-md-6">
                  <label>text for button en  </label>
                  <input type="text" name="btn_en" class="form-control" value="{{ old('btn_en') }}" id="">
                </div>
                <div class="col-md-6">
                  <label>url </label>
                  <input type="text" name="url" class="form-control" value="{{ old('url') }}" id="">
                </div>
            </div>
              </div>
                  <div class="form-actions left">
                    
                    <button type="submit" class="btn btn-primary">
                      <i class="la la-check-square-o"></i> Save
                    </button>
                  </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
 
  </section>
    
@endsection