<x-app-layout>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="{{asset('images/logo.png')}}" alt="شعار جماعة الرباط"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNavbar">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item"><a class="nav-link text-white" href="/">🏠 الصفحة الرئيسية</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="/demande">📝 تقديم طلب</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="/suivi">🔎 تتبع الطلب</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="/license">📄 الرخصة الإلكترونية</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="/admin">🛠 لوحة الإدارة</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
        @yield('content')
        <div class="collapse navbar-collapse" >
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item"><a class="nav-link text-white" href="/">🏠 الصفحة الرئيسية</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="/demande">📝 تقديم طلب</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="/suivi">🔎 تتبع الطلب</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="/license">📄 الرخصة الإلكترونية</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="/admin">🛠 لوحة الإدارة</a></li>
          </ul>
        </div>
    </div>
</x-app-layout>
