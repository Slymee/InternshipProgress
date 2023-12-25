<?php
    //creating a file
    function createFileAndWrite(){
    $fileName = 'test.txt';
    $content = 'test example text';
    file_put_contents($fileName,$content);
    echo 'file created and written!!<br><br>';
    }
    createFileAndWrite();

    //read from file and append
    function readFileAndAppend(){
        $fileName = 'test.txt';
        $fileContent = file_get_contents($fileName);
        $newFileContent = 'the new updated content!';
        echo "reading content: ". $fileContent ."<br>";
        file_put_contents($fileName, $fileContent, $newFileContent, FILE_APPEND | LOCK_EX);
        echo "reading content after append: ". file_get_contents($fileName) ."<br><br>";
    }
    readFileAndAppend();


    //reading each character in a file
    function readCharacters(){
        $fileName = 'test.txt';
        $fileContent = file_get_contents($fileName);
        if ($fileContent !== false) {
            for ($i = 0; $i < strlen($fileContent); ++$i) {
                $currentCharacter = $fileContent[$i];
                echo $currentCharacter;
            }
        } else {
            echo 'Failed to read the file.';
        }
        echo "<br><br>";
    }
    readCharacters();


    //check existance and delete file
    function checkExistanceAndDeleteFile(){
        $fileName = 'text.txt';
        if (file_exists($fileName)) {
            unlink($fileName);
            echo 'File deleted successfully.';
        } else {
            echo 'File not found.';
        }
    }
    checkExistanceAndDeleteFile();

?>