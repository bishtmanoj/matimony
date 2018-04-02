<div id="upload-box" class="modal fade" role="dialog" ng-controller="UploadController">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
        <form method="POST" enctype="multipart/form-data" name="uploadForm" ng-submit="uploadForm.$valid && upload()" novalidate>
            <div class="modal-header">
            @{{ file }}
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Upload Profile Picture</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div id="upload-demo"></div>
                    </div>
                    <div class="col-md-12 text-center">
                        <div class="form-group">
                            <input type="file" id="upload" name="file" file-model="file" style="margin: 0 auto;" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button class="btn btn-success pull-right" ng-disabled="invalidFile" ng-click="!invalidFile && uploadFile()">Upload</button>
            </div>
            </form>
        </div>
    </div>
</div>