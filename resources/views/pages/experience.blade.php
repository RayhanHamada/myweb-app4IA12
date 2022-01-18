<section id="experience" class="py-5">
    <!-- Page Content -->
    <h3 class="text-center title-section" style="color: #e41749;"><strong>Experience</strong></h3>
    <div class="container mt-5">
        <div class="row">
            <!-- Portofolio -->
            @foreach ($experiences as $experience)
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-0 shadow cardbody-hover">
                    <img src="{{ $experience->loc }}" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-0">{{ $experience->title }}</h5>
                        <div class="card-text text-black-50">{{ $experience->description }}</div>
                        <div class="card-text text-black-50">{{ $experience->since }}</div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
