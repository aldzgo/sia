<nav class="navbar navbar-dark navbar-expand-lg navbar-light bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{url('/')}}">Golis App</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse" id="navbarNav">
     <ul class="navbar-nav">
          <li class="nav-item active">
           <a class="nav-link" href="{{url('/dashboard')}}">Dashboard</a>
           </li>
           <li class="nav-item">
           <a class="nav-link" href="{{url('/posts')}}">Posts</a>
           </li>
             <li class="nav-item">
               <a class="nav-link" href="{{url('/users')}}">Users</a>
           </li>

           @if(auth()->guest())
           <li class="nav-item">
               <a class="nav-link" href="{{url('/login')}}">Login</a>
           </li>
           @else

           <li class="nav-item">
               <a class="nav-link" href="{{url('/logout')}}">Logout</a>
           </li>
           @endif
      </ul>
        </div>
    </div>
</nav>