@extends('layouts.dashboard')
@section('content')
    <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
            <h3 class="content-header-title">البيانات العامة</h3>
            <div class="row breadcrumbs-top">
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">الرئيسية</a>
                        </li>
                        <li class="breadcrumb-item active">البيانات العامة
                        </li>

                    </ol>
                </div>
            </div>
        </div>

    </div>
    <section id="basic-tabs-components">
        <div class="row match-height">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">البيانات العامة</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <ul class="nav nav-tabs">
                                @foreach (config('translatable.locales') as $key=> $lang)
                                    
                              
                                <li class="nav-item">
                                    <a class="nav-link  @if($key == 0) active @endif" id="base-tab1" data-toggle="tab" aria-controls="tab1"
                                        href="#{{ $lang }}" aria-expanded="true">{{ $lang }}</a>
                                </li>
                                @endforeach
                                <li class="nav-item">
                                    <a class="nav-link" id="base-tab3" data-toggle="tab" aria-controls="tab3"
                                        href="#general" aria-expanded="false">الشعارات</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="base-tab3" data-toggle="tab" aria-controls="tab4"
                                        href="#contact" aria-expanded="false">التواصل</a>
                                </li>
                               
                            </ul>
                            @include('dashboard.partials.alerts.error')
                            @include('dashboard.partials.alerts.success')
              
                            <form class="form" method="post" action="{{ route('general.store') }}" enctype="multipart/form-data">
                                @csrf
                            <div class="tab-content px-1 pt-1">
                                @foreach (config('translatable.locales') as $key=> $lang)

                                <div role="tabpanel" class="tab-pane  @if($key == 0) active @endif " id="{{ $lang }}" aria-expanded="true"
                                    aria-labelledby="base-tab1">
                                    <div class="form-group">
                                        <div class="col-md-9">
                                          <label>title - {{ $lang }}</label>
                                          <input type="text" name="{{ $lang }}[title]" class="form-control"  value="{{ $general->translate($lang)->title }}">
                                      </div>
                                    </div>
                                    <div class="form-group ">
                                        <label>description - {{ $lang }}</label>
                                        <div class="col-sm-9">
                                            <div class="position-relative has-icon-left">
                                                <textarea class="ckeditor" name="{{ $lang }}[decription]">{{ $general->translate($lang)->decription }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>

                                @endforeach
                                <div class="tab-pane" id="general" aria-labelledby="base-tab3">
                                    <div class="row">
                                        <div class="col-md-5">
                                          <label>header logo</label>
                                          <input type="file" name="header_logo" class="form-control image header_logo" >
                                        </div>
                                      <div class="col-md-2">
                                        <img   style="width: 100px" src="{{ asset('uploads/'.$general->header_logo) }}" class="img-thumbnail image-preview" data-preview="header_logo" alt="">
                                    </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                          <label>footer logo</label>
                                          <input type="file" name="footer_logo" class="form-control image footer_logo" >
                                        </div>
                                      <div class="col-md-2">
                                        <img   style="width: 100px" src="{{ asset('uploads/'.$general->footer_logo) }}" class="img-thumbnail image-preview" data-preview="footer_logo" alt="">

                                    </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                          <label>Icon</label>
                                          <input type="file" name="icon" class="form-control image icon" >
                                        </div>
                                      <div class="col-md-2">
                                        <img   style="width: 100px" src="{{ asset('uploads/'.$general->icon) }}" class="img-thumbnail image-preview" data-preview="icon" alt="">
                                    </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="contact" aria-labelledby="base-tab3">
                                    <div class="row">
                                        <div class="col-md-6">
                                          <label>email</label>
                                          <input type="email" name="email" value="{{ $general->email }}"  class="form-control " >
                                        </div>
                                   
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                          <label>phone</label>
                                          <input type="number" name="phone" value="{{ $general->phone }}" class="form-control " >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                          <label>whatsapp</label>
                                          <input type="text" name="whatsapp" value="{{ $general->whatsapp }}" class="form-control " >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                          <label>facebook</label>
                                          <input type="text" name="facebook" value="{{ $general->facebook }}" class="form-control " >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                          <label>twitter</label>
                                          <input type="text" name="twitter" value="{{ $general->twitter }}" class="form-control " >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                          <label>tiktok</label>
                                          <input type="text" name="tiktok" value="{{ $general->tiktok }}" class="form-control " >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                          <label>snapchat</label>
                                          <input type="text" name="snapchat" value="{{ $general->snapchat }}" class="form-control " >
                                        </div>
                                    </div>
                                    
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
