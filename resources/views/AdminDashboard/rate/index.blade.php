@extends('layouts.dashboard')
@section('content')
<div class="content-header row">
  <div class="content-header-left col-md-6 col-12 mb-2">
    <h3 class="content-header-title">التقييمات</h3>
    <div class="row breadcrumbs-top">
      <div class="breadcrumb-wrapper col-12">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="">الرئيسية</a>
          </li>
          <li class="breadcrumb-item active">التقييمات
          </li>
          
        </ol>
      </div>
    </div>
  </div>

</div>
    <!-- Zero configuration table -->
    <section id="configuration">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">التقييمات</h4>
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
              <div class="card-body card-dashboard">
                @include('dashboard.partials.alerts.error')
                @include('dashboard.partials.alerts.success')

                <table class="table table-striped table-bordered zero-configuration">
                  <thead>
                    <tr>
                      <th>اسم </th>
                      <th>الصورة</th>
                      <th>الاجراءات</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                    @foreach ($rates as $rate)
                        
                   
                    <tr>
                      <td>{!! $rate->title !!}</td>
                      <td><img src="{{ asset('uploads/'.$rate->image) }}" width="100" height="70" alt=""></td>

                
                  
                      <td>
                        <a href="{{ route('rate.edit',$rate->id) }}" class="btn btn-icon btn-primary mr-1"> <i class="la la-edit"></i></a>
                        <form style="display: inline" action="{{ route('rate.destroy',$rate->id) }}" method="post">
                        @csrf @method('delete')
                        <button type="submit" class="btn btn-icon btn-danger mr-1 delete-confirm"><i class="la la-trash"></i></button>
                        </form>
                      </td>
                    </tr>
                    @endforeach
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--/ Zero configuration table -->
    <!-- Default ordering table -->
  
    <!--/ Language - Comma decimal place table -->

@endsection