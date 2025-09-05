@csrf
<div class="input-form-container">
    <div class="form">
        <label for="nama" class="label">Nama Pasien:</label>
        <input type="text" name="nama" value="{{ old('nama') ?? $pasien->nama ?? '' }}" autofocus placeholder="Masukkan Nama Pasien" class="
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
        <label for="alamat" class="label">Alamat Pasien:</label>
        <input type="text" name="alamat" value="{{ old('alamat') ?? $pasien->alamat ?? '' }}" autofocus placeholder="Masukkan Alamat Pasien" class="
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
        <label for="telepon" class="label">Nomor telepon Pasien:</label>
        <input type="text" name="telepon" value="{{ old('telepon') ?? $pasien->telepon ?? '' }}" autofocus placeholder="Masukkan Nomor Telepon Pasien" class="
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

<div class="input-form-container">
    <div class="form">
        <label for="rumahsakit_id" class="label">Rumah Sakit:</label>
        <select name="rumahsakit_id" id="rumahsakit_id" class="
        @error('rumahsakit_id')
            is-invalid
        @enderror
        input-form
        ">
        @foreach ($rumahsakits as $rumahsakit)
            @if ($rumahsakit->id === (old('rumahsakit_id') ?? $rumahsakit->nama ?? ''))
                <option value="{{ $rumahsakit->id }}" selected>{{ $rumahsakit->nama }}</option>
            @else
                <option value="{{ $rumahsakit->id }}">{{ $rumahsakit->nama }}</option>
            @endif
        @endforeach
    </select>
    @error('rumahsakit_id')
        <strong>{{ $message }}</strong>
    @enderror
    </div>
</div>

<div class="submit-form-container">
    <button type="submit" class="btn-submit">{{ $button }}</button>
</div>