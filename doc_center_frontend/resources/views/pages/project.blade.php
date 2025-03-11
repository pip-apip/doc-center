@extends('layouts.app')

@section('title', 'Project Page')

@section('content')
<div class="page-title">
    <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h3>Data Project</h3>
            {{-- <p class="text-subtitle text-muted">For user to check they list</p> --}}
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Project</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<section class="section">
    <div class="card">
        <div class="card-header">
            <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#formModal"
                id="addButton">
                <i class="fa-solid fa-plus"></i> Add</a>
        </div>
        <div class="card-body">
            <table class="table table-striped" id="table1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Project Name</th>
                        <th>Company Name</th>
                        <th>Director Name</th>
                        <th>Start Project</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="table-body">

                </tbody>

            </table>
        </div>
    </div>

</section>

<div class="modal fade text-left w-100" id="formModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33" id="formTitle">Form Add Project</h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close" id="closeFormModal">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <form action="#" id="post-form">
                @csrf
                <div class="modal-body">

                    <label>Project Name : </label>
                    <div class="form-group">
                        <input type="text" placeholder="Enter the Project Name" class="form-control"
                            name="project_name">
                    </div>
                    @error('project_name')
                        <div class="invalid-feedback">
                            <i class="bx bx-radio-circle"></i>
                            {{ $message }}
                        </div>
                    @enderror

                    <div class="row">

                        <div class="col-sm-6">
                            <label>Company Name: </label>
                            <div class="form-group">
                                <input type="text" placeholder="Enter the Company Name" class="form-control"
                                    name="company_name">
                            </div>
                            @error('company_name')
                                <div class="invalid-feedback">
                                    <i class="bx bx-radio-circle"></i>
                                    {{ $message }}
                                </div>
                            @enderror

                            <label>Company Address: </label>
                            <div class="form-group">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Enter the Company Address"
                                        id="floatingTextarea" name="company_address"></textarea>
                                </div>
                            </div>
                            @error('company_address')
                                <div class="invalid-feedback">
                                    <i class="bx bx-radio-circle"></i>
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-sm-6">
                            <label>Director Name: </label>
                            <div class="form-group">
                                <input type="text" placeholder="Enter the Director Name" class="form-control"
                                    name="director_name">
                            </div>
                            @error('director_name')
                                <div class="invalid-feedback">
                                    <i class="bx bx-radio-circle"></i>
                                    {{ $message }}
                                </div>
                            @enderror

                            <label>Director Phone: </label>
                            <div class="form-group">
                                <input type="text" placeholder="Enter the Director Phone" class="form-control"
                                    name="director_phone">
                            </div>
                            @error('director_phone')
                                <div class="invalid-feedback">
                                    <i class="bx bx-radio-circle"></i>
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-sm-6">
                            <label>Start Project: </label>
                            <div class="form-group">
                                <input type="date" class="form-control" name="start_date">
                            </div>
                            @error('start_date')
                                <div class="invalid-feedback">
                                    <i class="bx bx-radio-circle"></i>
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-sm-6">
                            <label>End Project: </label>
                            <div class="form-group">
                                <input type="date" class="form-control" name="end_date">
                            </div>
                            @error('end_date')
                                <div class="invalid-feedback">
                                    <i class="bx bx-radio-circle"></i>
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button class="btn btn-primary ml-1" type="submit">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block"><i class="fa-solid fa-floppy-disk"></i> Save</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade text-left w-100" id="formModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33" id="formTitle">Form Edit Project</h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close" id="closeFormModal">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <form action="#" id="put-form">
                @csrf
                <div class="modal-body">

                    <label>Project Name : </label>
                    <div class="form-group">
                        <input type="text" placeholder="Enter the Project Name" class="form-control"
                            name="project_name_edit">
                    </div>
                    @error('project_name')
                        <div class="invalid-feedback">
                            <i class="bx bx-radio-circle"></i>
                            {{ $message }}
                        </div>
                    @enderror

                    <div class="row">

                        <div class="col-sm-6">
                            <label>Company Name: </label>
                            <div class="form-group">
                                <input type="text" placeholder="Enter the Company Name" class="form-control"
                                    name="company_name_edit">
                            </div>
                            @error('company_name_edit')
                                <div class="invalid-feedback">
                                    <i class="bx bx-radio-circle"></i>
                                    {{ $message }}
                                </div>
                            @enderror

                            <label>Company Address: </label>
                            <div class="form-group">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Enter the Company Address"
                                        id="floatingTextarea" name="company_address_edit"></textarea>
                                </div>
                            </div>
                            @error('company_address_edit')
                                <div class="invalid-feedback">
                                    <i class="bx bx-radio-circle"></i>
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-sm-6">
                            <label>Director Name: </label>
                            <div class="form-group">
                                <input type="text" placeholder="Enter the Director Name" class="form-control"
                                    name="director_name_edit">
                            </div>
                            @error('director_name_edit')
                                <div class="invalid-feedback">
                                    <i class="bx bx-radio-circle"></i>
                                    {{ $message }}
                                </div>
                            @enderror

                            <label>Director Phone: </label>
                            <div class="form-group">
                                <input type="text" placeholder="Enter the Director Phone" class="form-control"
                                    name="director_phone_edit">
                            </div>
                            @error('director_phone_edit')
                                <div class="invalid-feedback">
                                    <i class="bx bx-radio-circle"></i>
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-sm-6">
                            <label>Start Project: </label>
                            <div class="form-group">
                                <input type="date" class="form-control" name="start_date_edit">
                            </div>
                            @error('start_date_edit')
                                <div class="invalid-feedback">
                                    <i class="bx bx-radio-circle"></i>
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-sm-6">
                            <label>End Project: </label>
                            <div class="form-group">
                                <input type="date" class="form-control" name="end_date_edit">
                            </div>
                            @error('end_date_edit')
                                <div class="invalid-feedback">
                                    <i class="bx bx-radio-circle"></i>
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button class="btn btn-primary ml-1" type="submit">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block"><i class="fa-solid fa-floppy-disk"></i> Save</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade text-left w-100" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">Detail Project</h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div>
                <div class="modal-body">

                    <label><b> Project Name : </b></label>
                    <div class="form-group">
                        <p class="form-control-static" id="project_name_detail">Alpha Build</p>
                    </div>

                    <div class="row">

                        <div class="col-sm-8">
                            <label><b> Company Name : </b></label>
                            <div class="form-group">
                                <p class="form-control-static" id="company_name_detail">Alpha Build</p>
                            </div>

                            <label><b> Company Address : </b></label>
                            <div class="form-group">
                                <div class="form-floating">
                                    <p class="form-control-static" id="company_address_detail">Lorem ipsum dolor sit amet
                                        consectetur adipisicing elit. Velit maxime aut ipsam explicabo, cum consequuntur
                                        numquam dolorem harum asperiores omnis? Repellendus quasi harum consequuntur
                                        eveniet saepe voluptates quos placeat odit.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <label><b> Director Name : </b></label>
                            <div class="form-group">
                                <p class="form-control-static" id="director_name_detail">John Doe</p>
                            </div>

                            <label><b> Director Phone : </b></label>
                            <div class="form-group">
                                <p class="form-control-static" id="director_phone_detail">089213182731</p>
                            </div>
                        </div>

                        <hr>

                        <div class="col-sm-8">
                            <label><b> Start Project : </b></label>
                            <div class="form-group">
                                <p class="form-control-static" id="start_project_detail">10-01-2023</p>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <label><b> End Project : </b></label>
                            <div class="form-group">
                                <p class="form-control-static" id="end_project_detail">10-05-2023</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    {{-- <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#formModalEdit"
                        id="buttonEdit">
                        <i class="fa-solid fa-plus"></i> Add</a> --}}
                    <button type="button" class="btn btn-warning ml-1" data-bs-toggle="modal" data-bs-target="#formModalEdit"
                    id="buttonEdit">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block"><i class="fa-solid fa-pen"></i> Edit</span>
                    </button>
                    <button type="button" class="btn btn-danger ml-1" data-bs-dismiss="modal">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block"><i class="fa-solid fa-trash"></i> Delete</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade text-left w-100" id="docModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">Form Document Activity</h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close" id="closeDetail">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <form action="#" id="docForm">
                <input type="text" style="display: none">
                <div class="modal-body">
                    <label><b> Project Name : </b></label>
                    <div class="form-group">
                        <p class="form-control-static" id="project_name">Alpha Build</p>
                    </div>
                    <hr>
                    <label><b> Title : </b></label>
                    <div class="form-group">
                        <input type="text" placeholder="Enter the Title Document" class="form-control">
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <label><b> Category : </b></label>
                            <fieldset class="form-group">
                                {{-- Bast, kick off, spektek, TOR, uji fungsi barang, uji fungsi aplikasi, berita acara, addendum --}}
                                <select class="form-select" id="basicSelect">
                                    <option value="#">Select Category</option>
                                    <option value="BAST">BAST</option>
                                    <option value="Kick Off">Kick Off</option>
                                    <option value="Spektek">Spektek</option>
                                    <option value="TOR">TOR</option>
                                    <option value="Uji Fungsi Barang">Uji Fungsi Barang</option>
                                    <option value="Uji Fungsi Aplikasi">Uji Fungsi Aplikasi</option>
                                    <option value="Berita Acara">Berita Acara</option>
                                    <option value="Addendum">Addendum</option>
                                </select>
                            </fieldset>
                        </div>
                        <div class="col-sm-6">
                            <input type="file" class="basic-filepond">
                        </div>
                        <div class="col-sm-2">
                            <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#formModal">
                                <i class="fa-solid fa-plus"></i> Add
                            </a>
                        </div>
                    </div>
                    <hr>
                    <label><b> Category : </b></label>
                    <fieldset class="form-group">
                        {{-- Bast, kick off, spektek, TOR, uji fungsi barang, uji fungsi aplikasi, berita acara, addendum --}}
                        <select class="form-select" id="basicSelect">
                            <option value="#">Select Category</option>
                            <option value="BAST">BAST</option>
                            <option value="Kick Off">Kick Off</option>
                            <option value="Spektek">Spektek</option>
                            <option value="TOR">TOR</option>
                            <option value="Uji Fungsi Barang">Uji Fungsi Barang</option>
                            <option value="Uji Fungsi Aplikasi">Uji Fungsi Aplikasi</option>
                            <option value="Berita Acara">Berita Acara</option>
                            <option value="Addendum">Addendum</option>
                        </select>
                    </fieldset>
                    <div class="row mb-2">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-6">
                            <table>
                                <tr>
                                    <td><i class="fa-solid fa-file-pdf"></i></td>
                                    <td width="400px">File.pdf</td>
                                    <td>
                                        <button type="button" class="btn btn-warning ml-1 btn-sm">
                                            <i class="bx bx-check d-block d-sm-none"></i>
                                            <span class="d-none d-sm-block"><i class="fa-solid fa-pen"></i></span>
                                        </button>
                                        <button type="button" class="btn btn-danger ml-1 btn-sm">
                                            <i class="bx bx-check d-block d-sm-none"></i>
                                            <span class="d-none d-sm-block"><i class="fa-solid fa-trash"></i></span>
                                        </button>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-sm-3"></div>
                    </div>
                </div>

                {{-- <div class="modal-footer">
                <button type="button" class="btn btn-primary ml-1" data-bs-dismiss="modal">
                    <i class="bx bx-check d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Accept</span>
                </button>
            </div> --}}
            </form>
        </div>
    </div>
</div>


<script src="{{ asset('assets/vendors/simple-datatables/simple-datatables.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    let id_project = 0;
    $(document).ready(function () {
        let data_projects = [];
        loadProjects();
        // console.log('CSRF Token:', '{{ csrf_token() }}');
        // let table1 = document.querySelector('#table1');
        // let dataTable = new simpleDatatables.DataTable(table1);
    });

    $('#closeFormModal').click(function () {
        clearForm();
        $('.invalid-feedback').remove(); // Remove error messages
        $('.form-control').removeClass('is-invalid');
    });

    function clearForm() {
        document.getElementById("post-form").reset();
    }

    function loadProjects() {
        $("#table-body").empty();

        $.ajax({
            url: "http://doc-center-backend.test/api/v1/projects", // Replace with your API URL
            type: "GET",
            dataType: "json",
            success: function (response) {
                data_projects = response.data;
                // console.log(data_projects);
                if (!response || !response.data) {
                    console.error("Invalid API response:", response);
                    return;
                }

                let rows = ""; // Variable to store generated rows

                $.each(response.data, function (index, project) {
                    rows += `
                    <tr>
                        <td>${index + 1}</td>
                        <td>${project.project_name}</td>
                        <td>${project.company_name}</td>
                        <td>${project.director_name}</td>
                        <td>${project.start_date}</td>
                        <td>
                            <span class="badge ${project.status === 'Active' ? 'bg-success' : 'bg-danger'}">
                                ${project.status}
                            </span>
                        </td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning rounded-pill" data-bs-toggle="modal"
                                data-bs-target="#detailModal" onclick="detailModal(${project.id})">
                                <i class="fa-solid fa-ellipsis-vertical"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-info rounded-pill" data-bs-toggle="modal"
                                data-bs-target="#docModal" data-id="${project.id}">
                                <i class="fa-solid fa-file"></i>
                            </a>
                        </td>
                    </tr>`;
                });

                $("#table-body").html(rows);

                let table1 = document.querySelector('#table1');
                let dataTable = new simpleDatatables.DataTable(table1);
            },
            error: function (xhr, status, error) {
                console.error("AJAX Error:", status, error);
            }
        });
    }

    function detailModal(id) {
        let project = data_projects.find(project => project.id === id);
        // console.log(project);

        $("#project_name_detail").text(project.project_name);
        $("#company_name_detail").text(project.company_name);
        $("#company_address_detail").text(project.company_address);
        $("#director_name_detail").text(project.director_name);
        $("#director_phone_detail").text(project.director_phone);
        $("#start_project_detail").text(project.start_date);
        $("#end_project_detail").text(project.end_date);
        document.getElementById("buttonEdit").setAttribute("onclick", "setId(" + project.id + ")");
    }

    function closeDetailModal() {
        document.getElementById("closeDetail").click();
    }
    function setId(id) {
        closeDetailModal();
        // document.getElementBy
        // Id("addButton").setAttribute("onclick", "set(" + id + ")");
        id_project = id;
        console.log("ID PROJECT : "+id_project);

        if (id_project > 0) {
            // Load project data
            let project = data_projects.find(project => project.id === id);
            // console.log(project);

            document.querySelector('input[name="project_name_edit"]').value = project.project_name;
            document.querySelector('input[name="company_name_edit"]').value = project.company_name;
            document.querySelector('textarea[name="company_address_edit"]').value = project.company_address;
            document.querySelector('input[name="director_name_edit"]').value = project.director_name;
            document.querySelector('input[name="director_phone_edit"]').value = project.director_phone;
            document.querySelector('input[name="start_date_edit"]').value = project.start_date;
            document.querySelector('input[name="end_date_edit"]').value = project.end_date;
        } else {
            clearForm();
        }

        // document.getElementById("addButton").setAttribute("onclick", "set(0)");
    }

    function updateProject(formData){
        $.ajax({
            url: "{{ route('project.update', ['id' => ':id']) }}".replace(':id', id_project),
            type: 'POST',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: {
                "data": formData,
                "_token": '{{ csrf_token() }}',
            },
            processData: false,
            contentType: false,
            success: function (response) {
                alert('Project updated successfully!');
                location.reload(); // Reload data to reflect changes
            },
            error: function (xhr) {
                console.log('{{ csrf_token() }}');
                if (xhr.status === 422) {
                    let errors = xhr.responseJSON.errors; // Get Laravel validation errors

                    // Clear previous error messages
                    $('.invalid-feedback').remove();
                    $('.form-control').removeClass('is-invalid');
                    // Loop through errors and display them
                    $.each(errors, function (key, messages) {
                        let inputField = $(`[name="${key}"]`);
                        inputField.addClass('is-invalid'); // Add red border
                        inputField.after(`<div class="invalid-feedback">${messages[0]}</div>`);
                    });
                }else{
                    alert('Something went wrong. Please try again.');
                }
            }});
    }

    function submitPostForm(formData) {
        console.log("id_project : " + id_project);

        $.ajax({
            url: '{{ route('project.store') }}',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function (response) {
                // $('#formModal').modal('hide'); // Close modal on success
                alert('Project saved successfully!');
                location.reload(); // Reload data to reflect changes
            },
            error: function (xhr) {
                if (xhr.status === 422) {
                    let errors = xhr.responseJSON.errors; // Get Laravel validation errors

                    // Clear previous error messages
                    $('.invalid-feedback').remove();
                    $('.form-control').removeClass('is-invalid');

                    // Loop through errors and display them
                    $.each(errors, function (key, messages) {
                        let inputField = $(`[name="${key}"]`);
                        inputField.addClass('is-invalid'); // Add red border
                        inputField.after(`<div class="invalid-feedback">${messages[0]}</div>`);
                    });
                } else {
                    alert('Something went wrong. Please try again.');
                }
            }
        });
    }

    // Handle Form Submit
    $('#post-form').on('submit', function (e) {
        // console.log("submit clicked");
        e.preventDefault();

        var formData = new FormData(this); // Gunakan FormData untuk semua input (termasuk file)

        // Tambahkan CSRF token jika mengakses Laravel langsung
        // formData.append('_token', '{{ csrf_token() }}');

            submitPostForm(formData);
    });

    $('#put-form').on('submit', function (e) {
        // console.log("submit clicked");
        e.preventDefault();

        var formData = new FormData(this); // Gunakan FormData untuk semua input (termasuk file)

        // Tambahkan CSRF token jika mengakses Laravel langsung
        // formData.append('_token', '{{ csrf_token() }}');

            updateProject(formData);
    });

</script>
@endsection
