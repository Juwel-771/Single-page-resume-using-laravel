<div class="border-right border-info h-100">
    <div class="text-center">
        <img src="{{ asset('imges/pro.jpg') }}" alt="Profile" class="img-fluid rounded mt-5">
        <h3 class="text-white mt-3 border border-info borde p-2 st-font">Md Juwel</h3>
    </div>
    <nav class="nav flex-column text-center mt-3">
        <a href="{{ route('home') }}" class="nav-link {{ Request::routeIs('home') ? 'active' : ' ' }}">Home</a>
        <a href="{{ route('service')}}" class="nav-link {{ Request::routeIs('service') ? 'active' : ' ' }}">Services</a>
        <a href="{{ route('skill')}}" class="nav-link {{ Request::routeIs('skill') ? 'active' : ' ' }}">Skill</a>
        <a href="{{ route('contact')}}" class="nav-link {{ Request::routeIs('contact') ? 'active' : ' ' }}">Contact</a>
    </nav>
</div>