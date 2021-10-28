@extends('layouts.dashboard')
@section('content')
<div class="content-header row">
    <div class="content-header-left col-md-6 col-12 mb-2">
      <h3 class="content-header-title">التصنيفات</h3>
      <div class="row breadcrumbs-top">
        <div class="breadcrumb-wrapper col-12">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="">الرئيسية</a>
            </li>
            <li class="breadcrumb-item"><a href="{{ route('categories.index') }}">التصنيفات</a>
            </li>
            <li class="breadcrumb-item active">اضافة تصنيف
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
            <h4 class="card-title" id="basic-layout-colored-form-control">اضافة تصنيف</h4>
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

              <form class="form" method="post" action="{{ route('categories.store') }}">
                @csrf
                <div class="form-body">
                  <h4 class="form-section"><i class="la la-add"></i>إضافة تصنيف</h4>
                  @foreach (config('translatable.locales') as $locale)

                            <div class="form-group">
                              <div class="col-md-6">
                                <label>@lang('site.' . $locale . '.name')</label>
                                <input type="text" name="{{ $locale }}[title]" class="form-control" value="{{ old($locale . '.title') }}">
                            </div>
                          </div>
                        @endforeach
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