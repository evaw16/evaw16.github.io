function validasi() {

    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    if (username == "atur" && password == "atur") {
        alert("Selamat anda berhasil login");
        return true;
    }
    if (username != "" && password != "") {
        alert("Username dan password anda salah!");
        return false;
    } else {
        alert("Username dan password tidak boleh kosong!");
        return false;
    }

}
