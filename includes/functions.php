<?php
function outputAcronyms(){
    $acronyms = array(
        'HTML',
        'CSS',
        'JS',
        'PHP',
        'JSX',
        'ES6',
        'SASS',
        'PWA',
        'CMS',
        'API',
        'REST',
        'JSON',
        'LESS',
        'SDK',
        'MVC',
        'IoT',
        'BEM',
        'CURL',
        'CDN',
        'TDD',
        'SSH',
        'OOP',
        'GUI',
        'SQL',
        'SEO',
        'WCAG',
        'MVP',
        'CLI',
        'WIP',
        'XML',
        'HTTPS',
        'URL',
        'DNS',
        'YML'
    );

    foreach($acronyms as $k=>$v){
        echo '<span class="a'.$k.'">'.$v.'</span>';
    }
}
?>
