<?= $this->Html->script('https://cdn.ckeditor.com/ckeditor5/11.2.0/classic/ckeditor.js',['block' => 'script']); ?>
<?= 
    $this->Html->scriptBlock("
        ClassicEditor
            .create( document.querySelector( '#editor-um' ) )
            .catch( error => {
                console.error( error );
            } );
        ClassicEditor
            .create( document.querySelector( '#editor-dois' ) )
            .catch( error => {
                console.error( error );
            } );
        ClassicEditor
            .create( document.querySelector( '#editor-tres' ) )
            .catch( error => {
                console.error( error );
            } );
    ", ['block' => 'script']);
?>