<div class="main-menu menu-static menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
      <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        <li class=" nav-item"><a href="index.html"><i class="la la-users"></i><span class="menu-title" data-i18n="nav.dash.main">الإداريين</span></a>
          <ul class="menu-content">
            <li ><a class="menu-item" href="{{ route('admins.index') }}" data-i18n="nav.dash.ecommerce">جميع الاإداريين</a>
            </li>
            <li><a class="menu-item" href="{{ route('admins.create') }}" data-i18n="nav.dash.crypto">اضف اداري</a>
            </li>
            
          </ul>
        </li>
        <li class=" nav-item"><a href="#"><i class="la la-user-secret"></i><span class="menu-title" data-i18n="nav.templates.main">الاستشاريين</span></a>
          <ul class="menu-content">
            <li ><a class="menu-item" href="{{ route('lawyers.index') }}" data-i18n="nav.dash.ecommerce">جميع الاستشاريين</a>
            </li>
            <li><a class="menu-item" href="{{ route('lawyers.create') }}" data-i18n="nav.dash.crypto">اضف استشاري</a>
            </li>
      
          </ul>
        </li>
      
        <li class=" nav-item"><a href="#"><i class="la la-flag"></i><span class="menu-title" data-i18n="nav.page_layouts.main">الخدمات</span></a>
          <ul class="menu-content">
            <li><a class="menu-item" href="{{ route('services.index') }}" data-i18n="nav.page_layouts.1_column">جميع الخدمات</a>
            </li>
            <li><a class="menu-item" href="{{ route('services.create') }}" data-i18n="nav.page_layouts.2_columns">أضف خدمة</a>
            </li>
           
          </ul>
        </li>
        <li class=" nav-item"><a href="#"><i class="la la-columns"></i><span class="menu-title" data-i18n="nav.page_layouts.main">التصنيفات</span></a>
          <ul class="menu-content">
            <li><a class="menu-item" href="{{ route('categories.index') }}" data-i18n="nav.page_layouts.1_column">جميع التصنيفات</a>
            </li>
            <li><a class="menu-item" href="{{ route('categories.create') }}" data-i18n="nav.page_layouts.2_columns">أضف تصنيف</a>
            </li>
           
          </ul>
        </li>
      
     
      </ul>
    </div>
  </div>