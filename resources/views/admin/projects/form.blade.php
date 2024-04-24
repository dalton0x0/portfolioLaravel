@extends('layouts.admin.base')

@section('title', 'Administration')

@section('content')
    <div class="my-5">
        <div class="container p-4">
            <div class="row justify-content-md-center">
                <div class="col-md-6">
                    <div class="text-center mb-5">
                        <h1 class="display-5 fw-bolder">
                            <span class="text-gradient d-inline">{{ $project->exists ? 'Modifier : ' . $project->title : 'Créer un project' }}</span>
                        </h1>
                    </div>
                    <form action="{{ route($project->exists ? 'admin.projects.update' : 'admin.projects.store', $project) }}" method="post" id="ProjectContent" enctype="multipart/form-data">
                        @csrf
                        @method($project->exists ? 'put' : 'post')

                        @if($project->exists)
                            @include('partials.input', ['value' => $project->title,'name' => 'title', 'label' => 'Titre du projet', 'placeholder' => 'Titre du projet'])
                            {{--@include('partials.input', ['value' => $project->content,'type' => 'textarea', 'name' => 'content', 'label' => 'Contenu', 'placeholder' => 'Contenu'])--}}
                            @include('partials.upload', ['name' => 'cover', 'label' => 'Cover du projet'])
                            <div class="p-2">
                                <img src="/covers/{{ $project->cover }}" class="image-fluid" width="500px" alt="cover">
                            </div>
                        @else
                            @include('partials.input', ['name' => 'title', 'label' => 'Titre du projet', 'placeholder' => 'Titre du projet'])
                            {{--@include('partials.input', ['type' => 'textarea', 'name' => 'content', 'label' => 'Contenu', 'placeholder' => 'Contenu'])--}}
                            @include('partials.upload', ['name' => 'cover', 'label' => 'Cover du projet'])
                        @endif
                        <div>
                            <a href="{{ route('admin.projects.index') }}" class="btn btn-primary me-2 rounded">
                                <i class="bi-arrow-left-short"></i>
                            </a>
                            @if($project->exists)
                                <button class="btn btn-outline-primary me-2 rounded" type="submit">
                                    <i class="bi-check2-circle"></i>
                                </button>
                            @else
                                <button class="btn btn-outline-success me-2 rounded" type="submit">
                                    <i class="bi-plus-circle"></i>
                                </button>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{--
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'autoresize | anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount linkchecker',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat | language',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
            mergetags_list: [
                { value: 'First.Name', title: 'First Name' },
                { value: 'Email', title: 'Email' },
            ],
            ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
            content_langs: [
                { title: 'French', code: 'fr' },
                { title: 'English (US)', code: 'en_US' },
                { title: 'English (UK)', code: 'en_UK' },
            ],
            spellchecker_language: 'fr',
            spellchecker_dialog: true,
            min_height: 500,
            autoresize_bottom_margin: 0,
            link_default_target: '_blank',
            language: 'fr_FR',
            image_title: true,
            automatic_uploads: true,
            images_upload_url: '/upload',
            file_picker_types: 'image',
            file_picker_callback: function(cb, value, meta) {
                var input = document.createElement('input');
                input.setAttribute('type', 'file');
                input.setAttribute('accept', 'image/*');
                input.onchange = function() {
                    var file = this.files[0];

                    var reader = new FileReader();
                    reader.readAsDataURL(file);
                    reader.onload = function () {
                        var id = 'blobid' + (new Date()).getTime();
                        var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                        var base64 = reader.result.split(',')[1];
                        var blobInfo = blobCache.create(id, file, base64);
                        blobCache.add(blobInfo);
                        cb(blobInfo.blobUri(), { title: file.name });
                    };
                };
                input.click();
            },
            images_upload_url : 'upload.php',
            automatic_uploads : false,

            images_upload_handler : function(blobInfo, success, failure) {
                var xhr, formData;

                xhr = new XMLHttpRequest();
                xhr.withCredentials = false;
                xhr.open('POST', 'upload.php');

                xhr.onload = function() {
                    var json;

                    if (xhr.status != 200) {
                        failure('HTTP Error: ' + xhr.status);
                        return;
                    }

                    json = JSON.parse(xhr.responseText);

                    if (!json || typeof json.file_path != 'string') {
                        failure('Invalid JSON: ' + xhr.responseText);
                        return;
                    }

                    success(json.file_path);
                };

                formData = new FormData();
                formData.append('file', blobInfo.blob(), blobInfo.filename());

                xhr.send(formData);
            },
        });

        document.getElementById('ProjectContent').addEventListener('submit', function(event) {
            var content = tinymce.get('content').getContent();
            document.getElementById('content').value = content;
        });
    </script>
    --}}
@endsection
