@section('title', 'Video 1')
@section('title-description', 'Manajemen Grup Kelas, Data kelas dan Materi pembelajaran')
@section('title-icon', 'pe-7s-bookmarks')
@section('content')

<div class="row">
    <div class="col-md-6">
        <span style="color:black"><strong>Judul Video</strong></span><br>
        <i class="fa fa-spin fa-spinner"></i>
        <a id="judul"></a>
        <br><br>

        <span style="color:black"><strong>Deskripsi Video</strong></span><br>
        <i class="fa fa-spin fa-spinner"></i>
        <a id="deskripsi"></a>
        <br><br>

        <span style="color:black"><strong>Url Video</strong></span><br>
        <i class="fa fa-spin fa-spinner"></i>
        <a id="url_video"></a>
        <br><br>

        <div class="route">
        </div>
    </div>
    <div class="col-md-6">
        <div class="thumb1">
            <img src="{{url('img/cobdesu.jfif')}}" width="500" height="220">
        </div>
    </div>

</div>
<br>
<div class="col-lg-13">
    <div class="mb-3 card">
        <div class="card-header card-header-tab-animation">
            <ul class="nav">
                <li class="nav-item"><a data-toggle="tab" href="#tab-eg8-1" class=" active nav-link">Latihan (12 episode)</a></li>
                <li class="nav-item"><a data-toggle="tab" href="#tab-eg8-2" class="nav-link">Shadowing (20 Soal)</a></li>
            </ul>
        </div>
        <div class="card-body">
            <div class="tab-content">
                <div class="tab-pane active" id="tab-eg8-1" role="tabpanel">
                    <div class="card-body">
                        <div>
                            <div class="position-relative form-group"><a class="btn-icon btn-icon-only btn btn-primary mobile-toggle-header-nav" href="{{route('tambahsoalvideo')}}"> Tambah Soal</a></div>

                        </div>
                        <table id="example" class="table table-hover table-striped table-bordered">
                            <thead>
                                <th>Coba</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Michael Bruce</td>
                                    <td>Javascript Developer</td>
                                    <td>Singapore</td>
                                    <td>29</td>
                                    <td>2011/06/27</td>
                                    <td>$183,000</td>
                                </tr>
                                <tr>
                                    <td>Donna Snider</td>
                                    <td>Customer Support</td>
                                    <td>New York</td>
                                    <td>27</td>
                                    <td>2011/01/25</td>
                                    <td>$112,000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane" id="tab-eg8-2" role="tabpanel">
                    <div class="card-body">
                        <div>
                            <div class="position-relative form-group"><a data-toggle="modal" data-target=".bd-example-modal-sm1" class="btn-icon btn-icon-only btn btn-primary mobile-toggle-header-nav" href=""> Tambah Ungkapan</a></div>

                        </div>
                        <table id="example" class="table table-hover table-striped table-bordered">
                            <thead>
                                <th>Cob2</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Michael Bruce</td>
                                    <td>Javascript Developer</td>
                                    <td>Singapore</td>
                                    <td>29</td>
                                    <td>2011/06/27</td>
                                    <td>$183,000</td>
                                </tr>
                                <tr>
                                    <td>Donna Snider</td>
                                    <td>Customer Support</td>
                                    <td>New York</td>
                                    <td>27</td>
                                    <td>2011/01/25</td>
                                    <td>$112,000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
@endsection
@section('modal')
<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Sunting Video</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="position-relative form-group"><label for="exampleEmail" class="">Episode</label>
                    <div class="form-row">
                        <div class="col-md-3"><input name="email" id="exampleEmail" placeholder="" type="email" class="form-control" disabled>
                        </div>
                    </div>
                </div>
                <div class="position-relative form-group"><label for="exampleEmail" class="">Judul Materi Video</label><input name="email" id="exampleEmail" placeholder="" type="email" class="form-control"></div>
                <div class="position-relative form-group"><label for="exampleEmail" class="">Keterangan</label><textarea name="email" id="exampleEmail" placeholder="" type="email" class="form-control"></textarea>
                    <small class="form-text text-muted">Jumlah Kata 0 (Max 500 Karakter)</small>

                </div>
                <div class="position-relative form-group"><label for="exampleEmail" class="">URL Video</label><input name="email" id="exampleEmail" placeholder="" type="email" class="form-control"></div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Tambah</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade bd-example-modal-sm1" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Ungkapan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="position-relative form-group"><label for="exampleEmail" class="">Letak</label>
                    <div class="form-row">
                        <div class="col-md-3"><input name="email" id="exampleEmail" placeholder="" type="email" class="form-control" disabled>
                        </div>
                    </div>
                </div>
                <div class="position-relative form-group"><label for="exampleEmail" class="">Kata dalam Hanquel</label><input name="email" id="exampleEmail" placeholder="" type="email" class="form-control"></div>
                <div class="position-relative form-group"><label for="exampleEmail" class="">Arti atau Keterangan singkat</label><input name="email" id="exampleEmail" placeholder="" type="email" class="form-control"></div>
                <div class="position-relative form-group"><label for="exampleEmail" class="">File Audio</label><input name="email" id="exampleEmail" placeholder="" type="file" class="form-control">
                    <small class="form-text text-muted">Format Mp3 Maksimal ukuran file 2MB</small>
                </div>



            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Tambah</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade bd-example-modal-sm-edit" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Edit Video</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="position-relative form-group"><label for="exampleEmail" class="">Episode</label>
                    <div class="form-row">
                        <div class="col-md-3">
                            <input name="id" id="id" hidden class="form-control">
                            <input name="nomor" type="number" id="nomor_edit" disabled class="form-control">
                        </div>
                    </div>
                </div>
                <div class="position-relative form-group"><label class="">Judul Materi Video</label>
                    <input name="judul" id="judul_video_edit" type="" class="form-control">
                </div>
                <div class="position-relative form-group">
                    <label for="exampleEmail" class="">Keterangan</label>
                    <textarea name="keterangan" id="keterangan_edit" placeholder="" class="form-control"></textarea>
                    <small class="form-text text-muted">Jumlah Kata 0 (Max 500 Karakter)</small>

                </div>
                <div class="position-relative form-group">
                    <label for="exampleEmail" class="">URL Video</label>
                    <input name="url_video" id="url_video_edit" placeholder="" class="form-control">
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" onclick="update($('#id').val())" class=" btn btn-primary">Tambah</button>
            </div>
        </div>
    </div>
</div>
@endsection


@section('js')

<script>
    //SHOW DATA
    async function getISS() {
        const response = await fetch('https://floating-harbor-93486.herokuapp.com/api/admin/classroom/content/video/all?token=' + urlParams.get('token'));
        const datas = await response.json();
        const {
            data,
        } = datas;
        console.log(data)

        $('.fa-spinner').removeClass('fa-spinner').removeClass('fa-spin');


        // html000 = '';
        // html000 += `<img src="` + data.url_web + `" width="500" height="220">`
        // document.querySelector('.thumb1').innerHTML = html000;



        html00 = '';
        html00 += `<a href = "{{route('detailkelas')}}?id=` + data.group_uuid + `" type = "button" class=" mb-2 mr-2 btn btn-primary" >> Kembali </a>`

        html0 = '';
        html0 += '<a data-toggle="modal" data-target=".bd-example-modal-sm-edit" onclick="getEditVideo(\'' + data.uuid + '\')" class="btn-icon btn-icon-only btn btn-primary mobile-toggle-header-nav" href="" style="margin:2px;">Sunting Video</a><br>'
        document.querySelector('.route').innerHTML = html0;
        // html0 += `<a href = "{{route('progressiswa')}}?id=` + data.class_uuid + `" type = "button" class=" mb-2 mr-2 btn btn-primary" > Progress Siswa </a>`
        // document.querySelector('.route').innerHTML = html0;

        document.getElementById('judul').textContent = data.judul;
        document.getElementById('deskripsi').textContent = data.keterangan;
        document.getElementById('url_video').textContent = data.url_video;
        // $.each(data.mentor, function(index3, row3) {
        //     document.getElementById('mentor').textContent = row3.nama_mentor;
        // });
        // html = '';
        // $.each(data, function(index, row) {
        //     html += '<tr>';
        //     html += '<td>' + row.number + '</td>';
        //     html += '<td>' + row.jenis + '</td>';
        //     html += '<td>' + row.judul + '</td>';
        //     html += '<td>' + row.keterangan + '</td>';
        //     html += '<td>' + row.keterangan + '</td>';
        //     html += '</tr>';
        // });
        // document.querySelector('.tbody').innerHTML = html;

        // html1 = '';
        // $.each(data.video, function(index1, row1) {
        //     console.log(row1)
        //     html1 += '<tr>';
        //     html1 += '<td>' + (row1.number) + '</td>';
        //     html1 += '<td>' + row1.jenis + '</td>';
        //     html1 += '<td>' + row1.judul + '</td>';
        //     html1 += '<td>' + row1.keterangan + '</td>';
        //     html1 += '<td>' + row1.keterangan + '</td>';
        //     html1 += '<td>' + `<a href = "{{ route('videosiswa') }}?token=` + row1.uuid + `"style = "margin:2px;" class = "btn btn-secondary btn-sm" >Details</a><br>` + '<a data-toggle="modal" data-target=".bd-example-modal-sm-edit" onclick="getEditVideo(\'' + row1.uuid + '\')" class="btn-icon btn-icon-only btn btn-info btn-sm mobile-toggle-header-nav" href="" style="margin:2px;">Edit</a><br>' + '<a href="" onclick="deleteVideo(\'' + row1.uuid + '\')" style="margin:2px;" class="btn btn-danger btn-sm">Hapus</a>' +
        //         '</td>';
        //     html += '</tr>';
        // });
        // document.querySelector('.tbody1').innerHTML = html1;

        // html2 = '';
        // $.each(data.quiz, function(index1, row2) {
        //     console.log(row2)
        //     html2 += '<tr>';
        //     html2 += '<td>' + (index1 + 1) + '</td>';
        //     html2 += '<td>' + row2.jenis + '</td>';
        //     html2 += '<td>' + row2.judul + '</td>';
        //     html2 += '<td>' + row2.keterangan + '</td>';
        //     html2 += '<td>' + row2.keterangan + '</td>';
        //     html2 += '<td>' + ` < a href = "{{ route('quizsiswa') }}?token=` + row2.uuid + `"style = "margin:2px;" class = "btn btn-secondary btn-sm" > Details < /a><br>` + `<a href="" style="margin:2px;" class="btn btn-info btn-sm">Edit</a > < br > ` + ` < a href = "" style = "margin:2px;" class = "btn btn-danger btn-sm" > Hapus < /a>` + '</td>';
        //     html2 += '</tr>';
        // });
        // document.querySelector('.tbody2').innerHTML = html2;
    }
    getISS();

    //SHOW EDIT
    function getEditVideo() {
        $.ajax({
            method: 'get',
            url: 'https://floating-harbor-93486.herokuapp.com/api/admin/classroom/content/video/detail?token=' + urlParams.get('token'),
            dataType: 'json',
            success: function(response) {
                console.log(response)

                if (response.message !== 'Success') {
                    // $.growl.warning({
                    //     message: response.message
                    // });
                } else if (response.message == 'Success') {
                    document.getElementById('id').value = response.data['uuid'];
                    document.getElementById('nomor_edit').value = response.data['nomor'];
                    document.getElementById('judul_video_edit').value = response.data['judul'];
                    document.getElementById('keterangan_edit').value = response.data['keterangan'];
                    document.getElementById('url_video_edit').value = response.data['url_video'];

                }
            }
        });

    }

    //UPDATE VIDEO
    function update(id) {
        $.ajax({
            type: "post",
            url: 'https://floating-harbor-93486.herokuapp.com/api/admin/classroom/content/video/update?token=' + id,
            data: {
                'nomor': $("#nomor").val(),
                'judul': $("#judul_video_edit").val(),
                'tipe': 'Video',
                'keterangan': $("#keterangan_edit").val(),
                'url_video': $("#url_video_edit").val(),
            },
            success: function(response) {
                if (response.message !== 'Success') {
                    // $.growl.warning({
                    //     message: response.message
                    // });
                } else if (response.message == 'Success') {
                    $(".btn-close").click();
                    window.location = "{{route('videosiswa')}}?token=" + urlParams.get('token');
                }

            }
        });
    }
</script>
@endsection
@extends('layouts.layout')