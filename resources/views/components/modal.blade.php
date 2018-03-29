<div id="login-box" class="modal fade" role="dialog" ng-controller="LoginController">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <form method="POST" name="loginForm" ng-submit="loginForm.$valid && login('{{ route('login') }}')">
                {{ csrf_field() }}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Login</h4>
                </div>
                <div class="modal-body">
                <div ng-if="loginResponse.alert" class="alert alert-@{{ loginResponse.alert }}">@{{ loginResponse.flash }}</div>
                    <div class="form-group" ng-class="errors.email?'has-error':''">
                        <label for="email">Email address</label>
                        <input value="" type="email" name="email" ng-model="loginData.email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email"
                            required="">
                        <div class="text text-danger" ng-if="errors.email?'has-error':''">@{{ errors.email }}</div>
                    </div>
                    <div class="form-group" ng-class="errors.password?'has-error':''">
                        <label for="password">Password</label>
                        <input value="" type="password" name="password" ng-model="loginData.password" class="form-control" id="password" placeholder="Password" required="">
                        <div class="text text-danger" ng-if="errors.password?'has-error':''">@{{ errors.password }}</div>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="remember" value="1" class="form-check-input" id="remember">
                        <label class="form-check-label" for="remember">Remember me</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" ng-class="loginForm.$invalid || loginProcessing?'btn-default':'btn-primary'" class="btn pull-right" ng-disabled="loginForm.$invalid || loginProcessing">
                    <span ng-if="loginProcessing"><i class="fa fa-spin fa-spinner"></i> Logging...</span> <span ng-if="!loginProcessing">Login</span>
                    </button>
                </div>
            </form>
        </div>

    </div>
</div>