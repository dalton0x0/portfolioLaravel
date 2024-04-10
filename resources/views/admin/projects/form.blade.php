@extends('layouts.admin.base')

@section('title', 'Administration')

@section('content')
    <div class="my-5">
        <div class="container p-4">
            <div class="row justify-content-md-center">
                <div class="col-md-12">
                    <div class="text-center mb-5">
                        <h1 class="display-5 fw-bolder">
                            <span class="text-gradient d-inline">{{ $project->exists ? 'Modifier : ' . $project->title : 'Créer un project' }}</span>
                        </h1>
                    </div>
                    <form action="{{ route($project->exists ? 'admin.projects.update' : 'admin.projects.store', $project) }}" method="post" id="ProjectContent">
                        @csrf
                        @method($project->exists ? 'put' : 'post')
                        @include('partials.input', ['name' => 'title', 'label' => 'Titre du projet', 'placeholder' => 'Titre du projet'])
                        @include('partials.input', ['type' => 'textarea', 'name' => 'content', 'label' => 'Contenu', 'placeholder' => 'Contenu'])
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
            file_picker_callback: (callback, value, meta) => {
                // Provide file and text for the link dialog
                if (meta.filetype == 'file') {
                    callback('mypage.html', { text: 'My text' });
                }

                // Provide image and alt text for the image dialog
                if (meta.filetype == 'image') {
                    callback('myimage.jpg', { alt: 'My alt text' });
                }

                // Provide alternative source and posted for the media dialog
                if (meta.filetype == 'media') {
                    callback('movie.mp4', { source2: 'alt.ogg', poster: 'image.jpg' });
                }
            }
        });

        document.getElementById('ProjectContent').addEventListener('submit', function(event) {
            var content = tinymce.get('content').getContent();
            document.getElementById('content').value = content;
        });

    </script>
@endsection
