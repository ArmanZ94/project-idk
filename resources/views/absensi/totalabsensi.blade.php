<form method="GET" action="/absensi/total">
    <label for="bulan">Bulan:</label>
    <input type="number" id="bulan" name="bulan" value="{{ now()->month }}" min="1" max="12">
    
    <label for="tahun">Tahun:</label>
    <input type="number" id="tahun" name="tahun" value="{{ now()->year }}" min="2000">

    <button type="submit">Hitung Absensi</button>
</form>