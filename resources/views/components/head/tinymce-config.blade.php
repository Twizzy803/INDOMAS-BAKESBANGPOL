<script src="{{ asset('assets/js/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>

<script>
    tinymce.init({
        selector: 'textarea#myeditorinstance',
        toolbar: 'undo redo | blocks| bold italic | bullist numlist checklist | code | table',
        promotion: false,
        branding: false,
    });
</script>