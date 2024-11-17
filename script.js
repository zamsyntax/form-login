document.getElementById('form-pendaftaran').addEventListener('submit', function (event) {
    let idPendaftaran = document.getElementById('id_pendaftaran').value.trim();

    // Jika tidak sesuai pola, tampilkan pesan dan cegah submit
    if (!/^[0-9]+PPDB$/.test(idPendaftaran)) {
        alert('ID Pendaftaran harus berupa angka diikuti PPDB.');
        event.preventDefault(); // Mencegah form submit
        return;
    }

    // Tambahkan otomatis jika belum ada "PPDB"
    if (!idPendaftaran.endsWith('PPDB')) {
        document.getElementById('id_pendaftaran').value = idPendaftaran + 'PPDB';
    }
});
