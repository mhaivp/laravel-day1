<form action="{{ route('baiviet.store') }}" method="POST">
    @csrf
    <div>
        <label for="title">Tieu de:</label>
        <input type="text" name="title" />
        <div>
            @error('title')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        
    </div>
    <div>
        <label for="content">Noi dung</label>
        <textarea id="" cols="10" rows="10" name="content"></textarea>
        <div>
            @error('content')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        
    </div>
    <div>
        <button type="submit">Dang bai</button>
    </div>
</form>