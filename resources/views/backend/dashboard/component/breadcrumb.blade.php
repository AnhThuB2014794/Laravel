<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-8">
        <h2>{{ $title}}</h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5" style="margin-bottom:10px;">
                <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark"
                        href="{{ route('dashboard.index')}}">Dashboard / </a>
                </li>
                <li class="active"><strong>{{ $title}}</strong></li>
            </ol>
        </nav>
    </div>
</div>