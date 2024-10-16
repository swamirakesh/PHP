<?php
function singleLineString()
{
    $name='Rakesh, a good boy!';
    echo $name;
}
function doubleLineString()
{
    $age=21;
    $name="Rakesh";
    echo "My name is <b>$name</b> & age is <b>$age</b>";
}
function heredoc()
{
    $str=<<<tem
        India is my country. All indian are my brothers and sisters.
        tem;
    echo $str;
}
function newdoc()
{
    $pledge=<<<'india'
    India is my country. All Indians are my brothers and sister.
    india;
    echo $pledge;
}
function stringSplit()
{
    $name="Rakesh";
    $splitName=str_split($name);
    print_r($splitName);
}//split the string indexwise
function joinArray()
{
    $nameArray=array("Rakesh","Ramesh","Sonali");
    echo join("-",$nameArray);
}
function stringCompare()
{
    $name1="Rakesh";//if not=-1
    $name2="Ramesh";//if equal=0
    $result=strcmp($name1,$name2);
    echo $result;
}
function stringReplace()
{
    $name="Rakesh Swami";
    $replacedName=str_replace("Swami","Sharma",$name);
    echo $replacedName;
}
function subtractString()
{
    $name="Rakesh";
    $subName=substr($name,0,2);
    echo $subName;
}
function stringLength()
{
    $name="Rakesh";
    echo strlen($name);
}
function wordCount()
{
    $paragraph="India is my country.";//Output: 4
    echo str_word_count($paragraph);
}
function strReverse()
{
    $name="Rakesh";
    echo strrev($name);//Output: hsekaR
}
function stringPosition()
{
    $aboutIndia="India is developing country!";
    $findValue="is";
    $stringPosition=strpos($aboutIndia,$findValue);
    echo $stringPosition;//Output: 6
}
//singleLineString();
//doubleLineString();
//heredoc();
//newdoc();
//stringSplit();
//joinArray();
//stringCompare();
//stringReplace();
//subtractString();
//stringLength();
//wordCount();
//strReverse();
//stringPosition();
//----------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------Regular Expression-------------------------//
function pregMatch()
{
    $paragraph="India is my country. All Indians are my brothers and sisters. India is the best!";
    $exp=preg_match("/is/",$paragraph,$array);//Output: Match Found!
    if($exp)
    {
        echo "Match Found!";
    }
    else
    {
        echo "Match Not Found!";
    }
}
function pregMatchAll()//search entire string.
{
    $str="is is is is is is is is is is";
    preg_match_all("/is/",$str,$array);
    //used <pre> tag for better formating.
    echo"<pre>";
    print_r($array);
    echo"</pre>";
}
function pregMatchAll1()
{
    $name="Rakesh Ramesh Radhika Reshma Rupali Rani";
    preg_match_all("/[Ra]/",$name,$array);
    echo"<pre>";
    print_r($array);
    echo "</pre>";
}
function iModifier()//i make case insensitive
{
    $name="Rakesh Swami";
    $exp=preg_match("/rakesh/i",$name);
    if($exp)
    {
        echo "Match found!";
    }
    else
    {
        echo "Match Not Found!";
    }

}
//pregMatch();
//pregMatchAll();
//iModifier();
//pregMatchAll1();
//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
                                                 // File handling//
function _readFile()
{
    //$a=readfile("raw.txt");
    //echo $a;
    //It show how many characters it has been read, to  avoid that we only use readfile("raw.txt");
    readfile("raw.txt");
}
function _fopen()
{
    //"fgets" function read line by line not character by character
    $fptr=fopen("raw.txt","r");
    echo fgets($fptr);//will print 1st line
    echo fgets($fptr);//will print 2nd line
    echo fgets($fptr);//will print 3rd line
}
function _fgetc()
{
    $fptr=fopen("myFile.txt","r");
    //echo fgetc($fptr);
    while($ch=fgetc($fptr))
        echo $ch;
    fclose($fptr);//closed open file after doing operations on file. It is good practice.
}
function _writeMode()
{
    $filePointer=fopen("myFile.txt","w");
    $text="Author: Rakesh Swami";
    fwrite($filePointer,$text);//It will overwrite.
    fclose($filePointer);
    $filePointer1=fopen("myFile.txt","r");
    echo fgets($filePointer1);
}
function appendMode()
{
    $filePointer=fopen("myFile.txt","a");//File oppened in append mode.
    fwrite($filePointer,"My name is Neel.");
    fclose($filePointer);
    $filePointer=fopen("myFile.txt","r");//File opened in read mode only.
    echo fgets($filePointer);
}
function _unlinkFunction()
{
    $filePointer=unlink("myFile.txt");//This function will deleted the file from your storage.
    if($filePointer)
    {
        echo "File deleted!";
    }
    else
    {
        echo "Error!";
    }
}
//_readFile();
//_fopen();
//_fgetc();
//_writeMode();
//appendMode();
//_unlinkFunction();
/*-----------------------------------------------------------------------------------------------*/
/*-----------------------Directories in PHP------------------------------------------------------*/
function createDirectory()//To create directory
{
    mkdir("Sample");//It will create new folfer in your htdocs folder named "Sample".
}
function scanDirectory()
{
    $fileDirectory="C:\Rakesh Swami";
    $files=scandir($fileDirectory);//It returns array of files.
    foreach($files as $file)
    {
        echo $file."<br>";
    }
}
function openDirectory()
{
    $directory="C:\Rakesh Swami";
    $dirHandle=opendir($directory);
    if($dirHandle)
    {
        while(($file=readdir($dirHandle))!=false)
            echo "$file<br>";
    }
}
function removeDirectory()
{
    rmdir("Sample");
}
function appendFile()
{
    $fptr=fopen("Index.txt","a");
    $count=1;
    fwrite($fptr,$count);
    fclose($fptr);
    $fptr=fopen("Index.txt","r");
    echo fgets($fptr);
    fclose($fptr);
}
//createDirectory();
//scanDirectory();
//openDirectory();
//removeDirectory();
//appendFile();
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
//------------------------Error and exception handling----------------------------------------------------------------------
function fileExists()
{
    if(file_exists("Index.txt"))
    {
        $filePointer=fopen("Index.txt","r");
        echo fgets($filePointer);
    }
    else
    {
        die("Error: File not found!");
    }
}
//fileExists();

?>
