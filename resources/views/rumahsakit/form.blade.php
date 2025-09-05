@csrf
<div>
    <label for="nama">Nama Rumah sakit:</label>
    <div>
        <input type="text" name="nama" value="{{ old('nama') ??  $rumahsakit->nama ?? '' }}" autofocus placeholder="Masukkan Nama Rumah Sakit" class="
        @error('nama')
            is-invalid
        @enderror
        ">
        @error('nama')
            <span>
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div>
    <label for="alamat">Alamat Rumah Sakit:</label>
    <div>
        <input type="text" name="alamat" value="{{ old('alamat') ??  $rumahsakit->alamat ?? '' }}" autofocus placeholder="Masukkan Alamat Rumah Sakit" class="
        @error('alamat')
            is-invalid
        @enderror
        ">
        @error('alamat')
            <span>
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>



<div>
    <label for="email">Email Rumah Sakit:</label>
    <div>
        <input type="email" name="email" value="{{ old('email') ??  $rumahsakit->email ?? '' }}" autofocus placeholder="Masukkan Email Rumah Sakit" class="
        @error('email')
            is-invalid
        @enderror
        ">
        @error('email')
            <span>
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>


<div>
    <label for="telepon">Nomor telepon Rumah Sakit:</label>
    <div>
        <input type="text" name="telepon" value="{{ old('telepon') ??  $rumahsakit->telepon ?? '' }}" autofocus placeholder="Masukkan Nomor Telepon Rumah Sakit" class="
        @error('telepon')
            is-invalid
        @enderror
        ">
        @error('telepon')
            <span>
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div>
    <button type="submit" class="btn-submit">{{ $button }}</button>
</div>