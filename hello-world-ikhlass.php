<?php
// A simple web site in Cloud9 that runs through Apache
// Press the 'Run' button on the top to start the web server,
// then click the URL that is emitted to the Output tab of the console

echo 'Hello world from Cloud9!';

/**
 * Print the content of an article specified by its id
 * 
 * @param {Int} $id
 */
function show ($id) {
    //retrive article from db
    $article = Article::find($id);
    
    //check if id correspond to an existing article 
    if ($article) {
        
    } else {
        //retrive article author
        $author = User::findOrFail($article->author_id);
    }
}


function index () {
    
}

?>
