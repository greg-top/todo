
<script type="text/javascript">
//set a week cookie when form is closed
$('#myFirstViewModal .close-first-modal').click(function() {
    var cookieName = 'closed';
    var cookieValue = 1;
    var now = new Date();
    now.setDate(now.getDate()+7);
    var cookieExpiration = now;
    document.cookie = cookieName +"=" + cookieValue+"; expires=" + cookieExpiration + "; path=/";
});

//set a month cookie when user send form
$('#first-view-modal-form').submit(function () {
    var cookieName = 'fname';
    var cookieValue = $('#first_view_modal_name').val();
    var now = new Date();
    now.setDate(now.getDate()+30);
    var cookieExpiration = now;
    document.cookie = cookieName +"=" + cookieValue+"; expires=" + cookieExpiration + "; path=/";
});

</script>

<?php
$flag = showGreetingsModal();
if ( $flag ): ?>
    <script type="text/javascript">
        //show modal on page load
        $(window).on('load',function(){
            $('#myFirstViewModal').modal('show');
        });
    </script>
<?php endif; ?>
