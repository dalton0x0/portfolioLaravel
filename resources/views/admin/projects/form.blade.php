@extends('layouts.admin.base')

@section('title', 'Administration')

@section('content')
    <div class="container p-4">
        <div class="row justify-content-md-center">
            <div class="col-md-12">
                <div class="text-center">
                    <h1>{{ $project->exists ? 'Modifier : ' . $project->name : 'Créer un project' }}</h1>
                </div>
                <form action="{{ route($project->exists ? 'admin.projects.update' : 'admin.projects.store', $project) }}" method="post">
                    @csrf
                    @method($project->exists ? 'put' : 'post')
                    @include('partials.input', ['name' => 'title', 'label' => 'Titre du projet', 'placeholder' => 'Titre du projet'])
                    @include('partials.input', ['type' => 'textarea','name' => 'content', 'label' => 'Contenu', 'placeholder' => 'Contenu'])
                    <div>
                        @if($project->exists)
                            <button class="btn btn-outline-primary me-2 rounded">
                                <i class="bi-check2-circle"></i>
                            </button>
                        @else
                            <button class="btn btn-outline-success me-2 rounded">
                                <i class="bi-plus-circle"></i>
                            </button>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage advtemplate ai mentions tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss markdown',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
            mergetags_list: [
                { value: 'First.Name', title: 'First Name' },
                { value: 'Email', title: 'Email' },
            ],
            ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
        });
    </script>
    {{--
    <div id="content"></div>
    <script>
        $('#content').summernote({
            placeholder: 'Hello Bootstrap 5',
            tabsize: 2,
            height: 100
        });
    </script>
    --}}
@endsection
