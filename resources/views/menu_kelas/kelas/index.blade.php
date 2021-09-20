@section('title', 'Kelas Intensif')
@section('title-description', 'Manajemen Grup Kelas, Data kelas dan Materi pembelajaran')
@section('title-icon', 'pe-7s-bookmarks')
@section('content')
<div class="tambah">
</div>
<br>
<div class="main-card mb-3 card">
    <div class="card-body">

        <table id="example" class="table table-fix table-hover table-striped table-bordered">
            <thead>
                <th width="10px">#</th>
                <th>Judul Kelas</th>
                <th>Deskripsi Kelas</th>
                <th>Mentor</th>
                <th>Materi</th>
                <th>Dibuat</th>
                <th>Status</th>
                <th>Terakhir dirubah</th>
                <th width="45px">Action</th>
                </tr>
            </thead>
            <tbody class="tbody">
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('js')
<script>
    $('table').DataTable();

    //SHOW DATA
    async function getISS() {
        const response = await fetch('https://floating-harbor-93486.herokuapp.com/api/admin/classroom/category?token=' + urlParams.get('id'));
        const datas = await response.json();
        const {
            data,
        } = datas;
        $('.page-title-text').html(data.nama_group + '<div class="page-title-subheading">' + data.group_deskripsi + '</div>');

        html0 = '';
        html0 += `<a href="{{route('tambahkelas')}}?id=` + urlParams.get('id') + `" class="mb-2 mr-2 btn btn-primary">Tambah Kelas</a>`
        document.querySelector('.tambah').innerHTML = html0;

        html = '';
        $.each(data.classes, function(index, row) {
            html += '<tr>';
            html += '<td>' + (index + 1) + '</td>';
            html += '<td>' + row.judul_class + '</td>';
            html += '<td>' + row.deskripsi_class + '</td>';
            html += '<td>';
            $.each(row.mentor, function(index1, row1) {
                html += row1.nama_mentor + '<br>';
            });
            html += '</td>';
            html += '<td>' + row.jml_materi + '</td>';
            html += '<td>' + row.dibuat + '</td>';
            html += '<td>' + row.status + '</td>';
            html += '<td>' + row.diubah + '</td>';
            html += '<td>' + `<a href="{{route('detailkelas')}}?id=` + row.class_uuid + `"  type="button" class="btn btn-info btn-sm">Details</a>` + '</td>';
            html += '</tr>';
        });
        // onclick = "getKelas(\'' + row[0].uuid + '\')
        document.querySelector('.tbody').innerHTML = html;
    }
    getISS();
</script>
@endsection
@extends('layouts.layout')