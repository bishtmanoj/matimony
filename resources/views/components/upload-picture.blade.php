<div id="upload-box" class="modal fade" role="dialog" ng-controller="UploadController">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
        <form method="POST" enctype="multipart/form-data" name="uploadForm" ng-submit="uploadForm.$valid && uploadFile('{{ route('profile.upload') }}')" novalidate>
            <div class="modal-header">
           
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Upload Profile Picture</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                <div class="col-md-12">
                <div ng-if="response.alert" class="alert" ng-class="'alert-' + response.alert">@{{ response.flash }}</div>
                </div>
                    <div class="col-md-12 text-center">
                        <div id="upload-demo"></div>
                    </div>
                    <div class="col-md-12 text-center">
                        <div class="form-group">
                            <input type="file" accept="image/x-png,image/gif,image/jpeg" id="upload" name="file" file-model="file" style="margin: 0 auto;" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button class="btn btn-success pull-right" ng-disabled="processing"><span ng-if="!processing">Upload</span>
                <span ng-if="processing">Uploading...</span></button>
            </div>
            </form>
        </div>
    </div>
</div>