<div class="row panel-footer">
    <!--    <div class="col-md-3">
            <ul>
                <li>Hello</li>
                <li>Hello</li>
                <li>Hello</li>
                <li>Hello</li>
                <li>Hello</li>
            </ul>
        </div>
        <div class="col-md-3">
            <ul>
                <li>Hello</li>
                <li>Hello</li>
                <li>Hello</li>
                <li>Hello</li>
                <li>Hello</li>
            </ul>
        </div>
        <div class="col-md-3">
            <ul>
                <li>Hello</li>
                <li>Hello</li>
                <li>Hello</li>
                <li>Hello</li>
                <li>Hello</li>
            </ul>
        </div>
        <div class="col-md-3">
            <ul>
                <li>Hello</li>
                <li>Hello</li>
                <li>Hello</li>
                <li>Hello</li>
                <li>Hello</li>
            </ul>
        </div>-->
    <div class="row">
        <div class="col-md-6" id="social-icons">
            <a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-github-square" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-vk" aria-hidden="true"></i></a>
        </div>
        <div class="col-md-6">

        </div>
    </div>
</div>
</div>
<script>
    $(document).ready(function () {
        var url = window.location;
        $('ul.nav a[href="' + url + '"]').parent().addClass('active');
        $('ul.nav a').filter(function () {
            return this.href == url;
        }).parent().addClass('active');
    });
</script>
<script src="assets/js/bootstrap.js"></script>
</body>
</html>