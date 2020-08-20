<nav class="navbar navbar-expand navbar-light bg-light">
    <div class="container">
        <a href="" class="navbar-brand">Laravel Practice</a>
        <ul class="nav navbar-nav mr-auto">
            <li class="nav-item {{(request()->is('/') ? "active" : "")}}">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item {{(request()->is('customers*') ? "active" : "")}}" >
                <a class="nav-link" href="{{route('customers.index')}}">Customers</a>
            </li>
            <li class="nav-item {{(request()->is('contact-us*') ? "active" : "")}}" >
                <a class="nav-link" href="{{route('contact.create')}}">Contact Us</a>
            </li>
        </ul>
    </div>
</nav>