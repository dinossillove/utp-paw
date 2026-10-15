
<h2>Daftar Ransum</h2>

<table>
    <tr>
        <th>Ransum</th>
        <th>Harga</th>
    </tr>
    <tr>
        <td>Pizza Segitiga Polus</td>
        <td>Rp25.000</td>
    </tr>
    <tr>
        <td>Susu Elektrik Electrical</td>
        <td>Rp18.000</td>
    </tr>
    <tr>
        <td>Space Donut Oxygen</td>
        <td>Rp15.000</td>
    </tr>
    <tr>
        <td>Jus Berry MedBay</td>
        <td>Rp20.000</td>
    </tr>
    <tr>
        <td>Emergency Steak Navigation</td>
        <td>Rp45.000</td>
    </tr>
</table>

<h2>Form Pemesanan</h2>
<form action="proses.php" method="post">
    <label>
        Nama: <input type="text" name="nama">
    </label>
    <br>
    <br>

    <label>
        Ransum: <select name="menu">
            <option value=""> Pilih ransum</option>
            <option value="pizza">Pizza Segitiga Polus </option>
            <option value="susu">Susu Elektrik Eleectrical</option>
            <option value="donut">Space Donut Oxygen</option>
            <option value="jus">Jus Berry MedBay</option>
            <option value="steak">Emergency Steak Navigation</option>
        </select>
    </label>
    <br>
    <br>

    <label>
        Jumlah porsi: <input type="number" name="jumlah">
    </label>
    <br>
    <br>

    <label>
        Kategori pelanggan:
        <select name="kategori">
            <option value="">Pilih kategori </option>
            <option value="crewmate">Crewmate</option>
            <option value="impostor">Impostor</option>
        </select>
    </label>
    <br>
    <br>

    <button type="submit">Pesan</button>
</form>