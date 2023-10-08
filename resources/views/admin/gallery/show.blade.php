@extends('admin.layout')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-head container-fluid">
                <div class="row">
                    <div class="col-6 pl-0">
                        <h4 class="page-title"><i class="fe-image"></i><a href="{{route('admin.gallery.index')}}">Galeria</a><span class="d-inline-flex me-2 ms-2">/</span>{{$gallery->name}}</h4>
                    </div>
                    <div class="col-6 d-flex justify-content-end align-items-center form-group-submit">
                        <button data-bs-toggle="modal" data-bs-target="#bootstrapmodal" class="btn btn-primary me-2">Dodaj zdjęcie</button>
                        <button data-bs-toggle="modal" data-bs-target="#videogallerymodal" class="btn btn-primary">Dodaj film</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mt-3">
            <div class="card-body card-body-rem p-0">
                <div class="table-overflow">
                    <div class="container-fluid container-gallery">
                        <ul id="sortable" class="mb-0 list-unstyled clearfix">
                            @foreach ($gallery->photos as $index => $p)
                                <li id="recordsArray_{{ $p->id }}">
                                    <div class="card thumb-card">
                                        <img class="img-fluid" src="/uploads/gallery/images/thumbs/{{$p->file}}" alt="{{ $p->name }}">
                                        <div class="card-body">
                                            <div class="btn-group">
                                                @if(!$p->url)
                                                <a href="{{route('admin.image.edit', $p->id)}}" class="btn action-button action-small me-1" data-toggle="tooltip" data-placement="top" title="Edytuj zdjęcie"><i class="fe-edit"></i></a>
                                                @endif
                                                <a href="" class="btn action-button move-button action-small me-1"><i class="fe-move"></i></a>
                                                <form method="POST" action="{{route('admin.image.destroy', $p->id)}}">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                    <button type="submit" class="btn action-button action-small confirm" data-toggle="tooltip" data-placement="top" data-id="{{ $p->id }}" title="Usuń zdjęcie"><i class="fe-trash-2"></i></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group form-group-submit">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 d-flex justify-content-end">
                    <button data-bs-toggle="modal" data-bs-target="#bootstrapmodal" class="btn btn-primary">Dodaj zdjęcie</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade modal-form" id="bootstrapmodal" tabindex="-1" role="dialog" aria-labelledby="uploadlabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="uploadlabel">Dodaj zdjęcia</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fe-x"></i></button>
                </div>
                <div class="modal-body">
                    <div id="jquery-wrapped-fine-uploader"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zamknij</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="videogallerymodal" tabindex="-1" role="dialog" aria-labelledby="uploadvideolabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <form action="" method="post" id="videoForm">
                @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="uploadvideolabel">Dodaj film</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fe-x"></i></button>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-danger" style="display:none"></div>
                        <div class="modal-form container">

                            <div class="form-group row">
                                <div class="col-6">
                                    <div class="row">
                                        <label for="inputTitle" class="col-12 col-form-label control-label required mb-2 justify-content-start">Nazwa<span class="text-danger d-inline w-auto ps-1">*</span>
                                        </label>
                                        <div class="col-12">
                                            <input type="text" class="validate[required] form-control @error('file_alt') is-invalid @enderror" id="inputTitle" name="file_alt" value="" required>
                                            @if($errors->first('file_alt'))
                                                <div class="invalid-feedback d-block">{{ $errors->first('file_alt') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="row">
                                        <label for="inputUrl" class="col-12 col-form-label control-label required mb-2 justify-content-start">Link<span class="text-danger d-inline w-auto ps-1">*</span>
                                        </label>
                                        <div class="col-12">
                                            <input type="text" class="validate[required] form-control @error('url') is-invalid @enderror" id="inputUrl" name="url" value="" required>
                                            @if($errors->first('url'))
                                                <div class="invalid-feedback d-block">{{ $errors->first('url') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="gallery_id" value="{{$gallery->id}}">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zamknij</button>
                        <button type="submit" class="btn btn-primary">Zapisz</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="{{ asset('/js/fineuploader.js') }}" charset="utf-8"></script>
    <script type="text/javascript">
        //<![CDATA[
        $(document).ready(function(){
            $("#sortable").sortujGal('{{route('admin.image.sort')}}');
        });
        //]]>
        $('#bootstrapmodal').on('shown.bs.modal', function () {
            let fileCount = 0;
            $('#jquery-wrapped-fine-uploader').fineUploader({
                debug: true,
                multiple: true,
                text: {
                    uploadButton: "Wybierz plik",
                    dragZone: "Przeciągnij i upuść plik tutaj"
                },
                request: {
                    endpoint: '{{route('admin.image.store')}}',
                    customHeaders: {
                        "X-CSRF-Token": $("meta[name='csrf-token']").attr("content")
                    },
                    params: {
                        gallery: "{{$gallery->id}}"
                    }
                }
            }).on('error', function (event, id, name, reason) {
            }).on('submit', function () {
                fileCount++;
            }).on('complete', function (event, id, name, response) {
                if (response.success === true) {
                    fileCount--;
                    if (fileCount === 0) {
                        location.reload();
                    }
                }
            });
        });

        const videoForm = document.getElementById('videoForm');
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        $('#videogallerymodal').on('shown.bs.modal', function () {
            videoForm.addEventListener('submit', function (e) {
                e.preventDefault();
                const formData = new FormData(videoForm);
                const xhr = new XMLHttpRequest();
                xhr.open('POST', '{{ route('admin.galleryVideo.store') }}', true);
                xhr.setRequestHeader('X-CSRF-TOKEN', csrfToken);

                xhr.onload = function () {
                    if (xhr.status >= 200 && xhr.status < 300) {
                        // Request was successful
                        console.log('Data sent successfully');

                    } else {
                        if (xhr.response) {
                            const responseData = JSON.parse(xhr.response);
                            if (responseData.success === false && responseData.message === "Validation errors") {
                                const alert = $('#videogallerymodal .alert');
                                alert.html('');
                                $.each(responseData.data, function (key, value) {
                                    alert.show();
                                    alert.append('<span>' + value[0] + '</span>');
                                });
                            }
                        }
                    }
                };
                xhr.send(formData);
            });
        });
    </script>
@endpush
