<?php
// https://github.com/aivis/PHP-file-upload-class
echo "array del post \n";
print_r($_POST);


echo "metodo \n";
print_r(
$_SERVER['REQUEST_METHOD']
);


echo "\n contenuto di titolo \n";
var_dump(
    $_POST['Titolo']
);
var_dump(
    isset($_POST['Titolo'])
);

var_dump(
    $_POST['Titolo'] == ''
);

var_dump(
    empty($_POST['Titolo'])
);


// per il form 
