<div class="modal fade first-view-modal" id="myFirstViewModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Welcome in my app</h4>
            </div>
            <div class="modal-body">
                <form action="index.php" method="post" id="first-view-modal-form">
                    <div class="form-group">
                        <label for="name">Please let me know your name</label>
                        <input type="text" class="form-control" id="first_view_modal_name" name="name">
                    </div>
                    <input type="submit" name="submit" value="Continue" class="btn btn-primary">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default close-first-modal" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>