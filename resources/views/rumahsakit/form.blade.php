@csrf
<div class="input-form-container">
    <div class="input-form-container">
        <div class="form">
            <label for="nama" class="label">Nama Rumah sakit:</label>
            <input type="text" name="nama" value="{{ old('nama') ??  $rumahsakit->nama ?? '' }}" autofocus placeholder="Masukkan Nama Rumah Sakit" class="
            @error('nama')
                is-invalid
            @enderror
            input-form
            ">
            @error('nama')
                <span>
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    
    <div class="input-form-container">
        <div class="form">
            <label for="alamat" class="label">Alamat Rumah Sakit:</label>
            <input type="text" name="alamat" value="{{ old('alamat') ??  $rumahsakit->alamat ?? '' }}" autofocus placeholder="Masukkan Alamat Rumah Sakit" class="
            @error('alamat')
                is-invalid
            @enderror
            input-form
            ">
            @error('alamat')
                <span>
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    
    <div class="input-form-container">
        <div class="form">
            <label for="email" class="label">Email Rumah Sakit:</label>
            <input type="email" name="email" value="{{ old('email') ??  $rumahsakit->email ?? '' }}" autofocus placeholder="Masukkan Email Rumah Sakit" class="
            @error('email')
                is-invalid
            @enderror
            input-form
            ">
            @error('email')
                <span>
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    
    <div class="input-form-container">
        <div class="form">
            <label for="telepon" class="label">Nomor telepon Rumah Sakit:</label>
            <input type="text" name="telepon" value="{{ old('telepon') ??  $rumahsakit->telepon ?? '' }}" autofocus placeholder="Masukkan Nomor Telepon Rumah Sakit" class="
            @error('telepon')
                is-invalid
            @enderror
            input-form
            ">
            @error('telepon')
                <span>
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    
    <div class="submit-form-container">
        <button type="submit" class="btn-submit">{{ $button }}</button>
    </div>
</div>