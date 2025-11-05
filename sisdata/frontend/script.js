// menampilkan data siswa di dashboard
if (document.getElementById("tabel-siswa")) {
  fetch("../backend/siswa_read.php")
    .then(res => res.json())
    .then(data => {
      let html = "";
      data.forEach(row => {
        html += `
          <tr>
            <td>${row.nis}</td>
            <td>${row.nama}</td>
            <td>${row.kelas}</td>
            <td>${row.alamat}</td>
            <td>${row.email}</td>
            <td>${row.telepon}</td>
            <td>
              <a href="edit.html?id=${row.id}"><button>Edit</button></a>
              <a href="../backend/siswa_delete.php?id=${row.id}" onclick="return confirm('Hapus data ini?')">
                <button>Hapus</button>
              </a>
            </td>
          </tr>
        `;
      });
      document.getElementById("tabel-siswa").innerHTML = html;
    })
    .catch(err => console.error(err));
}

// menampilkan data di form edit
if (window.location.href.includes("edit.html")) {
  const params = new URLSearchParams(window.location.search);
  const id = params.get("id");
  fetch(`../backend/siswa_read.php`)
    .then(res => res.json())
    .then(data => {
      const siswa = data.find(item => item.id == id);
      if (siswa) {
        document.getElementById("id").value = siswa.id;
        document.getElementById("nis").value = siswa.nis;
        document.getElementById("nama").value = siswa.nama;
        document.getElementById("kelas").value = siswa.kelas;
        document.getElementById("alamat").value = siswa.alamat;
        document.getElementById("email").value = siswa.email;
        document.getElementById("telepon").value = siswa.telepon;
      }
    })
    .catch(err => console.error(err));
}
