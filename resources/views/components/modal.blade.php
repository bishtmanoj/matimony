<div id="login-box" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <form method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Login</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group ">
                        <label for="email">Email address</label>
                        <input value="" type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email"
                            required="">
                    </div>
                    <div class="form-group ">
                        <label for="password">Password</label>
                        <input value="" type="password" name="password" class="form-control" id="password" placeholder="Password" required="">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="remember" value="1" class="form-check-input" id="remember">
                        <label class="form-check-label" for="remember">Remember me</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>
        </div>

    </div>
</div>