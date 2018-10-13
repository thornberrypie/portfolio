<?php
function outputAcronyms(){
    $acronyms = array(
        'PHP',
        'HTML',
        'CSS',
        'SASS',
        'CMS',
        'SEO',
        'AJAX',
        'JSX',
        'DNS',
        'MVC',
        'JSON',
        'LESS',
        'EDM',
        'REST',
        'CDN',
        'OOP',
        'URL',
        'CURL',
        'BEM',
        'TDD',
        'TLS',
        'SSL',
        'GUI',
        'SQL',
        'SSH',
        'WWW',
        'API',
        'CLI',
        'WIP',
        'XML',
        'HTTPS',
        'MVP',
        'ES6',
        'YML'
    );

    foreach($acronyms as $k=>$v){
        echo '<span class="a'.$k.'">'.$v.' </span>';
    }
}
?>
