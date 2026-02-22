@extends('layouts.main')
@section('content')
    <!-- Page content-->
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">
                <!-- Post content-->
                <article>
                    <!-- Post header-->
                    <header class="mb-4">
                        <!-- Post title-->
                        <h1 class="fw-bolder mb-1">{{ $article->title }}</h1>
                        <!-- Post categories-->
                        <small class="small text-muted">{{ $article->category->libelle }}</small>
                    </header>
                    <!-- Preview image figure-->
                    <figure class="mb-4"><img class="img-fluid rounded"
                            src="https://dummyimage.com/900x400/ced4da/6c757d.jpg" alt="..." /></figure>

                    <div class="dropdown-divider"></div>
                    <!-- Post content-->
                    <section class="mb-5">
                        <p class="fs-5 mb-4">{{ $article->content }}</p>
                    </section>
                </article>
            </div>
        </div>
    </div>
@endsection
