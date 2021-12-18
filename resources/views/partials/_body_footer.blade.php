<footer class="iq-footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item"><a href="{{ route('userdetail.privacyPolicy') }}">Privacy Policy</a></li>
                    <li class="list-inline-item"><a href="{{ route('userdetail.termsofuse') }}">Terms of Use</a></li>
                </ul>
            </div>
            <div class="col-lg-6 text-right">
                Copyright {{ date('Y') }}© <a href="#">{{ env('APP_NAME') }}</a>
            </div>
        </div>
    </div>
</footer>
