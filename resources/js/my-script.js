let allButton = document.querySelectorAll('.btn-delete');
allButton.forEach((item)=>{
    item.addEventListener('click', confirm)
})

function confirm(event){
    let button = event.currentTarget;
    let titleAlert;
    let textAlert;
    switch(button.getAttribute('data-table')){
        case 'rumahsakit':
            titleAlert = 'Hapus Data Rumah Sakit?'
            textAlert = 'semua data yang bersangkutan dengan pasien akan terhapus juga'
        break;
        case 'pasien':
            titleAlert = 'Hapus Pasien'
            textAlert = 'Data pasien akan dihapus'
        break;
    }

    event.preventDefault();
    Swal.fire({
        title: titleAlert,
        html: textAlert,
        icon: 'warning',
        showCancelButton: true,
        cancelButtonColor: '#6c757d',
        confirmButtonColor: '#dc3545',
        cancelButtonText: 'Tidak jadi',
        confirmButtonText: 'Hapus',
        reverseButtonText: true,
    })
}