<?php
function outputAcronyms(){
    $acronyms = array(
        'PHP',
        'HTML',
        'CSS',
        'SASS',
        'CMS',
        'PDF',
        'AJAX',
        'SEO',
        'DNS',
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
        'SSH',
        'WWW',
        'API',
        'CLI',
        'JS',
        'XML',
        'HTTP',
        'PSD',
        'RSS',
        'MAMP'
    );
    foreach($acronyms as $k=>$v){
        echo '<span class="a'.$k.'">'.$v.'</span>';
    }
}
?>
