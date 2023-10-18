<div id="pageHeader" @if($header_file) style="background: #1c3761 url('{{ asset('/uploads/headers/'.$header_file) }}') no-repeat center center;background-size:cover" @endif>
    <div class="container">
        <div class="row">
            <div class="col-12">
                @isset($product)
                    <h1>{{ $product->name }}</h1>
                    @else
                    <h1>{{ $page->title }}</h1>
                @endif
            </div>
        </div>
    </div>
</div>