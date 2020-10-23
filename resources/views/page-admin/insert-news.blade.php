<link href='https://cdn.jsdelivr.net/npm/froala-editor@2.9.6/css/froala_editor.min.css' rel='stylesheet' type='text/css' />
<link href='https://cdn.jsdelivr.net/npm/froala-editor@2.9.6/css/froala_style.min.css' rel='stylesheet' type='text/css' />



<div id="froala-editor"></div>









<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/froala-editor@2.9.6/js/froala_editor.min.js'></script>
<script>
$('#froala-editor').froalaEditor() 
    .on('froalaEditor.contentChanged', function (e, editor) {
      $('#preview').html(editor.html.get());
    });
</script>