<!-- Portfolio Section -->
<section id="portfolio" class="py-5">
    <!-- Page Content -->
    <h3 class="text-center title-section" style="color: #e41749;"><strong>Portofolio</strong></h3>
    <p class="text-center font-weight-light mb-5 text-white"><small>My Latest Works</small></p>
    <div class="container">
        <div class="row">
            <!-- Portofolio -->
            @foreach ($portofolios as $portofolio)
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-0 shadow cardbody-hover">
                    <img src="{{ $portofolio->image }}" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-0">{{ $portofolio->title }}</h5>
                        <div class="card-text text-black-50">{{ $portofolio->job }}</div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
