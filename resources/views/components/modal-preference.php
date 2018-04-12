<div id="preference-box" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <form method="POST" name="preferenceForm" ng-submit="preferenceForm.$valid">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Login</h4>
                </div>
                <div class="modal-body">
                    <div class="row" ng-if="editBox == 'basic'">
                        <div class="col-lg-6">
                            <div class="form-group" ng-class="errors.email?'has-error':''">
                                <label for="email">Age</label>
                                <input value="" type="age" name="age" ng-model="loginData.age" class="form-control" id="age" aria-describedby="ageHelp" placeholder="Enter age"
                                    required="">
                                <div class="text text-danger" ng-if="errors.age?'has-error':''">@{{ errors.age }}</div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group" ng-class="errors.email?'has-error':''">
                                <label for="email">Age</label>
                                <input value="" type="age" name="age" ng-model="loginData.age" class="form-control" id="age" aria-describedby="ageHelp" placeholder="Enter age"
                                    required="">
                                <div class="text text-danger" ng-if="errors.age?'has-error':''">@{{ errors.age }}</div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group" ng-class="errors.email?'has-error':''">
                                <label for="email">Mother Tongue</label>
                                <input value="" type="language" name="language" ng-model="loginData.language" class="form-control" id="language" aria-describedby="languageHelp"
                                    placeholder="Enter language" required="">
                                <div class="text text-danger" ng-if="errors.language?'has-error':''">@{{ errors.language }}</div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group" ng-class="errors.email?'has-error':''">
                                <label for="email">Marital Status </label>
                                <input value="" type="email" name="email" ng-model="loginData.email" class="form-control" id="email" aria-describedby="emailHelp"
                                    placeholder="Enter email" required="">
                                <div class="text text-danger" ng-if="errors.email?'has-error':''">@{{ errors.email }}</div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group" ng-class="errors.email?'has-error':''">
                                <label for="email">Height</label>
                                <input value="" type="email" name="email" ng-model="loginData.email" class="form-control" id="email" aria-describedby="emailHelp"
                                    placeholder="Enter email" required="">
                                <div class="text text-danger" ng-if="errors.email?'has-error':''">@{{ errors.email }}</div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group" ng-class="errors.email?'has-error':''">
                                <label for="email">Religion/Community </label>
                                <input value="" type="email" name="email" ng-model="loginData.email" class="form-control" id="email" aria-describedby="emailHelp"
                                    placeholder="Enter email" required="">
                                <div class="text text-danger" ng-if="errors.email?'has-error':''">@{{ errors.email }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="row" ng-if="editBox == 'location'">
                        <div class="col-lg-6">
                            <div class="form-group" ng-class="errors.email?'has-error':''">
                                <label for="email">Country living in</label>
                                <input value="" type="email" name="email" ng-model="loginData.email" class="form-control" id="email" aria-describedby="emailHelp"
                                    placeholder="Enter email" required="">
                                <div class="text text-danger" ng-if="errors.email?'has-error':''">@{{ errors.email }}</div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group" ng-class="errors.email?'has-error':''">
                                <label for="email">State living in</label>
                                <input value="" type="email" name="email" ng-model="loginData.email" class="form-control" id="email" aria-describedby="emailHelp"
                                    placeholder="Enter email" required="">
                                <div class="text text-danger" ng-if="errors.email?'has-error':''">@{{ errors.email }}</div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group" ng-class="errors.email?'has-error':''">
                                <label for="email">City/District</label>
                                <input value="" type="email" name="email" ng-model="loginData.email" class="form-control" id="email" aria-describedby="emailHelp"
                                    placeholder="Enter email" required="">
                                <div class="text text-danger" ng-if="errors.email?'has-error':''">@{{ errors.email }}</div>
                            </div>
                        </div>
                    </div>

                    <div class="row" ng-if="editBox == 'education-career'">
                        <div class="col-lg-6">
                            <div class="form-group" ng-class="errors.email?'has-error':''">
                                <label for="email">Education</label>
                                <input value="" type="email" name="email" ng-model="loginData.email" class="form-control" id="email" aria-describedby="emailHelp"
                                    placeholder="Enter email" required="">
                                <div class="text text-danger" ng-if="errors.email?'has-error':''">@{{ errors.email }}</div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group" ng-class="errors.email?'has-error':''">
                                <label for="email">Working With</label>
                                <input value="" type="email" name="email" ng-model="loginData.email" class="form-control" id="email" aria-describedby="emailHelp"
                                    placeholder="Enter email" required="">
                                <div class="text text-danger" ng-if="errors.email?'has-error':''">@{{ errors.email }}</div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group" ng-class="errors.email?'has-error':''">
                                <label for="email">Professional Area </label>
                                <input value="" type="email" name="email" ng-model="loginData.email" class="form-control" id="email" aria-describedby="emailHelp"
                                    placeholder="Enter email" required="">
                                <div class="text text-danger" ng-if="errors.email?'has-error':''">@{{ errors.email }}</div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group" ng-class="errors.email?'has-error':''">
                                <label for="email">Anual Income</label>
                                <input value="" type="email" name="email" ng-model="loginData.email" class="form-control" id="email" aria-describedby="emailHelp"
                                    placeholder="Enter email" required="">
                                <div class="text text-danger" ng-if="errors.email?'has-error':''">@{{ errors.email }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="row" ng-if="editBox == 'other'">
                        <div class="col-lg-6">
                            <div class="form-group" ng-class="errors.email?'has-error':''">
                                <label for="email">Profile Created By</label>
                                <input value="" type="email" name="email" ng-model="loginData.email" class="form-control" id="email" aria-describedby="emailHelp"
                                    placeholder="Enter email" required="">
                                <div class="text text-danger" ng-if="errors.email?'has-error':''">@{{ errors.email }}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" ng-class="loginForm.$invalid || loginProcessing?'btn-default':'btn-primary'" class="btn pull-right"
                        ng-disabled="loginForm.$invalid || loginProcessing">
                        <span ng-if="loginProcessing">
                            <i class="fa fa-spin fa-spinner"></i> Logging...</span>
                        <span ng-if="!loginProcessing">Save</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>