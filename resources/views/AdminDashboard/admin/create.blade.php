@extends('layouts.dashboard')
@section('content')
<div class="content-header row">
    <div class="content-header-left col-md-6 col-12 mb-2">
      <h3 class="content-header-title">الإداريين</h3>
      <div class="row breadcrumbs-top">
        <div class="breadcrumb-wrapper col-12">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="">الرئيسية</a>
            </li>
            <li class="breadcrumb-item"><a href="{{ route('admins.index') }}">الإداريين</a>
            </li>
            <li class="breadcrumb-item active">اضافة اداري
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
            <h4 class="card-title" id="basic-layout-colored-form-control">اضافة اداري</h4>
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
              <form class="form" method="post" action="{{ route('admins.store') }}">
                @csrf
                <div class="form-body">
                  <h4 class="form-section"><i class="la la-add"></i>إضافة مدير</h4>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="userinput1">الاسم</label>
                        <input type="text" required  id="userinput1" value="{{ old('name') }}" class="form-control border-primary" placeholder="الاسم"
                        name="name">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="userinput2">البريد الإلكتروني</label>
                        <input type="email" required id="userinput2" value="{{ old('email') }}" class="form-control border-primary" placeholder="البريد الإلكتروني"
                        name="email">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="userinput3">رقم الهاتف</label>
                        <input type="number" required id="userinput3" value="{{ old('phone') }}" class="form-control border-primary" placeholder="رقم الهاتف"
                        name="phone">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="userinput4">كلمة المرور</label>
                        <input type="password" required id="userinput4" class="form-control border-primary" placeholder="كلمة المرور"
                        name="password">
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