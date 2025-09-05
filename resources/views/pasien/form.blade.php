@csrf
<div>
    <label for="nama">Nama Pasien:</label>
    <div>
        <input type="text" name="nama" value="{{ old('nama') ?? $pasien->nama ?? '' }}" autofocus placeholder="Masukkan Nama Pasien" class="
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
    <label for="alamat">Alamat Pasien:</label>
    <div>
        <input type="text" name="alamat" value="{{ old('alamat') ?? $pasien->alamat ?? '' }}" autofocus placeholder="Masukkan Alamat Pasien" class="
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
    <label for="telepon">Nomor telepon Pasien:</label>
    <div>
        <input type="text" name="telepon" value="{{ old('telepon') ?? $pasien->telepon ?? '' }}" autofocus placeholder="Masukkan Nomor Telepon Pasien" class="
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
    <label for="rumahsakit_id">Rumah Sakit:</label>
    <div>
        <select name="rumahsakit_id" id="rumahsakit_id" class="
        @error('rumahsakit_id')
            is-invalid
        @enderror
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

<div>
    <button type="submit" class="btn-submit">{{ $button }}</button>
</div>