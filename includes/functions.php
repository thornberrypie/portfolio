<?php
function outputAcronyms(){
    $acronyms = array(
        'PHP',
        'HTML',
        'CSS',
        'SQL',
        'CMS',
        'XML',
        'LAMP',
        'SEO',
        'JS',
        'MVC',
        'JSON',
        'LESS',
        'AJAX',
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
        'SASS',
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
