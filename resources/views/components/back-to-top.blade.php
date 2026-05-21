@if (Route::is(['index', '/', 'index-11']))
    <div class="back-to-top">
        <a class="back-to-top-icon back-to-top-icon-eight align-items-center justify-content-center d-flex"
            href="#top"><i class="isax isax-arrow-up-15"></i></a>
    </div>
@endif

@if (Route::is(['index-12']))
    <div class="back-to-top">
		<a class="back-to-top-icon rounded-circle align-items-center justify-content-center d-flex"  href="#top"><i class="isax isax-arrow-up-15"></i></a>
	</div>
@endif

@if (!Route::is(['index', '/', 'index-2', 'index-11', 'index-12']))
    <div class="back-to-top">
        <a class="back-to-top-icon align-items-center justify-content-center d-flex" href="#top"><i
                class="fa-solid fa-arrow-up"></i></a>
    </div>
@endif