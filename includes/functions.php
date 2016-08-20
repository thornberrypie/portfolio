<?php
function outputAcronyms(){
    $acronyms = array(
        'PHP',
        'HTML',
        'CSS',
        'SASS',
        'CMS',
        'JS',
        'AJAX',
        'SEO',
        'XML',
        'MVC',
        'JSON',
        'LESS',
        'LAMP',
        'REST',
        'CDN',
        'OOP',
        'URL',
        'CURL',
        'GUI',
        'WYSIWYG',
        'SOAP',
        'AGILE',
        'GUI',
        'SQL',
        'YAML',
        'WWW',
        'PSD',
        'CLI',
        'PDF',
        'DNS',
        'HTTP',
        'API',
        'RSS',
        'MAMP'
    );
    foreach($acronyms as $k=>$v){
        echo '<span class="a'.$k.'">'.$v.'</span>';
    }
}
?>
