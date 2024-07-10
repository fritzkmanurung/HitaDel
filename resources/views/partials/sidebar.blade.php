<section id="sidebar">
    <a href="{{ route('home') }}" class="brand"><img src="{{ asset('img/layouts/logo01.png') }}" class="" alt=""> HitaDel</a>
    <ul class="side-menu">
        <li><a href="{{ route('home') }}" class="active"><i class='bx bx-home icon' ></i> Home</a></li>
        <li class="divider" data-text="main">Main</li>
        <li><a href="{{ route('aboutus') }}"><i class='bx bx-help-circle icon' ></i>About Us</a></li>
        <li><a href="{{ route('profile') }}"><i class='bx bx-table icon' ></i> Profile</a></li>
        <li>
            <a href="#"><i class='bx bx-buildings icon' ></i> Community <i class='bx bx-chevron-right icon-right' ></i></a>
            <ul class="side-dropdown">
                <li><a href="{{ route('network_engineer') }}">Network Engineer </a></li>
                <li><a href="{{ route('database_administrator') }}">Database Administrator</a></li>
                <li><a href="{{ route('frontend') }}">Frontend</a></li>
                <li><a href="{{ route('data_analyst') }}">Data Analyst</a></li>
                <li><a href="{{ route('backend') }}">Backend</a></li>
                <li><a href="{{ route('web_developer') }}">Web Developer</a></li>
            </ul>
        </li>
        <li><a href="{{ route('settings') }}"><i class='bx bx-cog icon' ></i>Settings</a></li>
        <li><a href="{{ route('contactus') }}"><i class='bx bxs-contact icon' ></i>Contact Us</a></li>
    </ul>
</section>