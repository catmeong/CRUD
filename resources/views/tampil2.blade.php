<Link rel="stylesheet" href="https://com.jsdelivr.net/nps/bootstrap4.3.1/dist/css/bootstrap.min.css integrity sha384-990yR01XCBMQv3X1pma34MD+H/170784/16cY/2ITQU0NcWr7x9JvoRxT2MZwIT crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.stin.min.js" integrity="sha384-081/X+9650z00rT7abK41JStQIAqVgRVzpbzo5sXKp4YTRVH+BahtTE1P161120" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/popper.101.14.7/dsst/und/popper.min.js" integrity= "sha384-002eTBCpHqdSJQGnJty5KVghtPzMjQWO1c HTMG3JDZwrnQq4sF864IHNDzBW1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity= "sha384-3jSeVgyd@p3pXB1rRibZUAYIIy60rQ6VrjIEaFf/nJGzIkFDsf4xOxIH-8073RM" crossorigin="anonymous"></script>

<center>
<h2> Data Mahasiswa </h2>
<hr />
<table class="table table-dark" style='width:50%; table-align:center;'>

    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>NIM</td>
            <td>{{$data['nim']}}</td>

        </tr>

        <tr>
            <th scope="row">2</th>
            <td>NAMA</td>
            <td>{{$data['nama']}}</td>

        </tr>

        <tr>
            <th scope="row">3</th>
            <td>ALAMAT</td>
            <td>{{$data['alamat']}}</td>
        </tr>
    </tbody>
</table>
</center>
<hr />