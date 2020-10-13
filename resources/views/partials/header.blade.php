<nav>
  <div class="my-container">
    <div class="left"><img src="https://www.boolean.careers/images/misc/logo.png" alt="logo-boolean"></div>
    <div class="right">
      <ul>
        <li class="{{ url()->current() == route('StaticPage.home') ? 'active' : '' }}"><a class="btn" href="{{route('StaticPage.home')}}">Home</a></li>
        <li class="{{ url()->current() == route('StaticPage.chisiamo') ? 'active' : '' }}"><a class="btn" href="{{route('StaticPage.chisiamo')}}">Chi siamo</a></li>
        <li class="{{ url()->current() == route('Student.studenti') ? 'active' : '' }}"><a class="btn" href="{{route('Student.studenti')}}">Studenti</a></li>
      </ul>
    </div>
  </div>
</nav>

