@if (Session::has('success'))
            <div class="pt-3">
                <div class="alert alert-success">
                    {{ Session::has('success') }}
                </div>
            </div>
        @endif 

        @if ($errors->any())
        <div class="pt-3">
            <div class="alert alert-danger">
                @foreach ($errors->all() as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </div>
        </div>
    @endif