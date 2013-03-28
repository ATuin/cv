@layout('templates.main')
@section('content')

<div class="container">
        <div class="row">
                <div class="login-form span4 offset4">
                        <h2>Login</h2>
                        @include('plugins.status')
                        <form class="well" method="POST" action="auth">
                                <label for="email">Email</label>
                                <input type="text" placeholder="email" name="email" id="email" />
                                <label for="password">Password</label>
                                <input type="password" placeholder="password" name="password" id="password" />
                                <button type="submit" class="btn btn-success">Login</button>
                        </form>
                </div>
        </div>
</div>

@endsection