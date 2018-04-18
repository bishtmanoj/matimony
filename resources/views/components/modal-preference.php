<div id="preference-box" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <form method="POST" name="preferenceForm" action="<?= route('preference.save') ?>" ng-submit="preferenceForm.$valid && save($event)">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Preferences</h4>
                </div>
                <div class="modal-body">
                    <div class="row" ng-if="response.alert">
                    <div class="col-md-12">
                    <div class="alert alert-{{ response.alert }}">{{ response.flash }}</div> 
                    </div>
                    </div>
                    <div class="row" ng-if="editBox == 'basic'">
                        <div class="col-lg-6">
                            <div class="form-group" ng-class="errors.email?'has-error':''">
                                <label for="email">Age From</label>
                                <input value="" type="number" name="age_from" ng-value="userData.preference.age_from" ng-model="formData.age_from" class="form-control" id="age_from" aria-describedby="ageHelp" placeholder="25"
                                    required="">
                                <div class="text text-danger" ng-if="errors.age?'has-error':''">@{{ errors.age }}</div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group" ng-class="errors.email?'has-error':''">
                                <label for="email">Age To</label>
                                <input value="" type="number" name="age_to"  ng-value="userData.preference.age_to" ng-model="formData.age_to" class="form-control" id="age_to" aria-describedby="age_toHelp" placeholder="30"
                                    required="">
                                <div class="text text-danger" ng-if="errors.age_to?'has-error':''">@{{ errors.age_to }}</div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group" ng-class="errors.email?'has-error':''">
                                <label for="email">Mother Tongue</label>
                                <select name="language" ng-model="formData.language" class="form-control" id="language" required="">
                               <option ng-repeat="lang in userData.language" ng-value="lang.id">{{ lang.name }}</option>
                                </select>
                                <div class="text text-danger" ng-if="errors.language?'has-error':''">@{{ errors.language }}</div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group" ng-class="errors.email?'has-error':''">
                                <label for="email">Marital Status </label>
                                <select name="maritalStatus" ng-model="formData.maritalStatus" class="form-control" id="maritalst" required="">
                               <option ng-repeat="row in userData.maritalStatus"  ng-value="row.id">{{ row.name }}</option>
                                </select>
                                <div class="text text-danger" ng-if="errors.email?'has-error':''">@{{ errors.email }}</div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group" ng-class="errors.email?'has-error':''">
                                <label for="email">Height</label>
                                <select name="language" ng-model="formData.userHeight" class="form-control" id="height" required="">
                               <option ng-repeat="row in userData.userHeight" ng-value="row.id">{{ row.name }}</option>
                                </select>
                                <div class="text text-danger" ng-if="errors.email?'has-error':''">@{{ errors.email }}</div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group" ng-class="errors.email?'has-error':''">
                                <label for="email">Religion/Community </label>
                                
                                    <select name="religion" ng-model="formData.religion" class="form-control" id="religion" required="">
                                    <option ng-repeat="row in userData.religion" ng-value="row.id">{{ row.name }}</option>
                                    </select>
                                <div class="text text-danger" ng-if="errors.email?'has-error':''">@{{ errors.email }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="row" ng-if="editBox == 'location'">
                        <div class="col-lg-6">
                            <div class="form-group" ng-class="errors.email?'has-error':''">
                                <label for="email">Country living in</label>
                                <select name="country" ng-model="formData.country" class="form-control" id="country" required="">
                                <option ng-repeat="cn in [{id:1, name:'India'}]" ng-value="cn.id">{{ cn.name }}</option>
                                </select>
                                <div class="text text-danger" ng-if="errors.country?'has-error':''">@{{ errors.country }}</div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group" ng-class="errors.email?'has-error':''">
                                <label for="email">State living in</label>
                                <select name="state" ng-model="formData.state" class="form-control" id="state" required="">
                                <option ng-repeat="st in userData.states" ng-value="st.id">{{ st.state }}</option>
                                </select>
                                <div class="text text-danger" ng-if="errors.email?'has-error':''">@{{ errors.email }}</div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group" ng-class="errors.email?'has-error':''">
                                <label for="email">City/District</label>
                                <select name="city" ng-model="formData.city" class="form-control" id="city" required="">
                                <option ng-repeat="ct in userData.cities" ng-value="ct.id">{{ ct.city }}</option>
                                </select>
                                <div class="text text-danger" ng-if="errors.email?'has-error':''">@{{ errors.email }}</div>
                            </div>
                        </div>
                    </div>

                    <div class="row" ng-if="editBox == 'education-career'">
                        <div class="col-lg-6">
                            <div class="form-group" ng-class="errors.email?'has-error':''">
                                <label for="email">Education</label>
                                <select name="education" ng-model="formData.education" class="form-control" id="education" required="">
                                <option ng-repeat="ed in userData.education" ng-value="ed.id">{{ ed.name }}</option>
                                </select>
                                <div class="text text-danger" ng-if="errors.email?'has-error':''">@{{ errors.email }}</div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group" ng-class="errors.email?'has-error':''">
                                <label for="email">Working With</label>
                                <select name="employment" ng-model="formData.employment" class="form-control" id="employment" required="">
                                <option ng-repeat="em in userData.employment" ng-value="em.id">{{ em.name }}</option>
                                </select>
                                <div class="text text-danger" ng-if="errors.email?'has-error':''">@{{ errors.email }}</div>
                            </div>
                        </div>
                        <?php /*
                        <div class="col-lg-6">
                            <div class="form-group" ng-class="errors.email?'has-error':''">
                                <label for="email">Professional Area </label>
                                <input value="" type="email" name="email" ng-model="formData.email" class="form-control" id="email" aria-describedby="emailHelp"
                                    placeholder="Enter email" required="">
                                <div class="text text-danger" ng-if="errors.email?'has-error':''">@{{ errors.email }}</div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group" ng-class="errors.email?'has-error':''">
                                <label for="email">Anual Income</label>
                                <input value="" type="email" name="email" ng-model="formData.email" class="form-control" id="email" aria-describedby="emailHelp"
                                    placeholder="Enter email" required="">
                                <div class="text text-danger" ng-if="errors.email?'has-error':''">@{{ errors.email }}</div>
                            </div>
                        </div>
                        */?>
                    </div>
                    <div class="row" ng-if="editBox == 'other'">
                        <div class="col-lg-6">
                            <div class="form-group" ng-class="errors.email?'has-error':''">
                                <label for="email">Profile Created By</label>
                                <select name="profile" ng-model="formData.profile" class="form-control" id="profile" required="">
                                <option ng-repeat="pb in userData.profilePost" ng-value="pb.id">{{ pb.name }}</option>
                                </select>
                                    
                                <div class="text text-danger" ng-if="errors.email?'has-error':''">@{{ errors.email }}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" ng-class="preferenceForm.$invalid || processing?'btn-default':'btn-primary'" class="btn pull-right"
                        ng-disabled="preferenceForm.$invalid || processing">
                        <span ng-if="processing">
                            <i class="fa fa-spin fa-spinner"></i> Saving...</span>
                        <span ng-if="!processing">Save</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>